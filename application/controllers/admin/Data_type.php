<?php

class Data_type extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
    $this->load->library("session");
  }

  public function index()
  {
    //mengambil data didalam database


    $this->load->view('template_admin/header');
    $this->load->view('template_admin/navbar');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/data_type');
    $this->load->view('template_admin/footer');
  }

  public function jsonGetAllData()
  {
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    echo json_encode($data);
  }

  public function tambah_type()
  {

    $this->load->view('template_admin/header');
    $this->load->view('template_admin/navbar');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/form_tambah_type');
    $this->load->view('template_admin/footer');
  }

  public function tambah_type_aksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->tambah_type();
    } else {
      $kode_type = $this->input->post('kode_type');
      $nama_type = $this->input->post('nama_type');

      $data = array(
        'kode_type'   => $kode_type,
        'nama_type'   => $nama_type,

      );

      $this->rental_model->insert_data($data, 'tipe');
      $this->session->set_flashdata(
        'pesan',
        '<script>
                Swal.fire({
                    
                    icon: "success",
                    title : "Data Type Mobil Tersimpan",
                    type : "success",
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>'
      );

      redirect('admin/data_type');
    }
  }

  public function update_type($id)
  {
    $where = array('id_type' => $id);
    $data['tipe']  = $this->db->query("SELECT * FROM tipe WHERE id_type = '$id'")->result();

    $this->load->view('template_admin/header');
    $this->load->view('template_admin/navbar');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/form_update_type', $data);
    $this->load->view('template_admin/footer');
  }

  public function update_type_aksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
    } else {
      $id  = $this->input->post('id_type');
      $kode_type  = $this->input->post('kode_type');
      $nama_type  = $this->input->post('nama_type');

      $data = array(
        'kode_type' => $kode_type,
        'nama_type' => $nama_type
      );

      $where = array(
        'id_type' => $id
      );
      $this->rental_model->update_data('tipe', $data,);
      $this->session->set_flashdata(
        'pesan',
        '<script>
            Swal.fire({
                
                icon: "success",
                title : "Data Type berhasi diupdate",
                type : "success",
                showConfirmButton: false,
                timer: 1500
            })
        </script>'
      );

      redirect('admin/data_type');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
    $this->form_validation->set_rules('nama_type', 'Nama Type', 'required');
  }

  public function delete_type($id)
  {
    $where =  array('id_type' => $id);
    $this->rental_model->delete_data($where, 'tipe');
    $this->session->set_flashdata(
      'pesan',
      '<script>
            Swal.fire({
                
                icon: "success",
                title : "Data Type di berhasil dihapus",
                type : "danger",
                showConfirmButton: false,
                timer: 1500
            })
        </script>'
    );

    redirect('admin/data_type');
  }
}
