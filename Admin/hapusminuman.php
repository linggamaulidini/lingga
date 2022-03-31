<?php
$ambil = $conn->query("SELECT * FROM t_minuman WHERE id_minuman='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar=$pecah['gambar_minuman'];
if(file_exists("img/$gambar")){
    unlink("img/$gambar");
}

$conn->query("DELETE FROM t_minuman WHERE id_minuman='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?p=minuman';</script>";
?>