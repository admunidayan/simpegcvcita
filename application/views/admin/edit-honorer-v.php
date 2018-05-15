<div style="margin-top: 14px; background-color: white;padding: 30px">
	<form action="<?php echo base_url('index.php/admin/honorer/update_honorer/'.$detail->id_honorer) ?>" method="post">
		<input type="hidden" name="id_honorer" value="<?php echo $detail->id_honorer ?>">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="form-group">
						<label class="text-info">NAMA</label>
						<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $detail->nama?>" placeholder="Nama">
					</div>
					<div class="form-group">
						<label class="text-info">ALAMAT</label>
						<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $detail->alamat ?>" placeholder="Alamat">
					</div>

					<div class="form-group">
						<label class="text-info">NOMOR HP</label>
						<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $detail->no_hp ?>" placeholder="Nomor HP">
					</div>
					<div class="form-group">
						<label class="text-info" for="id_lokasi_kerja">Unit Organisasi</label>
							<select class="form-control" name="id_lokasi_kerja">; ?></option>

						<?php foreach ($skpd as $dtskpd): ?>
								<option value="<?php echo $dtskpd->id_lokasi_kerja ?>"><?php echo $dtskpd->lokasi_kerja; ?></option>
							<?php endforeach ?>

							</select>
						</div>
						<div class="form-group">
							<label class="text-info" for="tmt_jabatan_rj">TMT JABATAN</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control" name="tmt_hr" placeholder="HH" value="<?php echo substr($detail->tmt,8,2)?>">
								</div>
								<div class="col">
									<input type="text" class="form-control" name="tmt_bln" placeholder="BB" value="<?php echo substr($detail->tmt,5,2)?>">
								</div>
								<div class="col">
									<input type="text" class="form-control" name="tmt_thn" placeholder="TTTT" value="<?php echo substr($detail->tmt,0,4)?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="text-info" for="nomor_sk">NOMOR SK</label>
							<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" value="<?php echo $detail->nomor_sk?>">
						</div>
					</div>
				</div>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
		</form>
	</div>