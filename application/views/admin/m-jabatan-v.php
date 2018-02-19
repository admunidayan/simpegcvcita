<div class="row">
	<div class="col">
		<div style="margin-top: 14px; background-color: white;padding: 30px">
			<h5 class="text-info">JABATAN</h5>
			<table class="table">
				<tr >
					<td>No</td>
					<td>Nama Jabatan</td>
					<td>Level</td>
					<td colspan="2">Action</td>
				</tr>
				<?php $no=1 ?>
				<?php foreach ($hasil as $data): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data->nama_jabatan; ?></td>
						<td><?php echo $data->level; ?></td>
						<td>Edit</td>
						<td>Hapus</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</div>