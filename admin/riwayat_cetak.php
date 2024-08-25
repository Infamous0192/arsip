<?php
include '../koneksi.php';

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
    var css = '@page { size: portrait; }',
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
    <title>Laporan Riwayat Unduh Arsip</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: center;">
        <img src="../assets/img/logo/barut.png" height="50px" style="margin-right: 4px;">
        <p align="center"><b>
                <font size="5">Dinas Kependudukan dan Pencatatan Sipil Barito Utara</font><br>
                <font size="2">Jl. Tumenggung Surapati No. 44, Kec. Teweh Tengah</font><br>
        </p>
    </div>
    <hr size="2px" color="black">
    <h3 style="text-align: center;">
        Laporan Riwayat Unduh Arsip <?= isset($_GET['bulan']) ? getMonthName((int)$_GET['bulan']) : '' ?> <?= isset($_GET['tahun']) ? $_GET['tahun'] : '' ?>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead bgcolor=$danger>
                        <tr>
                            <th>No</th>
                            <th>Waktu Unduh</th>
                            <th>Nama User</th>
                            <th>Nama Arsip</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
                        $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

                        $sql = "SELECT * FROM riwayat 
                                INNER JOIN arsip ON riwayat.riwayat_arsip = arsip.arsip_id 
                                INNER JOIN user ON riwayat.riwayat_user = user.user_id";

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

                        $riwayat = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_array($riwayat)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['riwayat_waktu']; ?></td>
                                <td><?= $row['user_nama']; ?></td>
                                <td><?= $row['arsip_nama']; ?></td>
                            </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>

</html>
