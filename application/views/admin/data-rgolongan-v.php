<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Riwayat Golongan</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addrgolongan"><i class="fa fa-plus-circle"></i> Tambah Data Riwayat Golongan</button>
		</div>
	</div>
	<hr/>
	<table class="table table-bordered table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Golongan</td>
				<td class="jrktbl">No SK</td>
				<td class="jrktbl">Tgl SK</td>
				<td class="jrktbl">TMT Golongan</td>
				<td class="jrktbl">No BKN</td>
				<td class="jrktbl">Tgl BKN</td>
				<td class="jrktbl">Masa Kerja</td>
				<td class="jrktbl" colspan="2">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php if ($rgolongan == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($rgolongan as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo @$this->Admin_m->detail_data_order('master_golongan','id_golongan',$data->id_golongan)->golongan; ?></td>
						<td class="jrktbl"><?php echo $data->nomor_sk; ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_sk)) ; ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tmt_golongan)) ; ?></td>
						<td class="jrktbl"><?php echo $data->nomor_bkn; ?></td>
						<td class="jrktbl"><?php echo date('d F Y', strtotime($data->tanggal_bkn)) ; ?></td>
						<td class="jrktbl"><?php echo $data->masa_kerja; ?></td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_rgolongan/'.$hasil->id_pegawai.'/'.$data->id_riwayat_golongan) ?>" class="text-success">Edit</a>
						</td>
						<td class="jrktbl">
							<a href="<?php echo base_url('index.php/admin/pegawai/delete_rgolongan/'.$hasil->id_pegawai.'/'.$data->id_riwayat_golongan) ?>" class="text-danger">Hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			<?php else: ?>
				<tr>
					<td class="jrktbl text-center" colspan="8">Belum ada data Riwayat Golongan</td>
				</tr>
			<?php endif ?>
		</tbody>
	</table>
	<!-- Modal -->
	<div class="modal fade" id="addrgolongan" tabindex="-1" role="dialog" aria-labelledby="addrgolongan" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addrgolongan">Tambah Data Riwayat Golongan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url('index.php/admin/pegawai/create_rgolongan/'.$hasil->id_pegawai) ?>" method="post">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<label class="text-info" for="id_golongan">GOLONGAN</label>
								<select class="form-control" name="id_golongan">
									<?php foreach ($golongan as $data): ?>
										<option value="<?php echo $data->id_golongan ?>"><?php echo $data->golongan; ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
									<label class="text-info" for="nomor_sk">NOMOR SK</label>
									<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK">
								</div>
							<div class="form
								<div class="form-group">
									<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_hr" placeholder="HH" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_bln" placeholder="BB" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="text-info" for="tmt_golongan">TMT GOLONGAN</label>
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control" id="tmt_golongan" name="tmt_golongan_hr" placeholder="HH" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="tmt_golongan" name="tmt_golongan_bln" placeholder="BB" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="tmt_golongan" name="tmt_golongan_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="text-info" for="nomor_bkn">NOMOR BKN</label>
									<input type="text" class="form-control" id="nomor_bkn" name="nomor_bkn" placeholder="NOMOR BKN">
								</div>
								<div class="form-group">
									<label class="text-info" for="tanggal_bkn">TANGGAL BKN</label>
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control" id="tanggal_bkn" name="tanggal_bkn_hr" placeholder="HH" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="tanggal_bkn" name="tanggal_bkn_bln" placeholder="BB" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="tanggal_bkn" name="tanggal_bkn_thn" placeholder="TTTT">
										</div>
									</div>
								</div>
								<div class="form-group">
								<label class="text-info" for="masa_kerja">MASA KERJA</label>
								<input type="text" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="MASA KERJA">
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
	</div >