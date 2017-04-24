<?php

/**
 * Description of Message
 *
 * @author madha
 */
class Message extends My_Controller {

    //put your code here


    public function compose() {

        $this->load->helper('user_helper');

        if ($this->loggedin) {
            $this->load->model("Message_model");
            $from = get_logged_user_id();
            $to = $this->input->post("to");
            $message = $this->input->post("message");
            $compose_message = $this->Message_model->compose_message($from, $to, $message);
        }
    }

}
