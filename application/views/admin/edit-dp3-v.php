<div style="margin-top: 14px; background-color: white;padding: 30px">
<form action="<?php echo base_url('index.php/admin/pegawai/update_dp3/'.$hasil->id_pegawai.'/'.$detail->id_dp3) ?>" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-info" for="tahun">TAHUN</label>
				<input type="text" class="form-control" id="tahun" name="tahun" placeholder="TAHUN" value="<?php echo $detail->tahun?>">
			</div>
			
			<div class="form-group">
				<label class="text-info" for="rata_rata">RATA-RATA</label>
				<input type="text" class="form-control" id="rata_rata" name="rata_rata" placeholder="RATA-RATA" value="<?php echo $detail->rata_rata?>">
			</div>
				<div class="form-group">
					<label class="text-info" for="pejabat_penilai">PEJABAT PENILAI</label>
					<input type="text" class="form-control" id="pejabat_penilai" name="pejabat_penilai" placeholder="PEJABAT PENILAI"  value="<?php echo $detail->pejabat_penilai?>">
				</div>
				<div class="form-group">
					<label class="text-info" for="atasan_pejabat_penilai">ATASAN PEJABAT PENILAI</label>
					<input type="text" class="form-control" id="atasan_pejabat_penilai" name="atasan_pejabat_penilai" placeholder="ATASAN PEJABAT PENILAI"  value="<?php echo $detail->atasan_pejabat_penilai?>">
				</div>
		
		</div>
	</div>
	<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan data</button>
</form>
</div>