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
    <title>Laporan Surat Masuk</title>
</head>

<body>
    <img src="../assets/img/logo/barut.png" align="left" width="8%">
    <p align="center"><b>

            <font size="5">Dinas Kependudukan dan Pencatatan Sipil Barito Utara</font> <br>
            
            <font size="2">Jl. Tumenggung Surapati No.44, Kec. Teweh Tengah</font> <br>
            <hr size="2px" color="black">
        </b></p>
    <br>
    <br>
    <h3>
        <center>
        Laporan Surat Masuk<br>
        </center>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead bgcolor=$danger>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>User</th>
                            <th>Petugas</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        $no = 0;
                        $dt_kematian = mysqli_query($koneksi, "select * from dt_kematian");
                        while($row = mysqli_fetch_array($dt_kematian)){
                        ?>
                            <tr>
                                <td><?= ++$no; ?></td>
                                <td><?= tgl_indo($row['tgl_input']); ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['nama_petugas']; ?></td>
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