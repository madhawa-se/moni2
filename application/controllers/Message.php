<?php

/**
 * Description of Message
 *
 * @author madha
 */
class Message extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Message_model");
    }

    public function compose() {


        if ($this->loggedin) {
            $from = get_logged_user_id();
            $to = $this->input->post("to");
            $message = $this->input->post("message");
            $compose_message = $this->Message_model->compose_message($from, $to, $message);
        }
    }

    public function get_inbox() {
        $messages = $this->Message_model->get_inbox();
        print_json(TRUE,$messages);
    }
    public function get_outbox() {
        $messages = $this->Message_model->get_outbox();
        print_json(TRUE,$messages);
    }

}
