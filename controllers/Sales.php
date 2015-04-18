<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

	function Sales(){
		parent::__construct();
		$this->load->helper(array('form', 'html'));
		$this->load->model('Apps_model');
		$this->load->model('SalesModel');
		
		
	}

	public function index(){

		$this -> load -> view('index');
	}
//Sale Rep Master begin-->

	 function do_upload()
	{
	    $config['upload_path'] = 'upload/';
	    $config['allowed_types'] = 'gif|jpg|png|html|doc|txt|docx';
	    $config['max_size'] = '100000';
	    

	    $this->load->library('upload', $config);
	    $file_name=basename($_FILES["userfile"]["name"]);
	    $target_file =base_url().$config['upload_path'] . basename($_FILES["userfile"]["name"]);
	    $this->upload->do_upload();
	    $active=$this->input->post('sr_active_yn');
	    if($active=='on'){
		    $active='Y';
	    }
	    else{
		    $active='N';
	    }
	    $data=array(
		    'SR_COMP_CODE'=>$this->input->post('sr_comp_code'),
		    'SR_CODE'=>$this->input->post('sr_code'),
		    'SR_FIRST_NAME'=>$this->input->post('sr_firstname'),
		    'SR_LAST_NAME'=>$this->input->post('sr_lastname'),
		    'SR_LOCN_CODE'=>$this->input->post('sr_locn_code'),
		    'SR_EMAIL'=>$this->input->post('sr_email'),
		    'SR_OFFICE_PHONE'=>$this->input->post('sr_office_phone'),
		    'SR_HOME_PHONE'=>$this->input->post('sr_home_phone'),
		    'SR_CELL_PHONE'=>$this->input->post('sr_cell_phone'),
		    'SR_MANAGER_CODE'=>$this->input->post('sr_manager_code'),
		    'SR_ROLE_CODE'=>$this->input->post('sr_role_code'),
		    'SR_IMAGE_BLOB'=>Null,
		    'SR_IMAGE_FILE'=>$file_name,
		    'SR_ACTIVE_YN'=>$active,
		    'SR_LANG_CODE'=>$this->input->post('sr_lang_code'),
		    'SR_CR_UID'=>'10-MAR-15',
		    'SR_CR_DT'=>$this->input->post('sr_cr_dt'),
		    'SR_UPD_UID'=>$this->input->post('sr_upd_uid'),
		    'SR_UPD_DT'=>$this->input->post('sr_upd_dt')
		       );
	    $this->db->insert('SALE_M_SALES_REP',$data);
	
	}
    	function Ajaxemploye()
	{
	    $SR_CODE=$this->input->post('SR_CODE');
	   $viewresult=$this->SalesModel->Ajaxemployee($SR_CODE);
	   if($viewresult>0)
	   {
	    echo json_encode(array('valid'=>'false'));
	   }else{
	    echo json_encode(array('valid'=>'true'));
	   }
	   
	}
	function SalesRepMaster_View(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['rep']=$this->SalesModel->ViewSalesRepMaster();
                $this -> load -> view('header');
		$this -> load -> view('Sales/SalesRepMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	function Check_Sr_Code(){
	    $data =$this->input->post('sr_code');
	    $sql="SELECT SR_CODE FROM SALE_M_SALES_REP WHERE SR_CODE='$data'";
	    $exist=$this->db->query($sql)->num_rows();
	    $sr_code_exist="Y";
	    $sr_code_not="N";
	    if($exist >0){
		echo '{"existyn":"'.$sr_code_exist.'"}';
	    }else{
		echo '{"existyn":"'.$sr_code_not.'"}';
	    }
	}
	function SalesRepMaster_Add(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['ac_mang']=$this->SalesModel->GetAcMang();
		$data['get_role']=$this->SalesModel->GetSaleRole();
		$data['get_locn']=$this->SalesModel->GetSaleLocn();
		if ($this->input->post('save')=='Save')
		{
		$config['upload_path'] = 'upload/sales/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';
		$config['max_width'] = '10240';
		$config['max_height'] = '7680';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		//$file_name=basename($_FILES["userfile"]["name"]);
		
		$this->upload->do_upload();
		$file_data=$this->upload->data();
		$file_name=$file_data['file_name'];
		$target_file =base_url().$config['upload_path'] . $file_name;
		$result=$this->SalesModel->AddSaleMaster($target_file,$file_name);
		
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('status','New record is added successfully');
		redirect("Sales/SalesRepMaster_View");
		}else{
		$data['error_message']=$result['error_message'];
		}
	    }
		$this -> load -> view('header');
		$this -> load -> view('Sales/SalesRepMaster_Add',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	
	function SalesRepMaster_Edit($cmp_code,$sr_code){
		$data['sr'] = $this->SalesModel->EditSalesRepMaster($cmp_code,$sr_code);
		$data['ac_mang']=$this->SalesModel->GetAcMang();
		$data['get_role']=$this->SalesModel->GetSaleRole();
		$data['get_locn']=$this->SalesModel->GetSaleLocn();
		
	    if ($this->input->post('update')=='Update')
	    {
		$file_name=basename($_FILES["userfile"]["name"]);
		if($file_name!="")
		{
		$config['upload_path'] = 'upload/sales/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';
		$config['max_width'] = '10240';
		$config['max_height'] = '7680';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		//$file_name=basename($_FILES["userfile"]["name"]);
		
		$this->upload->do_upload();
		$file_data=$this->upload->data();
		$file_name=$file_data['file_name'];
		$target_file =base_url().$config['upload_path'] . $file_name;
		}
	    else{
		$file_name=$this->input->post('old_file_name');
		}
		$result= $this->SalesModel->UpdateSalesRepMaster($file_name);
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('Update','Updated Record successfully');
		redirect("Sales/SalesRepMaster_View");
		}else{
		$data['error_message']=$result['error_message'];
		}
	    }
	    $this -> load -> view('header');
	    $this -> load -> view('Sales/SalesRepMaster_Edit',$data);
	}
	
	function SalesRepMaster_Delete($SR_COMP_CODE,$SR_CODE,$SR_LANG_CODE,$SR_CR_UID)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$result = $this->SalesModel->DeleteSalesRepMaster($SR_COMP_CODE,$SR_CODE,$SR_LANG_CODE,$SR_CR_UID);
		
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('Delete','Deleted Record successfully');
		redirect("Sales/SalesRepMaster_View");
		}else{
		$data['error_message']=$result['error_message'];
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/SalesRepMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
//sale rep end-->

//Currncy master begin-->

	function AjaxCurrency()
	{
	    $CCY_CODE =$this->input->post('CCY_CODE');
	   $viewresult=$this->SalesModel->AjaxCurrencyy($CCY_CODE);
	   if($viewresult>0)
	   {
	    echo json_encode(array('valid'=>'false'));
	   }else{
	    echo json_encode(array('valid'=>'true'));
	   }
	   
	}

	function CurrencyMaster_View(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['curr']= $this->SalesModel->ViewCurrency();
                $this -> load -> view('header');
		$this -> load -> view('Sales/CurrencyMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function Check_Ccy_Code(){
	    $data =$this->input->post('ccy_code');
	    $sql="SELECT CCY_CODE FROM SALE_M_CURRENCY WHERE CCY_CODE='$data'";
	    $exist=$this->db->query($sql)->num_rows();
	    $ccy_code_exist="Y";
	    $ccy_code_not="N";
	    if($exist >0){
		echo '{"existyn":"'.$ccy_code_exist.'"}';
	    }else{
		echo '{"existyn":"'.$ccy_code_not.'"}';
	    }
	    
	}
	
	function CurrencyMaster_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		if ($this->input->post('save')=='Save'){
		    $result=$this->SalesModel->AddCurrency();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','New record is added successfully');
		    redirect("Sales/CurrencyMaster_View");
		    }else{
		    $data['error_message']=$result['error_message'];
		    }
		}
		$data['success']='success';
		$this -> load -> view('header');
		$this -> load -> view('Sales/CurrencyMaster_Add',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CurrencyMaster_Edit($comp_code,$ccy_code)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['cur'] = $this->SalesModel->Currencyonerow($comp_code,$ccy_code);
		if ($this->input->post('update')=='Update')
		{
		    $result= $this->SalesModel->CurrencyUpdate();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('Update','Updated record Successfully');
		    redirect("Sales/CurrencyMaster_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/CurrencyMaster_Edit',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function Currency_Delete($CCY_COMP_CODE,$CCY_CODE,$CCY_LANG_CODE,$CCY_CR_UID)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
	    $result=$this -> SalesModel->CurrencyDelete($CCY_COMP_CODE,$CCY_CODE,$CCY_LANG_CODE,$CCY_CR_UID);
	    if($result['return_status']==0)
		{
		$this->session->set_flashdata('Delete','Deleted Record successfully');
		redirect("Sales/CurrencyMaster_View");
		}else{
		$data['error_message']=$result['error_message'];
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/CurrencyMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	    
	}
//Currency Master end -->
	
//Payment Term Master begin -->

	function AjaxPaytm()
	{
	    $PT_CODE =$this->input->post('PT_CODE');
	   $viewresult=$this->SalesModel->AjaxPaytmm($PT_CODE);
	   if($viewresult>0)
	   {
	    echo json_encode(array('valid'=>'false'));
	   }else{
	    echo json_encode(array('valid'=>'true'));
	   }
	   
	}
	
	function PaymentTermMaster_View(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['paytm']=$this->SalesModel->ViewPayTerm();
		$this -> load -> view('header');
		$this -> load -> view('Sales/PaymentTermMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function PaymentTermMaster_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if($this->input->post('save')=="Save"){
		    $result=$this->SalesModel->AddPayment();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','New Record Add successfully');
		    redirect("Sales/PaymentTermMaster_View");
		    }else{
		    $data['error_message']=$result['error_message'];
		    }
		    }
		    $data['succcess']='success';
		    $this -> load -> view('header');
		    $this -> load -> view('Sales/PaymentTermMaster_Add',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function Check_Pt_Code(){
	    $data =$this->input->post('pt_code');
	    $sql="SELECT PT_CODE FROM SALE_M_PAY_TERM WHERE PT_CODE='$data'";
	    $exist=$this->db->query($sql)->num_rows();
	    $pt_code_exist="Y";
	    $pt_code_not="N";
	    if($exist >0){
		echo '{"existyn":"'.$pt_code_exist.'"}';
	    }else{
		echo '{"existyn":"'.$pt_code_not.'"}';
	    }
	}
	
	function PaymentTermMaster_Edit($comp_code,$pt_code)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['pay'] = $this->SalesModel->paygetonerow($comp_code,$pt_code);
	    if ($this->input->post('update')=='Update')
		{
		    $result= $this->SalesModel->PayTermUpdate();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('Delete','Updated Record successfully');
		    redirect("Sales/PaymentTermMaster_View");
		    }else{
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/PaymentTermMaster_Edit',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function PaymentTermMaster_Delete($PT_COMP_CODE,$PT_CODE,$PT_LANG_CODE,$PT_CR_UID)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$result=$this -> SalesModel->PayDelete($PT_COMP_CODE,$PT_CODE,$PT_LANG_CODE,$PT_CR_UID);
		if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('Delete','Deleted Record successfully');
		    redirect("Sales/PaymentTermMaster_View");
		    }else{
		    $data['error_message']=$result['error_message'];
		    }
		$this -> load -> view('header');
		$this -> load -> view('Sales/PaymentTermMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
//Payment Term Master End -->
		
//Customer Class Master Begin -->
	
	function AjaxClass()
	{
	    $CC_CODE =$this->input->post('CC_CODE');
	   $viewresult=$this->SalesModel->AjaxClasss($CC_CODE);
	   if($viewresult>0)
	   {
	    echo json_encode(array('valid'=>'false'));
	   }else{
	    echo json_encode(array('valid'=>'true'));
	   }
	   
	}
	
	function CustomerClassMaster_View(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['class']=$this->SalesModel->ViewCustomerClass();
                $this -> load -> view('header');
		$this -> load -> view('Sales/CustomerClassMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function Check_Cc_Code(){
	    $data =$this->input->post('cc_code');
	    $sql="SELECT CC_CODE FROM SALE_M_CUST_CLASS WHERE CC_CODE='$data'";
	    $exist=$this->db->query($sql)->num_rows();
	    $cc_code_exist="Y";
	    $cc_code_not="N";
	    if($exist >0){
		echo '{"existyn":"'.$cc_code_exist.'"}';
	    }else{
		echo '{"existyn":"'.$cc_code_not.'"}';
	    }
	}
//	function ajaxdrop2()
//	{
//	    $drop=mysql_real_escape_string($_POST["drop"]);
//	    $sql="SELECT * FROM SALE_M_PAY_TERM WHERE PT_DESC LIKE '%$drop%'";
//	    $drop_down=$this->db->query($sql, $return_object = TRUE)->result();
//	   
//	    <?php // foreach($drop_down  as $row)
//	    {  //
       
//	    } 
//	    
//	}
	function CustomerClassMaster_Add(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['exch']=$this->SalesModel->GetExch();
		$data['ccy']=$this->SalesModel->GetCurrency();
		$data['cycle']=$this->SalesModel->GetCycleCode();
		$data['pay']=$this->SalesModel->GetPayTerm();
		$data['ac_mang']=$this->SalesModel->GetAcMang();
		$data['sp_code']=$this->SalesModel->GetSpcode();
		if($this->input->post('save')=="Save")
		{
		    $result=$this->SalesModel->AddCustClass();
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('status','New record is added successfully');
		redirect("Sales/CustomerClassMaster_View");
		}else
		{
		$data['error_message']=$result['error_message'];
		}
		}
		
		$this -> load -> view('header');
		$this -> load -> view('Sales/CustomerClassMaster_Add',$data);
		
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CustomerClassMaster_Edit($comp_code,$classcode)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['ccode']=$this->SalesModel->custclassgetonerow($comp_code,$classcode);
		$data['exch']=$this->SalesModel->GetExch();
		$data['ccy']=$this->SalesModel->GetCurrency();
		$data['cycle']=$this->SalesModel->GetCycleCode();
		$data['pay']=$this->SalesModel->GetPayTerm();
		$data['ac_mang']=$this->SalesModel->GetAcMang();
		$data['sp_code']=$this->SalesModel->GetSpcode();
	    if ($this->input->post('update')=='Update')
		{
		$result= $this->SalesModel->UpdateCustClass();
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('status','Updated record Successfully');
		redirect("Sales/CustomerClassMaster_View");
		}else{
		$data['error_message']=$result['error_message'];
		}
		    
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/CustomerClassMaster_Edit',$data);
	    }
		else{
		redirect(base_url()."Apps",'refresh');
		}
	}
	
	
	function CustomerClassMaster_Delete($CC_COMP_CODE,$CC_CODE,$CC_LANG_CODE,$CC_CR_UID)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
	    $result=$this -> SalesModel->CustClassDelete($CC_COMP_CODE,$CC_CODE,$CC_LANG_CODE,$CC_CR_UID);
	    if($result['return_status']==0)
		{
		$this->session->set_flashdata('status','Deleted record Successfully');
		redirect("Sales/CustomerClassMaster_View");
		}else{
		$data['error_message']=$result['error_message'];
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/CustomerClassMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
//Customer Class Master end-->

//Customer Master Begin -->

	function AjaxCustomer()
	{
	    $CUST_AC_CODE=$this->input->post('CUST_AC_CODE');
	    $viewresult=$this->SalesModel->AjaxCustomerr($CUST_AC_CODE);
	   if($viewresult>0)
	   {
	    echo json_encode(array('valid'=>'false'));
	   }else{
	    echo json_encode(array('valid'=>'true'));
	   }
	}

	function CustomerMaster_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['cust_mas']=$this->SalesModel->ViewCustomerMaster();
		$this -> load -> view('header'); 											
		$this -> load -> view('Sales/CustomerMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function Check_Ac_Code(){
	    $data=$this->input->post('cust_ac_code');
	    $sql="SELECT CUST_AC_CODE FROM SALE_M_CUSTOMER WHERE CUST_AC_CODE='$data'";
	     $result=$this->db->query($sql)->result_array();
	    $exist=$this->db->query($sql)->num_rows();
	    $ac_code_exist='Y';
	    $ac_code_not='N';
	    
	    if($exist>0){
		echo '{"existyn":"'.$ac_code_exist.'"}';
	    }else{
		echo '{"existyn":"'.$ac_code_not.'"}';
	    }
	}
	
	function Get_CC_Detail()
	{
	     $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
	    $data =$this->input->post('cc_code');
	    $sql="SELECT * FROM SALE_M_CUST_CLASS WHERE CC_CODE='$data'";
	    $cust_class_detail=$this->db->query($sql)->result_array();
	    $rows=$this->db->query($sql)->num_rows();
	   $new="";
		if($rows>0){
		    echo json_encode($cust_class_detail);
		}
		else{
		    echo '{"exist_cust":"'.$new.'"}';
		}
	   }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CustomerDetailAdd()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
	    $this -> load -> view('header');
	    $this -> load -> view('Sales/customer_add');
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CustomerMasterAttachement(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$this -> load -> view('header');
		$this -> load -> view('Sales/customer_master_attachement');
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
														
	function CustomerMaster_Add(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['party_type']=$this->SalesModel->GetPartyType();
		$data['ac_type']=$this->SalesModel->GetAcType();
		$data['cust_title']=$this->SalesModel->GetCustTitle();
		$country=$this->Apps_model->ViewCountry();
		$data['country']=$country;
		$data['cc']=$this->SalesModel->GetCustClassCode();
		$data['exch']=$this->SalesModel->GetExch();
		$data['ccy']=$this->SalesModel->GetCurrency();
		$data['cycle']=$this->SalesModel->GetCycleCode();
		$data['pay']=$this->SalesModel->GetPayTerm();
		$data['ac_mang']=$this->SalesModel->GetAcMang();
		$data['sp_code']=$this->SalesModel->GetSpcode();
		if($this->input->post('save')=="Save"){
		    $result=$this->SalesModel->AddCustomerMaster();
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('status','New record is added successfully');
		redirect("Sales/CustomerMaster_View");
		}else
		{
		$data['error_message']=$result['error_message'];
		}
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/CustomerMaster_Add',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CustomerMaster_Edit($comp_code,$cust_ac_code)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data['party_type']=$this->SalesModel->GetPartyType();
		$data['ac_type']=$this->SalesModel->GetAcType();
		$data['cust_title']=$this->SalesModel->GetCustTitle();
		$country=$this->Apps_model->ViewCountry();
		$data['country']=$country;
		$data['cc']=$this->SalesModel->GetCustClassCode();
		$data['exch']=$this->SalesModel->GetExch();
		$data['ccy']=$this->SalesModel->GetCurrency();
		$data['cycle']=$this->SalesModel->GetCycleCode();
		$data['pay']=$this->SalesModel->GetPayTerm();
		$data['ac_mang']=$this->SalesModel->GetAcMang();
		$data['sp_code']=$this->SalesModel->GetSpcode();
		$row1=$this->SalesModel->EditCustMaster($comp_code,$cust_ac_code);
		
		$cn=$row1[0]['CUST_SITE_CN_CODE'];
		$st=$row1[0]['CUST_SITE_ST_CODE'];
		$sql="SELECT * FROM APPS_STATE WHERE ST_CN_CODE='$cn'";
		$data['state']=$this->db->query($sql)->result_array();
		$sql1="SELECT * FROM APPS_CITY WHERE CT_CN_CODE='$cn' AND CT_ST_CODE='$st'";
		$data['city']=$this->db->query($sql1)->result_array();
		
		$cnbill=$row1[0]['CUST_BILL_CN_CODE'];
		$stbill=$row1[0]['CUST_BILL_ST_CODE'];
		$sql="SELECT * FROM APPS_STATE WHERE ST_CN_CODE='$cnbill'";
		$data['state_bill']=$this->db->query($sql)->result_array();
		$sql1="SELECT * FROM APPS_CITY WHERE CT_CN_CODE='$cnbill' AND CT_ST_CODE='$stbill'";
		$data['city_bill']=$this->db->query($sql1)->result_array();
		
		$data['cust_master']=$row1;
		$data['cust_contact']=$this->SalesModel->EditCustContact($comp_code,$cust_ac_code);
		$data['cust_doc']=$this->SalesModel->EditCustDoc($comp_code,$cust_ac_code);
		if ($this->input->post('update')=='Update')
		   {
		$result= $this->SalesModel->UpdateCustomerMaster();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','Updated Record successfully');
		    redirect("Sales/CustomerMaster_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/CustomerMaster_Edit',$data);
	    }
		else{
		    redirect(base_url()."Apps",'refresh');
		   }
	}
	
	function CustomerMasterContactDelete_One_Row($ac_code,$cont_name,$comp_code){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$result=$this -> SalesModel->Delete_One_RowCustMasterContact($ac_code,$cont_name,$comp_code);
		if($result['return_status']==0)
		{
		$this->session->set_flashdata('status','Deleted Record successfully');
		redirect("Sales/CustomerClassMaster_View");
		}else
		{
		$data['error_message']=$result['error_message'];
		}
		  redirect('Sales/CustomerMaster_Edit/'.$comp_code.'/'.$ac_code);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CustomerMasterDocDelete_One_Row($ac_code,$sr_code,$comp_code){
	     $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		 $result=$this -> SalesModel->Delete_One_RowCustMasterDoc($ac_code,$sr_code,$comp_code);
		 redirect('Sales/CustomerMaster_Edit/'.$comp_code.'/'.$ac_code);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function CustomerMaster_Delete($comp_code,$ac_code){
	     $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$result=$this->SalesModel->DeleteCustomerMaster($comp_code,$ac_code);
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','Deleted Record successfully');
		    redirect("Sales/CustomerMaster_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		$this -> load -> view('header');
		$this -> load -> view('Sales/CustomerMaster_View',$data);
		    
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
//Customer Master End -->

//Lead Transaction Begin -->

	//function AjaxLead()
	//{
	//    $LH_CONTACT_NO=$this->input->post('LH_CONTACT_NO');
	//    $viewresult=$this->SalesModel->AjaxLeadd($LH_CONTACT_NO);
	//   if($viewresult>0)
	//   {
	//    echo json_encode(array('valid'=>'true'));
	//   }else{
	//    echo json_encode(array('valid'=>'true'));
	//   }
	//}


	function LeadTransaction_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$row=$this->SalesModel->GetLocn_SR_code();
		if($row=="no"){
		    $data['locn_sr_code']=$row;
		}else{
		    $data['txn_code']=$this->SalesModel->GetTxnCode();
		    $data['priority']=$this->SalesModel->GetPriority();
		    $data['source']=$this->SalesModel->GetSource();
		    $data['status']=$this->SalesModel->GetStatus();
		    $data['locn_sr_code']=$row;
		}
		if($this->input->post('save')=="Save"){
		    $result=$this->SalesModel->Addlead();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','New Record Add successfully');
		    redirect("Sales/LeadTransaction_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		    }
		$this -> load -> view('header');
		$this -> load -> view('Sales/LeadTransaction_Add',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
		
	}
	
	function LeadTransaction_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['lead']=$this->SalesModel->ViewLead();
                $this -> load -> view('header');
		$this -> load -> view('Sales/LeadTransaction_View',$data);
		}else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function Get_Contact_Detail()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
	    $data =$this->input->post('contact_no');
	    $sql="SELECT CUST_AC_CODE,CUST_AC_DESC FROM SALE_M_CUSTOMER WHERE CUST_SITE_MOBILE='$data' OR CUST_SITE_PHONE='$data' OR CUST_SITE_FAX='$data' OR CUST_BILL_MOBILE='$data' OR CUST_BILL_PHONE='$data' OR CUST_BILL_FAX='$data'";
	    $contact_detail=$this->db->query($sql)->result_array();
	    $rows=$this->db->query($sql)->num_rows();
	   
	    $new="";
		if($rows>0){
		    $cust_ac_code=$contact_detail[0]['CUST_AC_CODE'];
		    $cust_ac_desc=$contact_detail[0]['CUST_AC_DESC'];
		    $exist="Existing Customer";
		    echo '{"acc_code":"'.$cust_ac_code.'","acc_desc":"'.$cust_ac_desc.'","exist_cust":"'.$exist.'"}';
		}else{
		    echo '{"exist_cust":"'.$new.'"}';
		}
	   }else{
		redirect(base_url()."Apps",'refresh');
	    }

	}
	
	function LeadTransaction_Edit($comp_code,$sys_id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['txn_code']=$this->SalesModel->GetTxnCode();
		$data['priority']=$this->SalesModel->GetPriority();
		$data['source']=$this->SalesModel->GetSource();
		$data['status']=$this->SalesModel->GetStatus();
		$data['lead']=$this->SalesModel->leadgetonerow($comp_code,$sys_id);
	    if ($this->input->post('update')=='Update') {
		    $result= $this->SalesModel->Updatelead();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','Updated Record successfully');
		    redirect("Sales/LeadTransaction_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/LeadTransaction_Edit',$data);
	    }
	    else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function LeadTransaction_Delete($LH_SYS_ID,$LH_LANG_CODE,$LH_CR_UID)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
	    $result=$this-> SalesModel->Deletelead($LH_SYS_ID,$LH_LANG_CODE,$LH_CR_UID);
	    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','Deleted Record successfully');
		    redirect("Sales/LeadTransaction_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		    $this -> load -> view('header');
		    $this -> load -> view('Sales/LeadTransaction_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
		
// Lead Transaction End -->
	
	function ajaxstate()
	{
	
	$country_code=mysql_real_escape_string($_POST["cn_code"]);
	$sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$country_code' ORDER BY ST_CN_DESC ASC";
	$query = $this->db->query($sql, $return_object = TRUE)->result_array();
	?>
	<option value="">Select State</option>
	<?php
	foreach($query as $row)
	{
	?>
	<option value="<?php echo $row['ST_CODE'] ?>"><?php echo $row['ST_DESC']?></option> 
	<?php
	}
	}
	
	function ajaxcity()
	{
	$state_code=mysql_real_escape_string($_POST["st_code"]);
	$country_code=mysql_real_escape_string($_POST["cn_code"]);
	$sql="SELECT * FROM APPS_CITY where CT_ST_CODE='$state_code' AND CT_CN_CODE='$country_code' ";
	$query = $this->db->query($sql, $return_object = TRUE)->result_array();
	?>
	<option value="">Select city</option>
	<?php
	foreach($query as $row)
	{
	?>
	<option value="<?php echo $row['CT_CODE'] ?>"><?php echo $row['CT_DESC']?></option> 
	<?php
	}
	}
	
	
	
// Oppertunity Transaction Begin -->

	function OpportunityTransaction_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['opp']=$this->SalesModel->ViewOpportunityTransaction();
		$this -> load -> view('header');
		$this -> load -> view('Sales/OpportunityTransaction_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
		 }
	}
	
	function Get_OPP_Contact_Detail(){
	     $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
	    $data =$this->input->post('contact_no');
	    $sql="SELECT * FROM SALE_M_CUSTOMER WHERE CUST_SITE_MOBILE='$data' OR CUST_SITE_PHONE='$data' OR CUST_SITE_FAX='$data' OR CUST_BILL_MOBILE='$data' OR CUST_BILL_PHONE='$data' OR CUST_BILL_FAX='$data'";
	    $contact_detail=$this->db->query($sql)->result_array();
	    $rows=$this->db->query($sql)->num_rows();
	    $new="";
		if($rows>0){
		     echo json_encode($contact_detail);
		}
		else{
		    echo '{"exist_cust":"'.$new.'"}';
		}
	   }else{
		redirect(base_url()."Apps",'refresh');
	    }

	}
	
	function Get_Acc_Num()
	{
	     $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
	    $data =$this->input->post('account');
	    $sql="SELECT CUST_AC_DESC FROM SALE_M_CUSTOMER WHERE CUST_AC_CODE='$data'";
	    $accnt_detail=$this->db->query($sql)->result_array();
		echo json_encode($accnt_detail);
	    }
	   else{
		redirect(base_url()."Apps",'refresh');
	    }

	}
	
	function Get_Cust_id(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		  // $data =$this->input->post('contact_no');
	    //$data='02-4130000';
	    $sql="SELECT LPAD(SALE_T_CUST_ID.NEXTVAL,8,'0')CUST_ID FROM DUAL";
	    $cust_id=$this->db->query($sql)->result_array();
	    
	    $cust_id=$cust_id[0]['CUST_ID'];
	    //print_r($cust_id);
	    $rows=$this->db->query($sql)->num_rows();
		  
	    $new="";
		if($rows>0){
	     echo '{"cust_id":"'.$cust_id.'"}';
		}else{
	     echo '{"cust_id":"'.$new.'"}';
		}
		  }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function  OpportunityTransaction_Add()
	{
		$session_data = $this->session->userdata('USER_ID');
		$country=$this->Apps_model->ViewCountry();
		$data['country']=$country;
		$session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$row=$this->SalesModel->GetLocn_SR_code();
		if($row=="no"){
		    $data['locn_sr_code']=$row;
		}else{
		    $data['cust_ac']=$this->SalesModel->Get_customer_acc();
		    $data['opp_status']=$this->SalesModel->GetOppStatus();
		    $data['opp_ccy']=$this->SalesModel->GetOppCurrency();
		    $data['prod_code']=$this->SalesModel->GetProductCode();
		    $data['locn_sr_code']=$row;
		}
		if($this->input->post('save')=="Save")
		{
		    $result=$this->SalesModel->AddOpportunityHead();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','New Record Add successfully');
		    redirect("Sales/OpportunityTransaction_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/OpportunityTransaction_Add',$data);	
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
		
	}
	
	function OpportunityTransaction_Edit($comp_code,$sys_id_head,$sys_id_head_on_line,$sys_id_lines)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$country=$this->Apps_model->ViewCountry();
		$data['country']=$country;
		$row=$this->SalesModel->GetLocn_SR_code();
		$data['locn_sr_code']=$row;
		$data['opp_status']=$this->SalesModel->GetOppStatus();
		$data['opp_ccy']=$this->SalesModel->GetOppCurrency();
		$data['prod_code']=$this->SalesModel->GetProductCode();
		$row1=$this->SalesModel->OppGetOneRow($comp_code,$sys_id_head,$sys_id_head_on_line,$sys_id_lines);
		$cn=$row1[0]['OPH_CN_CODE'];
		$st=$row1[0]['OPH_ST_CODE'];
		$sql="SELECT * FROM APPS_STATE WHERE ST_CN_CODE='$cn'";
		$data['state']=$this->db->query($sql)->result_array();
		$sql1="SELECT * FROM APPS_CITY WHERE CT_CN_CODE='$cn' AND CT_ST_CODE='$st'";
		$data['city']=$this->db->query($sql1)->result_array();
		$data['opp']=$row1;
		if($this->input->post('update')=="Update")
		{
		    $result=$this->SalesModel->UpdateOpportunityHead();
		    if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','Updated Record successfully');
		    redirect("Sales/OpportunityTransaction_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/OpportunityTransaction_Edit',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	function OpportunityTransaction_Delete($sys_head,$lang_head,$head_user,$sys_lines,$sys_lines,$sys_user)
	{
		$session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$result=$this->SalesModel->DeleteOpp($sys_head,$lang_head,$head_user,$sys_lines,$sys_lines,$sys_user);
		if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','Deleted Record successfully');
		    redirect("Sales/OpportunityTransaction_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		    $this -> load -> view('header');
		    $this -> load -> view('Sales/OpportunityTransaction_View',$data);
	     }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
//Opportunity Transaction End -->
	
//Price List Master Begin -->

	function AjaxPrice()
	{
	    $PLH_CODE=$this->input->post('PLH_CODE');
	   $viewresult=$this->SalesModel->AjaxPricee($PLH_CODE);
	   if($viewresult>0)
	   {
	    echo json_encode(array('valid'=>'false'));
	   }else{
	    echo json_encode(array('valid'=>'true'));
	   }
	   
	}
	
	function PriceListMaster_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['price']=$this->SalesModel->ViewPriceListMaster();
		$this -> load -> view('header');
		$this -> load -> view('Sales/PriceListMaster_View',$data);
		}else{
		redirect(base_url()."Apps",'refresh');
	    }
		
	}
	
	function PriceListMaster_Add()
	{
	     $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['drop']=$this->SalesModel->PriceListDrop();
		$data['uom_code']=$this->SalesModel->GetUomCode();
		if($this->input->post('save')=="Save")
		{
		$result=$this->SalesModel->AddPriceList();
		if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','New Record Add successfully');
		    redirect("Sales/PriceListMaster_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		}
		$this -> load -> view('header');
		$this -> load -> view('Sales/PriceListMaster_Add',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
    	function PriceListMaster_Edit($sys_id_head)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$data['drop']=$this->SalesModel->PriceListDrop();
		$data['price']=$this->SalesModel->PriceListEditHead($sys_id_head);
		$data['priceline']=$this->SalesModel->PriceListEditLines($sys_id_head);
		if($this->input->post('update')=="Update")
	       {
	       $result=$this->SalesModel->UpdatePriceListMaster();
	       if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('Update','Updated Record successfully');
		    redirect("Sales/PriceListMaster_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
	       }
		$this -> load -> view('header');
		$this -> load -> view('Sales/PriceListMaster_Edit',$data);
	    }
	    else{
		redirect(base_url()."Apps",'refresh');
		}
	}

	
	
	function PriceListMasterDelete_one_row($head,$sys_lines){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
		$data=$this->SalesModel->Delete_one_row_PriceListMaster($sys_lines);
		redirect('Sales/PriceListMaster_Edit/'.$head);
	    }else{
	    redirect(base_url()."Apps",'refresh');
	    }
		
	}
	
	function Price_Get_Menu(){
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data){
	    $data =$this->input->post('menu');
	    $sql="SELECT ITEM_CODE,ITEM_UOM_CODE FROM INVT_M_ITEM WHERE ITEM_CODE='$data'";
	    $contact_detail=$this->db->query($sql)->result_array();
	    $rows=$this->db->query($sql)->num_rows();
	    $new="";
		if($rows>0){
		    $cust_ac_code=$contact_detail[0]['ITEM_CODE'];
		    $cust_ac_desc=$contact_detail[0]['ITEM_UOM_CODE'];
		  
		    echo '{"acc_code":"'.$cust_ac_code.'","acc_desc":"'.$cust_ac_desc.'"}';
		}
		else{
		    echo '{"acc_code":"'.$new.'"}';
		}
	}else{
		redirect(base_url()."Apps",'refresh');
	    }

	}
	
	function Check_PLH_CODE()
    {
        $data =$this->input->post('plh_code');
	    $sql="SELECT PLH_CODE FROM SALE_M_PRICE_HEAD WHERE PLH_CODE='$data'";
	    $exist=$this->db->query($sql)->num_rows();
	    $plh_code_exist="Y";
	    $plh_code_not="N";
	    if($exist >0){
		echo '{"existyn":"'.$plh_code_exist.'"}';
	    }else{
		echo '{"existyn":"'.$plh_code_not.'"}';
	    }
  
    }
	
	
	function PriceList_Delete($sys_head,$lang_head,$user_head)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$result=$this->SalesModel->DeletePrice($sys_head,$lang_head,$user_head);
		if($result['return_status']==0)
		    {
		    $this->session->set_flashdata('status','Deleted Record successfully');
		    redirect("Sales/PriceListMaster_View");
		    }else
		    {
		    $data['error_message']=$result['error_message'];
		    }
		$this -> load -> view('header');
		$this -> load -> view('Sales/PriceListMaster_View',$data);
	    }else{
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	//Price List Master End	
	
	
}