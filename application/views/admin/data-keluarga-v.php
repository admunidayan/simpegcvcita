<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Data Keluarga</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addkeluarga"><i class="material-icons">note_add</i> Tambah data Keluarga</button>
		</div>
	</div>
	<hr/>
	<table class="table table-bordered table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Nama</td>
				<td class="jrktbl">Tgl Lahir</td>
				<td class="jrktbl">Status</td>
				<td class="jrktbl">Status Kawin</td>
				<td class="jrktbl">Tgl Nikah</td>
				<td class="jrktbl">Tgl Cerai Meniggal</td>
				<td class="jrktbl">Pekerjaan</td>
				<td class="jrktbl" colspan="2">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php if ($keluarga == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($keluarga as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->nama_anggota_keluarga; ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_lahir)) ; ?></td>
						<td class="jrktbl"><?php echo $data->status_keluarga; ?></td>
						<td class="jrktbl"><?php echo $data->status_kawin; ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_nikah)); ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_cerai_meninggal)); ?></td>
						<td class="jrktbl"><?php echo $data->pekerjaan; ?></td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_keluarga/'.$hasil->id_pegawai.'/'.$data->id_data_keluarga) ?>" class="text-success">Edit</a>
						</td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/delete_keluarga/'.$hasil->id_pegawai.'/'.$data->id_data_keluarga) ?>" class="text-danger">Hapus</a>
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
<!-- Modal -->
<div class="modal fade" id="addkeluarga" tabindex="-1" role="dialog" aria-labelledby="addkeluargaa" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addkeluargaa">Tambah Data Keluarga</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/pegawai/create_keluarga/'.$hasil->id_pegawai) ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="nama_anggota_keluarga">NAMA ANGGOTA KELUARGA</label>
								<input type="text" class="form-control" id="nama_anggota_keluarga" name="nama_anggota_keluarga" placeholder="NAMA LENGKAP TANPA GELAR" >
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_lahir">TANGGAL LAHIR</label>
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir_hr" placeholder="HH" >
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir_bln" placeholder="BB" >
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir_thn" placeholder="TTTT">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="status_keluarga">STATUS DALAM KELUARGA</label>
								<input type="text" class="form-control" id="status_keluarga" name="status_keluarga" placeholder="STATUS DALAM KELUARGA">
							</div>
							<div class="form-group">
								<label class="text-info" for="status_kawin">STATUS KAWIN</label>
								<input type="text" class="form-control" id="status_kawin" name="status_kawin" placeholder="STATUS KAWIN">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_nikah">TANGGAL NIKAH</label>
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" id="tanggal_nikah" name="tanggal_nikah_hr" placeholder="HH" >
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal_nikah" name="tanggal_nikah_bln" placeholder="BB" >
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal_nikah" name="tanggal_nikah_thn" placeholder="TTTT">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="uraian">URAIAN</label>
								<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_cerai_meninggal">TANGGAL CERAI MENINGGAL</label>
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" id="tanggal_cerai_meninggal" name="tanggal_cerai_meninggal_hr" placeholder="HH" >
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal_cerai_meninggal" name="tanggal_cerai_meninggal_bln" placeholder="BB" >
									</div>
									<div class="col">
										<input type="text" class="form-control" id="tanggal_cerai_meninggal" name="tanggal_cerai_meninggal_thn" placeholder="TTTT">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="text-info" for="pekerjaan">PEKERJAAN</label>
										<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="PEKERJAAN">
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