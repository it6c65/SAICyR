<?php
class Arte extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Sala de Arte" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/institucion/salon_arte');
        $this->load->view('partials/footer');
    }
}
