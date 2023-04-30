<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if(isset($_POST['addCat'])){
    $namaKategori = $_POST['namaKategori'];
}
$sql="INSERT INTO category VALUES(null,'$namaKategori')";
$query=mysqli_query($con,$sql);
header ("Location: index.php?status=success");
