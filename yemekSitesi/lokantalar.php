<?php
	ob_start();
	session_start();
	include("baglan.php");
	include("header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>	
<head>
	<title>Ana Sayfa</title>		
	<link href="css/lokanta.css" style="text/css" rel="stylesheet" />
	<script type='text/javascript'  src='javascript/jquery-3.2.1.js' ></script>
	<script type='text/javascript' src='javascript/lokantalar.js'></script>

</head>
<body>

	<div>
	  <table class="lokantalar">
		

<?php 

	$parse = oci_parse($connect, "select * from RESTAURANT");
	oci_execute($parse);

		while(($bul= oci_fetch_array($parse,OCI_ASSOC+OCI_RETURN_NULLS))!=false){
			echo "<tr class=\"tablo\">";
			echo "<td><a href=\"#\"><img src=\"".$bul['PICTURE']."\"></a></td>";
			echo "<td><strong>".$bul['RESTAURANT_NAME']."</strong></td>";
			echo "<br/></tr>";
		}
	
	oci_free_statement($parse);
	oci_close($connect);
?>

	  </table>

	</div>



</body>


</html>
