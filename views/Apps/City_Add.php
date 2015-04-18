 <!--
	    functionality By: Gobi. C
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Add City</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add City <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add City</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <div class="col-md-offset-1 col-md-10">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Apps/City_Add'); ?>" class="form-horizontal">
			     <input type="hidden" id="row_contains" name="row_contains" value="1" />
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">City Code</label>
				<div class="col-md-4">
				    <input type="text" name="ct_code" id="ct_code" class="form-control" placeholder="CT_CODE" />
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input checked="checked" name="ct_active_yn" value="Y" type="checkbox" >
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-4">
				    <input type="text" name="ct_desc" id="ct_desc" class="form-control" placeholder="CT_DESC" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Latitude</label>
				<div class="col-md-4">
				    <input type="text" name="ct_latitude" id="ct_latitude"  class="form-control" placeholder="CT_LATITUDE" />
				</div>    
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Longitude</label>
				<div class="col-md-4">
				    <input type="text" name="ct_longitude" id="ct_longitude" class="form-control" placeholder="CT_LONGITUDE" />
				</div>    
			    </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label" >Country</label>
                              <div class="col-md-4">
                                  <select class="form-control" id='ct_cn_code' name="ct_cn_code" >
                                      <option selected disabled >Select</option>
				       <?php if (count($country) > 0 )
                                             {
                                             foreach ($country as $row)
                                             {
                                        ?>
					<option value="<?php echo $row['CN_CODE']; ?>"><?php echo $row['CN_DESC']; ?></option>
                                        <?php } }?>>
                                  </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label" >State</label>
                              <div class="col-md-4">
                                  <select class="form-control" name="ct_st_code" id="ct_st_code">
					
                                  </select>
                              </div>
                           </div>
                            <div class="form-group">
				
				<div class="col-md-4">
				   <button class="btn btn-sm btn-inverse" type="button" id="Add" data-toggle="collapse" data-target="#demo">Define Area</button>
				    <input type="hidden" name="definevalue" id="definevalue">
				</div>    
			   </div>
                            <div class="form-group collapse" id="demo" >
				<div class="table-responsive">
                                    <table class="table table-bordered">
					<thead>
						<tr>
							<th>Area Code</th>
							<th>Description</th>
							<th>Latitude</th>
							<th>Longitude</th>
							<th>Active</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>
					    <tr class="odd">
						<input type="hidden" name="add_1" value="1" >
						<input type="hidden" name="add1" value="1" >
						<td><span><input  class="" type="text" size="10" maxlength="50" name="APPS_CITY_AREA[]" ></span></td>
						<td><span><input class="" type="text" size="10" maxlength="30" name="AR_DESC[]" ></span></td>
						<td><span><input class="" type="text" size="10" maxlength="50" name="AR_LATITUDE[]"></span></td>
						<td><span><input class="" type="text" size="10" maxlength="500" name="AR_LONGITUDE[]" ></span></td>
						<td><span><input  class="" type="checkbox"  checked="checked" id="AR_ACTIVE_YN[]"name="AR_ACTIVE_YN[]"  value="Y" ></span></td>
						<input type="hidden" name="AR_ACTIVE_YN1[]" value="Y" id="AR_ACTIVE_YN1[]">
						<td><button type="button" class="btn btn-primary btn-sm addButton" data-template="textbox">Add</button></td>
					    </tr>
					    <tr class="odd hide" id="optionTemplate">
						<input type="hidden" name="add" value="1" >
						<input type="hidden" name="add1" value="1" >
						   
						<td><span><input class="" type="text" size="10" maxlength="50" name="APPS_CITY_AREA[]" ></span></td>
						<td><span><input class="" type="text" size="10" maxlength="30" name="AR_DESC[]" ></span></td>
						<td><span><input class="" type="text" size="10" maxlength="50" name="AR_LATITUDE[]"></span></td>
						<td><span><input class="" type="text" size="10" maxlength="500" name="AR_LONGITUDE[]" ></span></td>
						<td><span><input class="" type="checkbox"  checked="checked" id="AR_ACTIVE_YN[]"name="AR_ACTIVE_YN[]"  value="Y" ></span></td>
						<input type="hidden" name="AR_ACTIVE_YN1[]" value="Y" id="AR_ACTIVE_YN1[]">
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
				    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <input type="submit" class="btn btn-sm btn-success" name="proceed" value="Save">
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
		    stringLength:{
			min: 3,
			max: 30,
			message: 'The  City Code must be more than 3 and less than 30 characters long'
		    },
		    regexp:{
			regexp: /^[A-Z]+$/,
			message: 'The  City Code consist of Capital Letters only and don\'t use white space '
		    },
		    remote:{
			message: 'The  City Code IS ALREADY EXISTS',
			url: '<?php  echo site_url('Apps/AjaxCheckCityCode')?>',
			type: 'POST'
		    }
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
	    'APPS_CITY_AREA[]': {
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

function form_reset()
{
$('#form_validation').trigger("reset");
}


</script>
<script>
$(document).ready(function() {
    
    
    $("#Add").click(function(){
	var val=1;
    $("#definevalue").val(val);
    
     });
    
var row_count=2;
   $(".addButton").click(function(){
    
   var $template = $('#optionTemplate');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   
   $clone.find('[name="add1"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('value',row_count);
    $clone.find('[name="add"]').attr('name','add_'+row_count);
  
    $clone.find('[name="user_active_status"]').attr('name', 'user_active_status_'+row_count);
   
    $name   = $clone.find('[name="APPS_CITY_AREA[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="AR_DESC[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="AR_LATITUDE[]"]');
    $('#form_validation').bootstrapValidator('addField', $name);
    $name   = $clone.find('[name="AR_LONGITUDE[]"]');
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
	});
	});

	$(document).ready(function() {
			//App.init();
			dropdown();
			
			
		});
	
	$(function(){
	$("#ct_latitude").mask("99.9999\u00B0?a");
	$("#ct_longitude").mask("99.9999\u00B0?a");
	//$("#ct_latitude").on("blur", function()
	//{
	//  // var str1 = "test123.00".replace ( /[^\d.]/g, '' );
	//  //var  str2 = "yes50.00".replace ( /[^\d.]/g, '' );
	//  //var   total = parseInt(str1, 10) + parseInt(str2, 10);
	//  //alert(total);
	//    
	//    
	//var value = $(this).val();
	//var degree='\u00B0';
	//var slph=value.replace(/[0-9.]/g, '');
	//var number = value.replace ( /[^\d.]/g, '' );
	//value=number+degree+slph;
	//$(this).val( value );
	//})
	});
	</script>


<script>
     
</script>
	
	
</body>

</html>

