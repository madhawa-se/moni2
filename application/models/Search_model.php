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

    public function search_quick($array, $to, $from) {
        $this->db->select("TIMESTAMPDIFF(YEAR, `birthday`, CURDATE()) AS age");
        $this->db->select("user_id,user.id,user.name,country,gender,religion.name as religion");
        $this->db->from('user');
        $this->db->join('pic', 'user.id = pic.user_id','left');
        $this->db->join('religion', 'user.religion = religion.id');
        $this->db->where($array);
        $this->db->where('birthday <=', $this->get_birth_date("-$from"));
        $this->db->where('birthday >', $this->get_birth_date("-$to"));
        //echo $this->db->last_query();
        $result= $this->db->get()->result();
        //echo $this->db->last_query();
        //highlight_string( var_export($result, true));
        return $result;
    }

    private function get_birth_date($age) {
        $date = date('Y-m-d', strtotime("$age years"));
        return $date;
    }

}
