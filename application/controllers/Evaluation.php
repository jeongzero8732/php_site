<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {
    function __construct()
    {       
        parent::__construct();   
        $this->load->model('board'); 
        #$this -> output -> enable_profiler(TRUE);
        
    } 

    public function index()
	{
        $this->list();
    }

    public function insert()
    {
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/static/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']     = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('lecName','강의명','required');
        $this->form_validation->set_rules('proName','교수명','required');

        if($this->form_validation->run()===false)
        {
            $this->load->view('head');
            $this->load->view('nav');
            $this->load->view('lecture/evaluation_insert');
            $this->load->view('footer');

        }else{
    
            if ( ! $this->upload->do_upload('fileToUpload'))
            {
                    $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                    #die(var_dump($this->upload->data()));
                    #die(var_dump($_SERVER['DOCUMENT_ROOT']));
                    $path = array('upload_data' => $this->upload->data('file_name'));
                    $file_path="/static/img/";
                    $file_path.=$path['upload_data'];
                    #die(var_dump($file_path));
            }

            $data=$this->board->add(array(
                'file_path' =>$file_path,
                'writer'=>$this->session->userdata('nickname'),
                'lecName'=>$this->input->post('lecName'),
                'proName'=>$this->input->post('proName'),
                'lecYear'=>$this->input->post('lecYear'),
                'semester'=>$this->input->post('semester'),
                'leckind'=>$this->input->post('leckind'),
                'evalTitle'=>$this->input->post('evalTitle'),
                'evalContent'=>$this->input->post('evalContent'),
                'lecSkill'=>$this->input->post('lecSkill'),
                'lecLevel'=>$this->input->post('lecLevel'),
                'totalScore'=>$this->input->post('totalScore'),
            ));


            $this->load->helper('url');
            $this->session->set_flashdata('message','success.');
            redirect('/evaluation');
        }

    }

    public function show($id)
    {
        $this->load->view('head');
        $this->load->view('nav');   
        $post=$this->board->getbyid(array('evalid'=>$id));
        #die($post);
        $this->load->view('lecture/post',$post);
        $this->load->view('footer');
    }

    public function delete()
    {   
        #die(var_dump($this->input->post('eid')));
        $this->board->delete($this->input->post('eid'));
        $this->load->helper('url');
        $this->session->set_flashdata('message','삭제 성공');
        redirect('/evaluation');
    }

    public function update()
    {
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/static/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']     = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';

        $this->load->library('upload', $config);
        $error='';
        $this->upload->initialize($config);

        $this->load->view('head');
        $this->load->view('nav');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('lecName','강의명','required');
        $this->form_validation->set_rules('proName','교수명','required');

        if($this->form_validation->run()===false){

            $post=$this->board->getbyid(array('evalid'=>$this->input->post('id')));
            $this->load->view('lecture/evaluation_update',$post);
            $this->load->view('footer');
        }else{

            if ( ! $this->upload->do_upload('fileToUpload'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    // $this->session->set_flashdata('message','사진사이즈가 너무 큽니다.');
                    // $this->load->helper('url');
                    // #die(var_dump($error));
                    // $this->load->view('lecture/evaluation_update',$post);
                    // #die(var_dump($error));
            }
            else
            {
                    #die(var_dump($this->upload->data()));
                    #die(var_dump($_SERVER['DOCUMENT_ROOT']));
                    $path = $this->upload->data('file_name');
                    $file_path="/static/img/";
                    #die($path);
                    $file_path.=$path;
                    #die(var_dump($file_path));
            }

            $id_=$this->input->post('id');
            $this->board->update(array(
                'file_path'=>$file_path,
                'id'=>$id_,
                'lecName'=>$this->input->post('lecName'),
                'proName'=>$this->input->post('proName'),
                'lecYear'=>$this->input->post('lecYear'),
                'semester'=>$this->input->post('semester'),
                'leckind'=>$this->input->post('leckind'),
                'evalTitle'=>$this->input->post('evalTitle'),
                'evalContent'=>$this->input->post('evalContent'),
                'lecSkill'=>$this->input->post('lecSkill'),
                'lecLevel'=>$this->input->post('lecLevel'),
                'totalScore'=>$this->input->post('totalScore'),
            ));

            $this->session->set_flashdata('message','success.');
            $this->load->helper('url');
            redirect('evaluation/show/'.$id_.'');
        }
    }

    public function list()
    {
        $this->load->view('head');
        $this->load->view('nav');

        $this->load->library('pagination');
        $this -> output -> enable_profiler(TRUE);
        #die(var_dump($this->input->post('sort')));

        $search_word=$page_url="";
        $uri_segment=4;
        #die($this->uri->uri_string());
        $uri_array=$this->segment_explode($this->uri->uri_string());
        if (in_array('q', $uri_array)) {
            // 주소에 검색어가 있을 경우 처리
            $search_word = urldecode($this -> url_explode($uri_array, 'q'));
 
            // 페이지네이션 용 주소
            $page_url = '/q/' . $search_word;
 
            $uri_segment = 6;
        }
        #var_dump($_SERVER['REQUEST_URI']);
        $config['base_url'] = '/index.php/evaluation/list/' .$page_url.'/page/';
        $config['total_rows'] = $this->board->get_list('count', '', '', $search_word);
        $config['per_page'] = 5;
        $config['uri_segment'] = $uri_segment;
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $data['links'] = $this->pagination->create_links();

        #die(var_dump($this->uri->segment($uri_segment,3)));
        $page=$this->uri->segment($uri_segment,4);

        if ($page > 1) {
            $start = (floor(($page / $config['per_page']))) * $config['per_page'];
        } else {
            #die(var_dump($page));
            $start = ($page - 1) * $config['per_page'];
        }

        $limit = $config['per_page'];
        #var_dump($start);
        #var_dump($_POST('sort'));
        #die($this->input->post('sort'));
        $sort=' ';
        if($this->input->post('sort')){
            $sort=$this->input->post('sort');
        }
        $data["results"]=$this->board->get_list( '', $start, $limit, $search_word,$sort);

        $this->load->view('lecture/evaluation',$data);
        $this->load->view('footer');
    }

    function url_explode($url, $key) {
        $cnt = count($url);
 
        for ($i = 0; $cnt > $i; $i++) {
            if ($url[$i] == $key) {
                $k = $i + 1;
                return $url[$k];
            }
        }
    }
 
    /**
     * HTTP의 URL을 "/"를 Delimiter로 사용하여 배열로 바꿔 리턴한다.
     *
     * @param String 대상이 되는 문자열
     * @return string[]
     */
    function segment_explode($seg) {
        // 세그먼트 앞 뒤 "/" 제거 후 uri를 배열로 반환
 
        $len = strlen($seg);
 
        if (substr($seg, 0, 1) == '/') {
            $seg = substr($seg, 1, $len);
        }
 
        $len = strlen($seg);
 
        if (substr($seg, -1) == '/') {
            $seg = substr($seg, 0, $len - 1);
        }
 
        $seg_exp = explode("/", $seg);
        return $seg_exp;
    }


}