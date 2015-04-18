	<!-- begin #content -->
	<?php $status=$this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <!--<li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>-->
		    <li class="active">Stock Transfer Request Transaction</li>		    
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Stock Transfer Request Transaction in our spine<small> You may add transaction here...</small></h1>
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
		    <h4 class="panel-title">Stock Transfer Request Transaction</h4>
		</div>
		<div class="panel-body" >
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>InventoryController/StockTransferRequestTransaction_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Stock Transfer Request Transaction</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                 <thead>
                                 <tr>
                                    <th>SRQH SYS ID</th>
				    <th>SRQH COMP CODE</th>
				    <th>SRQH LANG CODE</th>
                                    <th>SRQH TXN CODE</th>
                                    <th>SRQH TXN NO</th>
                                    <th>SRQH TXN DT</th>
                                    <th>SRQH DOC REF</th>
				    <th>SRQH REQUESTED BY</th>
				    <th>SRQH DLV DT</th>
				    <th>SRQH DLV LOCN CODE</th>
				    <th>SRQH SRC LOCN CODE</th>
				    <th>SRQH DESC</th>
				    <th>SRQH STATUS</th>
				    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    foreach($result as $row){
                                    ?>
                                 <tr>
                                    <td><?php echo $row['SRQH_SYS_ID'];?></td>
                                    <td><?php echo $row['SRQH_COMP_CODE'];?></td>
                                    <td><?php echo $row['SRQH_LANG_CODE'];?></td>
                                    <td><?php echo $row['SRQH_TXN_CODE'];?></td>
				    <td><?php echo $row['SRQH_TXN_NO'];?></td>
                                    <td><?php echo $row['SRQH_TXN_DT'];?></td>
				    <td><?php echo $row['SRQH_DOC_REF'];?></td>
				    <td><?php echo $row['SRQH_REQUESTED_BY'];?></td>
				    <td><?php echo $row['SRQH_DLV_DT'];?></td>
				    <td><?php echo $row['SRQH_DLV_LOCN_CODE'];?></td>
				    <td><?php echo $row['SRQH_SRC_LOCN_CODE'];?></td>
				    <td><?php echo $row['SRQH_DESC'];?></td>
				    <td><?php echo $row['SRQH_STATUS'];?></td>
				    <td>
                                       <a href="<?php echo site_url('InventoryController/StockTransferRequestTransaction_Edit/'.$row['SRQH_SYS_ID'])?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                       <a data-toggle="modal" href="<?php echo site_url('InventoryController/StockTransferRequestTransaction_Delete/'.$row['SRQH_SYS_ID'].'/'.$row['SRQH_LANG_CODE'].'/'.$row['SRQH_CR_UID'])?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-xs btn-danger" ><i class="fa fa-trash-o" ></i></a>    						    
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
<script>
$(document).ready(function() {
//App.init();
//FormPlugins.init();
TableManageResponsive.init();
});
</script>
</body>
</html>
 