<?php
// require '../tes.php';
require '../conn.php';

//tangkap get
$alert = '';
$id = $_GET['id'];
// if(isset($_GET['id'])){
//     $id= $_GET['id'];
//   }else{
//     echo "<h1> Halaman tidak ditemukan</h1>";
//     exit;
//   }
//edit data
$edit = mysqli_query($conn, "SELECT * FROM siswa WHERE id= $id");
//ambil data
$result = mysqli_fetch_assoc($edit);
//ketika tombol edit diklik
if (isset($_POST['submitG'])) {
  //tangkap name
  $nis = $_POST['nisS'];
  $nama = $_POST['namaS'];
  $jenkel = $_POST['jk'];
  $telepon = $_POST['telponS'];
  $tgllhr = $_POST['tgllhrS'];
  $foto = $_POST['fotoS'];
  //ambil dan rubah
  mysqli_query($conn, "UPDATE siswa SET nis= '$nis',nama_siswa= '$nama',jenis_kelamin= '$jenkel', telepon=$telepon, tanggal_lahir= '$tgllhr' WHERE id=$id");
  //jika berhasil
  if (mysqli_affected_rows($conn) > 0) {
    header('Location: index.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Edit </title>
</head>

<body>
  <div class="container">
    <h2>Edit Data Siswa</h2>
    <form class="mt-4" method="post" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nis">Nis</label>
          <input type="text" name="nisS" class="form-control" id="nis" value="<?= $result['nis'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="nameguru">Nama Siswa </label>
          <input type="text" name="namaS" class="form-control" id="namesiswa" value="<?= $result['nama_siswa'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Jenis Kelamin </label>
          <select class="custom-select" name="jk">
            <option selected>Pilih jenis kelamin</option>
            <option value="Wanita" value="Wanita" <?= $result['jenis_kelamin'] == "Wanita" ? "selected" : "" ?>>Wanita</option>
            <option value="Laki" <?= $result['jenis_kelamin'] == "Laki" ? "selected" : "" ?>>Laki-laki</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Telepon</label>
          <input type="text" name="telponS" class="form-control" id="inputEmail4" value="<?= $result['telepon'] ?>">
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Tanggal Lahir</label>
          <input type="text" name="tgllhrS" class="form-control" id="inputCity" value="<?= $result['tanggal_lahir'] ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="inputZip">Foto</label>
          <input type="text" name="fotoS" class="form-control" id="inputZip" value="<?= $result['foto'] ?>">
        </div>
      </div>

      <button type="submit" name="submitG" class="btn btn-primary">Edit data</button>
    </form>
    <!-- button back -->
    <button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='index.php';">Back</button>
  </div>
  <script src="../jquery/jquery.js"></script>
  <script src="../sweetalert2.all.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>