<?php
require '../connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- bootstrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">


    <style>
        body {
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover; 
            overflow-x: hidden;
            background-attachment: fixed;
        }

        .form {
            margin-top: 8.125rem;
            margin-left: 25%;
            margin-right: 25%;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 3.125rem;
            padding-bottom: 3.125rem;
            background-color: rgb(201, 160, 220);
            border-radius: 1.25rem;
        }
        button {
          --color: #b47bce;
          font-family: inherit;
          display: inline-block;
          width: 6em;
          height: 2.6em;
          line-height: 2.0em;
          overflow: hidden;
          /* margin: 20px; */
          margin-top:0.005rem; 
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
          outline: 2px solid #b47bce;
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
      
        
    </style>
</head>

<body background="https://mediaini.com/wp-content/uploads/2021/01/Rekomendasi-perlengkapan-bayi-Instagram.jpg">
    <div class="wrapper container-lg">
          <div class="form">
            <h2 style=" padding-bottom: 15px; text-align: center; font-weight: bold;">Login</h2>
            <div class="input">
                <input type="text" class="form-control" id="username"  placeholder="Username" style="font-family:coolvetica">
                <div id="emailHelp" class="form-text" style="font-family:coolvetica">We'll never share your email with anyone else.</div>
            </div>
            <div class="input" style="padding-top:30px;">
                <input type="password" class="form-control" id="password"  placeholder="Password">
            </div>
            <p style="padding-top: 3%;"><a href="../index.php" style="font-family:coolvetica; text-decoration:none; color:black;">Back to Home page</a></p>
            <div class="text-center">
                <button id="login" style="font-family:coolvetica">Login</button>
            </div>
          </div>
    </div>
</body>

<script>
  $(document).ready(function(){
    $("#login").click(function(){
      var v_username = $("#username").val();
      var v_password = $("#password").val();
      console.log(v_username);
      $.ajax({
        url: "loginprocess.php",
        type: "POST",
        dataType: "json",
        data: {
          username : v_username,
          password : v_password
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
          setTimeout(function(){window.location.replace("../admin/index.php")}, 1000);
        } else {
          setTimeout(function(){window.location.reload()}, 1000);
        }
      },
      error: function(request,status,error) {
        alert(request.responseText);
      }
  
    })
    })
  })

  // Swal.fire({
  //     position: 'top-end',
  //     icon: 'success',
  //     title: 'Success',
  //     text: 'You are successfully loged out. Please login to continue.',
  //     showConfirmButton: false,
  //     timer: 2000    
  //     });
</script>

</html>