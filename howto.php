<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>MORMO | FAQs</title>
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
					$query = mysql_query("SELECT * FROM `jumbotron` WHERE `id_jumbotron` = '4'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_jumbotron'];?>
					" alt="1st Slideshow" width="1270">
				  </div>

			</div>
		</div>

		<div class="container" style="margin-bottom:2%; margin-top:5%;">
		<div class="bs-callout bs-callout-info" id="callout-xref-input-group"> 
			 	<center><h2>FAQ</h2></center>
				<hr>
			 </div>
		</div>

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<?php
			$kueri = mysql_query("SELECT * FROM `faq`");
			while ($baca = mysql_fetch_assoc($kueri)){
			?>
			<li>
				<a class="cd-faq-trigger" href="#0">
					<?php
					$teksAwal1 = $baca['tanya'];
					$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
					$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
					$teksFix1 = str_replace($unicode, $kode, $teksAwal1);
					echo $teksFix1;
					?></a>
				<div class="cd-faq-content">
					<p><?php
					$teksAwal = $baca['jawab'];
					$teksFix = str_replace($unicode, $kode, $teksAwal);
					echo $teksFix;
					?></p>
				</div> <!-- cd-faq-content -->
			</li>
			<?php
			}
			?>		
		</ul> <!-- cd-faq-group -->
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

		<!----start-footer---->
		<?php include ('footer.php');?>
		<!----//End-footer---->
		<!-----//End-container---->
	</body>
</html>