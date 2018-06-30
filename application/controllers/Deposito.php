<?php
/* Configuro el reloj del servidor al de Venezuela */
date_default_timezone_set('America/Caracas');
class Deposito extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->model("usuario");
        $this->usuario->logged();
    }
    public function index(){
        $this->load->database();
        $data = array( "title" => "Depósito", "header" => "Depósito de Restauración", "user" => $this->session->userdata("name"), "admin" => $this->session->userdata("segurity"), "area" => $this->session->userdata("zone"), "current" => 7  );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('partials/header', $data );
        $this->load->view('partials/navbar', $data);
        $this->load->view('inventario', $data);
        $this->load->view('partials/footers/main');
    }
    public function agregar(){
        $this->load->model('agregar');
        $this->agregar->deposito();
    }
    public function utilidades(){
        header('Content-Type: application/json');
        $this->load->model('inventario');
        $mostrar = $this->inventario->deposito();
        echo json_encode( $mostrar->result());
    }
    public function editar(){
        $this->load->model('actualizar');
        $this->registro("Modifico");
        $this->actualizar->inventario();
    }
    public function borrar(){
        $this->load->model('borrar');
        $this->registro("Elimino");
        $this->borrar->inventario();
    }
    public function registro($accion){
        $data = array(
            "fecha_at" => date("Y-m-d"),
            "hora" => date("H:i:s"),
            "usuario" => $this->session->userdata("name"),
            "accion" => $accion,
            "area" => "Depósito"
        );
        $this->db->insert('registro', $data);
    }
}
