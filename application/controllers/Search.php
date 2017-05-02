<?php

/**
 * Description of Search
 *
 * @author madha
 */
class Search extends My_Controller {

    //put your code here
    protected $view_data;

    public function __construct() {
        parent::__construct();
        $this->load->model("Search_model");
        $this->load->model("User_model","user_model");
    }

    public function search_all() {
        $this->view_data['user_profiles'] = $this->Search_model->search_all();
        $this->load->view('profile/card', $this->view_data);
    }

    public function paginate() {
        $config['base_url'] = base_url() + "profile/search";
        $config['total_rows'] = 200;
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        echo $this->pagination->create_links();
    }

    public function quick_search_submit() {
        $post_data = array_filter($this->input->post(array("gender", "religion", "mothertongue", "livein"), TRUE));
        $to = $this->input->post("to");
        $from = $this->input->post("from");
        $this->view_data["preset"] = TRUE;
        $this->view_data["active"] = "quick_search";
        $this->view_data['user_profiles'] = $this->Search_model->search_quick($post_data, $to, $from);
       // var_dump($this->Search_model->search_quick($post_data, $to, $from));
        $this->view_data['search_result']=$this->load->view('profile/card', $this->view_data,TRUE);
        $this->search();
    }

    public function search() {
        $login_data = $this->session->userdata('loggedin');
        $email = $login_data["username"];

        $this->view_data["sub_content"] = $this->load->view('sub_content/search', $this->view_data, TRUE);
        $this->view_data["jsondata"] = $this->user_model->get_user_data($email);
        $this->base_profile();
    }

    function base_profile() {
        $login_data = $this->session->userdata('loggedin');
        $email = $login_data["username"];
        if ($this->user_model->get_user($email) !== FALSE) {
            $this->view_data["uname"] = $this->user_model->get_user($email)->name;
            $this->load->view('profile', $this->view_data);
        } else {
            //redirect('/home');
            //var_dump($this->user_model->get_user($email));
            $this->load->view('profile', $this->view_data);
        }
    }

}
