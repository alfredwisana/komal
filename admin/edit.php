<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

$id = $_GET['id'];

$query = 'SELECT * FROM services WHERE id = ' . $id . '';
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {
    $namaServis = $row['namaServis'];
    $kategori = $row['kategori'];
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

    <style>
        /* wrapper */
        #wrapper {
            background-color: #eee7d3;
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
        }

        .button {
            padding: 1em 2em;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #ffffff;
            transition: all 1000ms;
            font-size: 15px;
            position: relative;
            overflow: hidden;
            outline: 2px solid #beafe1;
            width: 10rem;

            left: 45%;
        }

        button:hover {
            color: #ffffff;
            transform: scale(1.1);
            outline: 2px solid #beafe1;
            box-shadow: 4px 5px 17px -4px #268391;
        }

        button::before {
            content: "";
            position: absolute;
            left: -50px;
            top: 0;
            width: 0;
            height: 100%;
            background-color: #beafe1;
            transform: skewX(45deg);
            z-index: -1;
            transition: width 1000ms;
        }

        button:hover::before {
            width: 250%;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light mb-5">
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="logoutlink">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col">
                    <img src="<?php echo $gambar ?>" alt="">
                </div>
                <div class="col">
                    <div class="row">

                        <form action="update.php" method="post">
                            <h3 class="mb-4"><?php echo $namaServis ?></h3>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Nama Servis: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $namaServis ?>" name="namaServis">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Kategori: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $kategori ?>" name="kategori">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Deskripsi: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $deskripsi ?>" name="deskripsi">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Harga: </label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo $harga ?>" name="harga">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Gambar: </label>
                                </div>
                                <div class="col-9">
                                    <input type="file" name="localFile" id="fileName" style="margin: 0 0 2% 0;">
                                    <input type="text" class="form-control" value="<?php echo $gambar ?>" name="gambar">
                                    <p>You can upload an image or just paste the url</p>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <button class="button" style="background-color: #d9b4e2;" name="update">Update</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>

        <?php
        require '../footer2.php';
        ?>
    </div>

</body>

</html>