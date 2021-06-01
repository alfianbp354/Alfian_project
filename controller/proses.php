<?php 
include '../model/database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'], $_POST['umur'], $_POST['asal'], $_POST['lulusan'], $_POST['posisi']);
 	header("location:../view/tampil.php");
 }else if($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:../view/tampil.php");
 }else if($aksi == "update"){
 	$db->update($_POST['id'], $_POST['nama'], $_POST['umur'], $_POST['asal'], $_POST['lulusan'], $_POST['posisi']);
 	header("location:../view/tampil.php");
 }
?>