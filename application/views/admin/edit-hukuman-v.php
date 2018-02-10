<form action="<?php echo base_url('index.php/admin/pegawai/update_hukuman/'.$hasil->id_pegawai.'/'.$detail->id_hukuman) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="uraian">URAIAN</label>
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
							<div class="form-group">
								<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
								<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="TANGGAL MULAI" value="<?php echo $detail->tanggal_mulai?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
								<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="TANGGAL SELESAI" value="<?php echo $detail->tanggal_selesai?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="masa_berlaku">MASA BERLAKU</label>
								<input type="text" class="form-control" id="masa_berlaku" name="masa_berlaku" placeholder="MASA BERLAKU" value="<?php echo $detail->masa_berlaku?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="pejabat_menetapkan">PEJABAT MENETAPKAN</label>
								<input type="text" class="form-control" id="pejabat_menetapkan" name="pejabat_menetapkan" placeholder="PEJABAT MENETAPKAN" value="<?php echo $detail->pejabat_menetapkan?>">
							</div>
						</div>
					</div>
					<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
				</form>