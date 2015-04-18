<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->	<!-- begin #content -->
	<?php $status=$this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Item Sub Type Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Item Sub Type Master in our spine<small> You may add here...</small></h1>
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
		    <h4 class="panel-title">View Item Sub Type Master</h4>
		</div>
		<div class="panel-body">
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/ItemSubTypeMaster_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Item Sub Type Master</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			      <th>Item Sub Type Code</th>
                              <th>Description</th>
                              <th>Parent item Item</th>
                              <th>Acive</th>
			      <th>Action</th>
			</thead>
			<tbody>
			<?php foreach($result as $row){ ?>
			    <tr>
				<td><?php echo $row['IS_CODE']?></td>
				<td><?php echo $row['IS_DESC']?></td>
				<td><?php echo $row['IS_IT_CODE']?></td>
				<td><?php echo $row['IS_ACTIVE_YN']?></td>
				<td><a href="<?php echo site_url('InventoryController/ItemSubTypeMaster_Edit/'.$row['IS_CODE'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
				     <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('InventoryController/ItmTypSubMst_Delete/'.$row['IS_CODE'].'/'.$row['IS_LANG_CODE'].'/'.$row['IS_CR_UID'])?>" onclick="return confirm('Are you sure you want to delete this showroom?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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
