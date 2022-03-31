<h2>Ubah Galeri</h2>
<?php
$ambil=$conn->query("SELECT * FROM t_galeri WHERE id_galeri='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul Galeri</label>
        <input type="text" class="form-control" name="judul_galeri" value="<?php echo $pecah['judul_galeri']; ?>" required>
    </div>
    <div class="form-group">
        <label>Gambar Galeri</label><br>
        <img src="img/<?php echo $pecah['gambar_galeri'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Gambar Galeri</label>
        <input type="file" class="form-control" name="gambar_galeri">
    </div>
    <button class="btn btn-primary" name="ubah">UBAH</button>
</form>

<?php
if(isset($_POST['ubah'])) {
    $gambar=$_FILES['gambar_galeri']['name'];
    $lokasifoto=$_FILES['gambar_galeri']['tmp_name'];
    if(!empty($lokasifoto)) {
    move_uploaded_file($lokasifoto,"img/".$gambar);

    $conn->query("UPDATE t_galeri SET judul_galeri='$_POST[judul_galeri]',
    gambar_galeri='$gambar'
        WHERE id_galeri='$_GET[id]'");
    }else{
    $conn->query("UPDATE t_galeri SET judul_galeri='$_POST[judul_galeri]'
        WHERE id_galeri='$_GET[id]'");
    }
    echo "<script>alert('Data telah diubah');</script>";
    echo "<script>location='index.php?p=galeri';</script>";
}
?>