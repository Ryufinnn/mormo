<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>MORMO | Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
		<link rel="shortcut icon" href="images/favicons/apple-touch-icon-180x180.png">
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,300,700' rel='stylesheet' type='text/css'>
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
		
		.carousel-control.left{
			background-image: linear-gradient(to right,rgba(255,255,255,.5) 0,rgba(0,0,0,.0001) 100%)
		}
		
		.carousel-control.right{
			background-image: linear-gradient(to left,rgba(255,255,255,.5) 0,rgba(0,0,0,.0001) 100%)
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/set1.css" />	
  
	<body>
	<?php include ('header.php');?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
			  <li data-target="#myCarousel" data-slide-to="5"></li>
			  <li data-target="#myCarousel" data-slide-to="6"></li>
			</ol>

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
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '1'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];?>
					" alt="1st Slideshow" width="1270">
				  </div>

				  <div class="item">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '2'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];?>
					" alt="2nd Slideshow" width="1270">
				  </div>

				  <div class="item">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '3'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];?>
					" alt="3rd Slideshow" width="1270">
				  </div>

				  <div class="item">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '4'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];
					?>
					" alt="4th Slideshow" width="1270">
				  </div>

				  <div class="item">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '5'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];?>
					" alt="5th Slideshow" width="1270">
				  </div>

				  <div class="item">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '6'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];?>
					" alt="6th Slideshow" width="1270">
				  </div>

				  <div class="item">
					<img src="images/
					<?php
					$query = mysql_query("SELECT * FROM `carousel` WHERE `id_carousel` = '7'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_carousel'];?>
					" alt="7th Slideshow" width="1270">
				  </div>
			</div>

				<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
			</a>
		</div>
		
		<!----start-gallery---->
		<div id="gal" class="gallery" style="margin-bottom:30px">
			<div class="container">
				<div class="contents">
					<div class="grid">
						<figure class="effect-zoe">
							<a href="gelrs.php">
							<img src="images/<?php
					$query = mysql_query("SELECT * FROM `navhome` WHERE `id_navhome` = '1'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_navhome'];?>" alt="img25"/>
							<figcaption>
								<h2>ORDER</span></h2>
								<p class="description"><span>GELANG KARET KOMPAK</span> <br>Kamu bisa order gelang design sendiri</p>
							</figcaption>
							</a>
						</figure>
						<figure class="effect-zoe">
							<a href="gelrs.php">
							<img src="images/<?php
					$query = mysql_query("SELECT * FROM `navhome` WHERE `id_navhome` = '2'");
					$baris = mysql_fetch_array($query);
					echo $baris['nama_navhome'];?>" alt="img26"/>
							<figcaption>
								<h2>LIHAT <span>KOLEKSI</span></h2>
								<p class="description" style="padding-left:4em"><span>GELANG READY STOCK</span> <br>Kamu bisa order gelang di sini</p>
							</figcaption>			
							</a>
						</figure>
					</div>
				</div>
				
				<div class="head">
					
				</div>
		<!----//End-gallery---->
        
		<!----start-footer---->
		<?php include ('footer.php');?>
		<!----//End-footer---->
		<!-----//End-container---->
		<script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
	</body>
</html>