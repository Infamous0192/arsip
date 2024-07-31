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
                                <h4 style="margin-bottom: 0px">Tambah Data Surat Kematian</h4>
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
                    <h3 class="panel-title">Tambah Data Surat Kematian</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="dt_kematian.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <form method="post" action="dt_kematian_aksi.php" enctype="multipart/form-data">

                    <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tgl_input" required="required">
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" required="required">
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" required="required">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" required="required">
                        </div>


                        <div class="form-group">
                            <label>No KTP</label>
                            <input type="text" class="form-control" name="nik" required="required">
                        </div>

                       
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" required="required">
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" name="negara" required="required">
                        </div>

                        <div class="form-group">
                            <label>Hari/Tanggal Kematian</label>
                            <input type="date" class="form-control" name="tgl_kematian" required="required">
                        </div>

                        <div class="form-group">
                            <label>Jam</label>
                            <input type="time" class="form-control" name="jam" required="required">
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