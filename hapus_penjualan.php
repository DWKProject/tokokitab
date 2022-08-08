<?php

include 'koneksi.php';
$id_jual = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM penjualan WHERE id_jual = '$id_jual' ");

if ($sql) {
    echo "
    <script>
        alert('Data Berhasil Di Hapus');
        window.location = 'penjualan.php';
    </script>
    ";
}
