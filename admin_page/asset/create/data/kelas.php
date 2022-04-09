<?php
  include "../../koneksi/connect.php";
  $s='select * from tab_kelas';
  $q=mysqli_query($koneksi,$s);
  $l=mysqli_num_rows($q);
  $i= $l + 1;
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Kelas</h3>
        </div>
        <form method="POST" action="action/kelas.php" class="box-header" enctype="multipart/from-data">
          <table>
          <tr>
              <td width="100px"><label>ID kelas</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="100px">
                <input class="form-control" value='<?php echo $i;?>' placeholder="Nama Kelas..." required="true" name="id" type="text">
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Nama Kelas</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="100px">
                <input class="form-control" placeholder="Nama Kelas..." required="true" name="nama" type="text">
              </td>
            </tr>
            <tr> 
              <td colspan="2" height="80px"></td>
              <td width="198px">
                <input type="submit" required="true" name="submit" value="Tambah Kelas" class="btn btn-block btn-success btn-flat">
              </td>
              <td width="10px"></td>
              <td width="198px">
                <a class="btn btn-block btn-danger btn-flat" href="../kelas.php" onclick="return confirm('Batalkan Penambahan Data??')">Batal</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
        </section><!-- /.content -->