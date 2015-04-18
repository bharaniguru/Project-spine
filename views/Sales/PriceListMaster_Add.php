<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
	<div id="content" class="content">
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Sales</a></li>
		    <li><a href="javascript:;">PriceListMaster</a></li>
		    <li><a href="javascript:;">Add</a></li>
		</ol>
		<h1 class="page-header">Add Price List <small> You may add here...</small></h1>
		<div class="row">
		    <div class="col-md-12">
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Price List Master Add</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <form class="form-horizontal" name="myForm" id="myForm" action="<?php echo base_url();?>Sales/PriceListMaster_Add" method="post" enctype="multipart/form-data">
                        <div class="well">
                             <div class="row">
                                 <div class="col-md-6 ui-sortable">
                                     <div class="row">
                                         <div class="form-group">
					    <input class="hidden" id="PLH_COMP_CODE" name="PLH_COMP_CODE" placeholder="PLH_COMP_CODE" type="text" value="001">
					    <input class="hidden" id="PLH_SYS_ID" name="PLH_SYS_ID" placeholder="PLH_SYS_ID" type="text">
					    <input type="hidden" name="PLH_LANG_CODE" id="PLH_LANG_CODE" value="en">
                                            <input type="hidden" name="PLH_CR_UID" id="PLH_CR_UID" value="ARM">
                                            <input type="hidden" name="PLH_CR_DT" class="PLH_CR_DT" id="datepicker-inline" data-date-format='dd-M-yy'>					    
                                         <label class="col-md-3 control-label">Price Code</label>
                                         <div class="col-md-6">
                                             <input type="text"  placeholder="PLH_CODE"  name="PLH_CODE" id="PLH_CODE" class="form-control">
                                         </div>
					</div>
                                     </div>
                                     <div class="row">
                                         <div class="form-group">
                                             <label class="col-md-3 control-label">Description</label>
                                         <div class="col-md-8">
                                             <input type="text" placeholder="PLH_DESC"  name="PLH_DESC" id="PLH_DESC" class="form-control">
                                         </div>
                                         </div>
                                     </div>
				     <div class="row">
                                         <div class="form-group">
                                             <label class="col-md-3 control-label">Currency</label>
                                         <div class="col-md-8">
						<select class="form-control" id="PLH_CCY_CODE" name="PLH_CCY_CODE">
						    <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($drop as $row){
						   ?>
						<option value="<?php echo $row['CCY_CODE'];?>"> <?php echo $row['CCY_DESC'];?></option>
					     <?php } ?>
                                                </select>
                                         </div>
                                         </div>
                                     </div>
				     <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> From Date</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="Date Start" name="PT_FROM_DT" id="datetimepicker6" class="form-control">
					  </div>
					 </div>
					 <div class="form-group">
                                             <label class="col-md-3 control-label">Upto Date</label>
					     <div class="col-md-8">
						<input type="text" placeholder="Date End" name="PT_UPTO_DT" id="datetimepicker7" class="form-control" >
                                             </div>
					  </div>
                                     </div>
                                 </div>
				 <div class="col-md-6 ui-sortable">
				 <div class="col-md-offset-2">
				    <div class="form-group">
					<div class="col-md-3">
					    <div class="checkbox">
						<label><input checked="checked" name="PLH_ACTIVE_YN" id="PLH_ACTIVE_YN" type="checkbox"> Active?</label>
					    </div>
					</div>
				    </div>
				 </div>
				 </div>
                             </div>
                         </div>    
                    <div class="panel-footer">
                             </div>
		 <div class="table-responsive" id="mytable">
			<table id="data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
			    <thead>
				<tr role="row">
				    <!--<th  >System ID</th>
				    <th  >Pice List System ID</th>
				    <th  >Company Code</th>-->
				    <th >Item Code </th>
				    <th >UOM Code </th>
				    <th >Price Head</th>

				    <th  >Width 0-100 </th>

				    <th  >Width 101-110 </th>

				    <th  >Width 111-120 </th>

				    <th  >Width 121-130 </th>

				    <th  >Width 131-140 </th>

				    <th >Width 141-150 </th>

				    <th >Width 151-160 </th>

				    <th >Width 161-170 </th>

				    <th >Width 171-180 </th>

				    <th >Width 181-190 </th>

				    <th >Width 191-200 </th>
				    
				    <th >Width 201-210 </th>

				    <th >Width 211-220 </th>

				    <th >Width 221-230 </th>

				    <th >Width 231-240 </th>

				    <th >Width 241-250 </th>

				    <th >Width 251-260 </th>

				    <th >Width 261-270 </th>

				    <th >Width 271-280 </th>

				    <th >Width 281-290 </th>

				    <th >Width 291-300 </th>
				    
				     <th>Active</th>
			<!--	     <th>Language Code </th>
				     <th">Create User ID </th>

				    <th >Create Data</th>

				    <th >Upto Date User ID</th>

				    <th >Upto Date Data</th>-->
  
				</tr>
			    </thead>

			    <tbody>
				 <tr class="odd">
				    <!--<td><input type="text" placeholder="PLL_SYS_ID "  name="PLL_SYS_ID " id="PLH_DESC" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PLH_SYS_ID"  name="PLL_PLH_SYS_ID" id="PLL_PLH_SYS_ID" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_COMP_CODE"  name="PLL_COMP_CODE" id="PLL_COMP_CODE" class="form-control"></td>-->
				    
				    <td><input type="text" placeholder="PLL_ITEM_CODE"  name="PLL_ITEM_CODE[]" id="PLL_ITEM_CODE" ></td>

				    <!--<td><input type="text" placeholder="PLL_UOM_CODE"  name="PLL_UOM_CODE[]" id="PLL_UOM_CODE" ></td>-->
				    
				    <td>
					<select  id="PLL_UOM_CODE" name="PLL_UOM_CODE[]" >
						    <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($uom_code as $row){
						   ?>
						<option value="<?php echo $row['IU_UOM_CODE'];?>"> <?php echo $row['IU_UOM_CODE'];?></option>
					     <?php } ?>
                                        </select>
				    </td>
				    <td><input type="text" placeholder="PLL_PRICE_H"  name="PLL_PRICE_H[]" id="PLL_PRICE_H" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_0_100"  name="PLL_PRICE_W_0_100[]" id="PLL_PRICE_W_0_100" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_101_110"  name="PLL_PRICE_W_101_110[]" id="PLL_PRICE_W_101_110" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_111_120"  name="PLL_PRICE_W_111_120[]" id="PLL_PRICE_W_111_120" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_121_130"  name="PLL_PRICE_W_121_130[]" id="PLL_PRICE_W_121_130" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_131_140"  name="PLL_PRICE_W_131_140[]" id="PLL_PRICE_W_131_140" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_141_150"  name="PLL_PRICE_W_141_150[]" id="PLL_PRICE_W_141_150" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_151_160"  name="PLL_PRICE_W_151_160[]" id="PLL_PRICE_W_151_160" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_161_170"  name="PLL_PRICE_W_161_170[]" id="PLL_PRICE_W_161_170" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_171_180"  name="PLL_PRICE_W_171_180[]" id="PLL_PRICE_W_171_180" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_181_190"  name="PLL_PRICE_W_181_190[]" id="PLL_PRICE_W_181_190" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_191_200"  name="PLL_PRICE_W_191_200[]" id="PLL_PRICE_W_191_200" ></td>
				    
				    <td><input type="text" placeholder="PLL_PRICE_W_201_210"  name="PLL_PRICE_W_201_210[]" id="PLL_PRICE_W_201_210" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_211_220"  name="PLL_PRICE_W_211_220[]" id="PLL_PRICE_W_211_220" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_221_230"  name="PLL_PRICE_W_221_230[]" id="PLL_PRICE_W_221_230" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_231_240"  name="PLL_PRICE_W_231_240[]" id="PLL_PRICE_W_231_240" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_241_250"  name="PLL_PRICE_W_241_250[]" id="PLL_PRICE_W_241_250" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_251_260"  name="PLL_PRICE_W_251_260[]" id="PLL_PRICE_W_251_260" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_261_270"  name="PLL_PRICE_W_261_270[]" id="PLL_PRICE_W_261_270" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_271_280"  name="PLL_PRICE_W_271_280[]" id="PLL_PRICE_W_271_280" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_281_290"  name="PLL_PRICE_W_281_290[]" id="PLL_PRICE_W_281_290" ></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_291_300"  name="PLL_PRICE_W_291_300[]" id="PLL_PRICE_W_291_300" ></td>
				    
				    <td><input type="checkbox" placeholder="PLL_ACTIVE_YN"  name="PLL_ACTIVE_YN[]" id="PLL_ACTIVE_YN">Active </td>
				    
				   <td class="hidden"><input type="text" placeholder="P_PLL_PRICE_W_301_310"  name="P_PLL_PRICE_W_301_310[]" id="P_PLL_PRICE_W_301_310" ></td>
				  <!--  
				    <td><input type="text" placeholder="PLL_LANG_CODE"  name="PLL_LANG_CODE" id="PLL_LANG_CODE" ></td>
				    
				    <td><input type="text" placeholder="PLL_CR_UID"  name="PLL_CR_UID" id="PLL_CR_UID" ></td>
				    
				    <td><input type="text" placeholder="PLL_CR_DT"  name="PLL_CR_DT" id="PLL_CR_DT"  ></td>
				    
				    <td><input type="text" placeholder="PLL_UPD_UID"  name="PLL_UPD_UID" id="PLL_UPD_UID" ></td>
				    
				     <td><input type="text" placeholder="PLL_UPD_DT"  name="PLL_UPD_DT" id="PLL_UPD_DT"  ></td>-->
				    <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>

				</tr>
				<tr class="odd hide" id="optionTemplate">
				    <!--<td><input type="text" placeholder="PLL_SYS_ID "  name="PLL_SYS_ID " id="PLH_DESC" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PLH_SYS_ID"  name="PLL_PLH_SYS_ID" id="PLL_PLH_SYS_ID" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_COMP_CODE"  name="PLL_COMP_CODE" id="PLL_COMP_CODE" class="form-control"></td>-->
				    
				    <td><input type="text" placeholder="PLL_ITEM_CODE"  name="PLL_ITEM_CODE[]" id="PLL_ITEM_CODE" class="form-control"></td>

				   <!-- <td><input type="text" placeholder="PLL_UOM_CODE"  name="PLL_UOM_CODE[]" id="PLL_UOM_CODE" class="form-control"></td>-->
				 
				   <td>
					<select  id="PLL_UOM_CODE" name="PLL_UOM_CODE[]">
						    <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($uom_code as $row){
						   ?>
						<option value="<?php echo $row['IU_UOM_CODE'];?>"> <?php echo $row['IU_UOM_CODE'];?></option>
					     <?php } ?>
                                                </select>
				    </td>

				    <td><input type="text" placeholder="PLL_PRICE_H"  name="PLL_PRICE_H[]" id="PLL_PRICE_H" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_0_100"  name="PLL_PRICE_W_0_100[]" id="PLL_PRICE_W_0_100" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_101_110"  name="PLL_PRICE_W_101_110[]" id="PLL_PRICE_W_101_110" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_111_120"  name="PLL_PRICE_W_111_120[]" id="PLL_PRICE_W_111_120" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_121_130"  name="PLL_PRICE_W_121_130[]" id="PLL_PRICE_W_121_130" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_131_140"  name="PLL_PRICE_W_131_140[]" id="PLL_PRICE_W_131_140" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_141_150"  name="PLL_PRICE_W_141_150[]" id="PLL_PRICE_W_141_150" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_151_160"  name="PLL_PRICE_W_151_160[]" id="PLL_PRICE_W_151_160" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_161_170"  name="PLL_PRICE_W_161_170[]" id="PLL_PRICE_W_161_170" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_171_180"  name="PLL_PRICE_W_171_180[]" id="PLL_PRICE_W_171_180" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_181_190"  name="PLL_PRICE_W_181_190[]" id="PLL_PRICE_W_181_190" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_191_200"  name="PLL_PRICE_W_191_200[]" id="PLL_PRICE_W_191_200" class="form-control"></td>
				    
				    <td><input type="text" placeholder="PLL_PRICE_W_201_210"  name="PLL_PRICE_W_201_210[]" id="PLL_PRICE_W_201_210" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_211_220"  name="PLL_PRICE_W_211_220[]" id="PLL_PRICE_W_211_220" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_221_230"  name="PLL_PRICE_W_221_230[]" id="PLL_PRICE_W_221_230" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_231_240"  name="PLL_PRICE_W_231_240[]" id="PLL_PRICE_W_231_240" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_241_250"  name="PLL_PRICE_W_241_250[]" id="PLL_PRICE_W_241_250" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_251_260"  name="PLL_PRICE_W_251_260[]" id="PLL_PRICE_W_251_260" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_261_270"  name="PLL_PRICE_W_261_270[]" id="PLL_PRICE_W_261_270" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_271_280"  name="PLL_PRICE_W_271_280[]" id="PLL_PRICE_W_271_280" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_281_290"  name="PLL_PRICE_W_281_290[]" id="PLL_PRICE_W_281_290" class="form-control"></td>

				    <td><input type="text" placeholder="PLL_PRICE_W_291_300"  name="PLL_PRICE_W_291_300[]" id="PLL_PRICE_W_291_300" class="form-control"></td>
				    
				    <td><input type="checkbox" placeholder="PLL_ACTIVE_YN"  name="PLL_ACTIVE_YN" id="PLL_ACTIVE_YN[]" class="form-control">Active</td>
				    
				     <td class="hidden"><input type="text" placeholder="P_PLL_PRICE_W_301_310"  name="P_PLL_PRICE_W_301_310[]" id="P_PLL_PRICE_W_301_310" ></td>
				  <!--  
				    <td><input type="text" placeholder="PLL_LANG_CODE"  name="PLL_LANG_CODE" id="PLL_LANG_CODE" class="form-control"></td>
				    
				    <td><input type="text" placeholder="PLL_CR_UID"  name="PLL_CR_UID" id="PLL_CR_UID" class="form-control"></td>
				    
				    <td><input type="text" placeholder="PLL_CR_DT"  name="PLL_CR_DT" id="PLL_CR_DT"  class="form-control"></td>
				    
				    <td><input type="text" placeholder="PLL_UPD_UID"  name="PLL_UPD_UID" id="PLL_UPD_UID" class="form-control"></td>
				    
				     <td><input type="text" placeholder="PLL_UPD_DT"  name="PLL_UPD_DT" id="PLL_UPD_DT"  class="form-control"></td>-->
				    
				    <!--<button  class="btn btn-primary m-r-5 m-b-5" type="button" id="button1" name="block" value="Add">Add</button>-->
					     <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
				    
				</tr>
				
			    </tbody>
			</table>
		    </div>
				    <div class="pager form-group">
					<div class="col-md-6 control-label">
					    <button class="btn btn-danger pull-left m-r-5 m-b-5" id="clear_data" type="button">Clear</button>
					    <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="save" id="save" value="Save">Submit</button>
					    <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
					    </div>
					    <div class="col-md-6">
					</div>
				    </div>
		 </form>
		</div>
	    </div>
	</div>
    </div>
	</div>
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

</div>
</body>
</html>


<script>
    
	$('.btn-add').click(function() {
	var $template = $('#optionTemplate'),
	$clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
	removerow();
	});
 
   function removerow(){
      $(".removeButton").on('click',function(){
      var $row    = $(this).parents('.odd');
      $row.remove();
      });
      };

  
         $('#clear_data').click(function(){
        $(myForm).bootstrapValidator();
        $(myForm).data('bootstrapValidator').resetForm();
        $('#myForm')[0].reset();
    });
    
	$('#myForm').on('blur', '[name="PLL_ITEM_CODE[]"]', function() {
	var menu =  $(this).val();
	var $row    = $(this).parents('.odd');
	//alert(menu);
	if (menu!="") {
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Price_Get_Menu",
	dataType:'json',
	data: {menu: menu},
	success: function(json) {
	    if (json)
	    {
	    var exist=json.acc_code;
		if (exist!="") {
		   alert("Item Exist");
		    $row.find("select[name='PLL_UOM_CODE[]']").val(json.acc_desc);
		     $row.find("select[name='PLL_UOM_CODE[]']").attr("readonly", true);
		}
		else{
		    alert("Item does not exist");
		     $row.find("input[name='PLL_ITEM_CODE[]']").val("");
		}
	    }
	    }
	    });
 
	}
	});
</script>

<script>

$(document).ready(function() {


$('#myForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        
        fields: {
            PLH_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    remote: {
			message: 'Price code already existed',
			url: '<?php  echo site_url('Sales/AjaxPrice')?>',
			type: 'POST'
			},
		    regexp: {
                       regexp: /^[A-Z0-9]+$/,
                        message: 'Disallowed charcter'
                    }
                    
                }
            },
            PLH_DESC: {
		message: 'The Description is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                                       
                }
            },
            PLH_CCY_CODE: {
		message: 'The Exchanging Rate is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                }
            },
            PLH_FROM_DT: {
		  trigger:'blur',
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    PLH_UPTO_DT: {
		  trigger:'blur',
		message: 'The Payment term Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
            PLH_ACTIVE_YN: {
		message: 'The Credit Limit is not valid',
                validators: {
                    
                } 
            }
	}
    });
});
</script>






<script type="text/javascript">
          $(function () {
$('#datetimepicker6').datetimepicker({
    format:'DD-MMM-YY'
         });
$('#datetimepicker7').datetimepicker({
    format:'DD-MMM-YY'
    });
$("#datetimepicker6").on("dp.change",function (e) {
$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker7").on("dp.change",function (e) {
$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});
});    
</script>