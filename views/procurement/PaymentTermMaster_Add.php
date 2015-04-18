<!--Author: Gobi.C
Created on: 04/03/15
Modified on: 18/03/15
-->


<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Procurement</a></li>
	
	<li class="active">Add Payment TermMaster</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Payment TermMaster <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Payment TermMaster</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-2 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/PaymentTermMaster_Add'); ?>"class="form-horizontal  form12">
			    <div class="form-group">
				 <label class="col-md-3 control-label">Payment Term Code</label>
				 <div class="col-md-5">
				    <input type="text" name="PT_CODE" placeholder="PT_CODE" id="ct_code" class="form-control">
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
					<input type="checkbox" value="Y"checked="checked" name="active_check">
				      Active?
				  </label>
				     </div>
				 </div>
			   </div>
			    
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-5 ">
				    <input type="text" name="PT_DESC" placeholder="PT_DESC" id="PT_DESC" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-5 ">
                                <input type="text" placeholder="PT_FROM_DT" name="PT_FROM_DT" id="datetimepicker6" class="form-control"  >
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-5 ">
                                                   <input type="text" placeholder="PT_UPTO_DT" name="PT_UPTO_DT" id="datetimepicker7" class="form-control" >
				</div>
			    </div>
			    
			
			    
			    
			    
			    
			    <div class="col-md-offset-1 col-md-6">
			<div class="form-group">
			   <label class="col col-4"></label>
			   <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
			   <button class="btn btn-md btn-info " onclick=" Clear();" type="button"> Reset </button>
			   <button type="submit" class="btn btn-md btn-success" name="submit_form" id="submit_but" value="Save" >Submit</button>
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
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
           PT_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'PT_CODE is required'
                    },
		    remote: {
                        message: 'PT_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Procurement/Ajax_PT_CODE')?>',
                        type: 'POST'
                    }
		    ,
		    regexp: {
		    regexp: /^[A-Z0-9]+$/,
		    message: 'The PT_CODE can consist of alphabetical characters and number only, Space not allowed'
		    }
                   
                }
            },
	    PT_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'PT_DESC is required'
                    }
                   
                }
            },
//	    PT_FROM_DT: {
//		
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'PT_FROM_DT is required'
//                    }
//                   
//                }
//            },
//	    PT_UPTO_DT: {
//		
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'PT_UPTO_DT is required'
//                    }
//                   
//                }
//            },
	}
    });
});



 function Clear()
      {
	$('.form12').trigger("reset");
      }
      
</script>

<script type="text/javascript">
$(function () {
$('#datetimepicker6').datetimepicker({
    format: 'DD-MMM-YYYY'
				     });
$('#datetimepicker7').datetimepicker({
    format: 'DD-MMM-YYYY'
    });
$("#datetimepicker6").on("dp.change",function (e) {
$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
$('#datetimepicker7').val("");
});
$("#datetimepicker7").on("dp.change",function (e) {
$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});
});
</script>
	
	
</body>

</html>

