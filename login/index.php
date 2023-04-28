<?php
require '../connect.php';
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
        body {
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover; 
            overflow-x: hidden;
            background-attachment: fixed;
        }

        form {
            margin-top: 8.125rem;
            margin-left: 20%;
            margin-right: 20%;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 3.125rem;
            padding-bottom: 3.125rem;
            background-color: rgb(200, 211, 184);
            border-radius: 1.25rem;
        }
        button {
          --color: #9AAF7D;
          font-family: inherit;
          display: inline-block;
          width: 6em;
          height: 2.6em;
          line-height: 2.5em;
          overflow: hidden;
          /* margin: 20px; */
          margin-top:1.25rem; 
          font-size: 17px;
          z-index: 1;
          color: var(--color);
          border: 2px solid var(--color);
          border-radius: 15px;
          position: relative;
        }

        button::before {
          position: absolute;
          content: "";
          background: var(--color);
          width: 150px;
          height: 200px;
          z-index: -1;
          border-radius: 50%;
        }

        button:hover {
          color: white;
        }

        button:before {
          top: 100%;
          left: 100%;
          transition: .3s all;
        }

        button:hover::before {
          top: -30px;
          left: -30px;
        }
        .input input {
          border-radius: 10px;
          outline: 2px solid #9AAF7D;
          border: 0;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          background-color: #edf0e7;
          outline-offset: 3px;
          /* padding: 10px 1rem; */
          transition: 0.25s;
        }

        .input input:focus {
          outline-offset: 5px;
          background-color: #edf0e7;
        }
        .input{
            padding-top: 10px;
        }
    </style>
</head>

<body background="https://mediaini.com/wp-content/uploads/2021/01/Rekomendasi-perlengkapan-bayi-Instagram.jpg">
    <div class="wrapper container-lg">
        <form action="loginprocess.php" method="post">
            <h2 style=" padding-bottom: 15px;">Login</h2>
            <div class="input">
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="input" style="padding-top:30px;">
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="text-center">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>