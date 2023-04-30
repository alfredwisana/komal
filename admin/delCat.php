<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if (isset($_POST['Kategori'])) {
    $Kategori = $_POST['Kategori'];
}
echo "$Kategori";
$sql = "DELETE FROM `category` WHERE namaKategori = '$Kategori'";
$query = mysqli_query($con, $sql);
header("Location: index.php?status=success");
