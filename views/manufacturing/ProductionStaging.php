<script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>

<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
 <? $CI =& get_instance();?>
 <?php
 $status = $this->session->flashdata('status');
 ?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Manufacturing </a></li>
	<li class="active">Production Staging</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Production Staging<small> Enter the correct details here...</small></h1>
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
		    <h4 class="panel-title">Production Staging</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>		    
		    <div class=" col-md-12">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('ManufacturingController/ProductionStaging'); ?>" class="form-horizontal">
			<div class="row">
			    <div class="col-md-9">
				<div class="form-group">
				   
					<label class="col-md-3 control-label">Employee</label>
					<div class="col-md-9">
					    <div class="form-group col-md-6">
						<input type="text" onblur="get_data();" id="employee_code" name="employee" placeholder="PH_STAGE_EMPl"  class="form-control">
					    </div>
					    <div class="form-group col-md-6">
						<input type="text" name="rs_name" placeholder="RS_NAME" id="rs_name" class="form-control" readonly/>
					    </div>
					</div>
				    
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Order Number</label>
					<div class="col-md-9">
					    <div class="form-group col-md-6">
						<input type="text" name="order_no" placeholder="PH_ORDER_NUMBER" id="order_number" class="form-control" readonly />
					    </div>
					    <div class="form-group col-md-6">
						<input type="text" name="customer_desc" placeholder="CUSTOMER_DESCRPITION" id="customer_desc" class="form-control" readonly />
					    </div>
					</div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Product</label>
				    <div class="col-md-9">
					<input type="text" name="ph_pro_code" id="ph_product_code" class="col-sm-3 form-control" placeholder="PH_PROD_CODE" readonly />
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Color</label>
				    <div class="col-md-4">
					<input type="text" name="ph_color" id="ph_color_code" class="form-control" placeholder="PH_COLOR_CODE" readonly />
				    </div>
				    <label class="col-md-1 control-label">Width</label>
				    <div class="col-md-4">
					<input type="text" name="ph_wid" id="ph_width" class="form-control" placeholder="PH_WIDTH" readonly />
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Start Time</label>
				    <div class="col-md-4">
					<input type="text" name="ph_time" id="ph_st_time" class="form-control" placeholder="PH_START_BEGINING" readonly />
				    </div>
				    <label class="col-md-1 control-label">Height</label>
				    <div class="col-md-4">
					<input type="text" name="ph_hei" id="ph_height" class="form-control" placeholder="PH_HEIGHT" readonly />
				    </div>
				</div>
			    </div>
			    <div class="col-md-3">
				<div class="form-group">
				    <input type="submit" name="accept" id="acc" value="Aceept" class="btn btn-md btn-success">
				</div>
			</div>
			</div>
                              <div id="displaytable" class="col-md-12"></div>			    
			   
		    <div class="form-group">
			    <div class="col-md-offset-3 col-md-6">
				 <div class="form-group">
				    			     
				    <input type="submit" class="btn btn-md btn-success" name="save" id="submit_but" value="Send" >
				 </div>
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
 function get_data() {
    //$("#employee_code").attr("disabled", true);
    var employee=$('#employee_code').val() ;
  
    $.ajax({
	type: "POST",
	url: "<?=base_url()?>ManufacturingController/AjaxGetProductHead",
	dataType:"json",
	data:{employee_code:employee} ,
	success: function (json){
	    
	    var error=json;
	    json=json[0];

	    if (error=='error') {
		alert("Enter The Employee code is wrong");
	    }
	    else{
		$("#order_number").val(json.PH_ORDER_NO);
		$("#ph_product_code").val(json.PH_PROD_CODE);
		$("#ph_color_code").val(json.PH_COLOR_CODE);
		$("#ph_width").val(json.PH_WIDTH);
		$("#ph_height").val(json.PH_HEIGHT);
		$("#ph_st_time").val(json.PH_STAG_BEGIN_TIME);
		$("input[type=submit]").attr("disabled", "disabled");
		if ( $('#acc').is(":empty") ) {
		    alert ("disable");
		}
		else {
		    alert ("enable");
		    $("input[type=submit]").removeAttr("enable");
		}		
		linetable(json.PH_SYS_ID);
		//$("#acc").delay(1000).fadeOut(800);
		//$("#submit_but").delay(1000).fadeOut(800);		
		}
		//$("#acc").attr("disabled", false);
		//$("#submit_but").attr("disabled", false);
	    },
	    });
    
    function linetable(code){
	var employee=code;
	    $.ajax({
	type: "POST",
	url: "<?=base_url()?>ManufacturingController/AjaxGetProductline",
	
	data:{employee_code:employee} ,
	success: function (html){
	   
	    		$("#displaytable").html(html);
	    },
	    
	    });
    }
 }
 
//    $(document).ready(function(){
//	$("input[type=submit]").attr("disabled", "disabled");
//	if ( $('#acc').is(":empty") ) {
//	    alert ("disable");
//	}
//	else {
//	    alert ("enable");
//	    $("input[type=submit]").removeAttr("enable");
//	}
//    });
//    
//$("#employee_code").click(function() {
//                $("#employee_code").attr("disabled", true);
//                $.ajax({
//                       url: 'http://localhost:8080/jQueryTest/test.json',
//                       data: { 
//                            action: 'viewRekonInfo'
//                       },
//                       type: 'post',
//                       success: function(response){
//                           //success process here
//                           $("#alertContainer").delay(1000).fadeOut(800);
//                       },
//                       error: errorhandler,
//                       dataType: 'json'
//                });
//                $("#ajaxStart").attr("disabled", false);
//            });    
//    
</script>

</body>

</html>


