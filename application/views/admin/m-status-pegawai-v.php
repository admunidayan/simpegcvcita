<div class="row">
	<div class="col">
		<div style="margin-top: 14px; background-color: white;padding: 30px">
			<h5 class="text-info">Status Pegawai</h5><hr/>
			<table class="table">
				<tr >
					<td>No</td>
					<td>Nama Status</td>
					<td colspan="2">Action</td>
				</tr>
				<?php $no=1 ?>
				<?php foreach ($hasil as $data): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data->nama_status; ?></td>
						<td>Edit</td>
						<td>Hapus</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			</table>
		</div>
	</div>
	<div class="col"></div>
</div>