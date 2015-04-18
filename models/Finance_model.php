<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Finance_model extends CI_Model {
                
                //1.Finance Currency Master Start
          public function getcurrencymaster()
        {
            return $this->db->get('FINC_M_CURRENCY')->result_array();
        }
        public function FINC_EX_RTYP(){
            $sql="SELECT VSL_CODE, VSL_DESC FROM APPS_VALUE_SET_LINES WHERE VSL_VSH_CODE='FINC_EX_RTYP' AND VSL_ACTIVE_YN='Y' ORDER BY VSL_DESC";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function getcurrencymasterRow($code)
        {
        
            $sql="SELECT * FROM FINC_M_CURRENCY where CCY_CODE='$code'";
          return $this->db->query($sql, $return_object = TRUE)->result_array();
     
        }
         public function getcurrencymasterExch($code)
        {
        
            $sql="SELECT * FROM FINC_M_CURRENCY_EXCH where CEX_FM_CCY_CODE='$code'";
          return $this->db->query($sql, $return_object = TRUE)->result_array();
     
        } 
        
        public function addCurrencyMaster()
        {
            if($this->input->post('checkbox')=="Y"){
                $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
            array('name'=>':P_CCY_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CCY_DESC', 'value'=>$this->security->xss_clean($this->input->post('CCY_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CCY_UNIT', 'value'=>$this->security->xss_clean($this->input->post('CCY_UNIT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_SYMBOL', 'value'=>$this->security->xss_clean($this->input->post('CCY_SYMBOL')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_PRECISION', 'value'=>$this->security->xss_clean($this->input->post('CCY_PRECISION')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CCY_FORMAT', 'value'=>$this->security->xss_clean($this->input->post('CCY_FORMAT')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CCY_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300), 
            
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_CURRENCY', $params);
           

        
            $data_count = count($this->input->post('CEX_FM_CCY_CODE'));
            for ($i=0; $i<$data_count-1; $i++){
            $params = array(
            array('name'=>':P_CEX_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_FM_CCY_CODE', 'value'=>$this->security->xss_clean($_POST['CEX_FM_CCY_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CEX_TO_CCY_CODE', 'value'=>$this->security->xss_clean($_POST['CEX_TO_CCY_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CEX_EFF_FROM_DT', 'value'=>$this->security->xss_clean($_POST['CEX_EFF_FROM_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CEX_EFF_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['CEX_EFF_UPTO_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_RATE_TYPE', 'value'=>$this->security->xss_clean($_POST['CEX_RATE_TYPE'][$i]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CEX_RATE', 'value'=>$this->security->xss_clean($_POST['CEX_RATE'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300), 
           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_CURRENCY_EXCH', $params);

            
           
            }
               return   $result = array("return_status"=>$return_status,"error_message"=>$error_message );

        }
        
        
        public function editcurrencymaster()
        {
       
        
        if($this->input->post('checkbox')=="Y")
        {
                $check="Y";
            }
            else{
                $check="N";
            }
            
        
            $params = array(
        
            array('name'=>':P_CCY_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CCY_DESC', 'value'=>$this->security->xss_clean($this->input->post('CCY_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CCY_UNIT', 'value'=>$this->security->xss_clean($this->input->post('CCY_UNIT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_SYMBOL', 'value'=>$this->security->xss_clean($this->input->post('CCY_SYMBOL')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_PRECISION', 'value'=>$this->security->xss_clean($this->input->post('CCY_PRECISION')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CCY_FORMAT', 'value'=>$this->security->xss_clean($this->input->post('CCY_FORMAT')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CCY_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CCY_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('CCY_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CCY_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
            
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));

            $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_CURRENCY',$params);

           
            $data_count = count($this->input->post('CEX_FM_CCY_CODE'));
            for ($i=0; $i<$data_count; $i++){
            $params = array(
            array('name'=>':P_CEX_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_FM_CCY_CODE', 'value'=>$this->security->xss_clean($_POST['CEX_FM_CCY_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CEX_TO_CCY_CODE', 'value'=>$this->security->xss_clean($_POST['CEX_TO_CCY_CODE'][$i]),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_CEX_EFF_FROM_DT', 'value'=>$this->security->xss_clean($_POST['CEX_EFF_FROM_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_CEX_EFF_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['CEX_EFF_UPTO_DT'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_RATE_TYPE', 'value'=>$this->security->xss_clean($_POST['CEX_RATE_TYPE'][$i]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CEX_RATE', 'value'=>$this->security->xss_clean($_POST['CEX_RATE'][$i]),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300), 
           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $result=$this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_CURRENCY_EXCH', $params);
                
            }
                  return $result = array("return_status"=>$return_status,"error_message"=>$error_message );

        }
         
    function DeleteCurrencyMaster($code){
        
        $sql="SELECT * FROM FINC_M_CURRENCY_EXCH where CEX_FM_CCY_CODE='$code'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
    
        foreach($result as $row)
        {
      
            $params = array(       
            array('name'=>':P_CEX_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CEX_FM_CCY_CODE', 'value'=>$this->security->xss_clean($row["CEX_FM_CCY_CODE"]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CEX_TO_CCY_CODE', 'value'=>$this->security->xss_clean($row["CEX_TO_CCY_CODE"]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CEX_EFF_FROM_DT', 'value'=>$this->security->xss_clean($row["CEX_EFF_FROM_DT"]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CEX_EFF_UPTO_DT', 'value'=>$this->security->xss_clean($row["CEX_EFF_UPTO_DT"]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CEX_RATE_TYPE', 'value'=>$this->security->xss_clean($row["CEX_RATE_TYPE"]), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_CURRENCY_EXCH',$params);
            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
       
            
        }
        
        $params = array(       
        array('name'=>':P_CCY_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_CCY_CODE', 'value'=>$this->security->xss_clean($code), 'type'=>SQLT_CHR,'length'=>300), 
        array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
    
        $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_CURRENCY',$params);
        $result = array("return_status"=>$return_status,"error_message"=>$error_message );
    }
    function DeleteCurrencyExch($from,$to,$date1,$date2,$rate)
    {
        $params = array(       
        array('name'=>':P_CEX_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
        array('name'=>':P_CEX_FM_CCY_CODE', 'value'=>$this->security->xss_clean($from), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_CEX_TO_CCY_CODE', 'value'=>$this->security->xss_clean($to), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_CEX_EFF_FROM_DT', 'value'=>$this->security->xss_clean($date1), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_CEX_EFF_UPTO_DT', 'value'=>$this->security->xss_clean($date2), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_CEX_RATE_TYPE', 'value'=>$this->security->xss_clean($rate), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
        array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
        
        $result = $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_CURRENCY_EXCH',$params);
        array("return_status"=>$return_status,"error_message"=>$error_message );    
      
    }
        
        
        //Finance Currency Master End
                
                
                
                 //2.Finance Category Master Start
          function Ajax_CATG_CODE($code)
        {
            $sql="select * from FINC_M_CATEGORY where CATG_CODE='$code'";
            $result= $this->db->query($sql, $return_object = TRUE)->result_array();
            return Count($result);
        }
          public function getcategorymaster()
        {
            return $this->db->get('FINC_M_CATEGORY')->result_array();
        }
        
        public function getcategorymasterRow($code)
        {
        
            $sql="SELECT * FROM FINC_M_CATEGORY where CATG_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        } 
        
          public function addCategoryMaster()
        {

       
            if($this->input->post('checkbox')=="Y"){
                $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
            array('name'=>':P_CATG_CODE', 'value'=>$this->security->xss_clean($this->input->post('CATG_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CATG_DESC', 'value'=>$this->security->xss_clean($this->input->post('CATG_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CATG_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_CATG_SYS_VAL_YN', 'value'=>$this->security->xss_clean("Y"),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_CATEGORY', $params);
            
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message );

    }
            public function editcategorymaster()
            {
                 if($this->input->post('checkbox')=="Y"){
                $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
            array('name'=>':P_CATG_CODE', 'value'=>$this->security->xss_clean($this->input->post('CATG_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_CATG_DESC', 'value'=>$this->security->xss_clean($this->input->post('CATG_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_CATG_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),     
            array('name'=>':P_CATG_SYS_VAL_YN', 'value'=>$this->security->xss_clean($this->input->post('NULL')),'type'=>SQLT_CHR, 'length'=>300),
               array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));

             $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_CATEGORY',$params);
          return $result = array("return_status"=>$return_status,"error_message"=>$error_message );

       
        }
        function DeleteCategoryMaster($code)
        {
            $params = array(       
            
            array('name'=>':P_CATG_CODE', 'value'=>$this->security->xss_clean($code), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_CATEGORY',$params);
           return $result = array("return_status"=>$return_status,"error_message"=>$error_message );    
            
        }
        // End
        //3.ActivityMaster
        public function viewActivityMaster()
        {
            $sql="SELECT * FROM FINC_M_ACTIVITY_HEAD";
            return $this->db->query($sql, $return_object = TRUE)->result_array();   
            
        }
        public function AddActivityMasterHead()
        {
            $params = array(
            array('name'=>':P_ACTH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ACTH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ACTH_DESC', 'value'=>$this->security->xss_clean($this->input->post('ACTH_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_ACTH_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('ACTH_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ACTH_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('ACTH_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTH_ACTIVE_YN', 'value'=>$this->input->post('a_master'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)   , 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_ACTIVITY_HEAD',$params);
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message);
        }
        function AddActivityMasterLine()
        {
            echo $count=count($this->input->post('ACTL_CODE'));
            for($i=0;$i<$count-1;$i++)
            {
            $params = array(
            array('name'=>':P_ACTL_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTL_ACTH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ACTH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ACTL_CODE', 'value'=>$_POST['ACTL_CODE'][$i], 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ACTL_DESC', 'value'=>$_POST['ACTL_DESC'][$i],'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_ACTL_FROM_DT', 'value'=>$_POST['ACTL_FROM_DT'][$i],'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ACTL_UPTO_DT', 'value'=>$_POST['ACTL_UPTO_DT'][$i],'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTL_ACTIVE_YN', 'value'=>$_POST['am_active'][$i], 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)   , 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_ACTIVITY_LINES',$params);
            }
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message);
        }
        function AjaxActiveMaster($ACTH_CODE)
        {
            $sql="select count(ACTH_CODE) from FINC_M_ACTIVITY_HEAD where ACTH_CODE='$ACTH_CODE'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function AjaxActiveMasterLine($ACTL_CODE)
        {
            $sql="select count(ACTL_CODE) from FINC_M_ACTIVITY_LINES where ACTL_CODE='$ACTL_CODE'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
    
        }
        function EditACM_Head($id)
        {
            $sql="select * from FINC_M_ACTIVITY_HEAD where ACTH_CODE='$id'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function EditACM_Line($id)
        {
            $sql="select * from FINC_M_ACTIVITY_LINES where ACTL_ACTH_CODE ='$id'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function UpdateActivityMasterHead()
        {
            $params = array(
            array('name'=>':P_ACTH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ACTH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ACTH_DESC', 'value'=>$this->security->xss_clean($this->input->post('ACTH_DESC')),'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_ACTH_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('ACTH_FROM_DT')),'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ACTH_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('ACTH_UPTO_DT')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTH_ACTIVE_YN', 'value'=>$this->input->post('a_master'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)   , 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_ACTIVITY_HEAD',$params);
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message);
        }
        function UpdateActivityMasterLine()
        {
            echo $count=count($this->input->post('ACTL_CODE'));
            for($i=0;$i<$count-1;$i++)
            {
            $params = array(
            array('name'=>':P_ACTL_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTL_ACTH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ACTH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ACTL_CODE', 'value'=>$_POST['ACTL_CODE'][$i], 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ACTL_DESC', 'value'=>$_POST['ACTL_DESC'][$i],'type'=>SQLT_CHR, 'length'=>300),      
            array('name'=>':P_ACTL_FROM_DT', 'value'=>$_POST['ACTL_FROM_DT'][$i],'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ACTL_UPTO_DT', 'value'=>$_POST['ACTL_UPTO_DT'][$i],'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ACTL_ACTIVE_YN', 'value'=>$_POST['am_active'][$i], 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)   , 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_ACTIVITY_LINES',$params);
            }
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message);
        }
        function DeleteACMline($comp,$code,$lan)
        {
        $sql="SELECT * FROM FINC_M_ACTIVITY_LINES where ACTL_ACTH_CODE='$code'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        foreach($result as $row)
        {
        $params = array(
        array('name'=>':P_ACTL_COMP_CODE', 'value'=>$row['ACTL_COMP_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ACTL_ACTH_CODE', 'value'=>$row['ACTL_ACTH_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ACTL_CODE', 'value'=>$row['ACTL_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$row['ACTL_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$row['ACTL_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        }
        $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_ACTIVITY_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        }
        function DeleteDeleteACMHead($comp,$code,$lan,$uid)
        {
        $params = array(
        array('name'=>':P_ACTH_COMP_CODE', 'value'=>$comp, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ACTH_CODE', 'value'=>$code, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_ACTIVITY_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );    
        }
        // End
        
          // Analysis Master
        public function ViewAnalysisMaster()
        {
            return $this->db->get('FINC_M_ANALYSIS_HEAD')->result_array();
        }
        
        public function AddAnalysisMaster()
        {
            if($this->input->post('checkbox')=="Y"){
                $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
             array('name'=>':P_ANLH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ANLH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_DESC', 'value'=>$this->security->xss_clean($this->input->post('ANLH_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('ANLH_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('ANLH_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_ANALYSIS_HEAD', $params);
            
            $data_count = count($this->input->post('ANLL_CODE'));
            for ($i=0; $i<$data_count-1; $i++)
            {
                if($_POST['ANLL_YN'][$i]=="Y")
                {
              $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
            array('name'=>':P_ANLL_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLL_ANLH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ANLH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_CODE', 'value'=>$this->security->xss_clean($_POST['ANLL_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_DESC', 'value'=>$this->security->xss_clean($_POST['ANLL_DESC'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_FROM_DT', 'value'=>$this->security->xss_clean($_POST['ANLL_FROM_DT'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['ANLL_UPTODATE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_ANALYSIS_LINES', $params);
            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
       
      
            }
            return $result = array("return_status"=>$return_status,"error_message"=>$error_message );

           
    }
       public function getAnalysisMaster($code)
        {
              $sql="SELECT * FROM FINC_M_ANALYSIS_HEAD where ANLH_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        public function getAnalysisLine($code)
        {
              $sql="SELECT * FROM FINC_M_ANALYSIS_LINES where ANLL_ANLH_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
             public function EditAnalysisMaster()
             {
        if($this->input->post('checkbox')=="Y"){
                $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
             array('name'=>':P_ANLH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ANLH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_DESC', 'value'=>$this->security->xss_clean($this->input->post('ANLH_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('ANLH_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('ANLH_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_ANALYSIS_HEAD', $params);
     
         
            $data_count = count($this->input->post('ANLL_CODE'));
            for ($i=0; $i<$data_count-1; $i++)
            {
                if($_POST['ANLL_YN'][$i]=="Y")
                {
              $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
            array('name'=>':P_ANLL_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLL_ANLH_CODE', 'value'=>$this->security->xss_clean($this->input->post('ANLH_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_CODE', 'value'=>$this->security->xss_clean($_POST['ANLL_CODE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_DESC', 'value'=>$this->security->xss_clean($_POST['ANLL_DESC'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_FROM_DT', 'value'=>$this->security->xss_clean($_POST['ANLL_FROM_DT'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_UPTO_DT', 'value'=>$this->security->xss_clean($_POST['ANLL_UPTODATE'][$i]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLL_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_ANALYSIS_LINES', $params);
            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
            }
           return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
  
        }
        function DeleteAnalysisLine($headcode,$linecode)
        {
            $params = array(
            array('name'=>':P_ANLH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLL_ANLH_CODE', 'value'=>$this->security->xss_clean($headcode), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_CODE', 'value'=>$this->security->xss_clean($linecode), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_ANALYSIS_LINES', $params);
           return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
            
        }
         function DeleteAnalysisMaster($code)
        {
            $sql="SELECT * FROM FINC_M_ANALYSIS_LINES where ANLL_ANLH_CODE='$code' ";
            $result= $this->db->query($sql)->result_array();
            foreach($result as $row)
            {
            $params = array(
            array('name'=>':P_ANLH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLL_ANLH_CODE', 'value'=>$this->security->xss_clean($code), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_ANLH_CODE', 'value'=>$this->security->xss_clean($row["ANLL_CODE"]), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_ANALYSIS_LINES', $params);
            $result = array("return_status"=>$return_status,"error_message"=>$error_message );

            }
            $params = array(
            array('name'=>':P_ANLH_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_ANLH_CODE', 'value'=>$this->security->xss_clean($code), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_ANALYSIS_HEAD', $params);
        return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
            
        }
        function AJAX_ANLH_CODE($ANLH_CODE)
        {
        $sql="SELECT * FROM FINC_M_ANALYSIS_HEAD where ANLH_CODE='$ANLH_CODE'";
        $result=$this->db->query($sql)->result();
        return Count($result);
        }
        function AJAX_ANLL_CODE($ANLL_CODE)
        {
        $sql="SELECT * FROM FINC_M_ANALYSIS_LINES where ANLL_CODE='$ANLL_CODE'";
        $result=$this->db->query($sql)->result();
        return Count($result);
       
        }
        // End
        
        //Bank Master Start
            

        
         public function getbankmaster()
        {
            return $this->db->get('FINC_M_BANK')->result_array();
        }
        
        public function getbankmasterRow($code)
        {
        
            $sql="SELECT * FROM FINC_M_BANK where BANK_CODE='$code'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        } 
        
        //Insert Bank Master
        private function set_upload_options() //  upload an image options
	{   	
	    $config = array();
	    $config['upload_path'] = 'upload/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;		
	    return $config;
	}
         public function AddBankMaster()
        {
            
            if($this->input->post('checkbox')=="Y"){
                $check="Y";
            }
            else{
                $check="N";
            }
            $params = array(
             array('name'=>':P_BANK_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_BANK_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_DESC', 'value'=>$this->security->xss_clean($this->input->post('BANK_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ALIAS', 'value'=>$this->security->xss_clean($this->input->post('BANK_ALIAS')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ADDR1', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD1')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ADDR2', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD2')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ADDR3', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD3')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ADDR4', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD4')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_CN_CODE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_ST_CODE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_CT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_CT_AR_CODE', 'value'=>"none", 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('BANK_POSTAL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('BANK_MOBILE')), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':P_BANK_PHONE', 'value'=>$this->security->xss_clean($this->input->post('BANK_PHONE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_FAX', 'value'=>$this->security->xss_clean($this->input->post('BANK_FAX')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('BANK_EMAIL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_WEB_SITE', 'value'=>$this->security->xss_clean($this->input->post('BANK_WEB_SITE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_BRANCH', 'value'=>"none", 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_SWIFT_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_SWIFT_CODE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ACNT_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_NUMBER', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_NUMBER')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_IBAN', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_IBAN')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_USERID', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_USERID')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ACNT_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ACNT_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_MANAGER', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_MANAGER')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_MIN_BAL', 'value'=>$this->security->xss_clean($this->input->post('BANK_MIN_BAL')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_WORK_DAYS', 'value'=>$this->security->xss_clean($this->input->post('BANK_WORK_DAYS')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_WORK_TIME', 'value'=>$this->security->xss_clean($this->input->post('BANK_WORK_TIME')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_CLEAR_TIME', 'value'=>$this->security->xss_clean($this->input->post('BANK_CLEAR_TIME')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_BANK', $params);
             $result = array("return_status"=>$return_status,"error_message"=>$error_message );
             
             
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
                                array('name'=>':P_BD_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_BANK_CODE',        'value'=>$this->input->post('BANK_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_SR_NO',         	'value'=>$_POST['BD_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_BD_FILE_NAME',        'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_FILE_SIZE',        'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_DESC',             'value'=>$_POST['BD_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_FROM_DT',         	'value'=>$_POST['BD_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_UPTO_DT',          'value'=>$_POST['BD_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                               
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_FINC','INSERT_FINC_M_BANK_DOCS', $params2);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                         
                        
                        }
                     
                  
    }
     public function GetBankmasterDoc($sysid)
        {
            $sql="SELECT BD_FILE_NAME,BD_FILE_SIZE,BD_DESC,BD_FROM_DT,BD_UPTO_DT FROM FINC_M_BANK_DOCS WHERE BD_BANK_CODE='$sysid'";
            return $this->db->query($sql,$return_object = TRUE)->result_array();
            
        }
        
        //Edit Bank Master
         public function editbankmaster()
            {
                 if($this->input->post('checkbox')=="Y")
                 {
                $check="Y";
            }
            else{
                $check="N";
            }
               $params = array(
             array('name'=>':P_BANK_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_BANK_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_DESC', 'value'=>$this->security->xss_clean($this->input->post('BANK_DESC')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ALIAS', 'value'=>$this->security->xss_clean($this->input->post('BANK_ALIAS')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ADDR1', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD1')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ADDR2', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD2')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ADDR3', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD3')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ADDR4', 'value'=>$this->security->xss_clean($this->input->post('BANK_ADD4')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_CN_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_CN_CODE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ST_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_ST_CODE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_CT_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_CT_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_CT_AR_CODE', 'value'=>"none", 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_POSTAL', 'value'=>$this->security->xss_clean($this->input->post('BANK_POSTAL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_MOBILE', 'value'=>$this->security->xss_clean($this->input->post('BANK_MOBILE')), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':P_BANK_PHONE', 'value'=>$this->security->xss_clean($this->input->post('BANK_PHONE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_FAX', 'value'=>$this->security->xss_clean($this->input->post('BANK_FAX')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_EMAIL', 'value'=>$this->security->xss_clean($this->input->post('BANK_EMAIL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_WEB_SITE', 'value'=>$this->security->xss_clean($this->input->post('BANK_WEB_SITE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_BRANCH', 'value'=>"none", 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_SWIFT_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_SWIFT_CODE')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ACNT_CCY_CODE', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_CCY_CODE')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_NUMBER', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_NUMBER')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_IBAN', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_IBAN')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_USERID', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_USERID')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ACNT_FROM_DT', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_FROM_DT')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_ACNT_UPTO_DT', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_UPTO_DT')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_MANAGER', 'value'=>$this->security->xss_clean($this->input->post('BANK_ACNT_MANAGER')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACNT_MIN_BAL', 'value'=>$this->security->xss_clean($this->input->post('BANK_MIN_BAL')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_WORK_DAYS', 'value'=>$this->security->xss_clean($this->input->post('BANK_WORK_DAYS')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_WORK_TIME', 'value'=>$this->security->xss_clean($this->input->post('BANK_WORK_TIME')), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_BANK_CLEAR_TIME', 'value'=>$this->security->xss_clean($this->input->post('BANK_CLEAR_TIME')), 'type'=>SQLT_CHR,'length'=>300), 
            array('name'=>':P_BANK_ACTIVE_YN', 'value'=>$this->security->xss_clean($check), 'type'=>SQLT_CHR,'length'=>300),
           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
             array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
               
            $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_BANK', $params);
            
                
            $result = array("return_status"=>$return_status,"error_message"=>$error_message );
      
           
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
                                array('name'=>':P_BD_COMP_CODE',    	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_BANK_CODE',        'value'=>$this->input->post('BANK_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_SR_NO',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                                
                                array('name'=>':P_BD_FILE_NAME',        'value'=>$this->security->xss_clean($fileName), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_FILE_SIZE',        'value'=>$this->security->xss_clean($fileSize), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_DESC',             'value'=>$_POST['BD_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_FROM_DT',         	'value'=>$_POST['BD_FROM_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_BD_UPTO_DT',          'value'=>$_POST['BD_UPTO_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                               
                                array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                                array('name'=>':P_ERR_MSG', 		'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
                             );
                             $this->db->stored_procedure('SPINE_FINC','UPDATE_FINC_M_BANK_DOCS', $params2);
                              $result = array("return_status"=>$return_status,"error_message"=>$error_message );

                              echo "<pre>";
                               print_r($params2);
                               echo"</pre>";
                        }
           
           exit;
            }
            public function getstate($id)
            {
            $sql="SELECT * FROM APPS_STATE where ST_CN_CODE='$id' ";
            return $query = $this->db->query($sql)->result_array();
            }
            public function getcity($country,$state)
            {
            $sql="SELECT * FROM APPS_CITY where CT_CN_CODE='$country' AND CT_ST_CODE='$state' ";
            return $query = $this->db->query($sql)->result_array();
     
           
            }
            //Delete Bank Master
            function DeleteBankMaster($code){
        
        $sql="SELECT * FROM FINC_M_BANK where BANK_CODE='$code'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
    
        foreach($result as $row)
        {
      
            $params = array(       
            array('name'=>':P_BANK_COMP_CODE', 'value'=>$this->security->xss_clean($this->session->userdata('USER_COMP_CODE')),'type'=>SQLT_CHR, 'length'=>300 ),
            array('name'=>':P_BANK_CODE', 'value'=>$this->security->xss_clean($row["BANK_CODE"]), 'type'=>SQLT_CHR,'length'=>300),
            
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_num', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':p_err_msg', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            
            $this->db->stored_procedure('SPINE_FINC','DELETE_FINC_M_BANK',$params);
           return $result = array("return_status"=>$return_status,"error_message"=>$error_message );
       
            
        }}
        //Bank Master End
            
    }