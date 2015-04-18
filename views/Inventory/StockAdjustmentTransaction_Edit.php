<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 19/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Stock Adjustment Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Stock Adjustment Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Stock Adjustment Transaction</h4>
		</div>
		<div class="panel-body">
		    <?php foreach($GetStockAdjTxn as $SAT)?>
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/StockAdjustmentTransaction_Edit/'.$SAT['SAH_SYS_ID']);?>" class="form-horizontal">
			    <input type="hidden" id="row_contains" name="row_contains" value="1" />
			   
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction</label>
			    <div class="col-md-5">
				<div class="input-group">
				    <input type="text" name="SAH_TXN_CODE" id="SAH_TXN_CODE" value="<?php  echo $SAT['SAH_TXN_CODE']?>" class="form-control" readonly/>
                                    <!--<select class="form-control">
					<option value="sah_txn_code">SAH_TXN_CODE</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
                                    </select>-->
                                    <span class="input-group-addon"></span>
				    <input type="text" name="SAH_TXN_DESC" id="SAH_TXN_DESC" value="Stock Adjustment<?php  //echo $SAT['SAH_TXN_DESC']?>" class="form-control" readonly/>
				    
				  
                                </div>
			    </div>
			    <label class="col-md-1 control-label">Txn Number</label>
			    <div class="col-md-2">
				<input type="text" name="SAH_TXN_NO" placeholder="SAH_TXN_NO" id="SAH_TXN_NO" value="<?php  echo $SAT['SAH_TXN_NO']?>" readonly class="form-control">
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			   <div class="col-md-2">
				<input type="text" name="SAH_TXN_DT" placeholder="SAH_TXN_DT" id="SAH_TXN_DT"  value="<?php  echo $SAT['SAH_TXN_DT']?>" class="form-control input-group datepicker-txn">
				<!--<input type="text" name="SAH_TXN_DT" placeholder="SAH_TXN_DT" id="SAH_TXN_DT" class="form-control">-->
			    </div>
                           </div>
			    
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Location Code</label>
			    <div class="col-md-5">
				<select name="SAH_LOCN_CODE" placeholder="SAH_LOCN_CODE"  id="SAH_LOCN_CODE" class="form-control">
					<option  selected disabled>Select</option>
					<?php  foreach($GetLoctCode as $lc) {?>
					<option value="<?php echo $lc['LOCN_CODE'] ?>"<?php if($SAT['SAH_LOCN_CODE']==$lc['LOCN_CODE']) echo"selected"; ?> ><?php echo $lc['LOCN_DESC'] ?></option>
					<?php }?>
                                    </select>
			    </div>
			    </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-5">
				<input type="text" name="SAH_DESC" id="SAH_DESC" value="<?php  echo $SAT['SAH_DESC']?>" placeholder="SAH_DESC" class="form-control">
			    </div>
			    </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<input type="hidden" name="sah_inv_no" id="sah_inv_no" value="" placeholder="SAH_INV_NO" class="form-control">
			    </div>
			    <label class="col-md-3 control-label"></label>
			    <label class="col-md-1 control-label">Status</label>
			    <div class="col-md-2">
				<input type="text" name="SAH_STATUS" placeholder="SAH_STATUS" id="SAH_STATUS"  value="<?php  echo $SAT['SAH_STATUS']?>" class="form-control">
			    </div>
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<input type="submit" class="btn  btn-sm btn-primary" name="submit" value="Reference">
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
                                                        <input type="text" name="SAH_FLEX_01" placeholder="SAH_FLEX_01" value="<?php  echo $SAT['SAH_FLEX_01']?>" id="sah_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_11" placeholder="SAH_FLEX_11"  value="<?php  echo $SAT['SAH_FLEX_11']?>" id="sah_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_02" placeholder="SAH_FLEX_02" value="<?php  echo $SAT['SAH_FLEX_02']?>" id="sah_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_12" placeholder="SAH_FLEX_12" value="<?php  echo $SAT['SAH_FLEX_12']?>" id="sah_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_03" placeholder="SAH_FLEX_03" value="<?php  echo $SAT['SAH_FLEX_03']?>" id="sah_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_13" placeholder="SAH_FLEX_13" value="<?php  echo $SAT['SAH_FLEX_13']?>" id="sah_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_04" placeholder="SAH_FLEX_04" value="<?php  echo $SAT['SAH_FLEX_04']?>" id="sah_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_14" value="<?php  echo $SAT['SAH_FLEX_14']?>" placeholder="SAH_FLEX_14" id="sah_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_05" placeholder="SAH_FLEX_05" value="<?php  echo $SAT['SAH_FLEX_05']?>" id="sah_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_15" value="<?php  echo $SAT['SAH_FLEX_15']?>" placeholder="SAH_FLEX_15" id="sah_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_06" placeholder="SAH_FLEX_06" value="<?php  echo $SAT['SAH_FLEX_06']?>" id="sah_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_16" placeholder="SAH_FLEX_16"  value="<?php  echo $SAT['SAH_FLEX_16']?>" id="sah_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_07" placeholder="SAH_FLEX_07" value="<?php  echo $SAT['SAH_FLEX_07']?>" id="sah_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_17" placeholder="SAH_FLEX_17"  value="<?php  echo $SAT['SAH_FLEX_17']?>" id="sah_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_08" placeholder="SAH_FLEX_08" value="<?php  echo $SAT['SAH_FLEX_08']?>" id="sah_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_18" placeholder="SAH_FLEX_18" value="<?php  echo $SAT['SAH_FLEX_18']?>" id="sah_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_09" placeholder="SAH_FLIX_09" value="<?php  echo $SAT['SAH_FLIX_09']?>" id="SAH_FLEX_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_19" placeholder="SAH_FLEX_19" value="<?php  echo $SAT['SAH_FLEX_19']?>" id="sah_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_10" placeholder="SAH_FLIX_10" value="<?php  echo $SAT['SAH_FLIX_10']?>" id="sah_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="SAH_FLEX_20" placeholder="SAH_FLEX_20"  value="<?php  echo $SAT['SAH_FLEX_20']?>" id="sah_flix_20" class="form-control">
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
							    <th>
								<center>Line</center>
							    </th>
							    <th>
								<center>Item Code</center>
							    </th>
							    <th>
								<center>Item Description</center>
							    </th>
							    <th>
								<center>UOM</center>
							    </th>
							    <th>
								<center>System Quantity</center>
							    </th>
							    <th>
								<center>Adjistment Quantity</center>
							    </th>
							    <th>
								<center>Quantity After Adjustment</center>
							    </th>
							    <th>
								<center>Price </center>
							    </th>
							    <th>
								<center>System Value</center>
							    </th>
							    <th>
								<center>Adjustment Value</center>
							    </th>
							    <th>
								<center>Value After Adjustment </center>
							    </th>
							    <th>
								<center>Description</center>
							    </th>
							    <th>
								<center><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></center>
							    </th>
							   
                                                        </tr>
                                                    </thead>
                                                    <tbody>
							 
                                                        
							<?php
							$TOT= count($GetStockAdjTxnLine);
							foreach( $GetStockAdjTxnLine as $SATL)
								   
							{?>
                                                        <tr class="old" >
							    <!--<input type="hidden" name="add_1" value="1" >-->
							    <input type="hidden" name="add1" id="add1" value="<?php echo $TOT;?>" >
							    <input type="hidden" name="SAL_SYS_ID[]" value="<?php echo $SATL['SAL_SYS_ID'];?>">
							    <td><input type="text" name="SAL_LINE[]" id="SAL_LINE[]" value="<?php echo $SATL['SAL_LINE'] ?>"></td>
							    <td>
								<select name="SAL_ITEM_CODE[]" id="SAL_ITEM_CODE">
								    
								    <option  selected disabled>Select</option>
								    <?php  foreach($GetItemCode as $lc) {?>
								    <option value="<?php echo $lc['ITEM_CODE'] ?>" <?php if($SATL['SAL_ITEM_CODE']== $lc['ITEM_CODE'] )echo "selected"?> ><?php echo $lc['ITEM_CODE'] ?></option>
								    <?php }?>
								</select>
							    </td>
							    <td><input type="text" name="SAL_ITEM_DESC[]" value="<?php echo $SATL['SAL_ITEM_DESC'] ?>" id="SAL_ITEM_DESC[]" readonly></td>
							    <td><input type="text" name="SAL_UOM_CODE[]"  value="<?php echo $SATL['SAL_UOM_CODE'] ?>" id="SAL_UOM_CODE[]" readonly></td>
							    <td><input type="text" name="SAL_SYS_QTY[]" value="<?php echo $SATL['SAL_SYS_QTY'] ?>" id="SAL_SYS_QTY[]" ></td>
							    <td><input type="text" name="SAL_ADJ_QTY[]" value="<?php echo $SATL['SAL_ADJ_QTY'] ?>" id="SAL_ADJ_QTY[]" ></td>
							    <td><input type="text" name="SAL_QTY_AFT_ADJ[]" value="<?php echo $SATL['SAL_QTY_AFT_ADJ'] ?>" id="SAL_QTY_AFT_ADJ[]"  readonly></td>
							    <td><input type="text" name="SAL_PRICE[]" value="<?php echo $SATL['SAL_PRICE'] ?>" id="SAL_PRICE[]" ></td>
							    <td><input type="text" name="SAL_SYS_VALUE[]" value="<?php echo $SATL['SAL_SYS_VALUE'] ?>" id="SAL_SYS_VALUE[]" ></td>
							    <td><input type="text" name="SAL_ADJ_VALUE[]" value="<?php  echo $SATL['SAL_ADJ_VALUE'] ?>" id="SAL_ADJ_VALUE[]" ></td>
							    <td><input type="text" name="SAL_VALUE_AFT_ADJ[]" value="<?php echo $SATL['SAL_VALUE_AFT_ADJ'] ?>" id="SAL_VALUE_AFT_ADJ[]" ></td>
							    <td><input type="text" name="SAL_DESC[]" value="<?php echo $SATL['SAL_DESC'] ?>" id="SAL_DESC[]" ></td>
                                                           <td> <a  href="<?php echo base_url("InventoryController/DeleteStockAdjustmentTransactionLines/".$SATL['SAL_SYS_ID']) ?>" onclick="return confirm('Are you sure you want to delete this Lines?');" ><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></a></td>
                                                        </tr>
							
							

							<?php }?>
							<tr class="odd hide" id="optionTemplate">
							     <input type="hidden" name="add" value="1" >
							    <input type="hidden" name="add111" value="1" >
							    
							    <td><input type="text" name="SAL_LINE1[]" ></td>
							    <td>
								<select name="SAL_ITEM_CODE1[]" id="SAL_ITEM_CODE">
								    
								    <option  selected disabled>Select</option>
								    <?php  foreach($GetItemCode as $lc) {?>
								    <option value="<?php echo $lc['ITEM_CODE'] ?>"><?php echo $lc['ITEM_CODE'] ?></option>
								    <?php }?>
								</select>
							    </td>
							    <td><input type="text" name="SAL_ITEM_DESC1[]" id="SAL_ITEM_DESC1[]" readonly></td>
							    <td><input type="text" name="SAL_UOM_CODE1[]" id="SAL_UOM_CODE1[]" readonly></td>
							    <td><input type="text" name="SAL_SYS_QTY1[]" id="SAL_SYS_QTY1[]" ></td>
							    <td><input type="text" name="SAL_ADJ_QTY1[]" id="SAL_ADJ_QTY1[]" ></td>
							    <td><input type="text" name="SAL_QTY_AFT_ADJ1[]" id="SAL_QTY_AFT_ADJ1[]" readonly ></td>
							    <td><input type="text" name="SAL_PRICE1[]" id="SAL_PRICE1[]" ></td>
							    <td><input type="text" name="SAL_SYS_VALUE1[]" id="SAL_SYS_VALUE1[]" ></td>
							    <td><input type="text" name="SAL_ADJ_VALUE1[]" id="SAL_ADJ_VALUE1[]" ></td>
							    <td><input type="text" name="SAL_VALUE_AFT_ADJ1[]" id="SAL_VALUE_AFT_ADJ1[]" ></td>
							    <td><input type="text" name="SAL_DESC1[]" id="SAL_DESC[]" ></td>
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
                                                        <tr class="odd">
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
                                                        </tr>
                                                        <tr class="odd hide" id="optionTemplate">
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
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
                                   
                                    <input type="submit" name="Update" class="btn btn-sm btn-success" value="Update">
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
    
	
	var d = new Date();
	var month=d.getMonth()+1;
	var date = d.getDate()+1;
	var nexdate= month +"/"+date+"/"+d.getFullYear();
	//alert(nexdate);
       $('.datepicker-txn').datetimepicker({
		  format: 'DD-MMM-YYYY',
		minDate:nexdate
		  });   
    
    
    $('#').bootstrapValidator({
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
                    }
                }
            },
	    lg_active: {
		message: 'The ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACTIVE is required and can\'t be empty'
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

var row_count=$('#add1').val();
if (isNaN(row_count)) {
	row_count=0;
    }

$('.btn-add').click(function() {
   row_count++; 
var $template = $('#optionTemplate'),
$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);

$clone.find('[name="SAL_LINE1[]"]').val(row_count);

    $clone.find('[name="add1"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('name','add_'+row_count);
    

removerow();
});
 
function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$row.remove();
});
};
</script>
<script>
    $('#form_validation').on('change', '[name="SAL_ITEM_CODE[]"]', function()
    {
    
  var $row    = $(this).parents('.old');
 

 var item_code= $(this).val();
 
 alert(item_code);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>InventoryController/GetItemDesc",
	dataType:"json",
	data:{item_code:item_code} ,
	success: function (json) {
	
	//consloe.log(json);
	$row.find("input[name='SAL_ITEM_DESC[]']").val(json.ITEM_DESC);
	$row.find("input[name='SAL_UOM_CODE[]']").val(json.ITEM_UOM_CODE);
	//another ajax for quanityt
	alert(item_code);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>InventoryController/GetSysQty",
	dataType:"json",
	data:{item_code1:item_code} ,
	success: function (json) {
	
	//consloe.log(json);
	$row.find("input[name='SAL_SYS_QTY[]']").val(json.SL_QTY);
	
	
	
	},
	});
	
	
	},
	});
  

});
    
   
$('#form_validation').on('blur', '[name="SAL_ADJ_QTY[]"]', function()
{

    var $row    = $(this).parents('.old');
    var val1= parseInt($(this).val());
    
    
    var val2=parseInt($row.find("input[name='SAL_SYS_QTY[]']").val());
    if (isNaN(val1)) {
	val1=0;
    }
    if (isNaN(val2)) {
	val2=0;
    }
    
    var tot=val1+val2;
    $row.find("input[name='SAL_QTY_AFT_ADJ[]']").val(tot);

});
$('#form_validation').on('blur', '[name="SAL_ADJ_VALUE[]"]', function()
{

    var $row    = $(this).parents('.old');
    var val1= parseInt($(this).val());
   
    var val2=parseInt($row.find("input[name='SAL_SYS_VALUE[]']").val());
      
    if (isNaN(val1)) {
	val1=0;
    }
    if (isNaN(val2)) {
	val2=0;
    }
    
    var tot=val1+val2;
    $row.find("input[name='SAL_VALUE_AFT_ADJ[]']").val(tot);

});



    
</script>

<script>
    $('#form_validation').on('change', '[name="SAL_ITEM_CODE1[]"]', function()
    {
    
  var $row    = $(this).parents('.odd');
 

 var item_code= $(this).val();;
 
 alert(item_code);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>InventoryController/GetItemDesc",
	dataType:"json",
	data:{item_code:item_code} ,
	success: function (json) {
	
	//consloe.log(json);
	$row.find("input[name='SAL_ITEM_DESC1[]']").val(json.ITEM_DESC);
	$row.find("input[name='SAL_UOM_CODE1[]']").val(json.ITEM_UOM_CODE);
	//another ajax for quanityt
	alert(item_code);
	$.ajax({
	type: "POST",
	url: "<?=base_url()?>InventoryController/GetSysQty",
	dataType:"json",
	data:{item_code1:item_code} ,
	success: function (json) {
	
	//consloe.log(json);
	$row.find("input[name='SAL_SYS_QTY1[]']").val(json.SL_QTY);
	
	
	
	},
	});
	
	
	},
	});
  

});
    
   
$('#form_validation').on('blur', '[name="SAL_ADJ_QTY1[]"]', function()
{

    var $row    = $(this).parents('.odd');
    var val1= parseInt($(this).val());
    
    
    var val2=parseInt($row.find("input[name='SAL_SYS_QTY1[]']").val());
    if (isNaN(val1)) {
	val1=0;
    }
    if (isNaN(val2)) {
	val2=0;
    }
    
    var tot=val1+val2;
    $row.find("input[name='SAL_QTY_AFT_ADJ1[]']").val(tot);

});
$('#form_validation').on('blur', '[name="SAL_ADJ_VALUE1[]"]', function()
{

    var $row    = $(this).parents('.odd');
    var val1= parseInt($(this).val());
   
    var val2=parseInt($row.find("input[name='SAL_SYS_VALUE1[]']").val());
      
    if (isNaN(val1)) {
	val1=0;
    }
    if (isNaN(val2)) {
	val2=0;
    }
    
    var tot=val1+val2;
    $row.find("input[name='SAL_VALUE_AFT_ADJ1[]']").val(tot);

});

    
</script>



</body>
</html>

