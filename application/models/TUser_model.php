<?php
class TUser_model extends CI_Model 
{
  /*View*/
    function display_records()
  {
    $query=$this->db->get("tbl_customer");
    return $query->result();
  }
	
} 
