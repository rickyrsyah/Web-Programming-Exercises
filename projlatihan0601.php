<!DOCTYPE html>
<html>
<head>
<?php
if (isset($_GET['to']) && $_GET['to'] == "logout") {
	?>
	<script>history.pushState({},'',location.pathname)</script>
	<?php
	unset($_COOKIE['username']);
	setcookie('username', null, -1, '/');
}
if (isset($_POST['submit'])) {
	$users = array(
		array("username0", "Ricky R. Syahputra", "010101"),
		array("username1", "Rosihan Ari Yuana", "123456"),
		array("username2", "Dwi Amalia Fitriani", "654321"),
		array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
	);
	foreach ($users as $user) {
		if ($_POST['username'] == $user[0] && $_POST['password'] == $user[2]) {
			setcookie('username', $user[1], time()+10*24*3600, '/');
		}
	}
}
if (isset($_COOKIE['username'])) {
	if (!isset($_GET['to']) || $_GET['to'] == "page1" || $_GET['to'] == "page2" || $_GET['to'] == "page3") {
	?>
	<title>Selamat datang!</title>
	<script>history.pushState({},'',location.pathname)</script>
</head>
<body>
	<h1>Page <?=isset($_GET['to']) ? substr($_GET['to'], 4) : '1'?></h1>
	<p>Selamat datang <?=$_COOKIE['username']?>
	<h2>Menu Utama</h2>
	<p>
		<a href='?to=page1'>Page 1</a> | 
		<a href='?to=page2'>Page 2</a> | 
		<a href='?to=page3'>Page 3</a> | 
		<a href='?to=logout'>Logout</a>
	</p>
</body>
	<?php
	}
} else {
?>
	<title>Masuk</title>
	<script>history.pushState({},'',location.pathname)</script>
</head>
<body>
	<h1>Anda harus masuk terlebih dahulu</h1>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
		Nama pengguna: <input type="text" name="username">
		Kata sandi: <input type="password" name="password">
		<input type="submit" name="Kirimkan" value="submit">
	</form>
</body>
</html>
<?php } ?>