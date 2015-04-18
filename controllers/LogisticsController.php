<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class LogisticsController extends CI_Controller
    {
	function __construct()
	{
	    parent::__construct();
	    $this->load->model('LogisticsModel');
	    $this->load->model('Apps_model');
	    $this->load->library('session');
	    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	}
   	
	//1.Team Master Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function TeamMaster_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['result'] = $this->LogisticsModel->Fetch_TeamMaster();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/TeamMaster_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function TeamMaster_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['save']))
		{
		    $addresult=$this->LogisticsModel->TeamMaster_Add();
		    if($addresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is inserted successfully');
			redirect('LogisticsController/TeamMaster_View');     
		    }
		    $data['error']=$addresult['error_message'];
		}
		$data['result1']=$this->LogisticsModel->Fetch_Designation();
		$data['result2']=$this->LogisticsModel->Fetch_Nationality();
		$data['result3']=$this->LogisticsModel->Fetch_TeamCode();
		$data['result4']=$this->LogisticsModel->Fetch_City();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/TeamMaster_Add',$data);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function TeamValidation_Ajax()
	{
	    header('Content-Type: application/json');
	    $lgecode=$this->input->post('LGE_CODE');
	    $viewresult=$this->LogisticsModel->TeamValidation_Ajax($lgecode);
	    if($viewresult[0]['COUNT(LGE_CODE)']==0)
	    {
		echo json_encode(array('valid'=>'true'));
	    }
	    else
	    {	
		echo json_encode(array('valid'=>'false'));
	    }
	}
	
	public function TeamMaster_Edit($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['save']))
		{
		    $updateresult=$this->LogisticsModel->TeamMaster_Update();
		    if($updateresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is Updated successfully');
			redirect('LogisticsController/TeamMaster_View');
		    }
		    $editresult['error']=$addresult['error_message'];
		}
		$editresult['result1']=$this->LogisticsModel->Fetch_Designation();
		$editresult['result2']=$this->LogisticsModel->Fetch_Nationality();
		$editresult['result3']=$this->LogisticsModel->Fetch_TeamCode();
		$editresult['result4']=$this->LogisticsModel->Fetch_City();
		
		$editresult['result']=$this->LogisticsModel->TeamMaster_Edit($id);
		$this -> load -> view('header');
		$this -> load -> view('Logistics/TeamMaster_Edit',$editresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function TeamMaster_Delete($id,$teamcode)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$deleteresult=$this->LogisticsModel->TeamMaster_Delete($id,$teamcode);
		if($deleteresult['return_status']==0)
		{
		    $this->session->set_flashdata('status','A record is deleted successfully');
		    redirect('LogisticsController/TeamMaster_View');     
		}
		$this->session->set_flashdata('status','A record is not deleted successfully');
		redirect('LogisticsController/TeamMaster_View');
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	//1.Team Master Controllers End
	
	
	//2.Vehicle Master Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function VehicleMaster_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['result'] = $this->LogisticsModel->Fetch_VehicleMaster();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/VehicleMaster_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function VehicleMaster_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['Save']))
		{
		    $addresult=$this->LogisticsModel->VehicleMaster_Add();
		    if($addresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is inserted successfully');
			redirect('LogisticsController/VehicleMaster_View');     
		    }
		    $data['error']=$addresult['error_message'];
		}
		$data['result1']=$this->LogisticsModel->Fetch_VehicleCity();
		$data['result2']=$this->LogisticsModel->Fetch_VehicleType();
		$data['result3']=$this->LogisticsModel->Fetch_VehicleFuel();
		$data['result4']=$this->LogisticsModel->Fetch_VehicleInsurance();
		$data['result5']=$this->LogisticsModel->Fetch_VehicleUserType();
		$data['result6']=$this->LogisticsModel->Fetch_VehicleUser();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/VehicleMaster_Add',$data);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function VehicleValidation_Ajax()
	{
	    header('Content-Type: application/json');
	    $vehicode=$this->input->post('VEH_CODE');
	    $viewresult=$this->LogisticsModel->VehicleValidation_Ajax($vehicode);
	    if($viewresult[0]['COUNT(VEH_CODE)']==0)
	    {
		echo json_encode(array('valid'=>'true'));
	    }
	    else
	    {	
		echo json_encode(array('valid'=>'false'));
	    }
	}
	
	public function VehicleMaster_Edit($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['Save']))
		{
		   $updateresult=$this->LogisticsModel->VehicleMaster_Update();
		    if($updateresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is Updated successfully');
			redirect('LogisticsController/VehicleMaster_View');
		    }
		    $editresult['error']=$addresult['error_message'];
		}
		$editresult['result1']=$this->LogisticsModel->Fetch_VehicleCity();
		$editresult['result2']=$this->LogisticsModel->Fetch_VehicleType();
		$editresult['result3']=$this->LogisticsModel->Fetch_VehicleFuel();
		$editresult['result4']=$this->LogisticsModel->Fetch_VehicleInsurance();
		$editresult['result5']=$this->LogisticsModel->Fetch_VehicleUserType();
		$editresult['result6']=$this->LogisticsModel->Fetch_VehicleUser();
		
		$editresult['result']=$this->LogisticsModel->VehicleMaster_Edit($id);
		$this -> load -> view('header');
		$this -> load -> view('Logistics/VehicleMaster_Edit',$editresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function VehicleMaster_Delete($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$deleteresult=$this->LogisticsModel->VehicleMaster_Delete($id);
		if($deleteresult['return_status']==0)
		{
		    $this->session->set_flashdata('status','A record is deleted successfully');
		    redirect('LogisticsController/VehicleMaster_View');     
		}
		$this->session->set_flashdata('status','A record is not deleted successfully');
		redirect('LogisticsController/VehicleMaster_View');
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	//2.Vehicle Master Controllers End
	
	
	//3.JobRequestTransaction Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function JobRequestTransaction_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['result'] = $this->LogisticsModel->Fetch_JobRequestTransaction();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/JobRequestTransaction_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function JobRequestTransaction_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['Save']))
		{
		    $addresult=$this->LogisticsModel->JobRequestTransaction_Add();
		    if($addresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is inserted successfully');
			redirect('LogisticsController/JobRequestTransaction_View');     
		    }
		   $data['error']=$addresult['error_message'];
		}
		$addresult['result1']=$this->LogisticsModel->Fetch_VehicleCountry();
		//$addresult['result6']=$this->LogisticsModel->Fetch_VehicleState();
		//$addresult['result7']=$this->LogisticsModel->Fetch_VehicleCity1();
		$addresult['result8']=$this->LogisticsModel->Fetch_JobCode();
		$addresult['result9']=$this->LogisticsModel->Fetch_JobLocCode();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/JobRequestTransaction_Add',$addresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function ajaxcity()
	{
	    $stateCode=mysql_real_escape_string($_POST["st_code"]);
	    $CountryCode=mysql_real_escape_string($_POST["ct_code"]);
	    $sql="SELECT * FROM APPS_CITY where CT_CN_CODE='$CountryCode' and  CT_ST_CODE='$stateCode' and CT_ACTIVE_YN='Y' ORDER BY CT_DESC ASC ";
	    $query = $this->db->query($sql, $return_object = TRUE)->result_array();
	    ?>
	    <option selected disabled > Select</option>
	    <?php
	    foreach($query as $row)
	    {
		?>
		<option value="<?php echo $row['CT_CODE'] ?>"><?php echo $row['CT_DESC']?></option> 
		<?php
	    }
	}
	
	public function ajaxState()
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
	public function JobRequestTransaction_Edit($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['Update']))
		{
		   $updateresult=$this->LogisticsModel->JobRequestTransaction_Update();
		   if($updateresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is Updated successfully');
			redirect('LogisticsController/JobRequestTransaction_View');
		    }
		    $editresult['error']=$addresult['error_message'];
		}
		$addresult['result1']=$this->LogisticsModel->Fetch_VehicleCountry();
		$addresult['result6']=$this->LogisticsModel->Fetch_VehicleState();
		$addresult['result7']=$this->LogisticsModel->Fetch_VehicleCity();
		$addresult['result8']=$this->LogisticsModel->Fetch_JobCode();
		$addresult['result9']=$this->LogisticsModel->Fetch_JobLocCode();
		
		$addresult['JobReeqTxn']=$this->LogisticsModel->Get_JobReeqTxn($id);
		$this -> load -> view('header');
		$this -> load -> view('Logistics/JobRequestTransaction_Edit',$addresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function JobRequestTransaction_Delete($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$deleteresult=$this->LogisticsModel->JobRequestTransaction_Delete($id);
		if($deleteresult['return_status']==0)
		{
		    $this->session->set_flashdata('status','A record is deleted successfully');
		    redirect('LogisticsController/JobRequestTransaction_View');     
		}
		$this->session->set_flashdata('status','A record is not deleted successfully');
		redirect('LogisticsController/JobRequestTransaction_View');
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	//3.Job RequestTransaction Controllers End
	
	
	//4.Logistics Dashboard Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function LogisticsDashboard_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['result'] = $this->LogisticsModel->Fetch_LogisticsDashboard();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/LogisticsDashboard_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	//4.Logistics Dashboard Controllers End
	
	
	//5.Schedule Transaction Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function ScheduleTransaction_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['head'] = $this->LogisticsModel->Fetch_ScheduleTransactionHead();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/ScheduleTransaction_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function ScheduleTransaction_Add()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['Save']))
		{
		    $addresult=$this->LogisticsModel->ScheduleTransaction_Add();
		    if($addresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is inserted successfully');
			redirect('LogisticsController/ScheduleTransaction_View');     
		    }
		   $data['error']=$addresult['error_message'];
		    
		}
		$addresult['result']=$this->LogisticsModel->Fetch_ScheduleTransactionLines();
		$addresult['result1']=$this->LogisticsModel->Fetch_VehicleCode();
		$addresult['result2']=$this->LogisticsModel->Fetch_TeamCode1();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/ScheduleTransaction_Add',$addresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function ScheduleTransaction_Edit($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if(isset($_POST['Save']))
		{
		    $updateresult=$this->LogisticsModel->ScheduleTransaction_Update();
		    if($updateresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is Updated successfully');
			redirect('LogisticsController/ScheduleTransaction_View');
		    }
		    $editresult['error']=$addresult['error_message'];
		}
		$addresult['result']=$this->LogisticsModel->Fetch_ScheduleTransactionLines();
		$addresult['result1']=$this->LogisticsModel->Fetch_VehicleCode();
		$addresult['result2']=$this->LogisticsModel->Fetch_TeamCode1();
		
		$addresult['Fetch_Head']=$this->LogisticsModel->ScheduleTransactionHead_Edit($id);
		$addresult['Fetch_Lines']=$this->LogisticsModel->ScheduleTransactionLines_Edit($id);
		$this -> load -> view('header');
		$this -> load -> view('Logistics/ScheduleTransaction_Edit',$addresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function ScheduleTransaction_Delete($id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$deleteresult=$this->LogisticsModel->ScheduleTransaction_Delete($id);
		if($deleteresult['return_status']==0)
		{
		    $this->session->set_flashdata('status','A record is deleted successfully');
		    redirect('LogisticsController/ScheduleTransaction_View');     
		}
		$this->session->set_flashdata('status','A record is not deleted successfully');
		redirect('LogisticsController/ScheduleTransaction_View');
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	//5.Schedule Transaction Controllers End
	
	
	//6.Schedule Tracking Dashboard Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function ScheduleTrackingDashboard_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['result'] = $this->LogisticsModel->Fetch_ScheduleTrackingDashboard();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/ScheduleTrackingDashboard_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	//6.Schedule Tracking Dashboard Controllers End
	
	
	//7.MeasurementTransaction Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function MeasurementTransaction_Add($id,$sys_head_id)
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		if($sys_head_id!="")
		{
		    $addresult=$this->LogisticsModel->MeasurementTransactionHead_Edit($sys_head_id);
		    $addresult["head"]=$addresult;
		    $addresult["sys_head_id"]=$sys_head_id;
		}
		$addresult['result']= $this->LogisticsModel->Fetch_ScheduleTrackingDashboard1($id);
		$addresult["lsl_sys_id"]=$id;
		$addresult['result1']=$this->LogisticsModel->Fetch_SysId();
		$addresult['result2']=$this->LogisticsModel->Fetch_RefSysId();
		$addresult['result3']=$this->LogisticsModel->Fetch_TxnCode();
		$addresult['result4']=$this->LogisticsModel->Fetch_AppsValueSetLines();
		$addresult['result5']=$this->LogisticsModel->Fetch_InvtMItemFamily();
		$addresult['result6']=$this->LogisticsModel->Fetch_InvtMItemColor();
		$addresult['result7']=$this->LogisticsModel->Fetch_AppsValueSetLinesMountT();
		$addresult['result8']=$this->LogisticsModel->Fetch_AppsValueSetLinesMountO();
		
		$this -> load -> view('header');
		$this -> load -> view('Logistics/MeasurementTransaction_Add',$addresult);
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }
	}
	
	public function MeasurementTransaction_Ajax()
	{
	    $addresult=$this->LogisticsModel->MeasurementTransactionLines_Add();
	    if($addresult['return_status']==0)
	    {
		$data['error']=$addresult['error_message'];
		$json=array('sys_id'=>$addresult['system_id'],'sys_head_id'=>$addresult['system_head_id']);
		echo json_encode($json,true);
	    }
	    else
	    {
		$json=array('.'=>$addresult['error_message'],'error'=>'Y');
		echo json_encode($json);
	    }
	}
	
	public function Fetch_MeasurementTransaction()
	{
	    $sys_head_id=$_POST['sys_head_id'];
	    $lsl_sys_id=$_POST['lsl_sys_id'];
	    
	    $addresult=$this->LogisticsModel->MeasurementTransactionHead_Edit($sys_head_id);
	    $data["head"]=$addresult;
	    $addresult_Line=$this->LogisticsModel->MeasurementTransactionLines_Edit($sys_head_id);
	    $data["line"]=$addresult_Line;
	    
	    $data['result1']=$this->LogisticsModel->Fetch_SysId();
	    $data['result2']=$this->LogisticsModel->Fetch_RefSysId();
	    $data['result3']=$this->LogisticsModel->Fetch_TxnCode();
	    $data['result4']=$this->LogisticsModel->Fetch_AppsValueSetLines();
	    $data['result5']=$this->LogisticsModel->Fetch_InvtMItemFamily();
	    $data['result6']=$this->LogisticsModel->Fetch_InvtMItemColor();
	    $data['result7']=$this->LogisticsModel->Fetch_AppsValueSetLinesMountT();
	    $data['result8']=$this->LogisticsModel->Fetch_AppsValueSetLinesMountO();
	    $data['lsl_sys_id']=$lsl_sys_id;
	    $data['sys_head_id']=$sys_head_id;
	    
	    $this -> load -> view('Logistics/ajax',$data);
	}
	//7.MeasurementTransaction Controllers End 
	
	
	//8.Job Status Dashboard Controllers Begin
	//Author: Vinod
	//Created on: 04/03/15
	//Modified on: 16/03/15
	public function JobStatusDashboard_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {
		$addresult['result'] = $this->LogisticsModel->Fetch_JobStatusDashboard();
		$this -> load -> view('header');
		$this -> load -> view('Logistics/JobStatusDashboard_View',$addresult);
	    }
	    else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
	}
	//8.Job Status Dashboard Controllers End
	
	
	public function Logout()
	{
	    $this->session->unset_userdata('some_name');
	    $this->session->unset_userdata('USER_COMP_CODE');
	    $this->session->unset_userdata('USER_ID');
	    $this->session->unset_userdata('USER_PERS_CODE');
	    $this->session->unset_userdata('USER_PW_CHANGE_YN');
	    unset($this->session->userdata);
	    redirect(base_url()."Apps",'refresh');
	}
    }
    
    