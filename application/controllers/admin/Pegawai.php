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
                $jumlah = $this->Pegawai_m->jumlah_data(@$post['string']);
                $config['base_url'] = base_url().'/index.php/admin/pegawai/index/';
                $config['total_rows'] = $jumlah;
                $config['per_page'] = '10';
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
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['agama'] = $this->Pegawai_m->select_data('master_agama');
                $data['golongan'] = $this->Pegawai_m->select_data('master_golongan');
                $data['eselon'] = $this->Pegawai_m->select_data('master_eselon');

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
            redirect(base_url('index.php/login'));
        }
    }
    public function detail($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['agama'] = $this->Pegawai_m->select_data('master_agama');
                $data['golongan'] = $this->Pegawai_m->select_data('master_golongan');
                $data['eselon'] = $this->Pegawai_m->select_data('master_eselon');
                $data['bagian'] = 'admin/data-pegawai-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_keluarga($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['keluarga'] = $this->Pegawai_m->data_keluarga($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-keluarga-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_rpangkat($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['rpangkat'] = $this->Pegawai_m->data_rpangkat($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-rpangkat-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function detail_rjabatan($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['rjabatan'] = $this->Pegawai_m->data_rjabatan($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-rjabatan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_pendidikan($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['pendidikan'] = $this->Pegawai_m->data_pendidikan($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-pendidikan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_pelatihan($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['pelatihan'] = $this->Pegawai_m->data_pelatihan($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-pelatihan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_penghargaan($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['penghargaan'] = $this->Pegawai_m->data_penghargaan($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-penghargaan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_seminar($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['seminar'] = $this->Pegawai_m->data_seminar($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-seminar-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_organisasi($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['organisasi'] = $this->Pegawai_m->data_organisasi($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-organisasi-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_gaji_pokok($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['gaji_pokok'] = $this->Pegawai_m->data_gaji_pokok($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-gaji_pokok-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_hukuman($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['hukuman'] = $this->Pegawai_m->data_hukuman($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-hukuman-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function detail_dp3($id){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['dp3'] = $this->Pegawai_m->data_dp3($id);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/data-dp3-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create(){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'nama_pegawai' => $post['nama_pegawai'],
                    'nip'=>$post['nip'],
                    'nip_lama'=>$post['nip_lama'],
                    'no_kartu_pegawai'=>$post['no_kartu_pegawai'],
                    'no_npwp'=>$post['no_npwp'],
                    'kartu_askes_pegawai'=>$post['kartu_askes_pegawai'],
                    'tempat_lahir'=>$post['tempat_lahir'],
                    'tanggal_lahir'=>$post['tanggal_lahir'],
                    'jenis_kelamin'=>$post['jenis_kelamin'],
                    'agama'=>$post['agama'],
                    'id_golongan'=>$post['id_golongan'],
                    'status_pegawai'=>$post['status_pegawai'],
                    'tanggal_pengangkatan_cpns'=>$post['tanggal_pengangkatan_cpns'],
                    'alamat'=>$post['alamat']
                );
                $this->Pegawai_m->insert_data('data_pegawai',$datainput);
                $pesan = 'Data pegawai baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai'));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function create_keluarga($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'nama_anggota_keluarga' => $post['nama_anggota_keluarga'],
                    'id_pegawai' => $idpegawai,
                    'tanggal_lahir'=>$post['tanggal_lahir'],
                    'status_kawin'=>$post['status_kawin'],
                    'tanggal_nikah'=>$post['tanggal_nikah'],
                    'uraian'=>$post['uraian'],
                    'tanggal_cerai_meninggal'=>$post['tanggal_cerai_meninggal'],
                    'pekerjaan'=>$post['pekerjaan']
                );
                $this->Pegawai_m->insert_data('data_keluarga',$datainput);
                $pesan = 'Data pegawai baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_keluarga/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_rpangkat($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'status' => $post['status'],
                    'id_pegawai' => $idpegawai,
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'masa_kerja'=>$post['masa_kerja']
                );
                $this->Pegawai_m->insert_data('data_riwayat_pangkat',$datainput);
                $pesan = 'Data riwayat pangkat baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_rpangkat/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_rjabatan($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'status' => $post['status'],
                    'id_pegawai' => $idpegawai,
                    'penempatan'=>$post['penempatan'],
                    'uraian'=>$post['uraian'],
                    'tmt_eselon'=>$post['tmt_eselon'],
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'lokasi'=>$post['lokasi']
                );
                $this->Pegawai_m->insert_data('data_riwayat_jabatan',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_rjabatan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_pendidikan($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'tingkat_pendidikan' => $post['tingkat_pendidikan'],
                    'id_pegawai' => $idpegawai,
                    'jurusan'=>$post['jurusan'],
                    'uraian'=>$post['uraian'],
                    'teknik_non_teknik'=>$post['teknik_non_teknik'],
                    'sekolah'=>$post['sekolah'],
                    'tempat_sekolah'=>$post['tempat_sekolah'],
                    'nomor_sttb'=>$post['nomor_sttb'],
                    'tanggal_sttb'=>$post['tanggal_sttb'],
                    'tanggal_lulus'=>$post['tanggal_lulus']
                );
                $this->Pegawai_m->insert_data('data_pendidikan',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_pendidikan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_pelatihan($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'uraian' => $post['uraian'],
                    'id_pegawai' => $idpegawai,
                    'lokasi'=>$post['lokasi'],
                    'tanggal_sertifikat'=>$post['tanggal_sertifikat'],
                    'jam_pelatihan'=>$post['jam_pelatihan'],
                    'negara'=>$post['negara']
                );
                $this->Pegawai_m->insert_data('data_pelatihan',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_pelatihan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_penghargaan($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'uraian' => $post['uraian'],
                    'id_pegawai' => $idpegawai,
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk']
                );
                $this->Pegawai_m->insert_data('data_penghargaan',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_penghargaan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_seminar($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'uraian' => $post['uraian'],
                    'id_pegawai' => $idpegawai,
                    'lokasi'=>$post['lokasi'],
                    'tanggal'=>$post['tanggal']
                );
                $this->Pegawai_m->insert_data('data_seminar',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_seminar/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_organisasi($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'uraian' => $post['uraian'],
                    'id_pegawai' => $idpegawai,
                    'lokasi'=>$post['lokasi'],
                    'tanggal'=>$post['tanggal']
                );
                $this->Pegawai_m->insert_data('data_organisasi',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_organisasi/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_gaji_pokok($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'nomor_sk' => $post['nomor_sk'],
                    'id_pegawai' => $idpegawai,
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'dasar_perubahan'=>$post['dasar_perubahan'],
                    'gaji_pokok'=>$post['gaji_pokok'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'masa_kerja'=>$post['masa_kerja'],
                    'pejabat_menetapkan'=>$post['pejabat_menetapkan']
                );
                $this->Pegawai_m->insert_data('data_gaji_pokok',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_gaji_pokok/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_hukuman($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'uraian' => $post['uraian'],
                    'id_pegawai' => $idpegawai,
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'masa_berlaku'=>$post['masa_berlaku'],
                    'pejabat_menetapkan'=>$post['pejabat_menetapkan']
                );
                $this->Pegawai_m->insert_data('data_hukuman',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_hukuman/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function create_dp3($idpegawai){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'tahun' => $post['tahun'],
                    'id_pegawai' => $idpegawai,
                    'kesetiaan'=>$post['kesetiaan'],
                    'prestasi'=>$post['prestasi'],
                    'tanggung_jawab'=>$post['tanggung_jawab'],
                    'ketaatan'=>$post['ketaatan'],
                    'kejujuran'=>$post['kejujuran'],
                    'kerjasama'=>$post['kerjasama'],
                    'prakarsa'=>$post['prakarsa'],
                    'kepemimpinan'=>$post['kepemimpinan'],
                    'rata_rata'=>$post['rata_rata'],
                    'atasan'=>$post['atasan'],
                    'penilai'=>$post['penilai'],
                    'mengetahui'=>$post['mengetahui']
                );
                $this->Pegawai_m->insert_data('data_dp3',$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di tambahkan';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_dp3/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_rpangkat($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_riwayat_pangkat','id_riwayat_pangkat',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-rpangkat-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_rpangkat($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'status' => $post['status'],
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'masa_kerja'=>$post['masa_kerja']
                );
                $this->Pegawai_m->update_data('data_riwayat_pangkat','id_riwayat_pangkat',$idr,$datainput);
                $pesan = 'Data riwayat pangkat baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_rpangkat/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_rjabatan($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_riwayat_jabatan','id_riwayat_jabatan',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-rjabatan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_rjabatan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'status' => $post['status'],
                    'penempatan'=>$post['penempatan'],
                    'uraian'=>$post['uraian'],
                    'tmt_eselon'=>$post['tmt_eselon'],
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'lokasi'=>$post['lokasi']
                );
                $this->Pegawai_m->update_data('data_riwayat_jabatan','id_riwayat_jabatan',$idr,$datainput);
                $pesan = 'Data riwayat jabatan baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_rjabatan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_pendidikan($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_pendidikan','id_pendidikan',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-pendidikan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_pendidikan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'tingkat_pendidikan' => $post['tingkat_pendidikan'],
                    'jurusan'=>$post['jurusan'],
                    'uraian'=>$post['uraian'],
                    'teknik_non_teknik'=>$post['teknik_non_teknik'],
                    'sekolah'=>$post['sekolah'],
                    'tempat_sekolah'=>$post['tempat_sekolah'],
                    'nomor_sttb'=>$post['nomor_sttb'],
                    'tanggal_sttb'=>$post['tanggal_sttb'],
                    'tanggal_lulus'=>$post['tanggal_lulus']
                );
                $this->Pegawai_m->update_data('data_pendidikan','id_pendidikan',$idr,$datainput);
                $pesan = 'Data riwayat pendidikan baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_pendidikan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_pelatihan($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_pelatihan','id_pelatihan',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-pelatihan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_pelatihan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'uraian' => $post['uraian'],
                    'lokasi'=>$post['lokasi'],
                    'tanggal_sertifikat'=>$post['tanggal_sertifikat'],
                    'jam_pelatihan'=>$post['jam_pelatihan'],
                    'negara'=>$post['negara']
                );
                $this->Pegawai_m->update_data('data_pelatihan','id_pelatihan',$idr,$datainput);
                $pesan = 'Data riwayat pelatihan baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_pelatihan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_penghargaan($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_penghargaan','id_penghargaan',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-penghargaan-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_penghargaan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'uraian' => $post['uraian'],
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk']
                );
                $this->Pegawai_m->update_data('data_penghargaan','id_penghargaan',$idr,$datainput);
                $pesan = 'Data riwayat penghargaan baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_penghargaan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_seminar($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_seminar','id_seminar',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-seminar-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_seminar($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'uraian' => $post['uraian'],
                    'lokasi'=>$post['lokasi'],
                    'tanggal'=>$post['tanggal']
                );
                $this->Pegawai_m->update_data('data_seminar','id_seminar',$idr,$datainput);
                $pesan = 'Data riwayat seminar baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_seminar/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_organisasi($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_organisasi','id_organisasi',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-organisasi-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_organisasi($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'uraian' => $post['uraian'],
                    'lokasi'=>$post['lokasi'],
                    'tanggal'=>$post['tanggal']
                );
                $this->Pegawai_m->update_data('data_organisasi','id_organisasi',$idr,$datainput);
                $pesan = 'Data riwayat gaji_pokok baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_organisasi/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_gaji_pokok($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_gaji_pokok','id_gaji_pokok',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-gaji_pokok-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_gaji_pokok($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'nomor_sk' => $post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'dasar_perubahan'=>$post['dasar_perubahan'],
                    'gaji_pokok'=>$post['gaji_pokok'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'masa_kerja'=>$post['masa_kerja'],
                    'pejabat_menetapkan'=>$post['pejabat_menetapkan']
                );
                $this->Pegawai_m->update_data('data_gaji_pokok','id_gaji_pokok',$idr,$datainput);
                $pesan = 'Data riwayat gaji pokok baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_gaji_pokok/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_hukuman($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_hukuman','id_hukuman',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-hukuman-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_hukuman($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'uraian' => $post['uraian'],
                    'nomor_sk'=>$post['nomor_sk'],
                    'tanggal_sk'=>$post['tanggal_sk'],
                    'tanggal_mulai'=>$post['tanggal_mulai'],
                    'tanggal_selesai'=>$post['tanggal_selesai'],
                    'masa_berlaku'=>$post['masa_berlaku'],
                    'pejabat_menetapkan'=>$post['pejabat_menetapkan']
                );
                $this->Pegawai_m->update_data('data_hukuman','id_hukuman',$idr,$datainput);
                $pesan = 'Data riwayat hukuman baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_hukuman/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_dp3($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_dp3','id_dp3',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-dp3-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
     public function update_dp3($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                   'tahun' => $post['tahun'],
                    'kesetiaan'=>$post['kesetiaan'],
                    'prestasi'=>$post['prestasi'],
                    'tanggung_jawab'=>$post['tanggung_jawab'],
                    'ketaatan'=>$post['ketaatan'],
                    'kejujuran'=>$post['kejujuran'],
                    'kerjasama'=>$post['kerjasama'],
                    'prakarsa'=>$post['prakarsa'],
                    'kepemimpinan'=>$post['kepemimpinan'],
                    'rata_rata'=>$post['rata_rata'],
                    'atasan'=>$post['atasan'],
                    'penilai'=>$post['penilai'],
                    'mengetahui'=>$post['mengetahui']
                );
                $this->Pegawai_m->update_data('data_dp3','id_dp3',$idr,$datainput);
                $pesan = 'Data riwayat dp3 baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_dp3/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/login'));
        }
    }
    public function edit_keluarga($id,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $result = $this->Pegawai_m->detail_pegawai($id);
                // echo "<pre>";print_r($result);echo "<pre/>";exit();
                $data['title'] = $result->nama_pegawai;
                $data['infopt'] = $this->Admin_m->info_pt(1);
                $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
                $data['users'] = $this->ion_auth->user()->row();
                $data['aside'] = 'nav/nav';
                $data['hasil'] = $result;
                $data['detail'] = $this->Pegawai_m->detail_data('data_keluarga','id_data_keluarga',$idr);
                $data['status'] = $this->Pegawai_m->select_data('master_status_pegawai');
                $data['bagian'] = 'admin/edit-keluarga-v';
                $data['page'] = 'admin/detail-pegawai-v';
                // pagging setting
                $this->load->view('admin/dashboard-v',$data);
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
     public function update_keluarga($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $post = $this->input->post();
                $datainput = array(
                    'nama_anggota_keluarga' => $post['nama_anggota_keluarga'],
                    'tanggal_lahir'=>$post['tanggal_lahir'],
                    'status_kawin'=>$post['status_kawin'],
                    'tanggal_nikah'=>$post['tanggal_nikah'],
                    'uraian'=>$post['uraian'],
                    'tanggal_cerai_meninggal'=>$post['tanggal_cerai_meninggal'],
                    'pekerjaan'=>$post['pekerjaan']
                );
                $this->Pegawai_m->update_data('data_keluarga','id_data_keluarga',$idr,$datainput);
                $pesan = 'Data riwayat keluarga baru berhasil di diubah';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_keluarga/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_dp3($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_dp3','id_dp3',$idr);
                $pesan = 'Data riwayat dp3 baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_dp3/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_keluarga($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_keluarga','id_data_keluarga',$idr);
                $pesan = 'Data riwayat keluarga baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_keluarga/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_rpangkat($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_riwayat_pangkat','id_riwayat_pangkat',$idr);
                $pesan = 'Data riwayat pangkat baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_rpangkat/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_rjabatan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_riwayat_jabatan','id_riwayat_jabatan',$idr);
                $pesan = 'Data riwayat jabatan baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_rjabatan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_pendidikan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_pendidikan','id_pendidikan',$idr);
                $pesan = 'Data riwayat pendidikan baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_pendidikan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_pelatihan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_pelatihan','id_pelatihan',$idr);
                $pesan = 'Data riwayat pelatihan baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_pelatihan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_penghargaan($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_penghargaan','id_penghargaan',$idr);
                $pesan = 'Data riwayat penghargaan baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_penghargaan/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_seminar($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_seminar','id_seminar',$idr);
                $pesan = 'Data riwayat seminar baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_seminar/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_organisasi($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_organisasi','id_organisasi',$idr);
                $pesan = 'Data riwayat organisasi baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_organisasi/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_gaji_pokok($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_gaji_pokok','id_gaji_pokok',$idr);
                $pesan = 'Data riwayat gaji baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_gaji_pokok/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
    public function delete_hukuman($idpegawai,$idr){
        if ($this->ion_auth->logged_in()) {
            $level = array('admin','members');
            if (!$this->ion_auth->in_group($level)) {
                $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/dashboard'));
            }else{
                $this->Pegawai_m->delete_data('data_hukuman','id_hukuman',$idr);
                $pesan = 'Data riwayat hukuman baru berhasil di diubah dihapus';
                $this->session->set_flashdata('message', $pesan );
                redirect(base_url('index.php/admin/pegawai/detail_hukuman/'.$idpegawai));
            }
        }else{
            $pesan = 'Login terlebih dahulu';
            $this->session->set_flashdata('message', $pesan );
            redirect(base_url('index.php/admin//login'));
        }
    }
}
?>