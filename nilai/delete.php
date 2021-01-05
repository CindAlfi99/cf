<?php
//tangkap get
require '../conn.php';
$id= $_GET['id'];
$query =mysqli_query($conn, "DELETE FROM nilai WHERE id=$id");
if($query == true ){
   
    header('Location: nilai.php');
    exit;
}

?>