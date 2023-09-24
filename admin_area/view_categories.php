

<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-4">
    <thead class="bg-info">
        <tr class="text-center">
            <th>SIno</th>   
            <th>Category title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
    <?php 
        $select_cat="Select * from `categories`";
        $result=mysqli_query($con,$select_cat);
        $namber=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id =$row['category_id'];
            $category_title=$row['category_title'];
            $namber++;
            ?>
            <tr class='text-center'>
            <td><?php echo $namber?></td>
            <td><?php echo $category_title;?></td>
            <td><a href='index.php?edit_categories=<?php echo $category_id;?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='index.php?delete_categories=<?php echo $category_id;?>' type="button" class="text-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='fa-solid fa-trash'></i></a></td>
            </tr> 
        <?php } ?> 
    
        
    </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Are you sure you want to delete this?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="index.php?view_categories" class="text-light text-decoration-none">No</a></button>
                <button type="button" class="btn btn-primary"><a href='index.php?delete_categories=<?php echo $category_id;?>' class="text-light text-decoration-none">Yes</a></button>
            </div>
        </div>
    </div>
</div>


