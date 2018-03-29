<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Data Riwayat Jabatan</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addrjabatan"><i class="material-icons">note_add</i> Tambah Data Riwayat Jabatan</button>
		</div>
	</div>
	<hr/>
	<table class="table table-bordered table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Jns Jabatan</td>
				<td class="jrktbl">Nama Jabatan</td>
				<td class="jrktbl">SKPD</td>
				<td class="jrktbl">Eselon</td>
				<td class="jrktbl">TMT Jabatan</td>
				<td class="jrktbl">Tgl SK</td>
				<td class="jrktbl">TMT Pelantikan</td>
				<td class="jrktbl">No SK</td>
				<td class="jrktbl" colspan="2">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php if ($rjabatan == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($rjabatan as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $this->Admin_m->detail_data_order('master_jenis_jabatan','id_jenis_jabatan',$data->id_jenis_jabatan)->nama_jenis_jabatan; ?></td>
						<td class="jrktbl"><?php echo $this->Admin_m->detail_data_order('master_jabatan','id_jabatan',$data->id_jabatan)->nama_jabatan; ?></td>
						<td class="jrktbl"><?php echo $this->Admin_m->detail_data_order('master_satuan_kerja','id_satuan_kerja',$data->id_satuan_kerja)->nama_satuan_kerja; ?></td>
						<td class="jrktbl"><?php echo $this->Admin_m->detail_data_order('master_eselon','id_eselon',$data->id_eselon)->nama_eselon;?></td>
						<td class="jrktbl"><?php echo $data->tmt_jabatan_rj; ?></td>
						<td class="jrktbl"><?php echo $data->tanggal_sk_rj; ?></td>
						<td class="jrktbl"><?php echo $data->tmt_pelantikan_rj; ?></td>
						<td class="jrktbl"><?php echo $data->nomor_sk; ?></td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_rjabatan/'.$hasil->id_pegawai.'/'.$data->id_riwayat_jabatan) ?>" class="text-success">Edit</a>
						</td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/delete_rjabatan/'.$hasil->id_pegawai.'/'.$data->id_riwayat_jabatan) ?>" class="text-danger">Hapus</a>
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
									<label class="text-info" for="penempatan">PENEMPATAN</label>
									<input type="text" class="form-control" id="penempatan" name="penempatan" placeholder="PENEMPATAN" >
								</div>
								<div class="form-group">
									<label class="text-info" for="uraian">URAIAN</label>
									<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN">
								</div>
								<div class="form-group">
									<label class="text-info" for="tmt_eselon">TMT ESELON</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon_hr" placeholder="HH">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon_bln" placeholder="BB">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="text-info" for="nomor_sk">NOMOR SK</label>
									<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK">
								</div>
								<div class="form-group">
									<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_hr" placeholder="HH">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_bln" placeholder="BB">
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai_hr" placeholder="HH" >
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai_bln" placeholder="BB" >
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai_hr" placeholder="HH" >
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai_bln" placeholder="BB" >
										</div>
										<div class="col">
											<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai_thn" placeholder="TTTT">
										</div>
									</div>
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