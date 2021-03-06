<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->	<!-- begin #content -->
	<?php $status=$this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Material Issue Transaction</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Material Issue Transaction in our spine<small> You may add country here...</small></h1>
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
		    <h4 class="panel-title">Material Issue Transaction</h4>
		</div>
		<div class="panel-body">
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/MaterialIssueTransaction_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Material Issue Transaction</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
                              <th>Transaction</th>
                              <th>Doc Number</th>
                              <th>Doc Date</th>
			      <th>Description</th>
			      <th>Status</th>
			      <th>Preparer</th>
                              <th>Source Location</th>
                              <th>Action</th>
			</thead>
			<tbody>
			<?php foreach($result as $row){ ?>
			     <tr>
                              <td><?php echo $row['MIH_TXN_CODE']?></td>
                              <td><?php echo $row['MIH_TXN_NO']?></td>
                              <td><?php echo $row['MIH_TXN_DT']?></td>
			      <td><?php echo $row['MIH_DESC']?></td>
			      <td><?php echo $row['MIH_STATUS']?></td>
                              <td><?php echo $row['MIH_PERSON_CODE']?></td>
                              <td><?php echo $row['MIH_SRC_LOCN_CODE']?></td>
                              <td>
                                 <a href="<?php echo site_url('InventoryController/MaterialIssueTransaction_Edit/'.$row['MIH_SYS_ID'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
                                 <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('InventoryController/MaterialIssueTransaction_Delete/'.$row['MIH_SYS_ID'].'/'.$row['MIH_LANG_CODE'].'/'.$row['MIH_SEND_UID'])?>" onclick="return confirm('Are you sure you want to delete this ?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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

