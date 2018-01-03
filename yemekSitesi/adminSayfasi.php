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
		<a href="#" class="resEkle"> Restaurant Ekle </a></br>
		<a href="#" class="resSil"> Restaurant Sil </a></br>
		<a href="#" class="resList"> Restaurantları Listele </a></br>
		<a href="#" class="admEkle"> Admin Ekle </a></br>
		<a href="#" class="admSil"> Admin Sil </a></br>
		<a href="#" class="admList"> Adminleri Listele </a></br>
		<a href="#" class="kupEkle"> Kupon Ekle </a></br>
		<a href="#" class="kupSil"> Kupon Sil </a></br>
		<a href="#" class="kupList"> Kuponları Listele </a></br>
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
	<div class="adminEkle">
		<b>Admin Kayit</b>
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

	<div class="kuponEkle">
		<b>Kupon Ekle</b>
		<form method="POST" action="kayit.php">
	   		 <table class="table">
					<tr>
						<td>Kupon Adi :</td>
						<td><input type="text" name="kuponAdi" /></td><br/>
					</tr>
					<tr>
						<td>Kupon Rate :</td>
						<td><input type="text" name="KuponOrani" /></td><br/>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="kayıt" value="EKLE" class="gonder" /></td>
					</tr>
		    </table>
		</form>
	</div>

	<div class="AdminSil">
		<b>Admin Sil</b>
		<form method="POST" action="kayit.php">
	   		 <table class="table">
					<tr>
						<td>Admin Adi :</td>
						<td><input type="text" name="silAdmin" /></td><br/>
					</tr>
					<tr>
						<td>Admin Email :</td>
						<td><input type="text" name="silSoyAdmin" /></td><br/>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="sil" value="Sil" class="gonder" /></td>
					</tr>
			</table>
		</form>
	</div>

	<div class="RestaurantSil">
		<b>Restaurant Sil</b>
		<form method="POST" action="?">
	   		 <table class="table">
					<tr>
						<td>Restaurant Adi :</td>
						<td><input type="text" name="resAdi" /></td><br/>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="sil" value="Sil" class="gonder" /></td>
					</tr>
			</table>
		</form>
	</div>

	<div class="KuponSil">
		<b>Kupon Sil</b>
		<form method="POST" action="kayit.php">
	   		 <table class="table">
					<tr>
						<td>Kupon Sil :</td>
						<td><input type="text" name="silKupon" /></td><br/>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="sil" value="Sil" class="gonder" /></td>
					</tr>
			</table>
		</form>
	</div>
	<div class="AdminListele">
		<b>Adminleri Listele</b>
		<form method="POST" action="?">
	   		 <table class="table2">
					<tr>
						<td> Adminler: </td>
					</tr>
					<tr>
						<?php 
           				 		$parse = oci_parse($connect, "select * from ADMIN_LOGIN");
								oci_execute($parse);

									while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
										echo "<td>".$bul['ADMIN_NAME']."--->".$bul['ADMIN_SURNAME']."</td>";
									}
								oci_free_statement($parse);
           				 ?>
					</tr>
		</table>
		</form>
	</div>
	<div class="RestaurantListele">
		<b>Restaurantları Listele</b>
		<form method="POST" action="?">
	   		 <table class="table2">
					<tr>
						<td> Restaurantlar: </td>
					</tr>
					<tr>
						<?php 
           				 		$parse = oci_parse($connect, "select * from RESTAURANT");
								oci_execute($parse);

									while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
										echo "<td>".$bul['RESTAURANT_NAME']."--->".$bul['RESTAURANT_RATE']."</td>";
									}
								oci_free_statement($parse);
           				 ?>
					</tr>
		</table>
		</form>
	</div>
	<div class="KuponlarıListele">
		<b>Kuponları Listele</b>
		<form method="POST" action="?">
	   		 <table class="table2">
					<tr>
						<td> Kupon İsmi: ---> İndirim Oranı:</td>
					</tr>
					<tr>
						<?php 
           				 		$parse = oci_parse($connect, "select * from COUPON");
								oci_execute($parse);

									while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
										echo "<td>".$bul['COUPON_NAME']."--->".$bul['DISCOUNT_RATE']."</td>";
									}
							oci_free_statement($parse);
           				 ?>
					</tr>
		</table>
		</form>
	</div>

		<div class="RestaurantEkle">
		<b>Restaurant Ekle</b>
		<form method="POST" action="kayit.php">
	   		 <table class="table">
					<tr>
						<td>Restaurant Adi :</td>
						<td><input type="text" name="restAdi" /></td><br/>
					</tr>
					<tr>
						<td>Email :</td>
						<td><input type="text" name="resEmail" /></td><br/>
					</tr>
					<tr>
						<td>Sifre :</td>
						<td><input type="password" name="resSifre"/></td><br/>
					</tr>
					<tr>
						<td>Sifre Tekrar:</td>
						<td><input type="password" name="resSifre2"/></td><br/>
					</tr>
					<tr>
					<td>Restaurant Yeri:</td>
					 <td>
					 <select id="dropdown" name="yer">
           				 <option value="none" disabled selected>Select&hellip;</option>
           				 <?php 
           				 		$parse = oci_parse($connect, "select * from REGION");
								oci_execute($parse);

									while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
										echo "<option value=".$bul['REGION_ID'].">".$bul['REGION_NAME']."</option>";
									}	
									oci_free_statement($parse);

         				 ?>
      				  </select>
      				</td>
					</tr>
					<tr>
					<td>Restaurant Tipi:</td>
					 <td>
					 <select id="dropdown" name="tip">
           				 <option value="none" disabled selected>Select&hellip;</option>
           				 <?php 
           				 		$parse = oci_parse($connect, "select * from RESTAURANT_TYPE");
								oci_execute($parse);

									while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
										echo "<option value=".$bul['TYPE_ID'].">".$bul['TYPE_NAME']."</option>";
									}
	
									oci_free_statement($parse);

           				 ?>
      				  </select>
      				</td>
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