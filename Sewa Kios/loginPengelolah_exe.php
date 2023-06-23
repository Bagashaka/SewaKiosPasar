<?php
session_start();
include "koneksi.php";

$userPengelolah = $_POST['userPengelolah'];
$passPengelolah = $_POST['passPengelolah'];

$query = mysqli_query($mysqli, "SELECT * FROM akunpengelolah where userPengelolah='$userPengelolah' and passPengelolah='$passPengelolah'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $userPengelolah;
    $_SESSION['status'] = "login";
    header("location:homePengelolah.php");
} else {
    header("location:index.php");
}
?>