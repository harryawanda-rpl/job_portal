<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM pekerjaan WHERE id_pekerjaan=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_pekerjaan" value="<?php echo $data['id_pekerjaan'] ?>" /></td>
			</tr>
			<tr>
				<td>Judul Pekerjaan</td>
				<td><input type="text" name="judul_pekerjaan" value="<?php echo $data['judul_pekerjaan'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama Perusahaan</td>
				<td><input type="text" name="perusahaan" value="<?php echo $data['perusahaan'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" name="lokasi" value="<?php echo $data['lokasi'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>