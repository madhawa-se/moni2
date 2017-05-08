<?php

class Update extends CI_Controller {

    private $user_id;
    private $data=array();
    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
        $login_data = $this->session->userdata('loggedin');
        $email = $login_data["username"];
        //note:check for false requred
        $this->user_id = $this->user_model->get_user($email)->id;
    }

    public function basic() {
        $this->load->view('updates/basic');
    }

    public function aboutme() {
        $this->data["aboutme_data"]=$this->user_model->get_user_aboutme_data($this->user_id);
        $this->load->view('updates/aboutme',$this->data);
    }

    public function family() {
        $this->load->view('updates/family');
    }

    public function photos() {
        $this->load->view('updates/photos');
    }

    public function horoscope() {
        $this->load->view('updates/horoscope');
    }

    public function hide() {
        $this->load->view('updates/hide');
    }

}
