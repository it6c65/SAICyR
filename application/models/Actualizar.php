<?php
class Actualizar extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function inventario(){
        $json = $this->input->post('data');
        $data = json_decode($json);
        if( $data->tool->img != null ){
            $this->db->select("id, url");
            $this->db->where("url", $data->tool->img);
            $imagen = $this->db->get("galeria", 1)->row();
            if(isset($imagen)){
                $img_id = $imagen->id;
            }
        }else if($data->tool->img == null){
            $img_id = 1;
        }
        $this->db->set('nombre', $data->tool->name );
        $this->db->set('codigo', $data->tool->code );
        $this->db->set('condicion', $data->tool->current_condition );
        $this->db->set('categoria', $data->tool->current_category );
        $this->db->set('galeria_id', $img_id );
        $this->db->where('id', $data->tool->id);
        $this->db->update("inventario");
    }

}

?>
