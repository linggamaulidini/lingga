<?php
    include 'koneksi.php';
?>
<html>
<head>
    <meta charset="UTF-8">
	<title>Jawa Barat Kuliner</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
    <link rel="stylesheet" type="text/css" href="style/slidegambar.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
	<!-- Navbar Up -->
	<?php
		include 'menu.php';
	?>
<!--Konten-->
<section class="konten">
    <div class=malasngoding-slider>
        <div class=isi-slider>
            <img src="image/karedok.jpg" alt="Gambar 1">
            <img src="image/cendol.jpg" alt="Gambar 2">
            <img src="image/laksa.jpg" alt="Gambar 3">
        </div>
    </div>
        <div class="container">
            <div class="row">
            <?php $ambil=$conn->query("SELECT * FROM t_galeri"); ?>
            <?php while($a=$ambil->fetch_assoc()){ ?>
                <div class="col-md-4">
                    <img class="image" src="Admin/img/<?php echo $a['gambar_galeri']; ?>"alt="">
                </div>
                <?php } ?>
            </div>
        </div>
</section>

    <?php include 'footer.php' ?>

    <!-- script js -->
    <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
    <script type="text/javascript" src="source/js/isotope.js"></script>
    <script type="text/javascript" src="source/js/myscript.js"></script> 
    <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
    <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>