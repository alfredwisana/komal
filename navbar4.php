<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<style>
    h5{
        font: normal 30px 'Cookie', cursive;
    }
    #info{
        font-size: 18px;
        font-family: cursive;
        font-weight: bold;
        margin-left: -200px;
    }
    @media only screen and (max-width : 1024px) { 
        #info{
            margin-left: 0;
        }
    }
</style>

<!-- navabar -->
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <img src="images/logo.png" style="width: 3rem; margin-right: 1.1rem;">
            <h5 style="margin-top: 0.3rem;">Berkah Jaya Baby Shop </h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-center mb-lg-0" id="info">
                    <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Home</a></li>
                            <li class="nav-item"><a href="About_us.php" class="nav-link text-uppercase font-weight-bold">About us</a></li>
                            <li class="nav-item"><a href="katalog/index.php" class="nav-link text-uppercase font-weight-bold">Catalog</a></li>
                </ul>
                <div class="footer-icons">
                    <a href="login/index.php"><i class="fa-solid fa-circle-user fa-2xl" style="color: black;"></i></a>
                </div>
            </div>
        </div>
    </nav>

