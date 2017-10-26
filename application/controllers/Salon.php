<?php
class Salon extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Salón Principal" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/institucion/salon_principal');
        $this->load->view('partials/footer');
    }
}