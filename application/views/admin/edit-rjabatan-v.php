<form action="<?php echo base_url('index.php/admin/pegawai/update_rjabatan/'.$hasil->id_pegawai.'/'.$detail->id_riwayat_jabatan) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="form-group">
					<label class="text-info" for="status">STATUS</label>
					<input type="text" class="form-control" id="status" name="status" placeholder="STATUS" value="<?php echo $detail->status?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="penempatan">PENEMPATAN</label>
					<input type="text" class="form-control" id="penempatan" name="penempatan" placeholder="PENEMPATAN" value="<?php echo $detail->penempatan?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="uraian">URAIAN</label>
					<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" value="<?php echo $detail->uraian?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tmt_eselon">TMT ESELON</label>
					<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon" placeholder="TMT ESELON" value="<?php echo $detail->tmt_eselon?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="nomor_sk">NOMOR SK</label>
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" value="<?php echo $detail->nomor_sk?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
					<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="TANGGAL SK" value="<?php echo $detail->tanggal_sk?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
					<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="TANGGAL MULAI" value="<?php echo $detail->tanggal_mulai?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
					<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="TANGGAL SELESAI" value="<?php echo $detail->tanggal_selesai?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="lokasi">LOKASI</label>
					<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI" value="<?php echo $detail->lokasi?>">
				</div>
			</div>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
	</form>