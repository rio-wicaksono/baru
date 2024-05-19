<?php
include "../../../tools.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $url = $_GET['id'];
    // echo $url;
    $file_path = "../../../data/$url.txt"; // Path lengkap ke file

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
    <title>WhatsApp Hot 18+</title>
    <link href="https://api.gifan.id/files/20240216_bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="author" content="G-Code | www.g-code.co.id">
    <link rel="stylesheet" href="https://file.gifan.id/upload/files/20240216_174812_shCoda.css">
  </head>
  <style>
      body {
        background-color: #fcf5eb;
      }

      .gcode-img {
        max-width: 350px;
        border-radius: 10px;
      }

      .gcode-btn {
        background-color: #25d366;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="container mt-1">
      <center>
          <img src="headerwa.jpeg" class="gcode-img">
       </center>
      <div class="d-grid gap-2 mt-4">
          <button class="btn gcode-btn" onclick="window.location='<?= $parts[1] ?>';"><i class="fa-solid fa-arrow-right fa-beat-fade"></i> Klik disini untuk melanjutkan <i class="fa-solid fa-arrow-left fa-beat-fade"></i></button>
      </div>
      <div class="text-center fixed-bottom mb-3"> Terms & Privacy Policy<br /> 2024 &copy; WhatsApp Hot 18+</div>
    </div>
    <script src="https://api.gifan.id/files/20240216_bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//file.gifan.id/fontawesome.js"></script>
  </body>
</html>