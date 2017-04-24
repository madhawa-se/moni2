<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function get_profile_pic($id = NULL) {
    $pic = file_exists("images/profiles/pic/p ($id).jpg");
    if ($pic === true) {
        $pic = base_url() . "images/profiles/pic/p ($id).jpg";
    } else {
        $pic = base_url() . "images/profiles/pic/null1.jpg";
    }
    return $pic;
}

function test_login() {
    $CI = & get_instance();  //get instance, access the CI superobject
    $isLoggedIn = $CI->session->userdata('is_logged_in');
    if ($isLoggedIn) {
        return TRUE;
    }
    return FALSE;
}

function log_check() {
    $CI = & get_instance();
    $login_data = $CI->session->userdata('loggedin');
    $logged = $login_data["logged_in"];
    return $logged;
}


function get_logged_user_id() {
    $CI = & get_instance();
    $login_data = $CI->session->userdata('loggedin');
    $email = $login_data["username"];
    $udata = $CI->user_model->get_user($email);
    $uid = $udata->id;
    return $uid;
}
