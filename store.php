<?php
  session_start();
  include"inc/function.php";
   $description=getAllDesc();
   $produit=getAllProd();



   
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
    <title>store</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0;padding: 0; background-color: #ffffff;">

<?php
    include"inc/header.php";
?>

<div class="mt-10 ml-4 bg-gray-100 mx-2 my-2">
        <ul class="breadcrumb breadcrumb--left ">
            <li class="breadcrumb__item ">
                <a href="home.php" class="text-red-400" >Home</a>
            </li>
            <li class="breadcrumb__item">
                <a href="About.php" class="text-red-400">About</a>
            </li>
        </li>
        
        <li class="breadcrumb__item breadcrumb__item--active">
            <a href="#" class="text-gray-700">Store </a>
        </li>
        </ul>
    </div>  

    <div>
        <div class=" py-2">
            <h2 class=" text-red-400 u-text-center mt-10"><i>Notre produits</i></h2>
        </div>
    </div>


    <div class="row"> 
        <div class="row level pl-3">
            <div class="col-lg-6">
                <div class="col-xs-9 level-item input-control">
                    <p class="mb-8">Prix:</p>
                    <input type="range" id="volume" name="volume" min="0" max="11" />
                    <label for="volume"> 1$-95$</label>
                </div>
            </div>
            
        </div>
        <div class="row level">
            <div class="col-xs-5 level-item">
                <p class="m-0">Catégorie:</p>
                <div class="col-xs-9 level-item input-control">
                    <select class="select" placeholder="Choose one">

                        <?php
                        foreach($categorie as $val){

                    ?>
                    
                        <option><a href="home.php?id=<?php echo $val['num'] ; ?>"> <?php echo $val['nom'] ; ?></a></option>
                    <?php } ?>
                    </select>
                </div>
            </div>

        </div>


    </div>
      

    <div class="grid grid-cols-4 u-gap-10 mr-20  ml-20 text-gray-700 u-text-center">
    
    <?php  
             foreach($produit as $val){
               ?>

    <a href="<?php echo 'product.php?id_product=' . $val['id_product'] ?>" class="border-red-300 text-red-400 ">
        <figure class="fig"><img class="bg-transparent" src="images/<?php echo $val['image']; ?>">
            <h5 class="text-dark"><?php echo $val['nom']; ?></h5>
            <p class="price"><del><?php echo $val['ancien_prix']. " DH"; ?></del> &mdash; <?php echo $val['prix']." DH"; ?></p>
        </figure></a>
<?php  }  ?>

   




    </div>
    <div class="u-center mt-8" >
        <div class="pagination">
            <div class="pagination-item short"><a href="!#">&lt;</a></div>
            <div class="pagination-item short selected"><a href="!#">1</a></div>
            <div class="pagination-item short"><a href="!#">2</a></div>
            <div class="pagination-item short"><a href="!#">3</a></div>
            <div class="pagination-item short"><a href="!#">4</a></div>
            <div class="pagination-item short"><a>...</a></div>
            <div class="pagination-item short"><a href="!#">13</a></div>
            <div class="pagination-item short"><a href="!#">&gt;</a></div>
        </div>
    </div>

      
<?php
    include"inc/footer.php";
?>

</body>
</html>
