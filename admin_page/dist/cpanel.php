      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php 
          include 'koneksi/connect.php';
        ?>

        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>
                    <?php 
                      $s = "SELECT * FROM tab_siswa";
                      $q = mysqli_query($koneksi,$s);
                      $l = mysqli_num_rows($q);
                      echo $l;
                    ?>
                  </h3>
                  <p>Siswa - Siswi SMK</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-contacts"></i>
                </div>
                <a href="asset/anggota.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>
                    <?php
                      $s = "SELECT * FROM tab_suara";
                      $q = mysqli_query($koneksi,$s);
                      $l = mysqli_num_rows($q);
                      echo $l;
                    ?>
                  </h3>
                  <p>Hasil Suara</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bar-chart"></i>
                </div>
                <a href="chart/flot.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>
                    <?php 
                      $s = "SELECT * FROM tab_Siswa where status='BELUM'";
                      $q = mysqli_query($koneksi,$s);
                      $l = mysqli_num_rows($q);
                      echo $l;
                    ?>
                  </h3>
                  <p>Siswa Belum Memilih</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-contact"></i>
                </div>
                <P class="small-box-footer">Quick Count </P>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>
                    <?php
                      $s = "SELECT * FROM tab_siswa where status='SUDAH'";
                      $q = mysqli_query($koneksi,$s);
                      $l = mysqli_num_rows($q);
                      echo $l;
                    ?>
                  </h3>
                  <p>Siswa Sudah Memilih</p>
                </div>
                <div class="icon">
                  <i class="fa fa-child"></i>
                </div>
                <p class="small-box-footer">Quick Count</p>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- carousel -->
            <div class="col-md-6">
              <div class="box box-solid">
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="dist/img/slide/1.jpg" alt="First slide">
                      </div>
                      <div class="item">
                        <img src="dist/img/slide/2.jpg" alt="Second slide">
                       </div>
                      <div class="item">
                        <img src="dist/img/slide/3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <!-- about me -->
            <div class="col-md-6">
                <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background:url('dist/img/bg.jpg');background-size: cover;">
                  <div class="widget-user-image">
                    <img class="img-circle" src="dist/img/Avatar5.png" alt="User Avatar">
                  </div><!-- /.widget-user-image -->
                  <h3 class="widget-user-username"><b>Dika Fahrozy</b></h3>
                  <h5 class="widget-user-desc"><b>Website Programer</b></h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">About Me :</a></li>
                    <li><a href="#">Class : <span class="pull-right">XII. Rekayasa Perangkat Lunak</span></a></li>
                    <li><a href="#">Age : <span class="pull-right">17 Years old</span></a></li>
                    <li><a href="#">Born : <span class="pull-right">Bengkulu, 19 January 2000</span></a></li>
                    <li><a href="http://www.facebook.com/dika.oji.1">Facebook <span class="pull-right">Dika Oji</span></a></li>
                  </ul>
                </div>
            </div><!-- /.col -->

        </section>
      </div><!-- /.content-wrapper -->
