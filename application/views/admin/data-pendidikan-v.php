<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
	<div class="media-body">
			<h4>Data Pendidikan</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addpendidikan"><i class="material-icons">note_add</i> Tambah Data Pendidikan</button>
		</div>
	</div>
	<hr/>
	<table class="table table-bordered table-hover table-sm">
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
				<td class="jrktbl" colspan="2">Aksi</td>
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
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_sttb)); ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_lulus)); ?></td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_pendidikan/'.$hasil->id_pegawai.'/'.$data->id_pendidikan) ?>" class="text-success">Edit</a>
						</td>
						<td class="jrktbl">
						<a href="<?php echo base_url('index.php/admin/pegawai/delete_pendidikan/'.$hasil->id_pegawai.'/'.$data->id_pendidikan) ?>" class="text-danger">Hapus</a>
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
<!-- Modal -->
	<div class="modal fade" id="addpendidikan" tabindex="-1" role="dialog" aria-labelledby="addpendidikann" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addpendidikann">Tambah Data Pendidikan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url('index.php/admin/pegawai/create_pendidikan/'.$hasil->id_pegawai) ?>" method="post">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-info" for="tingkat_pendidikan">TINGKAT PENDIDIKAN</label>
									<input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" placeholder="TINGKAT PENDIDIKAN" >
								</div>
								<div class="form-group">
									<label class="text-info" for="jurusan">JURUSAN</label>
									<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="JURUSAN" >
								</div>
								<div class="form-group">
									<label class="text-info" for="uraian">URAIAN</label>
									<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN">
								</div>
								<div class="form-group">
									<label class="text-info" for="teknik_non_teknik">TEKNIK NON TEKNIK</label>
									<input type="text" class="form-control" id="teknik_non_teknik" name="teknik_non_teknik" placeholder="TEKNIK NON TEKNIK">
								</div>
								<div class="form-group">
									<label class="text-info" for="sekolah">SEKOLAH</label>
									<input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="SEKOLAH">
								</div>
								<div class="form-group">
									<label class="text-info" for="tempat_sekolah">TEMPAT SEKOLAH</label>
									<input type="text" class="form-control" id="tempat_sekolah" name="tempat_sekolah" placeholder="TEMPAT SEKOLAH">
								</div>
								<div class="form-group">
									<label class="text-info" for="nomor_sttb">NOMOR STTB</label>
									<input type="text" class="form-control" id="nomor_sttb" name="nomor_sttb" placeholder="NOMOR STTB">
								</div>
								<div class="form-group">
									<label class="text-info" for="tanggal_sttb">TANGGAL STTB</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" id="tanggal_sttb" name="tanggal_sttb_hr" placeholder="HH">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_sttb" name="tanggal_sttb_bln" placeholder="BB">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_sttb" name="tanggal_sttb_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="text-info" for="tanggal_lulus">TANGGAL LULUS</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_hr" placeholder="HH">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_bln" placeholder="BB">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_thn" placeholder="TTTT">
										</div>
									</div>
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