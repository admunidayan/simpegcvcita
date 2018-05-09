<div style="margin-top: 14px; background-color: white;padding: 30px">
<form action="<?php echo base_url('index.php/admin/pegawai/update_penghargaan/'.$hasil->id_pegawai.'/'.$detail->id_penghargaan) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="form-group">
						<label class="text-info" for="">JENIS PENGHARGAAN</label>
						<input type="text" class="form-control" id="jenis_penghargaan" name="jenis_penghargaan" placeholder="jenis_penghargaan" value="<?php echo $detail->jenis_penghargaan?>">
					</div>
					<div class="form-group">
						<label class="text-info" for="no_keputusan">NOMOR KEPUTUSAN</label>
						<input type="text" class="form-control" id="no_keputusan" name="no_keputusan" placeholder="no_keputusan" value="<?php echo $detail->no_keputusan?>">
					</div>
					<div class="form-group">
						<label for="tanggal">TANGGAL</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" id="tanggal" name="tanggal_hr" placeholder="HH" value="<?php echo substr($detail->tanggal,0,2)?>">
							</div>
							<div class="col">
								<input type="text" class="form-control" id="tanggal" name="tanggal_bln" placeholder="BB" value="<?php echo substr($detail->tanggal,3,2)?>">
							</div>
					   </div>
					</div>
					<div class="form-group">
						<label class="text-info" for="no_keputusan">TAHUN</label>
						<input type="text" class="form-control" id="tahun" name="tahun" placeholder="tahun" value="<?php echo $detail->tahun?>">
					</div>
				</div>
			</div>
			<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
		</form>
	</div>