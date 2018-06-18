<?php
class Usuario_Actual extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->model("usuario");
        $this->usuario->logged();
    }
    public function index(){
        $titulo = array( "title" => "Inicio", "user" => $this->session->userdata("name"), "admin" => $this->session->userdata("segurity") );
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library("form_validation");
        $this->form_validation->set_rules("question_secret", "Pregunta Secreta","required|max_length[140]|trim|htmlspecialchars");
        $this->form_validation->set_rules("answer_secret", "Respuesta Secreta", "required|max_length[140]|trim");
        if ($this->form_validation->run() == FALSE){
            $this->load->view('partials/header', $titulo );
            $this->load->view('partials/navbar', $titulo );
            $this->load->view('profile');
            $this->load->view('partials/footers/config_user');
        }else{
            $this->load->model("usuario");
            $nueva_pregunta = $this->input->post("question_secret");
            $nueva_respuesta = $this->input->post("answer_secret");
            $this->usuario->change_question($this->session->userdata("id"), $nueva_pregunta );
            $this->usuario->change_answer( $this->session->userdata("id"), $nueva_respuesta );
            $this->session->set_flashdata("save_question", " <i class='uk-icon-check'></i> Se han guardado con éxito la nueva pregunta secreta");
            redirect("/usuario_actual");
        }
    }
}
