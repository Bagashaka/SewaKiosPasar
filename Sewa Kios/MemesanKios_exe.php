<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $idKios = $_POST['idKios'];
    $kioss = $_POST['kioss'];
    $sisa = $_POST['sisa'];
    $pembayaran = $_POST['pembayaran'];

    // Periksa apakah idKios sudah ada dalam tabel validasipembayaran
    $checkQuery = "SELECT * FROM validasipembayaran WHERE idKios = '$idKios'";
    $checkResult = mysqli_query($mysqli, $checkQuery);
    if(mysqli_num_rows($checkResult) > 0) {
        // Jika idKios sudah ada, lakukan UPDATE
        $updateQuery = "UPDATE validasipembayaran SET kioss='$kioss', sisa='$sisa', pembayaran='$pembayaran', validate = 'Belum divalidasi' WHERE idKios= '$idKios'";
        if(mysqli_query($mysqli, $updateQuery)){
            header('Location: MemesanKiosSent.php');
        } else {
            echo 'Gagal memperbarui data, akan redirect dalam 3 detik';
            header('Refresh: 3; URL=mengelolahKios.php');
        }
    } else {
        // Jika idKios belum ada, lakukan INSERT
        $insertQuery = "INSERT INTO validasipembayaran (idKios, kioss, sisa, pembayaran, validate) VALUES ('$idKios', '$kioss', '$sisa', '$pembayaran', 'Belum divalidasi')";
        if(mysqli_query($mysqli, $insertQuery)){
            header('Location: MemesanKiosSent.php');
        } else {
            echo 'Gagal menambahkan data, akan redirect dalam 3 detik';
            header('Refresh: 3; URL=mengelolahKios.php');
        }
    }
}
?>
