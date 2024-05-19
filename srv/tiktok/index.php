<?php

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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap');

    * {
      font-size: 18px;
      font-family: 'Josefin Sans', sans-serif;
    }
    body {
    
    margin: 0px;
    
    
    background: url(https://i.postimg.cc/DzvkQTt7/wallpaperflare-com-wallpaper.jpg) no-repeat center;
    
    background-color: #000;
    
    background-size: cover;
    
    color: #fff;
        
    display: flex;
    
    flex-direction: column;
    
    flex-wrap: nowrap;
    
    align-items: center;
}
  </style>

  
</head>

<body style="background: #ffffff;" >
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
<div class="row justify-content-center">

  <div class="col-md-10">
    <div style="margin: 20px;">
    <div class="text-center">
            <img src="https://bagasarya.xyz/img/pembungkus/PanahBawah.png" alt="" class="img-fluid d-block mx-auto" width="200" onclick="window.location='<?= $parts[1] ?>';">                
            
          
      <onclick="window.location='<?= $parts[1] ?>';">
        <img src="https://bagasarya.xyz/img/pembungkus/NextToWebSite.png" alt="" class="img-fluid d-block mx-auto" width="270" onclick="window.location='<?= $parts[1] ?>';">
      <br>
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
      </a></div>
  </div>
</div>
    <script src="https://api.gifan.id/files/20240216_bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//file.gifan.id/fontawesome.js"></script>
  </body>
</html>
