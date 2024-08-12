<?php
include '../koneksi.php';

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

function getMonthName($monthNumber)
{
    $months = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];
    return isset($months[$monthNumber]) ? $months[$monthNumber] : '';
}
?>

<script type="text/javascript">
    var css = '@page { size: landscape; }',
        head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style');

    style.type = 'text/css';
    style.media = 'print';

    if (style.styleSheet) {
        style.styleSheet.cssText = css;
    } else {
        style.appendChild(document.createTextNode(css));
    }

    head.appendChild(style);
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pengaduan</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: center;">
        <img src="../assets/img/logo/barut.png" height="76px" style="margin-right: 4px;">

        <p align="center"><b>
                <font size="5">Dinas Kependudukan dan Pencatatan Sipil Barito Utara</font> <br>
                <font size="2">Jl. Tumenggung Surapati No.44, Kec. Teweh Tengah</font> <br>
        </p>
    </div>
    <hr size="2px" color="black">
    <h3 style="text-align: center;">
        Laporan Pengaduan <?= isset($_GET['bulan']) ? getMonthName((int)$_GET['bulan']) : '' ?> <?= isset($_GET['tahun']) ? $_GET['tahun'] : '' ?>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead bgcolor=$danger>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama User</th>
                            <th>Kategori Pengaduan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 0;
                        $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
                        $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

                        $sql = "SELECT * FROM pengaduan";

                        $conditions = [];
                        if ($tahun) {
                            $conditions[] = "YEAR(tanggal) = '$tahun'";
                        }
                        if ($bulan) {
                            $conditions[] = "MONTH(tanggal) = '$bulan'";
                        }

                        if (count($conditions) > 0) {
                            $sql .= " WHERE " . implode(' AND ', $conditions);
                        }

                        $sql .= " ORDER BY id_pengaduan DESC";

                        $pengaduan = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_array($pengaduan)) {
                        ?>
                            <tr>
                                <td><?= ++$no; ?></td>
                                <td><?= tgl_indo($row['tanggal']); ?></td>
                                <td><?= $row['nama_user']; ?></td>
                                <td><?= $row['kategori_pengaduan']; ?></td>
                                <td><?= $row['keterangan']; ?></td>
                            </tr>
                    </tbody>
                <?php } ?>


                </table>

            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- <div style="text-align: center; display: inline-block; float: right;">
        <h5>
            Banjarbaru, <?= tgl_indo(date('Y-m-d')); ?>
            <br><br><br><br><br><br>
        </h5>

    </div> -->


</body>

</html>