<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Keluarga</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Nama</td>
				<td class="jrktbl">Tgl Lahir</td>
				<td class="jrktbl">Status Kawin</td>
				<td class="jrktbl">Tgl Nikah</td>
				<td class="jrktbl">Uraian</td>
				<td class="jrktbl">Tgl Cerai Meniggal</td>
				<td class="jrktbl">Pekerjaan</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($keluarga == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($keluarga as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->nama_anggota_keluarga; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_lahir; ?></td>
						<td class="jrktbl"><?php echo $data->status_kawin; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_nikah; ?></td>
						<td class="jrktbl"><?php echo $data->uraian; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_cerai_meninggal; ?></td>
						<td class="jrktbl"><?php echo $data->pekerjaan; ?></td>

						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="9">Belum ada data keluarga</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >