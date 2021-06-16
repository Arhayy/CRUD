<div style="height:55px;">
	<?php 
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
			echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
		}
		$_SESSION['pesan'] = '';
	?>
</div>
<div class="text-center">
  <h1>Hello, Administrator</h1>
  <p>Selamat datang di aplikasi berbasis website Tabungan Mahasiswa STMIK Jakarta STI&K.</p><br><br><br><br><br><br>
</div>