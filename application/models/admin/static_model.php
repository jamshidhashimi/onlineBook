<?php
class Static_model extends CI_Model
{
    function __construct() 
    {
        parent::__construct();
    }
    
    function bringData($table='',$lang='')
    {
        if(empty($table) || empty($lang)){
            return;
        }
        $records = $this->db
                ->select('id, name_'.$lang.' AS name')
                ->from($table)
                ->get();
        if($records->num_rows() > 0){
            return $records->result();
        }else{
            return;
        }
    }
}