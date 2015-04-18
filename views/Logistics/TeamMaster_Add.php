	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li>Team Master</li>
		    <li class="active">Add Team Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Add Team Master<small> Enter the correct details here...</small></h1>
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
				<h4 class="panel-title">Add Team Master</h4>
			    </div>
			    <div class="panel-body">
				<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('LogisticsController/TeamMaster_Add'); ?>" class="form-horizontal  form12">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-3 control-label">Employee Code</label>
					    <div class="col-md-7">
						<input type="text" name="LGE_CODE" id="LGE_CODE" class="form-control" placeholder="LGE_CODE" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">EmployeeName</label>
					    <div class="col-md-7">
						<input type="text" name="LGE_NAME" id="LGE_NAME" class="form-control" placeholder="LGE_NAME" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Cell Phone</label>
					    <div class="col-md-7">
						<input type="text" name="LGE_CELL_PHONE" class="form-control" placeholder="LGE_CELL_PHONE" />
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Designation</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control"  name="LGE_DESIG">
							<option selected="selected" value="">Select</option>
							<?php foreach($result1 as $row) {?>
							<option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
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
							<option selected="selected" value="">Select</option>
							<?php foreach($result2 as $row) {?>
							<option value="<?php echo $row['VSL_CODE']?>"><?php echo $row['VSL_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Date of Birth</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <input type="text" placeholder="LGE_DOB" name="LGE_DOB"  class="form-control" id="defaultdate" >
						</section>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Team</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <select class="form-control" name="LGE_TEAM_CODE">
							<option selected="selected" value="">Select</option>
							<?php foreach($result3 as $row) {?>
							<option value="<?php echo $row['LT_CODE']?>"><?php echo $row['LT_DESC']?></option>
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
							<option selected="selected" value="" >Select</option>
							<?php foreach($result4 as $row) {?>
							<option value="<?php echo $row['CT_CODE']?>"><?php echo $row['CT_DESC']?></option>
							<?php } ?>
						    </select>
						</section>
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">From Date</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <input type="text" placeholder="LGE_FROM_DT" name="LGE_FROM_DT"  class="form-control" id="defaultdate1" >
						</section>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Upto Date</label>
					    <div class="col-md-7">
						<section class="col col-8">
						    <input type="text" placeholder="LGE_UPTO_DT" name="LGE_UPTO_DT"  class="form-control" id="defaultdate2" >
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
							<input type="checkbox" name="TEAM_ACTIVE" value="Y" checked="checked">
							<i></i>
							Active?
						    </label>
						</section>
					    </div> 
					    <div class="row">
						<section class="col col-2"></section>
						<section class="col col-6">
						    <img src="<?php echo base_url();?>assets/img/user-13.jpg" class="superbox-img previewimage" id="dummy1">
						</section>
					    </div><br>
					    <div class="row">
						<section class="col col-2"></section>
						<section class="col col-6">
						    <input type="file" onchange="attachment();" name="image" id="preview"> 
						</section>
					    </div>
					</div>
				    </div>
				    <div class="col-md-12 col-md-offset-3 p-t-10">
					<fieldset>
					    <input type="submit" class="btn btn-sm btn-success" value="Save" name="save">
					    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();">Reset</button>
					    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
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
			LGE_CODE:
			{
			    message: 'The EMPLOYEE CODE is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The EMPLOYEE CODE is required and can\'t be empty'
				},
				regexp:
				{
				    regexp: /^[A-Z][0-9]+$/,
				    message: 'The EMPLOYEE CODE must be Capital Alphabet and Number, White Space not allowed'
				},
				remote:
				{
				    message: 'The EMPLOYEE CODE IS ALREADY EXISTS',
				    url: '<?php  echo site_url('LogisticsController/TeamValidation_Ajax')?>',
				    type: 'POST'
				},
			    }
			},
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
			    message: 'The CELL PHONE NUMBER is not valid',
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
			TEAM_ACTIVE:
			{
			    message: 'The CHECKBOX is not valid',
			    validators:
			    {
				notEmpty:
				{
				    message: 'The CHECKBOX is required and can\'t be empty'
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
	    
	    function form_reset()
	    {
		$('.form12').trigger("reset");
	    }
	    
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

