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

<style>
body{
    font-family: sans-serif;
    background-color: black;
}
.tulisan_login{
    text-align: center;
    text-transform: uppercase;
}
.kotak_login{
    width: 50%;
    background: white;
    margin: 80px auto;
    padding: 30px 20px;
}
label{
    font-size: 11pt;
}
.form_login{
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
.tombol_login{
    background: gray;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}
.link{
    color: #232323;
    text-decoration: none;
    font-size: 10pt;
}
.daftar{
    text-align: center;
}
</style>

<body>
    <div class="kotak_login">
        <p class="tulisan_login".><h1>LOGIN DISINI</h1></p>

        <form method="POST" action="proses_login.php">
            <div class="mb-3">
                <label>username</label>
                <input type="text" name="usename" class="form_login" placeholder="username, no.telp atau email">
            </div>

            <div class="mb-3">
                <label>password</label>
                <input type="password" name="password" class="form_login" placeholder="masukan password">            
            </div>

            <button type="submit" class="tombol_login">masuk</button>

        </form>
            <div class="daftar">
                <p>belum punya akun? ayo <a href="daftar.php">daftar</a></p>
            </div>            
    </div>   
</body>
</html>