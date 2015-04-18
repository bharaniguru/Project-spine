<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Manufacturing</a></li>
	<li class="active">Add Production Resource</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Production Resource <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Production Resource</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
			<form id="form_validation" method="post" action="<?php echo site_url('ManufacturingController/ProductionResource_Add');?>" enctype="multipart/form-data" class="form-horizontal">
			    <div class="row">
			    <div class="col-md-offset col-md-7">
			    <div class="form-group">
				<label class="col-md-3 control-label">Resource Code</label>
				<div class="col-md-4">
				    <input type="text" name="rs_code" class="form-control" placeholder="RS_CODE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Name</label>
				<div class="col-md-7">
				    <input type="text" name="rs_name" class="form-control" placeholder="RS_NAME" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Nationality</label>
				<div class="col-md-7">
				    <select class="form-control" name="rs_nationality">
				       <?php foreach( $national as $nat) {?>
                                          <option value="<?php echo $nat['VSL_CODE'];?>" ><?php echo $nat['VSL_DESC']; ?></option>
                                          <?php }?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Date of Birth</label>
				<div class="col-md-7">
				    <input class="form-control datepicker-dob input-daterange" type="text" placeholder="RS_DOB" name="rs_dob">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Mobile</label>
				<div class="col-md-7">
				    <input type="text" name="rs_mobile" class="form-control" placeholder="RS_MOBILE" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Phone</label>
				<div class="col-md-7">
				    <input type="text" name="rs_phone" class="form-control" placeholder="RS_PHONE" />
				</div>
			    </div>

			    <div class="form-group">
				<label class="col-md-3 control-label">Manager</label>
				<div class="col-md-7">
				    <select class="form-control" name="rs_manager">
					<?php foreach($manager as $val) {
					    if($val['RS_ROLE_CODE']=='PR01'){?>
					<option value="<?php echo $val['RS_CODE'];?>"><?php echo $val['RS_NAME'];?></option>
					<?php } }?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Role</label>
				<div class="col-md-7">
				    <select class="form-control" name="rs_role">
					<?php foreach($value as $ans) {
					   ?>
					<option value="<?php echo $ans['VSL_CODE'];?>"><?php echo $ans['VSL_DESC'];?></option>
					<?php } ?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Supervisor</label>
				<div class="col-md-7">
				    <select class="form-control" name="rs_supervisor">
					<?php foreach($manager as $val) {
					    if($val['RS_ROLE_CODE']=='PR02'){?>
					    ?>
					<option value="<?php echo $val['RS_CODE'];?>"><?php echo $val['RS_NAME'];?></option>
					<?php } } ?>
				    </select>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-7">					    
						<input class="form-control datepicker-dob input-daterange" type="text" placeholder="From Date" id="from_date" name="rs_from_date">				    
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-7">					    
						<input class="form-control datepicker-dob input-daterange" type="text" placeholder=" Upto Date" id="upto_date" name="rs_upto_date">					    
				</div>
			    </div>			    
			    </div>
			     <div class="col-md-offset col-md-5">
				 <div class="form-group">
				<div class="col-md-5">
				    <input type="checkbox" value="Y" name="rs_active_yn">
					Active ?
				</div>
				 </div>
				 <div class="form-group">
				<div class="col-md-6">
				<img src="<?php echo base_url();?>assets/img/gallery/user-15.jpg" class="superbox-img previewimage" id="dummy1">
				</div>
				 </div>
				 <div class="form-group">
						<div class="col-md-5">
						    <input type="file" onchange="attachment();" name="load_images" id="preview"> 
						</div>
					
				 </div>
				    
			    </div>
			     </div>
			     <div class="form-group">
			   <div class="col-md-offset-2 col-md-3">
				
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick=" Clear();" type="button"> Reset </button>				    
				    <input type="submit" name="save" value="Submit" class="btn btn-md btn-success">
				 </div>
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
$(document).ready(function() {
    $('.datepicker-dob').datetimepicker({
      format: 'DD-MMM-YYYY'
      })
    datepicker();
function datepicker()
{
    $('#from_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
$('#upto_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    
$("#from_date").on("dp.change",function (e) {
$('#upto_date').data("DateTimePicker").minDate(e.date);
});
$("#upto_date").on("dp.change",function (e) {
$('#from_date').data("DateTimePicker").maxDate(e.date);
});

}    
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
	    rs_code: {
		message: 'The Resource Code is not valid',
		validators: {
		    notEmpty: {
			message: 'The  Resource Code is required and can\'t be empty'
			},
			remote:{
				    message: 'The  Resource Code IS ALREADY EXISTS',
				    url: '<?php  echo site_url('ManufacturingController/AjaxResourceCode')?>',
				    type: 'POST'
				}
			    }
	},
	
            rs_name: {
                validators: {
		    
                    notEmpty: {
                        message: 'The Name is required and can\'t be empty'
                    },
                }
		
            },
            rs_nationality: {
                validators: {
		    
                    notEmpty: {
                        message: 'The Nationality is required and can\'t be empty'
                    },
                }
		
            },
            rs_dob: {
                validators: {
		    
                    notEmpty: {
                        message: 'The Date of Birth field is required and can\'t be empty'
                    },
                }
		
            },
            rs_mobile: {
                validators: {
		     regexp:{
		    regexp: /^[0-9]+$/,
		     message: 'The  Mobile consist of number only don\'t use character '
			},		    
		    
                    notEmpty: {
                        message: 'The Mobile number is required and can\'t be empty'
                    },
                }
		
            },
            rs_phone: {
                validators: {
		     regexp:{
		    regexp: /^[0-9]+$/,
		     message: 'The  Phone consist of number only don\'t use character '
			},		    
		    
                    notEmpty: {
                        message: 'The Phone number is required and can\'t be empty'
                    },
                }
		
            },
            rs_manager: {
                validators: {
                    notEmpty: {
                        message: 'The Manager field is required and can\'t be empty'
                    },
                }
		
            },
            rs_role: {
                validators: {
                    notEmpty: {
                        message: 'The role code field is required and can\'t be empty'
                    },
                }
		
            },
            rs_supervisor: {
                validators: {
                    notEmpty: {
                        message: 'The supervisor field is required and can\'t be empty'
                    },
                }
		
            },
	    
            load_images: {
                validators: {
                    notEmpty: {
                        message: 'The upload file is required and can\'t be empty'
                    },
                }
		
            },	    
            rs_from_date: {
                validators: {
		    
                    notEmpty: {
                        message: 'The upto date is required and can\'t be empty'
                    },
                }
		
            },
            rs_upto_date: {
                validators: {
		    
                    notEmpty: {
                        message: 'The upto date is required and can\'t be empty'
                    },
                }
		
            },
	    
	}
    });
});
</script>
<script type="text/javascript">
	    function attachment() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("preview").files[0]);
oFReader.onload = function (oFREvent) {
var data=document.getElementById("dummy1").src = oFREvent.target.result;
};
}; 
	    function form_reset()
	    {
		$('.form12').trigger("reset");
	    }
	    
</script>


	
	
</body>

</html>

