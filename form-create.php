<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Judul Pekerjaan</td>
				<td><input type="text" name="judul_pekerjaan" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama Perusahaan</td>
				<td><input type="text" name="perusahaan" class="form-control"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" name="lokasi" class="form-control"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>