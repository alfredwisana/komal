<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if(isset($_POST['addCatButton'])){
    $addCat = $_POST['addCat'];
}
$sql="INSERT INTO category VALUES(null,'$addCat')";
$query=mysqli_query($con,$sql);
header ("Location: index.php?status=success");
