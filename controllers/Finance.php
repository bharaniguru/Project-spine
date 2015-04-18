<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Finance extends CI_Controller
	{
        function Finance()
	{
	parent::__construct();
	$this->load->model('Apps_model');
	$this->load->model('Finance_model');
	$this->load->library('encrypt');
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	}
	
	
	
	//1.Currency Master Start
	//View Currency Master
       function CurrencyMaster_View(){
	  $result_currencymaster= $this->Finance_model->getcurrencymaster();
	    $data['currencymaster']=$result_currencymaster;
	    $this -> load -> view('header');
	    $this -> load -> view('Finance/CurrencyMaster_View',$data);
        }
	//Add Currency Master
      function CurrencyMaster_Add()
      {
	$data['rate']= $this->Finance_model->FINC_EX_RTYP();
	$data['currency']= $this->Finance_model->getcurrencymaster();
	if($this->input->post('save'))
	{
	$result=$this->Finance_model->addCurrencyMaster();
	
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A New record is added successfully');
	redirect('Finance/CurrencyMaster_View');
	}
	else{
	$data['status']=$result['error_message'];
	} 
	
	}
	$this->load->view('header');
	$this->load->view('Finance/CurrencyMaster_Add',$data);
	}
		
	//Edit Currency Master
	
       function CurrencyMaster_Edit($code)
       {
	$data['rate']= $this->Finance_model->FINC_EX_RTYP();
	$data['currencycode']= $this->Finance_model->getcurrencymaster();
	
	$data['currency']= $this->Finance_model->getcurrencymasterRow($code);

	$data['currencyExch']= $this->Finance_model->getcurrencymasterExch($code);
	
	if($this->input->post('submit'))
	{
	$result=$this->Finance_model->editcurrencymaster();
	
	if($result['return_status']==0)
	{
	$this->session->set_flashdata('status','A record is Updated successfully');
	redirect('Finance/CurrencyMaster_View');
	}
	else{
	$data['status']=$result['error_message'];
	} 
	}
	$this->load->view('header');
	$this->load->view('Finance/CurrencyMaster_Edit',$data);
	}
	//Delete Currency Master
	 function CurrencyMaster_Delete($code){
	
	$result=$this->Finance_model->DeleteCurrencyMaster($code);
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A  record is deleted successfully');
	redirect('Finance/CurrencyMaster_View');
	}
	else{

	$this->session->set_flashdata('status',$result['error_message']);
	redirect('Finance/CurrencyMaster_View');
	} 
	
	 }
	function CurrencyExch_Delete(){

	$from=$_POST["from"];
	$to=$_POST["to"];
	$date1=$_POST["date1"];
	$date2=$_POST["date2"];
	$rate=$_POST["rate"];

	$this->Finance_model->DeleteCurrencyExch($from,$to,$date1,$date2,$rate);
	//redirect('Finance/CurrencyMaster_Edit/',$from);
	 
	 }
	//Currency Master End
	
	
	
	//2.Category Master Start
         function CategoryMaster_View(){
	  $result_categorymaster= $this->Finance_model->getcategorymaster();
	    $data['categorymaster']=$result_categorymaster;
	    $this -> load -> view('header');
	    $this -> load -> view('Finance/CategoryMaster_View',$data);
        }
	function CategoryMaster_Add()
	{
		
	$data['category']= $this->Finance_model->getcategorymaster();
	if($this->input->post('Save'))
	{
	$result=$this->Finance_model->addCategoryMaster();
	
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A New record is added successfully');
	redirect('Finance/CategoryMaster_View');
	}
	else{
	$data['status']=$result['error_message'];
	} 
	
	}
	$this->load->view('header');
	$this->load->view('Finance/CategoryMaster_Add',$data);
	}
	
	function CategoryMaster_Edit($code)
	{
	
	$result_category= $this->Finance_model->getCategorymasterRow($code);
	$data['category']=$result_category;
	if($this->input->post('Save'))
	{
	$result=$this->Finance_model->editcategorymaster();
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A New record is Updated successfully');
	redirect('Finance/CategoryMaster_View');
	}
	else{
	$data['status']=$result['error_message'];
	} 
	
	}
	
	
	$this->load->view('header');
	$this->load->view('Finance/CategoryMaster_Edit',$data);
	}
        
	 function CategoryMaster_Delete($code){
	
	$result=$this->Finance_model->DeleteCategoryMaster($code);
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A  record is Deleted successfully');
	redirect('Finance/CategoryMaster_View');
	}
	else{
	$this->session->set_flashdata('status',$result['error_message']);
	redirect('Finance/CategoryMaster_View');
	} 
	
	}
	 
	 
	public function Ajax_CATG_CODE()
	{
	header('Content-Type: application/json');
	
	$CATG_CODE=$this->input->post('CATG_CODE');
	$viewresult=$this->Finance_model->Ajax_CATG_CODE($CATG_CODE);
	if($viewresult>0)
	{
	echo json_encode(array('valid'=>'false'));
	    
	}
	else
	{
	echo json_encode(array('valid'=>'true'));
	}
	} 

        //Category Master End
	

	//3.Activity Master Start
	function ActivityMaster_View(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
		$data['activitymaster']= $this->Finance_model->viewActivityMaster();
		$this -> load -> view('header');
		$this -> load -> view('Finance/ActivityMaster_View',$data);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	}
	function AjaxActiveMaster()
	{
		header('Content-Type: application/json');
		$ACTH_CODE=$this->input->post('ACTH_CODE');
		$viewresult=$this->Finance_model->AjaxActiveMaster($ACTH_CODE);
		if($viewresult[0]['COUNT(ACTH_CODE)']==0)
		{
		echo json_encode(array('valid'=>'true'));
		}else{
		echo json_encode(array('invalid'=>'false'));
		}
	}
	function AjaxActiveMasterLine()
	{
		header('Content-Type: application/json');
		$ACTL_CODE=$_POST['ACTL_CODE'][0];
		$viewresult=$this->Finance_model->AjaxActiveMasterLine($ACTL_CODE);
		if($viewresult[0]['COUNT(ACTL_CODE)']==0)
		{
		echo json_encode(array('valid'=>'true'));
		}else{
		echo json_encode(array('invalid'=>'false'));
		}
	}
	function ActivityMaster_Add(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->Finance_model->AddActivityMasterHead();
	    if($addres['return_status']==0)
	    {
	    $addres=$this->Finance_model->AddActivityMasterLine();
	    }
	if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is added successfully');
	    redirect('Finance/ActivityMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$this->load->view('header');
	$this->load->view('Finance/ActivityMaster_Add');
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	}
	function ActivityMaster_Edit($id)
	{
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->Finance_model->UpdateActivityMasterHead();
	if($addres['return_status']==0)
	{
	    $addres=$this->Finance_model->UpdateActivityMasterLine();
	
	}
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('Finance/ActivityMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->Finance_model->EditACM_Head($id);
	$editresult['result1']=$this->Finance_model->EditACM_Line($id);
	$this -> load -> view('header');
        $this -> load -> view('Finance/ActivityMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}	
	}
	public function ActivityMaster_Delete($comp,$code,$lan,$uid)
	{
		$session_data = $this->session->userdata('USER_ID');
		if($session_data){
		$deleteresult=$this->Finance_model->DeleteACMline($comp,$code,$lan);
		if($deleteresult['return_status']==0)
		{
		$deleteresult=$this->Finance_model->DeleteDeleteACMHead($comp,$code,$lan,$uid);
		}
		if($deleteresult['return_status']==0)
		{
		    $this->session->set_flashdata('status','A record is deleted successfully');
		    redirect('Finance/ActivityMaster_View');	    
		}
		    $this->session->set_flashdata('status','A record is not deleted successfully');
		    redirect('Finance/ActivityMaster_View');
		}
		else{
		    redirect(base_url()."Apps",'refresh');
		}
	}

	//Activity Master End
	
	
	//4.Analysis Master Start
	function AnalysisMaster_View(){
	  $result_analysismaster= $this->Finance_model->ViewAnalysisMaster();
	    $data['analysismaster']=$result_analysismaster;
	    $this -> load -> view('header');
	    $this -> load -> view('Finance/AnalysisMaster_View',$data);
        }
	
	function AnalysisMaster_Add(){
	
		if($this->input->post('save'))
		{
		$this->Finance_model->AddAnalysisMaster();
		if($result['return_status']==0){
		$this->session->set_flashdata('status','A  record is Added successfully');
		redirect('Finance/AnalysisMaster_View');
		}
		else{
		$data['status']=$result['error_message'];
		} 
		
		}
		$this->load->view('header');
		$this->load->view('Finance/AnalysisMaster_Add'.$data);
	}
	function AnalysisMaster_Edit($code)
	{
		
	$data["head"]=$this->Finance_model->getAnalysisMaster($code);
	$data["line"]=$this->Finance_model->getAnalysisLine($code);
	if($this->input->post('save'))
	{
		$result=$this->Finance_model->EditAnalysisMaster();
		if($result['return_status']==0){
		$this->session->set_flashdata('status','A  record is Updated successfully');
		redirect('Finance/AnalysisMaster_View');
		}
		else
		{
			$data['status']=$result['error_message'];
		} 
	}
	$this->load->view('header');
	$this->load->view('Finance/AnalysisMaster_Edit',$data);
	}
	function AnalysisMaster_Delete($code){
	$result=$this->Finance_model->DeleteAnalysisMaster($code);
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A  record is deleted successfully');
	redirect('Finance/AnalysisMaster_View');
	}
	else{

	$this->session->set_flashdata('status',$result['error_message']);
	redirect('Finance/AnalysisMaster_View');
	} 

	}
	function DeleteAnalysisLine($headcode,$linecode){
	$this->Finance_model->DeleteAnalysisLine($headcode,$linecode);
	redirect('Finance/AnalysisMaster_Edit/'.$headcode);
	}
	public function AJAX_ANLH_CODE()
	{
	header('Content-Type: application/json');
	
	$ANLH_CODE=$this->input->post('ANLH_CODE');
	$viewresult=$this->Finance_model->AJAX_ANLH_CODE($ANLH_CODE);
	if($viewresult>0)
	{
	  echo json_encode(array('valid'=>'false'));
	    
	}
	else
	{
	       echo json_encode(array('valid'=>'true'));
	}
	}
	
	public function AJAX_ANLL_CODE()
	{
		
	header('Content-Type: application/json');
	
	$ANLL_CODE=$_POST["ANLL_CODE"][0];
	
	$viewresult=$this->Finance_model->AJAX_ANLL_CODE($ANLL_CODE);
	
	if($viewresult>0)
	{
	  echo json_encode(array('valid'=>'false'));
	}
	else
	{
	echo json_encode(array('valid'=>'true'));
	}
	}
	//Analysis Master End
	
	
	
	
	
	//5.Bank Master Start
	
	function BankMaster_View(){
	  $result_bankmaster= $this->Finance_model->getbankmaster();
	    $data['bankmaster']=$result_bankmaster;
	    $this -> load -> view('header');
	    $this -> load -> view('Finance/BankMaster_View',$data);
        }
	
	function BankMaster_Add()
	{

		$country=$this->Apps_model->ViewCountry();
		$data['location']=$country;
		
		$result_currencymaster= $this->Finance_model->getcurrencymaster();
	       $data['currency']=$result_currencymaster;
	       
		if($this->input->post('Save'))
		{

		$result=$this->Finance_model->AddBankMaster();
		if($result['return_status']==0){
		$this->session->set_flashdata('status','A  record is Added successfully');
		redirect('Finance/BankMaster_View');
		}
		
		else{
		$data['status']=$result['error_message'];
		} 
		
		}
		$this->load->view('header');
		$this->load->view('Finance/BankMaster_Add',$data);
	}
	//*****************************************IMAGE UPLOAD CODE START***********************************************************//
	function do_upload()
	{	
	    $this->load->library('upload');	
	    $files = $_FILES;
	    echo    $cpt = count($_FILES['userfile']['name']);
	    for($i=0; $i<$cpt; $i++)
	    {	
		$_FILES['userfile']['name']= $files['userfile']['name'][$i];
		$_FILES['userfile']['type']= $files['userfile']['type'][$i];
		$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
		$_FILES['userfile']['error']= $files['userfile']['error'][$i];
		$_FILES['userfile']['size']= $files['userfile']['size'][$i];    			
		$this->upload->initialize($this->set_upload_options());
		$this->upload->do_upload();		
	    }	
	}	
	
	function upload(){		
	    $config['upload_path'] = 'upload/';
	    $config['allowed_types'] = 'jpg|png|gif';
	    $config['max_size'] = '0';
	    $config['max_width']  = '0';
	    $config['max_height']  = '0';	    
	    $this->load->library('upload', $config);	    
	    foreach ($_FILES as $key => $value) {	
		if (!empty($value['tmp_name'])) {	
		    if ( ! $this->upload->do_upload($key)) {
		    $error = array('error' => $this->upload->display_errors());
		    //failed display the errors
		    } else {
		    //success
		    }		
		}
	    }
	}
	//*****************************************IMAGE UPLOAD CODE END***********************************************************//
	
		function ajaxstate()
	{
	    
		$country_code=mysql_real_escape_string($_POST["cn_code"]);
		
		
		$sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$country_code'";
		
		$query = $this->db->query($sql, $return_object = TRUE)->result_array();
		?>
		<option value="">BANK_ST_CODE</option>
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
	       <option value="">BANK_CT_CODE</option>
	       <?php
	       foreach($query as $row)
	       {
	       ?>
	       
	       <option value="<?php echo $row['CT_CODE'] ?>"><?php echo $row['CT_DESC']?></option> 
	       <?php
	       } 
	   
	}
	//Edit Bank Master
	function BankMaster_Edit($code)
	{
		$country=$this->Apps_model->ViewCountry();
		$data['location']=$country;
			$result_currencymaster= $this->Finance_model->getcurrencymaster();
	       $data['currency']=$result_currencymaster;
		$bank= $this->Finance_model->getbankmasterRow($code);
		$data['bank']=$bank;
		$country=$bank[0]['BANK_CN_CODE'];
		
		$state=$bank[0]['BANK_ST_CODE'];
		$data['state']=$this->Finance_model->getstate($country);
		
		$data['city']=$this->Finance_model->getcity($country,$state);
	
		if($this->input->post('Save'))
		{
			$result=$this->Finance_model->editbankmaster();
			
			if($result['return_status']==0)
			{
			$this->session->set_flashdata('status','A record is Updated successfully');
			redirect('Finance/BankMaster_View');
			}
			else{
			$data['status']=$result['error_message'];
			} 
		}
		
		
	        $data['GetbankmasterDoc']=$this->Finance_model->GetBankmasterDoc($code);
		
	
		//print_r($data['GetbankmasterDoc']);
		//exit;
		$this->load->view('header');
		$this->load->view('Finance/BankMaster_Edit',$data);
		}
		
	//Delete Bank Master 
	 function BankMaster_Delete($code){
	
	$result=$this->Finance_model->DeleteBankMaster($code);
	if($result['return_status']==0){
	$this->session->set_flashdata('status','A  record is deleted successfully');
	redirect('Finance/BankMaster_View');
	}
	else{

	$this->session->set_flashdata('status',$result['error_message']);
	redirect('Finance/BankMaster_View');
	} 
	
	 }
	//Bank Master End
	
	}