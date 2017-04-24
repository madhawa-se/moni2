<?php

class Pages extends CI_Controller{
    function __construct() {
        parent::__construct();

    }
   
    function home(){
        echo 'home';
    }
    function about(){
        echo 'about';
    }
    function contact(){
        echo 'contact';
    }
}