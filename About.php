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
    <title>About</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0;padding: 0; background-color: #f8ecf4;">

<?php
    include"inc/header.php";
?>





    <div class="bg-image">
        <div style="position: relative;" class="font-bold">

            <h1 class=" text-pink-700 " style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;"><b>About Us</b></h1>
            <a href="home.php" class="btn btn--lg bg-gray-000 u-center  text-pink-700 border-pink-300 " style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);">Acceuil</a>
            <div>
                <img class="h-10p" src="images/about.jpg" alt="Image description" />
             </div>
        </div>
    </div>

     
    

    <div class="grid u-gap-2 u-text-center font-bold pt-20 pl-12 pr-10">


        <div class="grid-c-7 grid-r-4 bg-transparent pr-10" style="">
            <img class="h-80p w-100p" src="images/img2.jpg" alt="Image description" /> 
        </div>
        <div class="grid-c-5 grid-r-6 bg-transparent" style="">
            <h2 class="text-black">How We Started</h2>
            <p>Notre histoire débute avec une passion commune pour la santé et le bien-être. Fondée en 2024,
                 CHIMIST a été créée dans le but clair de rendre les soins de santé accessibles,
                Malgré nos modestes débuts, notre équipe partageait un engagement inébranlable envers la qualité et le service personnalisé. Chaque étape de notre parcours a été caractérisée par un dévouement constant à l'excellence.  
                Merci de faire partie de notre histoire, et nous sommes impatients de continuer à grandir ensemble.</p>
        </div> 
    </div>

    <div class="grid u-gap-2 u-text-center font-bold pt-20 pl-12 pr-10  pb-10">


        <div class="grid-c-5 grid-r-6 bg-transparent" style="">
            <h2 class="text-black">We Are Trusted Company</h2>
            <p class="text-black">En tant que société de confiance, nous nous engageons à offrir des produits pharmaceutiques de qualité et un service exceptionnel.
                 La confiance que nos clients placent en nous est le fondement même de notre succès. Chez [Nom de Votre Pharmacie],
                 nous continuons à mériter cette confiance en maintenant des normes rigoureuses de qualité, de sécurité et de satisfaction client.</p>
        </div>
        <div class="grid-c-7 grid-r-4 bg-transparent u-round-xs pl-20" style="">
            <img class="h-100p w-100p" src="images/trust.jpg" alt="Image description" /> 
        </div>

    </div>














    <div>
        <h2 class="py-2 text-red-400" style="text-align: center; margin-top: 40px;"><i>The Team</i></h2>
        <div class="grid grid-cols-2 u-gap-16 m-16">
            <div class="grid-c-1">
                <div class="avatar"><img src="images/salma.jpg" alt="avatar"></div>
                <p><i>"Salma El Hamdi apporte une passion dynamique et un engagement envers l'innovation en tant qu'étudiante en M-SID au sein de notre équipe.
                     Son dévouement à l'apprentissage continu et son intérêt pour les technologies de la santé font d'elle un membre précieux de CHIMIST. "
                </i></p>
            </div>
    
            <div class="grid-c-1">
                <div class="avatar"><img src="images/hajar.jpg" alt="avatar"></div>
                <p><i>"Hajar Hanaoui apporte une passion dynamique et un engagement envers l'innovation en tant qu'étudiante en M-SID au sein de notre équipe.
                     Son dévouement à l'apprentissage continu et son intérêt pour les technologies de la santé font d'elle un membre précieux de CHIMIST. "
                </i></p>
            </div>
    

    
        </div>
    </div>


    <?php
    include"inc/footer.php";
?>
      
</body>
</html>
