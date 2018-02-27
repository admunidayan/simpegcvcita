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
					<div class="row">
					<div class="col">
						<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon_hr" placeholder="HH" value="<?php echo substr($detail->tmt_eselon,8,2)?>">
					</div>
					<div class="col">
						<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon_bln" placeholder="BB" value="<?php echo substr($detail->tmt_eselon,5,2)?>">
					</div>
					<div class="col">
						<input type="text" class="form-control" id="tmt_eselon" name="tmt_eselon_thn" placeholder="TTTT" value="<?php echo substr($detail->tmt_eselon,0,4)?>">
					</div>
				</div>
				</div>
				<div class="form-group">
					<label class="text-info" for="nomor_sk">NOMOR SK</label>
					<input type="text" class="form-control" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" value="<?php echo $detail->nomor_sk?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_sk,8,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_sk,5,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_sk" name="tanggal_sk_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_sk,0,4)?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_mulai,8,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_mulai,5,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_mulai,0,4)?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_selesai,8,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_selesai,5,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_selesai,0,4)?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="text-info" for="lokasi">LOKASI</label>
					<input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI" value="<?php echo $detail->lokasi?>">
				</div>
			</div>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
	</form>