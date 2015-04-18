<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Sales</a></li>
	<li><a href="javascript:;">Opportunity Transaction</a></li>
	<li><a href="javascript:;">Add</a></li>
    </ol>
    
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Opportunity Transaction <small> You may add here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<div class="col-md-12 ui-sortable">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-default" href="javascript:;"><i class="fa fa-expand"></i></a>
                                <a data-click="panel-reload" class="btn btn-xs btn-icon btn-circle btn-success" href="javascript:;"><i class="fa fa-repeat"></i></a>
                                <a data-click="panel-collapse" class="btn btn-xs btn-icon btn-circle btn-warning" href="javascript:;"><i class="fa fa-minus"></i></a>
                                <!--<a data-click="panel-remove" class="btn btn-xs btn-icon btn-circle btn-danger" href="javascript:;"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Opportunity Transaction Add</h4>
                        </div>
                        <div class="panel-body">
			    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                            <form class="form-horizontal" name="myForm" id="myForm" enctype="multipart/form-data" action="<?php echo base_url();?>Sales/OpportunityTransaction_Add" method="post" autocomplete="on">
                                <div id="wizard">
                                        <ol>
                                                <li id="one">
                                                    Opportunity 
                                                    <small></small>
                                                </li>
                                                <li id="two">
                                                    Address
                                                    <small></small>
                                                </li>
                                                <li id="three">
                                                    Details
                                                    <small></small>
                                                </li>
                                                <li id="four">
                                                    Products
                                                    <small></small>
                                                </li>
                                                <li id="five">
                                                    Confirm
                                                    <small></small>
                                                </li>
                                        </ol>
                                        <!-- begin wizard step-1 -->
                                        <div>
                                            <fieldset>
                                                <legend class="pull-left width-full">Opportunity</legend>
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Contact Number
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="OPH_CONTACT_NO"  name="CONTACT_NO" id="CONTACT_NO" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Contact Person
                                                            </label>
                                                            <div class="col-md-8">
                                                            <input type="text" placeholder="OPH_CONTACT_PERSON"  name="CONTACT_PERSON" id="CONTACT_PERSON" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div><!-- First col 6 end-->
                                                    
                                                    <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Opportunity
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="OPH_OPPORTUNITY"  name="OPPORTUNITY" id="OPPORTUNITY" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div><!-- Second col 6 end-->
                                                </div><!--OUTER row defined end-->
                                            </fieldset>
                                        </div>
                                <!-- end wizard step-1 -->
                                <!-- begin wizard step-2 -->
                                        <div>
                                            <fieldset>
                                                <legend class="pull-left width-full">Address</legend>
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Site Address</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="ADD1" name="ADD1" class="form-control" placeholder="OPH_ADD1" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="ADD2" name="ADD2" class="form-control" placeholder="OPH_ADD2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="ADD3" name="ADD3" class="form-control" placeholder="OPH_ADD3" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="ADD4" name="ADD4" class="form-control" placeholder="OPH_ADD4" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Country</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="CN_CODE"  name="CN_CODE">
                                                                    <option value='0'>OPH_CN_CODE</option>
                                                              <?php if (count($country) > 0 )
								{
								foreach ($country as $row)
								{
								?>
								<option value="<?php echo $row['CN_CODE']; ?>"><?php echo $row['CN_DESC']; ?></option>
								<?php } }?>
                                                            
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">State</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="ST_CODE"  name="ST_CODE">
                                                                    <option value="0">OPH_ST_CODE</option>
								 </select>
                                                            </div><i id="load_ajax" class="fa fa-refresh fa-spin"></i>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">City</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control"  id="CT_CODE" name="CT_CODE">
                                                                    <option value="0">OPH_CT_CODE</option>
								</select>
                                                            </div><i id="load_ajax_city" class="fa fa-refresh fa-spin"></i>
                                                        </div>

                                                    </div><!-- First col 6 end-->
                                                    
                                                    <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">PO Box</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="POSTAL" name="POSTAL" class="form-control" placeholder="OPH_POSTAL" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Mobile</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="MOBILE" name="MOBILE" class="form-control" placeholder="OPH_MOBILE" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Phone</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="PHONE" name="PHONE" class="form-control" placeholder="OPH_PHONE" />
                                                            </div>
                                                        </div>
                                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Fax</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="FAX" name="FAX" class="form-control" placeholder="OPH_FAX" />
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="col-md-3 control-label">Email</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="EMAIL" name="EMAIL" class="form-control" placeholder="OPH_EMAIL" />
                                                            </div>
                                                        </div>
                                                        <!--<div class="form-group">
                                                            <label class="col-md-3 control-label">Contact Person</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="PERSON_NAME" name="PERSON_NAME" class="form-control" placeholder="OPH_PERSON_NAME" />
                                                            </div>
                                                        </div>-->
                                                    </div><!-- Second col 6 end-->
                                                </div><!--OUTER row defined end-->
                                            </fieldset>
                                        </div>
                                <!-- end wizard step-2 -->
                                <!-- begin wizard step-3 -->
                                        <div>
                                            <fieldset>
                                                <legend class="pull-left width-full">Details</legend>
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->  
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Approx Amount
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="APPROX_AMT"  name="APPROX_AMT" id="APPROX_AMT" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->  
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Currency
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="CCY_CODE" name="CCY_CODE">
                                                                    <option  selected="selected"  value="0">SELECT</option>
                                                                    <?php
								    //asort($opp_ccy);
								    foreach($opp_ccy  as $row){  ?>
								<option value="<?php echo $row['CCY_CODE'];?>"><?php echo $row['CCY_DESC'];?></option>
								<?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->    
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->
							<div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Customer Account Code
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="CUST_AC_CODE" name="CUST_AC_CODE">
                                                                    <option  selected="selected"  value="0">Select Ac Code</option>
                                                                    <?php
								    foreach($cust_ac as $row){  ?>
								<option value="<?php echo $row['CUST_AC_CODE'];?>"><?php echo $row['CUST_AC_CODE'];?></option>
								<?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Customer Account DESC
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="CUST_AC_DESC"  name="CUST_AC_DESC" id="CUST_AC_DESC" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                               Description
                                                            </label>
                                                            <div class="col-md-8">
                                                                <textarea rows="5" placeholder="DESC" name="DESC" id="DESC" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div><!-- First col 6 end-->
                                                    
                                                    <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Status
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="STATUS" name="STATUS">
                                                                    <option  selected="selected"  value="0">SELECT</option>
                                                                    <?php
								    foreach($opp_status  as $row){  ?>
								<option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
								<?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="checkbox">
                                                                    <label><input name="SEND_LOGI_YN" id="SEND_LOGI_YN" type="checkbox">
                                                                        Send Logistics team to get the measurement
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Appointment Date
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input  type="text" class="form-control datepicker-dob" id="datetimepicker7" name="APPOINT_DT">
                                                            </div>
                                                        </div>
                                                    </div><!-- Second col 6 end-->
                                                </div><!--OUTER row defined end-->
                                            </fieldset>
                                        </div>
                                    <!-- end wizard step-3 -->
                                    <!-- begin wizard step-4 -->
                                        <div>
                                            <fieldset>
                                                <legend class="pull-left width-full">Products</legend>
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->
						    <div class="form-group">
						<!--<label class="col-md-1 control-label"></label>-->
						<div class="col-md-5">
						    <label>Available Products :</label>
						    <select class="form-control available" id="first" size="10" multiple="">
							<?php
							foreach($prod_code  as $row){  ?>
							<option value="<?php echo $row['IF_CODE'];?>"><?php echo $row['IF_DESC'];?></option>
							<?php }?>
						    </select>
						    <!--<label class="radio-inline">
							<input type="radio" checked="" value="option1" name="optionsRadios">
							    Pull Automatic
						    </label>
						    <label class="radio-inline">
							<input type="radio" value="option2" name="optionsRadios">
							    Scan Barcode
						    </label>-->
						    <label class="btn pull-right">
							<button type="button" class="btn btn-sm btn-success" onclick="next('first', 'second')"><i class="fa fa-2x fa-hand-o-right"></i></i></button>
							<button type="button" class="btn btn-md btn-danger" onclick="listbox_selectall('first', false)">Clear</button>
						    </label>						    
						</div>


					<label class="col-md-1 control-label"></label>
						<div class="col-md-5">
						    <label>Selected :</label>
						    <select class="form-control" id="second" size="10" multiple="">
							
						    </select>
						    <label class="btn pull-right">
							<button class="btn btn-sm btn-success" type="button" onclick="next('second', 'first')"><i class="fa fa-2x fa-hand-o-left"></i></button>
							    <button class="btn btn-md btn-danger" type="button" onclick="listbox_selectall('second', false)">Clear</button>
						    </label>
						</div>
					    </div>
                                                    
                                                </div><!--OUTER row defined end-->
                                            </fieldset>
                                        </div>
                                        <div class="readonly">
                                            <fieldset>
                                                <legend class="pull-left width-full">Confirm</legend>
                                                <div class="row form-horizontal ">
                                                    <div class="col-md-6 ui-sortable">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Contact Number
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="OPH_CONTACT_NO"  name="OPH_CONTACT_NO" id="OPH_CONTACT_NO" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Contact Person
                                                            </label>
                                                            <div class="col-md-8">
                                                            <input type="text" placeholder="OPH_CONTACT_PERSON"  name="OPH_CONTACT_PERSON" id="OPH_CONTACT_PERSON" class="form-control">
                                                            </div>
                                                        </div>
							<div class="form-group hidden">
                                                            <label class="col-md-3 control-label">
                                                                Hidden Files
                                                            </label>
                                                            <div class="col-md-8">
							    <input type="text" placeholder="OPH_SYS_ID"  name="OPH_SYS_ID" id="OPH_SYS_ID" class="form-control" value="12345">
                                                            <input type="text" placeholder="OPH_LOCN_CODE"  name="OPH_LOCN_CODE" id="OPH_LOCN_CODE" class="form-control" value="DYF">
							    
							    <!--<input type="text" placeholder="OPH_SR_CODE"  name="OPH_SR_CODE" id="OPH_SR_CODE" class="form-control" value="E00620">-->
							    <input type="text" placeholder="OPH_CUST_TYPE"  name="OPH_CUST_TYPE" id="OPH_CUST_TYPE" class="form-control">
							    <input type="text" placeholder="OPH_CUST_ID"  name="OPH_CUST_ID" id="OPH_CUST_ID" class="form-control" >
							    <input type="text" placeholder="OPH_CLOSE_DT"  name="OPH_CLOSE_DT" id="OPH_CLOSE_DT" class="form-control" value="S">
							   <!-- <input type="text" placeholder="OPH_APPOINT_DT"  name="OPH_APPOINT_DT" id="OPH_APPOINT_DT" class="form-control" >-->
							    <input type="text" placeholder="OPH_LOGI_JOB_STATUS"  name="OPH_LOGI_JOB_STATUS" id="OPH_LOGI_JOB_STATUS" class="form-control" >
							    <input type="text" placeholder="OPH_LANG_CODE"  name="OPH_LANG_CODE" id="OPH_LANG_CODE" class="form-control" value="en">
							    <input type="hidden" id="OPH_SR_CODE"  name="OPH_SR_CODE" value="<?php if($locn_sr_code!='no'){echo $locn_sr_code[0]['SR_CODE']; }?>"  />
							    <input type="hidden" name="OPH_LOCN_CODE" id="OPH_LOCN_CODE" value="<?php if($locn_sr_code!='no'){echo $locn_sr_code[0]['SR_LOCN_CODE']; }?>">
							    <input type="hidden" name="check_LOCN_sr_CODE" id="check_LOCN_sr_CODE" value="<?php if($locn_sr_code=='no'){echo $locn_sr_code;}?>">
							    <!-- OPL hidden Files-->
							    <!--<input type="text" placeholder="OPL_LOCN_CODE"  name="OPL_LOCN_CODE" id="OPL_LOCN_CODE" class="form-control" value="DYF">-->
							    <!--<input type="text" placeholder="OPL_TXN_DT"  name="OPL_TXN_DT" id="datetimepicker_current_opl" class="form-control" value="<?php //echo date('dd-M-yy');?>">-->
							    <input type="text" placeholder="OPL_LINE_STATUS"  name="OPL_LINE_STATUS" id="OPL_LINE_STATUS" class="form-control" value="null">
                                                            </div>
                                                        </div>
                                                    </div><!-- First col 6 end-->
                                                    
                                                    <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Opportunity
                                                            </label>
                                                            <div class="col-md-8">
								
                                                                <input type="text" placeholder="OPH_OPPORTUNITY"  name="OPH_OPPORTUNITY" id="OPH_OPPORTUNITY" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div><!-- Second col 6 end-->
                                                </div><!--OUTER row defined end-->
                                                <div class="row form-horizontal well"><!--OUTER row defined BEGIN-->
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Site Address</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_ADD1" name="OPH_ADD1" class="form-control" placeholder="OPH_ADD1" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_ADD2" name="OPH_ADD2" class="form-control" placeholder="OPH_ADD2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_ADD3" name="OPH_ADD3" class="form-control" placeholder="OPH_ADD3" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_ADD4" name="OPH_ADD4" class="form-control" placeholder="OPH_ADD4" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Country</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="OPH_CN_CODE" class="OPH_CN_CODE" name="OPH_CN_CODE">
								    <option>OPH_CN_CODE</option>
                                                                    <?php if (count($country) > 0 )
								{
								foreach ($country as $row)
								{
								?>
								<option value="<?php echo $row['CN_CODE']; ?>"><?php echo $row['CN_DESC']; ?></option>
								<?php } }?>
                                                            
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">State</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="OPH_ST_CODE" class="OPH_ST_CODE" name="OPH_ST_CODE">
                                                                    <option value="0">OPH_ST_CODE</option>
                                                            
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">City</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="OPH_CT_CODE" class="OPH_CT_CODE" name="OPH_CT_CODE">
                                                                    <option value="0">OPH_CT_CODE</option>
                                                                    
                                                            
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div><!-- First col 6 end-->
                                                    
                                                    <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">PO Box</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_POSTAL" name="OPH_POSTAL" class="form-control" placeholder="OPH_POSTAL" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Mobile</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_MOBILE" name="OPH_MOBILE" class="form-control" placeholder="OPH_MOBILE" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Phone</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_PHONE" name="OPH_PHONE" class="form-control" placeholder="OPH_PHONE" />
                                                            </div>
                                                        </div>
                                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Fax</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_FAX" name="OPH_FAX" class="form-control" placeholder="OPH_FAX" />
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="col-md-3 control-label">Email</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPH_EMAIL" name="OPH_EMAIL" class="form-control" placeholder="OPH_EMAIL" />
                                                            </div>
                                                        </div>
                                                    </div><!-- Second col 6 end-->
                                                </div><!--OUTER row defined end-->
                                                <div class="well">
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->  
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Approx Amount
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="OPH_APPROX_AMT"  name="OPH_APPROX_AMT" id="OPH_APPROX_AMT" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->  
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Currency
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="OPH_CCY_CODE" name="OPH_CCY_CODE">
                                                                    <option  selected="selected"  value="0">SELECT</option>
                                                                    <?php
								    foreach($opp_ccy  as $row){  ?>
								<option value="<?php echo $row['CCY_CODE'];?>"><?php echo $row['CCY_DESC'];?></option>
								<?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="row form-horizontal"><!--OUTER row defined BEGIN-->    
                                                    <div class="col-md-6 "><!-- FIRST COL-6 BEGIN-->    
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Customer Account Code
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="OPH_CUST_AC_CODE"  name="OPH_CUST_AC_CODE" id="OPH_CUST_AC_CODE" class="form-control">
								
                                                            </div>
                                                        </div>
							<div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Customer Account Desc
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" placeholder="OPH_CUST_AC_DESC"  name="OPH_CUST_AC_DESC" id="OPH_CUST_AC_DESC" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                               Description
                                                            </label>
                                                            <div class="col-md-8">
                                                                <textarea rows="5" placeholder="OPH_DESC" name="OPH_DESC" id="OPH_DESC" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Product</label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="OPL_PRODUCT_CODE" name="OPL_PRODUCT_CODE" class="form-control" placeholder="Product1,Product2,Product3..." />
                                                            </div>
                                                        </div>
                                                    </div><!-- First col 6 end-->
                                                    
                                                    <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Status
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" id="OPH_STATUS" name="OPH_STATUS">
								<option  selected="selected"  value="0">SELECT</option>
                                                                    <?php
								    foreach($opp_status  as $row){  ?>
								<option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
								<?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="checkbox">
                                                                    <label><input name="OPH_SEND_LOGI_YN" id="OPH_SEND_LOGI_YN" type="checkbox">
                                                                        Send Logistics team to get the measurement
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">
                                                                Appointment Date
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" id="datetimepicker6" name="OPH_APPOINT_DT">
                                                            </div>
                                                        </div>
                                                    </div><!-- Second col 6 end-->
                                                   
                                                </div><!--OUTER row defined end-->
                                                </div> <!--well closed-->
                                                <div class="col-md-offset-2 pager form-group"><!--footer start-->
                                                    <div class="col-md-12 control-label">
                                                       <button class="btn btn-danger pull-left m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>
                                                       <button  class="btn btn-primary m-r-5 m-b-5 " type="submit"  name="save" id="save" value="Save">Submit</button>
                                                       <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                                                    </div>
                                                </div><!--footer end-->
                                                
                                                <!-- begin row -->
                                            <div class="row well">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group col-md-10">
                                                            <label>Transaction</label>
                                                            <input type="text" name="OPH_TXN_CODE" placeholder="OPH_TXN_CODE" class="form-control" value="OPP"/>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group col-md-10">
                                                            <label>Txn Number</label>
                                                            <input type="text" name="OPH_TXN_NO" placeholder="OPH_TXN_NO" class="form-control" value="******" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group col-md-10">
                                                            <label>Date</label>
                                                            <input type="text" readonly name="OPH_TXN_DT" placeholder="OPH_TXN_DT" id="datetimepicker8" value="<?php echo date('dd-M-yy');?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>
                                        </div>
                            </div>
                    </form>
                        </div>
                    </div>
                </div>
</div>
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>


<script>
 
</script>

<script type="text/javascript">

    $('#load_ajax').hide();
      $('#load_ajax_city').hide();
$(document).ready(function() {
    var d = new Date();
      var month=d.getMonth()+1;
      var date = d.getDate()+1;
      var nexdate= month +"/"+date+"/"+d.getFullYear();

    
    
  $('.datepicker-dob').datetimepicker({
    format: 'DD-MMM-YYYY',
   minDate:nexdate
    });
    var locn_code=$('#check_LOCN_sr_CODE').val();
    
    if (locn_code=="no") {
	//$("#SR_LOCN_CODE")
	
	window.location.replace("<?php echo base_url();?>Sales/OpportunityTransaction_View");
	alert("Your are not defined in Sales Representative and location is also not find hence you can not create this transaction.");

    }
     $('#datetimepicker6').datetimepicker({
    format: 'DD-MMM-YYYY'
         });
    // $('#datetimepicker7').datetimepicker({
    //format: 'DD-MMM-YY'
    //     });
     $('#datetimepicker8').datetimepicker({
    format: 'DD-MMM-YYYY'
         });
     
$(document).ready(function() {
    $('.readonly').find('input, textarea, select').attr('readonly', 'readonly');
});
	$(window).click(function(event) {
       if( event.target.className !== 'haha'){
        var optVals=[];
      
	   $('select#second option').each(function(){
      
	    optVals.push( $(this).val());
	   });
   
   document.getElementById('OPL_PRODUCT_CODE').value=optVals.join();
	
          var contact_no=$('#CONTACT_NO').val();
           document.getElementById('OPH_CONTACT_NO').value=contact_no;
	   var person=$('#CONTACT_PERSON').val();
           document.getElementById('OPH_CONTACT_PERSON').value=person;
	   var person=$('#OPPORTUNITY').val();
           document.getElementById('OPH_OPPORTUNITY').value=person;
	   var person=$('#ADD1').val();
           document.getElementById('OPH_ADD1').value=person;
	   var person=$('#ADD2').val();
           document.getElementById('OPH_ADD2').value=person;
	   var person=$('#ADD3').val();
           document.getElementById('OPH_ADD3').value=person;
	   var person=$('#ADD4').val();
           document.getElementById('OPH_ADD4').value=person;
	   var person=$('#CN_CODE').val();
           document.getElementById('OPH_CN_CODE').value=person;
	   var person=$('#ST_CODE').val();
           document.getElementById('OPH_ST_CODE').value=person;
	   var person=$('#CT_CODE').val();
           document.getElementById('OPH_CT_CODE').value=person;
	   var person=$('#POSTAL').val();
           document.getElementById('OPH_POSTAL').value=person;
	   var person=$('#MOBILE').val();
           document.getElementById('OPH_MOBILE').value=person;
	    var person=$('#PHONE').val();
           document.getElementById('OPH_PHONE').value=person;
	   var person=$('#FAX').val();
           document.getElementById('OPH_FAX').value=person;
	   var person=$('#EMAIL').val();
           document.getElementById('OPH_EMAIL').value=person;
	   var person=$('#APPROX_AMT').val();
           document.getElementById('OPH_APPROX_AMT').value=person;
	   var person=$('#CCY_CODE').val();
           document.getElementById('OPH_CCY_CODE').value=person;
	   var person=$('#CUST_AC_CODE').val();
           document.getElementById('OPH_CUST_AC_CODE').value=person;
	    var person=$('#CUST_AC_DESC').val();
           document.getElementById('OPH_CUST_AC_DESC').value=person;
	   var person=$('#DESC').val();
           document.getElementById('OPH_DESC').value=person;
	   var person=$('#STATUS').val();
           document.getElementById('OPH_STATUS').value=person;
	   

	   
	   if ($('#SEND_LOGI_YN').is(':checked'))
	    {
		document.getElementById('OPH_SEND_LOGI_YN').checked=true;
		}
		
		else {
		    document.getElementById('OPH_SEND_LOGI_YN').checked=false;
		    
	      }
	   var person=$('#datetimepicker7').val();
           document.getElementById('datetimepicker6').value=person;
       }
    });
    });

FormWizard.init();

</script>
<script type="text/javascript">
 
    function next(first,second){
    var src=document.getElementById(first);
    var dest=document.getElementById(second);
 
    for(var count=0;count<src.options.length;count++){
        if(src.options[count].selected==true){
		var option=src.options[count];
		var newOption=document.createElement("option");
		newOption.value=option.value;
		newOption.text=option.text;
		newOption.selected=true;
		try{
			dest.add(newOption,null);
			src.remove(count,null);
			}
			catch(error){
				dest.add(newOption);src.remove(count);
				}
				count--;
				}
    }}
 
    function listbox_selectall(listID,isSelect){
        var listbox=document.getElementById(listID);
        for(var count=0;count<listbox.options.length;count++){
            listbox.options[count].selected=isSelect;
	    
            }
    }
 
 $(document).on('blur','#CONTACT_NO',function(event){
	event.preventDefault();
	var contact_no = $("#CONTACT_NO").val();
	if (contact_no!="") {//if open
	jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Get_OPP_Contact_Detail",
	dataType: 'json',
	data: {contact_no: contact_no},
	success: function(json) {

	    if (json)
	    {
		if (json.exist_cust!="") {
		    alert("Existing Customer");
		    document.getElementById("OPH_CUST_TYPE").value ="S";
		    $('#CUST_AC_CODE').attr("readonly", false);
		    $('#CUST_AC_DESC').attr("readonly", true);
		    document.getElementById("CUST_AC_CODE").value =json[0].CUST_AC_CODE;
		    document.getElementById("CUST_AC_DESC").value=json[0].CUST_AC_DESC;
		    document.getElementById("ADD1").value=json[0].CUST_SITE_ADD1;
		    document.getElementById("ADD2").value=json[0].CUST_SITE_ADD2;
		    document.getElementById("ADD3").value=json[0].CUST_SITE_ADD3;
		    document.getElementById("ADD4").value=json[0].CUST_SITE_ADD4;
		    document.getElementById("CN_CODE").value=json[0].CUST_SITE_CN_CODE;
		    document.getElementById("ST_CODE").value=json[0].CUST_SITE_ST_CODE;
		    document.getElementById("CT_CODE").value=json[0].CUST_SITE_CT_CODE;
		    document.getElementById("POSTAL").value=json[0].CUST_SITE_POSTAL;
		    document.getElementById("MOBILE").value=json[0].CUST_SITE_MOBILE;
		    document.getElementById("PHONE").value=json[0].CUST_SITE_PHONE;
		    document.getElementById("FAX").value=json[0].CUST_SITE_FAX;
		    document.getElementById("EMAIL").value=json[0].CUST_SITE_EMAIL;
		    document.getElementById("CCY_CODE").value=json[0].CUST_CCY_CODE;
		    
		}
		else{
		alert("New Customer");
		   $('#CUST_AC_CODE').attr("readonly", false);
		    $('#CUST_AC_DESC').attr("readonly", false);
		    document.getElementById("CUST_AC_CODE").value=0;
		    document.getElementById("CUST_AC_DESC").value="";
		    document.getElementById("ADD1").value="";
		    document.getElementById("ADD2").value="";
		    document.getElementById("ADD3").value="";
		    document.getElementById("ADD4").value="";
		  //  document.getElementById("CN_CODE").value="";
		   // document.getElementById("ST_CODE").value="";
		   // document.getElementById("CT_CODE").value="";
		    document.getElementById("POSTAL").value="";
		    document.getElementById("MOBILE").value="";
		    document.getElementById("PHONE").value="";
		    document.getElementById("FAX").value="";
		    document.getElementById("EMAIL").value="";
		   // document.getElementById("CCY_CODE").value="";
		   document.getElementById("OPH_CUST_TYPE").value ="N";
		   get_cust_id();
	    }
	    }
	    
	}
        });
 
	}
	
	
	function get_cust_id(){
	    var cust_id=$("#OPH_CUST_TYPE").val();
	    if (cust_id=='N') {
		    jQuery.ajax({
		    type:"POST",
		    url: "<?php echo base_url(); ?>" + "Sales/Get_Cust_id",
		    dataType: 'json',
		    //data: {contact_no: contact_no},
		    success: function(json) {
			if (json)
			{
			    document.getElementById("OPH_CUST_ID").value =json.cust_id;
			    
			}
		    }
		    });
	    }
	    
	}
		    
	
	
	});
 
	$(document).on('change','#CUST_AC_CODE',function(event){
	event.preventDefault();
	   var account = $("#CUST_AC_CODE").val();
	if (account!="") {
	jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Get_Acc_Num",
	dataType: 'json',
	data: {account: account},
	success: function(json) {
	    if (json) {
		document.getElementById("CUST_AC_DESC").value=json[0].CUST_AC_DESC;
	    }    
	}
	});
	}
	});
//  $(document).on('blur','#OPH_CONTACT_NO',function(event){
//	event.preventDefault();
//	var contact_no = $("#OPH_CONTACT_NO").val();
//	//if (contact_no!="") {
//	//    var contact_no = $("#CONTACT_NO").val();
//	//}
//	
//	//alert("yes");
//	if (contact_no!="") {//if open
//	jQuery.ajax({
//	type:"POST",
//	url: "<?php echo base_url(); ?>" + "Sales/Get_OPP_Contact_Detail",
//	dataType: 'json',
//	data: {contact_no: contact_no},
//	success: function(json) {
//	   // document.getElementById("OPH_CUST_AC_CODE").value =json.CUST_COMP_CODE;
//	  // console.log(json);
//	   // alert(json[0].CUST_COMP_CODE);
//	  //  //alert(json);
//	    //var comp=json.CUST_COMP_CODE;
//	    //alert(comp);
//	    if (json)
//	    {
//	    // Show Entered Value
//	    //jQuery("div#result").show();
//	    
//
//		if (json.exist_cust!="") {
//		    alert("Existing Customer");
//		    document.getElementById("OPH_CUST_TYPE").value ="S";
//		    $('#OPH_CUST_AC_CODE').attr("readonly", true);
//		    $('#OPH_CUST_AC_DESC').attr("readonly", true);
//		    document.getElementById("OPH_CUST_AC_CODE").value =json[0].CUST_AC_CODE;
//		    document.getElementById("OPH_CUST_AC_DESC").value=json[0].CUST_AC_DESC;
//		    document.getElementById("OPH_ADD1").value=json[0].CUST_SITE_ADD1;
//		    document.getElementById("OPH_ADD2").value=json[0].CUST_SITE_ADD2;
//		    document.getElementById("OPH_ADD3").value=json[0].CUST_SITE_ADD3;
//		    document.getElementById("OPH_ADD4").value=json[0].CUST_SITE_ADD4;
//		    document.getElementById("OPH_CN_CODE").value=json[0].CUST_SITE_CN_CODE;
//		    document.getElementById("OPH_ST_CODE").value=json[0].CUST_SITE_ST_CODE;
//		    document.getElementById("OPH_CT_CODE").value=json[0].CUST_SITE_CT_CODE;
//		    document.getElementById("OPH_POSTAL").value=json[0].CUST_SITE_POSTAL;
//		    document.getElementById("OPH_MOBILE").value=json[0].CUST_SITE_MOBILE;
//		    document.getElementById("OPH_PHONE").value=json[0].CUST_SITE_PHONE;
//		    document.getElementById("OPH_FAX").value=json[0].CUST_SITE_FAX;
//		    document.getElementById("OPH_EMAIL").value=json[0].CUST_SITE_EMAIL;
//		    document.getElementById("OPH_CCY_CODE").value=json[0].CUST_CCY_CODE;
//		    
//		}
//		else{
//		alert("New Customer");
//		    document.getElementById("OPH_CUST_TYPE").value ="N";
//		    var cust_id=$("#OPH_CUST_TYPE").val();
//		    if (cust_id=='N') {
//			jQuery.ajax({
//	type:"POST",
//	url: "<?php echo base_url(); ?>" + "Sales/Get_Cust_id",
//	dataType: 'json',
//	//data: {contact_no: contact_no},
//	success: function(jsn) {
//	   console
//	    if (jsn)
//	    {
//		var custid=jsn.cust_id;
//		alert(custid);
//		document.getElementById("OPH_CUST_ID").value =jsn.cust_id;
//	    }
//	}
//	});
//		    }
//		    $('#OPH_CUST_AC_CODE').attr("readonly", false);
//		    $('#OPH_CUST_AC_DESC').attr("readonly", false);
//		    document.getElementById("OPH_CUST_AC_CODE").value ="";
//		    document.getElementById("OPH_CUST_AC_DESC").value="";
//		    document.getElementById("OPH_ADD1").value="";
//		    document.getElementById("OPH_ADD2").value="";
//		    document.getElementById("OPH_ADD3").value="";
//		    document.getElementById("OPH_ADD4").value="";
//		  //  document.getElementById("OPH_CN_CODE").value="";
//		   // document.getElementById("OPH_ST_CODE").value="";
//		   // document.getElementById("OPH_CT_CODE").value="";
//		    document.getElementById("OPH_POSTAL").value="";
//		    document.getElementById("OPH_MOBILE").value="";
//		    document.getElementById("OPH_PHONE").value="";
//		    document.getElementById("OPH_FAX").value="";
//		    document.getElementById("OPH_EMAIL").value="";
//		   // document.getElementById("OPH_CCY_CODE").value="";
//	    }
//	    }
//	    
//	}
//        });
// 
//	}//if close
//	});
    </script>
<script type="text/javascript">
  //  function dropdown() {
 //   FormPlugins.init();
//    }
    
    $(function(){
    
    $("#CN_CODE").change(function() {
	var country=$('#CN_CODE').val();
        if (country==0) {
            $("#ST_CODE").html("<option value='0'>Select State</option>");
            $("#CT_CODE").html("<option value='0'>Select city</option>");
        }else
        {
    var cn_code=$('option:selected', this).val() ;
    $('#load_ajax').show();
    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Sales/ajaxstate",
    data:{cn_code:cn_code} ,
    success: function (responseData) {
	$('#load_ajax').hide();
    $('*#ST_CODE').html(responseData);
    $('*#OPH_ST_CODE').html(responseData);

    
    },
    });
	}
    
    $("#ST_CODE").change(function() {
    var st_code=$('option:selected', this).val() ;
    var cn_code=$('option:selected', "#CN_CODE").val() ;
    $('#load_ajax_city').show();
    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Sales/ajaxcity",
    data:{st_code:st_code,cn_code:cn_code} ,
    success: function (responseData) {
    $('#load_ajax_city').hide();
    $('*#CT_CODE').html(responseData);
    $('*#OPH_CT_CODE').html(responseData);
  //  dropdown();
    },
    });
    });
    
    });
    
    
    });
    //
    //$(function(){
    

 //   });


 </script>
<script>

$(document).ready(function() {
 $('#myForm').bootstrapValidator({
    excluded: [':disabled'],
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
	    
	fields: {
    
		CONTACT_NO: {
		    message: 'The Currency Code is not valid',
		    validators: {
			integer: {
				    message: 'The value is not an integer'
				     },
	    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
			//stringLength: {
			//    min: 1,
			//    max: 10,
			//    message: 'This field must be more than 1 and less than 10 characters long'
			//},
			//regexp: {
			//    regexp: /^[A-Z]+$/,
			//    message: 'Capital alphabets only and space not allowed'
			//}
			//remote: {
			//    message: 'The Currency CODE IS ALREADY EXISTS',
			//    url: '<?php  echo site_url('Sales/check_ccy_code')?>',
			//    type: 'POST'
			//}
			
		    }
		},
		CONTACT_PERSON: {
		    message: 'The Description is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    //stringLength: {
			//    min: 2,
			//    max: 10,
			//    message: 'This field must be more than 1 and less than 10 characters long'
			//},
			//regexp: {
			//   regexp: /^[a-zA-Z0-9_ \.]+$/,
			//    message: 'Disallowed charcter'
			//}
			//
		    }
		},
		OPPORTUNITY: {
		    message: 'The Exchanging Rate is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
		ADD1: {
		    message: 'The Currency Code is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    
		    }
		},
		ADD2: {
		    message: 'The Payment term Code is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    
		    }
		},
		ADD3: {
		    message: 'The Credit Limit is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    //stringLength: {
			//    min: 1,
			//    max: 10,
			//    message: 'This field must be more than 1 and less than 10 characters long'
			//},
			//regexp: {
			//   regexp: /^[0-9]+$/,
			//    message: 'Disallowed Character'
			//}
			
		    } 
		},
		ADD4: {
		    message: 'The Disc Grsce days is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    //stringLength: {
			//    min: 1,
			//    max: 10,
			//    message: 'This field must be more than 1 and less than 10 characters long'
			//},
		       
			
		    }
		},
		CN_CODE: {
		    message: 'The Statement Cycle Code is not valid',
		    validators: {
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    
		    }
		},
		ST_CODE: {
		    message: 'The Manager Code is not valid',
		    validators: {
			    //integer: {
			    //	message: 'The value is not an integer'
			    //	 },
			
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    
		    }
		},
		CT_CODE: {
		    message: 'The SP Code is not valid',
		    validators: {
			    //integer: {
			    //	message: 'The value is not an integer'
			    //	 },
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}                    
		    }
		},
		POSTAL: {
		   validators: {
    			integer: {
    				message: 'The value is not an integer'
    				 },
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		
		    MOBILE: {
		    
		    validators: {
			    integer: {
				    message: 'The value is not an integer'
				     },
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		    PHONE: {
		    
		    validators: {
			    integer: {
				    message: 'The value is not an integer'
				     },
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 FAX: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 EMAIL: {
		    
		    validators: {
		    emailAddress: {
			       message: 'The value is not a valid email address'
				    },
			
			    emailAddress: {
                            message: 'The value is not a valid email address'
                        },
			    regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        }
		    }
		},
		 PERSON_NAME: {
	    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 APPROX_AMT: {
		    
		    validators: {
			integer: {
				    message: 'The value is not an integer'
				     },
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 CCY_CODE: {
	    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 CUST_AC_CODE: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		    CUST_AC_DESC: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		
		 DESC: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 Product: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 STATUS: {
		    trigger:'blur',
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		
		// SEND_LOGI_YN: {
		//    
		//    validators: {
		//	
		//	notEmpty: {
		//	message: 'The date is required and cannot be empty'
		//	}
		//    }
		//},
		 APPOINT_DT: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 TXN_CODE: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 TXN_NO: {
		    
		    validators: {
			
			notEmpty: {
			message: 'The date is required and cannot be empty'
			}
		    }
		},
		 TXN_DT: {
		    
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


</body>

</html>

