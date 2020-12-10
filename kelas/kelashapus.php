<?php
//tangkap get
require '../conn.php';
$id= $_GET['id'];
$query =mysqli_query($conn, "DELETE FROM kelas WHERE id=$id");
if($query == true ){
   
    echo "<script>alert('data berhasil dihapus!');
    document.location.href='kelas.php';</script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus</title>
</head>
<body>
 
</body>
</html>