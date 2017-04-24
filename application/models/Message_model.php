<?php

/**
 * Description of Message_model
 *
 * @author madha
 */
class Message_model extends CI_Model {

    function compose_message($from,$to, $message) {
        //echo "hello";
        $data = array(
            'to' => $to,
            'from'=>$from,
            'msg' => $message,
            'date' =>  date('Y-m-d'),
            'time' =>  date('H:i:s'),
            'state' => 1,
            'type' => 1
        );

        $insert = $this->db->insert('message', $data);
        if ($insert === TRUE) {
            return TRUE;
        }
        return FALSE;
    }
    
    function get_messages(){
        $uid = get_logged_user_id();
        $this->db->from('message');
        $this->db->where('user_id', $uid);
        $query = $this->db->get();
    }

}
