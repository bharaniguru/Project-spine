<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <a class="glyphicon glyphicon-chevron-left" href="#myCarousel"aria-hidden="true"data-slide="prev" style="color: red">Prev</a>
    <a class="glyphicon glyphicon-chevron-right"href="#myCarousel" data-slide="next" aria-hidden="true" style="color: red">Next</a>
    <span class="sr-only">Next</span>
    <div class="carousel-inner col-xs-12 col-md-12" role="listbox">
	<?php $count=1;foreach ($line as $line){ ?>
	<div class="item <?php if($count==1) echo 'active'; ?>">
	    <?php  $count++; ?>
	    <div class="form-group">
		<label class="col-md-3 control-label">Customer Name</label>
		<div class="col-md-5">
		    <input type="text" placeholder="MH_CUST_AC_DESC" readonly value="<?php echo $head[0]['MH_CUST_AC_DESC'] ;?>" name="MH_CUST_AC_DESC1" id="MH_CUST_AC_DESC1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Contact Person</label>
		<div class="col-md-5">
		    <input type="text" placeholder="MH_CONTACT_PERSON" readonly value="<?php echo $head[0]['MH_CONTACT_PERSON'] ;?>" name="MH_CONTACT_PERSON1" id="MH_CONTACT_PERSON1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Address</label>
		<div class="col-md-5">
		    <input type="text" placeholder="MH_ADD1 + MH_ADD2 + MH_ADD3 + MH_ADD4" readonly name="MH_ADD11" id="MH_ADD11" value="<?php echo $head[0]['MH_ADD1'].' '.$head[0]['MH_ADD2'].' '.$head[0]['MH_ADD3'].' '.$result[0]['MH_ADD4'];?>" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">City</label>
		<div class="col-md-5">
		    <input type="text" placeholder="MH_CT_AR_CODE + MH_CT_CODE + MH_CN_CODE" readonly name="MH_CT_CODE1" value="<?php echo $head[0]['MH_CT_CODE'].' '.$head[0]['MH_CT_AR_CODE'].' '.$head[0]['MH_CN_CODE'];?>" id="MH_CT_CODE1" class="form-control">
		</div>
	    </div>	
	    <div class="form-group">
		<label class="col-md-3 control-label">Ref Transaction</label>
		<div class="col-md-2">
		    <input type="text" placeholder="MH_SALE_REF_TXN_CODE" readonly name="MH_SALE_REF_TXN_CODE1" value="<?php echo $head[0]['MH_SALE_REF_TXN_CODE'];?>" id="MH_SALE_REF_TXN_CODE1" class="form-control">
		</div>
		<label class="col-md-1 control-label">Ref No</label>
		<div class="col-md-2">
		    <input type="text" placeholder="MH_SALE_REF_TXN_NO" readonly name="MH_SALE_REF_TXN_NO1" value="<?php echo $head[0]['MH_SALE_REF_TXN_NO'] ;?>" id="MH_SALE_REF_TXN_NO1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Building Name</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_BUILD" readonly name="ML_BUILD1" id="ML_BUILD1" value="<?php echo $line['ML_BUILD'] ;?>"class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Floor Number</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_FLOOR" readonly name="ML_FLOOR1" id="ML_FLOOR1" value="<?php echo $line['ML_FLOOR'] ;?>" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Flat Number</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_FLAT" readonly name="ML_FLAT1" id="ML_FLAT1" value="<?php echo $line['ML_FLAT'] ;?>" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Unit Type</label>
		<div class="col-md-5">
		    <select class="form-control" readonly id="ML_UNIT1" name="ML_UNIT1">
			<option  value="">Select</option>
			<?php foreach($result4 as $row) {?>
			<option value="<?php echo $row['VSL_CODE'];?>"<?php if($line['ML_UNIT']==$row['VSL_CODE']) echo "Selected"; ?>><?php echo $row['VSL_DESC']?></option>
			<?php } ?>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Product</label>
		<div class="col-md-5">
		    <select class="form-control" readonly id="ML_PRODUCT_CODE1"  name="ML_PRODUCT_CODE1">
			<option  value="">Select</option>
			<?php foreach($result5 as $row) {?>
			<option value="<?php echo $row['IF_CODE']?>"<?php if($line['ML_PRODUCT_CODE']==$row['IF_CODE']) echo "Selected"; ?>><?php echo $row['IF_DESC']?></option>
			<?php } ?>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Code</label>
		<div class="col-md-5">
		    <select class="form-control" readonly id="ML_COLOR_CODE1" name="ML_COLOR_CODE1">
			<option  value="">Select</option>
			<?php foreach($result6 as $row) {?>
			<option value="<?php echo $row['IC_CODE']?>"<?php if($line['ML_COLOR_CODE']==$row['IC_CODE']) echo "Selected"; ?>><?php echo $row['IC_DESC']?></option>
			<?php } ?>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Width</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_WIDTH" readonly  value="<?php echo $line['ML_WIDTH'] ;?>" name="ML_WIDTH1" id="ML_WIDTH1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Height</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_HEIGHT" readonly value="<?php echo $line['ML_HEIGHT'] ;?>" name="ML_HEIGHT1" id="ML_HEIGHT1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Quantity</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_QTY" readonly value="<?php echo $line['ML_QTY'] ;?>" name="ML_QTY1" id="ML_QTY1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Mount Type</label>
		<div class="col-md-5">
		    <select class="form-control" id="ML_MOUNT_TYPE1" readonly name="ML_MOUNT_TYPE1">
			<option  value="">Select</option>
			<?php foreach($result7 as $row) {?>
			<option value="<?php echo $row['VSL_CODE']?>"<?php if($line['ML_MOUNT_TYPE']==$row['VSL_CODE']) echo "Selected"; ?>><?php echo $row['VSL_DESC']?></option>
			<?php } ?>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Mount On</label>
		<div class="col-md-5">
		    <select class="form-control" id="ML_MOUNT_ON1" readonly name="ML_MOUNT_ON1">
			<option value="">Select</option>
			<?php foreach($result8 as $row) {?>
			<option value="<?php echo $row['VSL_CODE']?>"<?php if($line['ML_MOUNT_ON']==$row['VSL_CODE']) echo "Selected"; ?>><?php echo $row['VSL_DESC']?></option>
			<?php } ?>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Operation</label>
		<div class="col-md-5">
		    <select class="form-control" id="ML_OPERATE1"  readonly name="ML_OPERATE1">
			<option  value="">Select</option>
			<option value="Manual" <?php if($line['ML_OPERATE']=="Manual") echo "Selected"; ?>>Manual</option>
			<option value="Motorized" <?php if($line['ML_OPERATE']=="Motorized") echo "Selected"; ?>>Motorized</option>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Control</label>
		<div class="col-md-5">
		    <select class="form-control" id="ML_CONTROL1"  readonly name="ML_CONTROL1">
			<option value="">Select</option>
			<option value="Left" <?php if($line['ML_CONTROL']=="Left") echo "Selected"; ?>>Left</option>
			<option value="Right" <?php if($line['ML_CONTROL']=="Right") echo "Selected"; ?>>Right</option>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Opening</label>
		<div class="col-md-5">
		    <select class="form-control" id="ML_OPENING1"  readonly name="ML_OPENING1">
			<option  value="">Select</option>
			<option value="Top" <?php if($line['ML_OPENING']=="Top") echo "Selected"; ?>>Top</option>
			<option value="Left" <?php if($line['ML_OPENING']=="Left") echo "Selected"; ?>>Left</option>
			<option value="Right" <?php if($line['ML_OPENING']=="Right") echo "Selected"; ?>>Right</option>
			<option value="Center" <?php if($line['ML_OPENING']=="Center") echo "Selected"; ?>>Center</option>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Pelmet</label>
		<div class="col-md-5">
		    <select class="form-control" id="ML_PELMET1"  readonly name="ML_PELMET1">
			<option value="">Select</option>
			<option value="Yes" <?php if($line['ML_PELMET']=="Yes") echo "Selected"; ?>>Yes</option>
			<option value="No" <?php if($line['ML_PELMET']=="No") echo "Selected"; ?>>No</option>
		    </select>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Projection</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_PROJECTION" value="<?php echo $line['ML_PROJECTION'] ;?>" readonly name="ML_PROJECTION1" id="ML_PROJECTION1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Fasica</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_FASICA" readonly value="<?php echo $line['ML_FASCIA'] ;?>" name="ML_FASICA1" id="ML_FASICA1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-3 control-label">Remarks</label>
		<div class="col-md-5">
		    <input type="text" placeholder="ML_REMARKS"  readonly value="<?php echo $line['ML_REMARKS'] ;?>" name="ML_REMARKS1" id="ML_REMARKS1" class="form-control">
		</div>
	    </div>
	    <div class="form-group">
		<div class="col-sm-3"></div>
		<div class="col-sm-5 well">
		    <label>&nbsp;</label>
		    <center><label>Photo gallery</label></center>
		    <label>&nbsp;</label>
		</div>
	    </div>
	    <div class="form-group">
		<label class="col-md-2 control-label">Transaction</label>
		<div class="col-md-2">
		    <input type="text" placeholder="MH_TXN_CODE" readonly name="MH_TXN_CODE1" value="<?php echo $head[0]['MH_TXN_CODE'] ;?>" id="MH_TXN_CODE1" class="form-control">
		</div>
		<label class="col-md-1 control-label">Txn Num</label>
		<div class="col-md-2">
		    <input type="text" placeholder="MH_TXN_NO" readonly  name="MH_TXN_NO1" value="<?php echo $head[0]['MH_TXN_NO'] ;?>" id="MH_TXN_NO1" class="form-control">
		</div>
		<label class="col-md-1 control-label">Date</label>
		<div class="col-md-2">
		    <input type="text" placeholder="MH_TXN_DT" readonly  name="MH_TXN_DT1" value="<?php echo $head[0]['MH_TXN_DT'] ;?>" id="defaultdate5" class="form-control">
		</div>
	    </div>
	    <div class="col-md-12">
		<?php $result = $this->LogisticsModel->MeasurementTransactionDocs_Edit($sys_head_id,$line['ML_SYS_ID']);
		foreach($result as $row) { ?>
		<div class="col-md-4">
		    <img style="width:100%; height: 150px"src="<?php echo base_url('upload/Logistics/'.$row['MI_FILE_NAME'])?>" >
		    <div class="col-md-12">
			<input type="text" class="form-control" readonly="" name="<?php echo $row["MI_SYS_ID"]; ?>" value="<?php echo $row["MI_DESC"]; ?>">
			<input type="text" class="form-control" readonly="" value="<?php echo $row["MI_SIZE"]; ?>">
		    </div>
		</div>
		<?php } unset($result); ?>
	    </div>
	</div>
	<?php } ?>
    </div>
    <div class="col-md-12 col-md-offset-4 p-t-20">
	<fieldset>
	    <a id="save_add" class="btn btn-sm btn-primary" href="<?php echo base_url('LogisticsController/MeasurementTransaction_Add/'.$lsl_sys_id."/".$sys_head_id); ?>">Save/Add More</a>
	    <button class="btn btn-sm btn-info" type="button"  href="<?php echo base_url('LogisticsController/ScheduleTrackingDashboard_View/'.$lsl_sys_id."/".$sys_head_id); ?>">Save/Close</button>
	    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
	</fieldset>
    </div>
</div>
