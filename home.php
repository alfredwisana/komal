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

	<title>Homepage</title>
</head>

<body>

	<div id="topnav">
		<?php
		require 'navbar.php';
		?>
	</div>
	<div class="content">
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

			</button>
		</div>

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
	<!-- <div class="row">
		<div class="row">
			<?php
			// Query untuk mengambil data barang dari database
			$sql = "SELECT * FROM services";
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
	require 'footer.php';
	?>
</body>

</html>