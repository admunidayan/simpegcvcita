<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url($brand); ?>" type="image/ico" />

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url() ?>asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url() ?>asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url() ?>asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url() ?>asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>asset/build/css/custom.min.css" rel="stylesheet">
    <!-- Custom Style Pribadi -->
    <!-- <link href="<?php echo base_url() ?>asset/css/custom.css" rel="stylesheet"> -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img src="<?php echo base_url($brand) ?>" width="50px"> <span><?php echo $infopt->alias_pt; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php if ($this->ion_auth->is_admin()): ?>
                  <img src="<?php echo base_url('asset/img/users/'.$users->profile) ?>" alt="<?php echo $users->profile;?>" class="img-circle profile_img">
                  <?php else: ?>
                    <img src="<?php echo base_url('asset/img/pegawai/'.$this->Admin_m->detail_data_order('data_pegawai','id_pegawai',$users->id_pegawai)->foto) ?>" alt="<?php echo $users->profile;?>" class="img-circle profile_img">
                <?php endif ?>
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $users->first_name; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('index.php/admin/dashboard/') ?>"><i class="fa fa-home"></i> Dashboard </a></li>

                  <?php if ($this->ion_auth->is_admin()): ?>
                    <li><a href="<?php echo base_url('index.php/admin/pegawai/') ?>"><i class="fa fa-child"></i> Pegawai </a></li>
                    <li><a href="<?php echo base_url('index.php/admin/honorer/') ?>"><i class="fa fa-desktop"></i> Honorer </a></li>
                    <li><a><i class="fa fa-table"></i> Master <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url('index.php/admin/master/') ?>">Status Pegawai</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/satuan_kerja') ?>">Satuan Kerja</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/ppk') ?>">PPK</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/golongan') ?>">Golongan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/eselon') ?>">Eselon</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/pelatihan') ?>">Pelatihan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/jabatan') ?>">Jabatan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/status_jabatan') ?>">Jenis KP</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/penghargaan') ?>">Penghargaan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/hukuman') ?>">Hukuman</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/lokasi_pelatihan') ?>">Lokasi Pelatihan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/master/lokasi_kerja') ?>">Lokasi Kerja</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?php echo base_url('index.php/admin/export/data_pegawai') ?>">Daftar Listing Nominatif PNS</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/Export_excel') ?>">Pegawai</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_keluarga') ?>">Data Keluarga</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_golongan') ?>">Riwayat Golongan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_jabatan') ?>">Riwayat Jabatan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_pendidikan') ?>">Riwayat Pendidikan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_diklat') ?>">Riwayat Diklat/Kursus</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_penghargaan') ?>">Riwayat Penghargaan</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_seminar') ?>">Riwayat Seminar</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_unitorg') ?>">Riwayat Unit Organisasi</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_disiplin') ?>">Riwayat Disiplin</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export_excel/export_by_skp') ?>">Riwayat SKP</a></li>
                        <li><a href="<?php echo base_url('index.php/admin/export/dataexcel_honorer') ?>">Honorer</a></li>
                      </ul>
                    </li>
                    <?php else: ?>
                      <li><a href="<?php echo base_url('index.php/admin/pegawai/detail/'.$users->id_pegawai) ?>"><i class="fa fa-user"></i> Profil Pegawai</a></li>
                      <li><a href="<?php echo base_url('index.php/admin/users/edit/'.$users->id) ?>"><i class="fa fa-user"></i> Edit Akun User</a></li>
                  <?php endif ?>
                  <?php if ($this->ion_auth->in_group('skpd')): ?>
                    <li><a href="<?php echo base_url('index.php/admin/pegawai/') ?>"><i class="fa fa-user"></i> Daftar Pegawai</a></li>
                  <?php endif ?>
                </ul>
              </div>
              <?php if ($this->ion_auth->is_admin()): ?>
                <div class="menu_section">
                  <h3>Setting</h3>
                  <ul class="nav side-menu">
                    <li><a href="<?php echo base_url('index.php/admin/setting/') ?>"><i class="fa fa-bug"></i> Instansi</a></li>
                    <li><a href="<?php echo base_url('index.php/admin/users/') ?>"><i class="fa fa-windows"></i> Users </a></li>                 
                  </ul>
                </div>
              <?php endif ?>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('index.php/login/logout/') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php if ($this->ion_auth->is_admin()): ?>
                      <img src="<?php echo base_url('asset/img/users/'.$users->profile) ?>"><?php echo $users->first_name; ?>
                      <?php else: ?>
                        <img src="<?php echo base_url('asset/img/pegawai/'.$this->Admin_m->detail_data_order('data_pegawai','id_pegawai',$users->id_pegawai)->foto) ?>"><?php echo $users->first_name; ?>
                    <?php endif ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url('index.php/login/logout/') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php $this->load->view($page) ?>
          <!-- top tiles -->
          <!-- /top tiles -->
          <br />         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <?php  echo date('Y'); ?> © BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN DAERAH KABUPATEN BUTON</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>asset/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ?>asset/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ?>asset/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>asset/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>asset/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ?>asset/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ?>asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ?>asset/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>asset/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>asset/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>asset/build/js/custom.min.js"></script>
  
  </body>
</html>
