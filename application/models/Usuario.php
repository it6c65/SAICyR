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
        $this->db->where("password", md5($pass));
        $this->db->limit(1);
        $query = $this->db->get();
        if( $query->num_rows() == 1 ){
            return true;
        }else{
            return false;
        }
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
    public function change_password($id,$new_pass){
        $change = array(
            "password" => md5($new_pass)
        );
        $this->db->where("id",$id);
        $this->db->update("usuarios", $change);
    }
}
?>
