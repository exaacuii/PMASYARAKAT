<?php
include "beranda.php";

$id =$_GET['id'];

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduanmasyarakat","root","");
$query = $koneksi->query("UPDATE pengaduan SET isi_laporan='$isi' WHERE id_pengaduan='$id'");

header('location:laporan.php');