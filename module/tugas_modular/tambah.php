<?php
	require('header_tambah.php');
?>
<table class="table table-striped table-sm">
			<td><td>
		</table>
	<div class="main">
		<form method="post" action="tambah.php" enctype="multipart/form-data">
			<div class="input">
				<label>Nama Barang</label>
				<input type="text" name="nama" />
			</div>
			<div class="input">
				<label>Kategori</label>
					<select name="kategori">
					<option value="Komputer">Komputer</option>
					<option value="Elektronik">Elektronik</option>
					<option value="Hand Phone">Hand Phone</option>
				</select>
			</div>
			<div class="input">
				<label>Harga Jual</label>
				<input type="text" name="harga_jual" />
			</div>
			<div class="input">
				<label>Harga Beli</label>
				<input type="text" name="harga_beli" />
			</div>
			<div class="input">
				<label>Stok</label>
				<input type="text" name="stok" />
			</div>
			<div class="input">
				<label>File Gambar</label>
				<input type="file" name="file_gambar" />
			</div>
			<div class="submit">
				<input type="submit" name="submit" value="Simpan" />
			</div>
		</form>
	</div>
	
<?php
	require('footer_tambah.php');
?>