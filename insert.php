<?php
//add dbconnect

include('dbconnect.php');

$nama = $_POST['nama_ps'];
$nik = $_POST['nik_ps'];
$tanggal_lahir = $_POST['tanggallahir_ps'];
$alamat = $_POST['alamat_ps'];

//query

$query =  "INSERT INTO pasien(nama , nik , tanggal_lahir , alamat) VALUES('$nama' , '$nik' , '$tanggal_lahir' , '$alamat')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>