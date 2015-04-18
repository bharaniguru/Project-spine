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
		    <li><a href="javascript:;">Customer Master</a></li>
		    <li><a href="javascript:;">View</a></li>
		    
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Lead Transaction <small> You may view here...</small></h1>
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
		    <h4 class="panel-title">Lead Transaction View</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>Sales/LeadTransaction_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
		    </p>
			<p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Update)) { echo $Update; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Delete)) { echo $Delete; } ?></p>
			<p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			
                        <thead>
			    <tr>
				<th>System ID</th>
				<!--<th>Company Code</th>
				<th>Lang Code</th>-->
				<th>Transaction Code</th>
				<th>Txn Number</th>
				<th>Txn Date</th>
				<!--<th>Locn Code</th>
				<th>Lead</th>-->
				<th>Contact No </th>
				<!--<th>Contact Person</th>
				<th>MAIL </th>
				<th>PRIORITY </th>-->
				<th>SOURCE CODE</th>
				<th>CUST AC DESC</th>
				<th>Lead DESC</th>
                                <!--<th>Priority</th>-->
                                <!--<th>Status</th>-->

                                <!--<th>Days</th>-->
                                <!--<th>Credit Limit </th>-->
                                <!--<th>Discount Grace Days</th>-->
                                <!--<th>From Date</th>-->
                                <!--<th>Upto Date</th>-->
                                <!--<th>Active ?</th>-->
                                <!--<th>Send Dunning</th>-->
                                <!--<th>Send Statement</th>-->
                                <!--<th>Allow credit</th>-->
                                <!--<th>Allow Discount</th>-->
                                <th>Action</th>
                            
                              </tr>
                            
			</thead>
                               
                        <tbody>
				<?php
                              foreach($lead as $row)
                                {
                                ?>
                            <tr>
                                <td><?php echo $row->LH_SYS_ID;?></td>
                               <!-- <td><?php //echo $row->LH_COMP_CODE;?></td>
                                <td><?php //echo $row->LH_LANG_CODE;?></td>-->
                                <td><?php echo $row->LH_TXN_CODE;?></td>
				<td><?php echo $row->LH_TXN_NO;?></td>
                                <td><?php echo $row->LH_TXN_DT;?></td>
                                <!--<td><?php //echo $row->LH_LOCN_CODE;?></td>
                                <td><?php //echo $row->LH_LEAD;?></td>-->
                                <td><?php echo $row->LH_CONTACT_NO;?></td>
				<!--<td><?php //echo $row->LH_CONTACT_PERSON;?></td>
				<td><?php //echo $row->LH_MAIL;?></td>
                                <td><?php //echo $row->LH_PRIORITY;?></td>-->
                                <td><?php echo $row->LH_SOURCE_CODE;?></td>
                                <td><?php echo $row->LH_CUST_AC_DESC;?></td>
				<td><?php echo $row->LH_DESC;?></td>

		
				<td>
                                 <a class="btn btn-xs btn-primary" href="<?php echo base_url(); ?>Sales/LeadTransaction_Edit/<?php echo $row->LH_COMP_CODE;?>/<?php echo $row->LH_SYS_ID; ?>"><i class="fa fa-edit" ></i></a>&nbsp;&nbsp;
				 <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Sales/LeadTransaction_Delete/'.$row->LH_SYS_ID.'/'.$row->LH_LANG_CODE.'/'.$row->LH_CR_UID.''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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
</body>
</html>
<script>
TableManageResponsive.init();
</script>

