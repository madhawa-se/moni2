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
