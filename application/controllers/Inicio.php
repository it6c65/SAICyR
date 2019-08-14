<?php
class Inicio extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->model("usuario");
        $this->usuario->logged();
        $this->load->database();
    }
    public function index(){
        $titulo = array( "title" => "Inicio", "user" => $this->session->userdata("name"), "admin" => $this->session->userdata("segurity") );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('table');
        $this->table->set_heading("Numero de Registro","Fecha", "Hora","Usuario","Acción", "Área");
        $planilla = array(
            'table_open' => '<table class="uk-table uk-table-striped">',
            'tbody_open' => '<tbody class="list">',
            'heading_cell_start' => '<th class="uk-text-center">',
        );
        $this->table->set_template($planilla);
        $this->db->order_by('id', 'DESC');
        $registro = $this->db->get("registro");
        foreach( $registro->result_array() as $row ){
            $id = array('data' => $row["id"], "class" => "id uk-text-center");
            $fecha = array('data' => $row["fecha_at"], "class" => "fecha uk-text-center");
            $hora = array('data' => $row["hora"], "class" => "hora uk-text-center");
            $usuario = array('data' => $row["usuario"], "class" => "usuario uk-text-center");
            $accion = array('data' => $row["accion"], "class" => "accion uk-text-center");
            $area = array('data' => $row["area"], "class" => "area uk-text-center");
            $this->table->add_row($id,$fecha,$hora,$usuario,$accion,$area);
        }
        $this->load->view('partials/header', $titulo );
        $this->load->view('partials/navbar', $titulo );
        $this->load->view('inicio');
        $this->load->view('partials/footers/config_user');
    }
    public function borrar_registro(){
        if( $this->input->get("signal") == 1 ){
            $this->db->truncate("registro");
        }
    }
}
