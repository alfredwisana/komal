<?php
require '../connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if(isset($_POST['add'])){
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
        exit;
    }
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('yang anda upload bukan gambar!');
                </script>";
                exit;
    }
    $destination = '../images/' . $namaFile;
    move_uploaded_file($tmpName, $destination);
}
// if(!empty($gambar)){
//     echo"masuk";
// }
$sql="INSERT INTO services VALUES(null,'$nama','$kategori','$deskripsi','$harga','$destination')";
$query=mysqli_query($con,$sql);
header ("Location: index.php?status=success");
?>