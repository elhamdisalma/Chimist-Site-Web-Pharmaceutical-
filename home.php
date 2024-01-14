<?php
  session_start();
include"inc/function.php";
   $description=getAllDesc();
   $produit=getAllProd();

   if(isset($_POST['recherche'])){
    if(!empty($_POST['search'])){
     $produit=getProdN($_POST['search']);     }
    else {
     $produit=getAllProd();
      
    }
  } 

   
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
    <title>Home Page</title>
    </head>
<body style="font-family: Arial, sans-serif; margin: 0;padding: 0; background-color: #f8ecf4;">
<?php
    include"inc/header.php";
?>

<div class="bg-image">
        <div style="position: relative;">
            <h1 class=" text-gray-000 " style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);">WELCOME TO CHEMIST</h1>
           <a href="about.php"> <button class=" bg-gray-000 border-pink-300 text-pink-700 btn--lg font-bold" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">About Us</button> </a>
            <img class="w-80p w-50p-sm w-auto-md" src="images/img5.jpg" alt="Image description"/>
        </div>
    </div>



    <div>
        <div class=" py-2">
            <h2 class=" text-red-400 u-text-center" style="margin-top: 40px;"><u><i>Popular Products</i></u></h2>
        </div>
    </div>
      

    <div class="grid grid-cols-4 u-gap-4 m-8 text-gray-700 u-text-center ">
    <?php  
             foreach($produit as $val){
    ?>
    <div class="card hover-grow grid-c-1 max-w-xs " >
        <div class="card__container ">
            <div class="card__image "><img src="images/<?php echo $val['image']; ?>"></div>
            <div class="card__title-container">
                <p class="title"><?php echo $val['nom']; ?></p>
            </div>
        </div>
        <div class="content">
            <p><code class="text-red-400"><?php echo $val['nom']; ?></code>:<?php echo $val['short_desc']; ?></p>
        </div>
        <div class="card__action-bar u-center">
        <a href="<?php echo 'product.php?id_product=' . $val['id_product'] ?>" class="btn card btn-animated bg-red-200 border-red-300 text-white  hover-grow   " style="background: linear-gradient(to right, #f8d3c9, #f2b6a5);">Afficher</a>
        </div>
    </div>
 <?php 
   } 
 ?>



    </div>



<div class="grid u-text-center  bg-gray-000 py-4   ">

        <div class="grid-c-7 py-4 px-12" style="">
        
            <h3 class=" text-red-400 u-center"><b>The Importance of Prevention</b> </h3>
            <p class="text-xs  u-center m-2 ">Cancer prevention relies on informed lifestyle choices,
                    including a healthy diet, regular physical activity, and early screening tests. 
                    Investing in prevention today is a significant step towards a future without cancer.</p>
            <div class="u-text-center">
            <a  class="btn card btn-animated bg-red-200 border-red-300 text-white   hover-grow mt-2 " style="background: linear-gradient(to right, #f8d3c9, #f2b6a5);" href="https://www.contrelecancer.ma/ar/don#:~:text=%D8%A7%D9%84%D8%AA%D8%B3%D8%AC%D9%8A%D9%84%20%3A%20%D9%8A%D8%B1%D8%AC%D9%89%20%D8%B2%D9%8A%D8%A7%D8%B1%D8%A9%20%D9%85%D9%88%D9%82%D8%B9%20%D9%85%D8%A4%D8%B3%D8%B3%D8%A9,%D8%A7%D9%84%D8%AE%D8%A7%D8%B5%20%D9%84%D8%A3%D8%AC%D9%84%20%D8%A7%D8%B3%D8%AA%D9%83%D9%85%D8%A7%D9%84%20%D9%85%D8%B3%D8%B7%D8%B1%D8%A9%20%D8%A7%D9%84%D8%AA%D8%B3%D8%AC%D9%8A%D9%84" >Donate</a>
            </div>
        </div> 
        

        <div class="grid-c-5" >
            <img class="h-32 w-60p u-center" src="images/cancer.jpg" alt="Image description" style="border-radius: 10px 10px 200px 200px; border:solid #262323; " /> 
        </div>
</div>





    <div class="bg-red-100" style="background-color: #f9c9d9; border: 6px solid #fabfbf; padding: 20px;">
        <h3 class=" text-red-400 u-center"><b>POPULAR PRODUCTS </b> </h3>
      <div class=" grid grid-cols-2 mx-24 my-6 u-gap-12">
        <div class="">
            
        <img src="images/product_01.png" class="w-100p max-w-60p h-32 u-shadow-lg" style="background-color: white; border-radius: 122px 0px 122px 0px;">
        <h5 class=" u-left mt-5">Bioderma</h5>
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, sit dolores? Possimus modi, 
            quaerat soluta accusamus, omnis consequatur odit dicta officiis,
             ducimus explicabo consequuntur molestiae id fuga exercitationem unde delectus?</p>
      
        </div>
      
        <div class="">
            <h5 class=" u-left">Chanca biedra</h5>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, sit dolores? Possimus modi, 
            quaerat soluta accusamus, omnis consequatur odit dicta officiis,
             ducimus explicabo consequuntur molestiae id fuga exercitationem unde delectus?</p>
        <img src="images/product_02.png" class="w-100p max-w-60p h-32 mt-5 u-shadow-lg mx-8" style="background-color: white; border-radius: 122px 0px 122px 0px;">
        </div>
    </div>
    </div>

<div>
    <h2 class="py-2 text-red-400 u-text-center mt-5"><u><i>Testimonials</i></u></h2>
    <div class="grid grid-cols-3 u-gap-16 m-16">
        <div>
            <div class="avatar"><img src="images/avatar1.jpg" alt="avatar"></div>
            <p><i>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Molestias dolore illum est quidem enim, at sapiente aute"
            </i></p>
        </div>

        <div>
            <div class="avatar"><img src="images/avatar2.jpg" alt="avatar"></div>
            <p><i>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Molestias dolore illum est quidem enim, at sapiente aute"
            </i></p>
        </div>

        <div>
            <div class="avatar"><img src="images/avatar3.jpg" alt="avatar"></div>
            <p><i>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Molestias dolore illum est quidem enim, at sapiente aute"
            </i></p>
        </div>

    </div>
</div>



<div class="b1">
    
    <div class="grid grid-cols-2 u-gap-2 bg-red-200 " >
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
      
</body>
</html>
