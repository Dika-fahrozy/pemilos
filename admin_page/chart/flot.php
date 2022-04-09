<?php 
include '../koneksi/connect.php';

$s = "SELECT * from tab_suara where id_calon='1'";
$q = "SELECT * from tab_suara where id_calon='2'";
$l = "SELECT * from tab_suara where id_calon='3'";

$j = mysqli_query($koneksi, $s);
$k = mysqli_query($koneksi, $q);
$l = mysqli_query($koneksi, $l);

$a = mysqli_num_rows($j);
$b = mysqli_num_rows($k);
$c = mysqli_num_rows($l);

;?>

<!DOCTYPE html>
<html>
<head>
  <?php include'../resource/style2.php';?>
  <title>Pemilos | Chart</title>
</head>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">

    <?php include'../resource/header2.php';?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include'../resource/sidebar2.php';?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Jumlah Suara
          <small>Pemilihan Ketua OSIS SMK Bina dan Bakti Putra Mandiri</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Chart</a></li>
          <li class="active">Jumlah Suara</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">

          <div class="col-md-12">
            <!-- Bar chart -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <i class="fa fa-bar-chart-o"></i>
                <h3 class="box-title">Hasil Suara</h3>
              </div>
              <div class="box-body">
                <div id="bar-chart" style="height: 400px;"></div>
              </div>
              <!-- /.box-body-->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include '../resource/footer.php';?>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include '../resource/plugins2.php';?>

<!-- Page script -->
<script>
  $(function () {

    /*
     * BAR CHART
     * ---------
     */

     var bar_data = {
      data : [
      ['PasLon 1 <br>Faisal tanjung, Fahmi, Anisah<br><?php echo $a." Total Suara";?>', <?php echo $a;?>],
      ['PasLon 2 <br>Hendri Ariles, Yoki, Revani<br><?php echo $b." Total Suara";?>', <?php echo $b;?>], 
      ['PasLon 3 <br>Ednas Prasetyo, Lili, Muhtadin<br><?php echo $c." Total Suara";?>', <?php echo $c; ?>]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    
  })

  /*
   * Custom Label formatter
   * ----------------------
   */
   function labelFormatter(label, series) {
    return '<div style="font-size:12px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
    + label
    + '<br>'
    + Math.round(series.percent) + '%</div>'
  }
</script>
</body>
</html>