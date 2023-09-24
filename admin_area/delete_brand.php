<?php 
if($_GET['delete_brand']){
    $delete_id=$_GET['delete_brand'];
    echo $delete_id;

    $delete_brand="Delete from `brands` where brand_id='$delete_id'";
    $result_brand=mysqli_query($con,$delete_brand);
    if($result_brand){
        echo "<script>alert('Brand has been Delete successfully')</script>";
        echo "<script>window.open('./index.php?view_brand','_self')</script>";
    }
}

?>