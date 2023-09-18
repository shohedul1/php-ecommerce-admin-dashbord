<?php

// including connect file
include("includes/connect.php");

function getproducts(){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            global $con;
            $select_query="Select * from `products` order by rand() LIMIT 0,9";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];   
            $category_id=$row['category_id']; 
            $brand_id=$row['brand_id']; 
            echo "
            <div class='col-md-4 mb-2'>
                <div class='card'>
                    <div id='image-card'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'> $product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-info'>Add to Cart</a>
                        <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>" ;
            }  
        }
    }                  
}

//geting unique categories
function get_unique_categories(){
    if(isset($_GET['category'])){
        global $con;
        $category_id=$_GET['category'];
        $select_query="Select * from `products` where category_id=$category_id ";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];   
        $category_id=$row['category_id']; 
        $brand_id=$row['brand_id']; 
        echo "
        <div class='col-md-4 mb-2'>
            <div class='card'>
                <div id='image-card'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'> $product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'>Add to Cart</a>
                    <a href='#' class='btn btn-secondary'>View more</a>
                </div>
            </div>
        </div>" ;
        }  
    }
}    


//geting unique brands
function get_unique_brands(){
    if(isset($_GET['brand'])){
        global $con;
        $brand_id=$_GET['brand'];
        $select_query="Select * from `products` where brand_id=$brand_id ";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];   
        $category_id=$row['category_id']; 
        $brand_id=$row['brand_id']; 
        echo "
        <div class='col-md-4 mb-2'>
            <div class='card'>
                <div id='image-card'>
                    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'> $product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'>Add to Cart</a>
                    <a href='#' class='btn btn-secondary'>View more</a>
                </div>
            </div>
        </div>" ;
        }  
    }
} 


//displaying brands in sidnabe
function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);           
        while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];  
        echo "
        <li class='nav-item'>
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
        </li>" ;  
        }
    
}


//displaying categories in sidnabe

function getcategory(){
    global $con;
    $select_category="Select * from `categories`";
    $result_category=mysqli_query($con,$select_category);
    while($row_data=mysqli_fetch_assoc($result_category)){
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];     
    echo"
    <li class='nav-item'>
        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
    }
}


