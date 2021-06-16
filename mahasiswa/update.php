<?php
	session_start();
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];

	$query = "UPDATE mahasiswa SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', telepon = '$telepon' WHERE npm = '$npm'";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	$_SESSION['pesan'] = 'Update data berhasil...';
	header('location:mahasiswa.html');
?>

