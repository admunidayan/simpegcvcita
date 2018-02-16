<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
  <!-- lgo -->
  <link rel="shortcut icon" href="<?php echo base_url($brand); ?>">
  <!-- css bootsrap 4.0 beta -->
  <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
  <!-- google material icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <!-- css font css pribadi -->
  <link rel="stylesheet" href="<?php echo base_url('asset/css/custom.css'); ?>">
  <!-- jquery terlebih dahulu -->
  <script src="<?php echo base_url('asset/js/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
  <!-- js bootstrap v.4 butuh pooper.js -->
  <script src="<?php echo base_url('asset/js/popper.min.js'); ?>" type="text/javascript"></script>
  <!-- js bootstrap v.4 -->
  <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2" style="background-color: #1da9f4">
        <h2 class="text-light text-center" style="margin-top: 20px "><?php echo $infopt->alias_pt; ?></h2>
        <div class="media">
          <img class="rounded-circle align-self-center mr-3" src="<?php echo base_url('asset/img/users/'.$users->profile) ?>" alt="<?php echo $users->profile;?>" width="50px">
          <div class="media-body">
            <h5 class="mt-0 text-light"><?php echo $users->username; ?></h5>
            <span class="text-dark text-sm"><?php echo $users->email; ?></span>
          </div>
        </div>
        <?php $this->view($aside); ?>
      </div>
      <div class="col-md-10">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">library_books</i> Master
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"><i class="material-icons">label_outline</i>Status Pegawai</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">assignment_ind</i>Unit Kerja</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">bookmark_border</i>Satuan Kerja</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">remove_red_eye</i>PPK</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">compare_arrows</i>Golongan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">autorenew</i>Eselon</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">folder_shared</i>Pelatihan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">work</i>Jabatan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">playlist_add_check</i>Status Jabatan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">stars</i>Penghargaan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">select_all</i>Hukuman</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">location_on</i>Lokasi Pelatihan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">location_searching</i>Lokasi Kerja</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">library_books</i> Laporan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"><i class="material-icons">bookmark_border</i>Unit Kerja Dan Satuan Kerja</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">location_on</i>Penempatan Kerja</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">location_searching</i>Mengikuti Pelatihan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">label_outline</i>Status Pegawai dan Golongan</a>
                  <a class="dropdown-item" href="#"><i class="material-icons">compare_arrows</i>Struktural dan Fungsional</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="Search" placeholder="Pencarian Data" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </nav>
      <?php $this->view($page); ?>
    </div>
  </div>
</div>
</body>
</html>