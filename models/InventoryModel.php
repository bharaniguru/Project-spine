<?php 
class InventoryModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
    }
    function uom_fetch()
    {
        $sql="SELECT * FROM  INVT_M_UOM";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function add_uom()
    {
        $act=$this->input->post('uom_active');
        if($act=='Y')
        {
            $active='Y';
        }else{
            $active='N';
        }
        $params = array(
        array('name'=>':P_UOM_CODE', 'value'=>$this->input->post('uom_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_UOM_DESC', 'value'=>$this->input->post('uom_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_UOM_LOOSE', 'value'=>$this->input->post('uom_loose'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_UOM_PACK', 'value'=>$this->input->post('uom_pack'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_UOM_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_UOM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function Edit_Uom($id)
    {
    $sql="SELECT * FROM  INVT_M_UOM where UOM_CODE='$id'";
    return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateUomMaster()
    {
        $act=$this->input->post('uom_active');
        if($act=='Y')
        {
            $active='Y';
        }else{
            $active='N';
        }
        $params = array(
        array('name'=>':P_UOM_CODE', 'value'=>$this->input->post('uom_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_UOM_DESC', 'value'=>$this->input->post('uom_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_UOM_LOOSE', 'value'=>$this->input->post('uom_loose'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_UOM_PACK', 'value'=>$this->input->post('uom_pack'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_UOM_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_UOM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    
    }
    function deleteuommaster($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_UOM_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_UOM_DESC', 'value'=>$this->input->post('uom_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_UOM_LOOSE', 'value'=>$this->input->post('uom_loose'), 'type'=>SQLT_CHR, 'length'=>300),      
        //array('name'=>':P_UOM_PACK', 'value'=>$this->input->post('uom_pack'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_UOM_ACTIVE_YN', 'value'=>$this->input->post('uom_active'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_UOM', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchItemGroupMaster()
    {
        $sql="SELECT * FROM INVT_M_ITEM_GROUP";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddIteamGMaster()
    {
        $params = array(
        array('name'=>':P_IG_CODE', 'value'=>$this->input->post('ig_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IG_DESC', 'value'=>$this->input->post('ig_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IG_ACTIVE_YN', 'value'=>$this->input->post('lg_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;   
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_ITEM_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function Edit_Iteam_GMaster($id)
    {
        $sql="SELECT * FROM INVT_M_ITEM_GROUP WHERE IG_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateIteamGMaster()
    {
        $params = array(
        array('name'=>':P_IG_CODE', 'value'=>$this->input->post('ig_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IG_DESC', 'value'=>$this->input->post('ig_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IG_ACTIVE_YN', 'value'=>$this->input->post('item_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_ITEM_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteItemMaster($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_IG_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_UOM_DESC', 'value'=>$this->input->post('uom_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_UOM_LOOSE', 'value'=>$this->input->post('uom_loose'), 'type'=>SQLT_CHR, 'length'=>300),      
        //array('name'=>':P_UOM_PACK', 'value'=>$this->input->post('uom_pack'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_UOM_ACTIVE_YN', 'value'=>$this->input->post('uom_active'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_ITEM_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchItemFamily()
    {
        $sql="SELECT * FROM INVT_M_ITEM_FAMILY";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchItmFmlMst()
    {
        $sql="SELECT * FROM INVT_M_ITEM_FAMILY where IF_ACTIVE_YN='Y' ORDER BY IF_DESC ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function ajaxItmFmlvld($ifcode)
    {
        $sql="SELECT COUNT(IF_CODE) FROM INVT_M_ITEM_FAMILY where IF_CODE='$ifcode'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddIteamFamilyMaster()
    {
        $params = array(
        array('name'=>':P_IF_CODE', 'value'=>$this->input->post('if_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IF_DESC', 'value'=>$this->input->post('if_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IF_IG_CODE', 'value'=>$this->input->post('if_parent'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IF_ACTIVE_YN', 'value'=>$this->input->post('if_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;   
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_ITEM_FAMILY', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditItmFmly($id)
    {
        $sql="SELECT * FROM INVT_M_ITEM_FAMILY where IF_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateItemFmlyMst()
    {
        $params = array(
        array('name'=>':P_IF_CODE', 'value'=>$this->input->post('if_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IF_DESC', 'value'=>$this->input->post('if_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IF_IG_CODE', 'value'=>$this->input->post('if_parent'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IF_ACTIVE_YN', 'value'=>$this->input->post('if_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;   
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_ITEM_FAMILY', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteFmlyMaster($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_IF_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_ITEM_FAMILY', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchItmTypMstr()
    {
        $sql="SELECT * FROM INVT_M_ITEM_TYPE";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddItmTypMaster()
    {
        $act=$this->input->post('it_active');
        if($act=='Y')
        {
            $active='Y';
        }else{
            $active='N';
        }
        $params = array(
        array('name'=>':P_IT_CODE', 'value'=>$this->input->post('it_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IT_DESC', 'value'=>$this->input->post('it_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IT_IF_CODE', 'value'=>$this->input->post('it_if_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IT_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_ITEM_TYPE', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditItmTypMst($id)
    {
        $sql="SELECT * FROM INVT_M_ITEM_TYPE where IT_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateItemTypMst()
    {
        $params = array(
        array('name'=>':P_IT_CODE', 'value'=>$this->input->post('it_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IT_DESC', 'value'=>$this->input->post('it_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IT_IF_CODE', 'value'=>$this->input->post('it_if_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IT_ACTIVE_YN', 'value'=>$this->input->post('it_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;   
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_ITEM_TYPE', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteItmTypMtr($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_IT_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_ITEM_TYPE', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchItmSubMst()
    {
        $sql="SELECT * FROM INVT_M_ITEM_SUB_TYPE";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddItmSubTypMaster()
    {
        $params = array(
        array('name'=>':P_IS_CODE', 'value'=>$this->input->post('is_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IS_DESC', 'value'=>$this->input->post('is_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IS_IT_CODE', 'value'=>$this->input->post('is_it_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IS_ACTIVE_YN', 'value'=>$this->input->post('is_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_ITEM_SUB_TYPE', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditItmSubTypMst($id)
    {
        $sql="SELECT * FROM INVT_M_ITEM_SUB_TYPE where IS_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateItemTypSubMst()
    {
        $params = array(
        array('name'=>':P_IS_CODE', 'value'=>$this->input->post('is_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IS_DESC', 'value'=>$this->input->post('is_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IS_IT_CODE', 'value'=>$this->input->post('is_it_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_IS_ACTIVE_YN', 'value'=>$this->input->post('is_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_ITEM_SUB_TYPE', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteItmSubTypMtr($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_IS_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_ITEM_SUB_TYPE', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchItmPstGrpMstr()
    {
        $sql="SELECT * FROM INVT_M_ITEM_POST_GROUP";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddItmPostMaster()
    {
        $params = array(
        array('name'=>':P_PG_CODE', 'value'=>$this->input->post('pg_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PG_DESC', 'value'=>$this->input->post('pg_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PG_ACTIVE_YN', 'value'=>$this->input->post('pg_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_ITEM_POST_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditItmPostMst($id)
    {
        $sql="SELECT * FROM INVT_M_ITEM_POST_GROUP where PG_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateItemPostMst()
    {
        $params = array(
        array('name'=>':P_PG_CODE', 'value'=>$this->input->post('pg_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PG_DESC', 'value'=>$this->input->post('pg_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_PG_ACTIVE_YN', 'value'=>$this->input->post('pg_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_ITEM_POST_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteItmPostMtr($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_PG_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_ITEM_POST_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchItmMst()
    {
        $sql="SELECT * FROM INVT_M_ITEM";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchBaseUom()
    {
        $sql="SELECT * FROM INVT_M_UOM ORDER BY UOM_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchItmPstGrp()
    {
        $sql="SELECT * FROM INVT_M_ITEM_POST_GROUP ORDER BY PG_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchItmGrp()
    {
        $sql="SELECT * FROM INVT_M_ITEM_GROUP ORDER BY IG_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchItmFmly()
    {
        $sql="SELECT * FROM INVT_M_ITEM_FAMILY ORDER BY IF_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchItmTyp()
    {
        $sql="SELECT * FROM INVT_M_ITEM_TYPE ORDER BY IT_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchItmSubTyp()
    {
        $sql="SELECT * FROM INVT_M_ITEM_SUB_TYPE ORDER BY IS_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddItmMaster()
    {
        $params = array(
        array('name'=>':P_ITEM_CODE', 'value'=>$this->input->post('item_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_DESC', 'value'=>$this->input->post('item_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_ACTIVE_YN', 'value'=>$this->input->post('item_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_ITEM_UOM_CODE', 'value'=>$this->input->post('item_uom_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_HS_DESC', 'value'=>$this->input->post('item_hs_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_PC_CODE', 'value'=>$this->input->post('item_pu_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_PG_CODE', 'value'=>$this->input->post('item_ig_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_IG_CODE', 'value'=>$this->input->post('item_ig_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_IF_CODE', 'value'=>$this->input->post('item_if_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_IT_CODE', 'value'=>$this->input->post('item_it_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_ST_CODE', 'value'=>$this->input->post('item_is_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_TRADE_YN', 'value'=>$this->input->post('trade_item'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_MNFG_YN', 'value'=>$this->input->post('order_item'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_SERVICE_YN', 'value'=>$this->input->post('service_item'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_MIN_STK', 'value'=>$this->input->post('item_min_stk'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_MAX_STK', 'value'=>$this->input->post('item_max_stk'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_REORD_QTY', 'value'=>$this->input->post('item_reord'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_LEAD_TIME', 'value'=>$this->input->post('item_lead_time'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_POS_TOLERANCE', 'value'=>$this->input->post('item_pos_toler'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_NEG_TOLERANCE', 'value'=>$this->input->post('item_neg_toler'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_STOCK_POS_TOL', 'value'=>$this->input->post('item_stock'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_NEG_TOLERANCE', 'value'=>$this->input->post('item_stock_neg'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_STOCK_ABC', 'value'=>$this->input->post('stock_abc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_LOCN_CODE', 'value'=>$this->input->post('Loc_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_RACK_CODE', 'value'=>$this->input->post('rack_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_RACK_BIN', 'value'=>$this->input->post('rack_bin'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_WEIGHT', 'value'=>$this->input->post('item_weigth'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_WIDTH_APP_YN', 'value'=>$this->input->post('width_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_HEIGHT_APP_YN', 'value'=>$this->input->post('height_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_ELEMENTS_APP_YN', 'value'=>$this->input->post('element_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_ITEM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        
    }
    function FetchItmMaster($id)
    {
        $sql="SELECT * FROM INVT_M_ITEM where ITEM_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateItmMaster()
    {
        $params = array(
        array('name'=>':P_ITEM_CODE', 'value'=>$this->input->post('item_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_DESC', 'value'=>$this->input->post('item_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_ACTIVE_YN', 'value'=>$this->input->post('item_active'), 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_ITEM_UOM_CODE', 'value'=>$this->input->post('item_uom_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_HS_DESC', 'value'=>$this->input->post('item_hs_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_PC_CODE', 'value'=>$this->input->post('item_pu_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_PG_CODE', 'value'=>$this->input->post('item_ig_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_IG_CODE', 'value'=>$this->input->post('item_ig_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_IF_CODE', 'value'=>$this->input->post('item_if_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_IT_CODE', 'value'=>$this->input->post('item_it_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_ST_CODE', 'value'=>$this->input->post('item_is_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_TRADE_YN', 'value'=>$this->input->post('trade_item'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_MNFG_YN', 'value'=>$this->input->post('order_item'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_SERVICE_YN', 'value'=>$this->input->post('service_item'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_MIN_STK', 'value'=>$this->input->post('item_min_stk'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_MAX_STK', 'value'=>$this->input->post('item_max_stk'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_REORD_QTY', 'value'=>$this->input->post('item_reord'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_LEAD_TIME', 'value'=>$this->input->post('item_lead_time'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_POS_TOLERANCE', 'value'=>$this->input->post('item_pos_toler'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_NEG_TOLERANCE', 'value'=>$this->input->post('item_neg_toler'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_STOCK_POS_TOL', 'value'=>$this->input->post('item_stock'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_NEG_TOLERANCE', 'value'=>$this->input->post('item_stock_neg'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_STOCK_ABC', 'value'=>$this->input->post('stock_abc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_LOCN_CODE', 'value'=>$this->input->post('Loc_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_RACK_CODE', 'value'=>$this->input->post('rack_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_RACK_BIN', 'value'=>$this->input->post('rack_bin'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_WEIGHT', 'value'=>$this->input->post('item_weigth'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_WIDTH_APP_YN', 'value'=>$this->input->post('width_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_HEIGHT_APP_YN', 'value'=>$this->input->post('height_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ITEM_ELEMENTS_APP_YN', 'value'=>$this->input->post('element_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_ITEM', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        
    }
    function DeleteItmMtr($id,$desc,$uid)
    {
        $params = array(
        array('name'=>':P_ITEM_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$desc, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_ITEM', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchLocGrpMst()
    {
        $sql="SELECT * FROM INVT_M_LOCN_GROUP";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddLocGrpMaster()
    {
        $act=$this->input->post('lg_active');
        if($act=='Y')
        {
            $active='Y';
        }else{
            $active='N';
        }
        $params = array(
        array('name'=>':P_LG_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_CODE', 'value'=>$this->input->post('lg_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_DESC', 'value'=>$this->input->post('lg_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_TYPE', 'value'=>$this->input->post('lgt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_LOCN_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditLctGrpMst($id)
    {
        
        $sql="SELECT * FROM INVT_M_LOCN_GROUP where LG_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateLctGrpMst()
    {
        $act=$this->input->post('lg_active');
        if($act=='Y')
        {
            $active='Y';
        }else{
            $active='N';
        }
        $params = array(
        array('name'=>':P_LG_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_CODE', 'value'=>$this->input->post('lg_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_DESC', 'value'=>$this->input->post('lg_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_TYPE', 'value'=>$this->input->post('lgt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_ACTIVE_YN', 'value'=>$active, 'type'=>SQLT_CHR, 'length'=>300),      
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_LOCN_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteLocGrpMst($comp,$id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_LG_COMP_CODE', 'value'=>$comp, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LG_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_LOCN_GROUP', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchLocMst()
    {
        $sql="SELECT * FROM INVT_M_LOCATION";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchStockGrp()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM INVT_M_LOCATION where LOCN_COMP_CODE='$comp_code'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddLocMaster()
    {
        $params = array(
        array('name'=>':P_LOCN_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_CODE', 'value'=>$this->input->post('lc_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_DESC', 'value'=>$this->input->post('lc_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_STOCK_YN', 'value'=>$this->input->post('lc_stock'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_SALE_YN', 'value'=>$this->input->post('lc_group'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_TRANSIT_YN', 'value'=>$this->input->post('lc_cost'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_ACTIVE_YN', 'value'=>$this->input->post('lc_active'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_STOCKING_GROUP', 'value'=>$this->input->post('lc_st_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_COSTING_GROUP', 'value'=>$this->input->post('lc_cost_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_1', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_2', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_3', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_4', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_5', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_6', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_7', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_8', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_9', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params);exit;
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_LOCATION', $params);
        
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditLctMst($id)
    {
        $sql="SELECT * FROM INVT_M_LOCATION where LOCN_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateLctMst($id)
    {
         $params = array(
        array('name'=>':P_LOCN_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_CODE', 'value'=>$this->input->post('lc_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_DESC', 'value'=>$this->input->post('lc_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_STOCK_YN', 'value'=>$this->input->post('lc_stock'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_SALE_YN', 'value'=>$this->input->post('lc_group'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_TRANSIT_YN', 'value'=>$this->input->post('lc_cost'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_ACTIVE_YN', 'value'=>$this->input->post('lc_active'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_STOCKING_GROUP', 'value'=>$this->input->post('lc_st_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_COSTING_GROUP', 'value'=>$this->input->post('lc_cost_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_1', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_2', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_3', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_4', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_5', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_6', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_7', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_8', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_9', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params);exit;
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_LOCATION', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteLocMst($comp,$id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_LOCN_COMP_CODE', 'value'=>$comp, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LOCN_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_LOCATION', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchMtrlReqTrnsn()
    {
        $sql="SELECT * FROM INVT_T_REQ_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchDoc_No()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'MRT', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
    }
    function FetchDoc_Date()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'MRT', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
        
    }
    function FetchInvtMItem()
    {
        $sql="SELECT * FROM INVT_M_ITEM where ITEM_ACTIVE_YN='Y'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function ajaxMatReqTransItemcode($item_code)
    {
        $sql="SELECT * FROM INVT_M_ITEM where ITEM_CODE='$item_code'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddMatReqTrnsnHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_RQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TYPE', 'value'=>$this->input->post('rqh_type'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TXN_CODE', 'value'=>$this->input->post('rqh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TXN_DT', 'value'=>$this->input->post('rqh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DLV_DT', 'value'=>$this->input->post('rqh_dlv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DLV_LOCN_CODE', 'value'=>$this->input->post('rqh_dlv_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_SRC_LOCN_CODE', 'value'=>$this->input->post('rqh_src_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DESC', 'value'=>$this->input->post('rqh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_REQ_HEAD', $params);
        return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                             ,"error_message"=>$error_message,  );
        
    }
    function AddMatReqTrnsnLine($sys_id,$txn_no)
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('rql_line'));
        for($i=0;$i<$row_count-1;$i++)
        {
        $params = array(
        array('name'=>':P_RQL_RQH_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_TXN_DT', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_LINE', 'value'=>$_POST['rql_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_ITEM_CODE', 'value'=>$_POST['rql_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_ITEM_DESC', 'value'=>$_POST['rql_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_UOM_CODE', 'value'=>$_POST['rql_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_QTY', 'value'=>$_POST['rql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_QTY_BU', 'value'=>$_POST['rql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_QTY_DELIVERED', 'value'=>$_POST['rql_qty_delv'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_DLV_DT', 'value'=>$_POST['rql_dlv_dt'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_DLV_LOCN_CODE', 'value'=>$this->input->post('rqh_dlv_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_SRC_LOCN_CODE', 'value'=>$this->input->post('rqh_src_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_DESC', 'value'=>$_POST['rql_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_REF_FLOW_SEQ', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_REF_LINE_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_REQ_LINES', $params);
        }
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditMatReqTrans($id)
    {
        $sql="SELECT * FROM INVT_T_REQ_HEAD where RQH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function EditMatReqLine($id)
    {
        $sql="SELECT * FROM INVT_T_REQ_LINES where RQL_RQH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function ajaxMatReqTrnsEditDel($sys_id,$lan_code,$usr_id)
    {
        $params = array(
        array('name'=>':P_RQL_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan_code, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$usr_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_REQ_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function MatReqLine($sys_id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_RQL_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_REQ_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function UpdateMatReqTrnsHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_RQH_SYS_ID', 'value'=>$this->input->post('rqh_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TYPE', 'value'=>$this->input->post('rqh_req_type'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TXN_CODE', 'value'=>$this->input->post('rqh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TXN_NO', 'value'=>$this->input->post('rqh_txn_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_TXN_DT', 'value'=>$this->input->post('rqh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DLV_DT', 'value'=>$this->input->post('rqh_dlv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DLV_LOCN_CODE', 'value'=>$this->input->post('rqh_dlv_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_SRC_LOCN_CODE', 'value'=>$this->input->post('rqh_src_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_DESC', 'value'=>$this->input->post('rqh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQH_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_REQ_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
    }
    function UpdateMatReqTrnsLine()
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('rql_line'));
        for($i=0;$i<$row_count-1;$i++)
        {
        $params = array(
        array('name'=>':P_RQL_SYS_ID', 'value'=>$this->input->post('rql_sysid'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_RQH_SYS_ID', 'value'=>$this->input->post('rqh_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_TXN_DT', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_LINE', 'value'=>$_POST['rql_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_ITEM_CODE', 'value'=>$_POST['rql_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_ITEM_DESC', 'value'=>$_POST['rql_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_UOM_CODE', 'value'=>$_POST['rql_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_QTY', 'value'=>$_POST['rql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_QTY_BU', 'value'=>$_POST['rql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_QTY_DELIVERED', 'value'=>$_POST['rql_qty_delv'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_DLV_DT', 'value'=>$_POST['rql_dlv_dt'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_DLV_LOCN_CODE', 'value'=>$this->input->post('rqh_dlv_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_SRC_LOCN_CODE', 'value'=>$this->input->post('rqh_src_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_DESC', 'value'=>$_POST['rql_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_REF_FLOW_SEQ', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_RQL_REF_LINE_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_REQ_LINES', $params);
        }
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteMatReqTransLine($id)
    {
        $sql="SELECT * FROM INVT_T_REQ_LINES where RQL_RQH_SYS_ID='$id'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        foreach($result as $row)
        {
        $params = array(
        array('name'=>':P_RQH_SYS_ID', 'value'=>$row['RQL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$row['RQL_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$row['RQL_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_REQ_LINES', $params);
        }
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteMatReqTransHead($id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_RQH_SYS_ID', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_REQ_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchMtrlIsseTrnsn()
    {
        $sql="SELECT * FROM INVT_T_MI_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchMISTxn_No()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'MIS', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
    }
    function FetchReqHead()
    {
        $sql="SELECT * FROM INVT_T_REQ_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function ajaxdatevld()
    {
        $date = date('d-M-y');
        $com_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SPINE_APPS.APPS_FUNC_VALIDATE_DOC_DT('$com_code','MIS','$date') AS result from DUAL";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchMISRqh()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT RQH_SYS_ID, RQH_TXN_CODE, RQH_TXN_NO, RQH_TXN_DT FROM INVT_T_REQ_HEAD WHERE RQH_COMP_CODE = '$comp_code' AND NVL(RQH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM INVT_T_REQ_LINES WHERE RQH_SYS_ID  = RQL_RQH_SYS_ID AND (NVL(RQL_QTY,0) - NVL(RQL_QTY_DELIVERED,0))>0)";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AjaxMatIssueLine($system_code)
    {
        $sql="SELECT RQL_SYS_ID, RQL_RQH_SYS_ID, TXN_FLOW_SEQ, RQH_TXN_CODE, RQH_TXN_NO, RQH_DLV_LOCN_CODE, RQH_SRC_LOCN_CODE, RQH_DLV_DT, RQL_ITEM_CODE, RQL_ITEM_DESC, RQL_UOM_CODE, RQL_PRICE, (NVL(RQL_QTY,0) - NVL(RQL_QTY_DELIVERED,0))RQL_QTY FROM INVT_T_REQ_LINES, INVT_T_REQ_HEAD, APPS_TXN_SETUP WHERE RQH_TXN_CODE = TXN_CODE AND RQL_RQH_SYS_ID = RQH_SYS_ID AND RQL_RQH_SYS_ID IN($system_code) AND (NVL(RQL_QTY,0) - NVL(RQL_QTY_DELIVERED,0))>0";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddMatIssueTransHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_MIH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TYPE', 'value'=>$this->input->post('mih_txn_type'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TXN_CODE', 'value'=>$this->input->post('mih_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TXN_DT', 'value'=>$this->input->post('mih_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_COST_CENTER_CODE', 'value'=>$this->input->post('mih_center_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_DLV_LOCN_CODE', 'value'=>$this->input->post('mih_delv_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_SRC_LOCN_CODE', 'value'=>$this->input->post('mih_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_DESC', 'value'=>$this->input->post('mih_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_YN', 'value'=>$this->input->post('rqh_snd_apprl'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_DT', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_UID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_YN', 'value'=>$this->input->post('rqh_snd_apprl'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_DT', 'value'=>$this->input->post('lc_cost_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_UID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_STATUS', 'value'=>$this->input->post('mih_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_MI_HEAD', $params);
        return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                             ,"error_message"=>$error_message,  );
    }
    function AddMatIssueTransLine($sys_id,$txn_no)
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('mil_line'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_MIL_SYS_ID', 'value'=>$this->input->post('mil_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_MIH_SYS_ID', 'value'=>$this->input->post('mil_mih_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_TXN_DT', 'value'=>$this->input->post('mih_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_FLOW_SEQ', 'value'=>$_POST['mil_txn_flow_seq'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_TXN_CODE', 'value'=>$_POST['mil_txn_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_TXN_NO', 'value'=>$_POST['mil_txn_no'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_LINE_SYS_ID', 'value'=>$_POST['mil_line_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_LINE', 'value'=>$_POST['mil_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_ITEM_CODE', 'value'=>$_POST['mil_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_ITEM_DESC', 'value'=>$_POST['mil_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_UOM_CODE', 'value'=>$_POST['mil_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_QTY', 'value'=>$_POST['mil_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_QTY_BU', 'value'=>$_POST['mil_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_QTY_RETURNED', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_DLV_DT', 'value'=>$_POST['mil_dlv_dt'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_DLV_LOCN_CODE', 'value'=>$_POST['mil_dlv_loc_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_SRC_LOCN_CODE', 'value'=>$_POST['mil_src_loc_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_DESC', 'value'=>$_POST['mil_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_MI_LINES', $params1);
        }
        
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message );
        
    }
    function EditMatIssueTrans($id)
    {
        $sql="SELECT * FROM INVT_T_MI_HEAD where MIH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchMiLines($id)
    {
        $sql="SELECT * FROM INVT_T_MI_LINES where MIL_MIH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    function UpdateMatIssueHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_MIH_SYS_ID', 'value'=>$this->input->post('mih_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TYPE', 'value'=>$this->input->post('mih_txn_type'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TXN_CODE', 'value'=>$this->input->post('mih_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TXN_NO', 'value'=>$this->input->post('mih_txn_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_TXN_DT', 'value'=>$this->input->post('mih_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_COST_CENTER_CODE', 'value'=>$this->input->post('mih_center_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_DLV_LOCN_CODE', 'value'=>$this->input->post('mih_delv_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_SRC_LOCN_CODE', 'value'=>$this->input->post('mih_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_DESC', 'value'=>$this->input->post('mih_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIH_STATUS', 'value'=>$this->input->post('mih_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_MI_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
        
    }
    function UpdateMatIssueTrnsnLine()
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('mil_line'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_MIL_SYS_ID', 'value'=>$_POST['mil_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_MIH_SYS_ID', 'value'=>$_POST['mil_mih_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_TXN_DT', 'value'=>$this->input->post('mih_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_FLOW_SEQ', 'value'=>$_POST['mil_txn_flow_seq'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_TXN_CODE', 'value'=>$_POST['mil_txn_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_TXN_NO', 'value'=>$_POST['mil_txn_no'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_REF_LINE_SYS_ID', 'value'=>$_POST['mil_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_LINE', 'value'=>$_POST['mil_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_ITEM_CODE', 'value'=>$_POST['mil_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_ITEM_DESC', 'value'=>$_POST['mil_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_UOM_CODE', 'value'=>$_POST['mil_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_QTY', 'value'=>$_POST['mil_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_QTY_BU', 'value'=>$_POST['mil_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_QTY_RETURNED', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_DLV_DT', 'value'=>$_POST['mil_dlv_dt'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_DLV_LOCN_CODE', 'value'=>$_POST['mil_dlv_loc_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_SRC_LOCN_CODE', 'value'=>$_POST['mil_src_loc_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_DESC', 'value'=>$_POST['mil_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MIL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_MI_LINES', $params1);
        }
        
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message );
    }
    function DeleteMatIssueline($id)
    {
        $sql="SELECT * FROM INVT_T_MI_LINES where MIL_MIH_SYS_ID=$id";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        foreach($result as $row)
        {
        $params = array(
        array('name'=>':P_MIL_SYS_ID', 'value'=>$row['MIL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$row['MIL_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$row['MIL_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        }
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_MI_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteMatIssueHead($id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_MIL_SYS_ID', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_MI_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchBinMster()
    {
        $sql="SELECT * FROM INVT_M_BIN";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchMLoc()
    {
        $comp_code = $this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM INVT_M_LOCATION where LOCN_COMP_CODE='$comp_code'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function ajaxbin()
    {
        $sql="SELECT BIN_CODE FROM INVT_M_BIN";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function ajaxbinvld($bincode)
    {
        $sql="SELECT count(BIN_CODE) FROM INVT_M_BIN where BIN_CODE='$bincode'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddBinMaster()
    {
        $params = array(
        array('name'=>':P_BIN_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_LOCN_CODE', 'value'=>$this->input->post('bin_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_ZONE_CODE', 'value'=>$this->input->post('bin_zone'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_AREA_CODE', 'value'=>$this->input->post('bin_area'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_ROW_CODE', 'value'=>$this->input->post('bin_row'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_SHELF_CODE', 'value'=>$this->input->post('bin_shelf'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_CODE', 'value'=>$this->input->post('bin_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_DESC', 'value'=>$this->input->post('bin_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_MIN_QTY', 'value'=>$this->input->post('min_qty'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_MAX_QTY', 'value'=>$this->input->post('max_qty'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_STOCK', 'value'=>$this->input->post('bin_avl_stock'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_FROM_DT', 'value'=>$this->input->post('b_frm_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_UPTO_DT', 'value'=>$this->input->post('b_to_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_ACTIVE_YN', 'value'=>$this->input->post('b_active'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_M_BIN', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function EditBinMstr($id)
    {
        $sql="SELECT * FROM INVT_M_BIN where BIN_CODE='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function UpdateBinMstr()
    {
        $params = array(
        array('name'=>':P_BIN_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_LOCN_CODE', 'value'=>$this->input->post('bin_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_ZONE_CODE', 'value'=>$this->input->post('bin_zone'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_AREA_CODE', 'value'=>$this->input->post('bin_area'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_ROW_CODE', 'value'=>$this->input->post('bin_row'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_SHELF_CODE', 'value'=>$this->input->post('bin_shelf'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_CODE', 'value'=>$this->input->post('bin_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_DESC', 'value'=>$this->input->post('bin_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_MIN_QTY', 'value'=>$this->input->post('min_qty'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_MAX_QTY', 'value'=>$this->input->post('max_qty'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_STOCK', 'value'=>$this->input->post('bin_avl_stock'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_FROM_DT', 'value'=>$this->input->post('b_frm_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_UPTO_DT', 'value'=>$this->input->post('b_to_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_ACTIVE_YN', 'value'=>$this->input->post('b_active'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        //print_r($params);exit;
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_M_BIN', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteBinMstr($comp,$id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_BIN_COMP_CODE', 'value'=>$comp, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_BIN_CODE', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            //print_r($params );exit;
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_M_BIN', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function FetchBinAlloc()
    {
        $sql="SELECT * FROM INVT_P_BIN_LEDGER";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    //modified : saravanan
    // Start GoodReceiptTransation
    function GoodReceiptTransaction()
    {
        $sql="SELECT * FROM INVT_T_GR_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function GoodReceiptTransactionEdit($id)
    {
        $sql="SELECT * FROM INVT_T_GR_HEAD where GRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function GoodReceiptTransactionLinesEdit($id)
    {
        $sql="SELECT * FROM INVT_T_GR_LINES where GRL_GRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchGRNTxn_No()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'GRN', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
    }
    function ajaxdateGRN()
    {
        $date = date('d-M-y');
        $com_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SPINE_APPS.APPS_FUNC_VALIDATE_DOC_DT('$com_code','GRN','$date') AS result from DUAL";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
     function FetchGRNRqh()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT POH_SYS_ID, POH_TXN_CODE, POH_TXN_NO, POH_TXN_DT, POH_SUPL_AC_CODE FROM PROC_T_PO_HEAD WHERE POH_COMP_CODE = '$comp_code' AND NVL(POH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM PROC_T_PO_LINES WHERE POH_SYS_ID  = POL_POH_SYS_ID AND (NVL(POL_QTY,0) - NVL(POL_QTY_RECEIVED,0))>0)";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
     function AjaxGoodReceiptReference($system_code)
    {
        $sql="SELECT POL_SYS_ID, POL_POH_SYS_ID, TXN_FLOW_SEQ, POH_SUPL_AC_CODE, POH_TXN_CODE, POH_TXN_NO, POL_ITEM_CODE, POL_ITEM_DESC, POL_UOM_CODE, POL_PRICE, (NVL(POL_QTY,0) - NVL(POL_QTY_RECEIVED,0))POL_QTY FROM PROC_T_PO_LINES, PROC_T_PO_HEAD, APPS_TXN_SETUP WHERE POH_TXN_CODE = TXN_CODE AND POL_POH_SYS_ID = POH_SYS_ID AND POL_POH_SYS_ID IN($system_code) AND (NVL(POL_QTY,0) - NVL(POL_QTY_RECEIVED,0))>0";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function AddGoodsReceiptTransactionHead()
    {
      
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_GRH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TXN_CODE', 'value'=>$this->input->post('GRH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TXN_DT', 'value'=>$this->input->post('GRH_TXN_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_LOCN_CODE', 'value'=>$this->input->post('GRH_LOC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_SUPL_CODE', 'value'=>$this->input->post('GRH_SUPL_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_INV_NO', 'value'=>$this->input->post('GRH_INV_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_INV_DT', 'value'=>$this->input->post('GRH_INV_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_BILL_OF_ENTRY', 'value'=>$this->input->post('GRH_BILL_OF'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_NO_OF_PKG', 'value'=>$this->input->post('NO_OF_PKG'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TYPE_OF_PKG', 'value'=>$this->input->post('GRH_TYPE_OF_PKG'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FCL_LCL', 'value'=>$this->input->post('GRH_FCL_LCL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_CONTAINER_SIZE', 'value'=>$this->input->post('GRH_CONTAINER_SIZE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_DESC', 'value'=>$this->input->post('GRH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_STATUS', 'value'=>$this->input->post('GRH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        print "<pre>";
        print_r($params);
        print "</pre>";
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_GR_HEAD', $params);
        $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                           ,"error_message"=>$error_message,  );
        print "<pre>";
        print_r($result);
        print "</pre>";
        exit;
    
    }
     function AddGoodsReceiptTransactionLine($sys_id,$txn_no)
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('mil_line'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_GRL_GRH_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_TXN_DT', 'value'=>$this->input->post('GRH_TXN_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_FLOW_SEQ', 'value'=>$_POST['TXN_FLOW_SEQ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_TXN_CODE', 'value'=>$_POST['POH_TXN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_TXN_NO', 'value'=>$_POST['POH_TXN_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_HEAD_SYS_ID', 'value'=>$_POST['POL_POH_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_LINE_SYS_ID', 'value'=>$_POST['POL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LINE', 'value'=>$_POST['mil_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_ITEM_CODE', 'value'=>$_POST['POL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_ITEM_DESC', 'value'=>$_POST['POL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_UOM_CODE', 'value'=>$_POST['POL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY', 'value'=>$_POST['POL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY_BU', 'value'=>$_POST['POL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_PRICE', 'value'=>$_POST['POL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_ADJ_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_VALUE_AFT_ADJ', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_OVERHEAD_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LANDED_COST', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_NET_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LOCN_CODE', 'value'=>$this->input->post('GRH_LOC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY_INSPECTED', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY_BINNED', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_DESC', 'value'=>$_POST['POL_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_GR_LINES', $params1);
        //echo "<pre>";
        //print_r($params1);
        //echo "</pre>";
        //echo "1st : ".$return_status."<br>";
        }
        //exit;
    }
        function EditGoodsReceiptTransactionHead()
    {
      
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_GRH_SYS_ID', 'value'=>$this->input->post('GRH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TXN_CODE', 'value'=>$this->input->post('GRH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TXN_NO', 'value'=>$this->input->post('GRH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TXN_DT', 'value'=>$this->input->post('GRH_TXN_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_LOCN_CODE', 'value'=>$this->input->post('GRH_LOC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_SUPL_CODE', 'value'=>$this->input->post('GRH_SUPL_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_INV_NO', 'value'=>$this->input->post('GRH_INV_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_INV_DT', 'value'=>$this->input->post('GRH_INV_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_BILL_OF_ENTRY', 'value'=>$this->input->post('GRH_BILL_OF'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_NO_OF_PKG', 'value'=>$this->input->post('NO_OF_PKG'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_TYPE_OF_PKG', 'value'=>$this->input->post('GRH_TYPE_OF_PKG'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FCL_LCL', 'value'=>$this->input->post('GRH_FCL_LCL'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_CONTAINER_SIZE', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_DESC', 'value'=>$this->input->post('GRH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRH_STATUS', 'value'=>$this->input->post('GRH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
       $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_GR_HEAD', $params);
        return $result = array("return_status"=>$return_status
                           ,"error_message"=>$error_message);
    
    }
     function EditGoodsReceiptTransactionLine()
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('mil_line'));
        for($i=0;$i<$row_count;$i++)
        {
        if($_POST['gro_price'][$i])
        {
            $price=$_POST['gro_price'][$i];
        }else{
            $price=0;
        }
        if($_POST['gro_value'][$i])
        {
            $value=$_POST['gro_value'][$i];
        }else{
            $value=0;
        }
        if($_POST['gro_Adj'][$i])
        {
            $adj=$_POST['gro_Adj'][$i];
        }else{
            $adj=0;
        }
        if($_POST['gro_val_aft'][$i])
        {
            $adj_val=$_POST['gro_val_aft'][$i];
        }else{
            $adj_val=0;
        }
        if($_POST['gro_overhead'][$i])
        {
            $overhead=$_POST['gro_overhead'][$i];
        }else{
            $overhead=0;
        }
        if($_POST['gro_landed_cost'][$i])
        {
            $land_cost=$_POST['gro_landed_cost'][$i];
        }else{
            $land_cost=0;
        }
        if($_POST['gro_net_value'][$i])
        {
            $net_value=$_POST['gro_net_value'][$i];
        }else{
            $net_value=0;
        }
        $params1 = array(
        array('name'=>':P_GRL_SYS_ID', 'value'=>$_POST['GRL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_GRH_SYS_ID', 'value'=>$this->input->post('GRH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_TXN_DT', 'value'=>$this->input->post('GRH_TXN_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_FLOW_SEQ', 'value'=>$_POST['TXN_FLOW_SEQ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_TXN_CODE', 'value'=>$_POST['POH_TXN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_TXN_NO', 'value'=>$_POST['POH_TXN_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_HEAD_SYS_ID', 'value'=>$_POST['POL_POH_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_REF_LINE_SYS_ID', 'value'=>$_POST['POL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LINE', 'value'=>$_POST['mil_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_ITEM_CODE', 'value'=>$_POST['POL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_ITEM_DESC', 'value'=>$_POST['POL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_UOM_CODE', 'value'=>$_POST['POL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY', 'value'=>$_POST['POL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY_BU', 'value'=>$_POST['POL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_PRICE', 'value'=>$price, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_VALUE', 'value'=>$value, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_ADJ_VALUE', 'value'=>$adj, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_VALUE_AFT_ADJ', 'value'=>$adj_val, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_OVERHEAD_VALUE', 'value'=>$overhead, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LANDED_COST', 'value'=>$land_cost, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_NET_VALUE', 'value'=>$net_value, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LOCN_CODE', 'value'=>$this->input->post('GRH_LOC_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY_INSPECTED', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_QTY_BINNED', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_DESC', 'value'=>$_POST['POL_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
            $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_GR_LINES', $params1);
        }
        return $result = array("return_status"=>$return_status
                           ,"error_message"=>$error_message);

    }

        function DeleteGoodsReceiptTransaction($code)
        {
            echo $sql="SELECT * FROM INVT_T_GR_LINES where GRL_GRH_SYS_ID='$code' ";
            $result= $this->db->query($sql)->result_array();
            //print_r($result);
                foreach($result as $row)
                {
                $params = array(
                    array('name'=>':P_GRL_SYS_ID', 'value'=>$this->security->xss_clean($row["GRL_SYS_ID"]),'type'=>SQLT_CHR, 'length'=>300 ),           
                    array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                    $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_GR_LINES', $params);
                  print_r(  $result = array("return_status"=>$return_status
                                     ,"error_message"=>$error_message ));
              
                }
                
            $params = array(
            array('name'=>':P_GRH_SYS_ID', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
            array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
            $resl=$this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_GR_HEAD', $params);
            
             print_r( $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message ));
                // echo '<pre>';
                //print_r($resl);
                //echo '</pre>';
          
        }
        //Gooods Receipt Transaction end
        
        //stock transfer request
        function FetchStockTrnsfReqTrans()
    {
        $sql="SELECT * FROM INVT_T_SREQ_HEAD ORDER BY SRQH_TXN_NO ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchSTRTxn_No()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'STR', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
    }
    function AjaxSTRDT_valid($srqh_txn_dt,$srqh_txn_code)
    {
        $com_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SPINE_APPS.APPS_FUNC_VALIDATE_DOC_DT('$com_code','$srqh_txn_code','$srqh_txn_dt') AS result from DUAL";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchSTRItem_Loc()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM INVT_M_LOCATION where LOCN_COMP_CODE='$comp_code' ORDER BY LOCN_DESC ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchSTRLine_Icode()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM INVT_M_ITEM where ITEM_ACTIVE_YN='Y' ORDER BY ITEM_DESC ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AjaxSTRItemCode($item_code)
    {
        $sql="SELECT ITEM_DESC,ITEM_UOM_CODE FROM INVT_M_ITEM where ITEM_CODE='$item_code'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddSTRHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_SRQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_TXN_CODE', 'value'=>$this->input->post('srqh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_TXN_DT', 'value'=>$this->input->post('srqh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_REQUESTED_BY', 'value'=>$this->input->post('srqh_req_by'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DLV_DT', 'value'=>$this->input->post('strh_delv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DLV_LOCN_CODE', 'value'=>$this->input->post('srqh_dlv'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_SRC_LOCN_CODE', 'value'=>$this->input->post('srqh_src'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DESC', 'value'=>$this->input->post('srqh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_STATUS', 'value'=>$this->input->post('srqh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_SREQ_HEAD', $params);
        return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                             ,"error_message"=>$error_message);
    }
    
    function AddSTRLine($system_id,$txn_no)
    {
        $date = date('d-M-y');
        echo $row_count=count($this->input->post('srql_line'));
        for($i=0;$i<$row_count-1;$i++)
        {
        $params1 = array(
        array('name'=>':P_SRQL_SRQH_SYS_ID', 'value'=>$system_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_TXN_DT', 'value'=>$this->input->post('srqh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_LINE', 'value'=>$_POST['srql_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_ITEM_CODE', 'value'=>$_POST['srql_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_ITEM_DESC', 'value'=>$_POST['srql_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_UOM_CODE', 'value'=>$_POST['srql_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_QTY', 'value'=>$_POST['srql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_QTY_BU', 'value'=>$_POST['srql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_QTY_DELIVERED', 'value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_DLV_DT', 'value'=>$this->input->post('strh_delv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_DLV_LOCN_CODE', 'value'=>$this->input->post('srqh_dlv'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_SRC_LOCN_CODE', 'value'=>$this->input->post('srqh_src'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_DESC', 'value'=>$_POST['srql_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_REF_FLOW_SEQ', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_REF_LINE_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_SREQ_LINES', $params1);
        }
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
    }
    function EditSTRHead($id)
    {
        $sql="SELECT * FROM INVT_T_SREQ_HEAD where SRQH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();      
    }
    function FetchSTRLines($id)
    {
        $sql="SELECT * FROM INVT_T_SREQ_LINES where SRQL_SRQH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();      
    }
    function UpdateSTRHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_SRQH_SYS_ID', 'value'=>$this->input->post('srqh_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_TXN_CODE', 'value'=>$this->input->post('srqh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_TXN_NO', 'value'=>$this->input->post('srqh_txn_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_TXN_DT', 'value'=>$this->input->post('srqh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_REQUESTED_BY', 'value'=>$this->input->post('srqh_req_by'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DLV_DT', 'value'=>$this->input->post('strh_delv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DLV_LOCN_CODE', 'value'=>$this->input->post('srqh_dlv_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_SRC_LOCN_CODE', 'value'=>$this->input->post('srqh_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_DESC', 'value'=>$this->input->post('srqh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQH_STATUS', 'value'=>$this->input->post('srqh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_SREQ_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
        
    }
    function UpdateSTRLine()
    {
        $date = date('d-M-y');
        echo $row_count=count($this->input->post('srql_line'));
        for($i=0;$i<$row_count-1;$i++)
        {
        echo $i;
        $params1 = array(
        array('name'=>':P_SRQL_SYS_ID', 'value'=>$_POST['srql_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_SRQH_SYS_ID', 'value'=>$_POST['srql_srqh_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_TXN_DT', 'value'=>$this->input->post('srqh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_LINE', 'value'=>$_POST['srql_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_ITEM_CODE', 'value'=>$_POST['srql_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_ITEM_DESC', 'value'=>$_POST['srql_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_UOM_CODE', 'value'=>$_POST['srql_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_QTY', 'value'=>$_POST['srql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_QTY_BU', 'value'=>$_POST['srql_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_QTY_DELIVERED', 'value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_DLV_DT', 'value'=>$this->input->post('strh_delv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_DLV_LOCN_CODE', 'value'=>$this->input->post('srqh_dlv_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_SRC_LOCN_CODE', 'value'=>$this->input->post('srqh_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_DESC', 'value'=>$_POST['srql_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_REF_FLOW_SEQ', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SRQL_REF_LINE_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_SREQ_LINES', $params1);
        }
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
    }
    function deleteSTRLine($sys_id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_SRQL_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_SREQ_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
    }
    function DeleteRowSTRline($id)
    {
        $sql="SELECT * FROM INVT_T_SREQ_LINES where SRQL_SRQH_SYS_ID='$id'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        foreach($result as $row)
        {
        $params = array(
        array('name'=>':P_SRQL_SYS_ID', 'value'=>$row['SRQL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$row['SRQL_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$row['SRQL_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        }
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_SREQ_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteSTRHead($id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_SRQH_SYS_ID', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_SREQ_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }        
        //end stock transfer request
        
        //BharaniGuru R
    // Material Return transaction
    function MaterialreturnTrnsn(){
        $sql="SELECT * FROM INVT_T_MR_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function FetchMRTpulling()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        //$sql="SELECT RQH_SYS_ID, RQH_TXN_CODE, RQH_TXN_NO, RQH_TXN_DT FROM INVT_T_REQ_HEAD WHERE RQH_COMP_CODE = '$comp_code' AND NVL(RQH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM INVT_T_REQ_LINES WHERE RQH_SYS_ID  = RQL_RQH_SYS_ID AND (NVL(RQL_QTY,0) - NVL(RQL_QTY_DELIVERED,0))>0)";
        $sql="SELECT MIH_SYS_ID, MIH_TXN_CODE, MIH_TXN_NO, MIH_TXN_DT FROM INVT_T_MI_HEAD WHERE MIH_COMP_CODE = '$comp_code' AND NVL(MIH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM INVT_T_MI_LINES WHERE MIH_SYS_ID = MIL_MIH_SYS_ID AND (NVL(MIL_QTY,0) - NVL(MIL_QTY_RETURNED,0))>0)";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    function AjaxMatReturnLinePulling($system_code)
    {
        $sql="SELECT MIL_SYS_ID, MIL_MIH_SYS_ID, TXN_FLOW_SEQ, MIH_TXN_CODE, MIH_TXN_NO, 
       MIL_DLV_LOCN_CODE, MIL_SRC_LOCN_CODE,
       MIL_ITEM_CODE, MIL_ITEM_DESC, MIL_UOM_CODE, 
       MIL_PRICE, (NVL(MIL_QTY,0) - NVL(MIL_QTY_RETURNED,0))MIL_QTY
  FROM INVT_T_MI_LINES, INVT_T_MI_HEAD, APPS_TXN_SETUP 
 WHERE MIH_TXN_CODE = TXN_CODE
   AND MIL_MIH_SYS_ID = MIH_SYS_ID
   AND MIL_MIH_SYS_ID IN($system_code)
   AND (NVL(MIL_QTY,0) - NVL(MIL_QTY_RETURNED,0))>0";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function INVT_T_REQlocationLOV()
    {
	    $company_code=$this->session->userdata('USER_COMP_CODE');
	    $sql="SELECT RQH_DLV_LOCN_CODE FROM INVT_T_REQ_HEAD WHERE RQH_COMP_CODE = '$company_code'";
	    return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddMatReturnTransHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_MRH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TYPE', 'value'=>$this->input->post('mrh_txn_type'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TXN_CODE', 'value'=>$this->input->post('mrh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TXN_DT', 'value'=>$this->input->post('mrh_doc_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_SRC_LOCN_CODE', 'value'=>$this->input->post('mih_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_DESC', 'value'=>$this->input->post('mrh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_YN', 'value'=>$this->input->post('rqh_snd_apprl'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_DT', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_UID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_YN', 'value'=>$this->input->post('rqh_snd_apprl'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_DT', 'value'=>$this->input->post('lc_cost_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_UID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_STATUS', 'value'=>$this->input->post('mrh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_MR_HEAD', $params);
        return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                             ,"error_message"=>$error_message,  );
        
    }
    
    function AddMatReturnTransLine($sys_id,$txn_no)
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('mil_line'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        //array('name'=>':P_MRL_SYS_ID', 'value'=>$this->input->post('mil_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_MRH_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_TXN_DT', 'value'=>$this->input->post('mrh_doc_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_FLOW_SEQ', 'value'=>$_POST['mrl_txn_flow_seq'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_TXN_CODE', 'value'=>$_POST['mrl_txn_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_TXN_NO', 'value'=>$_POST['mrl_txn_no'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_HEAD_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_LINE_SYS_ID', 'value'=>$_POST['mrl_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_LINE', 'value'=>$_POST['mrl_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_ITEM_CODE', 'value'=>$_POST['mrl_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_ITEM_DESC', 'value'=>$_POST['mrl_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_UOM_CODE', 'value'=>$_POST['mrl_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_QTY', 'value'=>$_POST['mrl_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_QTY_BU', 'value'=>$_POST['mrl_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_QTY_RETURNED', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_DLV_DT', 'value'=>$this->input->post('mrh_doc_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_DLV_LOCN_CODE', 'value'=>$_POST['mih_src_loc'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_SRC_LOCN_CODE', 'value'=>$_POST['mih_src_loc'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_DESC', 'value'=>$_POST['mrl_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_MR_LINES', $params1);
        }
        return $result = array("return_status"=>$return_status ,"error_message"=>$error_message );
       
    }
    function FetchMatReturnTransHead($id)
    {
        $sql="SELECT * FROM INVT_T_MR_HEAD where MRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchMatReturnTransLines($id)
    {
        $sql="SELECT * FROM INVT_T_MR_LINES where MRL_MRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
        
    }
    
    function UpdateMatReturnTransHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_MRH_SYS_ID', 'value'=>$this->input->post('MRH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TYPE', 'value'=>$this->input->post('mrh_txn_type'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TXN_CODE', 'value'=>$this->input->post('mrh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TXN_NO', 'value'=>$this->input->post('MRH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_TXN_DT', 'value'=>$this->input->post('mrh_doc_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_SRC_LOCN_CODE', 'value'=>$this->input->post('mih_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_DESC', 'value'=>$this->input->post('mrh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_YN', 'value'=>$this->input->post('rqh_snd_apprl'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_DT', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_SEND_UID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_YN', 'value'=>$this->input->post('rqh_snd_apprl'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_DT', 'value'=>$this->input->post('lc_cost_gp'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_RQH_APPROVE_UID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRH_STATUS', 'value'=>$this->input->post('mrh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_MR_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message,  );
        
        
    }
    
    function UpdateMatReturnTransLine($sys_id,$txn_no)
    {   $date = date('d-M-y');
        $row_count=count($this->input->post('MRL_REF_LINE_SYS_ID'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_MRL_SYS_ID', 'value'=>$_POST['MRL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_MRH_SYS_ID', 'value'=>$_POST['mrl_mrh_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_TXN_DT', 'value'=>$this->input->post('mrh_doc_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_FLOW_SEQ', 'value'=>$_POST['mrl_txn_flow_seq'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_TXN_CODE', 'value'=>$_POST['mrl_txn_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_TXN_NO', 'value'=>$_POST['mrl_txn_no'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_HEAD_SYS_ID', 'value'=>$_POST['MRL_REF_LINE_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_REF_LINE_SYS_ID', 'value'=>$_POST['mrl_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_LINE', 'value'=>$_POST['mrl_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_ITEM_CODE', 'value'=>$_POST['mrl_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_ITEM_DESC', 'value'=>$_POST['mrl_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_UOM_CODE', 'value'=>$_POST['mrl_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_QTY', 'value'=>$_POST['mrl_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_QTY_BU', 'value'=>$_POST['mrl_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_QTY_RETURNED', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_PERSON_CODE', 'value'=>$this->session->userdata('USER_PERS_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_DLV_DT', 'value'=>$this->input->post('mrh_doc_DT'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_DLV_LOCN_CODE', 'value'=>$_POST['mih_src_loc'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_SRC_LOCN_CODE', 'value'=>$_POST['mih_src_loc'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_DESC', 'value'=>$_POST['mrl_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_MRL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_MR_LINES', $params1);
        }
         $result = array("return_status"=>$return_status ,"error_message"=>$error_message );
    }
    function DeleteMatReturnHead($mrh_sys_id)
    {
        $sql="SELECT MRL_SYS_ID FROM INVT_T_MR_LINES where MRL_MRH_SYS_ID='$mrh_sys_id' ";
        $result= $this->db->query($sql)->result_array();
        foreach($result as $row)
        {
            $this->DeleteMatReturnLines($row['MRL_SYS_ID']);
        }
            
        $params = array(
            array('name'=>':P_MRH_SYS_ID', 'value'=>$mrh_sys_id, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_MR_HEAD', $params);
        $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteMatReturnLines($mrl_sys_id)
    {
        $params = array(
        array('name'=>':P_MRL_SYS_ID', 'value'=>$mrl_sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_MR_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    //end Material return tXN
    
    //Start Stock transfer outgoing
    function FetchSTO()
    {
        $sql="SELECT * FROM INVT_T_STRO_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    function AddSTOHead()
    {
        echo $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_STOH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_TXN_CODE', 'value'=>$this->input->post('stoh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_TXN_DT', 'value'=>$this->input->post('stoh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_REQUESTED_BY', 'value'=>$this->input->post('stoh_requested_by'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DLV_DT', 'value'=>$this->input->post('stoh_delv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DLV_LOCN_CODE', 'value'=>$this->input->post('stoh_delv_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_SRC_LOCN_CODE', 'value'=>$this->input->post('stoh_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DESC', 'value'=>$this->input->post('stoh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_STATUS', 'value'=>$this->input->post('stoh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STRO_HEAD', $params);
        print "<pre>";
        print_r($params);
        print "</pre>";
        exit;
        return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                             ,"error_message"=>$error_message);
        
    }
    function AddSTOLine($system_id,$txn_no)
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('stol_line'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_STOL_STOH_SYS_ID', 'value'=>$system_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_TXN_DT', 'value'=>$this->input->post('stoh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_FLOW_SEQ', 'value'=>$_POST['stol_txn_flow_seq'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_TXN_CODE', 'value'=>$_POST['stol_txn_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_TXN_NO', 'value'=>$_POST['stol_txn_no'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_LINE_SYS_ID', 'value'=>$_POST['stol_ref_line_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_LINE', 'value'=>$_POST['stol_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_ITEM_CODE', 'value'=>$_POST['stol_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_ITEM_DESC', 'value'=>$_POST['stol_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_UOM_CODE', 'value'=>$_POST['stol_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_QTY', 'value'=>$_POST['stol_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_QTY_BU', 'value'=>$_POST['stol_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_QTY_RECEIVED', 'value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_DLV_DT', 'value'=>$_POST['stol_dlv_dt'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_DLV_LOCN_CODE', 'value'=>$_POST['stol_dlv_loc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_SRC_LOCN_CODE', 'value'=>$_POST['stol_src_loc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_DESC', 'value'=>$_POST['stol_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STRO_LINES', $params1);
        print "<pre>";
        print_r($params1);
        print "</pre>";
        
        }
        exit;
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
    }
    function FetchSTOTxn_No()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'STO', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
    }
    function FetchSTORefDoc()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SRQH_SYS_ID, SRQH_TXN_CODE, SRQH_TXN_NO, SRQH_TXN_DT FROM INVT_T_SREQ_HEAD WHERE SRQH_COMP_CODE = '$comp_code' AND NVL(SRQH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM INVT_T_SREQ_LINES WHERE SRQH_SYS_ID  = SRQL_SRQH_SYS_ID AND (NVL(SRQL_QTY,0) - NVL(SRQL_QTY_DELIVERED,0))>0)";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AjaxSTOLine($system_code)
    {
        
        $sql="SELECT SRQL_SYS_ID, SRQL_QTY_DELIVERED, SRQL_DLV_DT, SRQL_DLV_LOCN_CODE,SRQL_SRC_LOCN_CODE, SRQL_VALUE, SRQL_SRQH_SYS_ID, SRQH_REQUESTED_BY, SRQH_DLV_DT, SRQH_DLV_LOCN_CODE, SRQH_SRC_LOCN_CODE, TXN_FLOW_SEQ, SRQH_TXN_CODE, SRQH_TXN_NO, SRQL_ITEM_CODE, SRQL_ITEM_DESC, SRQL_UOM_CODE, SRQL_PRICE, (NVL(SRQL_QTY,0) - NVL(SRQL_QTY_DELIVERED,0))SRQL_QTY FROM INVT_T_SREQ_LINES, INVT_T_SREQ_HEAD, APPS_TXN_SETUP WHERE SRQH_TXN_CODE = TXN_CODE AND SRQL_SRQH_SYS_ID = SRQH_SYS_ID AND SRQL_SRQH_SYS_ID IN($system_code) AND (NVL(SRQL_QTY,0) - NVL(SRQL_QTY_DELIVERED,0))>0";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function EditSTOHead($id)
    {
        $sql="SELECT * FROM INVT_T_STRO_HEAD where STOH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    function EditSTOLines($id)
    {
        $sql="SELECT * FROM INVT_T_STRO_LINES where STOL_STOH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    function UpdateSTOHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_STOH_SYS_ID', 'value'=>$this->input->post('stoh_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_TXN_CODE', 'value'=>$this->input->post('stoh_txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_TXN_NO', 'value'=>$this->input->post('stoh_txn_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_TXN_DT', 'value'=>$this->input->post('stoh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_REQUESTED_BY', 'value'=>$this->input->post('stoh_requested_by'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DLV_DT', 'value'=>$this->input->post('stoh_delv_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DLV_LOCN_CODE', 'value'=>$this->input->post('stoh_delv_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_SRC_LOCN_CODE', 'value'=>$this->input->post('stoh_src_loc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_DESC', 'value'=>$this->input->post('stoh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOH_STATUS', 'value'=>$this->input->post('stoh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_STRO_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
    }
    function UpdateSTOLine()
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('stol_line'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_STOL_SYS_ID', 'value'=>$_POST['stol_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_STOH_SYS_ID', 'value'=>$_POST['stol_stoh_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_TXN_DT', 'value'=>$this->input->post('stoh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_FLOW_SEQ', 'value'=>$_POST['stol_txn_flow_seq'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_TXN_CODE', 'value'=>$_POST['stol_txn_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_TXN_NO', 'value'=>$_POST['stol_txn_no'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_HEAD_SYS_ID', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_REF_LINE_SYS_ID', 'value'=>$_POST['stol_ref_line_sys_id'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_LINE', 'value'=>$_POST['stol_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_ITEM_CODE', 'value'=>$_POST['stol_item_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_ITEM_DESC', 'value'=>$_POST['stol_item_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_UOM_CODE', 'value'=>$_POST['stol_uom_code'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_QTY', 'value'=>$_POST['stol_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_QTY_BU', 'value'=>$_POST['stol_qty'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_QTY_RECEIVED', 'value'=>'1', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_PRICE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_VALUE', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_DLV_DT', 'value'=>$_POST['stol_dlv_dt'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_DLV_LOCN_CODE', 'value'=>$_POST['stol_dlv_loc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_SRC_LOCN_CODE', 'value'=>$_POST['stol_src_loc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_DESC', 'value'=>$_POST['stol_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_STOL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_STRO_LINES', $params1);
        }
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
    }
    function DeleteSTOLines($sys_id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_SRQL_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STRO_LINES', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
    }
    function DeleteSTOline($id)
    {
        $sql="SELECT * FROM INVT_T_STRO_LINES where STOL_STOH_SYS_ID='$id'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        foreach($result as $row)
        {
        $params = array(
        array('name'=>':P_STOL_SYS_ID', 'value'=>$row['STOL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$row['STOL_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$row['STOL_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STRO_LINES', $params);
        }
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteSTOHead($id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_STOH_SYS_ID', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STRO_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    //End Stock transfer outgoing
    
    //Functionality By : Gobi. C
    //Stock Adjesment Transaction
    
    
    function ViewStockAdjustmentTransaction()
    {
         $sql="select * from INVT_T_STOCK_ADJ_HEAD ";
        return  $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function GetLoctCode()
    {
        $cid=$this->session->userdata('USER_COMP_CODE');
        $sql="select * from INVT_M_LOCATION where LOCN_COMP_CODE='$cid'";
        return  $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function GetItemCode()
    {
        $cid=$this->session->userdata('USER_COMP_CODE');
        $sql="select * from INVT_M_ITEM ";
        return  $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function GetItemDesc()
    {
        $item_code=mysql_real_escape_string($_POST["item_code"]);
        
        $sql="select * from INVT_M_ITEM where ITEM_CODE='$item_code' and ITEM_ACTIVE_YN='Y'";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function GetSysQty()
        {
            $item_code=mysql_real_escape_string($_POST["item_code1"]);
        
        $sql="select * from  INVT_P_STOCK_LEDGER where SL_ITEM_CODE='$item_code'";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
    
    function GetStockAdjTxn($sysid)
    {
         $sql="select * from  INVT_T_STOCK_ADJ_HEAD where SAH_SYS_ID='$sysid'";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function GetStockAdjTxnLine($sysid)
    {
         $sql="select * from  INVT_T_STOCK_ADJ_LINES where SAL_SAH_SYS_ID='$sysid'";
	return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    
    function AddStockAdjustmentTransaction()
    {
        	
	    
	    
            //print_r($sys_id);
            //echo $sys_id[0]['NEXTVAL'];
            //exit();
	    
	    $date = date('d-M-y');
                
	     
	    
	    $params = array
	    (
		array('name'=>':P_SAH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_TXN_CODE',         	'value'=>$this->input->post('SAH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_TXN_DT',         		'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAH_LOCN_CODE',         	'value'=>$this->input->post('SAH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_DESC',         	        'value'=>$this->input->post('SAH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_01', 		'value'=>$this->input->post('SAH_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_02', 		'value'=>$this->input->post('SAH_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_03', 		'value'=>$this->input->post('SAH_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_04', 		'value'=>$this->input->post('SAH_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_05', 		'value'=>$this->input->post('SAH_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_06', 		'value'=>$this->input->post('SAH_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_07', 		'value'=>$this->input->post('SAH_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_08', 		'value'=>$this->input->post('SAH_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_09', 		'value'=>$this->input->post('SAH_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_10',    		'value'=>$this->input->post('SAH_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_11',         	'value'=>$this->input->post('SAH_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_12',         	'value'=>$this->input->post('SAH_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_13',         	'value'=>$this->input->post('SAH_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_SAH_FLEX_14',         	'value'=>$this->input->post('SAH_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_15',         	'value'=>$this->input->post('SAH_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_16',        		'value'=>$this->input->post('SAH_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_17',    		'value'=>$this->input->post('SAH_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_18',			'value'=>$this->input->post('SAH_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_19',    		'value'=>$this->input->post('SAH_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_20',   		'value'=>$this->input->post('SAH_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_STATUS',         	        'value'=>$this->input->post('SAH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SYS_ID', 			'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_TXN_NO', 			'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STOCK_ADJ_HEAD', $params);
	    //echo "<pre>";
	    //print_r($params);
	    //
	    //echo "</pre>";
           return  $result = array("return_status"=>$return_status,"error_message"=>$error_message,
                             "SYS_ID"=>$sys_id,"TXN_NO"=>$txn_no
                             );

	   // exit();
    }
    function AddStockAdjustmentLineTransaction($sys_id,$txn_no)
    {         
            //echo count($this->input->post('SAL_LINE'));
            //exit();
            //
            $total_value=count($this->input->post('SAL_LINE'));
           for($i =0; $i<$total_value-1; $i++)
           {
           $params1 = array
	    (
		array('name'=>':P_SAL_SAH_SYS_ID',    		'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_COMP_CODE',         	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_TXN_DT',         		'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAL_REF_FLOW_SEQ',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_REF_TXN_CODE',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_REF_TXN_NO',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAL_REF_HEAD_SYS_ID',    	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_REF_LINE_SYS_ID',         'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_LINE',         		'value'=>$_POST['SAL_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAL_ITEM_CODE',         	'value'=>$_POST['SAL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_ITEM_DESC',         	'value'=>$_POST['SAL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		
                
                array('name'=>':P_SAL_UOM_CODE',    		'value'=>$_POST['SAL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_SYS_QTY',         	'value'=>$_POST['SAL_SYS_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_ADJ_QTY',         	'value'=>$_POST['SAL_ADJ_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAL_ADJ_QTY_BU',         	'value'=>/*$_POST['SAL_ADJ_QTY_BU'][$i]*/$_POST['SAL_ADJ_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_QTY_AFT_ADJ',         	'value'=>$_POST['SAL_QTY_AFT_ADJ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		
                array('name'=>':P_SAL_PRICE',    		'value'=>$_POST['SAL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_SYS_VALUE',         	'value'=>$_POST['SAL_SYS_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_ADJ_VALUE',         	'value'=>$_POST['SAL_ADJ_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAL_VALUE_AFT_ADJ',         	'value'=>$_POST['SAL_VALUE_AFT_ADJ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_DESC',         	        'value'=>$_POST['SAL_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
		 array('name'=>':P_SAL_LINE_STATUS',         	'value'=>$this->input->post('SAL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_LOCN_CODE',         	'value'=>$this->input->post('SAH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		
                
                array('name'=>':P_SAL_FLEX_01', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_02', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_03', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_04', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_05', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_06', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_07', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_08', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_09', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_10',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_11',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_12',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_13',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_SAL_FLEX_14',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_15',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_16',        		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_17',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_18',			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_19',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAL_FLEX_20',   		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                
		
                
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STOCK_ADJ_LINES', $params1);
	     $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	    //echo "<pre>";
	    //print_r($params1);
	    //print_r($result);
	    //echo "</pre>";
           }
    //exit();
        
    }
    function EditStockAdjustmentTransaction($sysid)
    {
        	
            $params = array
	    (
                array('name'=>':P_SAH_SYS_ID',    		'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_COMP_CODE',    		'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_TXN_CODE',         	'value'=>$this->input->post('SAH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAH_TXN_NO',         		'value'=>$this->input->post('SAH_TXN_NO'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_TXN_DT',         		'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                array('name'=>':P_SAH_LOCN_CODE',         	'value'=>$this->input->post('SAH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_DESC',         	        'value'=>$this->input->post('SAH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
		
               array('name'=>':P_SAH_FLEX_01', 		        'value'=>$this->input->post('SAH_FLEX_01'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_02', 		'value'=>$this->input->post('SAH_FLEX_02'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_03', 		'value'=>$this->input->post('SAH_FLEX_03'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_04', 		'value'=>$this->input->post('SAH_FLEX_04'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_05', 		'value'=>$this->input->post('SAH_FLEX_05'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_06', 		'value'=>$this->input->post('SAH_FLEX_06'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_07', 		'value'=>$this->input->post('SAH_FLEX_07'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_08', 		'value'=>$this->input->post('SAH_FLEX_08'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_09', 		'value'=>$this->input->post('SAH_FLEX_09'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_10',    		'value'=>$this->input->post('SAH_FLEX_10'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_11',         	'value'=>$this->input->post('SAH_FLEX_11'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_12',         	'value'=>$this->input->post('SAH_FLEX_12'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_13',         	'value'=>$this->input->post('SAH_FLEX_13'), 'type'=>SQLT_CHR, 'length'=>300),      
		array('name'=>':P_SAH_FLEX_14',         	'value'=>$this->input->post('SAH_FLEX_14'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_15',         	'value'=>$this->input->post('SAH_FLEX_15'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_16',        		'value'=>$this->input->post('SAH_FLEX_16'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_17',    		'value'=>$this->input->post('SAH_FLEX_17'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_18',			'value'=>$this->input->post('SAH_FLEX_18'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_19',    		'value'=>$this->input->post('SAH_FLEX_19'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_SAH_FLEX_20',   		'value'=>$this->input->post('SAH_FLEX_20'), 'type'=>SQLT_CHR, 'length'=>300),
		
                array('name'=>':P_SAH_STATUS',   		'value'=>$this->input->post('SAH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	    );
	    $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_STOCK_ADJ_HEAD', $params);
	     $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	    echo "<pre>";
	    print_r($params);
	    print_r($result);
	    echo "</pre>";
	    //exit();
           
           
           $total_value=$this->input->post('add1');
           for($i=0; $i<$total_value; $i++)
           {
                $params1 = array
                 (
                     array('name'=>':P_SAL_SYS_ID',		'value'=>$_POST['SAL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_SAH_SYS_ID',    	'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_COMP_CODE',         	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_TXN_DT',         	'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_REF_FLOW_SEQ',       'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_REF_TXN_CODE',  	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_REF_TXN_NO',    	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_REF_HEAD_SYS_ID',    'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_REF_LINE_SYS_ID',    'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_LINE',         	'value'=>$_POST['SAL_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_ITEM_CODE',         	'value'=>$_POST['SAL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_ITEM_DESC',         	'value'=>$_POST['SAL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     
                     
                     array('name'=>':P_SAL_UOM_CODE',    	'value'=>$_POST['SAL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_SYS_QTY',         	'value'=>$_POST['SAL_SYS_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_ADJ_QTY',         	'value'=>$_POST['SAL_ADJ_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_ADJ_QTY_BU',         'value'=>$_POST['SAL_ADJ_QTY'][$i]/*$_POST['SAL_ADJ_QTY_BU'][$i]*/, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_QTY_AFT_ADJ',        'value'=>$_POST['SAL_QTY_AFT_ADJ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     
                     array('name'=>':P_SAL_PRICE',    		'value'=>$_POST['SAL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_SYS_VALUE',         	'value'=>$_POST['SAL_SYS_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_ADJ_VALUE',         	'value'=>$_POST['SAL_ADJ_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_VALUE_AFT_ADJ',      'value'=>$_POST['SAL_VALUE_AFT_ADJ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_DESC',         	'value'=>$_POST['SAL_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                      array('name'=>':P_SAL_LINE_STATUS',       'value'=>$this->input->post('SAL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_LOCN_CODE',         	'value'=>$this->input->post('SAH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                     
                     
                     
                     array('name'=>':P_SAL_FLEX_01', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_02', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_03', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_04', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_05', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_06', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_07', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_08', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_09', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_10',    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_11',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_12',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_13',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
                     array('name'=>':P_SAL_FLEX_14',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_15',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_16',        	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_17',    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_18',		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_19',    	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_SAL_FLEX_20',   		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                     
                     array('name'=>':P_LANG_CODE', 		'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_USER_ID', 		'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_ERR_NUM', 		'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                     array('name'=>':P_ERR_MSG', 		'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
                 );
                 $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_STOCK_ADJ_LINES', $params1);
                  $result = array("return_status"=>$return_status,"error_message"=>$error_message);
                echo "<pre>";
                print_r($params1);
                print_r($result);
                echo "</pre>";
            }
            $count=count($this->input->post('SAL_LINE1'));
            
            //echo "dsfafafd";
            //echo $count;
            //exit;
            if(($count-1)>0)
            {
                //$total_value=count($this->input->post('SAL_LINE'));
                        for($i =0; $i<$count-1; $i++)
                        {
                        $paramsNew = array
                         (
                             array('name'=>':P_SAL_SAH_SYS_ID',    		'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_COMP_CODE',         	'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_TXN_DT',         		'value'=>$this->input->post('SAH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_REF_FLOW_SEQ',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_REF_TXN_CODE',         	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_REF_TXN_NO',    		'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_REF_HEAD_SYS_ID',    	'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_REF_LINE_SYS_ID',         'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_LINE',         		'value'=>$_POST['SAL_LINE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_ITEM_CODE',         	'value'=>$_POST['SAL_ITEM_CODE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_ITEM_DESC',         	'value'=>$_POST['SAL_ITEM_DESC1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             
                             
                             array('name'=>':P_SAL_UOM_CODE',    		'value'=>$_POST['SAL_UOM_CODE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_SYS_QTY',         	'value'=>$_POST['SAL_SYS_QTY1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_ADJ_QTY',         	'value'=>$_POST['SAL_ADJ_QTY1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_ADJ_QTY_BU',         	'value'=>$_POST['SAL_ADJ_QTY_BU1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_QTY_AFT_ADJ',         	'value'=>$_POST['SAL_QTY_AFT_ADJ1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             
                             array('name'=>':P_SAL_PRICE',    		'value'=>$_POST['SAL_PRICE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_SYS_VALUE',         	'value'=>$_POST['SAL_SYS_VALUE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_ADJ_VALUE',         	'value'=>$_POST['SAL_ADJ_VALUE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_VALUE_AFT_ADJ',         	'value'=>$_POST['SAL_VALUE_AFT_ADJ1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_DESC',         	        'value'=>$_POST['SAL_DESC1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
                              array('name'=>':P_SAL_LINE_STATUS',         	'value'=>$this->input->post('SAL_LINE_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_LOCN_CODE',         	'value'=>$this->input->post('SAH_LOCN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
                             
                             
                             array('name'=>':P_SAL_FLEX_01', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_02', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_03', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_04', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_05', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_06', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_07', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_08', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_09', 		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_10',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_11',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_12',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_13',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),      
                             array('name'=>':P_SAL_FLEX_14',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_15',         	'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_16',        		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_17',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_18',			'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_19',    		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_SAL_FLEX_20',   		'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
                             
                             
                             
                             array('name'=>':P_LANG_CODE', 			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
                             array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
                         );
                         $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STOCK_ADJ_LINES', $paramsNew);
                          $result = array("return_status"=>$return_status,"error_message"=>$error_message );
                         echo "<pre>";
                         print_r($paramsNew);
                         print_r($result);
                         echo "</pre>";
                        }
                
                
                
                
            }
	    
    }
    
    
    function DeleteStockAdjustmentTransaction($sysid)
    {
         $sql="select * from  INVT_T_STOCK_ADJ_LINES where SAL_SAH_SYS_ID='$sysid'";
	$val= $this->db->query($sql, $return_object = TRUE)->result_array();
         
         foreach($val as $ssid)
         {
           $params1 = array
	    (
		array('name'=>':P_SAL_SYS_ID', 			'value'=>$ssid['SAL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	   );
	    $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STOCK_ADJ_LINES', $params1);
	     $result = array("return_status"=>$return_status,"error_message"=>$error_message );
//             echo "<pre>";
//	    print_r($params1);
//	    print_r($error_message);
//	    echo "</pre>";
       
        }
           $params2 = array
	    (
		array('name'=>':P_SAH_SYS_ID', 			'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	   );
	    $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STOCK_ADJ_HEAD', $params2);
	     $result = array("return_status"=>$return_status,"error_message"=>$error_message );
	    //echo "<pre>";
	    //print_r($params2);
	    //print_r($error_message);
	    //echo "</pre>";
	    //exit();	   
       
    }
    function DeleteStockAdjustmentTransactionLines($sysid)
    {
        $params1 = array
	    (
		array('name'=>':P_SAL_SYS_ID', 			'value'=>$sysid, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_LANG_CODE',			'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_USER_ID', 			'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_NUM', 			'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
		array('name'=>':P_ERR_MSG', 			'value'=>&$return_msg, 'type'=>SQLT_CHR, 'length'=>300)
	   );
	    $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STOCK_ADJ_LINES', $params1);
	     $result = array("return_status"=>$return_status,"error_message"=>$error_message );
             echo "<pre>";
	    print_r($params1);
	    print_r($error_message);
	    echo "</pre>";
    }
    //end adjustment txn
    
    // Stock Transfer Incoming
        function StockTransferIncoming()
        {
            $sql="SELECT * FROM INVT_T_STRI_HEAD";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
        function FetchSTITxn_No()
        {
            $date = date('d-M-y');
            $params = array(
            array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_TXN_CODE', 'value'=>'STI', 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
            );
            $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
            return $result = array("return_status"=>$return_status);
        }
        function ajaxdateSTI()
        {
            $date = date('d-M-y');
            $com_code=$this->session->userdata('USER_COMP_CODE');
            $sql="SELECT SPINE_APPS.APPS_FUNC_VALIDATE_DOC_DT('$com_code','STI','$date') AS result from DUAL";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         function FetchSTI()
        {
            $comp_code=$this->session->userdata('USER_COMP_CODE');
           $sql="SELECT STOH_SYS_ID, STOH_TXN_CODE, STOH_TXN_NO, STOH_TXN_DT FROM INVT_T_STRO_HEAD WHERE STOH_COMP_CODE = '$comp_code' AND NVL(STOH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM INVT_T_STRO_LINES WHERE STOH_SYS_ID  = STOL_STOH_SYS_ID AND (NVL(STOL_QTY,0) - NVL(STOL_QTY_RECEIVED,0))>0)";
          
            return $this->db->query($sql, $return_object = TRUE)->result_array();
         
        }
        function StockTransferIncomingReference($system_code)
        {
            $sql="SELECT STOL_SYS_ID,STOL_VALUE,STOL_SRC_LOCN_CODE,STOL_DLV_LOCN_CODE, STOL_STOH_SYS_ID, TXN_FLOW_SEQ, STOH_TXN_CODE, STOH_TXN_NO,STOL_DLV_DT, STOL_ITEM_CODE, STOL_ITEM_DESC, STOL_UOM_CODE, STOL_PRICE, (NVL(STOL_QTY,0) - NVL(STOL_QTY_RECEIVED,0))STOL_QTY FROM INVT_T_STRO_LINES, INVT_T_STRO_HEAD, APPS_TXN_SETUP WHERE STOH_TXN_CODE = TXN_CODE  AND STOL_STOH_SYS_ID = STOH_SYS_ID  AND STOL_STOH_SYS_ID IN( '$system_code')   AND (NVL(STOL_QTY,0) - NVL(STOL_QTY_RECEIVED,0))>0";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         function AddStockTransferIncoming()
        {
            $date = date('Y-m-d');
            $params = array(
            array('name'=>':P_STIH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_TXN_CODE', 'value'=>$this->input->post('STIH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_TXN_DT', 'value'=>$this->input->post('STIH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_REQUESTED_BY', 'value'=>$this->input->post('STIH_REQUESTED_BY'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_DLV_DT', 'value'=>$this->input->post('STIH_DLV_DT'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_DLV_LOCN_CODE', 'value'=>$this->input->post('STIH_SRC_LO'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_SRC_LOCN_CODE', 'value'=>$this->input->post('STIH_DLV_LO'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_DESC', 'value'=>$this->input->post('STIH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_STATUS', 'value'=>$this->input->post('STIH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
            );
            $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STRI_HEAD', $params);
            return  $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                                 ,"error_message"=>$error_message  );

        }
         function AddStockTransferIncomingLine($sys_id,$txn_no)
        {
            $date = date('d-M-y');
            $row_count=count($this->input->post('mil_line'));
            for($i=0;$i<$row_count;$i++)
            {
            $params1 = array(
            array('name'=>':P_STIL_GRH_SYS_ID', 'value'=>$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_TXN_DT', 'value'=>$this->input->post('STIH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_FLOW_SEQ', 'value'=>$_POST['TXN_FLOW_SEQ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_TXN_CODE', 'value'=>$_POST['STIH_TXN_CODE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_TXN_NO', 'value'=>$_POST['STIH_TXN_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_SYS_ID', 'value'=>$_POST['STIL_STIH_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_LINE_SYS_ID', 'value'=>$_POST['STIL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_LINE', 'value'=>$_POST['mil_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_ITEM_CODE', 'value'=>$_POST['STIL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_ITEM_DESC', 'value'=>$_POST['STIL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_UOM_CODE', 'value'=>$_POST['STIL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_QTY', 'value'=>$_POST['STIL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_QTY_RECEIVED', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_PRICE', 'value'=>$_POST['STIL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_VALUE', 'value'=>$_POST['STIL_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_DLV_DT', 'value'=>$_POST['STIL_DLV_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_DLV_LOCN_CODE', 'value'=>$_POST['STIL_DLV_LOCN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_SRC_LOCN_CODE', 'value'=>$_POST['STIL_SRC_LOCN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_DESC', 'value'=>$_POST['STIL_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_QTY_BU', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
            );
            $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_STRI_LINES', $params1);
            return $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message);
            }
           
        }
        function StockTransferIncomingEdit($id)
        {
            $sql="SELECT * FROM INVT_T_STRI_HEAD where STIH_SYS_ID='$id'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        
        }
        function StockTransferIncomingLinesEdit($id)
        {
            $sql="SELECT * FROM INVT_T_STRI_LINES where STIL_STIH_SYS_ID='$id'";
            return $this->db->query($sql, $return_object = TRUE)->result_array();
        }
         function UpdateStockTransferIncoming()
        {
            $date = date('Y-m-d');
            $params = array(
            array('name'=>':P_STIH_SYS_ID', 'value'=>$this->input->post('STIH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_TXN_CODE', 'value'=>$this->input->post('STIH_TXN_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_TXN_NO', 'value'=>$this->input->post('STIH_TXN_NO1'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_TXN_DT', 'value'=>$this->input->post('STIH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_REQUESTED_BY', 'value'=>$this->input->post('STIH_REQUESTED_BY'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_DLV_DT', 'value'=>$this->input->post('STIH_DLV_DT'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_DLV_LOCN_CODE', 'value'=>$this->input->post('STIH_SRC_LO'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_SRC_LOCN_CODE', 'value'=>$this->input->post('STIH_DLV_LO'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_DESC', 'value'=>$this->input->post('STIH_DESC'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIH_STATUS', 'value'=>$this->input->post('STIH_STATUS'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300));
            $result1=$this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_STRI_HEAD', $params);
            
            $result = array( "return_status"=>$return_status
                                 ,"error_message"=>$error_message  );


        }
         function UpdateStockTransferIncomingLine()
        {
            $date = date('d-M-y');
            $row_count=count($this->input->post('mil_line'));
            for($i=0;$i<$row_count;$i++)
            {
            $params1 = array(
            array('name'=>':P_STIL_SYS_ID', 'value'=>$_POST['LINE_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_STIH_SYS_ID', 'value'=>$this->input->post('STIH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_TXN_DT', 'value'=>$this->input->post('STIH_TXN_DT'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_FLOW_SEQ', 'value'=>$_POST['TXN_FLOW_SEQ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_TXN_CODE', 'value'=>$_POST['STIH_TXN_CODE1'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_TXN_NO', 'value'=>$_POST['STIH_TXN_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_SYS_ID', 'value'=>$_POST['STIL_STIH_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_REF_LINE_SYS_ID', 'value'=>$_POST['STIL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_LINE', 'value'=>$_POST['mil_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_ITEM_CODE', 'value'=>$_POST['STIL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_ITEM_DESC', 'value'=>$_POST['STIL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_UOM_CODE', 'value'=>$_POST['STIL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_QTY', 'value'=>$_POST['STIL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_QTY_RECEIVED', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_PRICE', 'value'=>$_POST['STIL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_VALUE', 'value'=>$_POST['STIL_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_DLV_DT', 'value'=>$_POST['STIL_DLV_DT'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_DLV_LOCN_CODE', 'value'=>$_POST['STIL_DLV_LOCN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_SRC_LOCN_CODE', 'value'=>$_POST['STIL_SRC_LOCN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_DESC', 'value'=>$_POST['STIL_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_STIL_QTY_BU', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
            array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300));
           $result1 =  $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_STRI_LINES', $params1);
              $result = array("return_status"=>$return_status
                                 ,"error_message"=>$error_message  );
       
              
            }
          
        }
         function DeleteStockTransferIncoming($code)
        {
             $sql="SELECT * FROM INVT_T_STRI_LINES where STIL_STIH_SYS_ID='$code' ";
            $result= $this->db->query($sql)->result_array();
           
                foreach($result as $row)
                {
                $params = array(
                    array('name'=>':P_STIL_SYS_ID', 'value'=>$this->security->xss_clean($row["STIL_SYS_ID"]),'type'=>SQLT_CHR, 'length'=>300 ),           
                    array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                    array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                    $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STRI_LINES', $params);
                }
                $result = array("return_status"=>$return_status
                                     ,"error_message"=>$error_message);
                
                $params = array(
                array('name'=>':P_STIH_SYS_ID', 'value'=>$this->security->xss_clean($code),'type'=>SQLT_CHR, 'length'=>300 ),           
                array('name'=>':P_LANG_CODE', 'value'=>'en', 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR,'length'=>300),
                array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR,'length'=>300));
                $resl=$this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_STRI_HEAD', $params);
                return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
        }
       // End Stock Transfer Incoming
       
       //start Inspection Transaction
    function FetchIT()
    {
        $sql="SELECT * FROM INVT_T_INSP_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    function FetchINSTxn_No()
    {
        $date = date('d-M-y');
        $params = array(
        array('name'=>':P_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_CODE', 'value'=>'INS', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DATE', 'value'=>$date, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_G_S', 'value'=>'G', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_DOC_NO', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_APPS','APPS_PROC_GET_SET_TXN_NUM', $params);
        return $result = array("return_status"=>$return_status);
    }
    function FetchINSRefDoc()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT POH_SYS_ID, POH_TXN_CODE, POH_TXN_NO, POH_TXN_DT FROM PROC_T_PO_HEAD WHERE POH_COMP_CODE = '$comp_code' AND NVL(POH_APPROVE_YN, 'N')='Y' AND EXISTS( SELECT 1 FROM PROC_T_PO_LINES WHERE POH_SYS_ID  = POL_POH_SYS_ID AND (NVL(POL_QTY,0) - NVL(POL_QTY_INSPECTED,0))>0)";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function FetchMSTLoc()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM INVT_M_LOCATION where LOCN_COMP_CODE='$comp_code' ORDER BY LOCN_CODE ASC";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AjaxINSLine($system_code)
    {
        $sql="SELECT POL_SYS_ID, POL_POH_SYS_ID, TXN_FLOW_SEQ, POH_TXN_CODE, POH_TXN_NO, POL_ITEM_CODE, POL_ITEM_DESC, POL_UOM_CODE, POL_PRICE, POL_VALUE, POL_QTY, (NVL(POL_QTY,0) - NVL(POL_QTY_INSPECTED,0))POL_QTY FROM PROC_T_PO_LINES, PROC_T_PO_HEAD, APPS_TXN_SETUP WHERE POH_TXN_CODE = TXN_CODE AND POL_POH_SYS_ID = POH_SYS_ID AND POL_POH_SYS_ID IN($system_code) AND (NVL(POL_QTY,0) - NVL(POL_QTY_INSPECTED,0))>0";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AjaxLocCode()
    {
        $comp_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT * FROM INVT_M_LOCATION where LOCN_COMP_CODE='$comp_code'";
        return $this->db->query($sql, $return_object = TRUE)->result_array(); 
    }
    function AddINSHead()
    {
        $date = date('Y-m-d');
        $params = array(
        //array('name'=>':P_STOH_SYS_ID', 'value'=>$this->input->post('stoh_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TXN_CODE', 'value'=>$this->input->post('inh_Txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        //array('name'=>':P_STOH_TXN_NO', 'value'=>$this->input->post('stoh_txn_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TXN_DT', 'value'=>$this->input->post('inh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_DOC_REF', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_LOCN_CODE', 'value'=>$this->input->post('inh_locn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_SUPL_CODE', 'value'=>$this->input->post('inh_sup'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_INV_NO', 'value'=>$this->input->post('inh_inv_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_INV_DT', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_BILL_OF_ENTRY', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_NO_OF_PKG', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TYPE_OF_PKG', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FCL_LCL', 'value'=>$this->NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_CONTAINER_SIZE', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_INSP_DONE_BY', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_ITEMS_OK_YN', 'value'=>$this->input->post('inh_all_itm_ok'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_ITEMS_ACC_YN', 'value'=>$this->input->post('inh_all_item_acpt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_DESC', 'value'=>$this->input->post('inh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_STATUS', 'value'=>$this->input->post('inh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_SYS_ID', 'value'=>&$sys_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_TXN_NO', 'value'=>&$txn_no, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_INSP_HEAD', $params);
        return $result = array("system_id"=>$sys_id, "txn_no"=>$txn_no, "return_status"=>$return_status
                             ,"error_message"=>$error_message);
    }
    function ajaxINHDt($txn_date,$inh_Txn_code)
    {
        $com_code=$this->session->userdata('USER_COMP_CODE');
        $sql="SELECT SPINE_APPS.APPS_FUNC_VALIDATE_DOC_DT('$com_code','$inh_Txn_code','$txn_date') AS result from DUAL";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddINSLine($system_id,$txn_no)
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('INL_LINE'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_INL_INH_SYS_ID', 'value'=>$system_id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_TXN_DT', 'value'=>$this->input->post('inh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_FLOW_SEQ', 'value'=>$_POST['INL_POL_REF_FLOW_SEQ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_TXN_CODE', 'value'=>$_POST['INL_REF_POH_TXN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_TXN_NO', 'value'=>$_POST['INL_REF_POH_TXN_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_HEAD_SYS_ID', 'value'=>$_POST['INL_REF_HEAD_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_LINE_SYS_ID', 'value'=>$_POST['INL_REF_LINE_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_LINE', 'value'=>$_POST['INL_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_ITEM_CODE', 'value'=>$_POST['INL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_ITEM_DESC', 'value'=>$_POST['INL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_UOM_CODE', 'value'=>$_POST['INL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_QTY', 'value'=>$_POST['INL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_QTY_BU', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_ACC_QTY', 'value'=>$_POST['INL_ACC_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REJ_QTY', 'value'=>$_POST['INL_REJ_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_PRICE', 'value'=>$_POST['INL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_VALUE', 'value'=>$_POST['INL_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_DESC', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_LOCN_CODE', 'value'=>$_POST['INL_LOCN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_GR_QTY', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_INSP_LINES', $params1);
        
        }
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
    }
    function EditINSHead($id)
    {
        $sql="SELECT * FROM INVT_T_INSP_HEAD where INH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    function EditINSLines($id)
    {
        $sql="SELECT * FROM INVT_T_INSP_LINES where INL_INH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();   
    }
    function UpdateINSHead()
    {
        $date = date('Y-m-d');
        $params = array(
        array('name'=>':P_INH_SYS_ID', 'value'=>$this->input->post('inh_sys_id'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TXN_CODE', 'value'=>$this->input->post('inh_Txn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TXN_NO', 'value'=>$this->input->post('inh_txn_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TXN_DT', 'value'=>$this->input->post('inh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_DOC_REF', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_LOCN_CODE', 'value'=>$this->input->post('inh_locn_code'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_SUPL_CODE', 'value'=>$this->input->post('inh_sup'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_INV_NO', 'value'=>$this->input->post('inh_inv_no'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_INV_DT', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_BILL_OF_ENTRY', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_NO_OF_PKG', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_TYPE_OF_PKG', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FCL_LCL', 'value'=>$this->NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_CONTAINER_SIZE', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_INSP_DONE_BY', 'value'=>NULL, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_ITEMS_OK_YN', 'value'=>$this->input->post('inh_all_itm_ok'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_ITEMS_ACC_YN', 'value'=>$this->input->post('inh_all_item_acpt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_DESC', 'value'=>$this->input->post('inh_desc'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INH_STATUS', 'value'=>$this->input->post('inh_status'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_INSP_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message);
        
    }
    function UpdateINSLine()
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('INL_LINE'));
        for($i=0;$i<$row_count;$i++)
        {
        $params1 = array(
        array('name'=>':P_INL_SYS_ID', 'value'=>$_POST['INL_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_INH_SYS_ID', 'value'=>$_POST['INL_INH_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_TXN_DT', 'value'=>$this->input->post('inh_txn_dt'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_FLOW_SEQ', 'value'=>$_POST['INL_REF_FLOW_SEQ'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_TXN_CODE', 'value'=>$_POST['INL_REF_TXN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_TXN_NO', 'value'=>$_POST['INL_REF_TXN_NO'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_HEAD_SYS_ID', 'value'=>$_POST['INL_REF_HEAD_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REF_LINE_SYS_ID', 'value'=>$_POST['INL_REF_LINE_SYS_ID'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_LINE', 'value'=>$_POST['INL_LINE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_ITEM_CODE', 'value'=>$_POST['INL_ITEM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_ITEM_DESC', 'value'=>$_POST['INL_ITEM_DESC'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_UOM_CODE', 'value'=>$_POST['INL_UOM_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_QTY', 'value'=>$_POST['INL_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_QTY_BU', 'value'=>'0', 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_ACC_QTY', 'value'=>$_POST['INL_ACC_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_REJ_QTY', 'value'=>$_POST['INL_REJ_QTY'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_PRICE', 'value'=>$_POST['INL_PRICE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_VALUE', 'value'=>$_POST['INL_VALUE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_DESC', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_LINE_STATUS', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_LOCN_CODE', 'value'=>$_POST['INL_LOCN_CODE'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_GR_QTY', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_01', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_02', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_03', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_04', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_05', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_06', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_07', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_08', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_09', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_10', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_11', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_12', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_13', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_14', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_15', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_16', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_17', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_18', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_19', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_INL_FLEX_20', 'value'=>null, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','UPDATE_INVT_T_INSP_LINES', $params1);
        }
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
        
    }
    function DeleteINSline($id)
    {
        $sql="SELECT * FROM INVT_T_INSP_LINES where INL_INH_SYS_ID='$id'";
        $result=$this->db->query($sql, $return_object = TRUE)->result_array();
        foreach($result as $row)
        {
        $params = array(
        array('name'=>':P_INL_SYS_ID', 'value'=>$row['INL_SYS_ID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$row['INL_LANG_CODE'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$row['INL_CR_UID'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_INSP_LINES', $params);
        }
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    function DeleteINSHead($id,$lan,$uid)
    {
        $params = array(
        array('name'=>':P_INH_SYS_ID', 'value'=>$id, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>$lan, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$uid, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','DELETE_INVT_T_INSP_HEAD', $params);
        return $result = array("return_status"=>$return_status
                             ,"error_message"=>$error_message );
    }
    //End Inspection Transaction
    //Good Receipt Costing Transaction
    function FetchGRCT()
    {
        $sql="SELECT * FROM INVT_T_GR_HEAD";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function EditGRCTHead($id)
    {
        $sql="SELECT * FROM INVT_T_GR_HEAD where GRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function EditGRCTLines($id)
    {
        $sql="SELECT * FROM INVT_T_GR_LINES where GRL_GRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
    function AddOverHead()
    {
        $date = date('d-M-y');
        $row_count=count($this->input->post('gro_line'));
        for($i=0;$i<$row_count-1;$i++)
        {
        $sql="select INVT_T_SEQ.nextval FROM DUAL";
        $sys_id = $this->db->query($sql, $return_object = TRUE)->result_array();
        $params1 = array(
        array('name'=>':P_GRO_SYS_ID', 'value'=>$sys_id[0]['NEXTVAL'], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRO_GRH_SYS_ID', 'value'=>$this->input->post('GRH_SYS_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRO_COMP_CODE', 'value'=>$this->session->userdata('USER_COMP_CODE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRO_TXN_DT', 'value'=>$this->input->post('GRH_TXN_DATE'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRO_LINE', 'value'=>$_POST['gro_line'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRO_DESC', 'value'=>$_POST['gro_desc'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_GRO_VALUE', 'value'=>$_POST['gro_val'][$i], 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_LANG_CODE', 'value'=>substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_USER_ID', 'value'=>$this->session->userdata('USER_ID'), 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_NUM', 'value'=>&$return_status, 'type'=>SQLT_CHR, 'length'=>300),
        array('name'=>':P_ERR_MSG', 'value'=>&$error_message, 'type'=>SQLT_CHR, 'length'=>300)
        );
        $this->db->stored_procedure('SPINE_INVT','INSERT_INVT_T_GR_OVERHEAD', $params1);
        }
        return $result = array("return_status"=>$return_status
                        ,"error_message"=>$error_message);
    }
    function EditOverHead($id)
    {
        $sql="SELECT * FROM INVT_T_GR_OVERHEAD where GRO_GRH_SYS_ID='$id'";
        return $this->db->query($sql, $return_object = TRUE)->result_array();
    }
}

?>