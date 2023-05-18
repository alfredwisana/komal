<?php
require '../connect.php';
$id = $_GET['id'];
// echo "<script>alert(" . $id . ")</script>";

$query = 'SELECT * FROM produk WHERE id = ' . $id . '';
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {
    $namaServis = $row['namaServis'];
    $deskripsi = $row['deskripsi'];
    $harga = $row['harga'];
    $gambar = $row['gambar'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Pijat</title>
    <link rel="icon" type="image/png" href="../images/logo2.png" sizes="16x16">


    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

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

        button {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: white;
        background-color: #d6b18a;
        padding: 0.5em 1em;
        border: none;
        border-radius: .6rem;
        position: relative;
        cursor: pointer;
        overflow: hidden;
        }

        button span:not(:nth-child(6)) {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 30px;
        width: 30px;
        background-color: #c28b51;
        border-radius: 50%;
        transition: .6s ease;
        }

        button span:nth-child(6) {
        position: relative;
        }

        button span:nth-child(1) {
        transform: translate(-3.3em, -4em);
        }

        button span:nth-child(2) {
        transform: translate(-6em, 1.3em);
        }

        button span:nth-child(3) {
        transform: translate(-.2em, 1.8em);
        }

        button span:nth-child(4) {
        transform: translate(3.5em, 1.4em);
        }

        button span:nth-child(5) {
        transform: translate(3.5em, -3.8em);
        }

        button:hover span:not(:nth-child(6)) {
        transform: translate(-50%, -50%) scale(4);
        transition: 1.5s ease;
        }
    </style>
</head>

<body style="background-color:#EAD7c3">

    <body>
        <!-- navabar -->
        <?php
            include "../navbar3.php"
        ?>

        <script>
            function goBack() {
                window.history.go(-1);
            }
        </script>


        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col container">
                    <img src="<?php echo $gambar ?>" alt="" style="width: 300px; height: auto; margin-left: 25px;">
                </div>
                <div class="col container" style="margin-left: 25px;">
                    <div class="row justify-content-center">
                        <h3 id="namaServis"><?php echo $namaServis ?></h3>
                        <p style="font-weight: bold;">Rp <?php echo $harga ?></p>
                        <p><?php echo $deskripsi ?></p>
                    </div>
                        <button onclick='goBack()' value="Back">
                        <span class="circle1"></span>
                        <span class="circle2"></span>
                        <span class="circle3"></span>
                        <span class="circle4"></span>
                        <span class="circle5"></span>
                        <span class="text">Back</span>
                        </button>
                </div>
            </div>
        </div>


    </body>

    <script>
        $(document).ready(function() {
            $('#order').on('click', function() {
                namaServis = $('#namaServis').text();
                nama = $("#nama").val();
                notelp = $("#notelp").val();
                tanggal = $("#tanggal").val();
                waktu = $("#waktu").val();

                if (nama == "" || notelp == "" || tanggal == "" || waktu == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Fail!',
                        text: 'Silahkan lengkapi data terlebih dahulu',
                    })

                } else {
                    $.ajax({
                        url: 'processbooking.php',
                        type: 'POST',
                        data: {
                            book: 1,
                            nama: nama,
                            namaServis: namaServis,
                            notelp: notelp,
                            tanggal: tanggal,
                            waktu: waktu
                        },
                        success: function(res) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Booked Successfully',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            })
                        }
                    });

                    $("#nama").val('');
                    $("#notelp").val('');
                    $("#tanggal").val('');
                    $("#waktu").val('');
                }
            });
        });
    </script>
    <?php
    require '../footer2.php'
    ?>

</html>