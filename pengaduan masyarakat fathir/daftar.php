<?php
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="signup.css">
<body>
    <form action="action_page.php" style="border:1px solid #ccc">
        <div class="container">
          <h1 style="color: white;">Daftar</h1>
          <p style="color: white;">isi halaman ini untuk daftar akun anda.</p>
          <hr>
      
          <label for="email" style="font-family: sans-serif;" ><b style="color: white;">Username</b></label>
          <input type="text" placeholder="Masukan Username" name="username" required >
      
          <label for="psw" style="font-family: sans-serif;" ><b style="color: white;">Password</b></label>
          <input type="password" placeholder="Masukan Password" name="psw" required>
      
          <label for="psw-repeat" style="font-family: sans-serif;" ><b style="color: white;">Ulangi Password</b></label>
          <input type="password" placeholder="Ulangi Password" name="psw-repeat" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" style="font-family: sans-serif;"><a style="color: white;">
Ingat saya</a> 
          </label>
      
          <p style="color: white;">Dengan membuat akun, Anda menyetujui  <a href="#" style="color:dodgerblue">Ketentuan & Privasi kami.</a>.</p>
      
          <div class="clearfix">
            <button type="submit" class="signupbtn" style="font-family: sans-serif;"  style="color: white;" style="justify-content:center;">Daftar</button>
          </div>
        </div>
      </form>
</body>
</html>