<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perpustakaan Digital | Data Tables</title>
    <?php include'../../resource/style3.php';?>
  </head>
  <body class="hold-transition skin-purple fixed sidebar-mini">
    <div class="wrapper">

      <?php include'../../resource/header3.php';?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include'../../resource/sidebar3.php';?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Master
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="active">Siswa/i</li>
          </ol>
        </section>

        <!-- Main content -->
        <?php include 'data/anggota.php'; ?>
      </div><!-- /.content-wrapper -->

      <?php include'../../resource/footer.php';?>
      <?php include'../../resource/plugins3.php';?>
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
