<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManufacturingController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ManufacturingModel');
        $this->load->model('Apps_model');
    }
       
//**********************************************1.Product Bill Of Material Start (Document Number MN001)****************************************************\\
//Author: Selvakumar S
//Functionality By: Selvakumar S
//Created on: 04/03/15
//Modified on: 24/03/15

    function ProductBillMaterial_View()
    {
        $this->load->view('header');
        $data['value']=$this->ManufacturingModel->GetProductBillTable();        
        $this->load->view('Manufacturing/ProductBillMaterial_View',$data);
    }
    
    function GetTctCode()
    {
        $item_code=mysql_real_escape_string($_POST["item_code_data"]);
        $sql="SELECT sum(BL_CYCLE_TIME) FROM MNFG_M_BOM_LINES  where BL_BH_CODE='$item_code'";
        $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        $count=count($query);   
        if($count>0)
        {
            foreach($query as $tct)
            echo $tct['SUM(BL_CYCLE_TIME)'];
        }
        else
        {
            echo "error";
        }
    }
    
    function ProductBillMaterial_Add()
    {
        if(isset($_POST['save']))
        {
            $result=$this->ManufacturingModel->ProductBillAdd();
	    if($result['return_status']==0)
            {
                $this->session->set_flashdata('status','A new record is added successfully');
		redirect('ManufacturingController/ProductBillMaterial_View');
            }
            else
            {
                $data['error_message']=$result['error_message'];
            }
        }
        else
        {
            $data['itemsrc']=$this->ManufacturingModel->GetAppsValueSetLinesTableItem();
            $data['variable']=$this->ManufacturingModel->GetAppsValueSetLinesTableVar();
            $data['process']=$this->ManufacturingModel->GetAppsValueSetLinesTablePro();
            $data['cycle']=$this->ManufacturingModel->GetAppsValueSetLinesTableCycle();
            $data['code']=$this->ManufacturingModel->GetINVT_M_ITEM();
            $data['item']=$this->ManufacturingModel->GetINVT_M_ITEM2();
            $data['uom']=$this->ManufacturingModel->GetINVT_M_ITEM_UOM();
            $data['location']=$this->ManufacturingModel->GetINVT_M_Location();
            $this->load->view('header');
            $this->load->view('Manufacturing/ProductBillMaterial_Add',$data);            
        }   
    }

    function ProductBillMaterial_Edit($id)
    {
        if(isset($_POST['save']))
        {
            $result=$this->ManufacturingModel->ProductBillUpdate();
	    $result=$this->ManufacturingModel->ProductBillAddLines();
            if($result['return_status']==0)
            {
                $this->session->set_flashdata('status','A new record is Updated successfully');
                redirect('ManufacturingController/ProductBillMaterial_View');
            }
            else
            {
                $data['error_message']=$result['error_message'];
            }
        }
        else
        {
            $this->load->view('header');
	    
            $data['itemsrc']=$this->ManufacturingModel->GetAppsValueSetLinesTableItem();
            $data['variable']=$this->ManufacturingModel->GetAppsValueSetLinesTableVar();
            $data['process']=$this->ManufacturingModel->GetAppsValueSetLinesTablePro();
            $data['cycle']=$this->ManufacturingModel->GetAppsValueSetLinesTableCycle();
            $data['code']=$this->ManufacturingModel->GetINVT_M_ITEM();
            $data['item']=$this->ManufacturingModel->GetINVT_M_ITEM2();
            $data['uom']=$this->ManufacturingModel->GetINVT_M_ITEM_UOM();
            $data['location']=$this->ManufacturingModel->GetINVT_M_Location();                
            $data['value']=$this->ManufacturingModel->EditProductBill($id);
            $data['line']=$this->ManufacturingModel->EditProductBill2($id);            
            $this->load->view('Manufacturing/ProductBillMaterial_Edit',$data);
        }
    }
    
    function productBillHead_Delete($bh_code)
    {
        $result=$this->ManufacturingModel->productBillHeadDelete($bh_code);
        redirect('ManufacturingController/ProductBillMaterial_View');
    }
    
    function productBillLine_Delete($bl_bh_code,$bl_item_code)
    {
        $result=$this->ManufacturingModel->productBillLine_Delete($bl_bh_code,$bl_item_code);
        redirect('ManufacturingController/ProductBillMaterial_Edit/'.$bl_bh_code);
    }    
    
    function GetInvt_M_ItemTable()
    {
        $bhcode=mysql_real_escape_string($_POST["pro_code"]);
        $sql="SELECT * FROM INVT_M_ITEM  where ITEM_CODE='$bhcode'";
        $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        $count=count($query);   
        if($count>0)
        {
            foreach($query as $row)
            echo $row['ITEM_DESC'];
        }
        else
        {
            echo "error";
        }
    }
        
    function GetInvt_M_ItemTable2(){
        $item_code=mysql_real_escape_string($_POST["item_code_data"]);
        $sql="SELECT * FROM INVT_M_ITEM  where ITEM_CODE='$item_code'";
        $data = $this->db->query($sql, $return_object = TRUE)->result_array();
        $count=count($data);
        if($count>0)
        {
            foreach($data as $val)
            echo '{"ITEM_DESC":"'.$val['ITEM_DESC'].'","ITEM_UOM_CODE":"'.$val['ITEM_UOM_CODE'].'"}';
        }
        else
        {
            echo "error";
        }
    }
    function AjaxProductCode()
    {
        header('Content-Type: application/json');
        $pro_code=$this->input->post('pro_code');
        $sql="SELECT COUNT(BH_CODE) FROM MNFG_M_BOM_HEAD WHERE BH_CODE='$pro_code'";
        $query = $this->db->query($sql)->result_array();
        if($query[0]['COUNT(BH_CODE)']==0)
        {
            echo json_encode(array('valid'=>'true'));
        }
        else
        {
            echo json_encode(array('valid'=>'false'));
        }
    }    
//************************************************1.Product Bill Of Material End (Document Number MN001)****************************************************\\
    
    
    
//*************************************************2.Production Terminal Start (Document Number MN002)*******************************************************\\
//Author: Selvakumar S
//Functionality By: Selvakumar S
//Created on: 04/03/15
//Modified on: 24/03/15

    function ProductionTerminal_View()
    {
        $this->load->view('header');
        $data['value']=$this->ManufacturingModel->GetProductionTerminalTable();
        $data['code']=$this->ManufacturingModel->GetINVT_M_ITEM();
        $this->load->view('Manufacturing/ProductionTerminal_View',$data);
    }
    
    function ProductionTerminal_Add()
    {
        if(isset($_POST['save']))
        {
            $result=$this->ManufacturingModel->AddProductTerminalTable();
            if($result['return_status']==0)
            {
                $this->session->set_flashdata('status','A new record is Added successfully');
                redirect('ManufacturingController/ProductionTerminal_View');
            }
            else
            {
                $data['error_message']=$result['error_message'];
            }           
        }
        else
        {
            $this->load->view('header');
            $data['pro']=$this->ManufacturingModel->GetAppsValueSetLineTable();
            $data['code']=$this->ManufacturingModel->GetINVT_M_ITEM();
            $this->load->view('Manufacturing/ProductionTerminal_Add',$data);
        }
    }
    
    function ProductionTerminal_Edit($code)
    {
        if(isset($_POST['save']))
        {
            $result=$this->ManufacturingModel->UpdateProduct();
            if($result['return_status']==0)
            {
                $this->session->set_flashdata('status','A new record is Updated successfully');
                redirect('ManufacturingController/ProductionTerminal_View');
            }
            else
            {
                $data['error_message']=$result['error_message'];
            }             
        }
        else
        {
            $data['pro']=$this->ManufacturingModel->GetAppsValueSetLineTable();        
            $data['code']=$this->ManufacturingModel->GetINVT_M_ITEM();
            $data['product']=$this->ManufacturingModel->EditProductTerminalTable($code);
            $this->load->view('header');
            $this->load->view('Manufacturing/ProductionTerminal_Edit',$data);
        }
    }
    
    function ProductionTerminalProduct_Delete($code)
    {
        $result=$this->ManufacturingModel->ProductionTerminalProduct_Delete($code);
        redirect('ManufacturingController/ProductionTerminal_View');
    }
//***************************************************2.Production Terminal End (Document Number MN002)*******************************************************\\
    
    
    
//**************************************************3.Production Resource Start (Document Number MN003)********************************************************\\
//Author: Selvakumar S
//Functionality By: Selvakumar S
//Created on: 04/03/15
//Modified on: 24/03/15

    function ProductionResource_View()
    {
        $this->load->view('header');
        $data['value']=$this->ManufacturingModel->GetProductionResourceTable();        
        $this->load->view('Manufacturing/ProductionResource_View',$data);     
    }
    
    function ProductionResource_Add()
    {
        if(isset($_POST['save']))
        {
            $result=$this->ManufacturingModel->AddProductionResource();
            if($result['return_status']==0)
            {
                $this->session->set_flashdata('status','A new record is Added successfully');
                redirect('ManufacturingController/ProductionResource_View');
            }
            else
            {
                $data['error_message']=$result['error_message'];
            }
        }
        else
        {
            $data['value']=$this->ManufacturingModel->GetAppsValueSetLineRole();
            $data['national']=$this->ManufacturingModel->GetAppsValueSetLineNat();
            $data['manager']=$this->ManufacturingModel->GetManufactureMResource();
            $this->load->view('header');
            $this->load->view('Manufacturing/ProductionResource_Add',$data);
        }
    }

    function ProductionResource_Edit($id)
    {
        if(isset($_POST['save']))
        {
            $result=$this->ManufacturingModel->ProductResourceUpdate();
            if($result['return_status']==0)
            {
                $this->session->set_flashdata('status','A new record is Updated successfully');
                redirect('ManufacturingController/ProductionResource_View');
            }
            else
            {
                $data['error_message']=$result['error_message'];
            }
        }
        else
        {
            $data['value']=$this->ManufacturingModel->GetAppsValueSetLineRole();
            $data['national']=$this->ManufacturingModel->GetAppsValueSetLineNat();
            $data['manager']=$this->ManufacturingModel->GetManufactureMResource();
            $data['getresource']=$this->ManufacturingModel->EditProResource($id);
            $this->load-> view('header');
            $this->load-> view('Manufacturing/ProductionResource_Edit',$data);
        }
    }
    
    function ProductResource_Delete($id)
    {
        $this->ManufacturingModel->ProductResource_Delete($id);
        redirect('ManufacturingController/ProductionResource_View');
    }
    
    function AjaxResourceCode()
    {
        header('Content-Type: application/json');
        $rs_code=$this->input->post('rs_code');
        $sql="SELECT COUNT(RS_CODE) FROM MNFG_M_RESOURCE WHERE RS_CODE='$rs_code'";
        $query = $this->db->query($sql)->result_array();
        if($query[0]['COUNT(RS_CODE)']==0)
        {
            echo json_encode(array('valid'=>'true'));
        }
        else
        {
            echo json_encode(array('valid'=>'false'));
        }
    }    
    
//**************************************************3.Production Resource Start (Document Number MN003)********************************************************\\
 

   
//***************************************************4.Production Staging Start (Document Number MN004)********************************************************\\
//Author: Selvakumar S
//Functionality By: Selvakumar S
//Created on: 04/03/15
//Modified on: 24/03/15

    function ProductionStaging()
    {
        $this->load->view('header');
        $this->load->view('Manufacturing/ProductionStaging');
    }
    
    function AjaxGetProductHead()
    {
        $emp_code=mysql_real_escape_string($_POST["employee_code"]);
        $data=$this->ManufacturingModel->FetchProductionStaging($emp_code);
        echo json_encode($data);
    }
    
    
    function AjaxGetProductline()
    {
        $code=mysql_real_escape_string($_POST["employee_code"]);
        $sql="SELECT * FROM MNFG_T_PROD_LINES WHERE PL_PH_SYS_ID ='$code'";
        $data["product"] = $this->db->query($sql, $return_object = TRUE)->result_array();
        $this->load->view('Manufacturing/ProductionStaging_Ajax',$data);
    }
    
    function AjaxGetProductlineupdate()
    {
        $PL_SYS_ID=mysql_real_escape_string($_POST["SYSID"]);
        $active=mysql_real_escape_string($_POST["active"]);
        
        if($active=="Y")
        {
             $active="N";
        }
        else
        {
            $active="Y";
        }
       echo $sql="UPDATE  MNFG_T_PROD_LINES SET PL_PROC_COMPLETED_YN='$active' where PL_SYS_ID='$PL_SYS_ID'  ";
        return $this->db->query($sql, $return_object = TRUE);  
    }

//***************************************************4.Production Staging End (Document Number MN004)********************************************************\\    
    
    }

