<?php
	session_start();
	include"../koneksi.php";

	$npm = $_POST['npm'];
	$penarikan = reset_rupiah($_POST['penarikan']);

	$data = mysqli_query ($koneksi, "SELECT penarikan, setoran, sum(penarikan) as jumlah_penarikan, sum(setoran) as jumlah_setoran FROM tabungan WHERE npm = $npm");
	$row = mysqli_fetch_array ($data);
	$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] - $penarikan;

	$query = "INSERT INTO tabungan SET npm = '$npm', penarikan = '$penarikan', saldo = '$saldo'";

	mysqli_query($koneksi, $query)
	or die ("Gagal Perintah SQL".mysql_error());
	$_SESSION['pesan'] = 'Data berhasil di simpan...';
	header('location:tabungan.html');
?>

