<?php
class Agregar extends CI_Model{

    public function utilidades_taller(){
        $this->db->select("nombre");
        $add = $this->db->get("inventario");
    }
}

?>
