<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Pendidikan</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Tngkt Pendidikan</td>
				<td class="jrktbl">Jurusan</td>
				<td class="jrktbl">Uraian</td>
				<td class="jrktbl">Sekolah</td>
				<td class="jrktbl">No STTB</td>
				<td class="jrktbl">Tgl STTB</td>
				<td class="jrktbl">Tgl Lulus</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($pendidikan == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($pendidikan as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->tingkat_pendidikan; ?></td>
						<td class="jrktbl"><?php echo $data->jurusan; ?></td>
						<td class="jrktbl"><?php echo $data->uraian; ?></td>
						<td class="jrktbl"><?php echo $data->sekolah; ?></td>
						<td class="jrktbl"><?php echo $data->nomor_sttb; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_sttb; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_lulus; ?></td>

						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="9">Belum ada data pendidikan</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >