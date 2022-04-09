  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Tabel Kelas</h3>
        </div>
        <div class="box-header">
          <a class="btn btn-primary btn-flat" href="create/kelas.php">Tambah Kelas</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "../koneksi/connect.php";
              $sql = "SELECT * FROM tab_kelas order by nama_kelas";
              if (!$result = mysqli_query($koneksi, $sql)) {
                die('ERROR : '.mysqli_error($koneksi));
              }
              else{
                if (mysqli_num_rows($result) > 0) {
                        //ouput data
                  while ($data = mysqli_fetch_assoc($result) ) {
                    ?>
                    <tr>
                      <td><?php echo $data['id_kelas']; ?></td>
                      <td><?php echo $data['nama_kelas']; ?></td>
                      <td align="center">
                        <a class="btn btn-primary" href="update/kelas.php?id=<?php echo $data['id_kelas'];?>"><i class="fa fa-edit"></i> Ubah</a>
                        <a class="btn btn-primary" href="delete/kelas.php?id=<?php echo $data['id_kelas'];?>" onclick="return confirm('Yakin Ingin Menghapus Data?');"><i class="fa fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                    <?php
                  }
                }
              }
              ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  
</script> 