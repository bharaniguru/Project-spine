<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->	<!-- begin #content -->
	<?php $status=$this->session->flashdata('status');?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Material Return Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Material Return Transaction in our spine</h1>
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
		    <h4 class="panel-title">Material Return Transaction</h4>
		</div>
		<div class="panel-body">
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/MaterialReturnTransaction_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Material Issue Transaction</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
                              <th>Transaction</th>
                              <th>Doc Number</th>
                              <th>Doc Date</th>
			      <th>Description</th>
			      <th>Status</th>
			      <th>Source Location</th>
                              <th>Action</th>
			</thead>
			<tbody>
			<?php foreach($result as $row){ ?>
			<tr>
			    <td><?php echo $row['MRH_TXN_CODE']?></td>
			    <td><?php echo $row['MRH_TXN_NO']?></td>
			    <td><?php echo $row['MRH_TXN_DT']?></td>
			    <td><?php echo $row['MRH_DESC']?></td>
			    <td><?php echo $row['MRH_STATUS']?></td>
			    <td><?php echo $row['MRH_SRC_LOCN_CODE']?></td>
			    <td>
				<a href="<?php echo site_url('InventoryController/MaterialReturnTransaction_Edit/'.$row['MRH_SYS_ID'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
				<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('InventoryController/MaterialReturnTransaction_Delete/'.$row['MRH_SYS_ID'])?>" onclick="return confirm('Are you sure you want to delete this transaction ?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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

<script>
		$(document).ready(function() {
		    TableManageResponsive.init();
		    //TableManageCombine.init();
			
		});
	</script>
<!-- end page container -->
</body>
</html>


