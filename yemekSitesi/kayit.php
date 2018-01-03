<?php 

   include("baglan.php");


   if(isset($_POST['kAdi'])){
	if($_POST){
		$kullanici = $_POST['kAdi'];
		$email = $_POST['email'];
		$Sifre = $_POST['Sifre'];
		$Sifre2 = $_POST['Sifre2'];
		$conf = "asdasf";
		if($Sifre==$Sifre2 && $email!='' && $kullanici!=''){
			$parse = oci_parse($connect, "BEGIN CREATE_ADMIN(:ADMIN_NAME, :ADMIN_SURNAME, :ADMIN_PASSWORD ,:ADMIN_RESTAURANT_CONFIRMATION); END;");
			$Sifre=md5($Sifre);
			oci_bind_by_name($parse, ":ADMIN_NAME" ,$kullanici);
			oci_bind_by_name($parse, ":ADMIN_SURNAME", $email);
			oci_bind_by_name($parse, ":ADMIN_PASSWORD", $Sifre);
			oci_bind_by_name($parse, ":ADMIN_RESTAURANT_CONFIRMATION", $conf);
			oci_execute($parse);
			echo "<b>  Basarıyla Kayıt Oldunuz  </b>";
			header("Location: profil.php");

		oci_free_statement($parse);
		}else{
			$hata='hata';
			echo "<b class=".$hata."=>Lütfen Bütün Bilgileri Doğru Girdiğinize Emin Olunuzz !! </b>";
		}
	}
}


  if(isset($_POST['silKupon'])){
	if($_POST){
		$kuponAdi = $_POST['silKupon'];
			$parse = oci_parse($connect, "delete from coupon where COUPON_NAME = '".$kuponAdi."'");
			oci_execute($parse);
			echo "<b>  Basarıyla Kupon Sildiniz:  </b>";
			header("Location: profil.php");
			
		oci_free_statement($parse);
	}
}

 if(isset($_POST['silAdmin'])){
	if($_POST){
		$adminAdi = $_POST['silAdmin'];
		$adminSoyadi = $_POST['silSoyAdmin'];
				$parse = oci_parse($connect, "delete from admin_login where ADMIN_NAME = '".$adminAdi."' and ADMIN_SURNAME = '".$adminSoyadi."'");
			oci_execute($parse);
			echo "<b>  Basarıyla admin Sildiniz:  </b>";
			header("Location: profil.php");
			
		oci_free_statement($parse);
	}
}


  if(isset($_POST['kuponAdi'])){
	if($_POST){
		$kuponAdi = $_POST['kuponAdi'];
		$KuponOrani = $_POST['KuponOrani'];
			$parse = oci_parse($connect, "BEGIN CREATE_COUPON(:COUPON_NAME, :DISCOUNT_RATE); END;");
			oci_bind_by_name($parse, ":COUPON_NAME" ,$kuponAdi);
			oci_bind_by_name($parse, ":DISCOUNT_RATE", $KuponOrani);
			oci_execute($parse);
			echo "<b>  Basarıyla Kupon Eklediniz:  </b>";
			header("Location: profil.php",1);
			
		oci_free_statement($parse);
	}
}



   if(isset($_POST['restAdi'])){
	if($_POST){
		$kullanici = $_POST['restAdi'];
		$email = $_POST['resEmail'];
		$Sifre = $_POST['resSifre'];
		$Sifre2 = $_POST['resSifre2'];
		$Yer = $_POST['yer'];
		$Tip = $_POST['tip'];
		if($Sifre==$Sifre2 && $email!='' && $kullanici!=''){
			$parse = oci_parse($connect, "BEGIN Create_RestaurantCount(:RESTAURANT_EMAIL, :RESTAURANT_PASSWORD); END;");
			$Sifre=md5($Sifre);
			oci_bind_by_name($parse, ":RESTAURANT_EMAIL" ,$email);
			oci_bind_by_name($parse, ":RESTAURANT_PASSWORD", $Sifre);
			oci_execute($parse);
			oci_free_statement($parse);

	$parse2 =  oci_parse($connect, "Select RESTAURANT_ID from RESTAURANT_LOGIN where RESTAURANT_EMAIL = '".$email."' ");
	oci_execute($parse2); 

		while(($bul= oci_fetch_array($parse2,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
			$rate=100;
			$rateId=1;
			$picture="images/profil.jpg";
			$parse3 = oci_parse($connect, "BEGIN CREATE_RESTAURANT(:RESTAURANT_ID, :RESTAURANT_NAME , :RESTAURANT_RATE ,:TYPE_ID, :REGION_ID ,:RATE_ID ,:PICTURE ); END;");
			oci_bind_by_name($parse3, ":RESTAURANT_ID" ,$bul['RESTAURANT_ID']);
			oci_bind_by_name($parse3, ":RESTAURANT_NAME", $kullanici);
			oci_bind_by_name($parse3, ":RESTAURANT_RATE", $rate);
			oci_bind_by_name($parse3, ":TYPE_ID", $Tip);
			oci_bind_by_name($parse3, ":REGION_ID", $Yer);
			oci_bind_by_name($parse3, ":RATE_ID", $rateId);
			oci_bind_by_name($parse3, ":PICTURE", $picture);
			oci_execute($parse3);
		}

		oci_free_statement($parse2);
		oci_free_statement($parse3);

		}else{
			$hata='hata';
			echo "<b class=".$hata."=>Lütfen Bütün Bilgileri Doğru Girdiğinize Emin Olunuzz !! </b>";
		}
	}
}

		
?>
	
