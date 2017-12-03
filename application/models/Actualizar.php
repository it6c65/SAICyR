<?php
class Inventario extends CI_Model{

    public function utilidades_taller(){
        $add = $this->db->get("inventario");
        $add = $this->db->select("nombre");
    }
}

?>
