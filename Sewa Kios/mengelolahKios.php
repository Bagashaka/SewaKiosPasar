<?php  
include 'koneksi.php';

$query = "SELECT * FROM datakios";
$sql = mysqli_query($mysqli, $query);
$no = 1;
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
           <caption><b>Daftar Kios</b></caption>
           <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Kios</th>
                    <th scope="col">Kios</th>
                    <th scope="col">Penyewa</th>
                    <th scope="col">Status</th>                    
                    <th scope="col">Aksi</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php while ($result = mysqli_fetch_assoc($sql)) { ?>
                  <tr>
                   <td><?php echo $no++ ?></td>
                    <td><?= $result['idKios']; ?></td>
                    <td><?= $result['kioss']; ?></td>
                    <td><?= $result['penyewa']; ?></td>
                    <td><?= $result['statuss']; ?></td>
                    <td>
                      <a href="editKios.php?idKios= <?php echo $result['idKios'];?>" class="btn btn-warning">Edit</a>
                      <a href="deleteKios.php?idKios= <?php echo $result['idKios'];?>" class="btn btn-danger" 
                      <?php echo "onClick=\"return confirm('Apakah anda yakin akan menghapus data?')\";"?>>Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            <a href="tambahKios.php" class="btn btn-primary float-end" style="margin-right: 7%;">Tambah</a>
            <a href="homePengelolah.php" class="btn btn-primary float-end" style="margin-right: 2%;">Kembali</a>
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