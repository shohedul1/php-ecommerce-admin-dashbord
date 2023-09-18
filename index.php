<?php 
include('includes/connect.php');
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Total Price:100/-</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>





            <!-- second child -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </nav>

            <!-- third child -->
            <div class="bg-light">
                <h3 class="text-center">Hidden Store</h3>
                <p class="text-center">Communications is at the heart of e-commeerce and community</p>
            </div>


            <!-- fourth child -->
            <div class="row">
                <div class="col-md-10">
                    <!-- products -->
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div id="image-card">
                                <img src="./images/dairy1.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>   
                        <div class="col-md-4  mb-2">
                            <div class="card">
                                <div id="image-card">  
                                <img src="./images/apple.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4  mb-2">
                            <div class="card">
                                <div id="image-card">  
                                <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div id="image-card"> 
                                <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div id="image-card"> 
                                <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div id="image-card">
                                <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>   
                    </div>    
                </div>
                <div class="col-md-2 bg-secondary p-0">
                    <!-- Brands to displayed --> 
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                        </li>
                        <?php 
                        
                        $select_brands="Select * from `brands`";
                        $result_brands=mysqli_query($con,$select_brands);
                        while($row_data=mysqli_fetch_assoc($result_brands)){
                            $brand_title=$row_data['brand_title'];
                            $brand_id=$row_data['brand_id'];     
                        ?>
                        <li class="nav-item">
                            <a href="index.php?brand=<?php echo $brand_id; ?>"class="nav-link text-light"> <?php echo $brand_title; ?></a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                    <!-- categories to displayed --> 
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                        </li>
                        <?php 
                        
                        $select_category="Select * from `categories`";
                        $result_category=mysqli_query($con,$select_category);
                        while($row_data=mysqli_fetch_assoc($result_category)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];     
                        ?>
                        <li class="nav-item">
                            <a href="index.php?category=<?php echo $category_id;?>" class="nav-link text-light"><?php echo $category_title; ?></a>
                        </li>
                        <?php } ?>
                    </ul>

                    
                </div>
            </div>



        <!-- latt-child -->
            <div class="bg-info p-3 text-center">
            <p>All right reserved @ Designed by Khanam-2022</p>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>