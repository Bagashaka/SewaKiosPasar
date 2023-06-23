<?php 
include "koneksi.php";
$idKios = $_GET['idKios'];
$sqlo = mysqli_query($mysqli, "SELECT * FROM datakios WHERE idKios = $idKios");
$result = mysqli_fetch_array($sqlo);
$namaKios = $result['kioss'];

if(isset($_POST['submit'])){
    $durasi = $_POST['durasi'];
    if($_POST['syarat'] != null){
        $syarat = "terpenuhi";
    } else {
        $syarat = "Belum terpenuhi";
    }

    $checkQuery = "SELECT * FROM perpanjangansewa WHERE idKios = '$idKios'";
    $checkResult = mysqli_query($mysqli, $checkQuery);
    if(mysqli_num_rows($checkResult) > 0){
        // Jika idKios sudah ada, lakukan UPDATE
        $sql = mysqli_query($mysqli, "UPDATE `perpanjangansewa` SET `kioss` = '$namaKios',`sisa`='$durasi', `syarat`='$syarat', `validate` = 'Belum divalidasi' WHERE `perpanjangansewa`.`idKios`='$idKios'");
        if ($sql) {
            echo "Record updated successfully";
            header('Location: mengajukanPerpanjangan.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    } else {
        // Jika idKios belum ada, lakukan INSERT
        $insertQuery = "INSERT INTO perpanjangansewa (idKios, kioss, sisa, syarat,validate) VALUES ('$idKios', '$namaKios','$durasi', '$syarat', 'Belum divalidasi')";
        if(mysqli_query($mysqli, $insertQuery)){
            echo "New record created successfully";
            header('Location: mengajukanPerpanjangan.php');
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($mysqli);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiosku </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="header">
        <div class="container">
        <nav class="navbar navbar-expand-lg ">
                <img class="logo" src="images/logo.jpg">
                <ul>
                    <li><a href="homePenyewa.php">Home</a></li>
                    <li><a href="MemesanKios.php">Memesan Kios</a></li>
                    <li><a href="kiosAktif.php">Kios Aktif</a></li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="color:white"
                        >
                            Perpanjangan & Pembayaran Sewa
                        </a>
                        <ul class="dropdown-menu">
                    <li>
                         <a class="dropdown-item" href="mengajukanPerpanjangan.php">Perpanjang Sewa</a>
                    </li>
                    <li>
                         <a class="dropdown-item" href="MemesanKios.php">Pembayaran Kios</a>
                    </li>
                        </ul>
                    <li><a href="logoutPenyewa.php"<?php echo "onClick=\"return confirm('Apakah anda yakin Log Out?')\";"?>>Log Out</a></li>                
                    <li><a class="navbar-brand " style="margin-left:270px; background-color: #ffcc00;" href="listKeluhan.php">
                    <img src="https://raw.githubusercontent.com/NaufallHilal/test/main/5848-removebg.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-end "">
                     </a></li>     
            </nav> 
        </div>
        <div class="LayerKios">
            <div class="formKios">
           <form method="POST" action="#" enctype="multipart/form-data">
            <p style="margin-bottom:0.2px;">Perpanjang Sewa Kios</p>
            <div style="font-size:20px; font-weight:bold; margin-left:20px;"><?php echo $result['kioss'] ;?></div>
            <h2></h2>
            <label for="penyewa">Penyewa</label>
            <input type="text" id="penyewa" name="penyewa" value="<?=$result['penyewa']?>"><br>
            
            <label for="idKios">idKios</label>
            <input type="text" id="idKios" name="idKios" required  value="<?=$result['idKios']?>"><br>
            <label for="durasi" style="display: inline-block; margin-right: 3px;">Durasi</label>
            <select id="durasi" name="durasi" class="form-select" style="display: inline-block; width: 60%; font-family: 'Nunito';" required>
                <option value="1 Bulan">1 Bulan</option>
                <option value="6 Bulan">6 Bulan</option>
                <option value="1 Tahun">1 Tahun</option>
            </select><br>
            <label for="status">No. Transaksi</label>
            <input type="text" id="status" name="syarat"  required><br>
            <a href="mengajukanPerpanjangan.php" class="btn btn-warning" style="margin-top:70px; margin-left:650px;">Batalkan</a>
            <button type="submit" value="submit" name="submit" class="btn btn-danger" style="margin-top:70px;">Simpan</button>
            </form>
        </div>
        </div>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    </body>
</html> 