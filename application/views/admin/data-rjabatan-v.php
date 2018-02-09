<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
				<h4>Data Data Riwayat Jabatan</h4>
			</div>
			<div class="media-right">
				<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addrjabatan"><i class="material-icons">note_add</i> Tambah Data Riwayat Jabatan</button>
			</div>
		</div>
		<hr/>
<table class="table table-hover table-sm">
	<thead>
		<tr class="bg-app text-light">
			<td class="jrktbl text-center">No</td>
			<td class="jrktbl">Status</td>
			<td class="jrktbl">Penempatan</td>
			<td class="jrktbl">Tgl Mulai</td>
			<td class="jrktbl">Tgl Selesai</td>
			<td class="jrktbl">Lokasi</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php if ($rjabatan == TRUE): ?>
			<?php $no = 1 ?>
			<?php foreach ($rjabatan as $data): ?>
				<tr>
					<td class="jrktbl text-center"><?php echo $no; ?></td>
					<td class="jrktbl"><?php echo $data->status; ?></td>
					<td class="jrktbl"><?php echo $data->penempatan; ?></td>
					<td class="jrktbl"><?php echo $data->tanggal_mulai; ?></td>
					<td class="jrktbl"><?php echo $data->tanggal_selesai; ?></td>
					<td class="jrktbl"><?php echo $data->lokasi; ?></td>
					<td class="jrktbl">
						<a href="#" class="text-danger">hapus</a>
					</td>
				</tr>
				<?php $no++ ?>
			<?php endforeach ?>
		<?php else: ?>
			<tr>
				<td class="jrktbl text-center" colspan="7">Belum ada data Riwayat Jabatan</td>
			</tr>
		<?php endif ?>
	</tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="addrjabatan" tabindex="-1" role="dialog" aria-labelledby="addrjabatann" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addrjabatann">Tambah Data Riwayat Jabatan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/pegawai/create_rjabatan/'.$hasil->id_pegawai) ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="status">STATUS</label>
								<input type="text" class="form-control" id="status" name="status" placeholder="STATUS" >
							</div>
							<div class="form-group">
								<label class="text-info" for="penempatan">PENEMPATAN</label>
								<input type="text" class="form-control" id="penempatan" name="penempatan" placeholder="PENEMPATAN" >
							</div>
							<div class="form-group">
								<label class="text-info" for="uraian">URAIAN</label>
								<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN">
							</div>
							<div class="form-group">
								<label class="text-info" for="tmt_eselon">TMT ESELON</label>
								<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon" placeholder="TMT ESELON">
							</div>
							<div class="form-group">
								<label class="text-info" for="nomor_sk">NOMOR SK</label>
								<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
								<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="TANGGAL SK">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
								<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="TANGGAL MULAI">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
								<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="TANGGAL SELESAI">
							</div>
							<div class="form-group">
								<label class="text-info" for="lokasi">LOKASI</label>
								<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI">
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
</div >