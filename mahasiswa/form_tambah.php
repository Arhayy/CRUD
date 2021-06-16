<p>
	<h3>Menambahkan Data Mahasiswa</h3>
</p>
<br>
<form role="form" method="post" action="input_mahasiswa.html">
	<div class="box-body">
		<div class="form-group">
			<label>Nama</label>
			<input class="form-control" name="nama" autofocus>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<div class="radio">
				<label>
					<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</label>
			</div>
		</div>
		<div class="form-group">
			<label>Telepon</label>
			<input class="form-control" name="telepon">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" class="form-control" rows="3"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Simpan</button> 
			<a href="mahasiswa.html" class="btn btn-success" style="margin-right:1%;">Batal</a>
		</div>
	</div>
</form>