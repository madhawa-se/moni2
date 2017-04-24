<?php

class Pages extends CI_Controller{
    function __construct() {
        parent::__construct();

    }
   
    function main(){
        echo 'main';
    }
    function red(){
        echo 'red';
    }
    function green(){
        echo 'green';
    }
    function blue(){
        echo 'blue';
    }
    function no(){
        echo 'no';
    }
}