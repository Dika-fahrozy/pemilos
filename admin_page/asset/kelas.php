<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include"../koneksi/connect.php"; echo $title;?> | Data Tables</title>
    <?php include'../resource/style2.php';?>
  </head>
  <body class="hold-transition skin-purple fixed sidebar-mini">
    <div class="wrapper">

      <?php include'../resource/header2.php';?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include'../resource/sidebar2.php';?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Master
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="active">Kelas</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php include'tampil/kelas.php';?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include'../resource/footer.php';?>

    <?php include'../resource/plugins2.php';?>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
