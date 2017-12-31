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
        $this->db->select("inventario.id, nombre, codigo, condicion, categoria, galeria_id, galeria.url");
        $this->db->from("inventario");
        $this->db->join('galeria','galeria.id = galeria_id');
        $this->db->where('area_id', 1);
        $data = $this->db->get();
        return $data;
    }
}

?>
