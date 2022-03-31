<h2>Tambah Galeri</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul Galeri</label>
        <input type="text" class="form-control" name="judul_galeri">
    </div>
    <div class="form-group">
        <label>Gambar Galeri</label>
        <input type="file" class="form-control" name="gambar_galeri">
    </div>
    <button class="btn btn-primary" name="save">SIMPAN</button>
</form>
<?php
    if(isset($_POST['save'])){
        $id = $_SESSION['id'];
        $gambar=$_FILES['gambar_galeri']['name'];
        $lokasi=$_FILES['gambar_galeri']['tmp_name'];
        move_uploaded_file($lokasi,"img/".$gambar);
        $conn->query("INSERT INTO t_galeri
        (judul_galeri,gambar_galeri,id_admin)
        VALUES('$_POST[judul_galeri]','$gambar','$id')");
    echo "<script>alert('Data telah Tersimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?p=galeri'>";
}
?>
