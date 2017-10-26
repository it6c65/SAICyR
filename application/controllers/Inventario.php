<?php
class Inventario extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Inventario" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('inventario');
        $this->load->view('partials/footer');
    }
}
