<?php
require '../tes.php';
require '../conn.php';

//if,get terpanggil
// $id= $_GET['id'];
if(isset($_GET['id'])){
  $id= $_GET['id'];
}else{
  echo "<h1> Halaman tidak ditemukan</h1>";
  exit;
}

//edit data
$edit = mysqli_query($conn, "SELECT * FROM kelassiswa WHERE id= $id");

//ambil data
$result = mysqli_fetch_assoc($edit);
//ketika tombol edit diklik

if(isset($_POST['submitS'])){
 //tangkap name
 $nis = $_POST['nis'];
 $nama = $_POST['namasis'];
 $jurusan = $_POST['jurusan'];
 $tahunAj = $_POST['thnajaran'];
 $kelas = $_POST['kelas'];
 $namkel = $_POST['namaK'];
 $walikel = $_POST['namaW'];
 $status = $_POST['statuss'];
 
//  var_dump($_POST);
//  exit;
 //masukkan ke db
    //ambil dan rubah
    mysqli_query($conn, "UPDATE kelassiswa SET nis='$nis',nama_siswa='$nama',jurusan='$jurusan',tahun_ajaran='$tahunAj',kelas='$kelas',nama_kelas='$namkel',wali_kelas='$walikel',statuss='$status' WHERE id=$id");
    //jika berhasil
    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('data berhasil diubah!');
        document.location.href='kelassiswa.php';</script>";
    }else{
        echo "<script>alert('data gagal diubah!');
        document.location.href='kelassiswa.php';</script>";
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
      <label for="nis">Nis</label>
      <input type="text" name="nis" class="form-control" id="nis" value="<?=$result['nis']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="namasis">Nama Siswa</label>
      <input type="text" name="namasis" class="form-control" id="namasis" value="<?=$result['nama_siswa']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="jurusan">Jurusan</label>
      <input type="text" name="jurusan" class="form-control" id="jurusan" value=" <?=$result['jurusan'];?>">
    </div>

    <!-- select option tahun ajaran -->
    <div class="form-group col-md-6">
      <label>Tahun Ajaran </label>
    <select class="custom-select" name="thnajaran">
  <option selected>Pilih</option>
  <?php $array = [2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020];?>
  <?php foreach($array as $arr): ?>
  <option value="<?=$arr;?>" <?= $result['tahun_ajaran'] == $arr ? "selected" : ""
  ?>><?=$arr;?></option>
  <?php endforeach; ?>
  </select>
  </div>
    <!-- batas -->
    <div class="form-group col-md-6">
      <label for="kelas">Kelas</label>
      <input type="text" name="kelas" class="form-control" id="kelas" value=" <?= $result['kelas'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="namaK">Nama Kelas</label>
      <input type="text"  name="namaK" class="form-control" id="namaK" value=" <?= $result['nama_kelas'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="namaW">Wali Kelas</label>
      <input type="text"  name="namaW" class="form-control" id="namaW" value=" <?= $result['wali_kelas'] ?>">
    </div>
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="status">Status</label>
      <input type="text" name="statuss" class="form-control" id="status" value="<?=$result['statuss']?>">
    </div>
   
    
  </div>
  
  <button type="submit" name="submitS" class="btn btn-primary">Add data</button>
</form>
<!-- button back -->
<button type="button" class="btn btn-link mt-5 float-right" onclick="document.location.href='tes.php';">Back</button>
</div>
<script src="../jquery/jquery.js"></script>
<script src="../sweetalert2.all.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>