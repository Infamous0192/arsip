<?php include 'header.php'; ?>

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

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                                        $jumlah_arsip = mysqli_query($koneksi,"select * from arsip");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                                        $jumlah_kategori = mysqli_query($koneksi,"select * from kategori");
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
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>

            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>