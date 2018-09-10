<div style="background-color: white;padding: 30px">
	<div class="row">
		<div class="col-md-6">
			Data Pegawai <span class="text-secondary">jumlah Pegawai Ditemukan <?php echo $jmldata; ?></span>
		</div>
		<div class="col-md-6">
			<button type="button" class="btn btn-success btn-sm" style="float: right" data-toggle="modal" data-target="#addpegawai"><i class="fa fa-plus"></i> Tambah Data Pegawai</button>
		</div>
	</div>
	<div class="ktk-badan bts-ats">
		<form action="<?php echo base_url('index.php/admin/pegawai/index/') ?>" method="get">
			<div class="form-group">
				<label> Cari Pegawai</label>
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="string" class="form-control" placeholder="Masukan Nama, NIP Baru atau NIP Lama">
						<small class="form-text text-muted">Tekan Enter untuk melakukan pencarian pegawai</small>
					</div>
					<?php if ($this->ion_auth->in_group('admin')): ?>
						<div class="col-md-6">
							<select class="form-control" name="skpd" onchange="this.form.submit()">
								<option value=""> Pilih Lokasi </option>
								<option value=""> Semua Lokasi </option>
								<?php foreach ($skpd as $data): ?>
									<option value="<?php echo $data->id_satuan_kerja ?>"><?php echo $data->nama_satuan_kerja; ?></option>
								<?php endforeach ?>
							</select>
							<small class="form-text text-muted">Pilih Unit Organisasi</small>
						</div>
					<?php endif ?>
				</div>
			</div>
		</form>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-responsive">
				<thead>
					<tr class="bg-app text-light bulk_action">
						<td class="text-center">No</td>
						<td class="text-center">Nama Pegawai</td>
						<td class="text-center">NIP</td>
						<td class="text-center">NIP Lama</td>
						<td class="text-center">Alamat Pegawai</td>
						<td class="text-center">Status</td>
						<td class="text-center">Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php $no = $nmr+1 ?>
					<?php foreach ($hasil as $data): ?>
						<tr>
							<td class="jrktbl text-center"><?php echo $no; ?></td>
							<td class="jrktbl"><a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail/'.$data->id_pegawai) ?>"><?php echo strtoupper($data->nama_pegawai); ?></a></td>
							<td class="jrktbl text-secondary"><?php echo $data->nip; ?></td>
							<td class="jrktbl text-secondary"><?php echo $data->nip_lama; ?></td>
							<td class="jrktbl text-secondary"><?php echo strtoupper($data->alamat); ?></td>
							<td class="jrktbl text-center text-secondary"><?php echo $data->nama_status; ?></td>
							<td class="jrktbl">
								<a href="<?php echo base_url('index.php/admin/pegawai/delete_pegawai/'.$data->id_pegawai) ?>" class="text-danger">Hapus</a>
							</td>
						</tr>
						<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<?php echo $pagging; ?>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="addpegawai" tabindex="-1" role="dialog" aria-labelledby="addpegawaii" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addpegawaii">Tambah Data Pegawai</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/pegawai/create') ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="nama_pegawai">Gelar Depan</label>
								<input type="text" class="form-control" id="gelar_dpn" name="gelar_dpn" placeholder="Gelar Depan" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nama_pegawai">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Lengkap Tanpa Gelar" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nama_pegawai">Gelar Belakang</label>
								<input type="text" class="form-control" id="gelar_belakang" name="gelar_belakang" placeholder="Gelar Belakang" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nip">NIP</label>
								<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nip_lama">NIP Lama</label>
								<input type="text" class="form-control" id="nip_lama" name="nip_lama" placeholder="NIP Lama">
							</div>
							<div class="form-group">
								<label class="text-info" for="no_kartu_pegawai">Nomor Kartu Pegawai</label>
								<input type="text" class="form-control" id="no_kartu_pegawai" name="no_kartu_pegawai" placeholder="Nomor Kartu Pegawai">
							</div>

							<div class="form-group">
								<label class="text-info" for="nomor_kk">Nomor Kartu Keluarga</label>
								<input type="text" class="form-control" id="NO_KK" name="nomor_kk" placeholder="Nomor Kartu Keluarga"">
							</div>

							<div class="form-group">
								<label class="text-info" for="no_ktp">Nomor KTP</label>
								<input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" placeholder="Nomor KTP"">
							</div>
							<div class="form-group">
								<label class="text-info" for="no_npwp">NPWP</label>
								<input type="text" class="form-control" id="no_npwp" name="no_npwp" placeholder="NPWP">
							</div>
							<div class="form-group">
								<label class="text-info" for="kartu_askes_pegawai">Nomor Kartu Askes Pegawai</label>
								<input type="text" class="form-control" id="kartu_askes_pegawai" name="kartu_askes_pegawai" placeholder="Nomor Kartu Askes Pegawai">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="tempat_lahir">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Kota Kelahiran/Tempat Lahir">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_lahir">Tanggal Lahir</label>
								<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="12-01-1993">
							</div>
							<div class="form-group">
								<label class="text-info" for="jenis_kelamin">Jenis Kelamin</label>
								<select class="form-control" name="jenis_kelamin">
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label class="text-info" for="agama">Agama</label>
								<select class="form-control" name="agama">
									<?php foreach ($agama as $data): ?>
										<option value="<?php echo $data->id_agama ?>"><?php echo $data->nm_agama; ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label class="text-info" for="no_hp">Nomor Handphone</label>

								<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone">
							</div>
							<div class="form-group">
								<label class="text-info" for="email">Email</label>

								<input type="text" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label class="text-info" for="status_pegawai">Status Pegawai</label>
								<select class="form-control" name="status_pegawai">
									<?php foreach ($status as $data): ?>
										<option value="<?php echo $data->id_status_pegawai ?>"><?php echo $data->nama_status; ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label class="text-info" for="gaji_pokok">Gaji Pokok</label>
								<input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="Gaji Pokok">
							</div>
							<div class="form-group">
								<label class="text-info" for="skpd">SKPD</label>
								<?php if ($this->ion_auth->in_group('skpd')): ?>
									<input type="hidden" name="skpd" value="<?php echo $users->id_mhs_pt ?>">
									<div class="form-control"><?php echo $this->Admin_m->detail_data_order('master_satuan_kerja','id_satuan_kerja',$users->id_mhs_pt)->nama_satuan_kerja; ?></div>
									<?php else: ?>
										<select class="form-control" name="skpd">
											<?php foreach ($skpd as $data): ?>
												<option value="<?php echo $data->id_satuan_kerja ?>"><?php echo $data->nama_satuan_kerja; ?></option>
											<?php endforeach ?>
										</select>
									<?php endif ?>
							</div>

							<div class="form-group">
								<label class="text-info" for="tmt_cpns">Tanggal Pengangkatan CPNS</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" name="tanggal_pengangkatan_cpns_hr" placeholder="DD" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" name="tanggal_pengangkatan_cpns_bln" placeholder="BB" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" name="tanggal_pengangkatan_cpns_thn" placeholder="TTTT" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="id_golongan">Golongan</label>
								<select class="form-control" name="id_golongan">
									<?php foreach ($golongan as $data): ?>
										<option value="<?php echo $data->id_golongan ?>"><?php echo $data->golongan; ?></option>
									<?php endforeach ?>
								</select>
							</div>

							<div class="form-group">
								<label class="text-info" for="tmt_cpns">TMT CPNS</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control" name="tmt_cpns_hr" placeholder="DD" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" name="tmt_cpns_bln" placeholder="BB" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" name="tmt_cpns_thn" placeholder="TTTT" >
									</div>
								</div>

								<div class="form-group">
									<label class="text-info" for="tmt_pns">TMT PNS</label>
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control" name="tmt_pns_hr" placeholder="DD" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" name="tmt_pns_bln" placeholder="BB" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" name="tmt_pns_thn" placeholder="TTTT" >
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="text-info" for="alamat">Alamat Pegawai</label>
										<textarea id="alamat" name="alamat" class="form-control" placeholder="Masukan alamat"></textarea>
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