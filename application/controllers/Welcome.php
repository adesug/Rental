<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data ['title'] = "Dashboard"; //title dashboard

	// 	$mobil =  $this->db->query("SELECT * FROM mobil");
	// 	$data['mobil'] = $mobil->num_rows();

	// 	$tipe = $this->db->query("SELECT * FROM tipe");
   	// 	$data['tipe'] = $tipe->num_rows();

	// 	$custumer = $this->db->query("SELECT * FROM custumer");
	// 	$data['custumer'] = $custumer->num_rows();
		

	// $this->load->view('template_admin/header',$data);
    // $this->load->view('template_admin/navbar',);
    // $this->load->view('template_admin/sidebar');
    // $this->load->view('admin/dashboard',$data);
	// $this->load->view('template_admin/footer');

	$data['mobil'] = $this->rental_model->get_data('mobil')->result();
	$this->load->view('template_customer/header');
	$this->load->view('template_customer/navbar');
	$this->load->view('customer/dashboard',$data);
	$this->load->view('template_customer/footer');
    
    
	}
}
