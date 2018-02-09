<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Data DP3</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#adddp3"><i class="material-icons">note_add</i> Tambah Data DP3</button>
		</div>
	</div>
	<hr/>
	<table class="table table-hover table-sm">
		<thead>
			<tr class="bg-app text-light">
				<td class="jrktbl text-center">No</td>
				<td class="jrktbl">Tahun</td>
				<td class="jrktbl">Kesetiaan</td>
				<td class="jrktbl">Prestasi</td>
				<td class="jrktbl">Tanggung Jawab</td>
				<td class="jrktbl">Kejujuran</td>
				<td class="jrktbl">Kerjasama</td>
				<td class="jrktbl">mengeahui</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php if ($dp3 == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($dp3 as $data): ?>
					<tr>
						<td class="jrktbl text-center"><?php echo $no; ?></td>
						<td class="jrktbl"><?php echo $data->tahun; ?></td>
						<td class="jrktbl"><?php echo $data->kesetiaan; ?></td>
						<td class="jrktbl"><?php echo $data->prestasi; ?></td>
						<td class="jrktbl"><?php echo $data->tanggung_jawab; ?></td>
						<td class="jrktbl"><?php echo $data->kejujuran; ?></td>
						<td class="jrktbl"><?php echo $data->kerjasama; ?></td>
						<td class="jrktbl"><?php echo $data->mengetahui; ?></td>

						<td class="jrktbl">
							<a href="#" class="text-danger">hapus</a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class="jrktbl text-center" colspan="8">Belum ada data hukuman</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >
<!-- Modal -->
<div class="modal fade" id="adddp3" tabindex="-1" role="dialog" aria-labelledby="adddp3" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="adddp3">Tambah Data Hukuman</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/pegawai/create_dp3/'.$hasil->id_pegawai) ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="tahun">TAHUN</label>
								<input type="text" class="form-control" id="tahun" name="tahun" placeholder="TAHUN" >
							</div>
							<div class="form-group">
								<label class="text-info" for="kesetiaan">KESETIAAN</label>
								<input type="text" class="form-control" id="kesetiaan" name="kesetiaan" placeholder="KESETIAAN" >
							</div>
							<div class="form-group">
								<label class="text-info" for="prestasi">PRESTASI</label>
								<input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="PRESTASI" >
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggung_jawab">TANGGUNG JAWAB</label>
								<input type="text" class="form-control" id="tanggung_jawab" name="tanggung_jawab" placeholder="TANGGUNG JAWAB">
							</div>
							<div class="form-group">
								<label class="text-info" for="ketaatan">KETAATAN</label>
								<input type="text" class="form-control" id="ketaatan" name="ketaatan" placeholder="KETAATAN">
							</div>
							<div class="form-group">
								<label class="text-info" for="kejujuran">KEJUJURAN</label>
								<input type="text" class="form-control" id="kejujuran" name="kejujuran" placeholder="KEJUJURAN">
							</div>
							<div class="form-group">
								<label class="text-info" for="kerjasama">KERJA SAMA</label>
								<input type="text" class="form-control" id="kerjasama" name="kerjasama" placeholder="KERJA SAMA">
							</div>
							<div class="form-group">
								<label class="text-info" for="prakarsa">PRAKARSA</label>
								<input type="text" class="form-control" id="prakarsa" name="prakarsa" placeholder="PRAKARSA">
							</div>
							<div class="form-group">
								<label class="text-info" for="kepemimpinan">KEPEMIMPINAN</label>
								<input type="text" class="form-control" id="kepemimpinan" name="kepemimpinan" placeholder="KEPEMIMPINAN">
							</div>
							<div class="form-group">
								<label class="text-info" for="rata_rata">RATA-RATA</label>
								<input type="text" class="form-control" id="rata_rata" name="rata_rata" placeholder="RATA-RATA">
							</div>
							<div class="form-group">
								<label class="text-info" for="atasan">ATASAN</label>
								<input type="text" class="form-control" id="atasan" name="atasan" placeholder="ATASAN">
							</div>
							<div class="form-group">
								<label class="text-info" for="penilai">PENILAI</label>
								<input type="text" class="form-control" id="penilai" name="penilai" placeholder="PENILAI">
							</div>
							<div class="form-group">
								<label class="text-info" for="mengetahui">MENGETAHUI</label>
								<input type="text" class="form-control" id="mengetahui" name="mengetahui" placeholder="MENGETAHUI">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>