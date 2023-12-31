<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Website using PHP and MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .nav-link{
        position: relative;
        color:black;
    }
    .nav-link:hover{
    color: #00FF7F;
    transition: all 0.4s;
    }
    .nav-link::after{
    position: absolute;
    content: "";
    background-color: #FF00FF;
    height: 3px;
    width: 100%;
    bottom: -5px;
    left: 0;
    scale: 0;
    transform-origin: left;
    transition: all 0.4s;
    }
    .nav-link:hover::after{
    scale: 1;
    }
</style>
<body>
        <!-- navbar -->
        <div class="container-fluid p-0">
            <!-- first child -->
            <nav class="navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <img src="./images/logo.png" alt="" class="logo rounded-circle">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="display_all.php">Product</a>
                        </li>
                        <?php
                        if(isset($_SESSION['username'])){
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='./users_area/profile.php'>My Account</a>
                            </li>";
                        }else{
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='./users_area/user_registration.php'>Register</a>
                            </li>";
                        }
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Total Price: <?php total_cart_price();?>/-</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>
                    </div>
                </div>
            </nav>


            <!-- calling cart function -->
            <?php 
                cart(); 
            ?>

            <!-- second child -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <ul class="navbar-nav me-auto">
                    <?php 
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome Guest</a>
                        </li>";
                    
                    }else{
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                        </li>";
                    }
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/user_login.php'>Login</a>
                        </li>";
                    }else{
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/logout.php'>Logout</a>
                        </li>";
                    }
                    ?>
                </ul>
            </nav>

            <!-- third child -->
            <div class="bg-light">
                <h3 class="text-center">Hidden Store</h3>
                <p class="text-center">Communications is at the heart of e-commeerce and community</p>
            </div>


            <!-- fourth child -->
            <div class="row">
                <!-- display card -->
                <div class="col-md-10">
                    <!-- products -->
                    <div class="row m-1">
                        <!-- fetching.products -->
                        <?php
                            search_product();
                            get_unique_categories();
                            get_unique_brands();
                        ?>
                    </div>    
                </div>
                <!-- sidebar -->
                <div class="col-md-2 bg-secondary p-0">
                    <!-- Brands to displayed --> 
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                        </li>
                        <?php 
                            getbrands();
                        ?>
                        
                    </ul>
                    <!-- categories to displayed --> 
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                        </li>
                        <?php 
                            getcategory();
                        ?>
                    </ul>

                    
                </div>
            </div>



            <!-- latt-child -->
            <!-- include footer -->
            <?php include("./includes/footer.php"); ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>