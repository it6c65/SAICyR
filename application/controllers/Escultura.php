<?php
class Escultura extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Taller de Escultura" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('areas/institucion/taller_escultura');
        $this->load->view('partials/footer');
    }
}
