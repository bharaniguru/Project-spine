<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 19/03/15
-->	<!-- begin #content -->
<?php $status = $this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Stock Adjustment Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Stock Adjustment Transaction in our spine<small> You may add country here...</small></h1>
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
			<p style="color:red"><?php echo $status; ?></p>
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">View Stock Adjustment Transaction</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/StockAdjustmentTransaction_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Goods Receipt Transaction</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th>Txn Date</th>
				<th>Txn Code</th>
				<th>Txn No</th>
				<th>Descruption</th>
				<th>Location</th>
				<th>Status</th>
				<th>Action</th>
				
			    </tr>
			</thead>
			<tbody>
			
			    <?php foreach($view as $VSAT)
			    { ?><tr>
			    <td><?php echo $VSAT['SAH_TXN_DT'];  ?></td>
			    <td><?php echo $VSAT['SAH_TXN_CODE']; ?></td>
			    <td><?php  echo $VSAT['SAH_TXN_NO']; ?></td>
			    <td><?php  echo $VSAT['SAH_DESC']; ?></td>
			    <td><?php  echo $VSAT['SAH_LOCN_CODE']; ?></td>
			    <td><?php  echo $VSAT['SAH_STATUS']; ?></td>
			    <td>
				<a href="<?php echo site_url('InventoryController/StockAdjustmentTransaction_Edit/'.$VSAT['SAH_SYS_ID'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
				<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo base_url("InventoryController/StockAdjustmentTransaction_Delete/".$VSAT['SAH_SYS_ID']) ?>" onclick="return confirm('Are you sure you want to delete this showroom?');"  ><i class="fa  fa-trash-o" ></i>  </a>
			    </td>
			    </tr>
			    <?php } ?>
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
			TableManageResponsive.init();
		});
	</script>
