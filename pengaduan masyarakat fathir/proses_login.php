<?php
session_start();

$UN = $_POST['username'];
$PW = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$UN' AND password='$PW'");

$jumlahBaris = $query->rowCount();

if($jumlahBaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';

header("location:laporan.php");    
}else{
    $query = $koneksi->query("SELECT * FROM petugas WHERE username='$UN' AND password='$PW' ");
    $data = $query->rowCount();
    if($data > 0){
        $result = $query->fetch();

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id_petugas'] = ['id_petugas'];
            $_SESSION['level'] = $result ['level'];
            header("location:admin.php");
    }else{
        header("location:login.php");
    }
}
?>