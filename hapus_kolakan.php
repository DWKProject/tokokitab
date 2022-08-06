<?php

include 'koneksi.php';
$id_kolakan = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM kolakan WHERE id_kolakan = '$id_kolakan' ");

if ($sql) {
    echo "
    <script>
        alert('Data Berhasil Di Hapus');
        window.location = 'kolakan.php';
    </script>
    ";
}
