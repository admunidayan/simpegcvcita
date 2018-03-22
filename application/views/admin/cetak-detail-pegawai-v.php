<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<style type="text/css">
	.colpading{padding: 0px 4px}
	.text-center{text-align: center;}
	.bdkanan{border-right: 1px solid}
	.bdkiri{border-left: 1px solid}
	.bdbawah{border-bottom: 1px solid}
	.bdatas{border-top: 1px solid}
	.penuh{width: 100%}
</style>
</head>
<body onload="window:print()">
	<table class="penuh">
		<tr>
			<td class="colpading text-center bdkiri bdkanan bdatas bdbawah">
				<img src="<?php echo base_url('asset/img/lembaga/'.$infopt->logo_pt) ?>" width="100px">
			</td>
			<td class="colpading bdkanan bdatas bdbawah text-center">
				<h3 style="margin-bottom: 0px"><?php echo $unit_org->lokasi_kerja; ?></h3><br/>
				<span><?php echo $unit_org->alamat_loker; ?></span>
			</td>
		</tr>
	</table>
	<table class="penuh" style="margin-top: 14px;">
		<tr>
			<td colspan="3" class="bdbawah bdatas bdkiri bdkanan"><b>Data Diri</b></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Nama Lengkap</td>
			<td class="bdbawah bdkanan"><?php echo $hasil->gelar_dpn; ?> <?php echo $hasil->nama_pegawai; ?> <?php echo $hasil->gelar_belakang; ?></td>
			<td class="bdbawah bdkanan text-center" rowspan="4">
				<img src="<?php echo base_url('asset/img/users/'.@$hasil->foto) ?>" width="100px">
			</td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">NIP Lama</td>
			<td class="bdbawah bdkanan"><?php echo $hasil->nip_lama; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">NIP Baru</td>
			<td class="bdbawah bdkanan"><?php echo $hasil->nip; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">No Kartu Pegawai</td>
			<td class="bdbawah bdkanan"><?php echo $hasil->no_kartu_pegawai; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Agama</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->agama; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Tempat Tanggal Lahir</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->tempat_lahir; ?> / <?php echo $hasil->tanggal_lahir; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Status Pegawai</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->status_pegawai; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Usia</td>
			<td class="bdbawah bdkanan colspan2" colspan="2"><?php echo $hasil->usia; ?></td>
		</tr>
		
		<tr>
			<td class="bdbawah bdkiri bdkanan">Tgl Pengangkatan</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->tanggal_pengangkatan_cpns; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Alamat</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->alamat; ?></td>
		</tr>
	</table>
</td>
</tr>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="2" class="bdbawah bdatas bdkiri bdkanan"><b>Data Keluarga</b></td>
	</tr>
	<?php foreach ($keluarga as $data): ?>
		<tr>
			<td class="bdbawah bdkiri bdkanan"><?php echo $data->status_keluarga; ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->nama_anggota_keluarga ?></td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>