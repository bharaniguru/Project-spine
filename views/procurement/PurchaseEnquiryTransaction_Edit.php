
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		   
		    <li class="active">Purchase Enquiry</li>
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
		    <h4 class="panel-title">New Purchase Enquiry Transaction</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/PurchaseEnquiryTransaction_Edit/'.$head[0]['EQH_SYS_ID']); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				    <div class="col-md-9">
					<div class="input-group">
					<input type="text" readonly="" name="EQH_TNX_CODE" value="<?php echo $menu_code[0]['MENU_TXN_CODE']; ?>" id="EQH_TNX_CODE" class="form-control" placeholder="EQH_TNX_CODE" />
					<span class="input-group-addon"></span>
					<input type="text" readonly="" name="EQH_TXN_DESC" value="<?php echo $menu_code[0]['MENU_DESC']; ?>" id="TXN_DESC" class="form-control" placeholder="TXN_DESC/TXN_DESC" />
					<input type="hidden" name="EQH_SYS_ID" value="<?php echo $head[0]['EQH_SYS_ID']; ?>" id="EQH_SYS_ID" class="form-control" placeholder="TXN_DESC/TXN_DESC" />
					</div>
				    </div>				    
			    </div>
			</div>

			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Number</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_TXN_NO" readonly="" value="<?php echo $head[0]['EQH_TXN_NO']?>" id="EQH_TXN_NO" class="form-control" placeholder="EQH_TXN_NO" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn DATE</label>
				<div class="col-md-9">
				    <!--<input type="text" name="EQH_TXN_DT" value="<?php //echo $txn_date['date'] ?>" id="EQH_TXN_DT" class="form-control" placeholder="EQH_TXN_DT" />-->
				    <input class="form-control datepicker-dob input-daterange" type="text" id="EQH_TXN_DT" placeholder="EQH_TXN_DT" name="EQH_TXN_DT" value="<?php echo $head[0]['EQH_TXN_DT']?>">
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Document Reference</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_DOC_REF" id="EQH_DOC_REF" class="form-control" placeholder="EQH_DOC_REF" value="<?php echo $head[0]['EQH_DOC_REF']?>"/>
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_DESC" id="EQH_DESC" class="form-control" placeholder="EQH_DESC" value="<?php echo $head[0]['EQH_DESC']?>"/>
				</div>
			    </div>
			</div>
			
			
		    </div>
		    <div class="col-md-6">
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Requested By</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_PESON_CODE" id="EQH_PESON_CODE" class="form-control" placeholder="EQH_PESON_CODE" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Quot Date</label>
				<div class="col-md-9">
				    <!--<input type="text" name="EQH_QUOT_DT" id="EQH_QUOT_DT" class="form-control" placeholder="EQH_QUOT_DT" />-->
				    
					<input class="form-control datepicker-dob input-daterange" type="text" id="EQH_QUOT_DT" placeholder="EQH_QUOT_DT" name="EQH_QUOT_DT" value="<?php echo $head[0]['EQH_QUOT_DT']?>">
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label"> Delivery Location</label>
				<div class="col-md-9"> 
<!--				<input type="text" name="EQH_DLV_LOCN_CODE" id="EQH_DLV_LOCN_CODE" class="form-control">
-->				<select name="EQH_DLV_LOCN_CODE"  id="EQH_DLV_LOCN_CODE" class="form-control">
				    <option value="">EQH_DLV_LOCN_CODE</option>
				    <?php if (count($location) > 0 )
				    {
				   foreach ($location as $row_txn)
				   {
				    ?>
				    <option <?php if($head[0]["EQH_DLV_LOCN_CODE"]==$row_txn['LOCN_CODE']) echo "selected"; ?> value="<?php echo $row_txn['LOCN_CODE']; ?>"><?php echo $row_txn['LOCN_DESC']; ?></option>
				    <?php } }?>
				</select>
				    <!--<input type="text" name="EQH_DEL_LOC_DT" id="EQH_DEL_LOC_DT" class="form-control" placeholder="EQH_DEL_LOC_DT" />-->
				</div>
				
				
				
			</div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Delivery Date</label>
				<div class="col-md-9">
				    <input type="text" class="form-control datepicker-dob input-daterange" name="EQH_DEL_DT" value="<?php echo $head[0]['EQH_DLV_DT']?>"id="EQH_DEL_DT" class="form-control" placeholder="EQH_DEL_DT" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Status</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_STATUS"  id="EQH_STATUS" class="form-control" placeholder="EQH_STATUS" value="<?php echo $head[0]['EQH_STATUS']?>"/>
				</div>
			    </div>
			
			</div>
			
			<div class="col-md-12">
			<div class="form-group">
				<h6 class="hidden-md hidden-sm hidden-lg">&nbsp;</h6>
				
				<div class="col-md-offset-9 col-md-3">
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

									<?php foreach($PullEnquiry as $row2) { ?>
									<option value="<?php echo $row2['PRQH_SYS_ID']?>" ><?php echo $row2['PRQH_TXN_CODE'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['PRQH_TXN_NO'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$row2['PRQH_TXN_DT'];?></option>
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
		   
		    <h4 class="col-md-12">&nbsp;</h4>
		    <div class=" col-md-12">
					<ul class="nav nav-pills tab_nav">
					  
					    <li class="active">
						<a data-toggle="tab" href="#nav-pills-tab-2">&nbsp; Flex &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-3">&nbsp; Lines &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-4">&nbsp; Action &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-5">&nbsp; Supplier &nbsp;</a>
					    </li>
					</ul>
					<div class="tab-content">
					    <div id="nav-pills-tab-2" class="tab-pane fade active in">
						<div class="col-md-6">
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 01</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_01" id="EQH_FLEX_01" class="form-control" placeholder="EQH_FLEX_01" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 02</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_02" id="EQH_FLEX_02" class="form-control" placeholder="EQH_FLEX_02" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 03</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_03" id="EQH_FLEX_03" class="form-control" placeholder="EQH_FLEX_03" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 04</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_04" id="EQH_FLEX_04" class="form-control" placeholder="EQH_FLEX_04" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 05</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_05" id="EQH_FLEX_05" class="form-control" placeholder="EQH_FLEX_05" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 06</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_06" id="EQH_FLEX_06" class="form-control" placeholder="EQH_FLEX_06" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 07</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_07" id="EQH_FLEX_07" class="form-control" placeholder="EQH_FLEX_07" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 08</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_08" id="EQH_FLEX_08" class="form-control" placeholder="EQH_FLEX_08" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 09</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_09" id="EQH_FLEX_09" class="form-control" placeholder="EQH_FLEX_09" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 10</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_10" id="EQH_FLEX_10" class="form-control" placeholder="EQH_FLEX_10" />
							</div>
						    </div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Flex 11</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_11" id="EQH_FLEX_11" class="form-control" placeholder="EQH_FLEX_11" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 12</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_12" id="EQH_FLEX_12" class="form-control" placeholder="EQH_FLEX_12" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 13</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_13" id="EQH_FLEX_13" class="form-control" placeholder="EQH_FLEX_13" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 14</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_14" id="EQH_FLEX_14" class="form-control" placeholder="EQH_FLEX_14" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 15</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_15" id="EQH_FLEX_15" class="form-control" placeholder="EQH_FLEX_15" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 16</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_16" id="EQH_FLEX_16" class="form-control" placeholder="EQH_FLEX_16" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 17</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_17" id="EQH_FLEX_17" class="form-control" placeholder="EQH_FLEX_17" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 18</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_18" id="EQH_FLEX_18" class="form-control" placeholder="EQH_FLEX_18" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 19</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_19" id="EQH_FLEX_19" class="form-control" placeholder="EQH_FLEX_19" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Flex 20</label>
							<div class="col-md-9">
							    <input type="text" name="EQH_FLEX_20" id="EQH_FLEX_20" class="form-control" placeholder="EQH_FLEX_20" />
							</div>
						    </div>
						</div>
						
						</div>
					  
					    <div id="nav-pills-tab-3" class="tab-pane fade">
						<div class="widget-body">

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
                                                                            
									<th >
									    <center>Description</center>
									</th>
									
								    </tr>
								</thead>
								
									<tbody id="display-table">
									    <?php  foreach($line as $row)
									    {
									    ?>
									    <tr class="odd">
									    <input type="hidden" class="" name="EQL_SYS_ID[]" value="<?php echo $row['EQL_SYS_ID']?>"  >
									    <input type="hidden" class="" name="PRQL_PRICE[]" value="<?php echo $row['EQL_PRICE']?>"  >
									    <input type="hidden" class="form-control" name="POL_REF_LINE_SYS_ID[]" value="<?php echo $row['EQL_REF_LINE_SYS_ID']?>" >
									    <input type="hidden" class="form-control" name="POL_REF_HEAD_SYS_ID[]" value="<?php echo $row['EQL_REF_HEAD_SYS_ID']?>" >
									    <input type="hidden" class="form-control" name="POL_REF_FLOW_SEQ[]" value="<?php echo $row['EQL_REF_FLOW_SEQ']?>" >
									    <input type="hidden" class="form-control" name="POL_REF_TXN_CODE[]" value="<?php echo $row['EQL_REF_TXN_CODE']?>" >
									    <input type="hidden" class="form-control" name="POL_REF_TXN_NO[]" value="<?php echo $row['EQL_REF_TXN_NO']?>" >
									    <td><input type="text" class="" name="EQL_LINE[]" value="<?php echo $row['EQL_LINE'];?>" ></td>
									    <td><input type="text" class="" name="PRQL_ITEM_CODE[]" value="<?php echo $row['EQL_ITEM_CODE']?>" readonly ></td>
									    <td><input type="text" class="" name="PRQL_ITEM_DESC[]" value="<?php echo $row['EQL_ITEM_DESC']?>" readonly></td>
									    <td><input type="text" class="" name="PRQL_UOM_CODE[]" value="<?php echo $row['EQL_UOM_CODE']?>" readonly></td>
									    <td><input type="text" class="" name="PRQL_QTY[]" value="<?php echo  $row['EQL_QTY'];?>"  readonly></td>
									    <td><input type="text" class="" name="EQL_DESC[]" value="<?php echo  $row['EQL_DESC'];?>" ></td>
								    
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
						        <div class="col-md-6">
											
						    <div class="form-group">
							<label class="col-md-3 control-label">Address</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_ADD1" id="SUPL_ADD1" class="form-control" placeholder="SUPL_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_ADD2" id="SUPL_ADD2" class="form-control" placeholder="SUPL_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_ADD3" id="SUPL_ADD3" class="form-control" placeholder="SUPL_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Country</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select name="SUPL_CN_CODE" id="SUPL_CN_CODE" class="form-control">
								    <option value="">SUPL_CN_CODE</option>
								    <?php if (count($country) > 0 )
								    {
								    foreach ($country as $row)
								    {
								    ?>
								    <option value="<?php echo $row['CN_CODE']; ?>"><?php echo $row['CN_DESC']; ?></option>
								   <?php } }?>
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select name="SUPL_ST_CODE" id="SUPL_ST_CODE" class="form-control">
								    <option value="">SUPL_ST_CODE</option>  
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">City</label>
							<div class="col-md-9">
							    <section class="col col-12">
								<select name="SUPL_CT_CODE" id="SUPL_CT_CODE" class="form-control">
								    <option>SUPL_CT_CODE</option>   
								</select>
							    </section>
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Pox Box</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_POSTAL" id="SUPL_POSTAL" class="form-control" placeholder="SUPL_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Mobile</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_MOBILE" id="SUPL_MOBILE" class="form-control" placeholder="SUPL_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Phone</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_PHONE" id="SUPL_PHONE" class="form-control" placeholder="SUPL_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Fax</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_FAX" id="SUPL_FAX" class="form-control" placeholder="SUPL_FAX" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_EMAIL" id="SUPL_EMAIL" class="form-control" placeholder="SUPL_EMAIL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Contact Person</label>
							<div class="col-md-9">
							    <input type="text" name="SUPL_PERSON_NAME" id="SUPL_PERSON_NAME" class="form-control" placeholder="SUPL_PERSON_NAME" />
							</div>
						    </div>
				
		
						    </div>
						
						    <div class="col-md-6">
							    <div class="widget-body">
								<div class="table-responsive">
								    <table class="table table-bordered">
									<thead>
									    <tr>
										    
										<th><center>Line</center></th>
										<th><center>Supl Code</center></th>
										<th><center>Supl Description</center></th>
										
									    </tr>
									</thead>
									<tbody>
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
				    <input type="submit" name="update"class="btn btn-sm btn-success"  value="Save">
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
            ccy_code: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'CCY_CODE is required'
                    },
		    remote: {
                        message: 'CCY_CODE IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Procurement/Ajax_CCY_CODE')?>',
                        type: 'POST'
                    }
                }
            },
	     EQH_TXN_DT: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'Transaction Date is required'
                    }
                   
                }
            },
	     EQH_DOC_REF: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Document Reference is required'
                    }
                   
                }
            },
	     EQH_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Description is required'
                    }
                   
                }
            },
	     EQH_PESON_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Person Code is required'
                    }
                   
                }
            },
	     EQH_QUOT_DT: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'Quotation Date is required'
                    }
                   
                }
            },
	     EQH_DLV_LOCN_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Delivery Location is required'
                    }
                   
                }
            },
	     EQH_DEL_DT: {
		trigger:"blur",
                validators: {
		    
                    notEmpty: {
                        message: 'Delivery Date is required'
                    }
                   
                }
            },
	     EQH_STATUS: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'Status is required'
                    }
                   
                }
            },	 	
	}
    });
});
</script>
<script type="text/javascript">
    
    
    
        $('.datepicker-dob').datetimepicker({
      format: 'DD-MMM-YY'
      
      })
	
	
	
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
 
    url:"<?php  echo site_url('Procurement/AjaxEnquiryTransaction')?>",
    data:{code:sys_code},
    success: function(html)
    {
    
    $("#display-table").html(html);
    $("#modal-dialog").modal("hide");
    }
    });
})
	
	
	
	
	
	
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
    
    $("#SUPL_CN_CODE").change(function() {
    var cn_code=$('option:selected', this).val() ;
    
    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Procurement/ajaxstate",
    data:{cn_code:cn_code} ,
    success: function (responseData) {
    $('*#SUPL_ST_CODE').html(responseData);
    dropdown();
    
    },
    });
    });});
    
    $(function(){
    
    $("#SUPL_ST_CODE").change(function() {
    var st_code=$('option:selected', this).val() ;
    var cn_code=$('option:selected', "#SUPL_CN_CODE").val() ;

    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Procurement/ajaxcity",
    data:{st_code:st_code,cn_code:cn_code} ,
    success: function (responseData) {
  
    $('*#SUPL_CT_CODE').html(responseData);
    dropdown();
    },
    });
    });
    });
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

