<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Item Type Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Item Type Master <small> Check the details here...</small></h1>
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
		    <h4 class="panel-title">Edit Item Type Master</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/ItemTypeMaster_Edit');?>" class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">Item Type Code</label>
				<div class="col-md-5">
				    <input type="text" name="it_code" value="<?php echo $result[0]['IT_CODE']?>" placeholder="IT_CODE" id="ct_code" class="form-control" readonly>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="it_active" <?php echo ($result[0]['IT_ACTIVE_YN']=='Y'? 'checked' : '')?> value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="it_desc"  value="<?php echo $result[0]['IT_DESC']?>" placeholder="IT_DESC" id="ct_desc" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Parent Item Family</label>
				<div class="col-md-9">
				    <select class="form-control" name="it_if_code">
				    <?php foreach($result1 as $row) { ?>
				    	<option value="<?php echo $row['IF_CODE'] ?>" <?php if($result[0]['IT_IF_CODE']==$row['IF_CODE']) echo 'selected'?>><?php echo $row['IF_DESC'] ?></option>
				    <?php } ?>
				    </select>
				</div>
			    </div>
			    <fieldset>
                                <div class="col-md-offset-2 col-md-5">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" disabled>Reset</button>
                                    <input type="submit" name="Update" class="btn btn-sm btn-success" value="Update">
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
		message: 'The UOM CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM CODE is required and can\'t be empty'
                    }
                }
            },
	    item_active: {
		message: 'The UOM ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM ACTIVE is required and can\'t be empty'
                    }
                }
            },
	    if_desc: {
		message: 'The UOM DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    if_parent: {
		message: 'The UOM LOOSE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM LOOSE is required and can\'t be empty'
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

