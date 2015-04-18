<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 20/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Material Issue Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Material Issue Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Material Issue Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/MaterialIssueTransaction_Edit');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction Code</label>
			    <div class="col-md-2">
				<input type="text" placeholder="TXN_CODE" name="mih_txn_code" value="<?php echo $result[0]['MIH_TXN_CODE']?>" class="form-control" readonly>
				<input type="hidden" name="mih_sys_id" value="<?php echo $result[0]['MIH_SYS_ID']?>" class="form-control">
                            </div>
			    <label class="col-md-1 control-label">Transaction Type</label>
			    <div class="col-md-2">
				<input type="text" name="mih_txn_type" placeholder="MIH_TXN_TYPE" value="<?php echo $result[0]['MIH_TYPE']?>" id="mih_txn_type" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Txn Number</label>
			    <div class="col-md-2">
				<input type="text" value="<?php echo $result[0]['MIH_TXN_NO']?>" name="mih_txn_no" placeholder="MIH_TXN_NO" id="mih_txn_no" class="form-control" readonly>
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			   <div class="col-md-2">
				<input type="text" name="mih_txn_dt" value="<?php echo $result[0]['MIH_TXN_DT']?>" placeholder="MIH_TXN_DT" id="datepicker" class="form-control" value="<?php echo date('d-M-y');?>">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-2">
				<input type="text" name="mih_desc" id="mih_desc" value="<?php echo $result[0]['MIH_DESC']?>" placeholder="MIH_DESC" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Center Code</label>
			    <div class="col-md-2">
				<input type="text" name="mih_center_code" value="<?php echo $result[0]['MIH_COST_CENTER_CODE']?>" placeholder="MIH_STATUS" id="mih_center_code" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Status</label>
			    <div class="col-md-2">
				<input type="text" name="mih_status" value="<?php echo $result[0]['MIH_STATUS']?>" placeholder="MIH_STATUS" id="mih_status" class="form-control">
			    </div>
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<a href="#modal-dialog" class="btn btn-sm btn-primary" data-toggle="modal">Reference</a>
				<div class="modal fade" id="modal-dialog">
				    <div class="modal-dialog">
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
									<option value="<?php echo $row2['RQH_SYS_ID']?>"><?php echo $row2['RQH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['RQH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['RQH_TXN_DT'];?></option>
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
			    </div>
                           </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">Requester</label>
			    <div class="col-md-2">
				<input type="text" name="mih_delv_loc" value="<?php echo $result[0]['MIH_DLV_LOCN_CODE'];?>" id="mih_delv_loc" placeholder="MIH_PERSON_COD" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Source Loc</label>
			    <div class="col-md-2">
				<input type="text" name="mih_src_loc" value="<?php echo $result[0]['MIH_SRC_LOCN_CODE'];?>" placeholder="MIH_SRC_LOC" id="mih_src_loc" class="form-control">
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
                                                        <input type="text" name="mih_flix_01" placeholder="MIH_FLEX_01" id="mih_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_11" placeholder="MIH_FLEX_11" id="mih_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_02" placeholder="MIH_FLEX_02" id="mih_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_12" placeholder="MIH_FLEX_12" id="mih_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_03" placeholder="MIH_FLEX_03" id="mih_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_13" placeholder="MIH_FLEX_13" id="mih_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_04" placeholder="MIH_FLEX_04" id="mih_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_14" placeholder="MIH_FLEX_14" id="mih_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_05" placeholder="MIH_FLEX_05" id="mih_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_15" placeholder="MIH_FLEX_15" id="mih_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_06" placeholder="MIH_FLEX_06" id="mih_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_16" placeholder="MIH_FLEX_16" id="mih_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_07" placeholder="MIH_FLEX_07" id="mih_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_17" placeholder="MIH_FLEX_17" id="mih_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_08" placeholder="MIH_FLEX_08" id="mih_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_18" placeholder="MIH_FLEX_18" id="mih_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_09" placeholder="MIH_FLIX_09" id="mih_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_19" placeholder="MIH_FLEX_19" id="mih_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_10" placeholder="MIH_FLIX_10" id="mih_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_20" placeholder="MIH_FLEX_20" id="mih_flix_20" class="form-control">
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
                                                            <th><center>Ref Doc No</center></th>
                                                            <th><center>Item Code</center></th>
                                                            <th><center>Item Description</center></th>
                                                            <th><center>UOM</center></th>
                                                            <th><center>Quantity</center></th>
                                                            <th><center>Description</center></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php
						       $count=1;
						       foreach($result1 as $row) { ?>
						       <tr  class="odd">
							    <input type="hidden" class="form-control" name="mil_sys_id[]" value="<?php echo $row['MIL_SYS_ID']?>" >
							    <input type="hidden" class="form-control" name="mil_mih_sys_id[]" value="<?php echo $row['MIL_MIH_SYS_ID']?>" >
							    <input type="hidden" class="form-control" name="mil_txn_flow_seq[]" value="<?php echo $row['MIL_REF_FLOW_SEQ']?>" >
							    <input type="hidden" class="form-control" name="mil_price[]" value="<?php echo $row['MIL_PRICE']?>" >
							    <input type="hidden" class="form-control" name="mil_dlv_loc_code[]" value="<?php echo $row['MIL_DLV_LOCN_CODE']?>" >
							    <input type="hidden" class="form-control" name="mil_src_loc_code[]" value="<?php echo $row['MIL_SRC_LOCN_CODE']?>" >
							    <input type="hidden" class="form-control" name="mil_dlv_dt[]" value="<?php echo $row['MIL_DLV_DT']?>" >
							    <input type="hidden" class="form-control" name="mil_line_sys_id[]" value="<?php echo $row['MIL_REF_LINE_SYS_ID']?>" >
							    <td><span><input type="text" class="form-control" name="mil_line[]" value="<?php echo $count;?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_txn_code[]" value="<?php echo $row['MIL_REF_TXN_CODE']?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_txn_no[]" value="<?php echo $row['MIL_REF_TXN_NO']?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_item_code[]" value="<?php echo $row['MIL_ITEM_CODE']?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_item_desc[]" value="<?php echo $row['MIL_ITEM_DESC']?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_uom_code[]" value="<?php echo $row['MIL_UOM_CODE']?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_qty[]" value="<?php echo $row['MIL_QTY']?>" ></span></td>
							    <td><span><input type="text" class="form-control" name="mil_desc[]" value="<?php echo $row['MIL_DESC']?>" ></span></td>
							    <input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
							    <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
							</tr>
						       <?php } ?>
                                                        <tr class="odd hide" id="optionTemplate">
							    <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
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
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            mih_txn_code: {
		message: 'The TRANSACTION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION CODE is required and can\'t be empty'
                    }
                }
            },
	    mih_txn_type: {
		message: 'The TRANSACTION TYPE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION TYPE is required and can\'t be empty'
                    }
                }
            },
	    mih_txn_no: {
		message: 'The TRANSACTION NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION NUMBER is required and can\'t be empty'
                    }
                }
            },
	    mih_txn_dt1: {
		message: 'The TXN DATE is not valid',
		trigger: 'blur',
		validators: {
		    
                    notEmpty: {
                        message: 'The TXN DATE is required and can\'t be empty'
                    },
		    remote: {
                        message: 'The TRANSACTION DATE is invalid',
                        url: '<?php  echo site_url('InventoryController/AjaxMatIssueTransDateVld')?>',
			type: 'POST'
		    }
                }
            },
            mih_desc: {
		message: 'The TRANSACTION DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	  mih_center_code: {
		message: 'The CENTER CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CENTER CODE is required and can\'t be empty'
                    }
                }
            },
	  mih_status: {
		message: 'The STATUS is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The STATUS is required and can\'t be empty'
                    }
                }
            },
	
	  mih_delv_loc: {
		message: 'The DELIVERY LOCATION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The DELIVERY LOCATION is required and can\'t be empty'
                    }
                }
            },
	 mih_src_loc: {
		message: 'The SOURCE LOCATION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The SOURCE LOCATION is required and can\'t be empty'
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
$('*#datepicker').datetimepicker({
format: 'DD-MMM-YY'
});
</script>
</body>
</html>

