<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<!--Author: gobi.C
Created on: 04/03/15
Modified on: 24/03/15
-->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Add Country</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Country <small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Country</h4>
		    
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <div class="col-md-offset-1 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Apps/Country_Add'); ?>" class="form-horizontal form12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Country Code</label>
				<div class="col-md-5">
				    <input type="text" name="cn_code" id="cn_code"  class="form-control" placeholder="CN COUNTRY" />
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input name="cn_active_yn" id="cn_active_yn" type="checkbox" value="">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="cn_desc" id="cn_desc" class="form-control" placeholder="CN_DESCRIPTION" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Latitude</label>
				<div class="col-md-5">
				    <input type="text" name="cn_latitude" id="cn_latitude"class="form-control" placeholder="CN LATITUDE" />
				</div>    
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Longitude</label>
				<div class="col-md-5">
				    <input type="text" name="cn_longitude" id="cn_longitude" class="form-control" placeholder="CN LONGITUDE" />
				</div>    
			    </div>
			    <div class="form-group">
                                <div class="col-md-offset-2 col-md-2">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
				<div class="col-md-2">
				    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <input type="submit" name='proceed' class="btn btn-sm btn-success" id="proceed" value="Save">
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
            cn_code: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The CN CODE is required and can\'t be empty'
                    },
		    stringLength:{
                        min: 3,
                        max: 30,
                        message: 'The CN CODE must be more than 3 and less than 30 characters long'
                    },
                    regexp:{
                        regexp: /^[A-Z]+$/,
                        message: 'The CN CODE consist of CApital Letters only and don\'t use white space '
                    },
		    remote:{
                        message: 'The CN CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Apps/AjaxCheckCountryCode')?>',
                        type: 'POST'
                    }
                }
            },
	    cn_desc: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The CN Description is required and can\'t be empty'
                    }
                }
            },
	    cn_latitude: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The CN Latitude is required and can\'t be empty'
                    }
                }
            },
	    cn_longitude: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The CN longitude is required and can\'t be empty'
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
    });
});

function form_reset() {
$('.form12').trigger("reset");
 $('#cn_code').removeAttr('disabled');
  $('#proceed').removeAttr('disabled');
 
}
$(function(){
	$("#cn_latitude").mask("99.9999\u00B0?a");
	$("#cn_longitude").mask("99.9999\u00B0?a");
	
	});
//
//function check(){
//var cn_code=$('#cn_code').val();
//
//$.ajax({
//type:"POST",
//datatype:'json',
//url:"<?php  echo site_url('Apps/AjaxCheckCountryCode')?>",
//data:{code:cn_code},
//success: function(json)
//{
//    
//    
//    $('#cn_code').val(json[0].CN_CODE);
//    $('#cn_desc').val(json[0].CN_DESC);
//    $('#cn_latitude').val(json[0].CN_LATITUDE);
//    $('#cn_longitude').val(json[0].CN_LONGITUDE);
//    $('#cn_code').attr('disabled','disabled');
//    if (json[0].CN_LONGITUDE!="N")
//    {
//	$('#cn_active_yn').attr('checked','checked');
//
//    }
//    else
//    {
//	 $('#cn_active_yn').removeAttr('checked');
//    }
//   $('#proceed').attr('disabled','disabled');
//    alert(cn_code+" "+" This code is Already existed");
//
//}
//});
//}


</script>

	
	
</body>

</html>

