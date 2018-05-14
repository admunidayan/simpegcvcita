<title><?php echo $title; ?></title>
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url($brand); ?>">
<div class="box">
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-light" style="background-color: #e3f2fd;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="col-md-6" style="margin-left: 7px" ><H2>SISTEM INFORMASI KEPEGAWAIAN</H2></div>
	<div class="col-md-4"><i class="material-icons">location_on</i>PASAR WAJO, KABUPATEN BUTON</div>
		<div class="col-md-3">
			<a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url('index.php/login') ?>" style="margin-left: 50px">LOGIN</a>
		</div>
	</div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<div style="margin-top: 14px; padding: 30px" class="p-3 mb-2 bg-secondary text-white">
	<div class="container-fluid" style="background: #9c88ff background-image: linear-gradient( 135deg, #FCCF31 10%, #F55555 100%);; color: white">
		<div class="row">
			<div class="col-md-6" align="center">
				<h4>JUMLAH PEGAWAI KABUPATEN BUTON</h4>
			</div>
			<div class="col-md-6" align="center">
				<h4><?php echo $this->Pegawai_m->jml() ?> Orang</h4>
			</div>
		</div>
	</div>
	<div style="margin-top: 14px; background-image: linear-gradient( 135deg, #FCCF31 10%, #F55555 100%);padding: 30px">
		<div class="container">
			<div class="row">
				<div class="col">
					<script src="<?php echo base_url('asset/grafik/code/highcharts.js') ?>"></script>
					<script src="<?php echo base_url('asset/grafik/code/modules/exporting.js') ?>"></script>
				</div>
				<div class="w-100"></div>
				<div class="col">
					<div id="container3" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
					<script type="text/javascript">

						Highcharts.chart('container3', {
							chart: {
								plotBackgroundColor: null,
								plotBorderWidth: null,
								plotShadow: false,
								type: 'pie'
							},
							title: {
								text: 'Grafik Pegawai Per-Golongan'
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %',
										style: {
											color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
										}
									}
								}
							},
							series: [{
								name: 'Jumlah',
								colorByPoint: true,
								data: [<?php foreach ($mgol as $datas): ?><?php echo '{name:'."'".$datas->golongan."'".',y:'.$this->Admin_m->jml_data('data_riwayat_golongan','id_golongan',$datas->id_golongan).'},'; ?><?php endforeach ?>],
							}]
						});
					</script>

				</div>
				<div class="col">
					<div id="container4"></div>
					<script type="text/javascript">
						Highcharts.chart('container4', {
							chart: {
								type: 'column'
							},
							title: {
								text: 'Grafik Pegawai Per-Eselon'
							},
							subtitle: {
								text: 'Source: Database Kabupaten Buton'
							},
							xAxis: {
								type: 'category',
								labels: {
									rotation: -45,
									style: {
										fontSize: '13px',
										fontFamily: 'Verdana, sans-serif'
									}
								}
							},
							yAxis: {
								min: 0,
								title: {
									text: 'Jumlah (Per-Eselon)'
								}
							},
							legend: {
								enabled: false
							},
							tooltip: {
								pointFormat: 'Jumlah : <b>{point.y:.1f} Orang</b>'
							},

							series: [{
								name: 'Population',
								data: [<?php foreach ($mjab as $datajab): ?><?php echo '['."'".$datajab->nama_eselon."'".','.$this->Admin_m->jml_data('data_riwayat_jabatan','id_eselon',$datajab->id_eselon).'],'; ?><?php endforeach ?>],
								dataLabels: {
									enabled: true,
									rotation: -90,
									color: '#FFFFFF',
									align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 1, // 10 pixels down from the top
            style: {
            	fontSize: '13px',
            	fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
</script>
</div>
</div>
</div>