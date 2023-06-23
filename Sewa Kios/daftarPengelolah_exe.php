<?php
include "koneksi.php";
$userPengelolah = $_POST['userPengelolah'];
$passPengelolah = $_POST['passPengelolah'];
$sql = "INSERT INTO akunpengelolah (userPengelolah,passPengelolah) VALUES('$userPengelolah','$passPengelolah')";

if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: loginPengelolah.php');
exit();
?>