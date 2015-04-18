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
	<li class="active">Edit Region </li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Region Master <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit Region Master</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <?php
		    foreach($region as $demo)
		    {}
		    ?>
		    <form id="" class="form-horizontal form12" action="<?php echo site_url('Apps/RegionMaster_Edit/'.$demo['RGH_CODE']);?>" enctype="multipart/form-data" method="POST">
			
			
			<div class="col-md-offset-2 col-md-7">
			
			    <div class="form-group">
				 <label class="col-md-3 control-label">Region Code</label>
				 <div class="col-md-5">
				    <input type="hidden" name="rgh_comp_code" class="form-control" id="rgh_comp_code"  placeholder="RSPH_CODE" value="<?php echo $demo['RGH_COMP_CODE']?>" />

                                    <input type="text" name="rgh_code" id="rgh_code" class="form-control" placeholder="2" value="<?php echo $demo['RGH_CODE'] ?>" class="form-control" readonly>
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
				    
                                       <input type="checkbox" value="Y" <?php  if($demo['RGH_ACTIVE_YN']=="Y") echo "Checked"; ?> name="rgh_active_yn" id="rgh_active_yn">
				      Active?
				  </label>
				     </div>
				 </div>
			   </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
                                    <input type="text" name="rgh_desc" id="rgh_desc" class="form-control" value="<?php echo $demo['RGH_DESC']?>" placeholder="3" class="">
				</div>
			    </div>
			            <input type="hidden" name="rgh_upd_uid" id="rgh_desc" value="3-MAR-15"  placeholder="3" class="">
                                    <input type="hidden" name="rgh_upd_dt" id="rgh_desc" value="12-MAR-15" placeholder="3" class="">
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Geography Type</label>
				<div class="col-md-9">
				    <select class="form-control" id="rgh_geo_type" name="rgh_geo_type">
					
                                        <option disabled selected>Select</option>
					<?php foreach($GetGeoType as $GT){?>
					<option value="<?php echo $GT['VSL_DESC'] ?>" <?php if( $GT['VSL_DESC']==$demo['RGH_GEO_TYPE'])echo "selected"; ?>><?php echo $GT['VSL_DESC'] ?></option>
					<?php }?>							
				    </select>
				</div>
			    </div>
			    
			    </div>
			
			<div class="col-md-12">
		    
		     
		     <div class="tab-content">
			<div class="tab-pane fade active in" id="Lines">
			   <div class="widget-body table-responsive" >
			      <div class="table-responsive">
				<table class="table table-responsive table-bordered " >
				    <thead>
					<tr>
					    <th>Description</th>
					    <th>Active?</th>
					    <th><button type="button" class="btn btn-primary btn-sm addButton" data-template="textbox">Add</button></th>
					</tr>
				    </thead>
				    <tbody>
					<?php
					$count=count($region2);
					foreach($region2 as $row3)
					{
					    if($demo['RGH_GEO_TYPE']=="Country")
					    {
					?>
					<tr class="odd1">
					    <input type="hidden" value="<?php ?>" name=""
					    <td id="drop">
						
						<select class="" id="main_view"  class="form-control" name="RegionMenu[]" >
						<?php
						
						
						 foreach($region3 as $row1)
						 {
						?>
						<option name="rgh_" value="<?php echo $row1['CN_CODE'].",". $row1['CN_DESC'];?>"  <?php  if($row1['CN_CODE']==$row3['RGL_CODE']) echo "selected"; ?> ><?php echo $row1['CN_DESC'] ?></option> 
						<?php  }
						    }else if($demo['RGH_GEO_TYPE']=="State")
						    {
						?>
					<tr class="odd1">
					    <td id="drop">
						
						<select class="" id="main_view"  class="form-control" name="RegionMenu[]" >
						<?php
						
						
						 foreach($region3 as $row1)
						 {
						?>
						<option name="rgh_" value="<?php  echo $row1['ST_CODE'].",". $row1['ST_DESC'];?>"  <?php  if($row1['ST_CODE']==$row3['RGL_CODE']) echo "selected"; ?> ><?php echo $row1['ST_DESC'] ?></option> 
						<?php  }
						    }else if($demo['RGH_GEO_TYPE']=="City")
						    {
						?>
					<tr class="odd1">
					    <td id="drop">
						
						<select class="" id="main_view" class="form-control" name="RegionMenu[]" >
						<?php
						
						
						 foreach($region3 as $row1)
						 {
						?>
						<option name="rgh_" value="<?php echo $row1['CT_CODE'].",". $row1['CT_DESC'];?>"  <?php  if($row1['CT_CODE']==$row3['RGL_CODE']) echo "selected"; ?> > <?php echo $row1['CT_DESC'] ?></option> 
						<?php  }
						    }
						?>
						
					    
						
						</select>
					    </td>
					    <td><span><center><input type="checkbox" value="Y"  <?php  if($row3['RGL_ACTIVE_YN']=="Y") echo "Checked"; ?> name="RGL_ACTIVE_YN[]"></center></span> </td>
					    <input type="hidden" name="RGL_ACTIVE_YN2[]" value="<?php if($row3['RGL_ACTIVE_YN'] == "Y"){echo "Y";} else{ echo"N";}?>" id="RGL_ACTIVE_YN1[]">
					    <td><a href="<?php echo base_url("apps/RegionLine_Delete/".$row3['RGL_CODE']."/".$demo['RGH_CODE']) ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure you want to delete this Region Lines?');" >Remove</button></a></td>
					</tr>
					
					<?php  }?>
					
					
				    </tbody>
				    <tbody>
					<tr class="odd hide" id="optionTemplate">
					    <td >
						     <select id="main_view1" name="RegionMenu1[]" class="form-control">
						     <option ></option>
						     </select>
					    </td>
					    <td><span><center><input type="checkbox" value="Y" checked name="RGL_ACTIVE_YN3[]" id="RGL_ACTIVE_YN1"></center></span></td>
					    <input type="hidden" name="RGL_ACTIVE_YN4[]" value="Y" id="RGL_ACTIVE_YN4[]">
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
			   <button type="submit" class="btn btn-md btn-success" name="Update" id="submit_but" value="Update" >Submit</button>
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
	});
	});

	$(document).ready(function() {
			//App.init();
			dropdown();
			
			
		});
	</script>
<script>
    $(document).ready(function() {
    
    });
</script>
	
<script type="text/javascript">
$(document).ready(function() {
    
    
 $('.addButton').click(function() {
   var $template = $('#optionTemplate'),
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    
    
    var geo_type=$("#rgh_geo_type option:selected").text();
	
	$.ajax({
	type: "POST",                                
	url: "<?=base_url()?>Apps/geo_type",
	data:{geo_type:geo_type} ,
	success: function (responseData) {
	    	$('*#main_view1').html(responseData);
		dropdown();

	},
	});
	
	
        
    $name   = $clone.find('[name="RegionMenu1[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
   removerow();
   });
 
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row    = $(this).parents('.odd');
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
.on('click', '[name="RGL_ACTIVE_YN3[]"]', function()
    {
	
 
  var $row    = $(this).parents('.odd');
 
 var item_code=$row.find("input[name='RGL_ACTIVE_YN4[]']").val();

 
    if (item_code=="Y")
    {
 $row.find("input[name='RGL_ACTIVE_YN4[]']").attr('value', 'N');
 //alert("N");
 
    }
    else
    {
 $row.find("input[name='RGL_ACTIVE_YN4[]']").attr('value', 'Y');
 //alert("Y");
    }

})
.on('click', '[name="RGL_ACTIVE_YN[]"]', function()
    {
	

  var $row1    = $(this).parents('.odd1');
 
 var item_code=$row1.find("input[name='RGL_ACTIVE_YN2[]']").val();

   
 
    if (item_code=="Y")
    {
 $row1.find("input[name='RGL_ACTIVE_YN2[]']").attr('value', 'N');
 //alert("N");
 
    }
    else
    {
 $row1.find("input[name='RGL_ACTIVE_YN2[]']").attr('value', 'Y');
 //alert("Y");
    }

});


    






 function Clear()
      {
	$('.form12').trigger("reset");
      }
      

</script>

	
	
</body>

</html>

