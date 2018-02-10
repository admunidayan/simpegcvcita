<form action="<?php echo base_url('index.php/admin/pegawai/update_gaji_pokok/'.$hasil->id_pegawai.'/'.$detail->id_gaji_pokok) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="nomor_sk">NOMOR SK</label>
								<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" value="<?php echo $detail->nomor_sk?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
								<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk" placeholder="TANGGAL SK" value="<?php echo $detail->tanggal_sk?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="dasar_perubahan">DASAR PERUBAHAN</label>
								<input type="text" class="form-control" id="dasar_perubahan" name="dasar_perubahan" placeholder="DASAR PERUBAHAN" value="<?php echo $detail->dasar_perubahan?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="gaji_pokok">GAJI POKOK</label>
								<input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="GAJI POKOK" value="<?php echo $detail->gaji_pokok?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
								<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="TANGGAL" value="<?php echo $detail->tanggal_mulai?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
								<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="TANGGAL SELESAI" value="<?php echo $detail->tanggal_selesai?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="masa_kerja">MASA KERJA</label>
								<input type="text" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="MASA KERJA" value="<?php echo $detail->masa_kerja?>">
							</div>
							<div class="form-group">
								<label class="text-info" for="pejabat_menetapkan">PEJABAT MENETAPKAN</label>
								<input type="text" class="form-control" id="pejabat_menetapkan" name="pejabat_menetapkan" placeholder="PEJABAT MENETAPKAN" value="<?php echo $detail->pejabat_menetapkan?>">
							</div>
						</div>
					</div>
					<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
				</form>