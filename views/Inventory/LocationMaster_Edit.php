<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Location Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Location Master <small> Enter the correct details here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<p style="color:red"><?php echo $error; ?></p>
	<div class="col-md-12">
	    <!-- begin panel -->
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Edit Location Master</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/LocationMaster_Edit');?>" class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">Location Code</label>
				<div class="col-md-5">
                                    <input type="text" name="lc_code" value="<?php echo $result[0]['LOCN_CODE']?>"class="form-control" placeholder="LC CODE" id="lc_code" readonly>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" value="Y" name="lc_active" <?php echo ($result[0]['LOCN_ACTIVE_YN']=='Y' ? 'checked' : '')?>>
                                    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
                                    <input type="text" name="lc_desc" value="<?php echo $result[0]['LOCN_DESC']?>" placeholder="LC DESC" class="form-control" id="lc_desc">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Stocking Group</label>
				<div class="col-md-5">
                                    <select class="form-control" name="lc_st_gp"  placeholder="LC STOCK GROUP">
                                        <?php foreach($result1 as $row) {?>
					    <option value="<?php echo $row['LOCN_STOCKING_GROUP']?>"<?php if($result[0]['LOCN_STOCKING_GROUP']==$row['LOCN_STOCKING_GROUP']) echo 'selected'?>><?php echo $row['LOCN_STOCKING_GROUP']?></option>
					<?php }?>
                                    </select>
				</div>    
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Costing Group</label>
				<div class="col-md-5">
                                    <select class="form-control" name="lc_cost_gp" placeholder="LC COSTING GROUP"  placeholder="LC STOCK GROUP">
                                        <?php foreach($result as $row) {?>
					    <option value="<?php echo $row['LOCN_COSTING_GROUP']?>"<?php if($result[0]['LOCN_COSTING_GROUP']==$row['LOCN_COSTING_GROUP']) echo 'selected'?>><?php echo $row['LOCN_COSTING_GROUP']?></option>
					<?php }?>
                                    </select>
				</div>    
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Location Group Type</label>
				
                                    <div class="col-md-9">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="Y" name="lc_stock" <?php echo ($result[0]['LOCN_STOCK_YN']=='Y' ? 'checked' : '')?>>
                                            Stock Location 
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="Y" name="lc_group" <?php echo ($result[0]['LOCN_SALE_YN']=='Y' ? 'checked' : '')?>>
                                            Sales Group 
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" value="Y" name="lc_cost" <?php echo ($result[0]['LOCN_TRANSIT_YN']=='Y' ? 'checked' : '')?>>
                                            Costing Group 
                                        </label>
                                    </div>
				   
			    </div>
			    <fieldset>
                                <div class="col-md-offset-2 col-md-5">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
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
            lc_code: {
		message: 'The LOCATION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION CODE is required and can\'t be empty'
                    }
                }
            },
	    lc_active: {
		message: 'The LOCATION ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION ACTIVE is required and can\'t be empty'
                    }
                }
            },
	    lc_desc: {
		message: 'The LOCATION DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    lc_st_gp: {
		message: 'The LOCATION STOCK is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION STOCK is required and can\'t be empty'
                    }
                }
            },
	     lc_cost_gp: {
		message: 'The LOCATION COST GROUP is not valid',
                validators: {
		    notEmpty: {
                        message: 'The LOCATION COST GROUP is required and can\'t be empty'
                    }
                }
            },
	    lc_stock: {
		message: 'The LOCATION STOCK is not valid',
                validators: {
		    notEmpty: {
                        message: 'The LOCATION STOCK is required and can\'t be empty'
                    }
                }
            },
	    lc_group: {
		message: 'The LOCATION GROUP is not valid',
                validators: {
		    notEmpty: {
                        message: 'The LOCATION GROUP is required and can\'t be empty'
                    }
                }
            },
	    lc_cost: {
		message: 'The LOCATION COST is not valid',
                validators: {
		    notEmpty: {
                        message: 'The LOCATION COST is required and can\'t be empty'
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

