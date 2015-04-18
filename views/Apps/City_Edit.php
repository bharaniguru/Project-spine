
<!--
	functionality By: Gobi. C
	Created on: 04/03/15
	Modified on: 16/03/15-->
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
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Edit City</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit City <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Edit City</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <div class="col-md-offset-1 col-md-10">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action=""<?php echo site_url('apps/EditCity/'); ?>" class="form-horizontal">
			    <input type="hidden" id="row_contains" name="row_contains" value="1" />
			    <div class="form-group">
				<label class="col-md-3 control-label">City Code</label>
				<div class="col-md-4">
				    <input type="text" value="<?php echo $city[0]['CT_CODE']; ?>" name="ct_code" id="ct_code" class="form-control" readonly placeholder="CT_CODE" />
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input <?php if($city[0]['CT_ACTIVE_YN'] == "Y")echo 'checked' ;?> name="ct_active_yn" id="ct_active_yn" value="Y" type="checkbox" >
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-4">
				    <input type="text" value="<?php echo $city[0]['CT_DESC']; ?>" name="ct_desc" id="ct_desc" class="form-control" placeholder="CT_DESC" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Latitude</label>
				<div class="col-md-4">
				    <input type="text"  value="<?php echo $city[0]['CT_LATITUDE']; ?>"name="ct_latitude" id="ct_latitude" class="form-control" placeholder="CT_LATITUDE" />
				</div>    
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Longitude</label>
				<div class="col-md-4">
				    <input type="text" value="<?php echo $city[0]['CT_LONGITUDE']; ?>"name="ct_longitude" id="ct_longitude" class="form-control" placeholder="CT_LONGITUDE" />
				</div>    
			    </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label" >Country</label>
                              <div class="col-md-4">
                                  <select class="form-control" id='ct_cn_code' name="ct_cn_code">
                                      <option value="ct_cn_code">CT_CN_CODE</option>
					<?php if (count($country) > 0 )
					{
					foreach ($country as $row)
					{
					?>
					<option <?=$row['CN_CODE'] == $city[0]['CT_CN_CODE'] ? 'selected="selected"' : '';?> value="<?php echo $row['CN_CODE']; ?>"><?php echo $row['CN_DESC']; ?></option>
					<?php } } ?>
                                  </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label" >State</label>
                              <div class="col-md-4">
                                  <select class="form-control" name="ct_st_code" id="ct_st_code">
                                      <option value="ct_st_code">CT_ST_CODE</option>
                                      <?php if (count($state) > 0 )
					{
					foreach ($state as $row)
					{
					?>
					<option <?=$row['ST_CODE'] == $city[0]['CT_ST_CODE'] ? 'selected="selected"' : '';?> value="<?php echo $row['ST_CODE']; ?>"><?php echo $row['ST_DESC']; ?></option>
					<?php } }?>
                                  </select>
                              </div>
                           </div>
			       <div class="form-group">
				
				<div class="col-md-4">
				   <button class="btn btn-sm btn-inverse" type="button"  data-toggle="collapse" data-target="#demo">Define Area</button>
				</div>    
			   </div>
                            <div class="form-group " id="demo" >
                              <div class="table-responsive">
                                    <table class="table table-bordered">
                                            <thead>
                                                    <tr>
                                                            <th>Area Code</th>
                                                            <th>Description</th>
                                                            <th>Latitude</th>
                                                            <th>Longitude</th>
                                                            <th>Active</th>
							    <th><button type="button" class="btn btn-primary btn-sm addButton" data-template="textbox">Add</button></th>
                                                            

                                                    </tr>
                                            </thead>
                                            <tbody>
					    <?php
					    $l= sizeof($cityarea);
					    foreach ($cityarea as $rowarea)
					    {
					    ?>
					    <tr class="odd " >
						<input type="hidden" value="<?php echo $l;?>" name="total_value"/>
						<td><span><input  class="form-control" type="text" size="10" maxlength="50" name="APPS_CITY_AREA[]" value="<?php echo $rowarea['AR_CODE']; ?>" ></span></td>
						<td><span><input class="form-control" type="text" size="10" maxlength="30" name="AR_DESC[]" value="<?php echo $rowarea['AR_DESC']; ?>" ></span></td>
						<td><span><input class="form-control" type="text" size="10" maxlength="50" name="AR_LATITUDE[]" value="<?php echo $rowarea['AR_LATITUDE']; ?>"></span></td>
						<td><span><input class="form-control" type="text" size="10" maxlength="500" name="AR_LONGITUDE[]" value="<?php echo $rowarea['AR_LONGITUDE']; ?>" ></span></td>
						<td><span><input <?php if($rowarea['AR_ACTIVE_YN'] == "Y") echo'checked' ;?> class="form-control" type="checkbox" id="AR_ACTIVE_YN[]"  name="AR_ACTIVE_YN[]"  value="Y" >
						<input type="hidden" name="AR_ACTIVE_YN1[]" value="<?php echo $rowarea['AR_ACTIVE_YN'];?>"  id="AR_ACTIVE_YN1[]">	   
							 
						</span></td>
						<td><a href="<?php echo base_url("Apps/CityLines_Delete/".$rowarea['AR_CODE']."/".$city[0]['CT_CODE']) ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure you want to delete this Area Line?');" >Remove</button></a></td>
					    </tr>
					    <?php }?>
						<tr class="odd_new hide" id="optionTemplate">
						    <td><span><input class="form-control" type="text" size="10" maxlength="50" name="APPS_CITY_AREA1[]" ></span></td>
						    <td><span><input class="form-control" type="text" size="10" maxlength="30" name="AR_DESC1[]" ></span></td>
						    <td><span><input class="form-control" type="text" size="10" maxlength="50" name="AR_LATITUDE1[]"></span></td>
						    <td><span><input class="form-control" type="text" size="10" maxlength="500" name="AR_LONGITUDE1[]" ></span></td>
						    <td><span><input  class="form-control" type="checkbox"  checked="checked" id="AR_ACTIVE_YN1[]"name="AR_ACTIVE_YN1[]"  value="Y" ></span></td>
						    <input type="hidden" name="AR_ACTIVE_YN2[]" value="Y" id="AR_ACTIVE_YN2[]">
						    <td><button type="button" class="btn btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
						</tr>
					    </tbody>
                                    </table>
                            </div>
                 	   </div>
			    <div class="form-group">
                                <input type="hidden"  name="proceed" value="yes">
                                <div class="col-md-offset-2 col-md-2">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
				<div class="col-md-2">
				   
                                </div>
				<div class="col-md-2">
				    <input type="submit" class="btn btn-sm btn-success" value="Update" name="proceed">
                                </div>
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

<script type="text/javascript">
$(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	
        container: 'tooltip',
	feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            ct_code: {
		message: 'The City Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The  City Code is required and can\'t be empty'
                    },
		    regexp:{
			regexp: /^[A-Z]+$/,
			message: 'The  City Code consist of CApital Letters only don\'t use white space '
		    },
		   
                }
            },
	    ct_desc: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The City Description is required and can\'t be empty'
                    }
                }
            },
	    ct_latitude: {
		validators: {
		    notEmpty: {
                        message: 'The City Latitude  is required and can\'t be empty'
                    }
                }
            },
	    ct_longitude: {
		validators: {
		    notEmpty: {
                        message: 'The  City Longitude  is required and can\'t be empty'
                    }
                }
            },
	    
	     ct_cn_code: {
		validators: {
		    notEmpty: {
                        message: 'The Select Country '
                    }
                }
            },
	       ct_st_code: {
		validators: {
		    notEmpty: {
                        message: 'The Select State '
                    }
                }
            },
	    'APPS_CITY_AREA1[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The  Area Code is required and can\'t be empty'
                    },
		    regexp:{
			regexp: /^[A-Z]+$/,
			message: 'The  Area Code consist of Capital Letters only and don\'t use white space '
		    },
                }
            },
	    
	     'AR_DESC1[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The Area Description is required and can\'t be empty'
                    }
                }
            },
	       'AR_LATITUDE1[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The Area Latitude  is required and can\'t be empty'
                    }
                }
            },
	    'AR_LONGITUDE1[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The  Area Longitude  is required and can\'t be empty'
                    }
                }
            },'APPS_CITY_AREA[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The  Area Code is required and can\'t be empty'
                    }
                }
            },
	    
	     'AR_DESC[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The Area Description is required and can\'t be empty'
                    }
                }
            },
	       'AR_LATITUDE[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The Area Latitude  is required and can\'t be empty'
                    }
                }
            },
	    'AR_LONGITUDE[]': {
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The  Area Longitude  is required and can\'t be empty'
                    }
                }
            }
	}
    });
})
.on('click', '[name="AR_ACTIVE_YN1[]"]', function()
    {
	
 
  var $row    = $(this).parents('.odd_new');
 
 var item_code=$row.find("input[name='AR_ACTIVE_YN2[]']").val();
 
   
 
    if (item_code=="Y")
    {
 $row.find("input[name='AR_ACTIVE_YN2[]']").attr('value', 'N');
 //alert("N");
 
    }
    else
    {
 $row.find("input[name='AR_ACTIVE_YN2[]']").attr('value', 'Y');
 //alert("Y");
    }

})
.on('click', '[name="AR_ACTIVE_YN[]"]', function()
    {
	
 
  var $row    = $(this).parents('.odd');
 
 var item_code=$row.find("input[name='AR_ACTIVE_YN1[]']").val();
 
   
 
    if (item_code=="Y")
    {
 $row.find("input[name='AR_ACTIVE_YN1[]']").attr('value', 'N');
 //alert("N");
 
    }
    else
    {
 $row.find("input[name='AR_ACTIVE_YN1[]']").attr('value', 'Y');
 //alert("Y");
    }

});



function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}
</script>
<script>
$(document).ready(function() {
    
    
    $("#Add").click(function(){
	var val=1;
    $("#definevalue").val(val);
    
     });
    
    
    
    var cn_code=$("#ct_cn_code").val();
    var ct_code=$("#ct_code").val() ;
	
	//alert(cn_code);
	$.ajax({
	type: "POST",                                
	url: "<?=base_url()?>Apps/ajaxcitySelected",
	data:{cn_code:cn_code, ct_code:ct_code} ,
	success: function (responseData) {
	    
	    console.log(responseData);
	    	$('*#ct_st_code').html(responseData);
		dropdown();

	},
	});
    
var row_count=2;
   $(".addButton").click(function(){
    
   var $template = $('#optionTemplate');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   
   $clone.find('[name="add1"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('name','add_'+row_count);
  
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
    row_count++;
   removerow();
   });
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row   = $(this).parents('.odd');
   $row.remove();
   });
   }
   
  
   
   });
   
   
   
</script>



<script type="text/javascript">
    function dropdown() {
			    FormPlugins.init();
			}
	$(function(){
	    
	$("#ct_cn_code").change(function() {
	var cn_code=$('option:selected', this).val() ;
	
	//alert(cn_code);
	$.ajax({
	type: "POST",                                
	url: "<?=base_url()?>Apps/ajaxcity",
	data:{cn_code:cn_code} ,
	success: function (responseData) {
	    
	    console.log(responseData);
	    	$('*#ct_st_code').html(responseData);
		dropdown();

	},
	});
	});});
	
	$(function(){
	$("#ct_latitude").mask("99.9999\u00B0?a");
	$("#ct_longitude").mask("99.9999\u00B0?a");
	
	});

	$(document).ready(function() {
			//App.init();
			dropdown();
			
			
		});
	</script>	
	
</body>

</html>

