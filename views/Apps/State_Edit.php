	    <!--Author: Vinod
	    functionality By: Gobi. C
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>
		    <li class="active">Edit State</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Edit State <small> Enter the correct details here...</small></h1>
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
				<h4 class="panel-title">Edit State</h4>
			    </div>
			    <div class="panel-body">
				<p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
				<div class="col-md-offset-1 col-md-7">
				    
				    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Apps/State_Edit/'.$State[0]['ST_CODE']);?>" class="form-horizontal">
					<div class="form-group">
					    <label class="col-md-3 control-label">State Code</label>
					    <div class="col-md-5">
						<input type="text" name="st_code" id="st_code" class="form-control"  readonly  value="<?php echo $State[0]['ST_CODE'];?>"  placeholder="ST_CODE" />
					    </div>
					    <div class="col-md-offset-2 col-md-2 checkbox">
						<label>
						<input name="st_active_yn" value="Y" id="st_active_yn" type="checkbox" <?php if($State[0]['ST_ACTIVE_YN']=='Y') echo "checked";?>>
						Active ?
						</label>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Description</label>
					    <div class="col-md-9">
						<input type="text" name="st_desc" id="st_desc" class="form-control" value="<?php echo $State[0]['ST_DESC'];?>" placeholder="ST_DESC" />
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Latitude</label>
					    <div class="col-md-5">
						<input type="text" name="st_latitude" class="form-control"  value="<?php echo $State[0]['ST_LATITUDE'];?>" placeholder="ST_LATITUDE" />
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Longitude</label>
					    <div class="col-md-5">
						<input type="text" name="st_longitude" class="form-control"value="<?php echo $State[0]['ST_LONGITUDE'];?>" placeholder="ST_LONGITUDE" />
					    </div>    
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">Country</label>
					    <div class="col-md-5">
						<select class="input-sm form-control " name="st_cn_code">
						    <?php foreach($Country as $row3) {?>
						    <option value="<?php echo $State[0]['ST_CN_CODE']?>"<?php if($row3['CN_CODE']==$State[0]['ST_CN_CODE']) echo "selected";?>><?php echo $row3['CN_DESC'];?></option>
						    <?php }?>
						</select>
					    </div>
					</div>
					<div class="col-md-12 col-md-offset-3 p-t-10">
					    <fieldset>
						<button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
						<input type="submit" class="btn btn-sm btn-success" name="submit" value="Update">
					    </fieldset>
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
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function()
    {
	$('#form_validation').bootstrapValidator
	({
	    message: 'This value is not valid',
	    container: 'tooltip',
	    feedbackIcons:
	    {
		valid: 'fa fa-check',
		invalid: 'fa fa-times',
		validating: 'fa fa-refresh'
	    },
	    fields:
	    {
		st_code:
		{
		    
		    validators:
		    {
			notEmpty:{
			    message: 'The State Code is required and can\'t be empty'
			},
			stringLength:{
			    min: 3,
			    max: 30,
			    message: 'The State CODE must be more than 3 and less than 30 characters long'
			},
			regexp:{
			    regexp: /^[A-Z]+$/,
			    message: 'The State CODE consist of CApital Letters only don\'t use white space '
			},
			
		    }
		},
		st_desc:
		{
		    
		    validators:
		    {
			notEmpty:
			{
			    message: 'The State Description is required and can\'t be empty'
			}
		    }
		},
		st_latitude:
		{
		    
		    validators:
		    {
			notEmpty:
			{
			    message: 'The State latitude is required and can\'t be empty'
			}
		    }
		},
		st_longitude:
		{
		    
		    validators:
		    {
			notEmpty:
			{
			    message: 'The State longitude is required and can\'t be empty'
			}
		    }
		},
		
		st_cn_code:
		{
		   
		    validators:
		    {
			notEmpty:
			{
			    message: 'The State Country codeis is required and can\'t be empty'
			}
		    }
		},
	    }
	});
    });
    
     
	  $(function(){
	$("#st_latitude").mask("99.9999\u00B0?a");
	$("#st_longitude").mask("99.9999\u00B0?a");
	
	});  
</script>