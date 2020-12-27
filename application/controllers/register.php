<?php 

class Register extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->library("session");
    }

    public function index()
    {
        $this->_rules();
        if($this->form_validation->run() == false){
            $this->load->view('template_admin/header');
            $this->load->view('register_form');
              
        }else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = MD5($this->input->post('password')) ;
            $role_id        = '2';
            
            $data = array (
                'nama'       => $nama,
                'username'   => $username,
                'alamat'     => $alamat,
                'gender'     => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp'     => $no_ktp,
                'password'   => $password,
                'role_id'    => $role_id
            );

            $this->rental_model->insert_data($data,'custumer');
            $this->session->set_flashdata('pesan', 
            '<script>
                Swal.fire({
                    icon: "success",
                    title : "Silahkan Login",
                    type : "success",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>'
            );

             redirect('auth/login');
        }
 
     }
     public function _rules()
     {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('no_telepon','Telp','required');
        $this->form_validation->set_rules('no_ktp','Noktp','required');
        $this->form_validation->set_rules('password','Password','required');
     }
}



?>