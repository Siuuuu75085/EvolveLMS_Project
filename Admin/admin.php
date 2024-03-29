<?php
if(!isset($_SESSION)){
session_start();
}
include_once('../dbConnection.php');

// Admin Login verification
if(!isset($_SESSION['is_admin_login'])){
if(isset($_POST['checkLogemail']) && isset($_POST['adminLoginEmail']
) && isset($_POST['adminLoginPass'])){
$adminLoginEmail = $_POST['adminLoginEmail'];
$adminLoginPass = $_POST['adminLoginPass'];
$sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email =
'".$adminLoginEmail." AND admin_pass='".$adminLoginPass."'";
$result = $conn->query($sql);

$row = $result->num_rows;
if($row === 1){
    $_SESSION['is_admin_login'] = true;
    $_SESSION['adminLoginEmail'] = $adminLoginEmail;
    echo json_encode($row);
} else if($row === 0){
    echo json_encode($row);
    }
    }
}
?>