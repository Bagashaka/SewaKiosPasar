<?php 
include "koneksi.php";
    $id=$_GET['id'];

    $sql = mysqli_query($mysqli, "SELECT * FROM `keluhan` WHERE id = $id");
    while($result = mysqli_fetch_array($sql))
    {
        $id = $result['id'];
        $penyewa = $result['penyewa'];
        $keluhan = $result['keluhan'];
    }

    if(isset($_POST['submit'])){
        $tanggapan=$_POST['tanggapan'];
        $sql = mysqli_query($mysqli, "UPDATE `keluhan` SET `tanggapan`='$tanggapan' WHERE `id`='$id'");
        if($sql){
            echo "New record created successfully";
                header('Location: tanggapanKeluhan.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
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
                    <li><a href="mengajukanPerpanjangan.php">Perpanjang Sewa</a></li>
                    <li><a href="logoutPenyewa.php"<?php echo "onClick=\"return confirm('Apakah anda yakin Log Out?')\";"?>>Log Out</a></li>                
                </ul>
            </nav> 
        </div>
        <div class="LayerKios">
            <div class="formKios">
           <form method="POST" action="#" enctype="multipart/form-data">
            <p style="margin-bottom:0.2px;">Tanggapi Keluhan</p>
            <div style="font-size:20px; font-weight:bold; margin-left:20px;">Keluhan <?=$id?> </div>
            <h2></h2>
            <label for="penyewa">Subjek</label>
            <input type="text" id="penyewa" name="penyewa" readonly style="background:#eae5dc;" value="<?=$keluhan?>"><br>
            
            <label for="pengirim">Pengirim</label>
            <input type="text" id="pengirim" name="pengirim" readonly style="background:#eae5dc;" value="<?=$penyewa?>" ><br>
            <label for="status">Pesan Tanggapan</label>
            <input type="text" id="tanggapan" name="tanggapan" required ><br>

            <a href="tanggapanKeluhan.php" class="btn btn-warning" style="margin-top:40px; margin-left:650px;">Kembali</a>
            <button type="submit" value="editKios" name="submit" class="btn btn-danger" style="margin-top:40px;">Simpan</button>
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