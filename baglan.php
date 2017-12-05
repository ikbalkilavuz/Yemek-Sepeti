
<!-- This function open the oracle database   -->


<?php
    $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=dbs)))" ;

    if($connect = OCILogon("B21127462", "21127462", $db))
    {
       /* echo "Successfully connected to Oracle.\n";
        OCILogoff($c);*/
    }
    else
    {
        $err = OCIError();
        echo "Connection failed." . $err[text];
    }
?>