<?php

class Profile_model extends CI_Model {


    function display_records()
  {
    $query=$this->db->get("tbl_customer");
    return $query->result();
  }
    
    




}
