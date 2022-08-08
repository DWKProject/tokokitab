<?php
include 'koneksi.php';
include 'header.php';
?>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Detail Kolakan</div>
        </div>
        <div class="ibox-body">

            <div class="table-responsive">
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
            </div>
        </div>
    </div>
</div>

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Responsive Table</div>
    </div>
    <div class="ibox-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Kitab</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT b.id_dtk, b.jumlah,b.total ,  k. nama FROM detail_kolakan b
JOIN kitab k ON b.kd_kitab = k.kd_kitab");
                    while ($row = mysqli_fetch_assoc($sql)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['jumlah']; ?></td>
                            <td><?= $data['total']; ?></td>
                            <td>
                                <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>