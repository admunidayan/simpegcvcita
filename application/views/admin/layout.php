<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Satuan Kerja</title>	
</head>
<body>
	
	<?php
	$table = '
	<table border="1">
	<tr>
	<th>No.</th>
	<th>Nama Satuan Kerja</th>
	<th>Parent Unit</th>
	</tr>';

	$no = 1;
	foreach ($data as $d) {
		$table .= '
		<tr>
		<td>'.$no++.'</td>
		<td>'.$d->nama_satuan_kerja.'</td>
		<td>'.$d->parent_unit.'</td>
		</tr>';
	}
	$table .='
	</table>';

	echo $table;
	?>
<a href="<?php echo base_url('index.php/admin/export/dataexcel') ?>" class="btn btn-success">Export menjadi file excel</a>
</body>
</html>