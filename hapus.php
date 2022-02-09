<?php 
// hubungkan ke functions.php
require 'functions.php'; 

// ambil data id
$id = $_GET['id'];

// cek function hapus
if(hapus($id) > 0) {
	echo "<script>
			alert('Data berhasil dihapus!');
			document.location.href = 'index.php';
		</script>";
} else {
	echo "<script>
			alert('Data gagal dihapus!');
			document.location.href = 'index.php';
		</script>";
}



?>

