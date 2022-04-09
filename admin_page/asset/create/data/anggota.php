
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Siswa/i</h3>
        </div>
        <form method="POST" action="action/anggota.php" class="box-header" enctype="multipart/from-data">
          <table>
            <tr>
              <td width="100px"><label>NIS</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3">
                <input placeholder="NIS...." class="form-control" name="id" type="text" required="true">
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Nama Lengkap</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="100px">
                <input class="form-control" placeholder="Nama..." required="true" name="nama" type="text">
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Jenis Kelamin</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3">
                <select class="form-control select2" style="width: 100%;" name="kelamin" required="true">
                  <option selected="selected"></option>
                  <option value="L"> Laki - laki</option>
                  <option value="P"> Perempuan</option>
                </select>
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Kelas</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="150px">
                <select name="kelas" class="form-control select2" style="width: 100%;" required="true">
                <option value=""></option>
                  <?php
                  include '../../koneksi/connect.php';
                  $query = 'SELECT * FROM tab_kelas order by nama_kelas';
                  $result = mysqli_query($koneksi,$query);
                  while ($data= mysqli_fetch_array($result)) {
                    echo "<option value='$data[id_kelas]'>$data[nama_kelas]</option>";
                  }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <div class="input-group">
                  <input type="hidden" name="status" value="BELUM">
                </div><!-- /.input group -->
              </td>
            </tr>
            <tr> 
              <td colspan="2" height="80px"></td>
              <td width="198px">
                <input type="submit" required="true" name="submit" value="Tambah Siswa/i" class="btn btn-block btn-success btn-flat">
              </td>
              <td width="10px"></td>
              <td width="198px">
                <a class="btn btn-block btn-danger btn-flat" href="../anggota.php" onclick="return confirm('Batalkan Penambahan Data??')">Batal</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
        </section><!-- /.content -->