

<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
        <thead>
           <tr>
              <th>Sr.No</th>
              <th>Item Code</th>
              <th>Description</th>
              <th>UOM</th>
              <th>QTY</th>
              <th>Status</th>
              
           </tr>
        </thead>
        <tbody>
           <?php
          
            if(count($product)>0){
           foreach($product as $row){
           ?>
           <tr>
              <td><?php echo $row["PL_LINE"];?></td>
              <td><?php echo $row["PL_ITEM_CODE"];?></td>
              <td><?php echo $row["PL_ITEM_DESC"];?></td>
              <td><?php echo $row["PL_UOM_CODE"];?></td>
              <td><?php echo $row["PL_QTY"];?></td>
              <td><input type="checkbox" onclick="change(<?php echo $row['PL_SYS_ID'];?>,'<?php echo $row["PL_PROC_COMPLETED_YN"];?>')" id="<?php echo $row['PL_PH_SYS_ID'];?>" name="active_yn" <?php if($row["PL_PROC_COMPLETED_YN"]=="Y") echo "checked";  ?> value="Y"></td>				       
           </tr>
           <?php } }?>
           
</tbody>
</table>
<script>
function change(sys_id,active)
{
    var SYSID=sys_id;       
    var active= active;
 
    var date = new Date();
    alert(SYSID);
    $.ajax({
   type: "POST",
   url: "<?=base_url()?>ManufacturingController/AjaxGetProductlineupdate",
   
   data:{SYSID:SYSID,active:active} ,
   success: function (html){
      
		

       },
       
       });
}

</script>