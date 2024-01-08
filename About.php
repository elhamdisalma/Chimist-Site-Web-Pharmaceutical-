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

    <div class="bg-image">
        <div style="position: relative;">
            <h1 class=" text-gray-000 " style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -160%);">ABOUT US</h1>
            <p class=" text-gray-000 " style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); text-align: center;"><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam consequatur aut repudiandae, tempore reprehenderit nam! Repellendus at,</b></p>
            <button class=" bg-gray-000 border-pink-300 text-pink-700 btn--lg font-bold" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">TRY NOW</button>
            <div>
                <img class="h-10p" src="images/hero_1.jpg" alt="Image description" />
             </div>
        </div>
    </div>

     
    

    <div class="grid u-gap-2 u-text-center font-bold pt-20 pl-12 pr-10">


        <div class="grid-c-8 grid-r-4 bg-transparent pr-10" style="">
            <img class="h-80p w-100p" src="img2.jpg" alt="Image description" /> 
        </div>
        <div class="grid-c-4 grid-r-6 bg-transparent" style="">
            <h2 class="text-black">How We Started</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo
                exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat
                asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
        </div> 
    </div>

    <div class="grid u-gap-2 u-text-center font-bold pt-20 pl-12 pr-10  pb-10">


        <div class="grid-c-4 grid-r-6 bg-transparent" style="">
            <h2 class="text-black">We Are Trusted Company</h2>
            <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo
                exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat
                asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
        </div>
        <div class="grid-c-8 grid-r-4 bg-transparent u-round-xs pl-20" style="">
            <img class="h-100p w-100p" src="img1.jpg" alt="Image description" /> 
        </div>

    </div>














    <div>
        <h2 class="py-2 text-red-400" style="text-align: center; margin-top: 40px;"><i>The Team</i></h2>
        <div class="grid grid-cols-3 u-gap-16 m-16">
            <div class="grid-c-1">
                <div class="avatar"><img src="avatar1.jpg" alt="avatar"></div>
                <p><i>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias dolore illum est quidem enim, at sapiente aute"
                </i></p>
            </div>
    
            <div class="grid-c-1">
                <div class="avatar"><img src="avatar2.jpg" alt="avatar"></div>
                <p><i>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias dolore illum est quidem enim, at sapiente aute"
                </i></p>
            </div>
    
            <div class="grid-c-1">
                <div class="avatar"><img src="avatar3.jpg" alt="avatar"></div>
                <p><i>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias dolore illum est quidem enim, at sapiente aute"
                </i></p>
            </div>
    
        </div>
    </div>


    <?php
    include"inc/footer.php";
?>
      
</body>
</html>
