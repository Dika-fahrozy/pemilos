<?php
	include '../../../koneksi/connect.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "INSERT INTO tab_kelas VALUES ('$id','$nama')";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>alert('Berhasil Menambah kelas Baru');document.location='../../kelas.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Menambah kelas Baru, silahkan coba kembali');document.location='../kelas.php'</script>";
	}
?>