<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
 <? $CI =& get_instance();?>
 <?php
 $status = $this->session->flashdata('status');
 ?>	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Manufacturing </a></li>
		    <li class="active">Product Bill Of Material</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">View all Product Bill Of Material in our spine<small> You may add transaction here...</small></h1>
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
		    <h4 class="panel-title">Product Bill Of Material</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>ManufacturingController/ProductBillMaterial_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Product Bill Of Material </span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
                              <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                 <thead>
                                    <tr>
                                       <th>Product Code</th>
                                       <th>Product Description</th>
                                       <th>Total Cycle Time</th>
                                       <th>From Date</th>
                                       <th>Upto Date</th>
                                       <th>Active</th>          
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    foreach($value as $row){
                                    ?>
				    <tr>
					<input type="hidden" value="<?php  echo $row['BH_CODE']?>" name="bh_code" id="bh_code">
                                       <td ><?php  echo $row['BH_CODE']?></td>
                                       <td><?php  echo $row['BH_DESC'] ?></td>
                                       <td id="BH_TCT"></td>
                                       <td><?php  echo $row['BH_FROM_DT'] ?></td>
                                       <td><?php  echo $row['BH_UPTO_DT'] ?></td>
                                       <td><?php if($row ['BH_ACTIVE_YN']=='Y') echo 'Y'; else echo 'N'; ?></td>			                       
                                       <td>
                                          <a href='<?php echo site_url('ManufacturingController/ProductBillMaterial_Edit/'.$row['BH_CODE'])?>' class='btn btn-xs btn-primary' ><i class='fa  fa-edit' ></i>  </a>&nbsp;&nbsp;
					  <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('ManufacturingController/productBillHead_Delete/'.$row['BH_CODE'])?>" onclick="return confirm('Are you sure you want to delete this?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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
			
			
			
			
			//$("bh_code").on('blur', function(e, data) {
			var item_code=$("#bh_code").val() ;
			
			
			//alert(item_code);
			    $.ajax({
				type: "POST",
				url: "<?=base_url()?>manufacturingController/GetTctCode",
				 
				 data:{item_code_data:item_code} ,
				success: function (response) {
			    
					   $("#BH_TCT").html(response);
					    
					  
					    },
					    });
			    //});
					});
		
		
		
		
	</script>
<!-- end page container -->
</body>
</html>
