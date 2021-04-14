<?php
$path = "datatabung.dat";
$file = fopen($path, "r");
$rows = explode("\n", fread($file, filesize($path)));
for ($i=0; $i < count($rows); $i++) { 
	$rows[$i] = explode(",", $rows[$i]);
}
fclose($file);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DATA UKURAN TABUNG</title>
</head>
<body>
	<h2>DATA UKURAN TABUNG</h2>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>NAMA TABUNG</th>
			<th>DIAMETER</th>
			<th>TINGGI</th>
			<th>LUAS</th>
		</tr>
		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?=$row[0]?></td>
				<td><?=$row[1]?></td>
				<td><?=$row[2]?></td>
				<td><a href="hitungluas.php?<?=sprintf("n=%s&d=%s&t=%s", $row[0], $row[1], $row[2])?>">view</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>