<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Application</a></li>
	<li><a href="javascript:;">Define</a></li>
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Add Transaction Head Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Add Transaction Head Master <small> Enter ahe correct details here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<div class="col-md-12">
	    <!-- begin panel -->
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Transaction Head Master</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <div class="col-md-offset-2 col-md-9">
			<form id="form_validation" class="form-horizontal" method="post" action="<?php echo site_url('Apps/TransactionHeadMaster_Add')?>">
			    <div class="form-group">
				<label class="col-md-3 control-label">Transaction Head Code</label>
				<div class="col-md-4">
				    <input type="text" name="txn_code" id="txn_code" class="form-control" placeholder="TXH_CODE" />
				</div>				
				<div class="col-md-offset-1 col-md-2 checkbox">
					<label>
					    <input type="checkbox"  checked="checked" value="Y" name="checkbox" id="checkbox">						
					    Active?
					</label>
				    </div>
			    </div>
			    
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-7">
				    <input type="text" name="txn_desc" id="txn_desc" class="form-control" placeholder="TXH_DESC" />
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Flow Sequence</label>
				<div class="col-md-7">
				    <input type="text" name="flow_seq" id="flow_seq" class="form-control" placeholder="TXH_FLOW_SEQ" />
				</div>
			    </div>
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group">
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    <button class="btn btn-md btn-info " onclick=" Clear();" id="clear_data" type="button"> Reset </button>
				    <input type="submit" class="btn btn-md btn-success" name="add" id="submit_but" value="Save" >
				 </div>
			      </div>
			</form>
		    </div>
		</div>
	    </div>
	    <!-- end panel -->
	</div>
	<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->

<script type="text/javascript">
$(document).ready(function() {
    $('#form_validation').bootstrapValidator({
        message: 'This value is not valid',
	container: 'tooltip',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            txn_code: {
		message: 'The username is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 100,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp:{
			regexp: /^[A-Z]+$/,
			message: 'The  Transaction Code consist of Capital Letters only and don\'t use white space '
		    },
		    remote:{
			message: 'The  TRANSACTION HEAD CODE IS ALREADY EXISTS',
			url: '<?php  echo site_url('Apps/AjaxCheckTxnHeadCode')?>',
			type: 'POST'
		    }
                }
            },
	    
	   
	    
	    txn_desc: {
		message: 'The Trans Discription is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Discription is required and can\'t be empty'
                    }
                }
            },
	    
	    flow_seq: {
		message: 'The Folow Sequence is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Folow Sequence is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 1,
                        max: 3,
                        message: 'The Folow Sequence  must be more than 1 and less than 3 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Folow Sequence can only consist of number, dot and underscore'
                    }
                }
            }
	    
	   
	}
    });
    $('#clear_data').click(function(){
    $('#form_validation').trigger("reset");
}); 
});


</script>

	
	
</body>

</html>

