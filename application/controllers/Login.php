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
            if($this->usuario->init_session($usuario,$clave)){
                $this->db->select("username,tipo,id,area_id");
                $this->db->from("usuarios");
                $this->db->where("username", $usuario);
                $this->db->limit(1);
                $permiso= $this->db->get()->row();
                $data_user = array(
                    "logged" => true,
                    "name" => $usuario,
                    "segurity" => $permiso->tipo,
                    "id" => $permiso->id,
                    "zone" => $permiso->area_id
                );
                $this->session->set_userdata($data_user);
                $this->session->set_flashdata("init", "¡Ha iniciado sesión con éxito!");
                $this->registro_admin("Entrar","Inicio");
                redirect("/inicio");
            }else{
                $this->session->set_flashdata("error_session","Usuario o clave inválidos");
                redirect("/");
            }
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
        $this->form_validation->set_rules("question_secret", "Pregunta Secreta","required|max_length[140]|trim|htmlspecialchars");
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
        $this->load->helper(array('html','url','form','cookie'));
        if($this->input->post("name") != null){
            $this->db->select("id,username");
            $this->db->from("usuarios");
            $this->db->where("username", $this->input->post("name"));
            $this->db->limit(1);
            $query = $this->db->get();
            if( $query->num_rows() == 1 ){
                $user = $query->row();
                set_cookie("user_recovery", $user->id, 540);
                echo "existe";
                return false;
            }else{
                echo "no existe";
                return false;
            }
        }
        $this->load->library('form_validation');
        $data = array( "title" => "Cambio de clave");
        $this->form_validation->set_rules("password", "clave", "required|min_length[8]|max_length[23]");
        $this->form_validation->set_rules("repeat_password", "clave", "required|matches[password]");
        if( $this->form_validation->run() == false ){
            $this->load->view('partials/header', $data);
            $this->load->view('change_password');
            $this->load->view('partials/footers/register');
        }else{
            $this->load->model("usuario");
            $nueva_clave = $this->input->post("password");
            $id = get_cookie("user_recovery");
            $this->usuario->change_password($id, $nueva_clave);
            $this->session->set_flashdata("change_pass", "<i class='uk-icon-check'></i> Se ha cambiado la clave con éxito");
            redirect("/");
        }
    }
    public function pregunta_secreta(){
        $this->load->helper(array('html','url','form','cookie'));
        $this->load->library('form_validation');
        $data = array( "title" => "Pregunta Secreta");
        $this->form_validation->set_rules("answer_secret", "Respuesta Secreta", "required");
        if ($this->form_validation->run() == false){
            $this->db->select("id,question_secret");
            $this->db->from("usuarios");
            $this->db->where("id", get_cookie("user_recovery") );
            $this->db->limit(1);
            $query = $this->db->get()->row_array();
            $question = $query["question_secret"]; 
            $this->load->view('partials/header', $data);
            $user = array( "pregunta" => $question);
            $this->load->view('secret_answer', $user);
            $this->load->view('partials/footers/login');
        }else{
            $this->db->select("id, answer_secret");
            $this->db->from("usuarios");
            $this->db->where("answer_secret", $this->input->post("answer_secret"));
            $this->db->where("id", get_cookie("user_recovery"));
            $this->db->limit(1);
            $query = $this->db->get();
            if($query->num_rows() == 1){
                redirect("login/cambiar_clave");
            }else{
                $this->session->set_flashdata("answer_error","Esa no es la respuesta correcta a la pregunta secreta");
                redirect("/");
            }
        }
    }

    public function salir(){
        $this->load->helper("url");
        $this->session->set_flashdata("exit", "<i class='uk-icon-check'></i> ¡Ha salido con éxito!");
        $this->registro_admin("Salir", "Login");
        redirect("/");
    }

    public function registro_admin($accion,$area){
        $data = array(
            "fecha_at" => date("Y-m-d"),
            "hora" => date("H:i:s"),
            "usuario" => $this->session->userdata("name"),
            "accion" => $accion,
            "area" => $area
        );
        $this->db->insert('registro', $data);
    }
}
