<?php
/* Configuro el reloj del servidor al de Venezuela */
date_default_timezone_set('America/Caracas');
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
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Taller" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
            'area_id' => "1",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function laboratorio(){
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Laboratorio" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
            'area_id' => "2",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }


    public function oficina(){
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Oficina" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
            'area_id' => "3",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }


    public function salon_principal(){
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Salón Principal" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
            'area_id' => "4",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function sala_arte(){
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Sala de Arte" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
            'area_id' => "5",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function taller_escultura(){
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Taller de Escultura" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
            'area_id' => "6",
            'galeria_id' => $img
        );
        return $this->db->insert('inventario', $data);
    }

    public function deposito(){
        /* la funcion registra la accion antes de ejecutarse */
        $this->registro("Agrego", "Depósito" );
        /* verifica si el objeto tiene imagen asociada */
        $img = $this->input->post('img');
        if( $img == null ){
            $img = "1";
        }
        /* Concreta todos los datos del objeto */
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'codigo' => $this->input->post('codigo'),
            'condicion' => $this->input->post('condicion'),
            'categoria' => $this->input->post('categoria'),
            'cantidad' => $this->input->post('cantidad'),
            'escala' => $this->input->post('escala'),
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

    public function registro($accion, $area){
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

?>
