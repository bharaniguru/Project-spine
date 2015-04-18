<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Procurement extends CI_Controller
	{
	function Procurement()
	{
	    parent::__construct();
	    $this->load->model('Apps_model');
	    $this->load->model('Procurement_model');
	    $this->load->library('session');
	}
	
	//************************************************1.Currency Master START********************************************//	
	function CurrencyMaster_View()
	{
	    $result_currency= $this->Procurement_model->getCurrency();
	    $data['currency']=$result_currency;
	    $this -> load -> view('header');
	    $this -> load -> view('Procurement/CurrencyMaster_View',$data);
	}
	function CurrencyMaster_Add()
	{
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->Procurement_model->addcurrency();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A  new record is added successfully');
		    redirect("Procurement/CurrencyMaster_View");
		}else{
		    $data['error_message']=$result['error_message'];
		}
	    }    		    	    
	    $this->load->view('header');
	    $this->load->view('Procurement/CurrencyMaster_Add');
	}	
	function CurrencyMaster_Edit($code)
	{		    
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->Procurement_model->editcurrency();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A  Existing record is updated successfully');
		    redirect('Procurement/CurrencyMaster_view');
		}else{
		    $data['error_message']=$result['error_message'];
		}
	    }
	    $result_currency= $this->Procurement_model->getCurrencyRow($code);
	    $data['currency']=$result_currency;
	    $this->load->view('header');
	    $this->load->view('Procurement/CurrencyMaster_Edit',$data);
	}	
	function CurrencyMaster_Delete($code)
	{	    
	    $delete_result=$this->Procurement_model->delete_currency($code);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is Deleted successfully');
		redirect('Procurement/CurrencyMaster_view');
	    }else{
		$data['error_message']=$result['error_message'];
	    }	    
	}
	public function Ajax_CCY_CODE()
	{
	    header('Content-Type: application/json');
	    $CCY_CODE=$this->input->post('ccy_code');	    
	    $viewresult=$this->Procurement_model->Ajax_CCY_CODE($CCY_CODE);	    	    
	    if($viewresult>0)
	    {
		echo json_encode(array('valid'=>'false'));		
	    }
	    else{
		echo json_encode(array('valid'=>'true'));
	    }
	}	
	//************************************************1.Currency Master END********************************************//	
	
	//************************************2.PaymentTermMaster START*******************************************************//	
	function PaymentTermMaster_View(){
	    $result= $this->Procurement_model->getPaymentTerm();
	    $data['paymentterm']=$result;
	    $this->load->view('header');
	    $this->load->view('procurement/PaymentTermMaster_View',$data);
	}	
	function PaymentTermMaster_Add(){
	    if($this->input->post('submit_form')=='Save')
	    {
	    $this->Procurement_model->addPaymentTerm();
	    if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record is Added successfully');
		    redirect('procurement/PaymentTermMaster_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}	    	    
	    }
	    $this->load->view('header');
	    $this->load->view('procurement/PaymentTermMaster_Add');
	}	
	function PaymentTermMaster_Edit($code){	
	    $result_PaymentTerm= $this->Procurement_model->getPaymentTermRow($code);
	    $data['PaymentTerm']=$result_PaymentTerm;
	    if($this->input->post('submit_form')=='Update')
	    {
		$this->Procurement_model->editPaymentTerm();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Existing record is updated successfully');
		    redirect('procurement/PaymentTermMaster_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}			
	    }
	    $this->load->view('header');
	    $this->load->view('procurement/PaymentTermMaster_Edit',$data);
	}	
	function PaymentTermMaster_Delete($code){	    
	    $delete_result=$this->Procurement_model->delete_payment($code);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect('procurement/PaymentTermMaster_View');
	    }else{
		$data['error_message']=$result['error_message'];
	    }		    	
	}
	public function Ajax_PT_CODE()
	{		
	    $PT_CODE=$this->input->post('PT_CODE');	
	    $viewresult=$this->Procurement_model->Ajax_PT_CODE($PT_CODE);		
	    if($viewresult>0)
	    {
		echo json_encode(array('valid'=>'false'));	    
	    }
	    else{
		echo json_encode(array('valid'=>'true'));
	    }
	}
	//************************************2.PaymentTermMaster END*******************************************************//	
	
	//********************************************************3.Shipment Master START********************************************//	
	function ShipmentMaster_View(){
	    $result= $this->Procurement_model->getShipment();
	    $data['shipment']=$result;
	    $this->load->view('header');
	    $this->load->view('procurement/ShipmentMaster_View',$data);
	}
	function ShipmentMaster_Add(){
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->Procurement_model->addshipment();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record is added successfully');
		    redirect('procurement/ShipmentMaster_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}	    
	    }
	    $this->load->view('header');
	    $this->load->view('procurement/ShipmentMaster_Add');
	}
	function ShipmentMaster_Edit($code){
	    $result_shipment= $this->Procurement_model->getShipmentRow($code);
	    $data['shipment']=$result_shipment;
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->Procurement_model->editShipment();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Existing record is Updated successfully');
		    redirect('procurement/ShipmentMaster_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}	
	    }
	    $this->load->view('header');
	    $this->load->view('procurement/ShipmentMaster_Edit',$data);
	}
	function ShipmentMaster_Delete($code){		
	    $this->Procurement_model->delete_shipment($code);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record deleted successfully');	
		redirect('procurement/ShipmentMaster_View');
	    }else{
		$data['error_message']=$result['error_message'];
	    }	
	}
	public function Ajax_SH_CODE()
	{
	header('Content-Type: application/json');
	 $SH_CODE=$this->input->post('sh_code');
	
	$viewresult=$this->Procurement_model->Ajax_SH_CODE($SH_CODE);
	
	
	if($viewresult>0)
	{
	  echo json_encode(array('valid'=>'false'));
	    
	}
	else
	{
	       echo json_encode(array('valid'=>'true'));
	}
	}
	//********************************************************3.Shipment Master END********************************************//

	//*******************************************4.supplier Master START***************************************************//	
	function SupplierMaster_View(){
	    $result= $this->Procurement_model->getSupplier();
	    $data['supplier']=$result;
	    $this->load->view('header');
	    $this->load->view('procurement/SupplierMaster_View',$data);
	}
	function SupplierMaster_Add()
	{
	    $PROC_STMT_CY= $this->Procurement_model->PROC_STMT_CY();
	    $data['PROC_STMT_CY']=$PROC_STMT_CY;
	    $party= $this->Procurement_model->PROC_PARTY();
	    $data['party']=$party;
	    $title= $this->Procurement_model->PROC_TITLE();
	    $data['title']=$title;
	    $excode= $this->Procurement_model->PROC_EX_CODE();
	    $data['excode']=$excode;
	    $country=$this->Apps_model->ViewCountry();
	    $data['country']=$country;
	    $PaymentTerm=$this->Procurement_model->getPaymentTerm();
	    $data['PaymentTerm']=$PaymentTerm;
	    $currency=$this->Procurement_model->getCurrency();
	    $data['currency']=$currency;
	    $this->load->view('header');
	    $this->load->view('procurement/SupplierMaster_Add',$data);
	    if($this->input->post('submit_form')=='Save')
	    {
		$this->Procurement_model->addSupplier();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record added successfully');	
		    redirect('procurement/SupplierMaster_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}	
		    
	    }
	}
	function SupplierMaster_Edit($code){
	    $PROC_STMT_CY= $this->Procurement_model->PROC_STMT_CY();
	    $data['PROC_STMT_CY']=$PROC_STMT_CY;
	    $party= $this->Procurement_model->PROC_PARTY();
	    $data['party']=$party;
	    $title= $this->Procurement_model->PROC_TITLE();
	    $data['title']=$title;
	    $excode= $this->Procurement_model->PROC_EX_CODE();
	    $data['excode']=$excode;
	    $country=$this->Apps_model->ViewCountry();
	    $data['country']=$country;
	    $PaymentTerm=$this->Procurement_model->getPaymentTerm();
	    $data['PaymentTerm']=$PaymentTerm;
	    $currency=$this->Procurement_model->getCurrency();
	    $data['currency']=$currency;
	    $supplier=$this->Procurement_model->getSupplierRow($code);
	    $data['supplier']=$supplier;
	    $data['contact']=$this->Procurement_model->getsuppliercontact($code);
	    $data['attachment']=$this->Procurement_model->getsupplierattachment($code);
	    $data['state']=$this->Procurement_model->getsupplierstate($supplier[0]["SUPL_CN_CODE"]);
	    $data['city']=$this->Procurement_model->getsuppliercity($supplier[0]["SUPL_ST_CODE"],$supplier[0]["SUPL_CN_CODE"]);
	    $this->load->view('header');
	    $this->load->view('procurement/SupplierMaster_Edit',$data);
	    if($this->input->post('submit_form')=='Save')
	    {	    
		$this->Procurement_model->UpdateSupplier();
		if($result['return_status']==0){
		$this->session->set_flashdata('status','A Existing record Updated successfully');	
		redirect('procurement/SupplierMaster_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}	
	    }
	}
	function SupplierContact_Delete($ac_code,$name){		
	    $this->Procurement_model->DeleteSupplierContact($ac_code,$name);
	    redirect('procurement/SupplierMaster_Edit/'.$ac_code);
	}
	function DeleteSupplierAttachment($ac_code,$sys){	    
	    $this->Procurement_model->DeleteSupplierAttachment($sys);
	    redirect('procurement/SupplierMaster_Edit/'.$ac_code);
	}
	function SupplierMaster_Delete($ac_code){
	    $this->Procurement_model->DeleteSupplierMaster($ac_code);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect('procurement/SupplierMaster_View');
	    }else{
		$data['error_message']=$result['error_message'];
	    }		
	}
	public function Ajax_SUPL_AC_CODE()
	{		
	    $SUPL_AC_CODE=$this->input->post('SUPL_AC_CODE');	
	    $viewresult=$this->Procurement_model->Ajax_SUPL_AC_CODE($SUPL_AC_CODE);		
	    if($viewresult>0){
		echo json_encode(array('valid'=>'false'));	    
	    }
	    else{
		echo json_encode(array('valid'=>'true'));
	    }
	}	
	//*******************************************4.supplier Master END***************************************************//

	//***********************************************5.Purchase Request Transaction START**********************************//	
	function PurchaseRequestTransaction_View(){
	    $PurchaseRequestTransaction= $this->Procurement_model->getPurchaseRequestTransaction();
	    $data['PurchaseRequestTransaction']=$PurchaseRequestTransaction;
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseRequestTransaction_View',$data);
	}
	function PurchaseRequestTransaction_Add(){	
	    $InviteMTerm=$this->Procurement_model->InviteMTerm();
	    $data['InviteMTerm']=$InviteMTerm;
	    $location=$this->Procurement_model->GetLocation();
	    $data['location']=$location;
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseRequestTransaction_Add',$data);
	    if($this->input->post('add')=='Save')
	    {
		$this->Procurement_model->addpurchaserequest();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record added successfully');	
		    redirect('procurement/PurchaseRequestTransaction_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}			
	    }
	}
	function PurchaseRequestTransaction_Edit($code){
	    $InviteMTerm=$this->Procurement_model->InviteMTerm();
	    $data['InviteMTerm']=$InviteMTerm;	    
	    $result_PurchaseRequest= $this->Procurement_model->getPurchaseRequestRow($code);
	    $data['PurchaseRequest']=$result_PurchaseRequest;	    
	    $result_PurchaseRequestLines= $this->Procurement_model->getPurchaseRequestRowLines($code);
	    $data['PurchaseRequestLines']=$result_PurchaseRequestLines;	    
	    $location=$this->Procurement_model->GetLocation();
	    $data['location']=$location;	    
	    if($this->input->post('update')=='Save')	
	    {
		$this->Procurement_model->updatePurchase();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Existing record Updated successfully');	
		   redirect('procurement/PurchaseRequestTransaction_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}			
	    }	    
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseRequestTransaction_Edit',$data);
	}
	function PurchaseRequestTransaction_Delete($code){
	    $delete_result=$this->Procurement_model->delete_purchase($code);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect('procurement/PurchaseRequestTransaction_View');
	    }else{
		$data['error_message']=$result['error_message'];
	    }		    	
	}
	function PurchaseRequestTransactionLine_Delete($code,$h_code){
	    $delete_result=$this->Procurement_model->DeletePurchaseRequestTransactionLine($code);
	    redirect('procurement/EditPurchaseRequestTransaction/'.$h_code);	
	}
	function GetInvt_M_ItemTable2()
	{
	    $result=$this->Procurement_model->itemCode();
	    $count=count($result);
	    if($count>0){
		foreach($result as $val)	
		echo '{"ITEM_DESC":"'.$val['ITEM_DESC'].'","ITEM_UOM_CODE":"'.$val['ITEM_UOM_CODE'].'"}';	
	    }
	    else{
		echo "error";
	    }
	}     
	//***********************************************5.Purchase Request Transaction END**********************************//	
	
	//**************************************************6.Enquiry DashBoard START********************************************//
	
	function EnquiryBoard_View(){
	   $result_enquiryboard= $this->Procurement_model->getenquiryboard();
	    $data['EnquiryBoard']=$result_enquiryboard;
	    $this->load->view('header');
	    $this->load->view('procurement/EnquiryBoard_View',$data);
	}
	//**************************************************6.Enquiry DashBoard END********************************************//
	
	//******************************************************7.Purchase Enquiry Transaction START******************************//
	function PurchaseEnquiryTransaction_View(){
	    $result_purchase= $this->Procurement_model->getPurchaseEnquiryTransaction();
	    $data['purchase']=$result_purchase;
	    $location=$this->Procurement_model->GetLocation();
	    $data['location']=$location;	
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseEnquiryTransaction_View',$data);
	}	
	function PurchaseEnquiryTransaction_Add()
	{
	    if(isset($_POST['add'])=='Save')
	    {
		$this->Procurement_model->AddPurchaseEnquiryTransaction();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record added successfully');	
		    redirect('procurement/PurchaseEnquiryTransaction_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}		
	    }
	    else
	    {
		$data['location']=$this->Procurement_model->GetINVT_M_Location();
		$data['menu_code']=$this->Procurement_model->GetAppsMenuCode();			
		$data['txn_no']=$this->Procurement_model->TxnNo();
		$data['PullEnquiry']=$this->Procurement_model->PullEnquiry();
		$data['supplier_code']=$this->Procurement_model->SupplierCode();
		//echo "<pre>";
		//print_r($date['PullEnquiry']);
		//echo "</pre>";
		//$date['txn_date']=$this->Procurement_model->TxnDt();
		$this->load->view('header');
		$this->load->view('procurement/PurchaseEnquiryTransaction_Add',$data);
	    }
	}
	function GetPROC_T_ENQ_SUPL(){
        $sup_code=mysql_real_escape_string($_POST["code"]);
        $sql="SELECT * FROM PROC_M_SUPPLIER  where SUPL_AC_CODE='$sup_code'";
        $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        $count=count($query);   
        if($count>0){
            foreach($query as $row)
            
	    echo '{"SUPL_AC_DESC":"'.$row['SUPL_AC_DESC'].'","SUPL_ADD1":"'.$row['SUPL_ADD1'].'","SUPL_ADD2":"'.$row['SUPL_ADD2'].'","SUPL_ADD3":"'.$row['SUPL_ADD3'].'","SUPL_CN_CODE":"'.$row['SUPL_CN_CODE'].'","SUPL_ST_CODE":"'.$row['SUPL_ST_CODE'].'","SUPL_CT_CODE":"'.$row['SUPL_CT_CODE'].'","SUPL_POSTAL":"'.$row['SUPL_POSTAL'].'","SUPL_MOBILE":"'.$row['SUPL_MOBILE'].'","SUPL_PHONE":"'.$row['SUPL_PHONE'].'","SUPL_FAX":"'.$row['SUPL_FAX'].'","SUPL_EMAIL":"'.$row['SUPL_EMAIL'].'","SUPL_PERSON_NAME":"'.$row['SUPL_PERSON_NAME'].'"}';
            }
            else{
                echo "error";
                }
        }
	function PurchaseEnquiryTransaction_Edit($code)
	{
	    if(isset($_POST['update'])=='Save')
	    {
		$this->Procurement_model->UpdatePurchaseEnquiryTransaction();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Existing record Updated successfully');	
		  redirect('procurement/PurchaseEnquiryTransaction_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}			
	    }
	    else{
		$data['head']=$this->Procurement_model->editPurchaseEnquiryTransaction($code);
		$data['line']=$this->Procurement_model->editPurchaseEnquiryLineTransaction($code);
		$data['location']=$this->Procurement_model->GetINVT_M_Location();
		$data['menu_code']=$this->Procurement_model->GetAppsMenuCode();	
		$data['PullEnquiry']=$this->Procurement_model->PullEnquiry();
		$this->load->view('header');
		$this->load->view('procurement/PurchaseEnquiryTransaction_Edit',$data);
	    }
	}	
	function AjaxEnquiryTransaction()
	{	    
	    $code=$this->input->post("code");
	    $result=$this->Procurement_model->AjaxEnquiryTransaction($code[0]);
	    $count=1;
	    foreach($result as $row)
	    {
		?>
		<tr class="odd">
		<input type="hidden" class="" name="PRQL_PRICE[]" value="<?php echo $row['PRQL_PRICE']?>"  >
		<input type="hidden" class="form-control" name="POL_REF_LINE_SYS_ID[]" value="<?php echo $row['PRQL_SYS_ID']?>" >
		<input type="hidden" class="form-control" name="POL_REF_HEAD_SYS_ID[]" value="<?php echo $row['PRQL_PRQH_SYS_ID']?>" >
		<input type="hidden" class="form-control" name="POL_REF_FLOW_SEQ[]" value="<?php echo $row['TXN_FLOW_SEQ']?>" >
		<input type="hidden" class="form-control" name="POL_REF_TXN_CODE[]" value="<?php echo $row['PRQH_TXN_CODE']?>" >
		<input type="hidden" class="form-control" name="POL_REF_TXN_NO[]" value="<?php echo $row['PRQH_TXN_NO']?>" >
		<td><input type="text" class="" name="EQL_LINE[]" value="<?php echo $count;?>" ></td>
		<td><input type="text" class="" name="PRQL_ITEM_CODE[]" value="<?php echo $row['PRQL_ITEM_CODE']?>" readonly ></td>
		<td><input type="text" class="" name="PRQL_ITEM_DESC[]" value="<?php echo $row['PRQL_ITEM_DESC']?>" readonly></td>
		<td><input type="text" class="" name="PRQL_UOM_CODE[]" value="<?php echo $row['PRQL_UOM_CODE']?>" readonly></td>
		<td><input type="text" class="" name="PRQL_QTY[]" value="<?php echo  $row['PRQL_QTY'];?>"></td>
		<td><input type="text" class="" name="EQL_DESC[]"></td>	
		</tr>
		<?php $count++;
	    }
	}	
	function PurchaseEnquiryTrans_Delete($sys_id){		
	    $this->Procurement_model->DeletePurchaseEnquiryTable($sys_id);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect('procurement/PurchaseEnquiryTransaction_View');	
	    }else{
		$data['error_message']=$result['error_message'];
	    }		    
	}		    
	//******************************************************7.Purchase Enquiry Transaction END******************************//
	
	//************************************************8.Purchase Quotation Transaction START********************************//
	function PurchaseQuotationTransaction_View()
	{
	    $PurchaseQuotationTransaction=$this->Procurement_model->getPurchaseQuotationTransaction();
	    $data['PurchaseQuotationTransaction']=$PurchaseQuotationTransaction;
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseQuotationTransaction_View',$data);
	}
	function PurchaseQuotationTransaction_Add()
	{
	    $SupplierAcCode=$this->Procurement_model->ProcShipmentLov();
	    $data['SupplierAcCode']=$SupplierAcCode;	    
	    $country=$this->Apps_model->ViewCountry();
	    $data['country']=$country;	    
	    $PaymentCode=$this->Procurement_model->paymentCode();
	    $data['paymentCode']=$PaymentCode;	    
	    $ShipMentCode=$this->Procurement_model->ShipMentCode();
	    $data['ShipMentCode']=$ShipMentCode;	    
	    $ShipCarrierCode=$this->Procurement_model->ShipCarrierCode();
	    $data['CarrierCode']=$ShipCarrierCode;	    
	    $CurrencyCode=$this->Procurement_model->CurrencyCode();
	    $data['currencyCode']=$CurrencyCode;	    
	    $FrieghtCode=$this->Procurement_model->FrieghtCode();
	    $data['FreightCode']=$FrieghtCode;	    
	    $location=$this->Procurement_model->GetLocation();
	    $data['location']=$location;	    
	    $EqhCode=$this->Procurement_model->FetchEqhCode();
	    $data['result2']=$EqhCode;
	    $TxnNoQTS=$this->Procurement_model->TxnNoQTS();
	    $data['TxnNoQTS']=$TxnNoQTS["txn_no"];	
	    //$data['result2']=$this->Procurement_model->FetchEqhCode();	
	    if($this->input->post('add')=='Save')
	    {
		$this->Procurement_model->AddPurchaseQuotation();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record added successfully');	
		    redirect('procurement/PurchaseQuotationTransaction_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}		
	    }
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseQuotationTransaction_Add',$data);
	}
	function PurchaseQuotationTransaction_Edit($code)
	{
	    $EqhCode=$this->Procurement_model->FetchEqhCode();
	    $data['result2']=$EqhCode;	    
	    $country=$this->Apps_model->ViewCountry();
	    $data['country']=$country;	    
	    $state=$this->Apps_model->ViewState();
	    $data['state']=$state;	    
	    $city=$this->Apps_model->ViewCity();
	    $data['city']=$city;	    
	    $result_PurchaseQuotation= $this->Procurement_model->getPurchaseQuotationRow($code);
	    $data['PurchaseQuotation']=$result_PurchaseQuotation;	    
	    $location=$this->Procurement_model->GetLocation();
	    $data['location']=$location;	    
	    $PaymentCode=$this->Procurement_model->paymentCode();
	    $data['paymentCode']=$PaymentCode;	    
	    $ShipMentCode=$this->Procurement_model->ShipMentCode();
	    $data['ShipMentCode']=$ShipMentCode;	    
	    $ShipCarrierCode=$this->Procurement_model->ShipCarrierCode();
	    $data['CarrierCode']=$ShipCarrierCode;	    
	    $FrieghtCode=$this->Procurement_model->FrieghtCode();
	    $data['FreightCode']=$FrieghtCode;	    
	    $Line_PurchaseQuotation= $this->Procurement_model->getPurchaseQuotationLine($code);
	    $data['PurchaseQuotationLine']=$Line_PurchaseQuotation;	    
	    $Doc_PurchaseQuotation= $this->Procurement_model->getPurchaseQuotationDoc($code);
	    $data['PurchaseQuotationDoc']=$Doc_PurchaseQuotation;	 	
	    if($this->input->post('update')=='Save')
	    {
		$this->Procurement_model->updatePurchaseQuotation($code);
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Existing record Updated successfully');	
		    redirect('procurement/PurchaseQuotationTransaction_View');
		}else{
		    $data['error_message']=$result['error_message'];
		}			
	    }
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseQuotationTransaction_Edit',$data);
	}
	function AjaxQuotationRefer()
	{
	    $code=$_POST['code'];	    
	    $result=$this->Procurement_model->AjaxQuotationValue($code[0]);
	    //echo '<pre>';
	    //print_r($result);
	    //echo '</pre>';
	    //exit();
	    $count=1;
	    foreach($result as $row)
	    {
		//print_r($row);
	    ?>
		<tr  class="odd">
		    <input type="hidden" class="" name="PQL_REF_FLOW_SEQ[]" value="<?php echo $row['PQL_REF_FLOW_SEQ']?>">
		    <input type="hidden" class="" name="PQL_REF_TXN_CODE[]" value="<?php echo $row['PQL_REF_TXN_CODE']?>">
		    <input type="hidden" class="" name="PQL_REF_TXN_NO[]" value="<?php echo $row['PQL_REF_TXN_NO']?>">
		    <input type="hidden" class="" name="PQL_REF_HEAD_SYS_ID[]" value="<?php echo $row['PQL_REF_HEAD_SYS_ID']?>">
		    <input type="hidden" class="" name="PQL_REF_LINE_SYS_ID[]" value="<?php echo $row['PQL_REF_LINE_SYS_ID']?>">
		    <td><span><input readonly="" type="text" class="" name="QUOTATION_LINE[]" value="<?php echo $count;?>" ></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_ITEM_CODE[]" value="<?php echo $row['PQL_ITEM_CODE']?>"></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_ITEM_DESC[]" value="<?php echo $row['PQL_ITEM_DESC']?>"></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_UOM_CODE[]" value="<?php echo $row['PQL_UOM_CODE']?>" ></span></td>
		    <td><span><input type="text" class="" name="PQL_QTY[]" id="Quanty[]" value="<?php echo $row['PQL_QTY']?>" ></span></td>
		    <td><span><input type="text" class="" name="PQL_PRICE[]" id="Price[]"></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_VALUE[]" ></span></td>
		    <td><span><input type="text" class="" name="PQL_DISCOUNT_PCT[]" id="discount_pct" value="" ></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_DISCOUNT_VALUE[]" value="" id="discount_value" ></span></td>
		    <td><span><input type="text" class="" name="PQL_TAX_PCT[]" value="" id="tax_pct" ></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_TAX_VALUE[]" value="" id="tax_value" ></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_GROSS_VALUE[]" value="" id="gross_value" ></span></td>
		    <td><span><input readonly="" type="text" class="" name="PQL_GROSS_VALUE_LC[]" value="" id="gross_value_lc" ></span></td>
		    <td><span><input type="text" class="" name="PQL_DESC[]" value="" id="desc" ></span></td>	
		    <input type="hidden" class=""  value="<?php echo $count++;?>" >
		    <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
		</tr>
	    <?php
	    }	    		    
	}
	function PurchaseQuotation_Delete($code)
	{
	    $delete_result=$this->Procurement_model->delete_purchaseQuotation($code);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect('procurement/PurchaseQuotationTransaction_View');		
	    }else{
		$data['error_message']=$result['error_message'];
	    }		    
	}
	function PurchaseQuotationTransactionDoc_Delete($code,$h_code)
	{
	    $delete_result=$this->Procurement_model->DeletePurchaseRequestTransactionDoc($code);
	    redirect('procurement/PurchaseQuotationTransaction_Edit/'.$h_code);
	}
	function PurchaseQuotationTransactionLine_Delete($code,$h_code)
	{
	    $delete_result=$this->Procurement_model->DeletePurchaseRequestTransactionLine($code);
	    redirect('procurement/PurchaseQuotationTransaction_Edit/'.$h_code);
	}
	function GetSupplierDetails()
	{
	    $result=$this->Procurement_model->SupplierCodeDetails();
	    $currency_code=$result[0]['SUPL_CCY_CODE'];	    
	    $result_exe=$this->Procurement_model->getExchangRate($currency_code);
	    echo '{"SUPL_PAY_TERM_CODE":"'.$result[0]['SUPL_PAY_TERM_CODE'].'","Rate":"'.$result_exe[0]['EXCHANGERATE'].'","Address1":"'.$result[0]['SUPL_ADD1'].'","Address2":"'.$result[0]['SUPL_ADD2'].'","Address3":"'.$result[0]['SUPL_ADD3'].'","Address4":"'.$result[0]['SUPL_ADD4'].'","country":"'.$result[0]['SUPL_CN_CODE'].'","state":"'.$result[0]['SUPL_ST_CODE'].'","city":"'.$result[0]['SUPL_CT_CODE'].'","postal":"'.$result[0]['SUPL_POSTAL'].'","mobile":"'.$result[0]['SUPL_MOBILE'].'","phone":"'.$result[0]['SUPL_PHONE'].'","fax":"'.$result[0]['SUPL_FAX'].'","email":"'.$result[0]['SUPL_EMAIL'].'","PersonCode":"'.$result[0]['SUPL_PERSON_NAME'].'","currency":"'.$result[0]['SUPL_CCY_CODE'].'"}';			     
	}
	//function ViewPurchaseQuotationTransaction(){
	//$this->load->view('header');
	//$this->load->view('procurement/ViewPurchaseQuotationTransaction');
	//}
	//function AddPurchaseQuotationTransaction(){
	//$this->load->view('header');
	//$this->load->view('procurement/AddPurchaseQuotationTransaction');
	//}
	//function EditPurchaseQuotationTransaction(){
	//$this->load->view('header');
	//$this->load->view('procurement/EditPurchaseQuotationTransaction');
	//}	
	//************************************************8.Purchase Quotation Transaction END********************************//

	//*******************************************9.Purchase Order Transaction START******************************************//	
	public function AjaxPurOrdTxnLine()
	{
	    $system_code=$_POST['code'];
	    $result=$this->Procurement_model->AjaxPOTLine($system_code[0]);
	    //print_r($result);
	    //exit;
	     $ExchangeRate=$_POST['exchange'];
	    $count=1;
	    if(count($result)>0){
	    foreach($result as $row)
	    {
	    ?>
		<tr  class="odd">
		    <input type="hidden" class="form-control" name="POL_REF_LINE_SYS_ID[]" value="<?php echo $row['PQL_SYS_ID']?>" >
		    <input type="hidden" class="form-control" name="POL_REF_HEAD_SYS_ID[]" value="<?php echo $row['PQL_PQH_SYS_ID']?>" >
		    <input type="hidden" class="form-control" name="POL_REF_FLOW_SEQ[]" value="<?php echo $row['PQL_REF_FLOW_SEQ']?>" >	   
		    <td><span><input type="text" class="" name="POL_LINE[]" value="<?php echo $count;?>" ></span></td>
		    <!--<td><span>  <input type="text" class="form-control" name="mil_txn_flow_seq[]" value="<?php //echo $row[' PQL_PQH_SYS_ID ']?>" ></span></td>-->
		    <td><span> <input type="text" class="" name="POL_REF_TXN_CODE[]" value="<?php echo $row['PQH_TXN_CODE']?> " readonly ></span></td>
		    <td><span>   <input type="text" class="" name="POL_REF_TXN_NO[]" value="<?php echo $row['PQH_TXN_NO']?>" readonly></span></td>
		    <td><span> <input type="text" class="" name="POL_ITEM_CODE[]" value="<?php echo $row['PQL_ITEM_CODE']?>" readonly></span></td>		    
		    <td><span> <input type="text" class="" name="POL_ITEM_DESC[]" value="<?php echo $row['PQL_ITEM_DESC']?>" readonly ></span></td>		    
		    <td><span><input type="text" class="" name="POL_UOM_CODE[]" value="<?php echo  $row['PQL_UOM_CODE'];?>"  readonly></span></td>
		    <td><span><input type="text" class="" name="POL_QTY[]" value="<?php echo $row['PQL_QTY']?>" ></span></td>
		    <input type="hidden" class="" name=" POL_QTY_BU[]" value="<?php echo $row['PQL_QTY']?>"  >
		    <td><span><input type="text" class="" name="POL_PRICE[]" value="<?php echo $row['PQL_PRICE']?>" ></span></td>
		    <td><span><input type="text" class="" name="POL_VALUE[]" value="<?php echo $row['PQL_QTY']*$row['PQL_PRICE'];?>" ></span></td>
		    <td><span><input type="text" class="" name="POL_DISCOUNT_PCT[]" value="<?php echo$row['PQL_DISCOUNT_PCT'];?>"></span></td>
		    <td><span><input type="text" class="" name="POL_DISCOUNT_VALUE[]" value="<?php echo $row['PQL_DISCOUNT_PCT']*($row['PQL_PRICE']*$row['PQL_QTY'])/100;?>" ></span></td>
		    <td><span><input type="text" class="" name="POL_TAX_PCT[]"  value="<?php echo $row['PQL_TAX_PCT'];?>" ></span></td>
		    <td><span><input type="text" class="" name="POL_TAX_VALUE[]" value="<?php  if( ($row['PQL_TAX_PCT']>0) && ($row['PQL_QTY']*$row['PQL_PRICE'])>0)echo ($row['PQL_TAX_PCT']*($row['PQL_QTY']*$row['PQL_PRICE'])/100) ;?>" ></span></td>
		    <td><span><input type="text" class="" name="POL_GROSS_VALUE[]" value="<?php echo ($row['PQL_QTY']*$row['PQL_PRICE'])-($row['PQL_DISCOUNT_PCT']*($row['PQL_PRICE']*$row['PQL_QTY'])/100)+(($row['PQL_TAX_PCT']*($row['PQL_QTY']*$row['PQL_PRICE'])/100));?>"></span></td>
		    <td><span><input type="text" class="" name="POL_GROSS_VALUE_LC[]" value="<?php echo ($row['PQL_QTY']*$row['PQL_PRICE'])-($row['PQL_DISCOUNT_PCT']*($row['PQL_PRICE']*$row['PQL_QTY'])/100)+(($row['PQL_TAX_PCT']*($row['PQL_QTY']*$row['PQL_PRICE'])/100))*$ExchangeRate;?>" ></span></td>
		    <td><span><input type="text" class="" name="POL_DESC[]"></span></td>
		    <input type="hidden" class="form-control" name="POL_QTY_RECEIVED[]"  >
		    <input type="hidden" class="form-control" name="row_count"  value="<?php echo $count?>" >
		    <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
		</tr>
	    <?php
		$count++;
	    }
	    }
	}	
	function AjaxPurOrdTxnHead()
	{
	    header('Content-Type: application/json');
	    $system_code=$_POST['code'];
	    //$sql="SELECT PQH_SUPL_AC_CODE, PQH_SUPL_ADD1, PQH_SUPL_ADD2, PQH_SUPL_ADD4, PQH_SUPL_CN_CODE, PQH_SUPL_ST_CODE, .PQH_SUPL_CT_CODE, PQH_SUPL_POSTAL,PQH_SUPL_MOBILE,PQH_SUPL_AC_CODE, PQL_PRICE, (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))PQL_QTY,PQL_DISCOUNT_PCT, PQL_TAX_PCT FROM PROC_T_QUOTE_LINES, PROC_T_QUOTE_HEAD, APPS_TXN_SETUP WHERE PQH_TXN_CODE = TXN_CODE AND PQL_PQH_SYS_ID = PQH_SYS_ID AND PQL_PQH_SYS_ID IN( '$system_code') AND (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))>0";
	    $sql="SELECT * FROM PROC_T_QUOTE_LINES, PROC_T_QUOTE_HEAD, APPS_TXN_SETUP WHERE PQH_TXN_CODE = TXN_CODE AND PQL_PQH_SYS_ID = PQH_SYS_ID AND PQL_PQH_SYS_ID IN( '$system_code[0]') AND (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))>0";	
	    //$sql="SELECT PQH_SUPL_AC_CODE, PQH_SUPL_ADD1, PQH_SUPL_ADD2, PQH_SUPL_ADD4, PQH_SUPL_CN_CODE, PQH_SUPL_ST_CODE, PQH_SUPL_CT_CODE, PQH_SUPL_POSTAL,PQH_SUPL_MOBILE,PQH_SUPL_FAX,PQH_SUPL_EMAIL,PQH_SUPL_PERSON_NAME,PQH_DLV_DT,PQH_DLV_LOCN_CODE,PQH_PT_CODE,PQH_SHIP_CODE,PQH_CARRIER_CODE,PQH_FREIGHT_CODE,PQH_CCY_CODE,PQH_EXC_RATE FROM PROC_T_QUOTE_HEAD WHERE PQH_COMP_CODE = '001' AND NVL(PQH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM PROC_T_QUOTE_LINES WHERE PQH_SYS_ID  = '$system_code[0]' AND (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))>0)";
	    $data= $this->db->query($sql)->result_array();
	    // print_r($val);
	    //foreach($data as $val)
	    //echo '{"PQH_SUPL_ADD11":"'.$val['PQH_SUPL_ADD1'].'","PQH_SUPL_ADD12":"'.$val['PQH_SUPL_ADD2'].'"}';
	    //echo '{"PQH_SUPL_AC_CODE":"'.$val['PQH_SUPL_AC_CODE'].'","PQH_SUPL_ADD1":"'.$val['PQH_SUPL_ADD1'].'","PQH_SUPL_ADD2":"'.$val['PQH_SUPL_ADD2'].'","PQH_SUPL_ADD3":"'.$val['PQH_SUPL_ADD3'].'","PQH_SUPL_ADD4":"'.$val['PQH_SUPL_ADD4'].'","PQH_SUPL_CN_CODE":"'.$val['PQH_SUPL_CN_CODE'].'","PQH_SUPL_POSTAL":"'.$val['PQH_SUPL_POSTAL'].'","PQH_SUPL_ST_CODE":"'.$val['PQH_SUPL_ST_CODE'].'","PQH_SUPL_CT_CODE":"'.$val['PQH_SUPL_CT_CODE'].'","PQH_SUPL_MOBILE":"'.$val['PQH_SUPL_MOBILE'].'","PQH_SUPL_FAX":"'.$val['PQH_SUPL_FAX'].'","PQH_SUPL_POSTAL":"'.$val['PQH_SUPL_POSTAL'].'","PQH_SUPL_EMAIL":"'.$val['PQH_SUPL_EMAIL'].'","PQH_SUPL_PERSON_NAME":"'.$val['PQH_SUPL_PERSON_NAME'].'","PQH_DLV_DT":"'.$val['PQH_DLV_DT'].'","PQH_DLV_LOCN_CODE":"'.$val['PQH_DLV_LOCN_CODE'].'","PQH_PT_CODE":"'.$val['PQH_PT_CODE'].'","PQH_SHIP_CODE":"'.$val['PQH_SHIP_CODE'].'","PQH_CARRIER_CODE":"'.$val['PQH_CARRIER_CODE'].'","PQH_FREIGHT_CODE":"'.$val['PQH_FREIGHT_CODE'].'","PQH_CCY_CODE":"'.$val['PQH_CCY_CODE'].'","PQH_EXC_RATE":"'.$val['PQH_EXC_RATE'].'"}';  
	    echo json_encode($data);	    
	}	
	function PurchaseOrderTransaction_View()
	{
	    $session_data = $this->session->userdata('USER_ID');
	    if($session_data)
	    {	    
		$result['view']=$this->Procurement_model->ViewPurchaseOrderTransaction();	    
		$this->load->view('header');
		$this->load->view('procurement/PurchaseOrderTransaction_View',$result);        
	    }
	    else
	    {
		redirect(base_url()."Apps",'refresh');
	    }       
	}
	function PurchaseOrderTransaction_Add()
	{
	    if(isset($_POST['add'])=='Save')
	    {
		    $result['view']=$this->Procurement_model->AddPurchaseOrderTransaction();
		    if($result['return_status']==0){
			$this->session->set_flashdata('status','A New record added successfully');	
			redirect(base_url("Procurement/PurchaseOrderTransaction_View"));
		    }else{
			$data['error_message']=$result['error_message'];
		    }			    
	    }
	    $SupplierAcCode=$this->Procurement_model->ProcShipmentLov();
	    $viewresult['SupplierAcCode']=$SupplierAcCode;
	    $PaymentCode=$this->Procurement_model->paymentCode();
	    $viewresult['paymentCode']=$PaymentCode;	    
	    $ShipMentCode=$this->Procurement_model->ShipMentCode();
	    $viewresult['ShipMentCode']=$ShipMentCode;	    
	    $ShipCarrierCode=$this->Procurement_model->ShipCarrierCode();
	    $viewresult['CarrierCode']=$ShipCarrierCode;	    
	    $CurrencyCode=$this->Procurement_model->CurrencyCode();
	    $viewresult['currencyCode']=$CurrencyCode;	    
	    $FrieghtCode=$this->Procurement_model->FrieghtCode();
	    $viewresult['FreightCode']=$FrieghtCode;	    
	    $location=$this->Procurement_model->GetLocation();
	    $viewresult['location']=$location;
	    $viewresult['result']=$this->Procurement_model->GetTxnCode();	    
	    $viewresult['result2']=$this->Procurement_model->FetchPOTRqh();
	    $viewresult['result3']=$this->Procurement_model->FetchCity();
	    $viewresult['result4']=$this->Procurement_model->FetchState();
	    $viewresult['result5']=$this->Procurement_model->FetchCountry();		    	
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseOrderTransaction_Add',$viewresult);
	}	
	function PurchaseOrderTransaction_Edit($sysid)
	{
	    if(isset($_POST['Update'])=='Save')
	    {
		$result['view']=$this->Procurement_model->EditPurchaseOrderTransaction($sysid);
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A Existing record Updated successfully');	
		  redirect(base_url("Procurement/PurchaseOrderTransaction_View"));
		}else{
		    $data['error_message']=$result['error_message'];
		}		
	    }	    
	    $viewresult['result']=$this->Procurement_model->GetTxnCode();
	    $viewresult['result2']=$this->Procurement_model->FetchPOTRqh();
	    $viewresult['result3']=$this->Procurement_model->FetchCity();
	    $viewresult['result4']=$this->Procurement_model->FetchState();
	    $viewresult['result5']=$this->Procurement_model->FetchCountry();
	    $viewresult['GetPurOrdTxn']=$this->Procurement_model->GetPurOrdTxn($sysid);
	    $viewresult['GetPurOrdTxnLine']=$this->Procurement_model->GetPurOrdTxnLine($sysid);
	    $viewresult['GetPurOrdTxnDoc']=$this->Procurement_model->GetPurOrdTxnDoc($sysid);	    	    	 
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseOrderTransaction_Edit',$viewresult);
	}
	function PurchaseOrderAttachment(){
	    $this->load->view('header');
	    $this->load->view('procurement/PurchaseOrderAttachment');
	}		
	function PurchaseOrderTransaction_Delete($sysid)
	{
	    $this->Procurement_model->DeletePurchaseOrderTransaction($sysid);
	    if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect(base_url("Procurement/PurchaseOrderTransaction_View"));
	    }else{
		$data['error_message']=$result['error_message'];
	    }			    
	}	
	function PurchaseOrderTransactionLines_Delete($LineSys_id)
	{
	    $this->Procurement_model->DeletePurchaseOrderTransactionLines($LineSys_id);
	    redirect(base_url("Procurement/PurchaseOrderTransaction_View"));
	}
	
	function PurchaseOrderTransactionDoc_Delete($DocSys_id)
	{
	    $this->Procurement_model->DeletePurchaseOrderTransactionDoc($DocSys_id);
	    redirect(base_url("Procurement/PurchaseOrderTransaction_View"));
	}		    
	//*******************************************9.Purchase Order Transaction END******************************************//
	
	//*******************************************10.Shipment Advise Transaction START*****************************************//
	function AjaxShipmentAdvicePullingHead()
	{
	    header('Content-Type: application/json');
	    $system_id=$_POST['code'];
	    $sql="SELECT * FROM PROC_T_PO_LINES, PROC_T_PO_HEAD, APPS_TXN_SETUP WHERE POH_TXN_CODE = TXN_CODE AND POL_POH_SYS_ID = POH_SYS_ID AND POL_POH_SYS_ID IN($system_id[0]) AND (NVL(POL_QTY,0) - NVL(POL_QTY_SHIPPED,0))>0";	    
	    $return = $this->db->query($sql, $return_object = TRUE)->result_array();
	    echo json_encode($return);
	}
	function AjaxShipmentAdvicePulling()
	{
	    $code=$this->input->post('code');
	    $result=$this->Procurement_model->AjaxShipmentAdvicePulling($code[0]);
	    $ExchangeRate=$_POST['exchange'];
	    $count=1;
	    foreach($result as $row)
	    {  ?>
		<tr  class="odd">
		    <input type="hidden" class="form-control" name="SAL_REF_LINE_SYS_ID[]" value="<?php echo $row['POL_SYS_ID']?>" >
		    <input type="hidden" class="form-control" name="SAL_REF_HEAD_SYS_ID[]" value="<?php echo $row['POL_POH_SYS_ID']?>" >
		    <input type="hidden" class="form-control" name="SAL_REF_FLOW_SEQ[]" value="<?php echo $row['POL_REF_FLOW_SEQ']?>" >	   
		    <td><span><input type="text" class="" name="SAL_LINE[]" value="<?php echo $count;?>" ></span></td>
		    <!--<td><span>  <input type="text" class="form-control" name="mil_txn_flow_seq[]" value="<?php //echo $row[' POL_PQH_SYS_ID ']?>" ></span></td>-->
		    <td><span> <input type="text" class="" name="SAL_REF_TXN_CODE[]" value="<?php echo $row['POH_TXN_CODE']?> " readonly ></span></td>
		    <td><span>   <input type="text" class="" name="SAL_REF_TXN_NO[]" value="<?php echo $row['POH_TXN_NO']?>" readonly></span></td>
		    <td><span> <input type="text" class="" name="SAL_ITEM_CODE[]" value="<?php echo $row['POL_ITEM_CODE']?>" readonly></span></td>	  
		    <td><span> <input type="text" class="" name="SAL_ITEM_DESC[]" value="<?php echo $row['POL_ITEM_DESC']?>" readonly ></span></td>	   
		    <td><span><input type="text" class="" name="SAL_UOM_CODE[]" value="<?php echo  $row['POL_UOM_CODE'];?>"  readonly></span></td>
		    <td><span><input type="text" class="" name="SAL_QTY[]" value="<?php echo $row['POL_QTY']?>" ></span></td>
		    <input type="hidden" class="" name="SAL_QTY_BU[]" value="<?php echo $row['POL_QTY']?>"  >
		    <td><span><input type="text" class="" name="SAL_PRICE[]" value="<?php echo $row['POL_PRICE']?>" ></span></td>
		    <td><span><input type="text" class="" name="SAL_VALUE[]" value="<?php echo $row['POL_QTY']*$row['POL_PRICE'];?>" ></span></td>
		    <td><span><input type="text" class="" name="SAL_DISCOUNT_PCT[]" value="<?php echo$row['POL_DISCOUNT_PCT'];?>"></span></td>
		    <td><span><input type="text" class="" name="SAL_DISCOUNT_VALUE[]" value="<?php echo $row['POL_DISCOUNT_PCT']*($row['POL_PRICE']*$row['POL_QTY'])/100;?>" ></span></td>
		    <td><span><input type="text" class="" name="SAL_TAX_PCT[]"  value="<?php echo $row['POL_TAX_PCT'];?>" ></span></td>
		    <td><span><input type="text" class="" name="SAL_TAX_VALUE[]" value="<?php  if( ($row['POL_TAX_PCT']>0) && ($row['POL_QTY']*$row['POL_PRICE'])>0)echo ($row['POL_TAX_PCT']*($row['POL_QTY']*$row['POL_PRICE'])/100) ;?>" ></span></td>
		    <td><span><input type="text" class="" name="SAL_GROSS_VALUE[]" value="<?php echo ($row['POL_QTY']*$row['POL_PRICE'])-($row['POL_DISCOUNT_PCT']*($row['POL_PRICE']*$row['POL_QTY'])/100)+(($row['POL_TAX_PCT']*($row['POL_QTY']*$row['POL_PRICE'])/100));?>"></span></td>
		    <td><span><input type="text" class="" name="SAL_GROSS_VALUE_LC[]" value="<?php echo ($row['POL_QTY']*$row['POL_PRICE'])-($row['POL_DISCOUNT_PCT']*($row['POL_PRICE']*$row['POL_QTY'])/100)+(($row['POL_TAX_PCT']*($row['POL_QTY']*$row['POL_PRICE'])/100))*$ExchangeRate;?>" ></span></td>
		    <td><span><input type="text" class="" name="SAL_DESC[]"></span></td>
		    <input type="hidden" class="form-control" name="SAL_QTY_RECEIVED[]"  >
		    <input type="hidden" class="form-control" name="row_count"  value="<?php echo $count?>" >
		    <td><button type="button" class="btn btn-remove btn-danger btn-sm removeButton" data-template="textbox" >Remove</button></td>
		</tr>
	    <?php
	    $count++;
	    }	
	}	
	function ShipmentAdviceTransaction_View(){
	    $result_shipmentadvice= $this->Procurement_model->getShipmentAdvice();
	    $data['shipmentadvice']=$result_shipmentadvice;	    
	    $this->load->view('header');
	    $this->load->view('procurement/ShipmentAdviceTransaction_View',$data);
	}	    
	//ADD SHIPMENT ADVICE TRANACTION		
	function ShipmentAdviceTransaction_Add()
	{
	    if($this->input->post('add')=='Save')
	    {
		$this->Procurement_model->addshipmentadvice();
		if($result['return_status']==0){
		    $this->session->set_flashdata('status','A New record added successfully');	
		    redirect( base_url("Procurement/ShipmentAdviceTransaction_View"));
		}else{
		    $data['error_message']=$result['error_message'];
		}						
	    }		
	    $data['result3']=$this->Procurement_model->FetchCity();
	    $data['result4']=$this->Procurement_model->FetchState();
	    $data['result5']=$this->Procurement_model->FetchCountry();		
	    $location=$this->Procurement_model->GetINVT_M_Location();
	    $data['location']=$location;
	    $data['pulling']= $this->Procurement_model->ShipmentAdvicePulling();
	    $data['shipmentadvice']= $this->Procurement_model->getShipmentAdvice();	    
	    $this->load->view('header');
	    $this->load->view('procurement/ShipmentAdviceTransaction_Add',$data);
	}			
	function ShipmentAdviceTransaction_Edit($sysid)
	{
	    if(isset($_POST['Update'])=='Save')
		{
		    $result['view']=$this->Procurement_model->EditShipmentAdviceTransaction($sysid);
		    if($result['return_status']==0){
			$this->session->set_flashdata('status','A Existing record Updated successfully');	
			redirect(base_url("Procurement/ShipmentAdviceTransaction_View"));
		    }else{
			$data['error_message']=$result['error_message'];
		    }		   
		}		
	    $data['result3']=$this->Procurement_model->FetchCity();
	    $data['result4']=$this->Procurement_model->FetchState();
	    $data['result5']=$this->Procurement_model->FetchCountry();		
	    $location=$this->Procurement_model->GetINVT_M_Location();
	    $data['location']=$location;
	    $data['pulling']= $this->Procurement_model->ShipmentAdvicePulling();
	    $data['shipmentadvice']= $this->Procurement_model->getShipmentAdvice();		
	    $data['GetShipAdjTxn']=$this->Procurement_model->GetShipAdjTxn($sysid);
	    $data['GetShipAdjTxnLine']=$this->Procurement_model->GetShipAdjTxnLine($sysid);
	    $data['GetShipAdjTxnDoc']=$this->Procurement_model->GetShipAdjTxnDoc($sysid);		
	    $this->load->view('header');
	    $this->load->view('procurement/ShipmentAdviceTransaction_Edit',$data);
	}	
	//Delete Shipment Advice Transaction
	function ShipmentAdviceTransaction_Delete($sysid)
	{
	    $this->Procurement_model->DeleteShipmentAdviceTransaction($sysid);
	     if($result['return_status']==0){
		$this->session->set_flashdata('status','A record is deleted successfully');
		redirect(base_url("Procurement/ShipmentAdviceTransaction_View"));
	    }else{
		$data['error_message']=$result['error_message'];
	    }		
	    
	}
	
	function ShipmentAdviceTransactionLines_Delete($LineSys_id)
	{
	    $this->Procurement_model->DeleteShipmentAdviceTransactionLines($LineSys_id);
	    redirect(base_url("Procurement/ShipmentAdviceTransaction_View"));
	}
	function ShipmentAdviceTransactionDocs_Delete($DocsSys_id)
	{
	    $this->Procurement_model->DeleteShipmentAdviceTransactionDocs($DocsSys_id);
	    redirect(base_url("Procurement/ShipmentAdviceTransaction_View"));
	}
	//*******************************************10.Shipment Advise Transaction END******************************************//	
	
	//******************************************AJAX TO TAKE COUNTRY STATE AND CITY START************************************//
	function ViewCountry(){	
	    $this -> load -> view('header');
	    $this -> load -> view('country_master_view');
	    //if ($this->input->post('proceed')=='yes') {
	    // $result= $this->mapp->addCountry();
	    // $data['message'] = $result;
	    //}
	}
	function ajaxstate()
	{	
	    $country_code=mysql_real_escape_string($_POST["cn_code"]);
	    $sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$country_code' ";
	    $query = $this->db->query($sql, $return_object = TRUE)->result_array();
	?>
	    <option value="">SUPL_ST_CODE</option>
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
	    <option value="">SUPL_CT_CODE</option>
	    <?php
		foreach($query as $row)
		{
	    ?>
	    <option value="<?php echo $row['CT_CODE'] ?>"><?php echo $row['CT_DESC']?></option> 
	    <?php
	    }	
	}
	//******************************************AJAX TO TAKE COUNTRY STATE AND CITY END************************************//
	
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
	private function set_upload_options() //  upload an image options
	{   	
	    $config = array();
	    $config['upload_path'] = 'upload/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;		
	    return $config;
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
	
	////NEED OR NOT
	function ViewSupplierNewContact(){
	$this->load->view('header');
	$this->load->view('procurement/SupplierNewContact');
	}
	
	function SupplierNewAttachment(){
	$this->load->view('header');
	$this->load->view('procurement/SupplierNewAttachment');
	}
	function PurchaseAttachment(){
	$this->load->view('header');
	$this->load->view('procurement/PurchaseAttachment');
	}
	////NEED OR NOT
    }