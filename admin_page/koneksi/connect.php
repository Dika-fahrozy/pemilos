<?php
	$title = "Pemilos";
	$koneksi = mysqli_connect('localhost','root','','pemilos');
	if (mysqli_connect_errno()) {
		//kalau gagal keles :v
		trigger_error('Koneksi ke database gagal'.mysqli_connect_error(),E_user_error);
	}
	//else{
	//	echo "<script>alert('Berhasil Koneksi Gan :D')</script>";
	//}
?>