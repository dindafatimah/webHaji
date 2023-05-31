<?php
include'../connect.php';

$judul=$_POST['judul'];
$tanggal=$_POST['tanggal'];
$berita= nl2br($_POST['berita']);

if(isset($_POST['simpan'])) {


$sql =
"INSERT INTO `berita`(`judul`, `tanggal`, `berita`) 
VALUES ('$judul', '$tanggal', '$berita')";

$query = mysqli_query($db, $sql);

header("location:../berita.php");
}
?>