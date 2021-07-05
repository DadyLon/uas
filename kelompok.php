<?php
session_start();
error_reporting(0);
if(!isset($_SESSION ['username'])){
    header("location:index.php?pesan=belum login");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styleisi.css">

    <title>HASIL DATA</title>
  </head>
  <body>
  <!-- container -->
    <div class="container">
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">
        <img src="gambar/icon orang.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Selamat Datang <?php echo $_SESSION['username'];?> </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto" style="font-size: 20px;">
      <li class="nav-item">
        <a class="nav-link" href="isidata.php">Isi Data Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kelompok.php">Kelompok</a>
      </li>
    </ul>
    <a href="logout.php" class="btn btn-primary" onclick="return confirm('Yakin Logout?')">Logout</a>
    </div>
</nav>
<!-- akhir navbar -->

<!-- konten -->
<div class="container">
</div>
<br>
<!-- akhir konten -->
<div class="card " style="width: 100%; hight: auto; background-color: #6CDBEB">
  <div class="card-body">
    <h3 class="card-title text-center">Nama Kelompok</h3>
    <hr>

<div class="container">

<div class="container col col-lg-10">

<div class="row">
  <div class="cardkelompok">
    <img class='fotokelompok' src='gambar/dadylon.jpeg' width='200px' height='200px'>
    <div class="card-body text-center">
    <p class="card-text">I Ketut Dady Usnadi </p>
    <p class="card-text">20101113 </p>
    </div>
  </div>

  <div class="row">
  <div class="cardkelompok tengah">
    <img class='fotokelompok' src='gambar/aini.jpeg' width='200px' height='200px'>
    <div class="card-body text-center">
    <p class="card-text">Kurrotul Aini</p>
    <p class="card-text">20101098</p>
    </div>
  </div>
  </div>

  <div class="row">
  <div class="cardkelompok">
    <img class='fotokelompok' src='gambar/dhiyo.jpeg' width='200px' height='200px'>
    <div class="card-body text-center">
    <p class="card-text">Putu Dhiyo Pranawa </p>
    <p class="card-text">20101191 </p>
    </div>
  </div>
  </div>

</div>

<div class="marginkelompok">
<div class="row">
  <div class="cardkelompok">
    <img class='fotokelompok' src='gambar/yane.jpeg' width='200px' height='200px'>
    <div class="card-body text-center">
    <p class="card-text">Anisetus Jemparut</p>
    <p class="card-text">20101266</p>
    </div>
  </div>

  <div class="row">
    <div class="cardkelompok">
      <img class='fotokelompok' src='gambar/abel.jpeg' width='200px' height='200px'>
      <div class="card-body text-center">
      <p class="card-text">Abellio Hermanto</p>
      <p class="card-text">20101099 </p>
      </div>
    </div>
    </div>
</div>
</div>





<!-- continer lg 10 -->
  </div>
<!--kontainer  -->
</div>
<!-- akhir container -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>