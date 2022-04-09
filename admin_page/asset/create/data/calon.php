<script src="data/jquery.min.js"></script>

<script type="text/javascript">
function readURL(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader

reader.onload = function (e) { // Mulai pembacaan file
$('#preview_gambar') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(150); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};

reader.readAsDataURL(input.files[0]);
}
}
</script>

<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Calon Kandidat</h3>
        </div>
        <form method="POST" action="action/calon.php" class="box-header" enctype="multipart/from-data">
          <table>
            <tr>
              <td width="100px"><label>Foto Kandidat</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3">
                <img id="preview_gambar" src="#" alt="Gambar Anda (maks 1 MB)"><br><br>
                <input type="file" name="gambar" onchange="readURL(this);">
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><input type="hidden" name="id"></td>
            </tr>
            <tr>
              <td width="150px"><label>Nama Ketua Umum</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="100px">
                <input class="form-control" placeholder="Nama..." required="true" name="nama" type="text">
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Nama Ketua 1</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="100px">
                <input class="form-control" placeholder="Nama..." required="true" name="nama" type="text">
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Nama Ketua 2</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="100px">
                <input class="form-control" placeholder="Nama..." required="true" name="nama" type="text">
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Visi</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3">
                <textarea class="form-control" name="visi"></textarea>
              </td>
            </tr>
            <tr>
              <td width="100px"><label>Misi</label></td>
              <td width="40px" align="center"><label>:</label></td>
              <td colspan="3" height="150px">
                <textarea class="form-control" name="misi"></textarea>
              </td>
            </tr>
            <tr> 
              <td colspan="2" height="20px"></td>
              <td width="198px">
                <input type="submit" required="true" name="submit" value="Tambah Calon" class="btn btn-block btn-success btn-flat">
              </td>
              <td width="10px"></td>
              <td width="198px">
                <a class="btn btn-block btn-danger btn-flat" href="../calon.php" onclick="return confirm('Batalkan Penambahan Data??')">Batal</a>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</section><!-- /.content -->
