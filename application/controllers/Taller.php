<?php
class Taller extends CI_Controller {
    public function index(){
        $this->load->database();
        $titulo = array( "title" => "Taller" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo);
        $this->load->view('areas/taller');
        $this->load->view('partials/footer');
    }
    public function agregar(){
        $this->load->model('agregar');
        $this->load->helper('url');
        $this->agregar->utilidades_taller();
        redirect("/taller/index");
    }
}
