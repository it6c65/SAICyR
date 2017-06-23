<?php 
class Login extends CI_Controller{
    public function index(){
        $titulo = array( "title" => "Inicio de sesión");
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo);
        $this->load->view('login');
    }
}
