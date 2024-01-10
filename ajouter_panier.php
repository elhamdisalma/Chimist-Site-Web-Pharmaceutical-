<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}
$id_produit = $_POST['id_produit'];
$qty = $_POST['quantite'];
$id_utilisateur = $_SESSION['user']['id_user'];


if (!isset($_SESSION['panier'][$id_utilisateur])) {
    $_SESSION['panier'][$id_utilisateur] = [];
}

if($qty == 0){
    unset($_SESSION['panier'][$id_utilisateur][$id_produit]);
}else{
    $_SESSION['panier'][$id_utilisateur][$id_produit] = $qty;
}

header("location:".$_SERVER['HTTP_REFERER']);

?>
