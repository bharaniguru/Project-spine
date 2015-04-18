<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 19/03/15
-->	<!-- begin #content -->
<?php $status=$this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Goods Receipt Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Goods Receipt Transaction in our spine<small> You may add country here...</small></h1>
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
		    <h4 class="panel-title">View Goods Receipt Transaction</h4>
		</div>
		<div class="panel-body">
		    <!--<p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/AddGoodsReceiptCostingTransaction')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Goods Receipt Transaction</span></a>
		    </p>-->
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th>GRH SYS ID</th>
				<th>GRH COMP CODE</th>
				<th>GRH LANG CODE</th>
				<th>GRH TXN CODE</th>
				<th>GRH TXN NO</th>
				<th>GRH TXN DT</th>
				<th>GRH DOC REF</th>
				<th>GRH LOCN CODE</th>
				<th>GRH SUPL CODE</th>
				<th>GRH INV NO</th>
				<th>GRH INV DT</th>
				<th>GRH BILL OF ENTRY</th>
				<th>GRH NO OF PKG</th>
				<th>GRH TYPE OF PKG</th>
				<th>GRH STATUS</th>
				<th>Action </th>
			    </tr>
			</thead>
			<tbody>
			<?php foreach($result as $row) { ?>
			    <tr>
				<td><?php echo $row['GRH_SYS_ID']?></td>
				<td><?php echo $row['GRH_COMP_CODE']?></td>
				<td><?php echo $row['GRH_LANG_CODE']?></td>
				<td><?php echo $row['GRH_TXN_CODE']?></td>
				<td><?php echo $row['GRH_TXN_NO']?></td>
				<td><?php echo $row['GRH_TXN_DT']?></td>
				<td><?php echo $row['GRH_DOC_REF']?></td>
				<td><?php echo $row['GRH_LOCN_CODE']?></td>
				<td><?php echo $row['GRH_SUPL_CODE']?></td>
				<td><?php echo $row['GRH_INV_NO']?></td>
				<td><?php echo $row['GRH_INV_DT']?></td>
				<td><?php echo $row['GRH_BILL_OF_ENTRY']?></td>
				<td><?php echo $row['GRH_NO_OF_PKG']?></td>
				<td><?php echo $row['GRH_TYPE_OF_PKG']?></td>
				<td><?php echo $row['GRH_STATUS']?></td>
				<td><a href="<?php echo site_url('InventoryController/GoodsReceiptCostingTransaction_Edit/'.$row['GRH_SYS_ID'])?>" class="btn btn-xs btn-primary" ><i class="fa fa-shopping-cart"></i> </a></td>
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

