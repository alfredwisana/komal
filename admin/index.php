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
    <title>Admin Page</title>

    <?php require "header.php" ?>

    <!-- Sweet Alert -->



    <!-- AOS Animate on Scroll -->
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        /* wrapper */
        #wrapper2 {
            height: fit-content;
            position: relative;

            display: flex;
            flex-wrap: wrap;
            position: relative;
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
            width: 80%;
            float: right;
        }

        /* Style the sidebar - fixed full height */
        .sidebar {
            float: left;
            height: fit-content;
            width: 20%;
            z-index: 1;
            overflow-x: hidden;

            padding-left: 1rem;
            padding-right: 1rem;
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
    <?php require "navbar.php" ?>
    <div id="wrapper" style="background-color:ee7d3;">
        <!-- navbar -->


        <div id="header" style="position: relative; text-align: center; background-color:white;">
            <img src="../images/headerAdmin3.jpeg" style=" width:100%; opacity: 0.5;">
            <!-- Hello -->
            <h3 class="display-4 mt-3" data-aos="zoom-out" style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">Hello <?php echo $_SESSION['username'] ?></h3>
            <!-- Close Hello -->
        </div>
        <br></br>

        <div id="wrapper2">
            <div class="sidebar col-md-auto">

                <!-- Tambah category -->
                <form action="addCat.php" method="post" enctype="multipart/form-data">
                    <a>New Category</a>
                    <input type="text" id="addCat" name="addCat" class="form-control" style="width:65%; float:left;" onkeyup="if(this.value.length > 0) document.getElementById('addCatButton').disabled = false; else document.getElementById('addCatButton').disabled = true;" />
                    <button class="btn btn-outline-success bg-white" id="addCatButton" name="addCatButton" style="width:30%; float:right;" disabled>Add</button>
                </form>

                <!-- Hapus category -->
                <br><br>
                <a>Delete Category</a>
                <form action="delCat.php" method="post" enctype="multipart/form-data">
                    <select class="form-control" name="Kategori" id="Kategori" style="width:65%; float:left;">

                        <option value="0">Pilih Kategori</option>
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
                    <button class="btn btn-outline-success bg-white" id="delCat" name="delCat" style="width:30%; float:right;" disabled>Delete</button>
                </form>
                <br><br>

                <!-- Cari category -->
                <a>Search Category</a>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <select class="form-control" name="namaKategori" id="namaKategori" style="width:65%; float:left;">

                        <option value="0">Pilih Kategori</option>
                        <?php
                        if (isset($_SESSION['username'])) {
                            $sql = "SELECT *  FROM category";
                            $stmt = $con->prepare($sql);
                            $stmt->execute();
                            $res = $stmt->get_result();

                            echo "<option value=all> Semua </option>";
                            while ($row = $res->fetch_assoc()) {
                                echo "<option value ='" . $row['namaKategori'] . "'>" . $row['namaKategori'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                    <button class="btn btn-outline-success bg-white" name="seaCat" id="seaCat" type="submit" style="width:30%; float:right;" disabled>Search</button>
                </form>
                <br><br><br><br><br><br>

            </div>

            <div class="container col">

                <div class="row">
                    <?php
                    if (isset($_POST['seaCat'])) {
                        $namaKategori = $_POST['namaKategori'];
                        $sql = mysqli_query($con, "SELECT * FROM produk WHERE category = '$namaKategori'");
                        if ($namaKategori == "all") {
                            $sql = mysqli_query($con, "SELECT * FROM produk");
                        }
                    } else {
                        $sql = mysqli_query($con, "SELECT * FROM produk");
                    }

                    if (mysqli_num_rows($sql) >= 1) {
                        if (isset($_POST['seaCat'])) {
                            $sql = "SELECT * FROM produk WHERE category = '$namaKategori'";
                            if ($namaKategori == "all") {
                                $sql = "SELECT * FROM produk";
                            }
                        } else {
                            $sql = "SELECT * FROM produk";
                        }
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="col-md-4 col-sm-1 mb-5 col d-flex justify-content-center">
                                <div class="card" style="width: 18rem; border-radius: 15px;" data-aos="zoom-out">
                                    <img src="<?php echo $row['gambar'] ?>" alt="..." style="border-radius: 15px;">
                                    <div class="card-body" id="<?php echo $row['id'] ?>">
                                        <h5 class="card-title"><?php echo $row['namaServis'] ?></h5>
                                        <p class="card-text"><?php echo $row['category'] ?></p>
                                        <h6>Harga: Rp.<?php echo $row['harga'] ?></h6>
                                        <br>
                                        <a href="detail.php?id=<?php echo $row['id'] ?>" class="btn detail" style="border: solid 2px #80f0ff;"><i style="color: #05c1ff;">Lihat Detail</i></a>

                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn edit" style="border: solid 2px #80f0ff;"><i class="fa-solid fa-pen-to-square" style="color: #05c1ff;"></i></a>

                                        <a class="btn delete" style="border: solid 2px red;"><i class="fa-solid fa-trash-can" style="color: red;"></i></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

            </div>

        </div>

        <!-- <div style="height:1rem; background-color:orange;"></div> -->
        <?php require 'footer.php'; ?>
    </div>

</body>

<script>
    // Kalau di input box nda ada isinya, maka submit button mati
    $(document).ready(function() {
        $('#Kategori').val("0");
        $('#namaKategori').val("0");

        $('#Kategori').change(function() {
            selectVal = $('#Kategori').val();

            if (selectVal == 0) {
                $('#delCat').prop("disabled", true);
            } else {
                $('#delCat').prop("disabled", false);
            }
        })

        $('#namaKategori').change(function() {
            selectVal = $('#namaKategori').val();

            if (selectVal == 0) {
                $('#seaCat').prop("disabled", true);
            } else {
                $('#seaCat').prop("disabled", false);
            }
        })

    });

    function success() {
        if (document.getElementById("addCat").value === "") {
            document.getElementById('addCatButton').disabled = true;
        } else {
            document.getElementById('addCatButton').disabled = false;
        }
    };

    // Sweet alert delete produk
    $(".delete").click(function() {
        v_id = $(this).parent().attr('id');

        Swal.fire({
            title: 'Delete',
            text: "Apakah Anda Yakin mau menghapus barang ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    dataType: "json",
                    data: {
                        id: v_id
                    },
                    success: function(result) {
                        console.log('sukses');

                        Swal.fire({
                            icon: 'success',
                            title: 'SUCCESS',
                            text: result.message,
                        })

                        setTimeout(function() {
                            window.location.reload()
                        }, 1000);

                    }
                })
            }
        })
    });

    // Sweet alert delete category
    $("#delCat").click(function() {
        v_namaKategori = $('#Kategori').val();;

        Swal.fire({
            title: 'Delete',
            text: "Apakah Anda Yakin mau menghapus kategori ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "delCat.php",
                    dataType: "json",
                    data: {
                        Kategori: v_namaKategori
                    },
                    success: function(result) {
                        console.log('sukses');

                        Swal.fire({
                            icon: 'success',
                            title: 'SUCCESS',
                            text: result.message,
                        })

                        setTimeout(function() {
                            window.location.reload()
                        }, 1000);

                    },

                    error: function(request, status, error) {
                        alert(request.responseText);
                    }

                })


            }
        })
    });
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    // <!-- initialize AOS -->
    AOS.init();
 </script>

</html>