<!--Author: gobi.C
Created on: 04/03/15
Modified on: 24/03/15
-->
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Edit Country</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Country <small> Check the details here...</small></h1>
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
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo site_url('Apps/Country_Edit/'.$country[0]['CN_CODE'])?>"  class="form-horizontal">
			    <div class="form-group">
				<label class="col-md-3 control-label">Country</label>
				<div class="col-md-5">
				    <input type="text" name="cn_code" class="form-control" placeholder="CN_CODE" id="cn_code" readonly value="<?php echo $country[0]['CN_CODE'];?>" >&nbsp;<span id="errmsg"></span>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input type="checkbox"  name="cn_active_yn" id="cn_active_yn" value="Y" <?php if($country[0]['CN_ACTIVE_YN']=='Y') echo "checked";?>>
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="cn_desc" class="form-control" placeholder="CN_DESC" id="cn_desc" class="" value="<?php echo $country[0]['CN_DESC'];?>">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Latitude</label>
				<div class="col-md-5">
				    <input type="text" name="cn_latitude" class="form-control" placeholder="CN_LATITUDE" id="cn_latitude" class="" value="<?php echo $country[0]['CN_LATITUDE'];?>">
				</div>    
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Longitude</label>
				<div class="col-md-5">
				    <input type="text" name="cn_longitude"  class="form-control" placeholder="CN_LONGITUDE" id="cn_longitude" class="" value="<?php echo $country[0]['CN_LONGITUDE'];?>">
				</div>    
			    </div>
			    <div class="form-group">
                                <div class="col-md-offset-2 col-md-2">
				    <a  href="<?php echo site_url('apps/ViewCountry')?>"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a>
                                </div>
				<div class="col-md-2">
				    <input type="submit" name="save" class="btn btn-sm btn-success" id="submit_but" value="Update">
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
		message: 'The CN CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CN CODE is required and can\'t be empty'
                    }
                }
            },
	    cn_desc: {
		message: 'The CN CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CN CODE is required and can\'t be empty'
                    }
                }
            },
	    cn_latitude: {
		message: 'The CN CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CN CODE is required and can\'t be empty'
                    }
                }
            },
	    cn_longitude: {
		message: 'The CN CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CN CODE is required and can\'t be empty'
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

$(function(){
	$("#cn_latitude").mask("99.9999\u00B0?a");
	$("#cn_longitude").mask("99.9999\u00B0?a");
	
	});

function form_reset() {
$('input[type=text]').val('');
$('input[type=checkbox]').removeAttr('checked');
}
</script>
</body>
</html>

