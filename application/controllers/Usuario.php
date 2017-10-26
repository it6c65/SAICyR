<?php
class Usuario extends CI_Controller {
    public function index(){
        $titulo = array( "title" => "Perfil" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('profile');
        $this->load->view('partials/footer');
    }
}
