<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="col-md-6">
		Data Honorer <span class="text-secondary">jumlah Honorer Ditemukan <?php echo $jmldata; ?></span>
	</div>
	<div class="col-md-6">
		<button type="button" class="btn btn-success btn-sm" style="float: right" data-toggle="modal" data-target="#addpegawai"><i class="fa fa-plus"></i> Tambah Data Honorer</button>
	</div>
	<div class="ktk-badan bts-ats">
		<form action="<?php echo base_url('index.php/admin/honorer/index/') ?>" method="get">
			<div class="form-group">
				<label> Cari Honorer</label>
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="string" class="form-control" placeholder="Masukan Nama, NIP Baru atau NIP Lama">
						<small class="form-text text-muted">Tekan Enter untuk melakukan pencarian honorer</small>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="skpd" onchange="this.form.submit()">
							<option value=""> Pilih Lokasi </option>
							<option value=""> Semua Lokasi </option>
							<?php foreach ($skpd as $dtskpd): ?>
								<option value="<?php echo $dtskpd->id_lokasi_kerja ?>"><?php echo $dtskpd->lokasi_kerja; ?></option>
							<?php endforeach ?>
						</select>
						<small class="form-text text-muted">Pilih Unit Organisasi</small>
					</div>
				</div>
			</div>
		</form>
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-app text-light">
					<td class="jrktbl text-center">No</td>
					<td class="text-center">Nama Honorer</td>
					<td class="text-center">Alamat</td>
					<td class="text-center">Nomor SK</td>
					<td class="text-center">Unit Organisasi</td>
					<td class="text-center">TMT</td>
					<td class="text-center">Nomor Handphone</td>
					<td colspan="2" class="text-center">Aksi</td>
					
				</tr>
			</thead>
			<tbody>
				<?php $no = 1 ?>
				<?php foreach ($hasil as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl text-secondary"><?php echo strtoupper($data->nama); ?></td>
						<td class="jrktbl text-secondary"><?php echo $data->alamat; ?></td>
						<td class="jrktbl text-secondary"><?php echo $data->nomor_sk; ?></td>
						<td class="jrktbl text-secondary"><?php echo @$this->Admin_m->detail_data_order('master_lokasi_kerja','id_lokasi_kerja',$data->id_lokasi_kerja)->lokasi_kerja; ?></td>
						<td class="jrktbl text-secondary"><?php echo $data->tmt; ?></td>
						<td class="jrktbl text-secondary"><?php echo $data->no_hp; ?></td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/honorer/edit_honorer/'.$data->id_honorer) ?>" class="text-success">Edit</a>
						</td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/honorer/delete_honorer/'.$data->id_honorer) ?>" class="text-danger">Hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			</tbody>
		</table>
		<?php echo $pagging; ?>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="addpegawai" tabindex="-1" role="dialog" aria-labelledby="addpegawaii" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addpegawaii">Tambah Data Honorer</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/honorer/create') ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="nama">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Tanpa Gelar" >
							</div>
							<div class="form-group">
								<label class="text-info" for="alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nip_lama">Nomor SK</label>
								<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="Nomor SK">
							</div>
							<div class="form-group">
								<label class="text-info" for="id_lokasi_kerja">Unit Organisasi</label>
								<select class="form-control" name="id_lokasi_kerja">
							<?php foreach ($skpd as $dtskpd): ?>
								<option value="<?php echo $dtskpd->id_lokasi_kerja ?>"><?php echo $dtskpd->lokasi_kerja; ?></option>
							<?php endforeach ?>
				</select>
							</div>
												<div class="form-group">
							<label class="text-info" for="tmt">TMT </label>
							<div class="row">
								<div class="col-md-4">
									<input type="text" class="form-control" id="tmt_jabatan_rj" name="tmt_hr" placeholder="HH" >
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="tmt_jabatan_rj" name="tmt_bln" placeholder="BB" >
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="tmt_jabatan_rj" name="tmt_thn" placeholder="TTTT" >
								</div>
							</div>
						</div>
							<div class="form-group">
								<label class="text-info" for="no_hp">Nomor Handphone</label>
								<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone">
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