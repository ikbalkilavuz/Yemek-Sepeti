

<?php include("baglan.php");  ?>

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

 


<?php 

	$girdiMi=0;
	$parse = oci_parse($connect, "select * from ADMIN_LOGIN");
	oci_execute($parse);

	if($_POST){
		$kullanici = $_POST['kAdi'];
		$Sifre = $_POST['Sifre'];
		while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
			if($kullanici==$bul['ADMIN_NAME'] && $Sifre==$bul['ADMIN_PASSWORD']){
				echo $bul['ADMIN_NAME']." Hoş Geldin :)";
				$girdiMi=1;
				break;
			}
		}
		if($girdiMi==0){
			echo "Kullanici Adi veya sifre yanlis !!";
		}
		$girdiMi=0;
	}
	
	oci_free_statement($parse);
	oci_close($connect);
?>

</body>
</html>