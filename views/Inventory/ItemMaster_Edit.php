<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Edit Item Master Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Item Master <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Item Master</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/ItemMaster_Edit');?>" class="form-horizontal">
			    <div class="col-md-offset-1 col-md-7">
                            <div class="form-group">
				<label class="col-md-3 control-label">Item Code</label>
				<div class="col-md-5">
				    <input type="text" name="item_code" value="<?php echo $result7[0]['ITEM_CODE']?>" placeholder="ITEM_CODE" id="item_code" class="form-control">
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="item_active" <?php echo ($result7[0]['ITEM_ACTIVE_YN']=='Y') ? 'checked' : '';?> value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="item_desc" value="<?php echo $result7[0]['ITEM_DESC']?>" placeholder="ITEM_DESC" id="item_desc" class="form-control">
				</div>
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Base UOM</label>
				<div class="col-md-9">
				    <select class="form-control" name="item_uom_code">
                                    <?php foreach($result1 as $row) {?>
				        <option value="<?php echo $row['UOM_CODE'];?>" <?php if($row['UOM_CODE']==$result7[0]['ITEM_UOM_CODE']) echo 'Selected' ; ?> ><?php echo $row['UOM_CODE'];?></option>
                                    <?php } ?>
				    </select>
				</div>
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Hormonized System</label>
				<div class="col-md-9">
				    <input type="text" name="item_hs_desc" value="<?php echo $result7[0]['ITEM_HS_DESC']?>" placeholder="ITEM_HS_DESC" id="item_hs_desc" class="form-control">
				</div>
			    </div>
                            </div>
                            <div class=" col-md-12">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="tab" href="#nav-pills-tab-1">Analysis</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-pills-tab-2">Parameters</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-pills-tab-3">UOM</a>
                                    </li>
				    <li class="">
                                        <a data-toggle="tab" href="#nav-pills-tab-4">Stock</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-pills-tab-5">Statistcs</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="nav-pills-tab-1" class="tab-pane fade active in">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Parent Group</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_ig_code">
                                                        <?php foreach($result3 as $row) {?>
							    <option value="<?php echo $row['IG_CODE']?>"<?php if($row['IG_CODE']==$result7[0]['ITEM_PG_CODE']) echo 'Selected';?>><?php echo $row['IG_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Item Family</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_if_code">
                                                        <?php foreach($result4 as $row) {?>
							    <option value="<?php echo $row['IF_CODE']?>"<?php if($row['IF_CODE']==$result7[0]['ITEM_IF_CODE']) echo 'Selected';?>><?php echo $row['IF_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Item Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_it_code">
                                                        <?php foreach($result5 as $row) {?>
							    <option value="<?php echo $row['IT_CODE']?>"<?php if($row['IT_CODE']==$result7[0]['ITEM_IT_CODE']) echo 'Selected'; ?>><?php echo $row['IT_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Item Sub Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_is_code">
                                                        <?php foreach($result6 as $row) {?>
							    <option value="<?php echo $row['IS_CODE']?>"<?php if($row['IS_CODE']==$result7[0]['ITEM_ST_CODE']) echo 'Selected';?>><?php echo $row['IS_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Posting Under</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_pu_code">
                                                        <?php foreach($result2 as $row) {?>
							    <option value="<?php echo $row['PG_CODE']?>"<?php if($row['PG_CODE']==$result7[0]['ITEM_PC_CODE'])echo 'Selected';?>><?php echo $row['PG_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-pills-tab-2" class="tab-pane fade">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-offset-1 col-md-2 checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Y" name="trade_item" <?php if($result7[0]['ITEM_TRADE_YN']=='Y') echo  'checked'; ?>>
                                                        Trade Item ?
                                                    </label>
                                                </div>
                                                <label class="col-md-2 control-label">Minimum Stock</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_min_stk" value="<?php echo $result7[0]['ITEM_MIN_STK']?>" placeholder="ITEM_MIN_STK" id="item_min_stk" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-offset-1 col-md-2 checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Y" name="order_item" <?php if($result7[0]['ITEM_TRADE_YN']=='Y') echo  'checked'; ?>>
                                                        Made to Order Item ?
                                                    </label>
                                                </div>
                                                <label class="col-md-2 control-label">Maximum Stock</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_max_stk" value="<?php echo $result7[0]['ITEM_MAX_STK']?>" placeholder="ITEM_MAX_STK" id="item_max_stk" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-offset-1 col-md-2 checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Y" name="service_item" <?php if($result7[0]['ITEM_SERVICE_YN']=='Y') echo 'checked';?>>
                                                        Service Item ?
                                                    </label>
                                                </div>
                                                <label class="col-md-2 control-label">Re-Order Quantity</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_reord" value="<?php echo $result7[0]['ITEM_REORD_QTY']?>" placeholder="ITEM_REORD_QTY" id="item_reord" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-offset-3 col-md-2 control-label">Lead Time</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="item_lead_time" value="<?php echo $result7[0]['ITEM_LEAD_TIME']?>" placeholder="ITEM_LEAD_TIME" id="item_lead_time" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <!--<div class="row">
                                            <div class="form-group">
                                                <label class="col-md-offset-3 col-md-2 control-label">Lead Time</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="item_lead_time" placeholder="ITEM_LEAD_TIME" id="item_lead_time" class="form-control">
                                                    </div>
                                            </div>
                                        </div>-->
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-offset-3 col-md-2 control-label">Positive Tolerance</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="item_pos_toler" value="<?php echo $result7[0]['ITEM_POS_TOLERANCE']?>" placeholder="ITEM_POS_TOLER" id="item_pos_toler" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-offset-3 col-md-2 control-label">Negative Tolerance</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="item_neg_toler" value="<?php echo $result7[0]['ITEM_NEG_TOLERANCE']?>" placeholder="ITEM_NEG_TOLER" id="item_neg_toler" class="form-control">
                                                    </div>
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
                                                            <th>UOM</th>
                                                            <th>Max Loose</th>
                                                            <th>Conversion</th>
                                                            <th>Active?</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td><span><select class="form-control" name="item_pg_code"><option>ITEM PG CODE</option></select></span></td>
                                                            <td><span><input class="form-control" type="text" name="middle_name[]" ></span></td>
                                                            <td><span><input class="form-control" type="text" name="last_name[]"></span></td>
                                                            <td><span><input type="checkbox" name="check[]"></span></td>
                                                            <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
                                                        </tr>
                                                        <tr class="odd hide" id="optionTemplate">
                                                            <td><span><select class="form-control" name="item_pg_code"><option>ITEM PG CODE</option></select></span></td>
                                                            <td><span><input class="form-control" type="text" name="middle_name[]" ></span></td>
                                                            <td><span><input class="form-control" type="text"name="last_name[]"></span></td>
                                                            <td><span><input type="checkbox" name="check[]"></span></td>
                                                            <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
				    <div id="nav-pills-tab-4" class="tab-pane fade">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Stock Pos</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_stock" value="<?php echo $result7[0]['ITEM_STOCK_POS_TOL']?>" placeholder="ITEM STOCK" id="item_stock" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Stock Neg</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_stock_neg" value="<?php echo $result7[0]['ITEM_STOCK_NEG_TOL']?>" placeholder="ITEM STOCK NEG" id="item_stock_neg" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Stock ABC</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="stock_abc" value="<?php echo $result7[0]['ITEM_STOCK_ABC']?>" placeholder="STOCK ABC" id="stock_abc" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Loc Code</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="Loc_code" value="<?php echo $result7[0]['ITEM_LOCN_CODE']?>" placeholder="LOC CODE" id="Loc_code" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Rack Code</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rack_code" value="<?php echo $result7[0]['ITEM_RACK_CODE']?>" placeholder="RACK CODE" id="rack_code" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Rack Bin</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rack_bin" value="<?php echo $result7[0]['ITEM_RACK_BIN']?>" placeholder="RACK BIN" id="rack_bin" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Item Weigth</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_weigth" value="<?php echo $result7[0]['ITEM_WEIGHT']?>" placeholder="ITEM WEIGTH" id="item_weigth" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group checkbox">
                                                <label class="col-md-offset-2">
                                                    <input type="checkbox" value="Y" name="width_status" <?php if($result7[0]['ITEM_WIDTH_APP_YN']=='Y') echo 'checked';?>>
                                                    Width App ?
                                                </label>
                                            </div>
					    <div class="form-group checkbox">
                                                <label class="col-md-offset-2">
                                                    <input type="checkbox"  value="Y" name="height_status" <?php if($result7[0]['ITEM_HEIGHT_APP_YN']=='Y') echo 'checked';?>>
                                                    Height App ?
                                                </label>
                                            </div>
					    <div class="form-group checkbox">
                                                <label class="col-md-offset-2">
                                                    <input type="checkbox" value="Y" name="element_status" <?php if($result7[0]['ITEM_ELEMENTS_APP_YN']=='Y') echo 'checked';?>>
                                                    Element App ?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-pills-tab-5" class="tab-pane fade">
                                        <h3 class="m-t-10"></h3>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                       <tr>
                                                           <th>Transaction Head</th>
                                                           <th>Number of Doc</th>
                                                           <th>Last Used</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                       <tr>
                                                           <td></td>
                                                           <td></td>
                                                           <td></td>
                                                       </tr>
                                                   </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-offset-1 col-md-7">
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
            item_code: {
		message: 'The ITEM CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM CODE is required and can\'t be empty'
                    }
                }
            },
	    item_active: {
		message: 'The ACTIVE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACTIVE is required and can\'t be empty'
                    }
                }
            },
	    item_desc: {
		message: 'The ITEM DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    item_uom_code: {
		message: 'The ITEM UOM CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ITEM UOM CODE is required and can\'t be empty'
                    }
                }
            },
            item_hs_desc: {
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

