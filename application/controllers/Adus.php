<?php
class Adus extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Administración de Usuarios" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('adm_user');
        $this->load->view('partials/footer');
    }
}
