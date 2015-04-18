<!--Author: Gobi.C
Created on: 04/03/15
Modified on: 21/03/15
-->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Purchase Request Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Purchase Request Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Purchase Request Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('Procurement/PurchaseRequestTransaction_Add');?>" class="form-horizontal form12">
			    <div class="row">
				<label class="col-md-1 control-label">Transaction</label>
				<div class="col-md-5">
				    <div class="input-group">
					<input type="text" name="MENU_TXN_CODE" id="MENU_TXN_CODE" placeholder="MENU_TXN_CODE" value="<?php echo $this->session->userdata('MENU_TXN_CODE'); ?>" readonly="" class="form-control">
					<!--<select name="MENU_TXN_CODE" id="MENU_TXN_CODE" class="form-control">
					    <option value="mih_txn_code">PRQH_TXN_CODE</option>
					
					</select>-->
					<span class="input-group-addon"></span>
					<!--<input type="text" name="TXN_DESC" placeholder="TXN_DESC" id="txn_desc" class="form-control">-->
					<input type="text" name="TXN_DESC" placeholder="TXN_DESC" id="txn_desc" value="<?php echo $this->session->userdata('TXN_DESC'); ?>" class="form-control">
				    </div>
				</div>
				<label class="col-md-1 control-label">Txn Number</label>
				<div class="col-md-2">
				    <input type="text" name="PRQH_TXN_NO" placeholder="PRQH_TXN_NO" id="grh_doc_no" class="form-control">
				</div>
				<label class="col-md-1 control-label">Txn Date</label>
				<div class="col-md-2">
				     <input type="text"  name="PRQH_TXN_DT" placeholder="PRQH_TXN_DT" id="grh_doc_dt" class="form-control default_date">
				</div>
			    </div>
			    <div class="row p-t-20">
				<label class="col-md-1 control-label">Requested By</label>
				<div class="col-md-5">
				    <input type="text" name="PRQH_PERSON_CODE" id="grh_supl_code" placeholder="PRQH_PERSON_CODE" class="form-control">				    
				    <input type="hidden" name="grh_locn_co" placeholder="" id="grh_locn_co" class="input-sm">
				</div>
			    </div>
			    <div class="row p-t-20">
				<label class="col-md-1 control-label">Delivery Loacation</label>
				    <div class="col-md-5">
					<!--<input type="text" name="PRQH_DLV_LOGN_CODE" id="grh_inv_no" placeholder="PRQH_DLV_LOGN_CODE" class="form-control">-->
					<select name="PRQH_DLV_LOGN_CODE"  id="grh_inv_no" class="form-control">
						<option value="">Select</option>
						<?php if (count($location) > 0 )
						{
						foreach ($location as $row_txn)
						{
						?>
						<option value="<?php echo $row_txn['LOCN_CODE']; ?>"><?php echo $row_txn['LOCN_DESC']; ?></option>
						<?php } }?>>
					</select>
				    </div>
				     <label class="col-md-1 control-label">Status</label>
				    <div class="col-md-2">
					 <input type="text" name="PRQH_STATUS" placeholder="PRQH_STATUS" id="prqhSTATUS" class="form-control">					
				    </div>
				    <label class="col-md-1 control-label">Delivery Date</label>
				    <div class="col-md-2">
					<input type="text" value="" name="PRQH_DLV_DT" placeholder="PRQH_DLV_DT" id="datepicker" class="form-control default_date">
				    </div>
				    <label class="col-md-1 control-label"></label>
				    <div class="col-md-2">
					<input type="hidden" name="grh_fcl_lcl" placeholder="PRQH_FCL_LCL" id="grh_fcl_lcl" class="input-sm">
					<!--<input type="submit" class="btn  btn-sm btn-info" name="submit" value="Reference">-->
				    </div>
			    </div>                             			
			    <div class="p-t-20 col-md-12">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="tab" href="#nav-pills-tab-1">Flex</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-pills-tab-2">Line</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-pills-tab-3">Action</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="nav-pills-tab-1" class="tab-pane fade active in">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 01</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="PRQH_FLEX_01" placeholder="PRQH_FLEX_01" id="grh_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_11" placeholder="PRQH_FLEX_11" id="grh_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_02" placeholder="PRQH_FLEX_02" id="grh_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_12" placeholder="PRQH_FLEX_12" id="grh_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_03" placeholder="PRQH_FLEX_03" id="grh_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_13" placeholder="PRQH_FLEX_13" id="grh_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_04" placeholder="PRQH_FLEX_04" id="grh_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_14" placeholder="PRQH_FLEX_14" id="grh_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_05" placeholder="PRQH_FLEX_05" id="grh_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_15" placeholder="PRQH_FLEX_15" id="grh_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_06" placeholder="PRQH_FLEX_06" id="grh_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_16" placeholder="PRQH_FLEX_16" id="grh_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_07" placeholder="PRQH_FLEX_07" id="grh_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_17" placeholder="PRQH_FLEX_17" id="grh_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_08" placeholder="PRQH_FLEX_08" id="grh_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_18" placeholder="PRQH_FLEX_18" id="grh_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLIX_09" placeholder="GRH_FLIX_09" id="grh_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_19" placeholder="PRQH_FLEX_19" id="grh_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLIX_10" placeholder="GRH_FLIX_10" id="grh_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="PRQH_FLEX_20" placeholder="PRQH_FLEX_20" id="grh_flix_20" class="form-control">
						    </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-pills-tab-2" class="tab-pane fade">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
							    <th><center>Line</center></th>
							    <th><center>Item Code</center></th>
							    <th><center>Item Description</center></th>
							    <th><center>UOM</center></th>
							    <th><center>Quantity</center></th>
							    <th><center>Qty Received</center></th>
							    <th><center>Price</center></th>
							    <th><center>Value</center></th>
							    <th><center>Descriptions</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
							    <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_LINE[]" value="1"></span></td>
                                                            <td><span>
								<select name="ITEM_CODE[]"  id="ITEM_CODE1" class="form-control">
								    <option value="">Select</option>
								    <?php if (count($InviteMTerm) > 0 )
								    {
									foreach ($InviteMTerm as $row_txn)
									{
								    ?>
								    <option value="<?php echo $row_txn['ITEM_CODE']; ?>"><?php echo $row_txn['ITEM_CODE']; ?></option>
								    <?php } }?>>
								</select></span>
							    </td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="ITEM_DESC[]" id="ITEM_DESC1" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="ITEM_UOM[]" id="ITEM_UOM1"></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_QTY[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_QTY_RECEIVED[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_PRICE[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_VALUE[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_DESC[]" ></span></td>
                                                            <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
                                                        </tr>
                                                        <tr class="odd hide" id="optionTemplate">
							    <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_LINE[]" value="1"></span></td>
                                                            <td><span><select name="ITEM_CODE[]"  id="ITEM_CODE1" class="form-control">
								    <option value="mih_txn_code">PRQH_TXN_CODE</option>
								    <?php if (count($InviteMTerm) > 0 )
								    {
									foreach ($InviteMTerm as $row_txn)
									{
								    ?>
								    <option value="<?php echo $row_txn['ITEM_CODE']; ?>"><?php echo $row_txn['ITEM_CODE']; ?></option>
								    <?php } }?>>
								</select></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="ITEM_DESC[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="ITEM_UOM[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_QTY[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_QTY_RECEIVED[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_PRICE[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_VALUE[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" size="10" maxlength="50" name="PRQL_DESC[]" ></span></td>
                                                            <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-pills-tab-3" class="tab-pane fade">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th><center>Action</center></th>
                                                            <th><center>User ID</center></th>
                                                            <th><center>Date</center></th>
							    <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd1">
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><button type="button" class="btn btn-add1 btn-sm btn-primary" data-template="textbox">Add</button></td>
                                                        </tr>
                                                        <tr class="odd1 hide" id="optionTemplate1">
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton1" data-template="textbox" >Remove</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
			    <div class="col-md-offset-1 col-md-7 p-t-5">
			    <fieldset>
                                <div class="col-md-offset-2 col-md-5">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                    <input type="submit" name="add" class="btn btn-sm btn-success" value="Save">
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
    $('.default_date').datetimepicker({
	format: 'DD-MMM-YY'
	});
   // });
//$(document).ready(function() {
    
    
   $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
           TXN_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Description is required'
                    },
		    remote: {
                        message: 'PT_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Procurement/Ajax_PT_CODE')?>',
                        type: 'POST'
                    }
                   
                }
            },
	    PRQH_TXN_NO: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Number is required'
                    }
                   
                }
            },
	    PRQH_TXN_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Date is required'
                    }
                   
                }
            },
	    PT_UPTO_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'PT_UPTO_DT is required'
                    }
                   
                }
            },
	    PRQH_PERSON_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Person Code is required'
                    }
                   
                }
            },
	    PRQH_DLV_LOGN_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Delivery Location is required'
                    }
                   
                }
            },
	    PRQH_DLV_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Delivery Date is required'
                    }
                   
                }
            },
	    PRQL_QTY: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Quantity is required'
                    }
                   
                }
            },
	    PRQL_QTY_RECEIVED: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Quantity received is required'
                    }
                   
                }
            },
	    PRQL_PRICE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Price is required'
                    }
                   
                }
            },
	    PRQL_VALUE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Value is required'
                    }
                   
                }
            },
	    PRQL_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Description is required'
                    }
                   
                }
            },
	}
    })
});

    var row_count = 1;
    function form_reset() {

    $('input[type=text]').val('');
    $('input[type=checkbox]').removeAttr('checked');
    }
    
    $('.btn-add').click(function() {
	row_count++;
    var $template = $('#optionTemplate'),
    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    removerow();
    $clone.find('[name="PRQL_LINE[]"]').val(row_count);
    });
     
    function removerow(){
    $(".removeButton").on('click',function(){
    var $row    = $(this).parents('.odd');
    $row.remove();
    });
    };
    
    
    $('.btn-add1').click(function() {
    var $template = $('#optionTemplate1'),
    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    removerow1();
    });
     
    function removerow1(){
    $(".removeButton1").on('click',function(){
    var $row    = $(this).parents('.odd1');
    $row.remove();
    });
    };
</script>

<script>
 $('#form_validation').on('change', '[name="ITEM_CODE[]"]', function() {
 var item_code = $( this ).val();
var $row    = $(this).parents('.odd');
		    
     $.ajax({
	type: "POST",
	url: "<?=base_url()?>Procurement/GetInvt_M_ItemTable2",
	 dataType:"json",
	 data:{item_code_data:item_code} ,
	success: function (json) {
	    //alert(json.ITEM_DESC);
	    //alert(json.ITEM_DESC);
	       //$("#answer").val(json.total);
	    
	    
	    //var error=json;
	    //if (error=='error'){
		//alert("Entered product does not created as Item.");
		//}
		//else{
		    //alert(error);
		    
		    $row.find("input[name='ITEM_DESC[]']").val(json.ITEM_DESC);
		    $row.find("input[name='ITEM_UOM[]']").val(json.ITEM_UOM_CODE);
		    //$($name).val(json.ITEM_DESC);
		    //$($dob).val(json.ITEM_UOM_CODE);
		    
		    //}
		    },
		    });
});
    
    
 function Item_code1() {
    
    var item_code=$(this).val();
    alert(item_code);
    $.ajax({
	type: "POST",
	url: "<?=base_url()?>Procurement/GetInvt_M_ItemTable2",
	 dataType:"json",
	 data:{item_code_data:item_code} ,
	success: function (json) {
	    
	    //alert(json.ITEM_DESC);
	       //$("#answer").val(json.total);
	    
	    
	    //var error=json;
	    //if (error=='error'){
		//alert("Entered product does not created as Item.");
		//}
		//else{
		    //alert(error);
		    
		    var $row    = $(this).parents('.odd'),
		    $name   = $row.find('[name="ITEM_DESC[]"]');
		    $dob   = $row.find('[name="ITEM_UOM[]"]');
		    $($name).val(json.ITEM_DESC);
		    $($dob).val(json.ITEM_UOM_CODE);
		    //}
		    },
		    });
    
 }


 </script>
</body>
</html>

