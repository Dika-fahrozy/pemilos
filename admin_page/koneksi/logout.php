<?php
	session_start();
	$user = $_SESSION['username'];
	session_destroy();
	echo "<script>alert('Anda Berhasil Logout');document.location='../login.php'</script>";
?>