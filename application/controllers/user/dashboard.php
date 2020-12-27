 <?php 

class Dashboard extends CI_Controller{
    public function index(){
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/navbar');
        $this->load->view('template_user/sidebar');
        $this->load->view('user/dashboard',$data);
        $this->load->view('template_user/footer');
    }
    public function detail_mobil($id){
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('template_user/header');
        $this->load->view('template_user/navbar');
        $this->load->view('user/detail_mobil',$data);
        $this->load->view('template_user/footer');
    }
}

?>