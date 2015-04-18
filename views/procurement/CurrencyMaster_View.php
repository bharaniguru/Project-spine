<!--Author: Gobi.C
Created on: 04/03/15
Modified on: 18/03/15
-->

<?php
$status = $this->session->flashdata('status');
?>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Procurement</a></li>
	<li><a href="javascript:;">Currency</a></li>       
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">View all Currency in our spine<small> You may add Currency here...</small></h1>
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
		    <h4 class="panel-title">View Region Master</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url('procurement/CurrencyMaster_Add'); ?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Currency</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>		    
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
                                <th data-class="expand">CCY_CODE</th>
                                <th data-hide="phone,tablet">CCY_DESC</th>
                                <th data-hide="phone,tablet">CCY_SYMBOL</th>
                                <th data-hide="phone,tablet">CCY_PRECISION</th>
                                <th data-hide="phone,tablet">CCY_FORMAT</th>                                           
                                <th data-hide="phone,tablet">Action</th>
                            </tr>
			</thead>
			<tbody>
			    <?php if(count($currency) > 0)
			    {
				foreach($currency as $row)
				{
			    ?>
			    <tr>					   
				<td><?php echo $row['CCY_CODE']; ?></td>					    
				<td><?php echo $row['CCY_DESC']; ?></td>					    
				<td><?php echo $row['CCY_SYMBOL']; ?></td>					    
				<td><?php echo $row['CCY_PRECISION']; ?></td>
				<td><?php echo $row['CCY_FORMAT']; ?></td>					   				    					    
				<td>
				    <a href="<?php echo site_url('Procurement/CurrencyMaster_Edit/'.$row['CCY_CODE'])?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i> </a>&nbsp;&nbsp;
				    <a href="<?php echo site_url('Procurement/CurrencyMaster_Delete/'.$row['CCY_CODE'])?>" class="btn btn-xs btn-danger"  onclick="return confirm('Are you sure you want to delete?');"  ><i class="fa  fa-trash-o" ></i></a>
				</td> 
			    </tr>
			   <?php }}?>			   
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
    $(document).ready(function() {
	//App.init();
	TableManageResponsive.init();
    });
	</script>