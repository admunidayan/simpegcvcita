<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="row">
		<div class="col-md-3">
			<h5 class="text-secondary">Navigator</h5>
			<div class="submenu">
				<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail/'.$hasil->id_pegawai); ?>"><div class="row">
					<div class="col-md-2 text-center text-secondary"><i class="material-icons">fingerprint</i> </div>
					<div class="col-md-10">Data Diri</div>
				</div>
			</div></a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_keluarga/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">face</i> </div>
						<div class="col-md-10">Keluarga</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_rpangkat/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">trending_up</i> </div>
						<div class="col-md-10">Riwayat Pangkat</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_rjabatan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">perm_identity</i> </div>
						<div class="col-md-10">Riwayat Jabatan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_pendidikan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">school</i> </div>
						<div class="col-md-10">Pendidikan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_pelatihan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">work</i> </div>
						<div class="col-md-10">Pelatihan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_penghargaan/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">stars</i> </div>
						<div class="col-md-10">Penghargaan</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_seminar/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">library_books</i> </div>
						<div class="col-md-10">Seminar</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_organisasi/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">speaker_group</i> </div>
						<div class="col-md-10">Organisasi</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_gaji_pokok/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">monetization_on</i> </div>
						<div class="col-md-10">Gaji Pokok</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_hukuman/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">change_history</i> </div>
						<div class="col-md-10">Hukuman</div>
					</div>
				</div>
			</a>
			<a class="text-dark" href="<?php echo base_url('index.php/admin/pegawai/detail_dp3/'.$hasil->id_pegawai); ?>">
				<div class="submenu">
					<div class="row">
						<div class="col-md-2 text-center text-secondary"><i class="material-icons">assignment_turned_in</i> </div>
						<div class="col-md-10">DP3</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-9">
			<div class="media">
				<?php if (!empty($hasil->foto)): ?>
					<img class="align-self-center mr-3 rounded-circle" style="width: 100px" src="<?php echo base_url('asset/img/users/'.$hasil->foto) ?>" alt="<?php echo $hasil->foto ?>">
				<?php else: ?>
					<img class="align-self-center mr-3 rounded-circle" style="width: 100px" src="<?php echo base_url('asset/img/users/avatar.png') ?>" alt="foto kosong">
				<?php endif ?>
				<div class="media-body">
					<h5 class="mt-0"><?php echo $hasil->nama_pegawai; ?></h5>
					<span class="text-secondary">NIP : <?php echo $hasil->nip; ?></span><br/>
					<span class="border border-success rounded" style="font-size: 12px;padding: 7px 5px;"><?php echo $hasil->nama_status; ?></span>
				</div>
			</div>
			<?php $this->view($bagian); ?>
		</div>
	</div>
</div >