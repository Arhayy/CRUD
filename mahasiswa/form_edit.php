<p>
	<h3>Edit Data Mahasiswa</h3>
</p>
<br>
<?php
	$no = 1;
	$data = mysqli_query ($koneksi, "SELECT * FROM mahasiswa WHERE npm = $_GET[id]");
	$row = mysqli_fetch_array ($data);
?>
<form role="form" method="post" action="update_mahasiswa.html">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="npm" value="<?php echo $row['npm'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input class="form-control" name="telepon"  value="<?php echo $row['telepon'] ; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="mahasiswa.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>