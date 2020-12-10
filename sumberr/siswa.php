<?php

$inputCari = $_GET['inputCari'];
$conn =mysqli_connect('localhost','root','','sekolah');
$result =mysqli_query($conn,"SELECT * FROM mahasiswa WHERE npm LIKE '%$inputCari%' OR nama LIKE '%$inputCari%' OR email LIKE '%$inputCari%' OR jurusan LIKE '%$inputCari%'");
$rows = [];
while($row = mysqli_fetch_assoc($result)){
$rows[] = $row;
//cek seluruh data mahasiswa

}
?>
       <!-- table boostrap -->
       <table class="table table-striped" border="1px">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nip</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">telpon</th>
      <th scope="col">Status</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <!-- pengulangan
       -->
  <?php $i=1;?>
  <?php foreach($rows as $row): ?>

        <tbody>
    <tr>
    <th scope="row"><?=$i;?></th>
    <td><?= $row['nip']?></td>
      <td><?= $row['nama_guru']?></td>
      <td><?= $row['jenis_kelamin']?></td>
      <td><?= $row['telpon']?></td>
      <td><?= $row['statuss']?></td>
      <td><?= $row['foto']?></td>
      <td><a href="editguru.php?id=<?= $row['id'];?>"><img src="img/edit.png" width="20px"></a> | <a href="guruhapus.php?id=<?= $row['id'];?>"><img src="img/hapus.png" onclick=" return confirm('Apakah anda ingin menghapus?');"width="20px"></a></td>
    </tr>
  </tbody>
  <?php $i++;?>
  <?php endforeach;?>
</table>