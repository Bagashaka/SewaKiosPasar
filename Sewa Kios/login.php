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
            <div id="kios">
                <div class="container">
                    <h1 class="sub-title">Login</h1>
                    <p class="sub-tittle" style="color:white;">Pilih Peran Anda</p>
                    <div class="kios-list">
                        <div class="kiosku">
                            <img src="images/kios1.jpg" height="300px" width="100px">
                            <div class="layer">
                               <a href="loginPenyewa.php" class="loghref" ><h3>Penyewa Kios</h3></a>
                            </div>
                        </div>
                        <div class="kiosku">
                            <img src="images/kios1.jpg" height="300px" width="100px">
                           <div class="layer"> 
                            <a href="loginPengelolah.php" class="loghref"><h3>Pengelolah Pasar</h3></a> 
                            </div> 
                        </div>
                    </div>
                </div>
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