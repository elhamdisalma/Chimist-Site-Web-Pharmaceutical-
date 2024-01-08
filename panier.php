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
    <link rel="stylesheet" href="style.css">
    <title>Cirrus</title>
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
            <a href="#" class="text-gray-700">Panier</a>
        </li>
        </ul>
    </div>     


<div class="my-8 mx-8 bg-gray-100 u-shadow-xl"  style="border: 3px solid #e6ccd0; padding: 20px;">
    <table class="table bordered " >
        <thead>
            <tr>
                <th><abbr title="Title1">Image</abbr></th>
                <th><abbr title="Title2">Product</abbr></th>
                <th><abbr title="Title3">Price</abbr></th>
                <th><abbr title="Title4">Quantity</abbr></th>
                <th><abbr title="Title5">Total</abbr></th>
                <th><abbr title="Short">Remove</abbr></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><img src="images/product_02.png" class="u-center" style="height: 40%; width: 40%;"></th>
                <td>Ibuprofen</td>
                <td>$55.00</td>
                <td><input type="number" value="1" class="input--sm w-12 u-center"  /></td>
                <td>$49.00</td>
                <td><input type="button" value="X" class="input--xs w-12 bg-red-200 u-center" style="width: 15%;" /></td>
            </tr>
            <tr>
                <th><img src="images/product_01.png" class="u-center" style="height: 40%; width: 40%;"></th>
                <td>Bioderma</td>
                <td>$49.00</td>
                <td><input type="number" value="1" class="input--sm w-12 u-center"  /></td>
                <td>$49.00</td>
                <td><input type="button" value="X" class="input--xs w-12 bg-red-200 u-center"  /></td>
            </tr>


        </tbody>
    </table>
</div>

<div class="grid grid-cols-2 my-8 mx-8 font-bold u-gap-10">
    <div>
    <div class="grid grid-cols-2 u-gap-3"> 
        <div class="btn bg-red-200 u-center w-100p-md text-red-400 border-gray-200 ">Update Cart</div>
        <div class="btn bg-white-100 u-center w-100p-md text-red-400 border-red-400">Continue Shopping</div>
    </div>

    <div class=" my-4">
        <div class="text-gray-800"><h4> Coupon</h4></div>
        <div><p class="text-gray-600">Enter your coupon code if you have one.</p></div>

        <div class="grid grid-cols-3 u-gap-3">
        <input type="text" placeholder="Coupon Code" class="grid grid-c-2"/>
        <div class="btn bg-red-200 u-center w-100p-md text-red-400 border-red-400 border-red-400">Apply Coupon</div>
        </div>
    </div>
    </div>
    <div class="ml-24">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="u-text-right"><abbr title="Title1">CART TOTALS</abbr></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th class="u-text-left">Subtotal</th>
                        <td>$230.00</td>
                    </tr>
                    <tr>
                        <th class="u-text-left">Total</th>
                        <td>$230.00</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="btn bg-red-200 u-center w-100p-md text-red-400 border-red-400 border-red-400">Procceed To Checkout</div>

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
      





    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
  
    <script src="js/main.js"></script>
</body>
</html>