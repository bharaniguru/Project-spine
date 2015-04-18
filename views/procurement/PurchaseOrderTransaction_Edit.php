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
		    <h4 class="panel-title">Edit Purchase Order Transaction</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <?php foreach($GetPurOrdTxn as $PDT){}?>
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/PurchaseOrderTransaction_Edit/'.$PDT['POH_SYS_ID']); ?>" class="form-horizontal">
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				    <div class="col-md-9">
					<!--<input type="hidden" name="POH_SYS_ID"  value="<?php// echo $PDT['POH_SYS_ID']; ?>"  >-->
					
					<input type="text" name="POH_TXN_CODE" id="POH_TXN_CODE" class="form-control" value="<?php echo $PDT['POH_TXN_CODE']; ?>"  placeholder="POH_TXN_CODE/TXN_DESC" readonly />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Number</label>
				<div class="col-md-9">
				    <input type="text" name="POH_TXN_NO" id="POH_TXN_NO" value="<?php echo $PDT['POH_TXN_NO']; ?>" class="form-control" placeholder="POH_TXN_NO" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn DATE</label>
				<div class="col-md-9">
				    <input type="text" name="POH_TXN_DT" id="POH_TXN_DT" class="form-control input-group datepicker-txn" value="<?php echo $PDT['POH_TXN_DT']; ?>" placeholder="POH_TXN_DT" />
				</div>
			    </div>
			</div>
		    </div>
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supplier</label>
				<div class="col-md-9">
				    <input type="text" name="POH_SUPL_AC_CODE" value="<?php echo $PDT['POH_SUPL_AC_CODE']; ?>" id="POH_SUPL_AC_CODE" class="form-control" placeholder="POH_SUPL_AC_CODE" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Supl Quot Date</label>
				<div class="col-md-9">
				    <input type="text" name="POH_DOC_REF_DT" id="POH_DOC_REF_DT"  value="<?php echo $PDT['POH_DOC_REF_DT']; ?>" class="form-control input-group datepicker-txn" placeholder="POH_REF_DT" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label"> Supl Doc Ref</label>
				<div class="col-md-9">
				    <input type="text" name="POH_DOC_REF" id="POH_DOC_REF" value="<?php echo $PDT['POH_DOC_REF']; ?>" class="form-control" placeholder="POH_DOC_REF" />
				</div>
			    </div>
			</div>
		    </div>
		   
		    <div class="col-md-6">
		    <div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label"> Delivery Location</label>
				<div class="col-md-9">
				    <input type="text" name="POH_DLV_LOCN_CODE" id="POH_DLV_LOCN_CODE" value="<?php echo $PDT['POH_DLV_LOCN_CODE']; ?>" class="form-control" placeholder="POH_DLV_LOCN_CODE" />
				</div>
			</div>
		    
		    </div>
		    <div class="col-md-12">
			<div class="form-group">
				<label class="col-md-3 control-label"> Delivery Date</label>
				<div class="col-md-6">
				   
				    <input type="text" name="POH_DLV_DT" id="POH_DLV_DT" value="<?php echo $PDT['POH_DLV_DT']; ?>" class="form-control input-group datepicker-txn" placeholder="POH_DLV_DT" />
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
				    <input type="text" name="POH_DESC" id="POH_DESC" value="<?php echo $PDT['POH_DESC']; ?>" class="form-control" placeholder="POH_DESC" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Status</label>
				<div class="col-md-9">
				    <input type="text" name="POH_STATUS" id="POH_STATUS" value="<?php echo $PDT['POH_STATUS']; ?>" class="form-control" placeholder="POH_STATUS" />
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
							    <input type="text" name="POH_SUPL_ADD1" id="POH_SUPL_ADD1" value="<?php echo $PDT['POH_SUPL_ADD1']; ?>" class="form-control" placeholder="POH_SUPL_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_ADD2" id="POH_SUPL_ADD2" value="<?php echo $PDT['POH_SUPL_ADD2']; ?>" class="form-control" placeholder="POH_SUPL_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_ADD3" id="POH_SUPL_ADD3" value="<?php echo $PDT['POH_SUPL_ADD3']; ?>" class="form-control" placeholder="POH_SUPL_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_ADD4" id="POH_SUPL_ADD4" value="<?php echo $PDT['POH_SUPL_ADD4']; ?>" class="form-control" placeholder="POH_SUPL_ADD4" />
							</div>
						    </div>
						    
						    <div class="form-group">
							<label class="col-md-3 control-label">Country</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select name="POH_SUPL_CN_CODE" ID='POH_SUPL_CN_CODE' class="form-control">
								     <?php foreach( $result5 as $country){?>
								    <option value="<?php echo $country['CN_CODE'] ?>" <?php if($PDT['POH_SUPL_CN_CODE']==$country['CN_CODE'])echo "selected" ; ?> ><?php echo $country['CN_DESC'] ?></option>
								    <?php }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select name="POH_SUPL_ST_CODE" id="POH_SUPL_ST_CODE"class="form-control">
								     <?php foreach( $result4 as $state){?>
								    <option value="<?php echo $state['ST_CODE'] ?>" <?php if($PDT['POH_SUPL_ST_CODE']==$state['ST_CODE'])echo "selected" ; ?> > <?php echo $state['ST_DESC'] ?></option>
								    <?php }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">City</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select name="POH_SUPL_CT_CODE" id="POH_SUPL_CT_CODE" class="form-control">
								    <?php foreach( $result3 as $city){?>
								    <option value="<?php echo $city['CT_CODE'] ?>" <?php if($PDT['POH_SUPL_CT_CODE']==$city['CT_CODE'])echo "selected" ; ?>><?php echo $city['CT_DESC'] ?></option>
								    <?php }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Pox Box</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_POSTAL" id="POH_SUPL_POSTAL" value="<?php echo $PDT['POH_SUPL_POSTAL']; ?>" class="form-control" placeholder="POH_SUPL_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Mobile</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_MOBILE" id="POH_SUPL_MOBILE" value="<?php echo $PDT['POH_SUPL_MOBILE']; ?>" class="form-control" placeholder="POH_SUPL_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Phone</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_PHONE" id="POH_SUPL_PHONE" value="<?php echo $PDT['POH_SUPL_PHONE']; ?>" class="form-control" placeholder="POH_SUPL_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Fax</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_FAX" id="POH_SUPL_FAX"  value="<?php echo $PDT['POH_SUPL_FAX']; ?>" class="form-control" placeholder="POH_SUPL_FAX" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_EMAIL" id="POH_SUPL_EMAIL" value="<?php echo $PDT['POH_SUPL_EMAIL']; ?>" class="form-control" placeholder="POH_SUPL_EMAIL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Contact Person</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SUPL_PERSON_NAME" id="POH_SUPL_PERSON_NAME" value="<?php echo $PDT['POH_SUPL_PERSON_NAME']; ?>" class="form-control" placeholder="POH_SUPL_PERSON_NAME" />
							</div>
						    </div>
						    
						</div>
						<div class="col-md-6 ">
						    
						    <div class="form-group">
							<label class="col-md-3 control-label">Ship EDD</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SHIP_EDD" id="POH_SHIP_EDD" value="<?php echo $PDT['POH_SHIP_EDD']; ?>" class="form-control input-group datepicker-txn" placeholder="POH_SHIP_EDD" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Payment Terms</label>
							<div class="col-md-9">
							    <input type="text" name="POH_PT_CODE" id="POH_PT_CODE" value="<?php echo $PDT['POH_PT_CODE']; ?>" class="form-control" placeholder="POH_PT_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Shipment</label>
							<div class="col-md-9">
							    <input type="text" name="POH_SHIP_CODE" id="POH_SHIP_CODE"  value="<?php echo $PDT['POH_SHIP_CODE']; ?>" class="form-control" placeholder="POH_SHIP_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Carrier</label>
							<div class="col-md-9">
							    <input type="text" name="POH_CARRIER_CODE" id="POH_CARRIER_CODE"  value="<?php echo $PDT['POH_CARRIER_CODE']; ?>"  class="form-control" placeholder="POH_CARRIER_CO" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Freight</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FREIGHT_CODE" id="POH_FREIGHT_CODE" value="<?php echo $PDT['POH_FREIGHT_CODE']; ?>" class="form-control" placeholder="POH_FREIGHT_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Currency</label>
							<div class="col-md-9">
							    <input type="text" name="POH_CCY_CODE" id="POH_CCY_CODE" value="<?php echo $PDT['POH_CCY_CODE']; ?>" class="form-control" placeholder="POH_CCY_CODE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Exchange Rate</label>
							<div class="col-md-9">
							    <input type="text" name="POH_EXC_RATE" id="POH_EXC_RATE" value="<?php echo $PDT['POH_EXC_RATE']; ?>" class="form-control" placeholder="POH_EXC_RATE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Gross Value</label>
							<div class="col-md-9">
							    <input type="text" name="POH_GROSS_VALUE" id="POH_GROSS_VALUE" value="<?php echo $PDT['POH_GROSS_VALUE']; ?>" class="form-control" placeholder="POH_GROSS_VALUE" readonly />
							</div>
						    </div>
						</div>
					    </div>
					    <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="col-md-6">
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 01</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_01" id="POH_FLEX_01" value="<?php echo $PDT['POH_FLEX_01']; ?>" class="form-control" placeholder="POH_FLEX_01" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 02</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_02" id="POH_FLEX_02" value="<?php echo $PDT['POH_FLEX_02']; ?>" class="form-control" placeholder="POH_FLEX_02" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 03</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_03" id="POH_FLEX_03"  value="<?php echo $PDT['POH_FLEX_03']; ?>" class="form-control" placeholder="POH_FLEX_03" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 04</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_04" id="POH_FLEX_04"  value="<?php echo $PDT['POH_FLEX_04']; ?>" class="form-control" placeholder="POH_FLEX_04" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 05</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_05" id="POH_FLEX_05" value="<?php echo $PDT['POH_FLEX_05']; ?>" class="form-control" placeholder="POH_FLEX_05" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 06</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_06" id="POH_FLEX_06" value="<?php echo $PDT['POH_FLEX_06']; ?>" class="form-control" placeholder="POH_FLEX_06" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 07</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_07" id="POH_FLEX_07" value="<?php echo $PDT['POH_FLEX_07']; ?>" class="form-control" placeholder="POH_FLEX_07" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 08</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_08" id="POH_FLEX_08" value="<?php echo $PDT['POH_FLEX_08']; ?>" class="form-control" placeholder="POH_FLEX_08" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 09</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_09" id="POH_FLEX_09" value="<?php echo $PDT['POH_FLEX_09']; ?>" class="form-control" placeholder="POH_FLEX_09" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 10</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_10" id="POH_FLEX_10" value="<?php echo $PDT['POH_FLEX_10']; ?>"  class="form-control" placeholder="POH_FLEX_10" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Flex 11</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_11" id="POH_FLEX_11" value="<?php echo $PDT['POH_FLEX_11']; ?>" class="form-control" placeholder="POH_FLEX_11" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 12</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_12" id="POH_FLEX_12" value="<?php echo $PDT['POH_FLEX_12']; ?>" class="form-control" placeholder="POH_FLEX_12" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 13</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_13" id="POH_FLEX_13" value="<?php echo $PDT['POH_FLEX_13']; ?>" class="form-control" placeholder="POH_FLEX_13" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 14</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_14" id="POH_FLEX_14" value="<?php echo $PDT['POH_FLEX_14']; ?>" class="form-control" placeholder="POH_FLEX_14" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 15</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_15" id="POH_FLEX_15" value="<?php echo $PDT['POH_FLEX_15']; ?>"class="form-control" placeholder="POH_FLEX_15" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 16</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_16" id="POH_FLEX_16" value="<?php echo $PDT['POH_FLEX_16']; ?>" class="form-control" placeholder="POH_FLEX_16" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 17</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_17" id="POH_FLEX_17" value="<?php echo $PDT['POH_FLEX_17']; ?>" class="form-control" placeholder="POH_FLEX_17" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 18</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_18" id="POH_FLEX_18" value="<?php echo $PDT['POH_FLEX_18']; ?>" class="form-control" placeholder="POH_FLEX_18" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 19</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_19" id="POH_FLEX_19" value="<?php echo $PDT['POH_FLEX_19']; ?>" class="form-control" placeholder="POH_FLEX_19" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 20</label>
							<div class="col-md-9">
							    <input type="text" name="POH_FLEX_20" id="POH_FLEX_20" value="<?php echo $PDT['POH_FLEX_20']; ?>" class="form-control" placeholder="POH_FLEX_20" />
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
									
									
									<!--<div>
                                                                            <th id="tb1">
                                                                                <center>Discount</center>
                                                                            </th>

                                                                            <th id="tb1">
                                                                                <center>Overhead</center>
                                                                            </th>

                                                                            <th id="tb1">
                                                                                <center>Description</center>
                                                                            </th>
									</div>-->
								    </tr>
								</thead>
								
								<tbody id="result">
                                                                    
								    <?php
								    $count=count($GetPurOrdTxnLine);
								    foreach($GetPurOrdTxnLine as $row) {?>
								    <tr  class="odd">
								    <input type="hidden" class="form-control" name="POL_REF_LINE_SYS_ID[]" value="<?php echo $row['POL_REF_LINE_SYS_ID']?>" >
								    <input type="hidden" class="form-control" name="POL_REF_HEAD_SYS_ID[]" value="<?php echo $row['POL_REF_HEAD_SYS_ID']?>" >
								    <input type="hidden" class="form-control" name="POL_REF_FLOW_SEQ[]" value="<?php echo $row['POL_REF_FLOW_SEQ']?>" >
								    <input type="hidden" class="form-control" name="POL_SYS_ID" value="<?php echo $row['POL_SYS_ID']?>" >
								   
								    <td><span><input type="text" class="" name="POL_LINE[]" value="<?php echo $row['POL_LINE'];?>" ></span></td>
								  
								   <td><span> <input type="text" class="" name="POL_REF_TXN_CODE[]" value="<?php echo $row['POL_REF_TXN_CODE']?> " readonly ></span></td>
								 <td><span>   <input type="text" class="" name="POL_REF_TXN_NO[]" value="<?php echo $row['POL_REF_TXN_NO']?>" readonly></span></td>
								   <td><span> <input type="text" class="" name="POL_ITEM_CODE[]" value="<?php echo $row['POL_ITEM_CODE']?>" readonly></span></td>
								  
								   <td><span> <input type="text" class="" name="POL_ITEM_DESC[]" value="<?php echo $row['POL_ITEM_DESC']?>" readonly ></span></td>
								   
								    <td><span><input type="text" class="" name="POL_UOM_CODE[]" value="<?php echo  $row['POL_UOM_CODE'];?>"  readonly></span></td>
								    <td><span><input type="text" class="" name="POL_QTY[]" value="<?php echo $row['POL_QTY']?>" ></span></td>
								    <input type="hidden" class="" name=" POL_QTY_BU[]" value="<?php echo $row['POL_QTY_BU']?>"  >
								    <td><span><input type="text" class="" name="POL_PRICE[]" value="<?php echo $row['POL_PRICE']?>" ></span></td>
								    <td><span><input type="text" class="" name="POL_VALUE[]" value="<?php echo $row['POL_VALUE'];?>" ></span></td>
								    <td><span><input type="text" class="" name="POL_DISCOUNT_PCT[]" value="<?php echo $row['POL_DISCOUNT_PCT'];?>"></span></td>
								     <td><span><input type="text" class="" name="POL_DISCOUNT_VALUE[]" value="<?php echo $row['POL_DISCOUNT_VALUE'];?>" ></span></td>
								      <td><span><input type="text" class="" name="POL_TAX_PCT[]"  value="<?php echo $row['POL_TAX_PCT'];?>" ></span></td>
								      <td><span><input type="text" class="" name="POL_TAX_VALUE[]" value="<?php  echo $row['POL_TAX_VALUE'] ;?>" ></span></td>
								      <td><span><input type="text" class="" name="POL_GROSS_VALUE[]" value="<?php echo $row['POL_GROSS_VALUE'];?>"></span></td>
								    <td><span><input type="text" class="" name="POL_GROSS_VALUE_LC[]" value="<?php echo $row['POL_GROSS_VALUE_LC'];?>" ></span></td>
								      <td><span><input type="text" class="" name="POL_DESC[]"  value="<?php echo $row['POL_DESC'];?>"></span></td>
								      <input type="hidden" class="form-control" name="POL_QTY_RECEIVED[]"  value="<?php echo $row['POL_QTY_RECEIVED'];?>" >
									<input type="hidden" class="form-control" name="row_count"  value="<?php echo $count?>" >
								    <td><a href="<?php echo base_url("Procurement/PurchaseOrderTransactionLines_Delete/".$row['POL_SYS_ID']); ?>"><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></a></td>
								    <?php }?>
								</tr>
								    
								    
								    <!--<tr>                                                                        
                                                                        <td colspan="8"><center>Total</center> </td>
									<td></td>
									<td></td>
									    <div id="">
										<td id="tb1"></td>
										<td id="tb1"></td>
										<td id="tb1"></td>
									    </div>
								    </tr>-->
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
								       <th></th>
								    </tr>
								</thead>
								<tbody>
								    <?php
								    $count_doc=count($GetPurOrdTxnDoc);
								    foreach($GetPurOrdTxnDoc as $POTD ) {
									?>
								    <tr>
									<input type="hidden" name="PODOC_SYS_ID[]" value="<?php echo $POTD['PODOC_SYS_ID']; ?>">
									<input type="hidden" name="doc_count" value="<?php echo $count_doc; ?>">
									<td><input type="text" id="PODOC_LINE " name="PODOC_LINE[]" class="form-control" value="<?php echo $POTD['PODOC_LINE']; ?>"  placeholder="PODOC_LINE " /></td>
									<td><input type="file" id="PODOC_FILE_NAME" name="userfile[]" class="btn btn-success  form-control"   value="<?php echo $POTD['PODOC_FILE_NAME']; ?>"  placeholder="PODOC_FILE_NAME" />
									    <input type="hidden" id="PODOC_FILE_NAME" name="PODOC_FILE_NAME[]" class="btn btn-success  form-control"   value="<?php echo $POTD['PODOC_FILE_NAME']; ?>"  placeholder="PODOC_FILE_NAME" />
									    <input type="hidden" id="PODOC_SIZE" name="PODOC_SIZE[]" class="btn btn-success  form-control"   value="<?php echo $POTD['PODOC_SIZE']; ?>"  placeholder="PODOC_FILE_NAME" />
									
									</td>
									<td><input type="text" id="PODOC_DESC " name="PODOC_DESC[]" class="form-control"  value="<?php echo $POTD['PODOC_DESC']; ?>"   placeholder="PODOC_DESC" /></td>
									
									<td> <a href="<?php echo base_url("Procurement/PurchaseOrderTransactionDoc_Delete/".$POTD['PODOC_SYS_ID']); ?>"><button type="button" onclick="" class="btn btn-remove2 btn-danger btn-sm removeButton" data-template="textbox">Remove</button></a> </td>
									
								    </tr>
								    <?php } ?>
								    
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
						    <button type="submit" class="btn btn-md btn-success" name="Update" id="submit_but" value="Save" >Update</button>
						    <!--<input type="submit" class="btn btn-sm btn-success"  name="Update" value="Update">-->
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
$('#modal-dialog').modal('hide')
 $('#result').html(response);
}
});
})




</script>
