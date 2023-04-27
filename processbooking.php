<?php
require 'connect.php';

if (isset($_POST['book'])) {
    $nama = $_POST['nama'];
    $namaServis = $_POST['namaServis'];
    $notelp = $_POST['notelp'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    $sql = "INSERT INTO `orders`(`namaCustomer`, `namaServis`, `noHP`, `tanggal`, `waktu`) VALUES ('$nama', '$namaServis', $notelp, '$tanggal', '$waktu')";
    $result = mysqli_query($con, $sql);
    exit();
}
?>