<!--Author: Pravin Kumar.P
Updated By: Gobi C
Created on: 04/03/15
Modified on: 16/03/15
-->
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
		    <li class="active">Userdefinition</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all definition in our spine<small> You may add country here...</small></h1>
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
		    <h4 class="panel-title">View definition</h4>
		</div>
		<div class="panel-body">
		    
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Apps/UserDefinition_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add UserDefinition</span></a>
		    </p>
		     <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				<th>User ID</th>
				<th>Person Image</th>
				<th>Person Code</th>
				<th>Cell Phone</th>
				<th>Email ID</th>
				<th>From Date</th>
				<th>Upto Date</th>
				<th>Active?</th>
				<th>Action</th>
			    </tr>
			</thead>
			<tbody>
			    <?php foreach($result as $row) { ?>
                                 <tr>
                                    <td><?php echo $row['USER_ID'];?></td>
                                    <td><?php echo $row['USER_IMAGE_FILE'];?></td>
                                    <td><?php echo $row['USER_PERS_CODE'];?></td>
                                    <td><?php echo $row['USER_CELL_PHONE'];?></td>
                                    <td><?php echo $row['USER_EMAIL'];?></td>
                                    <td><?php echo $row['USER_FROM_DT'];?></td>
                                    <td><?php echo $row['USER_UPTO_DT'];?></td>
                                    <td><?php echo $row['USER_PW_CHANGE_YN'];?></td>
                                    <td><a href="<?php echo site_url('Apps/UserDefinition_Edit/'.$row['USER_ID']); ?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i> </a>&nbsp;&nbsp;
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Apps/UserDefinition_Delete/'.$row['USER_ID']."/".$row['USER_COMP_CODE']); ?>" onclick="return confirm('Are you sure you want to delete this file and Its Lines?');"  ><i class="fa  fa-trash-o" ></i> </a>
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
			//App.init();
			//FormPlugins.init();
			TableManageResponsive.init();
		});
	</script>
