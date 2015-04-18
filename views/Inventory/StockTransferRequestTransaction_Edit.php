<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Stock Transfer Request Transaction</li>	
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Stock Transfer Request Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Stock Transfer Request Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/StockTransferRequestTransaction_Edit');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction Code</label>
			    <div class="col-md-2">
				<input type="text" placeholder="TXN_CODE" name="srqh_txn_code" value="<?php echo $result[0]['SRQH_TXN_CODE']?>" class="form-control" readonly>
				<input type="hidden" name="srqh_sys_id" value="<?php echo $result[0]['SRQH_SYS_ID']?>" class="form-control"/>
			    </div>
			    <!--<label class="col-md-1 control-label">Requested By</label>
			    <div class="col-md-2">
				<input type="text" name="srqh_req_by" placeholder="" id="srqh_req_by" class="form-control">
			    </div>-->
			    <label class="col-md-1 control-label">Transaction No</label>
			    <div class="col-md-2">
				<input type="text" name="srqh_txn_no" value="<?php echo $result[0]['SRQH_TXN_NO']?>" placeholder="MIH_TXN_TYPE" id="srqh_txn_no" class="form-control" readonly>
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			   <div class="col-md-2">
				<input type="text" name="srqh_txn_dt" value="<?php echo $result[0]['SRQH_TXN_DT']?>" placeholder="STRH_TXN_DATE" id="datepicker" class="form-control">
			    </div>
			    </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">Requested By</label>
			    <div class="col-md-5">
				<input type="text" name="srqh_req_by" value="<?php echo $result[0]['SRQH_REQUESTED_BY']?>" id="srqh_req_by" placeholder="SRQH_REQUESTED_BY" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-2">
				<input type="text" name="srqh_desc" value="<?php echo $result[0]['SRQH_DESC']?>" id="srqh_desc" placeholder="STRH_DESC" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Status</label>
			    <div class="col-md-2">
				<input type="text" name="srqh_status" value="<?php echo $result[0]['SRQH_STATUS']?>" id="srqh_status" placeholder="STRH_STATUS" class="form-control">
			    </div>
                           </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">DLV Location</label>
			    <div class="col-md-2">
				<select name="srqh_dlv_loc" class="form-control">
				    <?php foreach($result2 as $row2) {?>
				    <option value="<?php echo $row2['LOCN_CODE']?>"<?php if($result[0]['SRQH_DLV_LOCN_CODE']==$row2['LOCN_CODE']) echo 'selected';?>><?php echo $row2['LOCN_DESC']?></option>
				    <?php } ?>
				</select>
			    </div>
			    <label class="col-md-1 control-label">SRC Location</label>
			    <div class="col-md-2">
				<select name="srqh_src_loc" class="form-control">
				    <?php foreach($result2 as $row2) {?>
				    <option value="<?php echo $row2['LOCN_CODE']?>"<?php if($result[0]['SRQH_SRC_LOCN_CODE']==$row2['LOCN_CODE']) echo 'selected';?>><?php echo $row2['LOCN_DESC']?></option>
				    <?php } ?>
				</select>
			    </div>
			    <label class="col-md-1 control-label">Delivery Date</label>
			    <div class="col-md-2">
				<input type="text" name="strh_delv_dt" value="<?php echo $result[0]['SRQH_DLV_DT']?>" id="datepicker" placeholder="STRH_DELV_DT" class="form-control">
			    </div>
			    <!--<label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<button class="btn btn-primary btn-sm">Reference</button>
			    </div>			    -->
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
                                                        <input type="text" name="mih_flix_01" placeholder="STRH_FLEX_01" id="mih_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_11" placeholder="STRH_FLEX_11" id="mih_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_02" placeholder="STRH_FLEX_02" id="mih_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_12" placeholder="STRH_FLEX_12" id="mih_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_03" placeholder="STRH_FLEX_03" id="mih_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_13" placeholder="STRH_FLEX_13" id="mih_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_04" placeholder="STRH_FLEX_04" id="mih_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_14" placeholder="STRH_FLEX_14" id="mih_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_05" placeholder="STRH_FLEX_05" id="mih_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_15" placeholder="STRH_FLEX_15" id="mih_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_06" placeholder="STRH_FLEX_06" id="mih_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_16" placeholder="STRH_FLEX_16" id="mih_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_07" placeholder="STRH_FLEX_07" id="mih_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_17" placeholder="STRH_FLEX_17" id="mih_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_08" placeholder="STRH_FLEX_08" id="mih_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_18" placeholder="STRH_FLEX_18" id="mih_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_09" placeholder="STRH_FLIX_09" id="mih_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_19" placeholder="STRH_FLEX_19" id="mih_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_10" placeholder="STRH_FLIX_10" id="mih_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="mih_flix_20" placeholder="STRH_FLEX_20" id="mih_flix_20" class="form-control">
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
                                                            <th><center>Description</center></th>
                                                            <th><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($result1 as $row1) { ?>
							<tr class="odd">
							    <input type="hidden" value="<?php echo $row1['SRQL_SYS_ID'];?>" name="srql_sys_id[]" class="form-control"/>
							    <input type="hidden" value="<?php echo $row1['SRQL_SRQH_SYS_ID'];?>" name="srql_srqh_sys_id[]" class="form-control"/>
							    <td><span><input type="text" value="<?php echo $row1['SRQL_LINE'];?>" name="srql_line[]" class="form-control" /></span></td>
							    <td><span><select name="srql_item_code[]" class="form-control">
								<?php foreach($result3 as $row3) {?>
								<option value="<?php echo $row3['ITEM_CODE']?>"<?php if($row3['ITEM_CODE']==$row1['SRQL_ITEM_CODE']) echo 'selected';?>><?php echo $row3['ITEM_DESC']?></option>
								<?php } ?>
							    </select></span></td>
							    <td><span><input type="text" value="<?php echo $row1['SRQL_ITEM_DESC']?>" name="srql_item_desc[]" class="form-control" readonly/></span></td>
							    <td><span><input type="text" value="<?php echo $row1['SRQL_UOM_CODE']?>" name="srql_uom_code[]" class="form-control" readonly/></span></td>
							    <td><span><input type="text" value="<?php echo $row1['SRQL_QTY']?>" name="srql_qty[]" class="form-control"/></span></td>
							    <td><span><input type="text" value="<?php echo $row1['SRQL_DESC']?>" name="srql_desc[]" class="form-control"/></span></td>
							    <td><a href="<?php echo site_url('InventoryController/deleteSTRL/'.$row1['SRQL_SYS_ID'].'/'.$row1['SRQL_SRQH_SYS_ID'].'/'.$row1['SRQL_LANG_CODE'].'/'.$row1['SRQL_CR_UID'])?>" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</a></td>
							</tr>
							<?php } ?>
		                                        <tr class="odd hide" id="optionTemplate">
							    <td><span><input type="text" class="form-control" name="srql_line[]"/></span></td>
							    <td><span><select name="srql_item_code[]" class="form-control">
								<?php foreach($result3 as $row3) {?>
								<option value="<?php echo $row3['ITEM_CODE']?>"><?php echo $row3['ITEM_DESC']?></option>
								<?php } ?>
							    </select></span></td>
							    <td><span><input type="text" name="srql_item_desc[]" class="form-control" readonly/></span></td>
							    <td><span><input type="text" name="srql_uom_code[]" class="form-control" readonly/></span></td>
							    <td><span><input type="text" name="srql_qty[]" class="form-control"/></span></td>
							    <td><span><input type="text" name="srql_desc[]" class="form-control"/></span></td>
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
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back()">Cancel</button>
                                    <button class="btn btn-sm btn-info" type="button" onclick="form_reset()">Reset</button>
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
            srqh_txn_code: {
		message: 'The TRANSACTION CODE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TRANSACTION CODE is required and can\'t be empty'
                    }
                }
            },
	    srqh_txn_no: {
		message: 'The TRANSACTION NUMBER is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The TRANSACTION NUMBER is required and can\'t be empty'
                    }
                }
            },
	    rqh_req_by: {
		message: 'The REQUESTED BY is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The REQUESTED BY is required and can\'t be empty'
                    }
                }
            },
	    srqh_desc: {
		message: 'The DESCRIPTION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The ITEM HORMONIZED SYSTEM is required and can\'t be empty'
                    }
                }
            },
            srqh_status: {
		message: 'The STATUS is not valid',
		trigger: 'blur',
		validators: {
	  
			notEmpty: {
			    message: 'The STATUS is required and can\'t be empty'
			}
		    }
	    },
	    srqh_dlv_loc: {
		message: 'The DELIVERY LOCATION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The DELIVERY LOCATION is required and can\'t be empty'
                    }
                }
            },
	    srqh_src_loc: {
		message: 'The SOURCE LOCATION is not valid',
                validators: {
		    notEmpty: {
                        message: 'The SOURCE LOCATION is required and can\'t be empty'
                    }
                }
            },
	    strh_delv_dt: {
		message: 'The DELIVERY DATE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The DELIVERY DATE is required and can\'t be empty'
                    }
                }
            },
	    'srql_line[]': {
		message: 'The LINE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The LINE is required and can\'t be empty'
                    }
                }
            },
	    'srql_item_code[]': {
		message: 'The ITEM CODE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The ITEM CODE is required and can\'t be empty'
                    }
                }
            },
	    'srql_item_desc[]': {
		message: 'The ITEM DESCRIPTION is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The ITEM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    'srql_uom_code[]': {
		message: 'The UOM CODE is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The UOM CODE is required and can\'t be empty'
                    }
                }
            },
	    'srql_qty[]': {
		message: 'The QUANTITY is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The QUANTITY is required and can\'t be empty'
                    }
                }
            },
	    srqh_txn_dt: {
		message: 'The TXN DATE is not valid',
		trigger: 'blur',
		validators: {
		    notEmpty: {
                        message: 'The TXN DATE is required and can\'t be empty'
                    },
		    remote: {
                        url: '<?php  echo site_url('InventoryController/AjaxSTRDT_valid')?>',
			data: function(validator) {
                            return {
                                txn_code: validator.getFieldElements('srqh_txn_no').val()
                            };
			},
			message: 'The TRANSACTION DATE is invalid',
			type: 'POST'
		    }
                }
            }
	}
    });
});

function form_reset() {
$('input[name="srqh_txn_dt"]').val('');
$('input[name="srqh_req_by"]').val('');
$('input[name="srqh_desc"]').val('');
$('input[name="srqh_status"]').val('');
$('input[name="strh_delv_dt"]').val('');
$('input[name="srql_item_desc[]"]').val('');
$('input[name="srql_uom_code[]"]').val('');
$('input[name="srql_qty[]"]').val('');
$('input[name="srql_desc[]"]').val('');
$('input[type=checkbox]').removeAttr('checked');
}

var count=1;
$('.btn-add').click(function() {
count++;
var $template = $('#optionTemplate'),
$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
$clone.find('[name="srql_line[]"]').val(count);
removerow();
});
 
function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$row.remove();
});
};

var date = new Date();
date.setDate(date.getDate());
$('*#datepicker').datetimepicker({
format: 'DD-MMM-YY',
minDate: date
});
$('#datepicker1').datetimepicker({
format: 'DD-MMM-YYYY',
});

$('#form_validation').on('change', '[name="srql_item_code[]"]', function() {
var item_code=$(this).val() ;
var $row    = $(this).parents('.odd');
$.ajax({
type: "POST",
url: "<?=base_url()?>InventoryController/ajaxSTRItemCode",
dataType:"json",
data:{item_code_data:item_code} ,
success: function (json) {
$row.find("input[name='srql_item_desc[]']").val(json.ITEM_DESC);
$row.find("input[name='srql_uom_code[]']").val(json.ITEM_UOM_CODE);
},
});
});
$('#form_validation').on('change', '[name="srql_item_code[]"]', function(){
var dlv=$('[name="srqh_dlv_loc"]').val();
var src=$('[name="srqh_src_loc"]').val();
$('[name="srqh_dlv"]').val(dlv);
$('[name="srqh_src"]').val(src);
$('[name="srqh_dlv_loc"]').attr('disabled',true);
$('[name="srqh_src_loc"]').attr('disabled',true);
});

</script>
</body>
</html>