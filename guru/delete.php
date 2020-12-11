<?php
//tangkap get
require 'conn.php';
$id= $_GET['id'];
$query =mysqli_query($conn, "DELETE FROM guru WHERE id=$id");
if($query == true ){
    header('Location: index.php');
    exit;
}

?>