<?php
session_start();
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

    <title>Isi Data</title>
  </head>
  <body>
  <!-- container -->
    <div class="container">
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">
        <img src="gambar/icon orang.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Selamat Datang <?php echo $_SESSION['username'];?></a>
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
<div class="card">
  <div class="card-body">
    <h2 class="card-title text-center">ISI DATA MAHASISWA</h2>
    <hr>
    <!-- form isi data -->
<div class="container">
<form action="hasil.php" class="was-validated" name="forminput" method="post" FORM ENCTYPE="multipart/form-data" >

  <div class="form-row">
    <div class="col">
    <h5>Nama</h5>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      <div class="invalid-feedback"></div>
    </div>
    <div class="col">
    <h5>NIM</h5>
      <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      <div class="invalid-feedback"></div>
    </div>
   </div>
<br>
  <div class="form-row">
    <div class="col">
    <h5>Jenis Kelamin</h5>
    <select class="form-control "id="jk" name="jk">
        <option id="disabledTextInput" disabled selected>Pilih Jenis Kelamin Anda</option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
        <div class="invalid-feedback"></div>
    </select>
    </div>
    <div class="col">
    <h5>Jurusan</h5>
    <select class="form-control"id="jurusan" name="jurusan" >
        <option id="disabledTextInput" disabled selected>Pilih Jurursan Anda</option>
        <option>Sistem Komputer</option>
        <option>TI-MTI</option>
        <option>TI-DGM</option>
        <option>TI-KAB</option>
        <div class="invalid-feedback"></div>
    </select>
    </div>
  </div>
<br>
  <div class="form-row">
    <div class="col">
    <h5>Alamat</h5>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      <div class="invalid-feedback"></div>
    </div>
    <div class="col">
    <h5>Hobi</h5>
      <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Masukkan Hobi Anda" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      <div class="invalid-feedback"></div>
    </div>
   </div>
<br>
  <div class="form-row">
    <div class="col">
    <h5>Pesan dan Kesan Kuliah Di STIKI</h5>
    <textarea class="form-control" id="exampleFormControlTextarea1"  id="pesan" name="pesan" placeholder="Masukkan Pesan dan Kesan Anda" rows="3" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
    <div class="invalid-feedback"></div>

    </div>
    <div class="col">
    <h5>Upload Foto</h5>
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="file" id="customFileLang" lang="in" accept="image/png, image/gif, image/jpeg" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        <label class="custom-file-label" for="customFileLang">Pilih Foto </label>
    </div>
    </div>
   </div>
   <button class="btn btn-primary"  class="text-right" style="float: right;"name="submit" type="submit">KIRIM</button>
</form>
</div>
    <!-- akhir form isi data -->
  </div>
</div>

    </div>
<!-- akhir container -->
<?php

?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</html>