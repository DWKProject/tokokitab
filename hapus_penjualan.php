<?php

include 'koneksi.php';
$id_jual = $_GET['id'];
$jumlah = $_POST['jumlah'];

$sql = mysqli_query($conn, "DELETE FROM penjualan WHERE id_jual = '$id_jual' ");
$sql2 = mysqli_query($conn, "UPDATE kitab SET stok = stok - '$jumlah' WHERE kd_kitab = '$kd_kitab' ");

if ($sql && $sql2) {
    echo "
    <script>
        alert('Data Berhasil Di Hapus');
        window.location = 'penjualan.php';
    </script>
    ";
}
