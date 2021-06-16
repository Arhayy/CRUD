<div style="height:55px;">
	<?php 
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
			echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
		}
		$_SESSION['pesan'] = '';
	?>
</div>
<p>
	<h2 style="margin-top: -50px;">Data Tabungan Mahasiswa</h2>
	<a class="btn btn-success" style="margin-bottom:2%;" href="setoran.html" >Setoran</a>
	<a class="btn btn-primary" style="margin-bottom:2%;margin-right:2%;" href="penarikan.html" >Penarikan</a>
</p>
<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Saldo</th>
		<th>Opsi</th>
	</tr>
	<?php
		$no = 1;
		$data = mysqli_query ($koneksi, "SELECT tabungan.id_tabungan,
			tabungan.npm,
			tabungan.setoran,
			tabungan.penarikan,
			tabungan.saldo,
			sum(tabungan.penarikan) as jumlah_penarikan,
			sum(tabungan.setoran) as jumlah_setoran,

			mahasiswa.npm,
			mahasiswa.nama,
			mahasiswa.jenis_kelamin,
			mahasiswa.alamat,
			mahasiswa.telepon

			FROM 
			mahasiswa, tabungan
			WHERE
			tabungan.npm = mahasiswa.npm
			GROUP BY mahasiswa.nama DESC");

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
			<?php echo $row['alamat']; ?>
		</td>
		<td>
			<?php echo format_rupiah($row['jumlah_setoran'] - $row['jumlah_penarikan']); ?>
		</td>
		<td>
			<a href="detail-<?php echo $row['npm'] ; ?>.html" class="btn btn-warning btn-xs">Detail</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>