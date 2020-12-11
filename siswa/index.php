<?php
require '../conn.php';
$perintahQuery = "SELECT * FROM siswa";
$query = mysqli_query($conn, $perintahQuery);
//tombol show
if (isset($_POST['tampil'])) {
  $value = $_POST['show'];
  $perintahQuery = "SELECT * FROM siswa LIMIT $value";
  $query = mysqli_query($conn, $perintahQuery);
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
  <style>
    .search {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container ">
    <!-- ini datatable -->
    <form method="post" action="" class="mt-5">
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
      <div class="row mt-5 mb-4">
        <!-- tambah data -->
        <div class="col"><a href="tambahsiswa.php"><img src="../img/plus.png" width="30px"> Tambah data</a></div>
        <div class="col">
          <!-- tombol search -->
          <div>
            <nav class="navbar navbar-light float-right">
              <!-- tombol cari -->
              <form class="form-inline" action="" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" autofocus autocomplete="off" aria-label="Search" id="cari" name="cari">

              </form>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div id="search">

      <!-- table boostrap -->
      <table class="table table-striped" border="1px">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Telepon</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <!-- pengulangan
       -->
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($query)) : ?>

          <tbody>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $row['nis'] ?></td>
              <td><?= $row['nama_siswa'] ?></td>
              <td><?= $row['jenis_kelamin'] ?></td>
              <td><?= $row['telepon'] ?></td>
              <td><?= $row['tanggal_lahir'] ?></td>
              <td><?= $row['foto'] ?></td>
              <td><a href="edit.php?id=<?= $row['id']; ?>"><img src="../img/edit.png" width="30px"></a> | <a href="delete.php?id=<?= $row['id']; ?>"><img src="../img/hapus.png" onclick=" return confirm('Apakah anda ingin menghapus?');" width="30px"></a></td>
            </tr>
          </tbody>
          <?php $i++; ?>
        <?php endwhile; ?>
      </table>
    </div>
  </div>
  <!-- button back -->
  <script src="../jquery/jquery.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../ajax/ajax.js"></script>
</body>

</html>