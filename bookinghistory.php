<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pijat</title>

    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js">
		$(document).ready( function () {
    		$('#table').DataTable();
		});
	</script>

    <script>
    	$(document).ready( function () {
    		$('#table').DataTable();
		});
    </script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="indexadmin.php">Website Pijat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-center mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
                    </li>
                </ul>

                <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="logoutlink">
                    <li class="nav-item" style="text-align: center;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <a class="nav-link" aria-current="page" href="logout.php" style="padding-top: 0;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  	<table class="display" id="table">
	  	<thead>
  			<th>Nama</th>
  			<th>Servis</th>
  			<th>No Telepon</th>
  			<th>Tanggal</th>
  			<th>Waktu</th>
	  	</thead>
	  	<tbody>
	    	<div id="showdata">
	    		<?php
	    		$sql = "SELECT * FROM orders";
			    $result = mysqli_query($con, $sql);
			    if(!empty($result)){
				    while ($row = mysqli_fetch_array($result)) {
				         echo "<tr>";
                        echo "<td>".$row['namaCustomer']."</td>";
                        echo "<td>".$row['namaServis']."</td>";
                        echo "<td>".$row['noHP']."</td>";
                        echo "<td>".$row['tanggal']."</td>";
                        echo "<td>".$row['waktu']."</td>";
                        echo "</tr>";
				    }
				}
	    		mysqli_close($con); ?>
	    	</div>
	  	</tbody>
	</table>
</body>
</html>