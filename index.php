<?php
	include("baglan.php");
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
	<div id="headerBosluk"></div>
	<div id="header">
		<ul>
			<li><a href="#"><img src="images/h.png" ></a></li>
			<li><a href="#">AnaSayfa</a></li>
			<li><a href="#">Profil</a></li>
			<li><a href="#">Lokantalar</a></li>
			<li><a href="#">Menuler</a></li>
			<li><a href="#">İletişim</a></li>		
		</ul>

	</div>

	<div id="left">
		<?php  include("giris.php") ?>
	</div>
	<div id="right"></div>
	<div id="middle"></div>
	<div id="footer"></div>





</body>


</html>
