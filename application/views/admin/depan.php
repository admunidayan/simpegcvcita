<title><?php echo $title; ?></title>
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url($brand); ?>">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" style="margin-left: 7px"><H2>SISTEM INFORMASI KEPEGAWAIAN</H2></a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<form class="form-inline my-2 my-lg-0"><i class="material-icons">location_on</i>PASAR WAJO, KABUPATEN BUTON</form>
		<form class="form-inline my-2 my-lg-0">
			<a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url('index.php/login') ?>" style="margin-left: 50px">LOGIN</a>
		</form>
	</div>
</nav>
<div style="margin-top: 14px; padding: 30px">
<div class="container-fluid" style="background: #008080; color: white">
	<div class="row">
		<div class="col-sm" align="center">
			<h4>JUMLAH PEGAWAI KABUPATEN BUTON</h4>
		</div>
		<div class="col-sm" align="center">
			<h4>12.000</h4>
		</div>
	</div>
</div>
<div style="margin-top: 14px; background-color: white;padding: 30px">
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
							text: 'GRAFIK JUMLAH PEGAWAI PER-JABATAN'
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