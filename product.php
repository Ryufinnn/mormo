<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Mormo | Product</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
		<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->

</head>
<body>
<!--header-->
	<?php
	include('koneksi.php'); 
	include('header.php');?>		
<!---->
<div class="single">

<div class="container">
<div class="col-md-12" style="margin-top:5%; margin-bottom:10%;">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			  	<?php
				$id_gelready = $_GET['id_gelready'];
				$query = mysql_query("SELECT `nama_detail` FROM `gelready_detail` WHERE `id_gelready`='$id_gelready' ");
				while ($baris = mysql_fetch_assoc($query)){
				?>
			    <li data-thumb="images/gelReady/<?php echo $baris['nama_detail'];?>">
			        <div class="thumb-image"> <img src="images/gelReady/<?php echo $baris['nama_detail'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			    <?php
				}
			    ?>				
			  </ul>
		</div>
	</div>	
	<div class="col-md-7 single-top-in">
		<div class="single-para simpleCart_shelfItem">
			<?php
				$query2 = mysql_query("SELECT * FROM `gel_readystock` WHERE `id_gelready`='$id_gelready' ");
				$baris2 = mysql_fetch_assoc($query2);
			?>
			<h1 style="color:grey;"><?php
			$teksAwal = $baris2['nama_gelready'];
    		$unicode = array("%27", "%3F", "%21", "%2D", "%2B", "%26", "%40", "%2A", "%7E", "%7E");
			$kode = array("'", "?", "!", "-", "+", "&", "@", "*", "~", "|");
          	$nama_gelready = str_replace($unicode, $kode, $teksAwal); 
			echo $nama_gelready;?></h1>
			<p><?php
			$teksDes = $baris2['deskripsi'];
			$deskripsi = str_replace($unicode, $kode, $teksDes);
			echo $deskripsi;?></p>
			<hr>
			<h2>Rp. <?php echo $baris2['harga'];?> - </h2> <a href="howto.php" target="_blank" style="color:grey;">HOW TO ORDER / CARA MEMESAN</a><br><br>
				<label  class="add-to item_price">Color</label>
				<ul>
				<li><p>Warna Gelang: <?php echo $baris2['wrn_gelang'];?></p></li> 
				<li><p>Warna Tulisan: <?php echo $baris2['wrn_tulisan'];?></p></li> 
				<li><p>Logo: <?php echo $baris2['wrn_logo'];?></p></li>
				</ul>
			<hr>	
				<label  class="add-to item_price">Size</label>
				<ul>
				<li><p>Lebar: <?php echo $baris2['lebar'];?> cm</p></li>
				<li><p>Diameter: <?php echo $baris2['diameter'];?> cm</p></li>
				</ul>
		</div>
	</div>
		<div class="clearfix"> </div>
</div>
<!----->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>

		<div class="clearfix"> </div>
	</div>
	</div>
<!--footer-->

<!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
		<!----start-footer---->
		<?php include ('footer.php');?>
		<!----//End-footer---->
		<!-----//End-container---->
	</body>
</html>