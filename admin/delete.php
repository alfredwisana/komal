<?php

$result = array(
    'message' => ""
  ); 
    require '../connect.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: ../login/index.php');
    }
    if (isset($_POST['id'])){

        $id = $_POST['id'];
        $sql = "DELETE FROM `produk` WHERE id = $id ";
        $query=mysqli_query($con,$sql);
        $result['message'] = "Barang berhasil dihapus";
        echo json_encode($result);
    }

?>