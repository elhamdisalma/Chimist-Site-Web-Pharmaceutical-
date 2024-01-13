<?php

session_start();
include("db_connection.php");
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

$remove_id = $_POST['id_produit'];
mysqli_query($conn, "DELETE FROM `panier` WHERE id = '$remove_id'") or die('query failed');
header("location:".$_SERVER['HTTP_REFERER']);
?>