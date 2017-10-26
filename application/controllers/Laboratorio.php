<?php
class Laboratorio extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Laboratorio" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/laboratorio');
        $this->load->view('partials/footer');
    }
}
