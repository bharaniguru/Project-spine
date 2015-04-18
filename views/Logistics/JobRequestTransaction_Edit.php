	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 02/04/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Edit Job Request Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Edit Job Request Transaction<small> Enter the correct details here...</small></h1>
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
				<h4 class="panel-title">Edit Job Request Transaction</h4>
			    </div>
			    <div class="panel-body">
				<p style="color:red"><?php echo $status; ?></p>
				<?php foreach($JobReeqTxn as $jrt) ?>
				<form action="<?php echo base_url('LogisticsController/JobRequestTransaction_Edit/'.$jrt['JRH_SYS_ID']); ?>"  class="form-horizontal  form12" method="POST">
				    <div id="wizard">
					<ol>
					    <li>Reference</li>
					    <li>Address</li>
					    <li>Details</li>
					    <li>Confirm</li>
					</ol>
					<!-- begin wizard step-1 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Reference</legend>
						<div class="row ">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference From</label>
							    <div class="col-md-5">
								<select class="form-control" id="JRH_REF_FROM" name="JRH_REF_FROM" data-parsley-group="pull-left width-full"  >
								    <option value="Direct" <?php    if($jrt['JRH_REF_FROM']=="Direct") echo "selected";?>>Direct</option>
								    <option value="OP" <?php   if($jrt['JRH_REF_FROM']=="OP") echo "selected";?>>Opportunity</option>
								    <option value="SO" <?php   if($jrt['JRH_REF_FROM']=="SO") echo "selected";?>>Sales Order</option>
								    <option value="SI" <?php   if($jrt['JRH_REF_FROM']=="SI") echo "selected";?>>Sales Invoice</option>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference Txn</label>
							    <div class="col-md-5">
								<input type="hidden" value="<?php echo $jrt['JRH_SYS_ID'];?>" placeholder="JRH_SYS_ID"  name="JRH_SYS_ID" id="JRH_SYS_ID" class="form-control">
								<input type="hidden" value="<?php echo $jrt['JRH_LOGI_JOB_STATUS'];?>" placeholder="JRH_LOGI_JOB_STATUS"  name="JRH_LOGI_JOB_STATUS" id="JRH_LOGI_JOB_STATUS" class="form-control">
								<input type="hidden" value="<?php echo $jrt['JRH_DOC_REF'];?>" placeholder="JRH_DOC_REF"  name="JRH_DOC_REF" id="JRH_DOC_REF" class="form-control">
								<input type="hidden" value="<?php echo $jrt['JRH_LOCN_CODE'];?>" placeholder="JRH_LOCN_CODE"  name="JRH_LOCN_CODE" id="JRH_LOCN_CODE" class="form-control">
								<input type="hidden" value="<?php echo $jrt['JRH_DESC'];?>" placeholder="JRH_DESC"  name="JRH_DESC" id="JRH_DESC" class="form-control">
								<input type="hidden" value="<?php echo $jrt['JRH_REF_SYS_ID'];?>" placeholder="JRH_REF_SYS_ID"  name="JRH_REF_SYS_ID" id="JRH_REF_SYS_ID" class="form-control">
								<input type="hidden" value="<?php echo $jrt['JRH_CT_AR_CODE'];?>" placeholder="JRH_CT_AR_CODE"  name="JRH_CT_AR_CODE" id="JRH_CT_AR_CODE" class="form-control">
								<input type="text" value="<?php echo $jrt['JRH_REF_TXN_CODE'];?>" placeholder="JRH_REF_TXN_CODE"  name="JRH_REF_TXN_CODE" id="JRH_REF_TXN_CODE" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference Doc No</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_REF_TXN_NO" value="<?php echo $jrt['JRH_REF_TXN_NO'];?>"  name="JRH_REF_TXN_NO" id="JRH_REF_TXN_NO" class="form-control">
							    </div>
							</div>	
							<div class="form-group">
							    <label class="col-md-3 control-label">Job Code</label>
							    <div class="col-md-5">
								 <select class="form-control" id="JRH_JOB_CODE" name="JRH_JOB_CODE">
								    <!--<option disabled selected value="">Select</option>-->
								    <?php foreach($result8 as $cn){ ?>
								    <option value="<?php echo $cn['VSL_CODE']; ?>" <?php if($jrt['JRH_JOB_CODE']==$cn['VSL_CODE'])echo "selected" ;?> > <?php echo  $cn['VSL_DESC']; ?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference Txn Dt</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_REF_TXN_DT" value="<?php echo $jrt['JRH_REF_TXN_DT'];?>"   name="JRH_REF_TXN_DT" id="JRH_REF_TXN_DT" class="form-control input-group datepicker-txn">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Contact Number</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CONTACT_NO" value="<?php echo $jrt['JRH_CONTACT_NO'];?>"   name="JRH_CONTACT_NO" id="JRH_CONTACT_NO" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Contact Person</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CONTACT_PERSON"  value="<?php echo $jrt['JRH_CONTACT_PERSON'];?>"  name="JRH_CONTACT_PERSON" id="JRH_CONTACT_PERSON" class="form-control">
							    </div>
							</div>
							<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
							<!--<div class="col-md-8">
							    <a href="">New Customer</a> | <a href="">Existing Customer</a>
							</div>-->
						    </div>
						</div>
					    </fieldset>
					</div>
					<!-- end wizard step-1 -->
					<!-- begin wizard step-2 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Address</legend>
						<div class="row ">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Address</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD1"  value="<?php echo $jrt['JRH_ADD1'];?>"  name="JRH_ADD1" id="JRH_ADD1" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label"></label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD2" value="<?php echo $jrt['JRH_ADD2'];?>"   name="JRH_ADD2" id="JRH_ADD2" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label"></label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD3" value="<?php echo $jrt['JRH_ADD3'];?>"   name="JRH_ADD3" id="JRH_ADD3" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label"></label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD4"  value="<?php echo $jrt['JRH_ADD4'];?>"  name="JRH_ADD4" id="JRH_ADD4" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Country</label>
							    <div class="col-md-5">
								<select class="form-control" id="JRH_CN_CODE" name="JRH_CN_CODE">
								    <!--<option disabled selected value="">Select</option>-->
								    <?php foreach($result1 as $cn){ ?>
								    <option value="<?php echo $cn['CN_CODE']; ?>" <?php if($jrt['JRH_CN_CODE']==$cn['CN_CODE']) echo "selected";?> > <?php echo  $cn['CN_DESC']; ?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">State</label>
							    <div class="col-md-5">
								<select class="form-control" id="JRH_ST_CODE" name="JRH_ST_CODE">
								    <!--<option disabled selected value="">Select</option>-->
								    <?php foreach($result6 as $cn1){ ?>
								    <option value="<?php echo $cn1['ST_CODE']; ?>" <?php if($jrt['JRH_ST_CODE']==$cn1['ST_CODE']) echo "selected";?>> <?php echo  $cn1['ST_DESC']; ?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">City</label>
							    <div class="col-md-5">
								<select class="form-control" onchange="change();" id="JRH_CT_CODE" name="JRH_CT_CODE">
								    <!--<option disabled selected value="">Select</option>-->
								    <?php foreach($result7 as $cn2){ ?>
								    <option value="<?php echo $cn2['CT_CODE']; ?>" <?php if($jrt['JRH_CT_CODE']==$cn2['CT_CODE']) echo "selected";?> > <?php echo  $cn2['CT_DESC']; ?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">PO Box</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_POSTAL"  name="JRH_POSTAL" value="<?php echo $jrt['JRH_POSTAL'];?>"  id="JRH_POSTAL" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Mobile</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_MOBILE" value="<?php echo $jrt['JRH_MOBILE'];?>"   name="JRH_MOBILE" id="JRH_MOBILE" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Phone</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_PHONE" value="<?php echo $jrt['JRH_PHONE'];?>"   name="JRH_PHONE" id="JRH_PHONE" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Fax</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_FAX" value="<?php echo $jrt['JRH_FAX'];?>"   name="JRH_FAX" id="JRH_FAX" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Email</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_EMAIL"  value="<?php echo $jrt['JRH_EMAIL'];?>"  name="JRH_EMAIL" id="JRH_EMAIL" class="form-control">
							    </div>
							</div>
							<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
						    </div>
						</div>
					    </fieldset>
					</div>
					<!-- end wizard step-2 -->
					<!-- begin wizard step-3 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Details</legend>
						<div class="row ">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Customer ID</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CUST_ID" value="<?php echo $jrt['JRH_CUST_ID'];?>"   name="JRH_CUST_ID" id="JRH_CUST_ID" class="form-control" >
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Customer Account</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CUST_AC_CODE"  value="<?php echo $jrt['JRH_CUST_AC_CODE'];?>"  name="JRH_CUST_AC_CODE" id="JRH_CUST_AC_CODE" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Description</label>
							    <div class="col-md-5">
								<textarea rows="5" placeholder="JRH_CUST_AC_DESC"   name="JRH_CUST_AC_DESC" id="JRH_CUST_AC_DESC" class="form-control"><?php echo $jrt['JRH_CUST_AC_DESC'];?></textarea>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Appoinment Date</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_APPOINT_DT" value="<?php echo $jrt['JRH_APPOINT_DT'];?>"  name="JRH_APPOINT_DT" id="JRH_APPOINT_DT" class="form-control input-group datepicker-dob"  >
								<!--<input type="text" placeholder="From Date" name="pt_from_date[]" id="CCY_FROM_DT" class="input-group input-daterange form-control datepicker-dob" >-->
							    </div>
							</div>
							<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
						    </div>
						</div>
					    </fieldset>
					</div>
					<!-- end wizard step-3 -->
					<!-- begin wizard step-4 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Confirm</legend>
						<div class="row ">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference From</label>
							    <div class="col-md-5">
							       <input type="text" id="JRH_REF_FROM" value="<?php echo $jrt['JRH_REF_FROM'];?>"  name="JRH_REF_FROM" value=""  class="form-control" readonly>
								<!--<select class="form-control" id="JRH_REF_FROM" name="JRH_REF_FROM" data-parsley-group="pull-left width-full" required >-->
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference Txn</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_REF_TXN_CODE"  value="<?php echo $jrt['JRH_REF_TXN_CODE'];?>"  name="JRH_REF_TXN_CODE" id="JRH_REF_TXN_CODE" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference Doc No</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_REF_TXN_NO" value="<?php echo $jrt['JRH_REF_TXN_NO'];?>"   name="JRH_REF_TXN_NO" id="JRH_REF_TXN_NO" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Job Code</label>
							    <div class="col-md-5">
								<input type="text"  id="JRH_JOB_CODE" name="JRH_JOB_CODE"  value="<?php echo $jrt['JRH_JOB_CODE'];?>" class="form-control" readonly>
								<!--     <select class="form-control" id="JRH_JOB_CODE" name="JRH_JOB_CODE">-->
								<!--	<option disabled selected value="">Select</option>-->
								<!--	<?php //foreach($result8 as $cn){ ?>-->
								<!--	-->
								<!--	<option value="<?php //echo $cn['VSL_CODE']; ?>"> <?php //echo  $cn['VSL_DESC']; ?></option>-->
								<!--	<?php// } ?>-->
								<!--    </select>-->
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Reference Txn Dt</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_REF_TXN_DT" value="<?php echo $jrt['JRH_REF_TXN_DT'];?>"   name="JRH_REF_TXN_DT" id="JRH_REF_TXN_DT" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Contact Number</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CONTACT_NO" value="<?php echo $jrt['JRH_CONTACT_NO'];?>"  name="JRH_CONTACT_NO" id="JRH_CONTACT_NO" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Contact Person</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CONTACT_PERSON" value="<?php echo $jrt['JRH_CONTACT_PERSON'];?>"   name="JRH_CONTACT_PERSON" id="JRH_CONTACT_PERSON" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Address</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD1"  value="<?php echo $jrt['JRH_ADD1'];?>"  name="JRH_ADD1" id="JRH_ADD1" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label"></label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD2"  value="<?php echo $jrt['JRH_ADD2'];?>"  name="JRH_ADD2" id="JRH_ADD2" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label"></label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD3"  value="<?php echo $jrt['JRH_ADD3'];?>"  name="JRH_ADD3" id="JRH_ADD3" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label"></label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_ADD4"  value="<?php echo $jrt['JRH_ADD4'];?>"  name="JRH_ADD4" id="JRH_ADD4" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Country</label>
							    <div class="col-md-5">
								<input type="text"  id="JRH_CN_CODE" name="JRH_CN_CODE" class="form-control" value="<?php echo $jrt['JRH_CN_CODE'];?>"  readonly>
								<!--    <select class="form-control" id="JRH_CN_CODE" name="JRH_CN_CODE">-->
								<!--	<option disabled selected value="">Select</option>-->
								<!--	<?php //foreach($result1 as $cn){ ?>-->
								<!--	-->
								<!--	<option value="<?php //echo $cn['CN_CODE']; ?>"> <?php //echo  $cn['CN_DESC']; ?></option>-->
								<!--	<?php //} ?>-->
								<!--    </select>-->
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">State</label>
							    <div class="col-md-5">
								<input type="text"  id="JRH_ST_CODE" name="JRH_ST_CODE" class="form-control" value="<?php echo $jrt['JRH_ST_CODE'];?>"  readonly>
								<!--    <select class="form-control" id="JRH_ST_CODE" name="JRH_ST_CODE">-->
								<!--	<option disabled selected value="">Select</option>-->
								<!--	<?php// foreach($result6 as $cn){ ?>-->
								<!--	-->
								<!--	<option value="<?php// echo $cn['ST_CODE']; ?>"> <?php// echo  $cn['ST_DESC']; ?></option>-->
								<!--	<?php //} ?>-->
								<!--    </select>-->
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">City</label>
							    <div class="col-md-5">
								<input type="text"  id="JRH_CT_CODE" name="JRH_CT_CODE" class="form-control" value="<?php echo $jrt['JRH_CT_CODE'];?>"  readonly>
								<!--    <select class="form-control" id="JRH_CT_CODE" name="JRH_CT_CODE">-->
								<!--	<option disabled selected value="">Select</option>-->
								<!--	<?php //foreach($result7 as $cn){ ?>-->
								<!--	-->
								<!--	<option value="<?php// echo $cn['CT_CODE']; ?>"> <?php //echo  $cn['CT_DESC']; ?></option>-->
								<!--	<?php //} ?>-->
								<!--    </select>-->
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">PO Box</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_POSTAL"  name="JRH_POSTAL" id="JRH_POSTAL" value="<?php echo $jrt['JRH_POSTAL'];?>"  class="form-control" readonly >
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Mobile</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_MOBILE"  name="JRH_MOBILE" id="JRH_MOBILE" value="<?php echo $jrt['JRH_MOBILE'];?>"  class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Phone</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_PHONE"  name="JRH_PHONE" id="JRH_PHONE"  value="<?php echo $jrt['JRH_PHONE'];?>"  class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Fax</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_FAX"  name="JRH_FAX" id="JRH_FAX" value="<?php echo $jrt['JRH_FAX'];?>"  class="form-control" readonly> 
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Email</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_EMAIL"  name="JRH_EMAIL" value="<?php echo $jrt['JRH_EMAIL'];?>"  id="JRH_EMAIL1" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Customer ID</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CUST_ID"  name="JRH_CUST_ID" value="<?php echo $jrt['JRH_CUST_ID'];?>"  id="JRH_CUST_ID1" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Customer Account</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_CUST_AC_CODE"  value="<?php echo $jrt['JRH_CUST_AC_CODE'];?>"  name="JRH_CUST_AC_CODE" id="JRH_CUST_AC_CODE1" class="form-control" readonly>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Description</label>
							    <div class="col-md-5">
								<textarea rows="5" placeholder="JRH_CUST_AC_DESC"   name="JRH_CUST_AC_DESC" id="JRH_CUST_AC_DESC" class="form-control" readonly><?php echo $jrt['JRH_CUST_AC_DESC'];?></textarea>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Appoinment Date</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_APPOINT_DT" value="<?php echo $jrt['JRH_APPOINT_DT'];?>"  name="JRH_APPOINT_DT" id="JRH_APPOINT_DT1" readonly class="form-control "  >
								<!--<input type="text" placeholder="From Date" name="pt_from_date[]" id="CCY_FROM_DT" class="input-group input-daterange form-control datepicker-dob" >-->
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Status</label>
							    <div class="col-md-5">
								<select class="form-control" id="JRH_STATUS" readonly name="JRH_STATUS">
								    <option value="1" <?php if($jrt['JRH_STATUS']=='1') echo 'selected';?>>Created</option>
								    <option value="2"  <?php if($jrt['JRH_STATUS']=='2') echo 'selected';?>>Submited</option>
								    <option value="3"  <?php if($jrt['JRH_STATUS']=='3') echo 'selected';?>>Approved</option>
								    <option value="4"  <?php if($jrt['JRH_STATUS']=='4') echo 'selected';?>>Amended</option>
								    <option value="5"  <?php if($jrt['JRH_STATUS']=='5') echo 'selected';?>>Scheduled</option>
								    <option value="6"  <?php if($jrt['JRH_STATUS']=='6') echo 'selected';?>>ReScheduled</option>
								    <option value="7"  <?php if($jrt['JRH_STATUS']=='7') echo 'selected';?>>Completed</option>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Requested By</label>
							    <div class="col-md-5">
								<input type="text" placeholder="JRH_REQUEST_BY" value="<?php echo $jrt['JRH_REQUEST_BY'];?>"   name="JRH_REQUEST_BY" id="JRH_REQUEST_BY" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-2 control-label">Transaction Code</label>
							    <div class="col-md-2">
								<input type="text" placeholder="JRH_TXN_CODE" readonly value="<?php echo $jrt['JRH_TXN_CODE'];?>"  name="JRH_TXN_CODE" id="JRH_TXN_CODE" class="form-control">
							    </div>
							    <label class="col-md-1 control-label">Txn Num</label>
							    <div class="col-md-2"> 
								<input type="text" placeholder="JRH_TXN_NO" readonly value="<?php echo $jrt['JRH_TXN_NO'];?>"   name="JRH_TXN_NO" id="JRH_TXN_NO" class="form-control">
							    </div>
							    <label class="col-md-1 control-label">Txn Date</label>
							    <div class="col-md-2">
								<input type="text" placeholder="JRH_TXN_DT" readonly value="<?php echo $jrt['JRH_TXN_DT'];?>"   name="JRH_TXN_DT" id="JRH_TXN_DT" class="form-control">
							    </div>
							</div>
							<div class="col-md-12 col-md-offset-4 p-t-10">
							    <fieldset>
								<input type="submit" class="btn btn-sm btn-success" value="Save" name="Update">
								<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
							    </fieldset>
							</div>
						    </div>
						</div>
					    </fieldset>
					</div>
					<!-- end wizard step-4 -->
				    </div>
				</form>
			    </div>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<script type="text/javascript">
	function dropdown()
	{
	    FormPlugins.init();
	}
	
	$(document).ready(function()
	{
	    var d = new Date();
	    var month=d.getMonth()+1;
	    var date = d.getDate()+1;
	    var nexdate= month +"/"+date+"/"+d.getFullYear();
	    $('.datepicker-txn').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });   
	    $('.datepicker-dob').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
		minDate:nexdate
	    });
	    $('#JRH_APPOINT_DT').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
		minDate:nexdate
	    });
	    
	    
	    $("#JRH_REF_FROM").change(function()
	    {
		var JRH_REF_FROM=$("#JRH_REF_FROM option:selected").html();
		$("#JRH_REF_FROM ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_REF_TXN_CODE").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
	        $("#JRH_REF_TXN_CODE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_REF_TXN_NO").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
	        $("#JRH_REF_TXN_NO ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_JOB_CODE").change(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_JOB_CODE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_REF_TXN_DT").blur(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_REF_TXN_DT ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_CONTACT_NO").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
	        $("#JRH_CONTACT_NO ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_CONTACT_PERSON").blur(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_CONTACT_PERSON ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_ADD1").blur(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_ADD1 ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_ADD2").blur(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_ADD2 ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_ADD3").blur(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_ADD3 ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_ADD4").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
	        $("#JRH_ADD4 ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_CN_CODE").change(function()
	    {
	        var JRH_REF_FROM= $(this).val();//$("#JRH_CN_CODE option:selected").html() ;
	        $("#JRH_CN_CODE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_ST_CODE").change(function()
	    {
		var JRH_REF_FROM=$(this).val(); //$("#JRH_ST_CODE option:selected").html() ;
		$("#JRH_ST_CODE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_CT_CODE").change(function()
	    {
		var JRH_REF_FROM= $(this).val(); //$("#JRH_CT_CODE option:selected").html() ;
		$("#JRH_CT_CODE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_POSTAL").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
		$("#JRH_POSTAL ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_MOBILE").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
	        $("#JRH_MOBILE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_PHONE").blur(function()
	    {
		var JRH_REF_FROM=$(this).val();
		$("#JRH_PHONE ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_FAX").blur(function()
	    {
	        var JRH_REF_FROM=$(this).val();
	        $("#JRH_FAX ").attr("value",JRH_REF_FROM);
	    });
	    
	    $("#JRH_EMAIL").blur(function()
	    {
		var JRH_EMAIL=$(this).val();
	        $("#JRH_EMAIL1").attr("value",JRH_EMAIL);
	    });
	    
	    $("#JRH_CUST_ID").blur(function()
	    {
	        var JRH_CUST_ID=$(this).val();
	        $("#JRH_CUST_ID1").attr("value",JRH_CUST_ID);
	    });
	    
	    $("#JRH_CUST_AC_CODE").blur(function()
	    {
	        var JRH_CUST_AC_CODE=$(this).val();
	        $("#JRH_CUST_AC_CODE1").attr("value",JRH_CUST_AC_CODE);
	    });
	    
	    $("#JRH_CUST_AC_DESC").blur(function()
	    {
		var JRH_CUST_AC_DESC=$(this).val();
	        $("#JRH_CUST_AC_DESC ").attr("value",JRH_CUST_AC_DESC);
	    });
	    
	    $("#JRH_APPOINT_DT").blur(function()
	    {
	        var JRH_APPOINT_DT=$(this).val();
	        $("#JRH_APPOINT_DT1").attr("value",JRH_APPOINT_DT);
	    });
	    
	    $("#JRH_CN_CODE").change(function()
	    {
		var cn_code=$('option:selected', this).val();
		$("#JRH_CN_CODE [value='cn_code']").attr("selected","selected");
		//$('#JRH_CN_CODE').html(cn_code) ;
	       //alert(cn_code);
		$.ajax
		({
		    type: "POST",                                
		    url: "<?=base_url()?>LogisticsController/ajaxState",
		    data:{cn_code:cn_code} ,
		    success: function (responseData)
		    {
			//console.log(responseData);
			$('*#JRH_ST_CODE').html(responseData);
			dropdown();
		    },
		});
	    });
	});
	
	
	
	$(document).ready(function()
	{
	    dropdown();
	    $("#JRH_ST_CODE").change(function()
	{
	    var st_code=$('option:selected', this).val();
	    var ct_code=$('#JRH_CN_CODE').val();
	    $.ajax
	    ({
		type: "POST",                                
		url: "<?=base_url()?>LogisticsController/ajaxcity",
		data:{st_code:st_code, ct_code:ct_code} ,
		success: function (responseData)
		{
		    //console.log(responseData);
		    $('*#JRH_CT_CODE').html(responseData);
		    dropdown();
		},
	    });
	});
	});
	
	</script>
	<script type="text/javascript">
	   
	    $(document).ready(function()
	    {
		$('.form-horizontal').bootstrapValidator
		({
		    message: 'This value is not valid',
		    feedbackIcons:
		    {
			valid: 'fa fa-check',
			invalid: 'fa fa-times',
			validating: 'fa fa-refresh'
		    },
		    fields:
		    {
			JRH_REF_FROM:
			{
			    message: 'The JRH_REF_FROM is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_REF_FROM is required and can\'t be empty'
				}
			    }
			},
			JRH_REF_TXN_CODE:
			{
			    message: 'The JRH_REF_TXN_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_REF_TXN_CODE is required and can\'t be empty'
				}
			    }
			},
			JRH_REF_TXN_NO:
			{
			    message: 'The JRH_REF_TXN_NO is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The JRH_REF_TXN_NO is required and can\'t be empty'
				}
			    }
			},
			JRH_REF_TXN_DT:
			{
			    message: 'The JRH_TXN_DT is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The JRH_TXN_DT is required and can\'t be empty'
				}
			    }
			},
			JRH_CONTACT_NO:
			{
			    message: 'The JRH_CONTACT_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_CONTACT_NO is required and can\'t be empty'
				}
			    }
			},
			JRH_CONTACT_PERSON:
			{
			    message: 'The JRH_CONTACT_PERSON is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_CONTACT_PERSON is required and can\'t be empty'
				}
			    }
			},
			JRH_ADD1:
			{
			    message: 'The JRH_ADD1 is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LGE_TEAM_CODE is required and can\'t be empty'
				}
			    }
			},
			JRH_ADD2:
			{
			    message: 'The JRH_ADD2 is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_ADD2 is required and can\'t be empty'
				}
			    }
			},
			LGE_FROM_DT:
			{
			    message: 'The LGE_FROM_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LGE_FROM_DT is required and can\'t be empty'
				}
			    }
			},
			JRH_ADD3:
			{
			    message: 'The JRH_ADD3 is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_ADD3 is required and can\'t be empty'
				}
			    }
			},
			JRH_ADD4:
			{
			    message: 'The JRH_ADD4 is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_ADD4 is required and can\'t be empty'
				}
			    }
			},
			JRH_CN_CODE:
			{
			    message: 'The JRH_CN_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_CN_CODE is required and can\'t be empty'
				}
			    }
			},
			JRH_ST_CODE:
			{
			    message: 'The JRH_ST_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_ST_CODE is required and can\'t be empty'
				}
			    }
			},
			JRH_CT_CODE:
			{
			    message: 'The JRH_CT_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_CT_CODE is required and can\'t be empty'
				}
			    }
			},
			JRH_POSTAL:
			{
			    message: 'The JRH_POSTAL is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_POSTAL is required and can\'t be empty'
				}
			    }
			},
			JRH_MOBILE:
			{
			    message: 'The JRH_MOBILE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_MOBILE is required and can\'t be empty'
				}
			    }
			},
			JRH_PHONE:
			{
			    message: 'The JRH_PHONE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_PHONE is required and can\'t be empty'
				}
			    }
			},
			JRH_FAX:
			{
			    message: 'The JRH_FAX is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_FAX is required and can\'t be empty'
				}
			    }
			},
			JRH_EMAIL:
			{
			    message: 'The JRH_EMAIL is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_EMAIL is required and can\'t be empty'
				}
			    }
			},
			JRH_CUST_AC_CODE:
			{
			    message: 'The JRH_CUST_AC_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_CUST_AC_CODE is required and can\'t be empty'
				}
			    }
			},
			JRH_CUST_AC_DESC:
			{
			    message: 'The JRH_CUST_AC_DESC is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_CUST_AC_DESC is required and can\'t be empty'
				}
			    }
			},
			JRH_APPOINT_DT:
			{
			    message: 'The JRH_APPOINT_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_APPOINT_DT is required and can\'t be empty'
				}
			    }
			},
			JRH_STATUS:
			{
			    message: 'The JRH_STATUS is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_STATUS is required and can\'t be empty'
				}
			    }
			},
			JRH_REQUEST_BY:
			{
			    message: 'The JRH_REQUEST_BY is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The JRH_REQUEST_BY is required and can\'t be empty'
				}
			    }
			},
			//JRH_TXN_CODE:
			//{
			//    message: 'The JRH_TXN_CODE is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The JRH_TXN_CODE is required and can\'t be empty'
			//	}
			//    }
			//},
			//JRH_TXN_NO:
			//{
			//    message: 'The JRH_TXN_NO is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The JRH_TXN_NO is required and can\'t be empty'
			//	}
			//    }
			//},
			//JRH_TXN_DT:
			//{
			//    message: 'The JRH_TXN_DT is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The JRH_TXN_DT is required and can\'t be empty'
			//	}
			//    }
			//},
		    }
		});
	    });
	    
	    $(document).ready(function()
	    {
		//App.init();
		FormWizard.init();
	    });
	    
	    function form_reset()
	    {
		$('.form12').trigger("reset");
	    }
	    
	</script>
    </body>
</html>