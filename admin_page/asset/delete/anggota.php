<?php 
	include('../../koneksi/connect.php');

	$id = $_GET['id'];
	$sql="DELETE FROM tab_siswa WHERE nis='$id'";

	$result = mysqli_query($koneksi,$sql);
	if ($result) {
		echo "<script>alert('Data Siswa/i berhasil di hapus ...');document.location='../anggota.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Menghapus Data...');document.location='../anggota.php'</script>";	
	}
?>