<?php
class Direccion extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Dirección" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/institucion/oficina_direccion');
        $this->load->view('partials/footer');
    }
}
