<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function print_json($state,$data) {//array or object
    header('Content-Type: application/json');
    $data=["state"=>$state,"data"=>$data];
    echo json_encode($data);
}
