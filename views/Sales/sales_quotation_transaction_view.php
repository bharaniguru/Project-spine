<div class="content" id="content">
    <!-- begin breadcrumb -->

    <ol class="breadcrumb pull-right">
        <li>
            <a href="javascript:;">Application</a>
        </li>

        <li>
            <a href="javascript:;">Define</a>
        </li>

        <li>
            <a href="javascript:;">Address</a>
        </li>

        <li class="active">Country</li>
    </ol><!-- end breadcrumb -->
    <!-- begin page-header -->

    <h1 class="page-header">View Sales Quotation Transaction <small>You may add, edit and delete here...</small></h1><!-- end page-header -->
    <!-- begin row -->

    <div class="row">
        <!-- begin col-10 -->

        <div class="col-md-12">
            <!-- begin panel -->

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a class="btn btn-xs btn-icon btn-circle btn-default fa fa-expand" data-click="panel-expand" href="javascript:;" style="font-style: italic"></a>
                        <a class="btn btn-xs btn-icon btn-circle btn-success fa fa-repeat" data-click="panel-reload" href="javascript:;" style="font-style: italic"></a>
                        <a class="btn btn-xs btn-icon btn-circle btn-warning fa fa-minus" data-click="panel-collapse" href="javascript:;" style="font-style: italic"></a>
                    </div>

                    <h4 class="panel-title">Sales Quotation Transaction</h4>
                </div>

                <div class="panel-body">
                    <p><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>Sales/SalesQuotationTransactionAdd"><i class="fa fa-plus fa-1x"></i> <span class=
                    "f-s-14 f-w-500">Add</span></a></p>

                    <div class="table-responsive">

                        <table class="table table-striped table-bordered dataTable no-footer" id="data-table">
                            <thead>
                                <tr>
                                    <th>System ID</th>
                                    <th>Cusromer Code</th>

                                    <th>Description</th>

                                  <!--  <th>Txn Number</th>-->

                                    <th>Txn Date</th>

                                    <!--<th>Language Code</th>
                                    
                                    <th>Created userID</th>
                                    
                                    <th>Created Date</th>
                                    
                                    <th>Updated UserID</th>
                                    
                                    <th>Updated Date</th>-->

                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                //print"<pre>";
                                //print_r($quot);
                                // print"</pre>";
                                //exit;
                                foreach($quot as $row)
                                {
                                ?>

                                <tr>
                                    <td><?php echo $row['QH_SYS_ID'];?></td>

                                    <td><?php echo $row['QH_CUST_AC_CODE'];?></td>

                                    <td><?php echo $row['QH_DESC'];?></td>

                                   <!-- <td><?php echo $row['QH_TXN_NO'];?></td>-->

                                    <td><?php echo $row['QH_TXN_DT'];?></td>


                                    <td>
                                       <a href="<?php echo base_url();?>sales/SalesQuotationTransactionEdit/<?php echo $row['QH_SYS_ID'];?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i></a>&nbsp;&nbsp;
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('sales/SalesQuotationTransaction/'.$row['QH_SYS_ID'].'/'.$row['QH_LANG_CODE'].'/'.$row['QH_CR_UID']); ?>" onclick="return confirm('Are you sure you want to delete this data?');"><i class="fa  fa-trash-o" ></i></a>
                                    </td>
                                </tr>
                                
                                <?php
                                }
                                ?>
                                
                                
                                
                                
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
