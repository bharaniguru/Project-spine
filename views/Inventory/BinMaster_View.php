	<!-- begin #content -->
	<?php $status=$this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Address</a></li>
		    <li class="active">Bin Master</li>		    
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View Bin Master<small> You may add transaction here...</small></h1>
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
		    <h4 class="panel-title">Bin Master</h4>
		</div>
		<div class="panel-body">
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>InventoryController/BinMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Bin Master</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                 <thead>
                                 <tr>
                                    <th>Bin Code</th>
                                    <th>Bin Desc</th>
                                    <th>Min Qty</th>
                                    <th>Max Qty</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach($result as $row){ ?>
                                 <tr>
                                    <td><?php echo $row['BIN_CODE'];?></td>
                                    <td><?php echo $row['BIN_DESC'];?></td>
                                    <td><?php echo $row['BIN_MIN_QTY'];?></td>
                                    <td><?php echo $row['BIN_MAX_QTY'];?></td>
                                    <td>
                                       <a href="<?php echo site_url('InventoryController/BinMaster_Edit/'.$row['BIN_CODE'])?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                       <a data-toggle="modal" href="<?php echo site_url('InventoryController/BinMaster_Delete/'.$row['BIN_COMP_CODE'].'/'.$row['BIN_CODE'].'/'.$row['BIN_LANG_CODE'].'/'.$row['BIN_CR_UID']);?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-xs btn-danger" ><i class="fa fa-trash-o" ></i></a>    						    
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
 