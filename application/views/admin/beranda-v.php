<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Highcharts Example</title>
    <style type="text/css">

</style>
</head>
<body>
    <script src="<?php echo base_url('asset/grafik/code/highcharts.js') ?>"></script>
    <script src="<?php echo base_url('asset/grafik/code/modules/exporting.js') ?>"></script>

    <div id="container" style="min-width: 600px; height: 600px; margin: 0 auto"></div>
    <script type="text/javascript">

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'GRAFIK JUMLAH PEGAWAI PER-SKPD'
            },
            subtitle: {
                text: 'Source: Database Kabupaten Buton'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -90,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (Orang)'
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
                data: [<?php foreach ($fmgol as $datas): ?><?php echo '['."'".$datas->nama_satuan_kerja."'".','.$this->Admin_m->jumlah_skpd($datas->id_satuan_kerja).'],'; ?><?php endforeach ?>],
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
</body>
</html>
