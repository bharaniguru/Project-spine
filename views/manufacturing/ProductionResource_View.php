<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
 <? $CI =& get_instance();?>
 <?php
 $status = $this->session->flashdata('status');
 ?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Manufacturing </a></li>
		    <li class="active">Product Resource</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Product Resource in our spine<small> You may add transaction here...</small></h1>
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
		    <h4 class="panel-title">Product Resource</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>ManufacturingController/ProductionResource_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Production Resource</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
                              <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                 <thead>

                                    <tr>
                                       <th>Resource Code</th>
                                       <th>Resource Name</th>
				        <th>Role</th>
                                       <th>Supervisor</th>
				        <th>Manager</th>
					<th>Active</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    foreach($value as $row){
                                    ?>
				    <tr>
                                       <td><?php  echo $row['RS_CODE'];?></td>
                                       <td><?php  echo $row['RS_NAME']; ?></td>
                                       <td><?php  echo $row['RS_ROLE_CODE']; ?></td>
                                       <td><?php  echo $row['RS_SUPERVISOR_CODE']; ?></td>
                                       <td><?php  echo $row['RS_MANAGER_CODE']; ?></td>
                                       <td><?php if($row['RS_ACTIVE_YN']=='Y') echo "Y"; else "N"; ?></td>				       
                                       
                                       <td>
                                          <a href='<?php echo site_url('ManufacturingController/ProductionResource_Edit/'.$row['RS_CODE']);?>' class='btn btn-xs btn-primary' ><i class='fa  fa-edit' ></i>  </a>&nbsp;&nbsp;
					  <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('ManufacturingController/ProductResource_Delete/'.$row['RS_CODE']);?>" onclick="return confirm('Are you sure you want to delete this?');"  ><i class="fa  fa-trash-o" ></i>  </a>
                                       </td>
                                    </tr>
                                    <?php }
                                    ?>
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
	<script>
		$(document).ready(function() {
			TableManageResponsive.init();
		});
	</script>
<!-- end page container -->
</body>
</html>
