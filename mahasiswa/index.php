
<div style="height:55px;">
	<?php 
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
			echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
		}
		$_SESSION['pesan'] = '';
	?>
</div>
<p>
	<h2 style="margin-top: -50px;">Data Mahasiswa</h2>
	<a class="btn btn-primary" style="margin-bottom:2%;" href="form_mahasiswa.html">Tambah</a>
</p>
<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</tr>
	<?php
		$no = 1;
		$data = mysqli_query ($koneksi, "SELECT * FROM mahasiswa ORDER BY npm DESC");
		while ($row = mysqli_fetch_array ($data)) {
	?>
	<tr>
		<td>
			<?php echo $no++; ?>
		</td>
		<td>
			<?php echo $row['nama']; ?>
		</td>
		<td>
			<?php echo $row['telepon']; ?>
		</td>
		<td>
			<?php echo $row['alamat']; ?>
		</td>
		<td>
			<a href="edit_mahasiswa-<?php echo $row['npm']; ?>.html"><i class="btn btn-warning btn-xs">Edit</i></a>
			<a href="hapus_mahasiswa-<?php echo $row['npm']; ?>.html"><i class="btn btn-danger btn-xs">Hapus</i></a>
		</td>
	</tr>
	<?php } ?>
</table>