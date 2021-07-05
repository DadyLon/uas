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
    Capek Ngoding <?php echo $_SESSION['username'];?> </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav ml-auto" style="font-size: 20px;">
      <li class="nav-item">
        <a class="nav-link" href="isidata.php">Isi Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kelompok.php">Kelompok</a>
      </li>
    </ul>
    <a href="logout.php" class="btn btn-primary">Logout</a>
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
    <h3 class="card-title text-center">HASIL DATA</h3>
    <hr>
    <!-- form isi data -->
<div class="container">
<?php
      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $jurusan = $_POST['jurusan'];
      $jk = $_POST['jk'];
      $hobi = $_POST['hobi'];
      $pesan = $_POST['pesan'];
      $dir_upload ="upload/";
      $file = $_FILES['file']['name'];
      $uploadfile = $dir_upload . $_FILES['file']['name'];
      if (is_uploaded_file($_FILES['file']['tmp_name'])) {
          $kirim = move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile);
      if($kirim){
      echo "<br>File berhasil di upload ke server pada folder <b>$uploadfile</b>";
      } else{
          echo "File gagal diupload";
          echo "error : ", $_FILES['file']['error'];
      }
    }


    // $nim = $_POST['nim'];
    // $nama = $_POST['nama'];
    // $alamat = $_POST['alamat'];
    // $jurusan = $_POST['jurusan'];
    // $jk = $_POST['jk'];
    // $hobi = $_POST['hobi'];
    // $pesan = $_POST['pesan'];
    // $dir_upload ="upload/";
    // $file = $_FILES['file']['name'];
    // $uploadfile = $dir_upload . $_FILES['file']['name'];
    // if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    //     $kirim = move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile);
    // if($kirim){
    // echo "<br>File berhasil di upload ke server pada folder <b>$uploadfile</b>";
    // } else{
    //     echo "File gagal diupload";
    //     echo "error : ", $_FILES['file']['error'];
    // }    
?>
<div class="container col col-lg-10">
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item ">Nama:<?php echo $nama?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">NIM:<?php echo $nim?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Jenis Kelamin:<?php echo $jk?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Jurusan:<?php echo $jurusan?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Alamat:<?php echo $alamat?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Hobi:<?php echo $hobi?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Pesan dan Kesan:<?php echo $pesan?></li>
  </ul>
</div>
<br>
<div class="cardp" style="width: auto;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Foto:<br></li>
    <?php
    echo "<img class='fototengah' src='upload/$file' width='400px' height='400px'>";
    ?>
  </ul>
</div>
<br>
</div>

    </div>
    <!-- akhir form isi data -->
  </div>
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