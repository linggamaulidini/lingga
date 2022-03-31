<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Minuman</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <!-- /.panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-table fa-fw"></i> Data Minuman
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
               <a href="index.php?p=tambahminuman" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Minuman</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    <?php $ambil=$conn->query("SELECT * FROM t_minuman"); ?>
                    <?php while ($pecah=$ambil->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $pecah['nama_minuman']?></td>
                            <td><?php echo $pecah['keterangan_minuman']?></td>
                            <td>
                                 <img src="img/<?php echo $pecah['gambar_minuman']; ?>" width="100px">
                            </td>
                            <td>
                                <a href="index.php?p=hapusminuman&id=<?php echo $pecah['id_minuman']; ?>" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> HAPUS</a>
                                <a href="index.php?p=ubahminuman&id=<?php echo $pecah['id_minuman']; ?>" class="btn btn-warning"><i class="fa fa-file fa-fw"></i> UBAH</a>
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