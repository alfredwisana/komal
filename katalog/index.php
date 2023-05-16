<?php
require '../connect.php'
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Katalog</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>



        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
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
        <link rel="icon" type="image/png" href="../images/logo2.png" sizes="16x16">

            <style>
            @media screen and (max-width: 992px) {
            .filter-container {
                display: block;
            }
            .card-column {
                width: 100%;
            }
            .sidebar {
                display: none;
            }
            .container::before {
                display: none;
            }
            .col-lg-2 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .col-lg-3 {
                flex-basis: 100%;
                max-width: 100%;
            }
            
            }

            @media screen and (min-width: 992 max-width: 1300px) {
            .card .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 8px;
            }

            .card .card-text {
            font-size: 10px;
            font-family: 'Playfair Display', serif;
            margin-bottom: 16px;
            }

            .card .card-price {
            font-size: 12px;
            font-weight: 700;
            color: #f44336;
            margin-bottom: 8px;
            }
            }

            #katalog .row {
                        display: flex;
                        flex-wrap: wrap;
                    }

                    #katalog .card {
                        flex-basis: calc(25% - 20px); 
                        margin: 10px; 
                    }

            .clearfix::after {
                content: "";
                display: table;
                clear: both;
            }

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
                margin-bottom: 50px;
            }

            .sidebar {
                width: 25%;
                float: left;
            }

            .filter-label {
                font-weight: bold;
                margin-top: 20px;
            }

            .filter-button:hover {
                background-color: #0069d9;
            }

            .filter-container {
                display: none;
                background-color: #f2f2f2;
                padding: 10px;
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
            height: 40px; 
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

            .separator {
            border-left: 2px solid #000;
            border-bottom-width: 1px;
            height: 100%;
            }

            footer {
            position: static;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f1f1f1;
            padding: 0px;
            }

        </style>
        
    </head>
    <body style="background-color:#EAD7c3;">
    <?php
        require "../navbar3.php";
    ?>
        <div class="container" style="max-width: 2000px;">
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
                <div class="col-lg-10 col-md-9 col-sm-12 separator" id = "katalog" style="padding-left: 100px;">
                <?php
                class CardSet {
                    private $cardPerRow;
                    private $counter;

                    public function __construct($cardPerRow) {
                        $this->cardPerRow = $cardPerRow;
                        $this->counter = 0;
                    }

                    public function startRow() {
                        echo '<div class="row">';
                    }

                    public function endRow() {
                        echo '</div>';
                    }

                    public function addCard($row, $colClass) {
                        $this->counter++;
                        ?>
                        <div class="<?php echo $colClass; ?>">
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
                    }

                    public function closeRowIfNeeded() {
                        if ($this->counter % $this->cardPerRow != 0) {
                            $this->endRow();
                        }
                    }
                }

                $cardPerRow = 4;
                $cardSet = new CardSet($cardPerRow);
                $sql = "SELECT * FROM produk";
                $result = mysqli_query($con, $sql);
                echo '<div class="row">';

                while ($row = mysqli_fetch_assoc($result)) {
                    $colClass = 'col-lg-' . 12 / $cardPerRow . ' col-md-4 col-sm-6';
                    $cardSet->addCard($row, $colClass);
                }
                $cardSet->closeRowIfNeeded();
                ?>
            </div>
        </div>
    </body>
    <?php
    require '../footer2.php';
    ?>
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
    window.addEventListener('DOMContentLoaded', function() {
        var resizeTimer;

        function checkWidth() {
            var colClass;
            var windowWidth = window.innerWidth;

            if (windowWidth <= 992) {
                colClass = 'col-12';
            } else if (windowWidth > 992 && windowWidth <= 1030) {
                colClass = 'col-lg-6 col-md-6 col-sm-6';
            } else if (windowWidth > 1030 && windowWidth <= 1300) {
                colClass = 'col-lg-4 col-md-4 col-sm-6';
            } else {
                colClass = 'col-lg-<?php echo 12 / $cardPerRow; ?> col-md-4 col-sm-6';
            }

            var cards = document.querySelectorAll('.card');

            cards.forEach(function(card) {
                card.parentElement.className = colClass;
            });
        }

        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(checkWidth, 250);
        });

        checkWidth();
    });
</script>
<script>
    function toggleFilter() {
        var filterContainer = document.getElementById("filter-container");
        if (filterContainer.style.display === "block") {
            filterContainer.style.display = "none";
        } else {
            filterContainer.style.display = "block";
        }
    }
</script>