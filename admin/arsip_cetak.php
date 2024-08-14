<?php
include '../koneksi.php';

function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
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

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
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
    <title>Laporan Arsip Digital</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: center;">
        <img src="../assets/img/logo/barut.png" height="76px" style="margin-right: 4px;">
        <p align="center"><b>
                <font size="5">Dinas Kependudukan dan Pencatatan Sipil Barito Utara</font><br>
                <font size="2">Jl. Tumenggung Surapati No.44, Kec. Teweh Tengah</font><br>
        </p>
    </div>
    <hr size="2px" color="black">
    <h3 style="text-align: center;">
        Laporan Arsip Petugas <?= isset($_GET['bulan']) ? getMonthName((int)$_GET['bulan']) : '' ?> <?= isset($_GET['tahun']) ? $_GET['tahun'] : '' ?>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead bgcolor=$danger>
                        <tr>
                            <th>No</th>
                            <th>ID Arsip</th>
                            <th>Waktu Upload</th>
                            <th>Kode Arsip</th>
                            <th>Nama Arsip</th>
                            <th>Jenis Arsip</th>
                            <th>Keterangan Arsip</th>
                            <th>File Arsip</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 0;
                        $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';
                        $bulan = isset($_GET['bulan']) ? $_GET['bulan'] : '';

                        $sql = "SELECT * FROM arsip
                                INNER JOIN kategori ON arsip.arsip_kategori = kategori.kategori_id
                                INNER JOIN petugas ON arsip.arsip_petugas = petugas.petugas_id";

                        $conditions = [];
                        if ($tahun) {
                            $conditions[] = "YEAR(arsip_waktu_upload) = '$tahun'";
                        }
                        if ($bulan) {
                            $conditions[] = "MONTH(arsip_waktu_upload) = '$bulan'";
                        }

                        if (count($conditions) > 0) {
                            $sql .= " WHERE " . implode(' AND ', $conditions);
                        }

                        $sql .= " ORDER BY arsip_id DESC";

                        $arsip = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_array($arsip)) {
                        ?>
                            <tr>
                                <td><?= ++$no; ?></td>
                                <td><?= $row['arsip_id']; ?></td>
                                <td><?= $row['arsip_waktu_upload']; ?></td>
                                <td><?= $row['arsip_kode']; ?></td>
                                <td><?= $row['arsip_nama']; ?></td>
                                <td><?= $row['arsip_jenis']; ?></td>
                                <td><?= $row['arsip_keterangan']; ?></td>
                                <td><?= $row['arsip_file']; ?></td>
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