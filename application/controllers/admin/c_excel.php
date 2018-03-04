 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('report_m');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
           $data = array( 'title' => 'Data Pegawai |',
                'buku' => $this->report_m->getAll());
 
           $this->load->view('lap_excel_pegawai_v',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array( 'title' => 'Laporan Pegawai',
                'buku' => $this->report_m->getAll());
 
           $this->load->view('detail_excel_pegawai',$data);
      }
 
 }
 
 /* End of file C_excel.php */
 /* Location: ./application/controllers/C_excel.php */
