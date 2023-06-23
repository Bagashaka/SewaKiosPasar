<?php 
include "koneksi.php";
$idKios = $_GET['idKios'];

    $sql = mysqli_query($mysqli, "SELECT * FROM perpanjangansewa WHERE idKios = $idKios");
    $result = mysqli_fetch_array($sql);
        $idKios = $result['idKios'];
        $kioss = $result['kioss'];
        $sisa = $result['sisa'];
        $syarat =$result['syarat'];
    if(isset($_POST['submit'])){
      $sql="UPDATE `perpanjangansewa` SET `validate`='tervalidasi' WHERE `perpanjangansewa`.`idKios`=$idKios";
    if(mysqli_query($mysqli, $sql)){
        echo "Records added successfully.";
        header('Location:perpanjanganSewa.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);
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
                    <li><a href="homePengelolah.php">Home</a></li>
                    <li><a href="mengelolahKios.php">Mengelolah Kios </a></li>
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
           <form method="POST" action="#" enctype="multipart/form-data">
            <h1 >Perpanjangan Sewa</h1>
            <h2 style="font-weight:bold;">Kios <?=$kioss?></h2>
            <label for="idKios">idKios</label>
            <label ><?php echo $idKios ;?></label><br>
            <label for="kioss">Kios</label>
            <label ><?php echo $kioss ;?></label><br>
            <label for="penyewa">Durasi</label>
            <label ><?php echo $sisa ;?></label><br>
            <label for="status">No.Transaksi</label>
            <label ><?php echo $syarat ;?></label><br>
            <a href="perpanjanganSewa.php" class="btn btn-warning " style="margin-top:50px; margin-left: 650px;">Kembali</a>
            <button type="submit" value="editKios" name="submit" class="btn btn-danger " style="margin-top:50px;">Validasi</button>
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