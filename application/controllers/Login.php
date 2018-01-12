<?php 
class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->database();
    }
    public function index(){
        $data = array( "title" => "Inicio de sesión");
        $this->load->helper(array('html','url','form'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules("usuario", "Usuario", "required");
        $this->form_validation->set_rules("clave", "Clave", "required");
        $this->load->model("usuario");
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('partials/header', $data);
            $this->load->view('login');
            $this->load->view('partials/footers/login');
        }else{
            $usuario = $this->input->post("usuario");
            $clave = $this->input->post("clave");
            $this->usuario->init_session($usuario,$clave);
            $data_user = array(
                "logged" => true,
                "name" => $usuario
            );
            $this->session->set_userdata($data_user);
            $this->session->set_flashdata("init", "¡Ha iniciado sesión con éxito!");
            redirect("/inicio");
        }
    }

    public function registro(){
        $this->load->helper(array('html','url','form'));
        $this->load->library('form_validation');
        $this->load->model('usuario');
        $data = array( "title" => "Registro");
        $this->form_validation->set_rules("username", "nombre de usuario", "alpha_dash|min_length[4]|max_length[15]|is_unique[usuarios.username]", array( "is_unique" => "Este %s ya existe" ));
        $this->form_validation->set_rules("realname", "nombre real", "min_length[4]|max_length[30]|trim|alpha_numeric_spaces|htmlspecialchars");
        $this->form_validation->set_rules("password", "clave", "min_length[8]|max_length[23]");
        $this->form_validation->set_rules("tipo", "tipo", "required");
        $this->form_validation->set_rules("question_secret", "Pregunta Secreta","required|max_length[140]|trim|alpha_numeric_spaces|htmlspecialchars");
        $this->form_validation->set_rules("answer_secret", "Respuesta Secreta", "required|max_length[140]|trim");
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('partials/header', $data);
            $this->load->view('register');
            $this->load->view('partials/footers/register');
        }else {
            $user_data = array(
                "username" => $this->input->post("username"),
                "realname" => $this->input->post("realname"),
                "password" => md5($this->input->post("password")),
                "area_id" => $this->input->post("area"),
                "tipo" => $this->input->post("tipo"),
                "question_secret" => $this->input->post("question_secret"),
                "answer_secret" => $this->input->post("answer_secret")
            );
            $this->usuario->create($user_data);
            $this->session->set_flashdata('newuser', "<i class='uk-icon-check'></i> Se ha creado un nuevo usuario con éxito");
            redirect("/login");
        }
    }

    public function cambiar_clave(){
    }

    public function salir(){
        $this->load->helper("url");
        $this->session->sess_destroy();
        redirect("/");
    }
}
