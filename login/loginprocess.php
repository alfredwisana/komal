<?php 
session_start();
require 'connect.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE `username` = '$username' and `password` = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("location: indexadmin.php");
    }
    else{
        echo "
        <script>
        window.alert('Invalid Username/Password');
        window.location.href = 'loginAdmin.php';
        </script>
        ";
    }
}
