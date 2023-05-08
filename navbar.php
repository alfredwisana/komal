<!-- JQuery -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<!-- navabar -->
<nav class="navbar navbar-expand-lg bg-transparent mb-2" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="height:1.5rem; weight:1.5rem; margin-top: -0.2rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-left mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success bg-white" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="loginlink">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login/index.php">Login</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="logoutlink">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>