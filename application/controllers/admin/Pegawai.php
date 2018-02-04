<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('admin/Admin_m');
        $this->load->model('admin/Pegawai_m');
    }
    public function index($offset=0){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->get();
                $data['title'] = $this->Admin_m->info_pt(1)->nama_info_pt;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['page'] = 'admin/pegawai-v';
                $jumlah = $this->Pegawai_m->jumlah_data();
                $config['base_url'] = base_url().'/index.php/admin/pegawai/index/';
                $config['total_rows'] = $jumlah;
                $config['per_page'] = '20';
                $config['first_page'] = 'Awal';
                $config['last_page'] = 'Akhir';
                $config['next_page'] = '&laquo;';
                $config['prev_page'] = '&raquo;';
                // bootstap style
                $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative;'>";
                $config['full_tag_close'] ="</ul>";
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
                $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
                $config['next_tag_open'] = "<li>";
                $config['next_tagl_close'] = "</li>";
                $config['prev_tag_open'] = "<li>";
                $config['prev_tagl_close'] = "</li>";
                $config['first_tag_open'] = "<li>";
                $config['first_tagl_close'] = "</li>";
                $config['last_tag_open'] = "<li>";
                $config['last_tagl_close'] = "</li>";
                //inisialisasi config
                $this->pagination->initialize($config);
                // pengaturan searching
                $data['jmldata'] = $jumlah;
                $data['nmr'] = $offset;
                $data['hasil'] = $this->Pegawai_m->searcing_data($config['per_page'],$offset,@$post['string']);
                $data['pagging'] = $this->pagination->create_links();
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
}
?>