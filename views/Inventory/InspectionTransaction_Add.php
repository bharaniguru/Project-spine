<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 19/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Inspection Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header"> Add Inspection Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Inspection Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/InspectionTransaction_Add');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction Code</label>
			    <div class="col-md-2">
				<input type="text" placeholder="INH_SUP" name="inh_Txn_code" id="inh_Txn_code" value="INS" class="form-control" readonly>
                            </div>
			    <label class="col-md-1 control-label">Transaction No</label>
			    <div class="col-md-2">
				<input type="text" name="inh_txn_no" value="<?php echo $result['return_status']?>" placeholder="INH_TXN_NO" class="form-control" readonly>
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			    <div class="col-md-2">
				<input type="text" name="inh_txn_dt" placeholder="INH_DT" id="datepicker" value="<?php echo date('d-M-y');?>" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Invoice Date</label>
			    <div class="col-md-2">
				<input type="text" name="inh_inv_dt" placeholder="INH_INV_DT" id="datepicker" class="form-control">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Supplier</label>
			    <div class="col-md-5">
				<input type="text" name="inh_sup" id="inh_sup" placeholder="INH_SUPL_CODE" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Location</label>
			    <div class="col-md-2">
				<select class="form-control" name="inh_locn_code" id="inh_locn_code">
				    <?php foreach($result2 as $row2) { ?>
				    <option value="<?php echo $row2['LOCN_CODE']?>"><?php echo $row2['LOCN_DESC']?></option>
				    <?php } ?>
				</select>
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
									<?php foreach($result1 as $row1) { ?>
									<option value="<?php echo $row1['POH_SYS_ID']?>"><?php echo $row1['POH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row1['POH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row1['POH_TXN_DT'];?></option>
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
			    <label class="col-md-1 control-label">Bill of Entry</label>
			    <div class="col-md-2">
				<input type="text" name="inh_bill_dt" placeholder="INH_BILL_OF_DT" id="inh_bill_dt" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">FCL/LCL</label>
			    <div class="col-md-2">
				<input type="text" name="inh_bill_of_en" placeholder="INH_BILL_OF_EN" id="inh_bill_of_en" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Invoice No</label>
			    <div class="col-md-2">
				<input type="text" name="inh_inv_no" placeholder="INH_INV_NO" id="inh_inv_no" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Container Size</label>
			    <div class="col-md-2">
				<input type="text" name="inh_cont_size" placeholder="INH_CONTAINER_SIZE" id="inh_cont_size" class="form-control">
			    </div>
			    </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Pkg Type</label>
			    <div class="col-md-2">
				<input type="text" name="inh_pkg_type" placeholder="INH_PKG_TYPE" id="inh_pkg_type" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">No Pkg</label>
			    <div class="col-md-2">
				<input type="text" name="inh_no_pkg" placeholder="INH_NO_PKG" id="inh_no_pkg" class="form-control">
			    </div>
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2 checkbox">
			    <label>
				<input type="checkbox" name="inh_all_itm_ok" value="Y" checked="checked">
				    All Items are OK? 
			    </label>
			    </div>
			    <label class="col-md-1 control-label"></label>
			   <div class="col-md-2 checkbox">
			    <label>
				<input type="checkbox" name="inh_all_item_acpt" value="Y" checked="checked">
				    All Items are Accepted? 
			    </label>
			    </div>
			    </div>
			    <div class="row p-t-20">
			<!--    <label class="col-md-1 control-label">Inspection Done Dt</label>-->
			<!--    <div class="col-md-2">-->
			<!--	<input type="text" name="inh_insp_done_dt" placeholder="INH_DONE_DT" id="datepicker" class="form-control">-->
			<!--    </div>-->
			    <label class="col-md-1 control-label">Inspection Done By</label>
			    <div class="col-md-2">
				<input type="text" name="inh_done_by" placeholder="INH_DONE_BY" id="inh_done_by" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-2">
				<input type="text" name="inh_desc" placeholder="INH_DESCRIPTION" id="inh_desc" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Status</label>
			    <div class="col-md-2">
				<input type="text" name="inh_status" placeholder="INH_STATUS" id="inh_status" class="form-control">
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
                                                        <input type="text" name="grh_flix_01" placeholder="INH_FLEX_01" id="grh_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_11" placeholder="INH_FLEX_11" id="grh_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_02" placeholder="INH_FLEX_02" id="grh_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_12" placeholder="INH_FLEX_12" id="grh_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_03" placeholder="INH_FLEX_03" id="grh_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_13" placeholder="INH_FLEX_13" id="grh_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_04" placeholder="INH_FLEX_04" id="grh_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_14" placeholder="INH_FLEX_14" id="grh_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_05" placeholder="INH_FLEX_05" id="grh_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_15" placeholder="INH_FLEX_15" id="grh_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_06" placeholder="INH_FLEX_06" id="grh_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_16" placeholder="INH_FLEX_16" id="grh_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_07" placeholder="INH_FLEX_07" id="grh_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_17" placeholder="INH_FLEX_17" id="grh_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_08" placeholder="INH_FLEX_08" id="grh_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_18" placeholder="INH_FLEX_18" id="grh_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_09" placeholder="INH_FLIX_09" id="grh_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_19" placeholder="INH_FLEX_19" id="grh_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_10" placeholder="INH_FLIX_10" id="grh_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_20" placeholder="INH_FLEX_20" id="grh_flix_20" class="form-control">
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
								<center>Txn Code</center>
							    </th>
							    <th>
								<center>Txn No</center>
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
								<center>Order Quantity</center>
							    </th>
							    <th>
								<center>Accepted Quantity</center>
							    </th>
							    <th>
								<center>Rejected Quantity</center>
							    </th>
							    <th>
								<center>Price</center>
							    </th>
							    <th>
								<center>Value</center>
							    </th>
							    <th>
								<center>Location Code<center>
							    </th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="result">
                                                        <tr class="odd hide" id="optionTemplate">
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
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
                                    <input type="submit" name="Save" class="btn btn-sm btn-success" value="Save">
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
            inh_Txn_code: {
		message: 'The TRANSACTION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION CODE is required and can\'t be empty'
                    }
                }
            },
	    inh_txn_no: {
		message: 'The TRANSACTION NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION NUMBER is required and can\'t be empty'
                    }
                }
            },
	    inh_inv_dt: {
		message: 'The INVOICE DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The INVOICE DATE is required and can\'t be empty'
                    }
                }
            },
            inh_sup: {
		message: 'The SUPPLIER CODE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The SUPPLIER CODE is required and can\'t be empty'
                    },
		}
            },
	    inh_locn_code: {
		message: 'The LOCATION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION CODE is required and can\'t be empty'
                    }
                }
            },
	     inh_bill_dt: {
		message: 'The BILL OF ENTRY is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The BILL OF ENTRY is required and can\'t be empty'
                    }
                }
            },
	     inh_bill_of_en: {
		message: 'The FCL LCL is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The FCL LCL is required and can\'t be empty'
                    }
                }
            },
	     inh_inv_no: {
		message: 'The INVOICE NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The INVOICE NUMBER is required and can\'t be empty'
                    }
                }
            },
	     inh_cont_size: {
		message: 'The CONTAINER SIZE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CONTAINER SIZE is required and can\'t be empty'
                    }
                }
            },
	    inh_pkg_type: {
		message: 'The PACKAGE TYPE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The PACKAGE TYPE is required and can\'t be empty'
                    }
                }
            },
	    inh_no_pkg: {
		message: 'The NO PACKAGE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The NO PACKAGE is required and can\'t be empty'
                    }
                }
            },
	    inh_all_itm_ok: {
		message: 'The ALL ITEMS ARE OK is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ALL ITEMS ARE OK is required and can\'t be empty'
                    }
                }
            },
	    inh_all_item_acpt: {
		message: 'The ALL ITEM ARE ACCEPTED is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ALL ITEM ARE ACCEPTED is required and can\'t be empty'
                    }
                }
            },
	    inh_done_by: {
		message: 'The INSEPECTION DONE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The INSEPECTION DONE is required and can\'t be empty'
                    }
                }
            },
	    inh_status: {
		message: 'The STATUS is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The STATUS is required and can\'t be empty'
                    }
                }
            },
            'INL_REJ_QTY[]': {
		message: 'The INL REJ QTY is not valid',
		container: 'popover',
		group:'td',
                validators: {
		    notEmpty: {
                        message: 'The INL REJ QTY is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The INL REJ QTY should be Positive Number'
                    },
//		    callback: {
//                            message: 'Should be Greater then INL_QTY.',
//                            callback: function (value, validator, $field) {
//                                var $row = $(this).parents('.odd');
//				var name = $row.find('[name="INL_QTY[]"]');
//				alert(name);
//                            }
//                    }
		}
            },
	    inh_txn_dt: {
		message: 'The TXM DT is not valid',
                trigger:'blur',
		validators: {
		    notEmpty: {
                        message: 'The TXM DT is required and can\'t be empty'
                    },
		    remote: {
                        url: '<?php  echo site_url('InventoryController/AjaxINHDateVld')?>',
			data: function(validator) {
                            return {
                                inh_Txn_code: validator.getFieldElements('inh_Txn_code').val()
                            };
                        },
			message: 'The TRANSACTION DATE is invalid',
			type: 'POST'
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
format: 'DD-MMM-YY',
});
$('#transfer').on('click',function(){
var sys_code=$('#second').val();
$.ajax({
type:"POST",
url:"<?php  echo site_url('InventoryController/AjaxINPLine')?>",
data:{code:sys_code},
success: function(response)
{
$('#modal-dialog').modal('hide');
$('#result').html(response);
var inl=$('#result').find('input[name="INL_REJ_QTY[]"]')
$('#form_validation').bootstrapValidator('addField', inl);
$.ajax({
type:"POST",
url:"<?php  echo site_url('InventoryController/AjaxLocCode')?>",
data:{code:sys_code},
success: function(response)
{
$('*#INL_LOCN_CODE').html(response);
var loc_l=$('#inh_locn_code').val();
$("select[name='INL_LOCN_CODE[]']").each(function(){
$(this).val(loc_l);
});
}
});
}
});
})
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

$(document).ready(function () {
$("#form_validation").validate({ 
errorClass: "form-control form-control-1",
SuccessClass: "form-control form-control-1"
});
});
</script>

</body>
</html>

