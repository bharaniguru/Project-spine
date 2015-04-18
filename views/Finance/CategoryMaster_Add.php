   
	
	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Finance</a></li>
		   
		    <li class="active">Category Master</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<!-- end page-header -->
		
		<!-- begin row -->
		<div class="row">
		    <!-- begin col-10 -->
		    <div class="col-md-12">
			<!-- begin panel -->
		<p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">New Category Mater</h4>
		    
		</div>
	    <div class="panel-body">
		<div class="">
		    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Finance/CategoryMaster_Add		'); ?>" class="form-horizontal">
		    <div class="col-md-6">
			
			<div class="col-md-12">
			    <div class="form-group">
				    <label class="col-md-3 control-label">Category Code</label>
				   
				    <div class="col-md-6">
					<input type="text" name="CATG_CODE" id="CATG_CODE" class="form-control 	" placeholder="CATG_CODE" />
				    </div>
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<label class="col-md-3 control-label">Descripition</label>
				<div class="col-md-9">
					<input type="text" name="CATG_DESC" id="CATG_DESC" class="form-control" placeholder="CATG_DESC" />
				    </div>
			    </div>
			</div>
			
			
			
			
		    </div>
		    <div class="col-md-6">
			<div class="row">
                        <section class="col col-2">
                        <label class="">
                        <input type="checkbox" name="checkbox" checked="" value="Y" id="ck1" > Active ?
                        </label>
                        </section>
                        </div>
		    </div>
		   
		    <h4 class="col-md-12">&nbsp;</h4>
		    <div class=" col-md-12">
		   <div class=" col-md-6 col-md-offset-3">
		    <div class="form-group">
                                <div class="col-md-offset-2 col-md-2">
				    <button class="btn btn-sm btn-danger" type="button" onclick="window.history.back();">Cancel</button>
                                </div>
				<div class="col-md-2">
				    <button class="btn btn-sm btn-info" type="reset" onclick="form_reset();" >Reset</button>
                                </div>
				<div class="col-md-2">
				    <input type="submit" name="Save"class="btn btn-sm btn-success"  value="Save">
                                </div>
                            </div>
		   </div>
		    </form>
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
<script type="text/javascript">
 $(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            CATG_CODE: {
		message: 'The Category Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Category Code is required and can\'t be empty'
                    },
		    remote: {
                        message: 'Category Code IS ALREADY EXISTS',
                        url: '<?php  echo site_url('Finance/Ajax_CATG_CODE')?>',
                        type: 'POST'
                    },
		    regexp: {
                        regexp: /^[A-Z0-9]+$/,
                        message: 'Category Code can consist of alphabetical characters and number only, Space not allowed'
                    }
                }
            },
	    
	    CATG_DESC: {
		message: 'The Category description  is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Category description  is required and can\'t be empty'
                    }
                }
            }
	   
	   
	}
    });
});
   

</script>

