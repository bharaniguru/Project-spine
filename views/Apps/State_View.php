
	    <!--Author: Vinod
	    functionality By: Gobi. C
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    
	    
	    <? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
	    <? $CI =& get_instance();?>
	    <?php
	    $status = $this->session->flashdata('status');
	    ?>
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>
		    <li class="active">State</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all States in our spine<small> You may add State here...</small></h1>
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
				<h4 class="panel-title">View State</h4>
			    </div>
			    <div class="panel-body">
				<p>
				    <a class="btn btn-primary btn-sm "  href="<?php echo site_url('Apps/State_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add State</span></a>
				</p>
				 <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>State Code</th>
					    <th>Description</th>
					    <th>Latitude</th>
					    <th>Longitiude</th>
					    <th>Country</th>
					    <th>Active?</th>
					    <th>Action</th>
					</tr>
				    </thead>
				    <tbody>
					<?php foreach($result as $row){?>
					<tr>
					    <td>
						<?php echo $row['ST_CODE']?>
					    </td>
					    <td>
						<?php echo $row['ST_DESC']?>
					    </td>
					    <td>
						<?php echo $row['ST_LATITUDE']?>
					    </td>
					    <td>
						<?php echo $row['ST_LONGITUDE']?>
					    </td>
					    <td>
						<?php echo $row['ST_CN_CODE']?>
					    </td>
					    
					    <td>
						<?php if( $row['ST_ACTIVE_YN']=="Y") {echo "Y";} else {echo "N";}?>
						
					    </td>
					    <td>
						<a href="<?php echo base_url('Apps/State_Edit/'.$row['ST_CODE']); ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
						<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo base_url('Apps/State_Delete/'.$row['ST_CODE']); ?>"onclick="return confirm('Are you sure? you want to delete this?');"><i class="fa fa-trash-o"></i></a>
					    </td>
					</tr>
					<?php }?>
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


