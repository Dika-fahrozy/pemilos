<?php
	include '../../../koneksi/connect.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "UPDATE tab_kelas SET nama_kelas='$nama' WHERE id_kelas='$id'";
	$query = mysqli_query($koneksi,$sql);
	
	if ($query) {
		echo "<script>alert('Berhasil Merubah Data');document.location='../../kelas.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Merubah Data, silahkan coba kembali');document.location='../../kelas.php'</script>";
	}
?>