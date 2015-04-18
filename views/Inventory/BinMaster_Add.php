<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventry</a></li>
	
	<li class="active">Add Bin Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Bin Master<small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Bin Master</h4>
		</div>
		<div class="panel-body">
		    
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('InventoryController/BinMaster_Add'); ?>" class="form-horizontal">
			   <div class="col-md col-md-12">
			    <div class="form-group">
				<label class="col-md-2 control-label">Location</label>
				<div class="col-md-3">
				    <select class="form-control" name="bin_loc" id="bin_loc">
				    <option value="">Select</option>
				    <?php foreach($result as $row) {?>
					<option value="<?php echo $row['LOCN_CODE']?>"><?php echo $row['LOCN_DESC']?></option>
				    <?php } ?>
				    </select>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input name="b_active" id="b_active" type="checkbox" value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Zone</label>
				<div class="col-md-3">
				    <input type="text" name="bin_zone" id="bin_zone" class="form-control" placeholder="BIN_ZONE_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Area</label>
				<div class="col-md-3">
				    <input type="text" name="bin_area" id="bin_area" class="form-control" placeholder="BIN_AREA_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Row</label>
				<div class="col-md-3">
				    <input type="text" name="bin_row" id="bin_row" class="form-control" placeholder="BIN_ROW_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Shelf</label>
				<div class="col-md-3">
				    <input type="text" name="bin_shelf" id="bin_shelf" class="form-control bin_shelf" placeholder="BIN_SHELF_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Bin Code</label>
				<div class="col-md-3">
				    <input type="text" name="bin_code" id="bin_code" class="form-control bin_code" placeholder="BIN_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Min Qty</label>
				<div class="col-md-3">
				    <input type="text" name="min_qty" id="min_qty" class="form-control" placeholder="BIN_MIN_QTY" />
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Description</label>
				<div class="col-md-3">
				    <input type="text" name="bin_desc" id="bin_desc" class="form-control" placeholder="BIN_DESC" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Max Qty</label>
				<div class="col-md-3">
				    <input type="text" name="max_qty" id="max_qty" class="form-control" placeholder="BIN_MAX_QTY" />
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">From Date</label>
				<div class="col-md-3">
				    <input type="text" id="datepicker" placeholder="Date Start" name="b_frm_dt" class="form-control">
				</div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-2 control-label">Upto Date</label>
				<div class="col-md-3">
				    <input type="text" placeholder="Date End" id="datepicker1" name="b_to_dt" class="form-control">
				</div>				
			    </div>
			    <!--<div class="form-group ">
				<label class="col-md-2 control-label">Date</label>
				    <div class="input-group col-md-3 input-daterange">
					<input type="text" placeholder="Date Start" name="b_frm_dt" class="form-control">
					<span class="input-group-addon">to</span>
					<input type="text" placeholder="Date End" name="b_to_dt" class="form-control">
                                </div>
			    </div>-->
			    <div class="form-group">
				<label class="col-md-2 control-label">Available Stock</label>
				<div class="col-md-3">
				    <input type="text" name="bin_avl_stock" id="bin_avl_stock" class="form-control" placeholder="BIN_MAX_QTY" />
				</div>				
			    </div>			    
			     
			   
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group">
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick="form_reset()" type="button"> Reset </button>
				    <button type="submit" class="btn btn-md btn-success" name="save" id="submit_but" value="Save" >Submit</button>
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
		message: 'The Bin Description is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Description is required and can\'t be empty'
                    },
                    
                }
            },
	    max_qty: {
		message: 'The Bin Max Qty is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Max Qty is required and can\'t be empty'
                    },
                    
                }
            },
	    bin_avl_stock: {
		message: 'The Bin Available Stock is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin Available Stock is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^[0-9]+$/i,
                        message: 'The Bin Available Stock Should consist of Positive Number'
                    }
                    
                }
            },
	    b_frm_dt: {
		message: 'The Bin From Date is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin From Date is required and can\'t be empty'
                    },
                    
                }
            },
	    b_to_dt: {
		message: 'The Bin To Date is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Bin To Date is required and can\'t be empty'
                    },
                    
                }
            },
	    bin_code: {
		message: 'The Bin Code is not valid',
                validators: {
		    notEmpty: {
                        message: 'The Bin Code is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^([\A-Za-z0-9]+_([\0-9]{1,5})+_[\0-9]{1,5})?$/,
                        message: 'ex: ALPHANUMACI_NUMARIC_NUMARIC'
                    },
		    remote: {
                        message: 'The BIN CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('InventoryController/ajaxbincodevalid')?>',
                        type: 'POST'
                    }
		}
            }
	}
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
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

$('.bin_shelf').on('keyup',function(){
var bincode=$('#bin_code').val();
$.ajax({
    type:"POST",
    url:"<?php  echo site_url('InventoryController/ajaxbincode')?>",
    datatype:'json',
    data:{code:bincode},
    success: function(json)
    {
	var code_bin=json;
	var loc=$('#bin_loc').val();
	var zone=$('#bin_zone').val();
	var area=$('#bin_area').val();
	var row=$('#bin_row').val();
	var shelf=$('#bin_shelf').val();
	var bintot=parseInt(zone)+parseInt(area)+parseInt(row)+parseInt(shelf);
	var bincode=loc+'_'+bintot+'_'+code_bin;
	$('#bin_code').val(bincode);
    }
    });
    });

$(function () {
$('#datepicker').datetimepicker({
format: 'DD-MMM-YYYY'
});
$('#datepicker1').datetimepicker({
format: 'DD-MMM-YYYY'
});
$("#datepicker").on("dp.change",function (e) {
$('#datepicker1').data("DateTimePicker").minDate(e.date);
});
$("#datepicker1").on("dp.change",function (e) {
$('#datepicker').data("DateTimePicker").maxDate(e.date);
});
    })
});
</script>
</body>
</html>

