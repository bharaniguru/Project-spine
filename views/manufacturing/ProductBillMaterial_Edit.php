<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Manufacturing </a></li>
	<li class="active">Edit Product Bill Of Material</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Product Bill Of Material<small> Enter ahe correct details here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<div class="col-md-12">
	    <!-- begin panel -->
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Product Bill Of Material</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
			<form  method="POST" id="form_validation" enctype="multipart/form-data" action="<?php echo site_url('ManufacturingController/ProductBillMaterial_Edit/'.$value[0]['BH_CODE']); ?>" data-bv-trigger="blur" class="form-horizontal">
			   <div class="col-md-offset-1 col-md-7">
			    <input type="hidden" id="row_contains" name="row_contains" value="1" />
			    <div class="form-group">
				<label class="col-md-3 control-label">Product Code</label>
				<div class="col-md-5">
				    <select class="form-control" onChange="Product_code()" name="pro_code" id="pro_code" readonly/>
					<option disabled="" selected="" value="0">Select Code</option>
				    <?php foreach($code as $answer){ ?>
				    <option value="<?php echo $answer['ITEM_CODE'];?>" <?php  if($value[0]['BH_CODE']==$answer['ITEM_CODE'] )echo "selected"; ?>><?php echo $answer['ITEM_CODE'];?></option>
					<?php } ?>
					</select>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox"  name="active_yn" <?php if($value[0]['BH_ACTIVE_YN']=='Y') echo "checked" ?> value='Y'>
		    
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Product Description</label>
				<div class="col-md-9">
				    <input type="text" name="pro_desc" value="<?php echo $value[0]['BH_DESC']; ?>" id="pro_desc" class="form-control" placeholder="BH_DESC" readonly />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-5">
					  <input type="text" placeholder="Date Start" value="<?php echo $value[0]['BH_FROM_DT']; ?>" name="from_date" id="from_date" class="form-control datepicker-dob input-daterange"  >
				</div>
			    </div>
			  
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-5">
				    <input type="text" placeholder="Date End" value="<?php echo $value[0]['BH_UPTO_DT']; ?>" name="upto_date" id="upto_date" class="form-control datepicker-dob input-daterange" >
				</div>
			    </div>
			     </div>
			    <div class="col-md-offset col-md-12">
				<div class="form-group">
                     <div class="widget-body">
                                                <div class="table-responsive">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Line</th>
                                                            <th>Item source</th>
                                                            <th>Item Code</th>
                                                            <th>Item Description</th>
                                                            <th>UOM</th>
                                                            <th>Qty</th>
                                                            <th>Factor</th>
                                                            <th>Variable</th>
							    <th>Formula</th>
                                                            <th>Location</th>
                                                            <th>Process</th>
                                                            <th>instruction</th>
							    <th>Cycle Type</th>
                                                            <th>Cycle Time</th>
                                                            <th>Replenish Time</th>
							    <th>Active</th>
                                                            <th><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></th>
							 </tr>
                                                      </thead>
                                                      <tbody>
							
<?php
$container=count($line);

foreach($line as $line_val){?>							
<tr class="odd">
    
<input type="hidden" name="container" value="<?php echo $container?>" id="container">
       <td><input type="text" name="bl_line[]" value="<?php echo $line_val['BL_LINE']?>" id="company"></td>
       <td><select name="bl_item_source[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($itemsrc as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_ITEMSRC'){ ?>
	
	<option value="<?php echo $val['VSL_CODE'];?>"<?php if($line_val['BL_ITEM_SRC']==$val['VSL_CODE']) echo "selected" ?>><?php echo $val['VSL_CODE'];?></option>
	<?php }//} ?>
	</select></td>
       <td><select onChange="Item_code()" name="bl_item_code[]" id="bl_item_code_1">
       <option disabled="" selected="" value="0">Select Item</option>
       <?php foreach($item as $code){ ?>
	    <option value="<?php echo $code['ITEM_CODE'];?>"<?php if($line_val['BL_ITEM_CODE']==$code['ITEM_CODE']) echo "selected"?>><?php echo $code['ITEM_CODE'];?></option>
			<?php } ?>
	</select></td>
       <td><input type="text" name="bl_item_desc[]" value="<?php echo $line_val['BL_ITEM_DESC']?>" id="bl_item_desc_1"   /></td>
       <!--<td><input type="text" name="bl_uom[]" value="<?php //echo $line_val['BL_UOM_CODE']?>" id="bl_uom_1"  readonly /></td>-->
       <td><select name="bl_uom[]" id="bl_uom">
       <option disabled="" selected="" value="0">Select Item</option>
       <?php foreach($uom as $uom_code){ ?>
	    <option value="<?php echo $uom_code['IU_UOM_CODE'];?>"<?php if($line_val['BL_UOM_CODE']==$uom_code['IU_UOM_CODE']) echo "selected"?>><?php echo $uom_code['IU_UOM_CODE'];?></option>
			<?php } ?>
	</select></td>
       <td><input type="text" name="bl_qty[]" value="<?php echo $line_val['BL_QTY']?>"></td>
       <td><input type="text" name="bl_factor[]" value="<?php echo $line_val['BL_FACTOR']?>"></td>
       <td><select name="bl_variable[]" value="<?php echo $line_val['BL_VARIABLE']?>">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($variable as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_BOM_VAR'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"<?php if($line_val['BL_VARIABLE']==$val['VSL_CODE']) echo "selected"?>><?php echo $val['VSL_CODE'];?></option>
	<?php }//}?>
	</select></td>
       <td><input type="text" name="bl_formula[]" value="<?php echo $line_val['BL_FORMULA']?>" id="bl_formula"></td>
       <td><select name="bl_location[]">
       <option disabled="" selected="" value="0">Select Location</option>
	<?php foreach($location as $desc){ ?>
	<option value="<?php echo $desc['LOCN_CODE'];?>"<?php if($line_val['BL_PROC_LOCN']==$desc['LOCN_CODE']) echo "selected"?>><?php echo $desc['LOCN_DESC'];?></option>
	<?php }?>
       </select></td>
       
       <td><select name="bl_process[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($process as $val){
	
	//if($val['VSL_VSH_CODE']=='MNFG_BOM_PRC'){ ?>
	
	<option  value="<?php echo $val['VSL_CODE'];?>"<?php if($line_val['BL_PROCESS']==$val['VSL_CODE']) echo "selected"?>><?php echo $val['VSL_CODE'];?></option>
	<?php }//} ?>
	</select></td>
       <td><input type="text" name="bl_instruction[]"id="email_1"></td>
       <td><select name="bl_cycle_type[]" value="<?php //echo $val['BL_CYCLE_TYPE'];?>">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($cycle as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_BOM_CTY'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"<?php if($line_val['BL_CYCLE_TYPE']==$val['VSL_CODE']) echo "selected"?>><?php echo $val['VSL_CODE'];?></option>
	<?php }//}?>
	</select></td>
       <td><input type="text" name="bl_cycle_time[]" value="<?php echo $line_val['BL_CYCLE_TIME'];?>"></td>
       <td><input type="text" name="bl_replenish_time[]" value="<?php echo $line_val['BL_REPLN_TIME'];?>"></td>
       <td><input type="checkbox" name="bl_active_yn[]" <?php if($line_val['BL_ACTIVE_YN']=='Y') echo "checked"?> value="Y"></td>       
       <td><a href= "<?php echo site_url('ManufacturingController/productBillLine_Delete/'.$value[0]['BH_CODE'].'/'.$line_val['BL_ITEM_CODE'])?>" onclick="return confirm('Are you sure you want to delete');" class="btn btn-remove btn-danger btn-sm " data-template="textbox" >Remove</a></td>
   </tr>
<?php }?>



   <tr class="odd hide" id="optionTemplate">
    
       <td><input type="text" name="bl_line[]" id="company" value="1"></td>
       <td><select name="bl_item_source[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($itemsrc as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_ITEMSRC'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }//} ?>
	</select></td>
       <td><select onChange="Item_code()" name="bl_item_code[]" id="bl_item_code">
       <option disabled="" selected="" value="0">Select Item</option>
       <?php foreach($item as $code){ ?>
	    <option value="<?php echo $code['ITEM_CODE'];?>"><?php echo $code['ITEM_CODE'];?></option>
			<?php } ?>
	</select></td>
       <td><input type="text" name="bl_item_desc[]" id="bl_item_desc[]"  readonly /></td>
       <td><select name="bl_uom[]" id="bl_uom">
       <option disabled="" selected="" value="0">Select Item</option>
       <?php foreach($uom as $uom_code){ ?>
	    <option value="<?php echo $uom_code['IU_UOM_CODE'];?>"><?php echo $uom_code['IU_UOM_CODE'];?></option>
			<?php } ?>
	</select></td>
       <td><input type="text" name="bl_qty[]"></td>
       <td><input type="text" name="bl_factor[]" ></td>
       <td><select name="bl_variable[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($variable as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_BOM_VAR'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }//}?>
	</select></td>
       <td><input type="text" name="bl_formula[]" id="bl_formula"></td>
       <td><select name="bl_location[]">
       <option disabled="" selected="" value="0">Select Location</option>
	<?php foreach($location as $desc){ ?>
	<option value="<?php echo $desc['LOCN_CODE'];?>"><?php echo $desc['LOCN_DESC'];?></option>
	<?php }?>
       </select></td>
       
       <td><select name="bl_process[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($process as $val){
	
	//if($val['VSL_VSH_CODE']=='MNFG_BOM_PRC'){ ?>
	
	<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }//} ?>
	</select></td>
       <td><input type="text" name="bl_instruction[]"id="email_1"></td>
       <td><select name="bl_cycle_type[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($cycle as $val){
	if($val['VSL_VSH_CODE']=='MNFG_BOM_CTY'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }}?>
	</select></td>
       <td><input type="text" name="bl_cycle_time[]"></td>
       <td><input type="text" name="bl_replenish_time[]"></td>
       <td><input type="checkbox" name="bl_active_yn[]" value="Y"></td>
       <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
   </tr>

   
   
   
   
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
			    </div></div>
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group" >
				    <label class="col col-4"></label>
				    <button  class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick=" Clear();" type="button"> Reset </button>
				    <!--<button type="submit" class="btn btn-md btn-success" name="submit" id="submit_but" value="Save" >Submit</button>-->
				    <input type="submit" name="save" class="btn btn-md btn-success" value="Update">
				 </div>
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
    var row_count=1;
$(document).ready(function() {
    add_remove_row();
    $('.datepicker-dob').datetimepicker({
      format: 'DD-MMM-YY'
      })
    datepicker();
function datepicker()
{
    $('#from_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
$('#upto_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    
$("#from_date").on("dp.change",function (e) {
$('#upto_date').data("DateTimePicker").minDate(e.date);
});
$("#upto_date").on("dp.change",function (e) {
$('#from_date').data("DateTimePicker").maxDate(e.date);
});

} 
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',	
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            
            from_date: {
                validators: {
                    notEmpty: {
                        message: 'The From date is required and can\'t be empty'
                    },
                }
            },
            
            upto_date: {
                validators: {            
                    notEmpty: {
                        message: 'The Upto date is required and can\'t be empty'
                    },
                }
            },
	    
        'bl_line[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Item Code is required and can\'t be empty'
                    },
                }
            },
	    
        'bl_item_source[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Item Source is required and can\'t be empty'
                    },
                }
            },	    
	    
        'bl_item_code[]': {
                validators: {
                    notEmpty: {
                        message: 'The Item Code is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_item_desc[]': {
                validators: {
                    notEmpty: {
                        message: 'The Item Description is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_uom[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The UOM is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_qty[]': {
                validators: {
		     regexp:{
		    regexp: /^[0-9]+$/,
		     message: 'The  QTY is consist of number only don\'t use character'
			},		    
		    
                    notEmpty: {
                        message: 'The QTY is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_factor[]': {
                validators: {
		     regexp:{
		    regexp: /^[0-9]+$/,
		     message: 'The  Factor is consist of number only don\'t use character '
			},		    		    
                    notEmpty: {
                        message: 'The Factor is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_variable[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Factor is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_formula[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Formula is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_location[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The location is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_process[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The process is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_instruction[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The instruction is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_cycle_type[]': {
                validators: {
		    
                    notEmpty: {
                        message: 'The instruction is required and can\'t be empty'
                    },
                }
            },
	    
            'bl_cycle_time[]': {
                validators: {
		     regexp:{
		    regexp: /^[0-9]+$/,
		     message: 'The  Replenish time consist of number only don\'t use character '
			},
                    notEmpty: {
                        message: 'The instruction is required and can\'t be empty'
                    },
                }
            },	    
	    
          'bl_replenish_time[]': {
                validators: {
		     regexp:{
		    regexp: /^[0-9]+$/,
		     message: 'The  Replenish time consist of number only don\'t use character '
			},
                    notEmpty: {
                        message: 'The Replenish time is required and can\'t be empty'
                    },
                }
            },

	}
    })
    
    
    .on('change', '[name="bl_item_code[]"]', function(e, data) {
	var item_code=$(this).val() ;
    var $row    = $(this).parents('.odd');
    
    //alert(item_code);
    $.ajax({
	type: "POST",
	url: "<?=base_url()?>manufacturingController/GetInvt_M_ItemTable2",
	 dataType:"json",
	 data:{item_code_data:item_code} ,
	success: function (json) {

		    $row.find("input[name='bl_item_desc[]']").val(json.ITEM_DESC);
		    
		    $('#bl_uom > option').each(function()
		    {
		    if($row.find(this).text()==json.ITEM_UOM_CODE)
		    $(this).parent('select').val($row.find(this).val())
		    })
		    },
		    });
    });
    
    
});
</script>

<script type="text/javascript">
 function add_remove_row() {
    var container=$('#container').val();
    if (isNaN(container))
    {
	container=0;
    }
    
    $('#form_validation').on('click', '.btn-add', function() {
	
	row_count++;
	container++;
       var $template = $('#optionTemplate'),
       $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
	
	$clone.find('[name="bl_line[]"]').val(container);
    
       removerow();
       
    })
    .on('click', '.removeButton', function() {
	var $row    = $(this).parents('.odd');
      $row.remove();
    
    });
    
 }

 

</script>

<script type="text/javascript">
function Product_code(){
    var bh_code=$('#pro_code').val() ;
    $.ajax({
	type: "POST",
	url: "<?=base_url()?>manufacturingController/GetInvt_M_ItemTable",
	data:{pro_code:bh_code} ,
	success: function (responseData) {
	    //var error=responseData;
	    //if (error=='error'){
		//alert("Entered product does not created as Item.");
		//}
		//else{
		    //alert(error);
		    $('#pro_desc').val(responseData);
		    //}
	    },
    });
};
</script>

	
	
</body>

</html>

