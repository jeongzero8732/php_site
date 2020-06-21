<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
	{
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('auth/login');
        $this->load->view('footer');
    }

    public function login()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('auth/login');
        $this->load->view('footer');
    }

    public function logout()
    {

    }

    public function register()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('auth/register');
        $this->load->view('footer');
    }
    

}
