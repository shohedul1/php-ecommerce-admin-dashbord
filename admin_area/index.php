<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">


            <!-- first child -->
            <nav class="navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <img src="../images/logo.png" alt="" class="logo rounded-circle">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="nav-item">
                            <a href="#" class="nav-link">Welcome guest</a>
                        </ul>
                    </nav>
                </div>
            </nav>


            <!-- second child -->
            <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
            </div>

            <!-- third child -->
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="p-3">
                        <a href="#"><img src="../images/pineapplejuice.jpg" alt="" class="admin_image"></a>
                        <p class="text-light text-center">Admin Name</p>
                    </div>
                    <div class="button text-center">
                        <button class="my-1 px-1 border-0"><a href="insert_product.php" class="nav-link px-3 text-light bg-info my-1">Insert Product</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">View Products</a></button>
                        <button class="my-1 px-1 border-0"><a href="index.php?insert_category" class="nav-link px-3  text-light bg-info my-1">Insert Categories</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">View Categories</a></button>
                        <button class="my-1 px-1 border-0"><a href="index.php?inser_brand" class="nav-link px-3  text-light bg-info my-1">Insert Brands</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">View Brands</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">All orders</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">All Payments</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">List userts</a></button>
                        <button class="my-1 px-1 border-0"><a href="" class="nav-link px-3  text-light bg-info my-1">Logout</a></button>
                    </div>
                </div>

            </div>

            <!-- fourth child -->
            <div class="container my-3">
                <?php 
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }
                if(isset($_GET['inser_brand'])){
                    include('insert_brands.php');
                }
                ?>
            </div>


            <!-- latt-child -->
            <div class="bg-info p-3 text-center position-absolute bottom-0">
            <p>All right reserved @ Designed by Khanam-2022</p>
            </div>


    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>