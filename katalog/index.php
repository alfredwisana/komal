<?php
require '../connect.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- AOS Animate on Scroll -->
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" integrity="sha512-xxxxxx" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js" integrity="sha512-xxxxxx" crossorigin="anonymous"></script>

    <style>
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
            background: #beafe1;
        }

        .card {
        width: 300px;
        height: 400px;
        background-color: #eee7d3;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        margin-bottom: 30px;
        }

        .card-img-top {
        height: 200px;
        object-fit: cover;
        }

        .card-body {
        padding: 20px;
        }

        .card-text {
        font-size: 16px;
        margin-bottom: 20px;
        }

        .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        }

        .card-price {
        font-weight: bold;
        font-size: 18px;
        margin-top: 10px;
        }

        @media (max-width: 767.98px) {
        .card-img-top {
            height: 150px;
        }
        }

        .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #C8d3b8;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        }

        .btn:hover {
        background-color: #beafe1;
        }
         */

        nav {
        font-family: Arial, sans-serif;
        }

        nav a {
        color: #333;
        text-decoration: none;
        padding: 10px;
        }

        nav .nav-link.active {
        font-weight: bold;
        }

        nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        }

        nav ul li {
        display: inline-block;
        padding: 10px;
        }

        nav ul li a {
        display: block;
        padding: 10px;
        text-decoration: none;
        }

        nav ul li:hover > .dropdown-content {
        display: block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #d9b4e2;
        z-index: 1;
        }

        .dropdown-content li {
        display: block;
        
        }

        .dropdown-content li a {
        color: #333;
        padding: 5px;
        text-decoration: none;
        }

        .dropdown-content li:hover {
        margin-top: 8px;
        display: block;
        padding: 10px;
        background-color: #beafe1;
        }

    </style>
</head>

<body style="background-color:#EAD7c3">
    <!-- navabar -->
    <nav class="navbar navbar-expand-lg mb-5" style="background-color:#d9b4e2">
        <div class="container-fluid" >
            <h1 class="navbar-brand" href="index.php">Website Pijat</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="Home">
                        <a href="#">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Kategori</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Atasan</a></li>
                            <li><a href="#">Bawahan</a></li>
                            <li><a href="#">Dress</a></li>
                            <li><a href="#">Aksesoris</a></li>
                            <li><a href="#">Lain-Lain</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="loginlink">
                    <li class="nav-item">
                        <a class="btn btn-primary" aria-current="page" href="login/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">  
            <div class="row">
                <?php
                    // Query untuk mengambil data barang dari database
                    $sql = "SELECT * FROM services";
                    $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $row['gambar'] ?>" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['namaServis'] ?></h5>
                                <p class="card-text"><?php echo $row['deskripsi'] ?></p>
                                <p class="card-price">Rp <?php echo $row['harga'] ?></p>
                                <a href="booking.php" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            ?>
            </div>
        </div>    
        <?php
            require '../footer2.php';
        ?>
    </div>    
</body>
</html>