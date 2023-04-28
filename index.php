<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<title>Homepage</title>
=======
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
            background: lightblue;
        }

        .btn:hover {
            transform: scale(1.2);
            transition: .2s;
        }

        .card {
        margin-bottom: 30px;
        }

        .card-img-top {
        height: 200px;
        object-fit: cover;
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
    </style>
>>>>>>> 4f3ea8f62e4316407a8bfdee6f6252dfcbc27349
</head>
<body>
    
	<div id="topnav">
    <?php
        require 'navbar.php';
    ?>
	</div>

	<div class="content">
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
		    	<div class="carousel-item active">
		    		<a href="https://www.asus.com"><img id="carouselImage" src="images/dummy.jpg" class="d-block w-100"></a>
		    	</div>
		    	<div class="carousel-item">
		      		<a href="https://www.asus.com"><img id="carouselImage" src="images/dummy.jpg" class="d-block w-100"></a>
		    	</div>
		    	<div class="carousel-item">
		      		<a href="https://www.asus.com"><img id="carouselImage" src="images/dummy.jpg" class="d-block w-100"></a>
		    	</div>
		  	</div>

		  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
		  	</button>

		  	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
		  	</button>
		</div>

<<<<<<< HEAD
		<div id="menu">
			<ul>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
				<li><a href="https://www.asus.com"><img id="menuImages" src="images/dummy2.jpg"></a></li>
			</ul>
		</div>
	</div>
=======
        <div class="row">
            <?php
                // Query untuk mengambil data barang dari database
                $sql = "SELECT * FROM services";
                $result = mysqli_query($con, $query);

                // Looping data barang
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $row['gambar'] ?>" alt="<?php echo $row['nama'] ?>">
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
>>>>>>> 4f3ea8f62e4316407a8bfdee6f6252dfcbc27349
    <?php
        require 'footer2.php';
    ?>

</body>
</html>