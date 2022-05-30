<?php
//include('dbconnected.php');
include('dbconnect.php');

$id_pasien = $_GET['id_pasien'];
$nama = $_GET['nama_ps'];
$nik = $_GET['nik_ps'];
$tanggal_lahir = $_GET['tanggallahir_ps'];
$alamat = $_GET['alamat_ps'];

//query update
$query = "UPDATE pasien SET nama='$nama' , nik='$nik' , tanggal_lahir='$tanggal_lahir' , alamat='$alamat' WHERE id_pasien='$id_pasien' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:home.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>