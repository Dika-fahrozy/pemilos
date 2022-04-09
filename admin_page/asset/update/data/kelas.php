        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Ubah Kelas</h3>
                </div>
                <form method="POST" action="action/kelas.php" class="box-header">
                  <?php
                    include '../../koneksi/connect.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM tab_kelas WHERE id_kelas='$id'";
                    $query = mysqli_query($koneksi,$sql);

                    while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                    <table>
                      <tr>
                        <td width="100px"></td>
                        <td width="40px" align="center"></td>
                        <td colspan="3">
                          <input class="form-control" required="true" name="id" type="hidden" value="<?php echo $data['id_kelas'];?>">
                        </td>
                      </tr>
                      <tr>
                        <td width="100px"><label>Nama Kelas</label></td>
                        <td width="40px" align="center"><label>:</label></td>
                        <td colspan="3" height="100px">
                          <input class="form-control"  required="true" name="nama" type="text" value="<?php echo $data['nama_kelas'];?>">
                        </td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="80px"></td>
                        <td width="198px">
                          <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-block btn-success btn-flat">
                        </td>
                        <td width="10px"></td>
                        <td width="198px">
                          <a class="btn btn-block btn-danger btn-flat" href="../kelas.php" onclick="return confirm('Batalkan Perubahan Data??')">Batal</a>
                        </td>
                      </tr>
                    </table>
                  <?php
                    }
                  ?>
                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->