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
                                <h4 style="margin-bottom: 0px">Edit Pengaduan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Edit Pengaduan</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="pengaduan.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "select * from pengaduan where id_pengaduan='$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <form method="post" action="pengaduan_update.php">


                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_pengaduan']; ?>">
                                <input type="date" class="form-control" name="tanggal" required="required" value="<?php echo $d['tanggal']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama User</label>
                                <input type="text" class="form-control" name="nama_user" required="required" readonly value="<?php echo $d['nama_user']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Kategori Pengaduan</label>
                                <input type="text" class="form-control" name="kategori_pengaduan" required="required" value="<?php echo $d['kategori_pengaduan']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" required="required"><?php echo $d['keterangan']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>

                        </form>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>

<?php include 'footer.php'; ?>