<!--Author: Pravin Kumar.P
Created on: 04/03/15
Modified on: 16/03/15
-->	<!-- begin #content -->
<?php $status=$this->session->flashdata('status'); ?>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inventory</a></li>
		    <li class="active">Stock Transfer Outgoing</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Stock Transfer Outgoing in our spine<small> You may add country here...</small></h1>
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
		    <h4 class="panel-title">Stock Transfer Outgoing</h4>
		</div>
		<div class="panel-body" style="overflow: scroll">
		    <p style="color:red"><?php echo $status; ?></p>
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('InventoryController/StockTransferOutgoing_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Stock Transfer Outgoing</span></a>
		    </p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <th>STOH SYS ID</th>
			    <th>STOH COMP CODE</th>
			    <th>STOH LANG CODE</th>
			    <th>STOH LANG CODE</th>
			    <th>STOH TXN CODE</th>
			    <th>STOH TXN NO</th>
			    <th>STOH TXN DT</th>
			    <th>STOH DOC REF</th>
			    <th>STOH REQUESTED BY</th>
			    <th>STOH DLV DT</th>
			    <th>STOH DLV LOCN CODE</th>
			    <th>STOH SRC LOCN CODE</th>
			    <th>STOH DESC</th>
			    <th>STOH CR DT</th>
			    <th>STOH CR UID</th>
			    <th>STOH UPD DT</th>
			    <th>STOH UPD UID</th>
			    <th>STOH STATUS</th>
			    <th>Action</th>
			</thead>
			<tbody>
			<?php foreach($result as $row){ ?>
			    <tr>
                            <td><?php echo $row['STOH_SYS_ID']?></td>
			    <td><?php echo $row['STOH_COMP_CODE']?></td>
			    <td><?php echo $row['STOH_LANG_CODE']?></td>
			    <td><?php echo $row['STOH_LANG_CODE']?></td>
			    <td><?php echo $row['STOH_TXN_CODE']?></td>
			    <td><?php echo $row['STOH_TXN_NO']?></td>
			    <td><?php echo $row['STOH_TXN_DT']?></td>
			    <td><?php echo $row['STOH_DOC_REF']?></td>
			    <td><?php echo $row['STOH_REQUESTED_BY']?></td>
			    <td><?php echo $row['STOH_DLV_DT']?></td>
			    <td><?php echo $row['STOH_DLV_LOCN_CODE']?></td>
			    <td><?php echo $row['STOH_SRC_LOCN_CODE']?></td>
			    <td><?php echo $row['STOH_DESC']?></td>
			    <td><?php echo $row['STOH_CR_DT']?></td>
			    <td><?php echo $row['STOH_CR_UID']?></td>
			    <td><?php echo $row['STOH_UPD_DT']?></td>
			    <td><?php echo $row['STOH_UPD_UID']?></td>
			    <td><?php echo $row['STOH_STATUS']?></td>
			    <td>
				<a href="<?php echo site_url('InventoryController/StockTransferOutgoing_Edit/'.$row['STOH_SYS_ID'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
				<a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('InventoryController/StockTransferOutgoing_Delete/'.$row['STOH_SYS_ID'].'/'.$row['STOH_LANG_CODE'].'/'.$row['STOH_CR_UID'])?>" onclick="return confirm('Are you sure you want to delete this Item?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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


