<!--Author: Pravin Kumar.P
Updated By: Gobi C
Created on: 04/03/15
Modified on: 16/03/15
-->
<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<?php
$status = $this->session->flashdata('status');
?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Add UserDefinition</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit User Definition <small> check the details here...</small></h1>
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
		    <h4 class="panel-title">Edit User Definition</h4>
		</div>
		<?php foreach($result as $uvalue) ?>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('Apps/UserDefinition_Edit/'.$uvalue['USER_ID'])?>" class="form-horizontal">
		    <div class="col-md-12">
			
			    <div class="col-md-6">
			    <div class="form-group">
				<label class="col-md-3 control-label">User ID</label>
				<div class="col-md-5">
				    <input type="text" name="user_id" id="user_id" class="form-control"  readonly placeholder="USER ID" value="<?php echo$uvalue['USER_ID'] ?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-8">
				    <input type="text" name="user_desc" id="user_desc"  class="form-control" placeholder="USER DESC" value="<?php echo $uvalue['USER_DESC']?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Password</label>
				<div class="col-md-8">
				    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="USER PASSWORD" >
				    <input type="hidden" name="user_password1" id="user_password" class="form-control" placeholder="USER PASSWORD" value="<?php echo $uvalue['USER_PASSWD'] ?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Person Code</label>
				<div class="col-md-8">
				    <input type="text" name="user_pers_code" id="user_pers_code" class="form-control" placeholder="USER PERS CODE" value="<?php echo $result[0]['USER_PERS_CODE']?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Office Phone</label>
				<div class="col-md-8">
				    <input type="text" name="user_office_phone" id="user_office_phone" class="form-control" placeholder="USER OFFICE PHONE" value="<?php echo $uvalue['USER_OFFICE_PHONE'];?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Home Phone</label>
				<div class="col-md-8">
				    <input type="text" name="user_home_phone" id="user_home_phone" class="form-control" placeholder="USER HOME PHONE" value="<?php echo$uvalue['USER_HOME_PHONE'];?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Cell Phone</label>
				<div class="col-md-8">
				    <input type="text" name="user_cell_phone" id="user_cell_phone" class="form-control" placeholder="USER CELL PHONE" value="<?php echo $uvalue['USER_CELL_PHONE'];?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Email ID</label>
				<div class="col-md-8">
				    <input type="email" name="user_email" id="user_email" placeholder="USER EMAIL" class="form-control" value="<?php echo $uvalue['USER_EMAIL']?>">
				</div>
			    </div>
			    
			     <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class='col-md-8'>
				    <div class='input-group date' id='datetimepicker1'>
					    <input type="text" name="user_from_dt" id="user_from_dt"  class="form-control input-group datetimepicker1" placeholder="FROM DATE" value="<?php echo $uvalue['USER_FROM_DT'] ?>" data-dateformat="dd-M-y">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </div>
				</div>
			    </div>
			      <div class="form-group ">
				   <label class="col-md-3 control-label">Upto Date</label>
				   <div class='col-md-8'>
					<div class='input-group date' id='datetimepicker2'>
					    <input type="text" name="user_upto_dt" id="user_upto_dt"  class="form-control input-group datetimepicker2" placeholder="USER UPTO DT" value="<?php echo $uvalue['USER_UPTO_DT'];?>"  data-dateformat="dd-M-y">
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</div>
				    </div>
			      </div>
	

			    <div class="form-group">
				<label class="col-md-3 control-label">Login From Date</label>
				<div class='col-md-8'>
				    <div class='input-group date' id='datetimepicker3'>
					    <input type="text" name="login_from_dt" id="from_data" placeholder="FROM DATE"  value="<?php echo $uvalue['USER_LOGIN_FROM'];?>"  class="form-control  input-group datetimepicker3">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </div>
				</div>
			    </div>
			      <div class="form-group ">
				   <label class="col-md-3 control-label">Login Upto Date</label>
				   <div class='col-md-8'>
					<div class='input-group date' id='datetimepicker4'>
					    <input type="text" name="login_upto_dt" id="login_upto_dt" placeholder="UPTO DATE"  value="<?php echo $uvalue['USER_LOGIN_UPTO'];?>"  class="form-control input-group datetimepicker4">
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</div>
				    </div>
			      </div>
			    
				<div class="form-group">
				    <div class="checkbox">
					    <label class="col-md-4"></label>
					    <input type="checkbox" value="Y" name="change_password" <?php echo ($uvalue['USER_PW_CHANGE_YN']=='Y' ? 'checked' : '')?>>
					    Allow to change Password?    
				    </div>
				</div>
			    </div>
			    <div class="col-md-6">
				<div class="row">
				<div class="col-md-offset-2 col-md-3 checkbox">
				    <label>
				    <input type="checkbox" name="user_active" value="Y" <?php echo ($uvalue['USER_ACTIVE_YN']=='Y' ? 'checked' : '');?>>
				    Active ?
				    </label>
				</div>
				</div>
				<div class="row">
				<div class="col-md-offset-2 col-md-3">
				    <img src="<?php echo base_url("upload/".$uvalue['USER_IMAGE_FILE']);?>" value"<?php echo $uvalue['USER_IMAGE_FILE']?>" class="img-responsive" id="dummy11">
				</div>
				</div>
				<div class="row">
				<div class="col-md-offset-2 col-md-3">
				    <input  type="file" value="" onchange="attachment();"  name="image" id="new1" >
				    <input type="hidden" value="<?php echo $uvalue['USER_IMAGE_FILE'];?>" name="getimage"/>
				</div>
				</div>
			    </div>
			    
			    
		    </div>
		    <div class="col-md-12">
		    
			    <ul class="nav nav-tabs">
				<li class="active"><a href="#Lines" data-toggle="tab"> <span class="hidden-xs">Lines</span></a></li>
			    </ul>
			    <div class="tab-content">
			    <div class="tab-pane fade active in" id="Lines">
			    <div class="widget-body table-responsive" >
				<div class="table-responsive">
						   <table class="table table-bordered" id="datatable_fixed_column">
						      <thead>
							<tr>
							    <th>Responsibility</th>
							    <th>Description</th>
							    <th>From Date</th>
							    <th>Upto Date</th>
							    <th>Active ?</th>
							    <th><button type="button" class="btn btn-primary btn-sm addButton" data-template="textbox">Add</button></th>
							    
							</tr>
							</thead>
							<tbody>
							    <?php
							    foreach($result_res as $row) { ?>
							    
							    <tr class="odd">
								<td><span><label class="select">
								    <select name="responsibility[]" class="form-control">
								    <!--<option value="<?php //echo $row['USRS_RESP_CODE']?>"><?php //echo $row['USRS_RESP_CODE']?></option>-->
								    <?php foreach($result_head as $row1){?>
								    
								    <option value="<?php echo $row1['RSPH_CODE'];?>" <?php if($row1['RSPH_CODE']==$row['USRS_RESP_CODE'])echo "selected"; ?>><?php echo $row1['RSPH_DESC'];?></option>
								    <?php }?>
								    </select>
								    </label></span>
								</td>
								<td><span><input class="form-control" value="<?php echo $row['USRS_DESC'] ?>" type="text" size="3" maxlength="30" name="Description[]" ></span></td>
								<td>
								     <div class="form-group ">
									 <div class='col-md-5'>
									     <div class='input-group date' id='datetimepicker5'>
									     <input class="form-control input-group datetimepicker5" value="<?php echo $row['USRS_FROM_DT'] ?>" type="text" size="20" maxlength="50" name="from_date_res[]" data-dateformat="dd-M-y">
										 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										 </span>
									     </div>
									 </div>
								     </div>
									    
								 </td>
						     
								<td>
								    <div class="form-group ">
									<div class='col-md-5'>
									    <div class='input-group date' id='datetimepicker6'>
									    <input class="form-control input-group datetimepicker5" value="<?php echo $row['USRS_UPTO_DT'] ?>" type="text" size="20" maxlength="500" name="upto_date_res[]" data-dateformat="dd-M-y">
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									    </div>
									</div>
								    </div>
								    
								</td>
								<td><span><center><input type="checkbox" value="Y" name="user_active_status[]" <?php echo ($row['USRS_ACTIVE_YN']=='Y' ? 'checked' : '') ?>></center></span></td>
								<input type="hidden" name="user_active_status1[]" id="user_active_status1" value='<?php echo $row['USRS_ACTIVE_YN']?>' />
								<td><a href="<?php echo base_url("apps/UserDefinitionResp_Delete/".$row['USRS_COMP_CODE']."/".$row['USRS_ID']."/".$row['USRS_RESP_CODE']) ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure! you want to delete this User Responsibility Lines?');" >Remove</button></a></td>
							    </tr>
							    <?php } ?>
							    <tr class="odd hide" id="optionTemplate">
								<td><span><select name="responsibility1[]" class="form-control">
									 <option selected disabled>Select</option>
									 <?php foreach($result_head as $row) { ?>
									 <option value="<?php echo $row['RSPH_CODE'];?>"><?php echo $row['RSPH_DESC'];?></option>
									 <?php } ?>
									 </select></span></td>
									      <td><span><input class="form-control " type="text" size="3" maxlength="30" name="Description[]" ></span></td>
									       <td>
									     <div class="form-group ">
										 <div class='col-md-5'>
										     <div class='input-group date' >
										     <input class="input-group datetimepicker5" type="text" placeholder="From Date" name="from_date_res1[]" >
											 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
											 </span>
										     </div>
										 </div>
									     </div>
										    
									 </td>
							     
									 <td>
									    <div class="form-group ">
										<div class='col-md-5'>
										    <div class='input-group date'>
										    <input class="input-group datetimepicker6" type="text" placeholder="Upto Date"name="upto_date_res1[]">
											<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
											</span>
										    </div>
										</div>
									    </div>
									    
									    </td>
									     
									  <td>
									     <span><center><input type="checkbox" value="Y" checked="checked" name="user_active_status1[]"></center></span>
									     <input type="hidden" name="user_active_status2[]" id="user_active_status1" value='Y' />
									  </td>
									  <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
							    </tr>

						    	</tbody>
						   </table>
						</div>
					     </div>
		</div>
	  
                
	    </div>
			
			    <div class="col-md-12 col-md-offset-3 p-t-10">
				<fieldset>
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
				    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
				    <input type="submit" class="btn btn-sm btn-success" value="update" name="update">
                                </fieldset>
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
$(document).ready(function()
		  {
    
    
    datepicker();
    
    
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            user_id: {
		message: 'The USER ID is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER ID is required and can\'t be empty'
                    }
                }
            },
	    user_desc: {
		message: 'The USER DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    user_password: {
		message: 'The USER PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    user_pers_code: {
		message: 'The USER PERSON CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER PERSON CODE is required and can\'t be empty'
                    }
                }
            },
	    user_office_phone: {
		message: 'The USER OFFICE PHONE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER OFFICE PHONE is required and can\'t be empty'
                    }
                }
            },
	    user_home_phone: {
		message: 'The USER HOME PHONE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER HOME PHONE is required and can\'t be empty'
                    }
                }
            },
	    
	    user_cell_phone: {
		message: 'The USER CELL PHONE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER CELL PHONE is required and can\'t be empty'
                    }
                }
            },
	    user_email: {
		message: 'The USER EMAIL is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER EMAIL is required and can\'t be empty'
                    }
                }
            },
	    from_data: {
		message: 'The FORM DATA is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The FORM DATA is required and can\'t be empty'
                    }
                }
            },
	    user_upto_dt: {
		message: 'The USER UPTO DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER UPTO DATE is required and can\'t be empty'
                    }
                }
            },
	    change_password: {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'responsibility[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'Description[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'from_date_res[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'upto_date_res[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'responsibility1[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'Description1[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'from_date_res1[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
	    'upto_date_res1[]': {
		message: 'The CHANGE PASSWORD is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHANGE PASSWORD is required and can\'t be empty'
                    }
                }
            },
//	    user_active: {
//		message: 'The USER ACTIVE is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'The USER ACTIVE is required and can\'t be empty'
//                    }
//                }
//            },
//	    responsibility: {
//		message: 'The USER RESPONSIBILITY is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'The USER RESPONSIBILITY is required and can\'t be empty'
//                    }
//                }
//            },
//	    from_date_res: {
//		message: 'The FROM DATE is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'The FROM DATE is required and can\'t be empty'
//                    }
//                }
//            },
//	    upto_date_res: {
//		message: 'The UPTO DATE is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'The UPTO DATE is required and can\'t be empty'
//                    }
//                }
//            },
//	    user_active_status: {
//		message: 'The USER ACTIVE STATUS is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'The USER ACTIVE STATUS is required and can\'t be empty'
//                    }
//                }
//            },
//	     cn_active_yn: {
//		message: 'The CN active is not valid',
//                validators: {
//		    notEmpty: {
//                        message: 'The CN CODE is required and can\'t be empty'
//                    }
//                }
//            },
	}
    })
    .on('click', '[name="user_active_status[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='user_active_status1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='user_active_status1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='user_active_status1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
    .on('click', '[name="user_active_status1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='user_active_status2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='user_active_status2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='user_active_status2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
    $(".addButton").click(function(){
    
   var $template = $('#optionTemplate');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    datepicker();
   
  
    $clone.find('[name="user_active_status"]').attr('name', 'user_active_status_'+row_count);
    $name   = $clone.find('[name="APPS_CITY_AREA1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="AR_DESC1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="AR_LATITUDE1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="AR_LONGITUDE1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $("#row_contains").val(row_count);
    datepicker();
   removerow();
   });
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row   = $(this).parents('.odd');
   $row.remove();
   });
   }
});

function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}


function attachment() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("new1").files[0]);
oFReader.onload = function (oFREvent) {
var data=document.getElementById("dummy11").src = oFREvent.target.result;
};
};


    


  
function datepicker()
{

    
    $('.datetimepicker1').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    $('.datetimepicker2').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    $('.datetimepicker3').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    $('.datetimepicker4').datetimepicker({
      format: 'DD-MMM-YYYY'
    });

    $('*.datetimepicker5').datetimepicker({
      format: 'DD-MMM-YYYY',
    //  minDate:date
    });
    $('*.datetimepicker6').datetimepicker({
      format: 'DD-MMM-YYYY',
     // minDate:$('#user_upto_dt').val()
    });

    
$(".datetimepicker1").on("dp.change",function (e) {
$('.datetimepicker2').data("DateTimePicker").minDate(e.date);

$('*.datetimepicker5').data("DateTimePicker").maxDate(e.date);
});
$(".datetimepicker2").on("dp.change",function (e) {
$('.datetimepicker1').data("DateTimePicker").maxDate(e.date);
$('*.datetimepicker6').data("DateTimePicker").maxDate(e.date);
});


$(".datetimepicker3").on("dp.change",function (f) {
$('.datetimepicker4').data("DateTimePicker").minDate(f.date);
});
$(".datetimepicker4").on("dp.change",function (f) {
$('.datetimepicker3').data("DateTimePicker").maxDate(f.date);
});

$("*.datetimepicker5").on("dp.change",function (g) {
    $('*.datetimepicker1').data("DateTimePicker"). minDate(g.date);

});
$("*.datetimepicker6").on("dp.change",function (g) {
$('*.datetimepicker5').data("DateTimePicker").minDate(e.date);
});

}

</script>

	
	
</body>

</html>

