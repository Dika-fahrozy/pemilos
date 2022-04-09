<?php 
	include('../../koneksi/connect.php');

	$id = $_GET['id'];
	$sql="DELETE FROM tab_kelas WHERE id_kelas='$id'";

	$result = mysqli_query($koneksi,$sql);
	if ($result) {
		echo "<script>alert('Data Kelas berhasil di hapus ...');document.location='../kelas.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Menghapus Data...');document.location='../kelas.php'</script>";	
	}
?>