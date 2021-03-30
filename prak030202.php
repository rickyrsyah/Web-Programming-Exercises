<?php 
function hitungDenda($tglHarusKembali, $tglKembali) {
	$denda = 3000;
	$thk = new DateTime($tglHarusKembali);
	$tk = new DateTime($tglKembali);
	//enable or uncomment this line: extension=intl
	$fmt = new NumberFormatter('id', NumberFormatter::DECIMAL);

	$biayaDenda = max(0, ($tk->getTimestamp()-$thk->getTimestamp())/(60*60*24)*$denda);
	return $fmt->format($biayaDenda);
}

echo "Besarnya denda adalah: Rp".hitungDenda("2021-01-03", "2021-01-05");
?>