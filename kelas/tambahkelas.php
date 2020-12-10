<?php
require '../tes.php';
require '../conn.php';

if(isset($_POST['submitS'])){
    //tangkap name
   $kodKelas = $_POST['kelas'];
   $tahunAj = $_POST['thnajaran'];
   $kelas = $_POST['kelas'];
   $namaGuru = $_POST['namaG'];
   $status = $_POST['status'];
   //masukkan ke db
   $myquery = mysqli_query($conn, "INSERT INTO kelas VALUES('','$kodKelas','$tahunAj','$kelas','$namaGuru','$status')");


   if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('data berhasil ditambah!');
    document.location.href='kelas.php';</script>";

   
}
else{
        echo "<script>alert('data gagal ditambah!');
        document.location.href='kelas.php';</script>";

}



}

?><!DOCTYPE html>
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
<h2>Add data kelas</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="kelas">Kode Kelas</label>
      <input type="text" name="kelas" class="form-control" id="kelas">
    </div>
    <!-- select option tahun ajaran -->
    <div class="form-group col-md-6">
      <label>Tahun Ajaran </label>
    <select class="custom-select" name="thnajaran">
  <option selected>Pilih</option>
  <?php $array = [2010,2011,2012,2013,2014,2015,2016,2017,2018,2019];?>
  <?php foreach($array as $arr): ?>
  <option value="<?=$arr;?>"><?=$arr;?></option>
  <?php endforeach; ?>
  </select>
  </div>
    <!-- batas -->
    <div class="form-group col-md-6">
      <label for="kelas">Kelas</label>
      <input type="text" name="kelas" class="form-control" id="kelas">
    </div>
    <div class="form-group col-md-6">
      <label for="namaG">Nama Guru</label>
      <input type="text"  name="namaG" class="form-control" id="namaG">
    </div>
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="status">Status</label>
      <input type="text" name="status" class="form-control" id="status">
    </div>
   
    
  </div>
  
  <button type="submit" name="submitS" class="btn btn-primary">Add data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='../tes.php';">Back</button>
</div>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert2.all.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>