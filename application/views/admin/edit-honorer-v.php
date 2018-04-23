<div style="margin-top: 14px; background-color: white;padding: 30px">
	<form action="<?php echo base_url('index.php/admin/honorer/update_honorer/'.$data->id_honorer) ?>" method="post">
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
						<label class="text-info">Nomor SK</label>
 						<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" value="<?php echo $detail->nomor_sk ?>" placeholder="Nomor SK">
					</div>
					<div class="form-group">
						<label class="text-info">ESELON</label>
						<select class="form-control" name="id_eselon">
							<option value="<?php echo $detail->id_eselon ?>">--<?php echo @$this->Admin_m->detail_data_order('master_eselon','id_eselon',$detail->id_eselon)->nama_eselon; ?>--</option>
							<?php foreach ($eselon as $data): ?>
								<option value="<?php echo $data->id_eselon ?>"><?php echo $data->nama_eselon; ?></option>
							<?php endforeach ?>
						</select>
					</div>

					<div class="form-group">
							<label class="text-info" for="id_lokasi_kerja">Unit Organisasi</label>
								<select class="form-control" name="id_lokasi_kerja">
							<?php foreach ($skpd as $dtskpd): ?>
								<option value="<?php echo $dtskpd->id_lokasi_kerja ?>">--<?php echo @$this->Admin_m->detail_data_order('master_lokasi_kerja','id_lokasi_kerja',$detail->id_lokasi_kerja)->lokasi_kerja; ?.--</option>

							<?php foreach ($skpd as $dtskpd): ?>
								<option value="<?php echo $dtskpd->id_lokasi_kerja ?>"><?php echo $dtskpd->lokasi_kerja; ?></option>	
							<?php endforeach ?>
							
						</select>
					</div>
					<div class="form-group">
						<label class="text-info" for="tmt_jabatan_rj">TMT JABATAN</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" id="tmt_jabatan_rj" name="tmt_jabatan_rj_hr" placeholder="HH" value="<?php echo substr($detail->tmt_jabatan_rj,8,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tmt_jabatan_rj" name="tmt_jabatan_rj_bln" placeholder="BB" value="<?php echo substr($detail->tmt_jabatan_rj,5,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tmt_jabatan_rj" name="tmt_jabatan_rj_thn" placeholder="TTTT" value="<?php echo substr($detail->tmt_jabatan_rj,0,4)?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="text-info" for="tanggal_sk_rj">TANGGAL SK</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" id="tanggal_sk_rj" name="tanggal_sk_rj_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_sk_rj,8,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tanggal_sk_rj" name="tanggal_sk_rj_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_sk_rj,5,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tanggal_sk_rj" name="tanggal_sk_rj_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_sk_rj,0,4)?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="text-info" for="tmt_pelantikan_rj">TMT PELANTIKAN</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" id="tmt_pelantikan_rj" name="tmt_pelantikan_rj_hr" placeholder="HH" value="<?php echo substr($detail->tmt_pelantikan_rj,8,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tmt_pelantikan_rj" name="tmt_pelantikan_rj_bln" placeholder="BB" value="<?php echo substr($detail->tmt_pelantikan_rj,5,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tmt_pelantikan_rj" name="tmt_pelantikan_rj_thn" placeholder="TTTT" value="<?php echo substr($detail->tmt_pelantikan_rj,0,4)?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="text-info" for="nomor_sk">NOMOR SK</label>
						<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" value="<?php echo $detail->nomor_sk?>">
					</div>
				</div>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
		</form>
	</div>