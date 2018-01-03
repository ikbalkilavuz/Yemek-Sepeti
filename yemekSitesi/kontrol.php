<?php 
	include("baglan.php"); 
	session_start();
	$girdiMi=0;

if(isset($_POST['kAdi'])){
	$parse = oci_parse($connect, "select * from ADMIN_LOGIN");
	oci_execute($parse);

	if($_POST){
		$kullanici = $_POST['kAdi'];
		$Sifre = $_POST['Sifre'];
		$Sifre = md5($Sifre);
		while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
			if($kullanici==$bul['ADMIN_NAME'] && $Sifre==$bul['ADMIN_PASSWORD']){
				$_SESSION['oturum']=true;
				$_SESSION['name']=$bul['ADMIN_NAME'];
				$_SESSION['kim']='admin';
				$_SESSION['id']=$bul['ADMIN_ID'];
				$_SESSION['who']='admin';
				$girdiMi=1;
				break;
			}
		}
		if($girdiMi==0){
			echo "Admin Adi veya sifre yanlis !!";
			header("Location: profil.php");
		}
		else{
			header("Location: profil.php");
		}
		$girdiMi=0;
	}
	
	oci_free_statement($parse);
}
if(isset($_POST['resEmail'])){
	$parse = oci_parse($connect, "select * from RESTAURANT_LOGIN");
	oci_execute($parse);

	if($_POST){
		$kullanici = $_POST['resEmail'];
		$Sifre = $_POST['Sifre'];
		$Sifre = md5($Sifre);
		while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
			if($kullanici==$bul['RESTAURANT_EMAIL'] && $Sifre==$bul['RESTAURANT_PASSWORD']){
				$_SESSION['oturum']=true;
				$_SESSION['name']=$bul['RESTAURANT_EMAIL'];
				$_SESSION['id']=$bul['RESTAURANT_ID'];
				$_SESSION['who']='restaurant';
				$girdiMi=1;
				break;
			}
		}
		if($girdiMi==0){
			echo "Restaurant Adi veya sifre yanlis !!";
			header("Location: profil.php");
		}else{
			header("Location: profil.php");
		}
		$girdiMi=0;
	}
	
	oci_free_statement($parse);
}
if(isset($_POST['musteriEmail'])){
	$girdiMi=0;
	$parse = oci_parse($connect, "select * from CUSTOMER");
	oci_execute($parse);

	if($_POST){
		$kullanici = $_POST['musteriEmail'];
		$Sifre = $_POST['Sifre'];
		$Sifre = md5($Sifre);
		while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
			if($kullanici==$bul['CUSTOMER_EMAIL'] && $Sifre==$bul['CUSTOMER_PASSWORD']){
				$_SESSION['oturum']=true;
				$_SESSION['name']=$bul['CUSTOMER_EMAIL'];
				$_SESSION['id']=$bul['CUSTOMER_ID'];
				$_SESSION['who']='musteri';
				$girdiMi=1;
				break;
			}
		}
		if($girdiMi==0){
			echo "Kullanici Email veya sifre yanlis !!";
			header("Location: profil.php");
		}else{
			header("Location: profil.php");
		}
		$girdiMi=0;
	}
	
	oci_free_statement($parse);
}

?>