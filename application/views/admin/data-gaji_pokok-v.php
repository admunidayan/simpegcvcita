<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Gaji Pokok</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">No SK</td>
				<td class="jrktbl">Tgl SK</td>
				<td class="jrktbl">Dasar Perubahan</td>
				<td class="jrktbl">Gaji Pokok</td>
				<td class="jrktbl">Tgl Mulai</td>
				<td class="jrktbl">Tgl Selesai</td>
				<td class="jrktbl">Masa Kerja</td>
				<td class="jrktbl">Pejabat</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($gaji_pokok == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($gaji_pokok as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->nomor_sk; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_sk; ?></td>
						<td class="jrktbl"><?php echo $data->dasar_perubahan; ?></td>
						<td class="jrktbl"><?php echo $data->gaji_pokok; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_mulai; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_selesai; ?></td>
						<td class="jrktbl"><?php echo $data->masa_kerja; ?></td>
						<td class="jrktbl"><?php echo $data->pejabat_menetapkan; ?></td>

						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="10">Belum ada data Gaji</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >