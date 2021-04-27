<?php
session_start();
include 'cek.php';
?>
<h1>Page 1</h1>
<!-- menampilkan nama lengkap usernya -->
<p>Selamat datang <?=$_SESSION['namauser']?>
<h2>Menu Utama</h2>
<p>
	<a href='page1.php'>Page 1</a> | 
	<a href='page2.php'>Page 2</a> | 
	<a href='page3.php'>Page 3</a> | 
	<a href='logout.php'>Logout</a>
</p>