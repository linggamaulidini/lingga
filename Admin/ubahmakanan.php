<h2>Ubah Makanan</h2>
<?php
$ambil=$conn->query("SELECT * FROM t_makanan WHERE id_makanan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Makanan</label>
        <input type="text" class="form-control" name="nama_makanan" value="<?php echo $pecah['nama_makanan']; ?>" required>
    </div>
    <div class="form-group">
        <label>Keterangan Makanan</label>
        <textarea name="keterangan_makanan" type="text" class="form-control" rows="10" required><?php echo $pecah['keterangan_makanan']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Gambar</label><br>
        <img src="img/<?php echo $pecah['gambar_makanan'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar_makanan">
    </div>
    <button class="btn btn-primary" name="ubah">UBAH</button>
</form>

<?php
if(isset($_POST['ubah'])) {
    $gambar=$_FILES['gambar_makanan']['name'];
    $lokasifoto=$_FILES['gambar_makanan']['tmp_name'];
    if(!empty($lokasifoto)) {
    move_uploaded_file($lokasifoto,"img/".$gambar);

    $conn->query("UPDATE t_makanan SET nama_makanan='$_POST[nama_makanan]',keterangan_makanan='$_POST[keterangan_makanan]',
    gambar_makanan='$gambar'
        WHERE id_makanan='$_GET[id]'");
    }else{
    $conn->query("UPDATE t_makanan SET nama_makanan='$_POST[nama_makanan]',keterangan_makanan='$_POST[keterangan_makanan]'
        WHERE id_makanan='$_GET[id]'");
    }
    echo "<script>alert('Data telah diubah');</script>";
    echo "<script>location='index.php?p=makanan';</script>";
}
?>