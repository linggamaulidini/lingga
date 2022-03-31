<h2>Tambah Minuman</h2>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Minuman</label>
        <input type="text" class="form-control" name="nama_minuman" required>
    </div>
    <div class="form-group">
        <label>Keterangan Minuman</label>
        <textarea name="keterangan_minuman" type="text" class="form-control" rows="10" required></textarea>
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar_minuman">
    </div>
    <button class="btn btn-primary" name="save">SIMPAN</button>
</form>
<?php
    if(isset($_POST['save'])){
        $id = $_SESSION['id'];
        $gambar=$_FILES['gambar_minuman']['name'];
        $lokasi=$_FILES['gambar_minuman']['tmp_name'];
        move_uploaded_file($lokasi,"img/".$gambar);
        $conn->query("INSERT INTO t_minuman
        (nama_minuman,keterangan_minuman,gambar_minuman,id_admin)
        VALUES('$_POST[nama_minuman]','$_POST[keterangan_minuman]','$gambar','$id')");
    echo "<script>alert('Data telah Tersimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?p=minuman'>";
}
?>
