	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <?php
		$status =$this->session->flashdata('status');
	    ?>
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Vehicle Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Vehicle Master in our spine<small> You may add Vehicle Master here...</small></h1>
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
				<h4 class="panel-title">Vehicle Master</h4>
			    </div>
			    <div class="panel-body">
				<p style="color:red"><?php echo $status;?></p>
				<p>
				    <a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Logisticscontroller/VehicleMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Vehicle Master</span></a>
				</p>
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>VEH CODE</th>
					    <th>VEH DESC</th>
					    <th>VEH MAKE</th>
					    <th>VEH COLOR</th>
					    <th>VEH CITY CODE</th>
					    <th>ACTION</th>
					</tr>
				    </thead>
				    <tbody>
					 <?php foreach($result as $row){?>
					<tr>
					    <td>
						<?php echo $row['VEH_CODE']?>
					    </td>
					    <td>
						<?php echo $row['VEH_DESC']?>
					    </td>
					    <td>
						<?php echo $row['VEH_MAKE']?>
					    </td>
					    <td>
						<?php echo $row['VEH_COLOR']?>
					    </td>
					    
					    <td>
						<?php echo $row['VEH_CITY_CODE']?>
					    </td>
					    <td>
						<a href="<?php echo base_url('LogisticsController/VehicleMaster_Edit/'.$row['VEH_CODE']); ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
						<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo base_url('LogisticsController/VehicleMaster_Delete/'.$row['VEH_CODE'].'/'.$row['LGE_TEAM_CODE']); ?>" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash-o"></i></a>
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
	<script>
	    $(document).ready(function()
	    {
		TableManageResponsive.init();
	    });
	</script>
    </body>
</html>
<!--<script>
$(document).ready(function() {
TableManageResponsive.init();
});
</script>-->