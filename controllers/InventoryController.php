<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InventoryController extends CI_Controller {

    function __construct(){
	parent::__construct();
	$this->load->library('user_agent');
	$this->load->model('InventoryModel','i_model');
	$this->load->model('Apps_model');
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
    }
//1START UOM
    public function UomMaster_View(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$addresult['result']=$this->i_model->uom_fetch();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/UomMaster_View',$addresult);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function UomMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addresult=$this->i_model->add_uom();
	    if($addresult['return_status']==0)
	    {
		$this->session->set_flashdata('status','A record is inserted successfully');
		redirect('InventoryController/UomMaster_View');	    
	    }
		$data['error']=$addresult['error_message'];
	}	
	$this -> load -> view('header');
        $this -> load -> view('Inventory/UomMaster_Add',$data);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function UomMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	    $updateresult=$this->i_model->UpdateUomMaster();
	    if($updateresult['return_status']==0)
	    {
		$this->session->set_flashdata('status','A record is Updated successfully');
		redirect('InventoryController/UomMaster_View');	    
	    }
		$editresult['error']=$addresult['error_message'];
	}
	$editresult['result']=$this->i_model->Edit_Uom($id);
	$this -> load -> view('header');
	$this -> load -> view('Inventory/UomMaster_Edit',$editresult);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function UomMaster_Delete($id,$desc,$uid)
    {
	 $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->deleteuommaster($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/UomMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/UomMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END UOM
     //2 ItemGroupMaster
    public function ItemGroupMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$this -> load -> view('header');
	$fetchdata['result']=$this->i_model->FetchItemGroupMaster();
        $this -> load -> view('Inventory/ItemGroupMaster_View',$fetchdata);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemGroupMaster_Add(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addgroup=$this->i_model->AddIteamGMaster();
	    if($addgroup['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/ItemGroupMaster_View');	    
	}
	    $data['error']=$addgroup['error_message'];
	}
        $this -> load -> view('header');
	$this -> load -> view('Inventory/ItemGroupMaster_Add',$data);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItemGroupMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	    $addgroup=$this->i_model->UpdateIteamGMaster();
	    if($addgroup['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/ItemGroupMaster_View');	    
	}
	    $editresult['error']=$addgroup['error_message'];
	}
	$editresult['result']=$this->i_model->Edit_Iteam_GMaster($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemGroupMaster_Edit',$editresult);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemGroupMaster_Delete($id,$desc,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteItemMaster($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/ItemGroupMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/ItemGroupMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END ItemGroupMaster
    //3 ItemFamilyMaster start
    public function ItemFamilyMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$fetchdata['result']=$this->i_model->FetchItemFamily();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemFamilyMaster_View',$fetchdata);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemFamilyMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addfamily=$this->i_model->AddIteamFamilyMaster();
	    if($addfamily['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/ItemFamilyMaster_View');	    
	}
	    $addresult['error']=$addfamily['error_message'];
	}
	$addresult['result']=$this->i_model->FetchItmFmlMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemFamilyMaster_Add',$addresult);
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ajaxItmFmlycodevalid()
    {
	//header('Content-Type: application/json');
	$ifcode=$this->input->post('if_code');
	$viewresult=$this->i_model->ajaxItmFmlvld($ifcode);
	if($viewresult[0]['COUNT(IF_CODE)']==0)
	{
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    public function ItemFamilyMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateItemFmlyMst();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/ItemFamilyMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result1']=$this->i_model->FetchItmFmlMst();    
	$editresult['result']=$this->i_model->EditItmFmly($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemFamilyMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemFmlyMaster_Delete($id,$desc,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteFmlyMaster($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/ItemFamilyMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/ItemFamilyMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //ItemFamilyMaster End
    //4 ItemTypeMaster start
    public function ItemTypeMaster_View(){
        
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchItmTypMstr();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemTypeMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemTypeMaster_Add(){
        
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddItmTypMaster();
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/ItemTypeMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$resultdata['result']=$this->i_model->FetchItmFmlMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemTypeMaster_Add',$resultdata);
	
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemTypeMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateItemTypMst();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/ItemTypeMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result1']=$this->i_model->FetchItmFmlMst();    
	$editresult['result']=$this->i_model->EditItmTypMst($id);
	//print_r($editresult);exit;
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemTypeMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
     public function ItmTypeMaster_Delete($id,$desc,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteItmTypMtr($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/ItemFamilyMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/ItemTypeMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END ItemTypeMaster
    
    //5 ItemSubTypeMaster
     public function ItemSubTypeMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchItmSubMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemSubTypeMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemSubTypeMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddItmSubTypMaster();
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/ItemSubTypeMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$resultdata['result']=$this->i_model->FetchItmFmlMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemSubTypeMaster_Add',$resultdata);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemSubTypeMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateItemTypSubMst();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/ItemSubTypeMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result1']=$this->i_model->FetchItmFmlMst();    
	$editresult['result']=$this->i_model->EditItmSubTypMst($id);
	//print_r($editresult);exit;
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemSubTypeMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItmTypSubMst_Delete($id,$desc,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteItmSubTypMtr($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/ItemSubTypeMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/ItemSubTypeMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END ItemSubTypeMaster
   //6 ItemPostingGroupMaster
    public function ItemPostingGroupMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchItmPstGrpMstr();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemPostingGroupMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ItemPostingGroupMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddItmPostMaster();
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/ItemPostingGroupMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	//$resultdata['result']=$this->i_model->FetchItmFmlMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemPostingGroupMaster_Add');
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItemPostingGroupMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateItemPostMst();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/ItemPostingGroupMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditItmPostMst($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemPostingGroupMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItmPostMtr_Delete($id,$desc,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteItmPostMtr($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/ItemPostingGroupMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/ItemPostingGroupMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END ItemPostingGroupMaster
    
    
    //7 ItemMaster
    public function ItemMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchItmMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItemMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddItmMaster();
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/ItemMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$resultdata['result1']=$this->i_model->FetchBaseUom();
	$resultdata['result2']=$this->i_model->FetchItmPstGrp();
	$resultdata['result3']=$this->i_model->FetchItmGrp();
	$resultdata['result4']=$this->i_model->FetchItmFmly();
	$resultdata['result5']=$this->i_model->FetchItmTyp();
	$resultdata['result6']=$this->i_model->FetchItmSubTyp();
	//$resultdata['result6']=$this->i_model->FetchItmSubTyp();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemMaster_Add',$resultdata);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItemMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	    $addres=$this->i_model->UpdateItmMaster();
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is updated successfully');
	    redirect('InventoryController/ItemMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$resultdata['result1']=$this->i_model->FetchBaseUom();
	$resultdata['result2']=$this->i_model->FetchItmPstGrp();
	$resultdata['result3']=$this->i_model->FetchItmGrp();
	$resultdata['result4']=$this->i_model->FetchItmFmly();
	$resultdata['result5']=$this->i_model->FetchItmTyp();
	$resultdata['result6']=$this->i_model->FetchItmSubTyp();
	$resultdata['result7']=$this->i_model->FetchItmMaster($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ItemMaster_Edit',$resultdata);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ItemMaster_Delete($id,$desc,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteItmMtr($id,$desc,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/ItemMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/ItemMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END ItemMaster
    
    
    
    //8 LocationGroupMaster
    public function LocationGroupMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchLocGrpMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/LocationGroupMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function LocationGroupMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddLocGrpMaster();
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/LocationGroupMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$this -> load -> view('header');
        $this -> load -> view('Inventory/LocationGroupMaster_Add');
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function LocationGroupMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateLctGrpMst();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/LocationGroupMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditLctGrpMst($id);
	//print_r($editresult);exit;
	$this -> load -> view('header');
        $this -> load -> view('Inventory/LocationGroupMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function LocationGroupMaster_Delete($comp,$id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteLocGrpMst($comp,$id,$lan,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/LocationGroupMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/LocationGroupMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END LocationGroupMaster
    //9 LocationMaster
    public function LocationMaster_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchLocMst();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/LocationMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function LocationMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddLocMaster();
	    //print_r($addres);exit;
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/LocationMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchStockGrp();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/LocationMaster_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function LocationMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateLctMst();
	//print_r($updateresult);exit;
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/LocationMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result1']=$this->i_model->FetchStockGrp();
	
	$editresult['result']=$this->i_model->EditLctMst($id);
	//print_r($editresult);exit;
	$this -> load -> view('header');
        $this -> load -> view('Inventory/LocationMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function LocationMaster_Delete($comp,$id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteLocMst($comp,$id,$lan,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/LocationMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/LocationMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END LocationMaster
    //10 MaterialRequestTransaction
    public function MaterialRequestTransaction_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchMtrlReqTrnsn();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/MaterialRequestTransaction_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function ajaxMatReqTransItemcode()
    {
	header('Content-Type: application/json');
	$item_code=$this->input->post('item_code_data');
	$viewresult=$this->i_model->ajaxMatReqTransItemcode($item_code);
	echo json_encode(array('item_desc'=>$viewresult[0]['ITEM_DESC'],'item_uom_code'=>$viewresult[0]['ITEM_UOM_CODE']));
    }
    public function MaterialRequestTransaction_Add(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddMatReqTrnsnHead();
	    $sys_id=$addres['system_id'];
	    $txn_no=$addres['txn_no'];
	    if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddMatReqTrnsnLine($sys_id,$txn_no);
	    }
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/MaterialRequestTransaction_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchDoc_No();
	$viewresult['result2']=$this->i_model->FetchDoc_Date();
	$viewresult['result1']=$this->i_model->FetchInvtMItem();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/MaterialRequestTransaction_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function MaterialRequestTransaction_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateMatReqTrnsHead();
	$updateresult=$this->i_model->UpdateMatReqTrnsLine();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/MaterialRequestTransaction_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result2']=$this->i_model->FetchInvtMItem();
	$editresult['result']=$this->i_model->EditMatReqTrans($id);
	$editresult['result1']=$this->i_model->EditMatReqLine($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/MaterialRequestTransaction_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}		
	
    }
    public function ajaxMatReqTransEditDel()
    {
	header('Content-Type: application/json');
	$sys_id=$this->input->post('sys_id');
	$lan_code=$this->input->post('lan_code');
	$usr_id=$this->input->post('usr_id');
	$viewresult=$this->i_model->ajaxMatReqTrnsEditDel($sys_id,$lan_code,$usr_id);
	echo json_encode(array('return_status'=>$viewresult[0]['return_status'],'error_message'=>$viewresult[0]['error_message']));
    }
    function DelReqLine($sys_id,$lan,$uid,$rh_sys_id)
    {
    	$this->i_model->MatReqLine($sys_id,$lan,$uid);
	redirect('InventoryController/EditMaterialRequestTransaction/'.$rh_sys_id);	    
    }
    public function MaterialRequestTransaction_Delete($id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteMatReqTransLine($id);
	if($deleteresult['return_status']==0)
	{
	    $deleteresult=$this->i_model->DeleteMatReqTransHead($id,$lan,$uid);
	}
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/MaterialRequestTransaction_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/MaterialRequestTransaction_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END LocationMaster
    //11 MaterialIssueTransaction
    public function MaterialIssueTransaction_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchMtrlIsseTrnsn();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/MaterialIssueTransaction_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function AjaxMatIssueLine()
    {
	$system_code=$_POST['code'];
	$result=$this->i_model->AjaxMatIssueLine($system_code[0]);
	$count=1;
	foreach($result as $row)
	{
    ?>
    <tr  class="odd">
	<input type="hidden" class="form-control" name="mil_sys_id[]" value="<?php echo $row['RQL_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="mil_mih_sys_id[]" value="<?php echo $row['RQL_RQH_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="mil_txn_flow_seq[]" value="<?php echo $row['TXN_FLOW_SEQ']?>" >
	<input type="hidden" class="form-control" name="mil_price[]" value="<?php echo $row['RQL_PRICE']?>" >
	<input type="hidden" class="form-control" name="mil_dlv_loc_code[]" value="<?php echo $row['RQH_DLV_LOCN_CODE']?>" >
	<input type="hidden" class="form-control" name="mil_src_loc_code[]" value="<?php echo $row['RQH_SRC_LOCN_CODE']?>" >
	<input type="hidden" class="form-control" name="mil_dlv_dt[]" value="<?php echo $row['RQH_DLV_DT']?>" >
	<td><span><input type="text" class="form-control" name="mil_line[]" value="<?php echo $count;?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_txn_code[]" value="<?php echo $row['RQH_TXN_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_txn_no[]" value="<?php echo $row['RQH_TXN_NO']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_item_code[]" value="<?php echo $row['RQL_ITEM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_item_desc[]" value="<?php echo $row['RQL_ITEM_DESC']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_uom_code[]" value="<?php echo $row['RQL_UOM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_qty[]" value="<?php echo $row['RQL_QTY']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mil_desc[]" ></span></td>
	<input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
	<td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
    </tr>
    <?php
	}
    }
    public function MaterialIssueTransaction_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddMatIssueTransHead();
	    if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddMatIssueTransLine($addres['system_id'],$addres['txn_no']);
	    }
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/MaterialIssueTransaction_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchMISTxn_No();
	$viewresult['result2']=$this->i_model->FetchMISRqh();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/MaterialIssueTransaction_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function AjaxMatIssueTransDateVld()
    {
	header('Content-Type: application/json');
	$txn_date=$this->input->post('mih_txn_dt');
	$viewresult=$this->i_model->ajaxdatevld($txn_date);
	if($viewresult['RESULT']=='Y')
	{
	echo json_encode(array('valid'=>'true'));
	}else{
	echo json_encode(array('invalid'=>'false'));
	}
    }
    public function MaterialIssueTransaction_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateMatIssueHead();
	if($addres['return_status']==0)
	{
	    $addres=$this->i_model->UpdateMatIssueTrnsnLine();
	
	}
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/MaterialIssueTransaction_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditMatIssueTrans($id);
	$editresult['result1']=$this->i_model->FetchMiLines($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/MaterialIssueTransaction_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}	
	
    }
    public function MaterialIssueTransaction_Delete($id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteMatIssueline($id);
	if($deleteresult['return_status']==0)
	{
	$deleteresult=$this->i_model->DeleteMatIssueHead($id,$lan,$uid);
	}
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/MaterialIssueTransaction_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/MaterialIssueTransaction_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //pravinkumar UI end
    //UI selva
    //END MaterialIssueTransaction
    
    //Bharaniguru R Updated.
    //12 MaterialReturnTransaction
    public function MaterialReturnTransaction_View(){
	
	$viewresult['result']=$this->i_model->MaterialreturnTrnsn();
        $this -> load -> view('header');
	$this -> load -> view('Inventory/MaterialReturnTransaction_View',$viewresult);
    }
    public function MaterialReturnTransaction_Add(){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddMatReturnTransHead();
	    
	    if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddMatReturnTransLine($addres['system_id'],$addres['txn_no']);
	    }
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/MaterialIssueTransaction_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$data['location_lov']=$this->i_model->INVT_T_REQlocationLOV();
	$data['PullingList']=$this->i_model->FetchMRTpulling();
	$data['doc_code']=$this->i_model->FetchMISTxn_No();
	$this -> load -> view('header');
	$this -> load -> view('Inventory/MaterialReturnTransaction_Add',$data);
    }
    public function AjaxMatReturnLine()
    {
	$system_code=$_POST['code'];
	$result=$this->i_model->AjaxMatReturnLinePulling($system_code[0]);
	$count=1;
	foreach($result as $row)
	{
    ?>
    <tr  class="odd">
	<input type="hidden" class="form-control" name="mrl_sys_id[]" value="<?php echo $row['MIL_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="mrl_mrh_sys_id[]" value="<?php echo $row['MIL_MIH_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="mrl_txn_flow_seq[]" value="<?php echo $row['TXN_FLOW_SEQ']?>" >
	<input type="hidden" class="form-control" name="mrl_price[]" value="<?php echo $row['MIL_PRICE']?>" >
	<input type="hidden" class="form-control" name="mrl_dlv_loc_code[]" value="<?php echo $row['MIH_DLV_LOCN_CODE']?>" >
	<input type="hidden" class="form-control" name="mrl_src_loc_code[]" value="<?php echo $row['MIH_SRC_LOCN_CODE']?>" >
	<input type="hidden" class="form-control" name="mrl_dlv_dt[]" value="<?php echo $row['MIH_DLV_DT']?>" >
	<td><span><input type="text" class="form-control" name="mrl_line[]" value="<?php echo $count;?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_txn_code[]" value="<?php echo $row['MIH_TXN_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_txn_no[]" value="<?php echo $row['MIH_TXN_NO']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_item_code[]" value="<?php echo $row['MIL_ITEM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_item_desc[]" value="<?php echo $row['MIL_ITEM_DESC']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_uom_code[]" value="<?php echo $row['MIL_UOM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_qty[]" value="<?php echo $row['MIL_QTY']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="mrl_desc[]" ></span></td>
	<input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
	<td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
    </tr>
    <?php
	}
    }
    
    function MaterialReturnTransaction_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	    if(isset($_POST['Update']))
	    {
	    $updateresult=$this->i_model->UpdateMatReturnTransHead();
	    if($addres['return_status']==0)
	    {
		$addres=$this->i_model->UpdateMatReturnTransLine();
	    }
	    if($updateresult['return_status']==0)
	    {
		$this->session->set_flashdata('status','A record is Updated successfully');
		redirect('InventoryController/MaterialReturnTransaction_View');	    
	    }
		$editresult['error']=$updateresult['error_message'];
	    }
	    $data['FetchHead']=$this->i_model->FetchMatReturnTransHead($id);
	    $data['Fetchline']=$this->i_model->FetchMatReturnTransLines($id);
	    $data['location_lov']=$this->i_model->INVT_T_REQlocationLOV();
	    $data['PullingList']=$this->i_model->FetchMRTpulling();
	    $data['doc_code']=$this->i_model->FetchMISTxn_No();
	    
	    $this -> load -> view('header');
	    $this -> load -> view('Inventory/MaterialReturnTransaction_Edit',$data);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}	
	
    }
    function MaterialReturnTransaction_Delete($mrh_sys_id){
	$deleteMRT=$this->i_model->DeleteMatReturnHead($mrh_sys_id);
	if($deleteMRT['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Deleted successfully');
	    redirect('InventoryController/MaterialReturnTransaction_View');
	}
    }
    //UI selva
    //END MaterialReturnTransaction
    //13 GoodReceiptTransaction
     public function GoodReceiptTransaction_View(){
	
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	    
	$data['result']=$this->i_model->GoodReceiptTransaction();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/GoodReceiptTransaction_View',$data);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
   
    }
    public function AjaxGoodsReceiptTransDateVld()
    {
	header('Content-Type: application/json');
	$txn_date=$this->input->post('GRH_TXN_DATE');
	$viewresult=$this->i_model->ajaxdateGRN($txn_date);
	if($viewresult=='Y')
	{
	echo json_encode(array('valid'=>'true'));
	}else{
	echo json_encode(array('valid'=>'false'));
	}
    }
     public function AjaxGoodReceiptReference()
    {
	$system_code=$_POST['code'];
	$result=$this->i_model->AjaxGoodReceiptReference($system_code[0]);
	$count=1;
	foreach($result as $row)
	{
    ?>
    <tr  class="odd">
	<input type="hidden" class="form-control" name="POL_SYS_ID[]" value="<?php echo $row['POL_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="POL_POH_SYS_ID[]" value="<?php echo $row['POL_POH_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="TXN_FLOW_SEQ[]" value="<?php echo $row['TXN_FLOW_SEQ']?>" >
	<input type="hidden" class="form-control" name="POL_PRICE[]" value="<?php echo $row['POL_PRICE']?>" >
	<input type="hidden" class="form-control" name="POH_SUPL_AC_CODE[]" value="<?php echo $row['POH_SUPL_AC_CODE']?>" >
	<td><span><input type="text" class="form-control" name="mil_line[]" value="<?php echo $count;?>" ></span></td>
	<td><span><input type="text" class="form-control" name="POH_TXN_CODE[]" value="<?php echo $row['POH_TXN_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="POH_TXN_NO[]" value="<?php echo $row['POH_TXN_NO']?>" readonly></span></td>
	<td><span><input type="text" class="form-control" name="POL_ITEM_CODE[]" value="<?php echo $row['POL_ITEM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="POL_ITEM_DESC[]" value="<?php echo $row['POL_ITEM_DESC']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="POL_UOM_CODE[]" value="<?php echo $row['POL_UOM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="POL_QTY[]" value="<?php echo $row['POL_QTY']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="POL_DESC[]" ></span></td>
	<input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
    </tr>
    
    <?php
	}
    }
    public function GoodsReceiptTransaction_Add(){
	$session_data = $this->session->userdata('USER_ID');
	
	if($session_data)
	{
	    if(isset($_POST['save']))
	    {
	    $addres=$this->i_model->AddGoodsReceiptTransactionHead();
	    if($addres['return_status']==0)
	    {
		
	    $addres=$this->i_model->AddGoodsReceiptTransactionLine($addres['system_id'],$addres['txn_no']);
	    }
	    if($addres['return_status']==0)
	    {
		$this->session->set_flashdata('status','A record is inserted successfully');
		redirect('InventoryController/GoodReceiptTransaction_View');	    
	    }
	    }
	    
	
	$viewresult['result']=$this->i_model->FetchGRNTxn_No();
	$viewresult['result2']=$this->i_model->FetchGRNRqh();
	$viewresult['location']=$this->i_model->FetchLocMst();
	$this -> load -> view('header');
	$this -> load -> view('Inventory/GoodsReceiptTransaction_Add',$viewresult);
	
	}
	else
	    {
	    redirect(base_url()."Apps",'refresh');
	    }
    }
    
    public function GoodsReceiptTransaction_Edit($id){
	if(isset($_POST['Update']))
	{
	    $updateresult=$this->i_model->EditGoodsReceiptTransactionHead();
	    $updateresult=$this->i_model->EditGoodsReceiptTransactionLine();
	       redirect('InventoryController/GoodReceiptTransaction_View');	
	}
	
	    $editresult['result1']=$this->i_model->GoodReceiptTransactionLinesEdit($id);
	    $editresult['result2']=$this->i_model->FetchGRNRqh();
	    $editresult['result']=$this->i_model->GoodReceiptTransactionEdit($id);
	    $editresult['location']=$this->i_model->FetchLocMst();
	    $this -> load -> view('header');
	    $this -> load -> view('Inventory/GoodsReceiptTransaction_Edit',$editresult);

    }
     public function GoodsReceiptTransaction_Delete($id){
	$this->i_model->DeleteGoodsReceiptTransaction($id);
	 redirect('InventoryController/GoodReceiptTransaction_View');
    }
    //END GoodReceiptTransaction
    //14 StockTransferRequestTransaction
    public function StockTransferRequestTransaction_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchStockTrnsfReqTrans();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferRequestTransaction_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function AjaxSTRDT_valid()
    {
	$srqh_txn_dt=$_POST['srqh_txn_dt'];
	$srqh_txn_code=$_POST['txn_code'];
	$viewresult=$this->i_model->AjaxSTRDT_valid($srqh_txn_dt,$srqh_txn_code);
	if($viewresult[0]['RESULT']=='Y')
	{
	echo json_encode(array('valid'=>'true'));
	}else{
	echo json_encode(array('valid'=>'false'));
	}
    }
    public function ajaxSTRItemCode()
    {
	header('Content-Type: application/json');
	$item_code=$this->input->post('item_code_data');
	$viewresult=$this->i_model->AjaxSTRItemCode($item_code);
	echo json_encode(array('ITEM_DESC'=>$viewresult[0]['ITEM_DESC'],'ITEM_UOM_CODE'=>$viewresult[0]['ITEM_UOM_CODE']));
    }
    public function StockTransferRequestTransaction_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddSTRHead();
	    if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddSTRLine($addres['system_id'],$addres['txn_no']);
	    }
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/StockTransferRequestTransaction_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchSTRTxn_No();
	$viewresult['result1']=$this->i_model->FetchSTRItem_Loc();
	$viewresult['result2']=$this->i_model->FetchSTRLine_Icode();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferRequestTransaction_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function StockTransferRequestTransaction_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateSTRHead();
	if($addres['return_status']==0)
	{
	    $addres=$this->i_model->UpdateSTRLine();
	}
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/StockTransferRequestTransaction_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditSTRHead($id);
	$editresult['result1']=$this->i_model->FetchSTRLines($id);
	$editresult['result2']=$this->i_model->FetchSTRItem_Loc();
	$editresult['result3']=$this->i_model->FetchSTRLine_Icode();
	//print_r($viewresult);exit;
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferRequestTransaction_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    function StockTransferRequestTransaction_Delete($id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteRowSTRline($id);
	if($deleteresult['return_status']==0)
	{
	$deleteresult=$this->i_model->DeleteSTRHead($id,$lan,$uid);
	}
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/StockTransferRequestTransaction_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/StockTransferRequestTransaction_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    function deleteSTRL($sys_id,$rh_sys_id,$lan,$uid)
    {
	$this->i_model->deleteSTRLine($sys_id,$lan,$uid);
	redirect('InventoryController/StockTransferRequestTransaction_Edit/'.$rh_sys_id);	    
    }
    //END StockTransferRequestTransaction
    
    
     //confusion start
    //15 BinMaster
    public function BinMaster_View(){
        
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchBinMster();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/BinMaster_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function BinMaster_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['save']))
	{
	    $addres=$this->i_model->AddBinMaster();
	    
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/BinMaster_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchMLoc();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/BinMaster_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function ajaxbincode()
    {
	$split=end(explode('_',$bincode));
	$viewresult=$this->i_model->ajaxbin();
	$split=array();
	$split1=array();
	foreach($viewresult as $row)
	{
	$split=(end(explode('_', $row['BIN_CODE'])));
	$split1[]=$split;
	}
	$r=max($split1);
	$result=$r+1;
	echo json_encode($result);
    }
    public function ajaxbincodevalid()
    {
	header('Content-Type: application/json');
	$bincode=$this->input->post('bin_code');
	$viewresult=$this->i_model->ajaxbinvld($bincode);
	if($viewresult[0]['COUNT(BIN_CODE)']==0)
	{
	    echo json_encode(array('valid'=>'true'));
	}else{
	    echo json_encode(array('valid'=>'false'));
	}
    }
    public function BinMaster_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateBinMstr();
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/BinMaster_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	
	$editresult['result1']=$this->i_model->FetchMLoc();
	$editresult['result']=$this->i_model->EditBinMstr($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/BinMaster_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}		
	
    }
    public function BinMaster_Delete($comp,$id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteBinMstr($comp,$id,$lan,$uid);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/BinMaster_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/BinMaster_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //ui selva end
    //ui pravinkumar
    //END BinMaster
    //16 BinAllocation
    public function ViewBinAllocation(){
        
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchBinAlloc();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/ViewBinAllocation',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function AddBinAllocation(){
        $this -> load -> view('header');
        $this -> load -> view('Inventory/AddBinAllocation');
    }
    public function EditBinAllocation(){
        $this -> load -> view('header');
        $this -> load -> view('Inventory/EditBinAllocation');
    }
    //END BinAllocation
    //confusion End
    //17 StockTransferOutgoing
    public function StockTransferOutgoing_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchSTO();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferOutgoing_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function AjaxSTOLine()
    {
	$system_code=$_POST['code'];
	$result=$this->i_model->AjaxSTOLine($system_code[0]);
	$count=1;
	foreach($result as $row)
	{
	
    ?>
    <tr  class="odd">
	<input type="hidden" class="form-control" name="stol_ref_line_sys_id[]" value="<?php echo $row['SRQL_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="stol_ref_sys_id[]" value="<?php echo $row['SRQL_SRQH_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="stol_txn_flow_seq[]" value="<?php echo $row['TXN_FLOW_SEQ']?>" >
	<input type="hidden" class="form-control" name="stol_price[]" value="<?php echo $row['SRQL_PRICE']?>" >
	<input type="hidden" class="form-control" name="stol_qty_delv[]" value="<?php echo $row['SRQL_QTY_DELIVERED']?>" >
	<input type="hidden" class="form-control" name="stol_value[]" value="<?php echo $row['SRQL_VALUE']?>" >
	<input type="hidden" class="form-control" id="datepicker1" name="stol_dlv_dt[]" value="<?php echo $row['SRQL_DLV_DT']?>" >
	<input type="hidden" class="form-control" name="stol_src_loc[]" value="<?php echo $row['SRQL_SRC_LOCN_CODE']?>" >
	<input type="hidden" class="form-control" name="stol_dlv_loc[]" value="<?php echo $row['SRQL_DLV_LOCN_CODE']?>" >
	<td><span><input type="text" class="form-control" name="stol_line[]" value="<?php echo $count;?>" ></span></td>
	<td><span><input type="text" class="form-control" name="stol_txn_code[]" value="<?php echo $row['SRQH_TXN_CODE']?>" readonly></span></td>
	<td><span><input type="text" class="form-control" name="stol_txn_no[]" value="<?php echo $row['SRQH_TXN_NO']?>" readonly></span></td>
	<td><span><input type="text" class="form-control" name="stol_item_code[]" value="<?php echo $row['SRQL_ITEM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="stol_item_desc[]" value="<?php echo $row['SRQL_ITEM_DESC']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="stol_uom_code[]" value="<?php echo $row['SRQL_UOM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="stol_qty[]" value="<?php echo $row['SRQL_QTY']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="stol_desc[]" ></span></td>
	<input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
	<td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
    </tr>
    <?php
	}
    }
    public function AjaxSTOLine1()
    {
	header('Content-Type: application/json');
	$system_code=$_POST['code'];
	$result=$this->i_model->AjaxSTOLine($system_code[0]);
	$count=1;
	echo json_encode(array('SRQH_REQUESTED_BY'=>$result[0]['SRQH_REQUESTED_BY'],'SRQH_DLV_DT'=>$result[0]['SRQH_DLV_DT'],'SRQH_DLV_LOCN_CODE'=>$result[0]['SRQH_DLV_LOCN_CODE'],'SRQH_SRC_LOCN_CODE'=>$result[0]['SRQH_SRC_LOCN_CODE']));
    }
    public function StockTransferOutgoing_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddSTOHead();
	    print "<pre>";
	    print_r($addres);
	    print "</pre>";
	    exit;if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddSTOLine($addres['system_id'],$addres['txn_no']);
	    }
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/StockTransferOutgoing_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchSTOTxn_No();
	$viewresult['result1']=$this->i_model->FetchSTORefDoc();
	//$viewresult['result2']=$this->i_model->FetchSTRLine_Icode();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferOutgoing_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function StockTransferOutgoing_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateSTOHead();
	if($addres['return_status']==0)
	{
	    $addres=$this->i_model->UpdateSTOLine();
	}
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/StockTransferOutgoing_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditSTOHead($id);
	$editresult['result1']=$this->i_model->EditSTOLines($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferOutgoing_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function DeleteSTOL($sys_id,$lan,$uid)
    {
	$delresult['result']=$this->i_model->DeleteSTOLines($sys_id,$lan,$uid);
	redirect('InventoryController/StockTransferOutgoing_Edit/'.$sys_id);
    }
    public function StockTransferOutgoing_Delete($sys_id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteSTOline($sys_id);
	if($deleteresult['return_status']==0)
	{
	$deleteresult=$this->i_model->DeleteSTOHead($sys_id,$lan,$uid);
	}
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/StockTransferOutgoing_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/StockTransferOutgoing_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END StockTransferOutgoing
    
    
    //18 StockTransferIncoming
    public function StockTransferIncoming_View(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	    
	$data['result']=$this->i_model->StockTransferIncoming();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferIncoming_View',$data);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    
    }
    public function StockTransferIncomingDate()
    {
	header('Content-Type: application/json');
	$txn_date=$this->input->post('STIH_TXN_DT');
	$viewresult=$this->i_model->ajaxdateSTI($txn_date);
	
	if(print_r($viewresult)=='Y')
	{
	echo json_encode(array('valid'=>'true'));
	}else{
	echo json_encode(array('invalid'=>'false'));
	}
    }
       public function StockTransferIncomingReference()
    {
	$system_code=$_POST['code'];
	$result=$this->i_model->StockTransferIncomingReference($system_code[0]);

	$count=1;
	foreach($result as $row)
	{
    ?>
    <tr  class="odd">

	<input type="hidden" class="form-control" name="STIL_VALUE[]" value="<?php echo $row['STOL_VALUE']?>" >
	<input type="hidden" class="form-control" name="STIL_DLV_LOCN_CODE[]" value="<?php echo $row['STOL_DLV_LOCN_CODE']?>" >
	<input type="hidden" class="form-control" name="STIL_SRC_LOCN_CODE[]" value="<?php echo $row['STOL_SRC_LOCN_CODE']?>" >
	<input type="hidden" class="form-control datefor" name="STIL_DLV_DT[]" value="<?php echo $row['STOL_DLV_DT']?>" >
	<input type="hidden" class="form-control" name="STIL_SYS_ID[]" value="<?php echo $row['STOL_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="STIL_STIH_SYS_ID[]" value="<?php echo $row['STOL_STOH_SYS_ID']?>" >
	<input type="hidden" class="form-control" name="TXN_FLOW_SEQ[]" value="<?php echo $row['TXN_FLOW_SEQ']?>" >
	<input type="hidden" class="form-control" name="STIL_PRICE[]" value="<?php echo $row['STOL_PRICE']?>" >
	<td><span><input type="text" class="form-control" name="mil_line[]" value="<?php echo $count;?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIH_TXN_CODE1[]" value="<?php echo $row['STOH_TXN_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIH_TXN_NO[]" value="<?php echo $row['STOH_TXN_NO']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIL_ITEM_CODE[]" value="<?php echo $row['STOL_ITEM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIL_ITEM_DESC[]" value="<?php echo $row['STOL_ITEM_DESC']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIL_UOM_CODE[]" value="<?php echo $row['STOL_UOM_CODE']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIL_QTY[]" value="<?php echo $row['STOL_QTY']?>" ></span></td>
	<td><span><input type="text" class="form-control" name="STIL_DESC[]" ></span></td>
	<input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
    </tr>
    <?php
	}
    }
    public function StockTransferIncoming_Add(){
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddStockTransferIncoming();
	
	    if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddStockTransferIncomingLine($addres['system_id'],$addres['txn_no']);
	    }
	   
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/StockTransferIncoming_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['location']=$this->i_model->FetchStockGrp();
	$viewresult['result']=$this->i_model->FetchSTITxn_No();
	$viewresult['result2']=$this->i_model->FetchSTI();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferIncoming_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
  
    }
    public function StockTransferIncoming_Edit($id){
	if(isset($_POST['Save']))
	{
	    $updateresult=$this->i_model->UpdateStockTransferIncoming();
	    $updateresult=$this->i_model->UpdateStockTransferIncomingLine();
	    $this->session->set_flashdata('status','A record is updated successfully');
	    redirect('InventoryController/StockTransferIncoming_View');	
	}
	$editresult['result1']=$this->i_model->StockTransferIncomingLinesEdit($id);
	$editresult['result2']=$this->i_model->FetchSTI();
	$editresult['result']=$this->i_model->StockTransferIncomingEdit($id);
	$editresult['location']=$this->i_model->FetchStockGrp();
        $this -> load -> view('header');
        $this -> load -> view('Inventory/StockTransferIncoming_Edit',$editresult);
    }
    public function StockTransferIncoming_Delete($id)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteStockTransferIncoming($id);
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/StockTransferIncoming_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/StockTransferIncoming_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END StockTransferIncoming
    
    
    //Functionality by: Gobi. C
    //19 StockAdjustment
    public function StockAdjustmentTransaction_View(){
       
       $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	    $this -> load -> view('header');
	    $result['view']=$this->i_model->ViewStockAdjustmentTransaction();
	    $this -> load -> view('Inventory/StockAdjustmentTransaction_View',$result);
	}
	else
	{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function GetItemDesc()
    {
	$data=$this->i_model->GetItemDesc();
	//print_r($data);
	foreach($data as $val)
	echo '{"ITEM_DESC":"'.$val['ITEM_DESC'].'","ITEM_UOM_CODE":"'.$val['ITEM_UOM_CODE'].'"}';
    }
    public function GetSysQty()
    {
	$data=$this->i_model->GetSysQty();
	//print_r($data);
	foreach($data as $val)
	echo '{"SL_QTY":"'.$val['SL_QTY'].'"}';
    }
    public function StockAdjustmentTransaction_Add()
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{	if(isset($_POST['Save']))
		{
		    $viewresult=$this->i_model->AddStockAdjustmentTransaction();
		    if($viewresult['return_status']==0)
		    {
			$this->session->set_flashdata('status','A record is inserted successfully');
			$viewresult=$this->i_model->AddStockAdjustmentLineTransaction($viewresult['SYS_ID'],$viewresult['TXN_NO']);
			redirect(base_url("InventoryController/StockAdjustmentTransaction_View"));
		    }
		}
	    $value['GetItemCode']=$this->i_model->GetItemCode();
	    $value['GetLoctCode']=$this->i_model->GetLoctCode();
	    //$value['GetStrnTxnNo']=$this->i_model->GetStrnTxnNo();
	    $this -> load -> view('header');
	    $this -> load -> view('Inventory/StockAdjustmentTransaction_Add',$value);
	}
	else{
	    redirect(base_url("InventoryController/StockAdjustmentTransaction_View"));
	}
    } 
    public function StockAdjustmentTransaction_Edit($sysid){
        
	if(isset($_POST['Update']))
		{
		    $this->i_model->EditStockAdjustmentTransaction($sysid);
		    $this->session->set_flashdata('status','A record is updated successfully');
		    redirect(base_url("InventoryController/StockAdjustmentTransaction_View"));
		}
	    $value['GetItemCode']=$this->i_model->GetItemCode();
	    $value['GetLoctCode']=$this->i_model->GetLoctCode();
	    //$value['GetStrnTxnNo']=$this->i_model->GetStrnTxnNo();
	    $value['GetStockAdjTxn']=$this->i_model->GetStockAdjTxn($sysid);
	    $value['GetStockAdjTxnLine']=$this->i_model->GetStockAdjTxnLine($sysid);
	    $this -> load -> view('header');
	    $this -> load -> view('Inventory/StockAdjustmentTransaction_Edit',$value);
	    
	
    }
    public function StockAdjustmentTransaction_Delete($sysid )
    {
	$this->i_model->DeleteStockAdjustmentTransaction($sysid);
	redirect(base_url("InventoryController/StockAdjustmentTransaction_View"));
	
    }
    public function DeleteStockAdjustmentTransactionLines($sysid)
    {
	$this->i_model->DeleteStockAdjustmentTransactionLines($sysid);
	redirect(base_url("InventoryController/StockAdjustmentTransaction_View"));
    }
    //END StockAdjustment
    
    
    //20 InspectionTransaction
    //Author Pravinkumar@appnlogic.com
    public function InspectionTransaction_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchIT();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/InspectionTransaction_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function AjaxINHDateVld()
    {
	header('Content-Type: application/json');
	$txn_date=$this->input->post('inh_txn_dt');
	$inh_Txn_code=$this->input->post('inh_Txn_code');
	$viewresult=$this->i_model->ajaxINHDt($txn_date,$inh_Txn_code);
	if($viewresult[0]['RESULT']=='Y')
	{
	echo json_encode(array('valid'=>'true'));
	}else{
	echo json_encode(array('valid'=>'false'));
	}
    }
    public function InspectionTransaction_Add(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Save']))
	{
	    $addres=$this->i_model->AddINSHead();
	    if($addres['return_status']==0)
	    {
	    $addres=$this->i_model->AddINSLine($addres['system_id'],$addres['txn_no']);
	    }
	    if($addres['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is inserted successfully');
	    redirect('InventoryController/InspectionTransaction_View');	    
	}
	    $resultdata['error']=$addres['error_message'];
	}
	$viewresult['result']=$this->i_model->FetchINSTxn_No();
	$viewresult['result1']=$this->i_model->FetchINSRefDoc();
	$viewresult['result2']=$this->i_model->FetchMSTLoc();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/InspectionTransaction_Add',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function AjaxINPLine()
    {
	
	$system_code=$_POST['code'];
	$result=$this->i_model->AjaxINSLine($system_code[0]);
	$count=1;
	foreach($result as $row)
	{
	
    ?>
    <tr  class="odd">
	<input type="hidden" class="form-control" name="INL_POL_REF_FLOW_SEQ[]" value="<?php echo $row['TXN_FLOW_SEQ'];?>"/>
	<input type="hidden" class="form-control" name="INL_REF_HEAD_SYS_ID[]" value="<?php echo $row['POL_POH_SYS_ID'];?>"/>
	<input type="hidden" class="form-control" name="INL_REF_LINE_SYS_ID[]" value="<?php echo $row['POL_SYS_ID'];?>"/>
	<input type="hidden"  class="form-control" name="INL_DESC[]"/>
	<td><span><input type="text" class="form-control" name="INL_LINE[]" value="<?php echo $count;?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_REF_POH_TXN_CODE[]" value="<?php echo $row['POH_TXN_CODE'];?>" readonly/></span></td>
	<td><span><input type="text" class="form-control" name="INL_REF_POH_TXN_NO[]" value="<?php echo $row['POH_TXN_NO'];?>" readonly/></span></td>
	<td><span><input type="text" class="form-control" name="INL_ITEM_CODE[]" value="<?php echo $row['POL_ITEM_CODE'];?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_ITEM_DESC[]" value="<?php echo $row['POL_ITEM_DESC'];?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_UOM_CODE[]" value="<?php echo $row['POL_UOM_CODE'];?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_QTY[]" value="<?php echo $row['POL_QTY'];?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_ACC_QTY[]" value="<?php echo $row['POL_QTY'];?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_REJ_QTY[]" value="0"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_PRICE[]" value="<?php echo $row['POL_PRICE'];?>"/></span></td>
	<td><span><input type="text" class="form-control" name="INL_VALUE[]" value="<?php echo $row['POL_VALUE'];?>"/></span></td>
	<td><span>
	<select class="form-control" id="INL_LOCN_CODE" name="INL_LOCN_CODE[]">
	</select>
	</span></td>
	<input type="hidden" class="form-control"  value="<?php echo $count++;?>" >
	<td><a href="<?php echo site_url('InventoryController/InsDelLine/')?>" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" onclick="return confirm('Are you sure you want to delete row from DB ?');">Remove</a></td>
    </tr>
    <?php
	}
    }
    
    public function AjaxLocCode()
    {
	$result=$this->i_model->AjaxLocCode();
	foreach($result as $row)
	{
	    ?>
	    <option value="<?php echo $row['LOCN_CODE'];?>"><?php echo $row['LOCN_DESC'];?></option>
	    <?php
	}
    }
    public function InspectionTransaction_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	$updateresult=$this->i_model->UpdateINSHead();
	if($addres['return_status']==0)
	{
	    $addres=$this->i_model->UpdateINSLine();
	}
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/InspectionTransaction_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditINSHead($id);
	$editresult['result1']=$this->i_model->EditINSLines($id);
	$editresult['result2']=$this->i_model->FetchStockGrp();
	$editresult['result3']=$this->i_model->FetchMSTLoc();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/InspectionTransaction_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    public function InspectionTransaction_Delete($sys_id,$lan,$uid)
    {
	$session_data = $this->session->userdata('USER_ID');
	if($session_data){
	$deleteresult=$this->i_model->DeleteINSline($sys_id);
	if($deleteresult['return_status']==0)
	{
	$deleteresult=$this->i_model->DeleteINSHead($sys_id,$lan,$uid);
	}
	if($deleteresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is deleted successfully');
	    redirect('InventoryController/InspectionTransaction_View');	    
	}
	    $this->session->set_flashdata('status','A record is not deleted successfully');
	    redirect('InventoryController/InspectionTransaction_View');
	}
	else{
	    redirect(base_url()."Apps",'refresh');
	}
    }
    //END InspectionTransaction
    
    //21 GoodsReceiptCostingTransaction
    public function GoodsReceiptCostingTransaction_View(){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data)
	{
	$viewresult['result']=$this->i_model->FetchGRCT();
	$this -> load -> view('header');
        $this -> load -> view('Inventory/GoodsReceiptCostingTransaction_View',$viewresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
    public function GoodsReceiptCostingTransaction_Edit($id){
        $session_data = $this->session->userdata('USER_ID');
	if($session_data){
	if(isset($_POST['Update']))
	{
	    $updateresult=$this->i_model->EditGoodsReceiptTransactionLine();
	if($updateresult['return_status']==0)
	{
	    $updateresult=$this->i_model->AddOverHead();
	}
	if($updateresult['return_status']==0)
	{
	    $this->session->set_flashdata('status','A record is Updated successfully');
	    redirect('InventoryController/GoodsReceiptCostingTransaction_View');	    
	}
	    $editresult['error']=$updateresult['error_message'];
	}
	$editresult['result']=$this->i_model->EditGRCTHead($id);
	$editresult['result1']=$this->i_model->EditGRCTLines($id);
	$editresult['location']=$this->i_model->FetchLocMst();
	$editresult['result2']=$this->i_model->EditOverHead($id);
	$this -> load -> view('header');
        $this -> load -> view('Inventory/GoodsReceiptTransaction_Edit',$editresult);
	}else{
	    redirect(base_url()."Apps",'refresh');
	}
	
    }
}
?>