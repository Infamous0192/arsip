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
                                <h4 style="margin-bottom: 0px">Data Gabungan</h4>
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
            <h3 class="panel-title">Data Gabungan</h3>
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
                    <a href="ktp_sementara_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    <a href="ktp_sementara_cetak.php?<?= getUrlParams() ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
                </div>
            </div>

            <h4>Data Perekaman</h4>
            <table id="table1" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Negara</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';
                    $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';

                    $query = "SELECT * FROM dt_perekaman";
                    if ($bulan || $tahun) {
                        $query .= " WHERE ";
                        $conditions = [];
                        if ($bulan) {
                            $conditions[] = "MONTH(tgl_input)='$bulan'";
                        }
                        if ($tahun) {
                            $conditions[] = "YEAR(tgl_input)='$tahun'";
                        }
                        $query .= implode(' AND ', $conditions);
                    }
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['tgl_input']; ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['no_kk']; ?></td>
                            <td><?= $d['nik']; ?></td>
                            <td><?= $d['tempat_lahir']; ?></td>
                            <td><?= $d['tgl_lahir']; ?></td>
                            <td><?= $d['alamat']; ?></td>
                            <td><?= $d['agama']; ?></td>
                            <td><?= $d['negara']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <h4>Data KTP Sementara</h4>
            <table id="table2" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Negara</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM ktp_sementara";
                    if ($bulan || $tahun) {
                        $query .= " WHERE ";
                        $conditions = [];
                        if ($bulan) {
                            $conditions[] = "MONTH(tgl_input)='$bulan'";
                        }
                        if ($tahun) {
                            $conditions[] = "YEAR(tgl_input)='$tahun'";
                        }
                        $query .= implode(' AND ', $conditions);
                    }
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['tgl_input']; ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['no_kk']; ?></td>
                            <td><?= $d['nik']; ?></td>
                            <td><?= $d['tempat_lahir']; ?></td>
                            <td><?= $d['tgl_lahir']; ?></td>
                            <td><?= $d['alamat']; ?></td>
                            <td><?= $d['agama']; ?></td>
                            <td><?= $d['negara']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <h4>Data Surat Pindah</h4>
            <table id="table3" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama User</th>
                        <th>NIK</th>
                        <th>KK</th>
                        <th>Alasan Pindah</th>
                        <th>Alamat Pindah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM surat_pindah";
                    if ($bulan || $tahun) {
                        $query .= " WHERE ";
                        $conditions = [];
                        if ($bulan) {
                            $conditions[] = "MONTH(tanggal)='$bulan'";
                        }
                        if ($tahun) {
                            $conditions[] = "YEAR(tanggal)='$tahun'";
                        }
                        $query .= implode(' AND ', $conditions);
                    }
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['tanggal']; ?></td>
                            <td><?= $d['nama_user']; ?></td>
                            <td><?= $d['nik']; ?></td>
                            <td><?= $d['kk']; ?></td>
                            <td><?= $d['alasan_pindah']; ?></td>
                            <td><?= $d['alamat_pindah']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<script>
    function printData() {
        window.print();
    }
</script>

<?php include 'footer.php'; ?>