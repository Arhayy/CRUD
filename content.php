<?php
	error_reporting(0);
	if ($_GET[module]=='mahasiswa')
	{
		include"mahasiswa/index.php";
	}
	elseif ($_GET[module]=='beranda')
	{
		include"beranda.php";
	}

	elseif ($_GET[module]=='form_mahasiswa')
	{
		include"mahasiswa/form_tambah.php";
	}
	elseif ($_GET[module]=='input_mahasiswa'){
		include"mahasiswa/input.php";
	}

	elseif ($_GET[module]=='edit_mahasiswa'){
		include"mahasiswa/form_edit.php";
	}

	elseif ($_GET[module]=='update_mahasiswa'){
		include"mahasiswa/update.php";
	}

	elseif ($_GET[module]=='hapus_mahasiswa'){
		include"mahasiswa/hapus.php";
	}

	elseif ($_GET[module]=='tabungan'){
		include"tabungan/tabungan.php";
	}

	elseif ($_GET[module]=='penarikan'){
		include"tabungan/penarikan.php";
	}

	elseif ($_GET[module]=='input_penarikan'){
		include"tabungan/input_penarikan.php";
	}

	elseif ($_GET[module]=='setoran'){
		include"tabungan/setoran.php";
	}

	elseif ($_GET[module]=='input_setoran'){
		include"tabungan/input_setoran.php";
	}

	elseif ($_GET[module]=='detail'){
		include"tabungan/detail.php";
	}
?>