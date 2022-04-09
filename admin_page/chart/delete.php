<?php
	include '../koneksi/connect.php'; 
	$id = $_GET['id'];

	$query = "DELETE FROM tab_suara WHERE nis='$id'";
	$sql = mysqli_query($koneksi, $query);

	if ($query) {
		echo "<script>alert('Berhasil Menghapus Data');document.location='data.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Menghapus Data');document.location='data.php'</script>";

	}
?>