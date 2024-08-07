<?php include 'header.php'; ?>
<br>
<br>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Riwayat</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Riwayat Unduhan Arsip</h3>
        </div>
        <div class="panel-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex">
                    <div class="form-group">
                        <?= renderMonthSelect('bulan'); ?>
                    </div>
                    <div class="form-group mx-2">
                        <?= renderYearSelect('tahun', 2020, 2025);
                        ?>
                    </div>
                </div>

                <div>
                    <a href="riwayat_cetak.php?<?= getUrlParams() ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
                </div>
            </div>

            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="18%">Waktu Upload</th>
                        <th width="30%">User</th>
                        <th width="30%">Arsip yang diunduh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
                    $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

                    $sql = "SELECT * FROM riwayat INNER JOIN arsip ON riwayat.riwayat_arsip = arsip.arsip_id INNER JOIN user ON riwayat.riwayat_user = user.user_id";

                    $conditions = [];
                    if ($tahun) {
                        $conditions[] = "YEAR(riwayat_waktu) = '$tahun'";
                    }
                    if ($bulan) {
                        $conditions[] = "MONTH(riwayat_waktu) = '$bulan'";
                    }

                    if (count($conditions) > 0) {
                        $sql .= " WHERE " . implode(' AND ', $conditions);
                    }

                    $sql .= " ORDER BY riwayat_id DESC";
                    $arsip = mysqli_query($koneksi, $sql);
                    while ($p = mysqli_fetch_array($arsip)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y', strtotime($p['riwayat_waktu'])) ?></td>
                            <td><?php echo $p['user_nama'] ?></td>
                            <td><a style="color: blue" href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>"><?php echo $p['arsip_nama'] ?></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>