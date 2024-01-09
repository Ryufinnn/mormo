<?php

$connection = mysql_connect("localhost","root","");
if (!$connection)
		{echo"Gagal melakukan koneksi DATABASE!";}

$data = mysql_select_db("mormo");
if (!$data)
	{echo"<br><br>Database telah gagal diakses!";}
	
	echo mysql_error();
?>