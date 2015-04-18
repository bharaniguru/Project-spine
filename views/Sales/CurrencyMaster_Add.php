<?
//Modified by Hakkim
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
            <a href="javascript:;">Add</a>
        </li>

    </ol><!-- end breadcrumb -->
    <!-- begin page-header -->

    <h1 class="page-header">Add Currency Master <small> you may add here...</small></h1><!-- end page-header -->
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

                    <h4 class="panel-title">Add Currency Master</h4>
                </div>

                <div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <form action="<?php echo base_url();?>Sales/CurrencyMaster_Add" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                        <div class="row">
                            <!--OUTER row defined BEGIN-->

                            <div class="col-md-6 ui-sortable">
                                <!-- FIRST COL-6 BEGIN-->

                                <div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Company Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_COMP_CODE" name="CCY_COMP_CODE" placeholder="CCY_LANG_CODE" type="text" value="001">
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->
				
				<div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Language Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_LANG_CODE" name="CCY_LANG_CODE" placeholder="CCY_LANG_CODE" type="text" value="EN">
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->

                                <div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Created Date</label>

                                        <div class="col-md-8">
                                            <input type="text" name="CCY_CR_DT" class="CCY_CR_DT" id="datepicker-inline" data-date-format='dd-M-yy'>
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->

                                <div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Creator User Id</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_CR_UID" name="CCY_CR_UID" placeholder="CCY_CR_UID" type="text" value="ARM">
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->

                                <div class="row">
                                    <!--Inner row defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Currency Code</label>

                                        <div class="col-md-6">
                                            <!--<span class="WebRupee">--><input class="form-control" id="CCY_CODE" name="CCY_CODE" placeholder="CCY_CODE" type="text"><!--</span>-->
                                        </div>
					<div class="col-md-3">
                                            <div class="checkbox">
                                                <label><input name="CCY_ACTIVE_YN" id="CCY_ACTIVE_YN" checked="" type="checkbox"> Active?</label>
                                            </div>
                                        </div>
				    </div>
				</div><!--Inner row END-->

                                <div class="row">
                                    <!--Inner row defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_DESC" name="CCY_DESC" placeholder="CCY_DESC" type="text">
                                        </div>
                                    </div>
                                </div><!--Inner row END-->

                                <div class="row">
                                    <!--Inner row defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Symbol</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_SYMBOL" name="CCY_SYMBOL" placeholder="CCY_SYMBOL" type="text">
                                        </div>
                                    </div>
                                </div><!--Inner row END-->

                                <div class="row">
                                    <!--Inner row defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Precision</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_PRECISION" name="CCY_PRECISION" placeholder="CCY_PRECISION" type="text">
                                        </div>
                                    </div>
                                </div><!--Inner row END-->

                                <div class="row">
                                    <!--Inner row defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Format</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CCY_FORMAT" name="CCY_FORMAT" placeholder="CCY_FORMAT" type="text">
                                        </div>
                                    </div>
                                </div><!--Inner row END-->

                                <div class="row">
				    <div class="form-group">
                                            <label class="col-md-3 control-label"> From Date</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="Date Start" name="CCY_FROM_DT" id="datetimepicker6" class="form-control">
					  </div>
					 </div>
					 <div class="form-group">
                                             <label class="col-md-3 control-label">Upto Date</label>
					     <div class="col-md-8">
						<input type="text" placeholder="Date End" name="CCY_UPTO_DT" id="datetimepicker7" class="form-control" >
                                             </div>
					  </div>
                                </div>
                            </div>

                            <div class="col-md-6 ui-sortable">
                                <!-- SECOND COL-6 BEGIN-->
                            </div><!-- SECOND COL-6 END-->
                        </div><!--OUTER row defined END-->

                        <div class="pager form-group">
                             <div class="col-md-6 control-label">
                                <button class="btn btn-danger pull-left m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="save" id="save" value="Save">Submit</button>
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
                    },
                    remote: {
			message: 'Class code already existed',
			url: '<?php  echo site_url('Sales/AjaxCurrency')?>',
			type: 'POST'
			},
		    regexp: {
                       regexp: /^[A-Z0-9]+$/,
                        message: 'Disallowed charcter'
                    }
                    
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
                    //   regexp: /^[A-Z0]+$/,
                    //    message: 'Alphabets only and space not allowed'
                    //}
                    //
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
                       regexp: /^[0-9]+$/,
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
                       regexp: /^[0-9]+$/,
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
    
    //$(document).on('change','#CCY_UPTO_DT',function(event){
    //    event.preventDefault();
    //       var startDate = $('#CCY_FROM_DT').val();
    //        var endDate = $('#CCY_UPTO_DT').val();
    //
    //    if (startDate > endDate){
    //        document.getElementById('CCY_FROM_DT').value=endDate;
    //    }
    //});
    //$(document).on('change','#CCY_FROM_DT',function(event){
    //    event.preventDefault();
    //    var startDate = $('#CCY_FROM_DT').val();
    //    var endDate = $('#CCY_UPTO_DT').val();
    //
    //    if (endDate!="") {
    //        if (startDate > endDate){
    //        document.getElementById('CCY_UPTO_DT').value=startDate;
    //        }
    //    }
    //       
    //
    //});
    
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
//	    
//	    var exist=json.existyn;
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
//	}
//    });
   
</script>
</body>
</html>
