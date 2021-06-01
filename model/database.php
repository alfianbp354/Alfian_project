<?php

class database{
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "alfian_seleksi_timnas";
	var $con;

	function __construct(){
	$this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function tampil_data(){
	$data = mysqli_query($this->con,"select * from pemain_timnas");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function input($nama,$umur,$asal,$lulusan,$posisi){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"insert into pemain_timnas values('','$nama','$umur','$asal','$lulusan','$posisi')");
	}
	function hapus($id){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from pemain_timnas where id='$id'");
	}
	function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from pemain_timnas where id='$id'");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function update($id,$nama,$umur,$asal,$lulusan,$posisi){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update pemain_timnas set nama='$nama', umur='$umur', asal='$asal', lulusan='$lulusan', posisi='$posisi' where id='$id'");
	}
}
?>