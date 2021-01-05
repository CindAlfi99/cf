
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
    <style>
        .position {
            width: 50%;
        }
        
        .navbar {
            margin-right: 120px;
        }
        
        ul li:hover a {
            opacity: 0.9;
        }
    </style>
</head>

<body>


    <div class="container m-0 p-0 mt-5">
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-light mr-0 pr-0 ">
            <a class="navbar-brand" href="#">
                <img src="girls.jpg.jpg" width="30" height="30" alt="" loading="lazy">
            </a>

            <!-- 
    sidebar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="tes.php">Dasboard </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="guru/index.php">Guru</a>
                                <a class="dropdown-item" href="siswa/index.php">Siswa</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Akademik
                  </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="kelas/kelas.php">Kelas</a>
                                <a class="dropdown-item" href="matpel/matpelsiswa.php">Mata Pelajaran</a>
                                <a class="dropdown-item" href="kelassiswa/kelassiswa.php">Kelas Siswa</a>
                                <a class="dropdown-item" href=nilai/nilai.php>Nilai</a>
                              
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cetak</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="laporanGuru/siswa.php">Laporan Siswa</a>
                                <a class="dropdown-item" href="#">Laporan Guru</a>
                                <a class="dropdown-item" href="#">Laporan Kelas</a>
                                <a class="dropdown-item" href="#">Laporan Nilai</a>
                                <a class="dropdown-item" href="#">Laporan Pelajaran</a>
                            </div>


                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Keluar</a>
                        </li>
                    </ul>

                    <form class="form-inline search my-2 my-lg-0 ml-4">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- nav-logo -->
        </nav>

    </div>
    <script src="jquery/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>