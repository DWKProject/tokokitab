<?php
include 'koneksi.php';
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span> Detail Kolakan</h3>
<a class="btn" href="kolakan.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>

<?php
$id_kolakan = mysql_real_escape_string($_GET['id']);


$sql = mysqli_query($conn, "SELECT * FROM kolakan");
while ($data = mysqli_fetch_assoc($sql)) {
?>
    <table class="table">
        <tr>
            <td>Kode Kolakan</td>
            <td><?= $data['kd_kolakan']; ?></td>
        </tr>
        <tr>
            <td>Jumlah Kolakan</td>
            <td><?= $data['jml_kolakan']; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?= $data['total']; ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><?= $data['tanggal']; ?></td>
        </tr>
    </table>
<?php
}
?>
<?php include 'footer.php'; ?>