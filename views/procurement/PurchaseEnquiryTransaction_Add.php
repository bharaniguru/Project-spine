
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
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Procurement/PurchaseEnquiryTransaction_Add'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Transaction</label>
				    <div class="col-md-9">
					<div class="input-group">
					<input type="text" readonly="" name="EQH_TNX_CODE" value="<?php echo $this->session->userdata('MENU_TXN_CODE'); ?>" id="EQH_TNX_CODE" class="form-control" placeholder="EQH_TNX_CODE" />
					<span class="input-group-addon"></span>
					<input type="text" readonly="" name="EQH_TXN_DESC" value="<?php echo $this->session->userdata('TXN_DESC'); ?>" id="TXN_DESC" class="form-control" placeholder="TXN_DESC/TXN_DESC" />
					</div>
				    </div>				    
			    </div>
			</div>

			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn Number</label>
				<div class="col-md-9">
				    <input type="text" readonly="" name="EQH_TXN_NO" value="<?php echo $txn_no['return_status']?>" id="EQH_TXN_NO" class="form-control" placeholder="EQH_TXN_NO" />
				</div>
			    </div>
			
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Txn DATE</label>
				<div class="col-md-9">
				    <!--<input type="text" name="EQH_TXN_DT" value="<?php //echo $txn_date['date'] ?>" id="EQH_TXN_DT" class="form-control" placeholder="EQH_TXN_DT" />-->
				    <input class="form-control datepicker-dob input-daterange" type="text" id="EQH_TXN_DT" placeholder="EQH_TXN_DT" name="EQH_TXN_DT">
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Document Reference</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_DOC_REF" id="EQH_DOC_REF" class="form-control" placeholder="EQH_DOC_REF" />
				</div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
				    <input type="text" name="EQH_DESC" id="EQH_DESC" class="form-control" placeholder="EQH_DESC" />
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
				    
					<input class="form-control datepicker-dob input-daterange" type="text" id="EQH_QUOT_DT" placeholder="EQH_QUOT_DT" name="EQH_QUOT_DT">
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
				    <option value="<?php echo $row_txn['LOCN_CODE']; ?>"><?php echo $row_txn['LOCN_DESC']; ?></option>
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
				    <input type="text" class="form-control datepicker-dob input-daterange" name="EQH_DEL_DT" id="EQH_DEL_DT" class="form-control" placeholder="EQH_DEL_DT" />
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

									</tbody>
                                                            </table>
							</div>
						</div>
						    		    </div>
					      <div id="nav-pills-tab-4" class="tab-pane fade">
					      </div>
					    <div id="nav-pills-tab-5" class="tab-pane fade">
						<div class="row">

							<div class="col-sm-5">
						    <div class="form-group">
							<label class="col-md-3 control-label">Address</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_ADD1" id="SUPL_ADD1" class="form-control" placeholder="SUPL_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_ADD2" id="SUPL_ADD2" class="form-control" placeholder="SUPL_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">&nbsp;</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_ADD3" id="SUPL_ADD3" class="form-control" placeholder="SUPL_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Country</label>
							<div class="col-md-8">
								<input type="text" name="SUPL_CN_CODE" id="SUPL_CN_CODE" class="form-control">
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_ST_CODE" id="SUPL_ST_CODE" class="form-control">
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">City</label>
							<div class="col-md-8">
								<input type="text" name="SUPL_CT_CODE" id="SUPL_CT_CODE" class="form-control">
							</div>    
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Pox Box</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_POSTAL" id="SUPL_POSTAL" class="form-control" placeholder="SUPL_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Mobile</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_MOBILE" id="SUPL_MOBILE" class="form-control" placeholder="SUPL_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Phone</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_PHONE" id="SUPL_PHONE" class="form-control" placeholder="SUPL_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Fax</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_FAX" id="SUPL_FAX" class="form-control" placeholder="SUPL_FAX" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_EMAIL" id="SUPL_EMAIL" class="form-control" placeholder="SUPL_EMAIL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-3 control-label">Contact Person</label>
							<div class="col-md-8">
							    <input type="text" name="SUPL_PERSON_NAME" id="SUPL_PERSON_NAME" class="form-control" placeholder="SUPL_PERSON_NAME" />
							</div>
						    </div>							    
							</div>
												        <div class="col-md-7">
											

				<div class="form-group">
                     <div class="widget-body">
                                                <div class="table-responsive">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Line</th>
                                                            <th>Supplier Code</th>                                                            
                                                            <th>Supplier Description</th>
							    <th>Active</th>
                                                            <th>Add / Remove</th>
							 </tr>
                                                      </thead>
                                                      <tbody>
<tr class="odd">

       <td><input class="form-control" type="text" name="supplier_line[]" value="1"  id="supplier_line"></td>
       
       <td><span><select class="form-control" onChange="suplier_code()" name="supplier_code[]" id="supp_code"></span>
       <option value=""  selected="" >Select Supplier</option>
       <?php foreach($supplier_code as $code){?>
	<option value="<?php echo $code['SUPL_AC_CODE'];?>"><?php echo $code['SUPL_AC_CODE'];?></option>
	<?php } ?>
	</select></td>
       
	<td><input class="form-control" type="text" name="supplier_desc[]" value=""  id="supplier_desc"></td>
	<td><input class="form-control" type="checkbox" name="active[]" value="Y"  id="active"></td>
       <td><button type="button" class="btn btn-addSupplier btn-sm btn-primary" data-template="textbox">Add</button></td>
   </tr>


   <tr class="odd hide" id="optionTemplateSupplier">
    
       <td><input class="form-control" type="text" name="supplier_line[]" value="1"  id="supplier_line"></td>
       
       <td><span><select class="form-control" name="supplier_code[]" id="supplier_code"/></span>
       <option disabled="" selected="" value="0">Select</option>
       <?php foreach($supplier_code as $code){?>
	<option value="<?php echo $code['SUPL_AC_CODE'];?>"><?php echo $code['SUPL_AC_CODE'];?></option>
	<?php } ?>
	</select></td>
       
	<td><input class="form-control" type="text" name="supplier_desc[]" value=""  id="supplier_desc"></td>
	<td><input class="form-control" type="checkbox" name="active[]" value="Y"  id="active"></td>
       <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButtonSupplier" data-template="textbox" >Remove</button></td>
   </tr>
   
   
   
   
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
			    </div>				
							</div>    
						</div>
						
						</div>
					</div>
				    </div>
		    
<!--		   <div class=" col-md-6 col-md-offset-3">
		    <div class="form-group">
                                <div class="col-md-offset-2 col-md-2">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
				<div class="col-md-2">
				    <button class="btn btn-sm btn-info" type="button" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <input type="submit" name="save" class="btn btn-sm btn-success"  value="Save">
                                </div>
                            </div>
		   </div>-->
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group" >
				    <label class="col col-4"></label>
				    <button  class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick=" Clear();" type="button"> Reset </button>
				    <!--<button type="submit" class="btn btn-md btn-success" name="submit" id="submit_but" value="Save" >Submit</button>-->
				    <input type="submit" name="save" class="btn btn-md btn-success" value="submit">
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
<script type="text/javascript">
     $(document).ready(function() {
    $('#form_validation').bootstrapValidator({
	excluded: [':disabled'],
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
     
            EQH_TXN_DT: {
  trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The TRANSACTION DATE is required '
                    },
      //remote: {
                        //message: 'The TRANSACTION DATE is invalid',
                       // url: '<?php  echo site_url('Inventory_controller/StockTransferIncomingDate')?>',
  // type: 'POST'
      //}
                }
            },
     EQH_TXN_DESC: {
  message: 'The Description is not valid',
                validators: {
      
                    notEmpty: {
                        message: 'The Transaction Code is required and can\'t be empty'
                    }
                }
            },
     EQH_TXN_NO: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Transaction No is required and can\'t be empty'
                    }
                }
            },
          EQH_QUOT_DT: {
   trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The Quotation Date is required and can\'t be empty'
                    }
                }
            },
     EQH_DLV_LOCN_CODE: {
                validators: {
      
                    notEmpty: {
                        message: 'The Delivery is required and can\'t be empty'
                    }
                }
            },
	    
       EQH_DEL_DT: {
	trigger:"blur",
                validators: {
      
                    notEmpty: {
                        message: 'The Delivery Date is required and can\'t be empty'
                    }
                }
            },
       'supplier_code[]': {
	group:'span',
                validators: {
      
                    notEmpty: {
                        message: 'The Supplier Code is required and can\'t be empty'
                    }
                }
            },
       EQH_DOC_REF: {
	trigger:"blur",
  
                validators: {
      
                    notEmpty: {
                        message: 'The Supplier Quotation Date is required and can\'t be empty'
                    }
                }
            },
       	EQH_PESON_CODE: {

	    validators: {
  
		notEmpty: {
		    message: 'The Requested by person required and can\'t be empty'
		}
	    }
	},
       EQH_DESC: {
  
                validators: {
      
                    notEmpty: {
                        message: 'The Remarks is required and can\'t be empty'
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

$('.btn-add2').click(function() {
 var next_va=2;
 var $template = $('#optionTemplate2'),
 $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);
 $clone.find('[name="PQDOC_LINE[]"]').val(next_va);

 next_va ++;
 removerow();
 });

 function removerow(){
      $(".removeButton").on('click',function(){
      var $row    = $(this).parents('.odd');
      $row.remove();
      
      });
      };
 
   function removerow2(){
      $(".removeButton2").on('click',function(){
      var $row    = $(this).parents('.odd');
      $row.remove();
      });
      };
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
<script type="text/javascript">
var count=1
       $('.btn-addSupplier').click(function() {
	count++;
       var $template = $('#optionTemplateSupplier'),
       $clone = $template.clone().removeClass('hide').removeAttr('id').insertBefore($template);

       removerow_supplier();
        $clone.find('[name="supplier_line[]"]').val(count);	
       });
       
	    function removerow_supplier(){
	    $(".removeButtonSupplier").on('click',function(){
	    var $row    = $(this).parents('.odd');
	    $row.remove();
	    });
	    };
	    
//function suplier_code(){
//    var sup_code=$('#supp_code').val() ;
//    alert('vanga');
//    $.ajax({
//	type: "POST",
//	url: "<?=base_url()?>Procurement/GetPROC_T_ENQ_SUPL",
//	data:{code:sup_code} ,
//	success: function (responseData) {
//		    $('#supplier_desc').val(responseData);
//	    },
//    });
//};


 $('#form_validation').on('change', '[name="supplier_code[]"]', function(e, data) {
    
    var sup_code=$(this).val() ;
    var $row    = $(this).parents('.odd');
    $.ajax({
	type: "POST",
	url: "<?=base_url()?>Procurement/GetPROC_T_ENQ_SUPL",
	dataType:"json",
	 data:{code:sup_code} ,
	success: function (json) {
		    $row.find("input[name='supplier_desc[]']").val(json.SUPL_AC_DESC);
		    $("#SUPL_ADD1").val(json.SUPL_ADD1);
		    $("#SUPL_ADD2").val(json.SUPL_ADD2);
		    $("#SUPL_ADD3").val(json.SUPL_ADD3);
		    $("#SUPL_CN_CODE").val(json.SUPL_CN_CODE);
		    $("#SUPL_ST_CODE").val(json.SUPL_ST_CODE);
		    $("#SUPL_CT_CODE").val(json.SUPL_CT_CODE);
		    $("#SUPL_POSTAL").val(json.SUPL_POSTAL);
		    $("#SUPL_MOBILE").val(json.SUPL_MOBILE);
		    $("#SUPL_PHONE").val(json.SUPL_PHONE);
		    $("#SUPL_FAX").val(json.SUPL_FAX);
		    $("#SUPL_EMAIL").val(json.SUPL_EMAIL);
		    $("#SUPL_PERSON_NAME").val(json.SUPL_PERSON_NAME);
		    
		    },
		    });
 });

</script>
</body>
</html>

