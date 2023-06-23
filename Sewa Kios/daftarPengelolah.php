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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>                
                </ul>
            </nav> 
            
    </div> 
    <div class="logInForm">
        <h1 class="header-text" style="color:white;">Daftar Akun Pengelolah</h1>
        <form action="daftarPengelolah_exe.php" method="post">
        <input type="text" name="userPengelolah" placeholder="Masukkan Username yang anda inginkan" required>
        <input type="password" name="passPengelolah"  placeholder="Masukkan password yang anda inginkan" required>
        <center><button type="submit" value="tambahPeng" class="btn btn2">Daftar</button></center>
        </form>

        <center>
        <p style="color:white;">Sudah Memiliki Akun?</p>
        <a href="loginPengelolah.php" >Login</a>
        </center>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    </body>
</html>