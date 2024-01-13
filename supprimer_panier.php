<?php

session_start();
include("db_connection.php");

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `panier` WHERE id = '$remove_id'") or die('query failed');
}
header("location:".$_SERVER['HTTP_REFERER']);
?>