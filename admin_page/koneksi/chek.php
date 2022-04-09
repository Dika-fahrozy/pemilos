<?php
	include 'connect.php';
	$username = $_POST['name'];
	$pass = md5($_POST['password']);

	$sql = "SELECT * FROM admin where username ='$username' AND password='$pass'";
	$query = mysqli_query($koneksi,$sql);
	$data = mysqli_fetch_assoc($query);
	$user = $data['username'];
	$password = $data['password'];

	if ($username == $user && $pass == $password) {
		session_start();
		$_SESSION['username'] = $user;
		echo "<script>alert('Selamat Datang $user');document.location='../'</script>";
	}
	else{
		echo "<script>alert('Username Atau Password Anda Salah!!!');document.location='../login.php'</script>";	
	}
?>