<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baby Shop</title>

    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS Animate on Scroll -->
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        #wrapper {
            background-color: #EEE7D3;

        }

        /* custom scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 15px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px lightblue;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: lightblue;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: lightblue;
        }

        .btn:hover {
            transform: scale(1.2);
            transition: .2s;
        }

        .button {
  padding: 1em 2em;
  border: none;
  border-radius: 5px;
  font-weight: bold;
  letter-spacing: 5px;
  text-transform: uppercase;
  color: white;
  background-color: #d9b4e2;
  transition: all 1000ms;
  font-size: 15px;
  position: relative;
  overflow: hidden;
  outline: 2px solid #beafe1;
  width: 10rem;

  left: 45%;
}

button:hover {
  color: #ffffff;
  transform: scale(1.1);
  outline: 2px solid #beafe1;
  box-shadow: 4px 5px 17px -4px #d9b4e2;
}

button::before {
  content: "";
  position: absolute;
  left: -50px;
  top: 0;
  width: 0;
  height: 100%;
  background-color: #beafe1;
  transform: skewX(45deg);
  z-index: -1;
  transition: width 1000ms;
}

button:hover::before {
  width: 250%;
}
    </style>
</head>

<body>
    <div id="wrapper">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="indexadmin.php">Baby Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-center mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-5 d-flex mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="add.php">Add Services</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="logoutlink">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-1 mb-5 col d-flex justify-content-center">
                    <div class="card" style="width: 18rem; border-radius: 15px;" data-aos="zoom-out">
                        <img src="../images/dummy.png" alt="..." class="card-img-top" style="border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title" id="namaServis">Nama Barang</h5>
                            <h6 class="card-text">Kategori Barang</h6>
                            <p class="card-text">Deskripsi</p>
                            <h6>Harga: </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <form action="addprocess.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Barang</label>
                            <input type="text" id="nama" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kategori</label>
                            <input type="text" id="kategori" name="kategori" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Deskripsi Barang</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Harga</label>
                            <input type="text" id="harga" name="harga" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan File</label>
                            <input type="file" id="gambar" name="gambar">
                        </div>
                        <div class="row mt-5">
                            <button class="button" style="background-color: d9b4e2;" name="Add">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        require '../footer2.php';
        ?>
    </div>


</body>

<script>
    // <!-- initialize AOS -->
    AOS.init();
</script>

</html>