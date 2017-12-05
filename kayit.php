<?php
	include("baglan.php");
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>	
<head>
	<title>KAYIT</title>		
	<link rel='stylesheet' type='text/css' href='css/style.css' >
	<script type='text/javascript'  src='javascript/jquery-3.2.1.js' ></script>
	<script type="text/javascript" src="javascript/giris.js"></script>
	<script type='text/javascript' src='javascript/kayit.js'></script>

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
						<td><b>Email :</b></td>
						<td><input type="text" name="email" /></td><br/>
					</tr>
					<tr>
						<td><b>Sifre :</b></td>
						<td><input type="password" name="Sifre"/></td><br/>
					</tr>
					<tr>
						<td><b>Sifre tekrar:</b></td>
						<td><input type="password" name="Sifre2"/></td><br/>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="kayıt" value="KAYIT" class="gonder" /></td>
					</tr>

		</table>

		</form>


	</div>
	
</body>


</html>
