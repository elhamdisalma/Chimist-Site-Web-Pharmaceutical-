<?php
  session_start();
include"inc/function.php";
   $description=getAllDesc();
   $produit=getAllProd();

  $ic=$_GET['id_product']; 
  //var_dump($ic);
   if(isset($_GET['id_product'])){
    $produitR= getProdRef($_GET['id_product']);
    
 }

 $id_produit = $produitR['id_product']
  
 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Cirrus-Start-main/." rel="" >  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;"/>
    <link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous" ></script> 
    <title>Product</title>
    </head>
<body  style="font-family: Arial, sans-serif; margin: 0;padding: 0; background-color: #f3eeee;">
<?php
    include"inc/header.php";
?>
    <div class="mt-10 ml-4 bg-gray-200 mx-2 my-2">
        <ul class="breadcrumb breadcrumb--left ">
            <li class="breadcrumb__item ">
                <a href="home.html" class="text-red-400" >Home</a>
            </li>
            <li class="breadcrumb__item">
                <a href="About.html" class="text-red-400">About</a>
            </li>
        </li>
         
        <li class="breadcrumb__item breadcrumb__item--active">
            <a href="#" class="text-gray-700"><?php echo $produitR['nom']; ?> </a>
        </li>
        </ul>
    </div>     


<div class="grid grid-cols-2 u-gap-2">

    <div class="">
        <div class="mx-8 my-8 h-80p-md bg-gray-100  " style="border: 2px solid #e7e0e5; padding: 20px;">
    <img src="images/<?php echo $produitR['image']; ?>" class="my-8 mx-8 h-80p">
         </div>
    </div>
    <div class="mr-8 ml-4 my-8" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
        <h4 class="text-red-400"><?php echo $produitR['nom']; ?></h4>
    <p><?php echo $produitR['long_desc']; ?></p>

          <p class="text-gray-700"><del> <?php echo "$" .$produitR['ancien_prix']; ?></del>  <strong class="text-red-400 text-xl "> <?php echo "$" .$produitR['prix']; ?></strong></p>

    
          
    <!-- ajouter au panier button -->
    <div class="mt-5">
        <form action="add_to_cart.php" method="POST">
            <input type="number" value="1" name="quantite" class="input--sm w-12 "  />
            <input type="hidden" name ="id_produit" value="<?php echo $id_produit;?>"> 
            <input type="hidden" name="product_image" value="<?php echo$produitR['image_product']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $produitR['nom']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $produitR['prix']; ?>">
            <input type="submit" class="btn btn-animated bg-red-200 border-red-300 text-red-400 btn--lg " name="add_to_cart" value="Add To Cart">
        </form>   
    </div>
    <div class="btn-group btn-group-fill border-red-300">
        <button class="bg-red-200 text-red-400">Ordering Information</button>
        <button class="bg-gray-000 text-red-400">Specifications</button>
    </div>

        <table class="table ">
            <thead>
                <tr>
                <?php 
                foreach($description as $valC){ 
                    $keyC=array_keys($description[0])
                    
                    ?>
                
                    <th><abbr title="Title1"><?php echo $keyC[2]; ?></abbr></th>
                    <th><abbr title="Title2"><?php echo $keyC[4]; ?></abbr></th>
                    <th><?php echo $keyC[6]; ?></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                       if($produitR['id_desc_prod']==$valC['id_description_prod']){ ?>


                <tr>
                    <th><?php echo $valC['materiel']; ?></th>
                    <td class="u-text-left"><?php echo $valC['description']; ?></td>
                    <td><?php echo $valC['packaging']; ?></td>
                </tr>
                <tr>
                    <th><?php echo $valC['materiel']; ?></th>
                    <td class="u-text-left"><?php echo $valC['description']; ?></td>
                    <td><?php echo $valC['packaging']; ?></td>
                </tr>
                <tr>
                    <th><?php echo $valC['materiel']; ?></th>
                    <td class="u-text-left"><?php echo $valC['description']; ?></td>
                    <td><?php echo $valC['packaging']; ?></td>
                </tr>
            </tbody>
<?php  }                 
}  ?>         
        </table>

    </div>

</div>

</div>



<div class="b1">
    
    <div class="grid grid-cols-2 u-gap-2 bg-red-200 u-opacity-90" >
        <div>
            <div class="card my-6 mx-6 hover-grow h-32" style="max-width: 100%;" >
                <div class="card__container">
                    <div class="card__image"><img src="images/bg_1.jpg"></div>
                    <h2>Pharma Products</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.</p>
                </div>
            </div> 
        </div>
        <div>
            <div class="card my-6 mx-6 hover-grow h-32" style="max-width: 100%;" >
                <div class="card__container">
                    <div class="card__image"><img src="images/bg_2.jpg"></div>
                    <h2>Rated by Experts</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.</p>
                </div>
            </div> 
        </div>

    </div>
</div>


<?php
    include"inc/footer.php";
?>
      





    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
  
    <script src="js/main.js"></script>
</body>
</html>