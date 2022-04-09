<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CETAK PEMILIH</title>
	<?php include "../resource/style2.php"; ?>
</head>
<body>
	<!-- KELAS XII TKJ RPL -->
	<div class="col-sm-12">
		<div class="col-sm-4">
			<h3>DATA SISWA SMK BPM</h3>
			<table class="table table-bordered">
				<tr>
					<th>NIPD</th>
					<th>Nama Lengkap Siswa</th>
				</tr>
				<?php 
				include '../koneksi/connect.php';
				$query = "SELECT * from tab_siswa";
				$sql = mysqli_query($koneksi, $query);
				$no = 1;
				while ($data = mysqli_fetch_assoc($sql)) {
					?>
					<tr>
						<td><?php echo $data['nis'] ?></td>
						<td><?php echo $data['nama'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</body>
	</html>