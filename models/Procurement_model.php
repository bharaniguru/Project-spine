<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Procurement_model extends CI_Model {
    
        public function getCurrency()
        {
            return $this->db->get('PROC_M_CURRENCY')->result_array();
        }
        public function getCurrencyRow($code)
        {
            
            $sql="SELECT * FROM PROC_M_CURRENCY where CCY_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        
        public function addcurrency()
        {
        
            if($this->input->post('active_check')=="Y")
            {
                $ACTIVE='Y';
            }
            else
            {
                $ACTIVE='N';
            }
            
            $params = array(
            array('name'=>':P_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('ccy_code')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_DESC', 'value'=>$this->security->xss_clean($this->input->post('ccy_desc')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CCY_SYMBOL', 'value'=>$this->security->xss_clean($this->input->post('CCY_SYMBOL')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CCY_PRECISION', 'value'=>$this->security->xss_clean($this->input->post('ccy_prec')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_FORMAT', 'value'=>$this->security->xss_clean($this->input->post('ccy_format')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CCY_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CCY_ACTIVE_YN', 'value'=>$ACTIVE, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),         
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_M_CURRENCY', $params);
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
            
        
        }
        
        public function editcurrency(){          
            if($this->input->post('active_check')=="Y")
            {
                $ACTIVE='Y';
            }
            else
            {
                $ACTIVE='N';
            }            
            $params = array(
            array('name'=>':P_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('ccy_code')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_DESC', 'value'=>$this->security->xss_clean($this->input->post('ccy_desc')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CCY_SYMBOL', 'value'=>$this->security->xss_clean($this->input->post('CCY_SYMBOL')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CCY_PRECISION', 'value'=>$this->security->xss_clean($this->input->post('ccy_prec')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_FORMAT', 'value'=>$this->security->xss_clean($this->input->post('ccy_format')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CCY_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CCY_ACTIVE_YN', 'value'=>$ACTIVE, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));                                   
            $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_M_CURRENCY', $params);
            return $result = array("return_status"=>$return_status
            ,"error_message"=>$error_message );                        
        }
        
        function delete_currency($code)
        {
            $params = array(
            array('name'=>':P_CCY_CODE', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_CURRENCY', $params);
            return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        }
        function Ajax_CCY_CODE($CCY_CODE){
      
        
        $sql="SELECT * FROM PROC_M_CURRENCY where CCY_CODE='$CCY_CODE'";
        
        $result=$this->db->query($sql)->result();
        
        return Count($result);
       
        }
        //Currency exachange start
        //public function getCurrencyExchange()
        //{
        //    return $this->db->get('PROC_M_CURRENCY_EXCH')->result_array();
        //}
        
        //end
        //2.PaymentTermMaster Start
        
        public function getPaymentTerm()
        {
            return $this->db->get('PROC_M_PAY_TERM')->result_array();
        }
        public function getPaymentTermRow($code)
        {
        
            $sql="SELECT * FROM PROC_M_PAY_TERM where PT_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function addPaymentTerm()
        {
            if($this->input->post('active_check')=="Y")
            {
            $ACTIVE='Y';
            }
            else
            {
            $ACTIVE='N';
            }
            
            $params = array(
            array('name'=>':P_PT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_PT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PT_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_PT_DESC', 'value'=>$this->security->xss_clean($this->input->post('PT_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_PT_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('PT_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_PT_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('PT_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_PT_ACTIVE_YN', 'value'=>$ACTIVE, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            
            
            $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_M_PAY_TERM', $params);
        return     $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        
        
        }
        public function editPaymentTerm()
        {
            if($this->input->post('active_check')=="Y")
            {
                $ACTIVE='Y';
            }
            else
            {
                $ACTIVE='N';
            }
            
        $params = array(
                        array('name'=>':P_PT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PT_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PT_DESC', 'value'=>$this->security->xss_clean($this->input->post('PT_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PT_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('PT_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PT_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('PT_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PT_ACTIVE_YN', 'value'=>$ACTIVE, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                        
                        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_M_PAY_TERM', $params);
                        return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        }
        function delete_payment($code)
        {
            $params = array(
            array('name'=>':P_PT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_PT_CODE', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_PAY_TERM', $params);
            return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        }
        function Ajax_PT_CODE($PT_CODE){
      
        
        $sql="SELECT * FROM PROC_M_PAY_TERM where PT_CODE='$PT_CODE'";
        
        $result=$this->db->query($sql)->result();
        
        return Count($result);
       
        }
        //PaymentTermMaster End
        
        //3.Shipment Start
        public function getShipment()
        {
            return $this->db->get('PROC_M_SHIPMENT')->result_array();
        }
        public function getShipmentRow($code)
        {
        
            $sql="SELECT * FROM PROC_M_SHIPMENT where SH_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function addShipment()
        {
        
            if($this->input->post('active_check')=="Y")
            {
                $ACTIVE='Y';
            }
            else
            {
                $ACTIVE='N';
            }
            $params = array(
            
                        array('name'=>':P_SH_CODE', 'value'=>$this->security->xss_clean($this->input->post('sh_code')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_SH_DESC', 'value'=>$this->security->xss_clean($this->input->post('sh_desc')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_SH_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('SH_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_SH_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('SH_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PT_ACTIVE_YN', 'value'=>$ACTIVE, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_M_SHIPMENT', $params);
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
       
        }
        public function editShipment()
        {
        
            if($this->input->post('active_check')=="Y")
            {
                $ACTIVE='Y';
            }
            else
            {
                $ACTIVE='N';
            }
        
            $params = array(
        
                        array('name'=>':P_SH_CODE', 'value'=>$this->security->xss_clean($this->input->post('sh_code')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_SH_DESC', 'value'=>$this->security->xss_clean($this->input->post('sh_desc')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_SH_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('SH_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_SH_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('SH_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PT_ACTIVE_YN', 'value'=>$ACTIVE, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
     
            $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_M_SHIPMENT', $params);
           return  $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        echo $error_message;
      
        
        }
        function delete_shipment($code)
        {
            $params = array(           
            array('name'=>':P_SH_CODE', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_SHIPMENT', $params);
            return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        }
        function Ajax_SH_CODE($SH_CODE){
      
        
        $sql="SELECT * FROM PROC_M_SHIPMENT where SH_CODE='$SH_CODE'";
        
        $result=$this->db->query($sql)->result();
        
        return Count($result);
       
        }
        //Shipment End
        
        //4.supplier start
        function Ajax_SUPL_AC_CODE($SUPL_AC_CODE){            
            $sql="SELECT * FROM PROC_M_SUPPLIER where SUPL_AC_CODE='$SUPL_AC_CODE'";            
            $result=$this->db->query($sql)->result();            
            return Count($result);
           
        }
        function PROC_PARTY()
	{
	    $sql="SELECT * FROM APPS_VALUE_SET_LINES  WHERE VSL_VSH_CODE='PROC_PARTY'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function PROC_EX_CODE()
	{
	    $sql="SELECT * FROM APPS_VALUE_SET_LINES  WHERE VSL_VSH_CODE='PROC_EX_CODE'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function PROC_TITLE()
	{
	    $sql="SELECT * FROM APPS_VALUE_SET_LINES  WHERE VSL_VSH_CODE='PROC_TITLE'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
	function PROC_STMT_CY()
	{
	    $sql="SELECT * FROM APPS_VALUE_SET_LINES  WHERE VSL_VSH_CODE='PROC_STMT_CY'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
	}

        public function getSupplier()
        {
        return $this->db->get('PROC_M_SUPPLIER')->result_array();
        }
         public function getSupplierRow($code)
        {
            
            $sql="SELECT * FROM PROC_M_SUPPLIER where SUPL_AC_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
      
        }
        //private function set_upload_options()
        //{   
        //  upload an image options
        //    $config = array();
        //    $config['upload_path'] = 'upload/';
        //    $config['allowed_types'] = 'gif|jpg|png';
        //    $config['max_size']      = '0';
        //    $config['overwrite']     = FALSE;
        //
        //
        //    return $config;
        //}
        public function addSupplier()
        {
 

        
        if($this->input->post('SUPL_ACTIVE_YN')=="Y"){
        $SUPL_ACTIVE_YN='Y';
        }
        else{
        $SUPL_ACTIVE_YN='N';
        }
        if($this->input->post('PURCHASING_ACTIVE_YN')=="Y"){
        $PURCHASING_ACTIVE_YN='Y';
        }
        else{
        $PURCHASING_ACTIVE_YN='N';
        }
        if($this->input->post('PAYMENT_ACTIVE_YN')=="Y"){
        $PAYMENT_ACTIVE_YN='Y';
        }
        else{
        $PAYMENT_ACTIVE_YN='N';
        }
        //$CITY_CODE=$this->input->post('SUPL_CT_CODE');
        //$sql="SELECT * FROM APPS_CITY where CT_CODE='$CITY_CODE' ";
        //$query = $this->db->query($sql, $return_object = TRUE)->result_array();
        //
        
        $params = array(
        array('name'=>':P_SUPL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PARTY_TYPE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_TYPE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_PARTY_DESC', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_PARTY_ALIAS', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_ALIAS')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PARTY_URL', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_URL')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_AC_DESC', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_ADD1', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD1')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_ADD2', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD2')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_ADD3', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD3')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_ADD4', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD4')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ST_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_CT_AR_CODE', 'value'=>$this->security->xss_clean('NULL'),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('SUPL_POSTAL')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_MOBILE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PHONE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PHONE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_FAX', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FAX')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('SUPL_EMAIL')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PERSON_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_NAME')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PERSON_TITLE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_TITLE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_PERSON_FIRST_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_FIRST_NAME')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_PERSON_MIDDLE_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_MIDDLE_NAME')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PERSON_LAST_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_LAST_NAME')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_EXCHG_RATE_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_EXCH_RATE_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CCY_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_PAY_TERM_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PAY_TERM_CODE')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_CREDIT_CHECK_YN', 'value'=>$this->security->xss_clean('Y'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_CREDIT_LIMIT', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CREDIT_LIMIT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_DISC_GRACE_DAYS', 'value'=>$this->security->xss_clean($this->input->post('SUPL_DISC_GRACE_DAYS')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_DISC_YN', 'value'=>$this->security->xss_clean('Y'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PURCHASE_ADDRESS_YN', 'value'=>$PURCHASING_ACTIVE_YN,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PAYMENT_ADDRESS_YN', 'value'=>$PAYMENT_ACTIVE_YN, 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_STMT_CYCLE_CODE', 'value'=>$this->security->xss_clean('NULL'),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_AC_MANAGER', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_MANAGER')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_SALE_REP', 'value'=>$this->security->xss_clean($this->input->post('SUPL_SAL_REP')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('SUPL_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_ACTIVE_YN', 'value'=>$SUPL_ACTIVE_YN,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_01')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_02')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_03')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_04')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_05')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_06')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_07')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_08')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_09')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_10')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_11')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_12')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_13')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_14')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_15')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_16')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_17')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_18')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_19')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FLEX_20')),'type'=>SQLT_CHR, 'length'=>300 ),
        
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_M_SUPPLIER', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        //echo "supplier :".$error_message;
        //echo '<br>';
        //echo '<pre>';
        //print_r($params);
        //echo '</pre>';
        //exit();
        $data_count = count($this->input->post('CCONT_NAME'));
        
        for ($i=0; $i<$data_count-1; $i++)
        {
        $params = array(
        array('name'=>':P_SCONT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SCONT_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SCONT_NAME', 'value'=>$this->security->xss_clean($_POST['CCONT_NAME'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SCONT_MOBILE', 'value'=>$this->security->xss_clean($_POST['CCONT_PHONE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SCONT_PHONE', 'value'=>$this->security->xss_clean($_POST['CCONT_MOBILE'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SCONT_EMAIL', 'value'=>$this->security->xss_clean($_POST['CCONT_EMAIL'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SCONT_LINKEDIN', 'value'=>$this->security->xss_clean($_POST['CCONT_LINKEDIN'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SCONT_FACEBOOK', 'value'=>$this->security->xss_clean($_POST['CCONT_FACEBOOK'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SCONT_TWITTER', 'value'=>$this->security->xss_clean($_POST['CCONT_TWITTER'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SCONT_FROM_DT', 'value'=>$this->security->xss_clean($_POST['CCONT_FROM_DT'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SCONT_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['CCONT_UPTO_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SCONT_ACTIVE_YN', 'value'=>$this->security->xss_clean($_POST['CCONT_ACTIVE_YN'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        
        
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_M_SUPPLIER_CONTACT', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        //echo "supplier contact".$i." :".$error_message;
        //echo '<br>';
        }
        $this->load->library('upload');
        
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        
      
        for($i=0; $i<$cpt-1; $i++)
        {
        $sql="select   PROC_T_SEQ.nextval FROM DUAL";
        $sys_id=$this->db->query($sql, $return_object = TRUE)->result_array();
        echo $sys_id= $sys_id[0]["NEXTVAL"];
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
      //  
      //  $fp      = fopen($tmpName, 'r');
      //  $content = fread($fp, filesize($tmpName));
      //  $content = addslashes($content);
      //  fclose($fp);
      //print_r($content);
      
        $path=base_url().'upload/'.$_FILES['userfile']['name'];
        
        $params = array(
        array('name'=>':P_SDOC_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SDOC_SYS_ID', 'value'=>$this->security->xss_clean($sys_id), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SDOC_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SDOC_FILE_NAME', 'value'=>$this->security->xss_clean($_FILES['userfile']['name']),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SDOC_SIZE', 'value'=>$this->security->xss_clean($_FILES['userfile']['size']),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SDOC_DESC', 'value'=>$this->security->xss_clean($_POST['CDOC_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SDOC_FROM_DT', 'value'=>$this->security->xss_clean($_POST['CDOC_FROM_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SDOC_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['CDOC_FROM_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SDOC_ACTIVE_YN', 'value'=>$this->security->xss_clean($_POST['CDOC_ACTIVE_YN'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
  
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_M_SUPPLIER_DOCS', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        
        echo "supplier docs".$i." :".$error_message;
        echo '<br>';
       
        }
      


        
        
       
        }
        function getsupplierstate($country_code){
        $sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$country_code' ";
	return $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function getsuppliercity($state_code,$country_code){
        
        $sql="SELECT * FROM APPS_CITY where CT_ST_CODE='$state_code' AND CT_CN_CODE='$country_code' ";
	return $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function getsuppliercontact($code){
        $sql="SELECT * FROM PROC_M_SUPPLIER_CONTACT where SCONT_AC_CODE='$code' ";
	return $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function getsupplierattachment($code){
        $sql="SELECT * FROM PROC_M_SUPPLIER_DOCS where SDOC_AC_CODE='$code' ";
	return $query = $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         public function UpdateSupplier()
        {
 

        
        if($this->input->post('SUPL_ACTIVE_YN')=="Y"){
        $SUPL_ACTIVE_YN='Y';
        }
        else{
        $SUPL_ACTIVE_YN='N';
        }
        if($this->input->post('PURCHASING_ACTIVE_YN')=="Y"){
        $PURCHASING_ACTIVE_YN='Y';
        }
        else{
        $PURCHASING_ACTIVE_YN='N';
        }
        if($this->input->post('PAYMENT_ACTIVE_YN')=="Y"){
        $PAYMENT_ACTIVE_YN='Y';
        }
        else{
        $PAYMENT_ACTIVE_YN='N';
        }
        //$CITY_CODE=$this->input->post('SUPL_CT_CODE');
        //$sql="SELECT * FROM APPS_CITY where CT_CODE='$CITY_CODE' ";
        //$query = $this->db->query($sql, $return_object = TRUE)->result_array();
        //
        
        $params = array(
        array('name'=>':P_SUPL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PARTY_TYPE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_TYPE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_PARTY_DESC', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_PARTY_ALIAS', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_ALIAS')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PARTY_URL', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PARTY_URL')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_AC_DESC', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_ADD1', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD1')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_ADD2', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD2')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_ADD3', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD3')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_ADD4', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ADD4')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_ST_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_CT_AR_CODE', 'value'=>$this->security->xss_clean('NULL'),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('SUPL_POSTAL')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_MOBILE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PHONE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PHONE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_FAX', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FAX')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('SUPL_EMAIL')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PERSON_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_NAME')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PERSON_TITLE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_TITLE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_PERSON_FIRST_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_FIRST_NAME')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_PERSON_MIDDLE_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_MIDDLE_NAME')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PERSON_LAST_NAME', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PERSON_LAST_NAME')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_EXCHG_RATE_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_EXCH_RATE_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CCY_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_PAY_TERM_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_PAY_TERM_CODE')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_CREDIT_CHECK_YN', 'value'=>$this->security->xss_clean('Y'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_CREDIT_LIMIT', 'value'=>$this->security->xss_clean($this->input->post('SUPL_CREDIT_LIMIT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_DISC_GRACE_DAYS', 'value'=>$this->security->xss_clean($this->input->post('SUPL_DISC_GRACE_DAYS')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_DISC_YN', 'value'=>$this->security->xss_clean('Y'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_PURCHASE_ADDRESS_YN', 'value'=>$PURCHASING_ACTIVE_YN,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_PAYMENT_ADDRESS_YN', 'value'=>$PAYMENT_ACTIVE_YN, 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_STMT_CYCLE_CODE', 'value'=>$this->security->xss_clean('XXX'),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_AC_MANAGER', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_MANAGER')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_SALE_REP', 'value'=>$this->security->xss_clean($this->input->post('SUPL_SAL_REP')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('SUPL_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SUPL_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('SUPL_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SUPL_ACTIVE_YN', 'value'=>$SUPL_ACTIVE_YN,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SUPL_FLEX_01', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_02', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_03', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_04', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_05', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_06', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_07', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_08', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_09', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_10', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_11', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_12', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_13', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_14', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_15', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_16', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_17', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_18', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_19', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SUPL_FLEX_20', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
       $result1= $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_M_SUPPLIER', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        echo "supplier :".$error_message;
        echo '<br>';
  
        $data_count = count($this->input->post('CCONT_NAME'));
        
        for ($i=0; $i<$data_count-1; $i++)
        {
        $params = array(
        array('name'=>':P_SCONT_COMP_CODE', 'value'=>NULL,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SCONT_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SCONT_NAME', 'value'=>$this->security->xss_clean($_POST['CCONT_NAME'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SCONT_MOBILE', 'value'=>$this->security->xss_clean($_POST['CCONT_PHONE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SCONT_PHONE', 'value'=>$this->security->xss_clean($_POST['CCONT_MOBILE'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SCONT_EMAIL', 'value'=>$this->security->xss_clean($_POST['CCONT_EMAIL'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SCONT_LINKEDIN', 'value'=>$this->security->xss_clean($_POST['CCONT_LINKEDIN'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SCONT_FACEBOOK', 'value'=>$this->security->xss_clean($_POST['CCONT_FACEBOOK'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SCONT_TWITTER', 'value'=>$this->security->xss_clean($_POST['CCONT_TWITTER'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SCONT_FROM_DT', 'value'=>$this->security->xss_clean($_POST['CCONT_FROM_DT'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SCONT_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['CCONT_UPTO_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SCONT_ACTIVE_YN', 'value'=>$this->security->xss_clean($_POST['CCONT_ACTIVE_YN'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        
        
        $RES=$this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_M_SUPPLIER_CONTACT', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        echo "supplier contact".$i." :".$error_message;
   
       
        }
        $this->load->library('upload');
        
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        
      
        for($i=0; $i<$cpt-1; $i++)
        {
            if($files['userfile']['name'][$i]!=""){
        echo "image : ".$i;
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
        }
        else{
            $_FILES['userfile']['name']=$_POST['filename'][$i];
            $_FILES['userfile']['size']=$_POST['filesize'][$i];
        }
        //  
        //  $fp      = fopen($tmpName, 'r');
        //  $content = fread($fp, filesize($tmpName));
        //  $content = addslashes($content);
        //  fclose($fp);
        //print_r($content);
      
        $path=base_url().'upload/'.$_FILES['userfile']['name'];
        
        $params = array(
        array('name'=>':P_SDOC_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SDOC_SYS_ID', 'value'=>$this->security->xss_clean($_POST['SDOC_SYS_ID'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_SDOC_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SUPL_AC_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SDOC_FILE_NAME', 'value'=>$this->security->xss_clean($_FILES['userfile']['name']),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SDOC_SIZE', 'value'=>$this->security->xss_clean($_FILES['userfile']['size']),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_SDOC_DESC', 'value'=>$this->security->xss_clean($_POST['CDOC_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_SDOC_FROM_DT', 'value'=>$this->security->xss_clean($_POST['CDOC_FROM_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SDOC_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['CDOC_FROM_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SDOC_ACTIVE_YN', 'value'=>$this->security->xss_clean($_POST['CDOC_ACTIVE_YN'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
  
        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_M_SUPPLIER_DOCS', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        
        echo "supplier docs".$i." :".$error_message;
        echo '<br>';

      
        }
       }
         function DeleteSupplierContact($ac_code,$name){
		
    
         $params = array(
            array('name'=>':P_SCONT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SCONT_AC_CODE', 'value'=>$this->security->xss_clean($ac_code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_SCONT_NAME', 'value'=>$this->security->xss_clean($name),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_SUPPLIER_CONTACT', $params);
             $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );

	}
	function DeleteSupplierAttachment($sys){
            
	 $params = array(
            array('name'=>':P_SDOC_SYS_ID', 'value'=>$this->security->xss_clean($sys),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_SUPPLIER_DOCS', $params);
            return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );

	}
            function DeleteSupplierMaster($ac_code){
            $sql="SELECT * FROM PROC_M_SUPPLIER_CONTACT where SCONT_AC_CODE='$ac_code' ";
            $result= $this->db->query($sql)->result_array();
            
            foreach($result as $row)
            {
         $params = array(
            array('name'=>':P_SCONT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SCONT_AC_CODE', 'value'=>$this->security->xss_clean($ac_code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_SCONT_NAME', 'value'=>$this->security->xss_clean($row["SCONT_NAME"]),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_SUPPLIER_CONTACT', $params);
             $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
           
            }
            

            $sql="SELECT * FROM PROC_M_SUPPLIER_DOCS where SDOC_AC_CODE='$ac_code' ";
            $result= $this->db->query($sql)->result_array();
              foreach($result as $row)
            {
       	 $params = array(
            array('name'=>':P_SDOC_SYS_ID', 'value'=>$this->security->xss_clean($row["SDOC_SYS_ID"]),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_SUPPLIER_DOCS', $params);
             $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
                echo "<pre>";
            print_r($result);
            echo "</pre>";
            }
         $params = array(
            array('name'=>':P_SUPL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($ac_code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':p_user_id', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_M_SUPPLIER', $params);
             $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );	
 

	}
      
        //supplier end
        
        //Purchase Request Transaction Start
          //Purchase Request Transaction Start
        
        public function getPurchaseRequestTransaction()
        {
        return $this->db->get('PROC_T_PREQ_HEAD')->result_array();
        }
         public function GetLocation()
        {
            return $this->db->get('INVT_M_LOCATION')->result_array();
        }
        public function itemCode(){
        $item_code=mysql_real_escape_string($_POST["item_code_data"]);
        $sql="SELECT * FROM INVT_M_ITEM  where ITEM_CODE='$item_code'";
    
        return  $data = $this->db->query($sql, $return_object = TRUE)->result_array();
       
        }
        public function InviteMTerm()
        {
            return $this->db->get('INVT_M_ITEM')->result_array();
        }
        public function addpurchaserequest() {
            
        $params = array(
        array('name'=>':P_PRQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('MENU_TXN_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_PRQH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_PRQH_DOC_REF', 'value'=>$this->security->xss_clean('NULL'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_PERSON_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_PERSON_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_DT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_PRQH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_LOGN_CODE')), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_PRQH_DESC', 'value'=>$this->security->xss_clean($this->input->post('TXN_DESC')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_01')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_02')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_03')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_04')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_05')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_06')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_07')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_08')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLIX_09')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLIX_10')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_11')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_12')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_13')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_14')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_15')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_16')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_17')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_18')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_19')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('PRQH_FLEX_20')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQH_STATUS', 'value'=>$this->security->xss_clean("NULL"),'type'=>SQLT_CHR, 'length'=>300),

        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_TXN_NO','value'=>&$txn_no, 'type'=>SQLT_CHR,'length'=>300),              
        
        
       
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));     
            
         
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_PREQ_HEAD', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        
        //echo "sys: ".$sys_id;
        //echo '<br>';
        //echo "TXN No: ".$txn_no;echo '<br>';
        //echo "erro: ". $error_message;
        //echo '<br>';
        //echo "retu: ". $return_status;
        //echo '<br>';
        //echo '<pre>';
        //print_r($params);
        //echo '</pre>';
       // exit;
        
        $data_count = count($this->input->post('PRQL_LINE'));
        for ($i=0; $i<$data_count-1; $i++)
        {
        $params = array(
        array('name'=>':P_PRQL_PRQH_SYS_ID', 'value'=>$sys_id,'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),  
        array('name'=>':P_PRQL_LINE', 'value'=>$this->security->xss_clean($_POST['PRQL_LINE'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_PRQL_ITEM_CODE', 'value'=>$this->security->xss_clean($_POST['ITEM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_ITEM_DESC', 'value'=>$this->security->xss_clean($_POST['ITEM_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_UOM_CODE', 'value'=>$this->security->xss_clean($_POST['ITEM_UOM'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_PRQL_QTY', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_PRQL_QTY_BU', 'value'=>$this->security->xss_clean('1000'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_QTY_RECEIVED', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY_RECEIVED'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_PRICE', 'value'=>$this->security->xss_clean($_POST['PRQL_PRICE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_PRQL_VALUE', 'value'=>$this->security->xss_clean($_POST['PRQL_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_PERSON_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_PERSON_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_LOGN_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_PRQL_DESC', 'value'=>$this->security->xss_clean($_POST['PRQL_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_PRQL_LINE_STATUS', 'value'=>$this->security->xss_clean('approved'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_01', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_02', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_03', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_04', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_05', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_06', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_07', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_08', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_09', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_10', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_11', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_12', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_13', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_14', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_15', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_16', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_17', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_18', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_19', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_FLEX_20', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_REF_FLOW_SEQ', 'value'=>$this->security->xss_clean('5'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_REF_SYS_ID', 'value'=>$this->security->xss_clean('04'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_REF_LINE_SYS_ID', 'value'=>$this->security->xss_clean('8'),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PRQL_ENQUIRED_YN', 'value'=>$this->security->xss_clean('Y'),'type'=>SQLT_CHR, 'length'=>300),
       
        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_PREQ_LINES', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );

        }
        }
        
        public function getPurchaseRequestRow($code)
        {
        
            $sql="SELECT * FROM PROC_T_PREQ_HEAD where PRQH_SYS_ID='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         public function getPurchaseRequestRowLines($code)
        {
        
            $sql="SELECT * FROM PROC_T_PREQ_LINES where PRQL_PRQH_SYS_ID='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function updatePurchase()
        {
            
        $params = array(
                        array('name'=>':P_PRQH_SYS_ID', 'value'=>$this->security->xss_clean($this->input->post('PRQH_SYS_ID')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('MENU_TXN_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQH_TXN_NO', 'value'=>$this->security->xss_clean($this->input->post('PRQH_TXN_NO')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PRQH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('NULL')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQH_PERSON_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_PERSON_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_DT')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_LOGN_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_DESC', 'value'=>$this->security->xss_clean($this->input->post('TXN_DESC')),'type'=>SQLT_CHR, 'length'=>300),                        
                        array('name'=>':P_PRQH_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQH_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('null')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PRQH_STATUS', 'value'=>$this->security->xss_clean('Approved'), 'type'=>SQLT_CHR,'length'=>300),                        
                        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                        
                        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_PREQ_HEAD', $params);
                         $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                 
                    
       echo $data_count = count($this->input->post('ITEM_CODE'));
        
        for ($i=0; $i<$data_count; $i++)
        {               
        $params = array(
                        array('name'=>':P_PRQL_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PRQL_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_PRQH_SYS_ID', 'value'=>$this->security->xss_clean($this->input->post('PRQH_SYS_ID')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),          
                        array('name'=>':P_PRQL_LINE', 'value'=>$this->security->xss_clean($_POST['PRQL_LINE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_ITEM_CODE', 'value'=>$this->security->xss_clean($_POST['ITEM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_ITEM_DESC', 'value'=>$this->security->xss_clean($_POST['ITEM_DESC'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQL_UOM_CODE', 'value'=>$this->security->xss_clean($_POST['ITEM_UOM'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PRQL_QTY', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_QTY_BU', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY_RECEIVED'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_QTY_RECEIVED', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY_RECEIVED'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PRQL_PRICE', 'value'=>$this->security->xss_clean($_POST['PRQL_PRICE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_VALUE', 'value'=>$this->security->xss_clean($_POST['PRQL_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_PERSON_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_PERSON_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PRQL_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PRQH_DLV_LOGN_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PRQL_DESC', 'value'=>$this->security->xss_clean($_POST['PRQL_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_LINE_STATUS', 'value'=>$this->security->xss_clean('NULL'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_01', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_02', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_03', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_04', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_05', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_06', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_07', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_08', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_09', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_10', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_11', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_12', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_13', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_14', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_15', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_16', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_17', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_18', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_19', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_FLEX_20', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_REF_FLOW_SEQ', 'value'=>$this->security->xss_clean($_POST['PRQL_REF_FLOW_SEQ'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_REF_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PRQL_REF_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_REF_LINE_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PRQL_REF_LINE_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PRQL_ENQUIRED_YN', 'value'=>$this->security->xss_clean($_POST['PRQL_ENQUIRED_YN'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                       
                        array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                        
                        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_PREQ_LINES', $params);
                        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                        

                  
                    
               
        }      

        }
        function delete_purchase($code)
        {
            $sql="SELECT * FROM PROC_T_PREQ_LINES where PRQL_PRQH_SYS_ID='$code' ";
            $result= $this->db->query($sql)->result_array();
            
            foreach($result as $row)
            {
            $params = array(
                array('name'=>':P_PRQL_SYS_ID', 'value'=>$this->security->xss_clean($row["PRQL_SYS_ID"]),'type'=>SQLT_CHR, 'length'=>300 ),           
                array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PREQ_LINES', $params);
                $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message );
            }
            
             $params = array(
           // array('name'=>':P_PT_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_PRQH_SYS_ID', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE','value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PREQ_HEAD', $params);
            $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );                                        
        }
      
         //Purchase Request Transaction end
         
        
        //6.Enquiry Dash Board
         public function getenquiryboard()
        {
            return $this->db->get('PROC_V_PEND_REQUEST_DB')->result_array();
        }
        
        public function getenquiryboardRow($code)
        {
        
            $sql="SELECT * FROM PROC_V_PEND_REQUEST_DB where PRQ_TXN_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        } 
        //6.Enquiry Board End
          //7.Purchase Enquiry Transaction Start
        
        
        
        function PullEnquiry()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT PRQH_SYS_ID, PRQH_TXN_CODE, PRQH_TXN_NO, PRQH_TXN_DT FROM PROC_T_PREQ_HEAD WHERE PRQH_COMP_CODE = '$comp_code' AND NVL(PRQH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM PROC_T_PREQ_LINES WHERE PRQH_SYS_ID  = PRQL_PRQH_SYS_ID AND (NVL(PRQL_QTY,0) - NVL(PRQL_QTY_RECEIVED,0))>0)";
        return $this->db->query($sql, $return_object = TRUE)->result_array();    
    }
    function AjaxEnquiryTransaction($code)
    {
        $sql="  SELECT PRQL_SYS_ID, PRQL_PRQH_SYS_ID, TXN_FLOW_SEQ, PRQH_TXN_CODE, PRQH_TXN_NO, 
                PRQL_ITEM_CODE, PRQL_ITEM_DESC, PRQL_UOM_CODE, 
                PRQL_PRICE, (NVL(PRQL_QTY,0) - NVL(PRQL_QTY_RECEIVED,0))PRQL_QTY
                FROM PROC_T_PREQ_LINES, PROC_T_PREQ_HEAD, APPS_TXN_SETUP 
                WHERE PRQH_TXN_CODE = TXN_CODE
                AND PRQL_PRQH_SYS_ID = PRQH_SYS_ID
                AND PRQL_PRQH_SYS_ID IN( $code)
                AND (NVL(PRQL_QTY,0) - NVL(PRQL_QTY_RECEIVED,0))>0";
                
        return $this->db->query($sql, $return_object = TRUE)->result_array();    
    }
      
        public function getPurchaseEnquiryTransaction()
        {
        return $this->db->get('PROC_T_ENQ_HEAD')->result_array();
        }
         //Purchase Enquiry Transaction end
        
        //Enquiry Board Start
        //public function getPurchaseEnquiryTransaction()
        //{
        //return $this->db->get('PROC_T_PREQ_HEAD')->result_array();
        //}
        //Enquiry Board End
        
        
        function GetAppsMenuCode(){
            
            $select="SELECT * FROM APPS_MENU WHERE MENU_TXN_CODE='PO'";
            return $this->db->query($select)->result_array();
        
        }
        
        function TxnNo(){
            
                $date = date('d-M-y');

                $params = array(
                array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_CODE', 'value'=>'PO', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_OUT_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
                );
               $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
              return array("return_status"=>$return_status);
   
        }
        
        function TxnDt(){
            
                $date = date('d-M-y');

                $params = array(
                array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_CODE', 'value'=>'PO', 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
                );
               $this->db->stored_procedure('SPINE_APPS','APPS_FUNC_VALIDATE_DOC_DT', $params);
               return array("date"=>$date);
   
        }        
        
        //Insert purchase enquiry transaction
        
        
        public function AddPurchaseEnquiryTransaction(){
        
        $flex = array(
        array('name'=>':P_EQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_TNX_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_EQH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('EQH_DOC_REF')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQH_QUOT_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_QUOT_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_DEL_DT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_EQH_DESC', 'value'=>$this->security->xss_clean($this->input->post('EQH_DESC')),'type'=>SQLT_CHR, 'length'=>300),
 
        array('name'=>':P_EQH_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_01')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_02')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_03')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_04')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_05')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_06')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_07')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_08')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_09')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_10')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_11')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_12')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_13')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_14')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_15')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_16')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_17')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_18')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_19')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_20')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_STATUS',  'value'=>$this->security->xss_clean($this->input->post('EQH_STATUS')),'type'=>SQLT_CHR, 'length'=>300 ),
        
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
         array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_ENQ_HEAD', $flex);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message,"sys_id"=>$sys_id,"txn_no"=>$txn_no );
        //echo '<pre>';
        //print_r($flex);
        //echo '</pre>';
        //echo $return_status;
        //echo $error_message;
        //exit;
        
        echo $data_count = count($this->input->post('EQL_LINE'));
        for ($i=0; $i<$data_count; $i++){
        $params = array(
        array('name'=>':P_EQL_EQH_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_EQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQL_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_FLOW_SEQ', 'value'=>$this->security->xss_clean($_POST['POL_REF_FLOW_SEQ'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_TXN_CODE', 'value'=>$this->security->xss_clean($_POST['POL_REF_TXN_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQL_REF_TXN_NO', 'value'=>$this->security->xss_clean($_POST['POL_REF_TXN_NO'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_HEAD_SYS_ID', 'value'=>$this->security->xss_clean($_POST['POL_REF_HEAD_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_LINE_SYS_ID', 'value'=>$this->security->xss_clean($_POST['POL_REF_LINE_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_LINE', 'value'=>$this->security->xss_clean($_POST['EQL_LINE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_ITEM_CODE', 'value'=>$this->security->xss_clean($_POST['PRQL_ITEM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_ITEM_DESC', 'value'=>$this->security->xss_clean($_POST['PRQL_ITEM_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_UOM_CODE', 'value'=>$this->security->xss_clean($_POST['PRQL_UOM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_QTY', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_QTY_BU', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_QTY_RECEIVED', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_PRICE', 'value'=>$this->security->xss_clean($_POST['PRQL_PRICE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_VALUE', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_DEL_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_DESC', 'value'=>$this->security->xss_clean($_POST['EQL_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_LINE_STATUS', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_01', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_02', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_03', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_04', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_05', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_06', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_07', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_08', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_09', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_10', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_11', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_12', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_13', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_14', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_15', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_16', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_17', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_18', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_19', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_20', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_ENQ_LINES', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message,"sys_id"=>$sys_id,"txn_no"=>$txn_no );
 
        }
        
     
         $data_count = count($this->input->post('EQS_LINE'));

        $params = array(
        array('name'=>':P_EQS_EQH_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_EQS_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQS_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQS_LINE', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQS_SUPL_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQS_DESC', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQS_QUOTE_RECIVED_YN', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
         $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_ENQ_SUPL', $params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message,"sys_id"=>$sys_id,"txn_no"=>$txn_no );
       
        }
   
         public function ViewLocation()
        
        {
         $sql="SELECT * FROM PROC_T_ENQ_HEAD where EQH_TXN_NO='$code'";
           return  $result=$this->db->query($sql, $return_object = TRUE)->result_array();
  
        }
          function GetINVT_M_Location(){
            $loc=$this->session->userdata('USER_COMP_CODE');
            $select="SELECT * FROM INVT_M_LOCATION WHERE LOCN_COMP_CODE='$loc'";
            
         return   $data= $this->db->query($select)->result_array();

            }
        
       
        //Purchase Enquiry Transaction Start
        public function editPurchaseEnquiryTransaction($code)
        {
         $sql="SELECT * FROM PROC_T_ENQ_HEAD where EQH_SYS_ID='$code'";
           return  $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function editPurchaseEnquiryLineTransaction($code)
        {
            $sql="SELECT * FROM PROC_T_ENQ_LINES where EQL_EQH_SYS_ID='$code'";
            return  $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        
        }
         //Purchase Enquiry Transaction end
         public function UpdatePurchaseEnquiryTransaction()
        {
        $flex = array(
        array('name'=>':P_EQH_SYS_ID', 'value'=>$this->security->xss_clean($this->input->post('EQH_SYS_ID')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_TNX_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQH_TXN_NO', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_NO')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_EQH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('EQH_DOC_REF')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQH_QUOT_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_QUOT_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_DEL_DT')), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_EQH_DESC', 'value'=>$this->security->xss_clean($this->input->post('EQH_DESC')),'type'=>SQLT_CHR, 'length'=>300),
 
        array('name'=>':P_EQH_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_01')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_02')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_03')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_04')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_05')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_06')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_07')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_08')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_09')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_10')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_11')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_12')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_13')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_14')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_15')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_16')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_17')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_18')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_19')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('EQH_FLEX_20')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQH_STATUS',  'value'=>$this->security->xss_clean($this->input->post('EQH_STATUS')),'type'=>SQLT_CHR, 'length'=>300 ),
        
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_ENQ_HEAD', $flex);

        //echo '<pre>';
        //print_r($flex);
        //echo '</pre>';
        //echo $return_status;
        //echo $error_message;
        //exit;
        
        echo $data_count = count($this->input->post('EQL_LINE'));
        for ($i=0; $i<$data_count; $i++){
        $params = array(
        array('name'=>':P_EQL_SYS_ID', 'value'=>$this->security->xss_clean($_POST['EQL_SYS_ID'][$i]), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_EQL_EQH_SYS_ID', 'value'=>$this->input->post('EQH_SYS_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_EQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_EQL_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_FLOW_SEQ', 'value'=>$this->security->xss_clean($_POST['POL_REF_FLOW_SEQ'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_TXN_CODE', 'value'=>$this->security->xss_clean($_POST['POL_REF_TXN_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_EQL_REF_TXN_NO', 'value'=>$this->security->xss_clean($_POST['POL_REF_TXN_NO'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_HEAD_SYS_ID', 'value'=>$this->security->xss_clean($_POST['POL_REF_HEAD_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_REF_LINE_SYS_ID', 'value'=>$this->security->xss_clean($_POST['POL_REF_LINE_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_LINE', 'value'=>$this->security->xss_clean($_POST['EQL_LINE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_ITEM_CODE', 'value'=>$this->security->xss_clean($_POST['PRQL_ITEM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_ITEM_DESC', 'value'=>$this->security->xss_clean($_POST['PRQL_ITEM_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_UOM_CODE', 'value'=>$this->security->xss_clean($_POST['PRQL_UOM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_QTY', 'value'=>$this->security->xss_clean($_POST['PRQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_QTY_BU', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_QTY_RECEIVED', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_PRICE', 'value'=>$this->security->xss_clean($_POST['PRQL_PRICE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_VALUE', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('EQH_DEL_DT')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('EQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_DESC', 'value'=>$this->security->xss_clean($_POST['EQL_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_LINE_STATUS', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_01', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_02', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_03', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_04', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_05', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_06', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_07', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_08', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_09', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_10', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_11', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_12', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_13', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_14', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_15', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_16', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_17', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_18', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_19', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_EQL_FLEX_20', 'value'=>null,'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_ENQ_LINES', $params);
        //echo '<pre>';
        //print_r($params);
        //echo '</pre>';
 
        }
        //exit;
        }
         function SupplierCode(){
            $select="SELECT * FROM PROC_M_SUPPLIER";
            return $this->db->query($select)->result_array();
        }
    
        function DeletePurchaseEnquiryTable($sys_id){
            
            echo $sql="SELECT * FROM PROC_T_ENQ_LINES WHERE EQL_EQH_SYS_ID='$sys_id'";
            $result=$this->db->query($sql)->result_array();
            print_r(count($result));
            $count_line=(count($result));
            if($count_line!=0){
                
            foreach($result as $row)
            {        
                $line = array(                
                    array('name'=>':P_EQL_SYS_ID', 'value'=>$row['EQL_SYS_ID'],'type'=>SQLT_CHR, 'length'=>300 ),
                    //array('name'=>':P_EQL_SYS_ID', 'value'=>$this->security->xss_clean($row['EQL_SYS_ID']),'type'=>SQLT_CHR, 'length'=>300 ),
                    array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                    
                    $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_ENQ_LINES', $line);
                    $result = array("return_status"=>$return_status,"error_message"=>$error_message ); 
            }
            echo $error_message;
            print_r($result);
            //exit();
            }
            $head = array(            
                array('name'=>':P_EQH_SYS_ID', 'value'=>$sys_id,'type'=>SQLT_CHR, 'length'=>300 ),
                //array('name'=>':P_EQH_SYS_ID', 'value'=>$this->security->xss_clean($sys_id),'type'=>SQLT_CHR, 'length'=>300 ),
                array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
               
                $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_ENQ_HEAD', $head);
                $result1 = array("return_status"=>$return_status,"error_message"=>$error_message );
                
                echo '<br>';
                echo $error_message;
                echo '<pre>';
                print_r($head);
                echo '</pre>';
                exit();
        }
                    
                   
        //**********Purchase Enquiry end
         ///////////////////////////////////////// 8.Purchase Quotation Transaction START///////////////////////////////
        function Menu_Txn_Description($code){
        
        $select="SELECT TXN_DESC FROM APPS_TXN_SETUP WHERE TXN_CODE='$loc'";
        $data= $this->db->query($select)->result_array();
        return $data["TXN_DESC"];
    
        }
        function TxnNoQTS()
        {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>$this->session->userdata('MENU_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_OUT_DOC_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return array("txn_no"=>$txn_no);
        
        }
         public function GetLocationrow()
        {
              $sql="SELECT * FROM INVT_M_LOCATION where LOCN_CODE='$code'";
              return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        
        public function getPurchaseQuotationTransaction()
        {
        return $this->db->get('PROC_T_QUOTE_HEAD')->result_array();
        }
        // public function GetLocation()
        //{
        //    return $this->db->get('INVT_M_LOCATION')->result_array();
        //}
        function ProcShipmentLov()
	{
            $sql="SELECT * FROM PROC_M_SUPPLIER ORDER BY SUPL_AC_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        function paymentCode()
	{
            $sql="SELECT * FROM PROC_M_PAY_TERM ORDER BY PT_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
	   
	}
        function ShipMentCode()
	{
            $sql="SELECT * FROM PROC_M_SHIPMENT ORDER BY SH_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
	   
	}
        function ShipCarrierCode()
	{
            $sql="SELECT * FROM PROC_M_CARRIER ORDER BY CA_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
	   
	}
        function FrieghtCode()
	{
            $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE = 'PROC_FREIGHT' AND VSL_ACTIVE_YN = 'Y'ORDER BY VSL_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
	}
        function CurrencyCode()
        {
            $sql="SELECT * FROM PROC_M_CURRENCY ORDER BY CCY_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
	   
	}
        public function getExchangRate($currency_code)
        {
            $date = date('d-M-y');
           //$currency_code=mysql_real_escape_string($_POST["currencycode"]);
           $sql="select SPINE_PROC.PROC_FUNC_EX_RATE('AED', '$currency_code','S','$date') AS exchangerate from DUAL";    
           return  $data = $this->db->query($sql, $return_object = TRUE)->result_array();
            
        }
        public function AddPurchaseQuotation()
        {
            $params = array(
            
                        array('name'=>':P_PQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('PQH_DOC_REF')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_AC_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ADD1', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ADD1')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ADD2', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ADD2')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ADD3', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ADD3')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ADD4', 'value'=>$this->security->xss_clean($this->input->post('null')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_CN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('P_PQH_SUPL_ST_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_CT_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_POSTAL')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_MOBILE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_PHONE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_PHONE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_FAX', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_FAX')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_EMAIL')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_PERSON_NAME', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_PERSON_NAME')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_EFF_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_EFF_FROM_D')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_EFF_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_EFF_UPTO_D')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_DLV_DT')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_PT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_PT_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SHIP_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SHIP_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_CARRIER_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_CARRIER_CO')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FREIGHT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_FREIFHT_CO')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_CCY_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_EXC_RATE', 'value'=>$this->security->xss_clean($this->input->post('PQH_EXC_RATE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_GROSS_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_TAX_PCT', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_TAX_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DISCOUNT_PCT', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DISCOUNT_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_OVERHEAD_PCT', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_OVERHEAD_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_NET_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_NET_VALUE_LC', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_TOTAL_LINES', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DESC', 'value'=>$this->security->xss_clean($this->input->post('PQH_DESC')),'type'=>SQLT_CHR, 'length'=>300),                        
                        array('name'=>':P_PQH_STATUS', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_01', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_02', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_03', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_04', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_05', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_06', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_07', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_08', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_09', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_10', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_11', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_12', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_13', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_14', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_15', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_16', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_17', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_18', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_19', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_20', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_REF_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_REF_DT')), 'type'=>SQLT_CHR,'length'=>300),
                        
                        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_SYS_ID',  'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR,'length'=>300),     
                        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
                    //echo $error_message;
                    //echo '<pre>';
                    //print_r($params);
                    //echo '</pre>';
                    //exit();
                    //
                   $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_QUOTE_HEAD', $params);
                   $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                     
                    $data_count = count($this->input->post('QUOTATION_LINE'));
                    //exit();
                    
            for ($i=0; $i<$data_count; $i++)
            {
              
              $params = array(
            
                        array('name'=>':P_PQL_PQH_SYS_ID', 'value'=>$sys_id,'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQL_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_FLOW_SEQ', 'value'=>$this->security->xss_clean($_POST['PQL_REF_FLOW_SEQ'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_TXN_CODE', 'value'=>$this->security->xss_clean($_POST['PQL_REF_TXN_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_TXN_NO', 'value'=>$this->security->xss_clean($_POST['PQL_REF_TXN_NO'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_HEAD_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PQL_REF_HEAD_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_LINE_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PQL_REF_LINE_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_LINE', 'value'=>$this->security->xss_clean($_POST['QUOTATION_LINE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_ITEM_CODE', 'value'=>$this->security->xss_clean($_POST['PQL_ITEM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_ITEM_DESC', 'value'=>$this->security->xss_clean($_POST['PQL_ITEM_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_UOM_CODE', 'value'=>$this->security->xss_clean($_POST['PQL_UOM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_QTY', 'value'=>$this->security->xss_clean($_POST['PQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_QTY_BU', 'value'=>$this->security->xss_clean('5'),'type'=>SQLT_CHR, 'length'=>300),    
                        array('name'=>':P_PQL_PRICE', 'value'=>$this->security->xss_clean($_POST['PQL_PRICE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_DISCOUNT_PCT', 'value'=>$this->security->xss_clean($_POST['PQL_DISCOUNT_PCT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_DISCOUNT_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_DISCOUNT_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_TAX_PCT', 'value'=>$this->security->xss_clean($_POST['PQL_TAX_PCT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_TAX_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_TAX_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_GROSS_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_GROSS_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_GROSS_VALUE_LC', 'value'=>$this->security->xss_clean($_POST['PQL_GROSS_VALUE_LC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_DESC', 'value'=>$this->security->xss_clean($_POST['PQL_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_LINE_STATUS', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_QTY_ORDERED', 'value'=>$this->security->xss_clean($_POST['PQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_01', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_02', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_03', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_04', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_05', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_06', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_07', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_08', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_09', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_10', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_11', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_12', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_13', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_14', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),                    
                        array('name'=>':P_PQL_FLEX_15', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_16', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_17', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_18', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_19', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_20', 'value'=>$this->security->xss_clean('null'),'type'=>SQLT_CHR, 'length'=>300),
                        
                        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),                        
                        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                     
              
                  
                    $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_QUOTE_LINES', $params);
                    $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                   //                           
                   //echo $error_message;
                   // echo '<pre>';
                   // print_r($params);
                   // echo '</pre>';
                   // exit();
            }                 
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
                                array('name'=>':P_PQDOC_COMP_CODE',  'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_PQH_SYS_ID',        'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_LINE',          'value'=>$this->security->xss_clean($_POST['PQDOC_LINE'][$i]), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_FILE_NAME',         'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_SIZE',          'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_DESC',          'value'=>$this->security->xss_clean($_POST['PQDOC_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_LANG_CODE',   'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID',   'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM',   'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG',   'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             
                            $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_QUOTE_DOCS', $params);
                            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                            
                            //echo "<pre>";
                            //print_r($params);
                            //echo "</pre>";
                            //exit();
                        }
    
        }
         private function set_upload_options()
        {   
        //  upload an image options
            $config = array();
            $config['upload_path'] = 'upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;
        
        
            return $config;
        }

        function FetchEqhCode()
        {
            $comp_code=$this->session->userdata('USER_COMP_CODE');
            $sql="SELECT DISTINCT EQH_SYS_ID, EQH_TXN_CODE ,EQH_TXN_NO, EQH_TXN_DT, EQS_SUPL_CODE 
                    FROM PROC_T_ENQ_HEAD, PROC_T_ENQ_LINES, PROC_T_ENQ_SUPL 
                    WHERE NVL(EQH_APPROVE_YN, 'N')='Y' 
                    AND EQH_COMP_CODE = $comp_code
                    AND EQS_QUOTE_RECIVED_YN = 'N' 
                    AND EQH_SYS_ID = EQS_EQH_SYS_ID 
                    AND EQH_SYS_ID = EQL_EQH_SYS_ID";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         function AjaxQuotationValue($code)
        {
            $code=explode("-",$code);
            $sys_id=$code[0];
            $supplier_Code=$code[1];
            
            $sql="SELECT EQL_REF_LINE_SYS_ID PQL_REF_LINE_SYS_ID, EQL_REF_HEAD_SYS_ID PQL_REF_HEAD_SYS_ID,EQL_REF_TXN_NO PQL_REF_TXN_NO,EQL_REF_TXN_CODE PQL_REF_TXN_CODE, EQL_REF_FLOW_SEQ PQL_REF_FLOW_SEQ,EQH_TXN_CODE PQL_REF_TXN_CODE, EQH_TXN_NO PQL_REF_TXN_NO, EQL_EQH_SYS_ID PQL_REF_HEAD_SYS_ID, EQL_SYS_ID PQL_REF_LINE_SYS_ID, EQL_ITEM_CODE PQL_ITEM_CODE, EQL_ITEM_DESC PQL_ITEM_DESC, EQL_UOM_CODE PQL_UOM_CODE, (NVL(EQL_QTY,0) - NVL(PQL_QTY,0)) PQL_QTY FROM (SELECT EQL_REF_LINE_SYS_ID, EQL_REF_HEAD_SYS_ID,EQL_REF_TXN_NO,EQL_REF_TXN_CODE,EQL_REF_FLOW_SEQ, EQH_TXN_CODE,EQH_TXN_NO,EQL_EQH_SYS_ID,EQL_SYS_ID,EQS_SUPL_CODE,EQL_ITEM_CODE, EQL_ITEM_DESC, EQL_UOM_CODE, NVL(EQL_QTY,0) EQL_QTY FROM PROC_T_ENQ_HEAD,PROC_T_ENQ_LINES,PROC_T_ENQ_SUPL WHERE EQH_SYS_ID = EQL_EQH_SYS_ID AND EQL_EQH_SYS_ID = EQS_EQH_SYS_ID AND EQS_SUPL_CODE ='$supplier_Code' AND EQL_EQH_SYS_ID = '$sys_id') , (SELECT PQL_REF_LINE_SYS_ID,PQH_SUPL_AC_CODE,PQL_ITEM_CODE,PQL_ITEM_DESC,PQL_UOM_CODE,SUM(NVL(PQL_QTY,0)) PQL_QTY FROM PROC_T_QUOTE_LINES,PROC_T_QUOTE_HEAD WHERE PQL_PQH_SYS_ID = PQH_SYS_ID AND PQH_SUPL_AC_CODE = '$supplier_Code' AND PQL_REF_HEAD_SYS_ID ='$sys_id' GROUP BY PQL_REF_LINE_SYS_ID,PQH_SUPL_AC_CODE,PQL_ITEM_CODE,PQL_ITEM_DESC,PQL_UOM_CODE,PQL_REF_FLOW_SEQ,PQL_REF_TXN_CODE,PQL_REF_TXN_NO,PQL_REF_HEAD_SYS_ID,PQL_REF_LINE_SYS_ID)	WHERE EQL_SYS_ID = PQL_REF_LINE_SYS_ID(+) AND EQS_SUPL_CODE = PQH_SUPL_AC_CODE(+) AND (NVL(EQL_QTY,0) - NVL(PQL_QTY,0)) > 0";
            return $this->db->query($sql, $return_object = TRUE)->result_array();

        }
        public function getPurchaseQuotationRow($code)
        {
        
            $sql="SELECT * FROM PROC_T_QUOTE_HEAD where PQH_SYS_ID='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         public function getPurchaseQuotationLine($code)
        {
        
             $sql="SELECT * FROM PROC_T_QUOTE_LINES where PQL_PQH_SYS_ID='$code'";
           
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         public function getPurchaseQuotationDoc($code)
        {
        
             $sql="SELECT PQDOC_LINE,PQDOC_FILE_NAME,PQDOC_DESC,PQDOC_SIZE,PQDOC_SYS_ID FROM PROC_T_QUOTE_DOCS where PQDOC_PQH_SYS_ID='$code'";
           
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         public function SupplierCodeDetails(){
            
            $SupplierCode=mysql_real_escape_string($_POST["suppliercode"]);
            $sql="SELECT * FROM PROC_M_SUPPLIER  where SUPL_AC_CODE='$SupplierCode'";
    
            return  $data = $this->db->query($sql, $return_object = TRUE)->result_array();
            
            //$to_currency=mysql_real_escape_string($_POST["currencycode"]);
            //$sql2="select SPINE_PROC.PROC_FUNC_EX_RATE('AED', '$to_currency','S','12-OCT-15') from DUAL";    
            //return  $data = $this->db->query($sql2, $return_object = TRUE)->result_array();
       
        }
    
         public function updatePurchaseQuotation($sys_id)
        {           
        $params = array(
                        array('name'=>':P_PQH_SYS_ID', 'value'=>$this->security->xss_clean($this->input->post('PQH_SYS_ID')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQH_TXN_NO', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_NO')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('PQH_DOC_REF')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SUPL_ADD1', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ADD1')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ADD2', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ADD2')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SUPL_ADD3', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ADD3')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ADD4', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SUPL_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_CN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_ST_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SUPL_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_CT_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_POSTAL')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SUPL_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_MOBILE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_PHONE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_PHONE')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_SUPL_FAX', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_FAX')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SUPL_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_EMAIL')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_SUPL_PERSON_NAME', 'value'=>$this->security->xss_clean($this->input->post('PQH_SUPL_PERSON_NAME')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_EFF_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_EFF_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_EFF_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_EFF_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_DLV_DT')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_PT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_PT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_SHIP_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_SHIP_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_CARRIER_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_CARRIER_CO')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FREIGHT_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_FREIFHT_CO')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_EXC_RATE', 'value'=>$this->security->xss_clean($this->input->post('PQH_EXC_RATE')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_GROSS_VALUE', 'value'=>$this->security->xss_clean('0'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_TAX_PCT', 'value'=>$this->security->xss_clean('0'), 'type'=>SQLT_CHR,'length'=>300),                        
                        array('name'=>':P_PQH_TAX_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DISCOUNT_PCT', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DISCOUNT_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_OVERHEAD_PCT', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_OVERHEAD_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_NET_VALUE', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_NET_VALUE_LC', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_TOTAL_LINES', 'value'=>$this->security->xss_clean('0'),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_DESC', 'value'=>$this->security->xss_clean($this->input->post('PQH_DESC')), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_STATUS', 'value'=>$this->security->xss_clean($this->input->post('PQH_STATUS')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQH_FLEX_01', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_02', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_03', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_04', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_05', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_06', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_07', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_08', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_09', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_10', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_11', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_12', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_13', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_14', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_15', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_16', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_17', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_18', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_FLEX_19', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQH_FLEX_20', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQH_REF_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_REF_DT')), 'type'=>SQLT_CHR,'length'=>300),
                        
                        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
           
                        
                        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_QUOTE_HEAD', $params);
                        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                        
                        //echo '<pre>';
                        //print_r($params);
                        //echo '</pre>';
                        //exit();
                          
                      $data_count = count($this->input->post('PQL_ITEM_CODE'));
                 
        
                    for ($i=0; $i<$data_count; $i++)
                    {               
                    $params1 = array(
                        array('name'=>':P_PQL_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PQL_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQL_PQH_SYS_ID', 'value'=>$this->security->xss_clean($this->input->post('PQH_SYS_ID')),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'),'type'=>SQLT_CHR, 'length'=>300 ),
                        array('name'=>':P_PQL_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('PQH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('PQH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_FLOW_SEQ', 'value'=>$this->security->xss_clean($_POST['PQL_REF_FLOW_SEQ'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_TXN_CODE', 'value'=>$this->security->xss_clean($_POST['PQL_REF_TXN_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_REF_TXN_NO', 'value'=>$this->security->xss_clean($_POST['PQL_REF_TXN_NO'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_REF_HEAD_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PQL_REF_HEAD_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_REF_LINE_SYS_ID', 'value'=>$this->security->xss_clean($_POST['PQL_REF_LINE_SYS_ID'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_LINE', 'value'=>$this->security->xss_clean($_POST['QUOTATION_LINE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_ITEM_CODE', 'value'=>$this->security->xss_clean($_POST['PQL_ITEM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_ITEM_DESC', 'value'=>$this->security->xss_clean($_POST['PQL_ITEM_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_UOM_CODE', 'value'=>$this->security->xss_clean($_POST['PQL_UOM_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_QTY', 'value'=>$this->security->xss_clean($_POST['PQL_QTY'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_QTY_BU', 'value'=>$this->security->xss_clean($_POST['QTY_BU'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_PRICE', 'value'=>$this->security->xss_clean($_POST['PQL_PRICE'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_DISCOUNT_PCT', 'value'=>$this->security->xss_clean($_POST['PQL_DISCOUNT_PCT'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_DISCOUNT_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_DISCOUNT_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_TAX_PCT', 'value'=>$this->security->xss_clean($_POST['PQL_TAX_PCT'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_TAX_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_TAX_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_GROSS_VALUE', 'value'=>$this->security->xss_clean($_POST['PQL_GROSS_VALUE'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_GROSS_VALUE_LC', 'value'=>$this->security->xss_clean($_POST['PQL_GROSS_VALUE_LC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_DESC', 'value'=>$this->security->xss_clean($_POST['PQL_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
                        array('name'=>':P_PQL_LINE_STATUS', 'value'=>$this->security->xss_clean($_POST['PQL_LINE_STATUS'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_QTY_ORDERED', 'value'=>$this->security->xss_clean($_POST['PQL_QTY'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_PQL_FLEX_01', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),                        
                        array('name'=>':P_PQL_FLEX_02', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_03', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_04', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_05', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_06', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_07', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_08', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_09', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_10', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_11', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_12', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_13', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_14', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_15', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_16', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_17', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_18', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_PQL_FLEX_19', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300), 
                        array('name'=>':P_PQL_FLEX_20', 'value'=>$this->security->xss_clean('null'), 'type'=>SQLT_CHR,'length'=>300),                
                        
                        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                    
                        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_QUOTE_LINES', $params1);
                        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                     
                   
                         
                    }
                    
                    
                    $this->load->library('upload');
        
                        $files = $_FILES;
                        $cpt =$this->input->post('Count_document');
                        
                     
                        for($i=0; $i<$cpt; $i++)
                        {
                               if(($files['userfile']['name'][$i])!='')
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
                                    
                                }else{
                                    $fileName=$_POST['PQDOC_FILE_NAME_HIDDEN'][$i];
                                    $fileSize=$_POST['PQDOC_SIZE'][$i];
                                }
                            
      
                            
                            $params2 = array
                             (
                                array('name'=>':P_PQDOC_COMP_CODE',  'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_PQH_SYS_ID',        'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_SYS_ID',        'value'=>$this->security->xss_clean($_POST['PQDOC_SYS_ID'][$i]), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_LINE',          'value'=>$this->security->xss_clean($_POST['PQDOC_LINE'][$i]), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_FILE_NAME',         'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_SIZE',          'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PQDOC_DESC',          'value'=>$this->security->xss_clean($_POST['PQDOC_DESC'][$i]),'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_LANG_CODE',   'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID',   'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM',   'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG',   'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             
                            $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_QUOTE_DOCS', $params2);
                            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                            
                    
                           
                        }
             
                   
                    
                
        }
        function delete_purchaseQuotation($code)
        {
            $sql="SELECT * FROM PROC_T_QUOTE_LINES where PQL_PQH_SYS_ID='$code' ";
            $result= $this->db->query($sql)->result_array();
            
            foreach($result as $row)
            {
            $params = array(
                array('name'=>':P_PQL_SYS_ID', 'value'=>$this->security->xss_clean($row["PQL_SYS_ID"]),'type'=>SQLT_CHR, 'length'=>300 ),           
                array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                
                $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_QUOTE_LINES', $params);
                $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message );
            }
            
            $sql="SELECT PQDOC_SYS_ID FROM PROC_T_QUOTE_DOCS where PQDOC_PQH_SYS_ID='$code' ";
            $result= $this->db->query($sql)->result_array();
            
            foreach($result as $row)
            {
            $params = array(
                array('name'=>':P_PQDOC_SYS_ID', 'value'=>$this->security->xss_clean($row["PQDOC_SYS_ID"]),'type'=>SQLT_CHR, 'length'=>300 ),           
                array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                
                $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_QUOTE_DOCS', $params);
                $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message );
            }
            
            
            $params = array(           
            array('name'=>':P_PQH_SYS_ID', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),        
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_QUOTE_HEAD', $params);
            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                            
                            //echo "<pre>";
                            //print_r($params);
                            //echo "</pre>";
                            //exit();
        }
        function DeletePurchaseRequestTransactionDoc($code){
             $params = array(
                array('name'=>':P_PQDOC_SYS_ID', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
                array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                
                $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_QUOTE_DOCS', $params);
                $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message );
                   //echo "<pre>";
                            //print_r($params);
                            //echo "</pre>";
                            //exit();
            
        }
       function DeletePurchaseRequestTransactionLine($code)
       {
         $params = array(
                array('name'=>':P_PQL_SYS_ID', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
                array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                
                $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_QUOTE_LINES', $params);
                $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message );
       }
        /////////////////////////////////////8. Purchase Quotation Transaction END//////////////////////////////////////////
        
        /////////////////////PURCHASE ORDER TRANSACTION START//////////////////////////////////////////////////////         
      public  function ViewPurchaseOrderTransaction()
        {
             $sql="SELECT * FROM PROC_T_PO_HEAD ";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function FetchPOTRqh()
        {
            $comp_code=$this->session->userdata('USER_COMP_CODE');
            $sql="SELECT PQH_SYS_ID, PQH_TXN_CODE, PQH_TXN_NO, PQH_TXN_DT FROM PROC_T_QUOTE_HEAD WHERE PQH_COMP_CODE = '$comp_code' AND NVL(PQH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM PROC_T_QUOTE_LINES WHERE PQH_SYS_ID  = PQL_PQH_SYS_ID AND (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))>0)";
           
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function AjaxPOTLine($system_code)
        {
            $sql="SELECT PQL_SYS_ID, PQL_PQH_SYS_ID,PQL_REF_FLOW_SEQ, TXN_FLOW_SEQ, PQH_TXN_CODE, PQH_TXN_NO, PQL_ITEM_CODE, PQL_ITEM_DESC, PQL_UOM_CODE, PQL_PRICE, (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))PQL_QTY,PQL_DISCOUNT_PCT, PQL_TAX_PCT FROM PROC_T_QUOTE_LINES, PROC_T_QUOTE_HEAD, APPS_TXN_SETUP WHERE PQH_TXN_CODE = TXN_CODE AND PQL_PQH_SYS_ID = PQH_SYS_ID AND PQL_PQH_SYS_ID IN( '$system_code') AND (NVL(PQL_QTY,0) - NVL(PQL_QTY_ORDERED,0))>0";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public  function GetTxnCode()
        {
            
        
        $date = date('d-M-y');
                
	    $params = array(
	    array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_TXN_CODE', 'value'=>'PO', 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
	    array('name'=>':P_TXN_OUT_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	   
	   
	   $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
		
	    
	  return array("return_status"=>$return_status);
   
        }
        public  function FetchCity()
        {
            $sql="SELECT * FROM APPS_CITY where CT_ACTIVE_YN='Y'";
               return $this->db->query($sql)->result_array();
           
        }
        public function FetchState()
        {
            $sql="SELECT * FROM APPS_STATE where ST_ACTIVE_YN='Y' ";
               return $this->db->query($sql)->result_array();
           
        }
        public function FetchCountry()
        {
            $sql="SELECT * FROM APPS_COUNTRY where CN_ACTIVE_YN='Y'";
               return $this->db->query($sql)->result_array();
           
        }
        
        function AddPurchaseOrderTransaction()
        {
        
            $params = array
                         (
                            array('name'=>':P_POH_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TXN_CODE',         	'value'=>$this->input->post('POH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TXN_DT',         	'value'=>$this->input->post('POH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DOC_REF',         	'value'=>$this->input->post('POH_DOC_REF'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DOC_REF_DT',         	'value'=>$this->input->post('POH_DOC_REF_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_AC_CODE',    	'value'=>$this->input->post('POH_SUPL_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD1',    	'value'=>$this->input->post('POH_SUPL_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD2',           'value'=>$this->input->post('POH_SUPL_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD3',         	'value'=>$this->input->post('POH_SUPL_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD4',         	'value'=>$this->input->post('POH_SUPL_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_CN_CODE',         'value'=>$this->input->post('POH_SUPL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ST_CODE',    	'value'=>$this->input->post('POH_SUPL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_CT_CODE',        'value'=>$this->input->post('POH_SUPL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_POSTAL',         'value'=>$this->input->post('POH_SUPL_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_MOBILE',         'value'=>$this->input->post('POH_SUPL_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_PHONE',         	'value'=>$this->input->post('POH_SUPL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_FAX',    	'value'=>$this->input->post('POH_SUPL_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_EMAIL',         	'value'=>$this->input->post('POH_SUPL_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_PERSON_NAME',    'value'=>$this->input->post('POH_SUPL_PERSON_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DLV_DT',         	'value'=>$this->input->post('POH_DLV_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DLV_LOCN_CODE',       'value'=>$this->input->post('POH_DLV_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_PT_CODE',         	'value'=>$this->input->post('POH_PT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SHIP_CODE',    	'value'=>$this->input->post('POH_SHIP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SHIP_EDD',    	'value'=>$this->input->post('POH_SHIP_EDD'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_CARRIER_CODE',        'value'=>$this->input->post('POH_CARRIER_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FREIGHT_CODE',        'value'=>$this->input->post('POH_FREIGHT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_CCY_CODE',         	'value'=>$this->input->post('POH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_EXC_RATE',         	'value'=>$this->input->post('POH_EXC_RATE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_GROSS_VALUE',    	'value'=>'0'/*$this->input->post('POH_GROSS_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TAX_PCT',         	'value'=>'0'/*$this->input->post('POH_TAX_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TAX_VALUE',         	'value'=>'0'/*$this->input->post('POH_TAX_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DISCOUNT_PCT',        'value'=>'0'/*$this->input->post('POH_DISCOUNT_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DISCOUNT_VALUE',      'value'=>'0'/*$this->input->post('POH_DISCOUNT_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_OVERHEAD_PCT',    	'value'=>'0'/*$this->input->post('POH_OVERHEAD_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_OVERHEAD_VALUE',      'value'=>'0'/*$this->input->post('POH_OVERHEAD_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_NET_VALUE',         	'value'=>'0'/*$this->input->post('POH_NET_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_NET_VALUE_LC',        'value'=>'0'/*$this->input->post('POH_NET_VALUE_LC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TOTAL_LINES',         'value'=>'0'/*$this->input->post('POH_TOTAL_LINES')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DESC',         	'value'=>$this->input->post('POH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_STATUS',         	'value'=>$this->input->post('POH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_01', 		'value'=>$this->input->post('POH_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_02', 		'value'=>$this->input->post('POH_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_03', 		'value'=>$this->input->post('POH_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_04', 		'value'=>$this->input->post('POH_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_05', 		'value'=>$this->input->post('POH_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_06', 		'value'=>$this->input->post('POH_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_07', 		'value'=>$this->input->post('POH_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_08', 		'value'=>$this->input->post('POH_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_09', 		'value'=>$this->input->post('POH_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_10',    		'value'=>$this->input->post('POH_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_11',         	'value'=>$this->input->post('POH_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_12',         	'value'=>$this->input->post('POH_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_13',         	'value'=>$this->input->post('POH_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_POH_FLEX_14',         	'value'=>$this->input->post('POH_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_15',         	'value'=>$this->input->post('POH_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_16',             'value'=>$this->input->post('POH_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_17',    		'value'=>$this->input->post('POH_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_18',		'value'=>$this->input->post('POH_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_19',    		'value'=>$this->input->post('POH_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_20',   		'value'=>$this->input->post('POH_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SYS_ID', 			'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_TXN_NO', 			'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_ERR_MSG', 		'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
                         );

                        $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_PO_HEAD', $params);
                          $result = array("return_status"=>$return_status,"error_message"=>$return_msg,"txn_no"=>$txn_no,"sys_id"=>$sys_id );
                       
                        echo "<pre>";
                     //   print_r($params);
                        echo "</pre>";
                        
                          $count=count($this->input->post('row_count'));
            
                       //if($count==1)
                       //{
                       // echo "asdsagsa";
                       //      $count=count($_POST['POL_LINE']);
                       //}
                       
                        //echo $count;
                        //exit;
                     
                            //$total_value=count($this->input->post('SAL_LINE'));
                        for($i =0; $i<$count; $i++)
                        {
                            $params1 = array
                             (
                                array('name'=>':P_POL_POH_SYS_ID',         	'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_TXN_DT',         	'value'=>$this->input->post('POH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_FLOW_SEQ',        'value'=>$_POST['POL_REF_FLOW_SEQ'][$i] /*$this->input->post('POL_REF_FLOW_SEQ')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_TXN_CODE',        'value'=>$_POST['POL_REF_TXN_CODE'][$i]/*$this->input->post('POL_REF_TXN_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_TXN_NO',         	'value'=>$_POST['POL_REF_TXN_NO'][$i]/*$this->input->post('POL_REF_TXN_NO')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_HEAD_SYS_ID',    	'value'=>$_POST['POL_REF_HEAD_SYS_ID'][$i]/*$this->input->post('POL_REF_HEAD_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_LINE_SYS_ID',    	'value'=>$_POST['POL_REF_LINE_SYS_ID'][$i]/*$this->input->post('POL_REF_LINE_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_LINE',                'value'=>$_POST['POL_LINE'][$i]/*$this->input->post('POL_LINE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_ITEM_CODE',         	'value'=>$_POST['POL_ITEM_CODE'][$i]/*$this->input->post('POL_ITEM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_ITEM_DESC',         	'value'=>$_POST['POL_ITEM_DESC'][$i]/*$this->input->post('POL_ITEM_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_UOM_CODE',            'value'=>$_POST['POL_UOM_CODE'][$i]/*$this->input->post('POL_UOM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                
                                array('name'=>':P_POL_QTY',    	        'value'=>$_POST['POL_QTY'][$i]/*$this->input->post('POL_QTY')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_BU',               'value'=>$_POST['POL_QTY_BU'][$i]/*$this->input->post('POL_QTY_BU')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_PRICE',               'value'=>$_POST['POL_PRICE'][$i]/*$this->input->post('POL_PRICE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_VALUE',               'value'=>$_POST['POL_VALUE'][$i]/*$this->input->post('POL_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_DISCOUNT_PCT',       	'value'=>$_POST['POL_DISCOUNT_PCT'][$i]/*$this->input->post('POL_DISCOUNT_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_POL_DISCOUNT_VALUE',    	'value'=>$_POST['POL_DISCOUNT_VALUE'][$i]/*$this->input->post('POL_DISCOUNT_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_TAX_PCT',         	'value'=>$_POST['POL_TAX_PCT'][$i]/*$this->input->post('POL_TAX_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_TAX_VALUE',           'value'=>$_POST['POL_TAX_VALUE'][$i]/*$this->input->post('POL_TAX_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_GROSS_VALUE',     	'value'=>$_POST['POL_GROSS_VALUE'][$i]/*$this->input->post('POL_GROSS_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                               
                                array('name'=>':P_POL_GROSS_VALUE_LC',      'value'=>$_POST['POL_GROSS_VALUE_LC'][$i]/*$this->input->post('POL_GROSS_VALUE_LC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_DESC',         	'value'=>$_POST['POL_DESC'][$i]/*$this->input->post('POL_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_POL_LINE_STATUS',    	'value'=>$this->input->post('POL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_SHIPPED',    	'value'=>$this->input->post('POL_QTY_SHIPPED'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_RECEIVED',        'value'=>$_POST['POL_QTY_RECEIVED'][$i]/*$this->input->post('POL_QTY_RECEIVED')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_INSPECTED',       'value'=>$this->input->post('POL_QTY_INSPECTED'), 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_POL_FLEX_01', 		'value'=>$this->input->post('POL_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_02', 		'value'=>$this->input->post('POL_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_03', 		'value'=>$this->input->post('POL_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_04', 		'value'=>$this->input->post('POL_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_05', 		'value'=>$this->input->post('POL_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_06', 		'value'=>$this->input->post('POL_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_07', 		'value'=>$this->input->post('POL_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_08', 		'value'=>$this->input->post('POL_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_09', 		'value'=>$this->input->post('POL_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_10',    		'value'=>$this->input->post('POL_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_11',         	'value'=>$this->input->post('POL_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_12',         	'value'=>$this->input->post('POL_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_13',         	'value'=>$this->input->post('POL_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),      
                                array('name'=>':P_POL_FLEX_14',         	'value'=>$this->input->post('POL_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_15',         	'value'=>$this->input->post('POL_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_16',             'value'=>$this->input->post('POL_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_17',    		'value'=>$this->input->post('POL_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_18',		'value'=>$this->input->post('POL_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_19',    		'value'=>$this->input->post('POL_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_20',   		'value'=>$this->input->post('POL_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                                     
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_PO_LINES', $params1);
                             $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                             echo "<pre>";
                        print_r($params1);
                        echo "</pre>"; 
                       
                        }
                            
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
                            $params2 = array
                             (
                                array('name'=>':P_PODOC_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_POH_SYS_ID',        'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_LINE',         	'value'=>$_POST['PODOC_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_FILE_NAME',         'value'=>$this->security->xss_clean($_FILES['userfile']['name']), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_SIZE',         	'value'=>$this->security->xss_clean($_FILES['userfile']['size']), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_DESC',         	'value'=>$_POST['PODOC_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_PO_DOCS', $params2);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                              echo "<pre>";
                        print_r($params2);
                        echo "</pre>"; 
                        }
                        //exit;
                       
                          
                          
                          
                          
        }

        
        
        public function GetPurOrdTxn($sysid)
        {
            $sql="SELECT * FROM PROC_T_PO_HEAD where POH_SYS_ID='$sysid' ";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
        }
         public function GetPurOrdTxnLine($sysid)
        {
            $sql="SELECT * FROM PROC_T_PO_LINES where POL_POH_SYS_ID='$sysid' ";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
            
        }
        
        public function GetPurOrdTxnDoc($sysid)
        {
            $sql="SELECT PODOC_COMP_CODE, PODOC_POH_SYS_ID, PODOC_SYS_ID, PODOC_LINE, PODOC_FILE_NAME, PODOC_SIZE, PODOC_DESC, PODOC_LANG_CODE, PODOC_CR_UID, PODOC_CR_DT, PODOC_UPD_UID, PODOC_UPD_DT FROM PROC_T_PO_DOCS WHERE PODOC_POH_SYS_ID='$sysid'";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
            
        }
        
        function EditPurchaseOrderTransaction($sys_id)
        {
        
            $params = array
                         (
                            array('name'=>':P_POH_SYS_ID', 		'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TXN_CODE',         	'value'=>$this->input->post('POH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TXN_NO',         	'value'=>$this->input->post('POH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TXN_DT',         	'value'=>$this->input->post('POH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DOC_REF',         	'value'=>$this->input->post('POH_DOC_REF'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DOC_REF_DT',         	'value'=>$this->input->post('POH_DOC_REF_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_AC_CODE',    	'value'=>$this->input->post('POH_SUPL_AC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD1',    	'value'=>$this->input->post('POH_SUPL_ADD1'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD2',           'value'=>$this->input->post('POH_SUPL_ADD2'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD3',         	'value'=>$this->input->post('POH_SUPL_ADD3'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ADD4',         	'value'=>$this->input->post('POH_SUPL_ADD4'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_CN_CODE',         'value'=>$this->input->post('POH_SUPL_CN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_ST_CODE',    	'value'=>$this->input->post('POH_SUPL_ST_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_CT_CODE',        'value'=>$this->input->post('POH_SUPL_CT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_POSTAL',         'value'=>$this->input->post('POH_SUPL_POSTAL'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_MOBILE',         'value'=>$this->input->post('POH_SUPL_MOBILE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_PHONE',         	'value'=>$this->input->post('POH_SUPL_PHONE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_FAX',    	'value'=>$this->input->post('POH_SUPL_FAX'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_EMAIL',         	'value'=>$this->input->post('POH_SUPL_EMAIL'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SUPL_PERSON_NAME',    'value'=>$this->input->post('POH_SUPL_PERSON_NAME'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DLV_DT',         	'value'=>$this->input->post('POH_DLV_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DLV_LOCN_CODE',       'value'=>$this->input->post('POH_DLV_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_PT_CODE',         	'value'=>$this->input->post('POH_PT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SHIP_CODE',    	'value'=>$this->input->post('POH_SHIP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_SHIP_EDD',    	'value'=>$this->input->post('POH_SHIP_EDD'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_CARRIER_CODE',        'value'=>$this->input->post('POH_CARRIER_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FREIGHT_CODE',        'value'=>$this->input->post('POH_FREIGHT_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_CCY_CODE',         	'value'=>$this->input->post('POH_CCY_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_EXC_RATE',         	'value'=>$this->input->post('POH_EXC_RATE'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_GROSS_VALUE',    	'value'=>'0'/*$this->input->post('POH_GROSS_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TAX_PCT',         	'value'=>'0'/*$this->input->post('POH_TAX_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TAX_VALUE',         	'value'=>'0'/*$this->input->post('POH_TAX_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DISCOUNT_PCT',        'value'=>'0'/*$this->input->post('POH_DISCOUNT_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DISCOUNT_VALUE',      'value'=>'0'/*$this->input->post('POH_DISCOUNT_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_OVERHEAD_PCT',    	'value'=>'0'/*$this->input->post('POH_OVERHEAD_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_OVERHEAD_VALUE',      'value'=>'0'/*$this->input->post('POH_OVERHEAD_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_NET_VALUE',         	'value'=>'0'/*$this->input->post('POH_NET_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_NET_VALUE_LC',        'value'=>'0'/*$this->input->post('POH_NET_VALUE_LC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_TOTAL_LINES',         'value'=>'0'/*$this->input->post('POH_TOTAL_LINES')*/, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_DESC',         	'value'=>$this->input->post('POH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_STATUS',         	'value'=>$this->input->post('POH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_01', 		'value'=>$this->input->post('POH_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_02', 		'value'=>$this->input->post('POH_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_03', 		'value'=>$this->input->post('POH_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_04', 		'value'=>$this->input->post('POH_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_05', 		'value'=>$this->input->post('POH_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_06', 		'value'=>$this->input->post('POH_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_07', 		'value'=>$this->input->post('POH_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_08', 		'value'=>$this->input->post('POH_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_09', 		'value'=>$this->input->post('POH_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_10',    		'value'=>$this->input->post('POH_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_11',         	'value'=>$this->input->post('POH_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_12',         	'value'=>$this->input->post('POH_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_13',         	'value'=>$this->input->post('POH_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_POH_FLEX_14',         	'value'=>$this->input->post('POH_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_15',         	'value'=>$this->input->post('POH_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_16',             'value'=>$this->input->post('POH_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_17',    		'value'=>$this->input->post('POH_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_18',		'value'=>$this->input->post('POH_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_19',    		'value'=>$this->input->post('POH_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_POH_FLEX_20',   		'value'=>$this->input->post('POH_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_ERR_MSG', 		'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
                         );

                        $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_PO_HEAD', $params);
                        $result = array("return_status"=>$return_status,"error_message"=>$return_msg );
                       
                        echo "<pre>";
                        print_r($params);
                        echo "</pre>";
                        
                          $count=count($this->input->post('row_count'));
            
                       
                        // $count=2;
                        //exit;
                     
                            //$total_value=count($this->input->post('SAL_LINE'));
                        for($i =0; $i<$count; $i++)
                        {
                            $params1 = array
                             (
                                 array('name'=>':P_POL_SYS_ID',         	'value'=>$this->input->post('POL_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_POH_SYS_ID',         	'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_COMP_CODE',    	        'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_TXN_DT',         	        'value'=>$this->input->post('POH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_FLOW_SEQ',            'value'=>$_POST['POL_REF_FLOW_SEQ'][$i] /*$this->input->post('POL_REF_FLOW_SEQ')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_TXN_CODE',            'value'=>$_POST['POL_REF_TXN_CODE'][$i]/*$this->input->post('POL_REF_TXN_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_TXN_NO',         	'value'=>$_POST['POL_REF_TXN_NO'][$i]/*$this->input->post('POL_REF_TXN_NO')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_HEAD_SYS_ID',    	'value'=>$_POST['POL_REF_HEAD_SYS_ID'][$i]/*$this->input->post('POL_REF_HEAD_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_REF_LINE_SYS_ID',    	'value'=>$_POST['POL_REF_LINE_SYS_ID'][$i]/*$this->input->post('POL_REF_LINE_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_LINE',                    'value'=>$_POST['POL_LINE'][$i]/*$this->input->post('POL_LINE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_ITEM_CODE',         	'value'=>$_POST['POL_ITEM_CODE'][$i]/*$this->input->post('POL_ITEM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_ITEM_DESC',         	'value'=>$_POST['POL_ITEM_DESC'][$i]/*$this->input->post('POL_ITEM_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_UOM_CODE',                'value'=>$_POST['POL_UOM_CODE'][$i]/*$this->input->post('POL_UOM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                
                                array('name'=>':P_POL_QTY',    	                'value'=>$_POST['POL_QTY'][$i]/*$this->input->post('POL_QTY')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_BU',                  'value'=>$_POST['POL_QTY_BU'][$i]/*$this->input->post('POL_QTY_BU')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_PRICE',                   'value'=>$_POST['POL_PRICE'][$i]/*$this->input->post('POL_PRICE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_VALUE',                   'value'=>$_POST['POL_VALUE'][$i]/*$this->input->post('POL_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_DISCOUNT_PCT',       	'value'=>$_POST['POL_DISCOUNT_PCT'][$i]/*$this->input->post('POL_DISCOUNT_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_POL_DISCOUNT_VALUE',    	'value'=>$_POST['POL_DISCOUNT_VALUE'][$i]/*$this->input->post('POL_DISCOUNT_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_TAX_PCT',         	'value'=>$_POST['POL_TAX_PCT'][$i]/*$this->input->post('POL_TAX_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_TAX_VALUE',               'value'=>$_POST['POL_TAX_VALUE'][$i]/*$this->input->post('POL_TAX_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_GROSS_VALUE',     	'value'=>$_POST['POL_GROSS_VALUE'][$i]/*$this->input->post('POL_GROSS_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                               
                                array('name'=>':P_POL_GROSS_VALUE_LC',          'value'=>$_POST['POL_GROSS_VALUE_LC'][$i]/*$this->input->post('POL_GROSS_VALUE_LC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_DESC',         	        'value'=>$_POST['POL_DESC'][$i]/*$this->input->post('POL_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_POL_LINE_STATUS',    	        'value'=>$this->input->post('POL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_SHIPPED',    	        'value'=>$this->input->post('POL_QTY_SHIPPED'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_RECEIVED',            'value'=>$_POST['POL_QTY_RECEIVED'][$i]/*$this->input->post('POL_QTY_RECEIVED')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_QTY_INSPECTED',           'value'=>$this->input->post('POL_QTY_INSPECTED'), 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_POL_FLEX_01', 		'value'=>$this->input->post('POL_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_02', 		'value'=>$this->input->post('POL_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_03', 		'value'=>$this->input->post('POL_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_04', 		'value'=>$this->input->post('POL_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_05', 		'value'=>$this->input->post('POL_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_06', 		'value'=>$this->input->post('POL_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_07', 		'value'=>$this->input->post('POL_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_08', 		'value'=>$this->input->post('POL_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_09', 		'value'=>$this->input->post('POL_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_10',    		'value'=>$this->input->post('POL_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_11',         	'value'=>$this->input->post('POL_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_12',         	'value'=>$this->input->post('POL_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_13',         	'value'=>$this->input->post('POL_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),      
                                array('name'=>':P_POL_FLEX_14',         	'value'=>$this->input->post('POL_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_15',         	'value'=>$this->input->post('POL_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_16',                 'value'=>$this->input->post('POL_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_17',    		'value'=>$this->input->post('POL_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_18',		        'value'=>$this->input->post('POL_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_19',    		'value'=>$this->input->post('POL_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_POL_FLEX_20',   		'value'=>$this->input->post('POL_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
                                     
                                array('name'=>':P_LANG_CODE', 		        'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		        'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		        'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		        'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_PO_LINES', $params1);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                            echo "<pre>";
                            print_r($params1);
                            echo "</pre>"; 
                       
                        }
                            
                        $this->load->library('upload');
        
                        $files = $_FILES;
                        $cpt = $this->input->post('doc_count');
                        
                      
                        for($i=0; $i<$cpt; $i++)
                        {
                            if($files['userfile']['name'][$i]=="")
                            {
                                $_FILES['userfile']['name']=$_POST['PODOC_FILE_NAME'][$i];
                                 $_FILES['userfile']['size']=$_POST['PODOC_SIZE'][$i];
                            }
                            else{
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
                            }
                            $params2 = array
                            (
                               
                                array('name'=>':P_PODOC_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_POH_SYS_ID',        'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_SYS_ID',        'value'=>$_POST['PODOC_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_LINE',         	'value'=>$_POST['PODOC_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_FILE_NAME',         'value'=>$this->security->xss_clean($_FILES['userfile']['name']), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_SIZE',         	'value'=>$this->security->xss_clean($_FILES['userfile']['size']), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_PODOC_DESC',         	'value'=>$_POST['PODOC_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                            );
                             $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_PO_DOCS', $params2);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                            
                            echo "<pre>";
                            print_r($params2);
                            echo "</pre>";  
                        }
                        //exit;  
                          
                          
                          
                          
        }
        
        public function DeletePurchaseOrderTransaction($sysid)
        {
            
            $sql="SELECT PODOC_COMP_CODE, PODOC_POH_SYS_ID, PODOC_SYS_ID, PODOC_LINE, PODOC_FILE_NAME, PODOC_SIZE, PODOC_DESC, PODOC_LANG_CODE, PODOC_CR_UID, PODOC_CR_DT, PODOC_UPD_UID, PODOC_UPD_DT FROM PROC_T_PO_DOCS WHERE PODOC_POH_SYS_ID='$sysid'";
            $return = $this->db->query($sql,$return_object = TRUE)->result_array();
            foreach($return as $val1)
            {
            $params3 = array
                (
                    array('name'=>':P_PODOC_SYS_ID',            'value'=>$val1['PODOC_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PO_DOCS', $params3);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                echo "<pre>";
                print_r($params3);
                echo "</pre>";  
            
            } 
                $sql="SELECT * FROM PROC_T_PO_LINES where POL_POH_SYS_ID='$sysid' ";
                $return1 = $this->db->query($sql,$return_object = TRUE)->result_array();
            foreach($return1 as $val2)
            {
            $params2 = array
                (
                    array('name'=>':P_POL_SYS_ID',            'value'=>$val2['POL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PO_LINES', $params2);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                echo "<pre>";
                print_r($params2);
                echo "</pre>";  
            }
             
            $params1 = array
                (
                    array('name'=>':P_POH_SYS_ID',            'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PO_HEAD', $params1);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                

        }
        
        public function DeletePurchaseOrderTransactionLines($LineSys_id)
	{
            $params2 = array
                (
                    array('name'=>':P_POL_SYS_ID',            'value'=>$LineSys_id, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PO_LINES', $params2);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );

                
        }

        public function DeletePurchaseOrderTransactionDoc($DocSys_id)
	{
            $params3 = array
                (
                    array('name'=>':P_PODOC_SYS_ID',            'value'=>$DocSys_id, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_PO_DOCS', $params3);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
       
        }
        ///////////////////////////////////////PURCHASE ORDER END//////////////////////////////////////
        /////////////////////////////////////// Shipment Advice Strt//////////////////////////////////////////
        
        public function getShipmentadvice()
        {
            return $this->db->get('PROC_T_SA_HEAD')->result_array();
        }
        public function getShipmentadviceRow($code)
        {
            $sql="SELECT * FROM PROC_T_SA_HEAD where SAH_TXN_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        
        public function ShipmentAdvicePulling()
        {
            $code=$this->session->userdata('USER_COMP_CODE');
            $sql="SELECT POH_SYS_ID, POH_TXN_CODE, POH_TXN_NO, POH_TXN_DT FROM PROC_T_PO_HEAD WHERE POH_COMP_CODE = $code
            AND NVL(POH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM PROC_T_PO_LINES WHERE POH_SYS_ID  = POL_POH_SYS_ID AND (NVL(POL_QTY,0) - NVL(POL_QTY_SHIPPED,0))>0)";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        
        public function AjaxShipmentAdvicePulling($system_id)
        {
            $sql="SELECT POL_SYS_ID,POL_POH_SYS_ID,POL_REF_FLOW_SEQ,POL_POH_SYS_ID, TXN_FLOW_SEQ, POH_TXN_CODE, POH_TXN_NO, 
            POL_ITEM_CODE, POL_ITEM_DESC, POL_UOM_CODE, POL_PRICE,POL_DISCOUNT_PCT,POL_TAX_PCT, (NVL(POL_QTY,0) - NVL(POL_QTY_SHIPPED,0))POL_QTY
            FROM PROC_T_PO_LINES, PROC_T_PO_HEAD, APPS_TXN_SETUP 
            WHERE POH_TXN_CODE = TXN_CODE
            AND POL_POH_SYS_ID = POH_SYS_ID
            AND POL_POH_SYS_ID IN( $system_id )
            AND (NVL(POL_QTY,0) - NVL(POL_QTY_SHIPPED,0))>0";
            
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        //Insert Shipment Advice Transaction
        public function addShipmentadvice()
        { 
            $params = array(
            array('name'=>':P_SAH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_TXN_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('SAH_DOC_REF')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_DOC_REF_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_DOC_REF_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_SUPL_ADD1', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD1')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_SUPL_ADD2', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD2')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_SUPL_ADD3', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD3')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_SUPL_ADD4', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD4')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_SUPL_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_CN_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_SUPL_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ST_CODE')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_SUPL_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_CT_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_SUPL_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_POSTAL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_SUPL_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_MOBILE')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_SUPL_PHONE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_PHONE')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_SUPL_FAX', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_FAX')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_SUPL_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_EMAIL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_SUPL_PERSON_NAME', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_CONTACT_PERSON')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_DLV_DT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_PT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_PT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_SHIP_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_SHIP_EDD', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_EDD')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_SHIP_AGENT', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_AGENT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_SHIP_LINE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_LINE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_FROM_PORT', 'value'=>$this->security->xss_clean($this->input->post('SAH_FROM_PORT')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_TO_PORT', 'value'=>$this->security->xss_clean($this->input->post('SAH_TO_PORT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_ETS_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_ETS_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_ETA_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_ETA_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_BL_AWB', 'value'=>$this->security->xss_clean($this->input->post('SAH_ETA_DT')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_CARRIER_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_CARRIER_CODE')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_FREIGHT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_FREIGHT_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_VOYAGE_NO', 'value'=>$this->security->xss_clean($this->input->post('SAH_VOYAGE_NO')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_NO_OF_CONTAINERS', 'value'=>$this->security->xss_clean($this->input->post('SAH_NO_OF_CONTAINERS')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_SIZE_OF_CONTAINERS', 'value'=>$this->security->xss_clean($this->input->post('SAH_SIZE_OF_CONTAINERS')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_CMB', 'value'=>$this->security->xss_clean($this->input->post('SAH_CBM')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_GROSS_WEIGHT', 'value'=>$this->security->xss_clean($this->input->post('SAH_GROSS_WEIGHT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_NET_WEIGHT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_BILL_OF_ENTRY_NO', 'value'=>$this->security->xss_clean($this->input->post('SAH_BILL_OF_ENTRY_NO')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_BILL_OF_ENTRY_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_BILL_OF_ENTRY_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_EXC_RATE', 'value'=>$this->security->xss_clean($this->input->post('SAH_EXC_RATE')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_GROSS_VALUE', 'value'=>$this->security->xss_clean($this->input->post('SAH_GROSS_VALUE')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_TAX_PCT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_TAX_VALUE', 'value'=>"0", 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_DISCOUNT_PCT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_DISCOUNT_VALUE', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_OVERHEAD_PCT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_OVERHEAD_VALUE', 'value'=>"0", 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_NET_VALUE', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_NET_VALUE_LC', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_TOTAL_LINES', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_DESC', 'value'=>$this->security->xss_clean($this->input->post('SAH_DESC')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_STATUS', 'value'=>$this->security->xss_clean($this->input->post('SAH_STATUS')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_01')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_02')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_03')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_04')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_05')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_06')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_07')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_08')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_09')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_10')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_11')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_12')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_13')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_14')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_15')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_16')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SAH_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_17')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_SAH_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_18')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_SAH_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_19')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_SAH_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_20')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_SA_HEAD', $params);
             $result = array("return_status"=>$return_status,"error_message"=>$error_message );
            
          
                        
                          $count=$this->input->post('row_count');
            
                       //if($count==1)
                       //{
                       // echo "asdsagsa";
                       //      $count=count($_POST['POL_LINE']);
                       //}
                       
                        //echo $count;
                        //exit;
                     
                            //$total_value=count($this->input->post('SAL_LINE'));
                        for($i =0; $i<$count; $i++)
                        {
                            $params1 = array
                             (
                                array('name'=>':P_SAL_SAH_SYS_ID',         	'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_COMP_CODE',    	        'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_TXN_DT',         	        'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_FLOW_SEQ',            'value'=>$_POST['SAL_REF_FLOW_SEQ'][$i] /*$this->input->post('POL_REF_FLOW_SEQ')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_TXN_CODE',            'value'=>$_POST['SAL_REF_TXN_CODE'][$i]/*$this->input->post('POL_REF_TXN_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_TXN_NO',         	'value'=>$_POST['SAL_REF_TXN_NO'][$i]/*$this->input->post('SAL_REF_TXN_NO')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_HEAD_SYS_ID',    	'value'=>$_POST['SAL_REF_HEAD_SYS_ID'][$i]/*$this->input->post('SAL_REF_HEAD_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_LINE_SYS_ID',    	'value'=>$_POST['SAL_REF_LINE_SYS_ID'][$i]/*$this->input->post('SAL_REF_LINE_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_LINE',                    'value'=>$_POST['SAL_LINE'][$i]/*$this->input->post('SAL_LINE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_ITEM_CODE',         	'value'=>$_POST['SAL_ITEM_CODE'][$i]/*$this->input->post('SAL_ITEM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_ITEM_DESC',         	'value'=>$_POST['SAL_ITEM_DESC'][$i]/*$this->input->post('SAL_ITEM_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_UOM_CODE',                'value'=>$_POST['SAL_UOM_CODE'][$i]/*$this->input->post('SAL_UOM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY',    	                'value'=>$_POST['SAL_QTY'][$i]/*$this->input->post('SAL_QTY')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_BU',                  'value'=>$_POST['SAL_QTY_BU'][$i]/*$this->input->post('SAL_QTY_BU')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_PRICE',                   'value'=>$_POST['SAL_PRICE'][$i]/*$this->input->post('SAL_PRICE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_VALUE',                   'value'=>$_POST['SAL_VALUE'][$i]/*$this->input->post('SAL_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_DISCOUNT_PCT',       	'value'=>$_POST['SAL_DISCOUNT_PCT'][$i]/*$this->input->post('SAL_DISCOUNT_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_DISCOUNT_VALUE',    	'value'=>$_POST['SAL_DISCOUNT_VALUE'][$i]/*$this->input->post('SAL_DISCOUNT_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_TAX_PCT',         	'value'=>$_POST['SAL_TAX_PCT'][$i]/*$this->input->post('SAL_TAX_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_TAX_VALUE',               'value'=>$_POST['SAL_TAX_VALUE'][$i]/*$this->input->post('SAL_TAX_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_GROSS_VALUE',     	'value'=>$_POST['SAL_GROSS_VALUE'][$i]/*$this->input->post('SAL_GROSS_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_GROSS_VALUE_LC',          'value'=>$_POST['SAL_GROSS_VALUE_LC'][$i]/*$this->input->post('SAL_GROSS_VALUE_LC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_DESC',         	        'value'=>$_POST['SAL_DESC'][$i]/*$this->input->post('SAL_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_LINE_STATUS',    	        'value'=>$this->input->post('SAL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_SHIPPED',    	        'value'=>$this->input->post('SAL_QTY_SHIPPED'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_RECEIVED',            'value'=>$_POST['SAL_QTY_RECEIVED'][$i]/*$this->input->post('SAL_QTY_RECEIVED')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_INSPECTED',           'value'=>$this->input->post('SAL_QTY_INSPECTED'), 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_SAL_FLEX_01', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_02', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_03', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_04', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_05', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_06', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_07', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_08', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_09', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_10',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_11',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_12',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_13',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),      
                                array('name'=>':P_SAL_FLEX_14',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_15',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_16',                 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_17',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_18',		        'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_19',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_20',   		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                     
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_SA_LINES', $params1);
                             $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                        
                        }
                        
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
                            $params2 = array
                             (
                                array('name'=>':P_SADOC_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_SAH_SYS_ID',        'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_LINE',         	'value'=>$_POST['PODOC_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_FILE_NAME',         'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_SIZE',         	'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_DESC',         	'value'=>$_POST['PODOC_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','INSERT_PROC_T_SA_DOCS', $params2);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                               
                        
                        }
                        
               
             
        }
        
        
         
        public function GetShipAdjTxn($sysid)
        {
            $sql="SELECT * FROM PROC_T_SA_HEAD where SAH_SYS_ID='$sysid' ";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
        }
         public function GetShipAdjTxnLine($sysid)
        {
            $sql="SELECT * FROM PROC_T_SA_LINES where SAL_SAH_SYS_ID='$sysid' ";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
            
        }
        
        public function GetShipAdjTxnDoc($sysid)
        {
            $sql="SELECT SADOC_SYS_ID,SADOC_LINE,SADOC_FILE_NAME,SADOC_SIZE,SADOC_DESC FROM PROC_T_SA_DOCS WHERE SADOC_SAH_SYS_ID='$sysid'";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
            
        }
      
       public function EditShipmentAdviceTransaction($sysid)
        { 
            $params = array(
                            array('name'=>':P_SAH_SYS_ID', 'value'=>$this->security->xss_clean($sysid),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_TXN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_TXN_CODE')), 'type'=>SQLT_CHR,'length'=>300),
                            array('name'=>':P_SAH_TXN_NO', 'value'=>$this->security->xss_clean($this->input->post('SAH_TXN_NO')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_TXN_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_TXN_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_DOC_REF', 'value'=>$this->security->xss_clean($this->input->post('SAH_DOC_REF')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_DOC_REF_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_DOC_REF_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_SUPL_AC_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_AC_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_SUPL_ADD1', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD1')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_SUPL_ADD2', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD2')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_SUPL_ADD3', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD3')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_SUPL_ADD4', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ADD4')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_SUPL_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_CN_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_SUPL_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_ST_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_SUPL_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_CT_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_SUPL_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_POSTAL')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_SUPL_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_MOBILE')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_SUPL_PHONE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_PHONE')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_SUPL_FAX', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_FAX')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_SUPL_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_EMAIL')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_SUPL_PERSON_NAME', 'value'=>$this->security->xss_clean($this->input->post('SAH_SUPL_CONTACT_PERSON')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_DLV_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_DLV_DT')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_DLV_LOCN_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_DLV_LOCN_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_PT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_PT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_SHIP_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_CODE')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_SHIP_EDD', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_EDD')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_SHIP_AGENT', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_AGENT')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_SHIP_LINE', 'value'=>$this->security->xss_clean($this->input->post('SAH_SHIP_LINE')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_FROM_PORT', 'value'=>$this->security->xss_clean($this->input->post('SAH_FROM_PORT')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_TO_PORT', 'value'=>$this->security->xss_clean($this->input->post('SAH_TO_PORT')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_ETS_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_ETS_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_ETA_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_ETA_DT')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_BL_AWB', 'value'=>$this->security->xss_clean($this->input->post('SAH_ETA_DT')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_CARRIER_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_CARRIER_CODE')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_FREIGHT_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_FREIGHT_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_VOYAGE_NO', 'value'=>$this->security->xss_clean($this->input->post('SAH_VOYAGE_NO')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_NO_OF_CONTAINERS', 'value'=>$this->security->xss_clean($this->input->post('SAH_NO_OF_CONTAINERS')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_SIZE_OF_CONTAINERS', 'value'=>$this->security->xss_clean($this->input->post('SAH_SIZE_OF_CONTAINERS')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_CMB', 'value'=>$this->security->xss_clean($this->input->post('SAH_CBM')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_GROSS_WEIGHT', 'value'=>$this->security->xss_clean($this->input->post('SAH_GROSS_WEIGHT')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_NET_WEIGHT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_BILL_OF_ENTRY_NO', 'value'=>$this->security->xss_clean($this->input->post('SAH_BILL_OF_ENTRY_NO')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_BILL_OF_ENTRY_DT', 'value'=>$this->security->xss_clean($this->input->post('SAH_BILL_OF_ENTRY_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('SAH_CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_EXC_RATE', 'value'=>$this->security->xss_clean($this->input->post('SAH_EXC_RATE')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_GROSS_VALUE', 'value'=>$this->security->xss_clean($this->input->post('SAH_GROSS_VALUE')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_TAX_PCT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_TAX_VALUE', 'value'=>"0", 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_DISCOUNT_PCT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_DISCOUNT_VALUE', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_OVERHEAD_PCT', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_OVERHEAD_VALUE', 'value'=>"0", 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_NET_VALUE', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_NET_VALUE_LC', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_TOTAL_LINES', 'value'=>"0",'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_DESC', 'value'=>$this->security->xss_clean($this->input->post('SAH_DESC')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_STATUS', 'value'=>$this->security->xss_clean($this->input->post('SAH_STATUS')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_FLEX_01', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_01')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_FLEX_02', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_02')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_FLEX_03', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_03')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_FLEX_04', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_04')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_FLEX_05', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_05')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_FLEX_06', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_06')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_FLEX_07', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_07')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_FLEX_08', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_08')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_FLEX_09', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_09')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_FLEX_10', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_10')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_FLEX_11', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_11')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_FLEX_12', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_12')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_FLEX_13', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_13')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_FLEX_14', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_14')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_FLEX_15', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_15')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_FLEX_16', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_16')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_SAH_FLEX_17', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_17')),'type'=>SQLT_CHR, 'length'=>300 ),
                            array('name'=>':P_SAH_FLEX_18', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_18')), 'type'=>SQLT_CHR,'length'=>300), 
                            array('name'=>':P_SAH_FLEX_19', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_19')),'type'=>SQLT_CHR, 'length'=>300),      
                            array('name'=>':P_SAH_FLEX_20', 'value'=>$this->security->xss_clean($this->input->post('SAH_FLEX_20')),'type'=>SQLT_CHR, 'length'=>300),
                            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR,'length'=>300),
                            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                            
                            $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_SA_HEAD', $params);
                            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                            

                        
                          $count=$this->input->post('row_count');
            
                       //if($count==1)
                       //{
                       // echo "asdsagsa";
                       //      $count=count($_POST['POL_LINE']);
                       //}
                       
                        //echo $count;
                        //exit;
                     
                            //$total_value=count($this->input->post('SAL_LINE'));
                        for($i=0; $i<$count; $i++)
                        {
                            $params1 = array
                             (
                                array('name'=>':P_SAL_SYS_ID',         	        'value'=>$_POST['SAL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_SAH_SYS_ID',         	'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_COMP_CODE',    	        'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_TXN_DT',         	        'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_FLOW_SEQ',            'value'=>$_POST['SAL_REF_FLOW_SEQ'][$i] /*$this->input->post('POL_REF_FLOW_SEQ')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_TXN_CODE',            'value'=>$_POST['SAL_REF_TXN_CODE'][$i]/*$this->input->post('POL_REF_TXN_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_TXN_NO',         	'value'=>$_POST['SAL_REF_TXN_NO'][$i]/*$this->input->post('SAL_REF_TXN_NO')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_HEAD_SYS_ID',    	'value'=>$_POST['SAL_REF_HEAD_SYS_ID'][$i]/*$this->input->post('SAL_REF_HEAD_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_REF_LINE_SYS_ID',    	'value'=>$_POST['SAL_REF_LINE_SYS_ID'][$i]/*$this->input->post('SAL_REF_LINE_SYS_ID')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_LINE',                    'value'=>$_POST['SAL_LINE'][$i]/*$this->input->post('SAL_LINE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_ITEM_CODE',         	'value'=>$_POST['SAL_ITEM_CODE'][$i]/*$this->input->post('SAL_ITEM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_ITEM_DESC',         	'value'=>$_POST['SAL_ITEM_DESC'][$i]/*$this->input->post('SAL_ITEM_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_UOM_CODE',                'value'=>$_POST['SAL_UOM_CODE'][$i]/*$this->input->post('SAL_UOM_CODE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY',    	                'value'=>$_POST['SAL_QTY'][$i]/*$this->input->post('SAL_QTY')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_BU',                  'value'=>$_POST['SAL_QTY_BU'][$i]/*$this->input->post('SAL_QTY_BU')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_PRICE',                   'value'=>$_POST['SAL_PRICE'][$i]/*$this->input->post('SAL_PRICE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_VALUE',                   'value'=>$_POST['SAL_VALUE'][$i]/*$this->input->post('SAL_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_DISCOUNT_PCT',       	'value'=>$_POST['SAL_DISCOUNT_PCT'][$i]/*$this->input->post('SAL_DISCOUNT_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_DISCOUNT_VALUE',    	'value'=>$_POST['SAL_DISCOUNT_VALUE'][$i]/*$this->input->post('SAL_DISCOUNT_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_TAX_PCT',         	'value'=>$_POST['SAL_TAX_PCT'][$i]/*$this->input->post('SAL_TAX_PCT')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_TAX_VALUE',               'value'=>$_POST['SAL_TAX_VALUE'][$i]/*$this->input->post('SAL_TAX_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_GROSS_VALUE',     	'value'=>$_POST['SAL_GROSS_VALUE'][$i]/*$this->input->post('SAL_GROSS_VALUE')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_GROSS_VALUE_LC',          'value'=>$_POST['SAL_GROSS_VALUE_LC'][$i]/*$this->input->post('SAL_GROSS_VALUE_LC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_DESC',         	        'value'=>$_POST['SAL_DESC'][$i]/*$this->input->post('SAL_DESC')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_LINE_STATUS',    	        'value'=>$this->input->post('SAL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_SHIPPED',    	        'value'=>$this->input->post('SAL_QTY_SHIPPED'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_RECEIVED',            'value'=>$_POST['SAL_QTY_RECEIVED'][$i]/*$this->input->post('SAL_QTY_RECEIVED')*/, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_QTY_INSPECTED',           'value'=>$this->input->post('SAL_QTY_INSPECTED'), 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_SAL_FLEX_01', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_02', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_03', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_04', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_05', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_06', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_07', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_08', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_09', 		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_10',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_11',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_12',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_13',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),      
                                array('name'=>':P_SAL_FLEX_14',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_15',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_16',                 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_17',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_18',		        'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_19',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SAL_FLEX_20',   		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                                     
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_SA_LINES', $params1);
                             $result = array("return_status"=>$return_status,"error_message"=>$error_message );

                       
                        }
                        
                        $this->load->library('upload');
        
                        $files = $_FILES;
                        $cpt = count($_FILES['userfile']['name']);
                        
                      
                        for($i=0; $i<$cpt-1; $i++)
                        {
                            if($files['userfile']['name'][$i]!=""){
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
                            }
                            else{
                                $fileName=$_POST['SADOC_FILE_NAME'][$i];
                                $fileSize=$_POST['SADOC_SIZE'][$i];
                            }
                            $params2 = array
                             (
                                array('name'=>':P_SADOC_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_SAH_SYS_ID',    'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_SYS_ID',        'value'=>$_POST['SADOC_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_LINE',         	'value'=>$_POST['PODOC_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_FILE_NAME',     'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_SIZE',         	'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_SADOC_DESC',         	'value'=>$_POST['PODOC_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_PROC','UPDATE_PROC_T_SA_DOCS', $params2);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );

                        
                        }
                       
        }
        
       
       //Delete Shipment Advice Transaction
       
         
        public function DeleteShipmentAdviceTransaction($sysid)
        {
            
            $sql="SELECT  SADOC_SYS_ID FROM PROC_T_SA_DOCS WHERE SADOC_SAH_SYS_ID='$sysid'";
            $return = $this->db->query($sql,$return_object = TRUE)->result_array();
            foreach($return as $val1)
            {
            $params3 = array
                (
                    array('name'=>':P_SADOC_SYS_ID',            'value'=>$val1['SADOC_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_SA_DOCS', $params3);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );

            
            } 
                $sql="SELECT * FROM PROC_T_SA_LINES where SAL_SAH_SYS_ID='$sysid' ";
                $return1 = $this->db->query($sql,$return_object = TRUE)->result_array();
            foreach($return1 as $val2)
            {
            $params2 = array
                (
                    array('name'=>':P_SAL_SYS_ID',              'value'=>$val2['SAL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_SA_LINES', $params2);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );

            }
             
            $params1 = array
                (
                    array('name'=>':P_SAH_SYS_ID',              'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_SA_HEAD', $params1);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                

        }
        
        public function DeleteShipmentAdviceTransactionLines($LineSys_id)
	{
            $params2 = array
                (
                    array('name'=>':P_SAL_SYS_ID',            'value'=>$LineSys_id, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_SA_LINES', $params2);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        }
       
        public function DeleteShipmentAdviceTransactionDocs($DocsSys_id)
	{
            $params3 = array
                (
                    array('name'=>':P_SADOC_SYS_ID',            'value'=>$DocsSys_id, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                    array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                );
                 $this->db->stored_procedure('SPINE_PROC','DELETE_PROC_T_SA_DOCS', $params3);
                $result = array("return_status"=>$return_status,"error_message"=>$error_message );
        }
    ///////////////////////////////////////Shipment Advice end/////////////////////////////////////////////////////////////////////////////
    }

