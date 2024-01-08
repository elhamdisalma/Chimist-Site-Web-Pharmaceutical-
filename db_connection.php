
<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "chimist";

$conn = new mysqli($server_name ,$user_name,$password ,$db_name,3306);
if($conn->connect_error){
    die("Connection failed ".$conn->connect_error);
}

echo ""
?>