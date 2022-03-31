<?php
session_start();
	include 'koneksi.php';
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

<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Halaman : Login</h2>
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Silahkan Login Terlebih dahulu </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" name="user">
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  name="pass">
                                        </div>                                     
                                     <button class="btn btn-primary" name="login">LOGIN</button>
                                    <hr />
                                    </form>
                                <?php
                                if(isset($_POST['login'])){
                                    $ambil=$conn->query("SELECT * FROM t_admin WHERE username='$_POST[user]'
                                    AND password='$_POST[pass]'");
                                 $cocok=$ambil->num_rows;
                                 if($cocok==1){
                                    $a=$ambil->fetch_assoc();
                                    $_SESSION['id']=$a['id_admin'];
                                    $_SESSION['user']=$a['nama_lengkap'];
                                    echo "<div class='alert alert-info'>LOGIN SUKSES</div>";
                                    echo "<meta http-equiv='refresh' content='1;index.php'>";
                                 }else {
                                    echo "<div class='alert alert-danger'>LOGIN GAGAL</div>";
                                    echo "<meta http-equiv='refresh' content='1;login.php'>";
                                 }
                                }
                                ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>




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