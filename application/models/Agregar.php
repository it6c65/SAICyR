<?php
class Agregar extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function utilidades_taller(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "1",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function galeria($name_img){
        $this->load->helper('url');
        $data = array(
            'url' => base_url("public/img/subidas/").$name_img
        );
        return $this->db->insert('galeria', $data);
    }
}

?>
