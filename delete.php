<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('dbconnect.php');

//query hapus
$query = "DELETE FROM pasien WHERE id_pasien = '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:home.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>