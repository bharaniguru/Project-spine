<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 14/04/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Item Family Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Item Family Master <small> Enter the correct details here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<div class="col-md-12">
	    <!-- begin panel -->
	    <p style="color:red"><?php echo $error; ?></p>
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Add Item Family Master</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/ItemFamilyMaster_Add');?>" class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">Item Family Code</label>
				<div class="col-md-5">
				    <input type="text" name="if_code" placeholder="IF_CODE" id="if_code" class="form-control">
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="if_active" value="Y" checked>
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="if_desc" placeholder="IF_DESC" id="if_desc" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Parent Item Family</label>
				<div class="col-md-9">
				    <select class="form-control" name="if_parent">
					<option>Select</option>
					<?php foreach($result as $row) { ?>
					<option value="<?php echo $row['IF_CODE']?>"><?php echo $row['IF_DESC']?></option>
					<?php }?>
				    </select>
				</div>
			    </div>
			    <fieldset>
                                <div class="col-md-offset-2 col-md-5">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                    <input type="submit" name="save" class="btn btn-sm btn-success" value="Save">
                                </div>
                            </fieldset>
			</form>
		    </div>
		</div>
	    </div>
	    <!-- end panel -->
	</div>
	<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->

<script type="text/javascript">
$(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            if_code: {
		message: 'The ITEM FAMILY CODE is not valid',
                trigger:'blur',
		validators: {
		    
                    notEmpty: {
                        message: 'The ITEM FAMILY CODE is required and can\'t be empty'
                    },
		    remote: {
                        message: 'The ITEM FAMILY CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('InventoryController/ajaxItmFmlycodevalid')?>',
                        type: 'POST'
                    },
		    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/i,
                        message: 'The ITEM FAMILY CODE alphanumaric characters'
                    }
                }
            },
	    if_active: {
		message: 'The ITEM FAMILY ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM FAMILY ACTIVE is required and can\'t be empty'
                    }
                }
            },
	    if_desc: {
		message: 'The ITEM FAMILY DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM FAMILY DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    if_parent: {
		message: 'The ITEM FAMILY PARENT is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM FAMILY PARENT is required and can\'t be empty'
                    }
                }
            },
	}
    });
});

function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}
</script>

	
	
</body>

</html>

