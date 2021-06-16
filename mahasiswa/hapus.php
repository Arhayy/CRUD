<?php
	session_start();
	$query = "DELETE FROM mahasiswa WHERE npm ='$_GET[id]'";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	$_SESSION['pesan'] = 'Hapus Data Berhasil...';
	header('location:mahasiswa.html');
?>

