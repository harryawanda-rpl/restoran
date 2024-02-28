<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_menu = $_POST['nama_menu'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

	$sql = "INSERT INTO menu (nama_menu, harga, deskripsi)
	VALUE ('$nama_menu', '$harga', '$deskripsi')";

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