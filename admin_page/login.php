<?php
    include 'koneksi/connect.php';
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
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
		<link rel="stylesheet" href="bootstrap/css/form-elements.css">
        <link rel="stylesheet" href="bootstrap/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" href="dist/img/padi-ico.png">
    </head>

    <body background="dist/img/bg.jpg" style="background-size: cover;">
        <!-- Top content -->
        <div class="top-content">
        	
            <div style="margin-top:50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><img src="dist/img/padi-ico.png" style="margin-right: 10px"><b>Pemi</b><font color="#000" r>LosAdmin</font></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Pemilos-Admin</h3>
                            		<p>Masukan Username dan password untuk masuk :</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="koneksi/chek.php" method="POST" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="name" class="form-username form-control" id="form-username" placeholder="Username..." maxlength="10">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" class="form-password form-control" id="form-password" placeholder="Password....">
			                        </div>
			                        <button type="submit" class="btn"><i class="fa fa-key"></i> Log - In</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="container" style="margin-top: 80px">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <p style="color:#fff;background:rgba(0, 0, 0, 0.8);">Copyright <?php echo date('Y');?> By SquireL Programmer</p>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="dist/js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="dist/js/jquery.backstretch.min.js"></script>
        <script src="dist/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        
    </body>
</html>