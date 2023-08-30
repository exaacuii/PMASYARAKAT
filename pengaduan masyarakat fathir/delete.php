<?php
include "beranda.php";

$id =$_GET['id'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduanmasyarakat","root","");
$query = $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id'");

header('location:laporan.php');