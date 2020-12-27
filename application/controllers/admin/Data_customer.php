<?php

class Data_customer extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->library("session");
    }
    
    
    public function index(){
        //menampilkan data costumer
        $data['custumer'] = $this->rental_model->get_data('custumer')->result();
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/navbar');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/data_customer',$data);
    $this->load->view('template_admin/footer');
    } 
    public function jsonGetAllData()
    {
        $data['custumer'] = $this->rental_model->get_data('custumer')->result();
        echo json_encode($data);
    }
   
    public function tambah_customer()
    {
        $data['custumer']= $this->rental_model->get_data('custumer')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_tambah_customer');
        $this->load->view('template_admin/footer');  
    }
    public function tambah_customer_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == false ){
            $this->tambah_customer();
        }else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = MD5($this->input->post('password')) ;
        
            $data = array (
                'nama'       => $nama,
                'username'   => $username,
                'alamat'     => $alamat,
                'gender'     => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp'     => $no_ktp,
                'password'   => $password
            );
            // var_dump($data);
            // die;
            $this->rental_model->insert_data($data,'custumer');
            $this->session->set_flashdata('pesan', 
            '<script>
                Swal.fire({
                    icon: "success",
                    title : "Data Customer Tersimpan",
                    type : "success",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>'
            );

             redirect('admin/data_customer');
        }

    }
    public function update_customer($id)
    {
        $where = array('id_customer' => $id);
        $data['custumer'] = $this->db->query("SELECT * FROM custumer WHERE id_customer = '$id'")->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_update_customer', $data);
        $this->load->view('template_admin/footer');  
    }
    public function update_customer_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == false ){
  
        }else {
            $id =  $this->input->post('id_customer');
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $alamat         = $this->input->post('alamat');
            $gender         = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp         = $this->input->post('no_ktp');
            $password       = MD5($this->input->post('password')) ;
        
            $data = array (
                'nama'       => $nama,
                'username'   => $username,
                'alamat'     => $alamat,
                'gender'     => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp'     => $no_ktp,
                'password'   => $password
            );
         
            $where = array (
                    'id_customer' => $id
            );
            $this->rental_model->update_data('custumer', $data,$where);
            $this->session->set_flashdata('pesan', 
            '<script>
                Swal.fire({
                    icon: "success",
                    title : "Data Customer Berhasil Diupdate",
                    type : "success",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>'
            );

             redirect('admin/data_customer');
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
    public function delete_customer($id)
    {
        $where = array('id_customer' => $id);
        $this->rental_model->delete_data($where, 'custumer');
        $this->session->set_flashdata('pesan',
        '<script>
            Swal.fire({

                icon: "success",
                title : "Data Customer Berhasil Dihapus",
                type : "success",
                showConfirmButton: false,
                timer: 1500
            })
        </script>'
       );
         redirect('admin/data_customer');
    }


    
}

?>