<?php
	session_start();
	include"../koneksi.php";

	$id = $_POST['npm'];
	$setoran = reset_rupiah($_POST['setoran']);

	$data = mysqli_query ($koneksi, "SELECT penarikan, setoran, sum(penarikan) as jumlah_penarikan, sum(setoran) as jumlah_setoran FROM tabungan WHERE npm = $id");
	$row = mysqli_fetch_array ($data);
	$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] + $setoran;

	$query = "INSERT INTO tabungan SET npm = '$id', setoran = '$setoran', saldo = '$saldo'";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	$_SESSION['pesan'] = 'Data berhasil di simpan...';
	header('location:tabungan.html');
?>

