<?php
include 'koneksi.php';
$id_kitab = $_GET['id_kitab'];
$sql = mysqli_query($koneksi, "DELETE FROM kitab WHERE id_kitab = $id_kitab");
header("location: kitab.php");
