	<?php
	    $status = $this->session->flashdata('status');
	?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		    <li><a href="javascript:;"></a></li>
		    <li><a href="javascript:;"></a></li>
		    <li class="active">Supplier Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Supplier Master in our spine<small> You may add Supplier Master here...</small></h1>
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
		    <h4 class="panel-title">Supplier Master</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Procurement/SupplierMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Supplier Master</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <div class="table-responsive">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th>Supl Code</th>
				<th>Supl Name</th>
				<th>Address</th>
				<th>Contact Person</th>
				<th>Mobile No</th>
				<th>Phone No</th>
				<th>Active?</th>
				<th>Action</th>
			    </tr>
			</thead>
			<tbody>
			<?php if(count($supplier) > 0)
			{
			    foreach($supplier as $row)
			    {
			?>
			<tr>
			    <td><?=$row['SUPL_AC_CODE']; ?></td>
			    <td><?=$row['SUPL_PERSON_FIRST_NAME'].' '.$row['SUPL_PERSON_MIDDLE_NAME'].' '.$row['SUPL_PERSON_LAST_NAME']; ?></td>
			    <td><?=$row['SUPL_ADD1']; ?></td>
			    <td><?php echo $row['SUPL_PERSON_NAME']; ?></td>
			    <td><?php echo $row['SUPL_MOBILE']; ?></td>
			    <td><?php echo $row['SUPL_PHONE']; ?></td>
			    <td><span><input  <?=$row['SUPL_ACTIVE_YN'] == "Y" ? 'checked="checked"' : '';?> disabled class="form-control" type="checkbox" checked="checked"   value="Y" >
			   <td>
				<a href="<?php echo base_url('Procurement/SupplierMaster_Edit/'.$row['SUPL_AC_CODE']);//.$row['ST_CODE'] ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
				<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Procurement/SupplierMaster_Delete/'.$row['SUPL_AC_CODE'])?>" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash-o"></i></a>
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