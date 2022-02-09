<?php  
// hubungkan dengan functions.php
require 'functions.php';

// cek apakah tombol submit sudah dipencet atau belum
if(isset($_POST["submit"])) {

	// cek apakah data berhasl ditambah atau tidak
	if(tambah($_POST) > 0) {
		echo "<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>";
	}

};

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<title>CRUD | Tambah Data Buku</title>
</head>
<body>
	<nav class="navbar navbar-light bg-light mb-4">
	  <div class="container">
	    <a class="navbar-brand" href="#">
	      CRUD - Bootstrap 5
	    </a>
	  </div>
	</nav>
	<div class="container">
		<h2>Tambah Data Buku</h2>
		<br>
		<form action="" method="POST">

			<div class="mb-3 row">
			    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
			    <div class="col-sm-10">
			      <input type="text" name="judul" class="form-control" id="judul" autocomplete="off" required>
			    </div>
			</div>
			<div class="mb-3 row">
			    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
			    <div class="col-sm-10">
			      <input type="text" name="penulis" class="form-control" id="penulis" autocomplete="off" required>
			    </div>
			</div>
			<div class="mb-3 row">
			    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
			    <div class="col-sm-10">
			      <input type="text" name="harga" class="form-control" id="harga" autocomplete="off" required>
			    </div>
			</div>
			<div class="mb-3 row">
			    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
			    <div class="col-sm-10">
			      <input type="text" name="stok" class="form-control" id="stok" autocomplete="off" required>
			    </div>
			</div>

			<div>
				<div class="col"><br>
					<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Tambah</button>
					<a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
				</div>
			</div>
		</form>
	</div>
	
</body>
</html>
