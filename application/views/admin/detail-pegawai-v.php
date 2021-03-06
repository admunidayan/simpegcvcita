<div style="margin-top: 14px; padding: 30px">
	<div class="row">
		<div class="col-md-3" style="background-color: white;padding-top: 14px">
			<h5 class="text-secondary"></h5>
			<div class="submenu">
				<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail/'.$hasil->id_pegawai); ?>"><div class="row">
					<div class="col-md-2 text-center text-secondary"><i class="fa fa-user"></i></div>
					<div class="col-md-10">Data Utama</div>
				</div>
			</div></a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_keluarga/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-users"></i></div>

						<div class="col-md-10">Keluarga</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_rgolongan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-tag"></i></div>
						<div class="col-md-10">Riwayat Golongan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_rjabatan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-tags"></i></div>
						<div class="col-md-10">Riwayat Jabatan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_pendidikan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-institution"></i></div>
						<div class="col-md-10">Pendidikan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_pelatihan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-file"></i></div>
						<div class="col-md-10">Diklat/Kursus</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_penghargaan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-trophy"></i></div>
						<div class="col-md-10">Penghargaan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_seminar/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-newspaper-o"></i></div>
						<div class="col-md-10">Seminar</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_organisasi/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-book"></i></div>
						<div class="col-md-10">Unit Organisasi</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_hukuman/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-send"></i></div>
						<div class="col-md-10">Disiplin</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_dp3/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="fa fa-shield"></i></div>
						<div class="col-md-10">SKP</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-9">
			<div class="media">
				<?php if (!empty($hasil->foto)): ?>
					<img id="preview" class="align-self-center mr-3 rounded-circle" style="width: 100px" src="<?php echo base_url('asset/img/pegawai/'.$hasil->foto) ?>" alt="<?php echo $hasil->foto ?>">

				<?php else: ?>
					<img id="preview" class="align-self-center mr-3 rounded-circle" style="width: 100px" src="<?php echo base_url('asset/img/pegawai/avatar.png') ?>" alt="foto kosong">

				<?php endif ?>
				<div class="media-body">
					<h5 class="mt-0"><?php echo $hasil->nama_pegawai; ?></h5>
					<span class="text-secondary">NIP : <?php echo $hasil->nip; ?></span><br/>
					<form action="<?php echo base_url('index.php/admin/pegawai/update_foto_pegawai') ?>" en method="post" enctype="multipart/form-data">
						<input type="file" name="fotop" id="uploadBtn"></br>
						<input type="hidden" name="id_pegawai" value="<?php echo $hasil->id_pegawai;?>">
						<div class="row">
							<div class="col-md-6">
								<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button><span class="border border-success rounded" style="font-size: 12px;padding: 2px 5px; margin-top: 12px; "><?php echo $hasil->nama_status; ?></span>
							</div>
						</div>
					</form>
				</div>
				<div class="media-right">
				<a href="<?php echo base_url('index.php/admin/pegawai/cetak_data_pegawai/'.$hasil->id_pegawai) ?>" target="_blank" class="btn btn-success">Cetak Data Pegawai</a>
				</div>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php $this->view($bagian); ?>
		</div>
	</div>
</div >
<script type="text/javascript">
	document.getElementById("uploadBtn").onchange = function () {
		document.getElementById("uploadFile").value = this.value;
	};
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#preview').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#uploadBtn").change(function(){
		readURL(this);
	});
</script>