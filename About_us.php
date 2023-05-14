<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
    <!-- STYLE -->
    <style>
        /*FONT*/
        @font-face {
            font-family: 'sprinkle';
            src: url('images/font/Sprinkle-Regular.ttf');
        }

        @font-face {
            font-family: 'cofee';
            src: url('images/font/Coffee Mood.otf');
        }

        @font-face {
            font-family: 'khalila';
            src: url('images/font/Khalila.otf');
        }

        @font-face {
            font-family: 'lullaby';
            src: url('images/font/LullabiestByHttpsgoths-Regular.otf');
        }

        @font-face {
            font-family: 'coolvetica';
            src: url('images/font/coolvetica rg.otf');
        }

        @font-face {
            font-family: 'next';
            src: url('images/font/TheNextFont.ttf');
        }




        /*AUTO ADJUST COL*/
        * {
            box-sizing: border-box;
        }

        .row::after {
            content: "";
            clear: both;
            display: block;
        }

        [class*="col-"] {
            float: left;
            padding: 15px;
        }

        .col-1 {
            width: 8.33%;
        }

        I .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }

        @media only screen and (max-width: 768px) {

            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
        }

        /*BTN*/
        .btn1 {
            height: 3.5rem;
            padding: 0 2rem;
            border: 0.1rem solid #000;
            border-radius: 3.12rem;
            box-shadow: 0 0.4rem 0 0 #000;
            background-color: beige;
            color: #000;
            font-family: "Epilogue", sans-serif;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s;

            &:hover {
                transform: translateY(0.3rem);
                box-shadow: 0 0.2rem 0 0 #000;
            }
        }

        #btn1 {
            /*        padding-left: 6.25rem;*/
        }

        #btn2 {
            /*        padding-right: 6.25rem;*/
        }

        /*banner*/
        #banner {
            margin-top: 20px;
            width: 80%;
            height: 40rem;
            border: 0.1rem solid #000;
            border-radius: 2rem;
            background-image: linear-gradient(rgba(104, 68, 52, 0.6), rgba(104, 68, 52, 0.6)), url(images/toko.png);
            background-size: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /*scroll up button*/
        #button {
          display: inline-block;
          text-align: center;
          position: fixed;
          bottom: 30px;
          right: 30px;
          height: 3.5rem;
          padding: 0 2rem;
          border: 0.1rem solid #000;
          border-radius: 3.12rem;
          box-shadow: 0 0.4rem 0 0 #000;
          background-color: beige;
          color: #000;
          font-family: "Epilogue", sans-serif;
          font-size: 1.2rem;
          cursor: pointer;
          transition: background-color .3s, 
            opacity .5s, visibility .5s;
          opacity: 100;
          visibility: visible;
          z-index: 1000;
        }
        #button::after {
          content: "\f077";
          font-family: FontAwesome;
          font-weight: normal;
          font-style: normal;
          font-size: 2em;
          line-height: 50px;
          color: #65350f;
        }
        #button:hover {
          cursor: pointer;
          background-color: #333;
        }
        #button:active {
          background-color: #555;
        }
        /* Styles for the content section */

        @media (min-width: 500px) {
          #button {
            margin: 30px;
          }
        }

    </style>

</head>

<body style="background-color:#f7d7bc">

    <?php require "navbar.php" ?>

    <a id="button" href="#navbar"></a>

    <!-- button -->
    <div id="button1" class="row">
        <div id="btn1" class="col-6">
            <center><a href="#abt_us"><button class="btn1" style="font-family:coolvetica">About Us</button></a></center>
        </div>
        <div id="btn2" class="col-6">
            <center><a href="#contact"><button class="btn1" style="font-family:coolvetica">Contact</button></a></center>
        </div>
    </div>

    <!-- Banner -->

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10" id="banner">
            <h1
                style="font-family:coolvetica;color: beige;font-size: 4rem;text-align: left;padding-left: 3%;padding-top: 24rem;">
                About Us .</h1>
            <h1 style="font-family:coolvetica;color: beige;font-size: 1.5rem;text-align: left;padding-left: 3%;">
                Sedikit lebih jauh mengenai latar belakang toko berkah jaya.</h1>
        </div>
        <div class="col-sm-1"></div>
    </div>


    <!-- Foto Polaroid -->

    <div id="awal1" class="container-fluid" style="margin-top: 60px;">
        <div class="col-12 col-md-3" style="height: 30rem;object-fit: contain;">
            <img src="images/awal1.png"
                style="height: 28.75rem;border: 0.1rem solid #000; margin-left:auto; margin-right:auto; display:block;">
        </div>

        <div class="col-12 col-md-3" style="height: 30rem;object-fit: contain;">
            <img src="images/awal2.png"
                style="height: 28.75rem;border: 0.1rem solid #000; margin-left:auto; margin-right:auto; display:block;">
        </div>

        <div class="col-12 col-md-3" style="height: 30rem;object-fit: contain;">
            <img src="images/awal3.png"
                style="height: 28.75rem;border: 0.1rem solid #000; margin-left:auto; margin-right:auto; display:block;">
        </div>

        <div class="col-12 col-md-3" style="height: 30rem;object-fit: contain;">
            <img src="images/awal4.png"
                style="height: 28.75rem;border: 0.1rem solid #000; margin-left:auto; margin-right:auto; display:block;">
        </div>
        <div class="col-md-12">
            <div style="height:1px;width: 100%;background-color: black;margin-top: 40px;">
            </div>
        </div>

        <!-- Text -->

        <div class="container">
            <div class="col-sm-12">
                <div id="abt_us" style="margin-top:40px;width:100%">
                    <h1 style="font-family:coolvetica;text-align: center;">Latar Belakang Beridirinya Berkah Jaya</h1>
                    <p style="width: 100%;font-family: coolvetica;font-size: 1.75rem;text-align: center;object-position: center;">Toko ini dibangun oleh pemilik
                        toko
                        Pak Handidjaja pada tahun 1998 dikarenakan pandangan nya akan potensi bisnis kebutuhan bayi ini,
                        di
                        dunia bisnis ini menjadi salah satu bisnis yang memiliki pangsa pasar yang besar di seluruh
                        dunia.
                        Hal ini disebabkan karena setiap tahunnya, banyak orang tua yang memerlukan perlengkapan dan
                        kebutuhan bayi dengan cepat dan aman untuk si bayi.Pada awal mula terbentuknya toko ini, Berkah
                        jaya
                        hanya berjualan kebutuhan bayi yang essensial saja. Namun seiring berjalannya waktu berkembang
                        pula
                        jenis barang yang dijualnya mulai dari mainan, hadiah, hingga terbuka cabang Berkah Jaya 2 di
                        lokasi
                        yang berdekatan di Pasar Krian untuk berjualan pakaian dan aksesoris bayi. Setelah berjalan lama
                        sekarang Berkah Jaya baby shop 1 masih ada dan dapat kalian temukan di pasar krian sedang kan
                        untuk
                        baby shop 2 dapat kalian temukan di Jl.Gubernur Sunandar No. 578</p>
                </div>
            </div>
            <div class="row">
                <div style="height:1px;width: 95%;background-color: black;margin-top: 40px;">
                </div>
            </div>
        </div>



        <div class="container" style="margin-top:60px">
            <center>
                <div class="col-sm-6">
                    <img src="images/own1.jpg" style="border-radius: 5000px;height: 12.5rem;border: 0.1rem solid #000;">
                    <p style="font-family:coolvetica ;font-size: 1rem;">Christina Lelaona<br>Owner Berkah Jaya Baby Shop
                    </p>
                </div>

                <div class="col-sm-6">
                    <img src="images/own2.jpg" style="border-radius: 5000px;height: 12.5rem;border: 0.1rem solid #000;">
                    <p style="font-family:coolvetica ;font-size: 1rem;">Handidjaja<br>Owner Berkah Jaya Baby Shop</p>
                </div>
                <div class="col-sm-12">
                    <div style="height:1px;width: 95%;background-color: black;margin-top: 40px;"></div>
                </div>
            </center>
        </div>





        <center>
            <div id="contact" class="container" style="margin-top:20px;width:80%;height:250px;">
                <h1 style="font-family:coolvetica">Contact / Where you can find us</h1>
                <a href="https://www.tokopedia.com/berkahjayababyshop" target="_blank">
                    <div class="col-4"><img src="images/tokped2.png" style="height:50%;width: 50%;object-fit: contain;">
                    </div>
                </a>
                <a href="https://shp.ee/trzp2g6" target="_blank">
                    <div class="col-4"><img src="images/shopee.png" style="height:50%;width: 50%;object-fit: contain;">
                    </div>
                </a>
                <a href="https://www.instagram.com/berkahjaya.babyshop/?igshid=ZDdkNTZiNTM%3D" target="_blank">
                    <div class="col-4"><img src="images/ig.png" style="height:55%;width: 55%;object-fit: contain;">
                    </div>
                </a>
            </div>
            <div class="col-sm-12">
                <center>
                    <a href="https://goo.gl/maps/KKsrqCRithfcGzXs9"><img src="images/map1.png"
                            style="border-radius:5px;height:65%;width: 65%;"></a>
                    <p style="font-family:coolvetica; margin-top: 1%; text-align:center;">Map Berkah Jaya 1 (Pasar
                        Krian,
                        Jl.
                        Basuki Rahmat No. 11, Krian, Kec. Krian, Kabupaten Sidoarjo, Jawa Timur 61262)</p>
                </center>
            </div>
            <div class="col-sm-12" style="padding-top:3%; padding-bottom:3%"></div>
            <div class="col-sm-12">
                <center>
                    <a href="https://goo.gl/maps/UMAuaf4avpkq6J3o9"><img src="images/map2.png"
                            style="border-radius:5px;height:65%;width: 65%;"></a>
                    <p style="font-family:coolvetica; margin-top: 1%; text-align:center;">Map Berkah Jaya 2 (Jl.
                        Gubernur
                        Sunandar No. 578, Krian, Kec. Krian, Kabupaten Sidoarjo, Jawa Timur 61226)</p>
                </center>
            </div>
        </center>
    </div>
    <div class="col-sm-12">
        <?php
        require "footer3.php";
        ?>
    </div>

</body>


</html>