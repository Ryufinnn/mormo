<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>MORMO | About Us</title>
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
	<link rel="stylesheet" type="text/css" href="css/component1.css" />
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
		<?php 
		include ('header.php');
		include ('koneksi.php');
		?>		

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->			
			<div class="carousel-inner" role="listbox">
				  <div class="item active">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `jumbotron` WHERE `id_jumbotron` = '3'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_jumbotron'];?>
					" alt="1st Slideshow" width="1270">
				  </div>

			</div>
		</div>

		<!----Mulai Gambar Besar---->
		<div class="container" style="margin-bottom:2%; margin-top:5%;">
			<center>
				<p><h2>About Us </h2></p><br>
			</center>
		</div>

		<div class="container">

			<div id="tabs" class="tabs">
				<nav>
					<ul>
						<li><a href="#section-1"><span>History</span></a></li>
						<li><a href="#section-2"><span>Visi & Misi</span></a></li>
						<li><a href="#section-3"><span>Contact Us</span></a></li>
					</ul>
				</nav>
				<div class="content">
					<section id="section-1">
						<?php
						$kueri = mysql_query("SELECT * FROM `about`");
						$baca = mysql_fetch_assoc($kueri);
						?>
						<div class="mediabox">
							<img src="images/logo.png" alt="img01" />
						</div>
						<div class="mediabox1">
							<p>
								<?php
								$teksAwal = $baca['history'];
								$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
								$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
								$teksFix = str_replace($unicode, $kode, $teksAwal);
								echo $teksFix;
								?>
							</p>
						</div>
					</section>
					<section id="section-2">
						<div class="mediabox">
							<img src="images/logo.png" alt="img04" />
						</div>
						<div class="mediabox1">
							<h3>Visi</h3><p>
							<?php
							$teksAwal1 = $baca['visi'];
							$teksFix1 = str_replace($unicode, $kode, $teksAwal1);
							echo $teksFix1;
							?></p><hr>
							<h3>Misi</h3><p>
							<?php
							$teksAwal2 = $baca['misi'];
							$teksFix2 = str_replace($unicode, $kode, $teksAwal2);
							echo $teksFix2;
							?></p><hr>
						</div>
					</section>
					<section id="section-3">
						<div class="mediabox">
							<img src="images/logo.png" alt="img02" />
						</div>
						<div class="mediabox1">
							<h3>e-mail   : 
							<?php
							$teksAwal3 = $baca['email'];
							$teksFix3 = str_replace($unicode, $kode, $teksAwal3);
							echo $teksFix3;
							?></h3><hr>
							<h3>Facebook   : http://<?php
							$teksAwal4 = $baca['facebook'];
							$teksFix4 = str_replace($unicode, $kode, $teksAwal4);
							echo $teksFix4;?></h3><hr>
							<h3>Twitter   : https://<?php
							$teksAwal5 = $baca['twitter'];
							$teksFix5 = str_replace($unicode, $kode, $teksAwal5);
							echo $teksFix5;?></h3><hr>
							<h3>Instagram   : http://<?php
							$teksAwal6 = $baca['ig'];
							$teksFix6 = str_replace($unicode, $kode, $teksAwal6);
							echo $teksFix6;?></h3><hr>
						</div>
					</section>
				</div><!-- /content -->
			</div><!-- /tabs -->
		</div>	
		
		<!----//Gambar Besar Selesai---->
        
		<!----start-footer---->
		<?php include ('footer.php');?>
		<!----//End-footer---->
		<!-----//End-container---->
		<script src="js/cbpFWTabs.js"></script>
		<script>
			new CBPFWTabs( document.getElementById( 'tabs' ) );
		</script>
	</body>
</html>