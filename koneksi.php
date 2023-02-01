<?php

//lokasi server,username,pass
$koneksi = mysqli_connect("localhost","root","","id3");

// cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>
