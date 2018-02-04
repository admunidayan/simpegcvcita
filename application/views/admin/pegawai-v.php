<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="ktk-jdl">
		Data Pegawai <span class="text-secondary">jumlah Pegawai Ditemukan <?php echo $jmldata; ?></span>
	</div>
	<div class="ktk-badan bts-ats">
		<table class="table table-hover">
			<thead>
				<tr class="bg-info text-light">
					<td class="jrktbl text-center">No</td>
					<td class="jrktbl">Nama Pegawai</td>
					<td class="jrktbl">NIP</td>
					<td class="jrktbl">Golongan</td>
					<td class="jrktbl text-center">Status</td>
					<td class="jrktbl">Aksi</td>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1 ?>
				<?php foreach ($hasil as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->nama_pegawai; ?></td>
						<td class="jrktbl text-secondary"><?php echo $data->nip; ?></td>
						<td class="jrktbl text-secondary"><?php echo $data->golongan; ?></td>
						<td class="jrktbl text-center text-secondary"><?php echo $data->nama_status; ?></td>
						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>