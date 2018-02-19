<form action="<?php echo base_url('index.php/admin/pegawai/update_keluarga/'.$hasil->id_pegawai.'/'.$detail->id_data_keluarga) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-info" for="nama_anggota_keluarga">NAMA ANGGOTA KELUARGA</label>
				<input type="text" class="form-control" id="nama_anggota_keluarga" name="nama_anggota_keluarga" placeholder="NAMA LENGKAP TANPA GELAR" value="<?php echo $detail->nama_anggota_keluarga?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="tanggal_lahir">TANGGAL LAHIR</label>
				<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="TANGGAL LAHIR" value="<?php echo $detail->tanggal_lahir?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="status_kawin">STATUS DALAM KELUARGA</label>
				<select class="form-control" name="status_keluarga">
					<option value="suami">Suami</option>
					<option value="istri">Istri</option>
					<option value="anak">Anak</option>
				</select>
			</div>
			<div class="form-group">
				<label class="text-info" for="status_kawin">STATUS KAWIN</label>
				<input type="text" class="form-control" id="status_kawin" name="status_kawin" placeholder="STATUS KAWIN" value="<?php echo $detail->status_kawin?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="tanggal_nikah">TANGGAL NIKAH</label>
				<input type="text" class="form-control" id="tanggal_nikah" name="tanggal_nikah" placeholder="TANGGAL MENIKAH" value="<?php echo $detail->tanggal_nikah?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="uraian">URAIAN</label>
				<input type="text" class="form-control" id="uraian" name="uraian" placeholder="URAIAN" value="<?php echo $detail->uraian?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="tanggal_cerai_meninggal">TANGGAL CERAI MENINGGAL</label>
				<input type="text" class="form-control" id="tanggal_cerai_meninggal" name="tanggal_cerai_meninggal" placeholder="TANGGAL CERAI MENINGGAL" value="<?php echo $detail->tanggal_cerai_meninggal?>">
			</div>
		</div>
	</div>
	<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
</form>