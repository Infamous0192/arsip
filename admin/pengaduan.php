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
                                <h4 style="margin-bottom: 0px">Data Pengaduan</h4>
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
            <h3 class="panel-title">Data Pengaduan</h3>
        </div>
        <div class="panel-body">

            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex">
                    <div class="form-group">
                        <?= renderMonthSelect('bulan'); ?>
                    </div>
                    <div class="form-group mx-2">
                        <?= renderYearSelect('tahun', 2020, 2025); ?>
                    </div>
                </div>

                <div>
                    <a href="pengaduan_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pengaduan</a>
                    <a href="pengaduan_cetak.php?<?= getUrlParams() ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
                </div>
            </div>

            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama User</th>
                        <th>Kategori Pengaduan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : date('m');
                    $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
                    $data = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE MONTH(tanggal)='$bulan' AND YEAR(tanggal)='$tahun'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['tanggal']; ?></td>
                            <td><?= $d['nama_user']; ?></td>
                            <td><?= $d['kategori_pengaduan']; ?></td>
                            <td><?= $d['keterangan']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="pengaduan_edit.php?id=<?= $d['id_pengaduan']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal_<?= $d['id_pengaduan']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="modal fade" id="deleteModal_<?= $d['id_pengaduan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengaduan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="pengaduan_hapus.php?id=<?= $d['id_pengaduan']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> Ya, hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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