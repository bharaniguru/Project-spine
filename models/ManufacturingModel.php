<?php 
class ManufacturingModel extends CI_Model {

    function __construct()
    {
	parent::__construct();
    }
    
//************************************************1.Product Bill Of Material Start (Document Number MN001)****************************************************\\
//Author: Selvakumar S
//Functionality By: Selvakumar S
//Created on: 04/03/15
//Modified on: 24/03/15

//****Get Table Function Start****\\
    function GetProductBillTable()
    {
	$select= "SELECT * FROM MNFG_M_BOM_HEAD";
	return $this->db->query($select)->result_array();
    }
    
    function GetAppsValueSetLinesTableItem()
    {
	$select= "SELECT * FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_ITEMSRC' AND VSL_ACTIVE_YN = 'Y'";
	return $this->db->query($select)->result_array();    
    }
    
    function GetAppsValueSetLinesTableVar()
    {
	$select= "SELECT * FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_BOM_VAR' AND VSL_ACTIVE_YN = 'Y'";
	return $this->db->query($select)->result_array();    
    }
    
    function GetAppsValueSetLinesTablePro(){
	$select= "SELECT * FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_BOM_PRC' AND VSL_ACTIVE_YN = 'Y'";
	return $this->db->query($select)->result_array();    
    }
    
    function GetAppsValueSetLinesTableCycle()
    {
	$select= "SELECT * FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_BOM_CTY' AND VSL_ACTIVE_YN = 'Y'";
	return $this->db->query($select)->result_array();    
    }
    
    function GetINVT_M_ITEM()
    {
	$select="SELECT * FROM INVT_M_ITEM WHERE ITEM_PRODUCT_YN ='Y'";
	return $this->db->query($select)->result_array();
    }
    
    function GetINVT_M_ITEM2()
    {
	$select="SELECT * FROM INVT_M_ITEM ";
	return $this->db->query($select)->result_array();
    }
    function GetINVT_M_ITEM_UOM()
    {
	$select="SELECT distinct(IU_UOM_CODE) FROM INVT_M_ITEM_UOM ";
	return $this->db->query($select)->result_array();
    }
    function GetINVT_M_Location()
    {
	$loc=$this->session->userdata('USER_COMP_CODE');
	$select="SELECT * FROM INVT_M_LOCATION WHERE LOCN_COMP_CODE='$loc'";
	return $this->db->query($select)->result_array();
    }

//****Get Table Function Close****\\

//*****Insert Product Bill Of Material Start*****\\
    function ProductBillAdd()
    {
	if($this->input->post('active_yn')=="Y")
	{
	    $ACTIVE_YN ='Y';
	}
	else
	{
	    $ACTIVE_YN ='N';
	}
	$add1 = array(
		      array('name'=>':P_BH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
		      array('name'=>':P_BH_CODE', 'value'=>$this->input->post('pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
		      array('name'=>':P_BH_DESC', 'value'=>$this->input->post('pro_desc'),'type'=>SQLT_CHR, 'length'=>300),      
		      array('name'=>':P_BH_TCT', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_BH_FROM_DT', 'value'=>$this->input->post('from_date'),'type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_BH_UPTO_DT', 'value'=>$this->input->post('upto_date'),'type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_BH_ACTIVE_YN', 'value'=>$ACTIVE_YN, 'type'=>SQLT_CHR,'length'=>300),
		      array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
		      array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
		      array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
		      );
	$this->db->stored_procedure('SPINE_MNFG','INSERT_MNFG_M_BOM_HEAD', $add1);
        $result = array("return_status"=>$return_status
			,"error_message"=>$error_message );

	$data_count = count($this->input->post('bl_line'));
	for ($i=0; $i<$data_count-1; $i++)
	{
	    if($this->input->post('bl_active_yn')[$i]=="Y")
	    {
		$ACTIVE_YN ='Y';
	    }
	    else
	    {
		$ACTIVE_YN ='N';
	    }
	    $add2 = array(
			  array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_BL_BH_CODE', 'value'=>$this->input->post('pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
		          array('name'=>':P_BL_LINE', 'value'=>$_POST['bl_line'][$i],'type'=>SQLT_INT, 'length'=>300),      
		          array('name'=>':P_BL_ITEM_SRC', 'value'=>$_POST['bl_item_source'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_ITEM_CODE', 'value'=>$_POST['bl_item_code'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_ITEM_DESC', 'value'=>$_POST['bl_item_desc'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_UOM_CODE', 'value'=>$_POST['bl_uom'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_FACTOR', 'value'=>$_POST['bl_factor'][$i], 'type'=>SQLT_INT,'length'=>300),
		          array('name'=>':P_BL_QTY', 'value'=>$_POST['bl_qty'][$i], 'type'=>SQLT_INT,'length'=>300),	 
		          array('name'=>':P_BL_VARIABLE', 'value'=>$_POST['bl_variable'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_FORMULA', 'value'=>$_POST['bl_formula'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_PROC_LOCN', 'value'=>$_POST['bl_location'][$i],'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_PROCESS', 'value'=>$_POST['bl_process'][$i], 'type'=>SQLT_CHR,'length'=>300), 
		          array('name'=>':P_BL_INST_URL', 'value'=>$_POST['bl_instruction'][$i],'type'=>SQLT_CHR, 'length'=>300),      
		          array('name'=>':P_BL_CYCLE_TYPE', 'value'=>$_POST['bl_cycle_type'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_CYCLE_TIME', 'value'=>$_POST['bl_cycle_time'][$i],'type'=>SQLT_INT, 'length'=>300),
		          array('name'=>':P_BL_REPLN_TIME', 'value'=>$_POST['bl_replenish_time'][$i],'type'=>SQLT_INT, 'length'=>300),
		          array('name'=>':P_BL_ACTIVE_YN', 'value'=>$ACTIVE_YN, 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
		          array('name'=>':P_ERR_NUM', 'value'=>&$return_status_l, 'type'=>SQLT_CHR,'length'=>300),		 
		          array('name'=>':P_ERR_MSG', 'value'=>&$error_message_l, 'type'=>SQLT_CHR,'length'=>300)
			  );
	    $this->db->stored_procedure('SPINE_MNFG','INSERT_MNFG_M_BOM_LINES', $add2);
	    $result = array("return_status"=>$return_status_l
			    ,"error_message"=>$error_message_l );
	}
    }
//*****Insert Product Bill Of Material Close*****\\


//*****Edit Product Bill Of Material Start*****\\
    function EditProductBill($id)
    {
	$select= "SELECT * FROM MNFG_M_BOM_HEAD WHERE BH_CODE='$id' ";
        return  $query = $this->db->query($select, $return_object = TRUE)->result_array();
    }
    function ProductBillAddLines()
    {
	$data_count = count($this->input->post('bl_line'));
	for ($i=0; $i<$data_count-1; $i++)
	{
	    if($this->input->post('bl_active_yn')[$i]=="Y")
	    {
		$ACTIVE_YN ='Y';
	    }
	    else
	    {
		$ACTIVE_YN ='N';
	    }
	    $lines = array(
			  array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_BL_BH_CODE', 'value'=>$this->input->post('pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
		          array('name'=>':P_BL_LINE', 'value'=>$_POST['bl_line'][$i],'type'=>SQLT_INT, 'length'=>300),      
		          array('name'=>':P_BL_ITEM_SRC', 'value'=>$_POST['bl_item_source'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_ITEM_CODE', 'value'=>$_POST['bl_item_code'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_ITEM_DESC', 'value'=>$_POST['bl_item_desc'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_UOM_CODE', 'value'=>$_POST['bl_uom'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_FACTOR', 'value'=>$_POST['bl_factor'][$i], 'type'=>SQLT_INT,'length'=>300),
		          array('name'=>':P_BL_QTY', 'value'=>$_POST['bl_qty'][$i], 'type'=>SQLT_INT,'length'=>300),	 
		          array('name'=>':P_BL_VARIABLE', 'value'=>$_POST['bl_variable'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_FORMULA', 'value'=>$_POST['bl_formula'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_PROC_LOCN', 'value'=>$_POST['bl_location'][$i],'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_PROCESS', 'value'=>$_POST['bl_process'][$i], 'type'=>SQLT_CHR,'length'=>300), 
		          array('name'=>':P_BL_INST_URL', 'value'=>$_POST['bl_instruction'][$i],'type'=>SQLT_CHR, 'length'=>300),      
		          array('name'=>':P_BL_CYCLE_TYPE', 'value'=>$_POST['bl_cycle_type'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_CYCLE_TIME', 'value'=>$_POST['bl_cycle_time'][$i],'type'=>SQLT_INT, 'length'=>300),
		          array('name'=>':P_BL_REPLN_TIME', 'value'=>$_POST['bl_replenish_time'][$i],'type'=>SQLT_INT, 'length'=>300),
		          array('name'=>':P_BL_ACTIVE_YN', 'value'=>$ACTIVE_YN, 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
		          array('name'=>':P_ERR_NUM', 'value'=>&$return_status_l, 'type'=>SQLT_CHR,'length'=>300),		 
		          array('name'=>':P_ERR_MSG', 'value'=>&$error_message_l, 'type'=>SQLT_CHR,'length'=>300)
			  );
	    $this->db->stored_procedure('SPINE_MNFG','INSERT_MNFG_M_BOM_LINES', $lines);
	    $result = array("return_status"=>$return_status_l
			    ,"error_message"=>$error_message_l );	    
	}
    }
    
    function EditProductBill2($id)
    {
        $select= "SELECT * FROM MNFG_M_BOM_LINES WHERE BL_BH_CODE='$id' ";
        return  $query = $this->db->query($select, $return_object = TRUE)->result_array();
    }
//*****Edit Product Bill Of Material Close*****\\


//*****Update Product Bill Of Material Start*****\\	
    function ProductBillUpdate()
    {
	$add1 = array(
		      array('name'=>':P_BH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
		      array('name'=>':P_BH_CODE', 'value'=>$this->input->post('pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
		      array('name'=>':P_BH_DESC', 'value'=>$this->input->post('pro_desc'),'type'=>SQLT_CHR, 'length'=>300),      
		      array('name'=>':P_BH_TCT', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_BH_FROM_DT', 'value'=>$this->input->post('from_date'),'type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_BH_UPTO_DT', 'value'=>$this->input->post('upto_date'),'type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_BH_ACTIVE_YN', 'value'=>$this->input->post('active_yn'), 'type'=>SQLT_CHR,'length'=>300),
		      array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR, 'length'=>300),
		      array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
		      array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
		      array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
		      );
	$this->db->stored_procedure('SPINE_MNFG','UPDATE_MNFG_M_BOM_HEAD', $add1);
	$result = array("return_status"=>$return_status
			,"error_message"=>$error_message );
	
	$data_count = count($this->input->post('bl_line'));
	for ($i=0; $i<$data_count-1; $i++)
	{
	    if($this->input->post('bl_active_yn')[$i]=="Y")
	    {
		$ACTIVE_YN='Y';
	    }
	    else
	    {
		$ACTIVE_YN='N';
	    }
	    
	    $add2 = array(
			  array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_BL_BH_CODE', 'value'=>$this->input->post('pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
		          array('name'=>':P_BL_LINE', 'value'=>$_POST['bl_line'][$i],'type'=>SQLT_INT, 'length'=>300),      
		          array('name'=>':P_BL_ITEM_SRC', 'value'=>$_POST['bl_item_source'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_ITEM_CODE', 'value'=>$_POST['bl_item_code'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_ITEM_DESC', 'value'=>$_POST['bl_item_desc'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_UOM_CODE', 'value'=>$_POST['bl_uom'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_FACTOR', 'value'=>$_POST['bl_factor'][$i], 'type'=>SQLT_INT,'length'=>300),
		          array('name'=>':P_BL_QTY', 'value'=>$_POST['bl_qty'][$i], 'type'=>SQLT_INT,'length'=>300),	 
		          array('name'=>':P_BL_VARIABLE', 'value'=>$_POST['bl_variable'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_FORMULA', 'value'=>$_POST['bl_formula'][$i], 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_PROC_LOCN', 'value'=>$_POST['bl_location'][$i],'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_BL_PROCESS', 'value'=>$_POST['bl_process'][$i], 'type'=>SQLT_CHR,'length'=>300), 
		          array('name'=>':P_BL_INST_URL', 'value'=>$_POST['bl_instruction'][$i],'type'=>SQLT_CHR, 'length'=>300),      
		          array('name'=>':P_BL_CYCLE_TYPE', 'value'=>$_POST['bl_cycle_type'][$i],'type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_BL_CYCLE_TIME', 'value'=>$_POST['bl_cycle_time'][$i],'type'=>SQLT_INT, 'length'=>300),
		          array('name'=>':P_BL_REPLN_TIME', 'value'=>$_POST['bl_replenish_time'][$i],'type'=>SQLT_INT, 'length'=>300),
		          array('name'=>':P_BL_ACTIVE_YN', 'value'=>$ACTIVE_YN, 'type'=>SQLT_CHR,'length'=>300),
		          array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR, 'length'=>300),
		          array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
		          array('name'=>':P_ERR_NUM', 'value'=>&$return_status_l, 'type'=>SQLT_CHR,'length'=>300),		 
		          array('name'=>':P_ERR_MSG', 'value'=>&$error_message_l, 'type'=>SQLT_CHR,'length'=>300)
			  );
	    $data=$this->db->stored_procedure('SPINE_MNFG','UPDATE_MNFG_M_BOM_LINES', $add2);
	    $result = array("return_status"=>$return_status
			    ,"error_message"=>$error_message );
	}
    }
//*****Update Product Bill Of Material Close*****\\


//*****Delete Product Bill Of Material Start*****\\
    function productBillHeadDelete($bh_code)
    {
	$sql="SELECT * FROM MNFG_M_BOM_LINES where BL_BH_CODE='$bh_code' ";
	$result= $this->db->query($sql)->result_array();
	foreach($result as $row)
	{
	    $params1 = array(
			     array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_BL_BH_CODE', 'value'=>$row["BL_BH_CODE"], 'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_BL_ITEM_CODE', 'value'=>$row["BL_ITEM_CODE"],'type'=>SQLT_CHR, 'length'=>300 ),
			     array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),       
			     array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			     );
	    $this->db->stored_procedure('Spine_Mnfg','DELETE_MNFG_M_BOM_LINES', $params1);
	    $result = array("return_status"=>$return_status
			    ,"error_message"=>$error_message);
	}
	
	    $delete1 = array(
			     array('name'=>':P_BH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_BH_CODE', 'value'=>$bh_code, 'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR, 'length'=>300 ),
			     array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),     
			     array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			     );
	    $this->db->stored_procedure('Spine_Mnfg','DELETE_MNFG_M_BOM_HEAD', $delete1);
	    $result = array("return_status"=>$return_status
			    ,"error_message"=>$error_message );
    }
    
    function productBillLine_Delete($bl_bh_code,$bl_item_code)
    {
	$delete2 = array(
			 array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_BL_BH_CODE', 'value'=>$bl_bh_code, 'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_BL_ITEM_CODE', 'value'=>$bl_item_code,'type'=>SQLT_CHR, 'length'=>300 ),
			 array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),       
			 array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			 );
	$this->db->stored_procedure('Spine_Mnfg','DELETE_MNFG_M_BOM_LINES', $delete2);
	$result = array("return_status"=>$return_status
			,"error_message"=>$error_message );
    }
//*****Delete Product Bill Of Material Close*****\\
    
    
//**************************************************1.Product Bill Of Material End (Document Number MN001)*******************************************************\\



//***************************************************2.Production Terminal Start (Document Number MN002)*******************************************************\\

//****Get Table Function Start****\\
    function GetProductionTerminalTable()
    {
	$select= "SELECT DISTINCT PT_PROD_CODE,PT_TERMINAL_DESC FROM MNFG_M_PROD_TERMINAL";
	return $this->db->query($select)->result_array();
    }

    function GetAppsValueSetLineTable()
    {
	$select= "SELECT * FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE ='MNFG_BOM_PRC' AND VSL_ACTIVE_YN = 'Y'";
	return $this->db->query($select)->result_array();
    }    
//****Get Table Function Close****\\


//****Insert Production Terminal Start****\\
    function AddProductTerminalTable()
    {
	if($this->input->post('pt_active_yn')=="Y")
	{
	    $active='Y';
	}
	else
	{
	    $active='N';
	}
	$terminal = array(
			  array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_PROD_CODE', 'value'=>$this->input->post('pt_pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
			  array('name'=>':P_PT_TERMINAL', 'value'=>$this->input->post('pt_terminal_mac'),'type'=>SQLT_INT, 'length'=>300),      
		    	  array('name'=>':P_PT_TERMINAL_DESC','value'=>$this->input->post('pt_terminal_desc'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_PROCESS', 'value'=>$this->input->post('pt_process'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_FROM_DT', 'value'=>$this->input->post('pt_from_date'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_UPTO_DT', 'value'=>$this->input->post('pt_upto_date'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_ACTIVE_YN','value'=>$active, 'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_COMPLETED_QTY', 'value'=>null,'type'=>SQLT_CHR,'length'=>300),	 
			  array('name'=>':P_PT_WIP_QTY', 'value'=>null,'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_WIP_BEGIN_TIME', 'value'=>null, 'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_WIP_EMP_CODE', 'value'=>null,'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_USER_ID', 'value'=> $this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
			  array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			  );
	$this->db->stored_procedure('SPINE_MNFG','INSERT_MNFG_M_PROD_TERMINAL', $terminal);
	$result = array("return_status"=>$return_status
			,"error_message"=>$error_message );
    }
//****Insert Production Terminal Close****\\

    
//****Edit Production Terminal Start****\\
    function EditProductTerminalTable($code)
    {
	$select="SELECT * FROM MNFG_M_PROD_TERMINAL WHERE PT_PROD_CODE ='$code'";
	return $this->db->query($select)->result_array();
    }
//****Edit Production Terminal Close****\\


//****Update Production Terminal Start****\\
    function UpdateProduct()
    {
	$terminal = array(
			  array('name'=>':P_BL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_PROD_CODE', 'value'=>$this->input->post('pt_pro_code'), 'type'=>SQLT_CHR,'length'=>300), 
			  array('name'=>':P_PT_TERMINAL', 'value'=>$this->input->post('pt_terminal_mac'),'type'=>SQLT_INT, 'length'=>300),      
		    	  array('name'=>':P_PT_TERMINAL_DESC','value'=>$this->input->post('pt_terminal_desc'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_PROCESS', 'value'=>$this->input->post('pt_process'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_FROM_DT', 'value'=>$this->input->post('pt_from_date'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_UPTO_DT', 'value'=>$this->input->post('pt_upto_date'),'type'=>SQLT_CHR, 'length'=>300),
			  array('name'=>':P_PT_ACTIVE_YN','value'=>$this->input->post('pt_active_yn'), 'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_COMPLETED_QTY', 'value'=>null,'type'=>SQLT_CHR,'length'=>300),	 
			  array('name'=>':P_PT_WIP_QTY', 'value'=>null,'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_WIP_BEGIN_TIME', 'value'=>null, 'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_PT_WIP_EMP_CODE', 'value'=>null,'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_USER_ID', 'value'=> $this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
			  array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			  array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			  );
	    $this->db->stored_procedure('SPINE_MNFG','UPDATE_MNFG_M_PROD_TERMINAL', $terminal);
	    $result = array("return_status"=>$return_status
			    ,"error_message"=>$error_message );
    }
//****Update Production Terminal Close****\\
    

//****Delete Production Terminal Start****\\

    function ProductionTerminalProduct_Delete($code)
    {
	$sql="SELECT * FROM MNFG_M_PROD_TERMINAL WHERE PT_PROD_CODE ='$code'";
	$result= $this->db->query($sql)->result_array();
	foreach($result as $row)
	{
	    $delete = array(
			    array('name'=>':P_PT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			    array('name'=>':P_PT_TERMINAL', 'value'=>$row['PT_TERMINAL'], 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2),'type'=>SQLT_CHR, 'length'=>300 ),
			    array('name'=>':P_USER_ID', 'value'=> $this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),       
			    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			    );
	    $this->db->stored_procedure('Spine_Mnfg','DELETE_MNFG_M_PROD_TERMINAL', $delete);
	    $result = array("return_status"=>$return_status
			    ,"error_message"=>$error_message );
	}
    }
//****Delete Production Terminal Close****\\
//****************************************************2.Production Terminal Close (Document Number MN002)*******************************************************\\




//*****************************************************3.Production Resource Start (Document Number MN003)********************************************************\\

//****Get Table Function Start****\\
    function GetProductionResourceTable()
    {
	$select= "SELECT * FROM MNFG_M_RESOURCE";
	return $this->db->query($select)->result_array();
    }
    
    function GetAppsValueSetLineRole()
    {
	$get= "SELECT * FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_ROLE' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC  ";
	return $this->db->query($get)->result_array();
    }
    
    function GetAppsValueSetLineNat()
    {
	$get= "SELECT *  FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'APP_NATIONAL'";
	return $this->db->query($get)->result_array();
    }
    
    function GetManufactureMResource(){
	$get= "SELECT * FROM MNFG_M_RESOURCE WHERE RS_ACTIVE_YN ='Y'";
	return $this->db->query($get)->result_array();
    }
    
//****Get Table Function Close****\\
    
//****Insert Production Resource Start****\\
    function AddProductionResource()
    {
	if($this->input->post('rs_active_yn')=="Y")
	{
	    $rs_active_yn = 'Y';
	}
	else
	{
	    $rs_active_yn = 'N';
	}
	$url=$config['upload_path'] ='upload/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->load->library('upload', $config);
	$this->upload->do_upload('load_images');
	$data =  $this->upload->data();
	$path=base_url().$url.$data['file_name'];
	$data['file_name'];
	$product = array(
			 array('name'=>':P_RS_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_RS_CODE', 'value'=>$this->input->post('rs_code'), 'type'=>SQLT_CHR,'length'=>300), 
                         array('name'=>':P_RS_NAME', 'value'=>$this->input->post('rs_name'),'type'=>SQLT_CHR, 'length'=>300),      
			 array('name'=>':P_RS_NATIONALITY', 'value'=>$this->input->post('rs_nationality'),'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_DOB', 'value'=>$this->input->post('rs_dob'),'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_PHONE', 'value'=>$this->input->post('rs_phone'),'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_MOBILE', 'value'=>$this->input->post('rs_mobile'), 'type'=>SQLT_CHR,'length'=>300),                
			 array('name'=>':P_RS_IMAGE_FILE', 'value'=>$data['file_name'], 'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_ROLE_CODE', 'value'=>$this->input->post('rs_role'), 'type'=>SQLT_CHR,'length'=>300), 
			 array('name'=>':P_RS_SUPERVISOR_CODE', 'value'=>$this->input->post('rs_supervisor'), 'type'=>SQLT_CHR,'length'=>300),      
			 array('name'=>':P_RS_MANAGER_CODE', 'value'=>$this->input->post('rs_manager'), 'type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_RS_FROM_DT', 'value'=>$this->input->post('rs_from_date'),'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_UPTO_DT', 'value'=>$this->input->post('rs_upto_date'),'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_ACTIVE_YN', 'value'=>$rs_active_yn, 'type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_RS_CRNT_PROC_LOCN', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_CRNT_PROC', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_CRNT_PROC_TIME', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),      
			 array('name'=>':P_RS_LAST_PROC_LOCN', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_LAST_PROC', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_RS_LAST_PROC_TIME', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			 array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'),'type'=>SQLT_CHR,'length'=>300),	 
			 array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			 array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			 );
	$this->db->stored_procedure('SPINE_MNFG','INSERT_MNFG_M_RESOURCE', $product);
	$result = array("return_status"=>$return_status
			,"error_message"=>$error_message );	
    }
//****Insert Production Resource Close****\\


//****Edit Production Resource Start****\\
    function EditProResource($id)
    {
	$edit= "SELECT * FROM MNFG_M_RESOURCE WHERE RS_CODE='$id'";
	return $this->db->query($edit)->result_array();
    }
//****Edit Production Resource Close****\\    


//****Update Production Resource Start****\\        
    function ProductResourceUpdate()
    {
	if($_FILES["load_images"]["name"]!="")
	{
	    $url=$config['upload_path'] ='upload/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('load_images');
	    $data =  $this->upload->data();
	    $path=base_url().$url.$data['file_name'];
	}
	else
	{
	    echo $data['file_name']=$this->input->post('oldfile');
	}
	    
	    $product = array(
			     array('name'=>':P_RS_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_RS_CODE', 'value'=>$this->input->post('rs_code'), 'type'=>SQLT_CHR,'length'=>300), 
                             array('name'=>':P_RS_NAME', 'value'=>$this->input->post('rs_name'),'type'=>SQLT_CHR, 'length'=>300),      
			     array('name'=>':P_RS_NATIONALITY', 'value'=>$this->input->post('rs_nationality'),'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_DOB', 'value'=>$this->input->post('rs_dob'),'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_PHONE', 'value'=>$this->input->post('rs_phone'),'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_MOBILE', 'value'=>$this->input->post('rs_mobile'), 'type'=>SQLT_CHR,'length'=>300),                 
			     array('name'=>':P_RS_IMAGE_FILE', 'value'=>$data['file_name'], 'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_ROLE_CODE', 'value'=>$this->input->post('rs_role'), 'type'=>SQLT_CHR,'length'=>300), 
			     array('name'=>':P_RS_SUPERVISOR_CODE', 'value'=>$this->input->post('rs_supervisor'), 'type'=>SQLT_CHR,'length'=>300),      
			     array('name'=>':P_RS_MANAGER_CODE', 'value'=>$this->input->post('rs_manager'), 'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_RS_FROM_DT', 'value'=>$this->input->post('rs_from_date'),'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_UPTO_DT', 'value'=>$this->input->post('rs_upto_date'),'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_ACTIVE_YN', 'value'=>$this->input->post('rs_active_yn'), 'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_RS_CRNT_PROC_LOCN', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_CRNT_PROC', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_CRNT_PROC_TIME', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),      
			     array('name'=>':P_RS_LAST_PROC_LOCN', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_LAST_PROC', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_RS_LAST_PROC_TIME', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
			     array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_USER_ID', 'value'=> $this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),	 
			     array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			     array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			     );
	    $this->db->stored_procedure('SPINE_MNFG','UPDATE_MNFG_M_RESOURCE', $product);
	    $result = array("return_status"=>$return_status
			    ,"error_message"=>$error_message );
    }
//****Update Production Resource Close****\\    
    

//****Delete Production Resource Start****\\    
    function ProductResource_Delete($id)
    {
	$delete = array(
			array('name'=>':P_RS_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			array('name'=>':P_RS_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
			array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2),'type'=>SQLT_CHR, 'length'=>300 ),
			array('name'=>':P_USER_ID', 'value'=> $this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),       
			array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			);
	$this->db->stored_procedure('Spine_Mnfg','DELETE_MNFG_M_RESOURCE', $delete);
	$result = array("return_status"=>$return_status
			,"error_message"=>$error_message );
    }
//****Delete Production Resource Close****\\  
    
//*************************************************3.Production Resource Close (Document Number MN003)********************************************************\\


//***************************************************4.Production Staging Start (Document Number MN004)********************************************************\\    
    function FetchProductionStaging($emp_code)
    {
	$params = array(
			array('name'=>':P_PH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR,'length'=>300),
			array('name'=>':P_PH_STAG_EMP_CODE', 'value'=>$emp_code, 'type'=>SQLT_CHR, 'length'=>300),
			array('name'=>':P_PH_STAG_TERMINAL', 'value'=>'00-1A-A0-10-48-5A', 'type'=>SQLT_CHR, 'length'=>300),
			array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2),'type'=>SQLT_CHR, 'length'=>300 ),
			array('name'=>':P_USER_ID', 'value'=> $this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
			array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300),
			array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
			array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
			);
	$this->db->stored_procedure('Spine_Mnfg',' INSERT_MNFG_T_PROD_HEAD ', $params);
	$sql="SELECT * FROM  MNFG_T_PROD_HEAD where PH_SYS_ID='$sys_id'";
	return $result= $this->db->query($sql)->result_array();
    }

//****************************************************4.Production Staging Close (Document Number MN004)********************************************************\\    
}