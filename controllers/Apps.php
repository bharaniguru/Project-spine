<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps extends CI_Controller {
    function Apps(){
	parent::__construct();
	$this->load->model('Apps_model');
	$this->load->library('session');
    }
    //Authentication Controllers Begin
    public function index(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data==""){
	    if ($this->input->post('proceed')=='yes') {
		$result= $this->Apps_model->loginAuthentication();
		if($result==0){
		    $this->session->set_flashdata('error', 'Invalid User Id and Password Please check it');
		    redirect(base_url()."Apps");
		}else{
		    $this->session->set_userdata('USER_DESC',$result[0]['USER_DESC']);
		    $this->session->set_userdata('USER_IMAGE_FILE',$result[0]['USER_IMAGE_FILE']);
		    $this->session->set_userdata('USER_COMP_CODE',$result[0]['USER_COMP_CODE']);
		    $this->session->set_userdata('USER_ID',$result[0]['USER_ID']);
		    $this->session->set_userdata('USER_PERS_CODE',$result[0]['USER_PERS_CODE']);
		    $this->session->set_userdata('USER_PW_CHANGE_YN',$result[0]['USER_PW_CHANGE_YN']);
		    $this->session->set_userdata('LANG_CODE',substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
		    $result = $this->Apps_model->GetCompDetails($result[0]['USER_COMP_CODE']);
		    $this->session->set_userdata('COMP_DESC',$result[0]['COMP_DESC']);
		    $this->session->set_userdata('COMP_BASE_CCY_CODE',$result[0]['COMP_BASE_CCY_CODE']);
		    //echo "<pre>";
		    //print_r($result);
		    //echo "</pre>";
		    //exit;
		    redirect(base_url()."Apps/Country_View");
		}
	    }
	    $this -> load -> view('index');
	}
	else{
	    redirect(base_url('Apps/Country_View'));

	}
	
    }
    public function Logout(){
	$this->session->unset_userdata('some_name');
	$this->session->unset_userdata('USER_COMP_CODE');
	$this->session->unset_userdata('USER_ID');
	$this->session->unset_userdata('USER_PERS_CODE');
	$this->session->unset_userdata('USER_PW_CHANGE_YN');
	unset($this->session->userdata);
	redirect(base_url()."Apps",'refresh');
    }
    //Authentication Controllers END
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  COUNTRY MASTER START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    
    //Country Controllers Begin
    //Author: Pravin Kumar
    //functionality By: Gobi. C
    //Created on: 04/03/15
    //Modified on: 16/03/15
    function Country_View()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!=""){
	    $this -> load -> view('header');
	    $viewcountry['result']= $this->Apps_model->ViewCountry();
	    $this -> load -> view('apps/Country_View',$viewcountry);
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    
    function AjaxCheckCountryCode()
    {
	header('Content-Type: application/json');
	$cn_code=$this->input->post('cn_code');
	$sql="SELECT COUNT(CN_CODE) FROM APPS_COUNTRY WHERE CN_CODE='$cn_code' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(CN_CODE)']==0)
	{
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
	
    }
    
    
    function Country_Add()
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if ($this->input->post('proceed')=='Save')
	    {
		$result= $this->Apps_model->addCountry();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A  New Record is Added Successfully');
		    redirect("Apps/Country_View");
		}else{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $data['result']= $this->Apps_model->ViewCountry();
	    $this -> load -> view('header');
	    $this -> load -> view('apps/Country_Add',$data);
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    
    function Country_Edit($id)
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if ($this->input->post('save')=='Update')
	    {
		$result= $this->Apps_model->update_country();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Record is Updated Successfully');
		    redirect("Apps/Country_View");
		}else{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $data['country']=$this->Apps_model->fetchCountry($id);
	    $this -> load -> view('header');
	    $this -> load -> view('apps/Country_Edit',$data);
	}
	else{
	    redirect(base_url('Apps'));
	}
	
	
    }
    function Country_Delete($id)
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result = $this->Apps_model->DeleteCountry($id);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Record is Deleted Successfully');
		redirect("Apps/Country_View");
	    }else{
		 $this->session->set_flashdata('status','A Record is Unable To Delete');
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
	
	
    }
    //Country Controllers End
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  COUNTRY MASTER END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   
    
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  STATE MASTER START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%       

    
    //State Controllers Begin
    //Author: Vinod
    //functionality By: Gobi. C
    //Created on: 04/03/15
    //Modified on: 26/03/15
    function State_View()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!=""){
	    $this -> load -> view('header');
	    $ViewState['result']= $this->Apps_model->ViewState();
	    $this -> load -> view('apps/State_View',$ViewState);
	}
	else{
	     redirect(base_url('Apps'));
	}
    }
    function AjaxCheckStateCode()
    {
	header('Content-Type: application/json');
	$st_code=$this->input->post('st_code');
	$sql="SELECT COUNT(ST_CODE) FROM APPS_STATE WHERE ST_CODE='$st_code' ";
	$query = $this->db->query($sql)->result_array();
	 if($query[0]['COUNT(ST_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
	
    }
    function State_Add()
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $data['Country']= $this->Apps_model->GetCountry();
	    $this -> load -> view('header');
	    $this -> load -> view('apps/State_Add',$data);
	    if ($this->input->post('proceed')=='Save')
	    {
		$result= $this->Apps_model->AddState();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A  New Record is Added Successfully');
		    redirect("Apps/State_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
	
    }
    function State_Edit($id)
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if ($this->input->post('submit')=='Update')
	    {
	       $result = $this->Apps_model->UpdateState($id);
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A   Record is Updated Successfully');
		    redirect("Apps/State_View");
		}else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $data['State']=$this->Apps_model->EditState($id);
	    $data['Country']= $this->Apps_model->GetCountry();
	    $this -> load -> view('header');
	    $this -> load -> view('apps/State_Edit',$data);
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    function State_Delete($id)
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->DeleteState($id);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Record is Deleted Successfully');
		redirect("Apps/State_View");
	    }
	    else
	    {
		$this->session->set_flashdata('status','A Record is Unable To Delete');
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    //State Controllers END
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  STATE MASTER  END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   
    
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  CITY MASTER  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   
    
    
    //Author: Gobi .C
    //Functionality By: Gobi. C
    //Created on: 04/03/15
    //Modified on: 24/03/15
    //City Controller Start
    
    function City_View()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->ViewCity();
	    $data['city']=$result;
	    
	    $this -> load -> view('header',$data);
	    $this -> load -> view('Apps/City_View');
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    
    }
    function AjaxCheckCityCode()
    {
	header('Content-Type: application/json');
	$ct_code=$this->input->post('ct_code');
	$sql="SELECT COUNT(CT_CODE) FROM APPS_CITY WHERE CT_CODE='$ct_code'   ";
	$query = $this->db->query($sql)->result_array();
	 if($query[0]['COUNT(CT_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    
    function City_Add()
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result= $this->Apps_model->GetCountry();
	    $data['country']=$result;
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/City_Add',$data);
	    if ($this->input->post('proceed')=='Save')
	    {
		$result= $this->Apps_model->addCity();
		
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A  New Record is Added Successfully');
		    redirect(base_url()."Apps/City_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    public function ajaxcity()
    {
	$country_code=mysql_real_escape_string($_POST["cn_code"]);
	$sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$country_code' and ST_ACTIVE_YN='Y' ORDER BY ST_DESC ASC ";
	$query = $this->db->query($sql, $return_object = TRUE)->result_array();
	?>
	<option selected disabled > Select</option>
	<?php
	foreach($query as $row)
	{
	    ?>
	    <option value="<?php echo $row['ST_CODE'] ?>"><?php echo $row['ST_DESC']?></option> 
	    <?php
	}
    }
    
    public function ajaxcitySelected()
    {
	$country_code=mysql_real_escape_string($_POST["cn_code"]);
	$city_code=mysql_real_escape_string($_POST["ct_code"]);
	
	$sql="SELECT * FROM APPS_CITY where CT_CODE='$city_code' ";
	$data= $this->db->query($sql, $return_object = TRUE)->result_array();
	
	$sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$country_code' and ST_ACTIVE_YN='Y' ORDER BY ST_DESC ASC ";
	$query = $this->db->query($sql, $return_object = TRUE)->result_array();
	?>
	<option selected disabled > Select</option>
	<?php
	foreach($query as $row)
	{
	    ?>
	    <option value="<?php echo $row['ST_CODE'] ?>" <?php if($data[0]['CT_ST_CODE']==$row['ST_CODE'])echo "selected"?>><?php echo $row['ST_DESC']?></option> 
	    <?php
	}
    }
	
    function City_Edit($code)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result_city= $this->Apps_model->GetCity($code);
	    $data['city']=$result_city;
	    $result_city_area= $this->Apps_model->GetCityArea($code);
	    $data['cityarea']=$result_city_area;
	    $result= $this->Apps_model->ViewCountry();
	    $data['country']=$result;
	    $result_state= $this->Apps_model->ViewState();
	    $data['state']=$result_state;
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/City_Edit',$data);
	    if ($this->input->post('proceed')=='Update')
	    {
		$result= $this->Apps_model->UpdateCity();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A  New Record is Added Successfully');
		    redirect(base_url()."Apps/City_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    
    function City_Delete($id)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->DeleteCity($id);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A  Record Deleted Successfully');
		redirect(base_url()."Apps/City_View");
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    
    
    function CityLines_Delete($id1,$id2)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->CityLines_Delete($id1);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A  Line  Deleted Successfully');
	       redirect(base_url()."Apps/City_Edit/".$id2);
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    //City Controller END

    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  CITY MASTER  END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 
 
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  REGION MASTER  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   

     
    //Author: Gobi.C
    //Functionality By: Gobi. C
    //Created Date:11-03-2015
    //Modified Date: 17-03-2015
    //Region Master Start
    
    function AjaxCheckRegionCode()
    {
	header('Content-Type: application/json');
	$RGH_CODE=$this->input->post('rgh_code');
	$sql="SELECT COUNT(RGH_CODE) FROM APPS_REGION_HEAD WHERE RGH_CODE='$RGH_CODE' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(RGH_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    
    function geo_type()
    {
	$geo_type=mysql_real_escape_string($_POST["geo_type"]);
	if($geo_type=="City")
	{
	    $sql="SELECT * FROM APPS_CITY  ORDER BY CT_DESC ASC  ";
	    $query = $this->db->query($sql)->result_array();
	     ?>
	    <option selected disabled > Select</option>
	    <?php foreach($query as $row)
	    { ?>
	    <option value="<?php echo $row['CT_CODE'].",". $row['CT_DESC'] ?>"><?php echo $row['CT_DESC']?></option>
	    <?php } ?>
	    <?php
	}
	else if($geo_type=="Country")
	{
	    //$query=$this->db->get('APPS_COUNTRY')->result_array();
	     $sql="SELECT * FROM APPS_COUNTRY  ORDER BY CN_DESC ASC  ";
	    $query = $this->db->query($sql)->result_array();?>
	    <option selected disabled > Select</option>
	    <?php foreach($query as $row)
	    { ?>
	    <option value="<?php echo $row['CN_CODE'].",". $row['CN_DESC'] ?>"><?php echo $row['CN_DESC']?></option>
	    <?php } ?>
	    <?php
	}
	else if($geo_type=="State")
	{
	    //$query=$this->db->get('APPS_STATE')->result_array();
	     $sql="SELECT * FROM APPS_STATE  ORDER BY ST_DESC ASC  ";
	    $query = $this->db->query($sql)->result_array();
	    ?>
	    <option selected disabled > Select</option>
	    <?php foreach($query as $row)
	    { ?>
	    <option value="<?php echo $row['ST_CODE'].",". $row['ST_DESC'] ?>"><?php echo $row['ST_DESC']?></option>
	    <?php } ?>
	    <?php
	}
    }
    
    function RegionMaster_View()
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $date['query']=$this->Apps_model->ViewRegionMaster();
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/RegionMaster_View',$date);
	}
	else
	{
	    redirect(base_url('Apps'));
	}
	
    }
    
    function RegionMaster_Add()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if($this->input->post('Proceed')=='Save')
	    {
		
		$result=$this->Apps_model->RegionSave();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A New Record Added Successfully');
		    redirect(base_url()."Apps/RegionMaster_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $this -> load -> view('header');
	    $data['GetGeoType']=$this->Apps_model->GetGeoType();
	    $this -> load -> view('Apps/RegionMaster_Add',$data);
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    
    function RegionMaster_Edit($code)
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if($this->input->post('Update')=='Update')
	    {
		
		$result=$this->Apps_model->UpdateRegion($code);
    
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A  Record Updated Successfully');
		    redirect(base_url()."Apps/RegionMaster_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $row= $this->Apps_model->GetRegionHead($code);
	    $data['region'] =$row;
	    $row1 = $this->Apps_model->GetRegionHeadLine($code);     		
	    $data['region2'] =$row1;
	    foreach($row as $getgeo)
	    {}
	    $cnt=$getgeo['RGH_GEO_TYPE'];
	    
	    $row3=$this->Apps_model->GetAddress($cnt);
	    $data['region3']=$row3;
	    $data['GetGeoType']=$this->Apps_model->GetGeoType();
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/RegionMaster_Edit',$data);   
	}
	else
	{
	    redirect(base_url('Apps'));
	}
	
	
	
    }
    
    
    function RegionMaster_Delete($code)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->DeleteRegionMaster($code);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A  Record Deleted Successfully');
		redirect(base_url()."Apps/RegionMaster_View");
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }
    
    function  RegionLine_Delete($id1,$id2)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->DeleteRegionLine($id1,$id2);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Line Record Deleted Successfully');
		redirect(base_url()."Apps/RegionMaster_Edit/".$id2);
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }  
	}
	else
	{
	    redirect(base_url('Apps'));
	}
	    
    }
    
    //Region master End
     //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  REGION MASTER  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   
    
    
     //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  USER DEFINITION  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
     
     
    //User definination Start
    /*Author: Pravin Kumar.P
     Functionality By: Gobi. C
    Created on: 04/03/15
    Modified on: 16/03/15*/
    function UserDefinition_View()
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!=""){
	    $userdata['result']=$this->Apps_model->FetchUserDefinition();
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/UserDefinition_View',$userdata);
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    //function DeleteUserDefinition($id)
    //{
    //	$delres=$this->Apps_model->delete_apps_user($id);
    //	if($delres)
    //	{
    //	$delres=$this->Apps_model->delete_apps_user_res($id);
    //	}
    //	redirect('Apps/ViewUserDefinition');
    //}
    
    function AjaxCheckUserId()
    {
	header('Content-Type: application/json');
	$user_id=$this->input->post('user_id');
	$sql="SELECT COUNT(USER_ID) FROM APPS_USER WHERE USER_ID='$user_id' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(USER_ID)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    function UserDefinition_Add()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $this -> load -> view('header');
	    $responsibility['result']=$this->Apps_model->getResponsibility();
	    $this -> load -> view('Apps/UserDefinition_Add',$responsibility);
	    if (isset($_POST['save']))
	    {
	       $result= $this->Apps_model->AddUserDefinition();
	       
		if($result['return_status']==0)
		    {
			$this->session->set_flashdata('status','A New Record Added Successfully');
			redirect(base_url()."Apps/UserDefinition_View");
		    }
		    else
		    {
			$data['error_message']=$result['error_message'];
		    }
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
	
	
    }

    function UserDefinition_Edit($id)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if (isset($_POST['update']))
	    {
	    $this->Apps_model->UpdateUserData($id);
	    
	    if($result['return_status']==0)
		    {
			$this->session->set_flashdata('status','A Updated Successfully');
			redirect(base_url()."Apps/UserDefinition_View");
		    }
		    else
		    {
			$data['error_message']=$result['error_message'];
		    }
	    }
	    $editresult['result_head']=$this->Apps_model->getResponsibility();
	    $editresult['result']=$this->Apps_model->EditUser($id);
	    $editresult['result_res']=$this->Apps_model->EditUserResp($id);
		
		//echo "<pre>";
		//print_r($editresult['result_res']);
		//echo "</pre>";
		//exit();
	    
	    $this->load->view('header');
	    $this->load->view('Apps/UserDefinition_Edit',$editresult);
	}
	else{
	    redirect(base_url('Apps'));
	}
	    
    }
    function UserDefinition_Delete($id1,$id2)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result= $this->Apps_model->DeleteUserDef($id1,$id2);
	    
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Record Deleted Successfully');
		redirect(base_url()."Apps/UserDefinition_View");
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
	
	   
	    
    }
    
    function UserDefinitionResp_Delete($id1,$id2,$id3)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $result=$this->Apps_model->DeleteUserResp($id1,$id2,$id3);
	    redirect('Apps/UserDefinition_View');
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Line Record Deleted Successfully');
		redirect(base_url()."Apps/UserDefinition_Edit".$id2);
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
	}
	else{
	    redirect(base_url('Apps'));
	}
	
	    
	    
    }
    //User definination Start
    
      //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  USER DEFINITION  END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      
      
      
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  RESPONSIBILITY DEFINITION  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
    //Author: Gobi.C
    //Functionality By: Gobi. C
    //Created Date:11-03-2015
    //Modified Date: 16-03-2015
    
    //Responsibility Definition Start...........
    
    
	
       
    
    
    
    function ResponsibilityDefinition_View()
    {
       $session_data = $this->session->userdata('USER_ID');
	if($session_data!=""){
	    $result['data']= $this->Apps_model->ViewResponsibilityDefinition();  
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/ResponsibilityDefinition_View',$result);
	}
	else{
	    redirect(base_url('Apps'));
	}
       
    }
    function AjaxCheckRespId()
    {
	header('Content-Type: application/json');
	$rsph_code=$this->input->post('rsph_code');
	$sql="SELECT COUNT(RSPH_CODE) FROM APPS_RESP_HEAD WHERE RSPH_CODE='$rsph_code' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(RSPH_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    function ResponsibilityDefinition_Add()
    {
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	   $num['result']=$this->Apps_model->GetMenuDiscription();
	    if ($this->input->post('proceed')=='Save')
	    {
		$result= $this->Apps_model->AddResponsibilityDefinition();
		redirect('Apps/ResponsibilityDefinition_View');
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A New Record Added Successfully');
		    redirect(base_url()."Apps/ResponsibilityDefinition_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/ResponsibilityDefinition_Add',$num);/**/
	}
	else
	{
	    redirect(base_url('Apps'));
	}
	
	
	
    }

    function ResponsibilityDefinition_Edit($id)
    {
	
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    //$idd=$this->session->userdata('ResponsibilityId');
	    //echo  "session Value".$idd;
	    //exit();
	    $res['data']= $this->Apps_model->EditResponsibilityDefinition($id);    
	    $res['result']=$this->Apps_model->GetMenuDiscription();
	    $res['get']=$this->Apps_model->GetAppsRespLines($id);
	    if ($this->input->post('Update')=='Update')
	    {
		    $result= $this->Apps_model->UpdateResponsibilityDefinition($id);
		    if($result['return_status']==0)
		    {
			$this->session->set_flashdata('status','A Record Updated Successfully');
			redirect(base_url()."Apps/ResponsibilityDefinition_View");
		    }
		    else
		    {
			$data['error_message']=$result['error_message'];
		    }
	    
	    }
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/ResponsibilityDefinition_Edit',$res);
	}
	else{
	    redirect(base_url('Apps'));
	}
	
		
	
	
    
    }
    
    function ResponsibilityDefinition_Delete($id)
    {
	    $this->Apps_model->DeleteResponsibilityDefinition($id);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Record Deleted Successfully');
		redirect(base_url()."Apps/ResponsibilityDefinition_View");
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
    }
    
    function ResponsibilityDefinitionLines_Delete($id1,$res_id)
    {
	
	//echo $this->session->userdata('USER_ID');
      
	$result = $this->Apps_model->DeleteRepsLine($res_id,$id1);
	if($result['return_status']==0)
	{
	    $this->session->set_flashdata('status','A Responsibility Line Deleted Successfully');
	    redirect(base_url()."Apps/ResponsibilityDefinition_Edit/".$res_id);
	}
	else
	{
	    $data['error_message']=$result['error_message'];
	}
    }
	
	
	//Responsibility Definition End...........
	
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  RESPONSIBILITY DEFINITION  END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 

    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  MENU DEFINITION  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
    
    // Menu Defination Start------>
    //AUTOR - Rafeeq
    //Functionality By: Gobi. C
    //CREATED DATE-04-03-2015
    //MODIFIED DATE-18-03-2015
    function MenuDefinition_View(){
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/MenuDefinition_View');
	}
	else{
	     redirect(base_url('Apps'));
	}
    }
    function Get_menu_code()
    {
	$data =$this->input->post('menu_module');
	$sql="SELECT MAX(MENU_CODE) FROM APPS_MENU where MENU_MODULE='$data'";
	$menu_code=$this->db->query($sql)->result_array();
	$menu_code_1 = $menu_code[0]['MAX(MENU_CODE)'];
	echo '{"menu_code":"'.$menu_code_1.'"}';
    }
    
    function Get_Parant_Menu()
    {
	$data1 =$this->input->post('menu_module');
	$menu_code=explode("-",$data1);
	
	$sql1="SELECT * FROM APPS_MENU where MENU_MODULE='$menu_code[0]' ";
	$data=$this->db->query($sql1, $return_object = TRUE)->result();
	?>
	<option selected="" disabled="">Select</option>
	<?php
	foreach($data as $key =>$value)
	{ ?>
	    <option value="<?php echo $data[$key]->MENU_CODE ;?>" > <?php echo $data[$key]->MENU_DESC?> </option>
	<?php }
	
    }
    
    function MenuDefinition_Add()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if ($this->input->post('Save')=='Save')
	    {
		$result= $this->Apps_model->AddMenu();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A New Record Addes Successfully');
		    redirect(base_url()."Apps/MenuDefinition_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
	       
	    }
	    $data['menu'] = $this->Apps_model->get_menu_module();
	    //$data['parent'] = $this->Apps_model->get_parent_menu();
	    $data['type'] = $this->Apps_model->get_type_menu();
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/MenuDefinition_Add',$data);
	}
	else{
	    redirect(base_url('Apps'));
	}
    }
    
   
    
    function MenuDefinition_Edit($menu_code)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if($this->input->post('Update')=='Update')
	    {
		$result= $this->Apps_model->UpdateMenu($menu_code);
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A Record Updated Successfully');
		    redirect(base_url()."Apps/MenuDefinition_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
		
	    }
	    $data['menu_get'] = $this->Apps_model->get_menu_module();
	    //$data['parent'] = $this->Apps_model->get_parent_menu();
	    $data['type'] = $this->Apps_model->get_type_menu();
	    $data['menu'] = $this->Apps_model->EditMenu($menu_code);
	    
	    $data['parent'] = $this->Apps_model->getParentcode($menu_code);
	    //echo "<pre>";
	    //print_r($data['menu']);
	    //echo "</pre>";
	    //exit();
	    
	    $this -> load -> view('header');
	    $this -> load -> view('Apps/MenuDefinition_Edit',$data);
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }
    
    //function UpdateMenuDefinition($menu_code){
    //
    //}
    
    function MenuDefinition_Delete($menu_code)
    {
	
	$result= $this->Apps_model->DeleteMenu($menu_code);
	if($result['return_status']==0)
	{
	    $this->session->set_flashdata('status','A Record Deleted Successfully');
	    redirect(base_url()."Apps/MenuDefinition_View");
	}
	else
	{
	    $data['error_message']=$result['error_message'];
	}
    }
    //Menu definition ended------->
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  MENU DEFINITION  END%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
    
    
    
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  TRANACTION HEAD MASTER  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
	
    //Author :selva
    //Functionality By: Gobi. C   
    //created Date:16/03/2015
    //Modified Date:

    function TransactionHeadMaster_View()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $this -> load -> view('header');
	    $query=$this->Apps_model->EditGetTable();
	    $data['data1']=$query;
	    $this -> load -> view('Apps/TransactionHeadMaster_View',$data);
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }
    
    function AjaxCheckTxnHeadCode()
    {
	header('Content-Type: application/json');
	$txn_code=$this->input->post('txn_code');
	$sql="SELECT COUNT(TXH_CODE) FROM APPS_TXN_HEAD WHERE TXH_CODE='$txn_code' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(TXH_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }

    function TransactionHeadMaster_Add()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if (isset($_POST['add']))
	    {
		$result=$this->Apps_model->AddTranHead();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A Record Added Successfully');
		    redirect(base_url()."Apps/TransactionHeadMaster_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
		
	    }
	    else
	    {
		$this -> load -> view('header');
		$this->load->view('Apps/TransactionHeadMaster_Add');    
	    }
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }

    function TransactionHeadMaster_Edit($id)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    if (isset($_POST['save']))
	    {
		$result=$this->Apps_model->updateHeadMaster($id);
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A Record Updated Successfully');
		    redirect(base_url()."Apps/TransactionHeadMaster_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
		
	    }
	    else
	    {
		$this->load->view('header');
		$query['row']=$this->Apps_model->EditTrans($id);
		$this -> load -> view('Apps/TransactionHeadMaster_Edit',$query);
	    }
	}
	else
	{
	    redirect(base_url('Apps'));
	}
		

    }
    
    function TransactionHeadMaster_Delete($id){
	    $this->Apps_model->DeleteHeadMasterTable($id);
	    if($result['return_status']==0)
	    {
		$this->session->set_flashdata('status','A Record Deleted Successfully');
		redirect(base_url()."Apps/TransactionHeadMaster_View");
	    }
	    else
	    {
		$data['error_message']=$result['error_message'];
	    }
	    
    }	
	
	
	// Transaction Head Master End
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  TRANACTION HEAD MASTER  END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 
	
	
	
    //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  TRANACTION SETUP MASTER  START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    
    
    //Author :selva
    //Functionality By: Gobi. C
    //created Date:16/03/2015
    //Modified Date:
    //Transaction Set up Master Controllers START
    
    
    function TransactionSetupMaster_View()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $this->load->view('header');
	    $result['data']=$this->Apps_model->GetTransactionSetTable();
	    $this->load->view('Apps/TransactionSetupMaster_View',$result);
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }

    function AjaxCheckTxnCode()
    {
	header('Content-Type: application/json');
	$txn_code=$this->input->post('txh_code');
	$sql="SELECT COUNT(TXN_CODE) FROM APPS_TXN_SETUP WHERE TXN_CODE='$txn_code' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(TXN_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    function AjaxCheckDocCode()
    {
	header('Content-Type: application/json');
	//$count=$this->input->post('txdr_company');
	//for($i=0;$i<$count;$i++)
	//{
	if($this->input->post('txdr_company'))
	{
	    $txn_code=$_POST['txdr_company'][0];
	}
	else
	{
	    $txn_code=$_POST['txdr_company1'][0];
	}
	
	
	$sql="SELECT COUNT(TXDR_COMP_CODE) FROM APPS_TXN_DOC_RANGE WHERE TXDR_COMP_CODE='$txn_code' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(TXDR_COMP_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
	
	
	
	
    }
    
    function AjaxCheckAttachmentCode()
    {
	header('Content-Type: application/json');
	//$count=$this->input->post('txdr_company');
	//for($i=0;$i<$count;$i++)
	//{
	if($this->input->post('txa_company'))
	{
	    $txn_code=$_POST['txa_company'][0];
	}
	else
	{
	    $txn_code=$_POST['txa_company1'][0];
	}
	
	
	
	$sql="SELECT COUNT(TXA_COMP_CODE) FROM APPS_TXN_AUTH WHERE TXA_COMP_CODE='$txn_code' ";
	$query = $this->db->query($sql)->result_array();
	if($query[0]['COUNT(TXA_COMP_CODE)']==0){
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
	
    }
    
    function TransactionSetupMaster_Add()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    
	    if (isset($_POST['save']))
	    {
		$this->Apps_model->AddTransMaster();
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A Record Added Successfully');
		    redirect(base_url()."Apps/TransactionSetupMaster_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
		
	    }
	    else
	    {
		$data['thm']=$this->Apps_model->getTransHeadMaster();
		$data['avsl']=$this->Apps_model->GetAppsValueSet();
		$data['txnpad']=$this->Apps_model->GetGenPad();
		$data['txnmax']=$this->Apps_model->GetFlowSeq();
		
		//echo "<pre>";
		//print_r($data['avsl']);
		//print_r($data['txnmax']);
		//echo "</pre>";
		//exit();
		
		$this -> load -> view('header');
		$this->load->view('Apps/TransactionSetupMaster_Add',$data);
	    }
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }
    function TransactionSetupMaster_Edit($id)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data!="")
	{
	    $this -> load -> view('header');
	    $data['thm']=$this->Apps_model->getTransHeadMaster();
	    $data['avsl']=$this->Apps_model->GetAppsValueSet();
	    $data['txnpad']=$this->Apps_model->GetGenPad();
	    $data['txnmax']=$this->Apps_model->GetFlowSeq();
	    $data['first']= $this->Apps_model->EditFirstSetupMaster($id);
	    $data['second']= $this->Apps_model->EditSecondSetupMaster($id);
	    $data['third']= $this->Apps_model->EditThirdSetupMaster($id);
	    
	    //echo "<pre>";
	    //print_r( $data['second']);
	    //echo "</pre>";
	    //exit();
	    $this->load->view('Apps/TransactionSetupMaster_Edit',$data);
	
	    if (isset($_POST['update']))
	    {
		$this->Apps_model->updateSetup($id);
		//$this->Apps_model->doc_range($id);
		if($result['return_status']==0)
		{
		    $this->session->set_flashdata('status','A Record Deleted Successfully');
		    redirect(base_url()."Apps/TransactionHeadMaster_View");
		}
		else
		{
		    $data['error_message']=$result['error_message'];
		}
		//$this->Apps_model->updateAuth($id);
	    
	    }
	}
	else
	{
	    redirect(base_url('Apps'));
	}
    }
    
    function TransactionSet_Delete($id)
    {
	
	$this->Apps_model->DeleteTransactionSet($id);
	
	
	//$this->Apps_model->Delete_txn_doc($id);
	//$this->Apps_model->Delete_txn_auth($id);
	//$this->Apps_model->Delete_txn_SETUP($id);
	redirect('Apps/TransactionSetupMaster_View');
    }
    
    function TranscationSetupDoc_Delete($id1,$id2,$id3,$id4)
    {
	$this->Apps_model->DeleteTranscationSetupDoc($id1,$id2,$id3,$id4);
	redirect('Apps/ViewTransactionSetupMaster');
	
    }
    
    function TranscationSetupAuth_Delete($id1,$id2)
    {
	$this->Apps_model->DeleteTranscationSetupAuth($id1,$id2);
	redirect('Apps/ViewTransactionSetupMaster');
	
    }
	
     //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  TRANACTION SETUP MASTER  END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	
}