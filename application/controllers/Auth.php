<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct()
    {       
        parent::__construct();    
    }  

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
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect('/');
    }

    function authentication()
    {
        $this->load->model('user');
        $usertable=$this->user->getbyid(array('userID'=>$this->input->post('userid')));

        if(
            $this->input->post('userid')==$usertable->userID && $this->input->post('password')==$usertable->userPasswd
        ){
            $this->session->set_userdata(array('is_login'=>true,'nickname'=>$usertable->userID));
            $this->load->helper('url');
            $this->session->set_flashdata('message','로그인 성공');
            redirect('/');
        }else{
            $this->session->set_flashdata('message','로그인에 실패했습니다');
            $this->load->helper('url');
            redirect('/auth/login');
        }
    }

    public function update()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->model('user');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','비밀번호','required|min_length[5]|max_length[20]');
       # die(var_dump($this->form_validation->run()));
        if($this->form_validation->run()===false){
            // $this->load->view('head');
            // $this->load->view('nav');
            $usertable=$this->user->getbyid(array('userID'=>$this->session->userdata('nickname')));
            $this->load->view('auth/userinfo',$usertable);
            $this->load->view('footer');
        }else{
            
            $this->user->update(array(
                'userPasswd'=>$this->input->post('password'),
                'userName'=>$this->input->post('name'),
                'userSex'=>$this->input->post('gender')
            ));
            
            // $query = str_replace( array("\r", "\n", "\t"), '', trim($this->db->last_query()) );
            // echo $query;
            // die();
            $this->session->set_flashdata('message','success.');
            $this->load->helper('url');
            redirect('/');
        }
    }


    public function register()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('userid','아이디','required|min_length[5]');
        $this->form_validation->set_rules('password','비밀번호','required|min_length[5]|max_length[20]');
        #die(var_dump($this->form_validation->run()));
        if($this->form_validation->run()===false){
            $this->load->view('auth/register');
        }else{
            
            $this->load->model('user');

            $this->user->add(array(
                'userid'=>$this->input->post('userid'),
                'userPasswd'=>$this->input->post('password'),
                'userName'=>$this->input->post('name'),
                'userSex'=>$this->input->post('gender')
            ));
            $this->load->helper('url');
            $this->session->set_flashdata('message','success.');
            redirect('/');
        }
        $this->load->view('footer');
    }

    function delete()
    {
        $this->load->model('user');
        $this->user->delete();
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('/');
    }
    

}
