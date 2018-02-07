<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Oranisasi</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Uraian</td>
				<td class="jrktbl">Lokasi</td>
				<td class="jrktbl">Tanggal</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($organisasi == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($organisasi as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->uraian; ?></td>
						<td class="jrktbl"><?php echo $data->lokasi; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal; ?></td>
						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="4">Belum ada data organisasi</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >