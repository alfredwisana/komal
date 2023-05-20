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
	
	<?php
		require 'navbar4.php';
	?>
	<!-- Carousel -->
	<div class="content">
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/carousel1.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<img src="images/carousel2.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<img src="images/carousel3.jpg" class="img-responsive d-block w-100" alt="..." id="carouselImage">
					<div class="absolute-div">
						<div class="carousel-caption">
							<h3>Menyediakan Beragam Perlengkapan Untuk Bayi</h3>
						</div>
					</div>
				</div>

				<div class="carousel-item">
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

		<!-- Best In Market -->
		<div class="container mt-5">
		<h2 class="text-center mb-4"><b>WHY WE ARE THE BEST IN MARKET</b></h2>
			<div class="row">
				<div class="col-md-4">
					<div class="card d-flex align-items-center" style="height: 300px;">
					<br>
						<img class="card-img-top" src="images/price.png" alt="Card image"  style="width: 100px; height: 100px; object-fit: contain;">
						<div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
							<h5 class="card-title" style="padding-top: 5px;">GOOD PRICE</h5>
							<p class="card-text text-muted">Harga yang bersaing dibandingkan toko-toko yang lain.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card d-flex align-items-center" style="height: 300px;">
					<br>
						<img class="card-img-top" src="images/service.png" alt="Card image" style="width: 100px; height: 100px; object-fit: contain;">
						<div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
							<h5 class="card-title" style="padding-top:35px">GOOD SERVICE</h5>
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
		<!-- Best Selling Product Display -->
		<div class="container">
		<h2 class="text-center mb-4"><b>BEST SELLING PRODUCT</b></h2>
			<div class="row">
				<div class="col-md-12 mx-auto">
					<div class="card custom-card">
						<div class="row g-0">
							<div class="col-md-6">
								<img class="card-img-top img-fluid" style="max-height: 100%; object-fit: contain; padding: 20px;"src="images/catalog_bajubawahan1.jpg" alt="Product Image">
							</div>
							<div class="col-md-6">
								<div class="card-body">
									<h5 class="card-title">Celana Pendek Hijau</h5>
									<p class="card-text">Celana pendek berwarna hijau. Celana untuk anak laki-laki. Sangat nyaman untuk dipakai.
Size yang tersedia: <br><br>1. S : Pinggang: belum ditarik (normal) 35cm, sudah ditarik 57cm; panjang: 31cm; Cris (slangkang): 20cm; Paha: 20cm, <br><br>2. M : Pinggang:belum ditarik (normal) 38cm, sudah ditarik 60cm; panjang: 32cm; Cris (slangkang): 21cm; Paha: 21cm, <br><br>3. L : Pinggang:belum ditarik (normal) 41cm, sudah ditarik 63cm; panjang: 33cm; Cris (slangkang): 22cm; Paha: 22cm</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		
		<!-- ProductHub first row -->
		<div id="menu" class="row gx-md-5 justify-content-center">
		<h2 class="text-center mb-4"><b>PRODUCT HUB</b></h2>
			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=52">
						<img src="images/catalog_baju/kbthn_bayi1.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>My Baby Powder</b></h5>
							<p class="card-text">My Baby's baby powder (Soft & Gentle) 100 g + 25 g extra. Keep your baby's skin smooth and comfort all day</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=53">
						<img src="images/catalog_baju/kbthn_bayi2.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>My Baby Lotion</b></h5>
							<p class="card-text">My Baby's Milk Bath (Sweet Floral) 100 ml. Terrbuat dari milk dan oat. Keep your baby's skin smooth and comfort all day</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=54">
						<img src="images/catalog_baju/kbthn_bayi3.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>Cussons Baby Powder</b></h5>
							<p class="card-text">Cussons Baby Powder (Smooth & Soft) 200 + 100g extra. Wangi sakura yang tahan lama selembut kasih sayang ibu.</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=55">
						<img src="images/catalog_baju/kbthn_bayi4.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>Johnson's Baby Powder</b></h5>
							<p class="card-text">Johnson's Bedtime Baby Powder 500 g. Dengan wangi NATURAL CALM yang menenangkan, membantu bayi nyaman sebelum tidur.</p>
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- ProductHub second row -->
		<div id="menu" class="row gx-md-5 justify-content-center">
			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=41">
						<img src="images/catalog_baju/set1.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>Set Kaos Rock City dan Celana Pendek</b></h5>
							<p class="card-text">Set kaos Rock and City dan Celana pendek.
Size yang tersedia: S, M, dan L </p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=42">
						<img src="images/catalog_baju/set2.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>Set Kaos Buaya dan Celana</b></h5>
							<p class="card-text">Set kaos Buaya dan celana pendek jeans.
							Size yang tersedia: S, M, dan L </p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=43">
						<img src="images/catalog_baju/set3.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>Set Sleeveless Shirt Dino & Celana</b></h5>
							<p class="card-text">Set kaos tanpa lengan Dinosaurus dan celana pendek abu-abu.
							Size yang tersedia: S, M, dan L </p>						
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2 mb-4">
				<div class="card card-small card-custom">
					<a href="katalog/booking.php?id=44">
						<img src="images/catalog_baju/set4.jpg" class="card-img-top" alt="Product Image">
						<div class="card-body">
							<h5 class="card-title"><b>Set Fancy Fashion</b></h5>
							<p class="card-text">Set kemeja, rompi, dasi dan celana pendek.
							Size yang tersedia: S, M, dan L </p>
						</div>
					</a>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-5 offset-md-2">
			<div class="text-center">
				<div class="col-md-1 mb-3" style="float: right">
					<img src="images/homepage_below.jpg" alt="Additional Image" style="width: 300px;">
				</div>
				<p>Kepuasan anda adalah kesenangan kami</p>
				<br>
				<a href="About_us.php" style="color: black; text-decoration: none;"><p>Selengkapnya tentang berkat jaya</p></a>
			</div>
			</div>
		</div>

		<!-- <div class ="row">
		<ul>
			<h6><b>Kepuasan Anda adalah kesenangan kami.</b></h6>
			<a href="About_us.php"><h6><b>Selengkapnya tentang Berkah Jaya</b></h6></a>
		</ul>
		</div>
	</div> -->
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