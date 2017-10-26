<?php
class Deposito extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Depósito" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/institucion/deposito');
        $this->load->view('partials/footer');
    }
}
