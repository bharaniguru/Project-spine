<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>	
<?php
$status = $this->session->flashdata('status');
$Update = $this->session->flashdata('Update');
$Delete = $this->session->flashdata('Delete');
?>

	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Sales</a></li>
		    <li><a href="javascript:;">Customer Master</a></li>
		    <li><a href="javascript:;">View</a></li>
		   
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Customer Master<small> You may view here...</small></h1>
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
		    <h4 class="panel-title">Customer Master View</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Sales/CustomerMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
		    </p>
		     <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($Update)) { echo $Update; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($Delete)) { echo $Delete; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			
                        <thead>
			    <tr>
				<th>Party Type</th>
				<th>Description</th>
                                <th>Account Type</th>
                                <th>Phone</th>
				<th>Action</th>
                            
                              </tr>
                            
			</thead>
                               
                        <tbody>
			    <?php
			    if($cust_mas >0){
				foreach($cust_mas as $row){
				?>
				<tr>
                                <td><?php echo $row['CUST_PARTY_TYPE'];?></td>
                                <td><?php echo $row['CUST_PARTY_DESC'];?></td>
                                <td><?php echo $row['CUST_AC_TYPE'];?></td>
                                <td><?php echo $row['CUST_SITE_PHONE'];?></td>
				<td>
                                 <a class="btn btn-xs btn-primary" href="<?php echo base_url(); ?>Sales/CustomerMaster_Edit/<?php echo $row['CUST_COMP_CODE'];?>/<?php echo $row['CUST_AC_CODE']; ?>"><i class="fa fa-edit" ></i></a>&nbsp;&nbsp;
				 <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Sales/CustomerMaster_Delete/'.$row['CUST_COMP_CODE'].'/'.$row['CUST_AC_CODE'].''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"  ><i class="fa  fa-trash-o" ></i></a>
                                </td>
			    </tr>
		    <?php   }
			    }
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
<!-- end page container -->
</body>
</html>
<script>
TableManageResponsive.init();
</script>


