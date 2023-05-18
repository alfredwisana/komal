<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

$id = $_GET['id'];


$query = 'SELECT * FROM produk WHERE id = ' . $id . '';
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {
    $namaServis = $row['namaServis'];
    $category = $row['category'];
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
    <title>Edit Page</title>

    <?php require "header.php" ?>

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
            color: gray;
        }

        #aubutton {
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

        #aubutton:hover {
            color: #ffffff;
            transform: scale(1.1);
            outline: 2px solid #beafe1;
            box-shadow: 4px 5px 17px -4px #268391;
        }

        #aubutton::before {
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

        #aubutton:hover::before {
            width: 250%;
        }

        /* Back button */
        #backbutton {
            display: inline-block;
            outline: 2px solid #beafe1;
            border-radius: 4px;
            background-color: #d9b4e2;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 18px;
            padding: 8px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 1rem;
        }

        #backbutton:hover {
            background-color: #beafe1;
            transition: 0.5s;
            
        }

    </style>
</head>

<body>
    <div id="wrapper">

        <!-- navbar -->
        <?php require "navbar.php" ?>

        <form method='post'>
            <input onclick='goBack()' id="backbutton" type='button' style="width:auto;" value='Back' />
        </form>

        <script>
            function goBack() {
                window.history.go(-1);
            }
        </script>

        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col">
                    <img src="<?php echo $gambar ?>" alt="" style="max-width:20rem; max-height:20rem;">
                </div>
                <div class="col">
                    <div class="row">

                        <form action="update.php" method="post">
                            <!-- <h3 class="mb-4"><?php echo $namaServis ?></h3> -->
                            <h3 class="mb-4">Edit Item</h3>

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
                                    <label for="formFile" class="form-label">Kategori: </label>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" name="category" id="category">
                                        <option value="<?php echo $category ?>">
                                            <?php echo $category ?>
                                        </option>
                                        <?php
                                        if (isset($_SESSION['username'])) {
                                            $sql = "SELECT * FROM category";
                                            $stmt = $con->prepare($sql);
                                            $stmt->execute();
                                            $res = $stmt->get_result();

                                            while ($row = $res->fetch_assoc()) {
                                                echo "<option value ='" . $row['namaKategori'] . "'>" . $row['namaKategori'] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Deskripsi: </label>
                                </div>
                                <div class="col-9">
                                    <textarea type="text" class="form-control" name="deskripsi"><?php echo $deskripsi ?></textarea>
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
                                <button class="button" id="aubutton" style="background-color: #d9b4e2; align-items:center;" name="update">Update</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>

        <?php
        require 'footer.php';
        ?>
    </div>

</body>

<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>