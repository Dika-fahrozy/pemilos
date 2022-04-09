  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Calon Ketua OSIS</h3>
        </div>
        <div class="box-header">
          <a class="btn btn-primary btn-flat" href="create/calon.php">Tambah Calon Ketua OSIS</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Foto Calon Kandidat</th>
                <th>Ketua Umum</th>
                <th>Ketua 1</th>
                <th>Ketua 2</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    include "../koneksi/connect.php";
                    $sql = "SELECT * from tab_calon";
                    if (!$result = mysqli_query($koneksi, $sql)) {
                      die('ERROR : '.mysqli_error($koneksi));
                    }
                    else{
                      if (mysqli_num_rows($result) > 0) {
                        //ouput data
                        while ($data = mysqli_fetch_assoc($result) ) {
                ?>
                <tr>
                  <td><img width="100px" src="../dist/img/paslon/<?php echo $data['gambar'];?>"></td>
                  <td><?php echo $data['ketua_umum']; ?></td>
                  <td><?php echo $data['ketua_1']; ?></td>
                  <td><?php echo $data['ketua_2']; ?></td>
                  <td><?php echo $data['visi']; ?></td>
                  <td><?php echo $data['misi']; ?></td>
                  <td align="center">
                    <a class="btn btn-primary" href="update/calon.php?id=<?php echo $data['id_calon'];?>"><i class="fa fa-edit"></i>Ubah</a>
                    <a class="btn btn-primary" href="delete/calon.php?id=<?php echo $data['id_calon'];?>" onclick="return confirm('Yakin Ingin Menghapus Data?');"><i class="fa fa-trash"></i>Hapus</a>
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