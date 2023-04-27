<?php
require 'connect.php';
session_start();
// if (!isset($_SESSION['username'])) {
// header('location: login.php');
// }

$query = 'SELECT * FROM services';
$result = mysqli_query($con, $query);
?>
<?php
$remind = 'SELECT * FROM orders';
$res = mysqli_query($con, $remind);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pijat</title>

    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

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
    </style>
</head>

<body>
    <!-- navabar -->
    <nav class="navbar navbar-expand-lg bg-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Website Pijat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-center mb-lg-0">
                    <li class="nav-item" style="margin-right:50px">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="loginlink">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <!-- <div class="row" id= "reminder" style="padding-bottom: 60px;">
            <?php while ($rows = mysqli_fetch_array($res)) {

                if ($_SESSION['username'] == $rows['username']) {
                    ?>
                <div class="col-sm-6" style="padding-bottom: 10px;">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Reminder<button type="button" class="btn-close remove" aria-label="Close" style="float: right;"></button></h5>
                        <p class="card-text">Pada <?php echo date($rows['tanggal']) ?> <?php echo $rows['waktu'] ?>, <?php echo $rows['namaCustomer'] ?> memiliki appointment <?php echo $rows['namaServis'] ?>. Jangan lupa untuk datang! Terima kasih.</p>
                      </div>
                    </div>
                </div>
            <?php }
            } ?>
        </div> -->

        <div class="row">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <div class="col-md-4 col-sm-1 mb-5 col d-flex justify-content-center">
                    <div class="card" style="width: 18rem; border-radius: 15px;" data-aos="zoom-out">
                        <img src="<?php echo $row['gambar'] ?>" alt="..." style="border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title" id="<?php echo $row['id'] ?>"><?php echo $row['namaServis'] ?></h5>
                            <!-- <p class="card-text"> -->
                            <?php
                            // echo $row['deskripsi'] 
                            ?>
                            <!-- </p> -->
                            <h6>Harga:
                                <?php echo $row['harga'] ?>
                            </h6>

                            <a href="booking.php?id=<?php echo $row['id'] ?>" class="btn book" style="background-color: lightblue
                        ;">Booking sekarang</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


</body>

<script>
    // <!-- initialize AOS -->
    AOS.init();

    $(document).ready(function () {

    });
    $("div").on("click", ".remove", function () {
        $(this).parent().parent().parent().parent().remove();
        AOS.refresh();
    });
</script>


</html>