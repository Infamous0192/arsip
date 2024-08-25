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
                                <h4 style="margin-bottom: 0px">Edit Arsip</h4>
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
                    <h3 class="panel-title">Edit Arsip</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="arsip.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM arsip WHERE arsip_id='$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <form method="post" action="arsip_update.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $d['arsip_id']; ?>">

                            <div class="form-group">
                                <label>Waktu Upload</label>
                                <input type="datetime-local" class="form-control" name="arsip_waktu_upload" required="required" value="<?php echo date('Y-m-d\TH:i', strtotime($d['arsip_waktu_upload'])); ?>">
                            </div>

                            <div class="form-group">
                                <label>Petugas</label>
                                <select class="form-control" name="arsip_petugas" required="required">
                                    <?php
                                    $petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
                                    while ($p = mysqli_fetch_array($petugas)) {
                                        $selected = $p['petugas_id'] == $d['arsip_petugas'] ? 'selected' : '';
                                        echo "<option value='".$p['petugas_id']."' $selected>".$p['petugas_nama']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kode Arsip</label>
                                <input type="text" class="form-control" name="arsip_kode" required="required" value="<?php echo $d['arsip_kode']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Arsip</label>
                                <input type="text" class="form-control" name="arsip_nama" required="required" value="<?php echo $d['arsip_nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Jenis Arsip</label>
                                <input type="text" class="form-control" name="arsip_jenis" required="required" value="<?php echo $d['arsip_jenis']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Kategori Arsip</label>
                                <select class="form-control" name="arsip_kategori" required="required">
                                    <?php
                                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while ($k = mysqli_fetch_array($kategori)) {
                                        $selected = $k['kategori_id'] == $d['arsip_kategori'] ? 'selected' : '';
                                        echo "<option value='".$k['kategori_id']."' $selected>".$k['kategori_nama']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Keterangan Arsip</label>
                                <textarea class="form-control" name="arsip_keterangan" required="required"><?php echo $d['arsip_keterangan']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>File Arsip</label>
                                <input type="file" class="form-control" name="arsip_file">
                                <input type="hidden" name="arsip_file_existing" value="<?php echo $d['arsip_file']; ?>">
                            </div>

                            <div class="form-group">
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
