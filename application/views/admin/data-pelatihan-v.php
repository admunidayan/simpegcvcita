<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Diklat</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addpelatihan"><i class="material-icons">note_add</i> Tambah Data Pelatihan</button>
		</div>
	</div>
	<hr/>
	<table class="table table-bordered table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Uraian</td>
				<td class="jrktbl">Lokasi</td>
				<td class="jrktbl">Nomor</td>
				<td class="jrktbl">Tanggal</td>
				<td class="jrktbl">Tahun</td>
				<td class="jrktbl" colspan="2">Aksi</td>
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
						<td class="jrktbl"><?php echo $data->nomor; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal; ?></td>
						<td class="jrktbl"><?php echo $data->tahun; ?></td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_pelatihan/'.$hasil->id_pegawai.'/'.$data->id_pelatihan) ?>" class="text-success">Edit</a>
						</td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/delete_pelatihan/'.$hasil->id_pegawai.'/'.$data->id_pelatihan) ?>" class="text-danger">Hapus</a>
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
<!-- Modal -->
<div class="modal fade" id="addpelatihan" tabindex="-1" role="dialog" aria-labelledby="addpelatihan" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addpelatihan">Tambah Data Pendidikan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/pegawai/create_pelatihan/'.$hasil->id_pegawai) ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="uraian">URAIAN</label>
								<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" >
							</div>
							<div class="form-group">
								<label class="text-info" for="lokasi">LOKASI</label>
								<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nomor">NOMOR</label>
								<input type="text" class="form-control" id="nomor" name="nomor" placeholder="NOMOR" >
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal">TANGGAL</label>
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" id="tanggal" name="tanggal_hr" placeholder="HH">
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal" name="tanggal_bln" placeholder="BB">
									</div>

								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="tahun">TAHUN</label>
								<input type="text" class="form-control" id="tahun" name="tahun" placeholder="TAHUN">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>