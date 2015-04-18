<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<?php
$status = $this->session->flashdata('status');
$Update = $this->session->flashdata('Update');
$Delete = $this->session->flashdata('Delete');
?>
<div class="content" id="content">
    <!-- begin breadcrumb -->

    <ol class="breadcrumb pull-right">
        <li>
            <a href="javascript:;">Sales</a>
        </li>

        <li>
            <a href="javascript:;">Opportunity Transaction</a>
        </li>
        <li>
            <a href="javascript:;">View</a>
        </li>
    </ol><!-- end breadcrumb -->
    <!-- begin page-header -->

    <h1 class="page-header">Opportunity Transaction <small> You may view here...</small></h1><!-- end page-header -->
    <!-- begin row -->

    <div class="row">
        <!-- begin col-10 -->

        <div class="col-md-12">
            <!-- begin panel -->

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a class="btn btn-xs btn-icon btn-circle btn-default fa fa-expand" data-click="panel-expand" href="javascript:;" style="font-style: italic"></a> <a class=
                        "btn btn-xs btn-icon btn-circle btn-success fa fa-repeat" data-click="panel-reload" href="javascript:;" style="font-style: italic"></a> <a class=
                        "btn btn-xs btn-icon btn-circle btn-warning fa fa-minus" data-click="panel-collapse" href="javascript:;" style="font-style: italic"></a>
                    </div>

                    <h4 class="panel-title">Opportunity Transaction view</h4>
                </div>

                <div class="panel-body">
                    <p><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>Sales/OpportunityTransaction_Add"><i class="fa fa-plus fa-1x"></i> <span class=
                    "f-s-14 f-w-500">Add</span></a></p>
                        <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Update)) { echo $Update; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Delete)) { echo $Delete; } ?></p>
			<p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered dataTable no-footer" id="data-table">
                            <thead>
                                <tr>
                                                    <th>Contact Number</th>

                                                    <th>Opportunity</th>

                                                    <th>TXN DT</th>

                                                    <th>Email</th>

                                                    <!--<th>Opldate</th>

                                                    <th>City</th>-->

                                                    <!--<th>Mobile</th>-->

                                                    <!--<th>PRODUCT CODE</th>-->
                                                    
                                                    <!--<th>Approx Amount </th>

                                                    <th>Currency</th>

                                                    <th>Customer Account</th>

                                                    <th>Description</th>
                                                    
                                                    <th>Status</th>

                                                    <th>Appointment Date</th>
                                                    
                                                    <th>Product</th>

                                                    <th>Created By</th>

                                                    <th>Created On</th>-->

                                                    <th>Action</th>
                                                </tr>
                            </thead>

                            <tbody>
                                
                                    <?php
                                    
                                     if($opp >0){			    
                                     foreach($opp as $row){
                                     ?>

                                <tr>
                                <td><?php echo $row['OPH_CONTACT_NO'];?></td>
                                <td><?php echo $row['OPH_OPPORTUNITY'];?></td>
                                <td><?php echo $row['OPH_TXN_DT'];?></td>
                                <td><?php echo $row['OPH_EMAIL'];?></td>
				<!--<td><?php //echo $row['OPH_CN_CODE'];?></td>
                                <td><?php //echo $row['OPH_ST_CODE'];?></td>
                                <td><?php //echo $row['OPH_CT_CODE'];?></td>-->
				<td>
                                 <a class="btn btn-xs btn-primary" href="<?php echo base_url(); ?>Sales/OpportunityTransaction_Edit/<?php echo $row['OPH_COMP_CODE'];?>/<?php echo $row['OPH_SYS_ID']; ?>/<?php echo $row['OPL_OPH_SYS_ID']; ?>/<?php echo $row['OPL_SYS_ID']; ?>"><i class="fa fa-edit" ></i></a>&nbsp;&nbsp;
				 <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Sales/OpportunityTransaction_Delete/'.$row['OPH_SYS_ID'].'/'.$row['OPH_LANG_CODE'].'/'.$row['OPH_CR_UID'].'/'.$row['OPL_SYS_ID'].'/'.$row['OPL_LANG_CODE'].'/'.$row['OPL_CR_UID'].''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"><i class="fa  fa-trash-o" ></i></a>
                                </td>
			    </tr>
			    <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end panel -->
        </div><!-- end col-10 -->
    </div><!-- end row -->
</div><!-- end #content -->
<!-- begin scroll to top btn -->
<a class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade fa fa-angle-up" data-click="scroll-top" href="javascript:;" style="font-style: italic"></a> <!-- end scroll to top btn -->
 <!-- end page container -->
<script>
TableManageResponsive.init();
</script>
