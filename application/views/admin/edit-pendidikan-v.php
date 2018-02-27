<form action="<?php echo base_url('index.php/admin/pegawai/update_pendidikan/'.$hasil->id_pegawai.'/'.$detail->id_pendidikan) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="form-group">
					<label class="text-info" for="tingkat_pendidikan">TINGKAT PENDIDIKAN</label>
					<input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" placeholder="TINGKAT PENDIDIKAN" value="<?php echo $detail->tingkat_pendidikan?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="jurusan">JURUSAN</label>
					<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="JURUSAN" value="<?php echo $detail->jurusan?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="uraian">URAIAN</label>
					<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" value="<?php echo $detail->uraian?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="teknik_non_teknik">TEKNIK NON TEKNIK</label>
					<input type="text" class="form-control" id="teknik_non_teknik" name="teknik_non_teknik" placeholder="TEKNIK NON TEKNIK" value="<?php echo $detail->teknik_non_teknik?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="sekolah">SEKOLAH</label>
					<input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="SEKOLAH" value="<?php echo $detail->sekolah?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tempat_sekolah">TEMPAT SEKOLAH</label>
					<input type="text" class="form-control" id="tempat_sekolah" name="tempat_sekolah" placeholder="TEMPAT SEKOLAH" value="<?php echo $detail->tempat_sekolah?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="nomor_sttb">NOMOR STTB</label>
					<input type="text" class="form-control" id="nomor_sttb" name="nomor_sttb" placeholder="NOMOR STTB" value="<?php echo $detail->nomor_sttb?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_sttb">TANGGAL STTB</label>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" id="tanggal_sttb" name="tanggal_sttb_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_sttb,8,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_sttb" name="tanggal_sttb_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_sttb,5,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_sttb" name="tanggal_sttb_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_sttb,0,4)?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="text-info" for="tanggal_lulus">TANGGAL LULUS</label>
					<div class="row">
						<div class="col">
							<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_hr" placeholder="HH" value="<?php echo substr($detail->tanggal_lulus,8,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_bln" placeholder="BB" value="<?php echo substr($detail->tanggal_lulus,5,2)?>">
						</div>
						<div class="col">
							<input type="text" class="form-control" id="tanggal_lulus" name="tanggal_lulus_thn" placeholder="TTTT" value="<?php echo substr($detail->tanggal_lulus,0,4)?>">
						</div>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
	</form>