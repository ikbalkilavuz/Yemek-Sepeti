<?php
	ob_start();
	session_start();
	include("header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>	
<head>
	<title>Ana Sayfa</title>		
	<link href="css/index.css" style="text/css" rel="stylesheet" />
	<script type='text/javascript'  src='javascript/jquery-3.2.1.js' ></script>
	<script type='text/javascript' src='javascript/index.js'></script>

</head>
<body>

	 <?php 
	 	if(isset($_SESSION['oturum'])){
	 		 if($_SESSION['who']=='admin'){
	 		 	include("adminSayfasi.php");
	 		 	ob_flush();
	 		 }else if($_SESSION['who']=='restaurant'){
	 		 	include("restaurantSayfasi.php");
	 		 } else if($_SESSION['who']=='musteri'){
	 		 	include("musteriSayfasi.php");
	 		 }else{

	 		 }
	 	}else{
	 		include("giris.php");
	 		 ob_flush();
	 	}
	 	 ob_flush();
	   ?>




</body>


</html>