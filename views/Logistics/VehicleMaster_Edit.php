	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li>Vehicle Master</li>
		    <li class="active">Edit Vehicle Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Edit Vehicle Master<small> Enter the correct details here...</small></h1>
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
				<h4 class="panel-title">Edit Vehicle Master</h4>
			    </div>
			    <div class="panel-body">
				<p style="color:red"><?php echo $error; ?></p>
				<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('LogisticsController/VehicleMaster_Edit'); ?>" class="form-horizontal  form12">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-4 control-label">Vehicle Code</label>
					    <div class="col-md-7">
						<input type="text" name="VEH_CODE" id="VEH_CODE" readonly="" class="form-control" value="<?php echo $result[0]['VEH_CODE'] ;?>" placeholder="VEH_CODE" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-4 control-label">Description</label>
					    <div class="col-md-7">
						<input type="text" name="VEH_DESC" id="VEH_DESC" class="form-control" placeholder="VEH_DESC" value="<?php echo $result[0]['VEH_DESC'] ;?>"/>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-4 control-label">City</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control" name="VEH_CITY_CODE">
							<?php foreach($result1 as $row){?>
							    <option value="<?php echo $row['CT_CODE']; ?>"<?php if($result[0]['VEH_CITY_CODE']==$row['CT_CODE']) echo "Selected"; ?> ><?php echo $row['CT_DESC']; ?></option>
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
						<input type="checkbox" name="VEH_ACTIVE_YN" <?php echo ($result[0]['VEH_ACTIVE_YN']=='Y' ? 'checked' : '');?> >
						<i></i>
						Active?
					    </label>
					</section>
				    </div><br>
				    <div class=" col-md-12">
					<ul class="nav nav-pills">
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
							<input type="text" name="VEH_MAKE" id="VEH_MAKE" class="form-control" placeholder="VEH_MAKE" value="<?php echo $result[0]['VEH_MAKE'] ;?>" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Vehicle Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_TYPE">
								<?php foreach($result2 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']; ?>"<?php if($result[0]['VEH_TYPE']==$row['VSL_CODE']) echo "Selected"; ?> ><?php echo $row['VSL_DESC']; ?></option>
								<?php }?>
							    </select>
							</section>
						    </div>    
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Fuel Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_FUEL_TYPE">
								<?php foreach($result3 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']; ?>"<?php if($result[0]['VEH_FUEL_TYPE']==$row['VSL_CODE']) echo "Selected"; ?> ><?php echo $row['VSL_DESC']; ?></option>
								<?php } ?>
							    </select>
							</section>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Vehicle Seat</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_NO_OF_SEATER" id="VEH_NO_OF_SEATER" class="form-control" placeholder="VEH_NO_OF_SEATER" value="<?php echo $result[0]['VEH_NO_OF_SEATER'] ;?>" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Year</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_YEAR" id="VEH_YEAR" class="form-control" placeholder="VEH_YEAR" value="<?php echo $result[0]['VEH_YEAR'] ;?>" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Color</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_COLOR" id="VEH_COLOR" class="form-control" placeholder="VEH_COLOR" value="<?php echo $result[0]['VEH_COLOR'] ;?>" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Engine No</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_ENGINE_NO" id="VEH_ENGINE_NO" class="form-control" placeholder="VEH_ENGINE_NO" value="<?php echo $result[0]['VEH_ENGINE_NO'] ;?>"/>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Chassis No</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_CHASSIS_NO" id="VEH_CHASSIS_NO" class="form-control" placeholder="VEH_CHASSIS_NO" value="<?php echo $result[0]['VEH_CHASSIS_NO'] ;?>"/>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Meter Reading</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_METER_READING" id="VEH_METER_READING" class="form-control" placeholder="VEH_METER_READING" value="<?php echo $result[0]['VEH_METER_READING'] ;?>" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Transmission</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TRANSMISSION" id="VEH_TRANSMISSION" class="form-control" placeholder="VEH_TRANSMISSION" value="<?php echo $result[0]['VEH_TRANSMISSION'] ;?>"/>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Load Capasity</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_LOAD_CAPASITY" id="VEH_LOAD_CAPASITY" class="form-control" placeholder="VEH_LOAD_CAPASITY" value="<?php echo $result[0]['VEH_LOAD_CAPASITY'] ;?>" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Purchase Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_PURCHASE_DT" id="VEH_PURCHASE_DT" class="form-control default_date" placeholder="VEH_PURCHASE_DT" value="<?php echo $result[0]['VEH_PURCHASE_DT'] ;?>"/>
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="form-group">
						    <label class="col-md-2 control-label">Insurance Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_INSURANCE_TYPE">
								<?php foreach($result4 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']; ?>"<?php if($result[0]['VEH_INSURANCE_TYPE']==$row['VSL_CODE']) echo "Selected"; ?> ><?php echo $row['VSL_DESC']; ?></option>
								<?php } ?>
							    </select>
							</section>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Company Name</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_COMP_NAME" id="VEH_INSURANCE_COMP_NAME" value="<?php echo $result[0]['VEH_INSURANCE_COMP_NAME'] ;?>" class="form-control" placeholder="VEH_INSURANCE_COMP_NAME" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Number</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_NO" id="VEH_INSURANCE_POLICY_NO" value="<?php echo $result[0]['VEH_INSURANCE_POLICY_NO'] ;?>" class="form-control" placeholder="VEH_INSURANCE_POLICY_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Start Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_DT" id="VEH_INSURANCE_POLICY_DT" value="<?php echo $result[0]['VEH_INSURANCE_POLICY_DT'] ;?>" class="form-control default_date" placeholder="VEH_INSURANCE_POLICY_DT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Expiry Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_EX_DT" id="VEH_INSURANCE_POLICY_EX_DT" value="<?php echo $result[0]['VEH_INSURANCE_POLICY_EX_DT'] ;?>" class="form-control default_date" placeholder="VEH_INSURANCE_POLICY_EX_DT" />
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-3" class="tab-pane fade">
						<div class="form-group">
						    <label class="col-md-2 control-label">Reg Number</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_REGESTRATION_NO" id="VEH_REGESTRATION_NO" value="<?php echo $result[0]['VEH_REGISTRATION_NO'] ;?>" class="form-control" placeholder="VEH_REGISTRATION_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Reg Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_REGESTRATION_DT" id="VEH_REGESTRATION_DT" value="<?php echo $result[0]['VEH_REGISTRATION_DT'] ;?>" class="form-control default_date" placeholder="VEH_REGISTRATION_DT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Reg Expiry Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_REGISTRATION_EX_DT" id="VEH_REGISTRATION_EX_DT" value="<?php echo $result[0]['VEH_REGISTRATION_EX_DT'] ;?>"  class="form-control default_date" placeholder="VEH_REGISTRATION_EX_DT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Policy Expiry Date</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_INSURANCE_POLICY_EX_DT" id="VEH_INSURANCE_POLICY_EX_DT" value="<?php echo $result[0]['VEH_INSURANCE_POLICY_EX_DT'] ;?>" class="form-control default_date" placeholder="VEH_INSURANCE_POLICY_EX_DT" />
						    </div>
						</div>
						<br>
						<div class="form-group">
						    <label class="col-md-2 control-label">Toll Card Type</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TOLL_CARD_TYPE" id="VEH_TOLL_CARD_TYPE" value="<?php echo $result[0]['VEH_TOLL_CARD_TYPE'] ;?>" class="form-control" placeholder="VEH_TOLL_CARD_TYPE" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Toll Card Number</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TOLL_CARD_NO" id="VEH_TOLL_CARD_NO" class="form-control" value="<?php echo $result[0]['VEH_TOLL_CARD_NO'] ;?>" placeholder="VEH_TOLL_CARD_NO" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Toll Card Exp Dt</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_TOLL_CARD_EX_DT" id="VEH_TOLL_CARD_EX_DT" value="<?php echo $result[0]['VEH_TOLL_CARD_EX_DT'] ;?>" class="form-control default_date" placeholder="VEH_TOLL_CARD_EX_DT" />
						    </div>
						</div>
						<br>
						<div class="form-group">
						    <label class="col-md-2 control-label">Maintained By</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_MAINTENENCE_BY" id="VEH_MAINTENENCE_BY" value="<?php echo $result[0]['VEH_MAINTENENCE_BY'] ;?>" class="form-control" placeholder="VEH_MAINTENENCE_BY" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Adv On Vehicle</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_ADVERTISEMENT" id="VEH_ADVERTISEMENT" value="<?php echo $result[0]['VEH_ADVERTISEMENT'] ;?>" class="form-control" placeholder="VEH_ADVERTISEMENT" />
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-md-2 control-label">Advertisement Dt</label>
						    <div class="col-md-4">
							<input type="text" name="VEH_ADVERTISEMENT_DT" id="VEH_ADVERTISEMENT_DT" value="<?php echo $result[0]['VEH_ADVERTISEMENT_DT'] ;?>" class="form-control default_date" placeholder="VEH_ADVERTISEMENT_DT" />
						    </div>
						</div> 
					    </div>
					    <div id="nav-pills-tab-4" class="tab-pane fade">
						<div class="form-group">
						    <label class="col-md-2 control-label">User Type</label>
						    <div class="col-md-4">
							<section class="col col-8">
							    <select class="form-control" name="VEH_USE_TYPE">
								<?php foreach($result5 as $row) {?>
								    <option value="<?php echo $row['VSL_CODE']; ?>"<?php if($result[0]['VEH_USE_TYPE']==$row['VSL_CODE']) echo "Selected"; ?> ><?php echo $row['VSL_DESC']; ?></option>
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
								<?php foreach($result6  as $row) {?>
								    <option value="<?php echo $row['LGE_CODE']; ?>"<?php if($result[0]['VEH_USER_CODE']==$row['LGE_CODE']) echo "Selected"; ?> ><?php echo $row['LGE_NAME']; ?></option>
								<?php } ?>
							    </select>
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
									<input type="text" class="form-control" id="VEHI_CODE" name="VEHI_CODE[]">
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
									<input type="text" class="form-control"  name="VEHI_CODE[]">
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
						<button type="button" class="btn btn-default" class="btn btn-lg">Add Attachment</button>
					    </div>
					</div>
				    </div>
				    <div class="col-md-offset-1 col-md-7">
					<fieldset>
					    <div class="col-md-offset-2 col-md-5">
						<input type="submit" class="btn btn-sm btn-success" name="Save" value="Save">
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
			cn_code:
			{
			    message: 'The ST_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The ST_CODE is required and can\'t be empty'
				}
			    }
			},
			cn_desc:
			{
			    message: 'The ST_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The ST_CODE is required and can\'t be empty'
				}
			    }
			},
			cn_latitude:
			{
			    message: 'The ST_CODE is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The ST_CODE is required and can\'t be empty'
				}
			    }
			},
			cn_longitude:
			{
			    message: 'The ST_CODE is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The ST_CODE is required and can\'t be empty'
				}
			    }
			},
			cn_active_yn:
			{
			    message: 'The ST_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The ST_CODE is required and can\'t be empty'
				}
			    }
			},
		    }
		});
	    });
	    
	    function datepicker()
	    {
		$('.default_date').datetimepicker
		({
		    format: 'DD-MMM-YYYY'
		})
	    }
	    
	</script>
    </body>
</html>

