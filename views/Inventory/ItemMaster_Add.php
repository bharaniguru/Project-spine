<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Inventory</a></li>
	<li class="active">Add Item Master Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Item Master <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Item Master</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('InventoryController/ItemMaster_Add');?>" class="form-horizontal">
			    <div class="col-md-offset-1 col-md-7">
                            <div class="form-group">
				<label class="col-md-3 control-label">Item Code</label>
				<div class="col-md-5">
				    <input type="text" name="item_code" placeholder="ITEM_CODE" id="item_code" class="form-control">
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox" name="item_active" checked="checked" value="Y">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="item_desc" placeholder="ITEM_DESC" id="item_desc" class="form-control">
				</div>
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Base UOM</label>
				<div class="col-md-9">
				    <select class="form-control" name="item_uom_code">
                                    <option>Select</option>
				    <?php foreach($result1 as $row) {?>
				        <option value="<?php echo $row['UOM_CODE'];?>"><?php echo $row['UOM_CODE'];?></option>
                                    <?php } ?>
				    </select>
				</div>
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Hormonized System</label>
				<div class="col-md-9">
				    <input type="text" name="item_hs_desc" placeholder="ITEM_HS_DESC" id="item_hs_desc" class="form-control">
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
                                                        <option>Select</option>
							<?php foreach($result3 as $row) {?>
							    <option value="<?php echo $row['IG_CODE']?>"><?php echo $row['IG_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Item Family</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_if_code">
							    <option>Select</option>
                                                        <?php foreach($result4 as $row) {?>
							    <option value="<?php echo $row['IF_CODE']?>"><?php echo $row['IF_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Item Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_it_code">
							    <option>Select</option>
                                                        <?php foreach($result5 as $row) {?>
							    <option value="<?php echo $row['IT_CODE']?>"><?php echo $row['IT_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Item Sub Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_is_code">
							    <option>Select</option>
                                                        <?php foreach($result6 as $row) {?>
							    <option value="<?php echo $row['IS_CODE']?>"><?php echo $row['IS_CODE']?></option>
							<?php }?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Posting Under</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="item_pu_code">
							    <option>Select</option>
                                                        <?php foreach($result2 as $row) {?>
							    <option value="<?php echo $row['PG_CODE']?>"><?php echo $row['PG_CODE']?></option>
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
                                                        <input type="checkbox" name="trade_item" checked="checked" value="Y">
                                                        Trade Item ?
                                                    </label>
                                                </div>
                                                <label class="col-md-2 control-label">Minimum Stock</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_min_stk" placeholder="ITEM_MIN_STK" id="item_min_stk" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-offset-1 col-md-2 checkbox">
                                                    <label>
                                                        <input type="checkbox" name="order_item" checked="checked" value="Y">
                                                        Made to Order Item ?
                                                    </label>
                                                </div>
                                                <label class="col-md-2 control-label">Maximum Stock</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_max_stk"  placeholder="ITEM_MAX_STK" id="item_max_stk" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-offset-1 col-md-2 checkbox">
                                                    <label>
                                                        <input type="checkbox" name="service_item" checked="checked" value="Y">
                                                        Service Item ?
                                                    </label>
                                                </div>
                                                <label class="col-md-2 control-label">Re-Order Quantity</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_reord" placeholder="ITEM_REORD_QTY" id="item_reord" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-offset-3 col-md-2 control-label">Lead Time</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="item_lead_time" placeholder="ITEM_LEAD_TIME" id="item_lead_time" class="form-control">
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
                                                        <input type="text" name="item_pos_toler" placeholder="ITEM_POS_TOLER" id="item_pos_toler" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-offset-3 col-md-2 control-label">Negative Tolerance</label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="item_neg_toler" placeholder="ITEM_NEG_TOLER" id="item_neg_toler" class="form-control">
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
                                                            <td><span><select class="form-control" name="item_uom_code1[]"><option>ITEM PG CODE</option></select></span></td>
                                                            <td><span><input class="form-control" type="text" name="item_max_loose[]"/></span></td>
                                                            <td><span><input class="form-control" type="text" name="item_conver[]"/></span></td>
                                                            <td><span><input type="checkbox" name="item_active_1[]" /></span></td>
                                                            <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
                                                        </tr>
                                                        <tr class="odd hide" id="optionTemplate">
                                                            <td><span><select class="form-control" name="item_uom_code1[]"><option>ITEM PG CODE</option></select></span></td>
                                                            <td><span><input class="form-control" type="text" name="item_max_loose[]"/></span></td>
                                                            <td><span><input class="form-control" type="text" name="item_conver[]"/></span></td>
                                                            <td><span><input type="checkbox" name="item_active_1[]"/></span></td>
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
                                                    <input type="text" name="item_stock" placeholder="ITEM STOCK" id="item_stock" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Stock Neg</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_stock_neg" placeholder="ITEM STOCK NEG" id="item_stock_neg" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Stock ABC</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="stock_abc" placeholder="STOCK ABC" id="stock_abc" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Loc Code</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="Loc_code" placeholder="LOC CODE" id="Loc_code" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Rack Code</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rack_code" placeholder="RACK CODE" id="rack_code" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Rack Bin</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rack_bin" placeholder="RACK BIN" id="rack_bin" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group">
                                                <label class="col-md-2 control-label">Item Weigth</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="item_weigth" placeholder="ITEM WEIGTH" id="item_weigth" class="form-control">
                                                </div>
                                            </div>
					    <div class="form-group checkbox">
                                                <label class="col-md-offset-2">
                                                    <input type="checkbox" name="width_status" checked="checked" value="Y">
                                                    Width App ?
                                                </label>
                                            </div>
					    <div class="form-group checkbox">
                                                <label class="col-md-offset-2">
                                                    <input type="checkbox" name="height_status" checked="checked" value="Y">
                                                    Height App ?
                                                </label>
                                            </div>
					    <div class="form-group checkbox">
                                                <label class="col-md-offset-2">
                                                    <input type="checkbox" name="element_status" checked="checked" value="Y">
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
	    'item_conver[]': {
		message: 'The ITEM CONVERSION is not valid',
                container: 'popover',
		group:'td',
		validators: {
		    notEmpty: {
                        message: 'The ITEM CONVERSION is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The ITEM CONVERSION should be Positive Number'
                    }
                }
            },
	    item_min_stk: {
		message: 'The ITEM MIN STOCK is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM MIN STOCK is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The ITEM MIN STOCK should be Positive Number'
                    }
                }
            },
	    item_max_stk: {
		message: 'The ITEM MAX STOCK is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM MAX STOCK is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The ITEM MAX STOCK should be Positive Number'
                    }
                }
            },
	    item_reord: {
		message: 'The ITEM REORDER is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM REORDER is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The ITEM REORDER should be Positive Number'
                    }
                }
            },
	    item_lead_time: {
		message: 'The ITEM LEAD TIME is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM LEAD TIME is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The ITEM LEAD TIME should be Positive Number'
                    }
                }
            },
	    item_pos_toler: {
		message: 'The POSITIVE TOLERANCE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The POSITIVE TOLERANCE is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The POSITIVE TOLERANCE should be Positive Number'
                    }
                }
            },
	    item_neg_toler: {
		message: 'The NEGATIVE TOLERANCE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The NEGATIVE TOLERANCE is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The NEGATIVE TOLERANCE should be Positive Number'
                    }
                }
            },
	    
	    'item_uom_code1[]': {
		message: 'The ITEM UOM CODE is not valid',
                container: 'popover',
		group:'td',
		validators: {
		    notEmpty: {
                        message: 'The ITEM UOM CODE is required and can\'t be empty'
                    }
		}
            },
	    'item_max_loose[]': {
		message: 'The ITEM MAX LOOSE is not valid',
                container: 'popover',
		group:'td',
		validators: {
		    notEmpty: {
                        message: 'The ITEM MAX LOOSE is required and can\'t be empty'
                    },
		    regexp: {
                        regexp: /^\d*\.?\d+$/i,
                        message: 'The ITEM MAX LOOSE should be Positive Number'
                    }
		}
            },
	    item_ig_code: {
		message: 'The PARENT GROUP is not valid',
                validators: {
		    notEmpty: {
                        message: 'The PARENT GROUP is required and can\'t be empty'
                    }
		}
            },
	    item_if_code: {
		message: 'The ITEM FAMILY is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM UOM CODE is required and can\'t be empty'
                    }
		}
            },
	    item_it_code: {
		message: 'The ITEM TYPE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM TYPE is required and can\'t be empty'
                    }
		}
            },
	    item_is_code: {
		message: 'The ITEM SUB TYPE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM SUB TYPE  is required and can\'t be empty'
                    }
		}
            },
	    item_pu_code: {
		message: 'The POSTING UNDER is not valid',
                validators: {
		    notEmpty: {
                        message: 'The POSTING UNDER is required and can\'t be empty'
                    }
		}
            },
	    item_stock: {
		message: 'The STOCK POSITIVE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The STOCK POSITIVE is required and can\'t be empty'
                    }
		}
            },
	    item_stock_neg: {
		message: 'The STOCK NEGATIVE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The STOCK NEGATIVE is required and can\'t be empty'
                    }
		}
            },
	    stock_abc: {
		message: 'The STOCK ABC is not valid',
                validators: {
		    notEmpty: {
                        message: 'The STOCK ABC is required and can\'t be empty'
                    }
		}
            },
	    Loc_code: {
		message: 'The LOC CODE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The LOC CODE is required and can\'t be empty'
                    }
		}
            },
	    rack_code: {
		message: 'The RACK CODE is not valid',
                validators: {
		    notEmpty: {
                        message: 'The RACK CODE is required and can\'t be empty'
                    }
		}
            },
	    rack_bin: {
		message: 'The RACK BIN is not valid',
                validators: {
		    notEmpty: {
                        message: 'The RACK BIN is required and can\'t be empty'
                    }
		}
            },
	    item_weigth: {
		message: 'The ITEM WEIGHT is not valid',
                validators: {
		    notEmpty: {
                        message: 'The ITEM WEIGHT is required and can\'t be empty'
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
$(document).ready(function() {
$('.btn-add').click(function() {
var $template = $('#optionTemplate'),
$clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
removerow();
$ic = $clone.find('input[name="item_conver[]"]');
$uom = $clone.find('input[name="item_uom_code1[]"]');
$max = $clone.find('input[name="item_max_loose[]"]');
$('#form_validation').bootstrapValidator('addField', $ic);
$('#form_validation').bootstrapValidator('addField', $uom);
$('#form_validation').bootstrapValidator('addField', $max);
});
function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$row.remove();
//$ic = $row.find('[name="item_conver[]"]');
//$('#form_validation').formValidation('removeField', $ic);
});
};
});
</script>
</body>
</html>

