<div style="margin-top: 14px; padding: 30px">
	<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>asset/js/jquery.js"></script>
<script src="<?php echo base_url();?>asset/js/highcharts.js"></script>
<!-- end load library -->

<?php
/* Mengambil query report*/
foreach($chart as $result){
        // echo "<pre>";print_r($result->tahun);echo "<pre/>";exit();
        $tahun[] = $result->nm_jk; //ambil bulan
        $value[] = (float) $this->Admin_m->jumlah_data($result->nm_jk);
         //ambil nilai
    }
    /* end mengambil query*/
    
    ?>
    
    <!-- Load chart dengan menggunakan ID -->
    <div id="report"></div>
    <!-- END load chart -->
    
    <!-- Script untuk memanggil library Highcharts -->
    <script type="text/javascript">
        $(function () {
            $('#report').highcharts({
                chart: {
                    type: 'column',
                    margin: 75,
                    options3d: {
                        enabled: false,
                        alpha: 10,
                        beta: 25,
                        depth: 70
                    }
                },
                title: {
                    text: 'Grafik',
                    style: {
                        fontSize: '18px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                },
                subtitle: {
                 text: 'Pegawai Berdasarkan Jenis Kelamin',
                 style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories:  <?php echo json_encode($tahun);?>
            },
            exporting: { 
                enabled: false 
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                },
            },
            tooltip: {
               formatter: function() {
                   return 'Jumlah untuk <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,0) + '</b>  orang pada '+ this.series.name;
               }
           },
           series: [{
            name: 'Data Pegawai',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                   return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
        });
    </script>
</div>