<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add UOM</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add UOM <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add UOM</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/UomMaster_Add');?>" class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">UOM Code</label>
				<div class="col-md-5">
                                    <input type="text" name="uom_code"  class="form-control" placeholder="UOM CODE" id="uom_code">
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="uom_active" checked="checked"  value="Y">
                                    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
                                    <input type="text" name="uom_desc" placeholder="UOM DESC" class="form-control" id="uom_desc">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Max Loose</label>
				<div class="col-md-5">
                                    <input type="text" name="uom_loose"  placeholder="UOM LOOSE" id="uom_loose" class="form-control">
				</div>    
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Pack</label>
				<div class="col-md-5">
                                    <input type="text" name="uom_pack" placeholder="UOM PACK" id="uom_pack" class="form-control" readonly>
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
            uom_code: {
		message: 'The UOM CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM CODE is required and can\'t be empty'
                    }
                }
            },
	    uom_desc: {
		message: 'The UOM DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    uom_loose: {
		message: 'The UOM LOOSE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM LOOSE is required and can\'t be empty'
                    }
                }
            },
	     uom_pack: {
		message: 'The UOM PACK is not valid',
                validators: {
		    notEmpty: {
                        message: 'The UOM PACK is required and can\'t be empty'
                    }
                }
            },
	}
    });
});
$('#uom_loose').on('change', function(){
    var loose=(this.value);
    var uom_pack= parseFloat(loose)+ parseFloat(1);
    $('#uom_pack').val(uom_pack);
    });
function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}
</script>

	
	
</body>

</html>

