<?php
	include '../../../koneksi/connect.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kelamin = $_POST['kelamin'];
	$kelas = $_POST['kelas'];
	$status = $_POST['status'];

	$sql = "UPDATE tab_siswa SET nama='$nama', gender='$kelamin', id_kelas='$kelas',status='$status' WHERE nis='$id'";
	$query = mysqli_query($koneksi,$sql);
	
	if ($query) {
		echo "<script>alert('Berhasil Merubah Data');document.location='../../anggota.php'</script>";
	}
	else{
		echo "<script>alert('Gagal Merubah Data, silahkan coba kembali');document.location='../../anggota.php'</script>";
	}
?>