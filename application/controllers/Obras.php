<?php
class Obras extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Obras" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/obras');
        $this->load->view('partials/footer');
    }
}
