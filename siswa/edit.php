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
if (isset($_POST['submit'])) {
  //tangkap name
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $jenkel = $_POST['jk'];
  $telepon = $_POST['telpon'];
  $tgllhr = $_POST['tgllhr'];
  $agama = $_POST['agama'];
  $tahun_angkatan = $_POST['tahun_angkatan'];
  $status = $_POST['statuss'];
  $foto = $_POST['foto'];
  //ambil dan rubah
  mysqli_query($conn, "UPDATE siswa SET nis= '$nis',nama_siswa= '$nama',jenis_kelamin= '$jenkel', telepon=$telepon, tanggal_lahir= '$tgllhr',agama= '$agama',tahun_angkatan = '$tahun_angkatan',statuss='$status' WHERE id=$id");
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
          <input type="text" name="nis" class="form-control" id="nis" value="<?= $result['nis'] ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="nameguru">Nama Siswa </label>
          <input type="text" name="nama" class="form-control" id="namesiswa" value="<?= $result['nama_siswa'] ?>">
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
          <input type="number" name="telpon" class="form-control" id="inputEmail4" value="<?= $result['telepon'] ?>">
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Tanggal Lahir</label>
          <input type="date" name="tgllhr" class="form-control" id="inputCity" value="<?= $result['tanggal_lahir'] ?>">
        </div>
        <div class="form-group col-md-6">
      <label>Agama </label>
    <select class="custom-select" name="agama">
  <option selected>Pilih</option>
  <?php $array = [Islam,Kristen,Protestan,Hindu,Konghuchu];?>
  <?php foreach($array as $arr): ?>
  <option value="<?=$arr;?>" <?= $result['agama'] == $arr ? "selected" : ""
  ?>><?=$arr;?></option>
  <?php endforeach; ?>
  </select>
  </div>
        
        
        <div class="form-group col-md-6">
      <label>Tahun Ajaran </label>
    <select class="custom-select" name="tahun_angkatan">
  <option selected>Pilih</option>
  <?php $array = [2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020];?>
  <?php foreach($array as $arr): ?>
  <option value="<?=$arr;?>" <?= $result['tahun_angkatan'] == $arr ? "selected" : ""
  ?>><?=$arr;?></option>
  <?php endforeach; ?>
  </select>
  </div>
        
        <div class="form-group col-md-6">
          <label>Status </label>
          <select class="custom-select" name="statuss">
            <option selected>Pilih Status</option>
            <option value="Aktif" value="Wanita" <?= $result['statuss'] == "Aktif" ? "selected" : "" ?>>Aktif</option>
            <option value="Tidak Aktif" <?= $result['statuss'] == "TidakAktif" ? "selected" : "" ?>>Tidak Aktif</option>
          </select>
        </div>

        
        

        <div class="form-group col-md-6">
          <label for="inputZip">Foto</label>
          <input type="text" name="foto" class="form-control" id="inputZip" value="<?= $result['foto'] ?>">
        </div>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Edit data</button>
    </form>
    <!-- button back -->
    <button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='index.php';">Back</button>
  </div>
  <script src="../jquery/jquery.js"></script>
  <script src="../sweetalert2.all.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>