<form action="<?php echo base_url('index.php/admin/pegawai/update_pelatihan/'.$hasil->id_pegawai.'/'.$detail->id_pelatihan) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="form-group">
						<label class="text-info" for="uraian">URAIAN</label>
						<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" value="<?php echo $detail->uraian?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="lokasi">LOKASI</label>
						<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI" value="<?php echo $detail->lokasi?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="tanggal_sertifikat">TANGGAL SERTIFIKAT</label>
						<input type="text" class="form-control" id="tanggal_sertifikat" name="tanggal_sertifikat" placeholder="TANGGAL SERTIFIKAT" value="<?php echo $detail->tanggal_sertifikat?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="jam_pelatihan">JAM PELATIHAN</label>
						<input type="text" class="form-control" id="jam_pelatihan" name="jam_pelatihan" placeholder="JAM PELATIHAN" value="<?php echo $detail->jam_pelatihan?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="negara">NEGARA</label>
						<input type="text" class="form-control" id="negara" name="negara" placeholder="NEGARA" value="<?php echo $detail->negara?>">
					</div>
				</div>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
		</form>