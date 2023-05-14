<?php
require '../connect.php'
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
        integrity="sha512-xxxxxx" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"
        integrity="sha512-xxxxxx" crossorigin="anonymous"></script>

    <style>
        .container {
        display: flex;
        flex-wrap: wrap;
        padding-top: 10px;
        position: relative;
        margin-left: -15px;
        margin-right: -15px;
    }

    .col-lg-2,
    .col-md-3,
    .col-sm-6,
    .col-6 {
        position: relative;
        width: 100%;
        padding: 0 15px;
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 17%;
        border-left: 2px solid #000;
        transform: translateX(-50%);
    }

    .row>div:nth-child(2),
    .row>div:nth-child(10) {
        position: relative;
        z-index: 1;
    }

    .col-2 {
        width: calc(16.6667% - 30px);
        margin: 15px;
        position: relative;
        background-color: #eee;
        padding: 10px;
        box-sizing: border-box;
        height: 100%;
    }

    .col-10 {
        width: calc(83.3333% - 30px);
        padding: 5px;
        box-sizing: border-box;
        height: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .row {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }

    .col {
        width: calc(33.33% - 30px);
        margin: 15px;
        background-color: #ddd;
        padding: 20px;
        box-sizing: border-box;
    }

    /* Filter sidebar */
    .sidebar {
        width: 25%;
        float: left;
    }

    /* Filter label */
    .filter-label {
        font-weight: bold;
        margin-top: 20px;
    }

    /* Filter checkbox */
    .filter-checkbox {
        margin-bottom: 10px;
    }

    /* Filter button */
    .filter-button {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Filter button hover */
    .filter-button:hover {
        background-color: #0069d9;
    }

    /* Filter di atas halaman produk */
    .filter-container {
        display: none;
        background-color: #f2f2f2;
        padding: 10px;
    }

    @media screen and (max-width: 992px) {
        .container::before {
            display: none;
        }
        .separator {
            display: none;
        }
        .col-lg-2 {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

        @media screen and (max-width: 991px) {
            .filter-container {
                display: block;
            }
            .sidebar {
                display: none;
            }
            .container::before {
                display: none;
            }
            .separator {
            display: none; 
            }
            .row .col-lg-2 {
                flex-basis: 100%;
                max-width: 100%;
            }
            .col-10 {
                margin-left: 0; 
                justify-content: flex-start; 
            }
        }
        

        .separator {
        border-right: 1px solid #ccc;
        height: 100%;
        margin-right: 20px;
        }

        .filter-sidebar {
            background-color: #eee7d3;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
        }

        .catalog-item {
            margin-bottom: 10px;
            color: white;
        }

        .catalog-item li {
            font-size: 16px;
            font-weight: bold;
            list-style-type: none;
            margin-bottom: 5px;
            background-color: #C8d3b8;
            border-radius: 50px;
            text-align: center;
        }

        .catalog-item:hover li {
            background-color: #beafe1;
            color: #fff;
        }

        .catalog-item a {
            color: white;
            text-decoration: none;
        }

        .catalog-item a:hover {
            color: white;
            transform: translateY(-5px);
        }

        .catalog-item.active a {
            font-weight: bold;
            color: #007bff;
        }
        
        .card {
        background-color: #eee7d3;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
        }

        .card .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
        }

        .card .card-body {
        padding: 16px;
        height: 200px;
        }

        .card .card-title {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 8px;
        }

        .card .card-text {
        font-size: 16px;
        font-family: 'Playfair Display', serif;
        margin-bottom: 16px;
        }

        .card .card-price {
        font-size: 20px;
        font-weight: 700;
        color: #f44336;
        margin-bottom: 8px;
        }

        .card .btn-primary {
        background-color: #f44336;
        border: none;
        color: #fff;
        font-size: 16px;
        padding: 8px 16px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        }

        .card .btn-primary:hover {
        background-color: #c0392b;
        }

        .card .card-title,
        .card .card-price,
        .card .btn-primary {
        height: 40px; /* Atur tinggi tetap untuk title, harga, dan button */
        display: flex;
        align-items: center;
        bottom: 5px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #C8d3b8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #beafe1;
        }

        */
    </style>
    <script>
        // Tampilkan atau sembunyikan filter di atas halaman produk pada layar mobile
        function toggleFilter() {
            var filterContainer = document.getElementById("filter-container");
            if (filterContainer.style.display === "block") {
                filterContainer.style.display = "none";
            } else {
                filterContainer.style.display = "block";
            }
        } ``
    </script>
</head>

<body style="background-color:#EAD7c3;">
        <!-- navabar -->
        <?php
        require "../navbar3.php";
        ?>
        <div class="container" style="margin-left: 0; margin-right: 0; max-width: 1655px; margin: 30px;">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="filter-sidebar">
                        <h5>Katalog</h5>
                        <div class='catalog-item'>
                            <li class ='category' id ='semua'><a>Semua</a></li>
                        </div>
                        <?php 
                        $sql = "SELECT *  FROM category";
                        $stmt = $con->prepare($sql);
                        $stmt->execute();
                        $res = $stmt->get_result();

                        

                        while($row = $res -> fetch_assoc()){
                            echo "<div class='catalog-item'>";
                            echo "<li class ='category' id ='$row[namaKategori]'><a>$row[namaKategori]</a></li>";
                            echo "</div>";
                            
                        }

                        ?>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 seperator" id = "katalog" style="padding-left: 100px;">
                    <?php
                    // Query untuk mengambil data barang dari database
                    $sql = "SELECT * FROM produk";
                    $result = mysqli_query($con, $sql);

                    // Memulai pembukaan tag div untuk row
                    echo '<div class="row">';

                    $counter = 0;
                    $cardPerRow = 4;

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($counter % $cardPerRow == 0) {
                            echo '<div class="row">';
                        }
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo $row['gambar'] ?>" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['namaServis'] ?></h5>
                                    <p class="card-price">Rp <?php echo $row['harga'] ?></p>
                                    <a href="booking.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $counter++;

                        if ($counter % $cardPerRow == 0) {
                            echo '</div>';
                        }
                    }

                    if ($counter % $cardPerRow != 0) {
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
        require '../footer2.php';
        ?>
    </body>
</html>


<script>

    $(document).ready(function(){
        $(".category").click(function(){
            var v_cat = $(this).attr('id');
            
            $.ajax({
                type : "post",
                url: "proc.php",
                data :{
                    cat : v_cat
                },
                success: function(result){
                    
                    $("#katalog").html(result);
                }

            })
        })
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categories = document.querySelectorAll('.category');
        const semua = document.querySelector('#semua');

        categories.forEach(category => {
            category.addEventListener('click', function() {
                categories.forEach(category => category.classList.remove('selected'));
                this.classList.add('selected');

                const selectedCategory = this.id;

                // Kode tambahan: Mengatur tampilan produk berdasarkan kategori yang dipilih
                const products = document.querySelectorAll('.card');

                products.forEach(product => {
                    if (selectedCategory === 'semua') {
                        product.style.display = 'block';
                    } else {
                        const category = product.getAttribute('data-category');
                        if (category === selectedCategory) {
                            product.style.display = 'block';
                        } else {
                            product.style.display = 'none';
                        }
                    }
                });
            });
        });

        semua.addEventListener('click', function() {
            categories.forEach(category => category.classList.remove('selected'));
            this.classList.add('selected');

            const products = document.querySelectorAll('.card');
            products.forEach(product => product.style.display = 'block');
        });
    });
</script>

