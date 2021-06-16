<p>
	<h3>Penarikan Tabungan</h3>
</p>
<div style="height:55px;">
	<?php 
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
			echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
		}
		$_SESSION['pesan'] = '';
	?>
</div>
<form method="post" action="input_penarikan.html" class="form-horizontal" >
	<div class="box-body">
		<div class="form-group">
			<label class="col-sm-2 control-label">NPM</label>
			<div class="col-sm-9">
				<div class="input-group">
					<input type="text" class="form-control" id="npm" name="npm" placeholder="NPM" readonly>
					<span class="input-group-btn">
						<button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#modal">Browse</button>
					</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nama Mahasiswa</label>
			<div class="col-sm-9">
				<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Mahasiswa" readonly>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Jumlah Penarikan</label>
			<div class="col-sm-9">
				<input name="penarikan" type="text" class="form-control" placeholder="Masukkan Jumlah" onkeyup="convertToRupiah(this);">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"></label>
			<div class="col-sm-9">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<a href="tabungan.html" class="btn btn-default" style="margin-right:1%;">Kembali</a>
			</div>
		</div>
	</div>
</form>
<div id="modal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form role="form" id="form-tambah" method="post" action="input.php">
				<div class="modal-header">
					<center>
						<h3 class="modal-title">Pilih Mahasiswa</h3>
					</center>
				</div>
				<div class="modal-body">
				<table width="100%" class="table table-hover"  id="example">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Telepon</th>
							<th>Alamat</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$data = mysqli_query ($koneksi, "SELECT * FROM mahasiswa ORDER BY npm DESC");
							while ($row = mysqli_fetch_array ($data)) {
						?>
							<tr id="mahasiswa" data-npm="<?php echo $row['npm']; ?>" data-nama="<?php echo $row['nama']; ?>">
								<td>
									<?php echo $no++; ?>
								</td>
								<td>
									<?php echo $row['nama']; ?>
								</td>
								<td>
									<?php echo $row['jenis_kelamin']; ?>
								</td>
								<td>
									<?php echo $row['telepon']; ?>
								</td>
								<td>
									<?php echo $row['alamat']; ?>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
					</table>
					</div>	
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					</div>
				</form>
				</div>
			</div>
		</div>
