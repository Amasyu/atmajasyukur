<?php
include "database.php";
$db = new database();
$aksi = $_GET['aksi'];
if($aksi=='tambah'){
	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia']);
	header("location:tampildata.php");
} elseif($aksi=='hapus'){
	$db->hapus($_GET['id']);
	header("location:tampildata.php");
} elseif($aksi=='update'){
	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
	header("location:tampildata.php");
}else echo "ada kesalahan";