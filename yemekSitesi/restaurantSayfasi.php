<?php
	ob_start();
	include("baglan.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>	
<head>
	<title></title>		
	<link href="css/admin.css" style="text/css" rel="stylesheet" />
	<script type='text/javascript'  src='javascript/jquery-3.2.1.js' ></script>
	<script type='text/javascript' src='javascript/index.js'></script>
	<script type="text/javascript" src="javascript/giris.js"></script>

</head>
<body>
	<?php
		echo "<b>Hoş geldin ".$_SESSION['name']."</b>";
	?>
	<div class="adminPanel">
		<a href="#" class="menuEkle"> Menu Ekle </a></br>
		<a href="#" class="menuSil" > Menu Sil </a></br>
		<a href="#" class="menuList"> Menuleri Listele </a></br>
		<a href="#" class="siparisList"> Siparişleri Listele </a></br>
		<a href="#" class="butunSiparisList"> Bütün Siparişleri Listele </a></br>
		<a href="#" class="kazanc" > Toplam Kazanç </a></br>
		<a href="?list=1" name="exit"> Çıkış </a>
	 </div>

<?php 
	if(isset($_GET['list'])){
		$list = $_GET['list'];
		if($list==1){
			session_destroy();
			header("location:profil.php");
		}
	}

?>

<div class="formYeri">
	<div class="menuEkle">
		<b>Menu Ekle</b>
		<form method="POST" action="kayit.php">
	   		 <table class="table">
					<tr>
						<td>Kullanici Adi :</td>
						<td><input type="text" name="kAdi" /></td><br/>
					</tr>
					<tr>
						<td>Email :</td>
						<td><input type="text" name="email" /></td><br/>
					</tr>
					<tr>
						<td>Sifre :</td>
						<td><input type="password" name="Sifre"/></td><br/>
					</tr>
					<tr>
						<td>Sifre tekrar:</td>
						<td><input type="password" name="Sifre2"/></td><br/>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="kayıt" value="KAYIT" class="gonder" /></td>
					</tr>
		    </table>
		</form>
	</div>

</div>


</body>
</html>