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
                                <h4 style="margin-bottom: 0px">Data Jumlah Penerbitan Dokumen Kependudukan</h4>
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
            <h3 class="panel-title">Data Jumlah Penerbitan Dokumen Kependudukan</h3>
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
                    <div class="form-group">
                        <select name="jenis" id="jenis" class="form-control">
                            <option value="">Pilih Jenis</option>
                            <option value="perekaman" <?= isset($_GET['jenis']) ? ($_GET['jenis'] == 'perekaman' ? 'selected' : '') : '' ?>>Perekaman</option>
                            <option value="surat pindah" <?= isset($_GET['jenis']) ? ($_GET['jenis'] == 'surat pindah' ? 'selected' : '') : '' ?>>Surat Pindah</option>
                            <option value="pengaduan" <?= isset($_GET['jenis']) ? ($_GET['jenis'] == 'pengaduan' ? 'selected' : '') : '' ?>>Pengaduan</option>
                        </select>
                    </div>
                </div>

                <div>
                    <a href="gabungan_cetak.php?<?= getUrlParams() ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
                </div>
            </div>

            <h4>Data Perekaman</h4>
            <table id="table1" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama User</th>
                        <th>Jenis Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';
                    $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
                    $jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';

                    $query = "SELECT * FROM penerbitan";
                    if ($bulan || $tahun || $jenis) {
                        $query .= " WHERE ";
                        $conditions = [];
                        if ($bulan) {
                            $conditions[] = "MONTH(tanggal)='$bulan'";
                        }
                        if ($tahun) {
                            $conditions[] = "YEAR(tanggal)='$tahun'";
                        }
                        if ($jenis) {
                            $conditions[] = "jenis_dokumen='$jenis'";
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
                            <td style="text-transform: capitalize;"><?= $d['jenis_dokumen']; ?></td>
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