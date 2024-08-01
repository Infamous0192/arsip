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
                                <h4 style="margin-bottom: 0px">Tambah Data Penggunaan Layanan Online</h4>
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
                    <h3 class="panel-title">Tambah Data Penggunaan Layanan Online</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="layanan_online.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <form method="post" action="layanan_online_aksi.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required="required">
                        </div>

                        <div class="form-group">
                            <label>Nama User</label>
                            <input type="text" class="form-control" name="nama_user" required="required">
                        </div>

                        <div class="form-group">
                            <label>Jenis Pelayanan</label>
                            <input type="text" class="form-control" name="jenis_pelayanan" required="required">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>

<?php include 'footer.php'; ?>