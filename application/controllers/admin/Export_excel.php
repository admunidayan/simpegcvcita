<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_excel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Model_data');
		$this->load->library('Excel');
	}
	public function index(){
		if ($this->ion_auth->logged_in()) {
			$level = array('admin','members');
			if (!$this->ion_auth->in_group($level)) {
				$pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
				$this->session->set_flashdata('message', $pesan );
				redirect(base_url('index.php/admin/dashboard'));
			}else{
				$d['data'] = $this->Model_data->getData();
				$this->load->view('admin/layout', $d);
			}
		}else{
			$pesan = 'Login terlebih dahulu';
			$this->session->set_flashdata('message', $pesan );
			redirect(base_url('index.php/login'));
		}
	}
}
?>