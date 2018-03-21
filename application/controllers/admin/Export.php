<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('admin/Admin_m');
    $this->load->library('Excel');
  }
  function dataexcel(){
    if ($this->ion_auth->logged_in()){
      $level = 'admin';  
      if (!$this->ion_auth->in_group($level)) {
       $pesan = 'Anda tidak memiliki Hak untuk Mengakses halaman ini';
       $this->session->set_flashdata('message', $pesan );
       redirect(base_url('index.php/admin/dashboard_c'));
     }else{
      $post = $this->input->post('');
      $data['title'] = 'List Pembayaran Calon Peserta';
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
      $sheet->setTitle ( "Daftar Dosen" );
      /*end - BLOCK SETUP SHEET*/

      /*start - BLOCK HEADER*/
      $sheet->setCellValue ( "A1", "No" );
      $sheet->setCellValue ( "B1", "Nama Satuan Kerja" );
      $sheet->setCellValue ( "C1", "Parent Unit" );
      /*end - BLOCK HEADER*/

      /* start - BLOCK MEMASUKAN DATABASE*/
      $nomor = 1;
      $nocel = 2;
      $hasil = $this->Admin_m->select_data('master_satuan_kerja');
                // echo "<pre>";print_r($hasil);echo "</pre>";exit();
      foreach ($hasil as $data) {
        $sheet->setCellValue ( "A".$nocel, $nomor );
        $sheet->setCellValue ( "B".$nocel, strtoupper($data->nama_satuan_kerja));
        $sheet->setCellValue ( "C".$nocel, strtoupper($data->parent_unit) );
        $nomor++;
        $nocel++;
      }
      /* end - BLOCK MEMASUKAN DATABASE*/

      /* start - BLOCK MEMBUAT LINK DOWNLOAD*/
      header ( 'Content-Type: application/vnd.ms-excel' );
  //namanya adalah keluarga.xls
      header ( 'Content-Disposition: attachment;filename="laporan_satuan_kerja.xls"' ); 
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
function exceldaftar(){
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
      $sheet->setTitle ( "Daftar Dosen" );
      /*end - BLOCK SETUP SHEET*/

      /*start - BLOCK HEADER*/
      $sheet->setCellValue ( "A1", "No" );
      $sheet->setCellValue ( "B1", "Noreg" );
      $sheet->setCellValue ( "C1", "Nama" );
      $sheet->setCellValue ( "D1", "Pilihan 1" );
      $sheet->setCellValue ( "E1", "Pilihan 2" );
      $sheet->setCellValue ( "F1", "Pilihan 3" );
      $sheet->setCellValue ( "G1", "Kelompok" );
      $sheet->setCellValue ( "H1", "Jurusan" );
      $sheet->setCellValue ( "I1", "Email" );
      $sheet->setCellValue ( "J1", "No Hp" );
      $sheet->setCellValue ( "K1", "L/P" );
      $sheet->setCellValue ( "L1", "Agama" );
      $sheet->setCellValue ( "M1", "Tgl Lhr" );
      $sheet->setCellValue ( "N1", "Tmp Lhr" );
      $sheet->setCellValue ( "O1", "Asal Sekolah" );
      $sheet->setCellValue ( "P1", "NEM" );
      /*end - BLOCK HEADER*/

      /* start - BLOCK MEMASUKAN DATABASE*/
      $nomor = 1;
      $nocel = 2;
      $hasil = $data['hasil'] = $this->Peserta_m->databayar();
                // echo "<pre>";print_r($hasil);echo "</pre>";exit();
      foreach ($hasil as $data) {
        if ($this->Peserta_m->detagama($data->id_agama) == TRUE) {
           $agama = $this->Peserta_m->detagama($data->id_agama)->nm_agama;
        }else{
          $agama = 'Tidak Diisi';
        }
        $sheet->setCellValue ( "A".$nocel, $nomor );
        $sheet->setCellValue ( "B".$nocel, $data->noreg );
        $sheet->setCellValue ( "C".$nocel, strtoupper($data->nama_mhs) );
        $totalh = 0;
        $abjad = 1;
        foreach ($this->Peserta_m->priopil($data->id_mhs) as $datas) {
          $totalh = $datas->grup + (int)@$totalh;
          if ($abjad == 1) {
          	$abj = 'D';
          }elseif ($abjad == 2) {
          	$abj = 'E';
          }else{
          	$abj = 'F';
          }
          $sheet->setCellValue ( $abj.$nocel, strtoupper($datas->nama_prodi) );
          $abjad++;
        }
        // echo "<pre>";print_r($this->Peserta_m->priopil($data->id_mhs));echo "<pre/>";exit();
        if ($totalh == 3 ) {
          $sheet->setCellValue ( "G".$nocel, 'IPA ');
        }elseif ($totalh == 6) {
          $sheet->setCellValue ( "G".$nocel, 'IPS ');
        }else{
          $sheet->setCellValue ( "G".$nocel, 'IPC ');
        }
        $sheet->setCellValue ( "H".$nocel, $data->jurse);
        $sheet->setCellValue ( "I".$nocel, $data->email_mhs);
        $sheet->setCellValue ( "J".$nocel, $data->no_hp_mhs);
        $sheet->setCellValue ( "K".$nocel, strtoupper($data->gender_mhs));
        $sheet->setCellValue ( "L".$nocel, strtoupper($agama));
        $sheet->setCellValue ( "M".$nocel, $data->tgl_lhr_mhs);
        $sheet->setCellValue ( "N".$nocel, strtoupper($data->tmpt_lahir));
        $sheet->setCellValue ( "O".$nocel, strtoupper($data->asal_sekolah));
        $sheet->setCellValue ( "P".$nocel, $data->nem);
        $nomor++;
        $nocel++;
      }
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
function exceldaftargel2(){
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
      $sheet->setTitle ( "Daftar Dosen" );
      /*end - BLOCK SETUP SHEET*/

      /*start - BLOCK HEADER*/
      $sheet->setCellValue ( "A1", "No" );
      $sheet->setCellValue ( "B1", "Noreg" );
      $sheet->setCellValue ( "C1", "Nama" );
      $sheet->setCellValue ( "D1", "Pilihan 1" );
      $sheet->setCellValue ( "E1", "Pilihan 2" );
      $sheet->setCellValue ( "F1", "Pilihan 3" );
      $sheet->setCellValue ( "G1", "Kelompok" );
      $sheet->setCellValue ( "H1", "Jurusan" );
      $sheet->setCellValue ( "I1", "Email" );
      $sheet->setCellValue ( "J1", "No Hp" );
      $sheet->setCellValue ( "K1", "L/P" );
      $sheet->setCellValue ( "L1", "Agama" );
      $sheet->setCellValue ( "M1", "Tgl Lhr" );
      $sheet->setCellValue ( "N1", "Tmp Lhr" );
      $sheet->setCellValue ( "O1", "Asal Sekolah" );
      $sheet->setCellValue ( "P1", "NEM" );
      /*end - BLOCK HEADER*/

      /* start - BLOCK MEMASUKAN DATABASE*/
      $nomor = 1;
      $nocel = 2;
      $hasil = $data['hasil'] = $this->Peserta_m->databayargel2();
                // echo "<pre>";print_r($hasil);echo "</pre>";exit();
      foreach ($hasil as $data) {
        
        // echo "<pre>";print_r($this->Peserta_m->detagama($data->id_agama));echo "<pre/>";exit();
       
        if ($this->Peserta_m->detagama($data->id_agama) == TRUE) {
           $agama = $this->Peserta_m->detagama($data->id_agama)->nm_agama;
        }else{
          $agama = 'Tidak Diisi';
        }
        $sheet->setCellValue ( "A".$nocel, $nomor );
        $sheet->setCellValue ( "B".$nocel, $data->noreg );
        $sheet->setCellValue ( "C".$nocel, strtoupper($data->nama_mhs) );
        $abjad = 1;
        foreach ($this->Peserta_m->priopilgel2($data->id_mhs) as $datas) {
          if ($abjad == 1) {
          	$abj = 'D';
          }elseif ($abjad == 2) {
          	$abj = 'E';
          }else{
          	$abj = 'F';
          }
          $sheet->setCellValue ( $abj.$nocel, strtoupper($datas->nama_prodi) );
          $abjad++;
        }
        // echo "<pre>";print_r($this->Peserta_m->priopil($data->id_mhs));echo "<pre/>";exit();
        if ($data->kelompok == 1 ) {
          $sheet->setCellValue ( "G".$nocel, 'IPA ');
        }elseif ($data->kelompok == 2) {
          $sheet->setCellValue ( "G".$nocel, 'IPS ');
        }else{
          $sheet->setCellValue ( "G".$nocel, 'IPC ');
        }
        $sheet->setCellValue ( "H".$nocel, $data->jurse);
        $sheet->setCellValue ( "I".$nocel, $data->email_mhs);
        $sheet->setCellValue ( "J".$nocel, $data->no_hp_mhs);
        $sheet->setCellValue ( "K".$nocel, strtoupper($data->gender_mhs));
        $sheet->setCellValue ( "L".$nocel, strtoupper($agama));
        $sheet->setCellValue ( "M".$nocel, $data->tgl_lhr_mhs);
        $sheet->setCellValue ( "N".$nocel, strtoupper($data->tmpt_lahir));
        $sheet->setCellValue ( "O".$nocel, strtoupper($data->asal_sekolah));
        $sheet->setCellValue ( "P".$nocel, $data->nem);
        $nomor++;
        $nocel++;
      }
      /* end - BLOCK MEMASUKAN DATABASE*/

      /* start - BLOCK MEMBUAT LINK DOWNLOAD*/
      header ( 'Content-Type: application/vnd.ms-excel' );
  //namanya adalah keluarga.xls
      header ( 'Content-Disposition: attachment;filename="daftar lengkap calon peserta gelombang ke 2.xls"' ); 
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
function exceldaftargel3(){
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
      $sheet->setTitle ( "Daftar Dosen" );
      /*end - BLOCK SETUP SHEET*/

      /*start - BLOCK HEADER*/
      $sheet->setCellValue ( "A1", "No" );
      $sheet->setCellValue ( "B1", "Noreg" );
      $sheet->setCellValue ( "C1", "Nama" );
      $sheet->setCellValue ( "D1", "Pilihan 1" );
      $sheet->setCellValue ( "E1", "Pilihan 2" );
      $sheet->setCellValue ( "F1", "Pilihan 3" );
      $sheet->setCellValue ( "G1", "Kelompok" );
      $sheet->setCellValue ( "H1", "Jurusan" );
      $sheet->setCellValue ( "I1", "Email" );
      $sheet->setCellValue ( "J1", "No Hp" );
      $sheet->setCellValue ( "K1", "L/P" );
      $sheet->setCellValue ( "L1", "Agama" );
      $sheet->setCellValue ( "M1", "Tgl Lhr" );
      $sheet->setCellValue ( "N1", "Tmp Lhr" );
      $sheet->setCellValue ( "O1", "Asal Sekolah" );
      $sheet->setCellValue ( "P1", "NEM" );
      /*end - BLOCK HEADER*/

      /* start - BLOCK MEMASUKAN DATABASE*/
      $nomor = 1;
      $nocel = 2;
      $hasil = $data['hasil'] = $this->Peserta_m->databayargel3();
                // echo "<pre>";print_r($hasil);echo "</pre>";exit();
      foreach ($hasil as $data) {
        
        // echo "<pre>";print_r($this->Peserta_m->detagama($data->id_agama));echo "<pre/>";exit();
       
        if ($this->Peserta_m->detagama($data->id_agama) == TRUE) {
           $agama = $this->Peserta_m->detagama($data->id_agama)->nm_agama;
        }else{
          $agama = 'Tidak Diisi';
        }
        $sheet->setCellValue ( "A".$nocel, $nomor );
        $sheet->setCellValue ( "B".$nocel, $data->noreg );
        $sheet->setCellValue ( "C".$nocel, strtoupper($data->nama_mhs) );
        $abjad = 1;
        foreach ($this->Peserta_m->priopilgel2($data->id_mhs) as $datas) {
          if ($abjad == 1) {
            $abj = 'D';
          }elseif ($abjad == 2) {
            $abj = 'E';
          }else{
            $abj = 'F';
          }
          $sheet->setCellValue ( $abj.$nocel, strtoupper($datas->nama_prodi) );
          $abjad++;
        }
        // echo "<pre>";print_r($this->Peserta_m->priopil($data->id_mhs));echo "<pre/>";exit();
        if ($data->kelompok == 1 ) {
          $sheet->setCellValue ( "G".$nocel, 'IPA ');
        }elseif ($data->kelompok == 2) {
          $sheet->setCellValue ( "G".$nocel, 'IPS ');
        }else{
          $sheet->setCellValue ( "G".$nocel, 'IPC ');
        }
        $sheet->setCellValue ( "H".$nocel, $data->jurse);
        $sheet->setCellValue ( "I".$nocel, $data->email_mhs);
        $sheet->setCellValue ( "J".$nocel, $data->no_hp_mhs);
        $sheet->setCellValue ( "K".$nocel, strtoupper($data->gender_mhs));
        $sheet->setCellValue ( "L".$nocel, strtoupper($agama));
        $sheet->setCellValue ( "M".$nocel, $data->tgl_lhr_mhs);
        $sheet->setCellValue ( "N".$nocel, strtoupper($data->tmpt_lahir));
        $sheet->setCellValue ( "O".$nocel, strtoupper($data->asal_sekolah));
        $sheet->setCellValue ( "P".$nocel, $data->nem);
        $nomor++;
        $nocel++;
      }
      /* end - BLOCK MEMASUKAN DATABASE*/

      /* start - BLOCK MEMBUAT LINK DOWNLOAD*/
      header ( 'Content-Type: application/vnd.ms-excel' );
  //namanya adalah keluarga.xls
      header ( 'Content-Disposition: attachment;filename="daftar lengkap calon peserta gelombang ke 2.xls"' ); 
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
      $hasil = $data['hasil'] = $this->Peserta_m->alldaftar();
                // echo "<pre>";print_r($hasil);echo "</pre>";exit();
      foreach ($hasil as $data) {
        $sheet->setCellValue ( "A".$nocel, $nomor );
        $sheet->setCellValue ( "B".$nocel, $data->noreg );
        $sheet->setCellValue ( "C".$nocel, strtoupper($data->nama_mhs) );
        if ($data->pembayaran == 1) {
          $sheet->setCellValue ( "D".$nocel, 'Sudah Membayar' );
        }else{
          $sheet->setCellValue ( "D".$nocel, 'Belum Membayar' );
        }
        $nomor++;
        $nocel++;
      }
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