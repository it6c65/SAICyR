<?php
class Gallery extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->database();
    }
    public function index(){
        header('Content-Type: application/json');
        $images = $this->db->get('galeria');
        echo json_encode( $images->result() );
    }
    public function upload(){
        header('Content-Type: application/json');
        $config['upload_path'] = './public/img/subidas';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 1024 * 5;
        $config['csrf_protection'] = false;
        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload( 'image') ){
            $error = array( 'error' => $this->upload->display_errors() );
            echo json_encode($error);
        }else{
            $data = $this->upload->data();
            $success = ['success'=>$data['file_name']];
            echo json_encode($success);
            $this->load->model('agregar');
            $this->agregar->galeria($data['file_name']);
        }
    }
    public function delete(){
        $this->load->model("borrar");
        $this->borrar->galeria();
    }
};
