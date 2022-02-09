<?php  

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "project");

// function query
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// function tambah.php
function tambah($data) {
	global $conn;

	// ambil data dari form
	$judul = htmlspecialchars($data['judul']);
	$penulis = htmlspecialchars($data['penulis']);
	$harga = htmlspecialchars($data['harga']);
	$stok = htmlspecialchars($data['stok']);

	// query insert data
	$query = "INSERT INTO books VALUES ('', '$judul', '$penulis', '$harga', '$stok')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// function hapus.php
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM books WHERE id = $id");
	return mysqli_affected_rows($conn);
}

// function edit.php
function edit($data) {
	global $conn;

	// ambil data dari form
	$id = $data['id'];
	$judul = htmlspecialchars($data['judul']);
	$penulis = htmlspecialchars($data['penulis']);
	$harga = htmlspecialchars($data['harga']);
	$stok = htmlspecialchars($data['stok']);

	// query insert data
	$query = "UPDATE books SET judul = '$judul', penulis = '$penulis', harga = '$harga', stok = '$stok' WHERE id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// function search
function search($keyword) {
	$query = "SELECT * FROM books WHERE judul LIKE '%$keyword%' OR penulis LIKE '%$keyword%' ";

	return query($query);
}

?>

