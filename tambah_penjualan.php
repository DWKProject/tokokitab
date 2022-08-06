<?php
include 'koneksi.php';
include 'header.php';

$tgl = date('d');
$mou = date('m');
$kodepj = 'PJ-' . $tgl . '.' . $mou . '.' . rand(0, 999999);

?>
<div class="page-heading">
    <h1 class="page-title">Tambah Penjualan</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Tambah Penjualan</li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Tambah Penjualan </div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item">option 1</a>
                            <a class="dropdown-item">option 2</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label>Kode Jual</label>
                            <input class="form-control" name="kd_jual" type="text" value="<?= $kodepj; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nis</label>
                            <input class="form-control" name="nis" type="text" placeholder="Masukkan Nis">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control" name="tanggal" type="date" placeholder="Masukkan Tanggal">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Jual</label>
                            <input class="form-control" name="jml_jual" type="text" placeholder="Masukkan Jumlah Jual">
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input class="form-control" name="total" type="text" placeholder="Masukkan Total">
                        </div>
                        <div class="form-group">
                            <label>Bayar</label>
                            <input class="form-control" name="bayar" type="text" placeholder="Masukkan Bayar">
                        </div>
                        <div class="form-group">
                            <label>Kembali</label>
                            <input class="form-control" name="kembali" type="text" placeholder="Masukkan Kembali">
                        </div>
                        <div class="form-group">
                            <button type="submit" value="submit" name="simpan" class="btn btn-default">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
<?php include 'footer.php'; ?>

<?php
if (isset($_POST['simpan'])) {
    $kd_jual = $_POST['kd_jual'];
    $nis = $_POST['nis'];
    $tanggal = $_POST['tanggal'];
    $jml_jual = $_POST['jml_jual'];
    $total = $_POST['total'];
    $bayar = $_POST['bayar'];
    $kembali = $_POST['kembali'];
    $sql = mysqli_query($conn, "INSERT INTO penjualan VALUES('','$kd_jual','$nis','$tanggal','$jml_jual','$total','$bayar','$kembali')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Di Simpan");
            window.location.href = "penjualan.php";
        </script>
<?php
    }
}
?>