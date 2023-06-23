<?php
session_start();
include "koneksi.php";

$userPenyewa = $_POST['userPenyewa'];
$passPenyewa = $_POST['passPenyewa'];

$query = mysqli_query($mysqli, "SELECT * FROM akunpenyewa where userPenyewa ='$userPenyewa' and passPenyewa ='$passPenyewa'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $userPenyewa;
    $_SESSION['status'] = "login";
    header("location:homePenyewa.php");
} else {
    header("location:index.php");
}
?>