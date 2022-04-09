<?php
include "koneksi/connect.php";
session_start();
if(!isset($_SESSION['username'])){
  echo "<script>window.location='login.php'</script>";
} else {

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include 'resource/style.php';?>
  </head>
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
      <!-- header -->
        <?php include 'resource/header.php';?>
      <!-- sidebar -->
        <?php include 'resource/sidebar.php';?>
      <!-- content -->
        <?php include 'dist/cpanel.php';?>      
      <!-- footer -->
        <?php include 'resource/footer.php';?>
    </div>
    <!-- ./wrapper -->
    <?php include'resource/plugins.php';?>
  </body>
</html>
<?php } ?>