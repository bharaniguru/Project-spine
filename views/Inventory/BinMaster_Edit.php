<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventry</a></li>
	
	<li class="active">Edit Bin Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Bin Master<small> Enter correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Bin Master</h4>
		</div>
		<div class="panel-body">
		    
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('InventoryController/BinMaster_Edit'); ?>" class="form-horizontal">
			   <div class="col-md col-md-12">
			    <div class="form-group">
				<label class="col-md-2 control-label">Location</label>
				<div class="col-md-3">
				    <select class="form-control" name="bin_loc" id="bin_loc">
				    <?php foreach($result1 as $row) {?>
					<option value="<?php echo $row['LOCN_CODE']?>"<?php if($row['LOCN_CODE'] == $result[0]['BIN_LOCN_CODE']) echo 'selected'?>><?php echo $row['LOCN_DESC']?></option>
				    <?php } ?>s
				    </select>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input name="b_active" id="b_active" type="checkbox" value="Y" <?php echo($result[0]['BIN_ACTIVE_YN']=='Y' ? 'checked' : '') ?>>
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Zone</label>
				<div class="col-md-3">
				    <input type="text" name="bin_zone" id="bin_zone" class="form-control" value="<?php echo $result[0]['BIN_ZONE_CODE'] ?>" placeholder="BIN_ZONE_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Area</label>
				<div class="col-md-3">
				    <input type="text" name="bin_area" id="bin_area" class="form-control" value="<?php echo $result[0]['BIN_AREA_CODE'] ?>" placeholder="BIN_AREA_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Row</label>
				<div class="col-md-3">
				    <input type="text" name="bin_row" id="bin_row" class="form-control" value="<?php echo $result[0]['BIN_ROW_CODE'] ?>" placeholder="BIN_ROW_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Shelf</label>
				<div class="col-md-3">
				    <input type="text" name="bin_shelf" id="bin_shelf" class="form-control bin_shelf" value="<?php echo $result[0]['BIN_SHELF_CODE'] ?>" placeholder="BIN_SHELF_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Bin Code</label>
				<div class="col-md-3">
				    <input type="text" name="bin_code" id="bin_code" class="form-control bin_code" value="<?php echo $result[0]['BIN_CODE'] ?>" placeholder="BIN_CODE" readonly/>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Min Qty</label>
				<div class="col-md-3">
				    <input type="text" name="min_qty" id="min_qty" class="form-control" value="<?php echo $result[0]['BIN_MIN_QTY'] ?>" placeholder="BIN_MIN_QTY" />
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Description</label>
				<div class="col-md-3">
				    <input type="text" name="bin_desc" id="bin_desc" class="form-control" value="<?php echo $result[0]['BIN_DESC'] ?>" placeholder="BIN_DESC" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Max Qty</label>
				<div class="col-md-3">
				    <input type="text" name="max_qty" id="max_qty" class="form-control" value="<?php echo $result[0]['BIN_MAX_QTY'] ?>" placeholder="BIN_MAX_QTY" />
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">From Date</label>
				<div class="col-md-3">
				    <input type="text" id="datepicker" value="<?php echo $result[0]['BIN_FROM_DT']?>" placeholder="Date Start" name="b_frm_dt" class="form-control">
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Upto Date</label>
				<div class="col-md-3">
				    <input type="text" placeholder="Date End" value="<?php echo $result[0]['BIN_UPTO_DT']?>" id="datepicker1" name="b_to_dt" class="form-control">
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Available Stock</label>
				<div class="col-md-3">
				    <input type="text" name="bin_avl_stock" id="bin_avl_stock" value="<?php echo $result[0]['BIN_STOCK'] ?>" class="form-control" placeholder="BIN_MAX_QTY" />
				</div>				
			    </div>			    
			     
			   
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group">
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick="form_reset()" type="button"> Reset </button>
				    <button type="submit" class="btn btn-md btn-success" name="Update" id="submit_but" value="Update" >Submit</button>
				 </div>
			      </div>	    
			</form>
		    </div>
		</div>	    </div>
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
            bin_loc: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
                   
                }
            },
	    bin_zone: {
		message: 'The Bin Zone is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Zone is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Bin Zone can only consist of number'
                    },
                    
                }
            },
	    
	    bin_area: {
		message: 'The Bin Area is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Area is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Bin Area can only consist of number'
                    },
                    
                }
            },
	    bin_row: {
		message: 'The Bin Row is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Row is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Bin Row can only consist of number'
                    },
                    
                }
            },
	    bin_shelf: {
		message: 'The Bin Shelf is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Shelf is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Bin Shelf can only consist of number'
                    },
                    
                }
            },
	    
	     
	    min_qty: {
		message: 'The Min Qty is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Min Qty is required and can\'t be empty'
                    }
		}
            },
	    
	    bin_desc: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
                    
                }
            },
	    max_qty: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
                    
                }
            },
	    bin_avl_stock: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
                    
                }
            },
	    b_frm_dt: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
                    
                }
            },
	    b_to_dt: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
                    
                }
            },
	    bin_code: {
		message: 'The Bin Location is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Location is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^([\A-Za-z0-9]+_([\0-9]{1,5})+_[\0-9]{1,5})?$/,
                        message: 'ex: alphnumaric_numaric_numaric'
                    },
//		    callback: {
//                            callback: function (value, validator, $field) {
//                            var code=value;
//                            $.ajax({
//			    type:"POST",
//			    url:"<?php  echo site_url('InventoryController/ajaxbincodevalid')?>",
//			    datatype:'json',
//			    data:{code:code},
//			    success: function(code)
//			    {
//				var bin_code=code;
//				if (bin_code=='N'){
//				    return true;
//				}
//				else{
//				    alert('Y');
//				    return {
//					
//					message: 'Bin Code Already Exists'
//				    }
//				}
//			    }
//			    });
//			}
//                    }
                    
                
		
		}
            }
	}
    });
});


</script>

<script type="text/javascript">
function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}

       $('.btn-add').click(function() {
       var $template = $('#optionTemplate'),
 $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
        removerow();
    });
 
   function removerow(){
      $(".removeButton").on('click',function(){
      var $row    = $(this).parents('.odd');
      $row.remove();
      });
      };

$('#datepicker').datetimepicker({
format: 'DD-MMM-YY'
});
$('#datepicker1').datetimepicker({
format: 'DD-MMM-YY'
});
</script>

	
	
</body>

</html>

