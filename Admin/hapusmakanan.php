<?php
$ambil = $conn->query("SELECT * FROM t_makanan WHERE id_makanan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar=$pecah['gambar_makanan'];
if(file_exists("img/$gambar")){
    unlink("img/$gambar");
}

$conn->query("DELETE FROM t_makanan WHERE id_makanan='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?p=makanan';</script>";
?>