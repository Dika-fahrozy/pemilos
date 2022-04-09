<?php
    include 'admin_page/koneksi/connect.php';
    $s = "SELECT * from tab_suara where id_calon='1'";
    $q = "SELECT * from tab_suara where id_calon='2'";
    $l = "SELECT * from tab_suara where id_calon='3'";

    $j = mysqli_query($koneksi, $s);
    $k = mysqli_query($koneksi, $q);
    $l = mysqli_query($koneksi, $l);

    $a = mysqli_num_rows($j);
    $b = mysqli_num_rows($k);
    $c = mysqli_num_rows($l);

    $q = $a / 100;
    $w = $b / 100;
    $e = $c / 100;

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='refresh'>
        <title><?php echo $title;?> | Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="admin_page/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin_page/bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="admin_page/bootstrap/css/form-elements.css">
        <link rel="stylesheet" href="admin_page/bootstrap/css/style.css">
        <link rel="stylesheet" href="koneksi/all.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" href="admin_page/dist/img/padi-ico.png">
    </head>

    <body onload="document.forms['myForm'].reset();" background="admin_page/dist/img/wiwiw.jpg" style="background-size:cover;">
        <!-- Top content -->
        <div class="top-content">
          
            <div style="margin-top:50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><img src="admin_page/dist/img/padi-ico.png" style="margin-right: 10px"><b style="color: #FFFFFF;padding: 10px;background:rgba(0,0,0,0.7); border: 2px solid #6E6E6E;">PemilihanOSIS</b></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Login to our site</h3>
                                <p>Masukan NIS Kamu Untuk Memilih :</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="koneksi/check.php" method="POST" class="login-form" id="myForm">
                            <div class="form-group">
                              <label class="sr-only" for="form-username">NIPD...</label>
                                <input type="text" name="pass" class="form-username form-control focus" id="form-username" placeholder="Your NIS Or NIP...">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-key"></i> Masuk...</button>
                          </form>
                          <br>

                          <div class="input-group">
                            <span class="input-group-addon" style="background:#375ACB; color: #fff;" id="sizing-addon2">Jumlah Suara Sementara</span>
                            <marquee style='background:#fff;' class="form-control">
                                <font color="red"> PASLON 1 = <?php echo $q?>%</font>, 
                                <font color="blue"> PASLON 2 = <?php echo $w?>%</font>,
                                <font color="green"> PASLON 3 = <?php echo $e?>%</font>
                            </marquee>
                          </div>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <p style="color:#fff;background:rgba(0, 0, 0, 0.8);border-radius: 10px;"><b>Copyright <?php echo date('Y');?> By SquireL Programmer</b></p>
                </div>
            </div>
        </footer>


        <!-- Javascript -->
        <script src="admin_page/dist/js/jquery-1.11.1.min.js"></script>
        <script src="admin_page/bootstrap/js/bootstrap.min.js"></script>
        <script src="admin_page/dist/js/jquery.backstretch.min.js"></script>
        <script src="admin_page/dist/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        
    </body>
</html>