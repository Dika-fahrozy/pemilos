<?php 
	include "../../../koneksi/connect.php";

	if($_POST['submit']){
				$allowed_ext	= array('jpg','jpeg','png');
				$file_name		= $_FILES['gambar']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['gambar']['size'];
				$file_tmp		= $_FILES['gambar']['tmp_name'];
				
				$nama = $_POST['nama'];
				$visi = $_POST['visi'];
				$misi = $_POST['misi'];
				
				if(in_array($file_ext, $allowed_ext) === true){
						$lokasi = '../../../dist/img/paslon/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysqli_query($koneksi,"INSERT INTO tab_calon VALUES('$lokasi',NULL, '$nama', '$visi', '$misi')");
						if($in){
							echo "<script>alert('Berhasil Masuk');</script>";
						}else{
							echo "<script>alert('Gagal upload file');</script>";
						}
					}
				}else{
					echo $in;
				}

?>