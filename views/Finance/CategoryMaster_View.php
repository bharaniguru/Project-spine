<?php
$status = $this->session->flashdata('status');
?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">View Category Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Category Master<small> You may add Category Master here...</small></h1>
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
		    <h4 class="panel-title">Category Master</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('Finance/CategoryMaster_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Category Master</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    
		    
		    
		    <div class="table-responsive" style="border: none">
		        <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th data-class="expand">CATG CODE</th>
				<th data-hide="phone,tablet">CATG DESC</th>
				<th data-hide="phone,tablet">Action</th>  
			    </tr>
			</thead>
			<tbody>
			     <?php if(count($categorymaster) > 0)
					 {
						foreach($categorymaster as $row)
						{
					    ?>
			   
			    <tr class="even gradeC">
				<td><?php echo $row['CATG_CODE']; ?></td>					    
				<td><?php echo $row['CATG_DESC']; ?></td>
				
				
				<td>
				<a href="<?php echo site_url('Finance/CategoryMaster_Edit/'.$row['CATG_CODE'])?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> </a>
				<a href="<?php echo site_url('Finance/CategoryMaster_Delete/'.$row['CATG_CODE'])?>"onclick="return confirm('Are you sure you want to delete?');"class="btn btn-danger btn-xs"><i class="fa fa-bitbucket"></i> </a></td>
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

<script>
    $(document).ready(function() {
    //App.init();
    TableManageResponsive.init();
    });
</script>	
