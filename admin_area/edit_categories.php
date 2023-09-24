<?php 
if(isset($_GET['edit_categories'])){
    $edit_categories=$_GET['edit_categories'];
    //echo $edit_categories;
    $get_categories="Select * from `categories` where category_id ='$edit_categories'";
    $result=mysqli_query($con,$get_categories);
    $row=mysqli_fetch_assoc($result);
    $category_title=$row['category_title'];
   // echo $category_title;
}
if(isset($_POST['edit_cat'])){
    $cat_title=$_POST['category_title'];
    $update_query="update `categories` set category_title='$cat_title' where category_id ='$edit_categories'";
    $result_cat=mysqli_query($con,$update_query);
    if($result_cat){
        echo "<script>alert('Category is been updated successfully')</script>";
        echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }
}
?>

<div class="container mt-3">
    <h1 class="text-center text-success">Edit Categories</h1>
    <form action="" method='post' class="text-center">
        <div class="form-outline mb-4  w-50 m-auto">
            <label for="category_title">Categories title</label>
            <input type="text" name="category_title" class="form-control" id="category_title" required="required" value="<?php echo $category_title; ?>">
        </div>
        <input type="submit" value="Update Categories" class="btn btn-info px-3 mb-3" name="edit_cat">
    </form>
</div>