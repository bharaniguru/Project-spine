<!--Author: Pravin Kumar.P
Updated By: Gobi C
Created on: 04/03/15
Modified on: 16/03/15
-->
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
    <h1 class="page-header">Add User Definition <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add User Definition</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <form method="POST" id="form_validation"enctype="multipart/form-data" action="<?php echo base_url('Apps/UserDefinition_Add'); ?>" class="form-horizontal">
		    
		    <input type="hidden" id="row_contains" name="row_contains" value="1" />
		   
		    <div class="col-md-12">
			
			    <div class="col-md-6">
			    <div class="form-group">
				<label class="col-md-3 control-label">User ID</label>
				<div class="col-md-5">
				    <input type="text" name="user_id" id="user_id" placeholder="USER ID" class="form-control" >
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-8">
				    <input type="text" name="user_desc" id="user_desc"  class="form-control" placeholder="USER DESC">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Password</label>
				<div class="col-md-8">
				    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="USER PASSWORD">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Person Code</label>
				<div class="col-md-8">
				    <input type="text" name="user_pers_code" id="user_pers_code" class="form-control" placeholder="USER PERS CODE">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Office Phone</label>
				<div class="col-md-8">
				    <input type="text" name="user_office_phone" id="user_office_phone" class="form-control" placeholder="USER OFFICE PHONE">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Home Phone</label>
				<div class="col-md-8">
				    <input type="text" name="user_home_phone" id="user_home_phone"  class="form-control" placeholder="USER HOME PHONE">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Cell Phone</label>
				<div class="col-md-8">
				    <input type="text" name="user_cell_phone" id="user_cell_phone" class="form-control" placeholder="USER CELL PHONE">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Email ID</label>
				<div class="col-md-8">
				    <input type="email" name="user_email" id="user_email" placeholder="USER EMAIL"class="form-control">
				</div>
			    </div>
			    
			    <!--<div class="col-md-7 col-md-offset-3">
					    <div class="input-group input-daterange">
						<input type="text" name="from_data" id="from_data" placeholder="FROM DATE" class="form-control">
						<span class="input-group-addon">to</span>
						<input type="text" name="user_upto_dt" id="user_upto_dt" placeholder="UPTO DATE" class="form-control">
					    </div>
					</div>-->
			   
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class='col-md-8'>
				    <div class='input-group date' id='datetimepicker1'>
				    <!--<input type="text" name="from_data" id="from_data" class="form-control input-group datepicker-txn" placeholder="POH_DLV_DT" />-->
					    <input type="text" name="from_data" id="from_data" placeholder="FROM DATE" class="form-control input-group datetimepicker1">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </div>
				</div>
			    </div>
			      <div class="form-group ">
				   <label class="col-md-3 control-label">Upto Date</label>
				   <div class='col-md-8'>
					<div class='input-group date' id='datetimepicker2'>
					    <input type="text" name="user_upto_dt" id="user_upto_dt" placeholder="UPTO DATE" class="form-control  input-group datetimepicker2">
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</div>
				    </div>
			      </div>
	

			    <div class="form-group">
				<label class="col-md-3 control-label">Login From Date</label>
				<div class='col-md-8'>
				    <div class='input-group date' id='datetimepicker3'>
					    <input type="text" name="login_from_dt" id="from_data" placeholder="FROM DATE" class="form-control  input-group datetimepicker3">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </div>
				</div>
			    </div>
			      <div class="form-group ">
				   <label class="col-md-3 control-label">Login Upto Date</label>
				   <div class='col-md-8'>
					<div class='input-group date' id='datetimepicker4'>
					    <input type="text" name="login_upto_dt" id="login_upto_dt" placeholder="UPTO DATE" class="form-control  input-group datetimepicker4">
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</div>
				    </div>
			      </div>
			    
			    <!--<div class="form-group">
				    <label class="col-md-3 control-label">From Date</label>
					<div class="col-md-8">
					    <input type="text" name="from_data" id="from_data" placeholder="FROM DATE" class="form-control">
					</div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Upto date</label>
					<div class="col-md-8">
					    <input type="text" name="user_upto_dt" id="user_upto_dt" placeholder="UPTO DATE" class="form-control">
				    </div>
				</div> -->
				<div class="form-group">
				    <div class="checkbox">
					    <label class="col-md-4"></label>
					    <input type="checkbox" value="Y" checked="checked" name="change_password">
					    Allow to change Password?    
				    </div>
				</div>
			    </div>
			    <div class="col-md-6">
				<div class="row">
				<div class="col-md-offset-2 col-md-3 checkbox">
				    <label>
				    <input name="user_active" id="user_active" type="checkbox" value="Y">
				    Active ?
				    </label>
				</div>
				</div>
				<div class="row">
				<div class="col-md-offset-2 col-md-3">
				    <img src="<?php echo base_url();?>assets/img/user-13.jpg" class="media-object superbox-img previewimage" id="dummy1">
				</div>
				</div>
				<div class="row">
				<div class="col-md-offset-2 col-md-3">
				   

				     <input type="file" class=""  onchange="attachment();" name="image" id="preview">
				</div>
				</div>
			    </div>
			    
			    
		<!--<section class="col col-lg-3">
			
			<label class="col col-lg-3 input input-file" for="file">
			    <div class="button">
				<input class="form-control" type="file" onchange="this.parentNode.nextSibling.value = this.value,readURL1(this);" name="image" id="image">Add <i class="fa fa-camera"></i>
			    </div>
			</label>
			<div id="uploadfiles1" class="superbox-list">
			    <img src="img/background.jpg" data-img="img/background.jpg" alt="" class="superbox-img previewimage" id="previewimage1">
			</div>
			<div id="filelist1"></div>
			<br />
			<div id="container">
			   
			</div>
			<br />
		    </section>-->
                    
			    
		    </div>
		    <div class="col-md-12">
		    
			    <ul class="nav nav-tabs">
				<li class="active"><a href="#Lines" data-toggle="tab"> <span class="hidden-xs"></span>Lines</a></li>
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
							    <th>From Date </th>
							    <th>Upto Date</th>
							    <th>Active ?</th>
							    <th>Action</th>
							</tr>
						      </thead>
						      
						      <tbody>
						<tr class="odd ">
						    <input type="hidden" name="add_1" value="1" >
						 <input type="hidden" name="add1" value="1" >
						    <td><span><select name="responsibility[]" class="">
							    <option selected disabled>Select</option>
							    <?php foreach($result as $row) { ?>
							    <option value="<?php echo $row['RSPH_CODE'];?>"><?php echo $row['RSPH_DESC'];?></option>
							    <?php } ?>
							    </select></span></td>
							    <td><span><input class="" type="text"  name="Description[]" ></span></td>
							     <td>
								    <div class="form-group ">
									<div class='col-md-9'>
									    <div class='input-group date' id='datetimepicker5'>
									    <span><input class=" input-group datetimepicker5" type="text" placeholder="From Date" name="from_date_res[]" ></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									    </div>
									</div>
								    </div>
									   
								</td>
						
								<td>
								   <div class="form-group ">
								       <div class='col-md-9'>
									   <div class='input-group date' id='datetimepicker6'>
									   <span><input class=" input-group datetimepicker6" type="text" placeholder="Upto Date"name="upto_date_res[]"></span>
									       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									       </span>
									   </div>
								       </div>
								   </div>
								   
								</td>
							     
							     <!--<td>
								<div class="form-group ">
								    <div class='col-md-5'>
									<div class='input-group date' id='datetimepicker5'>
									<input class="form-control input-group datetimepicker5" type="text"  placeholder="From Date" name="from_date_res[]" >
									    <span class=" form-control input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									    </span>
									</div>
								    </div>
								</div>
								       
							    </td>
						
							    <td>
							       <div class="form-group ">
								   <div class='col-md-5'>
								       <div class='input-group date' id='datetimepicker6'>
								       <span><input class=" form-control input-group datetimepicker6" type="text"  placeholder="Upto Date"name="upto_date_res[]"></span>
									   <span class="form-control input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									   </span>
								       </div>
								   </div>
							       </div>
							       
							       </td>-->
							     
							    <td>
								<span><center><input type="checkbox" value="Y" checked="checked"  name="user_active_status[]" id="user_active_status"></center></span>
								<input type="hidden" name="user_active_status1[]" id="user_active_status1"  value='Y'/>
							    </td>
							   
                                                   <td><button type="button" class="btn btn-add btn-sm btn-primary" onclick="add();" data-template="textbox">Add</button></td>
                                               </tr>
                                               <tr class="odd hide" id="optionTemplate">
                                                    <input type="hidden" name="add" value="1" >
						 <input type="hidden" name="add1" value="1" >
						   <td><span><select name="responsibility[]" class="">
							    <option selected disabled>Select</option>
							    <?php foreach($result as $row) { ?>
							    <option value="<?php echo $row['RSPH_CODE'];?>"><?php echo $row['RSPH_DESC'];?></option>
							    <?php } ?>
							    </select></span></td>
								 <td><span><input class="" type="text"  name="Description[]" ></span></td>
								<td>
								    <div class="form-group ">
									<div class='col-md-9'>
									    <div class='input-group date' id='datetimepicker5'>
									    <span><input class=" input-group datetimepicker5" type="text" placeholder="From Date" name="from_date_res[]" ></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									    </div>
									</div>
								    </div>
									   
								</td>
						
								<td>
								   <div class="form-group ">
								       <div class='col-md-9'>
									   <div class='input-group date' id='datetimepicker6'>
									   <span><input class=" input-group datetimepicker6" type="text" placeholder="Upto Date"name="upto_date_res[]"></span>
									       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									       </span>
									   </div>
								       </div>
								   </div>
								   
								</td>
								
								<td>
								   <span><center><input type="checkbox" value="Y" checked="checked" name="user_active_status[]"></center></span>
								   <input type="hidden" name="user_active_status1[]" id="user_active_status1" value='Y' />
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
				    <input type="submit" class="btn btn-sm btn-success" name="save" value="save">
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

<script>
    
    $(document).ready(function () {
                
                $('.LGE_DOB').datepicker({
                    format: "dd/M/yyyy"
                });  
            
       
  
 $('.btn-add').click(function() {
  
   var $template = $('#optionTemplate'),
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   datepicker();
   
    
     $name   = $clone.find('[name="responsibility[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="Description[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="from_date_res[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="upto_date_res[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    
    
   removerow();
   });
 
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row    = $(this).parents('.odd');
   $row.remove();
   });
   };
   
        });
   
 
    
	     
   
   
</script>

<script type="text/javascript">
$(document).ready(function() {
    
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
                    },
		    remote:{
			message: 'The  User ID IS ALREADY EXISTS',
			url: '<?php  echo site_url('Apps/AjaxCheckUserId')?>',
			type: 'POST'
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
                    },
		    regexp:{
			regexp: /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/,
			//message: 'The  City Code consist of Capital Letters only and don\'t use white space '
		    },
                }
            },
	    from_data: {
		trigger:"blur",
		
                validators: {
		    
                    notEmpty: {
                        message: 'The FORM DATA is required and can\'t be empty'
                    }
                }
            },
	    user_upto_dt: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'The USER UPTO DATE is required and can\'t be empty'
                    }
                }
            },
	    login_from_dt: {
		trigger:"blur",
		
                validators: {
		    
                    notEmpty: {
                        message: 'The FORM DATA is required and can\'t be empty'
                    }
                }
            },
	    login_upto_dt: {
		trigger:"blur",
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

		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Resonsibility is required and can\'t be empty'
                    }
                }
            },
	    'Description[]': {
		
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Description is required and can\'t be empty'
                    }
                }
            },
	    'from_date_res[]': {
		
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Responsibility From Date is required and can\'t be empty'
                    }
                }
            },
	    'upto_date_res[]': {
		
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Responsibility Upto Date is required and can\'t be empty'
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
	    user_active_status: {
		message: 'The USER ACTIVE STATUS is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The USER ACTIVE STATUS is required and can\'t be empty'
                    }
                }
            },
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

});
});

function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}


function attachment() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("preview").files[0]);
oFReader.onload = function (oFREvent) {
var data=document.getElementById("dummy1").src = oFREvent.target.result;
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

//     var d = new Date();
//	var month=d.getMonth()+1;
//	var date = d.$('#from_data').val();
	//var nexdate= month +"/"+date+"/"+d.getFullYear();
	
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

};



   





</script>


	
	
</body>

</html>

