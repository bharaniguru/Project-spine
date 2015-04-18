<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<?php
$status = $this->session->flashdata('status');
$Update = $this->session->flashdata('Update');
$Delete = $this->session->flashdata('Delete');
?>
       <div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Sales</a></li>
		    <li><a href="javascript:;">Customer Class Master </a></li>
		    <li><a href="javascript:;">View</a></li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Customer Class Master <small> You may view here...</small></h1>
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
		    <h4 class="panel-title">Customer Class Master View</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Sales/CustomerClassMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
		    </p>
			<p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Update)) { echo $Update; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Delete)) { echo $Delete; } ?></p>
			<p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <div class="table-responsive">
			<table class="table table-striped table-bordered no-footer" id="data-table">
			
                        <thead>
			    <tr>
                                <!--<th>Company Code</th>-->
				<th>Class Code</th>
				<th>Description</th>
				<th>Exch Rate Type</th>
				<th>Currency</th>
				<th>Payment Term</th>
				<th>Credit Check</th>
                                <th>Credit Limit</th>
                                <th>Grace Days</th>
				<th>Disc YN</th>
                                <th>Send STMT</th>
                                <th>Send Dunning</th>
                                <th>Statement Cycle Code</th>
                                <th>Manager</th>
                                <th>SP code</th>
                                <th>From</th>
                                <th>Upto</th>
                                <th>Active</th>
                                <th>Lang Code</th>
                                <!--<th>Created id</th>-->
                                <!--<th>Created date</th>
                                <th>Updated ID</th>
                                <th>Updated Date</th>-->
                                <th>Action</th>
                            
                              </tr>
                            
			</thead>
                               
                        <tbody>
                            <?php
                              foreach($class as $row)
                                {
                                ?>
                            <tr>
                                
                                <!--<td><?php //echo $row->CC_COMP_CODE;?></td>-->
                                <td><?php echo $row->CC_CODE;?></td>
                                <td><?php echo $row->CC_DESC ;?></td>
                                <td><?php echo $row->CC_EXCHG_RATE_CODE;?></td>
                                <td><?php echo $row->CC_CCY_CODE;?></td>
                                <td><?php echo $row->CC_PAY_TERM_CODE;?></td>
                               <td><?php echo $row->CC_CREDIT_CHECK_YN;?></td>
                                <td><?php echo $row->CC_CREDIT_LIMIT;?></td>
                                <td><?php echo $row->CC_DISC_GRACE_DAYS;?></td>
				<td><?php echo $row->CC_DISC_YN;?></td>
                                <td><?php echo $row->CC_SEND_STMT_YN;?></td>
                                <td><?php echo $row->CC_SEND_DUNNING_YN;?></td>
                                <td><?php echo $row->CC_STMT_CYCLE_CODE;?></td>
                                <td><?php echo $row->CC_AC_MANAGER;?></td>
                                <td><?php echo $row->CC_SP_CODE;?></td>
				<td><?php echo $row->CC_FROM_DT;?></td>
                                <td><?php echo $row->CC_UPTO_DT;?></td>
                                <td><?php echo $row->CC_ACTIVE_YN;?></td>
                                <td><?php echo $row->CC_LANG_CODE;?></td>
                                <!--<td><?php //echo $row->CC_CR_UID;?></td>-->
                                <!--<td><?php //echo $row->CC_CR_DT;?></td>
                                <td><?php //echo $row->CC_UPD_UID;?></td>
                                <td><?php //echo $row->CC_UPD_DT;?></td>-->

		
				<td>
                                 <a href="<?php echo base_url(); ?>Sales/CustomerClassMaster_Edit/<?php echo $row->CC_COMP_CODE;?>/<?php echo $row->CC_CODE;?>" class="btn btn-xs btn-primary" ><i class="fa fa-edit" ></i></a>&nbsp;&nbsp;
                                 <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Sales/CustomerClassMaster_Delete/'.$row->CC_COMP_CODE.'/'.$row->CC_CODE.'/'.$row->CC_LANG_CODE.'/'.$row->CC_CR_UID.''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"  ><i class="fa  fa-trash-o" ></i></a>
                                </td>
				
			    </tr><?php }?>
			        
                                               
                        </tbody>
                        
			</table>
		    </div>
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

