<?php
    session_start();
    include("db_connection.php");
    $user_id = $_SESSION['user']['id_user'];
    if (!isset($_SESSION['user'])) {
        header('location:login.php');
    }
    if(isset($_POST['add_to_cart'])){

        $id_produit = $_POST['id_produit'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['quantite'];

        $select_cart = mysqli_query($conn, "SELECT * FROM `panier` WHERE nom = '$product_name' AND id_user = '$user_id'") or die('query failed');

        if(mysqli_num_rows($select_cart) > 0){
            $message[] = 'product already added to cart!';
        }else{
            mysqli_query($conn, "INSERT INTO `panier`(id_user, nom, prix, image, quantite) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
            $message[] = 'product added to cart!';
        }

};
header("location:".$_SERVER['HTTP_REFERER']);

?>