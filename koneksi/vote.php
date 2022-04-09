<?php
	error_reporting(0);
	include 'connect.php';
	session_start();

	$kode = $_GET['kode'];
	$nis = $_SESSION['nis'];

	//cek status
	$sql = mysqli_query($koneksi,"SELECT * FROM tab_siswa where nis='$nis'");
	$cek = mysqli_fetch_assoc($sql);
	$data = $cek['status'];
	
	if ($data === "BELUM") {
		//input pilihan
		$query = "INSERT INTO tab_suara VALUES('$nis','$kode')";
		$s = mysqli_query($koneksi, $query);
		
		if ($s) {
			echo "<script>alert('Terima Kasih Telah Menggunakan Hak Suara Anda')</script>";
			$ubah = "UPDATE tab_siswa SET status='SUDAH' where nis='$nis'";
			$u = mysqli_query($koneksi, $ubah);
			session_destroy();
			echo "<script>window.location='../'</script>";
		}else{
			echo "<script>alert('Gagal Milih, Coba Lagi Atau Hubungi Program master');document.location='../pilih.php'</script>";
		}	
	}
	
	elseif($data === "SUDAH"){
			echo "<script>alert('Anda telah memilih');document.location='../pilih.php'</script>";

	}

?>