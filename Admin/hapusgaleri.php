<?php
$ambil = $conn->query("SELECT * FROM t_galeri WHERE id_galeri='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar=$pecah['gambar_galeri'];
if(file_exists("img/$gambar")){
    unlink("img/$gambar");
}

$conn->query("DELETE FROM t_galeri WHERE id_galeri='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?p=galeri';</script>";
?>


