<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>MORMO | Gelang Ready Stock</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="shortcut icon" href="images/favicons/apple-touch-icon-180x180.png">
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!---- start-smoth-scrolling---->
		 <!-- Custom Theme files -->
		<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,300,700' rel='stylesheet' type='text/css'>---->
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>

	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 100%;
			height: 100%;
			margin: auto;
		}
	</style>
	<body>
		<!-----start-container---->
	<?php include ('header.php');?>		
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->			
			<div class="carousel-inner" role="listbox">
			<?php
			include ('koneksi.php');
			//$query = mysql_query("SELECT * FROM `carousel`");
			//$baris = mysql_fetch_array($query);
			?>
				  <div class="item active">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `jumbotron` WHERE `id_jumbotron` = '1'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_jumbotron'];?>
					" alt="1st Slideshow" width="1270">
				  </div>

			</div>
		</div>
		
		<!----Mulai Galeri Gambar---->
				<div class="container" style="margin-bottom:5%; margin-top:5%;">
					<div class="col-xs-10 col-md-8 col-xs-offset-1 col-md-offset-2">
						<center>
						<p><h3>
						<?php
						include ('koneksi.php');
						$kode = mysql_query("SELECT * FROM `teks` WHERE `id_tulisan`='3'");
						$tulisan = mysql_fetch_array($kode);
		    			$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
						$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
						$awal = $tulisan['desk_tulisan'];
          				$fix = str_replace($unicode, $kode, $awal);
						echo $fix;
						?></h3></p><br>
						</center>
					</div>
				</div>

		<div class="container">
			<div class="row">
			<?php
			$query = mysql_query("SELECT gel_readystock.id_gelready, gel_readystock.nama_foto, gel_readystock.nama_gelready, kategori.nama, gel_readystock.harga FROM `gel_readystock`, `kategori` WHERE gel_readystock.id_kategori = kategori.id_kategori");
			while ($baris = mysql_fetch_array($query)){
			?>
  			<div class="col-xs-6 col-md-3 " style="margin-bottom:30px">
    			<a href="product.php?id_gelready=<?php echo $baris['id_gelready']; ?>" target="_blank" class="thumbnail">
      				<img src="images/gelReady/<?php echo $baris['nama_foto'];?>" class="img-rounded" oncontextmenu="return false;"/>
    			</a>
    			<p><h3><?php
    			$teksAwal = $baris['nama_gelready'];
          		$nama_gelready = str_replace($unicode, $kode, $teksAwal); 
    			echo $nama_gelready;
    			?></h3>
        		Kategori: <?php 
        		echo $baris['nama'];?><br> 
        		Harga:<b> Rp.<?php echo $baris['harga'];?> -,</b><br/>
    			</p>
  			</div>
			<?php
			}
			?>
			</div>
		</div>

		<div class="container" style="height:150px">
		</div>

		
		<!----Galeri Gambar Selesai---->
        
		<!----start-footer---->
		<?php include ('footer.php');?>		
		<!----//End-footer---->
		<!-----//End-container---->
	</body>
</html>