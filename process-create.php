<?php

include("config.php");

if(isset($_POST['create'])){

	$judul_pekerjaan = $_POST['judul_pekerjaan'];
	$nama_perusahaan = $_POST['perusahaan'];
	$lokasi = $_POST['lokasi'];

	$sql = "INSERT INTO pekerjaan (judul_pekerjaan, perusahaan, lokasi)
	VALUE ('$judul_pekerjaan', '$nama_perusahaan', '$lokasi')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>