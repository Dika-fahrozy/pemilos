        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Ubah Data Siswa</h3>
                </div>
                <form method="POST" action="action/anggota.php" class="box-header">
                  <?php
                    include '../../koneksi/connect.php';
                    $id = $_GET['id'];
                    $sql = "SELECT 
                    		tab_siswa.nis, tab_siswa.nama, tab_siswa.gender, tab_siswa.id_kelas,tab_kelas.nama_kelas, tab_siswa.status
                   			FROM 
                    		tab_siswa left join tab_kelas
                   			 ON
                    		tab_kelas.id_kelas = tab_siswa.id_kelas
                    		WHERE
                    		nis='$id'";
                    $query = mysqli_query($koneksi,$sql);

                    while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                    <table>
                      <tr>
                        <td width="100px"></td>
                        <td width="40px" align="center"></td>
                        <td colspan="3">
                          <input class="form-control" required="true" name="id" type="hidden" value="<?php echo $data['nis'];?>">
                        </td>
                      </tr>
                      <tr>
                        <td width="100px"><label>Nama Siswa</label></td>
                        <td width="40px" align="center"><label>:</label></td>
                        <td colspan="3" height="100px">
                          <input class="form-control" value="<?php echo $data['nama'];?>" required="true" name="nama" type="text">
                        </td>
                      </tr>
                      <tr>
                        <td width="100px"><label>Kelas</label></td>
                        <td width="40px" align="center"><label>:</label></td>
                        <td colspan="3" height="100px">
                          <select name="kelas" class="form-control">
                          	<option value="<?php echo $data['id_kelas']?>"><?php echo $data['nama_kelas']?></option>
                          	<?php
                          		$s = mysqli_query($koneksi,'SELECT * FROM tab_kelas order by nama_kelas');
                          		while ($result = mysqli_fetch_assoc($s)) {
                          			echo "<option value='$result[id_kelas]'>$result[nama_kelas]</option>";
                          		}

                          	?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td width="100px"><label>Jenis Kelamin</label></td>
                        <td width="40px" align="center"><label>:</label></td>
                        <td colspan="3" height="100px">
                          <select name="kelamin" class="form-control">
                          	<option value="<?php echo $data['gender']?>"><?php echo $data['gender']?></option>
                          	<option value="L">Laki - Laki</option>
                          	<option value="P">Perempuan</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td width="100px"><label>Status Pemilih</label></td>
                        <td width="40px" align="center"><label>:</label></td>
                        <td colspan="3" height="100px">
                          <select name="status" class="form-control">
                          	<option value="<?php echo $data['status']?>"><?php echo $data['status']?></option>
                          	<option value="BELUM">BELUM</option>
                          	<option value="SUDAH">SUDAH</option>
                          </select>
                        </td>
                      </tr>

                      <tr> 
                        <td colspan="2" height="80px"></td>
                        <td width="198px">
                          <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-block btn-success btn-flat">
                        </td>
                        <td width="10px"></td>
                        <td width="198px">
                          <a class="btn btn-block btn-danger btn-flat" href="../anggota.php" onclick="return confirm('Batalkan Perubahan Data??')">Batal</a>
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