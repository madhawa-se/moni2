<?php

/**
 * Description of Search
 *
 * @author madha
 */
class Search extends CI_Controller {

    //put your code here
    protected $view_data;

    public function __construct() {
        parent::__construct();
        $this->load->model("Search_model");
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
        $post_data=array_filter($this->input->post(array("gender","religion","mothertongue","livein"),TRUE)); 
        $to=$this->input->post("to");
        $from=$this->input->post("from");
        $this->view_data["pre_dataset"]=TRUE;
        $this->view_data["pre_selected"]="quick";
        $this->view_data['user_profiles'] = $this->Search_model->search_quick($post_data,$to,$from);
        $this->load->view('profile/card', $this->view_data);
    }

}
