	    <!--Author: Vinod
	    Created on: 04/03/15
	    Modified on: 16/03/15-->
	    <!-- begin #content -->
	    <?php
		$status =$this->session->flashdata('status');
	    ?>
	    <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li>Logistics</li>
		    <li class="active">Team Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Team Master in our spine<small> You may add Team Master here...</small></h1>
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
				<h4 class="panel-title">Team Master</h4>
			    </div>
			    <div class="panel-body">
				<p style="color:red"><?php echo $status;?></p>
				<p>
				    <a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>LogisticsController/TeamMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Team Master</span></a>
				</p>
				<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
				    <thead>
					<tr>
					    <th>LGE TEAM CODE</th>
					    <th>LGE CODE</th>
					    <th>LGE NAME</th>
					    <th>LGE DESIG</th>
					    <th>LGE NATIONALITY</th>
					    <th>LGE FROM DATE</th>
					    <th>LGE UPTO DATE</th>
					    <th>ACTION</th>
					</tr>
				    </thead>
				    <tbody>
					 <?php foreach($result as $row){?>
					<tr>
					    <td>
						<?php echo $row['LGE_TEAM_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LGE_CODE']?>
					    </td>
					    <td>
						<?php echo $row['LGE_NAME']?>
					    </td>
					    <td>
						<?php echo $row['LGE_DESIG']?>
					    </td>
					    <td>
						<?php echo $row['LGE_NATIONALITY']?>
					    </td>
					    
					    <td>
						<?php echo $row['LGE_FROM_DT']?>
					    </td>
					    <td>
						<?php echo $row['LGE_UPTO_DT']?>
					    </td>
					    <td>
						<a href="<?php echo base_url('LogisticsController/TeamMaster_Edit/'.$row['LGE_CODE']); ?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
						<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo base_url('LogisticsController/TeamMaster_Delete/'.$row['LGE_CODE'].'/'.$row['LGE_TEAM_CODE']); ?>"onclick="return confirm('Are you sure? you want to delete this?');"><i class="fa fa-trash-o"></i></a>
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
	<!-- end page container -->
	<script>
	    $(document).ready(function()
	    {
		TableManageResponsive.init();
	    });
	</script>
    </body>
</html>