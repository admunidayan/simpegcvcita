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
			<td class="bdbawah bdkiri bdkanan">Alamat</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->alamat; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Tgl Pengangkatan</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->tanggal_pengangkatan_cpns; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">No NPWP</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->no_npwp; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Status Pegawai</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->status_pegawai_pangkat; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">No dan Tgl SK Pangkat</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->nomor_sk_pangkat; ?> - <?php echo $hasil->tanggal_sk_pangkat; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">Lokasi Kerja</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->lokasi_kerja; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">No dan Tgl SK Jabatan</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->nomor_sk_jabatan; ?> - <?php echo $hasil->tanggal_sk_jabatan; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">TMT Eselon</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->tmt_eselon; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">TMT PNS</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->tmt_pns; ?></td>
		</tr>
		<tr>
			<td class="bdbawah bdkiri bdkanan">TMT CPNS</td>
			<td class="bdbawah bdkanan" colspan="2"><?php echo $hasil->tmt_cpns; ?></td>
		</tr>
		
	</table>
</td>
</tr>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="6" class="bdbawah bdatas bdkiri bdkanan"><b>Data Keluarga</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Nama Anggota Keluarga</td>
		<td class="bdbawah bdkiri bdkanan">Tanggal Lahir</td>
		<td class="bdbawah bdkiri bdkanan">Status Dalam Keluarga</td>
		<td class="bdbawah bdkiri bdkanan">Status Kawin</td>
		<td class="bdbawah bdkiri bdkanan">Tanggal Nikah</td>
		<td class="bdbawah bdkiri bdkanan">Pekerjaan</td>

	</tr>
	<?php foreach ($keluarga as $data): ?>
		<tr>
			<td class="bdbawah bdkanan"><?php echo $data->nama_anggota_keluarga ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_lahir ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->status_keluarga ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->status_kawin ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_nikah ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->pekerjaan ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="6" class="bdbawah bdatas bdkiri bdkanan"><b>Data Riwayat Pangkat</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Status</td>
		<td class="bdbawah bdkiri bdkanan">No SK</td>
		<td class="bdbawah bdkiri bdkanan">Tgl SK</td>
		<td class="bdbawah bdkiri bdkanan">Tgl Mulai</td>
		<td class="bdbawah bdkiri bdkanan">Tgl Selesai</td>
		<td class="bdbawah bdkiri bdkanan">Masa Kerja</td>
	</tr>
	<?php foreach ($pangkat as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->status ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->nomor_sk ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_sk ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_mulai ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_selesai ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->masa_kerja ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="6" class="bdbawah bdatas bdkiri bdkanan"><b>Data Riwayat Jabatan</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Status</td>
		<td class="bdbawah bdkiri bdkanan">Penempatan</td>
		<td class="bdbawah bdkiri bdkanan">Uraian</td>
		<td class="bdbawah bdkiri bdkanan">TMT Eselon</td>
		<td class="bdbawah bdkiri bdkanan">Lokasi</td>
	</tr>
	<?php foreach ($jabatan as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->status ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->penempatan ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->uraian ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tmt_eselon ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->lokasi ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="6" class="bdbawah bdatas bdkiri bdkanan"><b>Data Riwayat Pendidikan</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Tingkat Pendidikan</td>
		<td class="bdbawah bdkiri bdkanan">Jurusan</td>
		<td class="bdbawah bdkiri bdkanan">Sekolah</td>
		<td class="bdbawah bdkiri bdkanan">Tmpt Sekolah</td>
		<td class="bdbawah bdkiri bdkanan">Tgl Lulus</td>
	</tr>
	<?php foreach ($pendidikan as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->tingkat_pendidikan ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->jurusan ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->sekolah ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tempat_sekolah ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_lulus ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="6" class="bdbawah bdatas bdkiri bdkanan"><b>Data Pelatihan</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Uraian</td>
		<td class="bdbawah bdkiri bdkanan">Lokasi</td>
		<td class="bdbawah bdkiri bdkanan">Tgl Sertifikat</td>
		<td class="bdbawah bdkiri bdkanan">Jam Pelatihan</td>
		<td class="bdbawah bdkiri bdkanan">Negara</td>
	</tr>
	<?php foreach ($pelatihan as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->uraian ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->lokasi ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_sertifikat ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->jam_pelatihan ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->negara ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="3" class="bdbawah bdatas bdkiri bdkanan"><b>Data Penghargaan</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Uraian</td>
		<td class="bdbawah bdkiri bdkanan">No SK</td>
		<td class="bdbawah bdkiri bdkanan">Tgl SK</td>
	</tr>
	<?php foreach ($penghargaan as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->uraian ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->nomor_sk ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_sk ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="3" class="bdbawah bdatas bdkiri bdkanan"><b>Data Seminar</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Uraian</td>
		<td class="bdbawah bdkiri bdkanan">Lokasi</td>
		<td class="bdbawah bdkiri bdkanan">Tanggal</td>
	</tr>
	<?php foreach ($seminar as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->uraian ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->lokasi ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="3" class="bdbawah bdatas bdkiri bdkanan"><b>Data Organisasi</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Uraian</td>
		<td class="bdbawah bdkiri bdkanan">Lokasi</td>
		<td class="bdbawah bdkiri bdkanan">Tanggal</td>
	</tr>
	<?php foreach ($organisasi as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->uraian ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->lokasi ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="4" class="bdbawah bdatas bdkiri bdkanan"><b>Data Gaji</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Dasar Perubahan</td>
		<td class="bdbawah bdkiri bdkanan">Gaji Pokok</td>
		<td class="bdbawah bdkiri bdkanan">Masa Kerja</td>
		<td class="bdbawah bdkiri bdkanan">Pejabat Menetapkan</td>
	</tr>
	<?php foreach ($gaji_pokok as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->dasar_perubahan ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->gaji_pokok ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->masa_kerja ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->pejabat_menetapkan ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="5" class="bdbawah bdatas bdkiri bdkanan"><b>Data Hukuman</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Uraian</td>
		<td class="bdbawah bdkiri bdkanan">Tgl Mulai</td>
		<td class="bdbawah bdkiri bdkanan">Tgl Selesai</td>
		<td class="bdbawah bdkiri bdkanan">Masa Berlaku</td>
		<td class="bdbawah bdkiri bdkanan">Pejabat Menetapkan</td>
	</tr>
	<?php foreach ($hukuman as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->uraian ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_mulai ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->tanggal_selesai ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->masa_berlaku ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->pejabat_menetapkan ?></td>
		</tr>
	<?php endforeach ?>
</table>
<table class="penuh" style="margin-top: 14px">
	<tr>
		<td colspan="5" class="bdbawah bdatas bdkiri bdkanan"><b>Data SKP</b></td>
	</tr>
	<tr>
		<td class="bdbawah bdkiri bdkanan">Tahun</td>
		<td class="bdbawah bdkiri bdkanan">Rata-rata</td>
		<td class="bdbawah bdkiri bdkanan">Atasan</td>
		<td class="bdbawah bdkiri bdkanan">Penilai</td>
		<td class="bdbawah bdkiri bdkanan">Mengatahui</td>
	</tr>
	<?php foreach ($data_dp3 as $data): ?>
		<tr>
			<td class="bdbawah bdkanan bdkiri"><?php echo $data->tahun ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->rata_rata ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->atasan ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->penilai ?></td>
			<td class="bdbawah bdkanan"><?php echo $data->mengetahui ?></td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>