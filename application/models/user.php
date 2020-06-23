<?php
class User extends CI_Model {
 
    function __construct()
    {        
        parent::__construct();
    }
 
 
    function add($option)
    {
        $this->db->set('userID', $option['userid']);
        $this->db->set('userPasswd', $option['userPasswd']);
        $this->db->set('userName', $option['userName']);
        $this->db->set('userSex',$option['userSex']);
        $this->db->insert('user');
        $result = $this->db->insert_id();
        return $result;
    }

    function update($option)
    {
        $data=array(
            'userPasswd'=>$option['userPasswd'],
            'userName'=> $option['userName'],
            'userSex'=> $option['userSex']
        );
        $this->db->update('user',$data,array('userID'=>$this->session->userdata('nickname')));
    }

    function getbyid($option)
    {
        $result=$this->db->get_where('user',array('userID'=>$option['userID']))->row();
        return $result;
    }

    function delete()
    {
        $this->db->delete('user',array('userID'=>$this->session->userdata('nickname')));
    }
}