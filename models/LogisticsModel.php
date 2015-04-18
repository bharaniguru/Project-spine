<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class LogisticsModel extends CI_Model
    {
	
        //1.Team Master Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_TeamMaster()
	{
	    $sql="SELECT * FROM  LOGI_M_TEAM_EMP";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
        public function TeamMaster_Add()
	{
	    $url=$config['upload_path'] ='upload/Logistics/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('image');
	    $data =  $this->upload->data();
	    $path=base_url().$url.$data['file_name'];
	    
	    $params = array
	    (
		array('name'=>':P_LGE_COMP_CODE',   'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CODE',        'value'=>$this->input->post('LGE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_NAME',        'value'=>$this->input->post('LGE_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CELL_PHONE',  'value'=>$this->input->post('LGE_CELL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_LGE_DESIG',       'value'=>$this->input->post('LGE_DESIG'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_NATIONALITY', 'value'=>$this->input->post('LGE_NATIONALITY'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_DOB',         'value'=>$this->input->post('LGE_DOB'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_IMAGE_FILE',  'value'=>$data['file_name'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_TEAM_CODE',   'value'=>$this->input->post('LGE_TEAM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CITY_CODE',   'value'=>$this->input->post('LGE_CITY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_FROM_DT',     'value'=>$this->input->post('LGE_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_UPTO_DT',     'value'=>$this->input->post('LGE_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_ACTIVE_YN',   'value'=>$this->input->post('TEAM_ACTIVE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',       'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID',         'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_M_TEAM_EMP', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	
	function TeamValidation_Ajax($lgecode)
	{
	    $sql="SELECT count(LGE_CODE) FROM LOGI_M_TEAM_EMP where LGE_CODE='$lgecode'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_Designation()
	{
	   $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'LOGI_DESIG'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_Nationality()
	{
	   $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'APP_NATIONAL' ORDER BY VSL_DESC ASC";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_TeamCode()
	{
	   $sql="SELECT * FROM  LOGI_M_TEAM where LT_ACTIVE_YN='Y'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_City()
	{
	   $sql="SELECT * FROM  APPS_CITY where CT_ACTIVE_YN='Y' ORDER BY CT_DESC ASC";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function TeamMaster_Edit($id)
	{
	    $sql="SELECT * FROM  LOGI_M_TEAM_EMP where LGE_CODE='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function TeamMaster_Update()
	{
	    if($_FILES["image"]["name"]!="")
	    {
		$url=$config['upload_path'] ='upload/Logistics/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$data =  $this->upload->data();
		$path=base_url().$url.$data['file_name'];
	    }
	    else
	    {
		$data['file_name']=$this->input->post('oldfile');
	    }
	    
	    $params = array
	    (
		array('name'=>':P_LGE_COMP_CODE',   'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CODE',        'value'=>$this->input->post('LGE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_NAME',        'value'=>$this->input->post('LGE_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CELL_PHONE',  'value'=>$this->input->post('LGE_CELL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_LGE_DESIG',       'value'=>$this->input->post('LGE_DESIG'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_NATIONALITY', 'value'=>$this->input->post('LGE_NATIONALITY'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_DOB',         'value'=>$this->input->post('LGE_DOB'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_IMAGE_FILE',  'value'=>$data['file_name'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_TEAM_CODE',   'value'=>$this->input->post('LGE_TEAM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CITY_CODE',   'value'=>$this->input->post('LGE_CITY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_FROM_DT',     'value'=>$this->input->post('LGE_FROM_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_UPTO_DT',     'value'=>$this->input->post('LGE_UPTO_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_ACTIVE_YN',   'value'=>$this->input->post('TEAM_ACTIVE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',       'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID',         'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','UPDATE_LOGI_M_TEAM_EMP', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	
	function TeamMaster_Delete($id,$teamcode)
	{
	    $params = array
	    (
		array('name'=>':P_LGE_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_CODE', 	  'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LGE_TEAM_CODE', 'value'=>$teamcode, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',     'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID',       'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM',       'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG',       'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','DELETE_LOGI_M_TEAM_EMP', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message);
	}
	//1.Team Master Model End
	
	
	//2.Vehicle Master Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_VehicleMaster()
	{
	    $sql="SELECT * FROM  LOGI_M_VEHICLE";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	//private function set_upload_options() //  upload an image options
	//{   	
	//    $config = array();
	//    $config['upload_path'] = 'upload/';
	//    $config['allowed_types'] = 'gif|jpg|png';
	//    $config['max_size']      = '0';
	//    $config['overwrite']     = FALSE;		
	//    return $config;
	//}
	public function VehicleMaster_Add()
	{
	   $params = array
	    (
		array('name'=>':P_VEH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CODE',         		'value'=>$this->input->post('VEH_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_DESC',         		'value'=>$this->input->post('VEH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_MAKE',         		'value'=>$this->input->post('VEH_MAKE'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_VEH_YEAR',         		'value'=>$this->input->post('VEH_YEAR'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TYPE',         		'value'=>$this->input->post('VEH_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_COLOR',        		'value'=>$this->input->post('VEH_COLOR'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_FUEL_TYPE',    		'value'=>$this->input->post('VEH_FUEL_TYPE'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_NO_OF_SEATER',		'value'=>$this->input->post('VEH_NO_OF_SEATER'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ENGINE_NO',    		'value'=>$this->input->post('VEH_ENGINE_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CHASSIS_NO',   		'value'=>$this->input->post('VEH_CHASSIS_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_METER_READING',		'value'=>$this->input->post('VEH_METER_READING'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TRANSMISSION', 		'value'=>$this->input->post('VEH_TRANSMISSION'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_LOAD_CAPASITY',		'value'=>$this->input->post('VEH_LOAD_CAPASITY'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_STATUS',       		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_OLD_NEW',      		'value'=>'N', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_PURCHASE_DT',  		'value'=>$this->input->post('VEH_PURCHASE_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_TYPE', 		'value'=>$this->input->post('VEH_INSURANCE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_COMP_NAME', 	'value'=>$this->input->post('VEH_INSURANCE_COMP_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_POLICY_NO', 	'value'=>$this->input->post('VEH_INSURANCE_POLICY_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_POLICY_DT', 	'value'=>$this->input->post('VEH_INSURANCE_POLICY_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_POLICY_EX_DT',  'value'=>$this->input->post('VEH_INSURANCE_POLICY_EX_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_REGISTRATION_NO', 	'value'=>$this->input->post('VEH_REGESTRATION_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_REGISTRATION_DT', 	'value'=>$this->input->post('VEH_REGESTRATION_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_REGISTRATION_EX_DT', 	'value'=>$this->input->post('VEH_REGISTRATION_EX_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TOLL_CARD_TYPE',  	'value'=>$this->input->post('VEH_TOLL_CARD_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TOLL_CARD_NO', 		'value'=>$this->input->post('VEH_TOLL_CARD_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TOLL_CARD_EX_DT', 	'value'=>$this->input->post('VEH_TOLL_CARD_EX_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_USE_TYPE', 		'value'=>$this->input->post('VEH_USE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_USER_CODE', 		'value'=>$this->input->post('VEH_CODE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_MAINTENENCE_BY', 		'value'=>$this->input->post('VEH_MAINTAINENCE_BY'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ADVERTISEMENT', 		'value'=>$this->input->post('VEH_ADVERTISEMENT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ADVERTISEMENT_DT', 	'value'=>$this->input->post('VEH_ADVERTISEMENT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CITY_CODE', 		'value'=>$this->input->post('VEH_CITY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ACTIVE_YN', 		'value'=>$this->input->post('VEH_ACTIVE_YN'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_LSH_SYS_ID', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_LSH_TXN_DT', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_M_VEHICLE', $params);
	    $result = array("return_status"=>$return_status,"error_message"=>$error_message);
	    
	    $count=$this->input->post('row_contains');
	    for($i=0;$i<$count;$i++)
	    {
	   	$url=$config['upload_path'] ='upload/Logistics/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('imgattachment');
		$data = $this->upload->data();
		$size=$data['file_size'];
		$path=base_url().$url.$data['file_name'];
//		
//	    $this->load->library('upload');
//            $files = $_FILES;
//            $cpt = count($_FILES['userfile']['name']);
//            for($i=0; $i<$cpt-1; $i++)
//                {
//		    $_FILES['userfile']['name']= $files['userfile']['name'][$i];
//		    $_FILES['userfile']['type']= $files['userfile']['type'][$i];
//		    $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
//		    $_FILES['userfile']['error']= $files['userfile']['error'][$i];
//		    $_FILES['userfile']['size']= $files['userfile']['size'][$i];    
//                            
//                    $this->upload->initialize($this->set_upload_options());
//		    $this->upload->do_upload();
//		    $fileName = $_FILES['userfile']['name'];
//		    $tmpName  = $_FILES['userfile']['tmp_name'];
//		    $fileSize = $_FILES['userfile']['size'];
//		    $fileType = $_FILES['userfile']['type'];
//		    $path=base_url().'upload/'.$_FILES['userfile']['name'];
		    
//		    $params2 = array
//			(
//                                array('name'=>':P_BD_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_BD_BANK_CODE',        'value'=>$this->input->post('BANK_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_BD_SR_NO',         	'value'=>$_POST['BD_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//                                
//                                array('name'=>':P_BD_FILE_NAME',        'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_BD_FILE_SIZE',        'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_BD_DESC',             'value'=>$_POST['BD_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_BD_FROM_DT',         	'value'=>$_POST['BD_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_BD_UPTO_DT',          'value'=>$_POST['BD_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
//                               
//                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
//                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
//                             );
//                             $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_BANK_DOCS', $params2);
//                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );
//                         
//                        
//                        }
		
		$params1 = array
		(
		    array('name'=>':P_LVD_COMP_CODE',   'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LVD_CODE', 	'value'=>$_POST['VEHI_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LVD_SR_NO', 	'value'=>$_POST['VEH_SR_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LVD_FILE_NAME',   'value'=>$data['file_name'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LVD_FILE_SIZE',   'value'=>$size, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LVD_DESC', 	'value'=>$_POST['VEHI_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LANG_CODE',       'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_USER_ID',         'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_ERR_NUM',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_ERR_MSG',         'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
		);
		
		$this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_M_VEHICLE_DOCS', $params1);
		return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	    }
	}
	
	function VehicleValidation_Ajax($vehicode)
	{
	    $sql="SELECT count(VEH_CODE) FROM LOGI_M_VEHICLE where VEH_CODE='$vehicode'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleCity()
	{
	   $sql="SELECT * FROM  APPS_CITY where CT_ACTIVE_YN='Y' ORDER BY CT_DESC ASC";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleType()
	{
	   $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'LOGI_VEHTYPE'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleFuel()
	{
	   $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'LOGI_VEHFUEL'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleInsurance()
	{
	   $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'LOGI_VEHINSU'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleUserType()
	{
	   $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'LOGI_VEH_USE'";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleUser()
	{
	   $sql="SELECT * FROM LOGI_M_TEAM_EMP ";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function VehicleMaster_Edit($id)
	{
	    $sql="SELECT * FROM  LOGI_M_VEHICLE where VEH_CODE='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function VehicleMaster_Update()
	{
	    $params = array
	    (
		array('name'=>':P_VEH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CODE',         		'value'=>$this->input->post('VEH_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_DESC',         		'value'=>$this->input->post('VEH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_MAKE',         		'value'=>$this->input->post('VEH_MAKE'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_VEH_YEAR',         		'value'=>$this->input->post('VEH_YEAR'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TYPE',         		'value'=>$this->input->post('VEH_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_COLOR',        		'value'=>$this->input->post('VEH_COLOR'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_FUEL_TYPE',    		'value'=>$this->input->post('VEH_FUEL_TYPE'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_NO_OF_SEATER',		'value'=>$this->input->post('VEH_NO_OF_SEATER'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ENGINE_NO',    		'value'=>$this->input->post('VEH_ENGINE_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CHASSIS_NO',   		'value'=>$this->input->post('VEH_CHASSIS_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_METER_READING',		'value'=>$this->input->post('VEH_METER_READING'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TRANSMISSION', 		'value'=>$this->input->post('VEH_TRANSMISSION'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_LOAD_CAPASITY',		'value'=>$this->input->post('VEH_LOAD_CAPASITY'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_STATUS',       		'value'=>'NULL', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_OLD_NEW',      		'value'=>'N', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_PURCHASE_DT',  		'value'=>$this->input->post('VEH_PURCHASE_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_TYPE', 		'value'=>$this->input->post('VEH_INSURANCE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_COMP_NAME', 	'value'=>$this->input->post('VEH_INSURANCE_COMP_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_POLICY_NO', 	'value'=>$this->input->post('VEH_INSURANCE_POLICY_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_POLICY_DT', 	'value'=>$this->input->post('VEH_INSURANCE_POLICY_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_INSURANCE_POLICY_EX_DT',  'value'=>$this->input->post('VEH_INSURANCE_POLICY_EX_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_REGISTRATION_NO', 	'value'=>$this->input->post('VEH_REGISTRATION_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_REGISTRATION_DT', 	'value'=>$this->input->post('VEH_REGISTRATION_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_REGISTRATION_EX_DT', 	'value'=>$this->input->post('VEH_REGISTRATION_EX_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TOLL_CARD_TYPE',  	'value'=>$this->input->post('VEH_TOLL_CARD_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TOLL_CARD_NO', 		'value'=>$this->input->post('VEH_TOLL_CARD_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_TOLL_CARD_EX_DT', 	'value'=>$this->input->post('VEH_TOLL_CARD_EX_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_USE_TYPE', 		'value'=>$this->input->post('VEH_USE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_USER_CODE', 		'value'=>$this->input->post('VEH_CODE_TYPE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_MAINTENENCE_BY', 		'value'=>$this->input->post('VEH_MAINTENENCE_BY'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ADVERTISEMENT', 		'value'=>$this->input->post('VEH_ADVERTISEMENT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ADVERTISEMENT_DT', 	'value'=>$this->input->post('VEH_ADVERTISEMENT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CITY_CODE', 		'value'=>$this->input->post('VEH_CITY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_ACTIVE_YN', 		'value'=>$this->input->post('VEH_ACTIVE_YN'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_LSH_SYS_ID', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_LSH_TXN_DT', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','UPDATE_LOGI_M_VEHICLE', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	
	function VehicleMaster_Delete($id)
	{
	    $params = array
	    (
		array('name'=>':P_VEH_COMP_CODE',   'value'=> $this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_VEH_CODE',        'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',       'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID',         'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG',         'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','DELETE_LOGI_M_VEHICLE', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	//2.Vehicle Master Model End
	
	
	//3.JobRequestTransaction Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_JobRequestTransaction()
	{
	    $sql="SELECT * FROM  LOGI_T_JOB_REQ_HEAD";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleCountry()
	{
	    $sql="SELECT * FROM  APPS_COUNTRY where CN_ACTIVE_YN='Y' ORDER BY CN_DESC ASC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleState()
	{
	    $sql="SELECT * FROM  APPS_STATE where ST_ACTIVE_YN='Y' ORDER BY ST_DESC ASC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleCity1()
	{
	   $sql="SELECT * FROM  APPS_CITY ORDER BY CT_DESC ASC";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_JobCode()
	{
	    $sql="SELECT * FROM  APPS_VALUE_SET_LINES where VSL_VSH_CODE = 'LOGI_JOBCODE'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_JobLocCode()
	{
	    $companycode=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT SR_LOCN_CODE FROM SALE_M_SALES_REP, APPS_USER WHERE SR_CODE = 'RS103' AND USER_COMP_CODE = SR_COMP_CODE AND SR_COMP_CODE = '$companycode' AND USER_ID = 'Login id' AND USER_COMP_CODE = '$companycode'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Get_JobReeqTxn($id)
	{
	    $sql="SELECT * FROM  LOGI_T_JOB_REQ_HEAD where JRH_SYS_ID = '$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function JobRequestTransaction_Add()
	{
	    $sql="select  LOGI_T_SEQ.nextval FROM DUAL";
	    $sys_id= $this->db->query($sql, $return_object = TRUE)->result_array();
	    
	    $date = date('d-M-y');
	    $params = array
	    (
		array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_CODE', 'value'=>'MIS', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
	    array("return_status"=>$return_status);
	    
	    $params = array
	    (
		array('name'=>':P_JRH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_TXN_CODE',         	'value'=>'JR', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_TXN_DT',         		'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_DOC_REF',         	'value'=>'225', 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_JRH_LOCN_CODE',         	'value'=>'BAH', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_JOB_CODE',         	'value'=>$this->input->post('JRH_JOB_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_APPOINT_DT',        	'value'=>$this->input->post('JRH_APPOINT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REQUEST_BY',    		'value'=>$this->input->post('JRH_REQUEST_BY'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_DESC',			'value'=>"SGFSDH",'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_STATUS',    		'value'=>$this->input->post('JRH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_SYS_ID',   		'value'=>'124', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_TXN_CODE',		'value'=>$this->input->post('JRH_REF_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_TXN_NO', 		'value'=>$this->input->post('JRH_REF_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_TXN_DT',		'value'=>$this->input->post('JRH_REF_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CONTACT_NO',       	'value'=>$this->input->post('JRH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CONTACT_PERSON',      	'value'=>$this->input->post('JRH_CONTACT_PERSON'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CUST_ID',         	'value'=>$this->input->post('JRH_CUST_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CUST_AC_CODE',         	'value'=>$this->input->post('JRH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CUST_AC_DESC',         	'value'=>$this->input->post('JRH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_JRH_ADD1',         		'value'=>$this->input->post('JRH_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ADD2',         		'value'=>$this->input->post('JRH_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ADD3',        		'value'=>$this->input->post('JRH_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ADD4',    		'value'=>$this->input->post('JRH_ADD4'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CN_CODE',			'value'=>$this->input->post('JRH_CN_CODE'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ST_CODE',    		'value'=>$this->input->post('JRH_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CT_CODE',   		'value'=>$this->input->post('JRH_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CT_AR_CODE',		'value'=>'55', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_POSTAL', 			'value'=>$this->input->post('JRH_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_MOBILE',  		'value'=>$this->input->post('JRH_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_PHONE', 			'value'=>$this->input->post('JRH_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FAX', 			'value'=>$this->input->post('JRH_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_EMAIL', 			'value'=>$this->input->post('JRH_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_01', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_02', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_03', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_04', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_05', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_06', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_07', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_08', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_09', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_10',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_11',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_12',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_13',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_JRH_FLEX_14',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_15',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_16',        		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_17',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_18',			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_19',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_20',   		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_LOGI_JOB_STATUS',		'value'=>"SGGF", 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_FROM', 		'value'=>$this->input->post('JRH_REF_FROM'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SYS_ID',			'value'=>"", 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_NO', 			'value'=>"", 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_T_JOB_REQ_HEAD', $params);
	    $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	
	public function JobRequestTransaction_Edit($id)
	{
	    $sql="SELECT * FROM  LOGI_T_JOB_REQ_HEAD where VEH_CODE='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function JobRequestTransaction_Update()
	{       
	    $date = date('d-M-Y');
	    $params = array
	    (
		array('name'=>':P_JRH_SYS_ID',			'value'=>$this->input->post('JRH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_TXN_CODE',         	'value'=>$this->input->post('JRH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_TXN_NO',			'value'=>$this->input->post('JRH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_TXN_DT',         		'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_DOC_REF',         	'value'=>$this->input->post('JRH_DOC_REF'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_JRH_LOCN_CODE',         	'value'=>$this->input->post('JRH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_JOB_CODE',         	'value'=>$this->input->post('JRH_JOB_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_APPOINT_DT',        	'value'=>$this->input->post('JRH_APPOINT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REQUEST_BY',    		'value'=>$this->input->post('JRH_REQUEST_BY'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_DESC',			'value'=>$this->input->post('JRH_DESC'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_STATUS',    		'value'=>$this->input->post('JRH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_SYS_ID',   		'value'=>$this->input->post('RH_REF_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_TXN_CODE',		'value'=>$this->input->post('JRH_REF_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_TXN_NO', 		'value'=>$this->input->post('JRH_REF_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_TXN_DT',		'value'=>$this->input->post('JRH_REF_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CONTACT_NO',       	'value'=>$this->input->post('JRH_CONTACT_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CONTACT_PERSON',      	'value'=>$this->input->post('JRH_CONTACT_PERSON'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CUST_ID',         	'value'=>$this->input->post('JRH_CUST_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CUST_AC_CODE',         	'value'=>$this->input->post('JRH_CUST_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CUST_AC_DESC',         	'value'=>$this->input->post('JRH_CUST_AC_DESC'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_JRH_ADD1',         		'value'=>$this->input->post('JRH_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ADD2',         		'value'=>$this->input->post('JRH_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ADD3',        		'value'=>$this->input->post('JRH_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ADD4',    		'value'=>$this->input->post('JRH_ADD4'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CN_CODE',			'value'=>$this->input->post('JRH_CN_CODE'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_ST_CODE',    		'value'=>$this->input->post('JRH_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CT_CODE',   		'value'=>$this->input->post('JRH_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_CT_AR_CODE',		'value'=>$this->input->post('JRH_CT_AR_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_POSTAL', 			'value'=>$this->input->post('JRH_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_MOBILE',  		'value'=>$this->input->post('JRH_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_PHONE', 			'value'=>$this->input->post('JRH_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FAX', 			'value'=>$this->input->post('JRH_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_EMAIL', 			'value'=>$this->input->post('JRH_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_01', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_02', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_03', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_04', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_05', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_06', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_07', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_08', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_09', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_10',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_11',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_12',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_13',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_JRH_FLEX_14',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_15',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_16',        		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_17',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_18',			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_19',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_FLEX_20',   		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_LOGI_JOB_STATUS',		'value'=>$this->input->post('JRH_LOGI_JOB_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_JRH_REF_FROM', 		'value'=>$this->input->post('JRH_REF_FROM'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','UPDATE_LOGI_T_JOB_REQ_HEAD', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	
	function JobRequestTransaction_Delete($id)
	{
	    $params = array
	    (
		array('name'=>':P_JRH_SYS_ID',      'value'=>$id , 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',       'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID',         'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG',         'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','DELETE_LOGI_T_JOB_REQ_HEAD', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	//3.JobRequestTransaction Model End
	
	
	//4.Logistics Dashboard Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_LogisticsDashboard()
	{
	    $sql="SELECT * FROM  LOGI_V_PENDING_JOBS";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	//4.Logistics Dashboard Model End
	
	
	//5.Schedule Transaction Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_ScheduleTransactionHead()
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_HEAD";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function ScheduleTransaction_Add()
	{
	    $params = array
	    (
		array('name'=>':P_LSH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_TXN_CODE',         	'value'=>'SCH', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_TXN_DT',         		'value'=>$this->input->post('LSH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_DOC_REF',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_LSH_VEHICLE_CODE',         	'value'=>$this->input->post('LSH_VEHICLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_TEAM_CODE',         	'value'=>$this->input->post('LSH_TEAM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_APPOINT_DT',        	'value'=>$this->input->post('LSH_APPOINT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_DESC',    		'value'=>$this->input->post('LSH_DESC'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_STATUS',			'value'=>$this->input->post('LSH_STATUS'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_01',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_02',   		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_03',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_04', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_05',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_06',       		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_07',      		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_08',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_09',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_10',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_LSH_FLEX_11',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_12',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_13',        		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_14',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_15',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_16',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_17',   		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_18',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_19', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_20',  		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_CITY_CODE', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_TOTAL', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_COMPLETED', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_RESCHEDULED', 	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_CLOSED',  		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_PENDING', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SYS_ID',                      'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_NO',                      'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_T_SCHEDULE_HEAD', $params);
	    return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status,"error_message"=>$error_message);
	}
	
	public function Fetch_ScheduleTransactionLines()
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_LINES";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_VehicleCode()
	{
	   $sql="SELECT * FROM  LOGI_M_VEHICLE";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_TeamCode1()
	{
	   $sql="SELECT * FROM  LOGI_M_TEAM";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function ScheduleTransactionHead_Edit($id)
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_HEAD where LSH_SYS_ID='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function ScheduleTransactionLines_Edit($id)
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_LINES where LSL_LSH_SYS_ID='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function ScheduleTransaction_Update()
	{
	    $params = array
	    (
		array('name'=>':P_LSH_SYS_ID',    		'value'=>$this->input->post('LSH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_COMP_CODE',         	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_TXN_CODE',         	'value'=>'SCH', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_TXN_NO',         		'value'=>$this->input->post('LSH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),   
		array('name'=>':P_LSH_TXN_DT',         		'value'=>$this->input->post('LSH_TXN_DT'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_DOC_REF',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_VEHICLE_CODE',        	'value'=>$this->input->post('LSH_VEHICLE_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_TEAM_CODE',    		'value'=>$this->input->post('LSH_TEAM_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_APPOINT_DT',		'value'=>$this->input->post('LSH_APPOINT_DT'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_DESC',    		'value'=>$this->input->post('LSH_DESC'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_STATUS',   		'value'=>$this->input->post('LSH_STATUS'),'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_01',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_02', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_03',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_04', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_05',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_06',       		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_07',      		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_08',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_09',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_10',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_LSH_FLEX_11',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_12',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_13',        		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_14',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_15',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_16',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_17',   		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_18',			'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_19', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_FLEX_20',  		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_CITY_CODE', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_TOTAL', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_COMPLETED', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_RESCHEDULED', 	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_CLOSED',  		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LSH_JOB_PENDING', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','UPDATE_LOGI_T_SCHEDULE_HEAD', $params);
	    return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status,"error_message"=>$error_message);
	}
	
	function ScheduleTransaction_Delete($id)
	{
	    $params = array
	    (
		array('name'=>':P_LSH_SYS_ID',      'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',       'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID',         'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM',         'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG',         'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','DELETE_LOGI_T_SCHEDULE_HEAD', $params);
	    return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	}
	//5.Schedule Transaction Model End
	
	
	//6.Schedule Tracking Dashboard Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_ScheduleTrackingDashboard()
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_LINES";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	//6.Schedule Tracking Dashboard Model End
	
	//7.MeasurementTransaction Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_ScheduleTrackingDashboard1($id)
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_LINES WHERE LSL_SYS_ID ='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_SysId()
	{
	    $sql="SELECT * FROM  LOGI_V_JOB_STATUS";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_RefSysId()
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_LINES";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_TxnCode()
	{
	    $sql="SELECT * FROM  LOGI_T_SCHEDULE_HEAD";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_AppsValueSetLines()
	{
	    $sql="SELECT * FROM  APPS_VALUE_SET_LINES WHERE  VSL_VSH_CODE = 'LOGI_MM_UNIT'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_InvtMItemFamily()
	{
	    $sql="SELECT * FROM  INVT_M_ITEM_FAMILY";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_InvtMItemColor()
	{
	    $sql="SELECT * FROM  INVT_M_ITEM_COLOR";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_AppsValueSetLinesMountT()
	{
	    $sql="SELECT * FROM  APPS_VALUE_SET_LINES WHERE  VSL_VSH_CODE ='LOGI_MOUNT_T'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function Fetch_AppsValueSetLinesMountO()
	{
	    $sql="SELECT * FROM  APPS_VALUE_SET_LINES WHERE  VSL_VSH_CODE ='LOGI_MOUNT_O'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	private function set_upload_options()
        {   
	    //upload an image options
            $config = array();
            $config['upload_path'] = 'upload/Logistics/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;
	    return $config;
        }
	
	public function MeasurementTransactionLines_Add($id)
	{
	    if($_POST['head_sys_id']=="")
	    {
		$params = array
		(
		    array('name'=>':P_MH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_TXN_CODE',         	'value'=>$_POST['LSH_TXN_CODE'],'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_TXN_DT',         		'value'=>$_POST['LSH_TXN_DT'],'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_DOC_REF',         		'value'=>$_POST['LSH_DOC_REF'],'type'=>SQLT_CHR, 'length'=>300),     
		    array('name'=>':P_MH_LOCN_CODE',         	'value'=>$_POST['LSL_LOCN_CODE'],'type'=>SQLT_CHR, 'length'=>300),     
		    array('name'=>':P_MH_SR_CODE',         		'value'=>$_POST['LSL_SR_CODE'],'type'=>SQLT_CHR, 'length'=>300),     
		    array('name'=>':P_MH_REF_SYS_ID',        	'value'=>$_POST['LSL_REF_SYS_ID'],'type'=>SQLT_CHR, 'length'=>300),     
		    array('name'=>':P_MH_REF_TXN_CODE',    		'value'=>$_POST['LSL_REF_TXN_CODE'],'type'=>SQLT_CHR, 'length'=>300),     
		    array('name'=>':P_MH_REF_TXN_NO',		'value'=>$_POST['LSL_REF_TXN_NO'],'type'=>SQLT_CHR, 'length'=>300),     
		    array('name'=>':P_MH_REF_TXN_DT',    		'value'=>$_POST['LSL_REF_TXN_DT'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_SALE_REF_SYS_ID',   	'value'=>$_POST['LSL_REF_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_SALE_REF_TXN_CODE',	'value'=>$_POST['LSL_REF_TXN_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_SALE_REF_TXN_NO', 		'value'=>$_POST['LSL_REF_TXN_NO'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_SALE_REF_TXN_DT',		'value'=>$_POST['LSL_REF_TXN_DT'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CONTACT_NO',       	'value'=>$_POST['LSL_CONTACT_NO'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CONTACT_PERSON',      	'value'=>$_POST['MH_CONTACT_PERSON'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CUST_TYPE',         	'value'=>'N','type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CUST_AC_CODE',         	'value'=>$_POST['LSL_CUST_AC_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CUST_AC_DESC',         	'value'=>$_POST['MH_CUST_AC_DESC'], 'type'=>SQLT_CHR, 'length'=>300),      
		    array('name'=>':P_MH_ADD1',         		'value'=>$_POST['MH_ADD1'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_ADD2',         		'value'=>$_POST['LSL_ADD2'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_ADD3',        		'value'=>$_POST['LSL_ADD3'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_ADD4',    			'value'=>$_POST['LSL_ADD4'],'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CN_CODE',			'value'=>$_POST['LSL_CN_CODE'],'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_ST_CODE',    		'value'=>$_POST['LSL_ST_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CT_CODE',   		'value'=>$_POST['MH_CT_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_CT_AR_CODE',		'value'=>$_POST['LSL_CT_AREA_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_POSTAL', 			'value'=>$_POST['LSL_POSTAL'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_MOBILE',  			'value'=>$_POST['LSL_MOBILE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_PHONE', 			'value'=>$_POST['LSL_PHONE'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FAX', 			'value'=>$_POST['LSL_FAX'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_EMAIL', 			'value'=>$_POST['LSL_EMAIL'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_DESC', 			'value'=>$_POST['LSL_DESC'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_STATUS',  			'value'=>$_POST['LSL_JOB_STATUS'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_APPOINT_DT', 		'value'=>$_POST['LSL_APPOINT_DT'], 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_01', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_02', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_03',  		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_04', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_05', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_06', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_07', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_08', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_09', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_10', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_11', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_12', 			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_13',    	    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_14',         		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_15',         		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_16',         		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
		    array('name'=>':P_MH_FLEX_17',         		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_18',         		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_19',        		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MH_FLEX_20',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_SYS_ID',                      'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_TXN_NO',                      'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_ERR_MSG', 			'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
		);
		$this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_T_MEASURE_HEAD', $params);
		$result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status,"error_message"=>$error_message);
	    }
	    else
	    {
		$sys_id=$_POST['head_sys_id'];
	    }
	    
	    $params1 = array
	    (
		array('name'=>':P_ML_MH_SYS_ID',    	'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_ML_COMP_CODE',        'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_LANG_CODE',        'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_TXN_DT',         	'value'=>$_POST['MH_TXN_DT'], 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_ML_LOCN_CODE', 	'value'=>$_POST['LSL_LOCN_CODE'],'type'=>SQLT_CHR, 'length'=>300),     
		array('name'=>':P_ML_LINE',         	'value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_BUILD',        	'value'=>$_POST['ML_BUILD'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLOOR',    	'value'=>$_POST['ML_FLOOR'],'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLAT',		'value'=>$_POST['ML_FLAT'],'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_UNIT',    		'value'=>$_POST['ML_UNIT'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_PRODUCT_CODE',   	'value'=>$_POST['ML_PRODUCT_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_COLOR_CODE',	'value'=>$_POST['ML_COLOR_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_WIDTH', 		'value'=>$_POST['ML_WIDTH'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_HEIGHT',		'value'=>$_POST['ML_HEIGHT'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_QTY',       	'value'=>$_POST['ML_QTY'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_MOUNT_TYPE',      	'value'=>$_POST['ML_MOUNT_TYPE'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_MOUNT_ON',         'value'=>$_POST['ML_MOUNT_ON'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_OPERATE',         	'value'=>$_POST['ML_OPERATE'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_CONTROL',         	'value'=>$_POST['ML_CONTROL'], 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_ML_OPENING',         	'value'=>$_POST['ML_OPENING'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_PELMET',         	'value'=>$_POST['ML_PELMET'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_PROJECTION',       'value'=>$_POST['ML_PROJECTION'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FASCIA',    	'value'=>$_POST['ML_FASICA'],'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_REMARKS',		'value'=>$_POST['ML_REMARKS'],'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_GEO_LATI',    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_GEO_LONGI',   	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_CLOSE_YN',		'value'=>'N', 	 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_CLOSE_DT', 	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_CLOSE_UID',  	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_01', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_02', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_03',  	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_04', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_05', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_06', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_07', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_08', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_09', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_10', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_11', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_12', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_13',    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_14',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_15',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_16',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_ML_FLEX_17',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_18',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_19',        	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_FLEX_20',    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_OP_HEAD_SYS_ID', 	'value'=>$_POST['LSL_REF_SYS_ID'],'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_SC_LINE_SYS_ID', 	'value'=>$_POST['LSL_REF_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_QT_LINE_SYS_ID',	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_SO_LINE_SYS_ID', 	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_WO_LINE_SYS_ID', 	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_PR_LINE_SYS_ID', 	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_DN_LINE_SYS_ID', 	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_IN_LINE_SYS_ID', 	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ML_SR_LINE_SYS_ID',	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LINE_SYS_ID',		'value'=>&$sys_id1, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 		'value'=>&$return_status1, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 		'value'=>&$return_msg1, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_T_MEASURE_LINES', $params1);
	    $this->load->library('upload');
	    $files = $_FILES;
	    $cpt = count($_FILES['userfile']['name']);
	    for($i=0; $i<$cpt-1; $i++)
	    {
		$_FILES['userfile']['name']= $files['userfile']['name'][$i];
		$_FILES['userfile']['type']= $files['userfile']['type'][$i];
		$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
		$_FILES['userfile']['error']= $files['userfile']['error'][$i];
		$_FILES['userfile']['size']= $files['userfile']['size'][$i];
		
		$this->upload->initialize($this->set_upload_options());
		$this->upload->do_upload();
		$fileName = $_FILES['userfile']['name'];
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		
		$path=base_url().'upload/'.$_FILES['userfile']['name'];
		
		$params = array
		(
		    array('name'=>':P_MI_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
		    array('name'=>':P_MI_ML_SYS_ID', 'value'=>$this->security->xss_clean($sys_id1), 'type'=>SQLT_CHR,'length'=>300), 
		    array('name'=>':P_MI_MH_SYS_ID', 'value'=>$this->security->xss_clean($sys_id),'type'=>SQLT_CHR, 'length'=>300),      
		    array('name'=>':P_MI_FILE_NAME', 'value'=>$this->security->xss_clean($_FILES['userfile']['name']),'type'=>SQLT_CHR, 'length'=>300),
		    array('name'=>':P_MI_SIZE', 'value'=>$this->security->xss_clean($_FILES['userfile']['size']),'type'=>SQLT_CHR, 'length'=>300 ),
		    array('name'=>':P_MI_DESC', 'value'=>$this->security->xss_clean($_POST['file_description'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
		    array('name'=>':P_LANG_CODE', 'value'=>'en','type'=>SQLT_CHR,'length'=>300),
		    array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
		    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
		    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300)
		);
		$this->db->stored_procedure('SPINE_LOGI','INSERT_LOGI_T_MEASURE_IMAGES', $params);
		$result = array("return_status"=>$return_status,"error_message"=>$error_message );
	    }
	    return $result1 = array("system_id"=>$sys_id1, "system_head_id"=>$sys_id, "return_status"=>$return_status1,"error_message"=>$error_message1 );
	}
	
	public function MeasurementTransactionHead_Edit($id)
	{
	    $sql="SELECT * FROM  LOGI_T_MEASURE_HEAD where MH_SYS_ID='$id'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function MeasurementTransactionLines_Edit($id)
	{
	     $sql="SELECT * FROM  LOGI_T_MEASURE_LINES where ML_MH_SYS_ID='$id'";
	 
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	public function MeasurementTransactionDocs_Edit($head,$line)
	{
	    $sql="SELECT * FROM  LOGI_T_MEASURE_IMAGES where MI_MH_SYS_ID='$head' AND MI_ML_SYS_ID='$line'";
	    return  $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	//7.MeasurementTransaction Model End
	
	
	//8.Job Status Dashboard Model Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function Fetch_JobStatusDashboard()
	{
	    $sql="SELECT * FROM  LOGI_V_JOB_STATUS";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	//8.Job Status Dashboard Model End
    }
