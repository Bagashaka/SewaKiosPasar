<?php
include 'koneksi.php';
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
                    <li><a href="homePengelolah.php">Home</a></li>
                    <li><a href="mengelolahKios.php">Mengelolah Kios</a></li>
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
                  <a class="dropdown-item" href="perpanjanganSewa.php">Perpanjangan Sewa</a>
                </li>
                <li>
                  <a class="dropdown-item" href="listpembayaranSewa.php">ValidasiPembayaran</a>
                </li>
                
              </ul>
            </li>
                    <li><a href="logoutPengelolah.php"<?php echo "onClick=\"return confirm('Apakah anda yakin Log Out?')\";"?>>Log Out</a></li>                
                    <li><a class="navbar-brand " style="margin-left:270px; background-color: #ffcc00;" href="tanggapanKeluhan.php">
                    <img src="https://raw.githubusercontent.com/NaufallHilal/test/main/5848-removebg.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-end "">
                     </a></li>  
                </ul>
            </nav> 
        </div>
        <div class="LayerKios">
            <div class="formKios">
           <form method="POST" action="tambahKios_exe.php" enctype="multipart/form-data">
            <h1>Tambah Kios</h1>
            <p>isi form berikut untuk menambahkan kios</p>
            <h2></h2>
            <label for="idKios">idKios</label>
            <input type="text" id="idKios" name="idKios" placeholder="Masukkan id Kios" required><br>
            <label for="kioss">Kios</label>
            <input type="text" id="kioss" name="kioss" placeholder="Masukkan Nama Kios" required><br>
            <label for="penyewa">Penyewa</label>
            <input type="text" id="penyewa" name="penyewa" placeholder="Masukkan Nama Penyewa" ><br>
            <label for="status">status</label>
            <!-- <input type="text" id="status" name="status" placeholder="Masukkan status" required><br> -->
            <select  name="status" class="form-select mb-4 " style="margin-left: 7%;width:60%;font-family:'Nunito';" required>
  					  <option selected>Pilih Status Kios</option>
  					  <option value="Aktif">Aktif</option>
  					  <option value="Kosong">Kosong</option>
			      </select>
            <a href="mengelolahKios.php" class="btn btn-warning">Batalkan</a>
            <button type="submit" value="tambahKios" name="submit" class="btn btn-danger">Simpan</button>
            </form>
        </div>
        </div>
    </div>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

<!-- model -->


</body>
</html> 