<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
	{
        $this->_layout();
        #$this->output->cache(5);
        $this -> output -> enable_profiler(TRUE);

    }

    public function _layout(){
        #$this->benchmark->mark('head_start');
        $this->load->view('head');
        #$this->benchmark->mark('head_end');
        #$this->benchmark->mark('nav_start');
        $this->load->view('nav');
        #$this->benchmark->mark('nav_end');
        #$this->benchmark->mark('home_start');
        $this->load->view('home');
        #$this->benchmark->mark('home_end');
       # $this->benchmark->mark('footer_start');
        $this->load->view('footer');
       # $this->benchmark->mark('footer_end');
    }
}
