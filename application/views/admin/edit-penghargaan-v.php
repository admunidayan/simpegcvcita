<form action="<?php echo base_url('index.php/admin/pegawai/update_penghargaan/'.$hasil->id_pegawai.'/'.$detail->id_penghargaan) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="form-group">
						<label class="text-info" for="">URAIAN</label>
						<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" value="<?php echo $detail->uraian?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="nomor_sk">NOMOR SK</label>
						<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" value="<?php echo $detail->nomor_sk?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
						<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="TANGGAL SK" value="<?php echo $detail->tanggal_sk?>">
					</div>
				</div>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
		</form>