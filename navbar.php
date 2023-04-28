<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

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

            <ul class="navbar-nav mb-5 d-flex mb-lg-0" id="logoutlink">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>