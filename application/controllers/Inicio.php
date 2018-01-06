<?php
class Inicio extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Inicio" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('inicio');
        $this->load->view('partials/footers/main');
    }
}
