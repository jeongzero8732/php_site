<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
	{
        $this->_layout();
    }
    
    public function home(){
        $this-> _layout();
    }

    public function evaluation(){
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('lecture/evaluation');
        $this->load->view('footer');
    }

    public function login(){

    }


    public function _layout(){
        //header, main, footer 로딩
        // var_dump($this->session->userdata('session_test'));
        // $this->session->set_userdata('session_test','jaeho');
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('home');
        $this->load->view('footer');
    }
}
