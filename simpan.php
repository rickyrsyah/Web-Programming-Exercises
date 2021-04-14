<?php 
$data = implode("|", array($_POST["nim"], $_POST["nama"], $_POST["tgllhr"], $_POST["tmptlhr"]));
$file = fopen("datamhs.dat", "a");
fwrite($file, "\n".$data);
fclose($file);

header("Refresh: 3; URL=tambahdata.html");
?>
<html>
	<p>Data berhasil ditambah. <br>
	Kembali dalam 3 detik.</p>
</html>