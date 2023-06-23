<?php
include "koneksi.php";
$userPenyewa = $_POST['userPenyewa'];
$passPenyewa = $_POST['passPenyewa'];
$sql = "INSERT INTO akunpenyewa (userPenyewa,passPenyewa) VALUES('$userPenyewa','$passPenyewa')";

if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: loginPenyewa.php');
exit();
?>