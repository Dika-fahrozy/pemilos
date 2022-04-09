<?php
  include "koneksi/connect.php";
  session_start();
  $nama = $_SESSION['nis'];
  $query = "select nama from tab_siswa where nis='$nama'";
  $sql = mysqli_query($koneksi,$query);
  $kaka = mysqli_fetch_assoc($sql);

  if(!isset($_SESSION['nis'])){
  	echo "<script>alert('Anda Harus Login Terlebih Dahulu');document.location='index.php'</script>";
  }
  else{
?>

	<!DOCTYPE html>
	<html lang="en">
    <head>
		  <meta charset="UTF-8">
		  <title><?php echo $title; ?></title>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		  <!-- Bootstrap 	-->
      <link href="admin_page/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="admin_page/bootstrap/css/lightbox.min.css" rel="stylesheet">
		  <link rel="shortcut icon" type="text/css" href="admin_page/dist/img/padi-ico.png">
      <link rel="stylesheet" href="koneksi/all.css">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <!-- header -->
    	<section class="myHead">
    		<div class="container">
    			<div class="row">
            <div class="col-sm-12">
              <img src="admin_page/dist/img/padi.png" width="60px" style="float: left;">
              <h4 class="col-sm-8" style="float: left;margin-top: 15px;">SMK Bina & Bakti Putra Mandiri <br> Pemilihan Ketua Osis Masa Bakti 2017/2018</h4>
              <div style="float: right;">
                <img src="admin_page/dist/img/logo_bpm.png" width="60px">
                <img src="admin_page/dist/img/logo_farmasi.png" width="60px">
              </div>
            </div>
    			</div>
    		</div>
    	</section>
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-sm-12">
              <h4>Pemilih : <?php echo $kaka['nama']?></h4>
          </div>
        </div>
      </div>
      <br>

    	<!-- main content -->
      <section class="about" id="about">
      <div class="container-fluid">
        <div class="row">

         <?php
          $query = "select * from tab_calon";
          $sql = mysqli_query($koneksi,$query);
          while ($data = mysqli_fetch_assoc($sql)) {
            ?>
            
          <!-- form paslon osis -->
          <div class="col-sm-4">
            <div class="thumbnail">
              <a href="admin_page/dist/img/paslon/<?php echo $data['gambar']?>" data-lightbox="pemilos">
                <img src="admin_page/dist/img/paslon/<?php echo $data['gambar']?>" alt="Gambar1">
              </a>
              <h4 class="text-center">Pasangan No. Urut <?php echo $data['id_calon']?></h4>
              <table class="table">
                <tr>
                  <td>Ketua Umum</td>
                  <td>:</td>
                  <td><?php echo $data['ketua_umum']?></td>
                </tr>
                <tr>
                  <td>Ketua 1</td>
                  <td>:</td>
                  <td><?php echo $data['ketua_1']?></td>
                </tr>
                <tr>
                  <td>Ketua 2</td>
                  <td>:</td>
                  <td><?php echo $data['ketua_2']?></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <div class="col-sm-6 text-center">
                     <p class="btn btn-primary btn-block" style="" title="<?php echo $data['visi'];?>">Visi</p>
                    </div>
                    <div class="col-sm-6 text-center">
                     <p class="btn btn-warning btn-block" style="" title="<?php echo $data['misi'];?>">Misi</p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <a class="btn btn-block btn-success btn-lg" href="koneksi/vote.php?kode=<?php echo $data['id_calon'];?>">Pilih</a>
                  </td>
                </tr>
              </table>          
            </div>
           </div>
           <?php 
                }
            ?>
          </div>
        </div>
      </section>

      <!-- footer -->
      <footer class="footer text-center">
        &copy; 2017 <a href="koneksi/logout.php" style="color: #fff;text-decoration: none;">by</a> <a href="https://www.facebook.com/dika.oji.1" style="color: #fff">SquireL Programmer</a> | RPL9 Crew | IT-Support <a href="https://smkbpm.sch.id" style="color: #fff">BPM</a>
      </footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="admin_page/dist/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="admin_page/bootstrap/js/bootstrap.min.js"></script>
      <script src="admin_page/bootstrap/js/lightbox.min.js"></script>
    </body>
  </html>

<?php
  }
?>