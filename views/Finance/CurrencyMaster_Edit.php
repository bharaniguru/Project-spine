
	
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">Currency Master</li>
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
		    <h4 class="panel-title">Edit Currency Mater</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Finance/CurrencyMaster_Edit/'.$currency[0]['CCY_CODE']); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Currency Code</label>
				   
				    <div class="col-md-6">
					<input type="text"readonly="" name="CCY_CODE" id="CCY_CODE" class="form-control CURRENCY_CODE" placeholder="CCY_CODE" value="<?php echo $currency[0]['CCY_CODE']; ?>" />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Descripition</label>
				<div class="col-md-9">
					<input type="text" name="CCY_DESC" id="CCY_DESC" class="form-control" placeholder="CCY_DESC" value="<?php echo $currency[0]['CCY_DESC']; ?>" />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Unit</label>
				<div class="col-md-9">
				    <input type="text" name="CCY_UNIT" id="CCY_UNIT" class="form-control" placeholder="CCY_UNIT" value="<?php echo $currency[0]['CCY_UNIT']; ?>" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Symbol</label>
				<div class="col-md-9">
				    <input type="text" name="CCY_SYMBOL" id="CCY_SYMBOL" class="form-control" placeholder="CCY_SYMBOL" value="<?php echo $currency[0]['CCY_SYMBOL']; ?>" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Precision</label>
				<div class="col-md-9">
				    <input type="text" name="CCY_PRECISION" id="CCY_PRECISION" class="form-control" placeholder="CCY_PRECISION" value="<?php echo $currency[0]['CCY_PRECISION']; ?>"/>
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Format</label>
				<div class="col-md-9">
				    <input type="text" name="CCY_FORMAT" id="CCY_FORMAT" class="form-control" placeholder="CCY_FORMAT " value="<?php echo $currency[0]['CCY_FORMAT']; ?>"/>
				</div>
			    </div>
			</div>
                        <div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">From Date</label>
				<div class="col-md-9">
				    <input type="text" name="CCY_FROM_DT" id="CCY_FROM_DT" class="form-control" placeholder="CCY_FROM_DT" value="<?php echo $currency[0]['CCY_FROM_DT']; ?>"/>
				</div>
			    </div>
			</div>
                        <div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Upto Date</label>
				<div class="col-md-9">
				    <input type="text" name="CCY_UPTO_DT" id="CCY_UPTO_DT" class="form-control" placeholder="CCY_UPTO_DT" value="<?php echo $currency[0]['CCY_UPTO_DT']; ?>"/>
				</div>
			    </div>
			</div>
			
		    </div>
		    <div class="col-md-6">
			<div class="row">
                        <section class="col col-2">
                        <label class="">
                        <input type="checkbox" name="checkbox" <?=$currency[0]['CCY_ACTIVE_YN'] == "Y" ?  'checked="checked"': '';?> value="Y" > Active ?
                        </label>
                        </section>
                        </div>
		    </div>
		   
		    <h4 class="col-md-12">&nbsp;</h4>
		    <div class=" col-md-12">
					<ul class="nav nav-pills tab_nav">
					  
					    <li class="active">
						<a data-toggle="tab" href="#nav-pills-tab-1">&nbsp; Currency Mapping &nbsp;</a>
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
                                                                            <center>From Currency</center>
                                                                        </th>
                                                                        
                                                                        <th>
                                                                            <center>TO Currency</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>From Date</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Upto Date</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Rate Type</center>
                                                                        </th>
                                                                            
									<th >
									    <center>Rate</center>
									</th>
									<th >
									    <center>Active</center>
									</th>
								    </tr>
								</thead>
								
								<tbody>
								   <?php if (count($currencyExch) > 0 )
									{
									    $count=1;
									foreach ($currencyExch as $currencyExch)
									{
									
									?>
								
                                                                    <tr class="odd">
									
									<td><span><input class="form-control CURRENCY_VIEW" type="text" size="10" maxlength="50" name="CEX_FM_CCY_CODE[]" value="<?php echo $currencyExch['CEX_FM_CCY_CODE']; ?>" id="CEX_FM_CCY_CODE" ></span></td>
									<td><span>
									<select name="CEX_TO_CCY_CODE[]"  id="CEX_TO_CCY_CODE"class="form-control">
									<option value="">CEX_TO_CCY_CODE</option>
									<?php if (count($currencycode) > 0 )
									{
									foreach ($currencycode as $row)
									{
									?>
									<option <?php if($currencyExch["CEX_TO_CCY_CODE"]==$row['CCY_CODE']) echo "selected"; ?> value="<?php echo $row['CCY_CODE']; ?>"><?php echo $row['CCY_DESC']; ?></option>
								       <?php } }?>
									</select>    
									</span></td>
									<td><span><input class="form-control Datepicker" type="text" size="10" maxlength="50" value="<?php echo $currencyExch["CEX_EFF_FROM_DT"]; ?>" name="CEX_EFF_FROM_DT[]" id="CEX_EFF_FROM_DT" ></span></td>
									<td><span><input class="form-control Datepicker" type="text" size="10" maxlength="50" value="<?php echo $currencyExch["CEX_EFF_UPTO_DT"]; ?>" name="CEX_EFF_UPTO_DT[]" id="CEX_EFF_UPTO_DT"></span></td>
									<td><span>
									<select name="CEX_RATE_TYPE[]"  id="CEX_RATE_TYPE"class="form-control">
									<option value="">CEX_RATE_TYPE</option>
									<?php if (count($rate) > 0 )
									{
									foreach ($rate as $row)
									{
									?>
									<option <?php if($currencyExch["CEX_RATE_TYPE"]==$row['VSL_CODE']) echo "selected"; ?> value="<?php echo $row['VSL_CODE']; ?>"><?php echo $row['VSL_DESC']; ?></option>
								       <?php } } ?>
									</select>    
									</span></td>
									
									<td><span><input class="form-control" type="text" size="10" maxlength="50" name="CEX_RATE[]"  value="<?php echo $currencyExch['CEX_RATE']; ?>"  id="CEX_RATE"></span></td>
                                                                        <td><input type="checkbox" name="checkbox" id="ck1" value="Y" <?php if($currencyExch["CEX_ACTIVE_YN"]=="Y") echo "checked"; ?>></td>
									<td><a id="rownumber-<?php echo $count; ?>"class="btn  btn-sm btn-danger" data-template="textbox">Remove</a>
								
									</td>
								    </tr>
								    <script>
								    $(document).ready(function() {
								       $("#rownumber-<?php echo $count; ?>").click(function(){
									var from="<?php echo $currencyExch["CEX_FM_CCY_CODE"]; ?>";
									var to="<?php echo $currencyExch["CEX_TO_CCY_CODE"]; ?>";
									var date1="<?php echo $currencyExch["CEX_EFF_FROM_DT"]; ?>";
									var date2="<?php echo $currencyExch["CEX_EFF_UPTO_DT"]; ?>";
									var rate="<?php echo $currencyExch["CEX_RATE_TYPE"]; ?>";
									    $.ajax({
									    type: "POST",                                
									    url: "<?=base_url()?>Finance/CurrencyExch_Delete",
									    data:{from:from,to:to,date1:date1,date2:date2,rate:rate} ,
									    success: function (responseData) {
									  
									    window.location="<?php echo base_url('Finance/CurrencyMaster_Edit/'.$currency[0]['CCY_CODE']) ?>";
									    },
									    });
									});
								       });
								    </script>
								    <?php $count++;
								    } } ?>
								</tbody>
                                                            </table>
							</div>
						</div>
						    		    </div>
					     
					    
				    </div>
		    
		    <div class="col-md-offset-3 col-md-6">
			<div class="form-group">
			   <label class="col col-4"></label>
			   <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
			   <button type="submit" class="btn btn-md btn-success" name="submit" id="submit_but" value="Save" >Update</button>
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
<script type="text/javascript">
    $('#CCY_FROM_DT').datetimepicker({
    format: 'DD-MMM-YY'
    });
    $('.Datepicker').datetimepicker({
    format: 'DD-MMM-YY'
    });
    $(function () {
$('#CCY_UPTO_DT').datetimepicker({
    format: 'DD-MMM-YY'
         });

$("#CCY_FROM_DT").on("dp.change",function (e) {
$('#CCY_UPTO_DT').data("DateTimePicker").minDate(e.date);
});
$("#CCY_UPTO_DT").on("dp.change",function (e) {
$('#CCY_FROM_DT').data("DateTimePicker").maxDate(e.date);
}
);
}
);
</script>


<script>
$(document).ready(function() {
   $(".btn-add").click(function(){
   var $template = $('#optionTemplate');
   $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   removerow();
   });
   function removerow(){
   $(".removeButton").on('click',function(){
   var $row   = $(this).parents('.odd');
   $row.remove();
   });
   }
   
  
   
   });
   $(".CURRENCY_CODE").keyup(function(){
    var value=$(".CURRENCY_CODE").val();
    $(".CURRENCY_VIEW").val(value);
    
    });
</script>