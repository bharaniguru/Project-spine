	<!--Functionality By: Gobi. C-->
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		   
		    <li class="active">Purchase Order</li>
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
		    <h4 class="panel-title">New Purchase Order Transaction</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/PurchaseOrderTransaction_Add'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				    <div class="col-md-9">
					
					
					<input type="text" name="POH_TXN_CODE" id="POH_TXN_CODE" class="form-control" value="PO"placeholder="POH_TXN_CODE/TXN_DESC" readonly />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Number</label>
				<div class="col-md-9">
				    <input type="text" name="POH_TXN_NO" id="POH_TXN_NO" value="<?php echo $result['return_status']; ?>" class="form-control" placeholder="POH_TXN_NO" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn DATE</label>
				<div class="col-md-9">
				    <input type="text" name="POH_TXN_DT" id="POH_TXN_DT" class="form-control input-group datepicker-txn" value="<?php  $date = date('d-M-Y'); echo $date; ?>" placeholder="POH_TXN_DT" />
				</div>
			    </div>
			</div>
		    </div>
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supplier</label>
				<div class="col-md-9">
				   <select  name="POH_SUPL_AC_CODE"  id="POH_SUPL_AC_CODE" class="form-control">
					<option   value="">Select</option>
					<?php if (count($SupplierAcCode) > 0 )
					{
					    foreach ($SupplierAcCode as $rowSupplierCode)
					    {
					?>
					<option  value="<?php echo $rowSupplierCode['SUPL_AC_CODE']; ?>"  ><?php echo $rowSupplierCode['SUPL_AC_DESC']; ?></option>
					<?php } }?>>
				    </select>
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supl Quot Date</label>
				<div class="col-md-9">
				    <input type="text" name="POH_DOC_REF_DT" id="POH_DOC_REF_DT" class="form-control input-group datepicker-txn" placeholder="POH_REF_DT" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label"> Supl Doc Ref</label>
				<div class="col-md-9">
				    <input type="text" name="POH_DOC_REF" id="POH_DOC_REF" class="form-control" placeholder="POH_DOC_REF" />
				</div>
			    </div>
			</div>
		    </div>
		   
		    <div class="col-md-6">
		    <div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label"> Delivery Location</label>
				<div class="col-md-9">
				    <!--<input type="text" name="POH_DLV_LOCN_CODE" id="POH_DLV_LOCN_CODE" class="form-control" placeholder="POH_DLV_LOCN_CODE" />-->
				    <select name="POH_DLV_LOCN_CODE"  id="POH_DLV_LOCN_CODE" class="form-control">
					<option value="">POH_DLV_LOCN_CODE</option>
					<?php if (count($location) > 0 )
					{
				       foreach ($location as $row_txn)
				       {
					?>
					<option value="<?php echo $row_txn['LOCN_CODE']; ?>"><?php echo $row_txn['LOCN_DESC']; ?></option>
					<?php } }?>
				    </select>
				</div>
			</div>
		    
		    </div>
		    <div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label"> Delivery Date</label>
				<div class="col-md-6">
				   
				    <input type="text" name="POH_DLV_DT" id="POH_DLV_DT" class="form-control input-group datepicker-txn" placeholder="POH_DLV_DT" />
				</div>
				
			
		   			    <div class="col-md-2">
				<a href="#modal-dialog" class="btn btn-sm btn-primary" data-toggle="modal">Reference</a>
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
									<?php foreach($result2 as $row2) { ?>
									<option value="<?php echo $row2['PQH_SYS_ID']?>"><?php echo $row2['PQH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['PQH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['PQH_TXN_DT'];?></option>
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
			    </div>

		    </div>
		    
		    </div>
		    </div>
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Remarks</label>
				<div class="col-md-9">
				    <input type="text" name="POH_DESC" id="POH_DESC" class="form-control" placeholder="POH_DESC" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Status</label>
				<div class="col-md-9">
				    <input type="text" name="POH_STATUS" id="POH_STATUS" class="form-control" placeholder="POH_STATUS" />
				</div>
			    </div>
			</div>
		    </div>
		    <h4 class="col-md-12">&nbsp;</h4>
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
						<a data-toggle="tab" href="#nav-pills-tab-5">&nbsp; Attachment &nbsp;</a>
					    </li>
					</ul>
					<div class="tab-content">
					    <div id="nav-pills-tab-1" class="tab-pane fade active in" >
						<div class="col-md-5">
						    <div class="form-group">
							<label class="col-md-3 control-label">Address</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_ADD1" id="POH_SUPL_ADD1" class="form-control" placeholder="POH_SUPL_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_ADD2" id="POH_SUPL_ADD2" class="form-control" placeholder="POH_SUPL_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_ADD3" id="POH_SUPL_ADD3" class="form-control" placeholder="POH_SUPL_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_ADD4" id="POH_SUPL_ADD4" class="form-control" placeholder="POH_SUPL_ADD4" />
							</div>
						    </div>
						    
						    <div class="form-group">
							<label class="col-md-3 control-label">Country</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select readonly name="POH_SUPL_CN_CODE" ID='POH_SUPL_CN_CODE' class="form-control">
								     <?php foreach( $result5 as $country){?>
								    <option value="<?php echo $country['CN_CODE'] ?>"><?php echo $country['CN_DESC'] ?></option>
								    <?php }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select readonly name="POH_SUPL_ST_CODE" ID='POH_SUPL_ST_CODE' class="form-control">
								     <?php foreach( $result4 as $state){?>
								    <option value="<?php echo $state['ST_CODE'] ?>"><?php echo $state['ST_DESC'] ?></option>
								    <?php }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">City</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select readonly name="POH_SUPL_CT_CODE" ID='POH_SUPL_CT_CODE' class="form-control">
								 <?php foreach( $result3 as $city){?>
								<option value="<?php echo $city['CT_CODE'] ?>"><?php echo $city['CT_DESC'] ?></option>
								<?php }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Pox Box</label>
							<div class="col-md-9">
							    <input readonly type="text" name="POH_SUPL_POSTAL" id="POH_SUPL_POSTAL" class="form-control" placeholder="POH_SUPL_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Mobile</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_MOBILE" id="POH_SUPL_MOBILE" class="form-control" placeholder="POH_SUPL_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Phone</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_PHONE" id="POH_SUPL_PHONE" class="form-control" placeholder="POH_SUPL_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Fax</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_FAX" id="POH_SUPL_FAX" class="form-control" placeholder="POH_SUPL_FAX" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_SUPL_EMAIL" id="POH_SUPL_EMAIL" class="form-control" placeholder="POH_SUPL_EMAIL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Contact Person</label>
							<div class="col-md-9">
							    <input type="text"readonly  name="POH_SUPL_PERSON_NAME" id="POH_SUPL_PERSON_NAME" class="form-control" placeholder="POH_SUPL_PERSON_NAME" />
							</div>
						    </div>
						    
						</div>
						<div class="col-md-6 ">
						    
						    <div class="form-group">
							<label class="col-md-3 control-label">Ship EDD</label>
							<div class="col-md-9">
							    <input type="text"  name="POH_SHIP_EDD" id="POH_SHIP_EDD" class="form-control input-group datepicker-txn" placeholder="POH_SHIP_EDD" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Payment Terms</label>
							<div class="col-md-9">
							    <select  name="POH_PT_CODE" readonly id="POH_PT_CODE" class="form-control">
								<option   value="">Select</option>
								<?php if (count($paymentCode) > 0 )
								{
								    foreach ($paymentCode as $PaymentTCode)
								    {
								?>
								<option  value="<?php echo $PaymentTCode['PT_CODE']; ?>"  ><?php echo $PaymentTCode['PT_DESC']; ?></option>
								<?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Shipment</label>
							<div class="col-md-9">
							    <select  name="POH_SHIP_CODE"  id="POH_SHIP_CODE" class="form-control">
								<option   value="">Select</option>
								<?php if (count($ShipMentCode) > 0 )
								{
								    foreach ($ShipMentCode as $ShipMentsCode)
								    {
								?>
								<option  value="<?php echo $ShipMentsCode['SH_CODE']; ?>"  ><?php echo $ShipMentsCode['SH_DESC']; ?></option>
								<?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Carrier</label>
							<div class="col-md-9">
							    <select  name="POH_CARRIER_CODE"  id="POH_CARRIER_CODE" class="form-control">
								    <option   value="">Select</option>
								    <?php if (count($CarrierCode) > 0 )
								    {
									foreach ($CarrierCode as $ShipMentCarrierCode)
									{
								    ?>
								    <option  value="<?php echo $ShipMentCarrierCode['CA_CODE']; ?>"  ><?php echo $ShipMentCarrierCode['CA_DESC']; ?></option>
								    <?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Freight</label>
							<div class="col-md-9">
							    <select  name="POH_FREIGHT_CODE"   id="POH_FREIGHT_CODE" class="form-control">
								<option   value="">Select</option>
								<?php if (count($FreightCode) > 0 )
								{
								    foreach ($FreightCode as $Freightcode)
								    {
								?>
								<option  value="<?php echo $Freightcode['VSL_CODE']; ?>"  ><?php echo $Freightcode['VSL_DESC']; ?></option>
								<?php } } ?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Currency</label>
							<div class="col-md-9">
							    <select   name="POH_CCY_CODE"  id="POH_CCY_CODE" class="form-control">
								<option   value="">Select</option>
								<?php if (count($currencyCode) > 0 )
								{
								    foreach ($currencyCode as $code)
								    {
								?>
								<option  value="<?php echo $code['CCY_CODE']; ?>"  ><?php echo $code['CCY_DESC']; ?></option>
								<?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Exchange Rate</label>
							<div class="col-md-9">
							    <input type="text" readonly name="POH_EXC_RATE" id="POH_EXC_RATE" class="form-control" placeholder="POH_EXC_RATE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Gross Value</label>
							<div class="col-md-9">
							    <input type="text"  name="POH_GROSS_VALUE" id="POH_GROSS_VALUE" class="form-control" placeholder="POH_GROSS_VALUE"  />
							</div>
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="col-md-6">
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 01</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_01" id="POH_FLEX_01" class="form-control" placeholder="POH_FLEX_01" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 02</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_02" id="POH_FLEX_02" class="form-control" placeholder="POH_FLEX_02" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 03</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_03" id="POH_FLEX_03" class="form-control" placeholder="POH_FLEX_03" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 04</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_04" id="POH_FLEX_04" class="form-control" placeholder="POH_FLEX_04" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 05</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_05" id="POH_FLEX_05" class="form-control" placeholder="POH_FLEX_05" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 06</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_06" id="POH_FLEX_06" class="form-control" placeholder="POH_FLEX_06" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 07</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_07" id="POH_FLEX_07" class="form-control" placeholder="POH_FLEX_07" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 08</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_08" id="POH_FLEX_08" class="form-control" placeholder="POH_FLEX_08" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 09</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_09" id="POH_FLEX_09" class="form-control" placeholder="POH_FLEX_09" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 10</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_10" id="POH_FLEX_10" class="form-control" placeholder="POH_FLEX_10" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Flex 11</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_11" id="POH_FLEX_11" class="form-control" placeholder="POH_FLEX_11" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 12</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_12" id="POH_FLEX_12" class="form-control" placeholder="POH_FLEX_12" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 13</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_13" id="POH_FLEX_13" class="form-control" placeholder="POH_FLEX_13" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 14</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_14" id="POH_FLEX_14" class="form-control" placeholder="POH_FLEX_14" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 15</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_15" id="POH_FLEX_15" class="form-control" placeholder="POH_FLEX_15" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 16</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_16" id="POH_FLEX_16" class="form-control" placeholder="POH_FLEX_16" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 17</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_17" id="POH_FLEX_17" class="form-control" placeholder="POH_FLEX_17" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 18</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_18" id="POH_FLEX_18" class="form-control" placeholder="POH_FLEX_18" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 19</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_19" id="POH_FLEX_19" class="form-control" placeholder="POH_FLEX_19" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 20</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_20" id="POH_FLEX_20" class="form-control" placeholder="POH_FLEX_20" />
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
                                                                            <center>Description</center>
                                                                        </th>
									
									
<!--									<div>
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
-->									<th> <center><button type="button" class="btn btn-add btn-sm btn-primary" data-template="textbox">Add</button></center></th>
								    </tr>
								</thead>
								
								<tbody id="result">
								    
                                                                    
								    
								</tbody>
								<tbody>
								    <tr  class="odd hide" id="optionTemplate">
									<input type="hidden" class="form-control" name="POL_REF_LINE_SYS_ID1[]" >
									<input type="hidden" class="form-control" name="POL_REF_HEAD_SYS_ID1[]"  >
									<input type="hidden" class="form-control" name="POL_REF_FLOW_SEQ1[]"  >
									<td><span><input type="text" class="" name="POL_LINE1[]"  ></span></td>
								      
								      
								       <td><span> <input type="text" class="" name="POL_REF_TXN_CODE1[]"  readonly ></span></td>
								     <td><span>   <input type="text" class="" name="POL_REF_TXN_NO1[]"  readonly></span></td>
								       <td><span> <input type="text" class="" name="POL_ITEM_CODE1[]"  readonly></span></td>
								      
								       <td><span> <input type="text" class="" name="POL_ITEM_DESC1[]" readonly ></span></td>
								       
									<td><span><input type="text" class="" name="POL_UOM_CODE1[]"  readonly></span></td>
									<td><span><input type="text" class="" name="POL_QTY1[]" ></span></td>
									<input type="hidden" class="" name=" POL_QTY_BU1[]"   >
									<td><span><input type="text" class="" name="POL_PRICE1[]" ></span></td>
									<td><span><input type="text" class="" name="POL_VALUE1[]"  ></span></td>
									<td><span><input type="text" class="" name="POL_DISCOUNT_PCT1[]" ></span></td>
									 <td><span><input type="text" class="" name="POL_DISCOUNT_VALUE1[]"  ></span></td>
									  <td><span><input type="text" class="" name="POL_TAX_PCT1[]"   ></span></td>
									  <td><span><input type="text" class="" name="POL_TAX_VALUE1[]" ></span></td>
									  <td><span><input type="text" class="" name="POL_GROSS_VALUE1[]" ></span></td>
									<td><span><input type="text" class="" name="POL_GROSS_VALUE_LC1[]" ></span></td>
									  <td><span><input type="text" class="" name="POL_DESC1[]"></span></td>
									  <input type="hidden" class="form-control" name="POL_QTY_RECEIVED1[]"  >
									<input type="hidden" class="form-control" name="row_count1"   >
									<td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
								    </tr>
<!--								    <tr>                                                                        
                                                                        <td colspan="8"><center>Total</center> </td>
									<td></td>
									<td></td>
									    <div id="">
										<td id="tb1"><input type="text"></td>
										<td id="tb1"><input type="text"></td>
										<td id="tb1"><input type="text"></td>
									    </div>
								    </tr>
-->								    
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
									<input type="file" data-filename-placement="inside" id="PODOC_FILE_NAME" name="userfile[]">
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
                                <div class="col-md-offset-2 col-md-2">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
				<div class="col-md-2">
				    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <button type="submit" class="btn btn-md btn-success" name="add" id="submit_but" value="Save" >Submit</button>
				    <!--<input type="submit" class="btn btn-sm btn-success"  name="Save" value="Save">-->
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
    <script type="text/javascript">
   
			
			
			
	
$(document).ready(function() {
    
    
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
           POH_SUPL_AC_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Supplier Account code is required'
                    },
		    remote: {
                        message: 'PT_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Procurement/Ajax_PT_CODE')?>',
                        type: 'POST'
                    }
                   
                }
            },
	    POH_TXN_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Code is required'
                    }
                   
                }
            },
	    POH_TXN_NO: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Number is required'
                    }
                   
                }
            },
	    POH_TXN_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Date is required'
                    }
                   
                }
            },
	    POH_DLV_LOCN_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Delivery location  is required'
                    }
                   
                }
            },
	    POH_DLV_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Delivery Date is required'
                    }
                   
                }
            },
	    POH_DOC_REF_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Document reference date is required'
                    }
                   
                }
            },
	    POH_DOC_REF: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Document reference is required'
                    }
                   
                }
            },
	    POH_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Description is required'
                    }
                   
                }
            },
	    POH_STATUS: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Status is required'
                    }
                   
                }
            },
	    POH_SUPL_ADD1: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Address Line1 is required'
                    }
                   
                }
            },
	    POH_SUPL_ADD2: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Address Line2 is required'
                    }
                   
                }
            },
	    POH_SUPL_ADD3: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Address Line3 is required'
                    }
                   
                }
            },
	    POH_SUPL_ADD4: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Address Line4 is required'
                    }
                   
                }
            },
	    POH_SUPL_CN_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Country is required'
                    }
                   
                }
            },
	    POH_SUPL_ST_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'State is required'
                    }
                   
                }
            },
	    POH_SUPL_CT_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'City is required'
                    }
                   
                }
            },
	    POH_SUPL_POSTAL: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Post Box is required'
                    }
                   
                }
            },
	    POH_SUPL_MOBILE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Mobile Number is required'
                    }
                   
                }
            },
	    POH_SUPL_PHONE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Phone Number is required'
                    }
                   
                }
            },
	    POH_SUPL_FAX: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Fax Number is required'
                    }
                   
                }
            },
	    POH_SUPL_EMAIL: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Email is required'
                    }
                   
                }
            },
	    POH_SUPL_PERSON_NAME: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Supplier Person is required'
                    }
                   
                }
            },
	    POH_SHIP_EDD: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Ship EDD is required'
                    }
                   
                }
            },
	    POH_PT_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Payment Terms is required'
                    }
                   
                }
            },
	    POH_SHIP_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Shipment is required'
                    }
                   
                }
            },
	    POH_CARRIER_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Carrier is required'
                    }
                   
                }
            },
	    POH_FREIGHT_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Freight is required'
                    }
                   
                }
            },
	    POH_CCY_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Currency is required'
                    }
                   
                }
            },
	    POH_EXC_RATE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Exchange Rate is required'
                    }
                   
                }
            },
	    POH_GROSS_VALUE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Gross Value is required'
                    }
                   
                }
            },	
	    
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
});
};

</script>
<script type="text/javascript">


var row_count1=1;
$('.btn-add').click(function() {
var $template = $('#optionTemplate'),
$clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);

$clone.find('[name="POL_LINE[]"]').val(row_count1);

    $clone.find('[name="add1"]').attr('value',row_count1);
    $clone.find('[name="add"]').attr('name','add_'+row_count1);
    $("#row_contains").val(row_count1);
row_count1++;
removerow();
});


function removerow(){
$(".removeButton").on('click',function(){
var $row    = $(this).parents('.odd');
$row.remove();
});
};




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
    url:"<?php  echo site_url('Procurement/AjaxPurOrdTxnHead')?>",
    data:{code:sys_code},
    success: function(json)
    {
	//console.log(json);
	//alert(json[0].PQH_SUPL_AC_CODE);
	
	$('#POH_SUPL_AC_CODE').val(json[0].PQH_SUPL_AC_CODE);
	$('#POH_SUPL_ADD1').val(json[0].PQH_SUPL_ADD1);
$('#POH_SUPL_ADD2').val(json[0].PQH_SUPL_ADD2);
$('#POH_SUPL_ADD4').val(json[0].PQH_SUPL_ADD4);
$('#POH_SUPL_ADD3').val(json[0].PQH_SUPL_ADD3);
$('#POH_SUPL_CN_CODE').val(json[0].PQH_SUPL_CN_CODE);
$('#POH_SUPL_ST_CODE').val(json[0].PQH_SUPL_ST_CODE);
$('#POH_SUPL_CT_CODE').val(json[0].PQH_SUPL_CT_CODE);
$('#POH_SUPL_POSTAL').val(json[0].PQH_SUPL_POSTAL);
$('#POH_SUPL_MOBILE').val(json[0].PQH_SUPL_MOBILE);
$('#POH_SUPL_FAX').val(json[0].PQH_SUPL_FAX);
$('#POH_SUPL_EMAIL').val(json[0].PQH_SUPL_EMAIL);
$('#POH_SUPL_PERSON_NAME').val(json[0].PQH_SUPL_PERSON_NAME);
$('#POH_DLV_DT').val(json[0].PQH_DLV_DT);
$('#POH_DLV_LOCN_CODE').val(json[0].PQH_DLV_LOCN_CODE);
$('#POH_PT_CODE').val(json[0].PQH_PT_CODE);
$('#POH_SHIP_CODE').val(json[0].PQH_SHIP_CODE);
$('#POH_CARRIER_CODE').val(json[0].PQH_CARRIER_CODE);
$('#POH_FREIGHT_CODE').val(json[0].PQH_FREIGHT_CODE);
$('#POH_CCY_CODE').val(json[0].PQH_CCY_CODE);
$('#POH_SHIP_EDD').val(json[0].PQH_SHIP_EDD);
$('#POH_EXC_RATE').val(json[0].PQH_EXC_RATE);
$('#POH_GROSS_VALUE').val(json[0].PQL_GROSS_VALUE);
		
	
	
    }
    });
})


$('#transfer').on('click',function(){
var sys_code=$('#second').val();
var exng_val=$('#POH_EXC_RATE').val();
$.ajax({
type:"POST",
url:"<?php  echo site_url('Procurement/AjaxPurOrdTxnLine')?>",
data:{code:sys_code,exchange:exng_val},
success: function(response)
{
    $('#result').show();
$('#modal-dialog').modal('hide')
 $('#result').html(response);
}
});
})


$("#POH_SUPL_AC_CODE").change(function(){
	
	//var suppliercode=code;
	var suppliercode=$('#POH_SUPL_AC_CODE').val();
	
	// var catid=id;
	//alert(proofid);
    //alert(suppliercode);
	
	$.ajax({
	type: "POST",
	dataType: "json",
	url:"<?=base_url()?>Procurement/GetSupplierDetails",		
	data: { suppliercode : suppliercode },
	success: function (json) {
	
	//alert("Success");
	//$('#proofid').val(prooftype);
	
	$('#POH_SUPL_ADD1').val(json.Address1);
	$('#POH_SUPL_ADD2').val(json.Address2);	
	$('#POH_SUPL_ADD3').val(json.Address3);
	$('#POH_SUPL_ADD4').val(json.Address4);
	$('#POH_SUPL_CN_CODE').val(json.country);
	$('#POH_SUPL_ST_CODE').val(json.state);
	$('#POH_SUPL_CT_CODE').val(json.city);
	$('#POH_SUPL_POSTAL').val(json.postal);	
	$('#POH_SUPL_MOBILE').val(json.mobile);
	$('#POH_SUPL_PHONE').val(json.phone);
	$('#POH_SUPL_FAX').val(json.fax);	
	$('#POH_SUPL_EMAIL').val(json.email);
	$('#POH_SUPL_PERSON_NAME').val(json.PersonCode);
	$('#POH_CCY_CODE').val(json.currency);
	$('#POH_EXC_RATE').val(json.Rate);
	$('#POH_PT_CODE').val(json.SUPL_PAY_TERM_CODE);
	},
	});
	});

</script>
