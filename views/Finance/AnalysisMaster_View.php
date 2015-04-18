	<!-- begin #content -->
<?php
$status = $this->session->flashdata('status');
?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">View Analysis Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Analysis Master<small> You may add Analysis Master here...</small></h1>
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
		    <h4 class="panel-title">Analysis Master</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('Finance/AnalysisMaster_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Analysis Master</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
	    
		    <div class="table-responsive" style="border: none">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
		      <thead>
			    <tr>
				<th data-class="expand">Code</th>
				<th data-hide="phone,tablet">Description</th>
				<th data-hide="phone,tablet">From Date</th>
		                <th data-hide="phone,tablet">Upto Date</th>
				<th data-hide="phone,tablet">Active Y/N</th>
				<th>Action</th>
			        
			    </tr>
			</thead>
			<tbody>
			    <?php if(count($analysismaster) > 0)
					 {
						foreach($analysismaster as $row)
						{
					    ?>
			   
			    <tr class="even gradeC">
				<td><?php echo $row['ANLH_CODE']; ?></td>					    
				<td><?php echo $row['ANLH_DESC']; ?></td>
				<td><?php echo $row['ANLH_FROM_DT']; ?></td>
				<td><?php echo $row['ANLH_UPTO_DT']; ?></td>				    
				<td><?php echo $row['ANLH_ACTIVE_YN']; ?></td>
				
				<td>
				<a href="<?php echo site_url('Finance/AnalysisMaster_Delete/'.$row['ANLH_CODE'])?>" onclick="return confirm('Are you sure you want to delete?');"class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i> </a>
				<a href="<?php echo site_url('Finance/AnalysisMaster_Edit/'.$row['ANLH_CODE'])?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> </a></td>
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
