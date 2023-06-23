<?php  
include 'koneksi.php';

$sql = mysqli_query($mysqli, "SELECT * FROM `keluhan`");
$no = 0;
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
    <div id="headerMemesan">
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
           <caption><b>Daftar Keluhan</b></caption>
           <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Keluhan</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">Keluhan</th>        
                    <th scope="col">tanggapan</th>
                    <th scope="col">Pesan</th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($result = mysqli_fetch_assoc($sql)) { ?>
                  <tr>
                   <td><?php echo ++$no ?></td>
                    <td><?= $result['id']; ?></td>
                    <td><?= $result['penyewa']; ?></td>
                    <td><?= $result['keluhan']; ?></td>
                    <td><?= $result['tanggapan']; ?></td>
                    <td>  
                    <a href="lihatKeluhan.php?id= <?php echo $result['id'];?>" class="btn btn-danger">Lihat Pesan</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="mengajukanKeluhan.php" class="btn btn-primary float-end" style="margin-right: 6%;">Buat Keluhan</a>
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