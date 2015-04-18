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
	<li><a href="javascript:;">Address</a></li>
	<li class="active">Edit Transaction Head Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Edit Transaction Head Master <small> Enter ahe correct details here...</small></h1>
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
		    <h4 class="panel-title">Transaction Head master</h4>
		</div>
		<div class="panel-body">
		    <p style="color: #EB4688"><?php if (isset($error_message)) { echo $error_message; } ?></p>
		    <p style="color: #EB4688"><?php if (isset($status)) { echo $status; } ?></p>
		    <div class="col-md-offset-2 col-md-9">
			<?php foreach($row as $ethm) ?>
			<form id="form_validation" class="form-horizontal" method="post" action="<?php echo site_url('Apps/TransactionHeadMaster_Edit/'.$ethm['TXH_CODE'])?>">
			    <div class="form-group">
				<label class="col-md-3 control-label">Transaction Header Code</label>
				<div class="col-md-4">
				    <input type="text" class="form-control" value="<?php echo $ethm['TXH_CODE']; ?>" readonly placeholder="TXH_CODE" id="txn_code"  name="txn_code">
				</div>
				<div class="col-md-offset-1 col-md-2 checkbox">
					<label>
					    <input type="checkbox" value='Y' name="checkbox"  id="checkbox" <?php if($ethm['TXH_ACTIVE_YN']=='Y') echo "checked";  ?>>						
					    Active ?
					</label>
				    </div>				
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-7">
				    <input type="text" class="form-control" value="<?php echo $ethm['TXH_DESC']; ?>"  id="txn_desc" name="txn_desc" placeholder="TXH_DESC">
				</div>
			    </div>
			    <div class="form-group">
				<label class="col-md-3 control-label">Flow Sequence</label>
				<div class="col-md-7">
				    <input type="text" class="form-control" value="<?php echo $ethm['TXH_FLOW_SEQ']; ?>"  id="flow_seq"   name="flow_seq" placeholder="TXH_FLOW_SEQ">
				</div>
			    </div>
			   <div class="col-md-offset-3 col-md-6">
				 <div class="form-group">
				    <label class="col col-4"></label>
				    <button class="btn btn-md btn-danger " onclick="window.history.back();" type="button"> Cancel </button>
				    
				    <input type="submit" class="btn btn-md btn-success" name="save" id="submit_but" value="Update" >
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
		message: 'The Transaction Code is not valid',
                validators: {
		    
                    notEmpty: {
                        message: 'The Transaction Code is required and can\'t be empty'
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
});
</script>

	
	
</body>

</html>

