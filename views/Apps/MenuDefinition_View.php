	<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
	<? $CI =& get_instance();?>
	<?php
	$status = $this->session->flashdata('status');
	?>
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Application</a></li>
		    <li><a href="javascript:;">Define</a></li>
		    <li><a href="javascript:;">Authorization</a></li>
		    <li class="active">Menus</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Menu Definition<small> You may view menu deatils here...</small></h1>
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
		    <h4 class="panel-title">View Menu Definition</h4>
		</div>
		<div class="panel-body">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo base_url();?>Apps/MenuDefinition_Add"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add Menu</span></a>
		    </p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
			    <tr>
                                <th data-class="expand">Module</th>
                                <th data-class="phone">Menu Code</th>
                                <th data-hide="phone">Description</th>
                                <th data-hide="phone">Parent Menu</th>
                                <th data-hide="phone">Menu Type</th>
                                <!--<th data-hide="phone">Display Sequence</th>
                                <th data-hide="phone">Definiton </th>
                                <th data-hide="phone">MenuMultiInstYN</th>
                                <th data-hide="phone">Transaction Code</th>
                                <th data-hide="phone">MENU_PARA_01</th>
                                <th data-hide="phone">MENU_PARA_02</th>
                                <th data-hide="phone">MENU_PARA_03</th>
                                <th data-hide="phone">MENU_PARA_04</th>
                                <th data-hide="phone">MENU_PARA_05</th>
                                <th data-hide="phone">MENU_PARA_06</th>
                                <th data-hide="phone">MENU_PARA_07</th>
                                <th data-hide="phone">MENU_PARA_08</th>
                                <th data-hide="phone">MENU_PARA_09</th>
                                <th data-hide="phone">MENU_PARA_10</th>
                                <th data-hide="phone">MENU_PARA_11</th>
                                <th data-hide="phone">MENU_PARA_12</th>
                                <th data-hide="phone">MENU_PARA_13</th>
                                <th data-hide="phone">MENU_PARA_14</th>
                                <th data-hide="phone">MENU_PARA_15</th>
                                <th data-hide="phone">MENU_PARA_16</th>
                                <th data-hide="phone">MENU_PARA_17</th>
                                <th data-hide="phone">MENU_PARA_18</th>
                                <th data-hide="phone">MENU_PARA_19</th>
                                <th data-hide="phone">MENU_PARA_20</th>
                                <th data-hide="phone">MENU_LANG_CODE</th>
                                <th data-hide="phone">Active?</th>-->
                                <th data-class="phone">From Date</th>
                                <th data-class="phone">Upto Date</th>
                                <th data-hide="phone">Created UID</th>
                                <th data-hide="phone">Created DT</th>
                                <!--<th data-hide="phone">Updated UID</th>
                                <th data-hide="phone">Updated DT</th>-->
                                <th data-hide="phone,tablet">Action</th>
                            </tr>
			</thead>
			<tbody>
                                 <?php
                                    if($this->Apps_model->ViewMenu()>0)
                                    {
                                    foreach($this->Apps_model->ViewMenu()  as $row)
                                    {?>
                                 <tr>
                                    <td><?php echo $row->MENU_MODULE;?></td>
                                    <td><?php echo $row->MENU_CODE;?></td>
                                    <td><?php echo $row->MENU_DESC;?></td>
                                    <td><?php echo $row->MENU_PARENT_CODE;?></td>
                                    <td><?php echo $row->MENU_TYPE;?></td>
                                    <!--<td><?php //echo $row->MENU_DISP_SEQ;?></td>
                                    <td><?php //echo $row->MENU_DEFINITION;?></td>
                                    <td><?php //echo $row->MENU_MULTI_INST_YN;?></td>
                                    <td><?php //echo $row->MENU_TXN_CODE;?></td>
                                    <td><?php //echo $row->MENU_PARA_01;?></td>
                                    <td><?php //echo $row->MENU_PARA_02;?></td>
                                    <td><?php //echo $row->MENU_PARA_03;?></td>
                                    <td><?php //echo $row->MENU_PARA_04;?></td>
                                    <td><?php //echo $row->MENU_PARA_05;?></td>
                                    <td><?php //echo $row->MENU_PARA_06;?></td>
                                    <td><?php //echo $row->MENU_PARA_07;?></td>
                                    <td><?php //echo $row->MENU_PARA_08;?></td>
                                    <td><?php //echo $row->MENU_PARA_09;?></td>
                                    <td><?php //echo $row->MENU_PARA_10;?></td>
                                    <td><?php //echo $row->MENU_PARA_11;?></td>
                                    <td><?php //echo $row->MENU_PARA_12;?></td>
                                    <td><?php //echo $row->MENU_PARA_13;?></td>
                                    <td><?php //echo $row->MENU_PARA_14;?></td>
                                    <td><?php //echo $row->MENU_PARA_15;?></td>
                                    <td><?php //echo $row->MENU_PARA_16;?></td>
                                    <td><?php //echo $row->MENU_PARA_17;?></td>
                                    <td><?php //echo $row->MENU_PARA_18;?></td>
                                    <td><?php //echo $row->MENU_PARA_19;?></td>
                                    <td><?php //echo $row->MENU_PARA_20;?></td>
                                    <td><?php //echo $row->MENU_LANG_CODE;?></td>
                                    <td><?php //echo $row->MENU_ACTIVE_YN;?></td>-->
                                    <td><?php echo $row->MENU_FROM_DT;?></td>
                                    <td><?php echo $row->MENU_UPTO_DT;?></td>
                                    <td><?php echo $row->MENU_CR_UID;?></td>
                                    <td><?php echo $row->MENU_CR_DT;?></td>
                                    <!--<td><?php //echo $row->MENU_UPD_UID;?></td>
                                    <td><?php //echo $row->MENU_UPD_DT;?></td>-->
                                    <td>
                                       <a href="<?php echo base_url();?>Apps/MenuDefinition_Edit/<?php echo $row->MENU_CODE;?>" class="btn btn-xs btn-primary" ><i class="fa  fa-edit" ></i>  </a>&nbsp;&nbsp;
                                       <a class="btn btn-xs btn-danger" data-toggle="modal" href="<?php echo site_url('Apps/MenuDefinition_Delete/'.$row->MENU_CODE.''); ?>" onclick="return confirm('Are you sure you want to delete this data?');"  ><i class="fa  fa-trash-o" ></i>  </a>
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
TableManageResponsive.init();
</script>


