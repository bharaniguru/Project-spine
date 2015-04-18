<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Manufacturing </a></li>
	<li class="active">Add Product Bill Of Material</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Product Bill Of Material<small> Enter the correct details here...</small></h1>
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
			<form  method="POST" id="form_validation" enctype="multipart/form-data" action="<?php echo site_url('ManufacturingController/ProductBillMaterial_Add'); ?>" data-bv-trigger="blur" class="form-horizontal">
			   <div class="col-md-offset-1 col-md-7">
			    <input type="hidden" id="row_contains" name="row_contains" value="1" />
			    <div class="form-group">
				<label class="col-md-3 control-label">Product Code</label>
				<div class="col-md-5">
				    <select class="form-control" onChange="Product_code()" name="pro_code" id="pro_code" >
					<option disabled="" selected="" value="0">Select Code</option>
				    <?php foreach($code as $answer){ ?>
				    <option value="<?php echo $answer['ITEM_CODE'];?>"><?php echo $answer['ITEM_CODE'];?></option>
					<?php } ?>
					</select>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input name="active_yn"  type="checkbox" value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Product Description</label>
				<div class="col-md-9">
				    <input type="text" name="pro_desc" id="pro_desc" class="form-control" placeholder="BH_DESC" readonly />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-5">
				    
					  <input type="text" placeholder="Date Start" name="from_date" id="from_date" class="form-control datepicker-dob input-daterange">
				    
				</div>
			    </div>
			  
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-5">
				    
				    <input type="text" placeholder="Date End" name="upto_date" id="upto_date" class="form-control datepicker-dob input-daterange" >
				   
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
<tr class="odd">

       <td><input type="text" name="bl_line[]" value="1"  id="company" ></td>
       <td><select name="bl_item_source[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($itemsrc as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_ITEMSRC'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }//} ?>
	</select></td>
       <td><select onChange="Item_code()" name="bl_item_code[]" id="bl_item_code_1">
       <option disabled="" selected="" value="0">Select Item</option>
       <?php foreach($item as $code){ ?>
	    <option value="<?php echo $code['ITEM_CODE'];?>"><?php echo $code['ITEM_CODE'];?></option>
			<?php } ?>
	</select></td>
       <td><input type="text" name="bl_item_desc[]" id="bl_item_desc"  readonly /></td>
       <!--<td><input type="text" name="bl_uom[]" id="bl_uom_1"  readonly /></td>-->
       <td><select name="bl_uom[]" id="bl_uom">
       <option disabled="" selected="" value="0">Select Item</option>
       <?php foreach($uom as $uom_code){ ?>
	    <option value="<?php echo $uom_code['IU_UOM_CODE'];?>"><?php echo $uom_code['IU_UOM_CODE'];?></option>
			<?php } ?>
	</select></td>
       <td><input type="text" name="bl_qty[]"></td>
       <td><input type="text" name="bl_factor[]"></td>
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
	
	<option  value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }//} ?>
	</select></td>
       <td><input type="text" name="bl_instruction[]"id="email_1"></td>
       <td><select name="bl_cycle_type[]">
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($cycle as $val){
	//if($val['VSL_VSH_CODE']=='MNFG_BOM_CTY'){ ?>
	<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
	<?php }//}?>
	</select></td>
       <td><input type="text" name="bl_cycle_time[]"></td>
       <td><input type="text" name="bl_replenish_time[]"></td>
       <td><input type="checkbox" name="bl_active_yn[]" value="Y"></td>
       <input type="hidden" name="bl_active_yn1[]" id="bl_active_yn1[]"  value='N'/>
       <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
   </tr>


   
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
	
	<option  value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
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
       <input type="hidden" name="bl_active_yn1[]" id="bl_active_yn1[]"  value='N'/>
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
				    <input type="submit" name="save" class="btn btn-md btn-success" value="submit">
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
            pro_code: {
                validators: {            
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
			remote:{
				    message: 'The Product Code IS ALREADY EXISTS',
				    url: '<?php  echo site_url('ManufacturingController/AjaxProductCode')?>',
				    type: 'POST'
				}		    
                }
            },
            
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
		     message: 'The  QTY is consist of number only don\'t use character '
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
    
    $('#form_validation').on('click', '.btn-add', function() {
	row_count++;
       var $template = $('#optionTemplate'),
       $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);

       removerow();
        $clone.find('[name="bl_line[]"]').val(row_count);
    
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

<script>
$('#form_validation').on('click', '[name="bl_active_yn[]"]', function()
    {
 
  var $row    = $(this).parents('.odd');
 
 var item_code=$row.find("input[name='bl_active_yn1[]']").val();
 
   
 
    if (item_code=="Y")
    {
 $row.find("input[name='bl_active_yn1[]']").attr('value', 'N');
 //alert("N");
 
    }
    else
    {
 $row.find("input[name='bl_active_yn1[]']").attr('value', 'Y');
 //alert("Y");
    }

})
</script>
	
</body>

</html>

