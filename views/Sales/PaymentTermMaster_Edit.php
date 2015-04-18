<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div class="content" id="content">
                     <!-- begin breadcrumb -->
                     <ol class="breadcrumb pull-right">
                        <li><a href="javascript:;">Sales</a></li>
                        <li><a href="javascript:;">Payment Term Master</a></li>
			<li><a href="javascript:;">Edit</a></li>
                    </ol>
                     <h1 class="page-header">Payment Term Master <small> You may edit here...</small></h1>
    <div class="row">
             <!-- begin  -->
        <div class="ui-sortable">
                             <!-- begin panel -->
            <div data-sortable-id="form-stuff-1" class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                             <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-default" href="javascript:;"><i class="fa fa-expand"></i></a>
                             <a data-click="panel-reload" class="btn btn-xs btn-icon btn-circle btn-success" href="javascript:;"><i class="fa fa-repeat"></i></a>
                             <a data-click="panel-collapse" class="btn btn-xs btn-icon btn-circle btn-warning" href="javascript:;"><i class="fa fa-minus"></i></a>
                             <!--<a data-click="panel-remove" class="btn btn-xs btn-icon btn-circle btn-danger" href="javascript:;"><i class="fa fa-times"></i></a>-->
                    </div>
                         <h4 class="panel-title">Payment Term Master Edit</h4>
                </div>
                    <?php 
		    //print_r($pay);
		    //echo $pay->PT_CODE;
		   // exit;
		    ?>
                <div class="panel-body">
		  <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <form class="form-horizontal" name="myForm" id="myForm" action="<?php echo base_url();?>Sales/PaymentTermMaster_Edit" method="post" enctype="multipart/form-data">
                        <div class="well">
                             <div class="row"><!--OUTER row defined BEGIN-->
                                 <div class="col-md-6 ui-sortable"><!-- FIRST COL-6 BEGIN-->
                                     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
					    <input class="hidden" id="PT_COMP_CODE" name="PT_COMP_CODE" placeholder="PT_COMP_CODE" type="text" value="<?php echo $pay[0]->PT_COMP_CODE;?>">
					    <input type="hidden" name="PT_LANG_CODE" id="PT_LANG_CODE" value="<?php echo $pay[0]->PT_LANG_CODE;?>">
                                            <!--<input type="hidden" name="PT_UPD_UID" id="PT_UPD_UID" value="ARM">
                                            <input type="hidden" name="PT_UPD_DT" class="PT_UPD_DT" id="datepicker-inline" data-date-format='dd-M-yy'>	-->				    
                                         <label class="col-md-3 control-label">Payment Term Code</label>
                                         <div class="col-md-6">
                                             <input type="text" placeholder="PT_CODE" readonly name="PT_CODE" id="PT_CODE" value="<?php echo $pay[0]->PT_CODE;?>" class="form-control">
                                         </div>
					 <div class="col-md-3">
                                            <div class="checkbox">
                                                <label><input <?php if('Y'==( $pay[0]->PT_ACTIVE_YN)){
											    echo 'checked="checked"';
											    }else{
												//echo 'checked=""';
											    }
								?>name="PT_ACTIVE_YN" id="PT_ACTIVE_YN" type="checkbox" > Active?</label>
                                            </div>
                                        </div>
                                         </div>
                                     </div><!--Inner row END-->
                                     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                             <label class="col-md-3 control-label">Description</label>
                                         <div class="col-md-8">
                                             <input type="text" placeholder="PT_DESC"  name="PT_DESC" id="PT_DESC" value="<?php echo $pay[0]->PT_DESC;?>" class="form-control">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
				     <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> From Date</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="Date Start" name="PT_FROM_DT" id="datetimepicker6" class="form-control value="<?php echo $pay[0]->PT_FROM_DT;?>"">
					  </div>
					 </div>
					 <div class="form-group">
                                             <label class="col-md-3 control-label">Upto Date</label>
					     <div class="col-md-8">
						<input type="text" placeholder="Date End" name="PT_UPTO_DT" id="datetimepicker7" class="form-control value="<?php echo $pay[0]->PT_UPTO_DT;?>"" >
                                             </div>
					  </div>
                                     </div>
                                 </div>
                             </div>
                         </div>    
                        <div class="pager form-group"><!--footer start-->
                             <div class="col-md-6 control-label">
                                <!--<button class="btn btn-danger m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>-->
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="update" id="update" value="Update">Update</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                             <div class="col-md-6">
                                 
                             </div>
                         </div><!--footer end-->
                        
                             
                    </form>
                </div>
            </div>
                 <!-- end panel -->
                 
         </div>
             <!-- end  -->
             
    </div>
         <!-- end row -->
         
</div>
<script>
             //$(document).ready(function() {
             //	//App.init();
             //	//TableManageResponsive.init();
             //	FormPlugins.init();
             //});
</script>

<script>

$('#clear_data').click(function(){
    $('#myForm')[0].reset();
});           
 
     $(".PT_UPD_DT").datepicker().datepicker("setDate", new Date());
     
    $(document).on('change','#PT_UPTO_DT',function(event){
        event.preventDefault();
           var startDate = $('#PT_FROM_DT').val();
            var endDate = $('#PT_UPTO_DT').val();

        if (startDate > endDate){
            document.getElementById('PT_FROM_DT').value=endDate;
        }
    });
    $(document).on('change','#PT_FROM_DT',function(event){
        event.preventDefault();
        var startDate = $('#PT_FROM_DT').val();
        var endDate = $('#PT_UPTO_DT').val();

        if (endDate!="") {
            if (startDate > endDate){
            document.getElementById('PT_UPTO_DT').value=startDate;
            }
        }
           

    });




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
            PT_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 1,
                        max: 10,
                        message: 'This field must be more than 1 and less than 10 characters long'
                    },
                    regexp: {
                        regexp: /^[A-Z0-9]+$/,
                        message: 'Capital alphabets only and space not allowed'
                    }
                    //remote: {
                    //    message: 'The Currency CODE IS ALREADY EXISTS',
                    //    url: '<?php  echo site_url('Sales/check_ccy_code')?>',
                    //    type: 'POST'
                    //}
                    
                }
            },
            PT_DESC: {
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
            PT_FROM_DT: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            },
            PT_UPTO_DT: {
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
 
    //$(".PT_UPD_DT").datepicker().datepicker("setDate", new Date());
    
    $(document).on('blur','#PT_CODE',function(event){
	event.preventDefault();
	var pt_code = $("#PT_CODE").val();
	//alert("yes");
	if (pt_code!="") {//if open
	jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Check_Pt_Code",
	dataType: 'json',
	data: {pt_code: pt_code},
	success: function(json) {
	    if (json)
	    {
	    // Show Entered Value
	    //jQuery("div#result").show();
	    
	    var exist=json.existyn;
            //alert(exist);
		if (exist=="Y") {
		    alert("Existing code");
		    document.getElementById("PT_CODE").value="";
                    $(myForm).bootstrapValidator();
        $(myForm).data('bootstrapValidator').resetForm();
        $('#myForm')[0].reset();
		}
	    }
	}
        });
 
	}//if close
    });
     




</script>
</body>
</html>
