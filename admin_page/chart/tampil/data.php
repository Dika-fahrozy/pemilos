

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tabel Siswa/i SMK Bina dan Bakti Putra Mandiri</h3>
      </div>
      <div class="box-header">
        <a class="btn btn-primary btn-flat" style="width: 150px;" href="cetak.php">cetak</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>NIS Siswa</th>
              <th>Nama Lengkap</th>
              <th>Id Calon Terpilih</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../koneksi/connect.php";
            $no = 1;
            $sql = "
            SELECT 
            tab_siswa.nis, tab_siswa.nama, tab_suara.id_calon 
            FROM 
            tab_siswa right JOIN tab_suara
            ON
            tab_siswa.nis = tab_suara.nis
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
                    <td><?php echo $data['id_calon']; ?></td>
                    <td align="center">
                      <a class="btn btn-warning" href="delete.php?id=<?php echo $data['nis'];?>" onclick="return confirm('Yakin Ingin Menghapus Data?');"><i class="fa fa-trash"></i>   Hapus Data</a>
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