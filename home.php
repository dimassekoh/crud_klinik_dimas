<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM pasien";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		
		<h1>PROGRAM CRUD SEDERHANA - KLINIK</h1>
		<h2> JEBA - DIMAS OCTAVIANO ANANTHA SEKOH - 2440086602</a></h2>
		<a href="../logout.php" class="btn btn-danger">Keluar</a>
		<div class="row">
			<div class="col-sm-4">
				<h3>Form Tambah Pasien</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Nama Pasien</label>
						<input type="text" name="nama_ps" class="form-control">
					</div>
					<div class="form-group">
						<label>NIK</label>
						<input type="text" name="nik_ps" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="text" name="tanggallahir_ps" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat_ps" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah Pasien</button>					
				</form>
				
			</div>
			<div class="col-sm-8">
				<h3>Tabel Daftar Pasien</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pasien</th>
							<th>NIK</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['nik']; ?></td>
							<td><?php echo $row['tanggal_lahir']; ?></td>
							<td><?php echo $row['alamat']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_pasien'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_pasien']?>" class="btn btn-danger" role="button">Delete
								</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 