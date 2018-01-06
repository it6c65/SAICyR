<?php
class Direccion extends CI_Controller {
    public function index(){
        $this->load->database();
        $titulo = array( "title" => "Dirección" );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo);
        $this->load->view('inventario');
        $this->load->view('partials/footers/main');
    }
    public function agregar(){
        $this->load->model('agregar');
        $this->agregar->oficina();
    }
    public function utilidades(){
        header('Content-Type: application/json');
        $this->load->model('inventario');
        $mostrar = $this->inventario->oficina();
        echo json_encode( $mostrar->result());
    }
    public function editar(){
        $this->load->model('actualizar');
        $this->actualizar->inventario();
    }
    public function borrar(){
        $this->load->model('borrar');
        $this->borrar->inventario();
    }
}
