<?php
require '../conn.php';
require '../tes.php';
$perintahQuery = "SELECT * FROM siswa";
$query = mysqli_query($conn,$perintahQuery);
//tombol show
if(isset($_POST['tampil'])){
  $value = $_POST['show'];
$perintahQuery= "SELECT * FROM siswa LIMIT $value";
$query = mysqli_query($conn,$perintahQuery);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Siswa</title>
    <style> .search{
        display:none;
    }
    /* @media print {
      .tambahdata{
        display:none;
      }
    } */
   
    </style> 
    
</head>
<body>
    <div class="container ">
    <!-- ini datatable -->
    <form method="post" action="" class="mt-5 show">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="show" id="show">
        <option selected>Show</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <button type="submit" name="tampil">Tampil</button>
    </form>
    
        <!-- ini grid  -->
        <div class="container">
        <br>
    <h1>Laporan Guru</h1>
  <div class="row mt-5 mb-4">
      <!-- tambah data -->
    <div class="col tambahdata"><a href="add.php"><img src="../img/plus.png" width="30px"> Tambah data</a> |<a href="cetak.php"> Cetak  <img src="../img/printer.png" alt="" width="30px"></a></div>
    

    <div class="col"><!-- tombol search -->
        <div>
    <nav class="navbar navbar-light float-right">
     <!-- tombol cari -->
  <form class="form-inline" action="" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" autofocus autocomplete="off"  aria-label="Search" id="cari" name="cari">
   
  </form>
</nav>
</div></div>
</div>
</div>
<div id="search">
        
          <!-- table boostrap -->
    <table class="table table-striped" border="1px">
  <thead>
    <tr>
    <th scope="col">No</th>
      <!-- <th scope="col">Kode Siswa </th> -->
      <th scope="col">Nis</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">No_telp</th>
      <th scope="col">Tahun Angkatan</th>
      <th scope="col">Status</th>
      <th scope="col">Foto</th>
      
      
    </tr>
  </thead>
  <!-- pengulangan
       -->
  <?php $i=1;?>
    <?php while($row = mysqli_fetch_assoc($query)):?>

        <tbody>
    <tr>
    <th scope="row"><?=$i;?></th>

      <td><?= $row['nis']?></td>
      <td><?= $row['nama_siswa']?></td>
      <td><?= $row['jenis_kelamin']?></td>
      <td><?= $row['agama']?></td>
      <td><?= $row['telepon']?></td>
      <td><?= $row['tahun_angkatan']?></td>
      
      <td><?= $row['statuss']?></td>
      <td><?= $row['foto']?></td>
    
    </tr>

    </tr>
  </tbody>
  <?php $i++;?>
   <?php endwhile;?>
</table>
</div>
   </div>
   <!-- button back -->
<button type="button" class="btn back btn-link mt-5 float-right d-block" onclick="document.location.href='../tes.php';">Back</button>
   <script src="../jquery/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../ajax/ajax.js"></script>

</body>
</html>