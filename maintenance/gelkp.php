<?php
include('connect.php');
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    echo ("Anda belum login"); //jika belum login jangan lanjut..
    header ('location: index.php');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tambah | Gelang Karet Kompak</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- //////Disini may/////////////////////////////////////////-->
     <link href="plugins/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- ////////////////Batas Akhir////////////////////////////-->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

  </head>

  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">

        <!-- Logo -->
        <a href="page.php" class="logo"><b>MORMO</b> Maintenance</a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <a href="logout.php" class="btn btn-warning"><span class="glyphicon glyphicon-lock"></span>   Log Out</a>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview active">
              <a href="#">
                <span class="glyphicon glyphicon-plus"></span><span>Tambah Gambar</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class='active'><a href="gelkp.php"><span class="glyphicon glyphicon-asterisk"></span><span>Gelang Karet Kompak</span></a></li>
                <li><a href="gelrs.php"><span class="glyphicon glyphicon-asterisk"></span><span>Gelang Ready Stock</span></a></li>
                <li><a href="dtlgelrs.php"><span class="glyphicon glyphicon-asterisk"></span><span>Detail Gelang Ready Stock</span></a></li>
                <li><a href="lookbook.php"><span class="glyphicon glyphicon-asterisk"></span><span>Look Book</span></a></li>
                <li><a href="lookbooklist.php"><span class="glyphicon glyphicon-asterisk"></span><span>Detail Look Book</span></a></li>
                <li><a href="addfaq.php"><span class="glyphicon glyphicon-asterisk"></span><span>FAQ</span></a></li>
                <li><a href="katproduk.php"><span class="glyphicon glyphicon-asterisk"></span><span>Kategori Produk</span></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <span class="glyphicon glyphicon-repeat"></span><span>Ubah Gambar</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="jumbotron.php"><span class="glyphicon glyphicon-asterisk"></span><span>Jumbotron</span></a></li>
				<li><a href="carousel.php"><span class="glyphicon glyphicon-asterisk"></span><span>Slide Show Carousel</span></a></li>
                <li><a href="navhome.php"><span class="glyphicon glyphicon-asterisk"></span><span>Navigasi Home</span></a></li>
                <li><a href="teksdes.php"><span class="glyphicon glyphicon-asterisk"></span><span>Teks dan Deskripsi</span></a></li>
                <li><a href="editfaq.php"><span class="glyphicon glyphicon-asterisk"></span><span>FAQ</span></a></li>
                <li><a href="editabout.php"><span class="glyphicon glyphicon-asterisk"></span><span>About Us</span></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <span class="glyphicon glyphicon-trash"></span><span>Hapus Gambar</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="delgelkp.php"><span class="glyphicon glyphicon-asterisk"></span><span>Gelang Karet Kompak</span></a></li>
                <li><a href="delgelrs.php"><span class="glyphicon glyphicon-asterisk"></span><span>Gelang Ready Stock</span></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <span class="glyphicon glyphicon-repeat"></span><span>Password</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="editpass.php"><span class="glyphicon glyphicon-asterisk"></span><span>Ubah Password</span></a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
          <a href="../gelkp.php" target="_blank" class="btn btn-success btn-large" role="button"><span class="glyphicon glyphicon-arrow-right"></span> Cek Halaman Project</a>
          <p>
            <h2>Tambah Gambar Gelang Karet Kompak</h2>
            <br/>
          </p>
          <form action="gelkp.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Foto</label>
                <div class="input-group">
                  <img id="uploadPreview" style="width:150px; height: 150px;" /><br>
                  <input type="file" class="form-control" name="nama_gelkompak" id="nama_gelkompak" onchange="PreviewImage();"/>
                </div>
            </div>
            <div class="form-group">
              <label>Deskripsi Foto</label>
                <div class="input-group">
                  <input type="text" size="100px" class="form-control" name="desk_gelkompak" id="desk_gelkompak" required maxlength="100"/>
                </div>
            </div>
            <button type="submit" name="simpan" value="submit" class="btn btn-info">Upload</button>
          </form>

          <?php
          $desk_gelkompak1 = $_POST['desk_gelkompak'];
          $unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E", "\n");
          $kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|", "<br/>");
          $desk_gelkompak = str_replace($kode, $unicode, $desk_gelkompak1);
          if (isset($_POST['simpan'])){
            /*$jelajah = mysql_query("SELECT `desk_gelkompak` FROM `gel_kompak` WHERE `desk_gelkompak` = '$desk_gelkompak'");
            $hasil_jelajah = mysql_num_rows($jelajah);
            if ($hasil_jelajah = 0){*/
              $fileName1 = $_FILES['nama_gelkompak']['name'];
              $fileName= str_replace($kode, $unicode, $fileName1);
              $query = mysql_query("INSERT INTO `gel_kompak`(`nama_gelkompak`, `desk_gelkompak`) VALUES ('$fileName','$desk_gelkompak')");
              mysql_query($query);
              move_uploaded_file($_FILES['nama_gelkompak']['tmp_name'], "../images/gelKompak/".$_FILES['nama_gelkompak']['name']);
              echo"<script>alert('Gambar Berhasil diupload!');</script>";
            /*}
            else if($hasil_jelajah > 0){
              echo"<script>alert('Deskripsi foto telah digunakan sebelumnya! Ganti deskripsi!');</script>";
            }*/
          }
          ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>