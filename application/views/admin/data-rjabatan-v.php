<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Riwayat Jabatan</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Status</td>
				<td class="jrktbl">Penempatan</td>
				<td class="jrktbl">Tgl Mulai</td>
				<td class="jrktbl">Tgl Selesai</td>
				<td class="jrktbl">Lokasi</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($rjabatan == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($rjabatan as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->status; ?></td>
						<td class="jrktbl"><?php echo $data->Penempatan; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_mulai; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_selesai; ?></td>
						<td class="jrktbl"><?php echo $data->lokasi; ?></td>
						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="7">Belum ada data Riwayat Jabatan</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >