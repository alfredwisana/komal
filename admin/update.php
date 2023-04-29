<?php
require 'connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login/login.php');
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $namaServis = $_POST['namaServis'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];
    $localFile = $_POST['localFile'];
    // echo "local file -->" . $localFile;
    // if(empty($localFile)){
    //     echo 'local file is empty';
    // }
    // echo $id. "<br>";
    // echo var_dump($id);
    // echo "<br>";
    // echo $namaServis ."<br>";
    // echo $deskripsi."<br>";
    // echo $gambar."<br>";
    // echo $harga."<br>";
}
if(!empty($localFile)){
    $relativePath = "images/\\$localFile";
    $query = "UPDATE `services` SET `namaServis`='$namaServis',`deskripsi`='$deskripsi',`harga`=$harga,`gambar`='$relativePath' WHERE id = '$id'";
}
else{
    $query = "UPDATE `services` SET `namaServis`='$namaServis',`deskripsi`='$deskripsi',`harga`=$harga,`gambar`='$gambar' WHERE id = '$id'";
}


mysqli_query($con, $query);
header("location: admin/index.php");
// echo "sini <br>";
// echo mysqli_affected_rows($con);