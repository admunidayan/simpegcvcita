<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Hukuman</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Tahun</td>
				<td class="jrktbl">Kesetiaan</td>
				<td class="jrktbl">Prestasi</td>
				<td class="jrktbl">Tanggung Jawab</td>
				<td class="jrktbl">Kejujuran</td>
				<td class="jrktbl">Kerjasama</td>
				<td class="jrktbl">mengeahui</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($dp3 == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($dp3 as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->tahun; ?></td>
						<td class="jrktbl"><?php echo $data->kesetiaan; ?></td>
						<td class="jrktbl"><?php echo $data->prestasi; ?></td>
						<td class="jrktbl"><?php echo $data->tanggung_jawab; ?></td>
						<td class="jrktbl"><?php echo $data->kejujuran; ?></td>
						<td class="jrktbl"><?php echo $data->kerjasama; ?></td>
						<td class="jrktbl"><?php echo $data->mengetahui; ?></td>

						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="8">Belum ada data hukuman</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >