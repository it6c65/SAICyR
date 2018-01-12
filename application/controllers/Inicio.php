<?php
class Inicio extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->model("usuario");
        $this->usuario->logged();
    }
    public function index(){
        $titulo = array( "title" => "Inicio", "user" => $this->session->name );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('inicio');
        $this->load->view('partials/footers/main');
    }
}
