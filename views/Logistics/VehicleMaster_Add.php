	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li>Vehicle Master</li>
		    <li class="active">Add Vehicle Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Add Vehicle Master<small> Enter the correct details here...</small></h1>
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
				<h4 class="panel-title">Add Vehicle Master</h4>
			    </div>
			    <div class="panel-body">
				<p style="color:red"><?php echo $error; ?></p>
				<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('LogisticsController/VehicleMaster_Add'); ?>" class="form-horizontal  form12">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-4 control-label">Vehicle Code</label>
					    <div class="col-md-7">
						<input type="text" onkeyup="nospaces(this)" name="VEH_CODE" id="VEH_CODE" class="form-control" placeholder="VEH_CODE" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-4 control-label">Description</label>
					    <div class="col-md-7">
						<input type="text" name="VEH_DESC" id="VEH_DESC" class="form-control" placeholder="VEH_DESC" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-4 control-label">City</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control" name="VEH_CITY_CODE">
							<option selected="selected" value="">Select</option>
							<?php foreach($result1 as $row) {?>
							<option value="<?php echo $row['CT_CODE']?>"><?php echo $row['CT_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>    
					</div>
				    </div>
				    <div class="col-md-6">
					<section class="col col-2"></section>
					    <section class="col col-6">
					    <label class="checkbox">
						<input type="checkbox" value="Y" name="VEH_ACTIVE_YN" checked="checked">
						<i></i>
						Active?
					    </label>
					</section>
				    </div><br>
				    <div class=" col-md-12">
					<ul class="nav nav-pills tab_nav">
					    <li class="active">
						<a data-toggle="tab" href="#nav-pills-tab-1">Vehicle Info</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-2">Insurance Info</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-3">Registration Info</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-4">User Info</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-5">Attachments</a>
					    </li>
					</ul>
					<div class="tab-content">
					    <div id="nav-pills-tab-1" class="tab-pane fade active in" >
						<div class="form-group">
						    <label class="col-md-2 control-label">Make</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_MAKE" id="VEH_MAKE" class="form-control" placeholder="VEH_MAKE" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Vehicle Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_TYPE">
								<option selected="selected" value="">Select</option>
								    <?php foreach($result2 as $row) {?>
								<option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
							    </select>
							</section>
						    </div>    
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Fuel Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_FUEL_TYPE">
								<option selected="selected" value="">Select</option>
								    <?php foreach($result3 as $row) {?>
								<option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
							    </select>
							</section>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Vehicle Seat</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_NO_OF_SEATER" id="VEH_NO_OF_SEATER" class="form-control" placeholder="VEH_NO_OF_SEATER" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Year</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_YEAR" id="VEH_YEAR" class="form-control" placeholder="VEH_YEAR" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Color</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_COLOR" id="VEH_COLOR" class="form-control" placeholder="VEH_COLOR" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Engine No</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_ENGINE_NO" id="VEH_ENGINE_NO" class="form-control" placeholder="VEH_ENGINE_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Chassis No</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_CHASSIS_NO" id="VEH_CHASSIS_NO" class="form-control" placeholder="VEH_CHASSIS_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Meter Reading</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_METER_READING" id="VEH_METER_READING" class="form-control" placeholder="VEH_METER_READING" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Transmission</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TRANSMISSION" id="VEH_TRANSMISSION" class="form-control" placeholder="VEH_TRANSMISSION" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Load Capasity</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_LOAD_CAPASITY" id="VEH_LOAD_CAPASITY" class="form-control" placeholder="VEH_LOAD_CAPASITY" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Purchase Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_PURCHASE_DT" id="VEH_PURCHASE_DT" class="form-control default_date" placeholder="VEH_PURCHASE_DT" />
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="form-group">
						    <label class="col-md-2 control-label">Insurance Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_INSURANCE_TYPE">
								<option selected="selected" value="">Select</option>
								    <?php foreach($result4 as $row) {?>
								<option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
							    </select>
							</section>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Company Name</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_COMP_NAME" id="VEH_INSURANCE_COMP_NAME" class="form-control" placeholder="VEH_INSURANCE_COMP_NAME" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Number</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_NAME" id="VEH_INSURANCE_POLICY_NAME" class="form-control" placeholder="VEH_INSURANCE_POLICY_NAME" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Start Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_DT" id="VEH_INSURANCE_POLICY_DT" class="form-control default_date" placeholder="VEH_INSURANCE_POLICY_DT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Expiry Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_EX_DT" id="VEH_INSURANCE_POLICY_EX_DT" class="form-control default_date" placeholder="VEH_INSURANCE_POLICY_EX_DT" />
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-3" class="tab-pane fade">
						<div class="form-group">
						    <label class="col-md-2 control-label">Reg Number</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_REGESTRATION_NO" id="VEH_REGESTRATION_NO" class="form-control" placeholder="VEH_REGESTRATION_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Reg Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_REGESTRATION_DT" id="VEH_REGESTRATION_DT" class="form-control default_date" placeholder="VEH_REGESTRATION_DT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Reg Expiry Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_REGISTRATION_EX_DT" id="VEH_REGISTRATION_EX_DT" class="form-control default_date" placeholder="VEH_REGISTRATION_EX_DT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Expiry Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_EX_DT" id="VEH_INSURANCE_POLICY_EX_DT" class="form-control default_date" placeholder="VEH_INSURANCE_POLICY_EX_DT" />
						    </div>
						</div>
						<br>
						<div class="form-group">
						    <label class="col-md-2 control-label">Toll Card Type</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TOLL_CARD_TYPE" id="VEH_TOLL_CARD_TYPE" class="form-control" placeholder="VEH_TOLL_CARD_TYPE" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Toll Card Number</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TOLL_CARD_NO" id="VEH_TOLL_CARD_NO" class="form-control" placeholder="VEH_TOLL_CARD_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Toll Card Exp Dt</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TOLL_CARD_EX_DT" id="VEH_TOLL_CARD_EX_DT" class="form-control default_date" placeholder="VEH_TOLL_CARD_EX_DT" />
						    </div>
						</div>
						<br>
						<div class="form-group">
						    <label class="col-md-2 control-label">Maintained By</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_MAINTAINENCE_BY" id="VEH_MAINTAINENCE_BY" class="form-control" placeholder="VEH_MAINTAINENCE_BY" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Adv On Vehicle</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_ADVERTISEMENT" id="VEH_ADVERTISEMENT" class="form-control" placeholder="VEH_ADVERTISEMENT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Advertisement Dt</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_ADVERTISEMENT_DT" id="VEH_ADVERTISEMENT_DT" class="form-control default_date" placeholder="VEH_ADVERTISEMENT_DT" />
						    </div>
						</div> 
					    </div>
					    <div id="nav-pills-tab-4" class="tab-pane fade">
						<div class="form-group">
						    <label class="col-md-2 control-label">User Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_USE_TYPE">
								<option selected="selected" value="">Select</option>
								    <?php foreach($result5 as $row) {?>
								<option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
								    <?php } ?>
							    </select>
							</section>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">User</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_CODE_TYPE">
								<option selected="selected" value="">Select</option>
								<?php foreach($result6 as $row) {?>
								    <option value="<?php echo $row['LGE_CODE']?>"><?php echo $row['LGE_NAME']?></option>
								<?php } ?>
							    </select>
							</section>
							</section>
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-5" class="tab-pane fade">
						<div class="row">
						    <div class="table-responsive">
							<table class="table table-bordered">
							    <thead>
								<tr>
								    <th>Vehicle Code</th>
								    <th>Sr No</th>
								    <th>File Name</th>
								    <th>File Size</th>
								    <th>Description</th>
								    <th>Action</th>
								</tr>
							    </thead>
							    <tbody>
								<input type="hidden" name="row_contains"  id="row_contains" value="1">
								<tr class="odd">
								    <input type="hidden" name="add_1" value="1" >
								    <input type="hidden" name="add1"  value="1" >
								    <td>
									<input type="text" class="form-control" readonly id="VEHI_CODE" name="VEHI_CODE[]">
								    </td>
								    <td>
									<input type="text" class="form-control" name="VEH_SR_NO[]">
								    </td>
								    <td>
									<input type="file" name="imgattachment">
								    </td>
								    <td>
									<input type="text" class="form-control" name="VEH_FILE_SIZE[]">
								    </td>
								    <td>
									<input type="text" class="form-control" name="VEHI_DESC[]">
								    </td>
								    <td>
									<button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button>
								    </td>
								</tr>
								<tr class="odd hide" id="optionTemplate">
								    <input type="hidden" name="add" value="1" >
								    <input type="hidden" name="add1" value="1" >
								    <td>
									<input type="text" class="form-control" id="VEHI_CODE" name="VEHI_CODE[]">
								    </td>
								    <td>
									<input type="text" class="form-control" name="VEH_SR_NO[]">
								    </td>
								    <td>
									<input type="file" name="attachment"/>
								    </td>
								    <td>
									<input type="text" class="form-control" name="VEH_FILE_SIZE[]">
								    </td>
								    <td>
									<input type="text" class="form-control" name="VEHI_DESC[]">
								    </td>
								    <td>
									<button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox">Remove</button>
								    </td>
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
						<input type="submit" class="btn btn-sm btn-success" name="Save" value="Save">
						<button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
						<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
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
	    $(document).ready(function()
	    {
		datepicker();
		$('#form_validation').bootstrapValidator
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
			VEH_CODE:
			{
			    message: 'The VEHICLE CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEHICLE CODE is required and can\'t be empty'
				},
				regexp:
				{
				    regexp: /^[A-Z][0-9]+$/,
				    message: 'The VEHICLE CODE must be Capital Alphabet and Number, White Space not allowed'
				},
				remote:
				{
				    message: 'VALUE ALREADY EXISTS',
				    url: '<?php  echo site_url('LogisticsController/VehicleValidation_Ajax')?>',
				    type: 'POST'
				}
			    }
			},
			VEH_DESC:
			{
			    message: 'The VEH_DESC is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The ST_CODE is required and can\'t be empty'
				}
			    }
			},
			VEH_CITY_CODE:
			{
			    message: 'The VEH_CITY_CODE is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The VEH_CITY_CODE is required and can\'t be empty'
				}
			    }
			},
			checkbox:
			{
			    message: 'The checkbox is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The checkbox is required and can\'t be empty'
				}
			    }
			},
			VEH_MAKE:
			{
			    message: 'The VEH_MAKE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_MAKE is required and can\'t be empty'
				}
			    }
			},
			VEH_TYPE:
			{
			    message: 'The VEH_TYPE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_TYPE is required and can\'t be empty'
				}
			    }
			},
			VEH_FUEL_TYPE:
			{
			    message: 'The VEH_FUEL_TYPE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_FUEL_TYPE is required and can\'t be empty'
				}
			    }
			},
			
			VEH_NO_OF_SEATER:
			{
			     message: 'The VEH_NO_OF_SEATER is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_NO_OF_SEATER is required and can\'t be empty'
				}
			    }
			},
			
			VEH_YEAR:
			{
			    message: 'The VEH_YEAR is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_YEAR is required and can\'t be empty'
				}
			    }
			},
			VEH_COLOR:
			{
			    message: 'The VEH_COLOR is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_COLOR is required and can\'t be empty'
				}
			    }
			},
			VEH_ENGINE_NO:
			{
			    message: 'The VEH_ENGINE_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_ENGINE_NO is required and can\'t be empty'
				}
			    }
			},
			VEH_CHASSIS_NO:
			{
			    message: 'The VEH_CHASSIS_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_CHASSIS_NO is required and can\'t be empty'
				}
			    }
			},
			VEH_METER_READING:
			{
			    message: 'The VEH_METER_READING is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_METER_READING is required and can\'t be empty'
				}
			    }
			},
			VEH_TRANSMISSION:
			{
			    message: 'The VEH_TRANSMISSION is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_TRANSMISSION is required and can\'t be empty'
				}
			    }
			},
			VEH_LOAD_CAPASITY:
			{
			    message: 'The VEH_LOAD_CAPASITY is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_LOAD_CAPASITY is required and can\'t be empty'
				}
			    }
			},
			VEH_PURCHASE_DT:
			{
			    message: 'The VEH_PURCHASE_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_PURCHASE_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_INSURANCE_TYPE:
			{
			    message: 'The VEH_INSURANCE_TYPE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_INSURANCE_TYPE is required and can\'t be empty'
				}
			    }
			},
			VEH_INSURANCE_COMP_NAME:
			{
			    message: 'The VEH_INSURANCE_COMP_NAME is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_INSURANCE_COMP_NAME is required and can\'t be empty'
				}
			    }
			},
			VEH_INSURANCE_POLICY_NAME:
			{
			    message: 'The VEH_INSURANCE_POLICY_NAME is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_INSURANCE_POLICY_NAME is required and can\'t be empty'
				}
			    }
			},
			VEH_INSURANCE_POLICY_DT:
			{
			    message: 'The VEH_INSURANCE_POLICY_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_INSURANCE_POLICY_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_INSURANCE_POLICY_EX_DT:
			{
			    message: 'The VEH_INSURANCE_POLICY_EX_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_INSURANCE_POLICY_EX_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_REGESTRATION_NO:
			{
			    message: 'The VEH_REGESTRATION_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_REGESTRATION_NO is required and can\'t be empty'
				}
			    }
			},
			VEH_REGESTRATION_DT:
			{
			    message: 'The VEH_REGESTRATION_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_REGESTRATION_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_REGISTRATION_EX_DT:
			{
			    message: 'The VEH_REGISTRATION_EX_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_REGISTRATION_EX_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_TOLL_CARD_TYPE:
			{
			    message: 'The VEH_TOLL_CARD_TYPE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_TOLL_CARD_TYPE is required and can\'t be empty'
				}
			    }
			},
			VEH_TOLL_CARD_NO:
			{
			    message: 'The VEH_TOLL_CARD_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_TOLL_CARD_NO is required and can\'t be empty'
				}
			    }
			},
			VEH_TOLL_CARD_EX_DT:
			{
			    message: 'The VEH_TOLL_CARD_EX_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_TOLL_CARD_EX_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_MAINTAINENCE_BY:
			{
			    message: 'The VEH_MAINTAINENCE_BY is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_MAINTAINENCE_BY is required and can\'t be empty'
				}
			    }
			},
			VEH_ADVERTISEMENT:
			{
			    message: 'The VEH_ADVERTISEMENT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_ADVERTISEMENT is required and can\'t be empty'
				}
			    }
			},
			VEH_ADVERTISEMENT_DT:
			{
			    message: 'The VEH_ADVERTISEMENT_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_ADVERTISEMENT_DT is required and can\'t be empty'
				}
			    }
			},
			VEH_USE_TYPE:
			{
			    message: 'The VEH_USE_TYPE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_USE_TYPE is required and can\'t be empty'
				}
			    }
			},
			VEH_CODE_TYPE:
			{
			    message: 'The VEH_CODE_TYPE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The VEH_CODE_TYPE is required and can\'t be empty'
				}
			    }
			},
		    }
		});
	    });
	    
	    $("#VEH_CODE").blur(function()
	    {
		var VEH_CODE=$(this).val();
	        $("#VEHI_CODE").attr("value",VEH_CODE);
	    });
	    
	    function form_reset()
	    {
		$('.form12').trigger("reset");
	    }
	    
	    function datepicker()
	    {
		$('.default_date').datetimepicker
		({
		    format: 'DD-MMM-YYYY'
		})
	    }
	    
	    var row_count=2;
	    $('.btn-add').click(function()
	    {
		var $template = $('#optionTemplate'),
		$clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
		$("#row_contains").val(row_count);
		row_count++;
		removerow();
	    });
	    
	    function removerow()
	    {
		$(".removeButton").on('click',function()
		{
		    var $row    = $(this).parents('.odd');
		    $row.remove();
		});
	    };
	    
	</script>
    </body>
</html>

