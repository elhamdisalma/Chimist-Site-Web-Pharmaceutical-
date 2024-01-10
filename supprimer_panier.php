<?php
session_start();
include("db_connection.php");
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

$id_produit = $_POST['id_produit'];
var_dump($id_produit);

$id_utilisateur = $_SESSION['user']['id_user'];
unset($_SESSION['panier'][$id_utilisateur][$id_produit ]);
header("location:".$_SERVER['HTTP_REFERER']);


?>