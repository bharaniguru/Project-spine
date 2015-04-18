<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->	<!-- begin #content -->
<?php
    $status = $this->session->flashdata('status');
?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Item Type Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Item Type Master in our spine<small> You may add here...</small></h1>
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
		    <h4 class="panel-title">View Item Type Master</h4>
		</div>
		<div class="panel-body">
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/ItemTypeMaster_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Item Type Master</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			      <th>Item Type</th>
                              <th>Description</th>
                              <th>Parent item Family</th>
                              <th>Active</th>
			      <th>Action</th>
			</thead>
			<tbody>
			<?php foreach($result as $row){ ?>
			    <tr>
				<td><?php echo $row['IT_CODE'];?></td>
				<td><?php echo $row['IT_DESC'];?></td>
				<td><?php echo $row['IT_IF_CODE'];?></td>
				<td><?php echo $row['IT_ACTIVE_YN'];?></td>
				<td><a href="<?php echo site_url('InventoryController/ItemTypeMaster_Edit/'.$row['IT_CODE'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
				     <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('InventoryController/ItmTypeMaster_Delete/'.$row['IT_CODE'].'/'.$row['IT_LANG_CODE'].'/'.$row['IT_CR_UID'])?>" onclick="return confirm('Are you sure you want to delete this ?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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