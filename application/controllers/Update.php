<?php

class Update extends CI_Controller {

    public function index() {
        
    }
    public function basic(){
        $this->load->view('updates/basic');
    }
    public function aboutme(){
        $this->load->view('updates/aboutme');
    }
    public function family(){
        $this->load->view('updates/family');
    }
    public function photos(){
        $this->load->view('updates/photos');
    }
    public function horoscope(){
        $this->load->view('updates/horoscope');
    }
    public function hide(){
        $this->load->view('updates/hide');
    }


}
