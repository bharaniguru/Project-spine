<!--	Author :Gobi. C
	functionality By: Gobi. C
	Created on: 04/03/15
	Modified on: 16/03/15-->
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
	<li class="active">Add Region </li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Region Master <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Region Master</h4>
		</div>
		<div class="panel-body">
		     <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <form action="<?php echo base_url('Apps/RegionMaster_Add');?>" id="form_validation" class="form-horizontal form12" enctype="multipart/form-data" method="POST">
			
			
			<div class="col-md-offset-2 col-md-7">
			 <input type="hidden" id="row_contains" name="row_contains" />
			    <div class="form-group">
				 <label class="col-md-3 control-label">Region Code</label>
				 <div class="col-md-5">
				     <input type="text" name="rgh_code" id="rgh_code" placeholder="Region Code" class="form-control">
				 </div>
				 <div class="col-md-2">
				     <div class="checkbox">
				  <label>
				  </label>
				     </div>
				 </div>    
				 <div class="col-md-1">
				     <div class="checkbox">
				  <label>
					<input type="checkbox"  value="Y" name="rgh_active_yn" id="rgh_active_yn">
				      Active?
				  </label>
				     </div>
				 </div>
			   </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
						    <input type="text" name="rgh_desc" id="rgh_desc" placeholder="Region Description" class="form-control">
				</div>
			    </div>
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Geography Type</label>
				<div class="col-md-9">
				    <select class="form-control" id="rgh_geo_type" name="rgh_geo_type">
					<option disabled selected>Select</option>
					<?php foreach($GetGeoType as $GT){?>
					<option value="<?php echo $GT['VSL_DESC'] ?>"><?php echo $GT['VSL_DESC'] ?></option>
					<?php }?>
				    </select>
				</div>
			    </div>
			    
			    </div>
			
			<div class="col-md-12">
		    
		     
		     
			      <div class="">
				<table class="table table-responsive table-bordered">
					    <thead>
						<tr>
						    <th>Description</th>
						    <th>Active?</th>
						    <th>Action</th>
						 </tr>
					    </thead>
					    <tbody>
						<tr class="odd ">
						    
						    
                                                   <td >
							    <select id="main_view" name="RegionMenu[]" id="RegionMenu" class="form-control">
							    <option ></option>
							    </select>
						   </td>
                                                   
                                                   <td><span><center><input type="checkbox" value="Y" checked  class="form-control" name="RGL_ACTIVE_YN[]" id="RGL_ACTIVE_YN"></center></span></td>
						   <input type="hidden" name="RGL_ACTIVE_YN1[]" value="Y" id="RGL_ACTIVE_YN1[]">
                                                   <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
                                               </tr>
                                               <tr class="odd hide" id="optionTemplate">
                                                   <td >
							    <select id="main_view" name="RegionMenu[]" id="RegionMenu" class="form-control">
							    <option ></option>
							    </select>
						   </td>
                                                   <td><span><center><input type="checkbox" value="Y" checked  class="form-control" name="RGL_ACTIVE_YN[]" id="RGL_ACTIVE_YN"></center></span></td>
                                                   <input type="hidden" name="RGL_ACTIVE_YN1[]" value="Y" id="RGL_ACTIVE_YN1[]">
						   <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
                                               </tr>
						
						<!--<tr>
						    <td id=main_view>
							<section class="col col-3">
							    <label class="select">
								
							    </label>
							</section>
						    </td>
						    <td><input type="checkbox" checked="checked" name="rgl_active_yn" value="Y"></td>
						    <td><button type="button" class="btn btn-add btn-sm btn-primary " data-template="textbox">Add</button></td>
						</tr>-->
						
					    </tbody>
					    
					</table>
			      </div>
			  
		     <div class="col-md-offset-1 col-md-6">
			<div class="form-group">
			   <label class="col col-4"></label>
			   <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
			   <button class="btn btn-md btn-info " onclick=" Clear();" type="button"> Reset </button>
			   <button type="submit" class="btn btn-md btn-success" name="Proceed" id="submit_but" value="Save" >Submit</button>
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
    function dropdown() {
			    FormPlugins.init();
			}
			
			
	$(function(){
	$("#rgh_geo_type").change(function() {
	var geo_type=$('option:selected', this).text() ;
	
	$.ajax({
	type: "POST",                                
	url: "<?=base_url()?>Apps/geo_type",
	data:{geo_type:geo_type} ,
	success: function (responseData) {
	    	$('*#main_view').html(responseData);
		dropdown();

	},
	});
	});});

	$(document).ready(function() {
			//App.init();
			dropdown();
			
			
		});
	</script>

<script type="text/javascript">
$(document).ready(function() {
    
    
var row_count=2;
    
 $('.btn-add').click(function() {
   var $template = $('#optionTemplate'),
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    
    $clone.find('[name="RegionMenu"]').attr('name', 'RegionMenu_'+row_count);
    $clone.find('[name="user_active_status"]').attr('name', 'user_active_status_'+row_count);
   
    $clone.find('[name="add1"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('name','add_'+row_count);
    $("#row_contains").val(row_count);
   row_count++;
   removerow();
   })
 
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row    = $(this).parents('.odd');
   $row.remove();
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
            rgh_code: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The  Region Code is required and can\'t be empty'
                    },
		    stringLength:{
			min: 3,
			max: 30,
			message: 'The  Region Code must be more than 3 and less than 30 characters long'
		    },
		    regexp:{
			regexp: /^[A-Z]+$/,
			message: 'The  Region Code consist of CApital Letters only don\'t use white space '
		    },
		    remote:{
			message: 'The  Region Code IS ALREADY EXISTS',
			url: '<?php  echo site_url('Apps/AjaxCheckRegionCode')?>',
			type: 'POST'
		    }
                }
            },
	    rgh_desc: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The City Description is required and can\'t be empty'
                    }
                }
            },
	    rgh_geo_type: {
		validators: {
		    notEmpty: {
                        message: 'Select Geography  Type'
                    }
                }
            },
	    
	    'RegionMenu[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The  Area Code is required and can\'t be empty'
                    }
                }
            }
	       
	}
    });
})
.on('click', '[name="RGL_ACTIVE_YN[]"]', function()
    {
	
 
  var $row    = $(this).parents('.odd');
 
 var item_code=$row.find("input[name='RGL_ACTIVE_YN1[]']").val();
 
   
 
    if (item_code=="Y")
    {
 $row.find("input[name='RGL_ACTIVE_YN1[]']").attr('value', 'N');
 //alert("N");
 
    }
    else
    {
 $row.find("input[name='RGL_ACTIVE_YN1[]']").attr('value', 'Y');
 //alert("Y");
    }

});







 function Clear()
      {
	$('.form12').trigger("reset");
	
	// $('#RegionMenu').empty();
	//$("#RegionMenu option").remove();
      }
      

</script>

	
	
</body>

</html>

