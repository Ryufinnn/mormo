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
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" type="text/css" href="css/set1.css" />	
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 100%;
			height: 100%;
			margin: auto;
		}
	</style>
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
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
					$query = mysql_query("SELECT * FROM `jumbotron` WHERE `id_jumbotron` = '2'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_jumbotron'];?>
					" alt="1st Slideshow" width="1270">
				  </div>

			</div>
		</div>
		
		<!----Mulai Gambar Panjang---->
		<div class="container" style="margin-bottom:5%; margin-top:5%;">
			<div class="col-xs-10 col-md-8 col-xs-offset-1 col-md-offset-2">
				<center>
				<p><h3>
				<?php
				$kode = mysql_query("SELECT * FROM `teks` WHERE `id_tulisan`='2'");
            	$tulisan = mysql_fetch_array($kode);
		    	$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
				$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
				$awal = $tulisan['desk_tulisan'];
          		$fix = str_replace($unicode, $kode, $awal);
            	echo $fix;
				?>
				</h3></p><br>
				</center>
			</div>
		</div>

		<!----Gambar panjang selesai---->

		<!--Mulai Galeri Proyek-->
		<!--Galeri Proyek Selesai-->
			<center><h2>Proyek yang pernah dikerjakan</h2></center>
			<div class="content">
				<div class="grid">
				<?php
				$query = mysql_query("SELECT * FROM `gel_kompak`");
            	while ($baris = mysql_fetch_array($query)){
				?>

					<figure class="effect-honey">
						<img src="images/gelKompak/<?php echo $baris['nama_gelkompak'];?>" alt="img04"/>
						<figcaption>
							<h2> <span></span> <i>
								<?php
								$teksAwal = $baris['desk_gelkompak'];
								$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
								$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
								$teksFix = str_replace($unicode, $kode, $teksAwal);
								echo $teksFix;
								?></i></h2>
						</figcaption>			
					</figure>
				<?php
				}
				?>
				</div>
			</div>
				
		<!----start-footer---->
		<?php include ('footer.php');?>
		<!----//End-footer---->
		<!-----//End-container---->
		
	</body>
</html>