<!--Author: Gobi.C
Created on: 04/03/15
Modified on: 18/03/15
-->


	<?php
	$status = $this->session->flashdata('status');
	?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		    <li><a href="javascript:;">Enquiry Dashboard</a></li>
                   
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Enquiry Dashboard in our spine<small> ...</small></h1>
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
		    <h4 class="panel-title">View Enquiry Dashboard</h4>
		</div>
		<div class="panel-body">
		   <form id="form_validation  " class="form-horizontal  form12">
			    <!--<div class="row">
				<div class="form-group">
                                    <label class="col-md-2 control-label">Enquiry Options :</label>
                                    <div class="col-md-8">
                                        <label class="radio-inline col-md-3">
					    <input type="radio" name="radio-inline">
					    Pending Request
                                        </label>
					
                                        <label class="radio-inline col-md-3">
                                            <input type="radio" name="radio-inline">
					    Re-Order level
                                            </label>
					
					<label class="radio-inline col-md-3">
					    <input type="radio" name="radio-inline">
					    ABoth
					</label>
					
					
                                    </div>
				    <div class="col-sm-1">
				    <input type="submit" class="btn  btn-sm btn-default" name="submit" value="Go">
				    </div>
                                </div>
			    </div>-->
			    
			   
			</form>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
						<th data-class="expand">Txn Date</th>
						<th data-hide="phone,tablet">Txn Code</th>
						<th data-hide="phone,tablet">Txn No</th>
						<th data-hide="phone,tablet">Required By</th>
						<th data-hide="phone,tablet">Location</th>
						<th data-hide="phone,tablet">Item Code</th>
						<th data-hide="phone,tablet">Item Description</th>
						<th data-hide="phone,tablet">UOM</th>
						<th data-hide="phone,tablet">Current Stock</th>
						<th data-hide="phone,tablet">Re-Order Level</th>
						<th data-hide="phone,tablet">Requested Qty</th>
						<th data-hide="phone,tablet">Select</th>
						
					    </tr>
			</thead>
			<tbody>
					 <?php if(count($EnquiryBoard) > 0)
					 {
						foreach($EnquiryBoard as $row)
						{
					    ?>
					<tr>  									    
						<td><?php echo $row["PRQ_TXN_CODE"]; ?></td>
						<td><?php echo $row["PRQ_TXN_NO"]; ?></td>
						<td><?php echo $row["PRQ_TXN_DT"]; ?></td>
						<td><?php echo $row["PRQ_PERSON_CODE"]; ?></td>
						<td><?php echo $row["PRQ_DLV_LOCN_CODE"]; ?></td>
						<td><?php echo $row["PRQ_ITEM_CODE"]; ?></td>
						<td><?php echo $row["PRQ_ITEM_DESC"]; ?></td>
						<td><?php echo $row["PRQ_UOM_CODE"]; ?></td>
						<td><?php echo $row["PRQ_QTY_BU"]; ?></td>
						<td><?php echo $row["CS_QTY_BU"]; ?></td>
						<td><?php echo $row["ITEM_MIN_STK"]; ?></td>
						<td><label class="checkbox"><input type="checkbox" checked="checked" name="checkbox">
						<i></i></label></td>					    
						
					    </tr>
					<?php }}?>
					
                                    </tbody>
		    </table>
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
			//App.init();
			TableManageResponsive.init();
		});
	</script>