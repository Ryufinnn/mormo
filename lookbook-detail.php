<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>MORMO | LookBook Detail</title>
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
		
		.carousel-control.left{
			background-image: linear-gradient(to right,rgba(255,255,255,.5) 0,rgba(0,0,0,.0001) 100%)
		}
		
		.carousel-control.right{
			background-image: linear-gradient(to left,rgba(255,255,255,.5) 0,rgba(0,0,0,.0001) 100%)
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
	
	<body>
	<?php 
	include ("koneksi.php");
	include ("header.php");

	$id_lookbook = $_GET['id_lookbook'];
	$kueri = mysql_query("SELECT * FROM `lookbook` WHERE `id_lookbook` = '$id_lookbook'");
	$baca = mysql_fetch_assoc($kueri);
	?>
       
			<div class="main">
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<center><h1><?php echo $baca['judul'];?></h1></center>
					</div>
					<center>
						<div class="cbp-vm-price"><?php echo $baca['wkt_upload'];?></div>							
							<img src="images/headerLookbook/<?php echo $baca['foto_header'];?>"/>
							<div class="cbp-vm-detailss">
								<?php
								$teksAwal = $baca['deskripsi'];
								$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
								$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
								$teksFix = str_replace($unicode, $kode, $teksAwal);
								echo $teksFix;
								?>
							</div>
							<?php
							$kueri2 = mysql_query("SELECT `foto_detail` FROM `lookbook_detail` WHERE `id_lookbook` = '$id_lookbook'");
							while ($baca2 = mysql_fetch_assoc($kueri2)){
							?>
							<a class="cbp-vm-image" href="#"><img src="images/detailLookbook/<?php echo $baca2['foto_detail'];?>"></a><br>
							<?php
							}
							?>
					</center>
				</div>
			</div><!-- /main -->
			

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/cbpViewModeSwitch.js"></script>
		
		<!----start-footer---->
		<?php include ('footer.php');?>
		<!----//End-footer---->
		<!-----//End-container---->
	</body>
</html>