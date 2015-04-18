	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		   
		    <li class="active">Purchase Quotation</li>
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
		    <h4 class="panel-title">Edit  Purchase Quotation Transaction</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/PurchaseQuotationTransaction_Edit/'. $PurchaseQuotation[0]['PQH_SYS_ID']);?>" class="form-horizontal">
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				    <div class="col-md-9">
					<?php foreach ($PurchaseQuotation as $PQ)?>
					<input type="hidden" value="<?php echo $PQ['PQH_SYS_ID'];?>" name="PQH_SYS_ID" id="PQH_SYS_ID" class="form-control" />
					<input type="text" value="<?php echo $PQ['PQH_TXN_CODE'];?>" name="PQH_TXN_CODE" id="PQH_TXN_CODE" class="form-control" placeholder="PQH_TXN_CODE/TXN_DESC" />
					<input type="text" readonly="" name="PQH_TXN_DESC" id="PQH_TXN_DESC" value="<?php echo $this->session->userdata('TXN_DESC'); ?>" class="form-control " placeholder="PQH_TXN_CODE/TXN_DESC" />

				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Number</label>
				<div class="col-md-9">
				    <input type="text" value="<?php echo $PQ['PQH_TXN_NO'];?>" name="PQH_TXN_NO" id="PQH_TXN_NO" class="form-control" placeholder="PQH_TXN_NO" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn DATE</label>
				<div class="col-md-9">
				    <input type="text" value="<?php echo $PQ['PQH_TXN_DT'];?>" name="PQH_TXN_DT" id="PQH_TXN_DT" class="form-control default_date" placeholder="PQH_TXN_DT" />
				</div>
			    </div>
			</div>
		    </div>
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supplier</label>
				<div class="col-md-9">
				    <input type="text" readonly="" value="<?php echo $PQ['PQH_SUPL_AC_CODE'];?>" name="PQH_SUPL_AC_CODE" id="PQH_SUPL_AC_CODE" class="form-control" placeholder="PQH_SUPL_AC_CODE" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supl Quot Date</label>
				<div class="col-md-9">
				    <input type="text" value="<?php echo $PQ['PQH_REF_DT'];?>"  name="PQH_REF_DT" id="PQH_REF_DT" class="form-control default_date" placeholder="PQH_REF_DT" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label"> Supl Doc Ref</label>
				<div class="col-md-9">
				    <input type="text" value="<?php echo $PQ['PQH_DOC_REF'];?>" name="PQH_DOC_REF" id="PQH_DOC_REF" class="form-control" placeholder="PQH_DOC_REF" />
				</div>
			    </div>
			</div>
		    </div>
		   
		    <div class="col-md-6">
		    <div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label"> Delivery Location</label>
				<div class="col-md-9">				    
				    <select name="PQH_DLV_LOCN_CODE"  id="PQH_DLV_LOCN_CODE" class="form-control">
						<option value="">PQH_DLV_LOCN_CODE</option>
						<?php if (count($location) > 0 )
						{
						foreach ($location as $row_txn)
						{
						?>												
						<option <?php if( $PQ['PQH_DLV_LOCN_CODE']==$row_txn['LOCN_CODE']) echo "selected" ?>  value="<?php echo $row_txn['LOCN_CODE']; ?>"><?php echo $row_txn['LOCN_DESC']; ?></option>
						<?php } }?>>
					</select>
				    
				</div>
			</div>
		    
		    </div>
		    <div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label"> Delivery Date</label>
				<div class="col-md-6">
				    <input type="text"  value="<?php echo $PQ['PQH_DLV_DT'];?>" name="PQH_DLV_DT" id="PQH_DLV_DT" class="form-control default_date" placeholder="PQH_DLV_DT" />
				</div>
				<h6 class="hidden-md hidden-sm hidden-lg">&nbsp;</h6>
				<div class="col-md-3">
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
									<option value="<?php echo $row2['EQH_SYS_ID']."-".$row2['EQS_SUPL_CODE']?>"><?php echo $row2['EQS_SUPL_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['EQH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['EQH_TXN_DT'];?></option>
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
				    <input type="text" value="<?php echo $PQ['PQH_DESC'];?>" name="PQH_DESC" id="PQH_DESC" class="form-control" placeholder="PQH_DESC" />
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
							    <input type="text" readonly="" value="<?php echo $PQ['PQH_SUPL_ADD1'];?>" name="PQH_SUPL_ADD1" id="PQH_SUPL_ADD1" class="form-control" placeholder="PQH_SUPL_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" readonly="" value="<?php echo $PQ['PQH_SUPL_ADD2'];?>" name="PQH_SUPL_ADD2" id="PQH_SUPL_ADD2" class="form-control" placeholder="PQH_SUPL_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" readonly="" value="<?php echo $PQ['PQH_SUPL_ADD3'];?>" name="PQH_SUPL_ADD3" id="PQH_SUPL_ADD3" class="form-control" placeholder="PQH_SUPL_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Country</label>
							<div class="col-md-9">						
								<select  readonly="" name="PQH_SUPL_CN_CODE"  id="PQH_SUPL_CN_CODE" class="form-control">
								    <option   value="mih_txn_code">Select</option>
								    <?php if (count($country) > 0 )
								    {
									foreach ($country as $countryNoEdit)
									{
								    ?>
								    <option <?php if( $PQ['PQH_SUPL_CN_CODE']==$countryNoEdit['CN_CODE']) echo "selected" ?>  value="<?php echo $countryNoEdit['CN_CODE']; ?>"><?php echo $countryNoEdit['CN_DESC']; ?></option>								
								    <?php } }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select  readonly="" name="PQH_SUPL_ST_CODE"  id="PQH_SUPL_ST_CODE" class="form-control">
								    <option   value="">Select</option>
								    <?php if (count($state) > 0 )
								    {
									foreach ($state as $stateNoEdit)
									{
								    ?>
								    <option <?php if( $PQ['PQH_SUPL_ST_CODE']==$stateNoEdit['ST_CODE']) echo "selected" ?>  value="<?php echo $stateNoEdit['ST_CODE']; ?>"><?php echo $stateNoEdit['ST_DESC']; ?></option>								
								    <?php } }?>
								</select>														
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">City</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select  readonly="" name="PQH_SUPL_CT_CODE"  id="PQH_SUPL_CT_CODE" class="form-control">
								    <option   value="">Select</option>
								    <?php if (count($city) > 0 )
								    {
									foreach ($city as $cityNoEdit)
									{
								    ?>
								    <option <?php if( $PQ['PQH_SUPL_CT_CODE']==$cityNoEdit['CT_CODE']) echo "selected" ?>  value="<?php echo $cityNoEdit['CT_CODE']; ?>"><?php echo $cityNoEdit['CT_DESC']; ?></option>								
								    <?php } }?>
								</select>								
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Pox Box</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_SUPL_POSTAL'];?>" name="PQH_SUPL_POSTAL" id="PQH_SUPL_POSTAL" class="form-control" placeholder="PQH_SUPL_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Mobile</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_SUPL_MOBILE'];?>" name="PQH_SUPL_MOBILE" id="PQH_SUPL_MOBILE" class="form-control" placeholder="PQH_SUPL_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Phone</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_SUPL_PHONE'];?>" name="PQH_SUPL_PHONE" id="PQH_SUPL_PHONE" class="form-control" placeholder="PQH_SUPL_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Fax</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_SUPL_FAX'];?>" name="PQH_SUPL_FAX" id="PQH_SUPL_FAX" class="form-control" placeholder="PQH_SUPL_FAX" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_SUPL_EMAIL'];?>" name="PQH_SUPL_EMAIL" id="PQH_SUPL_EMAIL" class="form-control" placeholder="PQH_SUPL_EMAIL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Contact Person</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_SUPL_PERSON_NAME'];?>" name="PQH_SUPL_PERSON_NAME" id="PQH_SUPL_PERSON_NAME" class="form-control" placeholder="PQH_SUPL_PERSON_NAME" />
							</div>
						    </div>
						    
						</div>
						<div class="col-md-6 ">
						    
						    <div class="form-group">
							<label class="col-md-3 control-label">Effective From</label>
							<div class="col-md-9">
							    <input  type="text" value="<?php echo $PQ['PQH_EFF_FROM_DT'];?>" name="PQH_EFF_FROM_DT" id="PQH_EFF_FROM_D" class="form-control default_date" placeholder="PQH_EFF_FROM_D" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Effective Upto</label>
							<div class="col-md-9">
							    <input  type="text" value="<?php echo $PQ['PQH_EFF_UPTO_DT'];?>" name="PQH_EFF_UPTO_DT" id="PQH_EFF_UPTO_D" class="form-control default_date" placeholder="PQH_EFF_UPTO_D" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Payment Terms</label>
							<div class="col-md-9">							    
							    <!--<input type="text" value="<?php echo $PQ['PQH_PT_CODE'];?>" name="PQH_PT_CODE" id="PQH_PT_CODE" class="form-control" placeholder="PQH_PT_CODE" />-->
							    <select  name="PQH_PT_CODE"  id="PQH_PT_CODE" class="form-control">
								<option   value="">Select</option>
								<?php if (count($paymentCode) > 0 )
								{
								    foreach ($paymentCode as $PaymentTCode)
								    {
								?>
								<option <?php if( $PQ['PQH_PT_CODE']==$PaymentTCode['PT_CODE']) echo "selected" ?>  value="<?php echo $PaymentTCode['PT_CODE']; ?>"><?php echo $PaymentTCode['PT_DESC']; ?></option>								
								<?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Shipment</label>
							<div class="col-md-9">
							    <!--<input type="text" value="<?php echo $PQ['PQH_SHIP_CODE'];?>" name="PQH_SHIP_CODE" id="PQH_SHIP_CODE" class="form-control" placeholder="PQH_SHIP_CODE" />-->
							   <select  name="PQH_SHIP_CODE"  id="PQH_SHIP_CODE" class="form-control">
								<option   value="">Select</option>
								<?php if (count($ShipMentCode) > 0 )
								{
								    foreach ($ShipMentCode as $ShipMentsCode)
								    {
								?>
								<option <?php if( $PQ['PQH_SHIP_CODE']==$ShipMentsCode['SH_CODE']) echo "selected" ?>  value="<?php echo $ShipMentsCode['SH_CODE']; ?>"><?php echo $ShipMentsCode['SH_DESC']; ?></option>								
								<!--<option  value="<?php echo $ShipMentsCode['SH_CODE']; ?>"  ><?php echo $ShipMentsCode['SH_DESC']; ?></option>-->
								<?php } }?>
							</select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Carrier</label>
							<div class="col-md-9">
							    <!--<input type="text" value="<?php echo $PQ['PQH_CARRIER_CODE'];?>" name="PQH_CARRIER_CO" id="PQH_CARRIER_CO" class="form-control" placeholder="PQH_CARRIER_CO" />-->
							    <select  name="PQH_CARRIER_CO"  id="PQH_CARRIER_CO" class="form-control">
								    <option   value="">Select</option>
								    <?php if (count($CarrierCode) > 0 )
								    {
									foreach ($CarrierCode as $ShipMentCarrierCode)
									{
								    ?>
								    <option <?php if( $PQ['PQH_CARRIER_CODE']==$ShipMentCarrierCode['CA_CODE']) echo "selected" ?>  value="<?php echo $ShipMentCarrierCode['CA_CODE']; ?>"><?php echo $ShipMentCarrierCode['CA_DESC']; ?></option>								
								    <!--<option  value="<?php echo $ShipMentCarrierCode['CA_CODE']; ?>"  ><?php echo $ShipMentCarrierCode['CA_DESC']; ?></option>-->
								    <?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Freight</label>
							<div class="col-md-9">
							    <!--<input type="text" value="<?php echo $PQ['PQH_FREIGHT_CODE'];?>" name="PQH_FREIFHT_CO" id="PQH_FREIFHT_CO" class="form-control" placeholder="PQH_FREIFHT_CO" />-->
							     <select  name="PQH_FREIFHT_CO"  id="PQH_FREIFHT_CO" class="form-control">
								    <option   value="">Select</option>
								    <?php if (count($FreightCode) > 0 )
								    {
									foreach ($FreightCode as $Freightcode)
									{
								    ?>
								    <option <?php if( $PQ['PQH_FREIGHT_CODE']==$Freightcode['VSL_CODE']) echo "selected" ?>  value="<?php echo $Freightcode['VSL_CODE']; ?>"><?php echo $Freightcode['VSL_DESC']; ?></option>								
								    <!--<option  value="<?php echo $Freightcode['VSL_CODE']; ?>"  ><?php echo $Freightcode['VSL_DESC']; ?></option>-->
								    <?php } }?>
							    </select>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Currency</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PQ['PQH_CCY_CODE'];?>" name="PQH_CCY_CODE" id="PQH_CCY_CODE" class="form-control" placeholder="PQH_CCY_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Exchange Rate</label>
							<div class="col-md-9">
							    <input readonly="" type="text" value="<?php echo $PurchaseQuotation[0]['PQH_EXC_RATE'];?>" name="PQH_EXC_RATE" id="PQH_EXC_RATE" class="form-control" placeholder="PQH_EXC_RATE" />
							</div>
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="col-md-6">
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 01</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PurchaseQuotation[0]['PQH_FLEX_01'];?>" name="PQH_FLEX_01" id="PQH_FLEX_01" class="form-control" placeholder="PQH_FLEX_01" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 02</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PurchaseQuotation[0]['PQH_FLEX_02'];?>" name="PQH_FLEX_02" id="PQH_FLEX_02" class="form-control" placeholder="PQH_FLEX_02" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 03</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_03'];?>" name="PQH_FLEX_03" id="PQH_FLEX_03" class="form-control" placeholder="PQH_FLEX_03" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 04</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_04'];?>" name="PQH_FLEX_04" id="PQH_FLEX_04" class="form-control" placeholder="PQH_FLEX_04" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 05</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_05'];?>" name="PQH_FLEX_05" id="PQH_FLEX_05" class="form-control" placeholder="PQH_FLEX_05" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 06</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_06'];?>" name="PQH_FLEX_06" id="PQH_FLEX_06" class="form-control" placeholder="PQH_FLEX_06" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 07</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_07'];?>" name="PQH_FLEX_07" id="PQH_FLEX_07" class="form-control" placeholder="PQH_FLEX_07" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 08</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_08'];?>" name="PQH_FLEX_08" id="PQH_FLEX_08" class="form-control" placeholder="PQH_FLEX_08" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 09</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_09'];?>" name="PQH_FLEX_09" id="PQH_FLEX_09" class="form-control" placeholder="PQH_FLEX_09" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 10</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_10'];?>" name="PQH_FLEX_10" id="PQH_FLEX_10" class="form-control" placeholder="PQH_FLEX_10" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Flex 11</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_11'];?>" ="PQH_FLEX_11" id="PQH_FLEX_11" class="form-control" placeholder="PQH_FLEX_11" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 12</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_12'];?>" name="PQH_FLEX_12" id="PQH_FLEX_12" class="form-control" placeholder="PQH_FLEX_12" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 13</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_13'];?>" name="PQH_FLEX_13" id="PQH_FLEX_13" class="form-control" placeholder="PQH_FLEX_13" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 14</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_14'];?>" name="PQH_FLEX_14" id="PQH_FLEX_14" class="form-control" placeholder="PQH_FLEX_14" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 15</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_14'];?>" name="PQH_FLEX_15" id="PQH_FLEX_15" class="form-control" placeholder="PQH_FLEX_15" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 16</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_16'];?>" name="PQH_FLEX_16" id="PQH_FLEX_16" class="form-control" placeholder="PQH_FLEX_16" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 17</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_17'];?>" name="PQH_FLEX_17" id="PQH_FLEX_17" class="form-control" placeholder="PQH_FLEX_17" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 18</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_18'];?>" name="PQH_FLEX_18" id="PQH_FLEX_18" class="form-control" placeholder="PQH_FLEX_18" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 19</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_19'];?>" name="PQH_FLEX_19" id="PQH_FLEX_19" class="form-control" placeholder="PQH_FLEX_19" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 20</label>
							<div class="col-md-9">
							    <input type="text" value="<?php echo $PQ['PQH_FLEX_20'];?>" name="PQH_FLEX_20" id="PQH_FLEX_20" class="form-control" placeholder="PQH_FLEX_20" />
							</div>
						    </div>
						</div>
						
						</div>
					  
					    <div id="nav-pills-tab-3" class="tab-pane fade">
						<div class="widget-body">
							<div class="row">
							    <section class="col col-2">
								<label class="">
								    <input checked="checked" type="checkbox" name="PQH_STATUS" value="Y" id="ck1" > Show Discount
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
										
									<th >
									    <center>Discount</center>
									</th>
									<th >
									    <center>Discount Value</center>
									</th>
    
									<th >
									    <center>Tax PCT</center>
									</th>
									<th>
									<center>Tax Value</center>
									</th>
									<th>
									<center>Gross Value</center>
									</th>
									<th>
									<center>Gross Value LC</center>
									</th>
    
									<th >
									    <center>Description</center>
									</th>
									
								    </tr>
								</thead>
								
								<tbody>
								    <?php foreach($PurchaseQuotationLine as $PQT) { ?>
                                                                    <tr class="odd">																											
									<td>
									    <span>
										<input readonly="" type="text" class="" name="QUOTATION_LINE[]" value="<?php echo $PQT['PQL_LINE']?>" >
										<input type="hidden" class="" name="PQL_REF_TXN_NO[]" value="<?php echo $PQT['PQL_REF_TXN_NO']?>">
										<input type="hidden" class="" name="PQL_REF_HEAD_SYS_ID[]" value="<?php echo $PQT['PQL_REF_HEAD_SYS_ID']?>">
										<input type="hidden" class="" name="PQL_SYS_ID[]" value="<?php echo $PQT['PQL_SYS_ID']?>">
									    </span>
									</td>
									<td>
									    <span>
										<input readonly="" type="text" class="" name="PQL_ITEM_CODE[]" value="<?php echo $PQT['PQL_ITEM_CODE']?>">
										<input type="hidden" class="" name="PQL_REF_FLOW_SEQ[]" value="<?php echo $PQT['PQL_REF_FLOW_SEQ']?>">
										<input type="hidden" class="" name="PQL_REF_TXN_CODE[]" value="<?php echo $PQT['PQL_REF_TXN_CODE']?>">
									    </span>
									</td>
									<td>
									    <span>
										<input type="hidden" class="" name="PQL_LINE_STATUS[]" value="<?php echo $PQT['PQL_LINE_STATUS']?>">
										<input type="hidden" class="" name="PQL_REF_LINE_SYS_ID[]" value="<?php echo $PQT['PQL_REF_LINE_SYS_ID']?>">
										<input type="hidden" class="" name="QTY_BU[]" value="<?php echo $PQT['PQL_QTY_BU']?>">
										<input readonly="" type="text" class="" name="PQL_ITEM_DESC[]" value="<?php echo $PQT['PQL_ITEM_DESC']?>">										
									    </span>
									</td>
									<td><span><input readonly="" type="text" class="" name="PQL_UOM_CODE[]" value="<?php echo $PQT['PQL_UOM_CODE']?>" ></span></td>
									<td><span><input readonly="" type="text" class="" name="PQL_QTY[]" id="Quanty[]" value="<?php echo $PQT['PQL_QTY']?>" ></span></td>
									<td><span><input type="text" class="" name="PQL_PRICE[]" id="Price[]" value="<?php echo $PQT['PQL_PRICE']?>"></span></td>
									<td><span><input readonly="" type="text" class="" name="PQL_VALUE[]" value="<?php echo $PQT['PQL_VALUE']?>"></span></td>
									<td><span><input type="text" class="" name="PQL_DISCOUNT_PCT[]" id="discount_pct"  value="<?php echo $PQT['PQL_DISCOUNT_PCT']?>" ></span></td>
									<td><span><input readonly="" type="text" class="" name="PQL_DISCOUNT_VALUE[]" id="discount_value" value="<?php echo $PQT['PQL_DISCOUNT_VALUE']?>" ></span></td>
									<td><span><input type="text" class="" name="PQL_TAX_PCT[]"id="tax_pct" value="<?php echo $PQT['PQL_TAX_PCT']?>"></span></td>
									<td><span><input readonly="" type="text" class="" name="PQL_TAX_VALUE[]"  id="tax_value" value="<?php echo $PQT['PQL_TAX_VALUE']?>" ></span></td>
									<td><span><input readonly="" type="text" class="" name="PQL_GROSS_VALUE[]"  id="gross_value" value="<?php echo $PQT['PQL_GROSS_VALUE']?>"></span></td>
									<td><span><input readonly="" type="text" class="" name="PQL_GROSS_VALUE_LC[]"  id="gross_value_lc" value="<?php echo $PQT['PQL_GROSS_VALUE_LC']?>" ></span></td>
									<td><span><input type="text" class="" name="PQL_DESC[]" id="desc" value="<?php echo $PQT['PQL_DESC']?>"></span></td>	
									
									<td><a  type="button" href="<?php echo site_url('Procurement/PurchaseQuotationTransactionLine_Delete/'.$PQT['PQL_SYS_ID'].'/'.$PQ['PQH_SYS_ID'])?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?');"  data-template="textbox">Remove</a></td>
									
								    </tr>
								  <?php } ?>
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
									<th><center>Browse</center></th>
									<th><center>Description</center></th>									
									<th>Action</i></th>
								    </tr>
								</thead>
								<tbody>
								     <?php
								     $count= count($PurchaseQuotationDoc);
								     foreach($PurchaseQuotationDoc as $PQTDoc) { ?>
								    <tr class="odd " id="optionTemplate2">
									<td>
									    <input type="hidden" name="Count_document" value="<?php echo $count; ?>" >
									    <input type="text" id="PQDOC_LINE" name="PQDOC_LINE[]"  placeholder="PQDOC_LINE" value="<?php echo $PQTDoc['PQDOC_LINE']?>" />
									    <input type="hidden" id="PQDOC_SYS_ID" name="PQDOC_SYS_ID[]"  placeholder="PQDOC_SYS_ID" value="<?php echo $PQTDoc['PQDOC_SYS_ID']?>" />   
									</td>
									<td>
									    <input type="file" id="PQDOC_FILE_NAME" name="userfile[]" class="btn btn-success" value="<?php echo $PQTDoc['PQDOC_FILE_NAME']?>" placeholder="PQDOC_FILE_NAME" />
									    <input type="hidden" id="PQDOC_SIZE" name="PQDOC_SIZE[]" class="btn btn-success" value="<?php echo $PQTDoc['PQDOC_SIZE']?>" placeholder="PQDOC_SIZE" />
									    <input type="hidden" id="PQDOC_FILE_NAME_HIDDEN" name="PQDOC_FILE_NAME_HIDDEN[]" class="btn btn-success" value="<?php echo $PQTDoc['PQDOC_FILE_NAME']?>" placeholder="PQDOC_SIZE" />
									</td>
									<td>
									    <input type="text" id="PQDOC_DESC" name="PQDOC_DESC[]" value="<?php echo $PQTDoc['PQDOC_DESC']?>" placeholder="PQDOC_DESC" />
									</td>									
									<td><a  type="button" href="<?php echo site_url('Procurement/PurchaseQuotationTransactionDoc_Delete/'.$PQTDoc['PQDOC_SYS_ID'].'/'.$PQ['PQH_SYS_ID'])?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?');"  data-template="textbox">Remove</a>									    
									</td>                                  
								    </tr>
								    <?php }?>
								</tbody>
							    </table>
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
				    <button disabled="" class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <button type="submit" class="btn btn-md btn-success" name="update" id="submit_but" value="Save" >Submit</button>
				    <!--<input type="submit" name="submit" class="btn btn-sm btn-success" value="Save">-->
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
    $('#form_validation_no').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
     
            STIH_TXN_DT: {
  trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The TRANSACTION DATE is required '
                    },
      remote: {
                        message: 'The TRANSACTION DATE is invalid',
                        url: '<?php  echo site_url('Inventory_controller/StockTransferIncomingDate')?>',
   type: 'POST'
      }
                }
            },
     PQH_TXN_CODE: {
  message: 'The Description is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The Transaction Code is required and can\'t be empty'
                    }
                }
            },
     PQH_TXN_NO: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Transaction No is required and can\'t be empty'
                    }
                }
            },
          PQH_TXN_DT: {
   trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The Transaction Date is required and can\'t be empty'
                    }
                }
            },
     PQH_DLV_LOCN_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Delivery is required and can\'t be empty'
                    }
                }
            },
       PQH_DLV_DT: {
	trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The Delivery Date is required and can\'t be empty'
                    }
                }
            },
       PQH_SUPL_AC_CODE: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Supplier Code is required and can\'t be empty'
                    }
                }
            },
       PQH_REF_DT: {
	trigger:"blur",
  
                validators: {
      
                    notEmpty: {
                        message: 'The Supplier Quotation Date is required and can\'t be empty'
                    }
                }
            },
       PQH_DOC_REF: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Supplier Document Reference is required and can\'t be empty'
                    }
                }
            },
       PQH_DESC: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Remarks is required and can\'t be empty'
                    }
                }
            },
       PQH_EFF_FROM_D: {
   trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The Effective form Date is required and can\'t be empty'
                    }
                }
            },
       PQH_EFF_UPTO_D: {
   trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The Effective upto Date is required and can\'t be empty'
                    }
                }
            },
	    
      PQH_PT_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Payment is required and can\'t be empty'
                    }
                }
            },
      PQH_SHIP_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Shipment is required and can\'t be empty'
                    }
                }
            },
      PQH_CARRIER_CO: {
                validators: {
      
                    notEmpty: {
                        message: 'The Carrier is required and can\'t be empty'
                    }
                }
            },
       PQH_FREIFHT_CO: {
                validators: {
      
                    notEmpty: {
                        message: 'The Freight is required and can\'t be empty'
                    }
                }
            },
 }
    });
});
    
    $(document).ready(function() {
      $('.default_date').datetimepicker({
	format: 'DD-MMM-YY'
	});
});
  
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
$('#form_validation').on('blur', '[name="PQL_PRICE[]"]', function()
    {
 
  var $row    = $(this).parents('.odd');
 
 var item_code=$row.find("input[name='PQL_PRICE[]']").val();
 var item=$row.find("input[name='PQL_QTY[]']").val();
 var price= item_code*item;
 $row.find("input[name='PQL_VALUE[]']").attr('value',price);
 
 
 

});
$('#form_validation').on('blur', '[name="PQL_DISCOUNT_PCT[]"]', function()
    {
 
  var $row    = $(this).parents('.odd');
 
 var discount_pct=$row.find("input[name='PQL_DISCOUNT_PCT[]']").val();
 var pct_value=$row.find("input[name='PQL_VALUE[]']").val();
 var discount_value= parseFloat((discount_pct*pct_value)/100);
 $row.find("input[name='PQL_DISCOUNT_VALUE[]']").attr('value',discount_value);
 
 
});

$('#form_validation').on('blur', '[name="PQL_TAX_PCT[]"]', function()
    {
 
  var $row    = $(this).parents('.odd');
 
 var tax_pct=$row.find("input[name='PQL_TAX_PCT[]']").val();
 var pct_value=$row.find("input[name='PQL_VALUE[]']").val();
 var discount_value=$row.find("input[name='PQL_DISCOUNT_VALUE[]']").val();
 
 var tax_value= parseFloat((tax_pct*pct_value)/100);
 $row.find("input[name='PQL_TAX_VALUE[]']").attr('value',tax_value);

 var gross_value=((parseFloat(pct_value)+parseFloat(tax_value))-parseFloat(discount_value));
 $row.find("input[name='PQL_GROSS_VALUE[]']").attr('value',gross_value);
 
 var exchange_rate = document.getElementById('PQH_EXC_RATE').value;
 var gross_lc=gross_value*exchange_rate;
 $row.find("input[name='PQL_GROSS_VALUE_LC[]']").attr('value',gross_lc);
  
 
});
 function form_reset() {
    
	    $('input[type=text]').val('');
	    $('input[type=checkbox]').removeAttr('checked');
	    }
	    
	    $('.btn-add').click(function() {
	    var $template = $('#optionTemplate'),
	    $clone    = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
	    removerow();
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

</script>
