<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SalesModel extends CI_Model {
    
    
    public function AddSaleMaster($target_file,$file_name){
	//$config['upload_path'] = 'upload/';
	//$config['allowed_types'] = 'gif|jpg|png|html|doc|txt|docx';
	//$config['max_size'] = '100000';
	//
	//$this->load->library('upload', $config);
	//$file_name=basename($_FILES["userfile"]["name"]);
	//$target_file =base_url().$config['upload_path'] . basename($_FILES["userfile"]["name"]);
	//$this->upload->do_upload();//doing upload function
        $file_name=$file_name;
        $target_file=$target_file;
	$active=$this->input->post('SR_ACTIVE_YN');
	if($active=='on'){
		$active='Y';
	}else{
	
		$active='N';
            }
	//$data=array(
	//		'SR_COMP_CODE'=>$this->input->post('SR_COMP_CODE'),
	//		'SR_CODE'=>$this->input->post('SR_CODE'),
	//		'SR_FIRST_NAME'=>$this->input->post('SR_FIRST_NAME'),
	//		'SR_LAST_NAME'=>$this->input->post('SR_LAST_NAME'),
	//		'SR_LOCN_CODE'=>$this->input->post('SR_LOCN_CODE'),
	//		'SR_EMAIL'=>$this->input->post('SR_EMAIL'),
	//		'SR_OFFICE_PHONE'=>$this->input->post('SR_OFFICE_PHONE'),
	//		'SR_HOME_PHONE'=>$this->input->post('SR_HOME_PHONE'),
	//		'SR_CELL_PHONE'=>$this->input->post('SR_CELL_PHONE'),
	//		'SR_MANAGER_CODE'=>$this->input->post('SR_MANAGER_CODE'),
	//		'SR_ROLE_CODE'=>$this->input->post('SR_ROLE_CODE'),
	//		'SR_IMAGE_BLOB'=>Null,
	//		'SR_IMAGE_FILE'=>$file_name,
	//		'SR_ACTIVE_YN'=>$active,
	//		'SR_LANG_CODE'=>$this->input->post('SR_LANG_CODE'),
	//		'SR_CR_UID'=>$this->input->post('SR_CR_UID'),
	//		'SR_CR_DT'=>'10-MAR-15'
	//		//'SR_UPD_UID'=>$this->input->post('sr_upd_uid'),
	//		//'SR_UPD_DT'=>$this->input->post('sr_upd_dt')
	//	   );
	////print_r($data);
	////exit;
	//$this->db->insert('SALE_M_SALES_REP',$data);
	//return true;
	//   
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
        // $imgdata = file_get_contents($imgdata['full_path']);//get the content of the image using its path
         //$imgdata = base64_encode($imgdata);
         //echo "<img src='".$imgdata."'>";
         //echo "<img src='".$target_file."'>";
         //exit;
         //$decoded= base64_decode($imgdata);
         //echo "<pre>".$decoded."</pre>";
	$active=$this->input->post('SR_ACTIVE_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';
            }
        $params = array(
        array('name'=>':P_SR_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_CODE', 'value'=>$this->input->post('SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_FIRST_NAME', 'value'=>$this->input->post('SR_FIRST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SR_LAST_NAME', 'value'=>$this->input->post('SR_LAST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_LOCN_CODE', 'value'=>$this->input->post('SR_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_EMAIL', 'value'=>$this->input->post('SR_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_OFFICE_PHONE', 'value'=>$this->input->post('SR_OFFICE_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_SR_HOME_PHONE', 'value'=>$this->input->post('SR_HOME_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_CELL_PHONE', 'value'=>$this->input->post('SR_CELL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_MANAGER_CODE', 'value'=>$this->input->post('SR_MANAGER_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_SR_ROLE_CODE', 'value'=>$this->input->post('SR_ROLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_IMAGE_FILE', 'value'=>$file_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('SR_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_SALES_REP', $params);
         return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    public function ViewSalesRepMaster()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
	 $sql="SELECT SR_COMP_CODE,SR_CODE,SR_FIRST_NAME,SR_LAST_NAME,SR_LOCN_CODE,SR_EMAIL,SR_OFFICE_PHONE,SR_HOME_PHONE,SR_CELL_PHONE,SR_MANAGER_CODE,SR_ROLE_CODE,SR_IMAGE_FILE,SR_ACTIVE_YN,SR_LANG_CODE,SR_CR_UID,SR_CR_DT,SR_UPD_UID,SR_UPD_DT  FROM SALE_M_SALES_REP where SR_COMP_CODE='$session_company_name'";
	return $this->db->query($sql, $return_object = TRUE)->result();
    }
    
    function GetSaleRole(){
        $sql="SELECT VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='SALE_ROLE' AND VSL_ACTIVE_YN='Y' ORDER BY VSL_DESC ASC";
	return $this->db->query($sql)->result_array(); 
    }
    
    function GetSaleLocn(){
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT LOCN_CODE,LOCN_DESC FROM INVT_M_LOCATION where LOCN_COMP_CODE='$session_company_name' ORDER BY LOCN_DESC ASC";
	return $this->db->query($sql)->result_array(); 
    }
    function Ajaxemployee($SR_CODE)
    {
	$sql="SELECT SR_CODE FROM SALE_M_SALES_REP WHERE SR_CODE='$SR_CODE'";
	$result=$this->db->query($sql)->result_array();
	  return Count($result);
    }
    function EditSalesRepMaster($cmp_code,$sr_code)
    {
        
        $sql="SELECT *  FROM SALE_M_SALES_REP where SR_COMP_CODE='$cmp_code' and SR_CODE='$sr_code'";
	return $this->db->query($sql)->result_array();
    }
    
    public function UpdateSalesRepMaster($file_name){
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
	$active=$this->input->post('SR_ACTIVE_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';
            }
        $params = array(
        array('name'=>':P_SR_COMP_CODE', 'value'=>$this->input->post('SR_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_CODE', 'value'=>$this->input->post('SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_FIRST_NAME', 'value'=>$this->input->post('SR_FIRST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SR_LAST_NAME', 'value'=>$this->input->post('SR_LAST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_LOCN_CODE', 'value'=>$this->input->post('SR_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_EMAIL', 'value'=>$this->input->post('SR_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_OFFICE_PHONE', 'value'=>$this->input->post('SR_OFFICE_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_SR_HOME_PHONE', 'value'=>$this->input->post('SR_HOME_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_CELL_PHONE', 'value'=>$this->input->post('SR_CELL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_MANAGER_CODE', 'value'=>$this->input->post('SR_MANAGER_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_SR_ROLE_CODE', 'value'=>$this->input->post('SR_ROLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_IMAGE_FILE', 'value'=>$file_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('SR_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print"<pre>";
        //print_r($params);
        //print"</pre>";
        //exit;
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_SALES_REP', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        //print"<pre>";
        //print_r($result);
        //print"</pre>";
        //exit;
    }
    
    function DeleteSalesRepMaster($SR_COMP_CODE,$SR_CODE,$SR_LANG_CODE,$SR_CR_UID)
    {
        $params = array(
        array('name'=>':P_SR_COMP_CODE', 'value'=>$SR_COMP_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SR_CODE', 'value'=>$SR_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$SR_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$SR_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_SALES_REP', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    //Sale REp Master Over
    //***Currency Master Starts
    
    function AjaxCurrencyy($CCY_CODE)
    {
	$sql="SELECT CCY_CODE FROM SALE_M_CURRENCY WHERE CCY_CODE='$CCY_CODE'";
	$result=$this->db->query($sql)->result_array();
	return Count($result);
    }
    
    function ViewCurrency()
    {
	header('Content-Type: text/html; charset=utf-8');
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_M_CURRENCY where CCY_COMP_CODE='$session_company_name'";
	return $this->db->query($sql, $return_object = TRUE)->result();
    }
    
    function Currencyonerow($comp_code,$ccy_code)
    {
	$sql="SELECT *  FROM SALE_M_CURRENCY where CCY_COMP_CODE='$comp_code' and CCY_CODE='$ccy_code'";
	return $this->db->query($sql, $return_object = TRUE)->result();
    }
    
    
    
    function AddCurrency()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
	$active=$this->input->post('CCY_ACTIVE_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';
            }
        $params = array(
        array('name'=>':P_CCY_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_CODE', 'value'=>$this->input->post('CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_DESC', 'value'=>$this->input->post('CCY_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_CCY_SYMBOL', 'value'=>$this->input->post('CCY_SYMBOL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_PRECISION', 'value'=>$this->input->post('CCY_PRECISION'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_FORMAT', 'value'=>$this->input->post('CCY_FORMAT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_FROM_DT', 'value'=>$this->input->post('CCY_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_CCY_UPTO_DT', 'value'=>$this->input->post('CCY_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('CCY_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_CURRENCY', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    function CurrencyUpdate()
    {
        $session_data = $this->session->userdata('USER_ID');
        $active=$this->input->post('CCY_ACTIVE_YN');
        if($active=='on'){
                $active='Y';
        }else{

        $active='N';
        }
        $params = array(
        array('name'=>':P_CCY_COMP_CODE', 'value'=>$this->input->post('CCY_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_CODE', 'value'=>$this->input->post('CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_DESC', 'value'=>$this->input->post('CCY_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_CCY_SYMBOL', 'value'=>$this->input->post('CCY_SYMBOL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_PRECISION', 'value'=>$this->input->post('CCY_PRECISION'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_FORMAT', 'value'=>$this->input->post('CCY_FORMAT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_FROM_DT', 'value'=>$this->input->post('CCY_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_CCY_UPTO_DT', 'value'=>$this->input->post('CCY_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('CCY_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_CURRENCY', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    function CurrencyDelete($CCY_COMP_CODE,$CCY_CODE,$CCY_LANG_CODE,$CCY_CR_UID)
    {
        $params = array(
        array('name'=>':P_CCY_COMP_CODE', 'value'=>$CCY_COMP_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCY_CODE', 'value'=>$CCY_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$CCY_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$CCY_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CURRENCY', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
//***Currency Master end

//Payterm master start

     function AjaxPaytmm($PT_CODE)
    {
	
	$sql="SELECT PT_CODE FROM SALE_M_PAY_TERM WHERE PT_CODE='$PT_CODE'";
	$result=$this->db->query($sql)->result_array();
	return Count($result);
    }
    
    function AddPayment()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
        $active=$this->input->post('PT_ACTIVE_YN');
        if($active=='on'){
                $active='Y';
        }else{

        $active='N';
        }
        $params =   array(
                    array('name'=>':P_PT_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_CODE', 'value'=>$this->input->post('PT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_DESC', 'value'=>$this->input->post('PT_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_PT_FROM_DT', 'value'=>$this->input->post('PT_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_UPTO_DT', 'value'=>$this->input->post('PT_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('PT_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                    );
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_PAY_TERM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    function ViewPayTerm()
    {   
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_M_PAY_TERM where PT_COMP_CODE='$session_company_name'";
	return $this->db->query($sql, $return_object = TRUE)->result();
    }
    
    function paygetonerow($comp_code,$pt_code)
    {
        $sql="SELECT *  FROM SALE_M_PAY_TERM where PT_COMP_CODE='$comp_code' and PT_CODE='$pt_code'";
	return $this->db->query($sql, $return_object = TRUE)->result();    
    }
    
    function PayTermUpdate()
    {
        $session_data = $this->session->userdata('USER_ID');
        $active=$this->input->post('PT_ACTIVE_YN');
        if($active=='on'){
                $active='Y';
        }else{

        $active='N';
        }

        $params =   array(
                    array('name'=>':P_PT_COMP_CODE', 'value'=>$this->input->post('PT_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_CODE', 'value'=>$this->input->post('PT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_DESC', 'value'=>$this->input->post('PT_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_PT_FROM_DT', 'value'=>$this->input->post('PT_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_UPTO_DT', 'value'=>$this->input->post('PT_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_PT_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('PT_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                    );
	$this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_PAY_TERM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    function PayDelete($PT_COMP_CODE,$PT_CODE,$PT_LANG_CODE,$PT_CR_UID)
    {
        $params = array(
        array('name'=>':P_PT_COMP_CODE', 'value'=>$PT_COMP_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PT_CODE', 'value'=>$PT_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$PT_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$PT_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_PAY_TERM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            
    }
    //Pay Term MaSter over
    
    //Customer Class Master Starts
    
    function AjaxClasss($CC_CODE)
    {
	$sql="SELECT CC_CODE FROM SALE_M_CUST_CLASS WHERE CC_CODE='$CC_CODE'";
	$result=$this->db->query($sql)->result_array();
	return Count($result);
    }
    
     function ViewCustomerClass()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_M_CUST_CLASS where CC_COMP_CODE='$session_company_name'";
	return $this->db->query($sql, $return_object = TRUE)->result();
    }
    
    function GetExch(){
        $sql="SELECT *  FROM APPS_VALUE_SET_LINES where VSL_VSH_CODE='SALE_EX_CODE' ORDER BY VSL_DESC ASC";
	return $this->db->query($sql, $return_object = TRUE)->result();
    }
    
    function GetCycleCode(){
        $sql="SELECT *  FROM APPS_VALUE_SET_LINES where VSL_VSH_CODE='SALE_STMT_CY' ORDER BY VSL_DESC ASC";
	return $this->db->query($sql, $return_object = TRUE)->result();  
    }
    
    function GetCurrency(){
        $sql="SELECT * FROM SALE_M_CURRENCY ORDER BY CCY_DESC ASC ";
	return $this->db->query($sql, $return_object = TRUE)->result();
        
    }
    
    function GetPayTerm(){
        $sql="SELECT * FROM SALE_M_PAY_TERM ORDER BY PT_DESC ASC";
	return $this->db->query($sql, $return_object = TRUE)->result();   
    }
    
    function GetAcMang(){
        $sql="SELECT SR_CODE,SR_FIRST_NAME FROM SALE_M_SALES_REP WHERE SR_ROLE_CODE='SR10' AND SR_ACTIVE_YN='Y' ORDER BY SR_FIRST_NAME ASC";
	return $this->db->query($sql)->result_array();    
    }
    
    function GetSpcode(){
        $sql="SELECT SR_CODE,SR_FIRST_NAME FROM SALE_M_SALES_REP WHERE SR_ROLE_CODE='SR01' ORDER BY SR_FIRST_NAME ASC";
	return $this->db->query($sql)->result_array();
    }
    
    function AddCustClass()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
        
        $active=$this->input->post('CC_ACTIVE_YN');
        if($active=='on'){
                $active='Y';
        }else{
        $active='N';
        }
        $Dunning=$this->input->post('CC_SEND_DUNNING_YN');
        if($Dunning=='on'){
                $Dunning='Y';
        }else{

        $Dunning='N';
        }
        $Statement=$this->input->post('CC_SEND_STMT_YN');
        if($Statement=='on'){
                $Statement='Y';
        }else{

        $Statement='N';
        }
        $credit=$this->input->post('CC_CREDIT_CHECK_YN');
        if($credit=='on'){
                $credit='Y';
        }else{

        $credit='N';
        }
        $Discount=$this->input->post('CC_DISC_YN');
        if($Discount=='on'){
                $Discount='Y';
        }else{

        $Discount='N';
        }

        $params =   array(
                    array('name'=>':P_CC_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_CODE', 'value'=>$this->input->post('CC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_DESC', 'value'=>$this->input->post('CC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_EXCHG_RATE_CODE', 'value'=>$this->input->post('CC_EXCHG_RATE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_CCY_CODE', 'value'=>$this->input->post('CC_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_PAY_TERM_CODE', 'value'=>$this->input->post('CC_PAY_TERM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_CREDIT_CHECK_YN', 'value'=>$credit, 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_CREDIT_LIMIT', 'value'=>$this->input->post('CC_CREDIT_LIMIT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_DISC_GRACE_DAYS', 'value'=>$this->input->post('CC_DISC_GRACE_DAYS'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_DISC_YN', 'value'=>$Discount, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_SEND_STMT_YN', 'value'=>$Statement, 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_SEND_DUNNING_YN', 'value'=>$Dunning, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_STMT_CYCLE_CODE', 'value'=>$this->input->post('CC_STMT_CYCLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_AC_MANAGER', 'value'=>$this->input->post('CC_AC_MANAGER'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_SP_CODE', 'value'=>$this->input->post('CC_SP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_FROM_DT', 'value'=>$this->input->post('CC_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_UPTO_DT', 'value'=>$this->input->post('CC_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('CC_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                    );
	$this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_CUST_CLASS', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    function custclassgetonerow($comp_code,$classcode)
    {
        $sql="SELECT *  FROM SALE_M_CUST_CLASS where CC_COMP_CODE='$comp_code' and CC_CODE='$classcode'";
	return $this->db->query($sql, $return_object = TRUE)->result();    
    }
    
    function UpdateCustClass()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
        
        $active=$this->input->post('CC_ACTIVE_YN');
        if($active=='on'){
                $active='Y';
        }else{

        $active='N';
        }
        $Dunning=$this->input->post('CC_SEND_DUNNING_YN');
        if($Dunning=='on'){
                $Dunning='Y';
        }else{

        $Dunning='N';
        }
        $Statement=$this->input->post('CC_SEND_STMT_YN');
        if($Statement=='on'){
                $Statement='Y';
        }else{

        $Statement='N';
        }
        $credit=$this->input->post('CC_CREDIT_CHECK_YN');
        if($credit=='on'){
                $credit='Y';
        }else{

        $credit='N';
        }
        $Discount=$this->input->post('CC_DISC_YN');
        if($Discount=='on'){
                $Discount='Y';
        }else{

        $Discount='N';
        }

        $params =   array(
                    array('name'=>':P_CC_COMP_CODE', 'value'=>$this->input->post('CC_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_CODE', 'value'=>$this->input->post('CC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_DESC', 'value'=>$this->input->post('CC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_EXCHG_RATE_CODE', 'value'=>$this->input->post('CC_EXCHG_RATE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_CCY_CODE', 'value'=>$this->input->post('CC_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_PAY_TERM_CODE', 'value'=>$this->input->post('CC_PAY_TERM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_CREDIT_CHECK_YN', 'value'=>$credit, 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_CREDIT_LIMIT', 'value'=>$this->input->post('CC_CREDIT_LIMIT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_DISC_GRACE_DAYS', 'value'=>$this->input->post('CC_DISC_GRACE_DAYS'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_DISC_YN', 'value'=>$Discount, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_SEND_STMT_YN', 'value'=>$Statement, 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_SEND_DUNNING_YN', 'value'=>$Dunning, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_STMT_CYCLE_CODE', 'value'=>$this->input->post('CC_STMT_CYCLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_AC_MANAGER', 'value'=>$this->input->post('CC_AC_MANAGER'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_SP_CODE', 'value'=>$this->input->post('CC_SP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_CC_FROM_DT', 'value'=>$this->input->post('CC_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_UPTO_DT', 'value'=>$this->input->post('CC_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_CC_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('CC_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                    );
        //print"<pre>";
        //print_r($params);
        //print"</pre>";
        //exit;
	$this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_CUST_CLASS', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    
    
    }
    
    function CustClassDelete($CC_COMP_CODE,$CC_CODE,$CC_LANG_CODE,$CC_CR_UID){
        $params = array(
        array('name'=>':P_CC_COMP_CODE', 'value'=>$CC_COMP_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CC_CODE', 'value'=>$CC_CODE, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$CC_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$CC_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CUST_CLASS', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            
    }
    //Customer Class Master ended
    //Customer Master Starts
    
    function AjaxCustomerr($CUST_AC_CODE)
    {
	$sql="SELECT CUST_AC_CODE FROM SALE_M_CUSTOMER WHERE CUST_AC_CODE ='$CUST_AC_CODE'";
	$result= $this->db->query($sql)->result_array();
	return Count($result);
	
    }
    
    function ViewCustomerMaster(){
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_M_CUSTOMER";
	return $this->db->query($sql)->result_array();	
    }
    
    function GetPartyType(){
        $sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='SALE_PARTY'";
	return $this->db->query($sql)->result_array();
    }
    
    function GetAcType(){
        $sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='SALE_AC_TYPE'";
	return $this->db->query($sql)->result_array();
    }
    
    function GetCustTitle(){
        $sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='SALE_TITLE'";
	return $this->db->query($sql)->result_array();
    }
    

    function GetCustClassCode(){
        $sql="SELECT CC_CODE,CC_DESC FROM SALE_M_CUST_CLASS";
	return $this->db->query($sql)->result_array();
    }
    
    function AddCustomerMaster(){
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('CUST_ACTIVE_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
        
        
        $Dunning=$this->input->post('CUST_SEND_DUNNING_YN');
        if($Dunning=='on'){
                $Dunning='Y';
        }else{

        $Dunning='N';
        }
        $Statement=$this->input->post('CUST_SEND_STMT_YN');
        if($Statement=='on'){
                $Statement='Y';
        }else{

        $Statement='N';
        }
        $credit=$this->input->post('CUST_CREDIT_CHECK_YN');
        if($credit=='on'){
                $credit='Y';
        }else{

        $credit='N';
        }
        $Discount=$this->input->post('CUST_DISC_YN');
        if($Discount=='on'){
                $Discount='Y';
        }else{

        $Discount='N';
        }
            
        $params1 = array(
        array('name'=>':P_CUST_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_TYPE','value'=>$this->input->post('CUST_PARTY_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_DESC','value'=>$this->input->post('CUST_PARTY_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_ALIAS','value'=>$this->input->post('CUST_PARTY_ALIAS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_URL','value'=>$this->input->post('CUST_PARTY_URL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_TYPE','value'=>$this->input->post('CUST_AC_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_CODE','value'=>$this->input->post('CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_DESC','value'=>$this->input->post('CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD1','value'=>$this->input->post('CUST_SITE_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD2','value'=>$this->input->post('CUST_SITE_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD3','value'=>$this->input->post('CUST_SITE_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD4','value'=>$this->input->post('CUST_SITE_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_CN_CODE','value'=>$this->input->post('CUST_SITE_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ST_CODE','value'=>$this->input->post('CUST_SITE_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_CT_CODE','value'=>$this->input->post('CUST_SITE_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_CT_AR_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_POSTAL','value'=>$this->input->post('CUST_SITE_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_MOBILE','value'=>$this->input->post('CUST_SITE_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_PHONE','value'=>$this->input->post('CUST_SITE_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_FAX','value'=>$this->input->post('CUST_SITE_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_EMAIL','value'=>$this->input->post('CUST_SITE_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_PERSON_NAME','value'=>$this->input->post('CUST_SITE_PERSON_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD1','value'=>$this->input->post('CUST_BILL_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD2','value'=>$this->input->post('CUST_BILL_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD3','value'=>$this->input->post('CUST_BILL_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD4','value'=>$this->input->post('CUST_BILL_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_CN_CODE','value'=>$this->input->post('CUST_BILL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ST_CODE','value'=>$this->input->post('CUST_BILL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_CT_CODE','value'=>$this->input->post('CUST_BILL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_CT_AR_CODE','value'=>$this->input->post('CUST_BILL_CT_AR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_POSTAL','value'=>$this->input->post('CUST_BILL_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_MOBILE','value'=>$this->input->post('CUST_BILL_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_PHONE','value'=>$this->input->post('CUST_BILL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_FAX','value'=>$this->input->post('CUST_BILL_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_EMAIL','value'=>$this->input->post('CUST_BILL_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_PERSON_NAME','value'=>$this->input->post('CUST_BILL_PERSON_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_TITLE','value'=>$this->input->post('CUST_PERSON_TITLE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_FIRST_NAME','value'=>$this->input->post('CUST_PERSON_FIRST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_MIDDLE_NAME','value'=>$this->input->post('CUST_PERSON_MIDDLE_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_LAST_NAME','value'=>$this->input->post('CUST_PERSON_LAST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CLASS_CODE','value'=>$this->input->post('CUST_CLASS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_EXCHG_RATE_CODE','value'=>$this->input->post('CUST_EXCHG_RATE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CCY_CODE','value'=>$this->input->post('CUST_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PAY_TERM_CODE','value'=>$this->input->post('CUST_PAY_TERM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CREDIT_CHECK_YN','value'=>$credit, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CREDIT_LIMIT','value'=>$this->input->post('CUST_CREDIT_LIMIT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_DISC_GRACE_DAYS','value'=>$this->input->post('CUST_DISC_GRACE_DAYS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_DISC_YN','value'=>$Discount, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SEND_STMT_YN','value'=>$Statement, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SEND_DUNNING_YN','value'=>$Dunning, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_STMT_CYCLE_CODE','value'=>$this->input->post('CUST_STMT_CYCLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_MANAGER','value'=>$this->input->post('CUST_AC_MANAGER'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SR_CODE','value'=>$this->input->post('CUST_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FROM_DT','value'=>$this->input->post('CUST_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_UPTO_DT','value'=>$this->input->post('CUST_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_ACTIVE_YN','value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_01','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_02','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_03','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_04','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_05','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_06','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_07','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_08','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_09','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_10','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_11','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_12','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_13','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_14','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_15','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_16','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_17','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_18','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_19','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_20','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE','value'=>$this->input->post('CUST_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300),
	);
	$this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_CUSTOMER', $params1);
        $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );

	  $row_count=count($this->input->post('CCONT_NAME'));
	 for($i=0;$i<$row_count-1;$i++){
	    $ccont=$_POST['CCONT_ACTIVE_YN'][$i];
	    if($ccont=='on'){
		    $ccont='Y';
	    }else{
	
		$ccont='N';                                     
            }
           
            
	    $params2 = array(
	    array('name'=>':P_CCONT_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_AC_CODE','value'=>$this->input->post('CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_NAME','value'=>$_POST['CCONT_NAME'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_MOBILE','value'=>$_POST['CCONT_MOBILE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_PHONE','value'=>$_POST['CCONT_PHONE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_EMAIL','value'=>$_POST['CCONT_EMAIL'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_LINKEDIN','value'=>$_POST['CCONT_LINKEDIN'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_FACEBOOK','value'=>$_POST['CCONT_FACEBOOK'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_TWITTER','value'=>$_POST['CCONT_TWITTER'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_FROM_DT','value'=>$_POST['CCONT_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_UPTO_DT','value'=>$_POST['CCONT_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_ACTIVE_YN','value'=>$ccont, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_LANG_CODE','value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300),
	   
	     );
//            print"<pre>";
//	     print_r($params2);
//	     print"</pre>";
        
	    $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_CUSTOMER_CONTACT', $params2);
	    $result2 = array("return_status"=>$return_status,"error_message"=>$error_message );
	    
	}

	 
	

    $files = $_FILES;
    $cpt = count($_FILES['CDOC_FILE_NAME']['name']);
    for($i=0; $i<$cpt-1; $i++)
    {

        $_FILES['CDOC_FILE_NAME']['name']= $files['CDOC_FILE_NAME']['name'][$i];
        $_FILES['CDOC_FILE_NAME']['type']= $files['CDOC_FILE_NAME']['type'][$i];
        $_FILES['CDOC_FILE_NAME']['tmp_name']= $files['CDOC_FILE_NAME']['tmp_name'][$i];
        $_FILES['CDOC_FILE_NAME']['error']= $files['CDOC_FILE_NAME']['error'][$i];
        $_FILES['CDOC_FILE_NAME']['size']= $files['CDOC_FILE_NAME']['size'][$i];
	    $config['upload_path'] = 'upload/sales/';
	    $config['allowed_types'] = 'gif|jpg|png|html|doc|txt|docx';
	    $config['max_size']  = '100000';
	    $config['max_width'] = '10240';
	    $config['max_height'] = '7680';
	    $config['encrypt_name'] = TRUE;
            
	    $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('CDOC_FILE_NAME');
	    $file_data=$this->upload->data();
            $file_name=$file_data['file_name'];
            $file_size=$file_data['file_size'];
	    $target_file =base_url().$config['upload_path'] . $file_name;    
	    $doc=$_POST['CDOC_ACTIVE_YN'][$i];
	    if($doc=='on'){
		    $doc='Y';
	    }else{
	
		$doc='N';                                     
            }            
            $params3 = array(
	   
	    array('name'=>':P_CDOC_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_AC_CODE','value'=>$this->input->post('CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_SR_NO','value'=>$_POST['CDOC_SR_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_FILE_NAME','value'=>$file_name, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_SIZE','value'=>$file_size, 'type'=>SQLT_CHR, 'length'=>300),
	    //array('name'=>':P_CDOC_BLOB','value'=>$this->input->post('CDOC_BLOB'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_DESC','value'=>$_POST['CDOC_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_FROM_DT','value'=>$_POST['CDOC_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_UPTO_DT','value'=>$_POST['CDOC_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_ACTIVE_YN','value'=>$doc, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_LANG_CODE','value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300),
	     );
	     //print"<pre>";
	     //print_r($params3);
	     //print"</pre>";
	    $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_CUSTOMER_DOCS', $params3);
	    $result3 = array("return_status"=>$return_status,"error_message"=>$error_message );

    }
     //print"<pre>";
         //print_r($result1['error_message']);
         //print"</pre>";
         //print"<pre>";
         //print_r($result2);
         //print"</pre>";
         //print"<pre>";
         //print_r($result3);
         //print"</pre>";
         //exit;
    }
    
    function EditCustMaster($comp_code,$cust_ac_code){
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
        //$sql="SELECT * FROM SALE_M_CUSTOMER 
        //         JOIN SALE_M_CUSTOMER_CONTACT
        //        ON SALE_M_CUSTOMER.CUST_AC_CODE='$cust_ac_code' AND SALE_M_CUSTOMER_CONTACT.CCONT_AC_CODE='$cust_ac_code' 
        //        AND SALE_M_CUSTOMER.CUST_COMP_CODE='$comp_code' AND SALE_M_CUSTOMER_CONTACT.CCONT_COMP_CODE='$comp_code'
        //        JOIN SALE_M_CUSTOMER_DOCS
        //        ON SALE_M_CUSTOMER.CUST_AC_CODE='$cust_ac_code' AND SALE_M_CUSTOMER_DOCS.CDOC_AC_CODE='$cust_ac_code'
        //        AND SALE_M_CUSTOMER.CUST_COMP_CODE='$comp_code' AND SALE_M_CUSTOMER_DOCS.CDOC_COMP_CODE='$comp_code'";
        $sql="SELECT *  FROM SALE_M_CUSTOMER where CUST_COMP_CODE='$comp_code' and CUST_AC_CODE='$cust_ac_code'";
	return $this->db->query($sql)->result_array();
    }
    
    function EditCustContact($comp_code,$cust_ac_code){
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
        $sql="SELECT *  FROM SALE_M_CUSTOMER_CONTACT where CCONT_COMP_CODE='$comp_code' and CCONT_AC_CODE='$cust_ac_code'";
	return $result=$this->db->query($sql)->result_array();
    }
    
    function EditCustDoc($comp_code,$cust_ac_code){
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
        $sql="SELECT CDOC_COMP_CODE,CDOC_AC_CODE  FROM SALE_M_CUSTOMER_DOCS where CDOC_COMP_CODE='$comp_code' and CDOC_AC_CODE='$cust_ac_code'";
	return $result=$this->db->query($sql)->result_array();
    }
    
    function UpdateCustomerMaster(){
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('CUST_ACTIVE_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
        
        
        $Dunning=$this->input->post('CUST_SEND_DUNNING_YN');
        if($Dunning=='on'){
                $Dunning='Y';
        }else{

        $Dunning='N';
        }
        $Statement=$this->input->post('CUST_SEND_STMT_YN');
        if($Statement=='on'){
                $Statement='Y';
        }else{

        $Statement='N';
        }
        $credit=$this->input->post('CUST_CREDIT_CHECK_YN');
        if($credit=='on'){
                $credit='Y';
        }else{

        $credit='N';
        }
        $Discount=$this->input->post('CUST_DISC_YN');
        if($Discount=='on'){
                $Discount='Y';
        }else{

        $Discount='N';
        }
            
        $params1 = array(
        array('name'=>':P_CUST_COMP_CODE','value'=>$this->input->post('CUST_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_TYPE','value'=>$this->input->post('CUST_PARTY_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_DESC','value'=>$this->input->post('CUST_PARTY_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_ALIAS','value'=>$this->input->post('CUST_PARTY_ALIAS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PARTY_URL','value'=>$this->input->post('CUST_PARTY_URL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_TYPE','value'=>$this->input->post('CUST_AC_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_CODE','value'=>$this->input->post('CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_DESC','value'=>$this->input->post('CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD1','value'=>$this->input->post('CUST_SITE_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD2','value'=>$this->input->post('CUST_SITE_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD3','value'=>$this->input->post('CUST_SITE_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ADD4','value'=>$this->input->post('CUST_SITE_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_CN_CODE','value'=>$this->input->post('CUST_SITE_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_ST_CODE','value'=>$this->input->post('CUST_SITE_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_CT_CODE','value'=>$this->input->post('CUST_SITE_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_CT_AR_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_POSTAL','value'=>$this->input->post('CUST_SITE_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_MOBILE','value'=>$this->input->post('CUST_SITE_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_PHONE','value'=>$this->input->post('CUST_SITE_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_FAX','value'=>$this->input->post('CUST_SITE_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_EMAIL','value'=>$this->input->post('CUST_SITE_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SITE_PERSON_NAME','value'=>$this->input->post('CUST_SITE_PERSON_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD1','value'=>$this->input->post('CUST_BILL_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD2','value'=>$this->input->post('CUST_BILL_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD3','value'=>$this->input->post('CUST_BILL_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ADD4','value'=>$this->input->post('CUST_BILL_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_CN_CODE','value'=>$this->input->post('CUST_BILL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_ST_CODE','value'=>$this->input->post('CUST_BILL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_CT_CODE','value'=>$this->input->post('CUST_BILL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_CT_AR_CODE','value'=>$this->input->post('CUST_BILL_CT_AR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_POSTAL','value'=>$this->input->post('CUST_BILL_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_MOBILE','value'=>$this->input->post('CUST_BILL_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_PHONE','value'=>$this->input->post('CUST_BILL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_FAX','value'=>$this->input->post('CUST_BILL_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_EMAIL','value'=>$this->input->post('CUST_BILL_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_BILL_PERSON_NAME','value'=>$this->input->post('CUST_BILL_PERSON_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_TITLE','value'=>$this->input->post('CUST_PERSON_TITLE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_FIRST_NAME','value'=>$this->input->post('CUST_PERSON_FIRST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_MIDDLE_NAME','value'=>$this->input->post('CUST_PERSON_MIDDLE_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PERSON_LAST_NAME','value'=>$this->input->post('CUST_PERSON_LAST_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CLASS_CODE','value'=>$this->input->post('CUST_CLASS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_EXCHG_RATE_CODE','value'=>$this->input->post('CUST_EXCHG_RATE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CCY_CODE','value'=>$this->input->post('CUST_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_PAY_TERM_CODE','value'=>$this->input->post('CUST_PAY_TERM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CREDIT_CHECK_YN','value'=>$credit, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_CREDIT_LIMIT','value'=>$this->input->post('CUST_CREDIT_LIMIT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_DISC_GRACE_DAYS','value'=>$this->input->post('CUST_DISC_GRACE_DAYS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_DISC_YN','value'=>$Discount, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SEND_STMT_YN','value'=>$Statement, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SEND_DUNNING_YN','value'=>$Dunning, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_STMT_CYCLE_CODE','value'=>$this->input->post('CUST_STMT_CYCLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_MANAGER','value'=>$this->input->post('CUST_AC_MANAGER'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_SR_CODE','value'=>$this->input->post('CUST_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FROM_DT','value'=>$this->input->post('CUST_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_UPTO_DT','value'=>$this->input->post('CUST_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_ACTIVE_YN','value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_01','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_02','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_03','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_04','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_05','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_06','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_07','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_08','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_09','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_10','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_11','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_12','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_13','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_14','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_15','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_16','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_17','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_18','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_19','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_FLEX_20','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE','value'=>$this->input->post('CUST_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300),
       
        );
        

        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_CUSTOMER', $params1);
        $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );

	 $row_count=count($this->input->post('CCONT_NAME'));
	 for($i=0;$i<$row_count-1;$i++){
	    $ccont=$_POST['CCONT_ACTIVE_YN'][$i];
	    if($ccont=='on'){
		    $ccont='Y';
	    }else{
	
		$ccont='N';                                     
            }
           
            
	    $params2 = array(
	    array('name'=>':P_CCONT_COMP_CODE','value'=>$this->input->post('CUST_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_AC_CODE','value'=>$this->input->post('CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_NAME','value'=>$_POST['CCONT_NAME'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_MOBILE','value'=>$_POST['CCONT_MOBILE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_PHONE','value'=>$_POST['CCONT_PHONE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_EMAIL','value'=>$_POST['CCONT_EMAIL'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_LINKEDIN','value'=>$_POST['CCONT_LINKEDIN'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_FACEBOOK','value'=>$_POST['CCONT_FACEBOOK'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_TWITTER','value'=>$_POST['CCONT_TWITTER'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_FROM_DT','value'=>$_POST['CCONT_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_UPTO_DT','value'=>$_POST['CCONT_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CCONT_ACTIVE_YN','value'=>$ccont, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_LANG_CODE','value'=>$this->input->post('CUST_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300),
	   
	     );

        
	    $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_CUSTOMER_CONTACT', $params2);
	    $result2 = array("return_status"=>$return_status,"error_message"=>$error_message );
	    
	}

	 
	
    $files = $_FILES;
    $cpt = count($_FILES['CDOC_FILE_NAME']['name']);

    for($i=0; $i<$cpt-1; $i++)
    {
        $file_check=basename($_FILES["CDOC_FILE_NAME"]["name"][$i]);
        if($file_check!=""){
            $_FILES['CDOC_FILE_NAME']['name']= $files['CDOC_FILE_NAME']['name'][$i];
            $_FILES['CDOC_FILE_NAME']['type']= $files['CDOC_FILE_NAME']['type'][$i];
            $_FILES['CDOC_FILE_NAME']['tmp_name']= $files['CDOC_FILE_NAME']['tmp_name'][$i];
            $_FILES['CDOC_FILE_NAME']['error']= $files['CDOC_FILE_NAME']['error'][$i];
            $_FILES['CDOC_FILE_NAME']['size']= $files['CDOC_FILE_NAME']['size'][$i];
	    $config['upload_path'] = 'upload/sales/';
	    $config['allowed_types'] = 'gif|jpg|png|html|doc|txt|docx';
	    $config['max_size']  = '100000';
	    $config['max_width'] = '10240';
	    $config['max_height'] = '7680';
	    $config['encrypt_name'] = TRUE;
            
	    $this->load->library('upload', $config);
           
	    //$file=$_FILES['CDOC_FILE_NAME']['name'];
	  //  $file_name=basename($_FILES["CDOC_FILE_NAME"]["name"]);
	      	    
	    
	  //  $this->upload->do_upload();//doing upload function
            $this->upload->initialize($config);
            $this->upload->do_upload('CDOC_FILE_NAME');
		
			
	    $file_data=$this->upload->data();

            //print_r($file_data);
            //exit;
            $file_name=$file_data['file_name'];
            $file_size=$file_data['file_size'];
            
	    $target_file =base_url().$config['upload_path'] . $file_name;   
        }
        else{
            $file_name=$_POST['old_file_name'][$i];
            $file_size=$_POST['old_file_size'][$i];
           
        }

            $doc=$_POST['CDOC_ACTIVE_YN'][$i];
	    if($doc=='on'){
		    $doc='Y';
	    }else{
	
		$doc='N';                                     
            }            
            $params3 = array(
	   
	    array('name'=>':P_CDOC_COMP_CODE','value'=>$this->input->post('CUST_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_AC_CODE','value'=>$this->input->post('CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_SR_NO','value'=>$_POST['CDOC_SR_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_FILE_NAME','value'=>$file_name, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_SIZE','value'=>$file_size, 'type'=>SQLT_CHR, 'length'=>300),
	    //array('name'=>':P_CDOC_BLOB','value'=>$this->input->post('CDOC_BLOB'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_DESC','value'=>$_POST['CDOC_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_FROM_DT','value'=>$_POST['CDOC_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_UPTO_DT','value'=>$_POST['CDOC_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_CDOC_ACTIVE_YN','value'=>$doc, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_LANG_CODE','value'=>$this->input->post('CUST_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300),
	     );
	     //print"<pre>";
	     //print_r($params3);
	     //print"</pre>";
	    $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_CUSTOMER_DOCS', $params3);
	    return $result3 = array("return_status"=>$return_status,"error_message"=>$error_message );


    }
//       print"<pre>";
//	     print_r($result3);
//	     print"</pre>";
//             exit;
        
    }
    
    function Delete_One_RowCustMasterContact($ac_code,$cont_name,$comp_code){
        $sql="SELECT * FROM SALE_M_CUSTOMER_CONTACT WHERE CCONT_AC_CODE='$ac_code' AND CCONT_NAME='$cont_name'";
        $result=$this->db->query($sql)->result_array();
        //print"<pre>";
        //print_r($result);
        //print"</pre>";
        //exit;
         $params = array(
        array('name'=>':P_CCONT_COMP_CODE', 'value'=>$result[0]['CCONT_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCONT_AC_CODE', 'value'=>$result[0]['CCONT_AC_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCONT_NAME', 'value'=>$result[0]['CCONT_NAME'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$result[0]['CCONT_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$result[0]['CCONT_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CUSTOMER_CONTACT', $params);
        return $result1 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        
    }
    
    function Delete_One_RowCustMasterDoc($ac_code,$sr_code,$comp_code){
        $sql="SELECT * FROM SALE_M_CUSTOMER_DOCS WHERE CDOC_AC_CODE='$ac_code' AND CDOC_SR_NO='$sr_code'";
        $result=$this->db->query($sql)->result_array();
        //print"<pre>";
        //print_r($result);
        //print"</pre>";
        //exit;
         $params = array(
        array('name'=>':P_CDOC_COMP_CODE', 'value'=>$result[0]['CDOC_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CDOC_AC_CODE', 'value'=>$result[0]['CDOC_AC_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CDOC_SR_NO', 'value'=>$result[0]['CDOC_SR_NO'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$result[0]['CDOC_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$result[0]['CDOC_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CUSTOMER_DOCS', $params);
        return $result1 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        
    }
    
    function DeleteCustomerMaster($comp_code,$ac_code)
    {
        $session_data = $this->session->userdata('USER_ID');
        $sql1="SELECT * FROM SALE_M_CUSTOMER_DOCS WHERE CDOC_AC_CODE='$ac_code' AND CDOC_COMP_CODE='$comp_code'";
        $result1=$this->db->query($sql1)->result_array();
        
        $count1=count($result1);
        for($i=0;$i<($count1);$i++){
            
         $params1 = array(
        array('name'=>':P_CDOC_COMP_CODE', 'value'=>$result1[$i]['CDOC_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CDOC_AC_CODE', 'value'=>$result1[$i]['CDOC_AC_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CDOC_SR_NO', 'value'=>$result1[$i]['CDOC_SR_NO'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$result1[$i]['CDOC_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CUSTOMER_DOCS', $params1);
         $result11 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        
         
        }
        
        $sql2="SELECT * FROM SALE_M_CUSTOMER_CONTACT WHERE CCONT_AC_CODE='$ac_code' AND CCONT_COMP_CODE='$comp_code'";
        $result2=$this->db->query($sql2)->result_array();
        
         $count2=count($result2);
        for($i=0;$i<($count2);$i++){
        
         $params2 = array(
        array('name'=>':P_CCONT_COMP_CODE', 'value'=>$result2[$i]['CCONT_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCONT_AC_CODE', 'value'=>$result2[$i]['CCONT_AC_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CCONT_NAME', 'value'=>$result2[$i]['CCONT_NAME'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$result2[$i]['CCONT_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CUSTOMER_CONTACT', $params2);
        $result22 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    
        
         
         
        }
       
         $sql3="SELECT * FROM SALE_M_CUSTOMER WHERE CUST_AC_CODE='$ac_code' AND CUST_COMP_CODE='$comp_code'";
        $result3=$this->db->query($sql3)->result_array();
        
        $count3=count($result3);
        for($i=0;$i<($count3);$i++){
    
        
        $params3 = array(
        array('name'=>':P_CUST_COMP_CODE', 'value'=>$result3[$i]['CUST_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_CUST_AC_CODE', 'value'=>$result3[$i]['CUST_AC_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$result3[$i]['CUST_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_CUSTOMER', $params3);
         return $result33 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    
        
        }
    }
    
    //Customer Master Ended
    
    //Lead Transaction
    
//    function AjaxLeadd($LH_CONTACT_NO)
//    {
//	 $sql="SELECT CUST_AC_CODE,CUST_AC_DESC FROM SALE_M_CUSTOMER WHERE CUST_SITE_MOBILE='$LH_CONTACT_NO' OR CUST_SITE_PHONE='$LH_CONTACT_NO' OR CUST_SITE_FAX='$LH_CONTACT_NO' OR CUST_BILL_MOBILE='$LH_CONTACT_NO' OR CUST_BILL_PHONE='$LH_CONTACT_NO' OR CUST_BILL_FAX='$LH_CONTACT_NO'";
//	 $result=$this->db->query($sql)->result_array();
//	    return Count($result);
//    }
//    
    function ViewLead()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_T_LEAD_HEAD where LH_COMP_CODE='$session_company_name'";
	return $this->db->query($sql, $return_object = TRUE)->result();
        //$query=$this->db->get('SALE_M_CUST_CLASS');
        //return $query->result();
    }
    
    function GetTxnCode(){
        $sql="SELECT DISTINCT(MENU_TXN_CODE) FROM APPS_MENU WHERE MENU_ACTIVE_YN='Y'";
	$result=$this->db->query($sql)->result_array();
        foreach($result as $row){ 
        $res=$row['MENU_TXN_CODE'];
        $sql1="SELECT TXN_FLOW_SEQ FROM APPS_TXN_SETUP WHERE TXN_CODE='$res'";
        $result1=$this->db->query($sql1)->result_array();
            if($result1){
                $stored_value[]=$result1[0]['TXN_FLOW_SEQ'];
            }
        }
        sort($stored_value);
        foreach($stored_value as $row1){
        $sql3="SELECT TXN_CODE,TXN_DESC FROM APPS_TXN_SETUP WHERE TXN_FLOW_SEQ='$row1'ORDER BY TXN_DESC ASC";
        $result2=$this->db->query($sql3)->result_array();
        if($result2){
            $store[]=$result2[0];
       }
        }
        return $store;
    }
    
    function GetLocn_SR_code()
    {

        $USER_PERS_CODE=$this->session->userdata('USER_PERS_CODE');
	$session_data = $this->session->userdata('USER_ID');
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SR_CODE,SR_LOCN_CODE FROM SALE_M_SALES_REP,APPS_USER  WHERE SR_CODE='$USER_PERS_CODE' AND USER_COMP_CODE=SR_COMP_CODE AND SR_COMP_CODE = '$session_company_name' AND USER_ID ='$session_data'";
        $result=$this->db->query($sql)->result_array();
        $res=$this->db->query($sql)->num_rows();
        if($res>0){
            return $result;
        }else{
            return $result="no";
        }
    }
    
    
    function GetPriority(){
	$sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='PRIORITY' ORDER BY VSL_DESC ASC";
	return $this->db->query($sql)->result_array();
    }
    
    function GetSource(){
	$sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='SOURCE' ORDER BY VSL_DESC ASC";
	return $this->db->query($sql)->result_array();
    }
    
    function GetStatus(){
	$sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='LEAD_STATUS'";
	return $this->db->query($sql)->result_array();
    }
    
    function Addlead()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
        $params =   array(
                    array('name'=>':P_LH_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_TXN_CODE', 'value'=>$this->input->post('LH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_TXN_DT', 'value'=>$this->input->post('LH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_LOCN_CODE', 'value'=>$this->input->post('LH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_LEAD', 'value'=>$this->input->post('LH_LEAD'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_CONTACT_NO', 'value'=>$this->input->post('LH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_CONTACT_PERSON', 'value'=>$this->input->post('LH_CONTACT_PERSON'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_MAIL', 'value'=>$this->input->post('LH_MAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_PRIORITY', 'value'=>$this->input->post('LH_PRIORITY'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_SOURCE_CODE', 'value'=>$this->input->post('LH_SOURCE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_SOURCE_OTHER', 'value'=>$this->input->post('LH_SOURCE_OTHER'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_CUST_AC_CODE', 'value'=>$this->input->post('LH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_CUST_AC_DESC', 'value'=>$this->input->post('LH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_SR_CODE', 'value'=>$this->input->post('LH_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_DESC', 'value'=>$this->input->post('LH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                    //array('name'=>':P_LH_SEND_YN', 'value'=>'N', 'type'=>SQLT_CHR, 'length'=>300),
                    //array('name'=>':P_LH_SEND_DT', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    //array('name'=>':P_LH_SEND_UID', 'value'=>$this->input->post('CC_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    //array('name'=>':P_LH_APPROVE_YN', 'value'=>'N', 'type'=>SQLT_CHR, 'length'=>300),
                    //array('name'=>':P_LH_APPROVE_DT', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    //array('name'=>':P_LH_APPROVE_UID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_STATUS', 'value'=>$this->input->post('LH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('LH_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_SYS_ID', 'value'=>$this->input->post('LH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_TXN_NO', 'value'=>$this->input->post('LH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                    );
	$this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_LEAD_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    
    function leadgetonerow($comp_code,$sys_id){
        $sql="SELECT *  FROM SALE_T_LEAD_HEAD where LH_COMP_CODE='$comp_code' and LH_SYS_ID='$sys_id'";
	return $this->db->query($sql)->result_array();    
    }
    
    function Updatelead()
    {

        $session_data = $this->session->userdata('USER_ID');
        $params =   array(
                    array('name'=>':P_LH_SYS_ID', 'value'=>$this->input->post('LH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_COMP_CODE', 'value'=>$this->input->post('LH_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_TXN_CODE', 'value'=>$this->input->post('LH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_TXN_NO', 'value'=>$this->input->post('LH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_TXN_DT', 'value'=>$this->input->post('LH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_LOCN_CODE', 'value'=>$this->input->post('LH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_LEAD', 'value'=>$this->input->post('LH_LEAD'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_CONTACT_NO', 'value'=>$this->input->post('LH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_CONTACT_PERSON', 'value'=>$this->input->post('LH_CONTACT_PERSON'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_MAIL', 'value'=>$this->input->post('LH_MAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_PRIORITY', 'value'=>$this->input->post('LH_PRIORITY'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_SOURCE_CODE', 'value'=>$this->input->post('LH_SOURCE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_SOURCE_OTHER', 'value'=>$this->input->post('LH_SOURCE_OTHER'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_CUST_AC_CODE', 'value'=>$this->input->post('LH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_CUST_AC_DESC', 'value'=>$this->input->post('LH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_SR_CODE', 'value'=>$this->input->post('LH_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
                    array('name'=>':P_LH_DESC', 'value'=>$this->input->post('LH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_STATUS', 'value'=>$this->input->post('LH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('LH_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                    );
	$this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_T_LEAD_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    
    }

    
    function Deletelead($LH_SYS_ID,$LH_LANG_CODE,$LH_CR_UID){
        $params = array(
        array('name'=>':P_LH_SYS_ID', 'value'=>$LH_SYS_ID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$LH_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$LH_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //        print"<pre>";
        //print_r($params);
        //print"</pre>";
        //exit;
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_T_LEAD_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            
            
    }
    // LEad Transaction END
    
    //Oppourtunity transaction Begin
    function ViewOpportunityTransaction()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
       // $sql="SELECT * FROM SALE_T_OPPORT_HEAD where OPH_COMP_CODE='$session_company_name'";
       $sql="SELECT *
                FROM SALE_T_OPPORT_HEAD
                    INNER JOIN SALE_T_OPPORT_LINES
                        ON SALE_T_OPPORT_HEAD.OPH_SYS_ID=SALE_T_OPPORT_LINES.OPL_OPH_SYS_ID AND SALE_T_OPPORT_HEAD.OPH_COMP_CODE='$session_company_name'
                            AND SALE_T_OPPORT_LINES.OPL_COMP_CODE='$session_company_name'";
       //$sql="SELECT * FROM SALE_M_PRICE_HEAD 
       //           JOIN SALE_M_PRICE_LINES
       //         ON SALE_M_PRICE_HEAD.PLH_SYS_ID='254' AND SALE_M_PRICE_LINES.PLL_PLH_SYS_ID='254'";
//	$sql="SELECT * FROM SALE_M_PRICE_HEAD 
//                  JOIN SALE_M_PRICE_LINES
//                ON SALE_M_PRICE_HEAD.PLH_SYS_ID=PLL_PLH_SYS_ID AND SALE_M_PRICE_LINES.PLL_PLH_SYS_ID=PLH_SYS_ID";
	return $this->db->query($sql)->result_array();
          
    }
    
    function GetOppStatus(){
	$sql="SELECT VSL_VSH_CODE,VSL_CODE,VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='OPPRT_STATUS' ORDER BY VSL_DESC ASC";
	return $this->db->query($sql)->result_array();
    }
    
    function GetOppCurrency(){
        $sql="SELECT CCY_CODE,CCY_DESC FROM SALE_M_CURRENCY ORDER BY CCY_DESC ASC";
	return $this->db->query($sql)->result_array();
        
    }

    function GetProductCode(){
        $sql="SELECT IF_CODE,IF_DESC FROM INVT_M_ITEM_FAMILY ORDER BY IF_DESC ASC";
	return $this->db->query($sql)->result_array();
        
    }
    
     function AddOpportunityHead()
    {
        
        
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $OPH_SEND_LOGI_YN=$this->input->post('OPH_SEND_LOGI_YN');
	    if($OPH_SEND_LOGI_YN=='on'){
		    $OPH_SEND_LOGI_YN='Y';
	    }else{
	
		$OPH_SEND_LOGI_YN='N';                                     
            }
            
        $params = array(
        array('name'=>':P_OPH_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_TXN_CODE', 'value'=>$this->input->post('OPH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_TXN_DT', 'value'=>$this->input->post('OPH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_OPPORTUNITY', 'value'=>$this->input->post('OPH_OPPORTUNITY'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_LOCN_CODE', 'value'=>$this->input->post('OPH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_SR_CODE', 'value'=>$this->input->post('OPH_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_TXN_CODE', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_TXN_NO', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_TXN_DT', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CONTACT_NO', 'value'=>$this->input->post('OPH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CONTACT_PERSON', 'value'=>$this->input->post('OPH_CONTACT_PERSON'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_TYPE', 'value'=>$this->input->post('OPH_CUST_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_ID', 'value'=>$this->input->post('OPH_CUST_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_AC_CODE', 'value'=>$this->input->post('OPH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_AC_DESC', 'value'=>$this->input->post('OPH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD1', 'value'=>$this->input->post('OPH_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD2', 'value'=>$this->input->post('OPH_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD3', 'value'=>$this->input->post('OPH_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD4', 'value'=>$this->input->post('OPH_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CN_CODE', 'value'=>$this->input->post('OPH_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ST_CODE', 'value'=>$this->input->post('OPH_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CT_CODE', 'value'=>$this->input->post('OPH_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CT_AR_CODE', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_POSTAL', 'value'=>$this->input->post('OPH_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_MOBILE', 'value'=>$this->input->post('OPH_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_PHONE', 'value'=>$this->input->post('OPH_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FAX', 'value'=>$this->input->post('OPH_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_EMAIL', 'value'=>$this->input->post('OPH_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_DESC', 'value'=>$this->input->post('OPH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CCY_CODE', 'value'=>$this->input->post('OPH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_APPROX_AMT', 'value'=>$this->input->post('OPH_APPROX_AMT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_STATUS', 'value'=>$this->input->post('OPH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CLOSE_DT', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_APPOINT_DT', 'value'=>$this->input->post('OPH_APPOINT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_SEND_LOGI_YN', 'value'=>$OPH_SEND_LOGI_YN, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_LOGI_JOB_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('OPH_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=> $session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
       );
  //      print"<pre>";
  //print_r($params);
  //print"</pre>";
  //exit;
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_OPPORT_HEAD', $params);
        $result1 = array("sys"=>$sys,"return_status"=>$return_status,"error_message"=>$error_message );
        //dont return here
        //for lines
       $params1 = array(
        array('name'=>':P_OPL_OPH_SYS_ID', 'value'=>$sys, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_TXN_DT', 'value'=>$this->input->post('OPH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_LOCN_CODE', 'value'=>$this->input->post('OPH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_LINE', 'value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_PRODUCT_CODE', 'value'=>$this->input->post('OPL_PRODUCT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=> $session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
       
        );
        
        
        
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_OPPORT_LINES', $params1);
         return $result2 = array("return_status"=>$return_status,"error_message"=>$error_message );
        //print_r($result1);
        //print_r($result2);
        //exit;
    }
    function Get_customer_acc()
    {
	$sql="SELECT DISTINCT(CUST_AC_CODE) FROM SALE_M_CUSTOMER ORDER BY CUST_AC_CODE ASC";
	return $this->db->query($sql)->result_array();
    }
    function OppGetOneRow($comp_code,$sys_id_head,$sys_id_head_on_line,$sys_id_lines)
    {
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
        
         $sql=" SELECT *
                FROM SALE_T_OPPORT_HEAD 
                INNER JOIN SALE_T_OPPORT_LINES
                ON SALE_T_OPPORT_HEAD.OPH_SYS_ID='$sys_id_head' AND SALE_T_OPPORT_LINES.OPL_OPH_SYS_ID='$sys_id_head_on_line' AND SALE_T_OPPORT_HEAD.OPH_COMP_CODE='$session_company_name'
                AND SALE_T_OPPORT_LINES.OPL_COMP_CODE='$session_company_name'";
	 return $result=$this->db->query($sql)->result_array();
        
    
    }
    
     function UpdateOpportunityHead()
    {
       
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $OPH_SEND_LOGI_YN=$this->input->post('OPH_SEND_LOGI_YN');
	    if($OPH_SEND_LOGI_YN=='on'){
		    $OPH_SEND_LOGI_YN='Y';
	    }else{
	
		$OPH_SEND_LOGI_YN='N';                                     
            }
            
        $params = array(
        array('name'=>':P_OPH_SYS_ID', 'value'=>$this->input->post('OPH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_COMP_CODE', 'value'=>$this->input->post('OPH_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_TXN_CODE', 'value'=>$this->input->post('OPH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_TXN_NO', 'value'=>$this->input->post('OPH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_TXN_DT', 'value'=>$this->input->post('OPH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_OPPORTUNITY', 'value'=>$this->input->post('OPH_OPPORTUNITY'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_LOCN_CODE', 'value'=>$this->input->post('OPH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_SR_CODE', 'value'=>$this->input->post('OPH_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_TXN_CODE', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_TXN_NO', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_REF_TXN_DT', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CONTACT_NO', 'value'=>$this->input->post('OPH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CONTACT_PERSON', 'value'=>$this->input->post('OPH_CONTACT_PERSON'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_TYPE', 'value'=>$this->input->post('OPH_CUST_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_ID', 'value'=>$this->input->post('OPH_CUST_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_AC_CODE', 'value'=>$this->input->post('OPH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CUST_AC_DESC', 'value'=>$this->input->post('OPH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD1', 'value'=>$this->input->post('OPH_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD2', 'value'=>$this->input->post('OPH_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD3', 'value'=>$this->input->post('OPH_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ADD4', 'value'=>$this->input->post('OPH_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CN_CODE', 'value'=>$this->input->post('OPH_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_ST_CODE', 'value'=>$this->input->post('OPH_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CT_CODE', 'value'=>$this->input->post('OPH_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CT_AR_CODE', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_POSTAL', 'value'=>$this->input->post('OPH_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_MOBILE', 'value'=>$this->input->post('OPH_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_PHONE', 'value'=>$this->input->post('OPH_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FAX', 'value'=>$this->input->post('OPH_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_EMAIL', 'value'=>$this->input->post('OPH_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_DESC', 'value'=>$this->input->post('OPH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CCY_CODE', 'value'=>$this->input->post('OPH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_APPROX_AMT', 'value'=>$this->input->post('OPH_APPROX_AMT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_STATUS', 'value'=>$this->input->post('OPH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_CLOSE_DT', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_APPOINT_DT', 'value'=>$this->input->post('OPH_APPOINT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_SEND_LOGI_YN', 'value'=>$OPH_SEND_LOGI_YN, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_LOGI_JOB_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('OPH_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=> $session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
       
        );

        
        
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_T_OPPORT_HEAD', $params);
         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
         
     $params1 = array(
        array('name'=>':P_OPL_SYS_ID', 'value'=>$this->input->post('OPL_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_OPH_SYS_ID', 'value'=>$this->input->post('OPL_OPH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_COMP_CODE', 'value'=>$this->input->post('OPL_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_TXN_DT', 'value'=>$this->input->post('OPL_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_LOCN_CODE', 'value'=>$this->input->post('OPL_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_LINE', 'value'=>$this->input->post('OPL_LINE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_PRODUCT_CODE', 'value'=>$this->input->post('OPL_PRODUCT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_LINE_STATUS', 'value'=>$this->input->post('OPL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_OPL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('OPL_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=> $session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
       
        );
        //print"<pre>";
        // print_r($params1);
        // print"</pre>";
        //exit;
        //
        
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_T_OPPORT_LINES', $params1);
        return $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );
         
         //print"<pre>";
         //print_r($result);
         //print"</pre>";
         //print"<pre>";
         //print_r($result1);
         //print"</pre>";
         //exit;
         
    }
    
    function DeleteOpp($sys_head,$lang_head,$head_user,$sys_lines,$sys_lines,$sys_user)
    {
        $session_data = $this->session->userdata('USER_ID');
        $params1 = array(
        array('name'=>':P_OPH_SYS_ID', 'value'=>$sys_head, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lang_head, 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$head_user, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_T_OPPORT_HEAD', $params1);
        $result1 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            


        $params2 = array(
        array('name'=>':P_OPL_SYS_ID', 'value'=>$sys_lines, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$sys_lines, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$sys_user, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_T_OPPORT_LINES', $params2);
        return $result2 = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );

    }
    
    //Oppourtunity transaction end
   
    

    //Price LIST Master Begin
    
    function AjaxPricee($PLH_CODE)
    {
	
	$sql="SELECT PLH_CODE FROM SALE_M_PRICE_HEAD WHERE PLH_CODE='$PLH_CODE'";
	$result=$this->db->query($sql)->result_array();
	return Count($result);
    }
    
    function ViewPriceListMaster()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        //$sql="SELECT * FROM SALE_M_PRICE_HEAD
        //            INNER JOIN SALE_M_PRICE_LINES
        //                ON SALE_M_PRICE_HEAD.PLH_SYS_ID=SALE_M_PRICE_LINES.PLL_PLH_SYS_ID AND SALE_M_PRICE_HEAD.PLH_COMP_CODE=$session_company_name
        //                    AND SALE_M_PRICE_LINES.PLL_COMP_CODE=$session_company_name";
	
	$sql="SELECT * FROM SALE_M_PRICE_HEAD WHERE PLH_COMP_CODE=$session_company_name";
	
	return $this->db->query($sql)->result_array();
    
          
    }
    
    
    
    function PriceListDrop()
    {
	$sql="SELECT CCY_CODE,CCY_DESC FROM SALE_M_CURRENCY";
	return $this->db->query($sql)->result_array();
    }
    
    function GetUomCode()
    {
	$sql="SELECT DISTINCT(IU_UOM_CODE) FROM INVT_M_ITEM_UOM";
	return $this->db->query($sql)->result_array();
    }
    
    
    
    function AddPriceList()
    {
	
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('PLH_ACTIVE_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
         $check=$this->input->post('PLL_ACTIVE_YN');
	    if($check=='on'){
		    $check='Y';
	    }else{
	
		$check='N';                                     
            }
            //$string= character_limiter(PLH_CODE, 1000);
            //
        $params = array(
        array('name'=>':P_PLH_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLH_CODE', 'value'=>$this->input->post('PLH_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLH_DESC', 'value'=>$this->input->post('PLH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_PLH_FROM_DT', 'value'=>$this->input->post('PLH_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLH_UPTO_DT', 'value'=>$this->input->post('PLH_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLH_CCY_CODE', 'value'=>$this->input->post('PLH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLH_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
	
        
      $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_PRICE_HEAD', $params);
      $result = array("return_status"=>$return_status,"error_message"=>$error_message );
  
   
	  $row_count=count($this->input->post('PLL_ITEM_CODE'));
            for($i=0;$i<$row_count-1;$i++)
    {
	$params1 = array(
        
        array('name'=>':P_PLL_PLH_SYS_ID', 'value'=>$sys, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_ITEM_CODE', 'value'=>$_POST['PLL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_PLL_UOM_CODE', 'value'=>$_POST['PLL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_H', 'value'=>$_POST['PLL_PRICE_H'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_0_100', 'value'=>$_POST['PLL_PRICE_W_0_100'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_101_110', 'value'=>$_POST['PLL_PRICE_W_101_110'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_111_120', 'value'=>$_POST['PLL_PRICE_W_111_120'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_121_130', 'value'=>$_POST['PLL_PRICE_W_121_130'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_131_140', 'value'=>$_POST['PLL_PRICE_W_131_140'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_141_150', 'value'=>$_POST['PLL_PRICE_W_141_150'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_151_160', 'value'=>$_POST['PLL_PRICE_W_151_160'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_161_170', 'value'=>$_POST['PLL_PRICE_W_161_170'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_171_180', 'value'=>$_POST['PLL_PRICE_W_171_180'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_181_190', 'value'=>$_POST['PLL_PRICE_W_181_190'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_191_200', 'value'=>$_POST['PLL_PRICE_W_191_200'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_201_210', 'value'=>$_POST['PLL_PRICE_W_201_210'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_211_220', 'value'=>$_POST['PLL_PRICE_W_211_220'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_221_230', 'value'=>$_POST['PLL_PRICE_W_221_230'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_231_240', 'value'=>$_POST['PLL_PRICE_W_231_240'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_241_250', 'value'=>$_POST['PLL_PRICE_W_241_250'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_251_260', 'value'=>$_POST['PLL_PRICE_W_251_260'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_261_270', 'value'=>$_POST['PLL_PRICE_W_261_270'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_271_280', 'value'=>$_POST['PLL_PRICE_W_271_280'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_281_290', 'value'=>$_POST['PLL_PRICE_W_281_290'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_291_300', 'value'=>$_POST['PLL_PRICE_W_291_300'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_ACTIVE_YN', 'value'=>$check, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PLL_PRICE_W_301_310', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
	

	 $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_PRICE_LINES', $params1);
	     $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );
	    
	   
    }
//    print"<pre>";
//         print_r($result);
//         print"</pre>";
//	print"<pre>";
//         print_r($result1);
//         print"</pre>";
//         exit;
    }
    
    function PriceListEditHead($sys_id_head){
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
	 $sql="SELECT * FROM SALE_M_PRICE_HEAD WHERE PLH_COMP_CODE=$session_company_name AND PLH_SYS_ID=$sys_id_head";
	 return $result=$this->db->query($sql)->result_array();
    
    }
    
    function PriceListEditLines($sys_id_head){
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
	 $sql="SELECT * FROM SALE_M_PRICE_LINES WHERE PLL_COMP_CODE=$session_company_name AND PLL_PLH_SYS_ID=$sys_id_head";
	 return $result=$this->db->query($sql)->result_array();
    
    }
                         
    function UpdatePriceListMaster()
    {
         $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $session_data = $this->session->userdata('USER_ID');
        $active=$this->input->post('PLH_ACTIVE_YN');
		if($active=='on'){
			$active='Y';
		}else{
	
		$active='N';
                }
        
	$check=$this->input->post('P_PLL_ACTIVE_YN');
		if($check=='on'){
			$check='Y';
		}else{
	
		$check='N';
                }
		
	$check1=$this->input->post('P_PLL_ACTIVE_YN');
		if($check1=='on'){
			$check1='Y';
		}else{
	
		$check1='N';
                }
	
	
		$params = array(
			    array('name'=>':P_PLH_SYS_ID', 'value'=>$this->input->post('PLH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_PLH_COMP_CODE', 'value'=>$this->input->post('PLH_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_PLH_CODE', 'value'=>$this->input->post('PLH_CODE'), 'type'=>SQLT_CHR, 'length'=>300),      
			    array('name'=>':P_PLH_DESC', 'value'=>$this->input->post('PLH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_PLH_FROM_DT', 'value'=>$this->input->post('PLH_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_PLH_UPTO_DT', 'value'=>$this->input->post('PLH_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_PLH_CCY_CODE', 'value'=>$this->input->post('PLH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_PLH_ACTIVE_YN', 'value'=>$this->input->post('PLH_ACTIVE_YN'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_LANG_CODE', 'value'=>$this->input->post('PLH_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
			    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
			    );
	$this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_PRICE_HEAD', $params);
        $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
	
	$row_count=count($this->input->post('PLL_ITEM_CODE'));
		for($i=0;$i<$row_count-1;$i++)
	{
	    $params1 = array(
	    
	    array('name'=>':P_PLL_SYS_ID', 'value'=>$this->input->post('PLL_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PLH_SYS_ID', 'value'=>$this->input->post('PLL_PLH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_COMP_CODE', 'value'=>$this->input->post('PLH_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_ITEM_CODE', 'value'=>$_POST['PLL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),      
	    array('name'=>':P_PLL_UOM_CODE', 'value'=>$_POST['PLL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_H', 'value'=>$_POST['PLL_PRICE_H'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_0_100', 'value'=>$_POST['PLL_PRICE_W_0_100'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_101_110', 'value'=>$_POST['PLL_PRICE_W_101_110'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_111_120', 'value'=>$_POST['PLL_PRICE_W_111_120'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_121_130', 'value'=>$_POST['PLL_PRICE_W_121_130'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_131_140', 'value'=>$_POST['PLL_PRICE_W_131_140'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_141_150', 'value'=>$_POST['PLL_PRICE_W_141_150'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_151_160', 'value'=>$_POST['PLL_PRICE_W_151_160'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_161_170', 'value'=>$_POST['PLL_PRICE_W_161_170'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_171_180', 'value'=>$_POST['PLL_PRICE_W_171_180'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_181_190', 'value'=>$_POST['PLL_PRICE_W_181_190'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_191_200', 'value'=>$_POST['PLL_PRICE_W_191_200'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_201_210', 'value'=>$_POST['PLL_PRICE_W_201_210'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_211_220', 'value'=>$_POST['PLL_PRICE_W_211_220'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_221_230', 'value'=>$_POST['PLL_PRICE_W_221_230'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_231_240', 'value'=>$_POST['PLL_PRICE_W_231_240'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_241_250', 'value'=>$_POST['PLL_PRICE_W_241_250'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_251_260', 'value'=>$_POST['PLL_PRICE_W_251_260'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_261_270', 'value'=>$_POST['PLL_PRICE_W_261_270'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_271_280', 'value'=>$_POST['PLL_PRICE_W_271_280'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_281_290', 'value'=>$_POST['PLL_PRICE_W_281_290'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_291_300', 'value'=>$_POST['PLL_PRICE_W_291_300'][$i], 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_PLL_PRICE_W_301_310', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
	    );
    
          
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_M_PRICE_LINES', $params1);
          $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	  
//	$row_count=count($this->input->post('PLL_ITEM_CODE'));
//            for($i=0;$i<$row_count-1;$i++)
//    {
//	$params2 = array(
//        
//        array('name'=>':P_PLL_PLH_SYS_ID', 'value'=>$sys, 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_COMP_CODE', 'value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_ITEM_CODE', 'value'=>$_POST['PLL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),      
//        array('name'=>':P_PLL_UOM_CODE', 'value'=>$_POST['PLL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_H', 'value'=>$_POST['PLL_PRICE_H'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_0_100', 'value'=>$_POST['PLL_PRICE_W_0_100'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_101_110', 'value'=>$_POST['PLL_PRICE_W_101_110'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_111_120', 'value'=>$_POST['PLL_PRICE_W_111_120'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_121_130', 'value'=>$_POST['PLL_PRICE_W_121_130'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_131_140', 'value'=>$_POST['PLL_PRICE_W_131_140'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_141_150', 'value'=>$_POST['PLL_PRICE_W_141_150'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_151_160', 'value'=>$_POST['PLL_PRICE_W_151_160'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_161_170', 'value'=>$_POST['PLL_PRICE_W_161_170'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_171_180', 'value'=>$_POST['PLL_PRICE_W_171_180'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_181_190', 'value'=>$_POST['PLL_PRICE_W_181_190'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_191_200', 'value'=>$_POST['PLL_PRICE_W_191_200'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_201_210', 'value'=>$_POST['PLL_PRICE_W_201_210'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_211_220', 'value'=>$_POST['PLL_PRICE_W_211_220'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_221_230', 'value'=>$_POST['PLL_PRICE_W_221_230'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_231_240', 'value'=>$_POST['PLL_PRICE_W_231_240'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_241_250', 'value'=>$_POST['PLL_PRICE_W_241_250'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_251_260', 'value'=>$_POST['PLL_PRICE_W_251_260'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_261_270', 'value'=>$_POST['PLL_PRICE_W_261_270'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_271_280', 'value'=>$_POST['PLL_PRICE_W_271_280'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_281_290', 'value'=>$_POST['PLL_PRICE_W_281_290'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_291_300', 'value'=>$_POST['PLL_PRICE_W_291_300'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_ACTIVE_YN', 'value'=>$check1, 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_PLL_PRICE_W_301_310', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
//	array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
//	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
//        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
//        );
//	 $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_M_PRICE_LINES', $params2);
//	$result1 = array("return_status"=>$return_status,"error_message"=>$error_message );   	
//	}
	
    
    }
    
   
    function DeletePrice($sys_head,$lang_head,$user_head)
    {
        $session_data = $this->session->userdata('USER_ID');
	$sql="SELECT * FROM SALE_M_PRICE_LINES where PLL_PLH_SYS_ID='$sys_head'";
            $result= $this->db->query($sql)->result_array();
	     foreach($result as $row)
                {
        $params1 = array(
        array('name'=>':P_PLL_SYS_ID', 'value'=>$this->security->xss_clean($row["PLL_SYS_ID"]), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
      $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_PRICE_LINES', $params1);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
		}
	  
       $params = array(
        array('name'=>':P_PLH_SYS_ID', 'value'=>$sys_head, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_PRICE_HEAD', $params);
       return $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );
        
            
    }
    
     function Delete_one_row_PriceListMaster($sys_lines)
    {
	 $session_data = $this->session->userdata('USER_ID');
	    	    
	    $params = array(
        array('name'=>':P_PLL_SYS_ID', 'value'=>$sys_lines, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
	    
	    
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_M_PRICE_LINES', $params);
       return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	
	
    }
    //Price LIST Master End
    
     //Sales Quotation Transaction
    function ViewSalesQuotation()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_T_QUOTE_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
          
    }
    
     function QuotationViewEvent()
    {
    $session_company_name=$this->session->userdata('USER_COMP_CODE');
    $sql="SELECT * FROM SALE_T_ORDER_EVENT";
    return $this->db->query($sql, $return_object = TRUE)->result_array();
 
    }
    
    function Reference()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT OPH_SYS_ID, OPH_TXN_CODE, OPH_TXN_NO, OPH_TXN_DT, MH_SYS_ID, MH_TXN_CODE, MH_TXN_NO, MH_TXN_DT
                FROM SALE_T_OPPORT_HEAD, LOGI_T_MEASURE_HEAD
                WHERE OPH_COMP_CODE = '$session_company_name'
                AND OPH_SYS_ID = MH_SALE_REF_SYS_ID
                AND NVL(OPH_APPROVE_YN, 'N')='Y'
                AND EXISTS( SELECT 1 FROM LOGI_T_MEASURE_LINES WHERE MH_SYS_ID  = ML_MH_SYS_ID 
                AND NOT EXISTS (SELECT 1 FROM SALE_T_QUOTE_LINES WHERE QL_MS_LINE_SYS_ID = ML_SYS_ID))";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function GetFromReference($mh_sys_id)
    {
        //$system_code=explode("-",$system_code);
        //$oph_sys_id=$system_code[0];
        //$mh_sys_id=$system_code[1];
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT ML_SYS_ID, ML_MH_SYS_ID, ML_LOCN_CODE, ML_BUILD, ML_FLOOR, ML_FLAT, ML_UNIT, 
                ML_PRODUCT_CODE, ML_COLOR_CODE, ML_WIDTH, ML_HEIGHT, ML_QTY, ML_MOUNT_TYPE, ML_MOUNT_ON, 
                ML_OPERATE, ML_CONTROL, ML_OPENING, ML_PELMET, ML_PROJECTION, ML_FASCIA, ML_REMARKS, ML_GEO_LATI, ML_GEO_LONGI
                FROM LOGI_T_MEASURE_LINES 
                WHERE ML_MH_SYS_ID IN $mh_sys_id";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
          
    }
    
    function Quote_Price($plh,$ccy_code,$item,$width,$height,$uom)
    {
	$date = date('d-M-y');
        $comp_code=$this->session->userdata('USER_COMP_CODE');
	$sql="SELECT SPINE_SALE.SALE_FUNC_PRICE('$comp_code','$plh','$ccy_code','$date','$item','$uom','$width','$height') AS result from DUAL";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function valid_date($txn_dt,$txn_code)
    {
	//$date = date('d-M-y');
        $comp_code=$this->session->userdata('USER_COMP_CODE');
	$sql="SELECT APPS_FUNC_VALIDATE_DOC_DT('$comp_code','$txn_code','$txn_dt') AS result from DUAL";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function GetFromOpp($oph_sys_id)
    {
        //$system_code=explode("-",$system_code);
        //$oph_sys_id=$system_code[0];
        //$mh_sys_id=$system_code[1];
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM SALE_T_OPPORT_HEAD WHERE OPH_SYS_ID='$oph_sys_id'";
        $result=$this->db->query($sql)->result_array();
        return $result;
    }
    
    function GetPlhCode($ac_code){
        $sql="SELECT CUST_PL_CODE FROM SALE_M_CUSTOMER WHERE CUST_AC_CODE='$ac_code'";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function Mount_Type(){
        $sql="SELECT VSL_CODE, VSL_DESC   FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_MOUNT_T'
                AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function GetShipCode(){
        $sql="SELECT * FROM SALE_M_SHIPMENT";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function Spa_code(){
        $sql="SELECT * FROM SALE_M_ADDON ";//WHERE SPA_PROD_CODE=''
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function GetCarrierCode(){
        $sql="SELECT * FROM SALE_M_CARRIER";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function Mount_On(){
        $sql="SELECT VSL_CODE, VSL_DESC   FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_MOUNT_O'
                AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function Product_code(){
        $sql="SELECT IF_CODE,IF_DESC FROM INVT_M_ITEM_FAMILY";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function exc_rate()
    {
        $date = date('d-M-y');
        $com_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SPINE_SALE.SALE_FUNC_EX_RATE('AED', 'AED', 'S', $date) AS result from DUAL";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function Freight_Code(){
        $sql="SELECT VSL_CODE, VSL_DESC   FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_FREIGHT'
                AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function Deli_Code(){
        $sql="SELECT VSL_CODE, VSL_DESC   FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_DL_CODE'
                AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function QL_UNIT(){
        $sql="SELECT VSL_CODE, VSL_DESC   FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_MM_UNIT'   
                AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function GetQCurrency(){
        $sql="SELECT * FROM SALE_M_CURRENCY";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function GetQPayTerm(){
        $sql="SELECT * FROM SALE_M_PAY_TERM";
	return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    
    function AddSaleQuotation()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('QH_BILL_AS_SHIP_YN');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
            
        $params = array(
                array('name'=>':P_QH_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TXN_CODE','value'=>$this->input->post('QH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TXN_DT','value'=>$this->input->post('QH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DOC_REF','value'=>$this->input->post('QH_DOC_REF'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_LOCN_CODE','value'=>$this->input->post('QH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SR_CODE','value'=>$this->input->post('QH_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SALE_TYPE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CONTACT_NO','value'=>$this->input->post('QH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_ID','value'=>$this->input->post('QH_CUST_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_TYPE','value'=>$this->input->post('QH_CUST_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_AC_CODE','value'=>$this->input->post('QH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_AC_DESC','value'=>$this->input->post('QH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD1','value'=>$this->input->post('QH_BILL_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD2','value'=>$this->input->post('QH_BILL_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD3','value'=>$this->input->post('QH_BILL_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD4','value'=>$this->input->post('QH_BILL_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CN_CODE','value'=>$this->input->post('QH_BILL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ST_CODE','value'=>$this->input->post('QH_BILL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CT_CODE','value'=>$this->input->post('QH_BILL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CT_AR_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_POSTAL','value'=>$this->input->post('QH_BILL_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_MOBILE','value'=>$this->input->post('QH_BILL_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_PHONE','value'=>$this->input->post('QH_BILL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_FAX','value'=>$this->input->post('QH_BILL_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_EMAIL','value'=>$this->input->post('QH_BILL_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CONTACT','value'=>$this->input->post('QH_BILL_CONTACT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_AS_SHIP_YN','value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD1','value'=>$this->input->post('QH_SHIP_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD2','value'=>$this->input->post('QH_SHIP_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD3','value'=>$this->input->post('QH_SHIP_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD4','value'=>$this->input->post('QH_SHIP_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CN_CODE','value'=>$this->input->post('QH_BILL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ST_CODE','value'=>$this->input->post('QH_BILL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CT_CODE','value'=>$this->input->post('QH_BILL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CT_AR_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_POSTAL','value'=>$this->input->post('QH_SHIP_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_MOBILE','value'=>$this->input->post('QH_SHIP_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_PHONE','value'=>$this->input->post('QH_SHIP_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_FAX','value'=>$this->input->post('QH_SHIP_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_EMAIL','value'=>$this->input->post('QH_SHIP_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CONTACT','value'=>$this->input->post('QH_SHIP_CONTACT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_EFF_FROM_DT','value'=>$this->input->post('QH_EFF_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_EFF_UPTO_DT','value'=>$this->input->post('QH_EFF_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DELIVERY_DT','value'=>$this->input->post('QH_DELIVERY_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DELIVERY_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DELIVERY_TERMS','value'=>$this->input->post('QH_DELIVERY_TERMS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_PT_CODE','value'=>$this->input->post('QH_PT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CODE','value'=>$this->input->post('QH_SHIP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CARRIER_CODE','value'=>$this->input->post('QH_CARRIER_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FREIGHT_CODE','value'=>$this->input->post('QH_FREIGHT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CCY_CODE','value'=>$this->input->post('QH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_EXC_RATE','value'=>$this->input->post('QH_EXC_RATE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_GROSS_VALUE','value'=>500, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TAX_PCT','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TAX_VALUE','value'=>$this->input->post('QH_TAX_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DISCOUNT_PCT','value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DISCOUNT_VALUE','value'=>$this->input->post('QH_DISCOUNT_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_OVERHEAD_PCT','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_OVERHEAD_VALUE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_NET_VALUE','value'=>$this->input->post('QH_GROSS_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_NET_VALUE_LC','value'=>$this->input->post('QH_GROSS_VALUE_LC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TOTAL_LINES','value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DESC','value'=>$this->input->post('QH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_STATUS','value'=>$this->input->post('QH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_01','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_02','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_03','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_04','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_05','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_06','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_07','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_08','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_09','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_10','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_11','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_12','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_13','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_14','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_15','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_16','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_17','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_18','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_19','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_20','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_REF_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SYS_ID','value'=>&$sys, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_NO','value'=>&$txn_c, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
             

     );
       print"<pre>";
print_r($params);
print"</pre>";
 
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_QUOTE_HEAD', $params);
        $result = array("sys"=>$sys,"return_status"=>$return_status,"error_message"=>$error_message );
           print"<pre>";
print_r($result);
print"</pre>";
//exit; 


         $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
        
	  $row_count=count($this->input->post('QL_PRODUCT_CODE'));
          //print_r($row_count);
	 for($i=0;$i<$row_count-1;$i++){
//	    $ccont=$_POST['CCONT_ACTIVE_YN'][$i];
//	    if($ccont=='on'){
//		    $ccont='Y';
//	    }else{
//	
//		$ccont='N';                                     
//            }
            
        $params2 = array(
                array('name'=>':P_QL_QH_SYS_ID','value'=>$sys, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TXN_DT','value'=>$this->input->post('QH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LOCN_CODE','value'=>$this->input->post('QH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LINE','value'=>$_POST['QL_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_BUILD','value'=>$_POST['QL_BUILD'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLOOR','value'=>$_POST['QL_FLOOR'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLAT','value'=>$_POST['QL_FLAT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_UNIT','value'=>$_POST['QL_UNIT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PRODUCT_CODE','value'=>$_POST['QL_PRODUCT_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_ITEM_CODE','value'=>$_POST['QL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_UOM_CODE','value'=>$_POST['QL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_COLOR_CODE','value'=>$_POST['QL_COLOR_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MOUNT_TYPE','value'=>$_POST['QL_MOUNT_TYPE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MOUNT_ON','value'=>$_POST['QL_MOUNT_ON'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OPERATE','value'=>$_POST['QL_OPERATE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CONTROL','value'=>$_POST['QL_CONTROL'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OPENING','value'=>$_POST['QL_OPENING'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PELMET','value'=>$_POST['QL_PELMET'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PROJECTION','value'=>$_POST['QL_PROJECTION'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FASCIA','value'=>$_POST['QL_FASCIA'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_WIDTH','value'=>$_POST['QL_WIDTH'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_HEIGHT','value'=>$_POST['QL_HEIGHT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QTY','value'=>$_POST['QL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QTY_BU','value'=>$_POST['QL_QTY_BU'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PRICE','value'=>$_POST['QL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_VALUE','value'=>$_POST['QL_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DISC_PCT','value'=>$_POST['QL_DISC_PCT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DISC_VALUE','value'=>$_POST['QL_DISC_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TAX_PCT','value'=>$_POST['QL_TAX_PCT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TAX_VALUE','value'=>$_POST['QL_TAX_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GROSS_VALUE','value'=>$_POST['QL_GROSS_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GROSS_VALUE_LC','value'=>$_POST['QL_GROSS_VALUE_LC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_REMARKS','value'=>$_POST['QL_REMARKS'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GEO_LATI','value'=>$_POST['QL_GEO_LATI'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GEO_LONGI','value'=>$_POST['QL_GEO_LONGI'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_YN','value'=>'N', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_DT','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_UID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_01','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_02','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_03','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_04','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_05','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_06','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_07','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_08','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_09','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_10','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_11','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_12','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_13','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_14','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_15','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_16','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_17','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_18','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_19','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_20','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LD_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OP_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MS_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_SO_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_WO_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PR_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DN_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_IN_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_SR_LINE_SYS_ID','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_ITEM_DESC','value'=>$_POST['QL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LINE_SYS_ID','value'=>&$sys_ql, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
         
    
     );
print"<pre>";
print_r($params2);
print"</pre>";
         $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_QUOTE_LINES', $params2);
         $result2 = array("sys"=>$sys_ql,"return_status"=>$return_status,"error_message"=>$error_message );
         }
print"<pre>";
print_r($result2);
print"</pre>";

        $row_count=count($this->input->post('check_tick'));
          print_r($row_count);
          exit;
	 for($i=0;$i<$row_count-1;$i++){
//	    $ccont=$_POST['CCONT_ACTIVE_YN'][$i];
//	    if($ccont=='on'){
//		    $ccont='Y';
//	    }else{
//	
//		$ccont='N';                                     
//            }
            
        $params3 = array(
                array('name'=>':P_QAL_QL_SYS_ID','value'=>$sys_ql, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_QH_SYS_ID','value'=>$sys, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_TXN_DT','value'=>$this->input->post('QH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_LOCN_CODE','value'=>$this->input->post('QH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_LINE','value'=>$_POST['QAL_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_ADDON','value'=>$_POST['QAL_ADDON'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_ITEM_CODE','value'=>$_POST['QAL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_ITEM_DESC','value'=>$_POST['QAL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_UOM_CODE','value'=>$_POST['QAL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_DESIGN_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_COLOR_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_WIDTH','value'=>$_POST['QAL_WIDTH'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_HEIGHT','value'=>$_POST['QAL_HEIGHT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_GATHERING','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_QTY','value'=>$_POST['QAL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_QTY_BU','value'=>$_POST['QAL_QTY_BU'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_PRICE','value'=>$_POST['QAL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_VALUE','value'=>$_POST['QAL_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_DISC_PCT','value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_DISC_VALUE','value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_TAX_PCT','value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_TAX_VALUE','value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_GROSS_VALUE','value'=>$_POST['QAL_GROSS_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_GROSS_VALUE_LC','value'=>$_POST['QAL_GROSS_VALUE_LC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_REMARKS','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QAL_PROD_CODE','value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
         
    
     );
print"<pre>";
print_r($params3);
print"</pre>";
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_QUOTE_ADDON', $params3);
         $result3 = array("return_status"=>$return_status,"error_message"=>$error_message );
         }
print"<pre>";
print_r($result3);
print"</pre>";



    }
    
    function UpdateSaleQuotation()
    {
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                   
            }
            
        $params = array(
                array('name'=>':P_QH_SYS_ID','value'=>$this->session->userdata('QH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_COMP_CODE','value'=>$this->session->userdata('QH_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TXN_CODE ','value'=>$this->input->post('QH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TXN_NO','value'=>$this->session->userdata('P_QH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TXN_DT','value'=>$this->input->post('QH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DOC_REF','value'=>$this->input->post('QH_DOC_REF'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_LOCN_CODE','value'=>$this->input->post('QH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SR_CODE','value'=>$this->input->post('QH_SR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SALE_TYPE','value'=>$this->input->post('QH_SALE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CONTACT_NO','value'=>$this->input->post('QH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_ID','value'=>$this->input->post('QH_CUST_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_TYPE','value'=>$this->input->post('QH_CUST_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_AC_CODE','value'=>$this->input->post('QH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CUST_AC_DESC','value'=>$this->input->post('QH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD1','value'=>$this->input->post('QH_BILL_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD2','value'=>$this->input->post('QH_BILL_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD3','value'=>$this->input->post('QH_BILL_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ADD4','value'=>$this->input->post('QH_BILL_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CN_CODE','value'=>$this->input->post('QH_BILL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_ST_CODE','value'=>$this->input->post('QH_BILL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CT_CODE','value'=>$this->input->post('QH_BILL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CT_AR_CODE','value'=>$this->input->post('QH_BILL_CT_AR_CODE  '), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_POSTAL','value'=>$this->input->post('QH_BILL_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_MOBILE','value'=>$this->input->post('QH_BILL_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_PHONE ','value'=>$this->input->post('QH_BILL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_FAX','value'=>$this->input->post('QH_BILL_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_EMAIL ','value'=>$this->input->post('QH_BILL_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_CONTAC','value'=>$this->input->post('QH_BILL_CONTACT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_BILL_AS_SHIP_YN','value'=>$this->input->post('QH_BILL_AS_SHIP_YN'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD1','value'=>$this->input->post('QH_SHIP_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD2','value'=>$this->input->post('QH_SHIP_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD3','value'=>$this->input->post('QH_SHIP_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ADD4','value'=>$this->input->post('QH_SHIP_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CN_CODE','value'=>$this->input->post('QH_SHIP_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_ST_CODE','value'=>$this->input->post('QH_SHIP_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CT_CODE','value'=>$this->input->post('QH_SHIP_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CT_AR_CODE','value'=>$this->input->post('QH_SHIP_CT_AR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_POSTAL','value'=>$this->input->post('QH_SHIP_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_MOBILE','value'=>$this->input->post('QH_SHIP_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_PHONE ','value'=>$this->input->post('QH_SHIP_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_FAX','value'=>$this->input->post('QH_SHIP_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_EMAIL ','value'=>$this->input->post('QH_SHIP_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CONTACT','value'=>$this->input->post('QH_SHIP_CONTACT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_EFF_FROM_DT','value'=>$this->input->post('QH_EFF_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_EFF_UPTO_DT','value'=>$this->input->post('QH_EFF_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DELIVERY_DT','value'=>$this->input->post('QH_DELIVERY_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DELIVERY_CODE','value'=>$this->input->post('QH_DELIVERY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DELIVERY_TERMS','value'=>$this->input->post('QH_DELIVERY_TERMS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_PT_CODE','value'=>$this->input->post('QH_PT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SHIP_CODE','value'=>$this->input->post('QH_SHIP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CARRIER_CODE','value'=>$this->input->post('QH_CARRIER_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FREIGHT_CODE','value'=>$this->input->post('QH_FREIGHT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_CCY_CODE','value'=>$this->input->post('QH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_EXC_RATE','value'=>$this->input->post('QH_EXC_RATE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_GROSS_VALUE','value'=>$this->input->post('QH_GROSS_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TAX_PCT','value'=>$this->input->post('QH_TAX_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TAX_VALUE','value'=>$this->input->post('QH_TAX_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DISCOUNT_PCT','value'=>$this->input->post('QH_DISCOUNT_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DISCOUNT_VALUE','value'=>$this->input->post('QH_DISCOUNT_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_OVERHEAD_PCT','value'=>$this->input->post('QH_OVERHEAD_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_OVERHEAD_VALUE','value'=>$this->input->post('QH_OVERHEAD_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_NET_VALUE','value'=>$this->input->post('QH_NET_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_NET_VALUE_LC','value'=>$this->input->post('QH_NET_VALUE_LC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_TOTAL_LINES','value'=>$this->input->post('QH_TOTAL_LINES'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_DESC','value'=>$this->input->post('QH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_STATUS','value'=>$this->input->post('QH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SEND_YN','value'=>$this->input->post('QH_SEND_YN'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SEND_DT','value'=>$this->input->post('QH_SEND_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_SEND_UID','value'=>$this->input->post('QH_SEND_UID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_APPROVE_YN','value'=>$this->input->post('QH_APPROVE_YN'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_APPROVE_DT','value'=>$this->input->post('QH_APPROVE_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_APPROVE_UID','value'=>$this->input->post('QH_APPROVE_UID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_01','value'=>$this->input->post('QH_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_02','value'=>$this->input->post('QH_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_03','value'=>$this->input->post('QH_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_04','value'=>$this->input->post('QH_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_05','value'=>$this->input->post('QH_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_06','value'=>$this->input->post('QH_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_07','value'=>$this->input->post('QH_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_08','value'=>$this->input->post('QH_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_09','value'=>$this->input->post('QH_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_10','value'=>$this->input->post('QH_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_11','value'=>$this->input->post('QH_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_12','value'=>$this->input->post('QH_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_13','value'=>$this->input->post('QH_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_14','value'=>$this->input->post('QH_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_15','value'=>$this->input->post('QH_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_16','value'=>$this->input->post('QH_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_17','value'=>$this->input->post('QH_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_18','value'=>$this->input->post('QH_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_19','value'=>$this->input->post('QH_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_FLEX_20','value'=>$this->input->post('QH_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QH_REF_SYS_ID','value'=>$this->input->post('QH_REF_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>$this->input->post('QH_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
             

     );
        
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_T_QUOTE_HEAD', $params);
         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
    
    }
    
    function DeleteSaleQuotation($QH_SYS_ID,$QH_LANG_CODE,$QH_CR_UID)
    {
        $session_data = $this->session->userdata('USER_ID');
        $params = array(
        array('name'=>':P_QH_SYS_ID', 'value'=>$QH_SYS_ID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$QH_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$QH_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_T_QUOTE_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            
    }
    
    function AddSaleQuotationLine()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
            
        $params = array(
                array('name'=>':P_QL_QH_SYS_ID  ','value'=>$this->input->post('QL_QH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TXN_DT','value'=>$this->input->post('QL_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LOCN_CODE','value'=>$this->input->post('QL_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LINE','value'=>$this->input->post('QL_LINE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_BUILD','value'=>$this->input->post('QL_BUILD'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLOOR','value'=>$this->input->post('QL_FLOOR'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLAT','value'=>$this->input->post('QL_FLAT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_UNIT','value'=>$this->input->post('QL_UNIT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PRODUCT_CODE','value'=>$this->input->post('QL_PRODUCT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_ITEM_CODE','value'=>$this->input->post('QL_ITEM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_UOM_CODE','value'=>$this->input->post('QL_UOM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_COLOR_CODE','value'=>$this->input->post('QL_COLOR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MOUNT_TYPE','value'=>$this->input->post('QL_MOUNT_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MOUNT_ON','value'=>$this->input->post('QL_MOUNT_ON'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OPERATE','value'=>$this->input->post('QL_OPERATE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CONTROL','value'=>$this->input->post('QL_CONTROL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OPENING','value'=>$this->input->post('QL_OPENING'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PELMET','value'=>$this->input->post('QL_PELMET'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PROJECTION ','value'=>$this->input->post('QL_PROJECTION'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FASCIA','value'=>$this->input->post('QL_FASCIA'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_WIDTH ','value'=>$this->input->post('QL_WIDTH'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_HEIGHT','value'=>$this->input->post('QL_HEIGHT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QTY','value'=>$this->input->post('QL_QTY'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QTY_BU','value'=>$this->input->post('QL_QTY_BU'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PRICE','value'=>$this->input->post('QL_PRICE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_VALUE','value'=>$this->input->post('QL_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DISC_PCT','value'=>$this->input->post('QL_DISC_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DISC_VALUE','value'=>$this->input->post('QL_DISC_VALUE '), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TAX_PCT','value'=>$this->input->post('QL_TAX_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TAX_VALUE','value'=>$this->input->post('QL_TAX_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GROSS_VALUE','value'=>$this->input->post('QL_GROSS_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GROSS_VALUE_LC','value'=>$this->input->post('QL_GROSS_VALUE_LC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_REMARKS','value'=>$this->input->post('QL_REMARKS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GEO_LATI','value'=>$this->input->post('QL_GEO_LATI'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GEO_LONGI','value'=>$this->input->post('QL_GEO_LONGI'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_YN','value'=>$this->input->post('QL_CLOSE_YN'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_DT','value'=>$this->input->post('QL_CLOSE_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_UID','value'=>$this->input->post('QL_CLOSE_UID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_01','value'=>$this->input->post('QL_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_02','value'=>$this->input->post('QL_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_03','value'=>$this->input->post('QL_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_04','value'=>$this->input->post('QL_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_05','value'=>$this->input->post('QL_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_06','value'=>$this->input->post('QL_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_07','value'=>$this->input->post('QL_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_08','value'=>$this->input->post('QL_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_09','value'=>$this->input->post('QL_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_10','value'=>$this->input->post('QL_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_11','value'=>$this->input->post('QL_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_12','value'=>$this->input->post('QL_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_13','value'=>$this->input->post('QL_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_14','value'=>$this->input->post('QL_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_15','value'=>$this->input->post('QL_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_16','value'=>$this->input->post('QL_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_17','value'=>$this->input->post('QL_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_18','value'=>$this->input->post('QL_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_19','value'=>$this->input->post('QL_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_20','value'=>$this->input->post('QL_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LD_SYS_ID','value'=>$this->input->post('QL_LD_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OP_SYS_ID','value'=>$this->input->post('QL_OP_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MS_LINE_SYS_ID','value'=>$this->input->post('QL_MS_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_SO_LINE_SYS_ID','value'=>$this->input->post('QL_SO_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_WO_LINE_SYS_ID','value'=>$this->input->post('QL_WO_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PR_LINE_SYS_ID','value'=>$this->input->post('QL_PR_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DN_LINE_SYS_ID','value'=>$this->input->post('QL_DN_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_IN_LINE_SYS_ID','value'=>$this->input->post('QL_IN_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_SR_LINE_SYS_ID','value'=>$this->input->post('QL_SR_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_ITEM_DESC','value'=>$this->input->post('QL_ITEM_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>$this->input->post('QL_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LINE_SYS_ID','value'=>$this->input->post(' QL_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
         
    
     );
        
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_QUOTE_LINES', $params);
         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
    
    }
    
     function UpdateSaleQuotationLine()
    {

         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
            
        $params = array(
                array('name'=>':P_QL_SYS_ID  ','value'=>$this->input->post('QL_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QH_SYS_ID  ','value'=>$this->input->post('QL_QH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_COMP_CODE','value'=>$this->session->userdata('QL_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TXN_DT','value'=>$this->input->post('QL_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LOCN_CODE','value'=>$this->input->post('QL_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LINE','value'=>$this->input->post('QL_LINE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_BUILD','value'=>$this->input->post('QL_BUILD'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLOOR','value'=>$this->input->post('QL_FLOOR'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLAT','value'=>$this->input->post('QL_FLAT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_UNIT','value'=>$this->input->post('QL_UNIT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PRODUCT_CODE','value'=>$this->input->post('QL_PRODUCT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_ITEM_CODE','value'=>$this->input->post('QL_ITEM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_UOM_CODE','value'=>$this->input->post('QL_UOM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_COLOR_CODE','value'=>$this->input->post('QL_COLOR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MOUNT_TYPE','value'=>$this->input->post('QL_MOUNT_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MOUNT_ON','value'=>$this->input->post('QL_MOUNT_ON'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OPERATE','value'=>$this->input->post('QL_OPERATE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CONTROL','value'=>$this->input->post('QL_CONTROL'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OPENING','value'=>$this->input->post('QL_OPENING'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PELMET','value'=>$this->input->post('QL_PELMET'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PROJECTION ','value'=>$this->input->post('QL_PROJECTION'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FASCIA','value'=>$this->input->post('QL_FASCIA'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_WIDTH ','value'=>$this->input->post('QL_WIDTH'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_HEIGHT','value'=>$this->input->post('QL_HEIGHT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QTY','value'=>$this->input->post('QL_QTY'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_QTY_BU','value'=>$this->input->post('QL_QTY_BU'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PRICE','value'=>$this->input->post('QL_PRICE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_VALUE','value'=>$this->input->post('QL_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DISC_PCT','value'=>$this->input->post('QL_DISC_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DISC_VALUE','value'=>$this->input->post('QL_DISC_VALUE '), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TAX_PCT','value'=>$this->input->post('QL_TAX_PCT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_TAX_VALUE','value'=>$this->input->post('QL_TAX_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GROSS_VALUE','value'=>$this->input->post('QL_GROSS_VALUE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GROSS_VALUE_LC','value'=>$this->input->post('QL_GROSS_VALUE_LC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_REMARKS','value'=>$this->input->post('QL_REMARKS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GEO_LATI','value'=>$this->input->post('QL_GEO_LATI'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_GEO_LONGI','value'=>$this->input->post('QL_GEO_LONGI'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_YN','value'=>$this->input->post('QL_CLOSE_YN'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_DT','value'=>$this->input->post('QL_CLOSE_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_CLOSE_UID','value'=>$this->input->post('QL_CLOSE_UID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_01','value'=>$this->input->post('QL_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_02','value'=>$this->input->post('QL_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_03','value'=>$this->input->post('QL_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_04','value'=>$this->input->post('QL_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_05','value'=>$this->input->post('QL_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_06','value'=>$this->input->post('QL_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_07','value'=>$this->input->post('QL_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_08','value'=>$this->input->post('QL_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_09','value'=>$this->input->post('QL_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_10','value'=>$this->input->post('QL_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_11','value'=>$this->input->post('QL_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_12','value'=>$this->input->post('QL_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_13','value'=>$this->input->post('QL_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_14','value'=>$this->input->post('QL_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_15','value'=>$this->input->post('QL_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_16','value'=>$this->input->post('QL_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_17','value'=>$this->input->post('QL_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_18','value'=>$this->input->post('QL_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_19','value'=>$this->input->post('QL_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_FLEX_20','value'=>$this->input->post('QL_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_LD_SYS_ID','value'=>$this->input->post('QL_LD_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_OP_SYS_ID','value'=>$this->input->post('QL_OP_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_MS_LINE_SYS_ID','value'=>$this->input->post('QL_MS_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_SO_LINE_SYS_ID','value'=>$this->input->post('QL_SO_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_WO_LINE_SYS_ID','value'=>$this->input->post('QL_WO_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_PR_LINE_SYS_ID','value'=>$this->input->post('QL_PR_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_DN_LINE_SYS_ID','value'=>$this->input->post('QL_DN_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_IN_LINE_SYS_ID','value'=>$this->input->post('QL_IN_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_SR_LINE_SYS_ID','value'=>$this->input->post('QL_SR_LINE_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QL_ITEM_DESC','value'=>$this->input->post('QL_ITEM_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>$this->input->post('QL_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
      );
        
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_T_QUOTE_LINES', $params);
         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
    
    }
    
    function DeleteSaleQuotationLine($QL_SYS_ID,$QL_LANG_CODE,$QL_CR_UID)
    {
        $session_data = $this->session->userdata('USER_ID');
        $params = array(
        array('name'=>':P_QL_SYS_ID', 'value'=>$QL_SYS_ID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$QL_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$QL_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_T_QUOTE_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            
    }  
    
     function AddSaleQuotationDoc()
    {
        $session_company_name=$this->session->userdata('USER_COMP_CODE');
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
            
        $params = array(
                array('name'=>':P_QDOC_COMP_CODE','value'=>$session_company_name, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_QH_SYS_ID','value'=>$this->input->post('QDOC_QH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_LINE','value'=>$this->input->post('QDOC_LINE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_FILE_NAME','value'=>$this->input->post('QDOC_FILE_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_SIZE','value'=>$this->input->post('QDOC_SIZE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_BLOB','value'=>$this->input->post('QDOC_BLOB'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_DESC','value'=>$this->input->post('QDOC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>$this->input->post('QDOC_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
         );
        
        $this->db->stored_procedure('SPINE_SALE','INSERT_SALE_T_QUOTE_DOCS', $params);
         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
    
    }
    
    function UpdateSaleQuotationDoc()
    {
      
         $session_data = $this->session->userdata('USER_ID');
         $active=$this->input->post('');
	    if($active=='on'){
		    $active='Y';
	    }else{
	
		$active='N';                                     
            }
            
        $params = array(
                array('name'=>':P_QDOC_COMP_CODE','value'=>$this->session->userdata('QDOC_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_QH_SYS_ID','value'=>$this->input->post('QDOC_QH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                 array('name'=>':P_QDOC_SYS_ID','value'=>$this->input->post('QDOC_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_LINE','value'=>$this->input->post('QDOC_LINE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_FILE_NAME','value'=>$this->input->post('QDOC_FILE_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_SIZE','value'=>$this->input->post('QDOC_SIZE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_BLOB','value'=>$this->input->post('QDOC_BLOB'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_QDOC_DESC','value'=>$this->input->post('QDOC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE','value'=>$this->input->post('QDOC_LANG_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID','value'=>$session_data, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_NUM','value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_ERR_MSG','value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
         );
        
        $this->db->stored_procedure('SPINE_SALE','UPDATE_SALE_T_QUOTE_DOCS', $params);
         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
    
    }
    
    
    function DeleteSaleQuotationDoc($QDOC_SYS_ID,$QDOC_LANG_CODE,$QDOC_CR_UID)
    {
        $session_data = $this->session->userdata('USER_ID');
        $params = array(
        array('name'=>':P_QDOC_SYS_ID', 'value'=>$QDOC_SYS_ID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$QDOC_LANG_CODE, 'type'=>SQLT_CHR, 'length'=>300),
       
	array('name'=>':P_USER_ID', 'value'=>$QDOC_CR_UID, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_SALE','DELETE_SALE_T_QUOTE_DOCS', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
            
    }  
    //Sales Quoatation Master End
    
    
}
?>