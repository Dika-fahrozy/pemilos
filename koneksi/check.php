<title>Login Pemilih</title>

<?php
	include 'connect.php';
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM tab_siswa where nis ='$pass'";
	$query = mysqli_query($koneksi,$sql);
	$data = mysqli_fetch_assoc($query);
	$nis = $data['nis'];
	$nama = $data['nama'];
	$status = $data['status'];

	if ($pass === $nis) {
		session_start();
		$_SESSION['nis'] = $nis;
		if ($status === 'BELUM') {
			echo "<script>alert('Selamat Datang $nama, silahkan memilih');document.location='../pilih.php'</script>";
		}
		else {
			echo "<script>alert('Maaf $nama, Anda Sudah Memilih');document.location='../index.php'</script>";
			echo "<meta http-equiv='refresh'>";
		}
	}
	else{
		echo "<script>alert('Nama Atau Password Anda Salah!!! Coba Lagi');document.location='../index.php'</script>";
		echo "<meta http-equiv='refresh'>";
	}
?>