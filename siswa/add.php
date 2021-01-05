<?php
require '../conn.php';

if (isset($_POST['submitS'])) {
  //tangkap name
  $nis = $_POST['nisS'];
  $nama = $_POST['namaS'];
  $jenkel = $_POST['jk'];
  $telpon = $_POST['telponS'];
  $tgllhr = $_POST['tgllhrS'];
  $agama = $_POST['agama'];
  $tahun_angkatan = $_POST['tahun_angkatan'];
  $status = $_POST['statuss'];
 
  $foto = $_POST['fotoS'];
  //masukkan ke db
  $myquery = mysqli_query($conn, "INSERT INTO siswa VALUES('','$nis','$nama','$jenkel',$telpon,'$tgllhr','$agamaa','$tahun_angkatan','$status','$foto')");

  if (mysqli_affected_rows($conn) > 0) {
    header('Location: index.php');
  } else {
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
  <title>Tambah</title>
</head>

<body>
  <div class="container">
    <h2>Add data siswa</h2>
    <form class="mt-4" method="post" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nip">Nis</label>
          <input type="text" name="nisS" class="form-control" id="nis">
        </div>
        <div class="form-group col-md-6">
          <label for="nameguru">Nama Siswa </label>
          <input type="text" name="namaS" class="form-control" id="namesiswa">
        </div>
        <div class="form-group col-md-6">
          <label>Jenis Kelamin </label>
          <select class="custom-select" name="jk">
            <option selected>Pilih jenis kelamin</option>
            <option value="Wanita">Wanita</option>
            <option value="Laki">Laki-laki</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Telepon</label>
          <input type="text" name="telponS" class="form-control" id="inputEmail4">
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Tanggal Lahir</label>
          <input type="date" name="tgllhrS" class="form-control" id="inputCity">
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
      <label>Tahun Angkatan </label>
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
            <option selected>Pilih jenis kelamin</option>
            <option value="Aktif" value="Wanita" <?= $result['statuss'] == "Aktif" ? "selected" : "" ?>>Aktif</option>
            <option value="Tidak Aktif" <?= $result['statuss'] == "TidakAktif" ? "selected" : "" ?>>Tidak Aktif</option>
          </select>
        </div>

        

        <div class="form-group col-md-6">
          <label for="inputZip">Foto</label>
          <input type="text" name="fotoS" class="form-control" id="inputZip">
        </div>
      </div>

      <button type="submit" name="submitS" class="btn btn-primary">Add data</button>
    </form>
    <!-- button back -->
    <button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='index.php';">Back</button>
  </div>
  <script src="../jquery/jquery.js"></script>
  <script src="../sweetalert2.all.min.js"></script>

  <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>