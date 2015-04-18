<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Material Request Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Material Request Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Material Request Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/MaterialRequestTransaction_Edit');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction</label>
			    <div class="col-md-5">
				<input type="text" placeholder="TXN_CODE" name="rqh_txn_code" id="rqh_txn_code"  value="<?php echo $result[0]['RQH_TXN_CODE']?>" class="form-control" readonly>
			    </div>
			    <!--<div class="col-md-5">
				<div class="input-group">
                                    <select class="form-control">
					<option value="mih_txn_code">GRH_TXN_CODE</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
                                    </select>
                                    <span class="input-group-addon"></span>
                                    <input type="text" placeholder="TXN_DESC" value="" name="txn_desc" class="form-control">
                                </div>
			    </div>-->
			    <!--<label class="col-md-1 control-label">Prepare</label>
			    <div class="col-md-2">
				<input type="text" name="mih_doc_DT" placeholder="RQH_CR_UID" id="mih_doc_dt" value="<?php echo $result[0]['RQH_CR_UID']?>" class="form-control">
			    </div>-->
			   <label class="col-md-1 control-label">Transaction Type</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_req_type" id="rqh_req_type" placeholder="RQH_PERSON_COD" value="<?php echo $result[0]['RQH_TYPE']?>" class="form-control">
				<input type="hidden" name="rqh_sys_id" id="rqh_sys_id" value="<?php echo $result[0]['RQH_SYS_ID']?>" >
				<input type="hidden" name="rqh_txn_no" id="rqh_txn_no" value="<?php echo $result[0]['RQH_TXN_NO']?>" >
			    </div>
			   <label class="col-md-1 control-label">Transaction Date</label>
			   <div class="col-md-2">
				<input type="text" name="rqh_txn_dt" placeholder="RQH_DOC_DT" id="defaultdate" value="<?php echo $result[0]['RQH_TXN_DT']?>" id="mih_doc_dt" class="form-control">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-5">
				<input type="text" name="rqh_desc" id="rqh_desc" placeholder="RQH_DESC" value="<?php echo $result[0]['RQH_DESC']?>" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Source Loc</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_src_code" placeholder="RQH_SRC_LOC" id="rqh_src_code" value="<?php echo $result[0]['RQH_SRC_LOCN_CODE']?>" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Delivery Loc</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_dlv_code" value="<?php echo $result[0]['RQH_DLV_LOCN_CODE']?>" placeholder="RQH_DLV_LOC" id="rqh_dlv_code" class="form-control">
			    </div>
                           </div>
			    <div class="row p-t-20">
			    <!--<label class="col-md-1 control-label">Requester</label>
			    <div class="col-md-2">
				<input type="text" name="mih_person_code" id="mih_person_code" placeholder="RQH_PERSON_COD" value="<?php echo $result[0]['RQH_PERSON_CODE']?>" class="form-control">
			    </div>-->
			    
			    <label class="col-md-1 control-label">Delv Date</label>
			    <div class="col-md-2">
				<input type="text" name="rqh_dlv_dt" id="defaultdate" value="<?php echo $result[0]['RQH_DLV_DT']?>" placeholder="RQH_DLV_DT" id="rqh_dlv_dt" class="form-control">
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
                                                        <input type="text" name="mih_flix_01" placeholder="RQH_FLEX_01" id="mih_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_11" placeholder="RQH_FLEX_11" id="mih_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_02" placeholder="RQH_FLEX_02" id="mih_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_12" placeholder="RQH_FLEX_12" id="mih_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_03" placeholder="RQH_FLEX_03" id="mih_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_13" placeholder="RQH_FLEX_13" id="mih_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_04" placeholder="RQH_FLEX_04" id="mih_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_14" placeholder="RQH_FLEX_14" id="mih_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_05" placeholder="RQH_FLEX_05" id="mih_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_15" placeholder="RQH_FLEX_15" id="mih_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_06" placeholder="RQH_FLEX_06" id="mih_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_16" placeholder="RQH_FLEX_16" id="mih_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_07" placeholder="RQH_FLEX_07" id="mih_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_17" placeholder="RQH_FLEX_17" id="mih_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_08" placeholder="RQH_FLEX_08" id="mih_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_18" placeholder="RQH_FLEX_18" id="mih_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_09" placeholder="GRH_FLIX_09" id="mih_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_19" placeholder="RQH_FLEX_19" id="mih_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_10" placeholder="GRH_FLIX_10" id="mih_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_20" placeholder="RQH_FLEX_20" id="mih_flix_20" class="form-control">
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
                                                            <!--<th><center>Requester</center></th>-->
                                                            <th><center>Qty Delivery</center></th>
                                                            <th><center>Delv Date</center></th>
							    <th><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
							foreach($result1 as $row1) { ?>
							<tr class="odd">
							    <td><span>
							    <input type="text" name="rql_line[]" class="form-control" value="<?php echo $row1['RQL_LINE']?>"></span></td>
                                                            <td><span>
							    <select class="form-control" name="rql_item_code[]">
							    <?php foreach($result2 as $row) { ?>
							    <option value="<?php echo $row['ITEM_CODE']?>" <?php if($row['ITEM_CODE']==$row1['RQL_ITEM_CODE']) echo 'selected' ;?> ><?php echo $row['ITEM_CODE']?></option>
							     <?php }?>
							    </select></span></td>
							    <td><span><input type="text" name="rql_item_desc[]" class="form-control" value="<?php echo $row1['RQL_ITEM_DESC']?>" readonly></span></td>
                                                            <td><span><input type="text" name="rql_uom_code[]" class="form-control" value="<?php echo $row1['RQL_UOM_CODE']?>" readonly></span></td>
                                                            <td><span><input type="text" name="rql_qty[]" class="form-control" value="<?php echo $row1['RQL_QTY']?>"></span></td>
                                                            <td><span><input type="text" name="rql_desc[]" class="form-control" value="<?php echo $row1['RQL_DESC']?>"></span></td>
                                                            <td><span><input type="text" class="form-control" name="rql_qty_delv[]" value="<?php echo $row1['RQL_QTY_DELIVERED']?>" placeholder="RQL_QTY_DELV"></span></td>
							    <td><span><input type="text" name="rql_dlv_dt[]" id="defaultdate" class="form-control" value="<?php echo $row1['RQL_DLV_DT']?>"></span></td>
							    <td><a class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" href="<?php echo site_url('InventoryController/DelReqLine/'.$row1['RQL_SYS_ID'].'/'.$row1['RQL_LANG_CODE'].'/'.$row1['RQL_CR_UID'].'/'.$row1['RQL_RQH_SYS_ID'])?>">Remove</a></td>
                                                        </tr><input type="hidden" name="rql_sysid" value="<?php echo $row1['RQL_SYS_ID']?>" class="form-control" >
							<?php } ?>
							<tr class="odd hide" id="optionTemplate">
							    <td><span><input type="text" name="rql_line[]" class="form-control" ></span></td>
                                                            <td><span><input type="text" name="rql_item_code[]" class="form-control" ></span></td>
                                                            <td><span><input type="text" name="rql_item_desc[]" class="form-control" ></span></td>
                                                            <td><span><input type="text" name="rql_uom_code[]" class="form-control" ></span></td>
                                                            <td><span><input type="text" name="rql_qty[]" class="form-control"></span></td>
                                                            <td><span><input type="text" name="rql_desc[]" class="form-control"></span></td>
							    <td><span><input type="text" class="form-control" name="rql_qty_delv[]" placeholder="RQL_QTY_DELV"></span></td>
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
                                                            <td><button type="button" class="btn  btn-sm btn-primary" data-template="textbox">Add</button></td>
                                                        </tr>
                                                        <tr class="odd hide" id="optionTemplate">
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><span></span></td>
                                                            <td><button type="button" class="btn  btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
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
            rqh_txn_code: {
		message: 'The LOCATION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The LOCATION CODE is required and can\'t be empty'
                    }
                }
            },
	    rqh_txn_desc: {
		message: 'The ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACTIVE is required and can\'t be empty'
                    }
                }
            },
	    rqh_txn_dt: {
		message: 'The ITEM DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    rqh_desc: {
		message: 'The ITEM UOM CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM UOM CODE is required and can\'t be empty'
                    }
                }
            },
            rqh_type: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_status: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_req_type: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_src_code: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_dlv_code: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_dlv_dt: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_snd_apprl: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    rqh_doc_ref: {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_line[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_item_code[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_item_desc[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_uom_code[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_qty[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_desc[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_qty_delv[]': {
		message: 'The ITEM HORMONIZED SYSTEM is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
	    'rql_dlv_dt[]': {
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
}
});
});
function datepicker(){
$('*#defaultdate').datetimepicker({
format: 'DD-MMM-YYYY'
})
}

</script>
</body>
</html>

