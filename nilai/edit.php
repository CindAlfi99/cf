<?php
require '../tes.php';
require '../conn.php';

//tangkap get
// $id= $_GET['id'];
if(isset($_GET['id'])){
  $id= $_GET['id'];
}else{
  echo "<h1> Halaman tidak ditemukan</h1>";
  exit;
}
//edit data
$edit = mysqli_query($conn, "SELECT * FROM nilai WHERE id= $id");
//ambil data
$result = mysqli_fetch_assoc($edit);
//ketika tombol edit diklik
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
    //ambil dan rubah
    mysqli_query($conn, "UPDATE nilai SET nis= '$nis',nama_siswa= '$namasiswa',matpel= '$matpel', tugas1='$tugas1',tugas2='$tugas2',tugas3='$tugas3',uts='$uts',uas='$uas' WHERE id=$id");
    //jika berhasil
    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('data berhasil diubah!');
        document.location.href='nilai.php';</script>";
    }else{
        echo "<script>alert('data gagal diubah!');
        document.location.href='nilai.php';</script>";
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
<h2>Edit Nilai</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nis">Nis</label>
      <input type="text" name="nis" class="form-control" id="nis" value="<?= $result['nis']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="namsis">Nama Siswa</label>
      <input type="text" name="nama_siswa" class="form-control" id="namsis" value="<?= $result['nama_siswa']?>">
    </div>
             <!-- radiobutton -->
         
             <div class="form-group col-md-6">
      <label>Semester </label>
    <select class="custom-select" name="semester">
  <option selected>Pilih</option>
  <?php $array = [1,2];?>
  <?php foreach($array as $arr): ?>
  <option value="<?=$arr;?>" <?=  $result['semester'] == $arr ? "selected" : ""
  
  ?>><?=$arr;?></option>
  <?php endforeach; ?>
  </select>
  </div>

<!-- batas -->
<div class="form-group col-md-6">
      <label for="matpel">Mata Pelajaran</label>
      <input type="text" name="matpel" class="form-control" id="matpel" value="<?= $result['matpel']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="tgs1">Tugas I</label>
      <input type="text" name="tugas1" class="form-control" id="tgs1" value="<?= $result['tugas1']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="tugas2">Tugas II</label>
      <input type="text" name="tugas2" class="form-control" id="tugas2" value="<?= $result['tugas2']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="tugas3">Tugas III</label>
      <input type="text" name="tugas3" class="form-control" id="tugas3" value="<?= $result['tugas3']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="uts">UTS</label>
      <input type="text" name="uts" class="form-control" id="uts" value="<?= $result['uts']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="uas">UAS</label>
      <input type="text" name="uas" class="form-control" id="uas" value="<?= $result['uas']?>">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Edit data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='../tes.php';">Back</button>
</div>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert2.all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>