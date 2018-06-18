<?php

/* ID areas: */
/*     1 - taller */
/*     2 - laboratorio */
/*     3 - oficina */
/*     4 - salon principal */
/*     5 - sala de arte */
/*     6 - taller de escultura */
/*     7 - deposito */

class Inventario extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function taller(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 1);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

    public function laboratorio(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 2);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

    public function oficina(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 3);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

    public function salon_principal(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 4);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

    public function sala_arte(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 5);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

    public function taller_escultura(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 6);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

    public function deposito(){
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, cantidad, escala, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 7);
        $this->db->order_by('inventario.id','DESC');
        $data = $this->db->get();
        return $data;
    }

}

?>
