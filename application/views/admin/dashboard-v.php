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
        <div class="row bts-ats">
          <div class="col-md-4">
            <img src="<?php echo base_url('asset/img/users/'.$users->profile) ?>" width="100%">
          </div>
          <div class="col-md-8 text-light">
            <?php echo $users->username; ?><br/>
            <span class="text-dark"><?php echo $users->email; ?></span>
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
                  Laporan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Unit Kerja Dan Satuan Kerja</a>
                  <a class="dropdown-item" href="#">Penempatan Kerja</a>
                  <a class="dropdown-item" href="#">Mengikuti Pelatihan</a>
                  <a class="dropdown-item" href="#">Status Pegawai dan Golongan</a>
                  <a class="dropdown-item" href="#">Struktural dan Fungsional</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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