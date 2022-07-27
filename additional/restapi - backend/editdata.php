<?php

	include 'conn.php';
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$angkatan= $_POST['angkatan'];
	
	$connect->query("UPDATE tb_mhs SET nama='".$nama."', nim='".$nim."', jurusan='".$jurusan."', angkatan='".$angkatan."' WHERE id=". $id);

?>