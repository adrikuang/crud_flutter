<?php

	include 'conn.php';
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$angkatan= $_POST['angkatan'];
	
	$connect->query("INSERT INTO tb_mhs (nama,nim,jurusan,angkatan) VALUES ('".$nama."','".$nim."','".$jurusan."','".$angkatan."')")

?>