<?php
	include '../../../koneksi/connect.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$kelas = $_POST['kelas'];
	$status = $_POST['status'];

	$sql = "INSERT INTO tab_siswa VALUES ('$id','$nama','$kelamin','$kelas','$status')";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>alert('Berhasil Menambah Siswa/i Baru');document.location='../../anggota.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Menambah Siswa/i Baru, silahkan coba kembali');document.location='../anggota.php'</script>";
	}
?>