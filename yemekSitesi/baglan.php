
<!-- This function open the oracle database   -->


<?php
error_reporting(E_ALL); ini_set('display_errors', '1');

$db = "(DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA = (SID = dbs)))";
$connect = oci_connect("B21127462", "21127462", $db);
if (!$connect) {
    $e = oci_error();   // For oci_connect errors do not pass a handle
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
?>