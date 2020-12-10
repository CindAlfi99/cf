
<?php
require 'tes.php';
require 'conn.php';

if(isset($_POST['submitG'])){
    //tangkap name
   $nip = $_POST['nipG'];
   $nama = $_POST['namaG'];
   $jenkel = $_POST['pilih'];
   $telpon = $_POST['telponG'];
   $status = $_POST['statusG'];
   $foto = $_POST['fotoG'];
   //masukkan ke db
   $myquery = mysqli_query($conn, "INSERT INTO guru VALUES('','$nip','$nama','$jenkel',$telpon,'$status','$foto')");


   if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('data berhasil ditambah!');
    document.location.href='guru.php';</script>";

   
}
else{
        echo "<script>alert('data gagal dihapus!');
        document.location.href='guru.php';</script>";

}



}

?><!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Tambah</title>
</head>
<body>
<div class="container">
<h2>Add data guru</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nip">Nip</label>
      <input type="text" name="nipG" class="form-control" id="nip">
    </div>
    <div class="form-group col-md-6">
      <label for="nameguru">Nama Guru </label>
      <input type="text" name="namaG" class="form-control" id="nameguru">
    </div>
    <div class="form-group col-md-6">
      <label>Jenis Kelamin </label>
    <select class="custom-select" name="pilih">
  <option selected>Pilih jenis kelamin</option>
  <option value="wanita">Wanita</option>
  <option value="laki">Laki-laki</option>
  </select>
  </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Telepon</label>
      <input type="text"  name="telponG" class="form-control" id="inputEmail4">
    </div>
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Status</label>
      <input type="text" name="statusG" class="form-control" id="inputCity">
    </div>
   
    <div class="form-group col-md-6">
      <label for="inputZip">Foto</label>
      <input type="text" name="fotoG" class="form-control" id="inputZip">
    </div>
  </div>
  
  <button type="submit" name="submitG" class="btn btn-primary">Add data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='tes.php';">Back</button>
</div>
<script src="jquery/jquery.js"></script>
<script src="sweetalert2.all.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>