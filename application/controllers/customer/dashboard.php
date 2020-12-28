<?php 
    class Dashboard extends CI_Controller
    {
       public function index()
        {
            $data['mobil'] = $this->rental_model->get_data('mobil')->result();
            $this->load->view('template_customer/header');
            $this->load->view('template_customer/navbar');
            $this->load->view('customer/dashboard',$data);
            $this->load->view('template_customer/footer');
        }

        public function detail_mobil($id){
            $data['detail'] = $this->rental_model->ambil_id_mobil($id);
          
            $this->load->view('template_customer/header');
            $this->load->view('template_customer/navbar');
            $this->load->view('customer/detail_mobil',$data);
            $this->load->view('template_customer/footer');
        }
        
    }



?>