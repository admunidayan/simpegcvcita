<form action="<?php echo base_url('index.php/admin/pegawai/update_seminar/'.$hasil->id_pegawai.'/'.$detail->id_seminar) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="form-group">
							<label class="text-info" for="uraian">URAIAN</label>
							<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" >
						</div>
						<div class="form-group">
							<label class="text-info" for="lokasi">LOKASI</label>
							<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI" >
						</div>
						<div class="form-group">
							<label class="text-info" for="tanggal">TANGGAL SK</label>
							<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="TANGGAL">
						</div>
					</div>
				</div>
				<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
			</form>