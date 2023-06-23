<?php 
include "koneksi.php";
$idKios = $_GET['idKios'];

$sql = mysqli_query($mysqli, "SELECT * FROM validasipembayaran WHERE idKios = $idKios");
while($result = mysqli_fetch_array($sql))
{
    $idKios = $result['idKios'];
    $kioss = $result['kioss'];
    $sisa = $result['sisa'];
    $syarat =$result['pembayaran'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiosku</title>
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
           <form method="POST" action="MemesanKios_exe.php" enctype="multipart/form-data">
            <h1>Pesan Kios</h1>
            <p>isi form berikut untuk memesan kios</p>
            <h2></h2>
            <label for="idKios">idKios</label>
            <input type="text" id="idKios" name="idKios" value="<?php echo $idKios ;?>" required><br>
            <label for="kioss">Kios</label>
            <input type="text" id="kioss" name="kioss" required><br>
            <label for="sisa" style="display: inline-block; margin-right: 3px;">Durasi</label>
            <select id="sisa" name="sisa" class="form-select" style="display: inline-block; width: 60%; font-family: 'Nunito';" required>
                <option value="1 Bulan">1 Bulan</option>
                <option value="6 Bulan">6 Bulan</option>
                <option value="1 Tahun">1 Tahun</option>
            </select><br>
            <label for="pembayaran">No.Transaksi</label>
            <input type="text" id="pembayaran" name="pembayaran" class="mb-4"><br>
            <a href="MemesanKios.php" class="btn btn-warning">Batalkan</a>
            <button type="submit" name="submit" class="btn btn-danger">Kirim</button>
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
