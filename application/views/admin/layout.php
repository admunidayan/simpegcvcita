<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="col-md-12">
		<div class="media-body">
			<h4>Laporan Pegawai</h4>
		</div>
	</div>
	<hr/>
	<table class="table table-bordered table-hover table-sm">
		<?php
		$table = '				

		<tr class="table-success">
		<th>No.</th>
		<th>Nama Satuan Kerja</th>
		<th>Parent Unit</th>
		<th></th>
		</tr>';


		$no = 1;
		foreach ($datas as $d) {
			$table .= '
			<tr>
			<td class="jrktbl">'.$no++.'</td>
			<td class="jrktbl">'.$d->nama_satuan_kerja.'</td>
			<td class="jrktbl">'.$d->parent_unit.'</td>
			<td class="jrktbl"><a href="'.base_url('index.php/admin/export/ex_by_skpd/').'/'.$d->id_satuan_kerja.'" style="color:green">Export<a/></td>
			</tr>';
		}
		$table .='
		</table>';

		echo $table;
		?>
		<a href="<?php echo base_url('index.php/admin/export/dataexcel') ?>" class="btn btn-success">Export menjadi file excel</a> | <a href="<?php echo base_url('index.php/admin/export/dataexcel') ?>" class="btn btn-success">Export Semua Data Pegawai</a>
	</table>
</div>