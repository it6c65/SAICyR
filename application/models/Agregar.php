<?php

/* ID areas: */
/*     1 - taller */
/*     2 - laboratorio */
/*     3 - oficina */
/*     4 - salon principal */
/*     5 - sala de arte */
/*     6 - taller de escultura */
/*     7 - deposito */

class Agregar extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function taller(){
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

    public function laboratorio(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "2",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }


    public function oficina(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "3",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }


    public function salon_principal(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "4",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function sala_arte(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "5",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function taller_escultura(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "6",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function deposito(){
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'area_id' => "7",
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
