<?php
class Admuser extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->model("usuario");
        $this->usuario->logged();
    }
    public function index(){
        $titulo = array( "title" => "Administración de Usuarios", "user" => $this->session->userdata("name"), "admin" => $this->session->userdata("segurity")  );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('adm_user');
        $this->load->view('partials/footers/user');
    }

    public function lista(){
        header('Content-Type: application/json');
        $users = $this->db->get('usuarios');
        echo json_encode( $users->result() );
    }
    public function borrar(){
        $this->load->model("usuario");
        $this->usuario->borrar();
    }
    public function become_admin(){
        $this->load->model("usuario");
        $this->usuario->be_admin();
    }
    public function become_user(){
        $this->load->model("usuario");
        $this->usuario->be_user();
    }
}
