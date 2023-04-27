<?php
require 'connect.php';
$id = $_GET['id'];
// echo "<script>alert(" . $id . ")</script>";

$query = 'SELECT * FROM services WHERE id = ' . $id . '';
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-center mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="loginlink">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col">
                <img src="<?php echo $gambar ?>" alt="" style="width: 400px; height: auto; margin-left: 40px;">
            </div>
            <div class="col">
                <div class="row">
                    <h3 id="namaServis"><?php echo $namaServis ?></h3>
                    <p><?php echo $deskripsi ?></p>
                    <p>Rp <?php echo $harga ?></p>
                </div>
                <div class="row mt-5">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: lightblue;">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="name">
                    <label for="no-telp" class="form-label">No telp</label>
                    <input type="text" class="form-control" id="notelp" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" required />
                    <label for="date" class="col-sm-1 col-form-label">Date</label>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="tanggal">
                        </div>
                    </div>
                    <label for="time" class="col-sm-1 col-form-label">Time</label>
                    <div class="col-sm-4">
                        <div class="input-group time" id="timepicker">
                            <input type="time" class="form-control" id="waktu">
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary order" id="order" data-bs-dismiss="modal">Order</button>
                </div>
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

</html>