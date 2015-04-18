   
	
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">Analysis Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
	    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">New Analysis Master</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Finance/AnalysisMaster_Add'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Activity Code</label>
				   
				    <div class="col-md-6">
					<input type="text" name="ANLH_CODE" id="ACTH_CODE" class="form-control CURRENCY_CODE" placeholder="ANLH_CODE" />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Descripition</label>
				<div class="col-md-9">
					<input type="text" name="ANLH_DESC" id="ANLH_DESC" class="form-control" placeholder="ANLH_DESC" />
				    </div>
			    </div>
			</div>
			
			
                        <div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-9">
				    <input type="text" name="ANLH_FROM_DT" id="ANLH_FROM_DT" class="form-control" placeholder="ANLH_FROM_DT" />
				</div>
			    </div>
			</div>
                        <div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-9">
				    <input type="text" name="ANLH_UPTO_DT" id="ANLH_UPTO_DT" class="form-control" placeholder="ANLH_UPTO_DT" />
				</div>
			    </div>
			</div>
			
		    </div>
		    <div class="col-md-6">
			<div class="row">
                        <section class="col col-2">
                        <label class="">
                        <input type="checkbox" name="checkbox" id="ck1" checked="" value="Y" > Active ?
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
                                                                        <th >
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
									<td><span><input class="form-control" type="text" size="10" maxlength="50" placeholder="ANLL_CODE"name="ANLL_CODE[]" id="ANLL_CODE" ></span></td>
									<td><span><input class="form-control" type="text" size="10" maxlength="50" placeholder="ANLL_DESC"name="ANLL_DESC[]" id="ANLL_DESC" ></span></td>
									<td><span><input class="form-control datepicker" type="text" size="10" placeholder="ANLL_FROM_DT"maxlength="50" name="ANLL_FROM_DT[]" id="ANLL_FROM_DT" ></span></td>
									<td><span><input class="form-control datepicker " type="text" size="10"placeholder="ANLL_UPTODATE" maxlength="50" name="ANLL_UPTODATE[]" id="ACTL_CODE" ></span></td>
									

									 <td><input type="checkbox" name="ANLL_YN[]" id="ck1" checked value="Y" ></td>
									<td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
								    </tr>
								    <tr class="odd hide" id="optionTemplate">
									<td><span><input class="form-control" type="text" size="10" maxlength="50" placeholder="ANLL_CODE"name="ANLL_CODE[]" id="ANLL_CODE" ></span></td>
	
									<td><span><input class="form-control  " type="text" size="10" maxlength="50" placeholder="ANLL_DESC"name="ANLL_DESC[]" id="ANLL_DESC" ></span></td>

									<td><span><input class="form-control " type="text" size="10" maxlength="50" placeholder="ANLL_FROM_DT"name="ANLL_FROM_DT[]" id="ANLL_FROM_DT" ></span></td>
									<td><span><input class="form-control  " type="text" size="10" maxlength="50"placeholder="ANLL_UPTODATE" name="ANLL_UPTODATE[]" id="ACTL_CODE" ></span></td>
									 <td><input type="checkbox" name="ANLL_YN[]" id="ck1" value="Y"  checked></td>
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
				    <input type="submit" name="save"class="btn btn-sm btn-success"  value="Save">
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
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
         ANLH_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'ANLH_CODE is required'
                    },
		    remote: {
                        message: 'ANLH_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Finance/AJAX_ANLH_CODE')?>',
                        type: 'POST'
                    },
                   regexp: {
		    regexp: /^[A-Z0-9]+$/,
		    message: 'The ANLH CODE can consist of alphabetical characters and number only, Space not allowed'
		    },
		   
                }
            },
	     ANLH_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'ANLH_DESC is required'
                    }
                   
                }
            },
	     ANLH_FROM_DT: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'ANLH_FROM_DT is required'
                    }
                   
                }
            },
	     ANLH_UPTO_DT: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'ANLH_UPTO_DT is required'
                    }
                   
                }
            },
	    'ANLL_CODE[]':{
		container: 'popover',
		    group:'td',
		    validators: {
		    notEmpty: {
                        message: 'ANLL_CODE is required'
                    },
		    
		    remote: {
                        message: 'ANLL_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Finance/AJAX_ANLL_CODE')?>',
                        type: 'POST'
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
   $anll_code   = $clone.find('[name="ANLL_CODE[]"]');
   $('#form_validation').bootstrapValidator('addField', $anll_code);
   removerow();
   });
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row   = $(this).parents('.odd');
   $row.remove();
   });
   }
   
  
   
   });

</script>
<script type="text/javascript">
$(function () {
$('.datepicker').datetimepicker({
    format: 'DD-MMM-YY'
				     });

});
</script>
<script type="text/javascript">
$(function () {
$('#ANLH_FROM_DT').datetimepicker({
    format: 'DD-MMM-YY'
				     });
$('#ANLH_UPTO_DT').datetimepicker({
    format: 'DD-MMM-YY'
    });
$("#ANLH_FROM_DT").on("dp.change",function (e) {
$('#ANLH_UPTO_DT').data("DateTimePicker").minDate(e.date);
});
$("#ANLH_UPTO_DT").on("dp.change",function (e) {
$('#ANLH_FROM_DT').data("DateTimePicker").maxDate(e.date);
});
}
);
</script>