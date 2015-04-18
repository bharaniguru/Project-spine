	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Logistics Dashboard</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Logistics Dashboard in our spine<small>You may add Logistics Dashboard here</small></h1>
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
				<h4 class="panel-title">Logistics Dashboard</h4>
			    </div>
			    <div class="panel-body">
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>Txn Code</th>
					    <th>Doc No</th>
					    <th>Date</th>
					    <th>Customer Name</th>
					    <th>Contact Person</th>
					    <th>Contact No</th>
					    <th>Country</th>
					    <th>State</th>
					    <th>City</th>
					    <th>City Area</th>
					    <th>Requested By</th>
					    <th>Action</th>
					</tr>
				    </thead>
				    <tbody>
					 <?php foreach($result as $row){?>
					<tr>
					    <td>
						<?php echo $row['PJ_TXN_CODE']?>
					    </td>
					    <td>
						<?php echo $row['PJ_TXN_NO']?>
					    </td>
					    <td>
						<?php echo $row['PJ_TXN_DT']?>
					    </td>
					    <td>
						<?php echo $row['PJ_CUST_AC_DESC']?>
					    </td>
					    <td>
						<?php echo $row['PJ_CONTACT_PERSON']?>
					    </td>
					    
					    <td>
						<?php echo $row['PJ_CONTACT_NO']?>
					    </td>
					    <td>
						<?php echo $row['PJ_CN_CODE']?>
					    </td>
					    <td>
						<?php echo $row['PJ_ST_CODE']?>
					    </td>
					    <td>
						<?php echo $row['PJ_CT_CODE']?>
					    </td>
					    <td>
						<?php echo $row['PJ_CT_AR_CODE']?>
					    </td>
					    <td>
						<?php echo $row['PJ_REQUESTED_BY']?>
					    </td>
					    <td>
						<input type="checkbox" name="TEAM_ACTIVE" value="Y" checked="checked">
						<a class="fa fa-2x fa-truck  btn btn-xs btn-primary" data-toggle="modal" href="<?php echo base_url('LogisticsController/ScheduleTransaction_Add');?>"></a> 
					    </td>
					</tr>
					<?php }?>
				    </tbody>
				</table>
				<br>
				<!--<div class="col-md-10 col-xs-12">
				    <div class="col-md-5">
					<div class="col-md-4">
					    <label>Address</label>
					</div>
					<div class="col-md-8">
					    <label class="input">
						<input type="text" name="PJ_ADD1" <?php echo $row['PJ_ADD1']?> class="form-control" placeholder="PJ_ADD1"/>
					    </label>
					    <label class="input">
						<input type="text" name="PJ_ADD1" <?php echo $row['PJ_ADD2']?>class="form-control" placeholder="PJ_ADD2"/>
					    </label>
					    <label class="input">
						<input type="text" name="PJ_ADD1" <?php echo $row['PJ_ADD3']?>class="form-control" placeholder="PJ_ADD2"/>
					    </label>
					    <label class="input">
						<input type="text" name="PJ_ADD1" <?php echo $row['PJ_ADD4']?> class="form-control" placeholder="PJ_ADD2"/>
					    </label>
					</div>
				    </div>
				    <div class="col-md-5">
					<div class="col-md-4">
					    <label>Remarks</label>
					</div>
					<div class="col-md-8">
					    <label class="input">
						<input type="text" name="PJ_DESC"  <?php echo $row['PJ_DESC']?> class="form-control" placeholder="PJ_DESC"/>
					    </label>
					</div>
				    </div>
				</div>-->
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