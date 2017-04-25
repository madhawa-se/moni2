<?php

class Search_model extends CI_Model{
     function __construct() {
        parent::__construct();
    }
    
    public function search_users(){
       $result= $this->db->get("user").result();
        
    }
    
    public function search_all(){
         return $result= $this->db->get("user")->result();
    }
}
