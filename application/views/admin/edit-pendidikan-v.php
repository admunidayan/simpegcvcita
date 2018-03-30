<form action="<?php echo base_url('index.php/admin/pegawai/update_pendidikan/'.$hasil->id_pegawai.'/'.$detail->id_pendidikan) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="form-group">
				<label class="text-info">TINGKAT PENDIDIKAN</label>
				<select class="form-control" name="tingkat_pendidikan">
					<option value="<?php echo $detail->tingkat_pendidikan ?>">--<?php echo @$this->Admin_m->detail_data_order('master_pendidikan','id',$detail->tingkat_pendidikan)->pendidikan; ?>--</option>
					<?php foreach ($ipendidikan as $data): ?>
						<option value="<?php echo $data->id ?>"><?php echo $data->pendidikan; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
				<div class="form-group">
					<label class="text-info" for="jurusan">JURUSAN</label>
					<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="JURUSAN" value="<?php echo $detail->jurusan?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="sekolah">SEKOLAH</label>
					<input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="SEKOLAH" value="<?php echo $detail->sekolah?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tempat_sekolah">ALAMAT SEKOLAH</label>
					<input type="text" class="form-control" id="tempat_sekolah" name="tempat_sekolah" placeholder="TEMPAT SEKOLAH" value="<?php echo $detail->tempat_sekolah?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_lulus">TANGGAL LULUS</label>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_lulus,8,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_lulus,5,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_lulus,0,4)?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="text-info" for="nomor_ijazah">NOMOR IJAZAH</label>
					<input type="text" class="form-control" id="nomor_ijazah" name="nomor_ijazah" placeholder="NOMOR IJAZAH" value="<?php echo $detail->nomor_ijazah?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tahun_lulus">TAHUN LULUS</label>
					<input type="text" class="form-control" id="sekolah" name="tahun_lulus" placeholder="TAHUN LULUS" value="<?php echo $detail->tahun_lulus?>">
				</div>
			</div>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
	</form>