<?php
include "koneksi.php";

// menangkap data id yang di kirim dari url
$idKios = $_GET['idKios'];
 
// menghapus data dari database
mysqli_query($mysqli,"DELETE from datakios WHERE idKios = $idKios");
 
    header('Location: mengelolahKios.php');
?>
