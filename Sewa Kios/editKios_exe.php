<?php 
include "koneksi.php";
    if(isset($_POST['submit'])){
        $idKios = $_POST['idKios'];
        $kioss = $_POST['kioss'];
        $penyewa = $_POST['penyewa'];
        $statuss = $_POST['status'];
    
    $query = "UPDATE datakios SET idKios = '$idKios',kioss = '$kioss',penyewa = '$penyewa',statuss = '$statuss' WHERE idKios='$idKios'";
        if(mysqli_query($mysqli,$query)){
                header('Location:mengelolahKios.php');
            }else{
            echo 'Ekstensi tidak sesuai, akan redirect dalam 3 detik';
            header('Refresh: 3;URL=mengelolahKios.php');
        }
    }
?>