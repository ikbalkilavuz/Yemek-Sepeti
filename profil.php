<?php
	 include("baglan.php"); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Kullanici Girisi</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type='text/javascript'  src='javascript/jquery-3.2.1.js' ></script>
	<script type="text/javascript" src="javascript/giris.js"></script>
</head>
<body>

	<div class="giris">
		<form method="POST" action="?">
		<table class="table">
			<tr>
				<td><b>Kullanici Adi :</b></td>
				<td><input type="text" name="kAdi" /></td><br/>
			</tr>
			<tr>
				<td><b>Sifre :</b></td>
				<td><input type="password" name="Sifre"/></td><br/>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="gonder" value="GONDER" class="gonder" /></td>
			</tr>

		</table>

		</form>
	</div>

</body>
</html>