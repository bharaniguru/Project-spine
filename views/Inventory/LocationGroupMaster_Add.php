<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Location Group Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Location Group Master <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Location Group Master</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/LocationGroupMaster_Add');?>" class="form-horizontal">
			    <div class="col-md-offset-1 col-md-7">
                            <div class="form-group">
				<label class="col-md-3 control-label">Location Group Code</label>
				<div class="col-md-5">
				    <input type="text" placeholder="LG_CODE" class="form-control text-uppercase" name="lg_code" id="lg_code"> 
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="lg_active" checked="checked" value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" placeholder="LG_DESC" name="lg_desc" id="lg_desc" class="form-control">
				</div>
			    </div>
                            <div class="form-group checkbox">
				<label class="col-md-3 control-label">Location Group Type</label>
				<div class="col-md-3">
				    <label class="radio-inline">
                                            <input type="radio"  value="S" name="lgt">
                                            Stocking Group
                                    </label>
				</div>
				<div class="col-md-3">
				    <label class="radio-inline">
                                            <input type="radio" value="C" name="lgt">
                                            Costing Group
                                    </label>
				</div>
			    </div>
                            </div>
                            <div class="col-md-offset-1 col-md-7 p-t-5">
			    <fieldset>
                                <div class="col-md-offset-2 col-md-5">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                    <input type="submit" name="save" class="btn btn-sm btn-success" value="Save">
                                </div>
                            </fieldset>
                           </div> 
			</form>
		    
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
            lg_code: {
		message: 'The LOCATION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION CODE is required and can\'t be empty'
                    },
		    regexp: {
                        regexp:  /^[\w]+$/,
                        message: 'The LOCATION CODE Should not Contain spaces and Special Character'
                    }
                }
            },
	    lg_desc: {
		message: 'The ITEM DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    stock_group: {
		message: 'The ITEM UOM CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM UOM CODE is required and can\'t be empty'
                    }
                }
            },
            cost_group: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
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

