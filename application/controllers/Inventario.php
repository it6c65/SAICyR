<?php
class Inventario extends CI_Controller {
    public function index(){
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('inventario');
    }
}
