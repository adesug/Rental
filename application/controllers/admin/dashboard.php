<?php

class Dashboard extends CI_Controller{
public function index(){

    // $data ['title'] = "Dashboard"; //title dashboard

    //menampilkan jumlah data 
    $mobil =  $this->db->query("SELECT * FROM mobil");
    $data['mobil'] = $mobil->num_rows();

    $tipe = $this->db->query("SELECT * FROM tipe");
    $data['tipe'] = $tipe->num_rows();

    $custumer = $this->db->query("SELECT * FROM custumer");
    $data['custumer'] = $custumer->num_rows();



    $this->load->view('template_admin/header',$data);
    $this->load->view('template_admin/navbar',);
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/dashboard',$data);
    $this->load->view('template_admin/footer');
}

}


?>