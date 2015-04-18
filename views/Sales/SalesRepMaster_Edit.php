<? error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<? $CI =& get_instance();?>
<div class="content" id="content">


    <ol class="breadcrumb pull-right">
        <li>
            <a href="javascript:;">Sales</a>
        </li>

        <li>
            <a href="javascript:;">Sale Representation Master</a>
        </li>

        <li class="active">Edit</li>
    </ol>
    <h1 class="page-header">Sales Representative Master <small> You may edit here...</small></h1><!-- end page-header -->
    <!-- begin row -->

    <div class="row">
        <!-- begin  -->

        <div class="ui-sortable">
            <!-- begin panel -->

            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a class="btn btn-xs btn-icon btn-circle btn-default fa fa-expand" data-click="panel-expand" href="javascript:;" style="font-style: italic"></a> <a class=
                        "btn btn-xs btn-icon btn-circle btn-success fa fa-repeat" data-click="panel-reload" href="javascript:;" style="font-style: italic"></a> <a class=
                        "btn btn-xs btn-icon btn-circle btn-warning fa fa-minus" data-click="panel-collapse" href="javascript:;" style="font-style: italic"></a> 
                        <!--<a data-click="panel-remove" class="btn btn-xs btn-icon btn-circle btn-danger" href="javascript:;"><i class="fa fa-times"></i></a>-->
                    </div>

                    <h4 class="panel-title">Sales Representative Master Edit</h4>
                </div>

                <div class="panel-body">
                        <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
                    <form action="<?php echo base_url();?>Sales/SalesRepMaster_Edit" class="form-horizontal" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                        <div class="row">
                            <!--OUTER row defined BEGIN-->

                            <div class="col-md-6 ui-sortable">
                                <!-- FIRST COL-6 BEGIN-->

                                <div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Company Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_COMP_CODE" name="SR_COMP_CODE" placeholder="SR_COMP_CODE" type="text" value="<?php echo $sr[0]['SR_COMP_CODE']; ?>">
                                        </div>
                                    </div>
                                </div><!--Inner row hidden END-->

                                <div class="row hidden">
                                    <!--Inner row hidden defined BEGIN-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Language Code</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_LANG_CODE" name="SR_LANG_CODE" placeholder="SR_LANG_CODE" type="text" value="<?php echo $sr[0]['SR_LANG_CODE']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row hidden">
                               

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Updated date</label>

                                        <div class="col-md-8">
                                            <input class="form-control" class="SR_UPD_DT" name="SR_UPD_DT" placeholder="SR_UPD_DT" type="text" value="<?php echo $sr[0]['SR_UPD_DT']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row hidden">
                                  

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Updater User Id</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_UPD_UID" name="SR_UPD_UID" placeholder="SR_UPD_UID" type="text" "value="<?php echo $sr[0]['SR_UPD_UID']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee Code</label>

                                        <div class="col-md-8">
                                            <input readonly class="form-control" id="SR_CODE" name="SR_CODE" placeholder="SR_CODE" type="text" value="<?php echo $sr[0]['SR_CODE']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                               

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">First Name</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_FIRST_NAME" name="SR_FIRST_NAME" placeholder="SR_FIRST_NAME" type="text" value="<?php echo $sr[0]['SR_FIRST_NAME']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Last Name</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_LAST_NAME" name="SR_LAST_NAME" placeholder="SR_LAST_NAME" type="text" value="<?php echo $sr[0]['SR_LAST_NAME']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Office Phone</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_OFFICE_PHONE" name="SR_OFFICE_PHONE" placeholder="SR_OFFICE_PHONE" type="text" value="<?php echo $sr[0]['SR_OFFICE_PHONE']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Home Phone</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_HOME_PHONE" name="SR_HOME_PHONE" placeholder="SR_HOME_PHONE" type="text" value="<?php echo $sr[0]['SR_HOME_PHONE']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Cell Phone</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_CELL_PHONE" name="SR_CELL_PHONE" placeholder="SR_CELL_PHONE" type="text" value="<?php echo $sr[0]['SR_CELL_PHONE']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email ID</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="SR_EMAIL" name="SR_EMAIL" placeholder="SR_EMAIL" type="text" value="<?php echo $sr[0]['SR_EMAIL']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Manager</label>

                                        <div class="col-md-8">
                                            <select class="form-control" id="SR_MANAGER_CODE" name="SR_MANAGER_CODE">
                                                <?php
                                            if($ac_mang>0){
                                            foreach($ac_mang  as $row){
                                               if(($sr[0]['SR_MANAGER_CODE'])==($row['SR_CODE'])){ ?>
                                                    <option selected="selected" value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME']; ?></option>
                                        <?php   }
                                                    if(($sr[0]['SR_MANAGER_CODE'])!=($row['SR_CODE'])){?>
                                                       <option value="<?php echo $row['SR_CODE'];?>"><?php echo $row['SR_FIRST_NAME'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Role</label>

                                        <div class="col-md-8">
                                            <select class="form-control" id="SR_ROLE_CODE" name="SR_ROLE_CODE">
                                        <?php
                                            if($get_role>0){
                                            foreach($get_role  as $row){
                                               if(($sr[0]['SR_ROLE_CODE'])==($row['VSL_CODE'])){
                                        ?>          <option selected="selected" value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC']; ?></option>
                                        <?php   }
                                                    if(($sr[0]['SR_ROLE_CODE'])!=($row['VSL_CODE'])){?>
                                                       <option value="<?php echo $row['VSL_CODE'];?>"><?php echo $row['VSL_DESC'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Location</label>

                                        <div class="col-md-8">
                                            <select class="form-control" id="SR_LOCN_CODE" name="SR_LOCN_CODE">
                                        <?php
                                            if($get_locn>0){
                                            foreach($get_locn  as $row){
                                               if(($sr[0]['SR_LOCN_CODE'])==($row['LOCN_CODE'])){
                                        ?>          <option selected="selected" value="<?php echo $row['LOCN_CODE'];?>"><?php echo $row['LOCN_DESC']; ?></option>
                                        <?php   }
                                                    if(($sr[0]['SR_LOCN_CODE'])!=($row['SR_CODE'])){?>
                                                       <option value="<?php echo $row['LOCN_CODE'];?>"><?php echo $row['LOCN_DESC'];?></option>
                                                       <?php
                                                    }
                                            }
                                            }
                                        ?>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--Inner row END-->
                            </div><!--FIRST COL-6 END-->

                            <div class="col-md-6 ui-sortable">
                               

                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>

                                        <div class="col-md-8">
                                            <div class="checkbox">
                                                <label><input <?php if('Y'==( $sr[0]['SR_ACTIVE_YN'])){
                                                                                    echo 'checked="checked"';
                                                                                    }else{
                                                                                        
                                                                                    }
                                                                    ?>
                                                                name="SR_ACTIVE_YN" type="checkbox"> Active?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                           

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>

                                        <div class="col-md-8"><img class="media-object" height="50%" id="show_image" name="show_image" src="<?php echo base_url();?>upload/sales/<?php echo $sr[0]['SR_IMAGE_FILE'];?>" width="50%"></div>
                                    </div>
                                </div>

                                <div class="row">
                            

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>

                                        <div class="col-md-8">
                                            <input class=" btn btn-sm btn-success" id="new" name="userfile" onchange="PreviewImage();" type="file" >
                                             <input type="hidden" name="old_file_name" value="<?php echo $sr[0]['SR_IMAGE_FILE']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pager form-group">
                             <div class="col-md-6 control-label">
                                <button  class="btn btn-primary m-r-5 m-b-5" type="submit"  name="update" id="update" value="Update">Update</button>
                                <button  class="btn btn-default m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                             </div>
                             <div class="col-md-6">
                                 
                             </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function() {


$('#myForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        
        fields: {
            SR_COMP_CODE: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    regexp: {
                       regexp: /^[A-Z0-9]\S+$/,
                        message: 'Disallowed charcter Caps can allow'
                    }
                }
            },
            SR_CODE: {
		message: 'The Description is not valid',
                validators: {
                    //remote: {
                    //    message: 'Employee code is already existed',
                    //    url: '<?php  echo site_url('Sales/Ajaxemploye')?>',
                    //    type: 'POST'
                    //},
                    regexp: {
                       regexp: /^[A-Z0-9]+$/,
                        message: 'Disallowed charcter Caps can allow'
                    }
                    
                }
            },
            SR_FIRST_NAME: {
		message: 'The Exchanging Rate is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                }
            },
            SR_LAST_NAME: {
		message: 'The Currency Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    SR_OFFICE_PHONE: {
		message: 'The Payment term Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
            SR_HOME_PHONE: {
		message: 'The Credit Limit is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    regexp: {
                       regexp: /^[0-9-]+$/,
                        message: 'Disallowed Character'
                    }
                    
                } 
            },
	    SR_CELL_PHONE: {
		message: 'The Disc Grsce days is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    },
                    regexp: {
                       regexp: /^[0-9]+$/,
                        message: 'Disallowed Character'
                    }
                    
                }
            },
	    SR_EMAIL: {
		message: 'The Statement Cycle Code is not valid',
                validators: {

                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }                 
                }
            },
	    SR_MANAGER_CODE: {
		message: 'The Manager Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
	    SR_ROLE_CODE: {
		message: 'The SP Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }                    
                }
            },
            SR_LOCN_CODE: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            },
            CC_UPTO_DT: {
		trigger:'blur',
                validators: {
                    
		    notEmpty: {
                    message: 'The date is required and cannot be empty'
                    }
                }
            }
	}
    });
});
</script>

<script>
    $('#clear_data').click(function(){
        $(myForm).bootstrapValidator();
        $(myForm).data('bootstrapValidator').resetForm();
        $('#myForm')[0].reset();
         document.getElementById("show_image").src="<?php echo base_url();?>assets/img/user-15.jpg";
    });

function PreviewImage() {
      var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("new").files[0]);
   
          oFReader.onload = function (oFREvent) {
      var data1=document.getElementById("show_image").src = oFREvent.target.result;
           
          };
    };
    
</script>
</body>
</html>