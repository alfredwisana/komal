<?php 
if (!isset($_SESSION['username'])) {
    header('location: ../login/index.php');
}
$result = array(
    'status' => 0,
    'message' => ""
  ); 
if ( isset($_POST['logout'])){
session_start(); 
$username=$_SESSION['username'];
session_destroy();
$result['message'] = "Log Out ".$username. " berhasil";
$result['status'] = 1;
}
else{
    $result['message'] = "Log Out Gagal";
    $result['status']  = 0;
}

echo json_encode($result);
?>