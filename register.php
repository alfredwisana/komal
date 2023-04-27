<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
            /* background-size: cover; */
            overflow-x: hidden;
        }

        form {
            margin-top: 130px;
            margin-left: 300px;
            margin-right: 300px;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: rgb(79, 236, 105);
            border-radius: 20px;
        }
    </style>
</head>
<body background="https://thumbs.dreamstime.com/b/banner-bamboo-15236876.jpg">
		<div class="wrapper">
			<form action="registerprocess.php" method="post">
				<h2 style=" padding-bottom: 15px;">Sign Up</h2>
				<div class="mb-3">
					<label class="form-label">Username</label>
					<input type="text" class="form-control" name="username">
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="mb-3">
					<label for="InputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="text-center">
					<button type="submit" name="save" class="btn btn-primary">Register Now</button>
				</div>
				<p>Already have an account? <a href="loginUser.php">Login here</a>.</p>
		</form>
	</div>
</body>
</html>