<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<?php
$status = $this->session->flashdata('status');
?>

<div class="content" id="content">
                     <!-- begin breadcrumb -->
                     <ol class="breadcrumb pull-right">
                        <li><a href="javascript:;">Application</a></li>
                        <li><a href="javascript:;">Define</a></li>
                        <li><a href="javascript:;">Authorization</a></li>
                        <li class="active">Menus</li>
                    </ol>
                     <!-- end breadcrumb -->
                     <!-- begin page-header -->
                     <h1 class="page-header">Menu definition <small>you may edit here...</small></h1>
                     <!-- end page-header -->
                     
                     <!-- begin row -->
    <div class="row">
        <!-- begin  -->
        <div class="ui-sortable">
                        <!-- begin panel -->
            <div data-sortable-id="form-stuff-1" class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-default" href="javascript:;"><i class="fa fa-expand"></i></a>
                        <a data-click="panel-reload" class="btn btn-xs btn-icon btn-circle btn-success" href="javascript:;"><i class="fa fa-repeat"></i></a>
                        <a data-click="panel-collapse" class="btn btn-xs btn-icon btn-circle btn-warning" href="javascript:;"><i class="fa fa-minus"></i></a>
                        <!--<a data-click="panel-remove" class="btn btn-xs btn-icon btn-circle btn-danger" href="javascript:;"><i class="fa fa-times"></i></a>-->
                    </div>
                    <h4 class="panel-title">Edit Menu Definition</h4>
                </div>
                <div class="panel-body">
                  <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
                  <?php foreach($menu as $menu1 ) ?>
                    <form class="form-horizontal" data-bv-trigger="blur" action="<?php echo base_url();?>Apps/MenuDefinition_Edit/<?php echo $menu1->MENU_CODE; ?>" method="post" id="myForm" name="myForm">
                        <div class="well row"><!--OUTER row defined BEGIN-->
                            <div class="col-md-6 ui-sortable"><!-- FIRST COL-6 BEGIN-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Module</label>
                                    <div class="col-md-8">
                                        <select class="form-control" readonly name="MENU_MODULE" id="MENU_MODULE">
                                            <?php
                                           if(count($menu_get)>0){
                                           $count=1;
                                           foreach($menu_get  as $row){
                                           if(($menu1->MENU_MODULE)==($row->VSL_CODE)){ ?>
                                              <option selected="selected"  value="<?php echo $menu1->MENU_MODULE;$menu1->MENU_MODULE;?>"><?php echo $row->VSL_DESC; ?></option>
                                              <?php }
                                              
                                                if(($menu1->MENU_MODULE)!=($row->VSL_CODE)){?>
                                                 
                                                <option disabled value="<?php echo $row->VSL_CODE;?>"><?php echo $row->VSL_DESC;?></option>
                                                <?php
                                                }
                                            }
                                           }
                                           ?>
                                        </select>
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Code</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_CODE" readonly name="MENU_CODE" id="MENU_CODE" value="<?php echo $menu1->MENU_CODE;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_DESC" required name="MENU_DESC" value="<?php echo $menu1->MENU_DESC;?>" id="MENU_DESC" class="form-control">
                                        <input type="hidden" name="MENU_LANG_CODE" id="MENU_LANG_CODE" value="en">
                                        <input type="hidden" name="MENU_UPD_UID" id="MENU_UPD_UID" value="AR">
                                        <input type="hidden" name="MENU_UPD_DT"  class="MENU_UPD_DT" id="datepicker-inline" data-date-format='dd-M-yy'>
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Parent Menu</label>
                                    <div class="col-md-8">
                                        <select class="form-control" required name="MENU_PARENT_CODE" id="MENU_PARENT_CODE">
                                            <?php
                                           if(count($menu_get)>0){?>
                                           <?php foreach($parent  as $row){
                                                      ?>
                                                       <option value="<?php echo $row->MENU_CODE;?>" <?php if($menu1->MENU_PARENT_CODE==$row->MENU_CODE)echo "selected";?> ><?php echo $row->MENU_DESC;?></option>
                                                       <?php
                                                       
                                                    } 
                                           }?>
                                        </select>
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Menu Type</label>
                                    <div class="col-md-8">
                                        <select class="form-control" required name="MENU_TYPE" id="MENU_TYPE">
                                            <?php
                                              if(count($type)>0){
                                              $count=1;
                                              foreach($type  as $row){
                                                 if(($menu1->MENU_TYPE)==($row->VSL_CODE)){ ?>
                                                    <option selected="selected" value="<?php echo $menu1->MENU_TYPE;?>"><?php echo $row->VSL_DESC; ?></option>
                                                    <?php }
                                                    
                                                       if(($menu1->MENU_TYPE)!=($row->VSL_CODE)){?>
                                                          <option value="<?php echo $row->VSL_CODE;?>"><?php echo $row->VSL_DESC;?></option>
                                                          <?php
                                                       }
                                                 }
                                              }
                                                    ?>
                                        </select>    
                                            
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Display Sequence</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_DISP_SEQ" name="MENU_DISP_SEQ" id="MENU_DISP_SEQ" class="form-control" value="<?php echo $menu1->MENU_DISP_SEQ;?>">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Definition</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_DEFINITION" name="MENU_DEFINITION" id="MENU_DEFINITION" class="form-control" value="<?php echo $menu1->MENU_DEFINITION;?>">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Transaction Code</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_TXN_CODE" name="MENU_TXN_CODE" id="MENU_TXN_CODE" class="form-control" value="<?php echo $menu1->MENU_TXN_CODE;?>">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                            </div><!--FIRST COL-6 END-->
                            <div class="col-md-6 ui-sortable"><!-- SECOND COL-6 BEGIN-->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"  <?php if('Y'==( $menu1->MENU_ACTIVE_YN)){
                                                                                    echo 'checked="checked"';
                                                                                    }else{
                                                                                        //echo 'checked=""';
                                                                                    }
                                                                            ?> name="MENU_ACTIVE_YN" id="MENU_ACTIVE_YN">
                                                    Active?
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"  <?php if('Y'==($menu1->MENU_MULTI_INST_YN)){
                                                                                        echo 'checked="checked"';
                                                                                    }
                                                                                    else{
                                                                                        //echo 'checked=""';
                                                                                    }    
                                                                            ?> name="MENU_MULTI_INST_YN" id="MENU_MULTI_INST_YN">
                                                    Allow Multi Instance?
                                                </label>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                 <div class="row">
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Effective From Date</label>
                                          <div class='col-md-5'>
                                              <div class='input-group date' id='datetimepicker1'>
                                                   <input type="text" placeholder="Date Start" name="MENU_FROM_DT" value="<?php echo $menu1->MENU_FROM_DT;?>" id="MENU_FROM_DT" class="form-control input-group datetimepicker1"  >
                                                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                              </div>
                                          </div>
                                       </div>
                                         <div class="form-group ">
                                              <label class="col-md-3 control-label"> Upto Date</label>
                                              <div class='col-md-5'>
                                                   <div class='input-group date' id='datetimepicker2'>
                                                   <input type="text" placeholder="Date End" name="MENU_UPTO_DT" value="<?php echo $menu1->MENU_UPTO_DT;?>" id="MENU_UPTO_DT" class="form-control  input-group datetimepicker2" >
                                                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                       </span>
                                                   </div>
                                               </div>
                                         </div>
                                    </div>
                                    
                                    
                                    <!--Inner row defined BEGIN-->
                                <!--<div class="row">-->
                                <!--    <div class="form-group">-->
                                <!--        <label class="col-md-3 control-label">Effective From Date</label>-->
                                <!--        <div class="col-md-8">-->
                                <!--               <div class="input-group input-daterange">-->
                                <!--                       <span class="input-group-addon"> Upto Date</span>-->
                                <!--               </div>-->
                                <!--        </div>-->
                                    <!--<div class="col-md-8">
                                        <input id="datepicker-default" required class="form-control" type="text"  placeholder="MENU_FROM_DT" id="MENU_FROM_DT" name="MENU_FROM_DT" data-date-format='dd-M-yy'>
                                    </div>
                                    </div>
                               </div><!--Inner row END
                                <div class="row"><!--Inner row defined BEGIN
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Upto Date</label>
                                    <div class="col-md-8">
                                        <input id="datepicker-autoClose" required class="form-control" type="text"  placeholder="MENU_UPTO_DT" id="MENU_UPTO_DT" name="MENU_UPTO_DT" data-date-format='dd-M-yy'>
                                    </div>-->
                                    <!--</div>-->
                               <!--</div> <!--Inner row END-->
                               
                               
                            </div><!-- SECOND COL-6 END-->
                        </div><!--OUTER row defined END-->
                        
                       <div class="pager form-group">
                             <div class="col-md-6 control-label">
                                
                                <button type="button" class="btn btn-info pull-left m-r-5 m-b-5" class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-target="#collapseOne">Parameters</button>
                                <!--<button class="btn btn-danger m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>-->
                                </div>
                             <div class="col-md-6">
                                 
                             </div>
                         </div>
                        <div class="well row panel-collapse collapse" id="collapseOne" aria-expanded="false" style="">
                            <div class="col-md-6 ui-sortable"><!-- FIRST COL-6 BEGIN-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 01</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_01"  name="MENU_PARA_01" id="MENU_PARA_01" value="<?php echo $menu1->MENU_PARA_01;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 02</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_02"  name="MENU_PARA_02" id="MENU_PARA_02"  value="<?php echo $menu1->MENU_PARA_02;?>"class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 03</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_03"  name="MENU_PARA_03" id="MENU_PARA_03" value="<?php echo $menu1->MENU_PARA_03;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 04</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_04"  name="MENU_PARA_04" id="MENU_PARA_04" value="<?php echo $menu1->MENU_PARA_04;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 05</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_05"  name="MENU_PARA_05" id="MENU_PARA_05" value="<?php echo $menu1->MENU_PARA_05;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 06</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_06"  name="MENU_PARA_06" id="MENU_PARA_06" value="<?php echo $menu1->MENU_PARA_06;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 07</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_07"  name="MENU_PARA_07" id="MENU_PARA_07" value="<?php echo $menu1->MENU_PARA_07;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 08</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_08"  name="MENU_PARA_08" id="MENU_PARA_08" value="<?php echo $menu1->MENU_PARA_08;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 09</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_09"  name="MENU_PARA_09" id="MENU_PARA_09" value="<?php echo $menu1->MENU_PARA_09;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 10</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_10"  name="MENU_PARA_10" id="MENU_PARA_10" value="<?php echo $menu1->MENU_PARA_10;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                            </div>
                            
                            <div class="col-md-6 ui-sortable"><!-- SECOND COL-6 BEGIN-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 11</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_11"  name="MENU_PARA_11" id="MENU_PARA_11" value="<?php echo $menu1->MENU_PARA_11;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 12</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_12"  name="MENU_PARA_12" id="MENU_PARA_12" value="<?php echo $menu1->MENU_PARA_12;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 13</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_13"  name="MENU_PARA_13" id="MENU_PARA_13" value="<?php echo $menu1->MENU_PARA_13;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 14</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_14"  name="MENU_PARA_14" id="MENU_PARA_14" value="<?php echo $menu1->MENU_PARA_14;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 15</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_15"  name="MENU_PARA_15" id="MENU_PARA_15" value="<?php echo $menu1->MENU_PARA_15;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 16</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_16"  name="MENU_PARA_16" id="MENU_PARA_16" value="<?php echo $menu1->MENU_PARA_16;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 17</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_17"  name="MENU_PARA_17" id="MENU_PARA_17" value="<?php echo $menu1->MENU_PARA_17;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 18</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_18"  name="MENU_PARA_18" id="MENU_PARA_18" value="<?php echo $menu1->MENU_PARA_18;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 19</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_19"  name="MENU_PARA_19" id="MENU_PARA_19" value="<?php echo $menu1->MENU_PARA_19;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                                <div class="row"><!--Inner row defined BEGIN-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Menu Parameter 20</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="MENU_PARA_20"  name="MENU_PARA_20" id="MENU_PARA_20" value="<?php echo $menu1->MENU_PARA_20;?>" class="form-control">
                                    </div>
                                    </div>
                                </div><!--Inner row END-->
                            </div>
                        </div>
                         <div class="pager form-group">
                             <div class="col-md-6 control-label">
                                
                                <!--<button class="btn btn-danger m-r-5 m-b-5 " id="clear_data" type="button">Clear</button>-->
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="Update" id="submit" value="Update">Update</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                             <div class="col-md-6">
                                 
                             </div>
                         </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end  -->
        
    </div>
         <!-- end row -->
            
</div>
<script>
   $(document).ready(function() {
    $('#myForm').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            MENU_MODULE: {
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Module is required and can\'t be empty'
                    }
                }
            },
	    MENU_DESC: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Description is required and can\'t be empty'
                    }
                
                }
            },
	    MENU_TXN_CODE: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Transaction Code is required and can\'t be empty'
                    }
                    
                }
            },
	    MENU_PARENT_CODE: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Parent Code is required and can\'t be empty'
                    }
                    
                }
            },
	    MENU_TYPE: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Type is required and can\'t be empty'
                    }
                }
            },
	    MENU_DISP_SEQ: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The Display Sequence is required and can\'t be empty'
                    }
                }
            },
            MENU_DEFINITION: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Definition Code is required and can\'t be empty'
                    }
                    
                }
            },
	    MENU_FROM_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu From Date is required and can\'t be empty'
                    }
                }
            },
	    MENU_UPTO_DT: {
		
                validators: {
		    
                    notEmpty: {
                        message: 'The Menu Upto Date is required and can\'t be empty'
                    }
                }
            }
	    
	}
    });
   });
</script>
<script>

$('#clear_data').click(function(){
    $('#myForm')[0].reset();
});                

    $(".MENU_UPD_DT").datepicker().datepicker("setDate", new Date());
    $('#MENU_DISP_SEQ').keyup(function () { 
        this.value = this.value.replace(/[^0-9\.]/g,'');
       // $('#err').show();
    });
        

    $(document).on('change','#MENU_MODULE',function(event){
        event.preventDefault();
        var menu_module = $("#MENU_MODULE").val();
        jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>" + "Apps/Get_menu_code",
        dataType: 'json',
        data: {menu_module: menu_module},
        success: function(json) {
        if (json)
        {
        // Show Entered Value
        //jQuery("div#result").show();
        document.getElementById("MENU_CODE").value =json.menu_code;
        var test1=document.getElementById("MENU_CODE").value;
        var res = test1.split("-");
        //alert(res[1]);
        var test = parseInt(res[1],10);
        ++test;
        test=pad(test,8);
        
        //alert(test);
        
        test=res[0]+'-'+test;
        
        
        document.getElementById("MENU_CODE").value=test;
        
        }
        }
        });
    });
     
     $(document).on('change','#MENU_MODULE',function(event){
         event.preventDefault();
         var menu_module = $("#MENU_MODULE").val();
         jQuery.ajax({
         type: "POST",
         url: "<?php echo base_url(); ?>" + "Apps/Get_Parant_Menu",
         
         data: {menu_module: menu_module},
         success: function(response)
         {
         
            document.getElementById("MENU_PARENT_CODE").innerHTML=response;
         }
         });
     });
     
    function pad(n, width, z) {
        z = z || '0';
        n = n + '';
        return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
    }
    
        
$(document).ready(function(){
   datepicker();
    
    $("#txtFromDate").datepicker({
        
    numberOfMonths: 2,
    onSelect: function(selected) {
        alert("hello");
        $("#txtToDate").datepicker("option","minDate", selected)
    }
    
});
$("#txtToDate").datepicker({ 
   numberOfMonths: 2,
   onSelect: function(selected) {
      $("#txtFromDate").datepicker("option","maxDate", selected)
   }
    });  
});
    
    
</script>


 <script>

</script>
 <script>
function datepicker()
{
    $('.datetimepicker1').datetimepicker({
      format: 'DD-MMM-YYYY'
      });
   $('.datetimepicker2').datetimepicker({
         format: 'DD-MMM-YYYY'
      });

   $(".datetimepicker1").on("dp.change",function (e) {
      $('.datetimepicker2').data("DateTimePicker").minDate(e.date);
   });
   $(".datetimepicker2").on("dp.change",function (e) {
      $('.datetimepicker1').data("DateTimePicker").maxDate(e.date);
   });

}
</script>
</body>
</html>