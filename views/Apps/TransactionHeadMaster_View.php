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
		    <li class="active">Country</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Transaction in our spine<small> You may add transaction here...</small></h1>
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
		    <h4 class="panel-title">Transaction Head Master</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Apps/TransactionHeadMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Transaction</span></a>
		    </p>
		     <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
                              <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                 <thead>
                                    <tr>
                                       <th>Transaction Code </th>
                                       <th>Transaction Description</th>
                                       <th>Transaction Flow Sequence</th>
                                       <!--<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>-->
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    foreach($data1 as $row){
                                    ?>
				    <tr>
                                       <td><?php  echo $row->TXH_CODE; ?></td>
                                       <td><?php  echo $row->TXH_DESC; ?></td>
                                       <td><?php  echo $row->TXH_FLOW_SEQ; ?></td>
                                       
                                       <td>
                                          <a href='<?php echo site_url('Apps/TransactionHeadMaster_Edit/'.$row->TXH_CODE)?>' class='btn btn-xs btn-primary' ><i class='fa  fa-edit' ></i>  </a>&nbsp;&nbsp;
					  <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Apps/TransactionHeadMaster_Delete/'.$row->TXH_CODE)?>" onclick="return confirm('Are you sure you want to delete this?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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
