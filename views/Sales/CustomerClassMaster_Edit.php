<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Sales</a></li>
	<li><a href="javascript:;">Customer Class Master</a></li>
	<li><a href="javascript:;">Edit</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Customer Class Master<small> You may edit here...</small></h1>
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
		    <h4 class="panel-title">Customer Class Master Edit</h4>
		</div>
		<div class="panel-body ">
		     <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		     <form action="<?php echo base_url();?>Sales/CustomerClassMaster_Edit/<?php echo $ccode[0]->CC_COMP_CODE;?>/<?php echo $ccode[0]->CC_CODE;?>" class="form-horizontal" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
			<div class="row well">
			    <div class="col-md-6 ui-sortable">
				
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="hidden form-group">
                                        <label class="col-md-3 control-label">Company Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CC_COMP_CODE" name="CC_COMP_CODE" placeholder="CC_COMP_CODE" type="hidden" value="<?php echo $ccode[0]->CC_COMP_CODE;?>">
                                        </div>
                                    </div>
                                    <!--Inner row hidden END-->
				
				
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="hidden form-group">
                                        <label class="col-md-3 control-label">Language Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CC_LANG_CODE" name="CC_LANG_CODE" placeholder="CC_LANG_CODE" type="hidden" value="<?php echo $ccode[0]->CC_LANG_CODE;?>">
                                        </div>
                                    </div>
                                <!--Inner row hidden END-->

                                
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="hidden form-group">
                                        <label class="col-md-3 control-label">Created Date</label>

                                        <div class="col-md-8">
                                            <input type="hidden" name="CC_CR_DT" class="CC_CR_DT" id="datepicker-inline" data-date-format='dd-M-yy' value="<?php echo $ccode[0]->CC_CR_DT;?>">
                                        </div>
                                    </div>
                                <!--Inner row hidden END-->

                                
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class=" hidden form-group">
                                        <label class="col-md-3 control-label">Creator User Id</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CC_CR_UID" name="CC_CR_UID" placeholder="CCY_CR_UID" type="hidden" value="<?php echo $ccode[0]->CC_CR_UID;?>">
                                        </div>
                                    </div>
                                <!--Inner row hidden END-->
				<div class="form-group">
				    <label class="col-md-3 control-label">Class Code</label>
				    <div class="col-md-9">
					<input type="text" id="CC_CODE" name="CC_CODE" class="form-control" readonly placeholder="CC_CODE" value="<?php echo $ccode[0]->CC_CODE;?>"/>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Description</label>
				    <div class="col-md-9">
					<input type="text" id="CC_DESC" name="CC_DESC" class="form-control" placeholder="CC_DESC"  value="<?php echo $ccode[0]->CC_DESC;?>"/>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Exch Rate type</label>
				    <div class="col-md-9">
					<select class="form-control" id="CC_EXCHG_RATE_CODE" name="CC_EXCHG_RATE_CODE">
                                            <?php
                                            if($exch>0){
                                            foreach($exch  as $row){
                                               if(($ccode[0]->CC_EXCHG_RATE_CODE)==($row->VSL_CODE)){ ?>
                                                    <option selected="selected" value="<?php echo $ccode[0]->CC_EXCHG_RATE_CODE;?>"><?php echo $row->VSL_DESC; ?></option>
                                        <?php   }
                                                    if(($ccode[0]->CC_EXCHG_RATE_CODE)!=($row->VSL_CODE)){?>
                                                       <option value="<?php echo $row->VSL_CODE;?>"><?php echo $row->VSL_DESC;?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                                  ?>
					</select>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Currency</label>
				    <div class="col-md-9">
					<select class="form-control" id="CC_CCY_CODE" name="CC_CCY_CODE">
                                            <?php
                                            if(count($ccy)>0){
                                            $count=1;
                                            foreach($ccy  as $row){
                                               if(($ccode[0]->CC_CCY_CODE)==($row->CCY_CODE)){ ?>
                                                    <option selected="selected" value="<?php echo $ccode[0]->CC_CCY_CODE;?>"><?php echo $row->CCY_DESC; ?></option>
                                        <?php   }
                                                    if(($ccode[0]->CC_CCY_CODE)!=($row->CCY_CODE)){?>
                                                       <option value="<?php echo $row->CCY_CODE;?>"><?php echo $row->CCY_DESC;?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
                                        </select>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Payment Term</label>
				    <div class="col-md-9">
					<select class="form-control" id="CC_PAY_TERM_CODE" name="CC_PAY_TERM_CODE">
                                            <?php
                                            if(count($pay)>0){
                                            $count=1;
                                            foreach($pay  as $row){
                                               if(($ccode[0]->CC_PAY_TERM_CODE)==($row->CCY_CODE)){ ?>
                                                    <option selected="selected" value="<?php echo $ccode[0]->CC_PAY_TERM_CODE;?>"><?php echo $row->PT_DESC; ?></option>
                                        <?php   }
                                                    if(($ccode[0]->CC_PAY_TERM_CODE)!=($row->CCY_CODE)){?>
                                                       <option value="<?php echo $row->PT_CODE;?>"><?php echo $row->PT_DESC;?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
					</select>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">A/C Manager</label>
				    <div class="col-md-9">
					<select class="form-control" id="CC_AC_MANAGER" name="CC_AC_MANAGER">
                                            <?php
                                            if($ac_mang>0){
                                            foreach($ac_mang  as $row){
                                               if(($ccode[0]->CC_AC_MANAGER)==($row['SR_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME']; ?></option>
                                        <?php   }
                                                    if(($ccode[0]->CC_AC_MANAGER)!=($row['SR_CODE'])){?>
                                                       <option value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
					</select>
				    </div>
				</div>  
			       <div class="form-group">
				    <label class="col-md-3 control-label">Sales representative</label>
				    <div class="col-md-9">
					<select class="form-control" id="CC_SP_CODE" name="CC_SP_CODE">
					    <?php
                                            if($sp_code>0){
                                            foreach($sp_code  as $row){
                                               if(($ccode[0]->CC_SP_CODE)==($row['SR_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME']; ?></option>
                                        <?php   }
                                                    if(($ccode[0]->CC_SP_CODE)!=($row['SR_CODE'])){?>
                                                       <option value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
					</select>
				    </div>
				</div>
			       <div class="form-group">
				    <label class="col-md-3 control-label">Statement Cycle</label>
				    <div class="col-md-9">
					<select class="form-control" id="CC_STMT_CYCLE_CODE" name="CC_STMT_CYCLE_CODE">
                                            <?php
                                            if(count($cycle)>0){
                                            $count=1;
                                            foreach($cycle  as $row){
                                               if(($ccode[0]->CC_STMT_CYCLE_CODE)==($row->VSL_CODE)){ ?>
                                                    <option selected="selected" value="<?php echo $ccode[0]->CC_STMT_CYCLE_CODE;?>"><?php echo $row->VSL_DESC; ?></option>
                                        <?php   }
                                                    if(($ccode[0]->CC_STMT_CYCLE_CODE)!=($row->VSL_CODE)){?>
                                                       <option value="<?php echo $row->VSL_CODE;?>"><?php echo $row->VSL_DESC;?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
					</select>
				    </div>
				</div>
			       <div class="form-group">
				    <label class="col-md-3 control-label">Credit Limit</label>
				    <div class="col-md-9">
					<input type="text" name="CC_CREDIT_LIMIT" id="CC_CREDIT_LIMIT" class="form-control" placeholder="CC_CREDIT_LIMIT" value="<?php echo $ccode[0]->CC_CREDIT_LIMIT;?>" />
				    </div>
				</div>
			       <div class="form-group">
				<label class="col-md-3 control-label">Discount Grace Days</label>
				<div class="col-md-9">
				    <input type="text" name="CC_DISC_GRACE_DAYS" id="CC_DISC_GRACE_DAYS"  class="form-control" placeholder="CC_DISC_GRACE_DAYS" value="<?php echo $ccode[0]->CC_DISC_GRACE_DAYS;?>"/>
				</div>
				</div>
                            
                                <div class="form-group">
                                            <label class="col-md-3 control-label"> From Date</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Date Start" name="CC_FROM_DT" id="datetimepicker6" class="form-control" value="<?php echo $ccode[0]->CC_FROM_DT;?>">
					  </div>
					 </div>
					 <div class="form-group">
                                             <label class="col-md-3 control-label">Upto Date</label>
					     <div class="col-md-9">
						<input type="text" placeholder="Date End" name="CC_UPTO_DT" id="datetimepicker7" class="form-control" value="<?php echo $ccode[0]->CC_UPTO_DT;?>">
                                             </div>
					  </div>
			    </div>
			    <div class=" well col-md-6 ui-sortable">
				<div class="col-md-offset-2">
				<div class="form-group">
				    <div class="col-md-9">
					<label class="checkbox-inline" >
                                            <input type="checkbox"  <?php if('Y'==( $ccode[0]->CC_ACTIVE_YN)){
							echo 'checked="checked"';
							}else{
							    //echo 'checked=""';
							}
					?> name="CC_ACTIVE_YN" id="CC_ACTIVE_YN">
					 Active ?
					</label>
				    </div>
				</div>
				<div class="form-group">
				<div class="col-md-9">
				    <label class="checkbox-inline">
                                        <input type="checkbox"  <?php if('Y'==( $ccode[0]->CC_SEND_DUNNING_YN)){
						echo 'checked="checked"';
						}else{
						    //echo 'checked=""';
						}
					?> name="CC_SEND_DUNNING_YN" id="CC_SEND_DUNNING_YN">
					Send Dunning
				    </label>
				</div>
				</div>
				<div class="form-group">
				<div class="col-md-9">
				    <label class="checkbox-inline">
                                        <input type="checkbox"  <?php if('Y'==( $ccode[0]->CC_SEND_STMT_YN)){
							    echo 'checked="checked"';
							    }else{
								//echo 'checked=""';
							    }
					?> name="CC_SEND_STMT_YN" id="CC_SEND_STMT_YN">
                                        Send Statement
				    </label>
					
				</div>
				</div>
				<div class="form-group">
				 <div class="col-md-9">
				    <label class="checkbox-inline">
                                        <input type="checkbox"  <?php if('Y'==( $ccode[0]->CC_CREDIT_CHECK_YN)){
							    echo 'checked="checked"';
							    }else{
								//echo 'checked=""';
							    }
					?> name="CC_CREDIT_CHECK_YN" id="CC_CREDIT_CHECK_YN">
					Allow credit
				    </label>
					
				</div>
				 </div>
				<div class="form-group">
				<div class="col-md-9">
				    <label class="checkbox-inline">
                                        <input type="checkbox"  <?php if('Y'==( $ccode[0]->CC_DISC_YN)){
							    echo 'checked="checked"';
							    }else{
								//echo 'checked=""';
							    }
					?> name="CC_DISC_YN" id="CC_DISC_YN">
					Allow Discount
				    </label>
				</div>
				</div>
				
				
				
			        </div>
			    </div>
			</div>
                         
                        <div class="pager form-group"><!--footer start-->
                            <div class="col-md-6 control-label">
                                <!--<button class="btn btn-danger pull-left m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>-->
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="update" id="update" value="Update">Update</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                            </div>
                            <div class="col-md-6">
                                 
                            </div>
                        </div><!--footer end-->
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
<script>

$(document).ready(function() {


$('#myForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        
        fields: {
            CC_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
//                    remote: {
//			message: 'Class code already existed',
//			url: '<?php  echo site_url('Sales/AjaxClass')?>',
//			type: 'POST'
//			},
//		    regexp: {
//                       regexp: /^[A-Z0-9]+$/,
//                        message: 'Disallowed charcter'
//                    }
                    
                }
            },
            CC_DESC: {
		message: 'The Description is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 2,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    regexp: {
                       regexp: /^[a-zA-Z0-9_ \.]+$/,
                        message: 'Disallowed charcter'
                    }
                    
                }
            },
            CC_EXCHG_RATE_CODE: {
		message: 'The Exchanging Rate is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                }
            },
            CC_CCY_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    CC_PAY_TERM_CODE: {
		message: 'The Payment term Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
            CC_CREDIT_LIMIT: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 1,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    regexp: {
                       regexp: /^[0-9]+$/,
                        message: 'Disallowed Character'
                    }
                    
                } 
            },
	    CC_DISC_GRACE_DAYS: {
		message: 'The Disc Grsce days is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 1,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    regexp: {
                       regexp: /^[0-9]+$/,
                        message: 'Disallowed Character'
                    }
                    
                }
            },
	    CC_STMT_CYCLE_CODE: {
		message: 'The Statement Cycle Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    CC_AC_MANAGER: {
		message: 'The Manager Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    CC_SP_CODE: {
		message: 'The SP Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
            CC_FROM_DT: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            },
            CC_UPTO_DT: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            }
	}
    });
});
</script>
<script>
$('#clear_data').click(function(){
        $(myForm).bootstrapValidator();
        $(myForm).data('bootstrapValidator').resetForm();
        $('#myForm')[0].reset();
    });
</script>
<script type="text/javascript">
$(function () {
$('#datetimepicker6').datetimepicker({
    format: 'DD-MMM-YYYY'
         });
$('#datetimepicker7').datetimepicker({
    format: 'DD-MMM-YYYY'
    });
$("#datetimepicker6").on("dp.change",function (e) {
$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker7").on("dp.change",function (e) {
$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});
});

//$(document).on('blur','#CC_CODE',function(event){
//	event.preventDefault();
//	var cc_code = $("#CC_CODE").val();
//	//alert("yes");
//	if (cc_code!="") {//if open
//	jQuery.ajax({
//	type:"POST",
//	url: "<?php echo base_url(); ?>" + "Sales/Check_Cc_Code",
//	dataType: 'json',
//	data: {cc_code: cc_code},
//	success: function(json) {
//	    if (json)
//	    {
//	    // Show Entered Value
//	    //jQuery("div#result").show();
//	    
//	    var exist=json.existyn;
//            //alert(exist);
//		if (exist=="Y") {
//		    alert("Existing code");
//		    document.getElementById("CC_CODE").value="";
//                    $(myForm).bootstrapValidator();
//        $(myForm).data('bootstrapValidator').resetForm();
//        $('#myForm')[0].reset();
//		}
//	    }
//	}
//        });
// 
//	}//if close
//    });
</script>  
	
</body>

</html>

