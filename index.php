<?php
session_start();
error_reporting(0);
$username = 'admin';
$password = 'admin';

if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $username; 
        header("Location: isidata.php"); 
    } else {
        // Tampilkan Pesan Error
        form_login();
        echo "<script> alert ('Username Atau Password Salah');</script>";
    }
}    
else { 
    form_login();
}

function form_login(){ 
?>
    
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<center>
    <div id="formlogin">
      <h1>Log In</h1>
     <hr>
      <form name="session" action="" method="POST"> 
        <input type="text" class="inputan" name="username" value="" placeholder="Masukan Username"> 
          <input type="password" class="inputan" name="password" value="" placeholder="Masukan password"> 
        <input type="submit" class="wed"name="submit" value="Login">
     </form>
    </div>
  </center>
</body>
  
</html>
<?php } ?>