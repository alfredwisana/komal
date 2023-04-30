<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login/index.php');
}

$query = 'SELECT * FROM produk';
$result = mysqli_query($con, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pijat</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
        /* wrapper */

        #wrapper {
            background-color: eee7d3;
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
            color: gray;
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
        <?php require "navbar.php" ?>

        <div id="header" style="position: relative; text-align: center; background-color:white;">
            <img src="../images/headerAdmin3.jpeg" style=" width:100%; opacity: 0.5;">
            <!-- Hello -->
            <h3 class="display-4 mt-3" data-aos="zoom-out" style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">Hello <?php echo $_SESSION['username'] ?></h3>
            <!-- Close Hello -->
        </div>
        <br></br>

        <div id="wrapper2">
            <div class="sidebar">

            <form action="addCat.php" method="post" enctype="multipart/form-data">
                <a>New Category</a>
                <input type="text" id="namaKategori" name="namaKategori" 
                class="form-control" style="width:65%; float:left;">
                <button class="btn btn-outline-success bg-white" name="addCat" 
                style="width:30%; float:right;">Add</button>
            </form>

                <br><br>
                <a>Delete Category</a>
                <select class="form-control" name="namaKategori" id="namaKategori" style="width:65%; float:left;">

                    <option value="0">--Pilih Kategori--</option>
                    <?php
                    if (isset($_SESSION['username'])) {
                        $sql = "SELECT *  FROM category";
                        $stmt = $con->prepare($sql);
                        $stmt->execute();
                        $res = $stmt->get_result();

                        while ($row = $res->fetch_assoc()) {
                            echo "<option value ='" . $row['namaKategori'] . "'>" . $row['namaKategori'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <button class="btn btn-outline-success bg-white" type="submit" style="width:30%; float:right;">Delete</button>

                <br><br>

                <a>Search Category</a>
                <select class="form-control" name="namaKategori" id="namaKategori" style="width:65%; float:left;">

                    <option value="0">--Pilih Kategori--</option>
                    <?php
                    if (isset($_SESSION['username'])) {
                        $sql = "SELECT *  FROM category";
                        $stmt = $con->prepare($sql);
                        $stmt->execute();
                        $res = $stmt->get_result();

                        while ($row = $res->fetch_assoc()) {
                            echo "<option value ='" . $row['namaKategori'] . "'>" . $row['namaKategori'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <button class="btn btn-outline-success bg-white" type="submit" style="width:30%; float:right;">Search</button>
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
                                    <p class="card-text"><?php echo $row['category'] ?></p>
                                    <p class="card-text"><?php echo $row['deskripsi'] ?></p>
                                    <h6>harga: <?php echo $row['harga'] ?></h6>

                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn edit" style="border: solid 2px #80f0ff;"><i class="fa-solid fa-pen-to-square" style="color: #05c1ff;"></i></a>

                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn delete" style="border: solid 2px red;"><i class="fa-solid fa-trash-can" style="color: red;"></i></a>
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

</body>

<script>
    // <!-- initialize AOS -->
    AOS.init();
</script>

</html>