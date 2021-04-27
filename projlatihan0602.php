<form action="<?=$_SERVER['PHP_SELF']?>" method="post" accept-charset="utf-8">
<?php 
session_start();
if (isset($_POST['reset'])) {
	session_destroy();
	session_start();
}
if (isset($_SESSION['jawaban']) && isset($_POST['tebakan'])
	&& $_SESSION['jawaban'] == $_POST['tebakan']) {
	?>
		Selamat ya… Anda benar, saya telah memilih bilangan <?=$_SESSION['jawaban']?>.
	<input type="submit" name="reset" value="Ulangi Lagi!">
</form>
<?php
}
else {
	?>
	<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan
	Anda menebak ya!</p>
	<br>
	<?php
	if (!isset($_SESSION['jawaban'])) {
		$_SESSION['jawaban'] = rand(0, 100);
	} else if (isset($_POST['tebakan'])) { ?>
		<span>Waaah… masih salah ya, bilangan tebakan Anda terlalu 
			<?=$_POST['tebakan'] > $_SESSION['jawaban'] ? "tinggi" : "rendah"?>.
		</span></br>
	<?php } ?>
	Bilangan tebakan Anda <input type="number" name="tebakan">
	<input type="submit" name="submit" value="Kirim">
</form>
<?php } ?>