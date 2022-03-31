<h2>Tambah Makanan</h2>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Makanan</label>
        <input type="text" class="form-control" name="nama_makanan" required>
    </div>
    <div class="form-group">
        <label>Keterangan Makanan</label>
        <textarea name="keterangan_makanan" type="text" class="form-control" rows="10" required></textarea>
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar_makanan">
    </div>
    <button class="btn btn-primary" name="save">SIMPAN</button>
</form>
<?php
    if(isset($_POST['save'])){
        $id = $_SESSION['id'];
        $gambar=$_FILES['gambar_makanan']['name'];
        $lokasi=$_FILES['gambar_makanan']['tmp_name'];
        move_uploaded_file($lokasi,"img/".$gambar);
        $conn->query("INSERT INTO t_makanan
        (nama_makanan,keterangan_makanan,gambar_makanan,id_admin)
        VALUES('$_POST[nama_makanan]','$_POST[keterangan_makanan]','$gambar','$id')");
    echo "<script>alert('Data telah Tersimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?p=makanan'>";
}
?>
