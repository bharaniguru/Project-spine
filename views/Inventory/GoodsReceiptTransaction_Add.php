<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Goods Receipt Transaction</li>	
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header"> Goods Receipt Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Goods Receipt Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/GoodsReceiptTransaction_Add');?>" class="form-horizontal">
			    <div class="row">
		
			    <label class="col-md-1 control-label">Txn Code</label>
			    <div class="col-md-2">
				<input type="text" readonly="" value="GRN"name="GRH_TXN_CODE" placeholder="GRH_TXN_CODE" id="GRH_TXN_CODE" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Txn Number</label>
			    <div class="col-md-2">
				<input type="text" readonly="" value="<?php echo $result['return_status']?>"name="GRH_TXN_NO" placeholder="GRH_TXN_NO" id="mih_doc_no" class="form-control">
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			   <div class="col-md-2">
				<input type="text" name="GRH_TXN_DATE" placeholder="GRH_TXN_DATE" id="GRH_TXN_DATE" class="form-control">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Supplier</label>
			    <div class="col-md-5">
				<input type="text" name="GRH_SUPL_CODE" id="GRH_SUPL_CODE" placeholder="GRH_SUPL_CODE" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Location</label>
			    <div class="col-md-2">
				    <select name="GRH_LOC_CODE" id="GRH_LOC_CODE"class="form-control">
				<option >Select</option>
				<?php if (count($location) > 0 )
				{
				foreach ($location as $row)
				{
				?>
				<option value="<?php echo $row['LOCN_CODE']; ?>"><?php echo $row['LOCN_DESC']; ?></option>
                               <?php } }?>
				</select>
			    </div>
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<a href="#modal-dialog" class="btn btn-sm btn-primary" data-toggle="modal">Reference</a>
			    </div>
                           </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">Invoice No</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_INV_NO" id="GRH_INV_NO" placeholder="GRH_INV_NO" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Invoice Date</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_INV_DATE" placeholder="GRH_INV_DATE" id="GRH_INV_DATE" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Bill Of Entry</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_BILL_OF" id="GRH_BILL_OF" placeholder="GRH_BILL_OF_ENTRY" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">FCL / LCL</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_FCL_LCL" placeholder="GRH_FCL_LCL" id="GRH_FCL_LCL" class="form-control">
			    </div>			    
                           </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">No of Packages</label>
			    <div class="col-md-2">
				<input type="text" name="NO_OF_PKG" id="NO_OF_PKG" placeholder="NO_OF_PKG" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Type of Packages</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_TYPE_OF_PKG" id="GRH_TYPE_OF_PKG" placeholder="GRH_TYPE_OF_PKG" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">GRH Description</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_DESC" id="GRH_DESC" placeholder="GRH_DESC" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">STATUS</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_STATUS" placeholder="GRH_STATUS" id="GRH_STATUS" class="form-control">
			    </div>
			     </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">Container Size</label>
			    <div class="col-md-2">
				<input type="text" name="GRH_CONTAINER_SIZE" id="GRH_CONTAINER_SIZE" placeholder="GRH CONTAINER SIZE" class="form-control">
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
                                                        <input type="text" name="mih_flix_01" placeholder="GRH_FLEX_01" id="mih_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_11" placeholder="GRH_FLEX_11" id="mih_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_02" placeholder="GRH_FLEX_02" id="mih_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_12" placeholder="GRH_FLEX_12" id="mih_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_03" placeholder="GRH_FLEX_03" id="mih_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_13" placeholder="GRH_FLEX_13" id="mih_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_04" placeholder="GRH_FLEX_04" id="mih_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_14" placeholder="GRH_FLEX_14" id="mih_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_05" placeholder="GRH_FLEX_05" id="mih_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_15" placeholder="GRH_FLEX_15" id="mih_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_06" placeholder="GRH_FLEX_06" id="mih_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_16" placeholder="GRH_FLEX_16" id="mih_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_07" placeholder="GRH_FLEX_07" id="mih_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_17" placeholder="GRH_FLEX_17" id="mih_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_08" placeholder="GRH_FLEX_08" id="mih_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_18" placeholder="GRH_FLEX_18" id="mih_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_09" placeholder="GRH_FLIX_09" id="mih_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_19" placeholder="GRH_FLEX_19" id="mih_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_10" placeholder="GRH_FLIX_10" id="mih_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_20" placeholder="GRH_FLEX_20" id="mih_flix_20" class="form-control">
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
                                                            <th><center>Ref Txn Code</center></th>
                                                            <th><center>Ref Txn No</center></th>
                                                            <th><center>Item Code</center></th>
                                                            <th><center>Item Description</center></th>
                                                            <th><center>UOM</center></th>
                                                            <th><center>Quantity</center></th>
                                                            <th><center>Description</center></th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody id="result">
                                                        <tr class="odd">
							    <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
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
	<div class="modal fade" id="modal-dialog">
				    <div class="modal-dialog modal-lg">
					    <div class="modal-content">
						    <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							    <h4 class="modal-title">Reference Document</h4>
						    </div>
						    <div class="modal-body">
							<div class="panel-body">
							     <div class="form-group">
						<!--<label class="col-md-1 control-label"></label>-->
								<div class="row">
								<div class="col-md-5">
								    <label>Reference Document Available :</label>
								    <select class="form-control" id="first" size="10" multiple="">
									<!--<option>CODE, TXN_NO, TXN_DT</option>-->
									<?php foreach($result2 as $row2) { ?>
									<option value="<?php echo $row2['POH_SYS_ID']?>"><?php echo $row2['POH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['POH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['POH_TXN_DT'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['POH_SUPL_AC_CODE'];?></option>
									<?php } ?>
								    </select>
								    <label class="radio-inline">
									<input type="radio" checked="" value="option1" name="optionsRadios">
									    Pull Automatic
								    </label>
								    <label class="radio-inline">
									<input type="radio" value="option2" name="optionsRadios">
									    Scan Barcode
								    </label>
								    <label class="btn">
									<button type="button" class="btn btn-sm btn-danger" onclick="listbox_selectall('first','second', false)">Clear</button>
								    </label>
								</div>
								<div class="col-md-2 p-t-40">
								    <label class="btn p-l-20">
									<button type="button" class="btn btn-sm btn-info" onclick="next('first', 'second')"><i class="fa fa-caret-right fa-2x"></i></button>
								    </label>
								    <label class="btn p-l-20">
									<button class="btn btn-sm btn-info" type="button" onclick="next('second', 'first')"><i class="fa fa-caret-left fa-2x"></i></button>
									<!--<button class="btn btn-sm btn-danger" type="button" onclick="listbox_selectall('second', false)">Clear</button>-->
								    </label>
								</div>
								<div class="col-md-5">
								    <label>Selected :</label>
								    <select class="form-control" id="second" size="10" multiple="">
									
								    </select>
								    
								</div>
								</div>
								</div>
							</div>
						    </div>
						    <div class="modal-footer">
							    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
							    <a href="javascript:;" class="btn btn-sm btn-success" id="transfer">OK</a>
						    </div>
					    </div>
				    </div>
				</div>
			
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
            GRH_TXN_DATE: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION DATE is required '
                    },
		    remote: {
                        message: 'The TRANSACTION DATE is invalid',
                        url: '<?php  echo site_url('InventoryController/AjaxGoodsReceiptTransDateVld')?>',
			type: 'POST'
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
$('*#GRH_TXN_DATE').datetimepicker({
format: 'DD-MMM-YY'
});
$('*#GRH_INV_DATE').datetimepicker({
format: 'DD-MMM-YY'
});
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
</script>
<script>
function next(first,second){
    var src=document.getElementById(first);
    var dest=document.getElementById(second);
 
    for(var count=0;count<src.options.length;count++){
        if(src.options[count].selected==true){
		var option=src.options[count];
		var newOption=document.createElement("option");
		newOption.value=option.value;
		newOption.text=option.text;
		newOption.selected=true;
		try{
			dest.add(newOption,null);
			src.remove(count,null);
			}
			catch(error){
				dest.add(newOption);src.remove(count);
				}
				count--;
				}
    }}
 
function listbox_selectall(listID,listID1,isSelect){
    var listbox=document.getElementById(listID);
    var listbox1=document.getElementById(listID1);
    for(var count=0;count<listbox.options.length;count++){
	listbox.options[count].selected=isSelect;
	
	}
    for(var count=0;count<listbox1.options.length;count++){
	listbox1.options[count].selected=isSelect;
	
	}
}
$('#transfer').on('click',function(){
var sys_code=$('#second').val();
$.ajax({
type:"POST",
url:"<?php  echo site_url('InventoryController/AjaxGoodReceiptReference')?>",
data:{code:sys_code},
success: function(response)
{
$('#modal-dialog').modal('hide');
$('#result').html(response);
supplercode();
}
});
})
function supplercode(){
    var supl=$('input[name="POH_SUPL_AC_CODE[]"]').val();
    $('#GRH_SUPL_CODE').val(supl).attr('readonly','readonly');
}
</script>
</body>
</html>

