  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Siswa/i SMK Bina dan Bakti Putra Mandiri</h3>
        </div>
        <div class="box-header">
          <a class="btn btn-primary btn-flat" href="create/anggota.php">Tambah Siswa/i</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>NIS Siswa</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Status Pemilih</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    include "../koneksi/connect.php";
                    $no = 1;
                    $sql = "
                    SELECT 
                    tab_siswa.nis, tab_siswa.nama, tab_siswa.gender, tab_kelas.nama_kelas, tab_siswa.status
                    FROM 
                    tab_siswa left join tab_kelas
                    ON
                    tab_kelas.id_kelas = tab_siswa.id_kelas
                    ORDER BY tab_kelas.id_kelas, tab_siswa.nis
                    ";
                    if (!$result = mysqli_query($koneksi, $sql)) {
                      die('ERROR : '.mysqli_error($koneksi));
                    }
                    else{
                      if (mysqli_num_rows($result) > 0) {
                        //ouput data
                        while ($data = mysqli_fetch_assoc($result) ) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['nis']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['gender']; ?></td>
                  <td><?php echo $data['nama_kelas']; ?></td>
                  <td><?php echo $data['status']; ?></td>
                  <td align="center">
                    <a class="btn btn-primary" href="update/anggota.php?id=<?php echo $data['nis'];?>"><i class="fa fa-edit"></i> Edit</a> 
                    <a class="btn btn-primary" href="delete/anggota.php?id=<?php echo $data['nis'];?>" onclick="return confirm('Yakin Ingin Menghapus Data?');"><i class="fa fa-trash"></i> Hapus</a>
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