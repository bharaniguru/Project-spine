<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Item Posting Sub Type Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Item Posting Sub Type Master <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Item Posting Sub Type Master</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/ItemPostingGroupMaster_Add');?>" class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">Item Group Code</label>
				<div class="col-md-5">
				    <input type="text" name="pg_code" placeholder="PG_CODE" id="pg_code" class="form-control">
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="pg_active" checked="checked" value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="pg_desc" placeholder="PG_DESC" id="pg_desc" class="form-control">
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
            pg_code: {
		message: 'The POSTING CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The POSTING CODE is required and can\'t be empty'
                    }
                }
            },
	    pg_active: {
		message: 'The POSTING ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The POSTING ACTIVE is required and can\'t be empty'
                    }
                }
            },
	    pg_desc: {
		message: 'The POSTING DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The POSTING DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    is_it_code: {
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

