	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Job Status Dashboard</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Job Status Dashboard in our spine<small> You may add Job Status Dashboard here...</small></h1>
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
				<h4 class="panel-title">Job Status Dashboard</h4>
			    </div>
			    <div class="panel-body">
				<!--<p>
				    <a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Logistics_controller/JobDashboard"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Job Status Dashboard</span></a>
				</p>-->
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>Txn Code</th>
					    <th>Doc No</th>
					    <th>Vehicle</th>
					    <th>Vehicle Description</th>
					    <th>City</th>
					    <th>Total Jobs</th>
					    <th>Completed Job</th>
					    <th>Partially Completed</th>
					    <th>Re Scheduled Jobs</th>
					    <th>Closed Jobs</th>
					    <th>Pending Jobs</th>
					</tr>
				    </thead>
				    <tbody>
					<?php foreach($result as $row){?>
					 <tr>
					    <td>
						<?php echo $row['LSH_TXN_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSH_TXN_NO']?>
					    </td>
					    <td>
						<?php echo $row['LSH_VEHICLE_CODE']?>
					    </td>
					    <td>
						<?php echo $row['VEH_DESC']?>
					    </td>
					    <td>
						<?php echo $row['LSH_CITY_CODE']?>
					    </td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td></td>
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