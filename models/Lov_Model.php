<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class LOV_Model extends CI_Model
    {
        function AppsCityCodeLOV()
	{
	    $sql="SELECT APPS_CITY_AREA.AR_CODE AR_CODE, APPS_CITY_AREA.AR_DESC AR_DESC, APPS_CITY_AREA.AR_CT_CODE AR_CT_CODE FROM APPS_CITY_AREA ORDER BY 'AR_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
        function AppsVSBomVariableLov()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_BOM_VAR' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppsVSCycleTypeLov()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_BOM_CTY' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	} 
        
	function AppsVSItemSourceLov()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_ITEMSRC' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppsVSProcessLov()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'MNFG_BOM_PRC' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppVSProcFreightLOV ()
	{
	   $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES WHERE APPS_VALUE_SET_LINES.VSL_ACTIVE_YN ='Y' and APPS_VALUE_SET_LINES.VSL_VSH_CODE = 'PROC_FREIGHT' ORDER BY "VSL_DESC" ";
	   return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function InvtItemLov()
	{
	    $sql="SELECT INVT_M_ITEM.ITEM_CODE, INVT_M_ITEM.ITEM_DESC, INVT_M_ITEM.ITEM_UOM_CODE, INVT_M_ITEM.ITEM_IF_CODE FROM INVT_M_ITEM WHERE INVT_M_ITEM.ITEM_ACTIVE_YN = 'Y' ORDER BY 'ITEM_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function InvtLocationStockLov ()
	{
	    $company_code=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT LOCN_CODE, LOCN_DESC FROM INVT_M_LOCATION WHERE LOCN_COMP_CODE = '$company_code' AND LOCN_ACTIVE_YN = 'Y' AND LOCN_STOCK_YN = 'Y' ORDER BY 'LOCN_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function InvtLocationSalesLov ()
	{
	    $company_code=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT LOCN_CODE, LOCN_DESC FROM INVT_M_LOCATION WHERE LOCN_COMP_CODE = '$company_code' AND LOCN_ACTIVE_YN = 'Y' AND LOCN_SALE_YN = 'Y' ORDER BY 'LOCN_DESC' ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function InvtLocationStockLov ()
	{
	    $sql="SELECT LOCN_CODE, LOCN_DESC FROM INVT_M_LOCATION WHERE LOCN_COMP_CODE = '001' AND LOCN_ACTIVE_YN = 'Y' AND LOCN_STOCK_YN = 'Y' ORDER BY 'LOCN_DESC' ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function InvtUomLov()
	{
	    $sql="SELECT IU_UOM_CODE ,IU_ITEM_CODE FROM INVT_M_ITEM_UOM WHERE IU_ACTIVE_YN = 'Y' ORDER BY IU_UOM_CODE";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function LogiMMUnitLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_MM_UNIT' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function LogiMountOnLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_MOUNT_O' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function LogiMountTypeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_MOUNT_T' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function SaleMCarrierLOV()
	{
	    $company_code=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT SALE_M_CARRIER.CA_CODE CA_CODE, SALE_M_CARRIER.CA_DESC CA_DESC FROM SALE_M_CARRIER WHERE SALE_M_CARRIER.CA_COMP_CODE='$company_code' ORDER BY 'CA_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function SaleMShipmentLOV()
	{
	    $company_code=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT SALE_M_SHIPMENT.SH_CODE SH_CODE, SALE_M_SHIPMENT.SH_DESC SH_DESC FROM SALE_M_SHIPMENT WHERE SALE_M_SHIPMENT.SH_COMP_CODE='$company_code'ORDER BY 'SH_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function SalesDLCodeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_DL_CODE' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function SalesFreightLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_FREIGHT' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function AppCCExchangeRateCodeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_EX_CODE' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function  AppCCStmtCycleCodeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_STMT_CY' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function AppCCStmtCycleCodeLOV()
	{
	    $sql="SELECT APPS_CITY.CT_CODE CT_CODE, APPS_CITY.CT_DESC CT_DESC, APPS_CITY.CT_ST_CODE, APPS_CITY.CT_CN_CODE FROM APPS_CITY WHERE CT_ACTIVE_YN='Y' ORDER BY 'CT_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function  AppCountryLOV()
	{
	    $sql="SELECT APPS_COUNTRY.CN_CODE CN_CODE,APPS_COUNTRY.CN_DESC CN_DESC FROM APPS_COUNTRY WHERE APPS_COUNTRY.CN_ACTIVE_YN='Y' ORDER BY 'CN_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function AppCustACTypeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_AC_TYPE' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function AppCustPartyTypeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_PARTY' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppInventoryMLocationLOV()
	{
	    $company_code=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT LOCN_CODE, LOCN_DESC FROM INVT_M_LOCATION WHERE LOCN_COMP_CODE = '$company_code' AND LOCN_ACTIVE_YN = 'Y' ORDER BY LOCN_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        
	function SpineAppJobCodeLOV()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES WHERE APPS_VALUE_SET_LINES.VSL_ACTIVE_YN ='Y' and APPS_VALUE_SET_LINES.VSL_VSH_CODE = 'LOGI_JOBCODE' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppPersonTypeLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SALE_TITLE' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppPriorityLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'PRIORITY' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppSourceLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'SOURCE' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function SpineAppStateLov()
	{
	    $sql="SELECT APPS_STATE.ST_CODE ST_CODE, APPS_STATE.ST_DESC ST_DESC, APPS_STATE.ST_CN_CODE ST_CN_CODE FROM APPS_STATE WHERE APPS_STATE.ST_ACTIVE_YN='Y' ORDER BY 'ST_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppLeadStatusLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LEAD_STATUS' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppVSDesignLOV()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES WHERE APPS_VALUE_SET_LINES.VSL_ACTIVE_YN ='Y' and APPS_VALUE_SET_LINES.VSL_VSH_CODE = 'LOGI_DESIG' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function AppVSNationalLOV()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES WHERE APPS_VALUE_SET_LINES.VSL_ACTIVE_YN ='Y' and APPS_VALUE_SET_LINES.VSL_VSH_CODE = 'APP_NATIONAL' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function LogiJobStatusLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_JSTATUS' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function LogiMTeamEmpLOV()
	{
	    $sql="SELECT LOGI_M_TEAM_EMP.LGE_CODE LGE_CODE,LOGI_M_TEAM_EMP.LGE_NAME LGE_NAME FROM LOGI_M_TEAM_EMP ORDER BY 'LGE_NAME'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function LogiVehicleLOV()
	{
	    $sql="SELECT LOGI_M_VEHICLE.VEH_CODE VEH_CODE, LOGI_M_VEHICLE.VEH_DESC VEH_DESC FROM LOGI_M_VEHICLE";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function LogiRescheduleLOV()
	{
	    $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'LOGI_RE_SCH' AND VSL_ACTIVE_YN = 'Y' ORDER BY VSL_DESC";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function ProcCarrierLov()
	{
	    $sql="SELECT CA_CODE, CA_DESC FROM Proc_M_Carrier WHERE CA_ACTIVE_YN ='Y' ORDER BY CA_CODE ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function ProcCurrencyLov()
	{
	    $sql="SELECT CCY_CODE,CCY_DESC,CCY_ACTIVE_YN From Proc_M_Currency Where NVL(CCY_ACTIVE_YN,'N')='Y' ORDER BY 'CCY_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function ProcPaymentTermLov()
	{
	    $sql="SELECT PT_COMP_CODE,PT_CODE, PT_DESC, PT_ACTIVE_YN From Proc_M_Pay_Term Where PT_COMP_CODE = 001 And NVL(PT_ACTIVE_YN,'N')='Y' ORDER BY 'PT_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function ProcSupplierInfoLov()
	{
	    $sql="SELECT SUPL_AC_CODE,SUPL_AC_DESC,SUPL_ACTIVE_YN,SUPL_ADD1,SUPL_ADD2,SUPL_ADD3,SUPL_ADD4,SUPL_CCY_CODE,SUPL_CN_CODE,SUPL_COMP_CODE,SUPL_CT_AR_CODE, SUPL_CT_CODE,SUPL_EMAIL,Supl_Fax,SUPL_MOBILE,SUPL_PAY_TERM_CODE, SUPL_PERSON_FIRST_NAME,SUPL_PERSON_LAST_NAME,SUPL_PERSON_MIDDLE_NAME, SUPL_PERSON_NAME,SUPL_PERSON_TITLE,SUPL_PHONE,SUPL_POSTAL,SUPL_ST_CODE,(SELECT CT_DESC FROM APPS_CITY WHERE CT_CODE = SUPL_CT_CODE) CITY_DESC FROM Proc_M_Supplier WHERE SUPL_ACTIVE_YN = 'Y' And Supl_Ac_Code =:BSupl_Ac_Code Order By Supl_Ac_Desc";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function ProcShipmentLov()
	{
	    $sql="SELECT SUPL_AC_CODE,SUPL_AC_DESC,SUPL_ACTIVE_YN,SUPL_ADD1,SUPL_ADD2,SUPL_ADD3,SUPL_ADD4,SUPL_CCY_CODE,SUPL_CN_CODE,SUPL_COMP_CODE,SUPL_CT_AR_CODE, SUPL_CT_CODE,SUPL_EMAIL,Supl_Fax,SUPL_MOBILE,SUPL_PAY_TERM_CODE, SUPL_PERSON_FIRST_NAME,SUPL_PERSON_LAST_NAME,SUPL_PERSON_MIDDLE_NAME, SUPL_PERSON_NAME,SUPL_PERSON_TITLE,SUPL_PHONE,SUPL_POSTAL,SUPL_ST_CODE,(SELECT CT_DESC FROM APPS_CITY WHERE CT_CODE = SUPL_CT_CODE) CITY_DESC FROM Proc_M_Supplier WHERE SUPL_ACTIVE_YN = 'Y' And Supl_Ac_Code =:BSupl_Ac_Code Order By Supl_Ac_Desc ";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function VehicleFuleLOV()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE,APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES where VSL_VSH_CODE ='LOGI_VEHFUEL' and VSL_ACTIVE_YN='Y' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function VehicleInsuranceTypeLOV()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES where VSL_VSH_CODE ='LOGI_VEHINSU' and VSL_ACTIVE_YN='Y' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function VehicleTypeLOV()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES where VSL_VSH_CODE ='LOGI_VEHTYPE' and VSL_ACTIVE_YN='Y' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	
	function VehicleUseTypeLOV ()
	{
	    $sql="SELECT APPS_VALUE_SET_LINES.VSL_CODE VSL_CODE, APPS_VALUE_SET_LINES.VSL_DESC VSL_DESC FROM APPS_VALUE_SET_LINES where VSL_VSH_CODE ='LOGI_VEH_USE' and VSL_ACTIVE_YN='Y' ORDER BY 'VSL_DESC'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
    }
    