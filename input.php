<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Genre film</td>
		<td>
			<input type="checkbox" name="ckb[]" value="Horror">Horror <br>
			<input type="checkbox" name="ckb[]" value="Action">Action <br>
			<input type="checkbox" name="ckb[]" value="Anime">Anime  <br>
			<input type="checkbox" name="ckb[]" value="Thriller">Thriller <br>
			<input type="checkbox" name="ckb[]" value="Animasi">Animasi <br>
		</td>
	</tr>
	<tr>
		<td>Wisata tujuan</td>
		<td>
		<input type="checkbox" name="ws[]" value="Bali">Bali <br>
		<input type="checkbox" name="ws[]" value="Raja ampat">Raja ampat <br>
		<input type="checkbox" name="ws[]" value="Pulau Derawan">Pulau Derawan <br>
		<input type="checkbox" name="ws[]" value="Bangka belitung">Bangka belitung <br>
		<input type="checkbox" name="ws[]" value="Labuan bajo">Labuan bajo <br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
