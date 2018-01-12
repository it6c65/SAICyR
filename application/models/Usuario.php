<?php
class Usuario extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function create($user){
        $this->db->insert("usuarios", $user);
    }
    public function init_session($user,$pass){
        $this->db->select("username, password");
        $this->db->from("usuarios");
        $this->db->where("username", $user);
        $this->db->where("password", $pass);
        $this->db->limit(1);
        return $this->db->get();
    }
    public function logged(){
        $this->load->helper("url");
        $logeado = $this->session->userdata("logged");
        if(!isset($logeado) || $logeado != true){
            $this->session->sess_destroy();
            redirect("/");
        }
    }
    public function logged_as_admin(){
    }
}
?>
