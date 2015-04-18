
	   <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Add Measurement Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Add Measurement Transaction<small> Enter the correct details here...</small></h1>
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
				<h4 class="panel-title">Add Measurement Transaction</h4>
			    </div>
			    <div class="panel-body">
				<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('LogisticsController/MeasurementTransaction_Add/'.$result[0]['LSL_SYS_ID']);?>" class="form-horizontal">
				    <div id="wizard">
					<ol>
					    <li>Reference</li>
					    <li>Details</li>
					    <li>Product</li>
					    <li>Confirm</li>
					</ol>
					<!-- begin wizard step-1 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Reference</legend>
						<div class="row form-horizontal">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Customer Name</label>
							    <div class="col-md-5">
								<input type="text" placeholder="MH_CUST_AC_DESC" value="<?php echo $result[0]['LSL_CUST_AC_DESC'] ;?>" name="MH_CUST_AC_DESC" id="MH_CUST_AC_DESC" class="form-control">
								<input type="hidden" value="<?php echo $lsl_sys_id ;?>" name="lsl_sys_id" id="lsl_sys_id">
								<?php if($sys_head_id!=""){ ?>
								<input type="hidden" value="<?php echo $sys_head_id; ?>" id="head_sys_id"name="head_sys_id">
								<?php } ?>   
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Contact Person</label>
							    <div class="col-md-5">
								<input type="text" placeholder="MH_CONTACT_PERSON" value="<?php echo $result[0]['LSL_CONTACT_PERSON'] ;?>" name="MH_CONTACT_PERSON" id="MH_CONTACT_PERSON" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Address</label>
							    <div class="col-md-5">
								<input type="text" placeholder="MH_ADD1 + MH_ADD2 + MH_ADD3 + MH_ADD4"  name="MH_ADD1" id="MH_ADD1" value="<?php echo $result[0]['LSL_ADD1'].''.$result[0]['LSL_ADD2'].''.$result[0]['LSL_ADD3'].''.$result[0]['LSL_ADD4'];?>" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">City</label>
							    <div class="col-md-5">
								<input type="text" placeholder="MH_CT_AR_CODE + MH_CT_CODE + MH_CN_CODE"  name="MH_CT_CODE"  value="<?php echo $result[0]['LSL_CT_AREA_CODE'].''.$result[0]['LSL_CT_CODE'].''.$result[0]['LSL_CN_CODE'];?>" id="MH_CT_CODE" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Ref Transaction</label>
							    <div class="col-md-2">
								<input type="text" placeholder="MH_SALE_REF_TXN_CODE"  name="MH_SALE_REF_TXN_CODE" value="<?php echo $result[0]['LSL_REF_TXN_CODE'] ;?>" id="MH_SALE_REF_TXN_CODE" class="form-control">
							    </div>
							    <label class="col-md-1 control-label">Ref No</label>
							    <div class="col-md-2">
								<input type="text" placeholder="MH_SALE_REF_TXN_NO"  name="MH_SALE_REF_TXN_NO" value="<?php echo $result[0]['LSL_REF_TXN_NO'] ;?>" id="MH_SALE_REF_TXN_NO" class="form-control">
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSH_TXN_CODE" id="LSH_TXN_CODE"class="form-group" value="<?php echo $result3[0]['LSH_TXN_CODE'] ;?>" placeholder="LSH_TXN_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="defaultdate4" name="LSH_TXN_DT" class="form-group" value="<?php echo $result3[0]['LSH_TXN_DT'] ;?>" placeholder="LSH_TXN_DT"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSH_DOC_REF" id="LSH_DOC_REF" class="form-group" value="<?php echo $result3[0]['LSH_DOC_REF'] ;?>" placeholder="LSH_DOC_REF"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_LOCN_CODE" name="LSL_LOCN_CODE" class="form-group" value="<?php echo $result[0]['LSL_LOCN_CODE'] ;?>" placeholder="LSL_LOCN_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_SR_CODE" class="form-group" value="<?php echo $result[0]['LSL_SR_CODE'] ;?>" placeholder="LSL_SR_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_REF_SYS_ID" name="LSL_REF_SYS_ID" class="form-group" value="<?php echo $result[0]['LSL_REF_SYS_ID'] ;?>" placeholder="LSL_REF_SYS_ID"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_REF_TXN_CODE" class="form-group" value="<?php echo $result[0]['LSL_REF_TXN_CODE'] ;?>" placeholder="LSL_REF_TXN_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_REF_TXN_NO" name="LSL_REF_TXN_NO" class="form-group" value="<?php echo $result[0]['LSL_REF_TXN_NO'] ;?>" placeholder="LSL_REF_TXN_NO"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="defaultdate3" name="LSL_REF_TXN_DT" class="form-group" value="<?php echo $result[0]['LSL_REF_TXN_DT'] ;?>" placeholder="LSL_REF_TXN_DT"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_CONTACT_NO" name="LSL_CONTACT_NO" class="form-group" value="<?php echo $result[0]['LSL_CONTACT_NO'] ;?>" placeholder="LSL_CONTACT_NO"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_CN_CODE" class="form-group" value="<?php echo $result[0]['LSL_CN_CODE'] ;?>" placeholder="LSL_CN_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_ST_CODE" name="LSL_ST_CODE" class="form-group" value="<?php echo $result[0]['LSL_ST_CODE'] ;?>" placeholder="LSL_ST_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_POSTAL" name="LSL_POSTAL" class="form-group" value="<?php echo $result[0]['LSL_POSTAL'] ;?>" placeholder="LSL_POSTAL"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_MOBILE" class="form-group" value="<?php echo $result[0]['LSL_MOBILE'] ;?>" placeholder="LSL_MOBILE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_PHONE" name="LSL_PHONE" class="form-group" value="<?php echo $result[0]['LSL_PHONE'] ;?>" placeholder="LSL_PHONE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_FAX" class="form-group" value="<?php echo $result[0]['LSL_FAX'] ;?>" placeholder="LSL_FAX"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_EMAIL" name="LSL_EMAIL" class="form-group" value="<?php echo $result[0]['LSL_EMAIL'] ;?>" placeholder="LSL_EMAIL"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_DESC" class="form-group" value="<?php echo $result[0]['LSL_DESC'] ;?>" placeholder="LSL_DESC"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_JOB_STATUS" name="LSL_JOB_STATUS" class="form-group" value="<?php echo $result[0]['LSL_JOB_STATUS'] ;?>" placeholder="LSL_JOB_STATUS"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="defaultdate2" name="LSL_APPOINT_DT" class="form-group" value="<?php echo $result[0]['LSL_APPOINT_DT'] ;?>" placeholder="LSL_APPOINT_DT"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_CUST_AC_CODE" name="LSL_CUST_AC_CODE" class="form-group" value="<?php echo $result[0]['LSL_CUST_AC_CODE'] ;?>" placeholder="LSL_CUST_AC_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_CT_AREA_CODE" name="LSL_CT_AREA_CODE" class="form-group" value="<?php echo $result[0]['LSL_CT_AREA_CODE'] ;?>" placeholder="LSL_CT_AREA_CODE"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_ADD2" name="LSL_ADD2" class="form-group" value="<?php echo $result[0]['LSL_ADD2'] ;?>" placeholder="LSL_ADD2"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" name="LSL_ADD3" class="form-group" value="<?php echo $result[0]['LSL_ADD3'] ;?>" placeholder="LSL_ADD3"/>
							    </div>
							    <div class="col-md-2">
								<input type="hidden" id="LSL_ADD4" name="LSL_ADD4" class="form-group" value="<?php echo $result[0]['LSL_ADD4'] ;?>" placeholder="LSL_ADD4"/>
							    </div>
							</div>
						    </div>
						</div>
					    </fieldset>
					</div>
					<!-- end wizard step-1 -->
					<!-- begin wizard step-2 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Details</legend>
						<div class="row form-horizontal">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Building Name</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_BUILD"  name="ML_BUILD" id="ML_BUILD" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Floor Number</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_FLOOR"  name="ML_FLOOR" id="ML_FLOOR" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Flat Number</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_FLAT"  name="ML_FLAT" id="ML_FLAT" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Unit Type</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_UNIT" name="ML_UNIT">
								    <option selected="selected" value="">Select</option>
								    <?php foreach($result4 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
						    </div>
						</div>
					    </fieldset>
					</div>
					<!-- end wizard step-2 -->
					<!-- begin wizard step-3 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Product</legend>
						<div class="row form-horizontal">
						    <div class="col-md-11">
							<div class="form-group">
							    <label class="col-md-3 control-label">Product</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_PRODUCT_CODE" name="ML_PRODUCT_CODE">
								    <option selected="selected" value="">Select</option>
								    <?php foreach($result5 as $row) {?>
								    <option value="<?php echo $row['IF_CODE']?>"><?php echo $row['IF_DESC']?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Color Code</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_COLOR_CODE" name="ML_COLOR_CODE">
								    <option selected="selected" value="">Select</option>
								    <?php foreach($result6 as $row) {?>
								    <option value="<?php echo $row['IC_CODE']?>"><?php echo $row['IC_DESC']?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Width</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_WIDTH"  name="ML_WIDTH" id="ML_WIDTH" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Height</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_HEIGHT"  name="ML_HEIGHT" id="ML_HEIGHT" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Quantity</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_QTY" name="ML_QTY" id="ML_QTY" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Mount Type</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_MOUNT_TYPE" name="ML_MOUNT_TYPE">
								    <option selected="selected" value="">Select</option>
								    <?php foreach($result7 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Mount On</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_MOUNT_ON" name="ML_MOUNT_ON">
								    <option selected="selected" value="">Select</option>
								    <?php foreach($result8 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Operation</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_OPERATE" name="ML_OPERATE">
								    <option selected="selected" value="">Select</option>
								    <option value="Manual">Manual</option>
								    <option value="Motorized">Motorized</option>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Control</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_CONTROL" name="ML_CONTROL">
								    <option selected="selected" value="">Select</option>
								    <option value="Left">Left</option>
								    <option value="Right">Right</option>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Opening</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_OPENING" name="ML_OPENING">
								    <option selected="selected" value="">Select</option>
								    <option value="Top">Top</option>
								    <option value="Left">Left</option>
								    <option value="Right">Right</option>
								    <option value="Center">Center</option>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Pelmet</label>
							    <div class="col-md-5">
								<select class="form-control" id="ML_PELMET" name="ML_PELMET">
								    <option selected="selected" value="">Select</option>
								    <option value="Yes">Yes</option>
								    <option value="No">No</option>
								</select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Projection</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_PROJECTION"  name="ML_PROJECTION" id="ML_PROJECTION" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Fasica</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_FASICA"  name="ML_FASICA" id="ML_FASICA" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Remarks</label>
							    <div class="col-md-5">
								<input type="text" placeholder="ML_REMARKS"  name="ML_REMARKS" id="ML_REMARKS" class="form-control">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-md-3 control-label">Transaction</label>
							    <div class="col-md-5">
							    <input type="text" placeholder="MH_TXN_CODE"  name="MH_TXN_CODE" id="MH_TXN_CODE" value="SCH" class="form-control">
							    </div>
							</div>
							<?php if( $head[0]["MH_TXN_NO"]!="" ) {?>
							<div class="form-group">
							    <label class="col-md-3 control-label">Txn Num</label>
							    <div class="col-md-5">
							      <input type="text" placeholder="MH_TXN_NO"  name="MH_TXN_NO" id="MH_TXN_NO" value=' <?php echo $head[0]["MH_TXN_NO"]; ?>' class="form-control">
							    </div>
							</div>
							<?php } ?>
							<div class="form-group">
							    <label class="col-md-3 control-label">Date</label>
							    <div class="col-md-5">
							      <input type="text" placeholder="MH_TXN_DT" name="MH_TXN_DT" id="defaultdate1" value="<?php if( $head[0]["MH_TXN_DT"]!="" ) { echo $head[0]["MH_TXN_DT"]; } ?>" class="form-control">
							    </div>
							</div>
				
						   
						    							<div class="table-responsive">
							    <table class="table table-bordered">
								<thead>
								    <tr>
									<th><center>File Name</center></th>
									<th><center>Size</center></th>
									<th><center>Action</center></th>
									
								    </tr>
								</thead>
								<tbody>
								    <tr class="odd_file">
								       <td>
									<input type="file"  name="userfile[]" class="form-control"  />
								    </td>
								   
								    <td>
									<input type="text"  name="file_description[]" class="form-control"  placeholder="FILE DESCRIPTION" />
								    </td>
								      <!--<input type="file" id="PODOC_FILE_NAME" name="userfile[]" class="btn btn-success  form-control"  placeholder="PODOC_FILE_NAME" />-->
								    </td>
								    <td><button type="button" class="btn btn-add2 btn-sm btn-primary" data-template="textbox">Add</button></td>
								     
								    </tr>
								    <tr class="odd_file hide" id="optionTemplate2">
									<td>
									    <input type="file" name="userfile[]" class="form-control"  />
									</td>
									
									<td>
									    <input type="text"  name="file_description[]" class="form-control"   placeholder="FILE DESCRIPTION" />
									</td>
							
									<td><button type="button" class="btn btn-remove2 btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
									
								    </tr>             
								    
								</tbody>
							    </table>
							</div>
						    </div>
						</div>
					    </fieldset>
	
				
					    <!--</div>-->
					</div>
					<!-- end wizard step-3 -->
					<!-- begin wizard step-4 -->
					<div>
					    <fieldset>
						<legend class="pull-left width-full">Confirm</legend>
						<div class="row form-horizontal">
						    <div class="col-md-11" id="confirmation_page">
							
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
	   
	    $(document).ready(function()
	    {

	    $('.btn-add2').click(function() {
	    var $template = $('#optionTemplate2'),
	    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
	    removerow_file();
	    });
	    function removerow_file(){
	    $(".removeButton").on('click',function(){
	    var $row    = $(this).parents('.odd_file');
	    $row.remove();
	    }
	    );
	    };
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
			MH_CUST_AC_DESC:
			{
			    message: 'The MH_CUST_AC_DESC is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_CUST_AC_DESC is required and can\'t be empty'
				}
			    }
			},
			MH_CONTACT_PERSON:
			{
			    message: 'The MH_CONTACT_PERSON is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_CONTACT_PERSON is required and can\'t be empty'
				}
			    }
			},
			MH_ADD1:
			{
			    message: 'The MH_ADD1 is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The MH_ADD1 is required and can\'t be empty'
				}
			    }
			},
			MH_CT_CODE:
			{
			    message: 'The MH_CT_CODE is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The MH_CT_CODE is required and can\'t be empty'
				}
			    }
			},
			MH_SALE_REF_TXN_CODE:
			{
			    message: 'The MH_SALE_REF_TXN_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_SALE_REF_TXN_CODE is required and can\'t be empty'
				}
			    }
			},
			MH_SALE_REF_TXN_NO:
			{
			    message: 'The MH_SALE_REF_TXN_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_SALE_REF_TXN_NO is required and can\'t be empty'
				}
			    }
			},
			//ML_BUILD:
			//{
			//    message: 'The ML_BUILD is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_BUILD is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_FLOOR:
			//{
			//    message: 'The ML_FLOOR is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_FLOOR is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_UNIT:
			//{
			//    message: 'The ML_UNIT is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_UNIT is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_FLAT:
			//{
			//    message: 'The ML_FLAT is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_FLAT is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_PRODUCT_CODE:
			//{
			//    message: 'The ML_PRODUCT_CODE is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_PRODUCT_CODE is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_COLOR_CODE:
			//{
			//    message: 'The ML_COLOR_CODE is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_COLOR_CODE is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_WIDTH:
			//{
			//    message: 'The ML_WIDTH is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_WIDTH is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_HEIGHT:
			//{
			//    message: 'The ML_HEIGHT is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_HEIGHT is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_MOUNT_TYPE:
			//{
			//    message: 'The ML_MOUNT_TYPE is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_MOUNT_TYPE is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_MOUNT_ON:
			//{
			//    message: 'The ML_MOUNT_ON is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_MOUNT_ON is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_OPERATE:
			//{
			//    message: 'The ML_OPERATE is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_OPERATE is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_CONTROL:
			//{
			//    message: 'The ML_CONTROL is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_CONTROL is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_OPENING:
			//{
			//    message: 'The ML_OPENING is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_OPENING is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_PELMET:
			//{
			//    message: 'The ML_PELMET is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_PELMET is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_PROJECTION:
			//{
			//    message: 'The ML_PROJECTION is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_PROJECTION is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_FASICA:
			//{
			//    message: 'The ML_FASICA is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_FASICA is required and can\'t be empty'
			//	}
			//    }
			//},
			//ML_REMARKS:
			//{
			//    message: 'The ML_REMARKS is not valid',
			//    validators:
			//    {
			//	notEmpty:
			//	{
			//	    message: 'The ML_REMARKS is required and can\'t be empty'
			//	}
			//    }
			//},
			MH_TXN_CODE:
			{
			    message: 'The MH_TXN_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_TXN_CODE is required and can\'t be empty'
				}
			    }
			},
			MH_TXN_NO:
			{
			    message: 'The MH_TXN_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_TXN_NO is required and can\'t be empty'
				}
			    }
			},
			MH_TXN_DT:
			{
			    message: 'The MH_TXN_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The MH_TXN_DT is required and can\'t be empty'
				}
			    }
			},
		    }
		});
	    });
	    
	    $('#defaultdate').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });
	    
	    $('#defaultdate1').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });
	    
	    $('#defaultdate2').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });
	    
	    $('#defaultdate3').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });
	    
	    $('#defaultdate4').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });
	    
	    $('#defaultdate5').datetimepicker
	    ({
		format: 'DD-MMM-YYYY',
	    });
	    
	    $(document).ready(function()
	    {
		FormWizard.init();
	    });
	    
	    function form_reset()
	    {
		$('.form12').trigger("reset");
	    }
	    
	</script>
	<script>
		    function removerow1(){
	    $(".removeButton1").on('click',function(){
	    var $row    = $(this).parents('.odd1');
	    $row.remove();
	    });
	    };
	$(document).ready(function()
	{
	    $("ul.pager li.next").click(function()
	    {
		var vall=$("#wizard ol li.active span").text();
		if (vall==4)
		{
		    var formData = new FormData($('#form_validation')[0]);
		    var lsl_sys_id=$("#lsl_sys_id").val();
		    $.ajax
		    ({
			url: '<?php  echo site_url('LogisticsController/MeasurementTransaction_Ajax')?>',
			type: 'POST',
			data: formData,
			dataType: "json",
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (json)
			{
			    if (json.error=='Y')
			    {
				alert('Enter the correct fields');
			    }
			    else
			    {
				review_complete(json.sys_id,json.sys_head_id,lsl_sys_id);
			    }
			}
		    });
		}
		
		if (vall==5)
		{
		    var formData = new FormData($('form#form_validation')[0]);
		    $.ajax
		    ({
			url: '<?php  echo site_url('LogisticsController/MeasurementTransaction_Ajax')?>',
			type: 'POST',
			data: formData,
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (returndata)
			{
			    
			}
		    });
		}
	    });
	    
	    $("form#form-contact").submit(function(event)
	    {
		var formData = new FormData($(this)[0]);
		$.ajax
		({
		    url: 'ajax_contact.php',
		    type: 'POST',
		    data: formData,
		    async: false,
		    cache: false,
		    contentType: false,
		    processData: false,
		    success: function (returndata)
		    {
			
		    }
		});
	    });
	}
	);
	
	function review_complete(sys_id,sys_head_id,lsl_sys_id)
	{
alert(sys_id);
	    $.ajax
	    ({
		url: '<?php  echo site_url("LogisticsController/Fetch_MeasurementTransaction")?>',
		type: 'POST',
		//dataType:"json",
		data: 'sys_id='+sys_id +'&sys_head_id='+sys_head_id+'&lsl_sys_id='+lsl_sys_id,
		//processData: false,
		success: function (resp)
		{
		
		    $("#confirmation_page").html(resp);
		    //$("#MH_CUST_AC_DESC1").val(json.MH_CUST_AC_DESC);
		    //$("#MH_CONTACT_PERSON1").val(json.MH_CONTACT_PERSON);
		    //$("#MH_ADD11").val(json.MH_ADD1);
		    //$("#MH_CT_CODE1").val(json.MH_CT_CODE);
		    //$("#MH_CONTACT_PERSON1").val(json.MH_CONTACT_PERSON);
		    //$("#MH_SALE_REF_TXN_CODE1").val(json.MH_SALE_REF_TXN_CODE);
		    //$("#MH_SALE_REF_TXN_NO1").val(json.MH_SALE_REF_TXN_NO);
		    //$("#ML_BUILD1").val(json.ML_BUILD);
		    //$("#ML_FLOOR1").val(json.ML_FLOOR);
		    //$("#ML_FLAT1").val(json.ML_FLAT);
		    //$("#ML_UNIT1").val(json.ML_UNIT);
		    //$("#ML_PRODUCT_CODE1").val(json.ML_PRODUCT_CODE);
		    //$("#ML_COLOR_CODE1").val(json.ML_COLOR_CODE);
		    //$("#ML_WIDTH1").val(json.ML_WIDTH);
		    //$("#ML_HEIGHT1").val(json.ML_HEIGHT);
		    //$("#ML_QTY1").val(json.ML_QTY);
		    //$("#ML_MOUNT_TYPE1").val(json.ML_MOUNT_TYPE);
		    //$("#ML_MOUNT_ON1").val(json.ML_MOUNT_ON);
		    //$("#ML_OPERATE1").val(json.ML_OPERATE);
		    //$("#ML_CONTROL1").val(json.ML_CONTROL);
		    //$("#ML_OPENING1").val(json.ML_OPENING);
		    //$("#ML_PELMET1").val(json.ML_PELMET);
		    //$("#ML_PROJECTION1").val(json.ML_PROJECTION);
		    //$("#ML_FASICA1").val(json.ML_FASCIA);
		    //$("#ML_REMARKS1").val(json.ML_REMARKS);
		    //$("#MH_TXN_CODE1").val(json.MH_TXN_CODE);
		    //$("#MH_TXN_NO1").val(json.MH_TXN_NO);
		    //$("#defaultdate5").val(json.MH_TXN_DT);
		}
	    });
	}
	//$("#save_add").click(function(){
	//    
	//	    $("#MH_CUST_AC_DESC").val();
	//	    $("#MH_CONTACT_PERSON").val();
	//	    $("#MH_ADD1").val();
	//	    $("#MH_CT_CODE").val();
	//	    $("#MH_CONTACT_PERSON").val();
	//	    $("#MH_SALE_REF_TXN_CODE").val();
	//	    $("#MH_SALE_REF_TXN_NO").val();
	//	    $("#ML_BUILD").val();
	//	    $("#ML_FLOOR").val();
	//	    $("#ML_FLAT").val();
	//	    $("#ML_UNIT").val();
	//	    $("#ML_PRODUCT_CODE").val();
	//	    $("#ML_COLOR_CODE").val();
	//	    $("#ML_WIDTH").val();
	//	    $("#ML_HEIGHT").val();
	//	    $("#ML_QTY").val();
	//	    $("#ML_MOUNT_TYPE").val();
	//	    $("#ML_MOUNT_ON").val();
	//	    $("#ML_OPERATE").val();
	//	    $("#ML_CONTROL").val();
	//	    $("#ML_OPENING").val();
	//	    $("#ML_PELMET").val();
	//	    $("#ML_PROJECTION").val();
	//	    $("#ML_FASICA").val();
	//	    $("#ML_REMARKS").val();
	//	    $("#MH_TXN_CODE").val();
	//	    $("#MH_TXN_NO").val();
	//	    $("#MH_TXN_CODE").val();
	//	    $("#MH_TXN_NO").val();
	//	    $("#defaultdate1").val();
	//});
	</script>
    </body>
</html>