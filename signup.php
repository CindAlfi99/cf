<?php
require 'conn.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    //cek pass1 & pass2 == sama
    if($password1 === $password2 ){
$query = mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password2')");
if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('data berhasil ditambah!');
    document.location.href='login.php';
    </script>";
    // document.location.href='kelassiswa.php';

   
}
else{
        echo "<script>alert('data gagal ditambah!');
         document.location.href='login.php';
</script>";
// document.location.href='klssistambah.php';
        exit;

}
 }
}

 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Sign Up</title>
    
</head>

<body>
    
    <div class="container mt-5">
    <h2 class="mb-5">Sign Up Here!</h2>
<form method="post"action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password1" name="password1">
  </div>
  <div class="mb-3">
    <label for="password2" class="form-label"> Konfirm Password</label>
    <input type="password" class="form-control" id="password2" name="password2">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>

<script src="jquery/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>

