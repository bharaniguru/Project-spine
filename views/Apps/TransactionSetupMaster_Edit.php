<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<?php
$status = $this->session->flashdata('status');
?>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Edit Transaction Setup Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Transaction Setup Master <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Transaction Setup Master</h4>
		</div>
		<div class="panel-body">
		   <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		  <form action="<?php echo site_url('Apps/TransactionSetupMaster_Edit/'.$first[0]['TXN_CODE'])?>" method="post" id="form_validation" class="form-horizontal">
		     
		    <div class="col-md-offset col-md-12">
			
			    <div class="form-group">
				<label class="col-md-3 control-label">Transaction Code</label>
				<div class="col-md-3">
				    <input type="text" value="<?php echo $first[0]['TXN_CODE'] ;?>"  name="txh_code" class="form-control" placeholder="TXH_CODE" readonly/>
				    <input type="hidden" name="seq_flow" class="form-control" value="<?php echo $txnmax[0]['TXN_FLOW_SEQ']+1; ?>"/>
				</div>
				<div class="col-md-2">
				    <div class="checkbox">
					<label>
					</label>
				    </div>
				</div>				
				<div class="col-md-3">
				    <div class="checkbox">
					<label>
					    <input type="checkbox" value="Y" name="txn_active" <?php echo ($first[0]['TXN_ACTIVE_YN'] == 'Y' ? 'checked' : '')?>>						
					    Active ?
					</label>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-7">
				    <input type="text" value="<?php echo $first[0]['TXN_DESC']?>" name="txh_desc" class="form-control" placeholder="TXH_DESC" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Transaction Head</label>
				<div class="col-md-7">
				    <select name="txn_head" class="form-control">
				       <?php foreach( $thm as $r1) {?>
                                          <option value="<?php echo $r1['TXH_CODE'];?>" <?php if( $first[0]['TXN_TXH_CODE']==$r1['TXH_CODE']) echo "Selected"; ?>><?php echo $r1['TXH_DESC']; ?></option>
                                       <?php }?>
				    </select>
				</div>
			    </div>
			    
		    </div>
		     <div class="col-md-offset col-md-12">
			    <ul class="nav nav-tabs">
				<li class="active"><a href="#Lines" data-toggle="tab"><i class="fa fa-fw fa-cogs"></i> <span class="hidden-xs">Properties</span></a></li>
                <li class=""><a href="#text-font-tab" data-toggle="tab"><i class="fa fa-fw fa-font"></i> <span class="hidden-xs">Document Generation</span></a></li>
                <li class=""><a href="#margin-tab" data-toggle="tab"><i class="fa fa-fw fa-arrows"></i> <span class="hidden-xs">Authorization</span></a></li>
                
            </ul>
            <div class="tab-content">
		<div class="tab-pane fade active in" id="Lines">
		    <div class="form-group">
			<label class="col-md-3 control-label">Number Generation Type</label>
			<div class="col-md-7">
			 <select name="txn_num_gen_type"  id="txn_num_gen_type" class="form-control">
			<?php foreach($avsl as $val){?>
			<option value="<?php echo $val['VSL_CODE'] ?>"<?php if($first[0]['TXN_DOC_GEN_TYPE']==$val['VSL_CODE']) echo 'selected'; ?> ><?php echo $val['VSL_DESC']?></option>
			 <?php }?>
			 </select>
			</div>
		    </div>
		
		
		    <div class="form-group">
			<label class="col-md-3 control-label">Number padding</label>
			<div class="col-md-7">
			    <select name="txn_num_pad" class="form-control">
			    
			    <?php foreach($txnpad as $val){?>
			    <option value="<?php echo $val['VSL_CODE'] ?>"><?php echo $val['VSL_DESC']?></option>
			    <?php }?>
			    </select>
		    
			</div>
		    </div>
		
		    <div class="form-group">
			<label class="col-md-3 control-label">Future Days</label>
			<div class="col-md-7">
			    <input type="text" value="<?php echo $first[0]['TXN_FUTURE_DAYS']?>" name="txn_future_days" class="form-control" placeholder="TXN_FUTURE_DAYS" />
			</div>
		    </div>
		    
		    <div class="form-group">
			<label class="col-md-3 control-label">Back Days</label>
			<div class="col-md-7">
			    <input type="text" name="txn_back_days" value="<?php echo $first[0]['TXN_BACK_DAYS']?>" class="form-control" placeholder="TXN_BACK_DAYS" />
			</div>
		    </div>			    
		    
		    <div class="form-group">
			<label class="col-md-3 control-label">Audit required?</label>

			<div class="col-md-3">
			    <div class="checkbox">
				<label>
				    <input type="checkbox"  value="Y" name="txn_audit" <?php echo ($first[0]['TXN_AUDIT_YN'] == 'Y' ? 'checked' : '')?>>
				     
				    Active ?
				</label>
			    </div>
			</div>
		    </div>
		</div>
		
              <div class="tab-pane fade" id="text-font-tab">
                     <div class="widget-body">
			<div class="table-responsive">
			   <table class="table table-bordered">
			      <thead>
				 <tr>
				    <th>Company</th>
				    <th>Year</th>
				    <?php //if($first[0]['TXN_DOC_GEN_TYPE']=="P"){ ?>
				    <th class="txn_hide">Period</th>
				    <th class="txn_hide">From Date</th>
				    <th class="txn_hide">Upto Date</th>
				    <?php //}?>
				    <th>Doc Number From</th>
				    <th>Doc Number Upto</th>
				    <th>Current Doc Number</th>
				    <th><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></th>
				 </tr>
			      </thead>
			      <tbody>
				<?php
				$val1=count($second);
				$k=1;
				foreach($second as $row)
				{
				?>
				<tr class="odd">
				    <input type="hidden" value="<?php echo $val1;?>"  name="rowcount"/>
				    <td><span><input type="text" value="<?php echo $row['TXDR_COMP_CODE']?>" name="txdr_company[]"  class="" id="company"></span></td>
				    <td><span><input type="text" value="<?php echo $row['TXDR_ACNT_YR']?>" name="txdr_year[]" class=""></span></td>
				    <?php// if($first[0]['TXN_DOC_GEN_TYPE']=="P"){ ?> 
				    <td class="txn_hide"><span><input type="text" value="<?php echo $row['TXDR_PRD_NO']?>" name="txdr_period[]"  class=""></span></td>
				    <td class="txn_hide">
				    <div class="form-group ">
					<div class='col-md-5'>
					    <div class='input-group date' id='datetimepicker1'>
					    <input type="text" value="<?php echo $row['TXDR_PRD_FM_DT']?>" name="txdr_from_date[]"  class="input-group datetimepicker1" id="txdr_from_date">
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </div>
					</div>
					</div>
				   </td>
				   <td class="txn_hide">
					<div class="form-group ">
					    <div class='col-md-5'>
						<div class='input-group date' id='datetimepicker2'>
						<input type="text" nalue="<?php echo $row['TXDR_PRD_TO_DT']?>" name="txdr_upto_date[]" class="input-group datetimepicker2" id="txdr_upto_date">
						    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
						    </span>
						</div>
					    </div>
					</div>
				   </td>
				   <?php //}?>
				   <td><span><input type="text" value="<?php echo $row['TXDR_DOC_FM_NO']?>" name="txdr_doc_no_from[]"  class=""></span></td>
				   <td><span><input type="text" value="<?php echo $row['TXDR_DOC_TO_NO']?>" name="txdr_doc_no_upto[]"  class=""></span></td>
				   <td><span><input type="text" value="<?php echo $row['TXDR_DOC_CURR_NO']?>" name="txdr_curr_do_no[]"  class="" id="email_1"></span></td>
				    
				    <?php if( $row['TXDR_PRD_NO']=="") {$id4="NULL";}else $id4=$row['TXDR_PRD_NO']; ?>
				    
				    <td><a href="<?php echo base_url("Apps/TranscationSetupDoc_Delete/".$row['TXDR_COMP_CODE']."/".$row['TXDR_ACNT_YR']."/".$first[0]['TXN_CODE']."/".$id4) ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure you want to delete this Responsibilty Lines?');" >Remove</button></a></td>
				   </tr>
				 <?php
				 $k++;
				 }
				 ?>
				    <tr class="odd hide" id="optionTemplate">
					<td><span><input type="text" name="txdr_company1[]"  class="" id="company"></span></td>
					<td><span><input type="text" name="txdr_year1[]"  class=""></span></td>
					<td class="txn_hide"><span><input type="text" name="txdr_period[]"  class=""></span></td>
				       <td class="txn_hide">
					     <div class="form-group ">
						 <div class='col-md-5'>
						     <div class='input-group date' id='datetimepicker1'>
						     <input type="text" name="txdr_from_date1[]"  class="input-group datetimepicker1" id="txdr_from_date">
							 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							 </span>
						     </div>
						 </div>
						 </div>
						    
					 </td>
						 
					 <td class="txn_hide">
						 <div class="form-group ">
						 <div class='col-md-5'>
						     <div class='input-group date' id='datetimepicker2'>
						     <input type="text" name="txdr_upto_date1[]" class="input-group datetimepicker2" id="txdr_upto_date">
							 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							 </span>
						     </div>
						 </div>
					     </div>
					 
					 </td>
				       
				 <!--       <td class="txn_hide"><span><input type="text" name="txdr_from_date" maxlength="500" size="10" class="" id="email_1"></span></td>
					<td class="txn_hide"><span><input type="text" name="txdr_upto_date" maxlength="50" size="10" class="" id="first_name_1"></span></td>-->
					<td><span><input type="text" name="txdr_doc_no_from1[]"  class=""></span></td>
					<td><span><input type="text" name="txdr_doc_no_upto1[]" class=""></span></td>
					<td><span><input type="text" name="txdr_curr_do_no1[]"  class="" id="email_1"></span></td>
					<td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
				    </tr>

			      </tbody>
			   </table>
			</div>
		     </div>

		    </div>
		    <div class="tab-pane fade" id="margin-tab">
			<div class="widget-body">
			    <div class="table-responsive">
			       <table class="table table-bordered">
				  <thead>
				     <tr>
					<th>Company</th>
					<th>Authorize User ID</th>
					<th>Value From</th>
					<th>Value Upto</th>
					<th>Date From</th>
					<th>Date Upto</th>
					<th><button type="button" class="btn btn-add1 btn-sm btn-primary" data-template="textbox">Add</button></th>
				    </tr>
				</thead>
				<tbody>
				    <?php
				    $val=count($third);
				    $j=1;
				    //if($val>0)
				    //{
				    foreach($third as $row1)
				    {?>
				    <tr class="odd1">
					<input type="hidden" value="<?php echo $val;?>"  name="rowcount1"/>
				    <td><span><input type="text" value="<?php echo $row1['TXA_COMP_CODE']?>" name="txa_company[]" class="" id="first_name_1"></span></td>
					   <td><span><input type="text" value="<?php echo $row1['TXA_USER_ID']?>" name="txa_auth_user_id[]" class=""></span></td>
					   <td><span><input type="text" value="<?php echo $row1['TXA_USER_FM_VALUE']?>" name="txa_val_from[]" class=""></span></td>
					   <td><span><input type="text" value="<?php echo $row1['TXA_USER_TO_VALUE']?>" name="txa_val_upto[]"  class="" id="email_1"></span></td>
					   <td>
					    <div class="form-group ">
						<div class='col-md-5'>
						    <div class='input-group date' id='datetimepicker3'>
						    <input type="text" value="<?php echo $row1['TXA_USER_FM_DT']?>" name="txa_date_from[]" class=" input-group datetimepicker3" id="txdr_from_date">
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							</span>
						    </div>
						</div>
					    </div>
					    </td>
					    <td>
						<div class="form-group ">
						    <div class='col-md-5'>
							<div class='input-group date' id='datetimepicker4'>
							<input type="text" value="<?php echo $row1['TXA_USER_TO_DT']?>" name="txa_date_upto[]" class="input-group datetimepicker4" id="txdr_upto_date">
							    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							    </span>
							</div>
						    </div>
						</div>
					    </td>
					    
					    <td><a href="<?php echo base_url("Apps/TranscationSetupAuth_Delete/".$row1['TXA_COMP_CODE']."/".$row1['TXA_TXN_CODE']) ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure you want to delete this Responsibilty Lines?');" >Remove</button></a></td>
				    
					   
				    <!--       <td><span><input type="text" value="<?php echo $row1['TXA_UPD_DT']?>" name="txa_upto_date" maxlength="50" size="10" class="form-control" id="first_name_1"></span></td>
				    -->   </tr>
				    
				    <?php } ?>
				       <tr class="odd1 hide" id="optionTemplate1">
					    <td><span><input type="text" name="txa_company1[]" class="" id="first_name_1"></span></td>
					    <td><span><input type="text" name="txa_auth_user_id1[]"  class=""></span></td>
					    <td><span><input type="text" name="txa_val_from1[]"  class=""></span></td>
					    <td><span><input type="text" name="txa_val_upto1[]"  class="" id="email_1"></span></td>
    					     <td >
						 <div class="form-group ">
						     <div class='col-md-5'>
							 <div class='input-group date' id='datetimepicker3'>
							 <input type="text" name="txdr_from_date1[]"  class=" input-group datetimepicker3" id="txdr_from_date">
							     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							     </span>
							 </div>
						     </div>
						     </div>
							
					     </td>
						     
					     <td >
						     <div class="form-group ">
						     <div class='col-md-5'>
							 <div class='input-group date' id='datetimepicker4'>
							 <input type="text" name="txdr_upto_date1[]"  class="input-group datetimepicker4" id="txdr_upto_date">
							     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							     </span>
							 </div>
						     </div>
						 </div>
					     
					     </td>
					    
					    <!--<td><span><input type="text" name="txa_date_from" maxlength="30" size="10" class=""></span></td>
					    <td><span><input type="text" name="txa_date_upto" maxlength="50" size="10" class=""></span></td>-->
				     <!--       <td><span><input type="text" name="txa_upto_date" maxlength="50" size="10" class="" id="first_name_1"></span></td>
				     -->       <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton1" data-template="textbox" >Remove</button></td>
					</tr>

				</tbody>
			    </table>
			</div>
		    </div>
		    </div>
	    </div>
		     
			   <div class="col-md-offset-2 col-md-6">
				 <div class="form-group">
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <input type="submit" class="btn btn-md btn-success" name="update" id="submit_but" value="update" >
				 </div>
			      </div>
			    
			    
			</form>
		    </div>
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
	container: 'tooltip',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            txh_code: {
		message: 'The Transaction Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Code is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[A-Z]+$/,
                        message: 'The Transaction Code should be capital'
                    }
                }
            },
	    
	    txh_desc: {
		message: 'The sequence number is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Description is required and can\'t be empty'
                    }
                }
            },
	    
	    txn_head: {
		message: 'The Transcation Head  is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transcation Head   is required and can\'t be empty'
                    }
                }
            },
	    
	    txn_num_gen_type: {
		message: 'The Transcation gen Type   is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transcation gen Type is required and can\'t be empty'
                    }
                }
            },
	       txn_num_pad: {
		message: 'The Transcation Number Padding is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transcation Number Padding  is required and can\'t be empty'
                    }
                }
            },
		txn_future_days: {
		message: 'The Transcation future days is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transcation future days is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 1,
                        max: 3,
                        message: 'The Transcation future days must be less than 999 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Transcation future days must be number'
                    }
                }
            },
	       txn_back_days: {
		message: 'The Transaction back days number is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction back days  and can\'t be empty'
                    },
                    stringLength: {
                        min: 1,
                        max: 3,
                        message:'The Transcation back days must be less than 999 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Transcation back days must be number'
                    }
                }
            },
	    "txdr_company[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Company Code is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
		    remote:{
			message: 'The  Transaction Company Code Is Already Exists',
			url: '<?php  echo base_url('Apps/AjaxCheckDocCode')?>',
			type: 'POST'
		    },
		    callback: {
			message: 'Transaction Company Code Is Already Exists',
			callback: function(value, validator) {
			 var count=0;
			 $("input[name='txdr_company[]']").each(function(){
			    var val=$(this).val();
			    
			    if(val==value){
			       count++; 
			    }
			       });
			       if (count>1) {
			    
			    return false;
			       }
			       else{
			    
			    return true;
			       }
			       }
			
		    }
                }
            },
	    "txdr_year[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Trtansaction Year is required'
                    },
                    stringLength: {
                        min: 1,
                        max: 4	,
                        message: 'The Trtansaction Year  must 4 characters long'
                    },
                    regexp:{
                        regexp: /^[0-9]+$/,
                        message: 'The Trtansaction Year only consist of number'
                    },
		    callback:{
			message: 'Transaction Year is invalid please give the year is above 2000',
			callback: function(value, validator)
			{
			    
			    if(value>"2000")
			    {
				return true;
			    }
			    else
			    {
				return false;
			    }
			}
		    }
                }
            },
	    "txdr_period[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Period  is required'
                    },
                    stringLength: {
                        min: 1,
                        max: 999,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }
                }
            },
	    "txdr_from_date[]": {
		group: 'span',
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction from date is required'
                    }
                }
            },
	    "txdr_upto_date[]": {
		group: 'span',
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction upto date is required'
                    }
                }
            },
	    "txdr_doc_no_from[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction from Document Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Transaction from Document Number can only consist of number'
                    }/*,
		    callback: {
			message: 'Transaction Company Code Is Already Exists',
			callback: function(value, validator) {
			 var count=0;
			 $("input[name='txdr_company[]']").each(function(){
			    var val=$(this).val();
			    
			    if(val==value){
			       count++; 
			    }
			       });
			       if (count>1) {
			    
			    return false;
			       }
			       else{
			    
			    return true;
			       }
			       }
			
		    }*/
                }
            },
	    "txdr_doc_no_upto[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Upto Document Number  is required'
                    },
                    regexp:{
                        regexp: /^[0-9]+$/,
                        message: 'The Transaction Upto Document Number number'
                    },
		    callback:{
			message: 'Give more than to Transaction from Document Number ',
			callback: function(value, validator)
			{
			    var from_no=$("input[name='txdr_doc_no_from[]']").val();
			    var upto_no=$(this).val();
			    if (from_no>upto_no)
				{
				    return false;
				}
				else
				{
				    return true;  
				}
			}
			
		    }
                }
            },
	    "txdr_curr_do_no[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction current Document number is required'
                    },
                    stringLength: {
                        min: 1,
                        max: 999,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
	    "txa_company[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment Company Code is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The Attatchment Company Code can only consist of alphabetical, number'
                    },
		    remote:{
			message: 'The  Attatchment Company Code Is Already Exists',
			url: '<?php  echo site_url('Apps/AjaxCheckAttachmentCode')?>',
			type: 'POST'
		    },
		    callback: {
			message: 'Attatchment Company Code Is Already Exists',
			callback: function(value, validator) {
			 var count=0;
			 $("input[name='txa_company[]']").each(function(){
			    var val=$(this).val();
			    
			    if(val==value){
			       count++; 
			    }
			       });
			       if (count>1) {
			    
			    return false;
			       }
			       else{
			    
			    return true;
			       }
			       }
			
		    }
                }
            },
	    "txa_auth_user_id[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment User id is required'
                    }
                }
            },
	    "txa_val_from[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment value from is required'
                    }
                }
            },
	    "txa_val_upto[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment value upto is required'
                    }
                }
            },
	    "txa_date_from[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment From Date is required'
                    }
                }
            },
	    "txa_date_upto[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment Upto date is required'
                    }
                }
            },
	    "txdr_company1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Company Code is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
		    remote:{
			message: 'The  Transaction Company Code Is Already Exists',
			url: '<?php  echo base_url('Apps/AjaxCheckDocCode')?>',
			type: 'POST'
		    },
		    callback: {
			message: 'Transaction Company Code Is Already Exists',
			callback: function(value, validator) {
			 var count=0;
			 $("input[name='txdr_company1[]']").each(function(){
			    var val=$(this).val();
			    
			    if(val==value){
			       count++; 
			    }
			       });
			       if (count>1) {
			    
			    return false;
			       }
			       else{
			    
			    return true;
			       }
			       }
			
		    }
                }
            },
	    "txdr_year1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Trtansaction Year is required'
                    },
                    stringLength: {
                        min: 1,
                        max: 4	,
                        message: 'The Trtansaction Year  must 4 characters long'
                    },
                    regexp:{
                        regexp: /^[0-9]+$/,
                        message: 'The Trtansaction Year only consist of number'
                    },
		    callback:{
			message: 'Transaction Year is invalid please give the year is above 2000',
			callback: function(value, validator)
			{
			    
			    if(value>"2000")
			    {
				return true;
			    }
			    else
			    {
				return false;
			    }
			}
		    }
                }
            },
	    "txdr_period1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Period  is required'
                    },
                    stringLength: {
                        min: 1,
                        max: 999,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }
                }
            },
	    "txdr_from_date1[]": {
		group: 'span',
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction from date is required'
                    }
                }
            },
	    "txdr_upto_date1[]": {
		group: 'span',
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction upto date is required'
                    }
                }
            },
	    "txdr_doc_no_from1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction from Document Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Transaction from Document Number can only consist of number'
                    }/*,
		    callback: {
			message: 'Transaction Company Code Is Already Exists',
			callback: function(value, validator) {
			 var count=0;
			 $("input[name='txdr_company[]']").each(function(){
			    var val=$(this).val();
			    
			    if(val==value){
			       count++; 
			    }
			       });
			       if (count>1) {
			    
			    return false;
			       }
			       else{
			    
			    return true;
			       }
			       }
			
		    }*/
                }
            },
	    "txdr_doc_no_upto1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Upto Document Number  is required'
                    },
                    regexp:{
                        regexp: /^[0-9]+$/,
                        message: 'The Transaction Upto Document Number number'
                    },
		    callback:{
			message: 'Give more than to Transaction from Document Number ',
			callback: function(value, validator)
			{
			    var from_no=$("input[name='txdr_doc_no_from[]']").val();
			    var upto_no=$(this).val();
			    if (from_no>upto_no)
				{
				    return false;
				}
				else
				{
				    return true;  
				}
			}
			
		    }
                }
            },
	    "txdr_curr_do_no1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction current Document number is required'
                    },
                    stringLength: {
                        min: 1,
                        max: 999,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
	    "txa_company1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment Company Code is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The Attatchment Company Code can only consist of alphabetical, number'
                    },
		    remote:{
			message: 'The  Attatchment Company Code Is Already Exists',
			url: '<?php  echo site_url('Apps/AjaxCheckAttachmentCode')?>',
			type: 'POST'
		    },
		    callback: {
			message: 'Attatchment Company Code Is Already Exists',
			callback: function(value, validator) {
			 var count=0;
			 $("input[name='txa_company[]']").each(function(){
			    var val=$(this).val();
			    
			    if(val==value){
			       count++; 
			    }
			       });
			       if (count>1) {
			    
			    return false;
			       }
			       else{
			    
			    return true;
			       }
			       }
			
		    }
                }
            },
	    "txa_auth_user_id1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment User id is required'
                    }
                }
            },
	    "txa_val_from1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment value from is required'
                    }
                }
            },
	    "txa_val_upto1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment value upto is required'
                    }
                }
            },
	    "txa_date_from1[]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment From Date is required'
                    }
                }
            },
	    "txa_date_upto[1]": {
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Attatchment Upto date is required'
                    }
                }
            },
	}
    });
});
</script>


<script type="text/javascript">
$(document).ready(function() {
    datepicker();
   
    var txn_gen=$('#txn_gen').val();
    if (gen_type != 'P')
    {
	$('*.txn_hide').hide();   
    }
    else
    {
	$('*.txn_hide').show();
    }
 


    $('#txn_gen').on('change', function()
    {
	alert("txn_gen");
    var gen_type=(this.value);
    if (gen_type != 'P') {
    $('*.txn_hide').hide();    
    }else{
    $('*.txn_hide').show();
    }
    });  


        var row_count1 = 2;
	
       $('.btn-add').click(function() {
       var $template = $('#optionTemplate'),
      $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
      
      
      $name   = $clone.find('[name="txdr_company1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txdr_year1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txdr_period1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txdr_from_date1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    
    $name   = $clone.find('[name="txdr_upto_date1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txdr_doc_no_from1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txdr_doc_no_upto1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txdr_curr_do_no1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name)
      

       var count=row_count1++;
       $('#count').val(count);
        datepicker();
	removerow();
    });

   function removerow(){
      $(".removeButton").on('click',function(){
      var $row    = $(this).parents('.odd');
      
      $row.remove();
      });
      };
   
  

    var row_count = 2;
       $('.btn-add1').click(function() {
	 

    
       var $template1 = $('#optionTemplate1'),
      $clone = $template1.clone().removeClass('hide').removeAttr('id').insertBefore($template1);
      
      
      $name   = $clone.find('[name="txa_company1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txa_auth_user_id1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txa_val_from1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txa_val_upto1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    
    $name   = $clone.find('[name="txa_date_from1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="txa_date_upto1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    
      
      var count1=row_count++;
       $('#count1').val(count1);
         datepicker();
        removerow1();
    });
 
   function removerow1(){
      $(".removeButton1").on('click',function(){
      var $row    = $(this).parents('.odd1');
      $row.remove();
      })
      };

     });  

</script>
<script type="text/javascript">
    
function datepicker()
{
    	
    $('*.datetimepicker1').datetimepicker({
        format: 'DD-MMM-YYYY',
	//maxDate:nextdate
    });
    $('*.datetimepicker2').datetimepicker({
	format: 'DD-MMM-YYYY',
	//minDate:nextdate
    });
    
    
    $('*.datetimepicker3').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    $('*.datetimepicker4').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
       
$("*.datetimepicker1").on("dp.change",function (e) {
$('.datetimepicker2').data("DateTimePicker").minDate(e.date);

//$('*.datetimepicker3').data("DateTimePicker").maxDate(e.date);
});

$("*.datetimepicker2").on("dp.change",function (e) {
$('*.datetimepicker1').data("DateTimePicker").maxDate(e.date);
//$('*.datetimepicker4').data("DateTimePicker").maxDate(e.date);
});


$("*.datetimepicker3").on("dp.change",function (f) {
$('*.datetimepicker4').data("DateTimePicker").minDate(f.date);
});
$("*.datetimepicker4").on("dp.change",function (f) {
$('*.datetimepicker3').data("DateTimePicker").maxDate(f.date);
});


//    $('#datetimepicker1').datetimepicker({
//      format: 'DD-MMM-YYYY'
//    });
//$('#datetimepicker2').datetimepicker({
//      format: 'DD-MMM-YYYY'
//    });
//$('*#datetimepicker3').datetimepicker({
//      format: 'DD-MMM-YYYY'
//    });
//$('*#datetimepicker4').datetimepicker({
//      format: 'DD-MMM-YYYY'
//    });
//$("#datetimepicker1").on("dp.change",function (e) {
//$('#datetimepicker2').data("DateTimePicker").minDate(e.date);
//});
//$("#datetimepicker2").on("dp.change",function (e) {
//$('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
//});
//
//
//$("*#datetimepicker3").on("dp.change",function (f) {
//$('#datetimepicker4').data("DateTimePicker").minDate(f.date);
//});
//$("*#datetimepicker4").on("dp.change",function (f) {
//$('#datetimepicker3').data("DateTimePicker").maxDate(f.date);
//});
}

</script>
	
	
	
	
</body>

</html>

