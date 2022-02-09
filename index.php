<?php  

// menghubungkan dengan functions
require 'functions.php';

$buku = query("SELECT * FROM books");

// jika tombol search diklik
if(isset($_POST['submit'])) {
	$buku = search($_POST['keyword']);
}


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
	
	<title>CRUD | Data Buku</title>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
	    <a class="navbar-brand" href="#">
	      CRUD - Bootstrap 5
	    </a>
	  </div>
	</nav>

	<!-- Table -->
	<div class="container">
		<h1 class="mt-2">Data Buku</h1>
		<div class="row">
			<div class="mb-3">
				<a href="tambah.php" type="button" class="float-start mt-4 btn btn-primary">
					<i class="fa fa-plus"></i>
				 	Tambah Data
				</a>
				<form action="" method="post" class="mt-4">
					<input class=" col-sm-4 col-form-label form-control-sm" type="text" name="keyword" style="margin-left: 50px;margin-top: 4px;" placeholder="Search..">
					<button type="submit" name="submit" class="btn btn-outline-secondary btn-sm" style="margin-bottom: 3px;margin-left: 4px;"><i class="fa fa-search ms-1 me-1"></i></button>
				</form>
			</div>
		</div>
		
		<div class="table-responsive">
			<table class="table align-middle table-bordered table-hover">
				<thead>
					<tr>
						<th><center>No.</center></th>
						<th>Judul</th>
						<th>Pengarang</th>
						<th>Harga</th>
						<th>Stok</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<!-- perulangan data -->
					<?php $i = 1; ?>
					<?php foreach($buku as $book) : ?>
					<tr>
						<td><center><?= $i; ?></center></td>
						<td><?= $book['judul']; ?></td>
						<td><?= $book['penulis']; ?></td>
						<td>Rp.<?= $book['harga']; ?></td>
						<td><?= $book['stok']; ?></td>
						<td class="text-center">
							<a href="edit.php?id=<?= $book['id']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
							<a href="hapus.php?id=<?= $book['id']; ?>" onclick="return confirm('apakan anda ingin menghapus?');" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
						</td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?> 
				</tbody>
			</table>
		</div>
	</div>
	
</body>
</html>


