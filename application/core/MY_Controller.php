<?php

class My_Controller extends CI_Controller {

    protected $loggedin = false;
    protected $view_data = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'user'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
        $this->genarate_header();
        $this->genarate_footer();
    }

    public function genarate_header() {
        if ($this->session->has_userdata('loggedin')) {
            $this->loggedin = true;
            $login_data = $this->session->userdata('loggedin');
            $uname = $login_data["username"];
            $pic = get_profile_pic(get_logged_user_id());
            $this->view_data["pic"] = $pic;

            //echo ("hello $uname ! welcome back");
            $template_header = $this->load->view("headers/header_log", '', TRUE);
        } else {
            $template_header = $this->load->view("headers/header_def", '', TRUE);
        }
        $this->view_data["header"] = $template_header;
    }

    public function genarate_footer() {
        $template_footer = $this->load->view("footers/footer", '', TRUE);
        $this->view_data["footer"] = $template_footer;
    }

}

class uploadable extends My_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function do_upload($uid) {
        $config['upload_path'] = 'uploads';
        $config['overwrite'] = true;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['file_name'] = "$uid";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) {
            $error = array('error' => $this->upload->display_errors());
            return FALSE;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return TRUE;
        }
    }

}
