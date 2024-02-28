<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_menu'];
	$nama_menu = $_POST['nama_menu'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

	$sql = "UPDATE menu SET nama_menu='$nama_menu', harga='$harga',
	deskripsi='$deskripsi' WHERE id_menu=$id";
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