	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li>Team Master</li>
		    <li class="active">Edit Team Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Edit Team Master<small> Enter the correct details here...</small></h1>
		<!-- end page-header -->
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-12 -->
		    <div class="col-md-12">
			<!-- begin panel -->
			<p style="color:red"><?php echo $error;?></p>
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Edit Team Master</h4>
			    </div>
			    <div class="panel-body">
				<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('LogisticsController/TeamMaster_Edit/'.$result[0]['LGE_CODE']);?>" class="form-horizontal">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-3 control-label">Employee Code</label>
					    <div class="col-md-7">
						<input type="text" name="LGE_CODE" readonly="" id="LGE_CODE" value="<?php echo $result[0]['LGE_CODE'] ;?>"class="form-control" placeholder="LGE_CODE" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">EmployeeName</label>
					    <div class="col-md-7">
						<input type="text" name="LGE_NAME" id="LGE_NAME" value="<?php echo $result[0]['LGE_NAME'] ;?>" class="form-control" placeholder="LGE_NAME" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Cell Phone</label>
					    <div class="col-md-7">
						<input type="text" name="LGE_CELL_PHONE"  value="<?php echo $result[0]['LGE_CELL_PHONE'] ;?>" class="form-control" placeholder="LGE_CELL_PHONE" />
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Designation</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control" name="LGE_DESIG">
							<?php foreach($result1 as $row) {?>
							<option value="<?php echo $row['VSL_CODE']?>"<?php if ($row['VSL_CODE']==$result[0]['LGE_DESIG']) echo 'selected';?>><?php echo $row['VSL_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Nationality</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control"  name="LGE_NATIONALITY">
							<?php foreach($result2 as $row){?>
							<option value="<?php echo $row['VSL_CODE']?>"<?php if ($row['VSL_CODE']==$result[0]['LGE_NATIONALITY']) echo 'selected';?>><?php echo $row['VSL_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Date of Birth</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <input type="text" placeholder="LGE_DOB" name="LGE_DOB"  value="<?php echo $result[0]['LGE_DOB'] ;?>"  class="form-control" id="defaultdate">
						</section>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Team</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control" name="LGE_TEAM_CODE">
							<?php foreach($result3 as $row) {?>
							<option value="<?php echo $row['LT_CODE']?>"<?php if($row['LT_CODE']==$result[0]['LGE_TEAM_CODE']) echo 'selected' ?>><?php echo $row['LT_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">City</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control"  name="LGE_CITY_CODE">
							<?php foreach($result4 as $row) {?>
							<option value="<?php echo $row['CT_CODE']?>" <?php if ($row['CT_CODE']==$result[0]['LGE_CITY_CODE']) echo 'selected'?>><?php echo $row['CT_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">From Date</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <input type="text" placeholder="LGE_FROM_DT" name="LGE_FROM_DT" value="<?php echo $result[0]['LGE_FROM_DT'] ;?>" class="form-control " id="defaultdate1">
						</section>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Upto Date</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <input type="text" placeholder="LGE_UPTO_DT" name="LGE_UPTO_DT" value="<?php echo $result[0]['LGE_UPTO_DT'] ;?>" class="form-control" id="defaultdate2">
						</section>
					    </div>
					</div>
				    </div>
				    <div class="col-md-3">
					<div class="col col-6">
					    <div class="row">
						<section class="col col-2"></section>
						<section class="col col-6">
						    <label class="checkbox">
							<input type="checkbox" name="TEAM_ACTIVE" value="Y" <?php echo ($result[0]['LGE_ACTIVE_YN']=='Y' ? 'checked' : '');?> >
							<i></i>
							Active?
						    </label>
						</section>
					    </div> 
					    <div class="row">
						<section class="col col-2"></section>
						<section class="col col-6">
						    <img src="<?php echo $image_url.$result[0]['LGE_IMAGE_FILE']; ?>" class="superbox-img previewimage" id="dummy1">
						</section>
					    </div><br>
					    <div class="row">
						<section class="col col-2"></section>
						<section class="col col-6">
						    <input type="file" onchange="attachment();" name="image" id="preview">
						    <input type="hidden" name="oldfile" value="<?php echo $result[0]['LGE_IMAGE_FILE'];?>">
						</section>
					    </div>
					</div>
				    </div>
				    <div class="col-md-12 col-md-offset-3 p-t-10">
					<fieldset>
					    <input type="submit" class="btn btn-sm btn-success" value="Save" name="save">
					    <a class="btn btn-sm btn-danger" href="<?php echo site_url('LogisticsController/TeamMaster_View'); ?>">Cancel</a>
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
			LGE_NAME:
			{
			    message: 'The EMPLOYEE NAME is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The EMPLOYEE NAME is required and can\'t be empty'
				}
			    }
			},
			LGE_CELL_PHONE:
			{
			    message: 'The CELL PHONE is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The CELL PHONE NUMBER is required and can\'t be empty'
				}
			    }
			},
			LGE_DESIG:
			{
			    message: 'The DESIGNATION is not valid',
			    validators:
			    {
		                notEmpty:
				{
				    message: 'The DESIGNATION is required and can\'t be empty'
				}
			    }
			},
			LGE_NATIONALITY:
			{
			    message: 'The NATIONALITY is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The NATIONALITY is required and can\'t be empty'
				}
			    }
			},
			LGE_DOB:
			{
			    message: 'The DOB is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The DOB is required and can\'t be empty'
				}
			    }
			},
			LGE_TEAM_CODE:
			{
			    message: 'The TEAM is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The TEAM is required and can\'t be empty'
				}
			    }
			},
			LGE_CITY_CODE:
			{
			    message: 'The CITY is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The CITY is required and can\'t be empty'
				}
			    }
			},
			LGE_FROM_DT:
			{
			    message: 'The FROM DATE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The FROM DATE is required and can\'t be empty'
				}
			    }
			},
			LGE_UPTO_DT:
			{
			    message: 'The UPTO DATE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The UPTO DATE is required and can\'t be empty'
				}
			    }
			},
		    }
		});
	    });
	    function attachment()
	    {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("preview").files[0]);
		oFReader.onload = function (oFREvent)
		{
		    var data=document.getElementById("dummy1").src = oFREvent.target.result;
		};
	    }; 
	    function datepicker()
	    {
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
	    }
	</script>
    </body>
</html>

