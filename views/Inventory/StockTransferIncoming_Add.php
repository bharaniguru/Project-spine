<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 20/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Stock Transfer Incoming</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Stock Transfer Incoming <small> Enter the correct details here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<div class="col-md-12">
	    <!-- begin panel -->
	    <p style="color:red"><?php echo $status; ?></p>
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Add Stock Transfer Incoming</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/StockTransferIncoming_Add');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction</label>
			    <div class="col-md-2">
				<div class="input-group">
				    <input type="text" readonly="" placeholder="STIH_TXN_CODE" name="STIH_TXN_CODE" value="STI"class="form-control">

                                </div>
			    </div>
			      <label class="col-md-1 control-label">Transaction</label>
			    <div class="col-md-2">
				<div class="input-group">
				    <input type="text"  placeholder="TXN_DESC" name="TXN_DESC" class="form-control">
				</div>
			    </div>
			    <label class="col-md-1 control-label">Doc Number</label>
			    <div class="col-md-2">
				<input type="text" readonly="" name="STIH_TXN_NO" placeholder="STIH_TXN_NO" value="<?php echo $result['return_status']?>"id="mih_doc_no" class="form-control">
			    </div>
			   <label class="col-md-1 control-label">Doc Date</label>
			   <div class="col-md-2">
				<input type="text" name="STIH_TXN_DT" placeholder="STIH_TXN_DT" id="STIH_TXN_DT" class="form-control">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Description</label>
			    <div class="col-md-5">
				<input type="text" name="STIH_DESC" id="STIH_DESC" placeholder="STIH_DESC" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Status</label>
			    <div class="col-md-2">
				<input type="text" name="STIH_STATUS" placeholder="STIH_STATUS" id="STIH_STATUS" class="form-control">
			    </div>
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<a href="#modal-dialog" class="btn btn-sm btn-primary" data-toggle="modal">Reference</a>
			    </div>
                           </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">Delivery Date</label>
			    <div class="col-md-2">
				<input type="text" name="STIH_DLV_DT" id="STIH_TXN_DT" placeholder="STIH_DLV_DT" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Requested by</label>
			    <div class="col-md-2">
				<input type="text" name="STIH_REQUESTED_BY" id="STIH_REQUESTED_BY" placeholder="STIH_REQUESTED_BY" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">From Locatin</label>
			    <div class="col-md-2">
			    <select name="STIH_SRC_LO" id="STIH_SRC_LO"class="form-control">
				<option>SELECT</option>
				<?php if (count($location) > 0 )
				{
				foreach ($location as $row)
				{
				?>
				<option value="<?php echo $row['LOCN_CODE']; ?>"><?php echo $row['LOCN_DESC']; ?></option>
                               <?php } }?>
				</select>
			    </div>
			    <label class="col-md-1 control-label">To Locatin</label>
			    <div class="col-md-2">
			    <select name="STIH_DLV_LO" id="STIH_DLV_LO"class="form-control">
				<option>SELECT</option>
				<?php if (count($location) > 0 )
				{
				foreach ($location as $row)
				{
				?>
				<option value="<?php echo $row['LOCN_CODE']; ?>"><?php echo $row['LOCN_DESC']; ?></option>
                               <?php } }?>
				</select>
			    
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
                                                        <input type="text" name="stoh_flix_01" placeholder="STOH_FLEX_01" id="stoh_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_11" placeholder="STOH_FLEX_11" id="stoh_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_02" placeholder="STOH_FLEX_02" id="stoh_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_12" placeholder="STOH_FLEX_12" id="stoh_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_03" placeholder="STOH_FLEX_03" id="stoh_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_13" placeholder="STOH_FLEX_13" id="stoh_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_04" placeholder="STOH_FLEX_04" id="stoh_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_14" placeholder="STOH_FLEX_14" id="stoh_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_05" placeholder="STOH_FLEX_05" id="stoh_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_15" placeholder="STOH_FLEX_15" id="stoh_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_06" placeholder="STOH_FLEX_06" id="stoh_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_16" placeholder="STOH_FLEX_16" id="stoh_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_07" placeholder="STOH_FLEX_07" id="stoh_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_17" placeholder="STOH_FLEX_17" id="stoh_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_08" placeholder="STOH_FLEX_08" id="stoh_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_18" placeholder="STOH_FLEX_18" id="stoh_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_09" placeholder="STOH_FLIX_09" id="stoh_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_19" placeholder="STOH_FLEX_19" id="stoh_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_10" placeholder="STOH_FLIX_10" id="stoh_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="stoh_flix_20" placeholder="STOH_FLEX_20" id="stoh_flix_20" class="form-control">
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
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody id="result">
                                                        <tr class="odd" >
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
							    <td></td>
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
                                                    <tbody >
                                                        
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
					<option value="<?php echo $row2['STOH_SYS_ID']?>"><?php echo $row2['STOH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['STOH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['STOH_TXN_DT'];?></option>
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
	    STIH_TXN_DT: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION DATE is required '
                    },
		    remote: {
                        message: 'The TRANSACTION DATE is invalid',
                        url: '<?php  echo site_url('InventoryController/StockTransferIncomingDate')?>',
			type: 'POST'
		    }
                }
            },
	    STIH_DESC: {
		message: 'The Description is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Description is required and can\'t be empty'
                    }
                }
            },
	    STIH_STATUS: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The Status is required and can\'t be empty'
                    }
                }
            },
	    	    STIH_DLV_DT: {
			trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The Delivery Date is required and can\'t be empty'
                    }
                }
            },
	    STIH_REQUESTED_BY: {
                validators: {
		    
                    notEmpty: {
                        message: 'Requested by is required and can\'t be empty'
                    }
                }
            },
	     STIH_SRC_LO: {
                validators: {
		    
                    notEmpty: {
                        message: 'From Locatin is required and can\'t be empty'
                    }
                }
            },
	     STIH_DLV_LO: {
                validators: {
		    
                    notEmpty: {
                        message: 'To Location is required and can\'t be empty'
                    }
                }
            },
	}
    });

});

$('*#STIH_TXN_DT').datetimepicker({
format: 'DD-MMM-YY'
});
$('*#STIH_DLV_DT').datetimepicker({
format: 'DD-MMM-YY'
});
function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}

//$('.btn-add').click(function() {
//var $template = $('#optionTemplate'),
//$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
//removerow();
//});
// 
//function removerow(){
//$(".removeButton").on('click',function(){
//var $row    = $(this).parents('.odd');
//$row.remove();
//});
//};
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
url:"<?php  echo site_url('InventoryController/StockTransferIncomingReference')?>",
data:{code:sys_code},
success: function(response)
{

    $('#result').html(response);
    $('*.datefor').datetimepicker({
    format: 'DD-MMM-YY'
});
 $('#modal-dialog').modal('hide');
}
});
})

</script>
</body>
</html>

