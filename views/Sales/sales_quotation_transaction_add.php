<?php
//print"<pre>";
//print_r($ref);
//print"</pre>";
//exit;

?>

<div class="content" id="content">
                     <!-- begin breadcrumb -->
                     <ol class="breadcrumb pull-right">
                        <li><a href="javascript:;">Sales</a></li>
                        <li><a href="javascript:;">Sales Quotation Transaction</a></li>
                    </ol>
                     <!-- end breadcrumb -->
                     <!-- begin page-header -->
                     <h1 class="page-header">Stock Transfer Request Transaction <small>you may add here...</small></h1>
                     <!-- end page-header -->
                     
                     <!-- begin row -->
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
                         <h4 class="panel-title">Sales Quoatation Transaction</h4>
                </div>
                     
                <div class="panel-body">
                    <form class="form-horizontal" name="myForm" id="myForm" action="<?php echo base_url();?>Sales/SalesQuotationTransactionAdd" method="post" enctype="multipart/form-data">
                        <div class="well"><!--well start-->
                             <div class="row"><!--OUTER row defined BEGIN-->
                                <div class="col-md-5 ui-sortable"><!-- FIRST COL-6 BEGIN-->
                                     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
					    <input class="hidden" id="QH_COMP_CODE" name="QH_COMP_CODE" placeholder="QH_COMP_CODE" type="text" value="001">
					     <input class="hidden" id="QH_GROSS_VALUE" name="QH_GROSS_VALUE" placeholder="QH_GROSS_VALUE" type="text" >
					     <input class="hidden" id="QH_GROSS_VALUE_LC" name="QH_GROSS_VALUE_LC" placeholder="QH_GROSS_VALUE_LC" type="text" >
						
					     <input class="hidden" id="QH_TAX_PCT" name="QH_TAX_PCT" placeholder="QH_TAX_PCT" type="text" >
					     <input class="hidden" id="QH_TAX_VALUE" name="QH_TAX_VALUE" placeholder="QH_TAX_VALUE" type="text" >
						
					     <input class="hidden" id="QH_DISCOUNT_PCT" name="QH_DISCOUNT_PCT" placeholder="QH_DISCOUNT_PCT" type="text" >
					     <input class="hidden" id="QH_DISCOUNT_VALUE" name="QH_DISCOUNT_VALUE" placeholder="QH_DISCOUNT_VALUE" type="text" >
					     <input class="hidden" id="QH_OVERHEAD_PCT" name="QH_OVERHEAD_PCT" placeholder="QH_OVERHEAD_PCT" type="text" >
					     <input class="hidden" id="QH_OVERHEAD_VALUE" name="QH_OVERHEAD_VALUE" placeholder="QH_OVERHEAD_VALUE" type="text" >
					     <input class="hidden" id="QH_NET_VALUE" name="QH_NET_VALUE" placeholder="QH_NET_VALUE" type="text" >
					     <input class="hidden" id="QH_NET_VALUE_LC" name="QH_NET_VALUE_LC" placeholder="QH_NET_VALUE_LC" type="text" >
					     <input class="hidden" id="QH_TOTAL_LINES" name="QH_TOTAL_LINES" placeholder="QH_TOTAL_LINES" type="text" >
					     <input class="hidden" id="QH_STATUS" name="QH_STATUS" placeholder="QH_STATUS" type="text" value="Created">	
						
						
					     <input class="hidden" id="PLH_CODE" name="PLH_CODE" placeholder="PLH_CODE" type="text" >
					     <input class="hidden" id="QH_SALE_TYPE" name="QH_SALE_TYPE" placeholder="QH_SALE_TYPE" type="text" >
					     <input class="hidden" id="QH_OVERHEAD_PCT" name="QH_OVERHEAD_PCT" placeholder="QH_OVERHEAD_PCT" type="text" >
					     <input class="hidden" id="QH_OVERHEAD_VALUE" name="QH_OVERHEAD_VALUE" placeholder="QH_OVERHEAD_VALUE" type="text" >
						<input class="hidden" id="QH_CUST_ID" name="QH_CUST_ID" placeholder="QH_CUST_ID" type="text" >
					     <input class="hidden" id="QH_CUST_TYPE" name="QH_CUST_TYPE" placeholder="QH_CUST_TYPE" type="text" >
					    <input type="hidden" name="QH_LANG_CODE" id="QH_LANG_CODE" value="en">
                                            <input type="hidden" id="QH_SR_CODE"  name="QH_SR_CODE" value="<?php if($locn_sr_code!='no'){echo $locn_sr_code[0]['SR_CODE']; }?>"  />
					     <input type="hidden" name="QH_LOCN_CODE" id="QH_LOCN_CODE" value="<?php if($locn_sr_code!='no'){echo $locn_sr_code[0]['SR_LOCN_CODE']; }?>">
					     <input type="hidden" name="check_LOCN_sr_CODE" id="check_LOCN_sr_CODE" value="<?php if($locn_sr_code=='no'){echo $locn_sr_code;}?>">					    
                                         <label class="col-md-3 control-label">Transaction</label>
                                         <div class="col-md-8">
                                             <input type="text" readonly placeholder="QH_TXN_CODE/TXN_DESC"  name="QH_TXN_CODE" id="QH_TXN_CODE" class="form-control" value="QTN">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
				     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Contact No</label>
                                            <div class="col-md-8">
                                             <input type="text" placeholder="QH_CONTACT_NO"  name="QH_CONTACT_NO" id="QH_CONTACT_NO" class="form-control">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
                                     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                             <label class="col-md-3 control-label">Customer Ac Code</label>
                                         <div class="col-md-8">
                                             <input type="text" placeholder="QH_CUST_AC_CODE"  name="QH_CUST_AC_CODE" id="QH_CUST_AC_CODE" class="form-control">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
				     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                             <label class="col-md-3 control-label">Customer Ac Desc</label>
                                         <div class="col-md-8">
                                             <input type="text" placeholder="QH_CUST_AC_DESC"  name="QH_CUST_AC_DESC" id="QH_CUST_AC_DESC" class="form-control">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
				     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Remarks</label>
                                            <div class="col-md-8">
                                             <input type="text" placeholder="QH_DESC"  name="QH_DESC" id="QH_DESC" class="form-control">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
				     
                                </div><!-- FIRST COL-6 END-->
                                <div class="col-md-4 ui-sortable"><!-- SECOND COL-6 BEGIN-->
                                     <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Txn Number</label>
                                            <div class="col-md-8">
                                             <input type="text" readonly placeholder="QH_TXN_NO"  name="QH_TXN_NO" id="QH_TXN_NO" class="form-control" value="****">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
                                      <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Ref Doc</label>
                                            <div class="col-md-8">
                                             <input type="text" placeholder="QH_DOC_REF"  name="QH_DOC_REF" id="QH_DOC_REF" class="form-control">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
                                      <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Delivery Date</label>
                                            <div class="col-md-8">
                                             <input type="text" placeholder="QH_DELIVERY_DT"  name="QH_DELIVERY_DT" id="QH_DELIVERY_DT" class="form-control datepicker-dob">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
                                      <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Delivery Code</label>
                                            <div class="col-md-8">
						<select class="form-control" id="QH_DELIVERY_CODE" name="QH_DELIVERY_CODE">
						   <option disabled="" selected="" value="0">Select</option>
						       <?php foreach($delivery_code as $row){  ?>
						       <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
						       <?php }?>
					   
					       </select>
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
                                </div><!-- SECOND COL-6 BEGIN-->
                                <div class="col-md-3 ui-sortable"><!-- THIRD COL-6 BEGIN-->
                                    <div class="row"><!--Inner row defined BEGIN-->
                                         <div class="form-group">
                                            <label class="col-md-3 control-label"> Txn Date</label>
                                            <div class="col-md-8">
                                             <input type="text"  placeholder="QH_TXN_DT" readonly name="QH_TXN_DT" id="QH_TXN_DT" class="txn_date form-control" value="<?php echo date('dd-M-yy');?>">
                                         </div>
                                         </div>
                                     </div><!--Inner row END-->
                                    <div class="row"><!--Inner row defined BEGIN-->
                                        <div class="pager form-group">
                                            <div class="col-md-6 control-label">
                                               <a href="#modal-dialog" class="btn btn-sm btn-primary" data-toggle="modal">Reference</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- THIRD COL-6 BEGIN-->
                             </div><!--OUTER row defined END-->
                         </div><!--well end-->
                        <!--<div class="panel-footer"> <!--start
                        </div> <!--end-->
                        <!--<div class="well"><!--tab started-->
                        <div data-sortable-id="ui-unlimited-tabs-2" class="panel panel-default panel-with-tabs">
                        <div class="panel-heading p-0">
                            <div class="panel-heading-btn m-r-10 m-t-10">
                                <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-inverse" href="javascript:;" data-original-title="" title=""><i class="fa fa-expand"></i></a>
                            </div>
                            <!-- begin nav-tabs -->
                            <div class="tab-overflow overflow-right">
                                <ul class="nav nav-tabs" style="margin-left: 0px;">
                                    <li class="prev-button" style=""><a class="text-inverse" data-click="prev-tab" href="javascript:;"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a data-toggle="tab" href="#nav-tab2-1">Info</a></li>
                                    <li class="hidden"><a data-toggle="tab" href="#nav-tab2-2">Flex</a></li>
                                    <li class=""><a data-toggle="tab" href="#nav-tab2-3">Line</a></li>
                                    <li class=""><a data-toggle="tab" href="#nav-tab2-4">Action</a></li>
                                    <li class=""><a data-toggle="tab" href="#nav-tab2-5">Attachement</a></li>
                                   
                                    <li class="next-button" style=""><a class="text-inverse" data-click="next-tab" href="javascript:;"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content well">
                            <div id="nav-tab2-1" class="tab-pane fade active in">
                               
                                <div class="row">
                                    <div class="col-md-6 ui-sortable well"><!-- FIRST COL-6 BEGIN-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Address</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_ADD1" name="QH_BILL_ADD1" class="form-control" placeholder="QH_BILL_ADD1" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_ADD2" name="QH_BILL_ADD2" class="form-control" placeholder="QH_BILL_ADD2" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_ADD3" name="QH_BILL_ADD3" class="form-control" placeholder="QH_BILL_ADD3" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_ADD4" name="QH_BILL_ADD4" class="form-control" placeholder="QH_BILL_ADD4" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="QH_BILL_CN_CODE" name="QH_BILL_CN_CODE">
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
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">State</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="QH_BILL_ST_CODE" name="QH_BILL_ST_CODE">
                                                     <option value="0">Select State</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">City</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="QH_BILL_CT_CODE" name="QH_BILL_CT_CODE">
                                                    <option value="0">Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">PO Box</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_POSTAL" name="QH_BILL_POSTAL" class="form-control" placeholder="QH_BILL_POSTAL" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Mobile</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_MOBILE" name="QH_BILL_MOBILE" class="form-control" placeholder="QH_BILL_MOBILE" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Phone</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_PHONE" name="QH_BILL_PHONE" class="form-control" placeholder="QH_BILL_PHONE" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fax</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_FAX" name="QH_BILL_FAX" class="form-control" placeholder="QH_BILL_FAX" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_EMAIL" name="QH_BILL_EMAIL" class="form-control" placeholder="QH_BILL_EMAIL" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Contact Person</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_BILL_CONTACT" name="QH_BILL_CONTACT" class="form-control" placeholder="QH_BILL_CONTACT" />
                                            </div>
                                        </div>
                                    </div><!-- FIRST COL-6 End-->
				   
				    
                            
                                    <div class="col-md-6 ui-sortable well"><!-- Second COL-6 BEGIN-->
                                       <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-9">
                                                <div class="checkbox">
                                                    <label><input name="QH_BILL_AS_SHIP_YN" id="QH_BILL_AS_SHIP_YN" type="checkbox" checked="checked"> Bill As Ship Address </label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
					     <label class="col-md-3 control-label">From Date</label>
						<div class="col-md-9">
						   <input type="text" placeholder="Date Start" name="QH_EFF_FROM_DT" id="datetimepicker6" class="form-control"  >
						</div>
					 </div>
					 <div class="form-group">
					     <label class="col-md-3 control-label">Upto Date</label>
						  <div class="col-md-9">
						    <input type="text" placeholder="Date End" name="QH_EFF_UPTO_DT" id="datetimepicker7" class="form-control" >
						  </div>
					 </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Payment Terms</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="QH_PT_CODE" name="QH_PT_CODE">
						   <option disabled="" selected="" value="0">Select</option>
					     <?php foreach($pt  as $row){  ?>
					     <option value="<?php echo $row['PT_CODE'];?>"><?php echo $row['PT_DESC'];?></option>
					     <?php }?>
						</select>
                                            </div>
                                        </div>
					    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Shipment</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="QH_SHIP_CODE" name="QH_SHIP_CODE">
						   <option disabled="" selected="" value="0">Select</option>
					     <?php foreach($ship_code  as $row){  ?>
					     <option value="<?php echo $row['SH_CODE'];?>"><?php echo $row['SH_DESC'];?></option>
					     <?php }?>
						</select>
                                            </div>
                                                

                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Carrier</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="QH_CARRIER_CODE" name="QH_CARRIER_CODE">
						   <option disabled="" selected="" value="0">Select</option>
						  
					     <?php foreach($cari_code  as $row){  ?>
					     <option value="<?php echo $row['CA_CODE'];?>"><?php echo $row['CA_DESC'];?></option>
					     <?php }?>
						</select>
                                            </div>
                                                <!--no values in db<input type="text" id="QH_CARRIER_CODE" name="QH_CARRIER_CODE" class="form-control" placeholder="QH_CARRIER_CODE" />-->
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Freight</label>
                                            <div class="col-md-9">
						<select class="form-control" id="QH_FREIGHT_CODE" name="QH_FREIGHT_CODE">
						   <option disabled="" selected="" value="0">Select</option>
						       <?php foreach($freight_code as $row){  ?>
						       <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
						       <?php }?>
					   
					       </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Delevery Terms</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_DELIVERY_TERMS" name="QH_DELIVERY_TERMS" class="form-control" placeholder="QH_DELIVERY_TERMS" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Currency</label>
                                            <div class="col-md-9">
                                                
						<select class="form-control" id="QH_CCY_CODE" name="QH_CCY_CODE">
						   <option disabled="" selected="" value="0">Select</option>
						       <?php foreach($ccy  as $row){  ?>
						       <option value="<?php echo $row['CCY_CODE'];?>"><?php echo $row['CCY_DESC'];?></option>
						       <?php }?>
					   
					       </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Exchange Rate</label>
                                            <div class="col-md-9">
                                                <input type="text" id="QH_EXC_RATE" name="QH_EXC_RATE" class="form-control" placeholder="QH_EXC_RATE" />
                                        </div>
                                        </div>
                                    </div><!-- Second COL-6 End-->
				     
                                </div>
				<div class="row">
				 <div class="col-md-6 ui-sortable ship"><!-- Second COL-6 BEGIN-->
				    <div class="row">
			      
                            <div class="form-group">
				<label class="col-md-3 control-label">Ship Address</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_ADD1" name="QH_SHIP_ADD1" class="form-control" placeholder="QH_SHIP_ADD1" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_ADD2" name="QH_SHIP_ADD2" class="form-control" placeholder="QH_SHIP_ADD2" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_ADD3" name="QH_SHIP_ADD3" class="form-control" placeholder="QH_SHIP_ADD3" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_ADD4" name="QH_SHIP_ADD4" class="form-control" placeholder="QH_SHIP_ADD4" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Country</label>
				<div class="col-md-9">
				    <select class="form-control" id="QH_SHIP_CN_CODE" name="QH_SHIP_CN_CODE">
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
				    <select class="form-control" id="QH_SHIP_ST_CODE" name="QH_SHIP_ST_CODE">
					<option value="0">Select State</option>
				
				    </select>
				</div>
			    </div>
                            </div>

                            <div class="row"> 
			    <div class="form-group">
				<label class="col-md-3 control-label">City</label>
				<div class="col-md-9">
				    <select class="form-control" id="QH_SHIP_CT_CODE" name="QH_SHIP_CT_CODE">
					<option value="0">Select City</option>
				
				    </select>
				</div>
			    </div> 
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">PO Box</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_POSTAL" name="QH_SHIP_POSTAL" class="form-control" placeholder="QH_SHIP_POSTAL" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Mobile</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_MOBILE" name="QH_SHIP_MOBILE" class="form-control" placeholder="QH_SHIP_MOBILE" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Phone</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_PHONE" name="QH_SHIP_PHONE" class="form-control" placeholder="QH_SHIP_PHONE" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Fax</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_FAX" name="QH_SHIP_FAX" class="form-control" placeholder="QH_SHIP_FAX" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Email</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_EMAIL" name="QH_SHIP_EMAIL" class="form-control" placeholder="QH_SHIP_EMAIL" />
				</div>
			    </div>
                            </div>
                            <div class="row"> 
                            <div class="form-group">
				<label class="col-md-3 control-label">Contact Person</label>
				<div class="col-md-9">
				    <input type="text" id="QH_SHIP_CONTACT" name="QH_SHIP_CONTACT" class="form-control" placeholder="QH_SHIP_CONTACT" />
				</div>
                            </div>
                            </div>
                        </div><!-- Second COL-6 End-->
				</div>
                                
                                
                            </div>
                            <div id="nav-tab2-2" class=" hidden tab-pane fade">
                            
                                <div class="row">
                                    <div class="col-md-6 ui-sortable "><!-- FIRST COL-6 BEGIN-->
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
                                    </div><!-- FIRST COL-6 end-->
                                    <div class="col-md-6 ui-sortable "><!-- Second COL-6 BEGIN-->
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
                                                <label class="col-md-3 control-label">Flex 16</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_FLEX_17" name="CUST_FLEX_17" class="form-control" placeholder="CUST_FLEX_17" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Flex 18</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="CUST_FLEX_18" name="CUST_FLEX_18" class="form-control" placeholder="CUST_FLEX_18" />
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
                                    </div><!-- Second COL-6 end-->
                                </div>
                                
                            </div>
                            <div id="nav-tab2-3" class="tab-pane fade">
                               
                                <div class="row">
                                                            <section class="col-md-12">
                                                                <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"  name="checkbox" id="ck1" >
                                                                        <span> Show MM Info</span>
                                                                    </label>
                                                                </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="row">
                                                            <section class="col-md-12">
                                                                <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"  name="checkbox" id="ck2" >
                                                                        <span>Show Discount </span>
                                                                    </label>
                                                                </div>
                                                                </div>
                                                            </section>
                                                        </div>

                                                        <div class="table-responsive">


                                                            <table class="table table-bordered" style="border-collapse: separate">
                                                                <thead>
                                                                    <tr class="table-responsive info">
                                                                        <th>
                                                                            <center>Line</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Product</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Item Code</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Item Description</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Width</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Height</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>UOM</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Quantity</center>
                                                                        </th>
                                                                        <th>
                                                                            <center> Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </center>
                                                                        </th>

                                                                        
                                                                            <th id="mm">
                                                                                <center>Building</center>
                                                                            </th>

                                                                            <th   id="mm">
                                                                                <center>Floor</center>
                                                                            </th>

                                                                            <th id="mm">
                                                                                <center>Flat</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Unit</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Mount Type</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Mount On</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Operate </center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Control</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Opening</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Pelmet</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Projection</center>
                                                                            </th>
                                                                            <th id="mm">
                                                                                <center>Fascia</center>
                                                                            </th>

                                                                        
                                                                            
                                                                            <!--<th id="sd">
                                                                                <center>Gross Value </center>
                                                                            </th>-->
                                                                            <th id="sd">
                                                                                <center>Discount %</center>
                                                                            </th>
                                                                            <th id="sd">
                                                                                <center>Discount Value</center>
                                                                            </th>
                                                                            <th id="sd">
                                                                                <center>Tax %</center>
                                                                            </th>
                                                                            <th id="sd">
                                                                                <center>Tax Value</center>
                                                                            </th>
									    <th id="sd" >
                                                                                <center>Gross Value </center>
                                                                            </th>
                                                                            <th id="sd">
                                                                                <center>Remarks</center>
                                                                            </th>

                                                                      

                                                                    </tr>
                                                                </thead>


                                                                <tbody id="result">
								  <?php $count=1; ?>
                                                                    <tr class="odd">
                                                                        <td><span><input type="text"  name="QL_LINE[]" value="<?php echo $count;?>" ></span></td>
									<td><span>
									<select  id="QL_PRODUCT_CODE[]"  name="QL_PRODUCT_CODE[]">
									   <option disabled="" selected="" value="0">Select</option>
									       <?php foreach($prod_code  as $row1){  ?>
									       <option value="<?php echo $row1['IF_CODE'];?>"> <?php echo $row1['IF_DESC'];?></option>
									       <?php }?>
								   
								       </select>
									</span></td>
									<td><span>
									<select  id="QL_ITEM_CODE[]"  name="QL_ITEM_CODE[]">
									   <option disabled="" selected="" value="0">Select</option>
									       
								   
								       </select>
									</span></td>
									<td><span><input type="text"  name="QL_ITEM_DESC[]"  ></span></td>
									<td><span><input type="text"  name="QL_WIDTH[]"  ></span></td>
									<td><span><input type="text"  name="QL_HEIGHT[]"  ></span></td>
									<td><span>
									<select  id="QL_UOM_CODE[]" name="QL_UOM_CODE[]">
									   <option disabled="" selected="" value="">Select UOM</option>
									       
								   
								       </select></span></td>
									<td><span><input type="text"  name="QL_QTY[]"  ></span>
									<input type="hidden"  name="QL_QTY_BU[]" id="QL_QTY_BU[]">
									<input type="hidden"  id="QL_ITEM_CODE_Applicable[]" name="QL_ITEM_CODE_Applicable[]" >
									</td>
									<td><span><input type="text"  name="QL_PRICE[]" id="QL_PRICE[]" ></span>
									<input type="hidden"  name="QL_VALUE[]" id="QL_VALUE[]">
									</td>

                                                                        
									   <td id="mm"><span><input type="text"  name="QL_BUILD[]" ></span></td>
									   <td id="mm"><span><input type="text"  name="QL_FLOOR[]" ></span></td>
									   <td id="mm"><span><input type="text"  name="QL_FLAT[]" ></span></td>
									   <td id="mm"><span><input type="text"  name="QL_UNIT[]" ></span></td>
									   <td id="mm"><span>
									   <select  id="QL_MOUNT_TYPE[]"  name="QL_MOUNT_TYPE[]">
									   <option disabled="" selected="" value="0">Select Type</option>
									       <?php foreach($mount_type  as $row1){  ?>
									       <option value="<?php echo $row1['VSL_CODE'];?>"> <?php echo $row1['VSL_DESC'];?></option>
									       <?php }?>
								   
								       </select>
									   </span></td>
									   <td id="mm"><span>
									   <select  id="QL_MOUNT_ON[]"  name="QL_MOUNT_ON[]">
									   <option disabled="" selected="" value="0">Select On</option>
									       <?php foreach($mount_on  as $row1){  ?>
									       <option value="<?php echo $row1['VSL_CODE'];?>"> <?php echo $row1['VSL_DESC'];?></option>
									       <?php }?>
								   
								       </select>
									   </span></td>
									   <td id="mm"><span>
									      <select  id="QL_OPERATE[]"  name="QL_OPERATE[]">
										  <option disabled="" selected="" value="0">Select Operate</option>
										      
										      <option  value="Manual"> Manual</option>
										      <option  value="Motorized"> Motorized</option>
										      
									  
									      </select>
									      </span></td>
									   <td id="mm">
									      <select  id="QL_CONTROL[]"  name="QL_CONTROL[]">
										  <option disabled="" selected="" value="0">Select Control</option>
										      
										      <option  value="Left">Left</option>
										      <option  value="Right">Right</option>
										      
									  
									      </select>
									      </span></td>
									      <td id="mm"><span>
									      <select  id="QL_OPENING[]"  name="QL_OPENING[]">
										  <option disabled="" selected="" value="0">Select Opening</option>
										      
										      <option value="Top">Top</option>
										      <option value="Right">Right</option>
										      <option value="Left">Left</option>
										      <option value="Center">Center</option>
									      </select>
									      </span></td>
									      <td id="mm"><span>
									      <select  id="QL_PELMET[]"  name="QL_PELMET[]">
										  <option disabled="" selected="" value="0">Select Pelmet</option>
										      
										      <option  value="Yes">Yes</option>
										      <option  value="No">No</option>
									      </select>
									      </span></td>
									   <td id="mm"><span><input type="text"  name="QL_PROJECTION[]" ></span></td>
									   <td id="mm"><span><input type="text"  name="QL_FASCIA[]" ></span></td>
                                                                        


                                                                            
                                                                           
                                                                           <td id="sd"><span><input type="text"  name="QL_DISC_PCT[]" ></span></td>
                                                                           <td id="sd"><span><input type="text"  name="QL_DISC_VALUE[]" ></span></td>
                                                                           <td id="sd"><span><input type="text"  name="QL_TAX_PCT[]" ></span></td>
                                                                           <td id="sd"><span><input type="text"  name="QL_TAX_VALUE[]" ></span></td>
									   <td id="sd"><span><input type="text"  name="QL_GROSS_VALUE[]" readonly >
									   <input type="hidden"  name="QL_GROSS_VALUE_LC[]" >
									   </span></td>
									   <td id="sd"><span><input type="text"  name="QL_REMARKS[]" >
									   <input type="hidden"   class="count" value="<?php echo $count;?>" >
									   <input type="hidden" class="L_Count"  value="<?php echo $count++;?>" >
									   
									   </span></td>
									   
									   
                                                                    </tr>
								     	<tr id="last"  class="inverse" style="table-layout: fixed;">

	<td colspan="1" style="border: hidden;"><!--Reference Txn--></td>
	<td style="border: hidden;"><!--<input type="text" placeholder="" >--></td>
   
	<td style="border: hidden;"></td>
	<td style="border: hidden;"></td>
	<td style="border: hidden;"></td>
	<td style="border: hidden;"></td>
	<td style="border: hidden;"></td>
	<td style="border: hidden;"> <!--Total--> </td>
	 <td style="border: hidden;"><!--<input type="text" id="tot_price" name="tot_price" placeholder="" >--></td>

	
		<td style="border: hidden;" id="mm"></td>
		<td  style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		<td style="border: hidden;" id="mm"></td>
		
	

		
		
		<td style="border: hidden;" id="sd"></td>
		 <td style="border: hidden;" id="sd">Total Disc <input type="text" placeholder="" id="tot_disc_value" name="tot_disc_value"></td>
		<td style="border: hidden;" id="sd"></td>
		 <td style="border: hidden;" id="sd">Total Tax <input type="text" placeholder="" id="tot_tax_value" name="tot_tax_value"></td>
		 <td  style="border: hidden;"  id="sd">Total Gross <!--</td>  -->          
		<!--<td style="border: hidden;"  id="sd">--> <input type="text" id="tot_gross_value" name="tot_gross_value" placeholder="" ></td>
		 <td style="border: hidden;" id="sd"></td>



</tr>
                                                               </tbody>
                                                            </table>
                                                            
       
                 

                                                                
                                                                    
                                            </div>
                            </div>
                            <div id="nav-tab2-4" class="tab-pane fade">
			      
			   <div class="table-responsive">

                              <table class="table table-striped table-bordered dataTable no-footer" id="data-table">
				  <thead>
				       <tr>
				       <th>System ID</th>
				       <th>Event System ID</th>
				       <th>Language Code</th>
				       <th>Operation</th>
				       <th>Event Note</th>
				       <th>Event Date</th>
				       <th>Event UserID</th>
				       </tr>
				    </thead>
				    
				    <tbody>
				       <?php
				       foreach($event as $row) {
					  ?>
				       <tr>
					   <td><?php echo $row['OE_SYS_ID']; ?></td>
					   <td><?php echo $row['OE_OH_SYS_ID']; ?></td>
					   <td><?php echo $row['OE_COMP_CODE']; ?></td>
					   <td><?php echo $row['OE_LANG_CODE']; ?></td>
					   <td><?php echo $row['OE_NOTE']; ?></td>
					   <td><?php echo $row['OE_DT']; ?></td>
					   <td><?php echo $row['OE_UID']; ?></td>

				       </tr>
				       <?php } ?>
				    </tbody>
			      </table>
			      
			   </div>
                            </div>
                            <div id="nav-tab2-5" class="tab-pane fade">
                                
                                 <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                <thead>
                                    <tr class="odd info">
                                        <th>Line Number</th>
                                        <th>Browse File</th>
                                        <th>Description</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" id="QDOC_LINE" name="QDOC_LINE[]"  placeholder="QDOC_LINE" />
                                        </td>
                                        <td>
                                        <input type="file" id="QDOC_FILE_NAME" name="QDOC_FILE_NAME[]" class="btn btn-success"  placeholder="QDOC_FILE_NAME" />
                                        </td>
                                        <td>
                                            <input type="text" id="QDOC_DESC" name="QDOC_DESC[]"  placeholder="QDOC_DESC" />
                                        </td>
                                        <td><button type="button" class="btn btn-add2 btn-sm btn-primary" data-template="textbox">Add</button></td>
                                    </tr>
				    <tr class="odd hide" id="optionTemplate2">
                                        <td>
                                            <input type="text" id="QDOC_LINE" name="QDOC_LINE[]"  placeholder="QDOC_LINE" />
                                        </td>
                                        <td>
                                        <input type="file" id="QDOC_FILE_NAME" name="QDOC_FILE_NAME[]" class="btn btn-success"  placeholder="QDOC_FILE_NAME" />
                                        </td>
                                        <td>
                                            <input type="text" id="QDOC_DESC" name="QDOC_DESC[]"  placeholder="QDOC_DESC" />
                                        </td>
                                         <td><button type="button" class="btn btn-remove2 btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
                                    </tr>
                                </tbody>
                                </table>
                                </div>
                        </div>
                           
                        
			<div class="col-md-12 pager form-group"><!--footer start-->
                             <div class="col-md-offset-4 col-md-6 control-label">
                                <button class="btn btn-danger pull-left m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="save" id="save" value="Save">Submit</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                         </div><!--footer end-->
			 <div class="modal fade" id="modal-window">
    <div class="modal-dialog">
	 <div class="modal-content">
	    <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		    <h4 class="modal-title">Model Window</h4>
	    </div>
	    <div class="modal-body">
		<div class="panel-body">
		     <div class="table-responsive">


                                                            <table class="table table-bordered" style="border-collapse: separate">
                                                                <thead>
                                                                    <tr class="table-responsive info">
                                                                        <th><!--<input type="hidden"  id="tick_row" name="tick_row" value='0'  >-->
                                                                            <center></center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Element Type</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Item Code</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Item Description</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Width</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Height</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>UOM</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Quantity</center>
                                                                        </th>
                                                                        <th>
                                                                            <center> Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </center>
                                                                        </th>
								      </tr>
                                                                </thead>


                                                                <tbody id="fanc">
								  <?php //$count=1;
								 // foreach($spa_code as $row){
								     
								  
								  ?>
                                                                   <!-- <tr class="odd">
                                                                        <td><span><input type="hidden"  name="QAL_LINE[]" value="<?php //echo $count;?>" >
									<input type="checkbox"  id="testing" name="check_tick[]" >
									</span></td>
									<td><span><input type="text"  name="QAL_ADDON[]" value="<?php //echo $row['SPA_CODE'];?>" ></span></td>
									<td><span>
									<select  id="QAL_ITEM_CODE[]"  name="QAL_ITEM_CODE[]">
									   <option disabled="" selected="" value="0">Select Item</option>
									       
								   
								       </select>
									</span></td>
									<td><span><input type="text"  name="QAL_ITEM_DESC[]"  >
									
									</span></td>
									<td><span><input type="text" readonly name="QAL_WIDTH[]"  >
									<input type="hidden"  id="width[]" class="width[]" name="width[]" >
									</span></td>
									<td><span><input type="text" readonly name="QAL_HEIGHT[]"  >
									<input type="hidden"  id="height[]" class="height[]" name="height[]" >
									</span></td>
									<td><span>
									<select  id="QAL_UOM_CODE[]" name="QAL_UOM_CODE[]">
									   <option disabled="" selected="" value="">Select UOM</option>
									       
								   
								       </select></span></td>
									<td><span><input type="text" readonly name="QAL_QTY[]"  >
									<input type="hidden"  id="QAL_QTY_BU[]"  name="QAL_QTY_BU[]" >
									<input type="hidden"  id="qty[]" class="qty[]" name="qty[]" >
									</span></td>
									<td><span><input type="text" readonly  name="QAL_PRICE[]">
									<input type="hidden"  id="QAL_VALUE[]" name="QAL_VALUE[]" >
									<input type="hidden"  id="QAL_GROSS_VALUE[]" name="QAL_GROSS_VALUE[]" >
									<input type="hidden"  id="QAL_GROSS_VALUE_LC" name="QAL_GROSS_VALUE_LC[]"  >
									<input type="hidden"   value="<?php //echo $count++;?>" >
									<input type="hidden"  id="location" value="" >
									   <input type="hidden"  id="hidden-itemcode" value="" >
									   
									   </span></td>
									   

                                                                    </tr>-->
								     <?php //}?>
                                                               </tbody>
                                                            </table>
                                                            
       
                 

                                                                
                                                                    
                                            </div>
		</div>
	    </div>
	    <div class="modal-footer">
			    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
			    <a href="javascript:;" class="btn btn-sm btn-success" id="transfer2">OK</a>
		    </div>
	 </div>
   </div>
<!--</div>
		    
	    </div>
    </div>
</div>-->
                    </form>
                </div>
            </div>
                 <!-- end panel -->
                 
         <!--</div>-->
             <!-- end  -->
             
    </div>
         <!-- end row -->
         
</div>
	    <div class="modal fade" id="modal-dialog">
    <div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			    <h4 class="modal-title">Reference Document</h4>
		    </div>
		    <div class="modal-body">
			<div class="panel-body">
			     <div class="form-group">
		<!--<label class="col-md-1 control-label"></label>-->
				<div class="row">
				<div class="col-md-5">
				    <label>Reference Document Available :</label>
				    <select class="form-control" id="first" size="10" multiple="">
					<!--<option>CODE, TXN_NO, TXN_DT</option>-->
					<?php foreach($ref as $row2) { ?>
					<option value="<?php echo $row2['OPH_SYS_ID'];?>-<?php echo $row2['MH_SYS_ID'];?>"><?php echo $row2['OPH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['OPH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['OPH_TXN_DT'];?></option>
					<?php } ?>
				    </select>
				    <label class="radio-inline">
					<input type="radio" checked="" value="option1" name="optionsRadios">
					    Pull Automatic
				    </label>
				    <label class="radio-inline">
					<input type="radio" value="option2" name="optionsRadios">
					    Scan Barcode
				    </label>
				    <label class="btn">
					<button type="button" class="btn btn-sm btn-danger" onclick="listbox_selectall('first','second', false)">Clear</button>
				    </label>
				</div>
				<div class="col-md-2 p-t-40">
				    <label class="btn p-l-20">
					<button type="button" class="btn btn-sm btn-info" onclick="next('first', 'second')"><i class="fa fa-caret-right fa-2x"></i></button>
				    </label>
				    <label class="btn p-l-20">
					<button class="btn btn-sm btn-info" type="button" onclick="next('second', 'first')"><i class="fa fa-caret-left fa-2x"></i></button>
					<!--<button class="btn btn-sm btn-danger" type="button" onclick="listbox_selectall('second', false)">Clear</button>-->
				    </label>
				</div>
				<div class="col-md-5">
				    <label>Selected :</label>
				    <select class="form-control" id="second" size="10" multiple="">
					
				    </select>
				    
				</div>
				</div>
				</div>
			</div>
		    </div>
		    <div class="modal-footer">
			    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
			    <a href="javascript:;" class="btn btn-sm btn-success" id="transfer">OK</a>
		    </div>
	    </div>
    </div>
</div>
   

   
  <!--<a id="show_fancy" class="show_fancy" href="#modal-window" style="display: none;"></a> -->
<script>
   
   $('.btn-add2').click(function() {
	var $template = $('#optionTemplate2'),
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
   
   $(".ship").hide();
   TableManageResponsive.init();
   
   
    $('#myForm').on('change', '[name="QL_PELMET[]"]', function() {
	var $row    = $(this).parents('.odd');
	var menu=$row.find("select[name='QL_PELMET[]']").val();
	//alert(menu);
	if (menu=='No') {
         $row.find("input[name='QL_PROJECTION[]']").val("");
	 $row.find("input[name='QL_FASCIA[]']").val("");
	}
	
	});
   $('#myForm').on('onkeyup', '[name="QL_PROJECTION[]"],[name="QL_FASCIA[]"]', function() {
	var $row    = $(this).parents('.odd');
	var menu=$row.find("select[name='QL_PELMET[]']").val();
	//alert(menu);
	if (menu=='No') {
         $row.find("input[name='QL_PROJECTION[]']").val("");
	 $row.find("input[name='QL_FASCIA[]']").val("");
	}
	
	});

   $('#myForm').on('blur', '[name="QL_PROJECTION[]"],[name="QL_FASCIA[]"]', function() {
	var $row    = $(this).parents('.odd');
	var menu=$row.find("select[name='QL_PELMET[]']").val();
	//alert(menu);
	if (menu=='No') {
         $row.find("input[name='QL_PROJECTION[]']").val("");
	 $row.find("input[name='QL_FASCIA[]']").val("");
	}
	
	});
   
   $('#myForm').on('change', '[name="QL_PRODUCT_CODE[]"]', function() {
	
	//var menu =  $(this).find("#PLL_ITEM_CODE").val();
	var menu =  $(this).val();
	var $row    = $(this).parents('.odd');
	//alert("get_item");
	if (menu!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_Item_From_Prod",
	//dataType:'json',
	data: {menu: menu},
	success: function(response) {
	    $row.find("select[name='QL_ITEM_CODE[]']").html(response);
	      // $('#QL_UOM_CODE').html(response);
	}
	    });
 
	}//if close
	});
   
   
   
   $('#myForm').on('change', '[name="QL_ITEM_CODE[]"],[name="QL_UOM_CODE[]"],[name="QL_WIDTH[]"],[name="QL_HEIGHT[]"],[name="QL_QTY[]"]', function() {
	
	//var menu =  $(this).find("#PLL_ITEM_CODE").val();
	//var menu =  $(this).val();
	var $row    = $(this).parents('.odd');
	var menu=$row.find('[name="QL_ITEM_CODE[]"]').val();
	 $row.find('input[name="QL_VALUE[]"]').val(0);
	 var ql_value=$row.find('input[name="QL_VALUE[]"]').val();
	
	      if(ql_value >0)
	      {
	       
	      
	      }else{
			 
	        $row.find('input[name="QL_DISC_PCT[]"]').val(0);
	        $row.find('input[name="QL_DISC_VALUE[]"]').val(0);
	        $row.find('input[name="QL_TAX_PCT[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').attr("readonly", true);
	       $row.find('input[name="QL_TAX_VALUE[]"]').attr("readonly", true);
	    }
	if (menu!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_UOM_From_Item",
	//dataType:'json',
	data: {menu: menu},
	success: function(response) {
	    $row.find("select[name='QL_UOM_CODE[]']").html(response);
	    get_desc();
	    //calculation
	    //var price=$row.find("input[name='QL_PRICE[]']").val();
	    // var ql_qty=$row.find("input[name='QL_QTY[]']").val();
	    //var ql_value=ql_qty*price;
	    
	    //$row.find("input[name='QL_PRICE[]']").val();
	      // $('#QL_UOM_CODE').html(response);
	}
	    });
 
	}//if close
	function get_desc() {
	 // $('#myForm').on('change', '[name="QL_ITEM_CODE[]"]', function() {
	
	//var menu =  $(this).find("#PLL_ITEM_CODE").val();
	//var menu =  $(this).val();
	//var $row    = $(this).parents('.odd');
	//alert(menu);
	if (menu!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_From_Item",
	dataType:'json',
	data: {menu: menu},
	success: function(json) {
	    if (json)
	    {
	    // Show Entered Value
	    //jQuery("div#result").show();
	    
	    var exist=json.item_uom;
		if (exist!="") {
		   //alert("Item Exist");
		    $row.find("select[name='QL_UOM_CODE[]']").val(json.item_uom);
		    $row.find("input[name='QL_ITEM_DESC[]']").val(json.item_desc);
		    check_applicable();
		     //$row.find("select[name='QL_ITEM_DESC[]']").attr("readonly", true);
		    //$('#PLL_UOM_CODE').attr("readonly", true);
		}
		//else{
		//    alert("Item does not exist");
		//     $row.find("input[name='PLL_ITEM_CODE[]']").val("");
		//    //$row.find("select[name='PLL_UOM_CODE[]']").attr("readonly", true);
		//    // document.getElementById("PLL_ITEM_CODE").value ="";
		//    //$('#PLL_UOM_CODE').attr("readonly", false);
		//    
		//  
		//    
		//  
		//}
	    }
	    }
	    });
 
	}//if close
//	$('#myForm').on('change', '[name="QL_ITEM_CODE[]"],[name="QL_WIDTH[]"],[name="QL_HEIGHT[]"],[name="QL_QTY[]"]', function() {
	 function check_applicable(){	
	//var menu =  $(this).find("#PLL_ITEM_CODE").val();
	//var menu =  $(this).val();
	//var $row    = $(this).parents('.odd');
	 var $count = $row.find(".count").val();
	 var itemcode=$row.find('[name="QL_ITEM_CODE[]"]').val();
	 var width=$row.find('[name="QL_WIDTH[]"]').val();
	 var height=$row.find('[name="QL_HEIGHT[]"]').val();
	 var qty=$row.find('[name="QL_QTY[]"]').val();
	 var uom=$row.find('[name="QL_UOM_CODE[]"]').val();
	 
	//alert($count);
	if (menu!="" && width!="" && height!="" && qty!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Check_Item_Applicable",
	//dataType:'json',
	data: {menu: menu,width:width,height:height,qty:qty},
	success: function(response) {
	
	 if (response) {
	    $('#fanc').html(response);
	    $row.find('input[name="QL_ITEM_CODE_Applicable[]"]').val("S");
	    //else{
	      // window.location.replace("<?php echo base_url();?>Sales/Quote_Check_Item_Applicable");
	       $("#modal-window").modal('show');
	      
	       $("#location").val($count);
	       $("#hidden-itemcode").val(itemcode);   
	    //}
	    
	 }else{
	    $row.find('input[name="QL_ITEM_CODE_Applicable[]"]').val("N");
	    get_price(itemcode,width,height,qty,uom);
	 }
	 
	    }
	    });
 
	}//if close
	else{
	 //alert(" Width ,Height and Quantity should not be empty");
	  $row.find('input[name="QL_PRICE[]"]').val("");
	}
	//$('#myForm').on('blur', '[name="QL_ITEM_CODE[]"]', function() {
	function get_price(itemcode,width,height,qty,uom) {
	 
	//var menu =  $(this).find("#PLL_ITEM_CODE").val();
	//var menu =  $(this).val();
		  //var $row    = $(this).parents('.odd');
		  // var $count = $row.find(".count").val();
		  // var applicable=$row.find('input[name="QL_ITEM_CODE_Applicable[]"]').val();
		  // var itemcode=$row.find('[name="QL_ITEM_CODE[]"]').val();
		  // var width=$row.find('[name="QL_WIDTH[]"]').val();
		  // var height=$row.find('[name="QL_HEIGHT[]"]').val();
		  // var qty=$row.find('[name="QL_QTY[]"]').val();
		  // var uom=$row.find('[name="QL_UOM_CODE[]"]').val();
	 var ccy_code= $("#QH_CCY_CODE").val();
	  var plh= $("#PLH_CODE").val();
	if (itemcode!="" && width!="" && height!="" && qty!="" && ccy_code!="" && plh!="") {//if open 1
	
	
	//if (applicable=="N") {//if open2
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_Price",
	dataType:'json',
	data: {itemcode:itemcode,width:width,height:height,uom:uom,ccy_code:ccy_code,plh:plh},
	success: function(json) {
	
	 if (json) {
	    alert("get price");
	    $row.find('input[name="QL_PRICE[]"]').val(json.price);
	    var price=json.price;
	     //var ql_qty=$row.find("input[name='QL_QTY[]']").val();
	    
	     var ql_value=qty*price;
	    //alert("qL vALUE"+ql_value);
	     $row.find('input[name="QL_VALUE[]"]').val(ql_value);
	     if (ql_value>0) {
	       
	     }else{
	       $row.find('input[name="QL_DISC_PCT[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').val(0);
	       $row.find('input[name="QL_TAX_PCT[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').attr("readonly", true);
	     }
	     
	    
	 }
	 
	    }
	    });
 
	//}//if close2
	}//if close1
	else{
	 //alert(" Width ,Height and Quantity should not be empty");
	 $row.find('input[name="QL_PRICE[]"]').val("");
	}
	}
	 }//check appli
	//});
//	});
   
//	});
	}//get_desc
	});
   
   
   $('#myForm').on('keyup', '[name="QL_DISC_PCT[]"],[name="QL_DISC_VALUE[]"],[name="QL_TAX_PCT[]"],[name="QL_TAX_VALUE[]"]', function() {
      var $row = $(this).parents('.odd');
      var QL_VALUE= $row.find("input[name='QL_VALUE[]']").val();
     
	
	      if(QL_VALUE >0)
	      {
	       
	      
	      }else{
			 
	       $row.find('input[name="QL_DISC_PCT[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').val(0);
	       $row.find('input[name="QL_TAX_PCT[]"]').val(0);
	       $row.find('input[name="QL_TAX_VALUE[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').attr("readonly", true);
	       $row.find('input[name="QL_TAX_VALUE[]"]').attr("readonly", true);
	    }
   });
   
   
     $('#myForm').on('blur', '[name="QL_DISC_PCT[]"]', function() {
	 
	 var $row = $(this).parents('.odd');
	 var QL_VALUE= $row.find("input[name='QL_VALUE[]']").val();
	    if(QL_VALUE >0)
	      {
	       }else{
			 
	       $row.find('input[name="QL_DISC_PCT[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').val(0);
	       $row.find('input[name="QL_TAX_PCT[]"]').val(0);
	       $row.find('input[name="QL_DISC_VALUE[]"]').attr("readonly", true);
	    }
	 var QL_DISC_PCT= $(this).val();
	 var QL_DISC_VALUE=QL_VALUE * QL_DISC_PCT/100;
	 $row.find('input[name="QL_DISC_VALUE[]"]').val(QL_DISC_VALUE);
	 var tot_disc_value=0;
	  
	 var $count= $(".count").val();
	    $("input[name='QL_DISC_VALUE[]']").each(function(){
	     if ($(this).val()!="") {
	     tot_disc_value=parseFloat(tot_disc_value)+parseFloat($(this).val());

	     }
	     
	    });
		  //alert(tot_disc_value);
		  $('#tot_disc_value').val(tot_disc_value);
		  $('#QH_DISCOUNT_VALUE').val(tot_disc_value);
	 
     });
     
   $('#myForm').on('blur', '[name="QL_TAX_PCT[]"]', function() {
	 
	
	 var $row = $(this).parents('.odd');
	
	 
	 var QL_VALUE= $row.find("input[name='QL_VALUE[]']").val();
	 var QL_DISC_VALUE= $row.find("input[name='QL_DISC_VALUE[]']").val();
	 var QL_TAX_PCT= $(this).val();
	
	 var QL_TAX_VALUE=(QL_VALUE - QL_DISC_VALUE)*QL_TAX_PCT/100;
	 $row.find('input[name="QL_TAX_VALUE[]"]').val(QL_TAX_VALUE);
	  
	 var tot_tax_value=0;
	  
	 var $count= $(".count").val();
	 $("input[name='QL_TAX_VALUE[]']").each(function(){
	 if ($(this).val()!="") {
	 tot_tax_value=parseFloat(tot_tax_value)+parseFloat($(this).val());

	       }
	       
	      });
		  Math.round(tot_tax_value);
		  $('#tot_tax_value').val(tot_tax_value);
		  $('#QH_TAX_VALUE').val(tot_tax_value);
	  
	  var QL_GROSS_VALUE =(QL_VALUE-QL_DISC_VALUE)+QL_TAX_VALUE;
	   $row.find('input[name="QL_GROSS_VALUE[]"]').val( QL_GROSS_VALUE.toFixed(2));
	 
	  var tot_gross_value=0;
	      $("input[name='QL_GROSS_VALUE[]']").each(function(){
	       if ($(this).val()!="") {
	       tot_gross_value=parseFloat(tot_gross_value)+parseFloat($(this).val());

	       }
	       
	      });
	     
		
		  $('#tot_gross_value').val(tot_gross_value.toFixed(2));
		  $('#QH_GROSS_VALUE').val(tot_gross_value.toFixed(2));
	 
	 var QH_EXC_RATE=$('#QH_EXC_RATE').val();
	 var QL_GROSS_VALUE_LC =(QL_GROSS_VALUE-QH_EXC_RATE);
	   $row.find('input[name="QL_GROSS_VALUE_LC[]"]').val(QL_GROSS_VALUE_LC);
	   $('#QH_GROSS_VALUE_LC').val(QL_GROSS_VALUE_LC);
     });
   
   
  
   
   
   
 
      $('#myForm').on('change', '[name="check_tick[]"]', function() {
	
	var $row = $(this).parents('.odd');
	var $this = $(this);
	var $location= $("#location").val();
	var width= $row.find("input[name='width[]']").val();
	var height= $row.find("input[name='height[]']").val();
	var qty= $row.find("input[name='qty[]']").val();
	
	
    // $this will contain a reference to the checkbox   
       if ($this.is(':checked')) {
	 $row.find("[id='check_tick[]']").attr("disabled", true);
	// alert("came in");
	// var $row1 = $([name='QL_ITEM_CODE[]']).parents('#odd');
	var menu=$("#hidden-itemcode").val();
	//alert(menu);
        jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_Itemforfancy",
	//dataType:'json',
	data: {menu: menu},
	success: function(response) {
	 $row.find("input[name='QAL_WIDTH[]']").val(width);
	 $row.find("input[name='QAL_HEIGHT[]']").val(height);
	 $row.find("input[name='QAL_QTY[]']").val(qty);
	 $row.find("select[name='QAL_ITEM_CODE[]']").html(response);
	 
	 //var cont=$('*#tick_row').val();
	 //cont=parseInt(cont) + 1;
	 // alert(cont);
	 // $('*#tick_row').val(cont);
	 
	}
	    });
      }else {
	 alert("else");
	 $row.find("[id='check_tick[]']").attr("disabled", false);
        $row.find("select[name='QAL_ITEM_CODE[]']").html('<option value="">Select Item</option>');
	$row.find("input[name='QAL_ITEM_DESC[]']").val("");
	
	
	 
	var width=$row.find("input[name='QAL_WIDTH[]']").val();
	$row.find("input[name='width[]']").val(width);
	var height=$row.find("input[name='QAL_HEIGHT[]']").val();
	 $row.find("input[name='height[]']").val(height);
	$row.find("select[name='QAL_UOM_CODE[]']").html('<option value="">Select UOM</option>');
	var qty=$row.find("input[name='qty[]']").val();
	$row.find("input[name='QAL_QTY[]']").val(qty);
	$row.find("input[name='QAL_WIDTH[]']").val("");
	 $row.find("input[name='QAL_HEIGHT[]']").val("");
	 $row.find("input[name='QAL_QTY[]']").val("");
	$row.find("input[name='QAL_PRICE[]']").val("");
   }
	
      });
   
   $('#myForm').on('change', '[name="QAL_ITEM_CODE[]"]', function() {
	var menu =  $(this).val();
	var $row    = $(this).parents('.odd');
	if (menu!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_UOM_From_Item",
	//dataType:'json',
	data: {menu: menu},
	success: function(response) {
	    $row.find("select[name='QAL_UOM_CODE[]']").html(response);
	    get_fancy_desc();
	}
	    });
 
	}//if close
	function get_fancy_desc(){
	 var $count = $row.find(".count").val();
	 var itemcode=$row.find('[name="QAL_ITEM_CODE[]"]').val();
	 alert(itemcode);
	 var width=$row.find('[name="QAL_WIDTH[]"]').val();
	 var height=$row.find('[name="QAL_HEIGHT[]"]').val();
	 var qty=$row.find('[name="QAL_QTY[]"]').val();
	
	
	 
	
	if (menu!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_Uom_fancy",
	dataType:'json',
	data: {menu: menu},
	success: function(json) {
	
	 if (json) {
	      var exist=json.item_uom;
		if (exist!="") {
		   //alert("Item Exist");
		    $row.find("select[name='QAL_UOM_CODE[]']").val(json.item_uom);
		    $row.find("input[name='QAL_ITEM_DESC[]']").val(json.item_desc);
		     var uom=$row.find('[name="QAL_UOM_CODE[]"]').val();
		    get_fancy_price(itemcode,width,height,qty,uom);
		}
	    
	 }
	 
	    }
	    });
 
	}//if close
	//});
	}
	function get_fancy_price(itemcode,width,height,qty,uom){

	  var ccy_code= $("#QH_CCY_CODE").val();
	  var plh= $("#PLH_CODE").val();
	if (itemcode!="" && width!="" && height!="" && qty!="" && ccy_code!="" && plh!=="") {//if open 1
	
	//if (applicable=="N") {//if open2
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_Price",
	dataType:'json',
	data: {itemcode:itemcode,width:width,height:height,uom:uom,ccy_code:ccy_code,plh:plh},
	success: function(json) {
	
	 if (json) {
	    alert("get price");
	    $row.find('input[name="QAL_PRICE[]"]').val(json.price);
	     var price= $row.find("input[name='QAL_PRICE[]']").val();
	    var qty=$row.find("input[name='QAL_QTY[]']").val();
	    var qal_value=qty*price;
	     $row.find('input[name="QAL_VALUE[]"]').val(qal_value);
	    var QAL_GROSS_VALUE =qal_value;
	    $row.find('input[name="QAL_GROSS_VALUE[]"]').val(QAL_GROSS_VALUE);
	    var exc=$('#QH_EXC_RATE').val();
	   var QAL_GROSS_VALUE_LC=qal_value * exc;
	     $row.find('input[name="QAL_GROSS_VALUE_LC[]"]').val(QAL_GROSS_VALUE_LC);
	 }
	 
	    }
	    });
 
	//}//if close2
	}//if close1
	else{
	 //alert(" Width ,Height and Quantity should not be empty");
	 $row.find('input[name="QL_PRICE[]"]').val("");
	} 
	}
	});
   
   $('#transfer2').on('click',function(){
      
      
	  var total_value=0;
	  var $location= $("#location").val();
	      $("input[name='QAL_PRICE[]']").each(function(){
	       if ($(this).val()!="") {
	       total_value=parseFloat(total_value)+parseFloat($(this).val());

	       }
	       
	      });
	      alert(total_value);
	       $("#result .odd .count").each(function(){
		 // alert($location);
		    if($(this).val()==$location){
		     var $row = $(this).parents('.odd');
		    	    $row.find("input[name='QL_PRICE[]']").val(total_value);
			    var price= $row.find("input[name='QL_PRICE[]']").val();
			    alert(price);
			    var qty=$row.find("input[name='QL_QTY[]']").val();
			    alert(qty);
			    var ql_value=qty*price;
			     $row.find('input[name="QL_VALUE[]"]').val(ql_value);
			    alert(ql_value);
			    if (ql_value>0) {
			      
			    }else{
			      $row.find('input[name="QL_DISC_PCT[]"]').val("0");
			      $row.find('input[name="QL_DISC_VALUE[]"]').val("0");
			      $row.find('input[name="QL_TAX_PCT[]"]').val("0");
			      $row.find('input[name="QL_DISC_VALUE[]"]').attr("readonly", true);
			    }
	
		    }
		 });
	       $('#modal-window').modal('hide');
	       

   });
   
   
   
  $('#myForm').on('change', '#QH_CCY_CODE', function() {
	
	var menu =  $(this).val();

	// alert(menu);
	 
	
	if (menu!="") {//if open
	jQuery.ajax({
	type:"POST",
	url:"<?php echo base_url(); ?>" +"Sales/Quote_Get_Exch_Rate",
	dataType:'json',
	data: {menu: menu},
	success: function(json) {
	
	    if (json){
	       exist=json.exch;
	       if (exist!="") {
		  document.getElementById('QH_EXC_RATE').value=exist;
		  $('#QH_EXC_RATE').attr("readonly", true);
	       }
	       else{
		  document.getElementById('QH_EXC_RATE').value="";
		  $('#QH_EXC_RATE').attr("readonly", false);
	       }
	       
	    }
	    }
	    });
 
	}//if close
	});

  
  $(document).on('change','#QH_CONTACT_NO',function(event){
	event.preventDefault();
	var contact_no = $("#QH_CONTACT_NO").val();
	//if (contact_no!="") {
	//    var contact_no = $("#CONTACT_NO").val();
	//}
	
	//alert("yes");
	if (contact_no!="") {//if open
	jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Get_OPP_Contact_Detail_FROM_QUOTE",
	dataType: 'json',
	data: {contact_no: contact_no},
	success: function(json) {
	    if (json)
	    {
		if (json.exist_cust!="") {
		    alert("Existing Customer");
		    document.getElementById("QH_CUST_TYPE").value ="S";
		    $('#QH_CUST_AC_CODE').attr("readonly", true);
		    $('#QH_CUST_AC_DESC').attr("readonly", true);
		    document.getElementById("QH_CUST_AC_CODE").value =json[0].CUST_AC_CODE;
		    document.getElementById("QH_CUST_AC_DESC").value=json[0].CUST_AC_DESC;
		    //document.getElementById("OPH_CUST_AC_CODE").value =json[0].CUST_AC_CODE;
		    //document.getElementById("OPH_CUST_AC_DESC").value=json[0].CUST_AC_DESC;
		    document.getElementById("QH_BILL_ADD1").value=json[0].CUST_BILL_ADD1;
		    document.getElementById("QH_BILL_ADD2").value=json[0].CUST_BILL_ADD2;
		    document.getElementById("QH_BILL_ADD3").value=json[0].CUST_BILL_ADD3;
		    document.getElementById("QH_BILL_ADD4").value=json[0].CUST_BILL_ADD4;
		  
		    document.getElementById("QH_BILL_POSTAL").value=json[0].CUST_BILL_POSTAL;
		    document.getElementById("QH_BILL_MOBILE").value=json[0].CUST_BILL_MOBILE;
		    document.getElementById("QH_BILL_PHONE").value=json[0].CUST_BILL_PHONE;
		    document.getElementById("QH_BILL_FAX").value=json[0].CUST_BILL_FAX;
		    document.getElementById("QH_BILL_EMAIL").value=json[0].CUST_BILL_EMAIL;
		     document.getElementById("QH_BILL_CONTACT").value =json[0].CUST_BILL_PERSON_NAME;

		    document.getElementById("QH_SHIP_ADD1").value =json[0].CUST_BILL_ADD1;
		     document.getElementById("QH_SHIP_ADD2").value =json[0].CUST_BILL_ADD2;
		     document.getElementById("QH_SHIP_ADD3").value =json[0].CUST_BILL_ADD3;
		     document.getElementById("QH_SHIP_ADD4").value =json[0].CUST_BILL_ADD4;
		     document.getElementById("QH_SHIP_CN_CODE").value =json[0].CUST_BILL_CN_CODE;
		     document.getElementById("QH_SHIP_ST_CODE").value =json[0].CUST_BILL_ST_CODE;
		     document.getElementById("QH_SHIP_CT_CODE").value =json[0].CUST_BILL_CT_CODE;
		     //document.getElementById("QH_SHIP_CT_AR_CODE").value =json[0].OPH_CT_AR_CODE;
		     document.getElementById("QH_SHIP_POSTAL").value =json[0].CUST_BILL_POSTAL;
		     document.getElementById("QH_SHIP_MOBILE").value =json[0].CUST_BILL_MOBILE;
		     document.getElementById("QH_SHIP_PHONE").value =json[0].CUST_BILL_PHONE;
		     document.getElementById("QH_SHIP_FAX").value =json[0].CUST_BILL_FAX;
		     document.getElementById("QH_SHIP_EMAIL").value =json[0].CUST_BILL_EMAIL;
		     document.getElementById("QH_SHIP_CONTACT").value =json[0].CUST_BILL_PERSON_NAME;
		     document.getElementById("QH_CCY_CODE").value=json[0].CUST_CCY_CODE;
		     document.getElementById("QH_EXC_RATE").value =json['exch'][0].RESULT;
		     document.getElementById("PLH_CODE").value =json['plh_code'][0].CUST_PL_CODE;
		     $('#QH_EXC_RATE').attr("readonly", true);
		      document.getElementById("QH_BILL_CN_CODE").value=json[0].CUST_BILL_CN_CODE;
		    //document.getElementById("QH_BILL_ST_CODE").value=json[0].CUST_BILL_ST_CODE;
		    //document.getElementById("QH_BILL_CT_CODE").value=json[0].CUST_BILL_CT_CODE;
		     var country_new=json[0].CUST_BILL_CN_CODE;
		     
		     var state_new=json[0].CUST_BILL_ST_CODE;
		     
		    
		     var city_new=json[0].CUST_BILL_CT_CODE;
		     get_state_new(country_new,state_new);
		      get_city_new(country_new,state_new,city_new);
		    
		    
		}
		else{
		alert("New Customer");
		    document.getElementById("QH_CUST_TYPE").value ="N";
		   
	
		    $('#QH_CUST_AC_CODE').attr("readonly", false);
		    $('#QH_CUST_AC_DESC').attr("readonly", false);
		     document.getElementById("QH_CUST_AC_CODE").value ="";
		    document.getElementById("QH_CUST_AC_DESC").value="";
		    //document.getElementById("OPH_CUST_AC_CODE").value =_AC_CODE;
		    //document.getElementById("OPH_CUST_AC_DESC").value=_AC_DESC;
		    document.getElementById("QH_BILL_ADD1").value="";
		    document.getElementById("QH_BILL_ADD2").value="";
		    document.getElementById("QH_BILL_ADD3").value="";
		    document.getElementById("QH_BILL_ADD4").value="";
		    document.getElementById("QH_BILL_CN_CODE").value="";
		    document.getElementById("QH_BILL_ST_CODE").value="";
		    document.getElementById("QH_BILL_CT_CODE").value="";
		    document.getElementById("QH_BILL_POSTAL").value="";
		    document.getElementById("QH_BILL_MOBILE").value="";
		    document.getElementById("QH_BILL_PHONE").value="";
		    document.getElementById("QH_BILL_FAX").value="";
		    document.getElementById("QH_BILL_EMAIL").value="";
		     document.getElementById("QH_BILL_CONTACT").value ="";
		      document.getElementById("QH_CCY_CODE").value="";
		       get_cust_id();
	    }
	    }
	    
	}
        });
 
	}//if close
	function get_cust_id(){
	 var cust_id=$("#QH_CUST_TYPE").val();
	 if (cust_id=='N') {
	     jQuery.ajax({
	type:"POST",
	url: "<?php echo base_url(); ?>" + "Sales/Get_Cust_id",
	dataType: 'json',
	//data: {contact_no: contact_no},
	success: function(json) {
	    if (json)
	    {
		var custid=json.cust_id;
		//alert(custid);
		document.getElementById("QH_CUST_ID").value =json.cust_id;
	    }
	}
	});
		    }
	}
	});
   
    $("#QH_BILL_AS_SHIP_YN").click(function() {
     
     if ($('#QH_BILL_AS_SHIP_YN').is(":checked"))
         {
         $(".ship").hide();

 
  var add=$('#QH_BILL_ADD1').val();
  document.getElementById('QH_SHIP_ADD1').value=add;
  var add1=$('#QH_BILL_ADD2').val();
  document.getElementById('QH_SHIP_ADD2').value=add1;
  var add2=$('#QH_BILL_ADD3').val();
  document.getElementById('QH_SHIP_ADD3').value=add2;
   var add3=$('#QH_BILL_ADD4').val();
  document.getElementById('QH_SHIP_ADD4').value=add3;
   var country=$('#QH_BILL_CN_CODE').val();
  document.getElementById('QH_SHIP_CN_CODE').value=country;
   var state=$('#QH_BILL_ST_CODE').val();
  document.getElementById('QH_SHIP_ST_CODE').value=state;
   var city=$('#QH_BILL_CT_CODE').val();
  document.getElementById('QH_SHIP_CT_CODE').value=city;
   var post=$('#QH_BILL_POSTAL').val();
  document.getElementById('QH_SHIP_POSTAL').value=post;
   var mobile=$('#QH_BILL_MOBILE').val();
  document.getElementById('QH_SHIP_MOBILE').value=mobile;
   var phone=$('#QH_BILL_PHONE').val();
  document.getElementById('QH_SHIP_PHONE').value=phone;
   var fax=$('#QH_BILL_FAX').val();
  document.getElementById('QH_SHIP_FAX').value=fax;
   var mail=$('#QH_BILL_EMAIL').val();
  document.getElementById('QH_SHIP_EMAIL').value=mail;
   var person=$('#QH_BILL_CONTACT').val();
  document.getElementById('QH_SHIP_CONTACT').value=person;
        
  }
 
      else{
         $(".ship").show();
  document.getElementById('QH_SHIP_ADD1').value="";
  
  document.getElementById('QH_SHIP_ADD2').value="";
  
  document.getElementById('QH_SHIP_ADD3').value="";
   
  document.getElementById('QH_SHIP_ADD4').value="";
  
  document.getElementById('QH_SHIP_CN_CODE').value="";
   
  document.getElementById('QH_SHIP_ST_CODE').value="";
  
  document.getElementById('QH_SHIP_CT_CODE').value="";
   
  document.getElementById('QH_SHIP_POSTAL').value="";
   
  document.getElementById('QH_SHIP_MOBILE').value="";
  
  document.getElementById('QH_SHIP_PHONE').value="";
  
  document.getElementById('QH_SHIP_FAX').value="";
  
  document.getElementById('QH_SHIP_EMAIL').value="";
   
  document.getElementById('QH_SHIP_CONTACT').value="";
  }
   });


   

      
$(document).on('blur','#QH_BILL_ADD1,#QH_BILL_ADD2,#QH_BILL_ADD3,#QH_BILL_ADD4,#QH_BILL_CN_CODE,#QH_BILL_ST_CODE,#QH_BILL_CT_CODE,#QH_BILL_POSTAL,#QH_BILL_MOBILE,#QH_BILL_PHONE,#QH_BILL_FAX,#QH_BILL_EMAIL,#QH_BILL_CONTACT',function(){
 
 
  var add=$('#QH_BILL_ADD1').val();
      
  document.getElementById('QH_SHIP_ADD1').value=add;
  var add1=$('#QH_BILL_ADD2').val();
  document.getElementById('QH_SHIP_ADD2').value=add1;
  var add2=$('#QH_BILL_ADD3').val();
  document.getElementById('QH_SHIP_ADD3').value=add2;
   var add3=$('#QH_BILL_ADD4').val();
  document.getElementById('QH_SHIP_ADD4').value=add3;
   var country=$('#QH_BILL_CN_CODE').val();
   //alert(country);
  document.getElementById('QH_SHIP_CN_CODE').value=country;
   var state=$('#QH_BILL_ST_CODE').val();
   //alert(state);
  document.getElementById('QH_SHIP_ST_CODE').value=state;
   var city=$('#QH_BILL_CT_CODE').val();
  // alert(city);
  document.getElementById('QH_SHIP_CT_CODE').value=city;
   var post=$('#QH_BILL_POSTAL').val();
  document.getElementById('QH_SHIP_POSTAL').value=post;
   var mobile=$('#QH_BILL_MOBILE').val();
  document.getElementById('QH_SHIP_MOBILE').value=mobile;
   var phone=$('#QH_BILL_PHONE').val();
  document.getElementById('QH_SHIP_PHONE').value=phone;
   var fax=$('#QH_BILL_FAX').val();
  document.getElementById('QH_SHIP_FAX').value=fax;
   var mail=$('#QH_BILL_EMAIL').val();
  document.getElementById('QH_SHIP_EMAIL').value=mail;
   var person=$('#QH_BILL_CONTACT').val();
  document.getElementById('QH_SHIP_CONTACT').value=person;

  
   });

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
    
    $('#QH_DELIVERY_DT').datetimepicker({
    format: 'DD-MMM-YY'
         });
  // $('.datepicker-dob').datetimepicker({
  //  format: 'DD-MMM-YYYY',
  ////daysOfWeekDisabled: [0,6],
  // minDate:nexdate
  //  });
             //$(document).ready(function() {
             //	//App.init();
             //	//TableManageResponsive.init();
             //	FormPlugins.init();
             //});
</script>
<script>
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
 
function listbox_selectall(listID,listID1,isSelect){
    var listbox=document.getElementById(listID);
    var listbox1=document.getElementById(listID1);
    for(var count=0;count<listbox.options.length;count++){
	listbox.options[count].selected=isSelect;
	
	}
    for(var count=0;count<listbox1.options.length;count++){
	listbox1.options[count].selected=isSelect;
	
	}
}

$('#transfer').on('click',function(){
var mh_sys_code=$('#second').val();
//alert(mh_sys_code);
$.ajax({
type:"POST",
url:"<?php  echo site_url('Sales/Get_Ref_info')?>",
dataType: 'json',
data:{mh_sys_code:mh_sys_code},
success: function(json) {
  // console.log(json);
  // console.log(json);
	    if (json)
	    {
	    // Show Entered Value
	    //jQuery("div#result").show();
	    
	    var exist=json.existyn;
            //alert(exist);
		if (json.exist_cust!="") {
		   // alert("Existing Customer");
		    $('#QH_CUST_AC_CODE').attr("readonly", true);
		    $('#QH_CUST_AC_DESC').attr("readonly", true);
		     $('#QH_CONTACT_NO').attr("readonly", true);
		     document.getElementById("QH_CONTACT_NO").value =json[0].OPH_CONTACT_NO;
		     document.getElementById("QH_CUST_ID").value =json[0].OPH_CUST_ID;
		     document.getElementById("QH_CUST_TYPE").value =json[0].OPH_CUST_TYPE;
		     document.getElementById("QH_CUST_AC_CODE").value =json[0].OPH_CUST_AC_CODE;
		     document.getElementById("QH_CUST_AC_DESC").value =json[0].OPH_CUST_AC_DESC;
		     document.getElementById("QH_BILL_ADD1").value =json[0].OPH_ADD1;
		     document.getElementById("QH_BILL_ADD2").value =json[0].OPH_ADD2;
		     document.getElementById("QH_BILL_ADD3").value =json[0].OPH_ADD3;
		     document.getElementById("QH_BILL_ADD4").value =json[0].OPH_ADD4;
		    
		     //document.getElementById("QH_BILL_CT_AR_CODE").value =json[0].OPH_CT_AR_CODE;
		     document.getElementById("QH_BILL_POSTAL").value =json[0].OPH_POSTAL;
		     document.getElementById("QH_BILL_MOBILE").value =json[0].OPH_MOBILE;
		     document.getElementById("QH_BILL_PHONE").value =json[0].OPH_PHONE;
		     document.getElementById("QH_BILL_FAX").value =json[0].OPH_FAX;
		     document.getElementById("QH_BILL_EMAIL").value =json[0].OPH_EMAIL;
		     document.getElementById("QH_BILL_CONTACT").value =json[0].OPH_CONTACT_PERSON;
		     document.getElementById("QH_SHIP_ADD1").value =json[0].OPH_ADD1;
		     document.getElementById("QH_SHIP_ADD2").value =json[0].OPH_ADD2;
		     document.getElementById("QH_SHIP_ADD3").value =json[0].OPH_ADD3;
		     document.getElementById("QH_SHIP_ADD4").value =json[0].OPH_ADD4;
		     document.getElementById("QH_SHIP_CN_CODE").value =json[0].OPH_CN_CODE;
		     document.getElementById("QH_SHIP_ST_CODE").value =json[0].OPH_ST_CODE;
		     document.getElementById("QH_SHIP_CT_CODE").value =json[0].OPH_CT_CODE;
		     //document.getElementById("QH_SHIP_CT_AR_CODE").value =json[0].OPH_CT_AR_CODE;
		     document.getElementById("QH_SHIP_POSTAL").value =json[0].OPH_POSTAL;
		     document.getElementById("QH_SHIP_MOBILE").value =json[0].OPH_MOBILE;
		     document.getElementById("QH_SHIP_PHONE").value =json[0].OPH_PHONE;
		     document.getElementById("QH_SHIP_FAX").value =json[0].OPH_FAX;
		     document.getElementById("QH_SHIP_EMAIL").value =json[0].OPH_EMAIL;
		     document.getElementById("QH_CCY_CODE").value =json[0].OPH_CCY_CODE;
		     document.getElementById("QH_SHIP_CONTACT").value =json[0].OPH_CONTACT_PERSON;
		     document.getElementById("PLH_CODE").value =json['plh_code'][0].CUST_PL_CODE;
		     document.getElementById("QH_EXC_RATE").value =json['exch'][0].RESULT;
		     $('#QH_EXC_RATE').attr("readonly", true);
		     document.getElementById("QH_BILL_CN_CODE").value =json[0].OPH_CN_CODE;
		     var country_new=json[0].OPH_CN_CODE;
		     
		     var state_new=json[0].OPH_ST_CODE;
		     
		    
		     var city_new=json[0].OPH_CT_CODE;
		     get_state_new(country_new,state_new);
		      get_city_new(country_new,state_new,city_new);
		      
		      
		     //document.getElementById("QH_BILL_ST_CODE").selected =json[0].OPH_ST_CODE;
		     //document.getElementById("QH_BILL_CT_CODE").selected =json[0].OPH_CT_CODE;
		     
		     
		   
		}
	    }
	   
	     $('#modal-dialog').modal('hide');
	}
});
})

function get_state_new(country_new,state_new) {
   	 
        if (country_new==0) {
	 //alert("country O");
            $("#QH_BILL_ST_CODE,#QH_SHIP_ST_CODE").html("<option value='0'>Select State</option>");
            $("#QH_BILL_CT_CODE,#QH_SHIP_CT_CODE").html("<option value='0'>Select city</option>");
        }else
        {
	// alert("co");
            $("#QH_BILL_CT_CODE,#QH_SHIP_CT_CODE").html("<option value='0'>Select city</option>");
            
          //  var cn_code=$('option:selected', this).val() ;
            $.ajax({
            type: "POST",                                
            url: "<?=base_url()?>Sales/ajaxstate_new",
            data:{cn_code:country_new,st_code:state_new} ,
            success: function (responseData) {
            $('#QH_BILL_ST_CODE,#QH_SHIP_ST_CODE').html(responseData);
            
            },
            });
        }
}

function  get_city_new(country_new,state_new,city_new) {
        $.ajax({
        type: "POST",                                
        url: "<?=base_url()?>Sales/ajaxcity_new",
        data:{st_code:state_new,cn_code:country_new,city_new:city_new},
        success: function (responseData) {
        $('#QH_BILL_CT_CODE,#QH_SHIP_CT_CODE').html(responseData);
    
        },
        });
}

$('#transfer').on('click',function(){
var mh_sys_code=$('#second').val();
//alert(mh_sys_code);
$.ajax({
type:"POST",
url:"<?php  echo site_url('Sales/Get_Ref_Line')?>",
//dataType: 'json',
data:{mh_sys_code:mh_sys_code},
success: function(response)
{

    $('#result').html(response);
    $("*#mm").hide();
    $("*#sd").hide();
    //$('*.datefor').datetimepicker({
    //format: 'DD-MMM-YY'
//});
 $('#modal-dialog').modal('hide');
}
});
})

</script>




<script>

$('#clear_data').click(function(){
    $('#myForm')[0].reset();
});           
 
     $(".PT_CR_DT").datepicker().datepicker("setDate", new Date());
     
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
<script type="text/javascript">
   $(document).ready(function() {
      
    $('#QH_DELV_D').datetimepicker({
      format: 'DD-MMM-YY'
    });
   
   $('.txn_date').datetimepicker({
    format: 'DD-MMM-YY'
         });
 
    
  
   var locn_code=$('#check_LOCN_sr_CODE').val();
    
    if (locn_code=="no") {
	//$("#SR_LOCN_CODE")
	
	window.location.replace("<?php echo base_url();?>Sales/SalesQuotationTransactionView");
	alert("Your are not defined as Sales Representative and location also not find hence you can not create this transaction.");
	//$("<?php echo base_url();?>Sales/LeadTransactionView");
    }
        $("*#mm").hide();
      

        $("*#sd").hide();
       


        $("#ck1").click(function() {
            if ($('#ck1').is(":checked"))
            {
                $("*#mm").show();
           
            }else{
               $("*#mm").hide(); 
            }

        });




        $('#ck2').click(function() {
            if (this.checked) {
                $("*#sd").show();
            }else{
                $("*#sd").hide();
            }


        });
    });
    
    
   $(function(){
    $("#QH_BILL_CN_CODE").change(function() {
	var country=$('#QH_BILL_CN_CODE').val();
        if (country==0) {
            $("#QH_BILL_ST_CODE").html("<option value='0'>Select State</option>");
            $("#QH_BILL_CT_CODE").html("<option value='0'>Select city</option>");
        }else
        {
            $("#QH_BILL_CT_CODE").html("<option value='0'>Select city</option>");
            
            var cn_code=$('option:selected', this).val() ;
            $.ajax({
            type: "POST",                                
            url: "<?=base_url()?>Sales/ajaxstate",
            data:{cn_code:cn_code} ,
            success: function (responseData) {
            $('#QH_BILL_ST_CODE').html(responseData);
            
            },
            });
        }
       
   
    
    $("#QH_BILL_ST_CODE").change(function() {
        var state=$('#QH_BILL_ST_CODE').val();
        var st_code=$('option:selected', this).val() ;
        var cn_code=$('option:selected', "#QH_BILL_CN_CODE").val() ;
        $.ajax({
        type: "POST",                                
        url: "<?=base_url()?>Sales/ajaxcity",
        data:{st_code:st_code,cn_code:cn_code} ,
        success: function (responseData) {
        $('#QH_BILL_CT_CODE').html(responseData);
    
        },
        });


    });
    
    });
    $("#QH_SHIP_CN_CODE").change(function() {
	var country=$('#QH_SHIP_CN_CODE').val();
        if (country==0) {
            $("#QH_SHIP_ST_CODE").html("<option value='0'>Select State</option>");
            $("#QH_SHIP_CT_CODE").html("<option value='0'>Select city</option>");
        }else
        {
            $("#QH_SHIP_CT_CODE").html("<option value='0'>Select city</option>");
            
            var cn_code=$('option:selected', this).val() ;
            $.ajax({
            type: "POST",                                
            url: "<?=base_url()?>Sales/ajaxstate",
            data:{cn_code:cn_code} ,
            success: function (responseData) {
            $('#QH_SHIP_ST_CODE').html(responseData);
            
            },
            });
        }
       
   
    
    $("#QH_SHIP_ST_CODE").change(function() {
        var state=$('#QH_SHIP_ST_CODE').val();
        var st_code=$('option:selected', this).val() ;
        var cn_code=$('option:selected', "#QH_SHIP_CN_CODE").val() ;
        $.ajax({
        type: "POST",                                
        url: "<?=base_url()?>Sales/ajaxcity",
        data:{st_code:st_code,cn_code:cn_code} ,
        success: function (responseData) {
        $('#QH_SHIP_CT_CODE').html(responseData);
    
        },
        });


    });
    
    });
   });
</script>
<script>

//$(document).ready(function() {
//
//
//$('#myForm').bootstrapValidator({
//        message: 'This value is not valid',
//        feedbackIcons: {
//            valid: 'fa fa-check',
//            invalid: 'fa fa-times',
//            validating: 'fa fa-refresh'
//        },
//        
//        fields: {
//            QH_TXN_CODE: {
//		message: 'The Currency Code is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//		    
////		    emailAddress: {
////                            message: 'The value is not a valid email address'
////                        },
////                        regexp: {
////                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
////                            message: 'The value is not a valid email address'
////                        },
////			phone: {
////                            country: 'countrySelectBox',
////                            message: 'The value is not valid %s phone number'
////                        },
////			integer: {
////                        message: 'The value is not an integer'
////				 },
////			zipCode: {
////                            country: 'countrySelectBox',
////                            message: 'The value is not valid %s postal code'
////                        }
////trigger:'blur',
//                    //stringLength: {
//                    //    min: 1,
//                    //    max: 10,
//                    //    message: 'This field must be more than 1 and less than 10 characters long'
//                    //}
//                    //regexp: {
//                    //    regexp: /^[A-Z]+$/,
//                    //    message: 'Capital alphabets only and space not allowed'
//                    //}
//                    //remote: {
//                    //    message: 'The Currency CODE IS ALREADY EXISTS',
//                    //    url: '<?php  echo site_url('Sales/check_ccy_code')?>',
//                    //    type: 'POST'
//                    //}
//                    
//                }
//            },
//            QH_CUST_AC_CODE: {
//		message: 'The Account is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//                    //stringLength: {
//                    //    min: 2,
//                    //    max: 10,
//                    //    message: 'This field must be more than 1 and less than 10 characters long'
//                    //},
//                    //regexp: {
//                    //   regexp: /^[a-zA-Z0-9_ \.]+$/,
//                    //    message: 'Disallowed charcter'
//                    //}
//                    
//                }
//            },
//            QH_DESC: {
//		message: 'The Description is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//            QH_TXN_NO: {
//		message: 'The Currency Code is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }                    
//                }
//            },
//	    QH_DOC_REF: {
//		message: 'The Document is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }                    
//                }
//            },
//            QH_DELV_D: {
//	       trigger:'blur',
//		message: 'The Delivary is not valid',
//                validators: {
//		  
//		  notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//			}
//			//   date: {
//			//	   format: 'DD/MM/YYYY',
//			//	   message: 'The value is not a valid date'
//			//	}
//			   }
//			
//                    //stringLength: {
//                    //    min: 1,
//                    //    max: 10,
//                    //    message: 'This field must be more than 1 and less than 10 characters long'
//                    //},
//                    //regexp: {
//                    //   regexp: /^[0-9]+$/,
//                    //    message: 'Disallowed Character'
//                    //}
//             },
//	    
//	    QH_TXN_DT: {
//	       message: 'The TXN DATE is not valid',
//	       trigger: 'blur',
//	       validators: {
//		   
//			   notEmpty: {
//			       message: 'The TXN DATE is required and can\'t be empty'
//			   },
//		//   remote: {
//		//	   message: 'The TRANSACTION DATE is invalid',
//		//	   url: '<?php  echo site_url('Sales/AjaxSTRDT_valid')?>',
//		//	   type: 'POST'
//		//   }
//			   }
//            },
//	    
//	    
//	   
//	    CUST_SITE_ADD1: {
//		message: 'The Manager Code is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }                    
//                }
//            },
//	    CUST_SITE_ADD2: {
//		message: 'The SP Code is not valid',
//                validators: {
//		    
//                    notEmpty: {
//                        message: 'This field is required and can\'t be empty'
//                    }                    
//                }
//            },
//            CUST_SITE_ADD3: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//            CUST_SITE_ADD4: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    
//	    CUST_SITE_CN_CODE: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_SITE_ST_CODE: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_SITE_CT_CODE: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_SITE_POSTAL: {
//		trigger:'blur',
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_SITE_MOBILE: {
//		//trigger:'blur',
//                validators: {
//                        integer: {
//                        message: 'The value is not an integer'
//				 },
//                    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_SITE_PHONE: {
//		//trigger:'blur',
//                validators: {
//		        integer: {
//                        message: 'The value is not an integer'
//				 },
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_SITE_FAX: {
//		//trigger:'blur',
//                validators: {
//                    integer: {
//                        message: 'The value is not an integer'
//				 },
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_SITE_EMAIL: {
//		
//                validators: {
//		   emailAddress: {
//                            message: 'The value is not a valid email address'
//				 },
//                    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_SITE_PERSON_NAME: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CCY_ACTIVE_YN: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_BILL_ADD1: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_BILL_ADD2: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_BILL_ADD3: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_BILL_ADD4: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CUST_BILL_POSTAL: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_BILL_MOBILE: {
//		
//                validators: {
//		  integer: {
//                        message: 'The value is not an integer'
//			   },
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_BILL_PHONE: {
//		
//                validators: {
//		  integer: {
//                        message: 'The value is not an integer'
//			   },
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_BILL_FAX: {
//		
//                validators: {
//		  integer: {
//                        message: 'The value is not an integer'
//			   },
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    PT_BILL_EMAIL: {
//		
//                validators: {
//		   emailAddress: {
//                            message: 'The value is not a valid email address'
//				 },
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//	    CC_UPTO_DT: {
//		
//                validators: {
//                    
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
//
//
//	    
//	        
//	}
//    });
//});
</script>

</body>
</html>
