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
		<div class='title'><b>Admin Girisi</b></div>
		<form method="POST" action="kontrol.php">
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
     <div class="giris">
     	<div class='title'><b>Restaurant Girisi</b></div>
		<form method="POST" action="kontrol.php">
		<table class="table">
			<tr>
				<td><b>Restaurant Email :</b></td>
				<td><input type="text" name="resEmail" /></td><br/>
			</tr>
			<tr>
				<td><b>Restaurant Sifre :</b></td>
				<td><input type="password" name="Sifre"/></td><br/>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="gonder" value="GONDER" class="gonder" /></td>
			</tr>

		</table>
		</form>
	</div>
	 <div class="giris">
	 	<div class='title'><b>Musteri Girisi</b></div>
		<form method="POST" action="kontrol.php">
		<table class="table">
			<tr>
				<td><b>Müşteri Email :</b></td>
				<td><input type="text" name="musteriEmail" /></td><br/>
			</tr>
			<tr>
				<td><b>Müşteri Sifre :</b></td>
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