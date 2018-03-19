<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_excel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Excel');
		$this->load->model('admin/Model_data');
	}
	public function index($offset=0){
		if ($this->ion_auth->logged_in()) {
			$level = array('admin','members');
			if (!$this->ion_auth->in_group($level)) {
				$pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
				$this->session->set_flashdata('message', $pesan );
				redirect(base_url('index.php/admin/dashboard'));
			}else{
				$this->load->model('admin/Model_data');
				$d['data'] = $this->Model_data->getData();
				$this->load->view('admin/layout', $d);
			}
		}else{
			$pesan = 'Login terlebih dahulu';
			$this->session->set_flashdata('message', $pesan );
			redirect(base_url('index.php/login'));
		}
	}
	function excelalldaftar(){
		if ($this->ion_auth->logged_in()){
			$level = 'admin';  
			if (!$this->ion_auth->in_group($level)) {
				$pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
				$this->session->set_flashdata('message', $pesan );
				redirect(base_url('index.php/admin/dashboard_c'));
			}else{
				$post = $this->input->post('');
				$data['title'] = 'Daftar Calon Peserta Mahasiswa Baru';
      // $data['page'] = 'admin/export-v';
      // $data['nav'] = 'nav/nav-admin';
      // $data['dtadm'] = $this->ion_auth->user()->row();
                // setting web server
				$file = new PHPExcel ();
				$file->getProperties ()->setCreator ( "Goblooge" );
				$file->getProperties ()->setLastModifiedBy ( "www.pmb.unidayan.ac.id" );
				$file->getProperties ()->setTitle ( "List Calon Peserta sudah membayar" );
				$file->getProperties ()->setSubject ( "Daftar Calon Peserta" );
				$file->getProperties ()->setDescription ( "Daftar Calon Peserta" );
				$file->getProperties ()->setKeywords ( "Daftar Calon Peserta" );
				$file->getProperties ()->setCategory ( "Calon Peserta" );
				/*end - BLOCK PROPERTIES FILE EXCEL*/

				/*start - BLOCK SETUP SHEET*/
				$file->createSheet ( NULL,0);
				$file->setActiveSheetIndex ( 0 );
				$sheet = $file->getActiveSheet ( 0 );
  //memberikan title pada sheet
				$sheet->setTitle ( "Daftar Peserta Mahasiswa Baru" );
				/*end - BLOCK SETUP SHEET*/

				/*start - BLOCK HEADER*/
				$sheet->setCellValue ( "A1", "No" );
				$sheet->setCellValue ( "B1", "Noreg" );
				$sheet->setCellValue ( "C1", "Nama" );
				$sheet->setCellValue ( "D1", "Status" );
				/*end - BLOCK HEADER*/

				/* start - BLOCK MEMASUKAN DATABASE*/
				$nomor = 1;
				$nocel = 2;
				// $hasil = $data['hasil'] = $this->Peserta_m->alldaftar();
    //             // echo "<pre>";print_r($hasil);echo "</pre>";exit();
				// foreach ($hasil as $data) {
				// 	$sheet->setCellValue ( "A".$nocel, $nomor );
				// 	$sheet->setCellValue ( "B".$nocel, $data->noreg );
				// 	$sheet->setCellValue ( "C".$nocel, strtoupper($data->nama_mhs) );
				// 	if ($data->pembayaran == 1) {
				// 		$sheet->setCellValue ( "D".$nocel, 'Sudah Membayar' );
				// 	}else{
				// 		$sheet->setCellValue ( "D".$nocel, 'Belum Membayar' );
				// 	}
				// 	$nomor++;
				// 	$nocel++;
				// }
				/* end - BLOCK MEMASUKAN DATABASE*/

				/* start - BLOCK MEMBUAT LINK DOWNLOAD*/
				header ( 'Content-Type: application/vnd.ms-excel' );
  //namanya adalah keluarga.xls
				header ( 'Content-Disposition: attachment;filename="daftar lengkap calon peserta.xls"' ); 
				header ( 'Cache-Control: max-age=0' );
				$writer = PHPExcel_IOFactory::createWriter ( $file, 'Excel5' );
				$writer->save ( 'php://output' );
				/* start - BLOCK MEMBUAT LINK DOWNLOAD*/
                // pagging setting
			}
		}else{
			$pesan = 'Login terlebih dahulu';
			$this->session->set_flashdata('message', $pesan );
			redirect(base_url('index.php/login'));
		}
	}
}
?>