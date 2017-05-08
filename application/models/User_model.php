<?php

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insertUser($data) {
        //return $this->db->insert('user', $data);
        //var_dump($data);

        $this->db->trans_start();
        $this->db->insert('user', $data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        if (!$this->db->trans_status()) {
            return false;
        } else {
            return $insert_id;
        }
    }

    function insert_reset($email, $rand) {
        //return $this->db->insert('user', $data);
        //var_dump($data);

        $user = $this->get_user($email);
        if ($user === FALSE) {
            return FALSE;
        } else {
            $status = FALSE;
            if ($this->is_reset_exist($user->id)) {

                $data = array("date" => null, "rand" => $rand);
                $this->db->where('user_id', $user->id);
                $status = $this->db->update('reset', $data);
            } else {
                $data = array("date" => null, "rand" => $rand, "user_id" => $user->id);
                $status = $this->db->insert('reset', $data);
            }

            if ($status === FALSE) {
                return FALSE;
            } else {
                return $user;
            }
        }
    }

    function updateUser($uid, $data) {
        //return $this->db->insert('user', $data);
        //var_dump($data);

        $this->db->trans_start();
        $this->db->where('id', $uid);
        $this->db->update('user', $data);
        $this->db->trans_complete();
        if (!$this->db->trans_status()) {
            return false;
        } else {
            return true;
        }
    }

    function update_pic($uid) {
        $sql = 'INSERT INTO pic (user_id, state)VALUES (?, ?) ON DUPLICATE KEY UPDATE state=0';
        $query = $this->db->query($sql, array($uid, 1));
        var_dump($query);
    }

    function verifyEmailID($id, $key) {
        $data = array('activation' => 1);
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {

            $result = $query->row();
            if ($result->rand == $key) {

                $this->db->set('activation', '1');
                $this->db->where('id', $id);
                $status = $this->db->update('user');
                if ($status === TRUE) {
                    return $result;
                } else {
                    return FALSE;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }

        //$this->db->where('md5(email)', $key);
        //return $this->db->update('user', $data);
    }

    function verify_reset($id, $key) {


        $this->db->from('reset');
        $this->db->where('user_id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $result = $query->row();
            if ($result->rand == $key) {

                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }

        //$this->db->where('md5(email)', $key);
        //return $this->db->update('user', $data);
    }

    function checkAuth($username, $password) {
        $this->db->from('user');
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        $ret = $query->num_rows();
        if ($ret >= 1) {
            $result = $query->row();
            if ($result->activation == 1) {
                return true;
            } else {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    function is_user_exist($email) {
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $ret = $query->num_rows();
        if ($ret == 0) {
            return false;
        } else {
            return true;
        }
    }

    function is_reset_exist($id) {
        $this->db->from('reset');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        $ret = $query->num_rows();
        if ($ret == 0) {
            return false;
        } else {
            return true;
        }
    }

    function get_user($email) {

        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }

        return false;
    }

    function get_user_by_id($id) {
        $this->db->from('user');
        $this->db->join('pic', 'user.id = pic.user_id', 'left');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }

        return false;
    }

    function get_user_data($email) {
        $user_data = $this->get_user($email); //check null

        $data = $user_data;
        $json_data = json_encode($data);
        return $json_data;
    }

    function get_user_family_data($email) {
        $user_data = $this->get_user($email); //check null

        $this->db->from('user');
        $this->db->join('weight', 'user.id = weight.user_id');
        $this->db->join('height', 'user.id = height.user_id');
        $this->db->where('user.id', $id);
        $query = $this->db->get();

        $row = false;
        if ($query->num_rows() > 0) {
            $row = $query->row();
            var_dump($row);
        }

        $json_data = json_encode($row);
        return $json_data;
    }

    function get_user_aboutme_data($id) {
        $this->db->select('user.id,weight.value as weight,height.value as height');
        $this->db->from('user');
        $this->db->join('weight', 'user.id = weight.user_id');
        $this->db->join('height', 'user.id = height.user_id');
        $this->db->where('user.id', $id);
        $query = $this->db->get();

        $row = false;
        if ($query->num_rows() > 0) {
            $row = $query->row();
        }

        $json_data = json_encode($row);
        return $json_data;
    }

    function short_list($target_id) {
        //note : already listed should be validated
        $uid = get_logged_user_id();
        $data = array("user_id" => $uid, "listed_user_id" => $target_id);
        $state = $this->db->insert('shortlist', $data);
        return $state;
    }

}

?>