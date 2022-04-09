<?php 
	include('../../koneksi/connect.php');

	$id = $_GET['id'];
	$sql="DELETE FROM tab_calon WHERE id_calon='$id'";

	$result = mysqli_query($koneksi,$sql);
	if ($result) {
		echo "<script>alert('Data calon berhasil di hapus ...');document.location='../calon.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Menghapus Data...');document.location='../calon.php'</script>";	
	}
?>