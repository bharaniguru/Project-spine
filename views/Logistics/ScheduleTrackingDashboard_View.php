	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Schedule Tracking Dashboard</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Schedule Tracking Dashboard in our spine<small>You may add Schedule Tracking Dashboard here...</small></h1>
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
				<h4 class="panel-title">Schedule Tracking Dashboard</h4>
			    </div>
			    <div class="panel-body">
				<!--<p>
				    <a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Logistics_controller/JobTrackingDashboard"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Job Tracking Dashboard</span></a>
				</p>-->
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>Txn Code</th>
					    <th>Doc No</th>
					    <th>Date </th>
					    <th>Customer Info</th>
					    <th>City</th>
					    <th>Requested By</th>
					    <th>Job</th>
					    <th>Distance</th>
					    <th>Approx Time To Reach</th>
					    <th>Job Status</th>
					    <th>Action</th>
					</tr>
				    </thead>
				    <tbody>
					<?php foreach($result as $row){?>
					<tr>
					    <td>
						<?php echo $row['LSL_REF_TXN_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_REF_TXN_NO']?>
					    </td>
					    <td>
						<?php echo $row['LSL_REF_TXN_DT']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CUST_AC_DESC']?><br>
						<?php echo $row['LSL_CONTACT_PERSON']?><br>
						<?php echo $row['LSL_CONTACT_NO']?>
					    </td>
					    <td>
						<?php echo $row['LSL_CT_CODE']?><br>
						<?php echo $row['LSL_CT_AREA_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_LOCN_CODE']?><br>
						<?php echo $row['LSL_REQUESTED_BY']?>
					    </td>
					    <td>
						<?php echo $row['LSL_JOB_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LSL_JOB_STATUS']?>
					    </td>
					    <td></td>
					    <td></td>
					    <td>
						<input type="checkbox" name="TEAM_ACTIVE" value="Y" checked="checked">
						<a class="fa fa-2x fa-truck  btn btn-xs btn-primary" data-toggle="modal" href="<?php echo base_url('LogisticsController/MeasurementTransaction_Add/'.$row['LSL_SYS_ID']);?>"></a> 
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