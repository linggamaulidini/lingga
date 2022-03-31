<?php
	session_start();
    include 'koneksi.php';
if(!isset($_SESSION['user'])){
    echo "<script>alert['Anda harus login'];</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Admin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li><a href="index.php?p=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                            </li>
                            <li>
                                <a href="index.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                           	<li>
                           		<a href="index.php?p=makanan"><i class="fa fa-book fa-fw"></i> Makanan</a>
                           	</li>
                           	<li>
                           		<a href="index.php?p=minuman"><i class="fa fa-book fa-fw"></i> Minuman</a>
                           	</li>
                            <li>
                                <a href="index.php?p=galeri"><i class="fa fa-photo fa-fw"></i> Galeri</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <?php
                    	if(isset($_GET['p'])){
		                    if($_GET['p']=="makanan"){
		                        include 'makanan.php';
		                    }elseif ($_GET['p']=='tambahmakanan') {
		                    	include 'tambahmakanan.php';
		                    }elseif ($_GET['p']=='ubahmakanan') {
		                    	include 'ubahmakanan.php';
		                    }elseif ($_GET['p']=='hapusmakanan') {
		                    	include 'hapusmakanan.php';
		                    }elseif ($_GET['p']=='galeri') {
		                    	include 'galeri.php';
		                    }elseif ($_GET['p']=='tambahgaleri') {
		                    	include 'tambahgaleri.php';
		                    }elseif ($_GET['p']=='hapusgaleri') {
		                    	include 'hapusgaleri.php';
		                    }elseif ($_GET['p']=='ubahgaleri') {
		                    	include 'ubahgaleri.php';
		                    }elseif ($_GET['p']=='minuman') {
		                    	include 'minuman.php';
		                    }elseif ($_GET['p']=='tambahminuman') {
		                    	include 'tambahminuman.php';
		                    }elseif ($_GET['p']=='ubahminuman') {
		                    	include 'ubahminuman.php';
		                    }elseif ($_GET['p']=='hapusminuman') {
		                    	include 'hapusminuman.php';
		                    }elseif ($_GET['p']=='logout') {
                                include 'logout.php';
                            }
		                }else{
	                    	include 'dashboard.php';
	                	}
                    ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/raphael.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
