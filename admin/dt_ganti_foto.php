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
                                <h4 style="margin-bottom: 0px">Data Ganti Foto</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Ganti Foto</h3>
        </div>
        <div class="panel-body">


        <div class="pull-right">
                <a href="dt_ganti_foto_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                <a href="dt_ganti_foto_cetak.php" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
            </div>
            <br>
            <br>
            <br>

            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                    <th>No</th>
                        <th width="1%">Tanggal Rekaman</th>
                        <th>Foto</th>
                        <th width="5%">Nama</th>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alasan</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $dt_ganti_foto = mysqli_query($koneksi,"SELECT * FROM dt_ganti_foto");
                    while($p = mysqli_fetch_array($dt_ganti_foto)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p['tgl_input'] ?></td>
                            <td> <?php 
                                if($p['foto'] == ""){
                                    ?>
                                    <img class="img-user" src="../gambar/sistem/default.png">
                                    <?php
                                }else{
                                    ?>
                                    <img class="img-user" src="../gambar/user/<?php echo $p['foto']; ?>" width="50px" height="50px">
                                    <?php
                                }
                                ?></td>
                            <td><?php echo $p['nama'] ?></td>
                            <td><?php echo $p['no_kk'] ?></td>
                            <td><?php echo $p['nik'] ?></td>
                            <td><?php echo $p['tempat_lahir'] ?></td>
                            <td><?php echo $p['tgl_lahir'] ?></td>
                            <td><?php echo $p['alasan'] ?></td>
                            <td><?php echo $p['agama'] ?></td>
                            <td><?php echo $p['negara'] ?></td>
                            <td class="text-center">
                                <?php 
                                if($p['id_ganti'] != 1){
                                    ?>

                                <div class="modal fade" id="exampleModal_<?php echo $p['id_ganti']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="dt_ganti_foto_hapus.php?id=<?php echo $p['id_ganti']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="btn-group">
                                        <a href="dt_ganti_foto_edit.php?id=<?php echo $p['id_ganti']; ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?php echo $p['id_ganti']; ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>