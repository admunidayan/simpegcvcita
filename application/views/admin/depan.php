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
	<div class="col">
		<div id="container2" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
		<script type="text/javascript">
// Data gathered from http://populationpyramid.net/germany/2015/

// Age categories
var categories = [
'0-4', '5-9', '10-14', '15-19',
'20-24', '25-29', '30-34', '35-39', '40-44',
'45-49', '50-54', '55-59', '60-64', '65-69',
'70-74', '75-79', '80-84', '85-89', '90-94',
'95-99', '100 + '
];

Highcharts.chart('container2', {
	chart: {
		type: 'bar'
	},
	title: {
		text: 'Population pyramid for Germany, 2015'
	},
	subtitle: {
		text: 'Source: <a href="http://populationpyramid.net/germany/2015/">Population Pyramids of the World from 1950 to 2100</a>'
	},
	xAxis: [{
		categories: categories,
		reversed: false,
		labels: {
			step: 1
		}
    }, { // mirror axis on right side
    	opposite: true,
    	reversed: false,
    	categories: categories,
    	linkedTo: 0,
    	labels: {
    		step: 1
    	}
    }],
    yAxis: {
    	title: {
    		text: null
    	},
    	labels: {
    		formatter: function () {
    			return Math.abs(this.value) + '%';
    		}
    	}
    },

    plotOptions: {
    	series: {
    		stacking: 'normal'
    	}
    },

    tooltip: {
    	formatter: function () {
    		return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
    		'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
    	}
    },

    series: [{
    	name: 'Male',
    	data: [-2.2, -2.2, -2.3, -2.5, -2.7, -3.1, -3.2,
    	-3.0, -3.2, -4.3, -4.4, -3.6, -3.1, -2.4,
    	-2.5, -2.3, -1.2, -0.6, -0.2, -0.0, -0.0]
    }, {
    	name: 'Female',
    	data: [2.1, 2.0, 2.2, 2.4, 2.6, 3.0, 3.1, 2.9,
    	3.1, 4.1, 4.3, 3.6, 3.4, 2.6, 2.9, 2.9,
    	1.8, 1.2, 0.6, 0.1, 0.0]
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
				text: 'Browser market shares January, 2015 to May, 2015'
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
				name: 'Brands',
				colorByPoint: true,
				data: [{
					name: 'IE',
					y: 56.33
				}, {
					name: 'Chrome',
					y: 24.03,
					sliced: true,
					selected: true
				}, {
					name: 'Firefox',
					y: 10.38
				}, {
					name: 'Safari',
					y: 4.77
				}, {
					name: 'Opera',
					y: 0.91
				}, {
					name: 'Other',
					y: 0.2
				}]
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
