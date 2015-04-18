<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Item Type Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Item Type Master <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Item Type Master</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/ItemTypeMaster_Add');?>" class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">Item Type Code</label>
				<div class="col-md-5">
				    <input type="text" name="it_code" placeholder="IT_CODE" id="it_code" class="form-control">
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="it_active" value="Y" checked="checked">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="it_desc" placeholder="IT_DESC" id="it_desc" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Parent Item Family</label>
				<div class="col-md-9">
				    <select class="form-control" name="it_if_code">
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
            it_code: {
		message: 'The ITEM CODE code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM CODE is required and can\'t be empty'
                    }
                }
            },
	    it_desc: {
		message: 'The ITEM DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    it_if_code: {
		message: 'The PARENT ITEM FAMILY is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The PARENT ITEM FAMILY is required and can\'t be empty'
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

