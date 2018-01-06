<?php
class Borrar extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function inventario(){
        $json = $this->input->post('data');
        $data = json_decode($json);
        $this->db->where('id', $data->tool->id);
        $this->db->delete('inventario');
    }

    public function galeria(){
        $this->load->helper('url');
        $json = $this->input->post('data');
        $data = json_decode($json);
        $address = str_replace( base_url(), "./", $data->img->url);
        echo var_dump( $address );
        if( file_exists( $address ) ){
            unlink($address);
        }
        $this->db->select("galeria_id");
        $this->db->where("galeria_id", $data->img->id);
        $asociados_db = $this->db->get("inventario");
        foreach( $asociados_db->result() as $asociado ){
            $this->db->where("galeria_id", $asociado->galeria_id);
            $this->db->update("inventario", array( "galeria_id" => 1 ));
        }

        $this->db->where('id', $data->img->id);
        $this->db->delete('galeria');
    }
}

?>
