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
$edit = mysqli_query($conn, "SELECT * FROM matpelsiswa WHERE id= $id");
//ambil data
$result = mysqli_fetch_assoc($edit);
//ketika tombol edit diklik
if(isset($_POST['submitG'])){
 //tangkap name
 $matpel = $_POST['kodMatpel'];
 $namaMatpel = $_POST['namMatpel'];
 $ket = $_POST['radio'];

 //masukkan ke db
    //ambil dan rubah
    mysqli_query($conn, "UPDATE matpelsiswa SET kode_matpel= '$matpel',nama_matpel= '$namaMatpel',keterangan= '$ket' WHERE id=$id");
    //jika berhasil
    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('data berhasil diubah!');
        document.location.href='matpelsiswa.php';</script>";
    }else{
        echo "<script>alert('data gagal diubah!');
        document.location.href='matpeledit.php';</script>";
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
<body>
<div class="container">
<h2>Edit Mata Pelajaran</h2>
<form class="mt-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="matpel">Kode Mata Pelajaran</label>
      <input type="text" name="kodMatpel" class="form-control" id="matpel" value="<?= $result['kode_matpel']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="nammatpel">Nama Mata Pelajaran </label>
      <input type="text" name="namMatpel" class="form-control" id="nammatel" value="<?= $result['nama_matpel']?>">
    </div>
             <!-- radiobutton -->
         
             <div class="form-check form-check-inline">
         <label class="mr-4">Keterangan</label>
  <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="Wajib" <?php if($result['keterangan']=='Wajib') echo "checked";?>>
  <label class="form-check-label" for="inlineRadio1">Wajib</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="Tambahan" <?php if($result['keterangan']=='Tambahan') echo "checked";?>>
  <label class="form-check-label" for="inlineRadio2">Tambahan</label>
</div>
<!-- batas -->
  </div>
  <button type="submit" name="submitG" class="btn btn-primary">Edit data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='tes.php';">Back</button>
</div>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert2.all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>