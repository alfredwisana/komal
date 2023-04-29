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
        <nav class="navbar navbar-expand-lg mb-5" style="background-color:#d9b4e2">
            <div class="container-fluid" >
                <h3><span>Berkah Jaya</span> Baby Shop</h3>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="loginlink">
                        <li class="nav-item">
                            <a class="btn btn-primary" aria-current="page" href="../add.php" >Add</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" aria-current="page" href="login/logout.php" >Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
	require 'footer.php';
	?>
</body>

</html>