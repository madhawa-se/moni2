<?php

class Search_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function search_users() {
        $result = $this->db->get("user")->result();
    }

    public function search_all() {
        return $result = $this->db->get("user")->result();
    }

    public function search_quick($array,$to,$from) {
        $this->db->from('user');
        $this->db->where($array);
        $this->db->where('birthday <=', $this->get_birth_date("-$from"));
        $this->db->where('birthday >', $this->get_birth_date("-$to"));
        //echo $this->db->last_query();
        return $this->db->get()->result();
        //var_dump($this->db->last_query());
    }
    private function get_birth_date($age){
        $date = date('Y-m-d', strtotime("$age years"));
        return $date;
    }

}
