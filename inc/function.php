<?php
    function conn(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=chimist','root','');
            
            
          } catch(PDOException $e) {
            die("La connexion à la base a échoué ".
        
        "pour la raison suivante: ".$e->getMessage());
        
        }
        return $conn;


    }

    function getAllDesc(){
   
        $conn=conn();
     $requet="SELECT * FROM description ";
     $reponse=$conn->query($requet);
     $description=$reponse->fetchAll();
        
       return $description;
        
       }

       function getAllProd(){
        $conn=conn();
        $requet="SELECT * FROM product ";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetchAll();
           
          return $produit;

      }

      function getProdId($id){
        $conn=conn();
        $requet="SELECT * FROM product WHERE id_product = $id";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetch();
           
          return $produit;

       }

       function getProdRef($ref){
        $conn=conn();
        $requet="SELECT * FROM product WHERE id_product = $ref";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetch();
           
          return $produit;

       }

       function getProdN($prod){
        $conn=conn();
        $requet="SELECT * FROM product WHERE nom LIKE '%$prod%' ";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetchAll();
           
          return $produit;

       }



       function getAllCat(){
   
        $conn=conn();
        $requet="SELECT * FROM categorie ";
        $reponse=$conn->query($requet);
        $categorie=$reponse->fetchAll();
        
          return $categorie;
        
       }




    




?>