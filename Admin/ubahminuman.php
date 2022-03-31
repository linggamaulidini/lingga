<h2>Ubah Minuman</h2>
<?php
$ambil=$conn->query("SELECT * FROM t_minuman WHERE id_minuman='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Minuman</label>
        <input type="text" class="form-control" name="nama_minuman" value="<?php echo $pecah['nama_minuman']; ?>" required>
    </div>
    <div class="form-group">
        <label>Keterangan Minuman</label>
        <textarea name="keterangan_minuman" type="text" class="form-control" rows="10" required><?php echo $pecah['keterangan_minuman']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Gambar</label><br>
        <img src="img/<?php echo $pecah['gambar_minuman'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar_minuman">
    </div>
    <button class="btn btn-primary" name="ubah">UBAH</button>
</form>

<?php
if(isset($_POST['ubah'])) {
    $gambar=$_FILES['gambar_minuman']['name'];
    $lokasifoto=$_FILES['gambar_minuman']['tmp_name'];
    if(!empty($lokasifoto)) {
    move_uploaded_file($lokasifoto,"img/".$gambar);

    $conn->query("UPDATE t_minuman SET nama_minuman='$_POST[nama_minuman]',keterangan_minuman='$_POST[keterangan_minuman]',
    gambar_minuman='$gambar'
        WHERE id_minuman='$_GET[id]'");
    }else{
    $conn->query("UPDATE t_minuman SET nama_minuman='$_POST[nama_minuman]',keterangan_minuman='$_POST[keterangan_minuman]'
        WHERE id_minuman='$_GET[id]'");
    }
    echo "<script>alert('Data telah diubah');</script>";
    echo "<script>location='index.php?p=minuman';</script>";
}
?>