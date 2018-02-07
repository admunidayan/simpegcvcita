<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Pelatihan</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Uraian</td>
				<td class="jrktbl">Lokasi</td>
				<td class="jrktbl">Tgl Sertifikat</td>
				<td class="jrktbl">Jam Pelatihan</td>
				<td class="jrktbl">Negara</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($pelatihan == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($pelatihan as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->uraian; ?></td>
						<td class="jrktbl"><?php echo $data->lokasi; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_sertifikat; ?></td>
						<td class="jrktbl"><?php echo $data->jam_pelatihan; ?></td>
						<td class="jrktbl"><?php echo $data->negara; ?></td>

						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="6">Belum ada data pelatihan</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >