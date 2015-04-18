<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div class="content" id="content">
                     <ol class="breadcrumb pull-right">
                        <li><a href="javascript:;">Sales</a></li>
                        <li><a href="javascript:;">Customer Master</a></li>
			<li><a href="javascript:;">Add</a></li>
                    </ol>
                     <h1 class="page-header">Customer Master <small> You may add here...</small></h1>
            <div class="row">
                <div class="ui-sortable">
                    <div data-sortable-id="form-stuff-1" class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                             <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-default" href="javascript:;"><i class="fa fa-expand"></i></a>
                             <a data-click="panel-reload" class="btn btn-xs btn-icon btn-circle btn-success" href="javascript:;"><i class="fa fa-repeat"></i></a>
                             <a data-click="panel-collapse" class="btn btn-xs btn-icon btn-circle btn-warning" href="javascript:;"><i class="fa fa-minus"></i></a>
                            </div>
                             <h4 class="panel-title">Customer Master Add</h4>
                        </div>
                     
                        <div class="panel-body">
			    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                            <form class="form-horizontal" name="myForm" id="myForm" action="<?php echo base_url();?>Sales/CustomerMaster_Add" method="post" enctype="multipart/form-data">
                                <div class="well"><!--well start-->
                                    <div class="row"><!--OUTER row defined BEGIN-->
                                        <div class="col-md-5 ui-sortable"><!-- FIRST COL-6 BEGIN-->
                                        
                                        <div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Company Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CUST_COMP_CODE" name="CUST_COMP_CODE" placeholder="CUST_COMP_CODE" type="text" value="001">
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->
				
				<div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Language Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="CUST_LANG_CODE" name="CUST_LANG_CODE" placeholder="CUST_LANG_CODE" type="text" value="EN">
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->
                                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Party Type</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="CUST_PARTY_TYPE" name="CUST_PARTY_TYPE">
                                                <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($party_type  as $row){  ?>
                                                <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                            <?php }?>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_PARTY_DESC" name="CUST_PARTY_DESC" class="form-control" placeholder="CUST_PARTY_DESC" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alias</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_PARTY_ALIAS" name="CUST_PARTY_ALIAS" class="form-control" placeholder="CUST_PARTY_ALIAS" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">URL</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_PARTY_URL" name="CUST_PARTY_URL" class="form-control" placeholder="CUST_PARTY_URL" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Account Type</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="CUST_AC_TYPE" name="CUST_AC_TYPE">
                                                <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($ac_type  as $row){  ?>
                                                <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                            <?php }?>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Account Code</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_AC_CODE" name="CUST_AC_CODE" class="form-control" placeholder="CUST_AC_CODE" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Description</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_AC_DESC" name="CUST_AC_DESC" class="form-control" placeholder="CUST_AC_DESC" />
                                                </div>
                                            </div> 
                                    
                                        </div><!-- FIRST COL-6 END-->
                                        <div class="col-md-5 ui-sortable"><!-- SECOND COL-6 BEGIN-->
                                            <div class="col-md-offset-4 col-md-9">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                    <label>
                                                    <input type="checkbox" checked="checked"  name="CUST_ACTIVE_YN" id="CUST_ACTIVE_YN">
                                                            Active?
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" id="CUST_PERSON_TITLE" name="CUST_PERSON_TITLE">
                                                             <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($cust_title  as $row){  ?>
                                                <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                            <?php }?>
                                                    
                                                        </select>
                                                    </div>
                                           </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">First Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_PERSON_FIRST_NAME" name="CUST_PERSON_FIRST_NAME" class="form-control" placeholder="CUST_PERSON_FIRST_NAME" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Middle Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_PERSON_MIDDLE_NAME" name="CUST_PERSON_MIDDLE_NAME" class="form-control" placeholder="CUST_PERSON_MIDDLE_NAME" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Last Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_PERSON_LAST_NAME" name="CUST_PERSON_LAST_NAME" class="form-control" placeholder="CUST_PERSON_LAST_NAME" />
                                                </div>
                                            </div>
                                        </div><!-- SECOND COL-6 BEGIN-->
                                    </div><!--OUTER row defined END-->
                                </div><!--well end-->
                        
                <div class="well"><!--tab started-->
                    <div data-sortable-id="ui-unlimited-tabs-2" class="panel panel-default panel-with-tabs">
                        <div class="panel-heading p-0">
                            <div class="panel-heading-btn m-r-10 m-t-10">
                                <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-inverse" href="javascript:;" data-original-title="" title=""><i class="fa fa-expand"></i></a>
                            </div>
                            <!-- begin nav-tabs -->
                            <div class="tab-overflow overflow-right">
                                <ul class="nav nav-tabs">
                                     <li class="prev-button" style=""><a class="text-inverse"
                                            data-click="prev-tab" href="javascript:;"><i class="fa fa-arrow-left"></i></a></li>
                                    
                                    <li class="active">
                                        <a data-toggle="tab" href="#nav-tab-1" aria-expanded="true">Address</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-tab-2" aria-expanded="false">Property</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-tab-3" aria-expanded="false">Contacts</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#nav-tab-4" aria-expanded="false">Attachements</a>
                                    </li>
                                    <li class="hidden">
                                        <a data-toggle="tab" href="#nav-tab-5" aria-expanded="false">Flex</a>
                                    </li>
                                    
                                    <li class="next-button" style=""><a class="text-inverse"
                                        data-click="next-tab" href="javascript:;"><i class="fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <div class="tab-content">
                        <div id="nav-tab-1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-md-6 ui-sortable ">
                                    <div class="row"> <!-- FIRST COL-6 BEGIN-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Site Address</label>
                                            <div class="col-md-9">
                                                <input type="text" id="CUST_SITE_ADD1" name="CUST_SITE_ADD1" class="form-control" placeholder="CUST_SITE_ADD1" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <input type="text" id="CUST_SITE_ADD2" name="CUST_SITE_ADD2" class="form-control" placeholder="CUST_SITE_ADD2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <input type="text" id="CUST_SITE_ADD3" name="CUST_SITE_ADD3" class="form-control" placeholder="CUST_SITE_ADD3" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <input type="text" id="CUST_SITE_ADD4" name="CUST_SITE_ADD4" class="form-control" placeholder="CUST_SITE_ADD4" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Country</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="CUST_SITE_CN_CODE" name="CUST_SITE_CN_CODE">
                                                <option value="0">Select Country</option>
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
                                    </div>
                                    <div class="row"> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">State</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="CUST_SITE_ST_CODE" name="CUST_SITE_ST_CODE">
                                                    <option value="0">Select State</option>
                                                    
                                            
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">City</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="CUST_SITE_CT_CODE" name="CUST_SITE_CT_CODE">
                                                    <option value="0">Select City</option>
                                                    
                                            
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">PO Box</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_SITE_POSTAL" name="CUST_SITE_POSTAL" class="form-control" placeholder="CUST_SITE_POSTAL" />
				</div>
                            </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Mobile</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_SITE_MOBILE" name="CUST_SITE_MOBILE" class="form-control" placeholder="CUST_SITE_MOBILE" />
				</div>
                            </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Phone</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_SITE_PHONE" name="CUST_SITE_PHONE" class="form-control" placeholder="CUST_SITE_PHONE" />
				</div>
                            </div></div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Fax</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_SITE_FAX" name="CUST_SITE_FAX" class="form-control" placeholder="CUST_SITE_FAX" />
				</div>
                            </div>
                            </div>
                            <div class="row"> 
                             <div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_SITE_EMAIL" name="CUST_SITE_EMAIL" class="form-control" placeholder="CUST_SITE_EMAIL" />
				</div>
                            </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Contact Person</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_SITE_PERSON_NAME" name="CUST_SITE_PERSON_NAME" class="form-control" placeholder="CUST_SITE_PERSON_NAME" />
				</div>
                            </div>
                            </div>
                        </div><!-- FIRST COL-6 End-->
                        <div class="col-md-6 ui-sortable"><!-- Second COL-6 BEGIN-->
                            <div class="row">          
                            <div class="form-group">
				<label class="col-md-3 control-label">Bill Address</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_ADD1" name="CUST_BILL_ADD1" class="form-control" placeholder="CUST_BILL_ADD1" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_ADD2" name="CUST_BILL_ADD2" class="form-control" placeholder="CUST_BILL_ADD2" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_ADD3" name="CUST_BILL_ADD3" class="form-control" placeholder="CUST_BILL_ADD3" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_ADD4" name="CUST_BILL_ADD4" class="form-control" placeholder="CUST_BILL_ADD4" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Country</label>
				<div class="col-md-9">
				    <select class="form-control" id="CUST_BILL_CN_CODE" name="CUST_BILL_CN_CODE">
					<option value="0">Select Country</option>
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
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">State</label>
				<div class="col-md-9">
				    <select class="form-control" id="CUST_BILL_ST_CODE" name="CUST_BILL_ST_CODE">
					<option value="0">Select State</option>
				
				    </select>
				</div>
			    </div>
                            </div>

                            <div class="row"> 
			    <div class="form-group">
				<label class="col-md-3 control-label">City</label>
				<div class="col-md-9">
				    <select class="form-control" id="CUST_BILL_CT_CODE" name="CUST_BILL_CT_CODE">
					<option value="0">Select City</option>
				
				    </select>
				</div>
			    </div> 
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">PO Box</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_POSTAL" name="CUST_BILL_POSTAL" class="form-control" placeholder="CUST_BILL_POSTAL" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Mobile</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_MOBILE" name="CUST_BILL_MOBILE" class="form-control" placeholder="CUST_BILL_MOBILE" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Phone</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_PHONE" name="CUST_BILL_PHONE" class="form-control" placeholder="CUST_BILL_PHONE" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Fax</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_FAX" name="CUST_BILL_FAX" class="form-control" placeholder="CUST_BILL_FAX" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_EMAIL" name="CUST_BILL_EMAIL" class="form-control" placeholder="CUST_BILL_EMAIL" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Contact Person</label>
				<div class="col-md-9">
				    <input type="text" id="CUST_BILL_PERSON_NAME" name="CUST_BILL_PERSON_NAME" class="form-control" placeholder="CUST_BILL_PERSON_NAME" />
				</div>
                            </div>
                            </div>
                        </div><!-- Second COL-6 End-->
                        </div>
                        </div>
                            <div id="nav-tab-2" class="tab-pane fade">
                               <div class="row">
                                    <div class="col-md-6 ui-sortable "><!-- FIRST COL-6 BEGIN-->
                                        <div class="form-group">
                                        <label class="col-md-3 control-label">Class</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="CUST_CLASS_CODE" name="CUST_CLASS_CODE">
                                                   <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($cc as $row){  ?>
                                            <option value="<?php echo $row['CC_CODE'];?>"><?php echo $row['CC_DESC'];?></option>
                                            <?php }?>
                                                </select>
                                            </div>
                                        </div>
                        <div class="form-group">
				<label class="col-md-3 control-label">Exch Rate type</label>
				<div class="col-md-9">
				    <select class="form-control" id="CUST_EXCHG_RATE_CODE" name="CUST_EXCHG_RATE_CODE">
					 <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($exch  as $row){  ?>
                                            <option value="<?php echo $row->VSL_CODE;?>"><?php echo $row->VSL_DESC;?></option>
                                            <?php }?>
				
				    </select>
				</div>
			</div>
                        <div class="form-group">
				<label class="col-md-3 control-label">Currency</label>
				<div class="col-md-9">
				    <select class="form-control" id="CUST_CCY_CODE" name="CUST_CCY_CODE">
					<option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($ccy  as $row){  ?>
                                            <option value="<?php echo $row->CCY_CODE;?>"><?php echo $row->CCY_DESC;?></option>
                                            <?php }?>
				
				    </select>
				</div>
			</div>
                        <div class="form-group">
				<label class="col-md-3 control-label">Payment Term</label>
				<div class="col-md-9">
				    <select class="form-control" id="CUST_PAY_TERM_CODE" name="CUST_PAY_TERM_CODE">
					 <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($pay  as $row){  ?>
                                            <option value="<?php echo $row->PT_CODE;?>"><?php echo $row->PT_DESC;?></option>
                                            <?php }?>
                                    </select>
				</div>
			</div>
                        <br>
                        <br>
                            
                                <div class="form-group">
                                        <label class="col-md-3 control-label">A/C Manager</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="CUST_AC_MANAGER" name="CUST_AC_MANAGER">
                                                <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($ac_mang  as $row){  ?>
                                            <option value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME'];?></option>
                                            <?php }?>
                                        
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Sales Representattive</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="CUST_SR_CODE" name="CUST_SR_CODE">
                                                <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($sp_code  as $row){  ?>
                                            <option value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME'];?></option>
                                            <?php }?>
                                        
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Statement Cycle</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="CUST_STMT_CYCLE_CODE" name="CUST_STMT_CYCLE_CODE">
                                                <option disabled="" selected="" value="0">Select</option>
                                            <?php foreach($cycle  as $row){  ?>
                                            <option value="<?php echo $row->VSL_CODE;?>"><?php echo $row->VSL_DESC;?></option>
                                            <?php }?>
                                        
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Credit Limit</label>
                                        <div class="col-md-9">
                                            <input type="text" id="CUST_CREDIT_LIMIT" name="CUST_CREDIT_LIMIT" class="form-control" placeholder="CUST_CREDIT_LIMIT" />
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label">Discount Grace Days</label>
                                        <div class="col-md-9">
                                            <input type="text" id="CUST_DISC_GRACE_DAYS" name="CUST_DISC_GRACE_DAYS" class="form-control" placeholder="CUST_DISC_GRACE_DAYS" />
                                </div>
                            </div>
                        <br>
                        <br>
                            <div class="form-group">
			   <label class="col-md-3 control-label">From Date</label>
                                <div class="col-md-9">
				    <div class="input-group input-daterange">
					<input type="text" placeholder="Date Start" name="CUST_FROM_DT" id="datetimepicker6" class="form-control"  >
					    <span class="input-group-addon"> Upto Date</span>
					<input type="text" placeholder="Date End" name="CUST_UPTO_DT" id="datetimepicker7" class="form-control" >
				    </div>
				</div>
		       </div>

                            </div><!-- FIRST COL-6 end-->
                        <div class="col-md-6 ui-sortable "><!-- Second COL-6 BEGIN-->
                                    
                                   <!-- <div class="col-md-offset-2 col-md-9">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                    <label><input type="checkbox" id="CUST_ACTIVE_YN" name="CUST_ACTIVE_YN">
                                                        Active ?
                                                    </label>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="col-md-offset-2 col-md-9">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                    <label><input type="checkbox" id="CUST_SEND_DUNNING_YN" name="CUST_SEND_DUNNING_YN">
                                                        Send Dunning ?
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-9">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="CUST_SEND_STMT_YN" name="CUST_SEND_STMT_YN">
                                                   Send Statement ?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-9">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="CUST_CREDIT_CHECK_YN" name="CUST_CREDIT_CHECK_YN">
                                                   Allow Credit ?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-9">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="CUST_DISC_YN" name="CUST_DISC_YN">
                                                   Allow Discount ?
                                                </label>
                                            </div>
                                        </div>
                                    </div> 
                                    </div><!-- Second COL-6 end-->
                                </div>
                                </div>
                <div id="nav-tab-3" class="tab-pane fade">
                        <!--<div class="row">
                            <div class="col-md-6">
                                <!--<a class="btn btn-primary btn-sm " href="<?php //echo base_url(); ?>sales/CustomerDetailAdd"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Contact</span></a>
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">From Date</label>
                                     <div class="col-md-9">
                                         <div class="input-group input-daterange">
                                             <input type="text" placeholder="Date Start" name="CCONT_FROM_DT" id="datetimepicker8" class="form-control"  >
                                                 <span class="input-group-addon"> Upto Date</span>
                                             <input type="text" placeholder="Date End" name="CCONT_UPTO_DT" id="datetimepicker9" class="form-control" >
                                         </div>
                                     </div>
                            </div>
                            </div>
                        </div>-->
                                <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
			
                            <thead>
                                <tr class="info">
                                    <th>Contacts</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Linkedin</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <!--<th><pre>From Date                              Upto date</pre></th>-->
                                    <th>From Date
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        Upto date
                                    </th>
                                    <th>Active (<i class="fa fa-1x fa-check"></i>)</th>
                                    <th></th>
                                </tr>
                                
                            </thead>
                               
                            <tbody>
                                <tr class="odd">
                                    <td>
                                        <input type="text" id="CCONT_NAME" name="CCONT_NAME[]"  placeholder="CCONT_NAME" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_MOBILE" name="CCONT_MOBILE[]"  placeholder="CCONT_MOBILE" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_PHONE" name="CCONT_PHONE[]"  placeholder="CCONT_PHONE" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_EMAIL" name="CCONT_EMAIL[]"  placeholder="CCONT_EMAIL" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_LINKEDIN" name="CCONT_LINKEDIN[]"  placeholder="CCONT_LINKEDIN" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_FACEBOOK" name="CCONT_FACEBOOK[]"  placeholder="CCONT_FACEBOOK" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_TWITTER" name="CCONT_TWITTER[]"  placeholder="CCONT_TWITTER" />
                                    </td>
                                    <td>
                                        <div class="input-group input-daterange">
					<input type="text" placeholder="Date Start" name="CCONT_FROM_DT[]" id="datetimepicker8"   >
					    <span class="input-group-addon"> Upto Date</span>
					<input type="text" placeholder="Date End" name="CCONT_UPTO_DT[]" id="datetimepicker9"  >
				    </div>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="CCONT_ACTIVE_YN" name="CCONT_ACTIVE_YN[]"  />
                                    </td>
                                    <td><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></td>
                                    <!--<td>
                                     <a class="btn btn-xs btn-primary fa fa-edit" href="<?php //echo base_url(); ?>sales/CustomerAddEdit"></a>&nbsp;&nbsp; <a class=
                                     "btn btn-xs btn-danger fa fa-trash-o" data-toggle="modal" href="#" onclick="return confirm('Are you sure you want to delete this item?');"
                                     style="font-style: italic"></a>
                                    </td>-->
                                </tr>
                                <tr class="odd hide" id="optionTemplate">
                                    <td>
                                        <input type="text" id="CCONT_NAME" name="CCONT_NAME[]"  placeholder="CCONT_NAME" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_MOBILE" name="CCONT_MOBILE[]"  placeholder="CCONT_MOBILE" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_PHONE" name="CCONT_PHONE[]"  placeholder="CCONT_PHONE" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_EMAIL" name="CCONT_EMAIL[]"  placeholder="CCONT_EMAIL" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_LINKEDIN" name="CCONT_LINKEDIN[]"  placeholder="CCONT_LINKEDIN" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_FACEBOOK" name="CCONT_FACEBOOK[]"  placeholder="CCONT_FACEBOOK" />
                                    </td>
                                    <td>
                                        <input type="text" id="CCONT_TWITTER" name="CCONT_TWITTER[]"  placeholder="CCONT_TWITTER" />
                                    </td>
                                    <td>
                                        <div class="input-group input-daterange">
					<input type="text" placeholder="Date Start" name="CCONT_FROM_DT[]" class="datetimepicker"   >
					    <span class="input-group-addon"> Upto Date</span>
					<input type="text" placeholder="Date End" name="CCONT_UPTO_DT[]" class="datetimepicker"  >
				    </div>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="CCONT_ACTIVE_YN" name="CCONT_ACTIVE_YN[]"  />
                                    </td>
                                    <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
                                    <!--<td>
                                     <a class="btn btn-xs btn-primary fa fa-edit" href="<?php //echo base_url(); ?>sales/CustomerAddEdit"></a>&nbsp;&nbsp; <a class=
                                     "btn btn-xs btn-danger fa fa-trash-o" data-toggle="modal" href="#" onclick="return confirm('Are you sure you want to delete this item?');"
                                     style="font-style: italic"></a>
                                    </td>-->
                                </tr>
                                    
                                                   
                            </tbody>
                            </table>
                        </div>
                        
                </div>
            
                <div id="nav-tab-4" class="tab-pane fade">
                                
                                    <!--<a class="btn btn-primary btn-sm " href="<?php //echo base_url(); ?>sales/CustomerMasterAttachement"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Attachement</span></a>-->
                                <!--<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">From Date</label>
                                                 <div class="col-md-9">
                                                     <div class="input-group input-daterange">
                                                         <input type="text" placeholder="Date Start" name="CDOC_FROM_DT" id="datetimepicker10" class="form-control"  >
                                                             <span class="input-group-addon"> Upto Date</span>
                                                         <input type="text" placeholder="Date End" name="CDOC_UPTO_DT" id="datetimepicker11" class="form-control" >
                                                     </div>
                                                 </div>
                                        </div>    
                                    </div>
                                </div>-->
                                
                                <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                <thead>
                                    <tr class="odd info">
                                        <th>SR Number</th>
                                        <th>Browse</th>
                                        <th>Description</th>
                                        <th>From Date
                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                        Upto date
                                        </th>
                                        <th>Active (<i class="fa fa-1x fa-check"></i>)</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" id="CDOC_SR_NO" name="CDOC_SR_NO[]"  placeholder="CDOC_SR_NO" />
                                        </td>
                                        <td>
                                        <input type="file" id="CDOC_FILE_NAME" name="CDOC_FILE_NAME[]" class="btn btn-success"  placeholder="CDOC_FILE_NAME" />
                                        </td>
                                        <td>
                                            <input type="text" id="CDOC_DESC" name="CDOC_DESC[]"  placeholder="CDOC_DESC" />
                                        </td>
                                         <td>
                                        <div class="input-group input-daterange">
					<input type="text" placeholder="Date Start" name="CDOC_FROM_DT[]" id="datetimepicker10"   >
					    <span class="input-group-addon"> Upto Date</span>
					<input type="text" placeholder="Date End" name="CDOC_UPTO_DT[]" id="datetimepicker11"  >
                                        </div>
                                        </td>
                                        <td>
                                           <input type="checkbox" id="CDOC_ACTIVE_YN" name="CDOC_ACTIVE_YN[]"  />
                                        </td>
                                        <td><button type="button" class="btn btn-add2 btn-sm btn-primary" data-template="textbox">Add</button></td>
                                         <!--<td>
                                        <a class="btn btn-xs btn-primary fa fa-edit" href="<?php //echo base_url(); ?>sales/CustomerMasterAttachementEdit"></a>&nbsp;&nbsp; <a class=
                                         "btn btn-xs btn-danger fa fa-trash-o" data-toggle="modal" href="#" onclick="return confirm('Are you sure you want to delete this item?');"
                                         style="font-style: italic"></a>
                                        </td>-->
                                    </tr>
                                    <tr class="odd hide" id="optionTemplate2">
                                        <td>
                                            <input type="text" id="CDOC_SR_NO" name="CDOC_SR_NO[]"  placeholder="CDOC_SR_NO" />
                                        </td>
                                        <td>
                                        <input type="file" id="CDOC_FILE_NAME" name="CDOC_FILE_NAME[]" class="btn btn-success"  placeholder="CDOC_FILE_NAME" />
                                        </td>
                                        <td>
                                            <input type="text" id="CDOC_DESC" name="CDOC_DESC[]"  placeholder="CDOC_DESC" />
                                        </td>
                                         <td>
                                        <div class="input-group input-daterange">
					<input type="text" placeholder="Date Start" name="CDOC_FROM_DT[]" class="datetimepicker"   >
					    <span class="input-group-addon"> Upto Date</span>
					<input type="text" placeholder="Date End" name="CDOC_UPTO_DT[]" class="datetimepicker"  >
                                        </div>
                                        </td>
                                        <td>
                                           <input type="checkbox" id="CDOC_ACTIVE_YN" name="CDOC_ACTIVE_YN[]"  />
                                        </td>
                                        <td><button type="button" class="btn btn-remove2 btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
                                         <!--<td>
                                        <a class="btn btn-xs btn-primary fa fa-edit" href="<?php //echo base_url(); ?>sales/CustomerMasterAttachementEdit"></a>&nbsp;&nbsp; <a class=
                                         "btn btn-xs btn-danger fa fa-trash-o" data-toggle="modal" href="#" onclick="return confirm('Are you sure you want to delete this item?');"
                                         style="font-style: italic"></a>
                                        </td>-->
                                    </tr>
                                </tbody>
                                </table>
                                </div>
                </div>
        <div id="nav-tab-5" class="tab-pane fade hidden">
            <div class="row">
                <div class="col-md-6 ui-sortable ">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 01</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_01" name="CUST_FLEX_01" class="form-control" placeholder="CUST_FLEX_01" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="form-group">
                                     <label class="col-md-3 control-label">Flex 02</label>
                                     <div class="col-md-9">
                                         <input type="text" id="CUST_FLEX_02" name="CUST_FLEX_02" class="form-control" placeholder="CUST_FLEX_02" />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="form-group">
                                     <label class="col-md-3 control-label">Flex 03</label>
                                     <div class="col-md-9">
                                         <input type="text" id="CUST_FLEX_03" name="CUST_FLEX_03" class="form-control" placeholder="CUST_FLEX_03" />
                                     </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 04</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_04" name="CUST_FLEX_04" class="form-control" placeholder="CUST_FLEX_04" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 05</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_05" name="CUST_FLEX_05" class="form-control" placeholder="CUST_FLEX_05" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 06</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_06" name="CUST_FLEX_06" class="form-control" placeholder="CUST_FLEX_06" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 06</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_07" name="CUST_FLEX_07" class="form-control" placeholder="CUST_FLEX_07" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 08</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_08" name="CUST_FLEX_08" class="form-control" placeholder="CUST_FLEX_08" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 09</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_09" name="CUST_FLEX_09" class="form-control" placeholder="CUST_FLEX_09" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 10</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_10" name="CUST_FLEX_10" class="form-control" placeholder="CUST_FLEX_10" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable ">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 11</label>
                                    <div class="col-md-9">
				    <input type="text" id="CUST_FLEX_11" name="CUST_FLEX_11" class="form-control" placeholder="CUST_FLEX_11" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 12</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_12" name="CUST_FLEX_12" class="form-control" placeholder="CUST_FLEX_12" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 13</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_13" name="CUST_FLEX_13" class="form-control" placeholder="CUST_FLEX_13" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 14</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_14" name="CUST_FLEX_14" class="form-control" placeholder="CUST_FLEX_14" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 15</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_15" name="CUST_FLEX_15" class="form-control" placeholder="CUST_FLEX_15" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 16</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_16" name="CUST_FLEX_16" class="form-control" placeholder="CUST_FLEX_16" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 17</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_16" name="CUST_FLEX_16" class="form-control" placeholder="CUST_FLEX_16" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 18</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_16CUST_FLEX_18" name="CUST_FLEX_18" class="form-control" placeholder="CUST_FLEX_18" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 19</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_19" name="CUST_FLEX_19" class="form-control" placeholder="CUST_FLEX_19" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Flex 20</label>
                                    <div class="col-md-9">
                                        <input type="text" id="CUST_FLEX_20" name="CUST_FLEX_20" class="form-control" placeholder="CUST_FLEX_20" />
                                    </div>
                                </div>
                            </div>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <div class="col-md-12 pager form-group">
                             <div class="col-md-offset-4 col-md-6 control-label">
                                <button class="btn btn-danger pull-left m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="save" id="save" value="Save">Submit</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
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
            CUST_COMP_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
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
            CUST_LANG_CODE: {
		message: 'The Description is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                                       
                }
            },
            CUST_PARTY_TYPE: {
		message: 'The Exchanging Rate is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                }
            },
            CUST_PARTY_DESC: {
		  trigger:'blur',
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    CUST_PARTY_ALIAS: {
		  trigger:'blur',
		message: 'The Payment term Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
            CUST_PARTY_URL: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    //notEmpty: {
                    //    message: 'This field is required and can\'t be empty'
                    //}
                    //stringLength: {
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
	    CUST_AC_TYPE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    //stringLength: {
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
	    CUST_AC_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                     remote: {
			message: 'Class code already existed',
			url: '<?php  echo site_url('Sales/AjaxCustomer')?>',
			type: 'POST'
			},
		    regexp: {
                       regexp: /^[A-Z0-9]+$/,
                        message: 'Disallowed charcter'
                    }
                    
                } 
            },
            CUST_AC_DESC: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_ACTIVE_YN: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    //notEmpty: {
                    //    message: 'This field is required and can\'t be empty'
                    //}
                    
                } 
            },
            CUST_PERSON_TITLE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_PERSON_FIRST_NAME: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_PERSON_MIDDLE_NAME: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_PERSON_LAST_NAME: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_ADD1: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_ADD2: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_ADD3: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_ADD4: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_CN_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_ST_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_CT_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_POSTAL: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_MOBILE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_PHONE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_FAX: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SITE_EMAIL: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    emailAddress: {
                            message: 'The value is not a valid email address'
                        },
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        }
                    
                } 
            },
            CUST_SITE_PERSON_NAME: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_ADD1: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            
            CUST_BILL_ADD2: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_ADD3: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_ADD4: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_CN_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_ST_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_CT_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_POSTAL: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_MOBILE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_PHONE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_FAX: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_BILL_EMAIL: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
		     emailAddress: {
		       message: 'The value is not a valid email address'
		     },
		     regexp: {
		       regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
		       message: 'The value is not a valid email address'
		     }
                    
                } 
            },
            CUST_BILL_PERSON_NAME: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_CLASS_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_EXCHG_RATE_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_CCY_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_PAY_TERM_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_AC_MANAGER: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_SR_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_STMT_CYCLE_CODE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_CREDIT_LIMIT: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_DISC_GRACE_DAYS: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_FROM_DT: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            },
            CUST_UPTO_DT: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                    
                } 
            }
//            CUST_SEND_DUNNING_YN: {
//		message: 'The Credit Limit is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//                    
//                } 
//            },
//            CUST_SEND_STMT_YN: {
//		message: 'The Credit Limit is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//                    
//                } 
//            },
//            CUST_CREDIT_CHECK_YN: {
//		message: 'The Credit Limit is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//                    
//                } 
//            },
//            CUST_DISC_YN: {
//		message: 'The Credit Limit is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//                    
//                } 
//            }
           
            
	    
	    
	}
    });
});
</script>


<script>


   $('.btn-add').click(function() {
   var $template = $('#optionTemplate'),
   $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
   $('.datetimepicker').datetimepicker({
       format: 'DD-MMM-YY'
       });
	removerow();
    });
 
   function removerow(){
      $(".removeButton").on('click',function(){
      var $row    = $(this).parents('.odd');
      $row.remove();
      });
      };
      
   $('.btn-add2').click(function() {
   var $template = $('#optionTemplate2'),
   $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
    $('.datetimepicker').datetimepicker({
       format: 'DD-MMM-YY'
	    });
   removerow();
   });

   function removerow2(){
      $(".removeButton2").on('click',function(){
      var $row    = $(this).parents('.odd');
      $row.remove();
      });
      };
      
   $('#clear_data').click(function(){
       $('#myForm')[0].reset();
   });           
 
   $(".PT_CR_DT").datepicker().datepicker("setDate", new Date());
   $(document).on('change','#PT_UPTO_DT',function(event){
        event.preventDefault();
           var startDate = $('#PT_FROM_DT').val();
            var endDate = $('#PT_UPTO_DT').val();
	 if (startDate > endDate)
	 {
            document.getElementById('PT_FROM_DT').value=endDate;
	 }
      });
    $(document).on('change','#PT_FROM_DT',function(event){
        event.preventDefault();
        var startDate = $('#PT_FROM_DT').val();
        var endDate = $('#PT_UPTO_DT').val();
	 if (endDate!="") {
            if (startDate > endDate)
	    {
            document.getElementById('PT_UPTO_DT').value=startDate;
            }
	 }
   });




</script>
<script type="text/javascript">
 
 function PreviewImage() {
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("CDOC_FILE_NAME").files[0]);
    };
 
 $(function () {
$('#datetimepicker6').datetimepicker({
    format: 'DD-MMM-YYYY'
         });
$('#datetimepicker7').datetimepicker({
    format: 'DD-MMM-YYYY'
    });
$("#datetimepicker6").on("dp.change",function (e) {
$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker7").on("dp.change",function (e) {
$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});

$('#datetimepicker8').datetimepicker({
    format: 'DD-MMM-YY'
         });
$('#datetimepicker9').datetimepicker({
    format: 'DD-MMM-YY'
    });
$("#datetimepicker8").on("dp.change",function (e) {
$('#datetimepicker9').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker9").on("dp.change",function (e) {
$('#datetimepicker8').data("DateTimePicker").maxDate(e.date);
});

$('#datetimepicker10').datetimepicker({
    format: 'DD-MMM-YY'
         });
$('#datetimepicker11').datetimepicker({
    format: 'DD-MMM-YY'
    });
$("#datetimepicker10").on("dp.change",function (e) {
$('#datetimepicker11').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker11").on("dp.change",function (e) {
$('#datetimepicker10').data("DateTimePicker").maxDate(e.date);
});

$('#datetimepicker12').datetimepicker({
    format: 'DD-MMM-YY'
         });
$('#datetimepicker13').datetimepicker({
    format: 'DD-MMM-YY'
    });
$("#datetimepicker12").on("dp.change",function (e) {
$('#datetimepicker13').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker13").on("dp.change",function (e) {
$('#datetimepicker12').data("DateTimePicker").maxDate(e.date);
});

$('#datetimepicker14').datetimepicker({
    format: 'DD-MMM-YY'
         });
$('#datetimepicker15').datetimepicker({
    format: 'DD-MMM-YY'
    });
$("#datetimepicker14").on("dp.change",function (e) {
$('#datetimepicker15').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker15").on("dp.change",function (e) {
$('#datetimepicker14').data("DateTimePicker").maxDate(e.date);
});

});
 
//   $(document).on('blur','#CUST_AC_CODE',function(event){
//	event.preventDefault();
//	var cust_ac_code = $("#CUST_AC_CODE").val();
//	if (cust_ac_code!="") {
//	jQuery.ajax({
//	type:"POST",
//	url: "<?php echo base_url(); ?>" + "Sales/Check_Ac_Code",
//	dataType: 'json',
//	data: {cust_ac_code: cust_ac_code},
//	success: function(json) {
//	    if (json)
//	    {
//	    var exist=json.existyn;
//		if (exist=="Y") {
//		    alert("Existing code");
//		    document.getElementById("CUST_AC_CODE").value="";
//                    $(myForm).bootstrapValidator();80
//		}
//	    }
//	}
//        });
//	 }
//    });
    
    $(document).on('change','#CUST_CLASS_CODE',function(event){
	event.preventDefault();
	var cc_code = $("#CUST_CLASS_CODE").val();
	if (cc_code!="") {
	jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Get_CC_Detail",
	dataType: 'json',
	data: {cc_code: cc_code},
	success: function(json) {
	    if (json)
	    {
	    var exist=json.existyn;
		if (json.exist_cust!="") {
		    document.getElementById("CUST_EXCHG_RATE_CODE").value =json[0].CC_EXCHG_RATE_CODE;
		    document.getElementById("CUST_CCY_CODE").value=json[0].CC_CCY_CODE;
		    document.getElementById("CUST_PAY_TERM_CODE").value=json[0].CC_PAY_TERM_CODE;
		    var credit_check=json[0].CC_CREDIT_CHECK_YN;
                   if (credit_check=='Y')
                    {
                        document.getElementById('CUST_CREDIT_CHECK_YN').checked=true;
                    }
                    else
                    {
                        document.getElementById('CUST_CREDIT_CHECK_YN').checked=false;
                            
                    }
                    document.getElementById("CUST_CREDIT_LIMIT").value=json[0].CC_CREDIT_LIMIT;
		    document.getElementById("CUST_DISC_GRACE_DAYS").value=json[0].CC_DISC_GRACE_DAYS;
                    var dis=json[0].CC_DISC_YN;
                    if (dis=='Y')
                    {
                        document.getElementById('CUST_DISC_YN').checked=true;
                    }
                    else
                    {
                        document.getElementById('CUST_DISC_YN').checked=false;
                            
                    }
                    var stmt=json[0].CC_SEND_STMT_YN;
                    if (stmt=='Y')
                    {
                        document.getElementById('CUST_SEND_STMT_YN').checked=true;
                    }
                    else
                    {
                        document.getElementById('CUST_SEND_STMT_YN').checked=false;
                            
                    }
                    var dunn=json[0].CC_SEND_DUNNING_YN;
                    if (dunn=='Y')
                    {
                        document.getElementById('CUST_SEND_DUNNING_YN').checked=true;
                    }
                    else
                    {
                        document.getElementById('CUST_SEND_DUNNING_YN').checked=false;
                            
                    }
		    document.getElementById("CUST_STMT_CYCLE_CODE").value=json[0].CC_STMT_CYCLE_CODE;
		    document.getElementById("CUST_AC_MANAGER").value=json[0].CC_AC_MANAGER;
		    document.getElementById("CUST_SR_CODE").value=json[0].CC_SP_CODE;
		}
	    }
	}
        });
 
	}
    });
    
$(function(){
    $("#CUST_SITE_CN_CODE").change(function() {
	var country=$('#CUST_SITE_CN_CODE').val();
        if (country==0) {
            $("#CUST_SITE_ST_CODE").html("<option value='0'>Select State</option>");
            $("#CUST_SITE_CT_CODE").html("<option value='0'>Select city</option>");
        }else
        {
            $("#CUST_SITE_CT_CODE").html("<option value='0'>Select city</option>");
            
            var cn_code=$('option:selected', this).val() ;
            $.ajax({
            type: "POST",                                
            url: "<?=base_url()?>Sales/ajaxstate",
            data:{cn_code:cn_code} ,
            success: function (responseData) {
            $('#CUST_SITE_ST_CODE').html(responseData);
            
            },
            });
        }
       
   
    
    $("#CUST_SITE_ST_CODE").change(function() {
        var state=$('#CUST_SITE_ST_CODE').val();
        var st_code=$('option:selected', this).val() ;
        var cn_code=$('option:selected', "#CUST_SITE_CN_CODE").val() ;
        $.ajax({
        type: "POST",                                
        url: "<?=base_url()?>Sales/ajaxcity",
        data:{st_code:st_code,cn_code:cn_code} ,
        success: function (responseData) {
        $('#CUST_SITE_CT_CODE').html(responseData);
    
        },
        });


    });
    
    });

    $("#CUST_BILL_CN_CODE").change(function() {
	var country=$('#CUST_BILL_CN_CODE').val();
        if (country==0) {
            $("#CUST_BILL_ST_CODE").html("<option value='0'>Select State</option>");
            $("#CUST_BILL_CT_CODE").html("<option value='0'>Select city</option>");
        }else
        {
            $("#CUST_BILL_CT_CODE").html("<option value='0'>Select city</option>");
            
            var cn_code=$('option:selected', this).val() ;
            $.ajax({
            type: "POST",                                
            url: "<?=base_url()?>Sales/ajaxstate",
            data:{cn_code:cn_code} ,
            success: function (responseData) {
            $('#CUST_BILL_ST_CODE').html(responseData);
            
            },
            });
        }
       
   
    
    $("#CUST_BILL_ST_CODE").change(function() {
        var state=$('#CUST_BILL_ST_CODE').val();
        var st_code=$('option:selected', this).val() ;
        var cn_code=$('option:selected', "#CUST_BILL_CN_CODE").val() ;
        $.ajax({
        type: "POST",                                
        url: "<?=base_url()?>Sales/ajaxcity",
        data:{st_code:st_code,cn_code:cn_code} ,
        success: function (responseData) {
        $('#CUST_BILL_CT_CODE').html(responseData);
    
        },
        });
      });
      });
      });
</script>


</body>
</html>
