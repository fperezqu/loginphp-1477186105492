<?php

require('ConexionDB.php');
$tbl_name="MEMBERS";

echo "1<br>";

$conn = db2_connect($conn_string, '', '');
if ($conn) {
    
    $sql="SELECT * FROM $tbl_name";
    $stmt = db2_prepare($conn, $sql);
    $result = db2_execute($stmt);
    
    $row = db2_fetch_object($result);
    echo $row->USERNAME;
    
?>
