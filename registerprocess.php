<?php
require "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysqli_query($con,"SELECT * FROM users where `username`='$username'");
if(mysqli_num_rows($sql)>0)
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username Already Exists');
    window.location.href='register.php';
    </script>");
}
else if (isset($_POST['save']))
{
    $sql="INSERT INTO users VALUES(null,'$username','$password')";
    $query=mysqli_query($con,$sql);
    header ("Location: loginUser.php?status=success");
}
?>