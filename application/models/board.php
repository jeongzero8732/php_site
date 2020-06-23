<?php
class Board extends CI_Model {
 
    function __construct()
    {        
        parent::__construct();
    }
 
 
    function add($option)
    {
        $this->db->set('writer', $option['writer']);
        $this->db->set('lectureName', $option['lecName']);
        $this->db->set('professorName', $option['proName']);
        $this->db->set('lectureYear', $option['lecYear']);
        $this->db->set('semester', $option['semester']);
        $this->db->set('lecture_kinds', $option['leckind']);
        $this->db->set('evalutionTitle', $option['evalTitle']);
        $this->db->set('evalutionContent', $option['evalContent']);
        $this->db->set('lecskill', $option['lecSkill']);
        $this->db->set('leclevel', $option['lecLevel']);
        $this->db->set('totalScore', $option['totalScore']);

        $this->db->insert('evaluation');
        $result = $this->db->insert_id();
        return $result;
    }

   function get_list($type = '',$offset = '', $limit = '', $search_word= ''){

       $sword = '';
 
       if ($search_word != '') {
           // 검색어 있을 경우
           $sword = ' WHERE lectureName like "%' . $search_word . '%" or professorName like "%' . $search_word . '%" or writer like "%'.$search_word.'%"';
       }

       $limit_query = '';

       if ($limit != '' OR $offset != '') {
           // 페이징이 있을 경우 처리
           $limit_query = ' LIMIT ' . $offset . ', ' . $limit;
       }

       $sql = "SELECT * FROM EVALUATION ". $sword . " ORDER BY evalutionID DESC " . $limit_query;
       #var_dump($sql);
       $query = $this -> db -> query($sql);

       if ($type == 'count') {
           $result = $query -> num_rows();
       } else {
           $result = $query -> result();
       }

       return $result;



    }

    function getbyid($option)
    {
        $result=$this->db->get_where('evaluation',array('evalutionID'=>$option['evalid']))->row();
        return $result;
    }

   function record_count(){
        return $this->db->count_all("evaluation");
    }

    function delete()
    {
        $this->db->delete('evaluation',array('writer'=>$this->session->userdata('nickname')));

    }

    function update($option)
    {
        $data=array(
            'lectureName'=>$option['lecName'],
             'professorName'=> $option['proName'],
             'lectureYear'=> $option['lecYear'],
             'semester'=> $option['semester'],
             'lecture_kinds'=> $option['leckind'],
             'evalutionTitle'=> $option['evalTitle'],
             'evalutionContent'=> $option['evalContent'],
             'lecskill'=> $option['lecSkill'],
             'leclevel'=> $option['lecLevel'],
            'totalScore'=> $option['totalScore']
        );

        $this->db->update('evaluation',$data,array('evalutionID'=>$option['id']));
 
    }
}