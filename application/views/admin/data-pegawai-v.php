<div style="margin-top: 14px; background-color: white;padding: 30px">
	<h4 class="text-secondary">Data Diri</h4><hr/>
	<div class="media">
		<?php if (!empty($hasil->foto)): ?>
			<img class="align-self-start mr-3 rounded-circle" src="<?php echo base_url('asset/img/users/'.$hasil->foto) ?>" alt="<?php echo $hasil->foto ?>">
		<?php else: ?>
			<img class="align-self-start mr-3 rounded-circle" src="<?php echo base_url('asset/img/users/avatar.png') ?>" alt="foto kosong">
		<?php endif ?>
		<div class="media-body">
			<h5 class="mt-0"><?php echo $hasil->nama_pegawai; ?></h5><span class="border border-success rounded" style="font-size: 12px;padding: 7px 5px;"><?php echo $hasil->nama_status; ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label class="text-info" for="nama_pegawai">NAMA LENGKAP</label>
				<input type="text" class="form-control" id="nip" name="nama_pegawai" placeholder="NAMA LENGKAP TANPA GELAR" value="<?php echo $hasil->nama_pegawai ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="nip">NIP</label>
				<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="<?php echo $hasil->nip ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="nip_lama">NIP LAMA</label>
				<input type="text" class="form-control" id="nip_lama" name="nip_lama" placeholder="NIP LAMA" value="<?php echo $hasil->nip_lama ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="no_kartu_pegawai">NOMOR KARTU PEGAWAI</label>
				<input type="text" class="form-control" id="no_kartu_pegawai" name="no_kartu_pegawai" placeholder="NOMOR KARTU PEGAWAI" value="<?php echo $hasil->no_kartu_pegawai ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="no_npwp">NPWP</label>
				<input type="text" class="form-control" id="no_npwp" name="no_npwp" placeholder="NPWP" value="<?php echo $hasil->no_npwp ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="kartu_askes_pegawai">NOMOR KARTU ASKES PEGAWAI</label>
				<input type="text" class="form-control" id="kartu_askes_pegawai" name="kartu_askes_pegawai" placeholder="NOMOR KARTU ASKES PEGAWAI" value="<?php echo $hasil->kartu_askes_pegawai ?>">
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label class="text-info" for="tmpt_lahir">TEMPAT LAHIR</label>
				<input type="text" class="form-control" id="tmpt_lahir" name="tempat_lahir" placeholder="KOTA KELAHIRAN/TEMPAT LAHIR" value="<?php echo $hasil->tempat_lahir ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="tanggal_lahir">TANGGAL LAHIR</label>
				<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="12-01-1993" value="<?php echo $hasil->tanggal_lahir ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="jenis_kelamin">JENIS KELAMIN</label>
				<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="GENDER" value="<?php echo $hasil->jenis_kelamin ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="agama">AGAMA</label>
				<input type="text" class="form-control" id="agama" name="agama" placeholder="AGAMA" value="<?php echo $hasil->agama ?>">
			</div>
			<div class="form-group">
				<label class="text-info" for="status_pegawai">STATUS PEGAWAI</label>
				<select class="form-control" name="status_pegawai">
					<option value="<?php echo $hasil->id_status_pegawai ?>"><?php echo $hasil->nama_status; ?></option>
					<?php foreach ($status as $data): ?>
						<option value="<?php echo $data->id_status_pegawai ?>"><?php echo $data->nama_status; ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label class="text-info" for="tanggal_pengangkatan_cpns">TANGGAL PEMANGKATAN CPNS</label>
				<input type="text" class="form-control" id="tanggal_pengangkatan_cpns" name="tanggal_pengangkatan_cpns" placeholder="TANGGAL PEMANGKATAN CPNS" value="<?php echo $hasil->tanggal_pengangkatan_cpns ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label class="text-info" for="alamat">ALAMAT PEGAWAI</label>
				<textarea id="alamat" name="alamat" class="form-control"><?php echo $hasil->alamat; ?></textarea>
			</div>
		</div>
	</div>
</div >