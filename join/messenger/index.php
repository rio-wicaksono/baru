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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
    .button-63 {
  align-items: center;
  background-image: linear-gradient(144deg,#000000, #000000 50%,#000000);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 19px 24px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.button-63:active,
.button-63:hover {
  outline: 0;
}

@media (min-width: 768px) {
  .button-63 {
    font-size: 24px;
    min-width: 196px;
  }
}
    </style>
    <title>Join Mesengger Group</title>
  </head>
<body style="background: #ffffff;">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<a href="<? $parts[1] ?>">
<div class="container mt-5">
 		<center><img src="https://i.postimg.cc/HkGrTrvn/images-1.jpg" alt="" class="img-fluid d-block mx-auto" width="170">
    </h1>
 			<img<center><h1 class="h-2">⬇⬇⬇⬇</h1>
 		
 		</img<center></center>
 		<a href="<? $parts[1] ?>"><b><div class="button-63" "animate__animated animate__headShake">Join Mesengger Group </div><b/></a>
 	</div>
 	    </body>
</html>
