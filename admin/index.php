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

<<<<<<< HEAD
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
=======
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
>>>>>>> c12d42bf59dcd364cb32697b28e27bc8cc45736d

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
            @media (max-width: 576px) {
            /* Styling untuk navbar */
            .navbar-brand {
                font-size: 1.5rem;
            }
            .navbar-nav {
                flex-direction: column;
            }
            .navbar-nav .nav-item {
                margin-bottom: 0.5rem;
            }
            .navbar-nav .btn {
                margin-bottom: 0.5rem;
            }
            .form-control {
                margin-bottom: 0.5rem;
            }

<<<<<<< HEAD
    <style>
        /* wrapper */

        #wrapper {
            background-color: eee7d3;
        }

        /* custom scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 15px;
=======
            /* Styling untuk katalog */
            .col-2 {
                display: none;
            }

            /* Styling untuk card */
            .card {
                margin-bottom: 1rem;
            }
            .card-img-top {
                width: 100%;
                height: auto;
            }
>>>>>>> c12d42bf59dcd364cb32697b28e27bc8cc45736d
        }

        /* Styling untuk layar dengan lebar antara 576px dan 992px */
        @media (min-width: 576px) and (max-width: 992px) {
            .navbar-brand {
                font-size: 24px;
            }

            .navbar-toggler-icon {
                font-size: 24px;
            }

            /* Katalog */
            .catalog-item {
                width: 100%;
            }

            /* Card */
            .card {
                margin-bottom: 20px;
                width: 100%;
            }

            /* Card Title */
            .card-title {
                font-size: 18px;
            }

            /* Card Text */
            .card-text {
                font-size: 14px;
            }

            /* Card Price */
            .card-price {
                font-size: 16px;
            }
        }

        /* Styling untuk layar dengan lebar lebih dari 992px */
        @media (min-width: 992px) {
            /* Styling untuk navbar */
            .navbar-brand {
                font-size: 2rem;
            }
            .navbar-nav {
                flex-direction: row;
            }
            .navbar-nav .nav-item {
                margin-left: 1rem;
            }
            .navbar-nav .btn {
                margin-left: 1rem;
            }
            .form-control {
                margin-right: 1rem;
            }
            /* Styling untuk katalog */
            .col-2 {
                display: block;
                margin-right: 1rem;
            }

            /* Styling untuk card */
            .card {
                margin-bottom: 1rem;
            }
            .card-img-top {
                width: 100%;
                height: auto;
            }
        }

            .container {
            display: flex;
            flex-wrap: wrap;
            padding-top: 10px;
            }

<<<<<<< HEAD
        .btn:hover {
            transform: scale(1.2);
            transition: .2s;
        }

        .container {
            width: 85%;
            position: relative;
        }

        /* Style the sidebar - fixed full height */
        .sidebar {
            float: left;
            height: auto;
            width: 15%;
            z-index: 1;
            overflow-x: hidden;

            position: -webkit-sticky;
            position: -moz-sticky;
            position: -ms-sticky;
            position: -o-sticky;
            position: sticky;
            top: 0px;
            bottom: auto;
        }

        /* Style sidebar links */
        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
        }

        /* Style links on mouse-over */
        .sidebar a:hover {
            color: #f1f1f1;
        }

        /* Style the main content */
        .main {
            margin-left: 160px;
            /* Same as the width of the sidenav */
            padding: 0px 10px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body>

    <div id="wrapper" style="background-color:ee7d3;">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-transparent mb-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="https://cdn-icons-png.flaticon.com/512/3282/3282468.png" style="height:1.5rem; weight:1.5rem; margin-top: -0.2rem;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-left mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success bg-white" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="addLink">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../add.php">Add</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="loginlink">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../login/index.php">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="logoutlink">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../login/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="header" style="position: relative; text-align: center; background-color:white;">
            <img src="../images/headerAdmin3.jpeg" style=" width:100%; opacity: 0.5;">
            <!-- Hello -->
            <h3 class="display-4 mt-3" data-aos="zoom-out" style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">Hello <?php echo $_SESSION['username'] ?></h3>
            <!-- Close Hello -->
        </div>
        <br></br>

        <div id="wrapper2">
            <div class="sidebar">


                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn" onclick="filterSelection('cars')"> Atasan</button>
                    <button class="btn" onclick="filterSelection('animals')"> Bawahan</button>
                    <button class="btn" onclick="filterSelection('fruits')"> Dress</button>
                    <button class="btn" onclick="filterSelection('colors')"> Aksesoris</button>
                    <button class="btn" onclick="filterSelection('colors')"> Lain-Lain</button>
                </ul>
                <br><br><br><br><br><br>

            </div>

            <div class="container">

                <div class="row">

                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-4 col-sm-1 mb-5 col d-flex justify-content-center">
                            <div class="card" style="width: 18rem; border-radius: 15px;" data-aos="zoom-out">
                                <img src="<?php echo $row['gambar'] ?>" alt="..." style="border-radius: 15px;">
                                <div class="card-body">
                                    <h5 class="card-title" id="<?php echo $row['id'] ?>"><?php echo $row['namaServis'] ?></h5>
                                    <h6 class="card-text"><?php echo $row['kategori'] ?></h6>
                                    <p class="card-text"><?php echo $row['deskripsi'] ?></p>
                                    <h6>harga: <?php echo $row['harga'] ?></h6>

                                    <a href="../edit.php?id=<?php echo $row['id'] ?>" class="btn edit" style="border: solid 2px #80f0ff;"><i class="fa-solid fa-pen-to-square" style="color: #05c1ff;"></i></a>

                                    <a href="../delete.php?id=<?php echo $row['id'] ?>" class="btn delete" style="border: solid 2px red;"><i class="fa-solid fa-trash-can" style="color: red;"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>

        </div>


        <?php
        require '../footer2.php';
        ?>
    </div>
=======
            .col-2 {
            display: block;
            margin-right: 1rem;
            width: calc(24% - 100px);
            margin: 20px;
            position: absolute;
            top: 1;
            left: 0;
            background-color: #eee;
            padding: 10px;
            box-sizing: border-box;
            height: 100%;
            background-color: #d9b4e2;
            }

            .col-10 {
            width: calc(76% );
            margin-left: 190px ;
            padding: 5px;
            box-sizing: border-box;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            }

            .row {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            }

            .col {
            width: calc(33.33% - 20px);
            margin: 20px;
            background-color: #ddd;
            padding: 20px;
            box-sizing: border-box;
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
                background: #beafe1;
            }

            .card {
                background-color: #eee7d3;
                border-radius: 4px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                padding: 3px;
                height: 100%;
                margin-right :12px;
            }

            .card .card-img-top {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .card .card-body {
                padding: 16px;
            }

            .card .card-title {
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .card .card-text {
                font-size: 16px;
                margin-bottom: 16px;
            }

            .card .card-price {
                font-size: 20px;
                font-weight: 700;
                color: #f44336;
                margin-bottom: 8px;
            }

            .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #41beaa;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            }

            .btn:hover {
            background-color: #c8d3b8;
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

            .catalog {
            position: relative;
            }

            .catalog-filter {
            display: inline-block;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            position: absolute;
            z-index: 1;
            display: none;
            }

            .dropdown-content .catalog-item {
            padding: 5px 10px;
            border-bottom: 1px solid #ddd;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }

            .dropdown:hover .dropdown-toggle {
            background-color: #f1f1f1;
            }

            .dropdown-toggle {
            padding: 10px;
            border: none;
            background-color: transparent;
            cursor: pointer;
            }

            .catalog {
            display: flex;
            flex-direction: column;
            background-color: #ead7c3;
            }

            .catalog-item {
            padding: 3px;
            background-color: #eee7d3;
            padding-left: 35px;
            }

            .catalog-item a {
            text-decoration: none;
            color: #333;
            }

            .catalog-item:hover {
            transform: translateY(-5px);
            background-color: #c8d3b8;
            }
            
        </style>
    </head>
    <body style="background-color:#e6e6fa">
        <!-- navabar -->
        <?php
        require "navbar.php";
        ?>
        <div class="container">
            <div class="col-2">
                <div class="card" style="height: auto;">
                    <div class="card-header">
                        <button class="dropdown-toggle">KATALOG</button>
                        </div>
                        <div id="collapseOne" class="collapse show">
                        <div class="card-body">
                        <div class="catalog-item" href="#">
                            <li><a href="#">Atasan</a></li>
                            </div>
                            <div class="catalog-item" href="#">
                            <li><a href="#">Bawahan</a></li>
                            </div>
                            <div class="catalog-item" href="#">
                            <li><a href="#">Dress</a></li>
                            </div>
                            <div class="catalog-item" href="#">
                            <li><a href="#">Aksesoris</a></li>
                            </div>
                            <div class="catalog-item" href="#">
                            <li><a href="#">Lain-Lain</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="row" style="margin-bottom : 30px;">
                    <?php
                    // Query untuk mengambil data barang dari database
                    $sql = "SELECT * FROM produk";
                    $result = mysqli_query($con, $sql);
>>>>>>> c12d42bf59dcd364cb32697b28e27bc8cc45736d

			// Looping data barang
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="<?php echo $row['gambar'] ?>" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['namaServis'] ?></h5>
							<p class="card-text"><?php echo $row['deskripsi'] ?></p>
							<p class="card-price">Rp <?php echo $row['harga'] ?></p>
							<a href="#" class="btn btn-primary">Booking</a>
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
</body>

</html>