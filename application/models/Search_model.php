<?php

class Search_model extends CI_Model {

    private $limit_rows = 10;

    function __construct() {
        parent::__construct();
    }

    public function search_users() {
        $result = $this->db->get("user")->result();
    }

    public function search_all() {
        return $result = $this->db->get("user")->result();
    }

    public function search_quick($array, $to, $from, $start = 0) {
        $this->db->select("TIMESTAMPDIFF(YEAR, `birthday`, CURDATE()) AS age");
        $this->db->select("user_id,user.id,user.name,country,gender,religion.name as religion");
        $this->db->from('user');
        $this->db->join('pic', 'user.id = pic.user_id', 'left');
        //$this->db->join('pic', 'user.id = pic.user_id','left');
        $this->db->join('religion', 'user.religion = religion.id');
        $this->db->where($array);
        $this->db->where('birthday <=', $this->get_birth_date("-$from"));
        $this->db->where('birthday >', $this->get_birth_date("-$to"));
        $this->db->limit($this->limit_rows, $start);
        //echo $this->db->last_query();
        $result = $this->db->get()->result();
        //echo $this->db->last_query();
        //highlight_string( var_export($result, true));
        return $result;
    }
    public function search_advance($heightto, $heightfrom, $start = 0) {
        $this->db->select("TIMESTAMPDIFF(YEAR, `birthday`, CURDATE()) AS age");
        $this->db->select("pic.user_id,user.id,user.name,country,gender,religion.name as religion");
        $this->db->from('user');
        $this->db->join('pic', 'user.id = pic.user_id', 'left');
        //$this->db->join('pic', 'user.id = pic.user_id','left');
        $this->db->join('religion', 'user.religion = religion.id');
        $this->db->join('height', 'user.id = height.user_id');
        $this->db->where('height.value <', $heightto);
        $this->db->where('height.value >=', $heightfrom);
        $this->db->limit($this->limit_rows, $start);
        $result = $this->db->get()->result();
        //echo $this->db->last_query();
        //highlight_string( var_export($result, true));
        return $result;
    }

    public function search_shortlist($uid,$start = 0) {
        
        //SELECT * FROM shortlist join user on shortlist.listed_user_id = user.id 
        $this->db->select("TIMESTAMPDIFF(YEAR, `birthday`, CURDATE()) AS age");
        $this->db->select("pic.user_id,user.id,user.name,country,gender,religion.name as religion");
        $this->db->from('user');
        $this->db->join('pic', 'user.id = pic.user_id', 'left');
        $this->db->join('shortlist', 'shortlist.listed_user_id = user.id');
        //$this->db->join('pic', 'user.id = pic.user_id','left');
        $this->db->join('religion', 'user.religion = religion.id');
        $this->db->where('shortlist.user_id',$uid);
        $this->db->limit($this->limit_rows, $start);
        $result = $this->db->get()->result();
        //echo $this->db->last_query();
        //highlight_string( var_export($result, true));
        return $result;
    }

    private function get_birth_date($age) {
        $date = date('Y-m-d', strtotime("$age years"));
        return $date;
    }

}
