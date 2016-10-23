<?php
$database = "BLUDB";
$user = "dash5518";
$password = "z2c95D4rk7pT";
$hostname = "dashdb-entry-yp-dal09-10.services.dal.bluemix.net";
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
