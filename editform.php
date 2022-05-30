<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM pasien WHERE id_pasien='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Pasien</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_pasien" value="<?php echo $row['id_pasien']; ?>">

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama_ps" class="form-control" value="<?php echo $row['nama']; ?>">			
		</div>

		<div class="form-group">
			<label>NIK</label>
			<input type="text" name="nik_ps" class="form-control" value="<?php echo $row['nik']; ?>">			
		</div>

		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="text" name="tanggallahir_ps" class="form-control" value="<?php echo $row['tanggal_lahir']; ?>">			
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat_ps" class="form-control" value="<?php echo $row['alamat']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Pasien</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 