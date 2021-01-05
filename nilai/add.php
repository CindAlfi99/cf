<?php
require '../tes.php';
require '../conn.php';

if(isset($_POST['submit'])){
    //tangkap name
    $nis = $_POST['nis'];
 
    $namasiswa = $_POST['nama_siswa'];
    $semester = $_POST['semester'];
    $matpel= $_POST['matpel'];
    $tugas1 = $_POST['tugas1'];
    $tugas2 = $_POST['tugas2'];
    $tugas3 = $_POST['tugas3'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
   
   //masukkan ke db
   $myquery = mysqli_query($conn, "INSERT INTO nilai VALUES('','$nis','$namasiswa','$semester','$matpel','$tugas1','$tugas2','$tugas3','$uts', '$uas')");


   if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('data berhasil ditambah!');
    document.location.href='nilai.php';</script>";

   
}
else{
        echo "<script>alert('data gagal ditambah!');
        document.location.href='nilai.php';</script>";
       
        exit;

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
<h2>Add Nilai</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nis">Nis</label>
      <input type="text" name="nis" class="form-control" id="nis" >
    </div>
    <div class="form-group col-md-6">
      <label for="namsis">Nama Siswa</label>
      <input type="text" name="nama_siswa" class="form-control" id="namsis">
    </div>
             <!-- radiobutton -->
         
             <div class="form-group col-md-6">
      <label>Semester </label>
    <select class="custom-select" name="semester">
  <option selected>Pilih</option>
  <?php $array = [1,2];?>
  <?php foreach($array as $arr): ?>
  <option value="<?=$arr;?>"><?=$arr;?></option>
  <?php endforeach; ?>
  </select>
  </div>

<!-- batas -->
<div class="form-group col-md-6">
      <label for="matpel">Mata Pelajaran</label>
      <input type="text" name="matpel" class="form-control" id="matpel">
    </div>
    <div class="form-group col-md-6">
      <label for="tgs1">Tugas I</label>
      <input type="number" name="tugas1" class="form-control" id="tgs1" >
    </div>
    <div class="form-group col-md-6">
      <label for="tugas2">Tugas II</label>
      <input type="number" name="tugas2" class="form-control" id="tugas2" >
    </div>
    <div class="form-group col-md-6">
      <label for="tugas3">Tugas III</label>
      <input type="number" name="tugas3" class="form-control" id="tugas3" >
    </div>
    <div class="form-group col-md-6">
      <label for="uts">UTS</label>
      <input type="number" name="uts" class="form-control" id="uts">
    </div>
    <div class="form-group col-md-6">
      <label for="uas">UAS</label>
      <input type="number" name="uas" class="form-control" id="uas">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='../tes.php';">Back</button>
</div>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert2.all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>