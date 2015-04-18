    <!--Author: Gobi.C-->
    <!--Created Date:04-03-2015-->
    <!--Modified Date: 16-03-2015-->
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
		     <li><a href="javascript:;">Authentication</a></li>
		    <li class="active">Responsibility Definition</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all  Responsibility Definition in our spine<small> You may Add Responsibility Definition here...</small></h1>
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
		    <h4 class="panel-title">Responsibility Definition</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Apps/ResponsibilityDefinition_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Responsibility Definition</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
				 <tr>
                                    <th data-class="expand">Responsibility</th>
                                    <th data-hide="phone">Description</th>
                                    <th data-hide="phone">From Date</th>
                                    <th data-hide="phone">To Date</th>
                                    <th data-hide="phone">Active?</th>
                                    <th data-hide="phone,tablet">Action</th>
                                 </tr>
			    </tr>
			</thead>
			<tbody>
			   <?php
                                    foreach($data as $row){
                                    ?>
                                 <tr>
                                   
                                    <td><?php   echo $row['RSPH_CODE']; ?> </td>
                                    <td><?php  echo $row['RSPH_DESC']; ?></td>
				    <td><?php  echo $row['RSPH_FROM_DT']; ?></td>
                                    <td><?php  echo $row['RSPH_UPTO_DT']; ?></td>
				    <td><?php  if($row['RSPH_ACTIVE_YN']!="Y")echo "N"; else echo "Y" ; ?></td>
                                    
                                    <td>
                                       <a href="<?php echo base_url('Apps/ResponsibilityDefinition_Edit/'.$row['RSPH_CODE']) ?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Apps/ResponsibilityDefinition_Delete/'.$row['RSPH_CODE'])?>" onclick="return confirm('Are you sure you want to delete complete responsibility with its Lines?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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
			TableManageResponsive.init();
		});
	</script>

