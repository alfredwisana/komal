<?php
require 'connect.php'
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

	<title>Homepage</title>
	<link rel="icon" type="image/png" href="./images/logo2.png" sizes="16x16">

</head>

<body>

	<div id="topnav">
		<?php
		require 'navbar4.php';
		?>
	</div>
	<div class="content">
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<!-- to make an image as an access to link put the image inside the a and make 
                         sure it has the img-responsive class -->
					<img src="images/carousel1.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<!-- to make an image as an access to link put the image inside the a and make 
                         sure it has the img-responsive class -->
					<img src="images/carousel2.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<!-- to make an image as an access to link put the image inside the a and make 
                         sure it has the img-responsive class -->
					<img src="images/carousel3.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<!-- to make an image as an access to link put the image inside the a and make 
                         sure it has the img-responsive class -->
					<img src="images/carousel4.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
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

	
		<div class="container mt-5">
		<h2 class="text-center mb-4"><b>WHY WE ARE THE BEST IN MARKET</b></h2>
			<div class="row">
				<div class="col-md-4">
					<div class="card d-flex align-items-center" style="height: 300px;">
					<br>
						<img class="card-img-top" src="images/price.png" alt="Card image"  style="width: 100px; height: 100px; object-fit: contain;">
						<div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
							<h5 class="card-title">GOOD PRICE</h5>
							<p class="card-text text-muted">Harga yang bersaing dibandingkan toko-toko yang lain.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card d-flex align-items-center" style="height: 300px;">
					<br>
						<img class="card-img-top" src="images/service.png" alt="Card image" style="width: 100px; height: 100px; object-fit: contain;">
						<div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
							<h5 class="card-title">GOOD SERVICE</h5>
							<p class="card-text text-muted">Service yang sangat baik dan kepuasan kustomer adalah yang utama.</p>	
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card d-flex align-items-center" style="height: 300px;">
					<br>
						<img class="card-img-top" src="images/quality.png" alt="Card image"  style="width: 100px; height: 100px; object-fit: contain; ">
						<div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
								<h5 class="card-title">GOOD QUALITY</h5>
								<p class="card-text text-muted">Kualitas barang yang terbaik dibanding toko-toko lainnya.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>

			
		<div id="menu">
		<h2 class="text-center mb-4"><b>SOME OF OUR BEST SELLING PRODUCTS</b></h2>
			<ul>
				<li><a href="katalog/booking.php?id=52"><img src="images/catalog_baju/kbthn_bayi1.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=53"><img src="images/catalog_baju/kbthn_bayi2.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=54"><img src="images/catalog_baju/kbthn_bayi3.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=55"><img src="images/catalog_baju/kbthn_bayi4.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=41"><img src="images/catalog_baju/set1.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=42"><img src="images/catalog_baju/set2.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=43"><img src="images/catalog_baju/set3.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
				
				<li><a href="katalog/booking.php?id=44"><img src="images/catalog_baju/set4.jpg" class="img-responsive d-block w-80" alt="..." id="menuImages">
				<div class="image_text"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
				</a></li>
			</ul>
		</div>
	</div>
	<br>
	<!-- <div class="row">
		<div class="row">
			<?php
			// Query untuk mengambil data barang dari database
			$sql = "SELECT * FROM produk";
			$result = mysqli_query($con, $sql);

			// Looping data barang
			while ($row = mysqli_fetch_assoc($result)) {
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
	</div> -->


	<?php
	require 'footer3.php';
	?>
</body>

</html>