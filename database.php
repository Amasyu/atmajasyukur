<?php
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sregepngoding";
	var $con;
	function __construct(){
		$this->con = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		
		// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		} else
			echo "Koneksi berhasil<br />";
	}
	function tampil_data(){
		$data = mysqli_query($this->con,"select * from user");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
	}
	function input($nama,$alamat,$usia){
		mysqli_query($this->con,"insert into user values('','$nama','$alamat','$usia')") or die(mysqli_error($this->con));
	}
	function hapus($id){
		mysqli_query($this->con,"delete from user where id='$id'");
	}
	function edit($id){
		$data = mysqli_query($this->con,"select * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil [] = $d;
		}
		return $hasil;
	}
	function update($id,$nama,$alamat,$usia){
		mysqli_query($this->con,"update user set nama='$nama',alamat='$alamat',usia='$usia' where id='$id'");
	}
}