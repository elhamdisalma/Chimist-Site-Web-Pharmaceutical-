<?php
include("db_connection.php");
?>
<div class="header header-fixed u-unselectable header-animated bg-red-200 ">
        <div class="header-brand">
            <div class="nav-item no-hover">
                <a href="home.php"><h6 class="title" >Chimist</h6></a>
            </div>
            <div class="nav-item nav-btn" id="header-btn">
            </div>
        </div>
        <div class="header-nav " id="header-menu" role="button">
            <div class="nav-left">
                <div class="nav-item text-center">
                    <a href="https://github.com/elhamdisalma/projet_web_final">
                        <span class="icon">
                            <i class="fab fa-wrapper fa-github" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="nav-item text-center center">
                    <a href="https://www.instagram.com/salma___elhamdi/">
                        <span class="icon">
                            <i class="fab fa-wrapper fa-instagram" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="nav-item text-center">
                    <a href="https://twitter.com/?lang=fr">
                        <span class="icon">
                            <i class="fab fa-wrapper fa-twitter" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="nav-item has-sub toggle-hover" id="left-dropdown">
                    <a class="nav-dropdown-link">Categories</a>
                    <ul class="dropdown-menu dropdown-animated bg-red-100 u-round-xl" role="menu">
                        <li role="menuitem"><a href="#">First Item</a></li>
                        <li role="menuitem"><a href="#">Second Item</a></li>
                        <li role="menuitem"><a href="#">Third Item</a></li>
                    </ul>
                </div>
            </div>
    
            <div class="nav-right">

                <div class="nav-item">
                    <a href="panier.php"><i class="fa fa-cart-arrow-down"></i>(<?php 

                        if (isset($_SESSION['id_user'])) {
                            

                            $user_id = $_SESSION['id_user'];
                            
                            $select_rows = mysqli_query($conn, "SELECT * FROM `panier` WHERE id_user = '$user_id'") or die('query failed');
                            $row_count = mysqli_num_rows($select_rows);

                            echo $row_count; 
                            }
                        else {
                            echo 0;

                        }
                    
                    
                    ?>)</a>
                </div>
                <div class="nav-item">
                    <a href="login.php"><i class="fa fa-user"></i></a>
                </div>
                <div class="nav-item">
                    <a href="logout.php" onclick="return confirm('Are you sure you want to logout?');" name="logout">logout</a>
                </div>
                <div class="nav-item has-sub toggle-hover" id="right-dropdown">
                    <a class="nav-dropdown-link">Options</a>
                    <ul class="dropdown-menu bg-red-100 u-round-xl" role="menu">
                        <li role="menuitem"><a href="home.php">Acceuil</a></li>
                        <li role="menuitem"><a href="Contact.php">Contact</a></li>
                        <li role="menuitem"><a href="store.php">Store</a></li> 
                        <li role="menuitem"><a href="About.php">About</a></li> 
                    </ul>
                </div>

                <form  action="home.php" method="POST" style="margin-right: 30px; margin-top:10px;" >
                
                <input type="search" placeholder="search ..." class="input--xs form-group-input" name="search"/>
                <button class="btn bg-red-300 border-red-300 text-red-400 btn--xs" type="submit" name="recherche"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
