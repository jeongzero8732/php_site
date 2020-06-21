<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {

    public function index()
	{
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('lecture/evaluation');
        $this->load->view('footer');
    }

    public function insert()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('lecture/evaluation_insert');
        $this->load->view('footer');
    }

}
