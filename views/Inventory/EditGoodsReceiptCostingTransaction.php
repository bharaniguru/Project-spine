<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 19/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Good Receipt Costing Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Add Good Receipt Costing Transaction <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Add Good Receipt Costing Transaction</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/AddMaterialRequestTransaction');?>" class="form-horizontal">
			    <div class="row">
			    <label class="col-md-1 control-label">Transaction</label>
			    <div class="col-md-5">
				<div class="input-group">
                                    <select class="form-control">
					<option value="grh_txn_code">GRH_TXN_CODE</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
                                    </select>
                                    <span class="input-group-addon"></span>
				    <input type="text" name="txn_desc" placeholder="TXN_DESC" id="txn_desc" class="form-control">
                                </div>
			    </div>
			    <label class="col-md-1 control-label">Txn Number</label>
			    <div class="col-md-2">
				<input type="text" name="grh_doc_no" placeholder="GRH_TXN_NO" id="grh_doc_no" class="form-control">
			    </div>
			   <label class="col-md-1 control-label">Txn Date</label>
			   <div class="col-md-2">
				<input type="text" name="grh_doc_DT" placeholder="GRH_TXN_NO" id="grh_doc_DT" class="form-control">
			    </div>
                           </div>
			     <div class="row p-t-20">
			    <label class="col-md-1 control-label">Supplier</label>
			    <div class="col-md-5">
				<input type="text" name="grh_sup" id="grh_sup" placeholder="GRH_SUPL_CODE" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Location</label>
			    <div class="col-md-2">
				<input type="text" name="grh_locn_code" placeholder="GRH_LOCN_CODE" id="grh_locn_code" class="form-control">
			    </div>
			    <label class="col-md-1 control-label"></label>
			    <div class="col-md-2">
				<input type="submit" class="btn  btn-sm btn-primary" name="submit" value="Reference" id="model_reference">
			    </div>
                           </div>
			    <div class="row p-t-20">
			    <label class="col-md-1 control-label">Invoice No</label>
			    <div class="col-md-2">
				<input type="text" name="grh_inv_no" id="grh_inv_no" placeholder="GRH_INV_NO" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Invoice Date</label>
			    <div class="col-md-2">
				<input type="text" name="grh_inv_dt" placeholder="GRH_INV_DT" id="grh_inv_dt" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">Bill of Entry</label>
			    <div class="col-md-2">
				<input type="text" name="grh_bill_dt" placeholder="GRH_BILL_OF_DT" id="grh_bill_dt" class="form-control">
			    </div>
			    <label class="col-md-1 control-label">FCL/LCL</label>
			    <div class="col-md-2">
				<input type="text" name="grh_fcl_lcl" placeholder="GRH_FCL_LCL" id="grh_fcl_lcl" class="form-control">
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
                                                        <input type="text" name="grh_flix_01" placeholder="GRH_FLEX_01" id="grh_flix_01" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 11</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_11" placeholder="GRH_FLEX_11" id="grh_flix_11" class="form-control">
                                                    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 02</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_02" placeholder="GRH_FLEX_02" id="grh_flix_02" class="form-control">
                                                    </div>
						<label class="col-md-1 control-label">Flex 12</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_12" placeholder="GRH_FLEX_12" id="grh_flix_12" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 03</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_03" placeholder="GRH_FLEX_03" id="grh_flix_03" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 13</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_13" placeholder="GRH_FLEX_13" id="grh_flix_13" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 04</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_04" placeholder="GRH_FLEX_04" id="grh_flix_04" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 14</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_14" placeholder="GRH_FLEX_14" id="grh_flix_14" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 05</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_05" placeholder="GRH_FLEX_05" id="grh_flix_05" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 15</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_15" placeholder="GRH_FLEX_15" id="grh_flix_15" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 06</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_06" placeholder="GRH_FLEX_06" id="grh_flix_06" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 16</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_16" placeholder="GRH_FLEX_16" id="grh_flix_16" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 07</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_07" placeholder="GRH_FLEX_07" id="grh_flix_07" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 17</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_17" placeholder="GRH_FLEX_17" id="grh_flix_17" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 08</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_08" placeholder="GRH_FLEX_08" id="grh_flix_08" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 18</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_18" placeholder="GRH_FLEX_18" id="grh_flix_18" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 09</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_09" placeholder="GRH_FLIX_09" id="grh_flix_09" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 19</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_19" placeholder="GRH_FLEX_19" id="grh_flix_19" class="form-control">
						    </div>    
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-1 control-label">Flex 10</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_10" placeholder="GRH_FLIX_10" id="grh_flix_10" class="form-control">
						    </div>
						<label class="col-md-1 control-label">Flex 20</label>
                                                    <div class="col-md-4">
							<input type="text" name="grh_flix_20" placeholder="GRH_FLEX_20" id="grh_flix_20" class="form-control">
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
                                                            <th><center>Description</center></th>
                                                            <th><center>Value</center></th>
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
                                                            <td><span></span></td>
                                                            <td></td>
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
                                    <input type="submit" name="submit" class="btn btn-sm btn-success" value="Save">
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
</body>
</html>

