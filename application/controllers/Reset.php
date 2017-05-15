<?php

class Reset extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
    }

    public function index() {

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="help-danger help">', '</p>');

        $this->form_validation->set_rules('email', 'Email', 'required|callback_email_check');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("reset", $this->view_data);
        } else {
            //echo 'correct';
            $rand = substr(md5(rand()), 0, 7);
            $status = $this->user_model->insert_reset($this->input->post("email"), $rand);
            if ($status === FALSE) {
                echo 'failed';
            } else {
                $status_mail = $this->sendResetEmail($this->input->post("email"), $rand, $status->id, $status->name);
                if ($status_mail === TRUE) {
                    $this->load_state_view();
                    $this->load->view("status/password_reset_email_sent", $this->view_data);
                } else {
                    echo 'email error';
                }
            }
        }
    }

    public function email_check($str) {
        if ($this->user_model->is_user_exist($str)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('email_check', 'Cannot find a account associated with this email. Please check again');
            return FALSE;
        }
    }

    public function pass($reset_code) {
        $pieces = explode("_", $reset_code);
        if (sizeof($pieces) != 2) {
            return false;
        } else {
            $uid = $pieces[1];
            $key = $pieces[0];
            $status = $this->user_model->verify_reset($uid, $key);
            if ($status !== FALSE) {
                $this->view_data["ccode"] = $reset_code;
                $this->load->view("reset_password", $this->view_data);
            } else {
                echo 'Sorry!. Either reset linkis  expired or invalid';
            }
        }
    }

    private function decode_ccode($ccode) {
        $pieces = explode("_", $ccode);
        if (sizeof($pieces) != 2) {
            return false;
        } else {
            $uid = $pieces[1];
            $key = $pieces[0];
            return array("id" => $uid, "key" => $key);
        }
        //note:use this for all decode funtions
    }

    public function updatePassword() {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passwordconfirm', 'Passwordconfirm', 'required|matches[password]');

        if ($this->form_validation->run()) {
            $confirmation_code = $this->input->post("ccode");
            if ($this->form_validation->required($confirmation_code)) {
                $state = $this->decode_ccode($confirmation_code);
                if (!$state === false) {

                    $uid = $state["id"];
                    $code = $state["key"];

                    $state_verify = $this->user_model->verify_reset($uid, $code);
                    if ($state_verify !== FALSE) {
                        $state_update = $this->user_model->update_pass($state["id"], $this->input->post("password"));
                        if ($state_update === true) {
                            $this->load_success_view();
                        } else {
                            echo 'failed to update password <br>';
                        }
                    } else {
                        echo 'Sorry!. Either reset link is  expired or invalid <br>';
                    }
                } else {
                    echo 'unexpected error occured <br>';
                }
            } else {
                echo 'unexpected error occured <br>';
            }
        } else {
            echo 'fail';
            $this->load->view('reset_password', $this->view_data);
        }
    }

    function sendResetEmail($to_email, $rand, $uid, $name) {
        $data = array();
        $subject = 'Reset Your Password';
        $data["title"] = "title";
        $data["action"] = "Account Recovery Wizard";
        $message = "Hi $name,<br>
                    Please click the following link and Proceed to Recover your password 
                    Thank you!<br>
                    Regards , 
                    loveheart.lk
                    ";

        $data["reset_url"] = base_url() . 'reset/pass/' . $rand . '_' . $uid;
        return $this->send_email($data, $subject, "email_templates/reset", $to_email, $message);
    }

    function send_email($data, $subject, $view_name, $to_email, $message) {

        $from_email = $this->config->item('domain');
        $company_name = $this->config->item('company_name');
        $site = base_url();

        $data["company_name"] = $company_name;
        $data["site"] = $site;
        $data["from_email"] = $from_email;


        $data["title"] = "title";
        $data["message"] = $message;
        $content = $this->load->view($view_name, $data, TRUE);
        //echo $content;
        $data["subject"] = $subject;

        $config['protocol'] = 'mail';
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);

        $this->email->from($from_email, "$from_email");
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($content);

        return $this->email->send();
    }

    private function load_success_view() {
        $this->view_data['domain'] = $this->config->item('domain');
        $this->view_data['name'] = "sir";
        $this->view_data['company_name'] = $this->config->item('company_name');
        $this->load->view("status/password_reset_success", $this->view_data);
    }

    private function load_state_view() {
        $this->view_data['domain'] = $this->config->item('domain');
        $this->view_data['name'] = "sir";
        $this->view_data['company_name'] = $this->config->item('company_name');
    }

}
