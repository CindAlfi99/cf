<?php
require 'tes.php';
require 'conn.php';

//tangkap get
$id= $_GET['id'];
//edit data
$edit = mysqli_query($conn, "SELECT * FROM guru WHERE id= $id");
//ambil data
$result = mysqli_fetch_assoc($edit);
//ketika tombol edit diklik
if(isset($_POST['submitG'])){
    //tangkap name
    $nip = $_POST['nipG'];
    $nama = $_POST['namaG'];
    $jenkel = $_POST['jk'];
    $telpon = $_POST['telponG'];
    $status = $_POST['statusG'];
    $foto = $_POST['fotoG'];
    //ambil dan rubah
    mysqli_query($conn, "UPDATE guru SET nip= '$nip',nama_guru= '$nama',jenis_kelamin= '$jenkel', telpon=$telpon, statuss= '$status', foto='$foto' WHERE id=$id");
    //jika berhasil
    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('data berhasil diubah!');
        document.location.href='tes.php';</script>";
    }

exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Edit </title>
</head>
<body>
<body>
<div class="container">
<h2>Edit Data Guru</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nip">Nip</label>
      <input type="text" name="nipG" class="form-control" id="nip" value="<?= $result['nip']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="nameguru">Nama Guru </label>
      <input type="text" name="namaG" class="form-control" id="nameguru" value="<?= $result['nama_guru']?>">
    </div>
    <!-- option -->
    <div class="form-group col-md-6">
      <label>Jenis Kelamin </label>
    <select class="custom-select" name="jk" value="<?= $result['jenis_kelamin']?>">
  <option value="wanita">Wanita</option>
  <option value="laki-laki">Laki-laki</option>
  </select>
  </div>
  <!-- batas -->
    <div class="form-group col-md-6">
      <label for="inputEmail4">Telepon</label>
      <input type="text"  name="telponG" class="form-control" id="inputEmail4" value="<?= $result['telpon']?>">
    </div>
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputstatus">Status</label>
      <input type="text" name="statusG" class="form-control" id="inputstatus" value="<?= $result['statuss']?>">
    </div>
   
    <div class="form-group col-md-6">
      <label for="inputfoto">Foto</label>
      <input type="text" name="fotoG" class="form-control" id="inputfoto" value="<?= $result['foto']?>">
    </div>
  </div>
  
  <button type="submit" name="submitG" class="btn btn-primary">Edit data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='tes.php';">Back</button>
</div>
<script src="jquery/jquery.js"></script>
<script src="sweetalert2.all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>