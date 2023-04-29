    <!-- Footer/Copyright -->
    <!--footer starts from here-->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>

    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

    *{
        padding:0;
        margin:0;
    }
    /* The footer is fixed to the bottom of the page */

    footer{
        /* position: fixed; */
        bottom: 0;
    }
    .footer-distributed{
        background-color: #d9b4e2;
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 50px 50px 60px 50px;
        margin-top: 80px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left{
        width: 30%;
    }

    .footer-distributed h3{
        color: #6C3483;
        font: normal 36px 'Cookie', cursive;
        margin: 0;
    }

    /* The company logo */

    .footer-distributed .footer-left img{
        width: 30%;
    }

    .footer-distributed h3 span{
        color:  #17202A;
    }

    /* Footer links */

    .footer-distributed .footer-links{
        color:  #17202A;
        margin: 20px 0 12px;
    }

    .footer-distributed .footer-links a{
        display:inline-block;
        line-height: 1.8;
        text-decoration: none;
        color:  inherit;
    }

    .footer-distributed .footer-company-name{
        color:  #17202A;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center{
        width: 35%;
    }


    .footer-distributed .footer-center i{
        background-color:  #beafe1;
        color: #17202A;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope{
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p{
        display: inline-block;
        color: #17202A;
        vertical-align: middle;
        margin:0;
    }

    .footer-distributed .footer-center p span{
        display:block;
        font-weight: normal;
        font-size:14px;
        line-height:2;
    }

    .footer-distributed .footer-center p a{
        color:  #17202A;
        text-decoration: none;;
    }


    /* Footer Right */

    .footer-distributed .footer-right{
        width: 30%;
    }

    .footer-distributed .footer-company-about{
        line-height: 20px;
        color:  #17202A;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span{
        display: block;
        color:  #17202A;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons{
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a{
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color:  #beafe1;
        border-radius: 100rem;

        font-size: 20px;
        color: #17202A;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
    }

    /* Here is the code for Responsive Footer */
    /* You can remove below code if you don't want Footer to be responsive */


    @media (max-width: 880px) {

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i{
            margin-left: 0;
        }

    }

    </style>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
        <div id="copyright">
            <footer class="footer-distributed">

                <div class="footer-left">
                <img src="https://cdn-icons-png.flaticon.com/512/3282/3282468.png">
                    <h3><span>Berkah Jaya</span> Baby Shop</h3>

                    <p class="footer-links">
                        <a href="home.php">Home</a>
                        |
                        <a href="about.php">About</a>
                        |
                        <a href="https://web.whatsapp.com/">Contact</a>
                    </p>

                    <p class="footer-company-name">Copyright ©2023 | Designed by Service Learning Team Universitas Kristen Petra</p>
                </div>

                <div class="footer-center">
                    <div>
                        <a href="https://goo.gl/maps/nVRXkX62mVqLfZ1P9"><i class="fa fa-location-arrow"></i></a>
                        <p><span>JL.Gubernur Sunandar no 578, Krian, Sidoarjo, Kabupaten Sidoarjo</span></p>
                    </div>

                    <div>
                        <a href="https://web.whatsapp.com/"><i class="fa fa-phone"></i></a>
                        <p>085748177559</p>
                    </div>
                    <div>
                    <i class="fa-regular fa-envelope"></i>
                        <p>BerkahJaya@gmail.com</p>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                        <span>Contact Us</span>
                        </p>
                    <div class="footer-icons">
                        <a href="https://whatsapp.com"><img src="images/wa.png" style="height:1.5rem; weight:1.5rem; margin-top: -0.2rem;"></a>
                        <a href="https://instagram.com"><img src="images/insta.png" style="height:1.5rem; weight:1.5rem; margin-top: -0.2rem;"></a>
                        <!-- tokped-->
                        <a href="https://Tokopedia.com"><img src="images/tokped.png" style="height:2rem; weight:2rem; margin-top: -0.2rem;"></a>
                        <!-- shopee-->
                        <a href="https://shopee.com"><img src="images/shopee.png" style="height:1.5rem; weight:1.5rem; margin-top: -0.3rem;"></a>
                        <!-- <a href="https://Tokopedia.com"><i class="fa fa-tokopedia"></i></a> -->
                    </div>
                    <br>
                    <!-- <p class="footer-company-about">
                        <a href="https://Tokopedia.com"><span>Visit Us</span></a>
                        Click to shop now!</p> -->
                    
                </div>
            </footer>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </div>