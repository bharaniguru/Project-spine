<!-- modified By Pravinkumar@appnlogic.com-->
<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">Activity Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
			<p style="color:red"><?php echo $error; ?></p>
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">New Activity Master</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Finance/ActivityMaster_Add'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Activity Code</label>
				   
				    <div class="col-md-6">
					<input type="text" name="ACTH_CODE" id="ACTH_CODE" class="form-control" placeholder="ACTH_CODE" />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Descripition</label>
				<div class="col-md-9">
					<input type="text" name="ACTH_DESC" id="ACTH_DESC" class="form-control" placeholder="ACTH_DESC" />
				    </div>
			    </div>
			</div>
			
			
                        <div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-9">
				    <input type="text" name="ACTH_FROM_DT" id="datepicker" class="form-control" placeholder="ACTH_FROM_DT" />
				</div>
			    </div>
			</div>
                        <div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-9">
				    <input type="text" name="ACTH_UPTO_DT" id="datepicker" class="form-control" placeholder="ACTH_UPTO_DT" />
				</div>
			    </div>
			</div>
			
		    </div>
		    <div class="col-md-6">
			<div class="row">
                        <section class="col col-2">
                        <label class="">
                        <input type="checkbox" name="a_master" checked="checked" value="Y" > Active ?
                        </label>
                        </section>
                        </div>
		    </div>
		   
		    <h4 class="col-md-12">&nbsp;</h4>
		    <div class=" col-md-12">
					<ul class="nav nav-pills tab_nav">
					    <li class="active">
						<a data-toggle="tab" href="#nav-pills-tab-1">&nbsp; Lines &nbsp;</a>
					    </li>
					</ul>
					<div class="tab-content">
					    <div id="nav-pills-tab-1" class="tab-pane fade active in">
						<div class="widget-body">
							
							<div class="table-responsive">
							    <table class="table table-bordered">
                                                                <thead>
                                                                    <tr class="table-responsive">
                                                                        <th>
                                                                            <center>Code</center>
                                                                        </th>
                                                                        
                                                                        <th>
                                                                            <center>Descripition</center>
                                                                        </th>
                                                                       
                                                                        <th>
                                                                            <center>From Date</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Upto Date</center>
                                                                        </th>
                                                                       
									<th >
									    <center>Active</center>
									</th>
								    </tr>
								</thead>
								<tbody>
                                                                    <tr class="odd">
									<td><span><input class="form-control" type="text" size="10" maxlength="50" name="ACTL_CODE[]"  /></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" name="ACTL_DESC[]"  /></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" id="datepicker" name="ACTL_FROM_DT[]" /></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" id="datepicker" name="ACTL_UPTO_DT[]" /></span></td>
									<td><CENTER></span><input type="checkbox" name="al_active[]" value="Y" checked="checked"><input type="hidden" value="Y" name="am_active[]"></span></CENTER></td>
									<td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
								    </tr>
								    <tr class="odd hide" id="optionTemplate">
									<td><span><input class="form-control" type="text" size="10" maxlength="50" name="ACTL_CODE[]" ></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" name="ACTL_DESC[]" ></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" id="datepicker1" name="ACTL_FROM_DT[]" /></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" id="datepicker1" name="ACTL_UPTO_DT[]" /></span></td>
									<td><CENTER><span><input type="checkbox" name="al_active[]" value="Y" checked="checked"><input type="hidden" value="Y" name="am_active[]"></span></CENTER></td>
									<td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
								    </tr>
								</tbody>
                                                            </table>
							</div>
						</div>
						    		    </div>
					     
					    
				    </div>
		    
		   <div class=" col-md-6 col-md-offset-3">
		    <div class="form-group">
                                <div class="col-md-offset-2 col-md-2">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
				<div class="col-md-2">
				    <button class="btn btn-sm btn-info" type="reset" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <input type="submit" name="Save" class="btn btn-sm btn-success" value="Save">
                                </div>
                            </div>
		   </div>
		    </form>
		</div>
		    
		
	    </div>
	    <!-- end panel -->
	</div>
	<!-- end col-10 -->
    </div>
    <!-- end row -->
	</div>
	<!-- end #content -->
	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->


</body>
</html>
<script>
$(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        //container: 'tooltip',
	container: 'popover',
	
	feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            ACTH_CODE: {
		message: 'The ACTH CODE is not valid',
                trigger:'blur',
		validators: {
		    notEmpty: {
                        message: 'The ACTH CODE is required and can\'t be empty'
                    },
		    remote: {
                        message: 'The ACTH CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Finance/AjaxActiveMaster')?>',
                        type: 'POST'
                    },
		    regexp: {
		    regexp: /^[A-Z0-9]+$/,
		    message: 'The ACTH CODE can consist of alphabetical characters and number only, Space not allowed'
		    }
                }
            },
	    'ACTL_CODE[]': {
		message: 'The ACTL CODE is not valid',
                trigger:'blur',
		group: 'span',
		validators: {
		    notEmpty: {
                        message: 'The ACTL CODE is required and can\'t be empty'
                    },
		    remote: {
                        message: 'The ACTL CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Finance/AjaxActiveMasterLine')?>',
                        type: 'POST'
                    },
		    regexp: {
		    regexp: /^[A-Z0-9]+$/,
		    message: 'The ACTL CODE can consist of alphabetical characters and number only, Space not allowed'
		    },
		    callback: {
		    message: 'The ACTL CODE IS ALREADY EXISTS',
		    callback: function(value, validator) {
			    var count=0;
			    $("input[name='ACTL_CODE[]']").each(function(){
				var val=$(this).val();
				
				if(val==value){
				   count++; 
				}
			    });
			    if (count>1) {
				
				return false;
			    }
			    else{
				
				return true;
			    }
			    }
		    
		    }

                }
            },
	    ACTH_DESC: {
		message: 'The DESCRIPTION is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The DESCRIPTION is required and can\'t be empty'
                    }
                }
            },
	    ACTH_FROM_DT: {
		message: 'The FROM DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The FROM DATE is required and can\'t be empty'
                    }
                }
            },
	    ACTH_UPTO_DT: {
		message: 'The UPTO DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The UPTO DATE is required and can\'t be empty'
                    }
                }
            },
       
	}
    });
});
$(document).ready(function() {
   $(".btn-add").click(function(){
   var $template = $('#optionTemplate');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   $actl_code   = $clone.find('[name="ACTL_CODE[]"]');
   $('#form_validation').bootstrapValidator('addField', $actl_code);
   date_pick();
   removerow();
   });
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row   = $(this).parents('.odd');
   $row.remove();
   });
   }
});

$('*#datepicker').datetimepicker({
format: 'DD-MMM-YYYY',
});
function date_pick() {
$('*#datepicker1').datetimepicker({
format: 'DD-MMM-YYYY',
});
}


$('#form_validation').on('click', '[name="al_active[]"]', function()
{
var $row    = $(this).parents('.odd');
var item_code=$row.find("input[name='am_active[]']").val();
if (item_code=="Y") {
$row.find("input[name='am_active[]']").attr('value', 'N');
} else {
$row.find("input[name='am_active[]']").attr('value', 'Y');
}
}
);
</script>