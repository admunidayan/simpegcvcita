<form action="<?php echo base_url('index.php/admin/pegawai/update_organisasi/'.$hasil->id_pegawai.'/'.$detail->id_organisasi) ?>" method="post">
	<div class="row">
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
				<label class="text-info" for="tanggal">TANGGAL</label>
				<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="TANGGAL" value="<?php echo $detail->tanggal?>">
			</div>
		</div>
	</div>
	<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
</form>