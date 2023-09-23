
    <h3 class="text-danger mb-4">Deleting Account</h3>
    <form action="" method="post" class="mt-5">
        <div class="form-outlin mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account">
        </div>
        <div class="form-outlin mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Dont't Delete Account">
        </div>
    </form>


    <?php 
    $user_username=$_SESSION['username'];
    if(isset($_POST['delete'])){
        $delete_query="Delete from `user_table` where username='$user_username'";
        $result=mysqli_query($con,$delete_query);
        if($result){
            session_destroy();
            echo "<script>alert('Account Deleted successfully')</script>";
            echo "<script>window.open('../index.php','_self')</script>";

        }
    }

    if(isset($_POST['dont_delete'])){
        echo "<script>window.open('profile.php','_self')</script>";
    }
    
    ?>
