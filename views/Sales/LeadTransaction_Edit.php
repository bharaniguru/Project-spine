<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Add Country</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Lead Transaction<small> Update the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Lead Transaction</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <form class="form-horizontal" name="myForm" id="myForm" enctype="multipart/form-data" action="<?php echo base_url();?>Sales/LeadTransaction_Edit" method="post">
			<div class="well">
			<div class="row">    
			    <div class="col-md-4">
				    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				    <div class="col-md-9">
					<select class="form-control" id="LH_TXN_CODE" name="LH_TXN_CODE">
					    <?php
					    
                                            if($txn_code>0){
					    asort($txn_code);
                                            foreach($txn_code  as $row){
                                               if(($lead[0]['LH_TXN_CODE'])==($row['TXN_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['TXN_CODE'];?>"><?php echo $row['TXN_DESC'];?></option>
                                        <?php   }
                                                    if(($lead[0]['LH_TXN_CODE'])!=($row['TXN_CODE'])){?>
                                                       <option value="<?php echo $row['TXN_CODE'];?>"><?php echo $row['TXN_DESC'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                                  ?>
					</select>
				    </div>
				</div>
			    </div>
		   
			    <div class="col-md-4">
				<div class="form-group">
				<label class="col-md-4 control-label">Txn Number</label>
				    <div class="col-md-8">
					<input type="text" id="LH_TXN_NO"  readonly name="LH_TXN_NO" class="form-control" placeholder="LH_TXN_NO" value="<?php echo $lead[0]['LH_TXN_NO'];?>">
					    <!--  hidden fields  -->
					<input type="hidden" name="LH_SYS_ID" id="LH_SYS_ID" value="<?php echo $lead[0]['LH_SYS_ID'];?>">
					<input type="hidden" name="LH_COMP_CODE" id="LH_COMP_CODE" value="<?php echo $lead[0]['LH_COMP_CODE'];?>">
					<input type="hidden" name="LH_LANG_CODE" id="LH_LANG_CODE" value="en">
					<input type="hidden" name="LH_UP_UID" id="LH_UP_UID" >
					<input type="hidden" name="LH_UP_DT" class="LH_UP_DT" id="datepicker-inline" data-date-format='dd-M-yy'>
					<input type="hidden" id="LH_SR_CODE"  name="LH_SR_CODE" value="<?php echo $lead[0]['LH_SR_CODE'];?>"  />
					<input type="hidden" name="LH_LOCN_CODE" id="LH_LOCN_CODE" value="<?php echo $lead[0]['LH_LOCN_CODE'];?>">
					<!--<input type="hidden" name="check_LOCN_sr_CODE" id="check_LOCN_sr_CODE" value="<?php //if($locn_sr_code=='no'){echo $locn_sr_code;}?>">-->
					<!--<input type="hidden" name="LH_STATUS" id="LH_STATUS" value="NEW">-->
					     <!--  hidden fields  -->
				    </div>
			    </div>
			    </div>
			     
			  <div class="col-md-4">
			    <div class="form-group">
			     <label class="col-md-4 control-label">Date</label>
				    <div class="col-md-8">
					<input type="text" id="datetimepicker6" name="LH_TXN_DT" class="form-control" placeholder="LH_TXN_DATE" value="<?php echo $lead[0]['LH_TXN_DT'];?>"/>
				    </div>
			    </div>
			     </div>
			</div>  
            <div class="row">
		<div class="col-md-6 ui-sortable"><!-- FIRST COL-6 BEGIN-->
		    <div class="col-md-offset-0">
			    <div class="form-group">
				<label class="col-md-3 control-label">Contact Number</label>
				<div class="col-md-9">
				    <input type="text" id="LH_CONTACT_NO " name="LH_CONTACT_NO" class="form-control" placeholder="LH_CONTACT_NO" value="<?php echo $lead[0]['LH_CONTACT_NO'];?>"/>
				</div>
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Contact Person</label>
				<div class="col-md-9">
				    <input type="text" id="LH_CONTACT_PERSON" name="LH_CONTACT_PERSON" class="form-control" placeholder="LH_CONTACT_PERSON" value="<?php echo $lead[0]['LH_CONTACT_PERSON'];?>"/>
				</div>
			    </div>
                            <div class="form-group">
				<label class="col-md-3 control-label">Lead</label>
				<div class="col-md-9">
				    <input type="text" id="LH_LEAD" name="LH_LEAD" class="form-control" placeholder="LH_LEAD" value="<?php echo $lead[0]['LH_LEAD'];?>"/>
				</div>
			    </div>
                            
                            
			    <div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-9">
				    <input type="text" id="LH_MAIL"  name="LH_MAIL" class="form-control" placeholder="LH_MAIL"  value="<?php echo $lead[0]['LH_MAIL'];?>"/>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Priority</label>
				<div class="col-md-9">
				    <select class="form-control" id="LH_PRIORITY" name="LH_PRIORITY">
					<?php
                                            if($priority>0){
                                            foreach($priority  as $row){
                                               if(($lead[0]['LH_PRIORITY'])==($row['VSL_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                        <?php   }
                                                    if(($lead[0]['LH_PRIORITY'])!=($row['VSL_CODE'])){?>
                                                       <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                                  ?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Lead Source</label>
				<div class="col-md-9">
				    <select class="form-control" id="LH_SOURCE_CODE" name="LH_SOURCE_CODE">
				    <?php
                                            if($source>0){
                                            foreach($source  as $row){
                                               if(($lead[0]['LH_SOURCE_CODE'])==($row['VSL_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                        <?php   }
                                                    if(($lead[0]['LH_SOURCE_CODE'])!=($row['VSL_CODE'])){?>
                                                       <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                                  ?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Other Source</label>
				<div class="col-md-9">
				    <input type="text" id="LH_SOURCE_OTHER"  name="LH_SOURCE_OTHER" class="form-control" placeholder="LH_SOURCE_OTHER" value="<?php echo $lead[0]['LH_SOURCE_OTHER'];?>"  />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Lead Status</label>
				<div class="col-md-9">
				    <select class="form-control" id="LH_STATUS" name="LH_STATUS">
					<?php
                                            if($status>0){
						if($lead[0]['LH_STATUS']=='NEW'){?>
						    <option selected="selected" value="<?php echo $lead[0]['LH_STATUS'];?>"><?php echo $lead[0]['LH_STATUS'];?></option>
					<?php }
                                            foreach($status  as $row){					    
                                               if(($lead[0]['LH_STATUS'])==($row['VSL_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                        <?php   }
                                                    if(($lead[0]['LH_STATUS'])!=($row['VSL_CODE'])){?>
                                                       <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                                  ?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Customer Account Code</label>
				<div class="col-md-9">
				    <input type="text" id="LH_CUST_AC_CODE" readonly name="LH_CUST_AC_CODE" class="form-control" placeholder="LH_CUST_AC_CODE"  value="<?php echo $lead[0]['LH_CUST_AC_CODE'];?>"/>
				    
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Customer Account Desc</label>
				<div class="col-md-9">
				    <input type="text" id="LH_CUST_AC_DESC" readonly name="LH_CUST_AC_DESC" class="form-control" placeholder="LH_CUST_AC_DESC" value="<?php echo $lead[0]['LH_CUST_AC_DESC'];?>"/>
				</div>
			    </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Lead Detail</label>
                                <div class="col-md-9">
                                <textarea class="form-control" rows="5" id="LH_DESC" name="LH_DESC" placeholder="LH_DESC" ><?php echo $lead[0]['LH_DESC'];?></textarea>
                                </div>
                            </div>
                    </div>
		</div><!-- FIRST COL-6 end-->
		<div class="col-md-6 ui-sortable"><!-- SECOND COL-6 BEGIN-->
		</div><!-- second COL-6 end-->
            </div>
	    </div>
			<div class="pager form-group"><!--footer start-->
			   <div class="col-md-6 control-label">
			      <button class="btn btn-danger pull-left m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>
			      <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="update" id="update" value="Update">Update</button>
			      <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
			   </div>
			   <div class="col-md-6">
			       
			   </div>
			</div><!--footer end-->
			
			<div class="row hidden">
			    <div class="well">
				    <div class="col-md-6 ui-sortable "><!-- FIRST COL-6 BEGIN-->
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 01</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_01" name="LH_FLEX_01" class="form-control" placeholder="LH_FLEX_01" />
						</div>
					    </div>
					</div>
					
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 02</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_02" name="LH_FLEX_02" class="form-control" placeholder="LH_FLEX_02" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 03</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_03" name="LH_FLEX_03" class="form-control" placeholder="LH_FLEX_03" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 04</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_04" name="LH_FLEX_04" class="form-control" placeholder="LH_FLEX_04" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 05</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_05" name="LH_FLEX_05" class="form-control" placeholder="LH_FLEX_05" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 06</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_06" name="LH_FLEX_06" class="form-control" placeholder="LH_FLEX_06" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 06</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_07" name="LH_FLEX_07" class="form-control" placeholder="LH_FLEX_07" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 08</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_08" name="LH_FLEX_08" class="form-control" placeholder="LH_FLEX_08" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 09</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_09" name="LH_FLEX_09" class="form-control" placeholder="LH_FLEX_09" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 10</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_10" name="LH_FLEX_10" class="form-control" placeholder="LH_FLEX_10" />
						</div>
					    </div>
					</div>
				    </div><!-- FIRST COL-6 end-->
				    <div class="col-md-6 ui-sortable "><!-- Second COL-6 BEGIN-->
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 11</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_11" name="LH_FLEX_11" class="form-control" placeholder="LH_FLEX_11" />
						</div>
					    </div>
					</div>
					
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 12</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_12" name="LH_FLEX_12" class="form-control" placeholder="LH_FLEX_12" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 13</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_13" name="LH_FLEX_13" class="form-control" placeholder="LH_FLEX_13" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 14</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_14" name="LH_FLEX_14" class="form-control" placeholder="LH_FLEX_14" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 15</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_15" name="LH_FLEX_15" class="form-control" placeholder="LH_FLEX_15" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 16</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_16" name="LH_FLEX_16" class="form-control" placeholder="LH_FLEX_16" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 16</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_17" name="LH_FLEX_17" class="form-control" placeholder="LH_FLEX_17" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 18</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_18" name="LH_FLEX_18" class="form-control" placeholder="LH_FLEX_18" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 19</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_19" name="LH_FLEX_19" class="form-control" placeholder="LH_FLEX_19" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group">
						<label class="col-md-3 control-label">Flex 20</label>
						<div class="col-md-9">
						    <input type="text" id="LH_FLEX_20" name="LH_FLEX_20" class="form-control" placeholder="LH_FLEX_20" />
						</div>
					    </div>
					</div>
				    </div><!-- Second COL-6 end-->
			    </div>
			</div>
		    </form>
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
    $('#datetimepicker6').datetimepicker({
    format: 'DD-MMM-YYYY'
         });
    var locn_code=$('#check_LOCN_sr_CODE').val();
    
    if (locn_code=="no") {
	//$("#SR_LOCN_CODE")
	alert("Your are not defined as Sales Representative so location also not find hence you can not create this transaction.");
	window.location.replace("<?php echo base_url();?>Sales/LeadTransactionView");
	//$("<?php echo base_url();?>Sales/LeadTransactionView");
    }
    $('#myForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            LH_TXN_CODE: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	    LH_TXN_NO: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	    LH_TXN_DT: {
		trigger:'blur',
                validators: {
                    
		     notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
		}
	    },
	    LH_CONTACT_NO: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	    LH_CONTACT_PERSON: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	    LH_LEAD: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	    LH_MAIL: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    },
                    regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        }
                }
            },
	    LH_PRIORITY: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	    LH_SOURCE_CODE: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	     LH_SOURCE_OTHER: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	     LH_STATUS: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	     LH_CUST_AC_CODE: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	     LH_CUST_AC_DESC: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            },
	     LH_DESC: {
		message: 'This Field is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This Field is required and can\'t be empty'
                    }
                    //stringLength: {
                    //    min: 6,
                    //    max: 30,
                    //    message: 'This Field must be more than 6 and less than 30 characters long'
                    //},
                    //regexp: {
                    //    regexp: /^[a-zA-Z0-9_\.]+$/,
                    //    message: 'This Field can only consist of alphabetical, number, dot and underscore'
                    //}
                }
            }
	}
  });
});
</script>
<script>

//$(".LH_CR_DT").datepicker().datepicker("setDate", new Date());
    $('#clear_data').click(function(){
        $(myForm).bootstrapValidator();
        $(myForm).data('bootstrapValidator').resetForm();
        $('#myForm')[0].reset();
    });
    
//    $( "#LH_CONTACT_NO " ).keyup(function() {
//alert( "Handler for .keyup() called." );
//});
    $(document).on('blur','#LH_CONTACT_NO ',function(event){
	event.preventDefault();
	var contact_no = $("#LH_CONTACT_NO ").val();
	//alert("yes");
	if (contact_no!="") {//if open
	jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Get_Contact_Detail",
	dataType: 'json',
	data: {contact_no: contact_no},
	success: function(json) {
	    if (json)
	    {
	    // Show Entered Value
	    //jQuery("div#result").show();
	    
	    var exist=json.exist_cust;
		if (exist!="") {
		    alert("Existing Customer");
		    $('#LH_CUST_AC_CODE').attr("readonly", true);
		    $('#LH_CUST_AC_DESC').attr("readonly", true);
		    document.getElementById("LH_CUST_AC_CODE").value =json.acc_code;
		    document.getElementById("LH_CUST_AC_DESC").value=json.acc_desc;
		}
		else{
		    alert("New Customer");
		    $('#LH_CUST_AC_CODE').attr("readonly", false);
		    $('#LH_CUST_AC_DESC').attr("readonly", false);
		    document.getElementById("LH_CUST_AC_CODE").value ="";
		    document.getElementById("LH_CUST_AC_DESC").value="";
		}
	    }
	}
        });
 
	}//if close
	});
          


</script>
	
	
</body>

</html>

