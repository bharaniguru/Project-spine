
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">Bank Master</li>
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
		    <h4 class="panel-title">New Bank Master</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Finance/BankMaster_Add'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Bank Code</label>
				   
				    <div class="col-md-6">
					<input type="text" name="BANK_CODE" id="BANK_CODE" class="form-control"  placeholder="BANK_CODE" />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-9">
					<input type="text" name="BANK_DESC" id="BANK_DESC" class="form-control" placeholder="BANK_DESC" />
				    </div>
			    </div>
			</div>
			
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Alias</label>
				<div class="col-md-9">
				    <input type="text" name="BANK_ALIAS" id="BANK_ALIAS" class="form-control" placeholder="BANK_ALIAS" />
				</div>
			    </div>
			</div>
			
			
		    </div>
		  <div class="col-md-6">
		     <div class="col-md-1">
				     <div class="checkbox">
				  <label>
                                                <input type="checkbox" checked="checked" value='Y' name="BANK_ACTIVE_YN">
				      Active?
				  </label>
				     </div>
				 </div>
		  </div>
		   
		    <h4 class="col-md-12">&nbsp;</h4>
		    <div class=" col-md-12">
					<ul class="nav nav-pills tab_nav">
					  
					    <li class="active">
						<a data-toggle="tab" href="#nav-pills-tab-1">&nbsp; Address &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-2">&nbsp; Details &nbsp;</a>
					    </li>
					    <li class="">
						<a data-toggle="tab" href="#nav-pills-tab-3">&nbsp; Attachments &nbsp;</a>
					    </li>
					</ul>
					<div class="tab-content">
					    <div id="nav-pills-tab-1" class="tab-pane fade active in">
						<div class="col-md-5">
						    <div class="form-group">
							<label class="col-md-2 control-label">Address</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ADD1" id="BANK_ADD1" class="form-control" placeholder="BANK_ADD1" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ADD2" id="BANK_ADD2" class="form-control" placeholder="BANK_ADD2" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ADD3" id="BANK_ADD3" class="form-control" placeholder="BANK_ADD3" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ADD4" id="BANK_ADD4" class="form-control" placeholder="BANK_ADD4" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Country</label>
							<div class="col-md-9">
							<section class="col col-12">
							<select name="BANK_CN_CODE" id="BANK_CN_CODE" class="form-control">
							    <option selected disabled >Select</option>
							    <?php foreach( $location as $country){ ?>
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
							<select name="BANK_ST_CODE" id="BANK_ST_CODE" class="form-control">
							    <option selected disabled >Select</option>
							    <?php foreach( $location as $state){?>
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
							<select name="BANK_CT_CODE" id="BANK_CT_CODE" class="form-control">
								    <option selected disabled >Select</option>
								    <?php foreach( $location as $city){?>
								    <option value="<?php echo $city['CT_CODE'] ?>"><?php echo $city['CT_DESC'] ?></option>
								    <?php }?>
								</select>
							</section>
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">PO Box</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_POSTAL" id="BANK_POSTAL" class="form-control" placeholder="BANK_POSTAL" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Mobile</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_MOBILE" id="BANK_MOBILE" class="form-control" placeholder="BANK_MOBILE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Phone</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_PHONE" id="BANK_PHONE" class="form-control" placeholder="BANK_PHONE" />
							</div>
						    </div>
						    <div class="form-group">
							<label class="col-md-2 control-label">Fax</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_FAX" id="BANK_FAX" class="form-control" placeholder="BANK_FAX" />
							</div>
						    </div>
						     <div class="form-group">
							<label class="col-md-2 control-label">Email</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_EMAIL" id="BANK_EMAIL" class="form-control" placeholder="BANK_EMAIL" />
							</div>
						    </div>
						      <div class="form-group">
							<label class="col-md-2 control-label">Website</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_WEB_SITE" id="BANK_WEB_SITE" class="form-control" placeholder="BANK_WEB_SITE" />
							</div>
						    </div>
						</div>
						</div>
					
					    <div id="nav-pills-tab-2" class="tab-pane fade">
						<div class="col-md-5">
						<div class="widget-body">
							 <div class="form-group">
							<label class="col-md-2 control-label">Account Number</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ACNT_NUMBER" id="BANK_ACNT_NUMBER" class="form-control" placeholder="BANK_ACNT_NUMBER" />
							</div>
						    </div>
							  <div class="form-group">
							<label class="col-md-2 control-label">IBAN</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ACNT_IBAN" id="BANK_ACNT_IBAN" class="form-control" placeholder="BANK_ACNT_IBAN" />
							</div>
						    </div>
							   <div class="form-group">
							<label class="col-md-2 control-label">SWIFT Code</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_SWIFT_CODE" id="BANK_SWIFT_CODE" class="form-control" placeholder="BANK_SWIFT_CODE" />
							</div>
						    </div>
							     <div class="form-group">
							<label class="col-md-2 control-label">Operation Currency</label>
							<div class="col-md-9">
							<section class="col col-12">
							<select name="BANK_ACNT_CCY_CODE" id="BANK_ACNT_CCY_CODE" class="form-control">
							    <option >BANK_ACNT_USERID</option>
							    <?php if (count($currency) > 0 )
									{
									foreach ($currency as $row)
									{
									?>
									<option value="<?php echo $row['CCY_CODE']; ?>"><?php echo $row['CCY_DESC']; ?></option>
								       <?php } }?>   
								</select>
							</section>
							</div>
						    </div>
							     <div class="form-group">
							<label class="col-md-2 control-label">Minimum Balance</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_MIN_BAL" id="BANK_MIN_BAL" class="form-control" placeholder="BANK_MIN_BAL" />
							</div>
						    </div>
							      <div class="form-group">
							<label class="col-md-2 control-label">Online Banking User ID</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ACNT_USERID" id="BANK_ACNT_USERID" class="form-control" placeholder="BANK_ACNT_USERID" />
							</div>
						    </div>
							       <div class="form-group">
							<label class="col-md-2 control-label">AC Manager</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ACNT_MANAGER" id="BANK_ACNT_MANAGER" class="form-control" placeholder="BANK_ACNT_MANAGER" />
							</div>
						    </div>
							   							       
                                                          <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">  
							</div>
						    </div>
							  <div class="form-group">
							<label class="col-md-2 control-label">&nbsp;</label>
							<div class="col-md-9">  
							</div>
						    </div>
							  <div class="form-group">
							<label class="col-md-2 control-label">Work Days</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_WORK_DAYS" id="BANK_WORK_DAYS" class="form-control" placeholder="BANK_WORK_DAYS" />
							</div>
						    </div>
							    <div class="form-group">
							<label class="col-md-2 control-label">Work Time</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_WORK_TIME" id="BANK_WORK_TIME" class="form-control" placeholder="BANK_WORK_TIME" />
							</div>
						    </div>
							     <div class="form-group">
							<label class="col-md-2 control-label">Clearing TIme</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_CLEAR_TIME" id="BANK_CLEAR_TIME" class="form-control" placeholder="BANK_CLEAR_TIME" />
							</div>
						    </div>
							      <div class="form-group">
							<label class="col-md-2 control-label">From Date</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ACNT_FROM_DT" id="BANK_ACNT_FROM_DT" class="form-control datepicker-txn" placeholder="BANK_ACNT_FROM_DT" />
							</div>
						    </div>
							       <div class="form-group">
							<label class="col-md-2 control-label">Upto Date</label>
							<div class="col-md-9">
							    <input type="text" name="BANK_ACNT_UPTO_DT" id="BANK_ACNT_UPTO_DT" class="form-control datepicker-txn" placeholder="BANK_ACNT_UPTO_DT" />
							</div>
						    </div>
						</div>
						</div>
						 </div>
					   
					    <div id="nav-pills-tab-3" class="tab-pane fade">
						<div class="row">
						    <div class="widget-body">
							<div class="table-responsive">
							    <table class="table table-bordered">
								<thead>
								    <tr>
									<th><center>Line</center></th>
									<th><center>File </center></th>
									<th><center>Description</center></th>
									<th><center>Added By</center></th>
									<th><center>Added On</center></th>
								    </tr>
								</thead>
								<tbody>
								    <tr class="odd_file">
								       <td>
									<input type="text" id="BD_LINE " name="BD_LINE[]" class="form-control" value="1"  placeholder="BD_LINE " />
								    </td>
								    <td>
									<input type="file" data-filename-placement="inside" class="btn btn-success  form-control"  id="BD_FILE_NAME" name="userfile[]">
								    
								    </td>
								    <td>
									<input type="text" id="BD_DESC " name="BD_DESC[]" class="form-control"  placeholder="BD_DESC" />
								    </td>
								    <td>
									<input type="text" id="BD_FROM_DT " name="BD_FROM_DT[]" class="form-control datepicker-txn"  placeholder="BD_FROM_DT" />
								    </td>
								    <td>
									<input type="text" id="BD_UPTO_DT " name="BD_UPTO_DT[]" class="form-control datepicker-txn"  placeholder="BD_UPTO_DT" />
								    </td>
								    
								    <td><button type="button" class="btn btn-add2 btn-sm btn-primary" data-template="textbox">Add</button></td>
								    
								    </tr>
								    <tr class="odd_file hide" id="optionTemplate2">
									<td>
									    <input type="text" id="BD_LINE" name="BD_LINE[]" class="form-control"  placeholder="BD_LINE" />
									</td>
									<td>
									<input type="file" id="BD_FILE_NAME" name="userfile[]"  class="btn btn-success form-control"  placeholder="BD_FILE_NAME" />
									</td>
									<td>
									    <input type="text" id="BD_DESC" name="BD_DESC[]" class="form-control"  placeholder="BD_DESC" />
									</td>
									<td>
									    <input type="text" id="BD_FROM_DT" name="BD_FROM_DT[]" class="form-control datepicker-txn"  placeholder="BD_FROM_DT" />
									</td>
									<td>
									    <input type="text" id="BD_UPTO_DT" name="BD_UPTO_DT[]" class="form-control datepicker-txn"  placeholder="BD_UPTO_DT" />
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
                               
				
				    <input type="submit" name="Save"class="btn btn-sm btn-success"  value="Save">
                                
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
            BANK_CODE: {
		message: 'The BANK CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The BANK CODE is required and can\'t be empty'
                    }
                }
            },
	     BANK_DESC: {
		message: 'The DESCRIPTION  is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The DESCRIPTION  is required and can\'t be empty'
                    }
                }
            },
	    BANK_ALIAS: {
		message: 'The BANK ALIAS  is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The BANK ALIAS  is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACTIVE_YN: {
		message: 'The CHECK BOX  is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CHECK BOX  is required and can\'t be empty'
                    }
                }
            },
	    BANK_ADD1: {
		message: 'The ADDRESS1 is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ADDRESS1 is required and can\'t be empty'
                    }
                }
            },
	    BANK_ADD2: {
		message: 'The ADDRESS2 is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ADDRESS2 is required and can\'t be empty'
                    }
                }
            },
	    BANK_ADD3: {
		message: 'The ADDRESS3 is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ADDRESS3 is required and can\'t be empty'
                    }
                }
            },
	    BANK_ADD4: {
		message: 'The ADDRESS4 is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ADDRESS4 is required and can\'t be empty'
                    }
                }
            },
            BANK_CN_CODE: {
		message: 'The COUNTRY CODE is not valid',
                trigger:'blur',
		validators: {
		    notEmpty: {
                        message: 'The COUNTRY CODE is required and can\'t be empty'
                    },
		    
                }
            },
	    
	     BANK_ST_CODE: {
		message: 'The STATE CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The STATE CODEis required and can\'t be empty'
                    }
                }
            },
	     BANK_CT_CODE: {
		message: 'The CITY CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CITY CODE is required and can\'t be empty'
                    }
                }
            },
	     BANK_POSTAL: {
		message: 'The POSTAL CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The POSTAL CODE is required and can\'t be empty'
                    }
                }
            },
	     BANK_MOBILE: {
		message: 'The MOBILE NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The MOBILE NUMBER is required and can\'t be empty'
                    }
                }
            },
	     
	   BANK_PHONE: {
		message: 'The PHONE NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The PHONE NUMBER is required and can\'t be empty'
                    }
                }
            },
	    BANK_FAX: {
		message: 'The FAX NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The FAX NUMBER is required and can\'t be empty'
                    }
                }
            },
	    BANK_EMAIL: {
		message: 'The EMAIL is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The EMAIL is required and can\'t be empty'
                    }
                }
            },
	    BANK_WEB_SITE: {
		message: 'The WEBSITE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The WEBSITE is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_NUMBER: {
		message: 'The ACCOUNT NUMBER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACCOUNT NUMBER is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_IBAN: {
		message: 'The IBAN CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The IBAN CODE is required and can\'t be empty'
                    }
                }
            },
	    BANK_SWIFT_CODE: {
		message: 'The SWIFT CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The SWIFT CODE is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_CCY_CODE: {
		message: 'The ACCOUNT CURRENCY CODE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACCOUNT CURRENCY CODE is required and can\'t be empty'
                    }
                }
            },
	    BANK_MIN_BAL: {
		message: 'The MINIMUM BALANCE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The MINIMUM BALANCE is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_USERID: {
		message: 'The BANK ACCOUNT USER ID is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The BANK ACCOUNT USER ID is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_MANAGER: {
		message: 'The ACCOUNT MANAGER is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACCOUNT MANAGER is required and can\'t be empty'
                    }
                }
            },
	    BANK_WORK_DAYS: {
		message: 'The WORK DAYS is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The WORK DAYS is required and can\'t be empty'
                    }
                }
            },
	    BANK_WORK_TIME: {
		message: 'The WORK TIME is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The WORK TIME is required and can\'t be empty'
                    }
                }
            },
	    BANK_CLEAR_TIME: {
		message: 'The CLEAR TIME is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The CLEAR TIME is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_FROM_DT: {
		message: 'The ACCOUNT FROM DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACCOUNT FROM DATE is required and can\'t be empty'
                    }
                }
            },
	    BANK_ACNT_UPTO_DT: {
		message: 'The ACCOUNT UPTO DATE is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The ACCOUNT UPTO DATE is required and can\'t be empty'
                    }
                }
            },
	   
	   
	}
    });
});
</script>
<script>
    
    
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
    
    $("#BANK_CN_CODE").change(function() {
    var cn_code=$('option:selected', this).val() ;
  
    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Finance/ajaxstate",
    data:{cn_code:cn_code} ,
    success: function (responseData) {
    $('*#BANK_ST_CODE').html(responseData);
    dropdown();
    
    },
    });
    });
    });
    
    $(function(){
    
    $("#BANK_ST_CODE").change(function() {
    var st_code=$('option:selected', this).val() ;
    var cn_code=$('option:selected', "#BANK_CN_CODE").val() ;

    $.ajax({
    type: "POST",                                
    url: "<?=base_url()?>Finance/ajaxcity",
    data:{st_code:st_code,cn_code:cn_code} ,
    success: function (responseData) {
  
    $('*#BANK_CT_CODE').html(responseData);
    dropdown();
    },
    });
    });
    });

 </script>




</body>
</html>

