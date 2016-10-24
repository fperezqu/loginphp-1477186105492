<?php

//Include DB conexion
require('ConexionDB.php');

$tbl_name="MEMBERS"; // Table name

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

echo "1<br>";

// Connect to BLUDB
$conn = db2_connect($conn_string, '', '');
if ($conn) {

    // Prepare, execute SQL and iterate through resultset
    $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

    $stmt = db2_prepare($conn, $sql);
    $result = db2_execute($stmt);

//$result=db2_query($sql);
echo "2<br>";


// DB2_num_row is counting table row
$count=db2_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

    if($count==1){
    session_register("myusername");
    session_register("mypassword");
    header("location:login_success.php");
    }
    else {
    echo "Wrong Username or Password";
    }
echo "3<br>";

    db2_close($conn);
}else{
    echo "sin conexion";
}
    
echo "4<br>";
?>
