<?php
	ob_start();
	include("baglan.php");
	session_start();
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
		include("header.php");
	?>

	<div id="slider">
		 <?php 
		 include("slider.php"); 
		?>
		<div class="arama">
			<strong>  Hemen Restaurant Ara! </strong><br/>
			<input type="text" name="resName" class="restaurant" />
			<input type="submit" name="ara" value="Restaurant Bul" class="resAra" />
		</div>
	</div>


	<div id="left">
		
	</div>
	<div id="middle">

	</div>
	<div id="footer">
		
	</div>





</body>


</html>
