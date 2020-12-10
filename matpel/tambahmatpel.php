
<?php
require '../tes.php';
require '../conn.php';

if(isset($_POST['submitS'])){
    //tangkap name
   $matpel = $_POST['kodMatpel'];
   $namaMatpel = $_POST['namMatpel'];
   $ket = $_POST['radio'];
   //masukkan ke db
   $myquery = mysqli_query($conn, "INSERT INTO matpelsiswa VALUES('','$matpel','$namaMatpel','$ket')");


   if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('data berhasil ditambah!');
    document.location.href='matpelsiswa.php';</script>";

   
}
else{
        echo "<script>alert('data gagal ditambah!');
        document.location.href='matpelsiswa.php';</script>";

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
<h2>Add data mata pelajaran</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="kodMatpel">Kode Mata Pelajaran</label>
      <input type="text" name="kodMatpel" class="form-control" id="kodMatpel">
    </div>
    <div class="form-group col-md-6">
      <label for="matpel">Nama Mata pelajaran </label>
      <input type="text" name="namMatpel" class="form-control" id="matpel">
    </div>
         <!-- radiobutton -->
         
         <div class="form-check form-check-inline">
         <label class="mr-4">Keterangan</label>
  <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Wajib">
  <label class="form-check-label" for="inlineRadio1">Wajib</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Tambahan">
  <label class="form-check-label" for="inlineRadio2">Tambahan</label>
</div>
<!-- batas -->
</div>

  
  <button type="submit" name="submitS" class="btn btn-primary mt-5">Add data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='../tes.php';">Back</button>
</div>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert2.all.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>