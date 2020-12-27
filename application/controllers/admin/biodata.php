<?php 
class Biodata extends CI_Controller{
    
    public function index(){
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navbar');
        $this->load->view('admin/biodata');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
    }
}


?>