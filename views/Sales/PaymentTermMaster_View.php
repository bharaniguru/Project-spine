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
            <a href="javascript:;">Payment Term Master</a>
        </li>
        <li>
            <a href="javascript:;">View</a>
        </li>
    </ol><!-- end breadcrumb -->
    <!-- begin page-header -->

    <h1 class="page-header">Payment Term Master <small> You may view here...</small></h1><!-- end page-header -->
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

                    <h4 class="panel-title">Payment Term Master View</h4>
                </div>

                <div class="panel-body">
                    <p><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>Sales/PaymentTermMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class=
                    "f-s-14 f-w-500">Add</span></a></p>
                        <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Update)) { echo $Update; } ?></p>
			<p style="color: #EB4688"><?php if (isset($Delete)) { echo $Delete; } ?></p>
			<p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered dataTable no-footer" id="data-table">
                            <thead>
                                <tr>
                                    <th>Payment Term Code</th>

                                    <th>Description</th>

                                    <th>From Date</th>

                                    <th>Upto Date</th>

                                    <th>Active</th>

                                    <!--<th>Language Code</th>-->
                                    
                                    <th>Created userID</th>
                                    
                                    <!--<th>Created Date</th>
                                    
                                    <th>Updated UserID</th>
                                    
                                    <th>Updated Date</th>-->

                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach($paytm as $row)
                                {
                                ?>

                                <tr>
                                    <td><?php echo $row->PT_CODE;?></td>

                                    <td><?php echo $row->PT_DESC;?></td>

                                    <td><?php echo $row->PT_FROM_DT;?></td>

                                    <td><?php echo $row->PT_UPTO_DT;?></td>

                                    <td><?php echo $row->PT_ACTIVE_YN;?></td>

                                    <!--<td><?php //echo $row->PT_LANG_CODE;?></td>-->
                                    
                                    <td><?php echo $row->PT_CR_UID;?></td>

                                    <!--<td><?php //echo $row->PT_CR_DT;?></td>

                                    <td><?php //echo $row->PT_UPD_UID;?></td>

                                    <td><?php //echo $row->PT_UPD_DT;?></td>-->

                                    <td>
                                       <a href="<?php echo base_url();?>Sales/PaymentTermMaster_Edit/<?php echo $row->PT_COMP_CODE;?>/<?php echo $row->PT_CODE;?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Sales/PaymentTermMaster_Delete/'.$row->PT_COMP_CODE.'/'.$row->PT_CODE.'/'.$row->PT_LANG_CODE.'/'.$row->PT_CR_UID.''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"  ><i class="fa  fa-trash-o" ></i>  </a>
                                    </td>
                                </tr><?php }?>
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
 </body>
 </html>
<script>
TableManageResponsive.init();
</script>
