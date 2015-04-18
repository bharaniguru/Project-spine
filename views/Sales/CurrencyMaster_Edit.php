<?
//Modified by rafeeq
error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div class="content" id="content">
    <!-- begin breadcrumb -->

    <ol class="breadcrumb pull-right">
        <li>
            <a href="javascript:;">Sales</a>
        </li>

        <li>
            <a href="javascript:;">Currency Master</a>
        </li>
	<li>
            <a href="javascript:;">Edit</a>
        </li>
    </ol><!-- end breadcrumb -->
    <!-- begin page-header -->

    <h1 class="page-header">Edit Currency Master <small>you may edit here...</small></h1><!-- end page-header -->
    <!-- begin row -->

    <div class="row">
        <!-- begin  -->

        <div class="ui-sortable">
            <!-- begin panel -->

            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a class="btn btn-xs btn-icon btn-circle btn-default fa fa-expand" data-click="panel-expand" href="javascript:;" style="font-style: italic"></a> <a class=
                        "btn btn-xs btn-icon btn-circle btn-success fa fa-repeat" data-click="panel-reload" href="javascript:;" style="font-style: italic"></a> <a class=
                        "btn btn-xs btn-icon btn-circle btn-warning fa fa-minus" data-click="panel-collapse" href="javascript:;" style="font-style: italic"></a> 
                        <!--<a data-click="panel-remove" class="btn btn-xs btn-icon btn-circle btn-danger" href="javascript:;"><i class="fa fa-times"></i></a>-->
                    </div>

                    <h4 class="panel-title">Currency Master</h4>
                </div>

                <div class="panel-body">
		      <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <form action="<?php echo base_url();?>Sales/CurrencyMaster_Edit" method="post" class="form-horizontal" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
			<fieldset>
			    
			    <div class="form-group">
				<label class="col-md-2 control-label">Currency Code</label>
				    
				<div class="col-md-3">
				    <input class="form-control" readonly placeholder="CCY_CODE" type="text" value="<?php echo $cur[0]->CCY_CODE;  ?>" name="CCY_CODE">
				
				</div>
				    
				<div class="col-md-3">
				    <div class="checkbox">
					<label>
					    <input type="checkbox"  <?php if('Y'==( $cur[0]->CCY_ACTIVE_YN)){
									    echo 'checked="checked"';
									    }else{
										//echo 'checked=""';
									    }
								    ?> name="CCY_ACTIVE_YN" id="CCY_ACTIVE_YN">
					    Active?
					</label>
				    </div>
				</div>
			    </div>
				    
			    <div class="form-group">
				<label class="col-md-2 control-label">Description</label>
				    
				<div class="col-md-5">
				    <input class="form-control" list="list" placeholder="CCY_DESC" type="text" value="<?php echo $cur[0]->CCY_DESC;?>" name="CCY_DESC" id="CCY_DESC">
				</div>
			    </div>
				    
			    <div class="form-group">
				<label class="col-md-2 control-label">Symbol</label>
				    
				<div class="col-md-5">
				    <input class="form-control" list="list" placeholder="CCY_SYMBOL" type="text" value="<?php echo $cur[0]->CCY_SYMBOL;?>" name="CCY_SYMBOL" id="CCY_SYMBOL">
				</div>
			    </div>
				    
			    <div class="form-group">
				<label class="col-md-2 control-label">Precision</label>
				    
				<div class="col-md-5">
				    <input class="form-control" list="list" placeholder="CCY_PRECISION" type="text" value="<?php echo $cur[0]->CCY_PRECISION;?>" name="CCY_PRECISION" id="CCY_PRECISION">
				</div>
			    </div>
				    
			    <div class="form-group">
				<label class="col-md-2 control-label">Format</label>
				    
				<div class="col-md-5">
				    <input class="form-control" list="list" placeholder="CCY_FORMAT" type="text" value="<?php echo $cur[0]->CCY_FORMAT;?>"name="CCY_FORMAT" id="CCY_FORMAT">
				</div>
			    </div>
				    
			    
    
				<div class="form-group">
                                            <label class="col-md-2 control-label"> From Date</label>
                                            <div class="col-md-5">
                                                <input type="text" placeholder="Date Start" name="CCY_FROM_DT" id="datetimepicker6" class="form-control" >
					  </div>
					 </div>
				<div class="form-group">
                                             <label class="col-md-2 control-label">Upto Date</label>
					     <div class="col-md-5">
						<input type="text" placeholder="Date End" name="CCY_UPTO_DT" id="datetimepicker7" class="form-control" >
                                             </div>
				</div>
			    
				    
			    <div class="form-group hidden">
				<label class="col-md-2 control-label">hidden data</label>
				
				<div class="col-md-5">
				    <input class="form-control" placeholder="CCY_CODE" type="hidden" name="CCY_COMP_CODE" value="<?php echo $cur[0]->CCY_COMP_CODE;  ?>">
				</div>
				
				<div class="col-md-5 ">
				    <input class="form-control" placeholder="CCY_LANG_CODE" type="text" name="CCY_LANG_CODE" id="CCY_LANG_CODE" value="<?php echo $cur[0]->CCY_LANG_CODE; ?>">
				</div>
				
				<!--<div class="col-md-5 ">
				    <input class="form-control"  placeholder="CCY_UPD_UID" type="text" name="CCY_UPD_UID" id="CCY_UPD_UID" value="AR">
				</div>
				
				<div class="col-md-5 ">
				    <input type="text" name="CCY_UPD_DT" class="CCY_UPD_DT" id="datepicker-inline" data-date-format='dd-M-yy'>                                                    
				</div>-->
				
				
				
			    </div>
			</fieldset>
			<div class="pager form-group">
			    <div class="col-md-6 control-label">
			       <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="update" id="update" value="Update">Update</button>
			       <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
			    </div>
			    <div class="col-md-6">
				
			    </div>
			</div>
		    </form>
                </div>
            </div><!-- end panel -->
        </div><!-- end  -->
    </div><!-- end row -->
</div>
</body>
</html>
<script>
        //$(".CCY_UPD_DT").datepicker().datepicker("setDate", new Date());
</script>
<script>
$(document).ready(function() {


$('#myForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        
        fields: {
            CCY_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
//                    remote: {
//			message: 'Class code already existed',
//			url: '<?php  echo site_url('Sales/AjaxCurrency')?>',
//			type: 'POST'
//			},
//		    regexp: {
//                       regexp: /^[A-Z0-9]+$/,
//                        message: 'Disallowed charcter'
//                    }
                    
                }
            },
            CCY_DESC: {
		message: 'The Description is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 2,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    regexp: {
                       regexp: /^[a-zA-Z0-9_ \.]+$/,
                        message: 'Disallowed charcter'
                    }
                    
                }
            },
            CCY_SYMBOL: {
		message: 'The Symbol is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 1,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    //regexp: {
                    //   regexp: /^[a-zA-Z0-9_ \.]+$/,
                    //    message: 'Alphabets only and space not allowed'
                    //}
                    
                }
            },
            CCY_PRECISION: {
		message: 'The precision is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 1,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    regexp: {
                       regexp: /^[a-zA-Z0-9_ \.]+$/,
                        message: 'Disallowed Characters'
                    }
                    
                }
            },
            CCY_FORMAT: {
		message: 'The format is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    //stringLength: {
                    //    min: 1,
                    //    max: 10,
                    //    message: 'This field must be more than 1 and less than 10 characters long'
                    //},
                    regexp: {
                       regexp: /^[a-zA-Z0-9_ \.]+$/,
                        message: 'Disallowed Character'
                    }
                    
                }
            },
	    CCY_FROM_DT: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            },
            CCY_UPTO_DT: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            }
	}
    });
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
<script>
    
    

    $('#clear_data').click(function(){
        $(myForm).bootstrapValidator();
        $(myForm).data('bootstrapValidator').resetForm();
        $('#myForm')[0].reset();
    });
    
    $(".CCY_CR_DT").datepicker().datepicker("setDate", new Date());
    
    $(document).on('change','#CCY_UPTO_DT',function(event){
        event.preventDefault();
           var startDate = $('#CCY_FROM_DT').val();
            var endDate = $('#CCY_UPTO_DT').val();

        if (startDate > endDate){
            document.getElementById('CCY_FROM_DT').value=endDate;
        }
    });
    $(document).on('change','#CCY_FROM_DT',function(event){
        event.preventDefault();
        var startDate = $('#CCY_FROM_DT').val();
        var endDate = $('#CCY_UPTO_DT').val();

        if (endDate!="") {
            if (startDate > endDate){
            document.getElementById('CCY_UPTO_DT').value=startDate;
            }
        }
           

    });
    
//    $(document).on('blur','#CCY_CODE',function(event){
//	event.preventDefault();
//	var ccy_code = $("#CCY_CODE").val();
//	//alert("yes");
//	if (ccy_code!="") {//if open
//	jQuery.ajax({
//	type:"POST",
//	url: "<?php echo base_url(); ?>" + "Sales/Check_Ccy_Code",
//	dataType: 'json',
//	data: {ccy_code: ccy_code},
//	success: function(json) {
//	    if (json)
//	    {
//	    // Show Entered Value
//	    //jQuery("div#result").show();
//	    
//	    var exist=json.existyn;
//            //alert(exist);
//		if (exist=="Y") {
//		    alert("Existing code");
//		    document.getElementById("CCY_CODE").value="";
//                    $(myForm).bootstrapValidator();
//        $(myForm).data('bootstrapValidator').resetForm();
//        $('#myForm')[0].reset();
//		}
//	    }
//	}
//        });
// 
//	}//if close
//	});
//    
          


</script>