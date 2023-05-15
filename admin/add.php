<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Page</title>

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

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

    <!-- AOS Animate on Scroll -->
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" type="image/png" href="../images/logo2.png" sizes="16x16">


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
            color: white;
            background-color: #d9b4e2;
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
            box-shadow: 4px 5px 17px -4px #d9b4e2;
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
        
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-1 mb-5 col d-flex justify-content-center">
                    <div class="card" style="width: 18rem; border-radius: 15px;" data-aos="zoom-out">
                        <img src="../images/dummy.png" alt="..." class="card-img-top" style="border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title" id="namaServis">Nama Barang</h5>
                            <h6 class="card-text">Kategori Barang</h6>
                            <p class="card-text">Deskripsi</p>
                            <h6>Harga: </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="mb-4">Add Item</h3>
                    <form action="addprocess.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Barang</label>
                            <input type="text" id="nama" name="nama" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Kategori</label>
                            <select class="form-control" name="category" id="category">
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
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Deskripsi Barang</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Harga</label>
                            <input type="text" id="harga" name="harga" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan File</label>
                            <input type="file" id="gambar" name="gambar">
                        </div>

                        <div class="row mt-4">
                            <button class="button" id="aubutton" style="background-color: d9b4e2;" name="add">Add</button>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>

        <?php
        require 'footer.php';
        ?>
    </div>


</body>

<script>

    // <!-- initialize AOS -->
    AOS.init();
</script>
<script>
  $(document).ready(function(){
    $("#logout").click(function(){
      
      $.ajax({
        url: "../login/logout.php",
        type: "POST",
        dataType: "json",
        data: {
          logout: 1
        },
        success: function(result){
          console.log('sukses');
          if (result.status == 1)
          {
            Swal.fire({
            icon: 'success',
            title: 'SUCCESS',
            text: result.message,
            })
          }
          else
          {
            Swal.fire({
            icon: 'error',
            title: 'FAILED',
            text: result.message,
          })
          }

        if(result.status == 1) {
          setTimeout(function(){window.location.replace("../login/index.php")}, 1000);
        } else {
            setTimeout(function(){window.location.replace("../login/index.php")}, 1000);
        }
      },
      error: function(request,status,error) {
        alert(request.responseText);
      }
  
    })
    })
  })
</script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>