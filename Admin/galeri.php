<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeri</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <!-- /.panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-photo fa-fw"></i> Galeri
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
               <a href="index.php?p=tambahgaleri" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Galeri</th>
                            <th>Gambar Galeri</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    <?php $ambil=$conn->query("SELECT * FROM t_galeri"); ?>
                    <?php while ($pecah=$ambil->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $pecah['judul_galeri'];?></td>
                            <td>
                                 <img src="img/<?php echo $pecah['gambar_galeri']; ?>" width="100px">
                            </td>
                            <td>
                                <a href="index.php?p=hapusgaleri&id=<?php echo $pecah['id_galeri']; ?>" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> HAPUS</a>
                                <a href="index.php?p=ubahgaleri&id=<?php echo $pecah['id_galeri']; ?>" class="btn btn-warning"><i class="fa fa-file fa-fw"></i> UBAH</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    
</div>
<!-- /.row -->