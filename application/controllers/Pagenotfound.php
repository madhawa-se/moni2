<?php

class Pagenotfound extends CI_Controller{

    public function index() {
        $this->output->set_status_header('404'); // setting header to 404
        $this->load->view('custom_errors/pagenotfound'); //loading view
    }

}
