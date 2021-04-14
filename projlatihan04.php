<?php
$path = "datamhs.dat";
$file = fopen($path, "r");
$rows = explode("\n", fread($file, filesize($path)));
for ($i=0; $i < count($rows); $i++) { 
	$rows[$i] = explode("|", $rows[$i]);
}
fclose($file)
?>
<html>
	<head>
		<title>Project Latihan Praktikum 04</title>
	</head>
	<body>
		<h2>DATA MAHASISWA</h2>
		<p>Jumlah Data : <?= count($rows); ?></p>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama Mhs</th>
				<th>Tanggal Lahir</th>
				<th>Tempat Lahir</th>
				<th>Usia (Thn)</th>
			</tr>
			<?php for ($i=0; $i < count($rows); $i++) { ?>
				<tr>
					<td><?= $i+1 ?></td>
					<td><?= $rows[$i][0]?></td>
					<td><?= $rows[$i][1]?></td>
					<td><?= $rows[$i][2]?></td>
					<td><?= $rows[$i][3]?></td>
					<td><?= (new Datetime())->diff(new Datetime($rows[$i][2]))->y ?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>