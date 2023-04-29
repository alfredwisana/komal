<?php
    require '../connect.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: ../login/index.php');
    }
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `services` WHERE id = $id ";
        $query=mysqli_query($con,$sql);
        $result['message'] = "Barang berhasil dihapus";
        header("Location: index.php");
    }

?>