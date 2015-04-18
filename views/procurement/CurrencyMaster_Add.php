<!--Author: Gobi.C
Created on: 04/03/15
Modified on: 18/03/15
-->



<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Procurement</a></li>
	
	<li class="active">Add Currency</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Currency <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Currency</h4>
		</div>
		<div class="panel-body">
		    <div class="col-md-offset-2 col-md-7">
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/CurrencyMaster_Add'); ?>" class="form-horizontal  form12">
			    <div class="form-group">
				 <label class="col-md-3 control-label">Currency Code</label>
				 <div class="col-md-5">
                                                    <input type="text" name="ccy_code"  placeholder="CCY_CODE" id="ct_code" class="form-control">
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
                                                <input type="checkbox" checked="checked" value='Y' name="active_check">
				      Active?
				  </label>
				     </div>
				 </div>
			   </div>
			    
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-5">
                                                <input type="text" name="ccy_desc" placeholder="CCY_DESC" id="ccy_desc" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Symbol</label>
				<div class="col-md-5">
                                                <input type="text" name="CCY_SYMBOL" placeholder="CCY_SYMBOL" id="CCY_SYMBOL" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Precision</label>
				<div class="col-md-5">
                                                <input type="text" name="ccy_prec" placeholder="CCY_PRECISION" id="ccy_prec" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Format</label>
				<div class="col-md-5">
                                                <input type="text" name="ccy_format" placeholder="CCY_FORMAT" id="ccy_format" class="form-control">
				</div>
			    </div>
			
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-5">
				<input type="text" placeholder="CCY_FROM_DT" name="CCY_FROM_DT" id="datetimepicker6" class=" form-control"  >
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label"> Upto Date</label>
				<div class="col-md-5">
				<input type="text" placeholder="CCY_UPTO_DT" name="CCY_UPTO_DT" id="datetimepicker7" class=" form-control" >
				</div>
			    </div>
<!--			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-5">
                                                <input type="text" name="ct_desc" placeholder="CCY_FROM_DT" id="ct_desc" class="form-control">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto date</label>
				<div class="col-md-5">
                                                <input type="text" name="ct_desc" placeholder="CCY_UPTO_DT" id="ct_desc" class="form-control">
				</div>
			    </div>-->
			    
			    
			    
			    <div class="col-md-offset-3 col-md-6">
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
            ccy_code: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_CODE is required'
                    },
		    remote: {
                        message: 'CCY_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Procurement/Ajax_CCY_CODE')?>',
                        type: 'POST'
                    }
                }
            },
	     ccy_desc: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_DESC is required'
                    }
                   
                }
            },
	     CCY_SYMBOL: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_SYMBOL is required'
                    }
                   
                }
            },
	     ccy_prec: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_PRECISION is required'
                    }
                   
                }
            },
	     ccy_format: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_FORMAT is required'
                    }
                   
                }
            },
	     CCY_FROM_DT: {
		
		trigger:"blur",
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_FROM_DT is required'
                    }
                   
                }
            },
	     CCY_UPTO_DT: {
		
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_UPTO_DT is required'
                    }
                   
                }
            },
	
	}
    });
});



 function Clear()
      {
	$('.form12').trigger("reset");
      }
      
      
      $('.datepicker').datetimepicker({
      format: 'DD-MMM-YY'
      
  });
</script>


<script type="text/javascript">
$(function () {
$('#datetimepicker6').datetimepicker({
    format: 'DD-MMM-YY'
				     });
$('#datetimepicker7').datetimepicker({
    format: 'DD-MMM-YY'
    });
$("#datetimepicker6").on("dp.change",function (e) {
$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker7").on("dp.change",function (e) {
$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});
});
</script>

	
	
</body>

</html>

