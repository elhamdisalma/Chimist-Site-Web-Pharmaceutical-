<?php
    include("db_connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['user_name'];
        $email =  $_POST['email'];
        $password = $_POST['pass'];
        
        $sql="select * from user where name='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from user where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "insert into user(name, email, password) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: login.php");
                }
            
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="login.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="login.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>


<?php

    session_start();
    include("db_connection.php");
    if (isset($_POST['Signin'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $sql = "select * from user where email = '$email'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
       
        
        if($row){ 

            
            if(password_verify($password, $row["password"])){

                $_SESSION['user'] = $row; 
                header("Location: home.php");
            }
            else{
               echo '<script>
                    window.location.href="login.php";
                    alert("Login ou password incorrectes.");
                </script>';
                
            } 
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
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>

    <body>
        <div class="container" id="container">
        <!-- hada dyal authentification -->
            <div class="form-container sign-in"> 
                <form action="login.php" method="POST">
                    <h1>Sign In</h1>
                        <div class="input-control">
                            <input type="email" class="input-contains-icon input-contains-icon-right input--sm" placeholder="Email" name="email" />
                            <span class="icon"><i class="fa fa-wrapper fa-envelope"></i></span>
                        </div>
                        <div class="input-control">
                            <input type="password" class="input-contains-icon input-contains-icon-right input--sm" placeholder="Password" name="pass" />
                            <span class="icon"><i class="fa fa-wrapper fa-lock"></i></span>
                        </div>
                         <button class="outline border-pink-300 text-pink-700 font-bold" name ="Signin">Sign In</button>
                </form> 
            </div>
            <!-- hada dyal création de compte --> 
            <div class="form-container sign-up">
                <form action="login.php" method="POST">
                    <h1>Create Account</h1>
                    <div class="input-control">
                        <input type="text" class="input-contains-icon input-contains-icon-right input--sm" placeholder="Name" name="user_name"  />
                        <span class="icon"><i class="fa fa-wrapper fa-user"></i></span>
                    </div>
                    <div class="input-control">
                        <input type="email" class="input-contains-icon input-contains-icon-right input--sm" placeholder="Email" name="email"  />
                        <span class="icon"><i class="fa fa-wrapper fa-envelope"></i></span>
                    </div>
                    <div class="input-control">
                        <input type="password" class="input-contains-icon input-contains-icon-right input--sm" placeholder="Password" name="pass"  />
                        <span class="icon"><i class="fa fa-wrapper fa-lock"></i></span>
                    </div>
                    <button class="outline border-pink-300 text-pink-700 font-bold" name ="submit">Sign Up</button>
                </form>
            </div>
             <!-- hna dik li kaybqa tji o tmchi hhh --> 
            <div class="toggle-container">
                <div class="toggle red-600">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal details to use all of site features</p>
                        <button class="outline btn-transparent" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>Register with your personal details to use all of site features</p>
                        <button class="outline btn-transparent" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
       
    
        </div>
        <script src="script.js"></script>
    </body>
</html>