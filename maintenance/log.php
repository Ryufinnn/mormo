<?php
include 'connect.php';
session_start();

	$username = $_POST['username']; 	//tangkap data yg di input dari form login input username
	$password = sha1($_POST['password']); 	//tangkap data yg di input dari form login input password
	$username = strip_tags($username);
	$password = htmlspecialchars($password);
	$tanggal = date('Y-m-d H:i:s');
	 
	$query= mysql_query("SELECT username,password FROM administrator WHERE username='$username' && password='$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	$login= mysql_num_rows($query);	 //melakukan pencocokan
	if($login == 1){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
		$_SESSION['username']=$username;  //jika cocok, buat session dengan nama sesuai dengan username
		$waktu = mysql_query("UPDATE `administrator` SET `waktu_login`='$tanggal' WHERE `username` = '$username'") ;
		header("location: page.php");     // dan alihkan ke index.php
	}
	
	else if ($login == 0){   				//jika tidak tampilkan pesan gagal login
		header("location: index.php");
		echo "<script>alert('Username atau password salah!');</script>";
	}
?>