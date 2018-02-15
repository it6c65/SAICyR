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
    public function change_question($id, $new_question){
        $change = array(
            "question_secret" => $new_question
        );
        $this->db->where("id",$id);
        $this->db->update("usuarios", $change);
    }
    public function change_answer($id, $new_answer){
        $change = array(
            "answer_secret" => $new_answer
        );
        $this->db->where("id",$id);
        $this->db->update("usuarios", $change);
    }

    public function borrar(){
        $json = $this->input->post('data');
        $data = json_decode($json);
        $this->db->where('id', $data->user->id);
        $this->db->delete('usuarios');
    }
    public function be_admin(){
        $json = $this->input->post('data');
        $data = json_decode($json);
        $this->db->set('tipo', 'Director');
        $this->db->where('id', $data->user->id);
        $this->db->update('usuarios');
    }
    public function be_user(){
        $json = $this->input->post('data');
        $data = json_decode($json);
        $this->db->set('tipo', 'Encargado');
        $this->db->where('id', $data->user->id);
        $this->db->update('usuarios');
    }
}
?>
