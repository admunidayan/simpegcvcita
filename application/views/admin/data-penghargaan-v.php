<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Penghargaan</h4><hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Uraian</td>
				<td class="jrktbl">Nomor SK</td>
				<td class="jrktbl">Tanggal SK</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($penghargaan == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($penghargaan as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->uraian; ?></td>
						<td class="jrktbl"><?php echo $data->nomor_sk; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_sk; ?></td>
						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="4">Belum ada data penghargaan</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >