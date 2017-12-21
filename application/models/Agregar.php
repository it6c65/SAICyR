<?php
class Agregar extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function utilidades_taller(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "1",
            'galeria_id' => "1"
        );
        return $this->db->insert('inventario', $data);
    }

    public function galeria($name_img){
        $this->load->helper('url');
        $data = array(
            'nombre' => base_url("public/img/subidas/").$name_img
        );
        return $this->db->insert('galeria', $data);
    }
}

?>
