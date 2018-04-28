<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">SISTEM INFORMASI KEPEGAWAIAN</a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<form class="form-inline my-2 my-lg-0">
			<a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url('index.php/login') ?>">LOGIN</a>
		</form>
	</div>
</nav>
<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="container">
		<div class="row">
			<div class="col">
				<script src="<?php echo base_url('asset/grafik/code/highcharts.js') ?>"></script>
				<script src="<?php echo base_url('asset/grafik/code/modules/exporting.js') ?>"></script>
				<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
				<script type="text/javascript">

					Highcharts.chart('container', {
						chart: {
							type: 'bar'
						},
						title: {
							text: 'Historic World Population by Region'
						},
						subtitle: {
							text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
						},
						xAxis: {
							categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
							title: {
								text: null
							}
						},
						yAxis: {
							min: 0,
							title: {
								text: 'Population (millions)',
								align: 'high'
							},
							labels: {
								overflow: 'justify'
							}
						},
						tooltip: {
							valueSuffix: ' millions'
						},
						plotOptions: {
							bar: {
								dataLabels: {
									enabled: true
								}
							}
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'top',
							x: -40,
							y: 80,
							floating: true,
							borderWidth: 1,
							backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
							shadow: true
						},
						credits: {
							enabled: false
						},
						series: [{
							name: 'Year 1800',
							data: [107, 31, 635, 203, 2]
						}, {
							name: 'Year 1900',
							data: [133, 156, 947, 408, 6]
						}, {
							name: 'Year 2012',
							data: [1052, 954, 4250, 740, 38]
						}]
					});
				</script>
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
							text: 'GRAFIK PEGAWAI PER-GOLONGAN'
						},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage:.1f} Orang</b>'
						},
						plotOptions: {
							pie: {
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: true,
									format: '<b>{point.name}</b>: {point.percentage:.1f} Orang',
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

						title: {
							text: 'Solar Employment Growth by Sector, 2010-2016'
						},

						subtitle: {
							text: 'Source: thesolarfoundation.com'
						},

						yAxis: {
							title: {
								text: 'Number of Employees'
							}
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'middle'
						},

						plotOptions: {
							series: {
								label: {
									connectorAllowed: false
								},
								pointStart: 2010
							}
						},

						series: [{
							name: 'Installation',
							data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
						}, {
							name: 'Manufacturing',
							data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
						}, {
							name: 'Sales & Distribution',
							data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
						}, {
							name: 'Project Development',
							data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
						}, {
							name: 'Other',
							data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
						}],

						responsive: {
							rules: [{
								condition: {
									maxWidth: 500
								},
								chartOptions: {
									legend: {
										layout: 'horizontal',
										align: 'center',
										verticalAlign: 'bottom'
									}
								}
							}]
						}

					});
				</script>
			</div>
		</div>