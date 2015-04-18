<!--Author: ElangoMani.M
Created on: 04/03/15
Modified on: 20/03/15
-->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Edit Supplier Master</a></li>
	<li class="active">Edit Supplier Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Supplier Master <small> Enter the correct details here...</small></h1>
    <!-- end page-header -->
    <style>
	.nopadding{
	    padding: 0 !important;
	    margin: 0 !important;
	}
    </style>
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
		    <h4 class="panel-title">Edit Supplier Master</h4>
		</div>
		<div class="panel-body">
                        <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('Procurement/SupplierMaster_Edit/'.$supplier[0]['SUPL_AC_CODE']);?>" class="form-horizontal">
			   <div class="col-md-6">
			    <div class="form-group">
          <label class="col-md-3 control-label">Party Type</label>
          <div class="col-md-9">
	     <select name="SUPL_PARTY_TYPE" id="SUPL_PARTY_TYPE"class="form-control">
	    <option>SUPL_PARTY_TYPE</option>
	     <?php if (count($party) > 0 )
	     {
	     foreach ($party as $row)
	     {
	     ?>
	     <option <?php if($supplier[0]['SUPL_PARTY_TYPE']==$row['VSL_CODE']) echo 'selected'; ?> value="<?php echo $row['VSL_CODE']; ?>"><?php echo $row['VSL_DESC']; ?></option>
	     <?php } }?>
	</select>
          </div>
      </div>
			        <div class="form-group">
          <label class="col-md-3 control-label">Description</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_PARTY_DESC" id="SUPL_PARTY_DESC" class="form-control" placeholder="SUPL_PARTY_DESC"value="<?php echo $supplier[0]['SUPL_PARTY_DESC']; ?>" />
          </div>
      </div>
				    <div class="form-group">
          <label class="col-md-3 control-label">Alias</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_PARTY_ALIAS" id="SUPL_PARTY_ALIAS" class="form-control" placeholder="SUPL_PARTY_ALIAS" value="<?php echo $supplier[0]['SUPL_PARTY_DESC']; ?>" />
          </div>
      </div>
				        <div class="form-group">
          <label class="col-md-3 control-label">URL</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_PARTY_URL" id="SUPL_PARTY_URL" class="form-control" placeholder="SUPL_PARTY_URL" value="<?php echo $supplier[0]['SUPL_PARTY_URL']; ?>" />
          </div>
      </div>
					    <div class="form-group">
          <label class="col-md-3 control-label">Account Code</label>
          <div class="col-md-9">
       <input type="text" readonly="" name="SUPL_AC_CODE" id="SUPL_AC_CODE" class="form-control" placeholder="SUPL_AC_CODE" value="<?php echo $supplier[0]['SUPL_AC_CODE']; ?>" />
          </div>
      </div>
					        <div class="form-group">
          <label class="col-md-3 control-label">Description</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_AC_DESC" id="SUPL_AC_DESC" class="form-control" placeholder="SUPL_AC_DESC" value="<?php echo $supplier[0]['SUPL_AC_DESC']; ?>" />
          </div>
      </div>
			    
			   </div>
			   
			   <div class="col-md-6">
			  
			    
				    <div class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input  type="checkbox"  <?php if($supplier[0]['SUPL_ACTIVE_YN']=="Y") echo 'checked'; ?> name="SUPL_ACTIVE_YN"  value="Y" > Active?
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
				    
				
			    <div class="form-group">
				<label class="col-md-3 control-label">Title</label>
				<div class="col-md-9">
			  
				 <select class="form-control" name="SUPL_PERSON_TITLE">
				    <option>SUPL_PERSON_TITLE</option>
				    <?php if (count($title) > 0 )
				   {
				   foreach ($title as $row)
				   {
				   ?>
				   <option <?php if($supplier[0]['SUPL_PERSON_TITLE']==$row['VSL_CODE']) echo 'selected'; ?>	 value="<?php echo $row['VSL_CODE']; ?>"><?php echo $row['VSL_DESC']; ?></option>
				   <?php } } ?>
				 </select>
    
          </div>    
      </div>
			        <div class="form-group">
          <label class="col-md-3 control-label">First Name</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_PERSON_FIRST_NAME" id="SUPL_PERSON_FIRST_NAME" class="form-control" placeholder="SUPL_PERSON_FIRST_NAME"  value="<?php echo $supplier[0]['SUPL_PERSON_FIRST_NAME']; ?>"/>
          </div>
      </div>
				    <div class="form-group">
          <label class="col-md-3 control-label">Middle Name</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_PERSON_MIDDLE_NAME" id="SUPL_PERSON_MIDDLE_NAME" class="form-control" placeholder="SUPL_PERSON_MIDDLE_NAME" value="<?php echo $supplier[0]['SUPL_PERSON_MIDDLE_NAME']; ?>" />
          </div>
      </div>
				        <div class="form-group">
          <label class="col-md-3 control-label">Last Name</label>
          <div class="col-md-9">
       <input type="text" name="SUPL_PERSON_LAST_NAME" id="SUPL_PERSON_LAST_NAME" class="form-control" placeholder="SUPL_PERSON_LAST_NAME" value="<?php echo $supplier[0]['SUPL_PERSON_LAST_NAME']; ?>" />
          </div>
      </div>
					
			   </div>
			   
			<h4 class="col-md-12">&nbsp;</h4>
			<div class=" col-md-12">
			<ul class="nav nav-pills">
			<li class="active"><a data-toggle="tab" href="#nav-pills-tab-1">Address</a></li>
			<li><a data-toggle="tab" href="#nav-pills-tab-2">Property</a></li>
			<li><a data-toggle="tab" href="#nav-pills-tab-3">Contacts</a></li>
			<li><a data-toggle="tab" href="#nav-pills-tab-4">Attachements</a></li>
			<li><a data-toggle="tab" href="#nav-pills-tab-5">Flex</a></li>
			</ul>
			</div>
			<div class="tab-content">
			    <div id="nav-pills-tab-1" class="tab-pane fade active in" >
				<div class=" col-md-6">
				<div class="form-group">
				<label class="col-md-2 control-label">Address</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_ADD1" id="SUPL_ADD1" class="form-control" placeholder="SUPL_ADD1" value="<?php echo $supplier[0]['SUPL_ADD1']; ?>"/>
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<div class="col-md-5">
				<input type="text" name="SUPL_ADD2" id="SUPL_ADD2" class="form-control" placeholder="SUPL_ADD2" value="<?php echo $supplier[0]['SUPL_ADD2']; ?>"/>
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<div class="col-md-5">
				<input type="text" name="SUPL_ADD3" id="SUPL_ADD3" class="form-control" placeholder="SUPL_ADD3"value="<?php echo $supplier[0]['SUPL_ADD3']; ?>" />
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<div class="col-md-5">
				<input type="text" name="SUPL_ADD4" id="SUPL_ADD4" class="form-control" placeholder="SUPL_ADD4" value="<?php echo $supplier[0]['SUPL_ADD4']; ?>"/>
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Country</label>
				<div class="col-md-5">
				<select name="SUPL_CN_CODE" id="SUPL_CN_CODE"class="form-control">
				<option value="">SUPL_CN_CODE</option>
				<?php if (count($country) > 0 )
				{
				foreach ($country as $row)
				{
				?>
				<option <?php if($supplier[0]['SUPL_CN_CODE']==$row['CN_CODE']) echo 'selected'; ?> value="<?php echo $row['CN_CODE']; ?>"><?php echo $row['CN_DESC']; ?></option>
                               <?php } }?>
				</select>
				
				</div>    
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">State</label>
				<div class="col-md-5">
				
				<select class="form-control" name="SUPL_ST_CODE" id="SUPL_ST_CODE" >
				<option>SUPL_ST_CODE</option>
				<?php if (count($state) > 0 )
				{
				foreach ($state as $row)
				{
				?>
				<option <?php if($supplier[0]['SUPL_ST_CODE']==$row['ST_CODE']) echo 'selected'; ?> value="<?php echo $row['ST_CODE']; ?>"><?php echo $row['ST_DESC']; ?></option>
                               <?php } }?>
				</select>
				</select>
				
				</div>    
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">City</label>
				<div class="col-md-5">
				
				<select name="SUPL_CT_CODE"class="form-control" id="SUPL_CT_CODE">
				<option value="">SUPL_CT_CODE</option>
				<?php if (count($city) > 0 )
				{
				foreach ($city as $row)
				{
				?>
				<option <?php if($supplier[0]['SUPL_CT_CODE']==$row['CT_CODE']) echo 'selected'; ?> value="<?php echo $row['CT_CODE']; ?>"><?php echo $row['CT_DESC']; ?></option>
                               <?php } }?>
				</select>
				</select>
				
				</div>    
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">PO Box</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_POSTAL" id="SUPL_POSTAL" class="form-control" placeholder="SUPL_POSTAL" value="<?php echo $supplier[0]['SUPL_POSTAL']; ?>"/>
				</div>
				
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Mobile</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_MOBILE" id="SUPL_MOBILE" class="form-control" placeholder="SUPL_MOBILE" value="<?php echo $supplier[0]['SUPL_MOBILE']; ?>"/>
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Phone</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_PHONE" id="SUPL_PHONE" class="form-control" placeholder="SUPL_PHONE" value="<?php echo $supplier[0]['SUPL_PHONE']; ?>"/>
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Fax</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_FAX" id="SUPL_FAX" class="form-control" placeholder="SUPL_FAX"value="<?php echo $supplier[0]['SUPL_FAX']; ?>" />
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Email</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_EMAIL" id="SUPL_EMAIL" class="form-control" placeholder="SUPL_EMAIL"value="<?php echo $supplier[0]['SUPL_EMAIL']; ?>" />
				</div>
				</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Contact Person</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_PERSON_NAME" id="SUPL_PERSON_NAME" class="form-control" placeholder="SUPL_PERSON_NAME" value="<?php echo $supplier[0]['SUPL_PERSON_NAME']; ?>"/>
				</div>
				</div>	 
				
				
				
				
				
				</div>
				
				
				<div class=" col-md-6">
				<div class="col-md-offset-3 col-md-6">
				       <div class="checkbox">
					   <label>
					       <input  type="checkbox" <?php if($supplier[0]['SUPL_PURCHASE_ADDRESS_YN']=="Y") echo 'checked'; ?>  name="PURCHASING_ACTIVE_YN"  value="Y" > Purchasing
					   </label>
				       </div>
				       
				   </div>
				<div class="col-md-offset-3 col-md-6">
				       <div class="checkbox">
					   <label>
					       <input  type="checkbox" <?php if($supplier[0]['SUPL_PAYMENT_ADDRESS_YN']=="Y") echo 'checked'; ?>  name="PAYMENT_ACTIVE_YN"  value="Y" > Payment
					   </label>
				       </div>
				       
				   </div>
				<div class="hide col-md-offset-4 col-md-6">
				    <div class="form-group">
					<button class="btn btn-sm btn-success" type="submit">More Address</button>
				    </div>
				</div>
				</div>


			    </div>
			    <div id="nav-pills-tab-2" class="tab-pane fade " >
				
				<div class=" col-md-7">
				    
				    <div class="form-group">
				<label class="col-md-2 control-label">Exch . Rate Type</label>
				<div class="col-md-5">
				
				<select name="SUPL_EXCH_RATE_CODE" class="form-control">
				<option value="">SUPL_EXCH_RATE_CODE</option>
				<?php if (count($excode) > 0 )
				{
				foreach ($excode as $excode)
				{
				?>
				<option <?php if($supplier[0]['SUPL_EXCHG_RATE_CODE']==$excode['VSL_CODE']) echo 'selected'; ?>  value="<?php echo $excode['VSL_CODE']; ?>"><?php echo $excode['VSL_DESC']; ?></option>
				<?php } } ?>
				</select>
				
				</div>    
				</div>
				     <div class="form-group">
				<label class="col-md-2 control-label">Payment Currency</label>
				<div class="col-md-5">
				
				<select name="SUPL_CCY_CODE"class="form-control">
				<option value="">SUPL_CCY_CODE</option>
				<?php if (count($currency) > 0 )
				{
				foreach ($currency as $currency)
				{
				?>
				<option  <?php if($supplier[0]['SUPL_CCY_CODE']==$currency['CCY_CODE']) echo 'selected'; ?> value="<?php echo $currency['CCY_CODE']; ?>"><?php echo $currency['CCY_DESC']; ?></option>
				<?php } }?>
				</select>
				
				</div>    
				</div>
				      <div class="form-group">
				<label class="col-md-2 control-label">Payment Type</label>
				<div class="col-md-5">
				
				<select name="SUPL_PAY_TERM_CODE" class="form-control">
				<option value="">SUPL_PAY_TERM_CODE</option>
				<?php if (count($PaymentTerm) > 0 )
				{
				foreach ($PaymentTerm as $PaymentTerm)
				{
				?>
				<option  <?php if($supplier[0]['SUPL_PAY_TERM_CODE']==$PaymentTerm['PT_CODE']) echo 'selected'; ?> value="<?php echo $PaymentTerm['PT_CODE']; ?>"><?php echo $PaymentTerm['PT_DESC']; ?></option>
				<?php } }?>
				</select>
				
				</div>    
				</div>
				    <div class="form-group">
				<label class="col-md-2 control-label">A/c Manager</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_AC_MANAGER" id="SUPL_AC_MANAGER" class="form-control" placeholder="SUPL_AC_MANAGER" value="<?php echo $supplier[0]['SUPL_AC_MANAGER']; ?>"  />
				</div>
				</div>
				    <div class="form-group">
				<label class="col-md-2 control-label">Sales Representative</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_SAL_REP" id="SUPL_SAL_REP" class="form-control" placeholder="SUPL_SAL_REP"value="<?php echo $supplier[0]['SUPL_SALE_REP']; ?>"  />
				</div>
				</div>
				    <div class="form-group">
				<label class="col-md-2 control-label">Credit Limit</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_CREDIT_LIMIT" id="SUPL_CREDIT_LIMIT" class="form-control" placeholder="SUPL_CREDIT_LIMIT" value="<?php echo $supplier[0]['SUPL_CREDIT_LIMIT']; ?>" />
				</div>
				</div>
				    <div class="form-group">
				<label class="col-md-2 control-label">Discount Grace Days</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_DISC_GRACE_DAYS" id="SUPL_DISC_GRACE_DAYS" class="form-control" placeholder="SUPL_DISC_GRACE_DAYS"value="<?php echo $supplier[0]['SUPL_DISC_GRACE_DAYS']; ?>"  />
				</div>
				</div>
				    <div class="form-group">
				<label class="col-md-2 control-label">From Date</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_FROM_DT" id="SUPL_FROM_DT" class="form-control" placeholder="SUPL_FROM_DT" value="<?php echo $supplier[0]['SUPL_FROM_DT']; ?>" />
				</div>
				</div>
				    <div class="form-group">
				<label class="col-md-2 control-label">Up to Date</label>
				<div class="col-md-5">
				<input type="text" name="SUPL_UPTO_DT" id="SUPL_UPTO_DT" class="form-control" placeholder="SUPL_UPTO_DT"value="<?php echo $supplier[0]['SUPL_UPTO_DT']; ?>"  />
				</div>
				</div>	
				    
				    
				</div>
				
			    </div>
			    <div id="nav-pills-tab-3" class="tab-pane fade " >
				
				<div class=" col-md-12">
				<div class="table-responsive">
				<table class="table  table-bordered">
				<thead>
				<tr>
				<th>Contact Name</th>
				<th>Mobile</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Linkedin</th>
				<th>Facebook</th>
				<th>Twitter</th>
				<th>From date</th>
				<th>Upto date</th>
				<th>Active?</th>
				<th>Action</th>
				
				</tr>
				</thead>
				<tbody>
				    <?php if (count($contact) > 0 )
				{
				foreach ($contact as $contact)
				{
				?>
				<tr class="odd ">
				<td><span><input value="<?php echo $contact['SCONT_NAME']; ?>" class="form-control" type="text" size="10" maxlength="50" name="CCONT_NAME[]" ></span></td>

				<td><span><input value="<?php echo $contact['SCONT_MOBILE']; ?>"class="form-control" type="text" size="10" maxlength="50" name="CCONT_MOBILE[]" ></span></td>
				<td><span><input value="<?php echo $contact['SCONT_PHONE']; ?>"class="form-control" type="text" size="10" maxlength="50" name="CCONT_PHONE[]"></span></td>
				<td><span><input value="<?php echo $contact['SCONT_EMAIL']; ?>"class="form-control" type="text" size="10" maxlength="50" name="CCONT_EMAIL[]" ></span></td>
				<td><span><input  value="<?php echo $contact['SCONT_LINKEDIN']; ?>"class="form-control" type="text" size="10" maxlength="50" name="CCONT_LINKEDIN[]" ></span></td>
				<td><span><input value="<?php echo $contact['SCONT_FACEBOOK']; ?>"class="form-control" type="text" size="10" maxlength="50" name="CCONT_FACEBOOK[]" ></span></td>
				<td><span><input value="<?php echo $contact['SCONT_TWITTER']; ?>"class="form-control" type="text" size="10" maxlength="50" name="CCONT_TWITTER[]"></span></td>
				<td><span><input value="<?php echo $contact['SCONT_FROM_DT']; ?>"class="form-control datepicker" type="text" size="10" maxlength="50" name="CCONT_FROM_DT[]" ></span></td>
				<td><span><input value="<?php echo $contact['SCONT_UPTO_DT']; ?>"class="form-control datepicker" type="text" size="10" maxlength="50" name="CCONT_UPTO_DT[]"></span></td>
				<td><span><input <?php if($contact['SCONT_ACTIVE_YN']=="Y") echo 'checked'; ?> class="form-control" type="checkbox"  id="CCONT_ACTIVE_YN[]"name="CCONT_ACTIVE_YN[]"  value="Y" >
				<input  type='hidden' value='N' name='CCONT_ACTIVE_YN[]'></span></td>
				<td><a href="<?php echo site_url('Procurement/SupplierContact_Delete/'.$supplier[0]['SUPL_AC_CODE'].'/'.$contact['SCONT_NAME'])?>"onclick="return confirm('Are you sure you want to delete this?');" class="btn btn-danger btn-sm " data-template="textbox">Remove</a></td>
				
				</tr>
				<?php } }?>
				<tr class="odd hide" id="optionTemplate">
				<td><span><input  class="form-control" type="text" size="10" maxlength="50" name="CCONT_NAME[]" ></span></td>
				<td><span><input class="form-control" type="text" size="10" maxlength="50" name="CCONT_MOBILE[]" ></span></td>
				<td><span><input class="form-control" type="text" size="10" maxlength="50" name="CCONT_PHONE[]"></span></td>
				<td><span><input class="form-control" type="text" size="10" maxlength="50" name="CCONT_EMAIL[]" ></span></td>
				<td><span><input  class="form-control" type="text" size="10" maxlength="50" name="CCONT_LINKEDIN[]" ></span></td>
				<td><span><input class="form-control" type="text" size="10" maxlength="50" name="CCONT_FACEBOOK[]" ></span></td>
				<td><span><input class="form-control" type="text" size="10" maxlength="50" name="CCONT_TWITTER[]"></span></td>
				<td><span><input class="form-control datepicker" type="text" size="10" maxlength="50" name="CCONT_FROM_DT[]" ></span></td>
				<td><span><input class="form-control datepicker" type="text" size="10" maxlength="50" name="CCONT_UPTO_DT[]"></span></td>
				<td><span><input  class="form-control" type="checkbox"  id="AR_ACTIVE_YN[]"name="CCONT_ACTIVE_YN[]"  value="Y" ></span></td>
				<td><button type="button" class="btn btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
				</tr>
		   
			
				</tbody>
				</table>
				</div>
		
				</div>
				</div>				    
				    <div id="nav-pills-tab-4" class="tab-pane fade " >
				<div class="col-md-12">
				    <div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr >
								<th>File Name</th>
								<th>Description</th>
								<th>From Date</th>
								<th>Upto Date</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
						        <?php if (count($attachment) > 0 )
							    {
							    foreach ($attachment as $attachment)
							    {
							    ?>
						    <tr class="odd1 ">
						   <input value="<?php echo $attachment['SDOC_SYS_ID']; ?>" class="" type="hidden"  name="SDOC_SYS_ID[]" >
						    <input value="<?php echo $attachment['SDOC_SIZE']; ?>" class="" type="hidden"  name="filesize[]" >
						   <input value="<?php echo $attachment['SDOC_FILE_NAME']; ?>" class="" type="hidden"  name="filename[]" >
						    <td><span><input value="<?php echo $attachment['SDOC_FILE_NAME']; ?>" class="" type="file"  name="userfile[]" ></span></td>
						    <td><span><input value="<?php echo $attachment['SDOC_DESC']; ?>"class="form-control" type="text" size="20" maxlength="50" name="CDOC_DESC[]"></span></td>
						    <td><span><input value="<?php echo $attachment['SDOC_FROM_DT']; ?>"class="form-control datepicker" type="text" size="50" maxlength="50" name="CDOC_FROM_DT[]" id="CDOC_FROM_DT[]"></span></td>
						    <td><span><input value="<?php echo $attachment['SDOC_UPTO_DT']; ?>" class="form-control datepicker" type="text" size="50" maxlength="50" name="CDOC_UPTO_DT[]" id="CDOC_UPTO_DT[]" ></span></td>
						    <td><span><input <?php if($attachment['SDOC_ACTIVE_YN']=="Y") echo 'checked'; ?> class="form-control" type="checkbox"  id="CDOC_ACTIVE_YN[]"name="CDOC_ACTIVE_YN[]"  value="Y" >
						    <input  type='hidden' value='N' name='CDOC_ACTIVE_YN[]'></span></td>
						    <td><a href="<?php echo site_url('Procurement/SupplierAttachment_Delete/'.$supplier[0]['SUPL_AC_CODE'].'/'.$attachment['SDOC_SYS_ID'])?>" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete this?');"data-template="textbox">Remove</a></td>
						    
						    </tr>
						    <?php } }?>
						    <tr class="odd1 hide" id="optionTemplate1">
						    <td><span><input  class="" type="file"  name="userfile[]" ></span></td>
						    <td><span><input class="form-control" type="text" size="20" maxlength="50" name="CDOC_DESC[]" ></span></td>
						    <td><span><input class="form-control datepicker" type="text" size="50" maxlength="50" name="CDOC_FROM_DT[]" id="CDOC_FROM_DT[]"></span></td>
						    <td><span><input class="form-control datepicker" type="text" size="50" maxlength="50" name="CDOC_UPTO_DT[]" id="CDOC_UPTO_DT[]"></span></td>
						    <td><span><input  class="form-control" type="checkbox" id="CDOC_ACTIVE_YN[]" checked="checked" name="CDOC_ACTIVE_YN[]"  value="Y" >
						    <input  type='hidden' value='N' name='CDOC_ACTIVE_YN[]'></span></td>
						    <td><button type="button" class="btn btn-danger btn-sm removeButton1" data-template="textbox">Remove</button></td>
						    </tr>
				       
						    
						</tbody>
					</table>
				</div>
			
				</div>
				
			    </div>
		    <div id="nav-pills-tab-5" class="tab-pane fade " >
									<div class="col-md-6">
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 01</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_01" id="SUPL_FLEX_01" class="form-control" placeholder="SUPL_FLEX_01" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 02</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_02" id="SUPL_FLEX_02" class="form-control" placeholder="SUPL_FLEX_02" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 03</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_03" id="SUPL_FLEX_03" class="form-control" placeholder="SUPL_FLEX_03" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 04</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_04" id="SUPL_FLEX_04" class="form-control" placeholder="SUPL_FLEX_04" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 05</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_05" id="SUPL_FLEX_05" class="form-control" placeholder="SUPL_FLEX_05" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 06</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_06" id="SUPL_FLEX_06" class="form-control" placeholder="SUPL_FLEX_06" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 07</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_07" id="SUPL_FLEX_07" class="form-control" placeholder="SUPL_FLEX_07" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 08</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_08" id="SUPL_FLEX_08" class="form-control" placeholder="SUPL_FLEX_08" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 09</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_09" id="SUPL_FLEX_09" class="form-control" placeholder="SUPL_FLEX_09" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 10</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_10" id="SUPL_FLEX_10" class="form-control" placeholder="SUPL_FLEX_10" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Flex 11</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_11" id="SUPL_FLEX_11" class="form-control" placeholder="SUPL_FLEX_11" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 12</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_12" id="SUPL_FLEX_12" class="form-control" placeholder="SUPL_FLEX_12" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 13</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_13" id="SUPL_FLEX_13" class="form-control" placeholder="SUPL_FLEX_13" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 14</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_14" id="SUPL_FLEX_14" class="form-control" placeholder="SUPL_FLEX_14" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 15</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_15" id="SUPL_FLEX_15" class="form-control" placeholder="SUPL_FLEX_15" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 16</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_16" id="SUPL_FLEX_16" class="form-control" placeholder="SUPL_FLEX_16" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 17</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_17" id="SUPL_FLEX_17" class="form-control" placeholder="SUPL_FLEX_17" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 18</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_18" id="SUPL_FLEX_18" class="form-control" placeholder="SUPL_FLEX_18" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 19</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_19" id="SUPL_FLEX_19" class="form-control" placeholder="SUPL_FLEX_19" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 20</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FLEX_20" id="SUPL_FLEX_20" class="form-control" placeholder="SUPL_FLEX_20" />
							</div>
						    </div>
						</div>
						
	
				    
			    </div>
			    
		       </div>
			<div class=" col-md-6 col-md-offset-3">
      <div class="form-group">
                                <div class="col-md-offset-2 col-md-2">
        <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
    <div class="col-md-2">
        <button class="btn btn-sm btn-info" disabled type="button" onclick="form_reset();" >Reset</button>
                                </div>
    <div class="col-md-2">
	<button type="submit" class="btn btn-md btn-success" name="submit_form" id="submit_but" value="Save" >Update</button>
       <!-- <input type="submit" class="btn btn-sm btn-success" name="Save"  value="Save">-->
                                </div>
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
                        url: '<?php  echo site_url('Inventory_controller/StockTransferIncomingDate')?>',
   type: 'POST'
      }
                }
            },
     SUPL_PARTY_TYPE: {
  message: 'The Description is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The Party Type is required and can\'t be empty'
                    }
                }
            },
     SUPL_PARTY_DESC: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Party Description is required and can\'t be empty'
                    }
                }
            },
          SUPL_PARTY_ALIAS: {
	    
                validators: {
      
                    notEmpty: {
                        message: 'The Party Alias is required and can\'t be empty'
                    }
                }
            },
	    SUPL_PARTY_URL: {
                validators: {
      
                    notEmpty: {
                        message: 'The Party URL required and can\'t be empty'
                    }
                }
            },	    
	    SUPL_AC_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Account code required and can\'t be empty'
                    },
		    remote: {
                        message: 'SUPPLIER ACCOUNT CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Procurement/Ajax_SUPL_AC_CODE')?>',
                        type: 'POST'
                    }
                }
            },
	    SUPL_AC_DESC: {
                validators: {
      
                    notEmpty: {
                        message: 'The Account Description required and can\'t be empty'
                    }
                }
            },
	    SUPL_PERSON_TITLE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Person Title required and can\'t be empty'
                    }
                }
            },
	    SUPL_PERSON_FIRST_NAME: {
                validators: {
      
                    notEmpty: {
                        message: 'The First Name required and can\'t be empty'
                    }
                }
            },
	    SUPL_PERSON_MIDDLE_NAME: {
                validators: {
      
                    notEmpty: {
                        message: 'The Middle Name required and can\'t be empty'
                    }
                }
            },
	    SUPL_PERSON_LAST_NAME: {
                validators: {
      
                    notEmpty: {
                        message: 'The Last Name required and can\'t be empty'
                    }
                }
            },
	    SUPL_ADD1: {
                validators: {
      
                    notEmpty: {
                        message: 'The Address Line1 required and can\'t be empty'
                    }
                }
            },
	    SUPL_ADD2: {
                validators: {
      
                    notEmpty: {
                        message: 'The Address Line2 required and can\'t be empty'
                    }
                }
            },
	    SUPL_ADD3: {
                validators: {
      
                    notEmpty: {
                        message: 'The Address Line3 required and can\'t be empty'
                    }
                }
            },
	    SUPL_ADD4: {
                validators: {
      
                    notEmpty: {
                        message: 'The Address Line4 required and can\'t be empty'
                    }
                }
            },
	    SUPL_CN_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Country required and can\'t be empty'
                    }
                }
            },
	     SUPL_ST_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The State required and can\'t be empty'
                    }
                }
            },
	    SUPL_CT_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The State required and can\'t be empty'
                    }
                }
            },	   
	     SUPL_POSTAL: {
                validators: {
      
                    notEmpty: {
                        message: 'The Postal code required and can\'t be empty'
                    }
                }
            },
	     SUPL_MOBILE: {
                validators: {

		      regexp: {
                        regexp: /^\+?[0-9]{10,}$/i,
                        message: 'The Mobile number required is not valid'
                    },
                    notEmpty: {
                        message: 'The Mobile Number required and can\'t be empty'
                    }
                }
            },
	     SUPL_PHONE: {
                validators: {
		      regexp: {
                        regexp: /^\+?[0-9]{10,}$/i,
                        message: 'The Phone number required is not valid'
                    },
                    notEmpty: {
                        message: 'The Phone required and can\'t be empty'
                    }
                }
            },
	     SUPL_FAX: {
                validators: {
		    regexp: {
                        regexp: /^\+?[0-9]{10,}$/i,
                        message: 'The fax number is not valid '
                    },
                    notEmpty: {
                        message: 'The Fax number  required and can\'t be empty'
                    }
                }
            },
       SUPL_EMAIL: {
	trigger:"blur",
                validators: {
		    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
                    notEmpty: {
                        message: 'The Supplier Email-id is required and can\'t be empty'
                    }
                }
            },
       SUPL_PERSON_NAME: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Contact Person is required and can\'t be empty'
                    }
                }
            },
       SUPL_EXCH_RATE_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Exchange Rate required and can\'t be empty'
                    }
                }
            },
	SUPL_CCY_CODE:{
		 validators: {
      
                    notEmpty: {
                        message: 'The Currency is required and can\'t be empty'
                    }
                }
            },
	    
	SUPL_PAY_TERM_CODE:{
		 validators: {
      
                    notEmpty: {
                        message: 'The Payment Term is required and can\'t be empty'
                    }
                }
            },
	    
	    SUPL_DISC_GRACE_DAYS:{
		 validators: {
		     regexp: {
                        regexp: /^\+?[0-9]$/i,
                        message: 'The Grace days should be in number'
                    },
                    notEmpty: {
                        message: 'The Grace days is required and can\'t be empty'
                    }
                }
            },
	     SUPL_CREDIT_LIMIT:{
		 validators: {
		     regexp: {
                        regexp: /^\+?[0-9]$/i,
                        message: 'The Credit Limit should be in number'
                    },
                    notEmpty: {
                        message: 'The Credit Limit is required and can\'t be empty'
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
   $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YY'
});
});
});
 
function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$row.remove();
   $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YY'
});
});
});
};
</script>
<script>
$(document).ready(function() {
   $(".addButton").click(function(){
   var $template = $('#optionTemplate');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   removerow();
      $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YY'
});
});
   });
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row   = $(this).parents('.odd');
   $row.remove();
      $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YY'
});
});
   });
   }
   
  
   
   });
   
</script>
<script>
       $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YYYY'
});
});
$(document).ready(function() {
   $(".addButton1").click(function(){
   var $template = $('#optionTemplate1');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   removerow();
      $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YYYY'
});
});
   });
   function removerow(){
   $(".removeButton1").on('click',function(){
   var $row   = $(this).parents('.odd1');
   $row.remove();
      $(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YYYY'
});
});
   });
   }
   
  
   
   });
   
</script>
<script type="text/javascript">
    function dropdown() {
    FormPlugins.init();
    }
    
    $(function(){
    
    $("#SUPL_CN_CODE").change(function() {
    var cn_code=$('option:selected', this).val() ;
    
    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Procurement/ajaxstate",
    data:{cn_code:cn_code} ,
    success: function (responseData) {
    $('*#SUPL_ST_CODE').html(responseData);
    dropdown();
    $("#SUPL_CT_CODE").html("<option>SUPL_CT_CODE</option>");
    },
    });
    });});
    
    $(function(){
    
    $("#SUPL_ST_CODE").change(function() {
    var st_code=$('option:selected', this).val() ;
    var cn_code=$('option:selected', "#SUPL_CN_CODE").val() ;

    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Procurement/ajaxcity",
    data:{st_code:st_code,cn_code:cn_code} ,
    success: function (responseData) {
  
    $('*#SUPL_CT_CODE').html(responseData);
    dropdown();
    },
    });
    });
    });


 </script>

<script>
if(document.getElementById("testName").checked){
document.getElementById('testNameHidden').disabled = true;
}
</script>
<script type="text/javascript">
$(function () {
$('#SUPL_FROM_DT').datetimepicker({
    format: 'DD-MMM-YYYY'
				     });
$('#SUPL_UPTO_DT').datetimepicker({
    format: 'DD-MMM-YYYY'
    });
$("#SUPL_FROM_DT").on("dp.change",function (e) {
$('#SUPL_UPTO_DT').data("DateTimePicker").minDate(e.date);
});
$("#SUPL_UPTO_DT").on("dp.change",function (e) {
$('#SUPL_FROM_DT').data("DateTimePicker").maxDate(e.date);
});
});
</script>
</body>
</html>

