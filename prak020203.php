<?php
$baris = 4;
$kolom = 5;
echo "<table border='1'>";
for($i =0; $i < $baris; $i++){
	echo "<tr>";
	for ($j = 0; $j < $kolom; $j++){
		$angka = $i*5+$j+1;
		echo "<td style='color: ".($angka%2 ? "red" : "white")."; background-color: ".($angka%2 ? "white" : "red")."'>".$angka."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>