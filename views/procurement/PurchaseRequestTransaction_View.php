<!--Author: Ezhilarasan.T
Created on: 04/03/15
Modified on: 21/03/15
-->
	<?php
	    $status = $this->session->flashdata('status');
	?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		    <li><a href="javascript:;">Purchase Request Transaction</a></li>
                   
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Purchase Request Transaction in our spine<small> You may add Shipment Master here...</small></h1>
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
		    <h4 class="panel-title">View Purchase Request Transaction</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url('procurement/PurchaseRequestTransaction_Add'); ?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Purchase Request Transaction</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th data-class="expand">Txn Date</th>
				<th data-hide="phone,tablet">Txn Code</th>
				<th data-hide="phone,tablet">Txn No</th>
				<th data-hide="phone,tablet">Requested By</th>
				<th data-hide="phone,tablet">Location</th>
				<th data-hide="phone,tablet">Status</th>
				<th data-hide="phone,tablet">Action</th>                                           
			    </tr>
			</thead>
			<tbody>
					 <?php if(count($PurchaseRequestTransaction) > 0)
					 {
						foreach($PurchaseRequestTransaction as $PurchaseRequestTransaction)
						{
					    ?>
					<tr>  					    
						    <td><?php echo $PurchaseRequestTransaction["PRQH_TXN_DT"]; ?></td>					    
						    <td><?php echo $PurchaseRequestTransaction["PRQH_TXN_CODE"]; ?></td>
						    <td><?php echo $PurchaseRequestTransaction["PRQH_TXN_NO"]; ?></td>
						    <td><?php echo $PurchaseRequestTransaction["PRQH_PERSON_CODE"]; ?></td>
						    <td><?php echo $PurchaseRequestTransaction["PRQH_DLV_LOCN_CODE"]; ?></td>
						    <td></td>
						    <td>
							<a href="<?php echo site_url('Procurement/PurchaseRequestTransaction_Edit/'.$PurchaseRequestTransaction['PRQH_SYS_ID'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i> </a>&nbsp;&nbsp;
							<a href="<?php echo site_url('Procurement/PurchaseRequestTransaction_Delete/'.$PurchaseRequestTransaction['PRQH_SYS_ID'])?>" class="btn btn-xs btn-danger" data-toggle="modal" onclick="return confirm('Are you sure you want to delete?');"  ><i class="fa  fa-trash-o" ></i>
							</a>						
						    </td> 
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