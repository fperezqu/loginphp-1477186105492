<?php
$database = "BLUDB";
$user = "xxx";
$password = "yyyy";
$hostname = "dashdb-entry-yp-dal09-07.services.dal.bluemix.net:8443";
$port = 50000;

$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;" . "HOSTNAME=$hostname;PORT=$port;PROTOCOL=TCPIP;UID=$user;PWD=$password;";



$conn = db2_connect($conn_string, '', '');

if ($conn) {
    echo "Connection succeeded.";
    db2_close($conn);
}
else {
    echo "Connection failed.";
}
