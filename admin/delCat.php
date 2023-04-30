<?php
require '../connect.php';

$result = array(
    'message' => ""
  ); 

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if (isset($_POST['Kategori'])) {
    $Kategori = $_POST['Kategori'];


    $sql = "DELETE FROM `category` WHERE namaKategori = '$Kategori'";
    $query = mysqli_query($con, $sql);
    $result['message'] = "Kategori berhasil dihapus";
    echo json_encode($result);
    }
?>
