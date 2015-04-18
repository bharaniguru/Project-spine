<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Material Request Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Material Request Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Material Request Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/MaterialRequestTransaction_Add');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction</label>
			    <div class="col-md-5">
				<!--<div class="input-group">-->
				    <input type="text" placeholder="TXN_CODE" name="rqh_txn_code" id="rqh_txn_code" value="MRT" class="form-control">
<!--                                    <select class="form-control">-->
<!--					<option value="rqh_txn_code"></option>-->
<!--				    </select>-->
                                    <!--<span class="input-group-addon"></span>-->
                                    <!--<input type="text" placeholder="TXN_DESC" name="rqh_txn_desc" class="form-control">-->
                                <!--</div>-->
			    </div>
			    <label class="col-md-1 control-label">Txn Desc</label>
			    <div class="col-md-2">
				<input type="text" placeholder="TXN_DESC" name="rqh_txn_desc" class="form-control">
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			   <div class="col-md-2">
				<input type="text" name="rqh_txn_dt" id="datepicker" placeholder="RQH_TXN_DT"  class="form-control">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_desc" id="rqh_desc" placeholder="RQH_DESC" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Type</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_type" id="rqh_type" placeholder="RQH_TYPE" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Status</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_status" placeholder="RQH_STATUS" id="rqh_status" class="form-control">
			    </div>
			    <!--<label class="col-md-1 control-label">Request Head Type</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_req_type" id="rqh_req_type" placeholder="RQH_REQUEST_TYPE" class="form-control">
			    </div>-->
			<!--    <label class="col-md-1 control-label">Prepare</label>-->
			<!--    <div class="col-md-2">-->
			<!--	<input type="text" name="rqh_doc_DT" placeholder="RQH_CR_UID" id="rqh_doc_dt" class="form-control">-->
			<!--    </div>-->
                           </div>
			    <div class="row p-t-20">
			    <!--<label class="col-md-1 control-label">Requester</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_person_code" id="rqh_person_code" placeholder="RQH_PERSON_COD" class="form-control">
			    </div>-->
			    <label class="col-md-1 control-label">Source Loc</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_src_code" placeholder="RQH_SRC_LOC" id="rqh_src_code" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Delivery Loc</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_dlv_code" placeholder="RQH_DLV_LOC" id="rqh_dlv_code" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Delv Date</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_dlv_dt" placeholder="RQH_DLV_DT" id="rqh_dlv_dt" value="<?php echo date("d-M-y")?>" class="form-control" readonly>
				    <input type="hidden" name="doc_no" id="doc_no" value="<?php echo $result['return_status']?>" class="form-control">
			    </div>
			    </div>
			    <div class="row p-t-20">
			    <!--<div class="col-md-3">
				<div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Y" name="rqh_snd_apprl">
                                                Send For Approval
                                            </label>
                                        </div>
                            </div>-->
			    <!--<label class="col-md-1 control-label">Doc Ref</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_doc_ref" id="rqh_doc_ref" placeholder="RQH_DOC_REF" class="form-control">
			    </div>-->
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
                                                        <input type="text" name="rqh_flix_01" placeholder="RQH_FLEX_01" id="rqh_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_11" placeholder="RQH_FLEX_11" id="rqh_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_02" placeholder="RQH_FLEX_02" id="rqh_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_12" placeholder="RQH_FLEX_12" id="rqh_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_03" placeholder="RQH_FLEX_03" id="rqh_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_13" placeholder="RQH_FLEX_13" id="rqh_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_04" placeholder="RQH_FLEX_04" id="rqh_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_14" placeholder="RQH_FLEX_14" id="rqh_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_05" placeholder="RQH_FLEX_05" id="rqh_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_15" placeholder="RQH_FLEX_15" id="rqh_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_06" placeholder="RQH_FLEX_06" id="rqh_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_16" placeholder="RQH_FLEX_16" id="rqh_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_07" placeholder="RQH_FLEX_07" id="rqh_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_17" placeholder="RQH_FLEX_17" id="rqh_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_08" placeholder="RQH_FLEX_08" id="rqh_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_18" placeholder="RQH_FLEX_18" id="rqh_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_09" placeholder="GRH_FLIX_09" id="rqh_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_19" placeholder="RQH_FLEX_19" id="rqh_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_10" placeholder="GRH_FLIX_10" id="rqh_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="rqh_flix_20" placeholder="RQH_FLEX_20" id="rqh_flix_20" class="form-control">
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
                                                            <th><center>Descriptions</center></th>
                                                            <th><center>Qty Delivery</center></th>
                                                            <!--<th><center>Delivery Location</center></th>-->
                                                            <th><center>Delv Date</center></th>
							    <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
							    <td><span><input type="text" class="form-control" name="rql_line[]" value="1" placeholder="RQL_LINE"></span></td>
                                                            <td><span>
							    <select class="form-control" name="rql_item_code[]">
							    <?php foreach($result1 as $row) { ?>
							    <option value="<?php echo $row['ITEM_CODE']?>"><?php echo $row['ITEM_CODE']?></option>
							     <?php }?>
							    </select>
							    </span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_item_desc[]" placeholder="RQL_ITEM_DESC" readonly></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_uom_code[]" placeholder="RQL_UOM_CODE" readonly></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_qty[]" placeholder="RQL_QTT"></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_desc[]" placeholder="RQL_DESC"></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_qty_delv[]" placeholder="RQL_QTY_DELV"></span></td>
                                                            <!--<td><span><input type="text" class="form-control" name="rql_dlv_locn_code_1" id="dlv_locn_code" placeholder="RQL_DELV_LOC"></span></td>-->
                                                            <td><span><input type="text" class="form-control" name="rql_dlv_dt[]" id="rql_dlv_dt" placeholder="RQL_DELV_DT"></span></td>
                                                            <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
							    <!--<input type="hidden" id="row_count" name="row_count" value="1">-->
							    <!--<input type="hidden" id="src_code" name="src_code">-->
							</tr>
							<tr class="odd hide" id="optionTemplate">
							    <td><span><input type="text" class="form-control" name="rql_line[]" placeholder="RQL_LINE"></span></td>
                                                            <td><span>
							    <select class="form-control" name="rql_item_code[]">
							    <?php foreach($result1 as $row) { ?>
							    <option value="<?php echo $row['ITEM_CODE']?>"><?php echo $row['ITEM_CODE']?></option>
							     <?php }?>
							    </select>
							    </span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_item_desc[]" placeholder="RQL_ITEM_DESC" readonly></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_uom_code[]" placeholder="RQL_UOM_CODE" readonly></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_qty[]" placeholder="RQL_QTT"></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_desc[]" placeholder="RQL_DESC"></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_qty_delv[]" placeholder="RQL_QTY_DELV"></span></td>
                                                            <!--<td><span><input type="text" class="form-control" name="rql_dlv_locn_code_" id="dlv_locn_code" placeholder="RQL_DELV_LOC"></span></td>-->
                                                            <td><span><input type="text" class="form-control" name="rql_dlv_dt[]" id="rql_dlv_dt" placeholder="RQL_DELV_DT"></span></td>
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
            rqh_txn_code: {
  message: 'The TXN CODE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TXN CODE is required and can\'t be empty'
                    }
                }
            },
     rqh_txn_desc: {
  message: 'The TXN DESC is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TXN DESC is required and can\'t be empty'
                    }
                }
            },
     rqh_txn_dt: {
  message: 'The TXN DATE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TXN DATE is required and can\'t be empty'
                    }
                }
            },
     rqh_desc: {
  message: 'The TXN DESC is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TXN DESC is required and can\'t be empty'
                    }
                }
            },
            rqh_type: {
  message: 'The TXN TYPE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TXN TYPE SYSTEM is required and can\'t be empty'
                    }
                }
            },
     rqh_status: {
  message: 'The  STATUS is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The STATUS is required and can\'t be empty'
                    }
                }
            },
     rqh_req_type: {
  message: 'The REQUEST HEAD TYPE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The REQUEST HEAD TYPE is required and can\'t be empty'
                    }
                }
            },
     rqh_src_code: {
  message: 'The SOURCE LOCATION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The SOURCE LOCATION is required and can\'t be empty'
                    }
                }
            },
     rqh_dlv_code: {
  message: 'The DELIVERY LOCATION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The DELIVERY LOCATION is required and can\'t be empty'
                    }
                }
            },
     rqh_dlv_dt: {
  message: 'The DELIVERY DATE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The DELIVERY DATE is required and can\'t be empty'
                    }
                }
            },
     rqh_snd_apprl: {
  message: 'The SEND FOR APPROVAL is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The SEND FOR APPROVAL is required and can\'t be empty'
                    }
                }
            },
     rqh_doc_ref: {
  message: 'The DOCUMENT REFERENCE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The DOCUMENT REFERENCE is required and can\'t be empty'
                    }
                }
            },
     'rql_line[]': {
  message: 'The LINE  is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE is required and can\'t be empty'
                    }
                }
            },
     'rql_item_code[]': {
  message: 'The LINE ITEM CODE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE ITEM CODE is required and can\'t be empty'
                    }
                }
            },
     'rql_item_desc[]': {
  message: 'The LINE ITEM DESCRIPITION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE ITEM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
     'rql_uom_code[]': {
  message: 'The LINE UOM CODE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE UOM CODE is required and can\'t be empty'
                    }
                }
            },
     'rql_qty[]': {
  message: 'The LINE QUANTITY is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE QUANTITY is required and can\'t be empty'
                    }
                }
            },
     'rql_desc[]': {
  message: 'The LINE DESCRIPTION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
     'rql_qty_delv[]': {
  message: 'The LINE QUANTITY DELIVERY is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE QUANTITY DELIVERY is required and can\'t be empty'
                    }
                }
            },
     'rql_dlv_dt[]': {
  message: 'The LINE DELIVERY DATE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The LINE DELIVERY DATE is required and can\'t be empty'
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
var row_count=1;
$('.btn-add').click(function() {
row_count++;
var $template = $('#optionTemplate'),
$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
$clone.find('[name="rql_line[]"]').val(row_count);
removerow();
datepick();
});
 
function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$row.remove();
});
};

$('#form_validation').on('change', '[name="rql_item_code[]"]', function() {
var item_code=$(this).val() ;
var $row    = $(this).parents('.odd');
$.ajax({
type: "POST",
url: "<?=base_url()?>InventoryController/ajaxMatReqTransItemcode",
dataType:"json",
data:{item_code_data:item_code} ,
success: function (json) {
$row.find("input[name='rql_item_desc[]']").val(json.item_desc);
$row.find("input[name='rql_uom_code[]']").val(json.item_uom_code);
},
});
});    

$('#datepicker').datetimepicker({
format: 'DD-MMM-YY'
});

$('*#rql_dlv_dt').datetimepicker({
format: 'DD-MMM-YY'
});
function datepick() {
$('*#rql_dlv_dt').datetimepicker({
format: 'DD-MMM-YY'
});    
}

</script>
</body>
</html>

