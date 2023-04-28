<?php 
session_start();
require '../connect.php';

$result = array(
    'status' => 0,
    'message' => ""
  ); 


    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE `username` = '$username' and `password` = '$password'";
    $result_query = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result_query);
    if(mysqli_num_rows($result_query) == 1){
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $result['message'] = "Log In ".$username. " berhasil";
        $result['status'] = 1;
    }
    else{
        $result['message'] = "Invalid Username/Password";
        $result['status']  = 0;
    }

    echo json_encode($result)
?>