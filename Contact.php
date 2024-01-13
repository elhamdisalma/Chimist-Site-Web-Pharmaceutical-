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
    <title>Contact</title>
    </head>
<body style="font-family: Arial, sans-serif; margin: 0;padding: 0; background-color: #f3eeee;">

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
            <a href="#" class="text-gray-700">Contact </a>
        </li>
        </ul>
    </div>  


    <h2 class="py-2 text-red-400" style="text-align: center; margin-top: 40px;"><i>Get In Touch</i></h2>
    
<div class="bg-red-100 my-5 mx-5 text-red-400 font-bold u-shadow-xl" style="border: 3px solid #e6ccd0; padding: 20px;">
        <div class="grid grid-cols-2 u-gap-4">
            <div>
                <label>First Name</label><br>
                <input type="text" placeholder="Your first name ..."/>
            </div>
            <div>
                <label>Last Name</label><br>
                <input type="text" placeholder="Your last name ..."/>
            </div>
        </div>

        <div class="grid grid-cols-2 u-gap-4">
            <div>
                <label>Email</label><br>
                <input type="text" placeholder="example@.com ..."/>
            </div>
            <div>
                <label>Subject</label><br>
               <input type="url" placeholder="Something ..."/>
            </div>
        </div>

        <div class="grid grid-cols-1">
            <label>Message<br>
            <textarea></textarea>
            <div type="submit" class="btn btn-animated bg-red-200 border-red-300 text-red-400 btn-sm"> SEnd Message </div>
        </div>

</div>   



<div class="bg-red-200 container">
    
<div>

    <div class="mx-8 my-8"><h5 class="text-gray-800">Offices</h5></div>
    <div class="grid grid-cols-3 u-gap-10 my-8 mx-4 ">
        
        <div class=" card bg-gray-000">
            <h5 class="text-gray-800 mx-2 my-2"> New York  </h5>
            <p class="text-gray-600 mx-2"> 203 Fake St. Mountain View, San Francisco, California, USA</p>
        </div>
        <div class="card bg-gray-000 ">
            <h5 class="text-gray-800 mx-2 my-2"> London  </h5>
            <p class="text-gray-600 mx-2"> 203 Fake St. Mountain View, San Francisco, California, USA</p>
        </div>
        <div class="card bg-gray-000">
            <h5 class="text-gray-800 mx-2 my-2"> Rabat  </h5>
            <p class="text-gray-600 mx-2"> 203 Fake St. Mountain View, San Francisco, California, USA</p>
        </div>

    </div>
</div>
</div>






<?php
    include"inc/footer.php";
?>
      
</body>
</html>
