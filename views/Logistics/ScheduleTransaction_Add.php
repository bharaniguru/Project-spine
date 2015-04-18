
	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Add Schedule Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Add Schedule Transaction in our spine<small> You may Add Schedule Transaction here...</small></h1>
		<!-- end page-header -->
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Add Schedule Transaction</h4>
			    </div><br>
			    <p style="color:red"><?php echo $status; ?></p>
			    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('LogisticsController/ScheduleTransaction_Add'); ?>" class="form-horizontal  form12">
			    <div class="col-md-12">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-3 control-label">Transaction</label>
					    <div class="col-md-7">
					       <input type="text" name="LSH_TXN_CODE" class="form-control" readonly value="SCH" placeholder="LSH_TXN_CODE"/>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Txn Date</label>
					    <div class="col-md-7">
					      <input type="text" id="defaultdate" name="LSH_TXN_DT" class="form-control" value="<?php echo $Fetch_Head[0]['LSH_TXN_DT'] ;?>"  placeholder="LSH_TXN_DT"/>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Vehicle Code</label>
					    <div class="col-md-7">
						<select class="form-control"  name="LSH_VEHICLE_CODE">
						    <option selected="selected" value="">Select</option>
						    <?php foreach($result1 as $row){?>
						    <option value="<?php echo $row['VEH_CODE']; ?>"<?php if($Fetch_Head[0]['LSH_VEHICLE_CODE']==$row['VEH_CODE']) echo "Selected"; ?> ><?php echo $row['VEH_DESC']; ?></option>
						    <?php } ?>
						</select>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Description</label>
					    <div class="col-md-7">
						<input type="text" name="LSH_DESC" class="form-control" value="<?php echo $Fetch_Head[0]['LSH_DESC'] ;?>"  placeholder="LSH_DESC"/>
					    </div>
					</div>
				    </div>
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-3 control-label">Txn Num</label>
					    <div class="col-md-7">
						<input type="text" name="LSH_TXN_NO" class="form-control" value="<?php echo $Fetch_Head[0]['LSH_TXN_NO'] ;?>"  placeholder="LSH_TXN_NO"/>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Appointment Dt</label>
					    <div class="col-md-7">
						<input type="text" id="defaultdate1" name="LSH_APPOINT_DT" value="<?php echo $Fetch_Head[0]['LSH_APPOINT_DT'] ;?>"  class="form-control" placeholder="LSH_APPOINT_DT"/>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Team Code</label>
					    <div class="col-md-7">
						<select class="form-control"  name="LSH_TEAM_CODE">
						    <option selected="selected" value="">Select</option>
						    <?php foreach($result2 as $row) {?>
						    <option value="<?php echo $row['LT_CODE']?>"<?php if($Fetch_Head[0]['LSH_TEAM_CODE']==$row['LT_CODE']) echo "Selected"; ?>><?php echo $row['LT_DESC']?></option>
						    <?php } ?>
						</select>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Status</label>
					    <div class="col-md-7">
						<input type="text" name="LSH_STATUS" class="form-control" value="<?php echo $Fetch_Head[0]['LSH_STATUS'] ;?>"  placeholder="LSH_STATUS"/>
					    </div>
					</div>
				    </div>
				</div>
				<div class="col-md-12 col-md-offset-4 p-t-10">
				    <fieldset>
					<input type="submit" class="btn btn-sm btn-success" name="Save" value="Save">
					<button class="btn btn-sm btn-info" type="button" onclick="form_reset();">Reset</button>
					<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
				    </fieldset>
				</div>
			    </form>
			    <div class="panel-body">
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>Txn Code</th>
					    <th>Doc No</th>
					    <th>Date</th>
					    <th>Customer Name</th>
					    <th>Contact Person</th>
					    <th>ContactNo</th>
					    <th>Country</th>
					    <th>State</th>
					    <th>City</th>
					    <th>City Area</th>
					    <th>Requested By</th>
					    <th>Jobs</th>
					    <th>Action</th>
					</tr>
				    </thead>
				    <tbody>
					<?php foreach($result as $row){?>
					<tr>
					    <td>
						<?php echo $row['LSL_REF_TXN_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_REF_TXN_NO']?>
					    </td>
					    <td>
						<?php echo $row['LSL_REF_TXN_DT']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CUST_AC_DESC']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CONTACT_PERSON']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CONTACT_NO']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CN_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_ST_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CT_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LST_CT_AREA_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_REQUESTED_BY']?>
					    </td>
					     <td>
						<?php echo $row['LSL_JOB_CODET']?>
					    </td>
					    <td>
						<input type="checkbox" name="SCHEDULE_ACTIVE" value="Y" checked="checked">
					    </td>
					</tr>
					<?php }?>
				    </tbody>
				</table>
			    </div>
			</div>
			<!-- end panel -->
		    </div>
		    <!-- end col-10 -->
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
	datepicker();
	    $(document).ready(function()
	    {
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
			LSH_TXN_CODE:
			{
			    message: 'The LSH_TXN_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LSH_TXN_CODE is required and can\'t be empty'
				},
			    }
			},
			
			LSH_TXN_DT:
			{
			    message: 'The LSH_TXN_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LSH_TXN_DT is required and can\'t be empty'
				}
			    }
			},
			LSH_VEHICLE_CODE:
			{
			    message: 'The LSH_VEHICLE_CODE is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The LSH_VEHICLE_CODE is required and can\'t be empty'
				}
			    }
			},
			LSH_DESC:
			{
			    message: 'The LSH_DESC is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The LSH_DESC is required and can\'t be empty'
				}
			    }
			},
			LSH_TXN_NO:
			{
			    message: 'The LSH_TXN_NO is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LSH_TXN_NO is required and can\'t be empty'
				}
			    }
			},
			LSH_APPOINT_DT:
			{
			    message: 'The LSH_APPOINT_DT is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LSH_APPOINT_DT is required and can\'t be empty'
				}
			    }
			},
			LSH_TEAM_CODE:
			{
			    message: 'The LSH_TEAM_CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LSH_TEAM_CODE is required and can\'t be empty'
				}
			    }
			},
			LSH_STATUS:
			{
			    message: 'The LSH_STATUS is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The LSH_STATUS is required and can\'t be empty'
				}
			    }
			},
			
		    }
		});
	    });
	    $(document).ready(function()
	    {
		TableManageResponsive.init();
	    });
	    
	    function datepicker()
	    {
		var date = new Date();
		var nextdate=date.setDate(date.getDate());
		
		$('#defaultdate').datetimepicker
		({
		    format: 'DD-MMM-YYYY',
		    minDate:nextdate
		});
		
		$('#defaultdate1').datetimepicker
		({
		    format: 'DD-MMM-YYYY',
		    minDate:nextdate
		});
	    }
	    
	    function form_reset()
	    {
		$('.form12').trigger("reset");
	    }
	    
	</script>
    </body>
</html>