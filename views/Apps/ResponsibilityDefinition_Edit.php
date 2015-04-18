    <!--Author: Gobi.C-->
    <!--Created Date:04-03-2015-->
    <!--Modified Date: 16-03-2015-->
<!-- begin #content -->
<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<?php
$status = $this->session->flashdata('status');
?>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Authentication</a></li>

	<li class="active">Edit Responsibility Definition</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Responsibility Definition <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Responsibility Definition</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <?php
		    foreach($data as $row)
		    ?>
		    
		    <form id="form_validation" class="form-horizontal"  data-bv-trigger="blur"  action="<?php echo base_url('Apps/ResponsibilityDefinition_Edit/'.$row['RSPH_CODE']); ?>"  enctype="multipart/form-data" method="POST">
		    <input type="hidden" name="selected_row" id="selected_row">
		    <div class="col-md-offset-2 col-md-7">
			    <div class="form-group">
				<label class="col-md-3 control-label">Responsibility</label>
				<div class="col-md-5">
				    <input type="text" name="rsph_code" class="form-control" id="rsph_code" readonly  placeholder="RSPH_CODE" value="<?php  echo $row['RSPH_CODE']?>" />
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
					<input type="checkbox"  class="" type="checkbox" name="active" value="Y" id="active" <?php if($row ['RSPH_ACTIVE_YN']=='Y') echo "checked"; ?> />
					       Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-5">
				    <input type="text" class="form-control" name="rsph_desc" placeholder="RSPH_DESC" id="rsph_desc" value="<?php echo $row['RSPH_DESC']?>" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class='col-md-5'>
				    <div class='input-group date' id='datetimepicker1'>
				    <input type="text" class="form-control input-group datetimepicker1" name="rsph_from_date" value="<?php echo $row['RSPH_FROM_DT']?>" placeholder="RSPH_FROM_DATE" id="rsph_from_date" />
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </div>
				</div>
			    </div>
			    <div class="form-group ">
				   <label class="col-md-3 control-label">Upto Date</label>
				   <div class='col-md-5'>
					<div class='input-group date' id='datetimepicker2'>
					<input type="text" class="form-control input-group datetimepicker2"name="rsph_to_date" value="<?php echo $row['RSPH_UPTO_DT']?>" placeholder="RSPH_TO_DATE" id="rsph_to_date"  />
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</div>
				    </div>
			    </div>
		    </div>
		    <div class="col-md-12">
			<ul class="nav nav-tabs">
			    <li class="active"><a href="#general-tab" data-toggle="tab"><i class="">Lines</i></a></li>
			</ul>
			<div class="tab-content">
			    <div class="tab-pane fade active in" id="Lines">
				<div class="widget-body table-responsive" >
				    <div class="table-responsive">
					<div class="form-group">
				    <div class="col-md-offset-1 col-md-2 checkbox">
				    <label>
					<?php
					   
					    foreach($get as $row2)
					
					    ?>
				     <input type="checkbox" name="approve" value="Y" id="ck1" <?php 	if($row2['RSPL_APPROVE_YN']=='Y') echo "checked";  ?>>  
					       Approve ?
				    </label>
				</div>
				</div>
					
					<table class="table table-bordered" id="datatable_fixed_column">
					    <thead>
						<tr>
						    <th data-class="expand">Menu Description</th>
						    <th data-hide="phone">Allow Insert?</th>
						    <th data-hide="phone">Allow Update?</th>
						    <th data-hide="phone">Allow Delete?</th>
						    <th data-hide="phone">Allow Print?</th>
						    <th data-hide="phone">Allow Export?</th>
						    <th data-hide="phone" style="width: 5%" id="mm">Approve Value From</th>
						    <th  data-hide="phone" style="width: 5%" id="mm">Approve Value To</th>
						    <th data-hide="phone" style="width: 10%">Amend</th>
						    
						    <th data-hide="phone">From Date</th>
						    <th data-hide="phone">Upto Date</th>
						    <th data-hide="phone">Active?</th>
						    <th><button type="button" class="btn btn-primary btn-sm addButton" data-template="textbox">Add</button></th>
						</tr>
					    </thead>
					    <tbody>
					    <?php
					    $k=0;
					    $l= sizeof($get);
					    
					    foreach($get as $row2)
					    {
					    ?>
					    <tr class="odd">
						<td>
						    <select name="menu[]">
						    <?php
						    foreach($result as $row1)
						    { ?>
							<option value="<?php echo $row1['MENU_CODE'] ?>" <?php  if($row2['RSPL_MENU_CODE']==$row1['MENU_CODE']) echo "selected";  ?> ><?php echo $row1['MENU_DESC']?></option> 
						    <?php } ?>
						    </select>
						</td>
						<td>
						    <input type="checkbox" name="insert[]" value="Y"  <?php if($row2['RSPL_INSERT_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="insert1[]" id="insert1[]"  value='<?php echo $row2['RSPL_INSERT_YN'] ?>'/>
						</td>
						<td>
						    <input type="checkbox" name="update[]" value="Y"  <?php 	if($row2['RSPL_UPDATE_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="update1[]" id="update1[]"  value='<?php echo $row2['RSPL_UPDATE_YN'] ?>'/>
						</td>
						<td>
						    <input type="checkbox"  name="delete[]" value="Y" <?php 	if($row2['RSPL_DELETE_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="delete1[]" id="delete1[]"  value='<?php echo $row2['RSPL_DELETE_YN'] ?>'/>
						</td>
						<td>
						    <input type="checkbox" name="print[]" value="Y"   <?php 	if($row2['RSPL_PRINT_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="print1[]" id="print1[]"  value='<?php echo $row2['RSPL_PRINT_YN'] ?>'/>
						</td>
						<td>
						    <input type="checkbox" name="export[]" value="Y"  <?php 	if($row2['RSPL_EXPORT_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="export1[]" id="export1[]"  value='<?php echo $row2['RSPL_EXPORT_YN'] ?>'/>
						</td>
						<td id="mm"><input type="text" name="approve_from_date[]" class=""  value="<?php echo  $row2['RSPL_APR_VAL_FROM'] ?>" data-dateformat='dd-M-yy'></td>
						<td id="mm"><input type="text" name="approve_to_date[]"  class="" value="<?php echo  $row2['RSPL_APR_VAL_UPTO'] ?>"  data-dateformat='dd-M-yy'></td>
						<td>
						    <input type="checkbox" name="amend[]" value="Y"  <?php 	if($row2['RSPL_AMEND_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="amend1[]" id="amend1[]"  value='<?php echo $row2['RSPL_AMEND_YN'] ?>'/>
						</td>
						<td>
						    <div class="form-group ">
							<div class='col-md-5'>
							    <div class='input-group date' id='datetimepicker3'>
							    <input type="text" name="from_date[]" class="input-group datetimepicker3"  value="<?php echo  $row2['RSPL_FROM_DT'] ?>" >
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
								</span>
							    </div>
							</div>
						    </div>
							   
						</td>
						
						<td>
						   <div class="form-group ">
						       <div class='col-md-5'>
							   <div class='input-group date' id='datetimepicker4'>
							   <input type="text" name="to_date[]"  class="input-group datetimepicker4"   value="<?php echo  $row2['RSPL_UPTO_DT'] ?>">
							       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							       </span>
							   </div>
						       </div>
						   </div>
						   
						</td>
						<td>
						    <input type="checkbox" name="active_line[]"  value="Y"  <?php if($row2['RSPL_ACTIVE_YN']=='Y') echo "checked";  ?>>
						    <input type="hidden" name="active_line1[]" id="active_line1[]"  value='<?php echo $row2['RSPL_ACTIVE_YN'];?>'/>
						</td>
						<td><a href="<?php echo base_url("Apps/ResponsibilityDefinitionLines_Delete/".$row2['RSPL_MENU_CODE']."/".$row['RSPH_CODE']) ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure you want to delete this Responsibilty Lines?');" >Remove</button></a></td>
					    </tr>
					    <?php
					    } ?>
					     <tr class="odd hide" id="optionTemplate">
						<td>
						<span><select name="menu1[]" class="">
						    <option selected disabled>Select</option>
						 <?php foreach($result as $row)
						 { ?>
						    <option value="<?php echo $row['MENU_CODE'] ?>" ><?php echo $row['MENU_DESC']?></option> 
						<?php } ?>
						</select></span>
					     </td>
					     <td>
						<input type="checkbox" name="insert1[]" value="Y" checked>
						<input type="hidden" name="insert2[]" id="insert1[]"  value='Y'/>
					     </td>
					     <td><input type="checkbox" name="update1[]" value="Y" checked>
						<input type="hidden" name="update2[]" id="update1[]"  value='Y'/>
					     </td>
					     <td><input type="checkbox"  name="delete1[]" value="Y" checked>
						<input type="hidden" name="delete2[]" id="delete1[]"  value='Y'/>
					     </td>
					     <td><input type="checkbox" name="prin1[]" value="Y" checked>
						<input type="hidden" name="print2[]" id="print1[]"  value='Y'/>
					     </td>
					     <td><input type="checkbox" name="export1[]" value="Y" checked>
						<input type="hidden" name="export2[]" id="export1[]"  value='Y'/>
					     </td>
					   
					      
					      
					      <td id="mm"><input type="text" name="approve_from_date1[]" class=""  data-dateformat='dd-M-yy'></td>
					     <td id="mm"><input type="text" name="approve_to_date1[]"  class=""  data-dateformat='dd-M-yy'></td>
					     <td>
						<input type="checkbox" name="amend1[]" value="Y" checked>
						<input type="hidden" name="amend2[]" id="amend1[]"  value='Y'/>
					     </td>
					     <td>
						<div class="form-group ">
						    <div class='col-md-5'>
							<div class='input-group date' id='datetimepicker3'>
							<input type="text" name="from_date1[]" class="input-group datetimepicker3" >
							    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							    </span>
							</div>
						    </div>
						</div>
						       
					    </td>
						
					     <td>
						<div class="form-group ">
						    <div class='col-md-5'>
							<div class='input-group date' id='datetimepicker4'>
							<input type="text" name="to_date1[]"  class="input-group datetimepicker4" >
							    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
							    </span>
							</div>
						    </div>
						</div>
						
						</td>
					     <td>
						<input type="checkbox" name="active_line1[]" checked value="Y">
						<input type="hidden" name="active_line2[]" id="active_line2[]"  value='Y'/>
					     </td>
					     <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
					 </tr>
					    </tbody>
					</table>
				    </div>
				</div>
			    </div>
			</div>
			
			<div class="col-md-offset-1 col-md-6">
			<div class="form-group">
			   <label class="col col-4"></label>
			   <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
			      <button type="submit" class="btn btn-md btn-success" name="Update" id="submit_but" value="Update" >Update</button>
			</div>
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
    
    if ($('#ck1').is(":checked"))
    {
	$("*#mm").show();
   
    }else{
       $("*#mm").hide(); 
    }
//$("*#sd").hide();
       


    $("#ck1").click(function() {
    if ($('#ck1').is(":checked"))
    {
	$("*#mm").show();
   
    }else{
       $("*#mm").hide(); 
    }

    });

    datepicker();
$('.addButton').click(function() {
var $template = $('#optionTemplate'),
$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);



$('#selected_row').val("1");
$name   = $clone.find('[name="menu1[]"]');
$('#form_validation').bootstrapValidator('addField', $name);
$name   = $clone.find('[name="from_date1[]"]');
$('#form_validation').bootstrapValidator('addField', $name);
$name   = $clone.find('[name="to_date1[]"]');
$('#form_validation').bootstrapValidator('addField', $name);

 datepicker();
removerow();
});

function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$('#selected_row').val("0");
$row.remove();
});
};
    
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            rsph_code: {
                validators: {
		    
                    notEmpty: {
                        message: 'The Responisibility Code is required and can\'t be empty'
                    }
                }
            },
	    rsph_desc: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Description is required and can\'t be empty'
                    }
                
                }
            },
	    rsph_from_date: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The From Date is required and can\'t be empty'
                    }
                    
                }
            },
	    rsph_to_date: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The To Date is required and can\'t be empty'
                    }
                    
                }
            },
	    "menu[]": {
		message: 'The username is not valid',
		group: 'span',
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Description is required and can\'t be empty'
                    }
                }
            },
	    "from_date[]": {
		 validators: {
		    
                    notEmpty: {
                        message: 'The From Date is required and can\'t be empty'
                    }
                }
            },
	    "to_date[]": {
		message: 'The username is not valid',
		validators: {
		    
                    notEmpty: {
                        message: 'The Upto Date is required and can\'t be empty'
                    }
                }
            },
	    
	}
    })
     $('#form_validation').on('click', '[name="insert[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='insert1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='insert1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='insert1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="delete[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='delete1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='delete1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='delete1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="update[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='update1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='update1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='update1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="print[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='print1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='print1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='print1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
    $('#form_validation').on('click', '[name="export[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='export1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='export1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='export1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="amend[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='amend1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='amend1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='amend1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="active_line[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='active_line1[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='active_line1[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='active_line1[]']").attr('value', 'Y');
	//alert("Y");
    }

})
    $('#form_validation').on('click', '[name="insert1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='insert2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='insert2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='insert2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="delete1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='delete2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='delete2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='delete2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="update1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='update2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='update2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='update2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="print1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='print2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='print2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='print2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
    $('#form_validation').on('click', '[name="export1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='export2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='export2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='export2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="amend1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='amend2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='amend2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='amend2[]']").attr('value', 'Y');
	//alert("Y");
    }

})
     $('#form_validation').on('click', '[name="active_line1[]"]', function()
    {
	
	 var $row    = $(this).parents('.odd');
	
	var item_code=$row.find("input[name='active_line2[]']").val();
	
   
	
    if (item_code=="Y")
    {
	$row.find("input[name='active_line2[]']").attr('value', 'N');
	//alert("N");
	
    }
    else
    {
	$row.find("input[name='active_line2[]']").attr('value', 'Y');
	//alert("Y");
    }

});
     
     function datepicker()
{
	//var d = new Date();
	//var month=d.getMonth();
	//var date = d.getDate();
	//var nexdate= month +"/"+date+"/"+d.getFullYear();
	var date = new Date();
        var nextdate=date.setDate(date.getDate());
	
    $('.datetimepicker1').datetimepicker({
        format: 'DD-MMM-YYYY',
	maxDate:nextdate
    });
    $('.datetimepicker2').datetimepicker({
	format: 'DD-MMM-YYYY',
	minDate:nextdate
    });
    $('*.datetimepicker3').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    $('*.datetimepicker4').datetimepicker({
      format: 'DD-MMM-YYYY'
    });


    
$(".datetimepicker1").on("dp.change",function (e) {
$('.datetimepicker2').data("DateTimePicker").minDate(e.date);

$('*.datetimepicker3').data("DateTimePicker").maxDate(e.date);
});
$(".datetimepicker2").on("dp.change",function (e) {
$('.datetimepicker1').data("DateTimePicker").maxDate(e.date);
$('*.datetimepicker4').data("DateTimePicker").maxDate(e.date);
});


$("*.datetimepicker3").on("dp.change",function (f) {
$('*.datetimepicker1').data("DateTimePicker").minDate(f.date);
});
$("*.datetimepicker4").on("dp.change",function (f) {
$('*.datetimepicker2').data("DateTimePicker").maxDate(f.date);
});


};
    
});
</script>
<script>
		$(document).ready(function() {
		    datepicker();
			FormPlugins.init();
		});
	</script>

<script type="text/javascript">
 
    $(document).ready(function() {
	
  





        //$('#ck2').click(function() {
        //    if (this.checked) {
        //        $("*#sd").show();
        //    }else{
        //        $("*#sd").hide();
        //    }
        //
        //
        //});
    });
    
    
    
</script>
<script>
$(document).ready(function() {
App.init();
FormPlugins.init();



});
</script>


	
	
</body>

</html>

