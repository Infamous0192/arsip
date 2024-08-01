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
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Petugas</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                    <span class="counter text-success">
                                        <?php
                                        $jumlah_petugas = mysqli_query($koneksi, "select * from petugas");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_petugas); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                            <h3 class="box-title">User / Pengguna</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right graph-two-ctn">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                    <span class="counter text-purple">
                                        <?php
                                        $jumlah_user = mysqli_query($koneksi, "select * from user");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_user); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Total Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                    <span class="counter text-info">
                                        <?php
                                        $jumlah_arsip = mysqli_query($koneksi, "select * from arsip");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Kategori Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right graph-four-ctn">
                                    <i class="fa fa-level-down" aria-hidden="true"></i>
                                    <span class="text-danger">
                                        <?php
                                        $jumlah_kategori = mysqli_query($koneksi, "select * from kategori");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_kategori); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>

                <div class="product-sales-chart">
                    <br>
                    <br>
                    <center>
                        <h3>Selamat Datang di</h3>
                        <h3>Aplikasi Pelayanan dan Pengarsipan Digital</h3>
                        <h3>Dinas Kependudukan dan Pencatatan Sipil</h3>
                        <h3>Barito Utara</h3>
                    </center>
                    <br>
                    <br>
                    <br>
                </div>

                <!-- Adding the charts section -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Grafik Perekaman, KTP Sementara, dan Surat Pindah per Tahun</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="chartPerekaman"></canvas>
                                <canvas id="chartKTPSementara"></canvas>
                                <canvas id="chartSuratPindah"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Fetch data for charts
    function fetchDataForChart($table, $dateColumn)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, "SELECT DATE_FORMAT($dateColumn, '%Y-%m') as bulan, COUNT(*) as jumlah FROM $table GROUP BY bulan");
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$row['bulan']] = $row['jumlah'];
        }
        return $data;
    }

    $perekamanData = fetchDataForChart('dt_perekaman', 'tgl_input');
    $ktpSementaraData = fetchDataForChart('ktp_sementara', 'tgl_input');
    $suratPindahData = fetchDataForChart('surat_pindah', 'tanggal');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const createChart = (ctx, label, data) => {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Object.keys(data),
                    datasets: [{
                        label: label,
                        data: Object.values(data),
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return Number.isInteger(value) ? value : '';
                                },
                                stepSize: 1
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: label
                        }
                    }
                }
            });
        };

        document.addEventListener('DOMContentLoaded', () => {
            createChart(document.getElementById('chartPerekaman').getContext('2d'), 'Data Perekaman per Bulan', <?php echo json_encode($perekamanData); ?>);
            createChart(document.getElementById('chartKTPSementara').getContext('2d'), 'Data KTP Sementara per Bulan', <?php echo json_encode($ktpSementaraData); ?>);
            createChart(document.getElementById('chartSuratPindah').getContext('2d'), 'Data Surat Pindah per Bulan', <?php echo json_encode($suratPindahData); ?>);
        });
    </script>


    <?php include 'footer.php'; ?>