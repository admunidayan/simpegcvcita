<a href="<?php echo base_url('index.php/admin/export/ex_by_gol/'); ?>" class="btn btn-success btn-sm">Export Excel</a>
<table class="table table-bordered table-hover table-responsive">
	<tr>
		<th>No</th>
		<th>NIP</th>
		<th>Nama Pegawai</th>
		<th>JK</th>
		<th>Golongan</th>
		<th>TMT Gol</th>
		<th>Tgl SK</th>
		<th>Nomor SK</th>
	</tr>
	<?php $no = 1 ?>
	<?php foreach ($hasil as $data): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data->nip; ?></td>
			<td><?php echo $data->nama_pegawai; ?></td>
			<td><?php echo $data->jenis_kelamin; ?></td>
			<td><?php echo $data->golongan; ?></td>
			<td><?php echo $data->tmt_golongan; ?></td>
			<td><?php echo $data->tanggal_sk; ?></td>
			<td><?php echo $data->nomor_sk; ?></td>
		</tr>
		<?php $no++ ?>
	<?php endforeach ?>
</table>