	
	
	<!--
	functionality By: Gobi. C
	Created on: 04/03/15
	Modified on: 16/03/15-->
	 
	<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
	<? $CI =& get_instance();?>
	<?php
	$status = $this->session->flashdata('status');
	?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>
		    <li class="active">City</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Cities in our spine<small> You may add City here...</small></h1>
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
		    <h4 class="panel-title">View City</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Apps/City_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add City</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th>City Code</th>
				<th>Description</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Country</th>
                                <th>State</th>
				<th>Active?</th>
				<th>Action</th>
			    </tr>
			</thead>
			<tbody>
			    <?php
			    if(count($city)>0)
			    {
			    foreach($city  as $row)
			    {?>
			    <tr class="even gradeC">
				<td><?php echo $row['CT_CODE']?></td>
				<td><?php echo $row['CT_DESC']?></td>
				<td><?php echo $row['CT_LATITUDE']?></td>
				<td><?php echo $row['CT_LONGITUDE']?></td>
				<td><?php echo $row['CT_CN_CODE']?></td>
				<td><?php echo $row['CT_ST_CODE']?></td>
				<td><?php if( $row['CT_ACTIVE_YN']=="Y") {echo "Y";} else {echo "N";}?></td>
				<td><a  href="<?php echo base_url('Apps/City_Edit/'.$row['CT_CODE'])?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> </a>
				<a href="<?php echo base_url('Apps/City_Delete/'.$row['CT_CODE'])?>" class="btn btn-danger btn-xs"onclick="return confirm('Are you sure you want to delete this?');"  >  <i class="fa  fa-trash-o" >  </i>  </a></td>
			    </tr>
			    <?php } }?>
			  
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
			//FormPlugins.init();
			TableManageResponsive.init();
		});
	</script>

