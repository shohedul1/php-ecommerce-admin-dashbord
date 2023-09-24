<?php 
if($_GET['delete_categories']){
    $delete_id=$_GET['delete_categories'];
    //echo $delete_id;

    $delete_categories="Delete from `categories` where category_id='$delete_id'";
    $result_categories=mysqli_query($con,$delete_categories);
    if($result_categories){
        echo "<script>alert('Categories has been Delete successfully')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }
}

?>