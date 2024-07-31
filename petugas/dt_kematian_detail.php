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
                                <h4 style="margin-bottom: 0px">Detail Data Kematian</h4>
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
                    <h3 class="panel-title">Detail Data Kematian</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">            
                        <a href="dt_kematian.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "select * from dt_kematian where id_sementara='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <form method="post" action="dt_kematian_update.php">


                        <div class="form-group">
                                <label>Tanggal</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="date" class="form-control" name="tgl_input" required="required" value="<?php echo $d['tgl_input']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="nama" required="required" value="<?php echo $d['nama']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Jenis kelamin</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="jenis_kelamin" required="required" value="<?php echo $d['jenis_kelamin']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="tempat_lahir" required="required" value="<?php echo $d['tempat_lahir']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="date" class="form-control" name="tgl_lahir" required="required" value="<?php echo $d['tgl_lahir']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="nik" required="required" value="<?php echo $d['nik']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="alamat" required="required" value="<?php echo $d['alamat']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="agama" required="required" value="<?php echo $d['agama']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Kewarganegaraan</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="negara" required="required" value="<?php echo $d['negara']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Hari / Tanggal Kematian</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="date" class="form-control" name="tgl_kematian" required="required" value="<?php echo $d['tgl_kematian']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Jam</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="time" class="form-control" name="jam" required="required" value="<?php echo $d['jam']; ?>"readonly>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_sementara']; ?>">
                                <input type="text" class="form-control" name="status" required="required" value="<?php echo $d['status']; ?>" readonly>
                            </div>

                           <!-- <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>-->

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