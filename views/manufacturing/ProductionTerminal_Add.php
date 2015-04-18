<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Manufacturing</a></li>
	<li class="active">Add Production Terminal</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Production Terminal<small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Add Production Terminal</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
			<form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('ManufacturingController/ProductionTerminal_Add'); ?>" data-bv-trigger="blur" class="form-horizontal">
			   <div class="col-md-offset-1 col-md-7">
			    <div class="form-group">
				<label class="col-md-3 control-label">Product Code</label>
				<div class="col-md-5">
				    <select class="form-control" onchange="Product_code()" name="pt_pro_code" id="pro_code" >
					<option disabled="" selected="" value="0">Select Code</option>
				    <?php foreach($code as $answer){ ?>
				    <option value="<?php echo $answer['ITEM_CODE'];?>"><?php echo $answer['ITEM_CODE'];?></option>
					<?php } ?>
					</select>
				</div>
				<div class="col-md-offset-2 col-md-2 checkbox">
				    <label>
				    <input name="pt_cn_active_yn" id="pt_cn_active_yn" type="checkbox" value="">
				    Active ?
				    </label>
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Product Description</label>
				<div class="col-md-9">
				    <input type="text" name="pt_pro_desc" id="pro_desc" class="form-control" placeholder="ITEM_DESC" readonly/>
				</div>
			    </div>
			     </div>
			    <div class="col-md-offset col-md-12">
				<div class="form-group">
                     <div class="widget-body">
                                                <div class="table-responsive">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Terminal MAC</th>
                                                            <th>Terminal Description</th>
                                                            <th>Process</th>
                                                            <th>From Date</th>
                                                            <th>Upto Date</th>
							    <th>Active</th>	
							 </tr>
                                                      </thead>
                                                      <tbody>
<tr>
       <td><input type="text" name="pt_terminal_mac" class="form-control" value="" id="company"></td>
       <td><input type="text" name="pt_terminal_desc" class="form-control"></td>
       <td>				    <select class="form-control" name="pt_process[]">
					<?php foreach($pro as $val) {?>
					<option value="<?php echo $val['VSL_CODE'];?>"><?php echo $val['VSL_CODE'];?></option>
					<?php } ?>
				    </select></span></td>
       <td><input type="text" placeholder="From Date" name="pt_from_date" id="from_date" class="form-control datepicker-dob input-daterange" ></td>
       <td><input type="text" placeholder="Upto Date" name="pt_upto_date" id="upto_date" class="form-control datepicker-dob input-daterange" ></td>
       <td><input type="checkbox" name="pt_active_yn" checked="check" value="Y"></td>
   </tr>

                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
			    </div></div>
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group">
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick=" Clear();" type="button"> Reset </button>				    
				    <input type="submit" class="btn btn-md btn-success" name="save" value="Submit">
				 </div>
			      </div>	    
			</form>
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
    $('.datepicker-dob').datetimepicker({
      format: 'DD-MMM-YY'
      })
    datepicker();
function datepicker()
{
    $('#from_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
$('#upto_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    
$("#from_date").on("dp.change",function (e) {
$('#upto_date').data("DateTimePicker").minDate(e.date);
});
$("#upto_date").on("dp.change",function (e) {
$('#from_date').data("DateTimePicker").maxDate(e.date);
});

} 
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',	
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            pt_pro_code: {
                validators: {
		    
                    notEmpty: {
                        message: 'The Product Code is required and can\'t be empty'
                    },
                }
		
            },
            'pt_terminal_mac': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Terminal Mac is required and can\'t be empty'
                    },
                }
		
            },
            'pt_terminal_desc': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Terminal Description is required and can\'t be empty'
                    },
                }
		
            },
            'pt_process': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Process is required and can\'t be empty'
                    },
                }
		
            },
            'pt_from_date': {
                validators: {
		    
                    notEmpty: {
                        message: 'The From Date is required and can\'t be empty'
                    },
                }
		
            },
            'pt_upto_date': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Upto Date is required and can\'t be empty'
                    },
                }
		
            },
            'pt_active_yn': {
                validators: {
		    
                    notEmpty: {
                        message: 'The Active check is required and can\'t be empty'
                    },
                }
		
            },		    
	}
    });
});
</script>


<script type="text/javascript">
    function Product_code(){
    var bh_code=$('#pro_code').val() ;
    //alert(bh_code);
    $.ajax({
	type: "POST",
	url: "<?=base_url()?>manufacturingController/GetInvt_M_ItemTable",
	data:{pro_code:bh_code} ,
	success: function (responseData) {
		    $('#pro_desc').val(responseData);
		    },
		    });

    };
</script>


	
	
</body>

</html>

