   
	
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		   
		    <li class="active">Shipment Advice Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">New Shipment Advice Transaction</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/ShipmentAdviceTransaction_Add'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				   
				    <div class="col-md-9">
					<input type="text" name="SAH_TXN_CODE" id="SAH_TXN_CODE" class="form-control" value="SA" placeholder="SAH_TXN_CODE" readonly />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supplier</label>
				<div class="col-md-9">
					<input type="text" name="SAH_SUPL_AC_CODE" id="SAH_SUPL_AC_CODE" class="form-control" placeholder="SAH_SUPL_AC_CODE" />
				    </div>
			    </div>
			</div>			
			<div class="col-md-12">			   
			    <div class="form-group">
				<label class="col-md-3 control-label"> Delivery Location</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_DLV_LOCN_CODE" id="SAH_DLV_LOCN_CODE"  class="form-control" placeholder="SAH_DLV_LOCN_CODE">
				<!--<select name="SAH_DLV_LOCN_CODE"  id="SAH_DLV_LOCN_CODE" class="form-control">
				    <option value="mih_txn_code">SAH_DLV_LOCN_CODE</option>
				    <?php //if (count($location) > 0 )
				    //{
				    //foreach ($location as $row)
				   // {
				    ?>
				    <option value="<?php //echo $row['LOCN_CODE']; ?>"><?php //echo $row['LOCN_DESC']; ?></option>
				   <?php
				    //}
				   // }
				    ?>
				</select>-->
				    <!--<input type="text" name="EQH_DEL_LOC_DT" id="EQH_DEL_LOC_DT" class="form-control" placeholder="EQH_DEL_LOC_DT" />-->
				</div>
				
				
				
			</div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supl Doc Reference</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_DOC_REF" id="SAH_DOC_REF" class="form-control" placeholder="SAH_DOC_REF" />
				</div>
			    </div>
			
			</div>
			
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Remarks</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_DESC" id="SAH_DESC" class="form-control" placeholder="SAH_DESC" />
				</div>
			    </div>
			</div>
			
			
		    </div>
		    <div class="col-md-6">
			<!--<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Number</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_TXN_NO" id="SAH_TXN_NO" class="form-control" placeholder="SAH_TXN_NO" />
				</div>
			    </div>
			</div>-->
			
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supl Quot Date</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_REF_DT" id="SAH_REF_DT" class="form-control  input-group datepicker-txn" placeholder="SAH_REF_DT" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Delivery Date</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_DLV_DT" id="SAH_DLV_DT" class="form-control input-group datepicker-txn" placeholder="SAH_DLV_DT" />
				</div>
			    </div>
			
			</div>
			
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Date</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_TXN_DT" id="SAH_TXN_DT" class="form-control  input-group datepicker-txn" placeholder="SAH_TXN_DT" />
				</div>
			    </div>
			
			</div>
			
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supl Doc Reference Date</label>
				<div class="col-md-9">
				    <input type="text" name="SAH_DOC_REF_DT" id="SAH_DOC_REF_DT" class="form-control input-group datepicker-txn" placeholder="SAH_DOC_REF_DT" />
				</div>
			    </div>
			
			</div>
			
			<div class="col-md-12">
			<div class="form-group">
				<h6 class="hidden-md hidden-sm hidden-lg">&nbsp;</h6>
				<div class="col-md-offset-9 col-md-3">
				     <a class="btn btn-primary btn-sm " href="#modal-dialog" data-toggle="modal">Reference</a>
				</div>
			</div>
		    
		    </div>
			
		    </div>
		    
		    <!--<h4 class="col-md-12">&nbsp;</h4>-->
		    <div class=" col-md-12">
					<ul class="nav nav-pills tab_nav">
					  
					    <li class="active">
						<a data-toggle="tab" href="#nav-pills-tab-1">&nbsp; Info &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-2">&nbsp; Flex &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-3">&nbsp; Lines &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-4">&nbsp; Action &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-5">&nbsp; Attachments &nbsp;</a>
					    </li>
					</ul>
					<div class="tab-content">
					    <div id="nav-pills-tab-1" class="tab-pane fade active in">
						<div class="col-md-5">
						    <div class="form-group">
							<label class="col-md-2 control-label">Address</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_ADD1" id="SAH_SUPL_ADD1" class="form-control" placeholder="SAH_SUPL_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_ADD2" id="SAH_SUPL_ADD2" class="form-control" placeholder="SAH_SUPL_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_ADD3" id="SAH_SUPL_ADD3" class="form-control" placeholder="SAH_SUPL_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_ADD4" id="SAH_SUPL_ADD4" class="form-control" placeholder="SAH_SUPL_ADD4" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Country</label>
							<div class="col-md-9">
							<section class="col col-12">
							<select name="SAH_SUPL_CN_CODE" id="SAH_SUPL_CN_CODE" class="form-control">
							    <option selected disabled >Select</option>
							    <?php foreach( $result5 as $country){ ?>
							    <option value="<?php echo $country['CN_CODE'] ?>"><?php echo $country['CN_DESC'] ?></option>
							    <?php } ?>
							</select>
							</section>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">State</label>
							<div class="col-md-9">
							<section class="col col-12">
							<select name="SAH_SUPL_ST_CODE" id="SAH_SUPL_ST_CODE" class="form-control">
							    <option selected disabled >Select</option>
							    <?php foreach( $result4 as $state){?>
								    <option value="<?php echo $state['ST_CODE'] ?>"><?php echo $state['ST_DESC'] ?></option>
								    <?php }?>
								</select>
							</section>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">City</label>
							<div class="col-md-9">
							<section class="col col-12">
							<select name="SAH_SUPL_CT_CODE" id="SAH_SUPL_CT_CODE" class="form-control">
								    <option selected disabled >Select</option>
								    <?php foreach( $result3 as $city){?>
								    <option value="<?php echo $city['CT_CODE'] ?>"><?php echo $city['CT_DESC'] ?></option>
								    <?php }?>
								</select>
							</section>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">PO Box</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_POSTAL" id="SAH_SUPL_POSTAL" class="form-control" placeholder="SAH_SUPL_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Mobile</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_MOBILE" id="SAH_SUPL_MOBILE" class="form-control" placeholder="SAH_SUPL_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Phone</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_PHONE" id="SAH_SUPL_PHONE" class="form-control" placeholder="SAH_SUPL_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Fax</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_FAX" id="SAH_SUPL_FAX" class="form-control" placeholder="SAH_SUPL_FAX" />
							</div>
						    </div>
						     <div class="form-group">
							<label class="col-md-2 control-label">Email</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_EMAIL" id="SAH_SUPL_EMAIL" class="form-control" placeholder="SAH_SUPL_EMAIL" />
							</div>
						    </div>
						      <div class="form-group">
							<label class="col-md-2 control-label">Contact Person</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SUPL_CONTACT_PERSON" id="SAH_SUPL_CONTACT_PERSON" class="form-control" placeholder="SAH_SUPL_CONTACT_PERSON" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Ship EDD</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SHIP_EDD" id="SAH_SHIP_EDD" class="form-control  input-group datepicker-txn" placeholder="SAH_SHIP_DT" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Payment Terms</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_PT_CODE" id="SAH_PT_CODE" class="form-control" placeholder="SAH_PT_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Shipment</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SHIP_CODE" id="SAH_SHIP_CODE" class="form-control" placeholder="SAH_SHIP_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Carrier</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_CARRIER_CODE" id="SAH_CARRIER_CODE" class="form-control" placeholder="SAH_CARRIER_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Currency</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_CCY_CODE" id="SAH_CCY_CODE" class="form-control" placeholder="SAH_CCY_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Ship Agent</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SHIP_AGENT" id="SAH_SHIP_AGENT" class="form-control" placeholder="SAH_SHIP_AGENT" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">From Port</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FROM_PORT" id="SAH_FROM_PORT" class="form-control" placeholder="SAH_FROM_PORT" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">To Port</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_TO_PORT" id="SAH_TO_PORT" class="form-control" placeholder="SAH_TO_PORT" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">No Of Container</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_NO_OF_CONTAINERS" id="SAH_NO_OF_CONTAINERS" class="form-control" placeholder="SAH_NO_OF_CONTAINERS" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">CBM</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_CBM" id="SAH_CBM" class="form-control" placeholder="SAH_CBM" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Bill Of Entry No</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_BILL_OF_ENTRY_NO" id="SAH_BILL_OF_ENTRY_NO" class="form-control" placeholder="SAH_BILL_OF_ENTRY_NO" />
							</div>
						    </div>
						     <div class="form-group">
							<label class="col-md-3 control-label">Freight</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FREIGHT_CODE" id="SAH_FREIGHT_CODE" class="form-control" placeholder="SAH_FREIGHT_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Voyage No</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_VOYAGE_NO" id="SAH_VOYAGE_NO" class="form-control" placeholder="SAH_VOYAGE_NO" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Ex Rate</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_EXC_RATE" id="SAH_EXC_RATE" class="form-control" placeholder="SAH_EXC_RATE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Gross Value</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_GROSS_VALUE" id="SAH_GROSS_VALUE" class="form-control" placeholder="SAH_GROSS_VALUE" />
							</div>
						    </div>
						        <div class="form-group">
							<label class="col-md-3 control-label">Ship Line</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SHIP_LINE" id="SAH_SHIP_LINE" class="form-control" placeholder="SAH_SHIP_LINE" />
							</div>
						    </div>
							 <div class="form-group">
							<label class="col-md-3 control-label">ETS Date</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_ETS_DT" id="SAH_ETS_DT" class="form-control  input-group datepicker-txn" placeholder="SAH_ETS_DT" />
							</div>
						    </div>
							  <div class="form-group">
							<label class="col-md-3 control-label">ETA Date</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_ETA_DT" id="SAH_ETA_DT" class="form-control  input-group datepicker-txn" placeholder="SAH_ETA_DT" />
							</div>
						    </div>
							   <div class="form-group">
							<label class="col-md-3 control-label">Container Size</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_SIZE_OF_CONTAINERS" id="SAH_SIZE_OF_CONTAINERS" class="form-control" placeholder="SAH_SIZE_OF_CONTAINERS" />
							</div>
						    </div>
							    <div class="form-group">
							<label class="col-md-3 control-label">Weight</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_GROSS_WEIGHT" id="SAH_GROSS_WEIGHT" class="form-control" placeholder="SAH_GROSS_WEIGHT" />
							</div>
						    </div>
							     <div class="form-group">
							<label class="col-md-3 control-label">Bill Of Entry Dt</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_BILL_OF_ENTRY_DT" id="SAH_BILL_OF_ENTRY_DT" class="form-control  input-group datepicker-txn" placeholder="SAH_BILL_OF_ENTRY_DT" />
							</div>
						    </div>
							    
						    
						</div>
						
						</div>
					   <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="col-md-6">
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 01</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_01" id="SAH_FLEX_01" class="form-control" placeholder="SAH_FLEX_01" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 02</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_02" id="SAH_FLEX_02" class="form-control" placeholder="SAH_FLEX_02" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 03</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_03" id="SAH_FLEX_03" class="form-control" placeholder="SAH_FLEX_03" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 04</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_04" id="SAH_FLEX_04" class="form-control" placeholder="SAH_FLEX_04" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 05</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_05" id="SAH_FLEX_05" class="form-control" placeholder="SAH_FLEX_05" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 06</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_06" id="SAH_FLEX_06" class="form-control" placeholder="SAH_FLEX_06" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 07</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_07" id="SAH_FLEX_07" class="form-control" placeholder="SAH_FLEX_07" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 08</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_08" id="SAH_FLEX_08" class="form-control" placeholder="SAH_FLEX_08" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 09</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_09" id="SAH_FLEX_09" class="form-control" placeholder="SAH_FLEX_09" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 10</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_10" id="SAH_FLEX_10" class="form-control" placeholder="SAH_FLEX_10" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Flex 11</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_11" id="SAH_FLEX_11" class="form-control" placeholder="SAH_FLEX_11" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 12</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_12" id="SAH_FLEX_12" class="form-control" placeholder="SAH_FLEX_12" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 13</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_13" id="SAH_FLEX_13" class="form-control" placeholder="SAH_FLEX_13" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 14</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_14" id="SAH_FLEX_14" class="form-control" placeholder="SAH_FLEX_14" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 15</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_15" id="SAH_FLEX_15" class="form-control" placeholder="SAH_FLEX_15" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 16</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_16" id="SAH_FLEX_16" class="form-control" placeholder="SAH_FLEX_16" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 17</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_17" id="SAH_FLEX_17" class="form-control" placeholder="SAH_FLEX_17" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 18</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_18" id="SAH_FLEX_18" class="form-control" placeholder="SAH_FLEX_18" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 19</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_19" id="SAH_FLEX_19" class="form-control" placeholder="SAH_FLEX_19" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 20</label>
							<div class="col-md-9">
							    <input type="text" name="SAH_FLEX_20" id="SAH_FLEX_20" class="form-control" placeholder="SAH_FLEX_20" />
							</div>
						    </div>
						</div>
						
						</div>
					    <div id="nav-pills-tab-3" class="tab-pane fade">
						<div class="widget-body">
							<div class="row">
							    <section class="col col-2">
								<label class="">
								    <input type="checkbox" name="checkbox" id="ck1" > Show Discount
								</label>
							    </section>
							</div>
							<div class="table-responsive">
							    <table class="table table-bordered">
                                                                 <thead>
                                                                    <tr class="table-responsive">
                                                                        <th>
                                                                            <center>Line</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Ref Txn Code</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Ref Txn No</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Item Code</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Item Description</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>UOM</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Quantity</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Price</center>
                                                                        </th>
									
									
									
									<th>
                                                                            <center>Value</center>
                                                                        </th>
									<th>
                                                                            <center>Discount Ptc</center>
                                                                        </th>
									<th>
                                                                            <center>Discount Value</center>
                                                                        </th>
									<th>
                                                                            <center>Tax Ptc</center>
                                                                        </th>
									<th>
                                                                            <center>Tax Value</center>
                                                                        </th>
									<th>
                                                                            <center>Gross Value</center>
                                                                        </th>

                                                                        <th>
                                                                            <center>Gross Value Lc</center>
                                                                        </th>
									<th>
                                                                            <center>Discription</center>
                                                                        </th>
									
									
									<div>
                                                                            <th id="tb1">
                                                                                <center>Discount</center>
                                                                            </th>

                                                                            <th id="tb1">
                                                                                <center>Overhead</center>
                                                                            </th>

                                                                            <th id="tb1">
                                                                                <center>Description</center>
                                                                            </th>
									</div>
									<th> <center><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></center></th>
								    </tr>
								</thead>
								
								<tbody id="table_data">
                                                                    
									
								    
								</tbody>
                                                            </table>
							</div>
						</div>
						    		    </div>
					      <div id="nav-pills-tab-4" class="tab-pane fade">
					      </div>
					    <div id="nav-pills-tab-5" class="tab-pane fade">
						<div class="row">
						    <div class="widget-body">
							<div class="table-responsive">
							    <table class="table table-bordered">
								<thead>
								    <tr>
									<th><center>Line</center></th>
									<th><center>File Name</center></th>
									<th><center>Description</center></th>
								       
								    </tr>
								</thead>
								<tbody>
								    <tr class="odd_file">
								       <td>
									<input type="text" id="PODOC_LINE " name="PODOC_LINE[]" class="form-control" value="1"  placeholder="PODOC_LINE " />
								    </td>
								    <td>
									<input type="file" data-filename-placement="inside" class="btn btn-success  form-control"  id="PODOC_FILE_NAME" name="userfile[]">
								    <!--<input type="file" id="PODOC_FILE_NAME" name="userfile[]" class="btn btn-success  form-control"  placeholder="PODOC_FILE_NAME" />-->
								    </td>
								    <td>
									<input type="text" id="PODOC_DESC " name="PODOC_DESC[]" class="form-control"  placeholder="PODOC_DESC" />
								    </td>
								    
								    <td><button type="button" class="btn btn-add2 btn-sm btn-primary" data-template="textbox">Add</button></td>
								    
								    </tr>
								    <tr class="odd_file hide" id="optionTemplate2">
									<td>
									    <input type="text" id="PODOC_LINE" name="PODOC_LINE[]" class="form-control"  placeholder="PODOC_LINE" />
									</td>
									<td>
									<input type="file" id="PODOC_FILE_NAME" name="userfile[]"  class="btn btn-success form-control"  placeholder="PODOC_FILE_NAME" />
									</td>
									<td>
									    <input type="text" id="PODOC_DESC" name="PODOC_DESC[]" class="form-control"  placeholder="PODOC_DESC" />
									</td>
								       
									<td><button type="button" class="btn btn-remove2 btn-danger btn-sm removeButton" data-template="textbox">Remove</button></td>
									
								    </tr>             
								    
								</tbody>
							    </table>
							</div>
							    </div>
						
						</div>

					    </div>
						
						    
					</div>
		    </div>
				   
		    
		   <div class=" col-md-6 col-md-offset-3">
		    <div class="form-group">
                                <label class="col col-4"></label>
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                               
				
				    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                               
				    <button type="submit" class="btn btn-md btn-success" name="add" id="submit_but" value="Save" >Submit</button>
				    
				    <!--<input type="submit" name="Save"class="btn btn-sm btn-success"  value="Save">-->
                                
                     </div>
		   </div>
		   
	</form>

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
									<?php foreach($pulling as $row2) { ?>
									<option value="<?php echo $row2['POH_SYS_ID']?>"><?php echo $row2['POH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['POH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['POH_TXN_DT'];?></option>
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
<!-- end page container -->

<script>
    
    //Validation Start
    
    $(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            SAH_TXN_CODE: {
		message: 'The TRANSACTION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION CODE is required and can\'t be empty'
                    }
                }
            },
	    SAH_SUPL_AC_CODE: {
		message: 'The SUPPLIER CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The SUPPLIER CODE is required and can\'t be empty'
                    }
                }
            },
	    SAH_DESC: {
		message: 'The REMARKS is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The REMARKS is required and can\'t be empty'
                    }
                }
            },
	    SAH_REF_DT: {
		message: 'The  SUPPLIER QUOTATION DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The SUPPLIER QUOTATION DATE is required and can\'t be empty'
                    }
                }
            },
            SAH_DLV_DT: {
		message: 'The DELIVERY DATE is not valid',
                trigger:'blur',
		validators: {
		    notEmpty: {
                        message: 'The DELIVERY DATE is required and can\'t be empty'
                    },
		   // remote: {
                        //message: 'The TRANSACTION DATE is invalid',
                       // url: '<?php  echo site_url('Procurement/AjaxINHDateVld')?>',
			//type: 'POST'
		   // }
                }
            },
	    
	     SAH_DLV_LOCN_CODE: {
		message: 'The DELIVERY LOCATION CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The DELIVERY LOCATION CODE is required and can\'t be empty'
                    }
                }
            },
	     SAH_TXN_DT: {
		message: 'The TRANSACTION DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The TRANSACTION DATE is required and can\'t be empty'
                    }
                }
            },
	     SAH_DOC_REF: {
		message: 'The SUPPLIER DOCUMENT REFERENCE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The SUPPLIER DOCUMENT REFERENCE is required and can\'t be empty'
                    }
                }
            },
 
	}
    });
});

    //Validation End
    
    $(document).ready(function() {
    
     $('#result').hide();
    //date start
    var d = new Date();
	var month=d.getMonth()+1;
	var date = d.getDate()+1;
	var nexdate= month +"/"+date+"/"+d.getFullYear();
	//alert(nexdate);
       $('.datepicker-txn').datetimepicker({
		  format: 'DD-MMM-YYYY',
		//minDate:nexdate
		  });   
    //date end
    
    
    if ($('#ck1').is(":checked"))
{
}
else{
$("*#tb1").hide();
} 
    $("#ck1").click(function() {
    if ($('#ck1').is(":checked"))
    
    {
    $("*#tb1").show();
    // $("*#tb13").show();
    
    } else {
    $("*#tb1").hide();
    //$("*#tb13").hide();
    }
    });

});
</script>
<script>
    var next_val=2;
$('.btn-add2').click(function() {
var $template = $('#optionTemplate2'),
$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
$clone.find('[name="PODOC_LINE[]"]').val(next_val);

next_val++;
removerow_file();
});


function removerow_file(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd_file');
$row.remove();
}
);
};

</script>
<script type="text/javascript">
	    var row_count = 1;
	    function form_reset() {
    
	    $('input[type=text]').val('');
	    $('input[type=checkbox]').removeAttr('checked');
	    }
	    
	    $('.btn-add').click(function() {
		row_count++;
	    var $template = $('#optionTemplate'),
	    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
	    removerow();
	    $clone.find('[name="EQL_LINE[]"]').val(row_count);
	    });
	     
	    function removerow(){
	    $(".removeButton").on('click',function(){
	    var $row    = $(this).parents('.odd');
	    $row.remove();
	    });
	    };
	    
	    
	    $('.btn-add1').click(function() {
	    var $template = $('#optionTemplate1'),
	    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
	    removerow1();
	    });
	     
	    function removerow1(){
	    $(".removeButton1").on('click',function(){
	    var $row    = $(this).parents('.odd1');
	    $row.remove();
	    });
	    };
    function dropdown() {
    FormPlugins.init();
    }
    
    $(function(){
    
    $("#SAH_SUPL_CN_CODE").change(function() {
    var cn_code=$('option:selected', this).val() ;
    
    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Procurement/ajaxstate",
    data:{cn_code:cn_code} ,
    success: function (responseData) {
    $('*#SAH_SUPL_ST_CODE').html(responseData);
    dropdown();
    
    },
    });
    });
    });
    
    $(function(){
    
    $("#SAH_SUPL_ST_CODE").change(function() {
    var st_code=$('option:selected', this).val() ;
    var cn_code=$('option:selected', "#SAH_SUPL_CN_CODE").val() ;

    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Procurement/ajaxcity",
    data:{st_code:st_code,cn_code:cn_code} ,
    success: function (responseData) {
  
    $('*#SAH_SUPL_CT_CODE').html(responseData);
    dropdown();
    },
    });
    });
    });

 </script><script>
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
var sys_code=$('#second').val();
$.ajax({
type:"POST",
datatype:'json',
url:"<?php  echo site_url('Procurement/AjaxShipmentAdvicePullingHead')?>",
data:{code:sys_code},
success: function(json)
{
    console.log(json);
$('#SAH_SUPL_AC_CODE').val(json[0].POH_SUPL_AC_CODE);
$('#SAH_SUPL_ADD1').val(json[0].POH_SUPL_ADD1);
$('#SAH_SUPL_ADD2').val(json[0].POH_SUPL_ADD2);
$('#SAH_SUPL_ADD4').val(json[0].POH_SUPL_ADD4);
$('#SAH_SUPL_ADD3').val(json[0].POH_SUPL_ADD3);
$('#SAH_SUPL_CN_CODE').val(json[0].POH_SUPL_CN_CODE);
$('#SAH_SUPL_ST_CODE').val(json[0].POH_SUPL_ST_CODE);
$('#SAH_SUPL_CT_CODE').val(json[0].POH_SUPL_CT_CODE);
$('#SAH_SUPL_POSTAL').val(json[0].POH_SUPL_POSTAL);
$('#SAH_SUPL_MOBILE').val(json[0].POH_SUPL_MOBILE);
$('#SAH_SUPL_FAX').val(json[0].POH_SUPL_FAX);
$('#SAH_SUPL_EMAIL').val(json[0].POH_SUPL_EMAIL);
$('#SAH_SUPL_CONTACT_PERSON').val(json[0].POH_SUPL_PERSON_NAME);
$('#SAH_DLV_DT').val(json[0].POH_DLV_DT);
$('#SAH_DLV_LOCN_CODE').val(json[0].POH_DLV_LOCN_CODE);
$('#SAH_PT_CODE').val(json[0].POH_PT_CODE);
$('#SAH_SHIP_CODE').val(json[0].POH_SHIP_CODE);
$('#SAH_CARRIER_CODE').val(json[0].POH_CARRIER_CODE);
$('#SAH_FREIGHT_CODE').val(json[0].POH_FREIGHT_CODE);
$('#SAH_CCY_CODE').val(json[0].POH_CCY_CODE);
$('#SAH_SHIP_EDD').val(json[0].POH_SHIP_EDD);
$('#SAH_EXC_RATE').val(json[0].POH_EXC_RATE);
$('#SAH_GROSS_VALUE').val(json[0].POL_GROSS_VALUE);

}
});
})



$('#transfer').on('click',function(){
var sys_code=$('#second').val();
var exng_val=$('#SAH_EXC_RATE').val();
$.ajax({
type:"POST",
url:"<?php  echo site_url('Procurement/AjaxShipmentAdvicePulling')?>",
data:{code:sys_code,exchange:exng_val},
success: function(response)
{


 $('#modal-dialog').modal('hide');
 //alert("sgssasa");
 $('#table_data').html(response);
}
});
})

</script>

 <script>
 $('#form_validation').on('change', '[name="ITEM_CODE[]"]', function() {
var item_code = $( this ).val();
var $row = $(this).parents('.odd');
     $.ajax({
	    type: "POST",
	    url: "<?=base_url()?>Procurement/GetInvt_M_ItemTable2",
	    dataType:"json",
	    data:{item_code_data:item_code} ,
	    success: function (json) {

	    $row.find("input[name='EQL_ITEM_DESC[]']").val(json.ITEM_DESC);
	    $row.find("input[name='EQL_UOM_CODE[]']").val(json.ITEM_UOM_CODE);
	    },
    });
});
    
    
 
 </script>

</body>
</html>

