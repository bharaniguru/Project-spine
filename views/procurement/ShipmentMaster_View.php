<!--Author: Gobi.C
Created on: 04/03/15
Modified on: 21/03/15
-->

	<?php
	    $status = $this->session->flashdata('status');
	?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Procurement</a></li>
		    <li><a href="javascript:;">Shipment Master</a></li>
                   
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Shipment Master in our spine<small> You may add Shipment Master here...</small></h1>
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
		    <h4 class="panel-title">View Shipment Master</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url('procurement/ShipmentMaster_Add'); ?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Shipment Master</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
                                <th data-class="expand">Code</th>
				<th data-hide="phone,tablet">Description</th>
				<th data-hide="phone,tablet">From Dt</th>
				<th data-hide="phone,tablet">Upto Dt</th>
				<th data-hide="phone,tablet">Action</th>
                            </tr>
			</thead>
			<tbody>
					 <?php if(count($shipment) > 0)
					 {
						foreach($shipment as $row)
						{
					    ?>
					<tr>  
						    <td><?php echo $row['SH_CODE']; ?></td>					    
						    <td><?php echo $row['SH_DESC']; ?></td>
						    <td><?php echo $row['SH_FROM_DT']; ?></td>
						    <td><?php echo $row['SH_UPTO_DT']; ?></td>
						    <td>
							<a href="<?php echo site_url('Procurement/ShipmentMaster_Edit/'. $row['SH_CODE'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i> </a>&nbsp;&nbsp;
							<a class="btn btn-xs btn-danger" href="<?php echo site_url('Procurement/ShipmentMaster_Delete/'.$row['SH_CODE'])?>" href="delete_showroom.php" onclick="return confirm('Are you sure you want to delete?');"  ><i class="fa  fa-trash-o" ></i>
							</a>						
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