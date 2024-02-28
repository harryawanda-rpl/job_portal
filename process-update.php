<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_pekerjaan'];
	$judul_pekerjaan = $_POST['judul_pekerjaan'];
	$nama_perusahaan = $_POST['perusahaan'];
	$lokasi = $_POST['lokasi'];

	$sql = "UPDATE pekerjaan SET judul_pekerjaan='$judul_pekerjaan', perusahaan='$nama_perusahaan',
	lokasi='$lokasi' WHERE id_pekerjaan=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>