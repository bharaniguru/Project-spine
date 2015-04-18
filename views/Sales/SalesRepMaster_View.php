<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>	
<?php
$status = $this->session->flashdata('status');
$Update = $this->session->flashdata('Update');
$Delete = $this->session->flashdata('Delete');
?>
	
	<div id="content" class="content">
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Sales</a></li>
		    <li><a href="javascript:;">Sales Representation Master</a></li>
		    <li><a href="javascript:;">View</a></li>
		</ol>
		<h1 class="page-header">Sales Representative Master <small> You may view here...</small></h1>
		<div class="row">
		   <div class="col-md-12">
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Sales Representative Master View</h4>
		</div>
		<div class="panel-body">
		    		    
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url();?>Sales/SalesRepMaster_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
		    </p>
		     <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($Update)) { echo $Update; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($Delete)) { echo $Delete; } ?></p>
		     <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
                            <tr>
                                <th>Employee Code</th>

                                <th>First Name</th>

                                <th>Last Name</th>
                                
                                <th>Location</th>
                                
                                <th>Email ID</th>

                                <!--<th>Office Phone</th>

                                <th>Home Phone</th>-->

                                <th>Cell Phone</th>

                                <th>Manager Code</th>
                                
                                <th>Role Code</th>

                               <!-- <th>Image</th>-->
                                
                                <!--<th>File</th>

                                <th>SR_LANG_CODE</th>
                                <th>Active?</th>
                                <th>Created UID</th>
                                <th>Created DT</th>
                                <th>Updated UID</th>
                                <th>Updated DT</th>-->
                                <th>Action</th>
                            </tr>
			</thead>
			<tbody>
                                 <?php
                                   foreach($rep as $row)
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $row->SR_CODE;?></td>

                                    <td><?php echo $row->SR_FIRST_NAME;?></td>
                                    
                                    <td><?php echo $row->SR_LAST_NAME;?></td>

                                    <td><?php echo $row->SR_LOCN_CODE;?></td>

                                    <td><?php echo $row->SR_EMAIL;?></td>

                                   <!-- <td><?php //echo $row->SR_OFFICE_PHONE;?></td>

                                    <td><?php //echo $row->SR_HOME_PHONE;?></td>-->

                                    <td><?php echo $row->SR_CELL_PHONE;?></td>
                                    
                                    <td><?php echo $row->SR_MANAGER_CODE;?></td>
                                    
                                    <td><?php echo $row->SR_ROLE_CODE;?></td>

                                    <!--<td><a target="_blank" href="<?php //echo $row->SR_IMAGE_BLOB;?>"><img width="100%" src="<?php //echo $row->SR_IMAGE_BLOB;?>"></a></td>-->
                                    
                                     <!--<td><?php //echo $row->SR_IMAGE_FILE;?></td>

                                    <td><?php //echo $row->SR_LANG_CODE;?></td>
                                    <td><?php //echo $row->SR_ACTIVE_YN;?></td>
                                    <td><?php //echo $row->SR_CR_UID;?></td>
                                    <td><?php //echo $row->SR_CR_DT;?></td>
                                    <td><?php //echo $row->SR_UPD_UID;?></td>
                                    <td><?php //echo $row->SR_UPD_DT;?></td>-->
                                    
                                    <td>
                                       <a href="<?php echo base_url();?>Sales/SalesRepMaster_Edit/<?php echo $row->SR_COMP_CODE;?>/<?php echo $row->SR_CODE;?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Sales/SalesRepMaster_Delete/'.$row->SR_COMP_CODE.'/'.$row->SR_CODE.'/'.$row->SR_LANG_CODE.'/'.$row->SR_CR_UID.''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"  ><i class="fa  fa-trash-o" ></i>  </a>
                                    </td>
                                 </tr>
                                 <?php }?>
                              </tbody>
			</table>
		</div>
	    </div>
	</div>
    </div>
	</div>
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>

</body>
</html>
<script>
TableManageResponsive.init();
</script>


